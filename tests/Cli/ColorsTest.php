<?php

namespace AmpProject\Cli;

use AmpProject\Exception\Cli\InvalidColor;
use AmpProject\Tests\TestCase;

/**
 * Test the options processing.
 *
 * @covers \AmpProject\Cli\Colors
 * @package ampproject/amp-toolbox
 */
class ColorsTest extends TestCase
{

    public function testInstantiation()
    {
        // No TERM present, color should be the result of posix_isatty(STDOUT).
        putenv('TERM');
        $colors = new Colors();
        $this->assertEquals(posix_isatty(STDOUT), $colors->isEnabled());

        // TERM present, color should be enabled.
        putenv('TERM=dummy');
        $colors = new Colors();
        $this->assertTrue($colors->isEnabled());
    }

    public function testSwitchingEnable()
    {
        $colors = new Colors();
        $colors->disable();
        $this->assertFalse($colors->isEnabled());

        $colors->enable();
        $this->assertTrue($colors->isEnabled());

        $colors->disable();
        $this->assertFalse($colors->isEnabled());
    }

    public function testLineWithoutColors()
    {
        $colors = new Colors();
        $outputStream = fopen('php://memory', 'rw+');
        $colors->disable();
        $colors->line('test', Colors::C_BLUE, $outputStream);
        $colors->reset($outputStream);
        rewind($outputStream);
        $this->assertEquals("test\n", fread($outputStream, 5));
    }

    public function testLineWithColors()
    {
        $colors = new Colors();
        $outputStream = fopen('php://memory', 'rw+');
        $colors->enable();
        $colors->line('test', Colors::C_BLUE, $outputStream);
        $colors->reset($outputStream);
        rewind($outputStream);

        // TODO: This does not work as expected, as it seems like the terminal escape codes are always stripped.
        // $expected = "\33[0;34mtest\n\33[0m";
        // $this->assertEquals($expected, fread($outputStream, strlen($expected)));

        $this->assertEquals("test\n", fread($outputStream, 5));
    }

    public function testWrapWithColors()
    {
        $colors = new Colors();
        $colors->enable();
        $output = $colors->wrap('test', Colors::C_BLUE);
        $this->assertEquals("\33[0;34mtest\33[0m", $output);
    }

    public function testWrapWithoutColors()
    {
        $colors = new Colors();
        $colors->disable();
        $output = $colors->wrap('test', Colors::C_BLUE);
        $this->assertEquals('test', $output);
    }

    public function testThrowsExceptionOnUnknownColor()
    {
        $colors = new Colors();
        $this->expectException(InvalidColor::class);
        $colors->line('test', 'blueish-green');
    }
}
