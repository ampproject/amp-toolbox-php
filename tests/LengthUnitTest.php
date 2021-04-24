<?php

namespace AmpProject;

use AmpProject\Tests\TestCase;

/**
 * Tests for AmpProject\LengthUnit.
 *
 * @covers \AmpProject\LengthUnit
 * @package ampproject/amp-toolbox
 */
class LengthUnitTest extends TestCase
{

    /**
     * Provide data to test conversions into pixels.
     *
     * @return array[]
     */
    public function dataConvertIntoPixels()
    {
        return [
            'CM'   => [123, 'cm', 4648.818897637795],
            'MM'   => [123, 'mm', 464.8818897637795],
            'Q'    => [123, 'q', 116.22047244094487],
            'IN'   => [123, 'in', 11808],
            'PC'   => [123, 'pc', 1968],
            'PT'   => [123, 'pt', 164],
            'PX'   => [123, 'px', 123],
            'EM'   => [123, 'em', false],
            'EX'   => [123, 'ex', false],
            'CH'   => [123, 'ch', false],
            'REM'  => [123, 'rem', false],
            'LH'   => [123, 'lh', false],
            'VW'   => [123, 'vw', false],
            'VH'   => [123, 'vh', false],
            'VMIN' => [123, 'vmin', false],
            'VMAX' => [123, 'vmax', false],
            '0'    => [0, 'px', 0],
        ];
    }

    /**
     * YTest the convertIntoPixels method.
     *
     * @dataProvider dataConvertIntoPixels
     * @covers \AmpProject\LengthUnit::convertIntoPixels()
     *
     * @param int|float       $value    Initial value.
     * @param string          $unit     Source unit.
     * @param int|float|false $expected Expected conversion result.
     */
    public function testConvertIntoPixels($value, $unit, $expected)
    {
        $this->assertEquals($expected, LengthUnit::convertIntoPixels($value, $unit));
    }
}
