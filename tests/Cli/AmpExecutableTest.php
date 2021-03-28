<?php

namespace AmpProject\Cli;

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
}
