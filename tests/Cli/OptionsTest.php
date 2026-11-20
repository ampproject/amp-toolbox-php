<?php

namespace AmpProject\Cli;

use AmpProject\Exception\Cli\InvalidArgument;
use AmpProject\Exception\Cli\InvalidCommand;
use AmpProject\Exception\Cli\MissingArgument;
use AmpProject\Tests\PrivateAccess;
use AmpProject\Tests\TestCase;

/**
 * Test the options processing.
 *
 * @covers \AmpProject\Cli\Options
 * @package ampproject/amp-toolbox
 */
class OptionsTest extends TestCase
{
    use PrivateAccess;

    /**
     * Temporary store for global argv data so it can be restored after the test.
     *
     * @var array
     */
    protected $globalArguments;

    /**
     * Sets up the fixture, for example, open a network connection.
     *
     * This method is called before each test.
     *
     * @return void
     */
    protected function set_up() // phpcs:ignore PSR1.Methods.CamelCapsMethodName.NotCamelCaps
    {
        parent::set_up();
        $this->globalArguments = $GLOBALS['argv'];
    }

    /**
     * Tears down the fixture, for example, close a network connection.
     *
     * This method is called after each test.
     *
     * @return void
     */
    protected function tear_down() // phpcs:ignore PSR1.Methods.CamelCapsMethodName.NotCamelCaps
    {
        parent::tear_down();
        $GLOBALS['argv'] = $this->globalArguments;
    }

    /**
     * @dataProvider optionDataProvider
     *
     * @param string $option
     * @param string $value
     * @param string $argument
     */
    public function testOptionVariants(
        $option,
        $value,
        $argument
    ) {
        $options = new Options();
        $options->registerOption('exclude', 'exclude files', 'x', 'file');

        $this->setPrivateProperty($options, 'arguments', [$option, $value, $argument]);
        $options->parseOptions();

        $this->assertEquals($value, $options->getOption('exclude'));
        $this->assertEquals([$argument], $this->getPrivateProperty($options, 'arguments'));
        $this->assertFalse($options->getOption('nothing'));
    }

    /**
     * @return array
     */
    public function optionDataProvider()
    {
        return [
            ['-x', 'foo', 'bang'],
            ['--exclude', 'foo', 'bang'],
            ['-x', 'foo-bar', 'bang'],
            ['--exclude', 'foo-bar', 'bang'],
            ['-x', 'foo', 'bang--bang'],
            ['--exclude', 'foo', 'bang--bang'],
        ];
    }

    public function testSimpleLong2()
    {
        $options = new Options();
        $options->registerOption('exclude', 'exclude files', 'x', 'file');

        $this->setPrivateProperty($options, 'arguments', ['--exclude=foo', 'bang']);
        $options->parseOptions();

        $this->assertEquals('foo', $options->getOption('exclude'));
        $this->assertEquals(['bang'], $this->getPrivateProperty($options, 'arguments'));
        $this->assertFalse($options->getOption('nothing'));
    }

    public function testComplex()
    {
        $options = new Options();

        $options->registerOption('plugins', 'run on plugins only', 'p');
        $options->registerCommand('status', 'display status info');
        $options->registerOption('long', 'display long lines', 'l', false, 'status');

        $this->setPrivateProperty($options, 'arguments', ['-p', 'status', '--long', 'foo']);
        $options->parseOptions();

        $this->assertEquals('status', $options->getCommand());
        $this->assertTrue($options->getOption('plugins'));
        $this->assertTrue($options->getOption('long'));
        $this->assertEquals(['foo'], $this->getPrivateProperty($options, 'arguments'));
    }

    public function testOptionsAfterArguments()
    {
        $options = new Options();
        $options->registerOption('exclude', 'exclude files', 'x', 'file');
        $options->registerOption('force', 'force the operation', 'f');

        $this->setPrivateProperty($options, 'arguments', ['bang', '-x', 'foo', 'baz', '--force', '-', '--', '-x']);
        $options->parseOptions();

        $this->assertEquals('foo', $options->getOption('exclude'));
        $this->assertTrue($options->getOption('force'));
        $this->assertEquals(['bang', 'baz', '-', '-x'], $this->getPrivateProperty($options, 'arguments'));
    }

    /**
     * @dataProvider globalOptionsWithCommandDataProvider
     *
     * @param string[] $arguments
     */
    public function testGlobalOptionsWithCommand($arguments)
    {
        $options = new Options();
        $options->registerOption('no-colors', 'do not use colors');
        $options->registerOption('loglevel', 'minimum log level', 'l', 'level');
        $options->registerCommand('optimize', 'optimize a file');
        $options->registerArgument('file', 'file to optimize', true, 'optimize');

        $this->setPrivateProperty($options, 'arguments', $arguments);
        $options->parseOptions();

        $this->assertEquals('optimize', $options->getCommand());
        $this->assertTrue($options->getOption('no-colors'));
        $this->assertEquals('debug', $options->getOption('loglevel'));
        $this->assertEquals(['file.html'], $this->getPrivateProperty($options, 'arguments'));
    }

    /**
     * @return array
     */
    public function globalOptionsWithCommandDataProvider()
    {
        return [
            'options before command'  => [['--no-colors', '--loglevel', 'debug', 'optimize', 'file.html']],
            'options after command'   => [['optimize', '--no-colors', '-l', 'debug', 'file.html']],
            'options after argument'  => [['optimize', 'file.html', '--no-colors', '--loglevel=debug']],
            'options around argument' => [['--no-colors', 'optimize', 'file.html', '-l', 'debug']],
        ];
    }

    public function testCommandHelp()
    {
        $options = new Options();
        $options->registerCommand('cmd', 'a command');
        $options->registerArgument('file', 'File to load', true);
        $options->registerArgument('optional', 'Optional argument', false);
        $options->registerOption('verbose', 'Use verbose output', 'v');
        $options->registerOption('requiresArg', 'This requires an argument', 'r', 'argument');
        $options->setHelp('Description text');
        $options->useCompactHelp(false);
        $help = $options->help();
        $this->assertStringContainsString('Description text', $help);
        $this->assertStringContainsString('accepts a command as first parameter', $help);
        $this->assertStringContainsString('<file>', $help);
        $this->assertStringContainsString('File to load', $help);
        $this->assertStringContainsString('--verbose', $help);
        $this->assertStringContainsString('-v', $help);
        $this->assertStringContainsString('Use verbose output', $help);
        $this->assertStringContainsString(' <argument>', $help);

        $this->assertStringContainsString("\n\n\n", $help);
        $options->useCompactHelp(true);
        $this->assertStringNotContainsString("\n\n\n", $options->help());

        $options->setCommandHelp('foooooobaar');
        $this->assertStringNotContainsString('accepts a command as first parameter', $options->help());
        $this->assertStringContainsString('foooooobaar', $options->help());
    }

    public function testReadArgumentsFromGlobal()
    {
        $GLOBALS['argv'] = [
            '/usr/bin/amp',
            'optimize',
            '-'
        ];

        $options = new Options();
        $this->assertEquals('amp', $options->getBin());
        $this->assertEquals(['optimize', '-'], $options->getArguments());
    }

    public function testReadArgumentsFromServer()
    {
        unset($GLOBALS['argv']);

        $_SERVER['argv'] = [
            '/usr/bin/amp',
            'optimize',
            '-'
        ];

        $options = new Options();
        $this->assertEquals('amp', $options->getBin());
        $this->assertEquals(['optimize', '-'], $options->getArguments());
    }

    public function testReadArgumentsFromHttpServerVars()
    {
        unset($GLOBALS['argv']);
        unset($_SERVER['argv']);

        $GLOBALS['HTTP_SERVER_VARS'] = [
            'argv' => [
                '/usr/bin/amp',
                'optimize',
                '-'
            ]
        ];

        $options = new Options();
        $this->assertEquals('amp', $options->getBin());
        $this->assertEquals(['optimize', '-'], $options->getArguments());
    }

    public function testReadArgumentsThrowsOnUnreadableArguments()
    {
        unset($GLOBALS['argv']);
        unset($_SERVER['argv']);
        unset($GLOBALS['HTTP_SERVER_VARS']);

        $this->expectException(InvalidArgument::class);
        new Options();
    }

    public function testThrowsOnAlreadyRegisteredCommand()
    {
        $options = new Options();
        $options->registerCommand('foo', 'some foo');
        $this->expectException(InvalidCommand::class);
        $options->registerCommand('foo', 'some foo');
    }

    public function testThrowsOnUnregisteredCommandForArguments()
    {
        $options = new Options();
        $this->expectException(InvalidCommand::class);
        $options->registerArgument('foo', 'add foo', true, 'inexistent-command');
    }

    public function testThrowsOnUnregisteredCommandForOptions()
    {
        $options = new Options();
        $this->expectException(InvalidCommand::class);
        $options->registerOption('foo', 'add foo', 'f', false, 'inexistent-command');
    }

    public function testThrowsOnMultiCharacterShortOptions()
    {
        $options = new Options();
        $options->registerCommand('foo', 'add some foo');
        $this->expectException(InvalidArgument::class);
        $options->registerOption('foo', 'add foo', 'ff', false, 'foo');
    }

    public function testCheckArguments()
    {
        $GLOBALS['argv'] = [
            '/usr/bin/amp',
            'foo',
            '--fourth',
            'something',
            '-5',
            'first-value',
            'second-value',
        ];

        $options = new Options();
        $options->registerCommand('foo', 'add some foo');
        $options->registerArgument('first', 'first argument', true, 'foo');
        $options->registerArgument('second', 'second argument', true, 'foo');
        $options->registerArgument('third', 'third argument', false, 'foo');
        $options->registerOption('fourth', 'first option', '4', true, 'foo');
        $options->registerOption('fifth', 'second option', '5', false, 'foo');
        $options->parseOptions();

        $options->checkArguments();

        $this->assertEquals('something', $options->getOption('fourth'));
        $this->assertEquals(true, $options->getOption('fifth'));
        $this->assertEquals(false, $options->getOption('sixth'));
        $this->assertEquals(['fourth' => 'something', 'fifth' => true], $options->getOptions());
    }

    public function testCheckArgumentsThrowsOnArgumentNumberMismatch()
    {
        $GLOBALS['argv'] = [
            '/usr/bin/amp',
            'foo',
            'first-value',
        ];

        $options = new Options();
        $options->registerCommand('foo', 'add some foo');
        $options->registerArgument('first', 'first argument', true, 'foo');
        $options->registerArgument('second', 'second argument', true, 'foo');
        $options->registerArgument('third', 'third argument', false, 'foo');
        $options->parseOptions();

        $this->expectException(MissingArgument::class);
        $options->checkArguments();
    }
}
