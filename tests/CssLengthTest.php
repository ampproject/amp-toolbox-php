<?php

namespace AmpProject;

use AmpProject\Tests\TestCase;

/**
 * Tests for AmpProject\CssLength.
 *
 * @todo   This is only a stub and basic smoke test, more tests need to be added here, as the plugin didn't have any.
 *
 * @covers \AmpProject\CssLength
 * @package ampproject/amp-toolbox
 */
class CssLengthTest extends TestCase
{

    public function dataCssLength()
    {
        return [
            'empty'            => [null, false, false, true, false, false, false],
            'allowed auto'     => ['auto', true, false, true, true, true, false],
            'disallowed auto'  => ['auto', false, false, false, true, true, false],
            'allowed fluid'    => ['fluid', false, true, true, true, false, true],
            'disallowed fluid' => ['fluid', false, false, false, true, false, true],
            '10px'             => ['10px', false, false, true, true, false, false],
        ];
    }

    /**
     * Test CssLength.
     *
     * @dataProvider dataCssLength()
     */
    public function testCssLength($value, $allowAuto, $allowFluid, $valid, $defined, $auto, $fluid)
    {
        $length = new CssLength($value);
        $length->validate($allowAuto, $allowFluid);

        $this->assertEquals($valid, $length->isValid());
        $this->assertEquals($defined, $length->isDefined());
        $this->assertEquals($fluid, $length->isFluid());
        $this->assertEquals($auto, $length->isAuto());
    }
}
