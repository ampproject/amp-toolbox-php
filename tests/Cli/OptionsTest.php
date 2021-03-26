<?php

namespace AmpProject\Cli;

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

    public function testCommandHelp()
    {
        $options = new Options();
        $options->registerCommand('cmd', 'a command');
        $this->assertStringContainsString('accepts a command as first parameter', $options->help());

        $options->setCommandHelp('foooooobaar');
        $this->assertStringNotContainsString('accepts a command as first parameter', $options->help());
        $this->assertStringContainsString('foooooobaar', $options->help());
    }
}
