<?php

namespace AmpProject\Cli;

use AmpProject\Tests\PrivateAccess;
use AmpProject\Tests\TestCase;

/**
 * Test the executable file logic.
 *
 * @covers \AmpProject\Cli\Executable
 * @covers \AmpProject\Cli\AmpExecutable
 * @package ampproject/amp-toolbox
 */
class AmpExecutableTest extends TestCase
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

    public function dataLogging()
    {
        return [
            ['debug', '', Colors::C_RESET, 'stdout'],
            ['info', 'ℹ ', Colors::C_CYAN, 'stdout'],
            ['notice', '☛ ', Colors::C_CYAN, 'stdout'],
            ['success', '✓ ', Colors::C_GREEN, 'stdout'],
            ['warning', '⚠ ', Colors::C_BROWN, 'stderr'],
            ['error', '✗ ', Colors::C_RED, 'stderr'],
            ['critical', '☠ ', Colors::C_LIGHTRED, 'stderr'],
            ['alert', '✖ ', Colors::C_LIGHTRED, 'stderr'],
            ['emergency', '✘ ', Colors::C_LIGHTRED, 'stderr'],
        ];
    }

    /**
     * @dataProvider dataLogging()
     */
    public function testDirectLogging($logLevel, $prefix, $color, $channel)
    {
        $colors = $this->createMock(Colors::class);
        $colors->method('isEnabled')
               ->willReturn(true);
        $colors->method('line')
               ->willReturnCallback(static function ($message, $color, $channel) {
                if (is_resource($channel)) {
                    if ($channel === STDOUT) {
                        $channel = 'stdout';
                    } elseif ($channel === STDERR) {
                        $channel = 'stderr';
                    }
                }
                   echo "[{$channel}]<{$color}> {$message}";
               });

        $executable = new AmpExecutable(false, null, $colors);

        $this->expectOutputString("[{$channel}]<{$color}> {$prefix}{$logLevel} message");
        $executable->$logLevel('{level} message', ['level' => $logLevel]);
    }

    /**
     * @dataProvider dataLogging()
     */
    public function testIndirectLogging($logLevel, $prefix, $color, $channel)
    {
        $colors = $this->createMock(Colors::class);
        $colors->method('isEnabled')
               ->willReturn(false);
        $colors->method('line')
               ->willReturnCallback(static function ($message, $color, $channel) {
                if (is_resource($channel)) {
                    if ($channel === STDOUT) {
                        $channel = 'stdout';
                    } elseif ($channel === STDERR) {
                        $channel = 'stderr';
                    }
                }
                   echo "[{$channel}]<{$color}> {$message}";
               });

        $executable = new AmpExecutable(false, null, $colors);

        $this->expectOutputString("[{$channel}]<{$color}> {$logLevel} message");
        $executable->log($logLevel, '{level} message', ['level' => $logLevel]);
    }

    public function testCommandSetupAndProcessing()
    {
        $options = $this->createMock(Options::class);
        $executable = new AmpExecutable(false, $options);

        $options->expects($this->once())
                ->method('registerCommand')
                ->with('optimize');
        $options->expects($this->once())
                ->method('registerArgument')
                ->withAnyParameters();
        $this->callPrivateMethod($executable, 'setup', [$options]);

        $options->expects($this->once())
                ->method('getCommand')
                ->willReturn('optimize');
        $options->expects($this->once())
                ->method('getArguments')
                ->willReturn([__DIR__ . '/../spec/end-to-end/hello-world/input.html']);
        ob_start();
        $this->callPrivateMethod($executable, 'main', [$options]);
        $output = ob_get_clean();
        $this->assertStringContainsString('transformed="self;v=1"', $output);
    }

    public function testApplicationRun()
    {
        $GLOBALS['argv'] = [
            '/usr/bin/amp',
            'optimize',
            __DIR__ . '/../spec/end-to-end/hello-world/input.html',
        ];

        $executable = new AmpExecutable();

        ob_start();
        $executable->run(false);
        $output = ob_get_clean();

        $this->assertStringContainsString('transformed="self;v=1"', $output);
    }
}
