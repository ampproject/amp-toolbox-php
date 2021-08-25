<?php

namespace AmpProject\Optimizer\Transformer;

use AmpProject\Optimizer\Error;
use AmpProject\Optimizer\Error\CannotMinifyAmpScript;
use AmpProject\Tests\TestCase;

/**
 * Test the CannotMinifyAmpScript error class.
 *
 * @package ampproject/amp-toolbox
 */
final class CannotMinifyAmpScriptTest extends TestCase
{
    /**
     * Test the error class.
     *
     * @covers \AmpProject\Optimizer\Error\CannotMinifyAmpScript::withMessage()
     */
    public function testCannotMinifyAmpScriptTest()
    {
        $data     = 'const const;';
        $errorMsg = 'Unexpected: const';
        $error    = CannotMinifyAmpScript::withMessage($data, $errorMsg);

        $this->assertInstanceOf(Error::class, $error);

        $expected = "Could not minify inline amp-script.\nUnexpected: const\nconst const;";
        $this->assertEquals($expected, $error->getMessage());
    }
}
