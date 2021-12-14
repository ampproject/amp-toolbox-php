<?php

namespace AmpProject;

use AmpProject\Tests\TestCase;

/**
 * Tests for AmpProject\Str.
 *
 * @covers \AmpProject\Str
 * @package ampproject/amp-toolbox
 */
class StrTest extends TestCase
{
    public function dataLength()
    {
        return [
            ['12345', 5, 5],
            ['Iñtërnâtiônàlizætiøn', 27, 20],
        ];
    }

    /**
     * @covers \AmpProject\Str::length()
     * @dataProvider dataLength()
     */
    public function testLength($text, $expectedLength, $expectedMultibyteLength)
    {
        $this->prepareStr(false);
        $this->assertEquals($expectedLength, Str::length($text));

        $this->prepareStr(true);
        $this->assertEquals($expectedMultibyteLength, Str::length($text));
    }

    public function dataSubstring()
    {
        return [
            ['12345', 0, null, '12345', '12345'],
            ['12345', 2, null, '345', '345'],
            ['12345', 0, 3, '123', '123'],
            ['12345', 3, 1, '4', '4'],
            ['Iñtërnâtiônàlizætiøn', 0, null, 'Iñtërnâtiônàlizætiøn', 'Iñtërnâtiônàlizætiøn'],
            ['Iñtërnâtiônàlizætiøn', 2, null, chr(177) . 'tërnâtiônàlizætiøn', 'tërnâtiônàlizætiøn'],
            ['Iñtërnâtiônàlizætiøn', 0, 3, 'Iñ', 'Iñt'],
            ['Iñtërnâtiônàlizætiøn', 3, 1, 't', 'ë'],
        ];
    }

    /**
     * @covers \AmpProject\Str::substring()
     * @dataProvider dataSubstring()
     */
    public function testSubstring($text, $offset, $length, $expectedSubstring, $expectedMultibyteSubstring)
    {
        $this->prepareStr(false);
        $this->assertEquals($expectedSubstring, Str::substring($text, $offset, $length));

        $this->prepareStr(true);
        $this->assertEquals($expectedMultibyteSubstring, Str::substring($text, $offset, $length));
    }

    public function dataPosition()
    {
        return [
            ['12345', '1', null, 0, 0, 0, 0],
            ['12345', '3', null, 2, 2, 2, 2],
            ['12345', '5', null, 4, 4, 4, 4],
            ['12345', '23', null, 1, 1, 1, 1],
            ['12345', '32', null, false, false, false, false],
            ['1234512345', '23', null, 1, 1, 6, 6],
            ['1234512345', '23', 0, 1, 1, 6, 6],
            ['1234512345', '23', 1, 1, 1, 6, 6],
            ['1234512345', '23', 2, 6, 6, 6, 6],
            ['1234512345', '23', 6, 6, 6, 6, 6],
            ['1234512345', '23', 7, false, false, false, false],
            ['Iñtërnâtiônàlizætiøn', 'â', null, 8, 6, 8, 6],
            ['Iñtërnâtiônàlizætiøn', 'â', 6, 8, 6, 8, 6],
            ['Iñtërnâtiônàlizætiøn', 'â', 7, 8, false, 8, false],
            ['Iñtërnâtiônàlizætiøn', 'â', 8, 8, false, 8, false],
            ['Iñtërnâtiônàlizætiøn', 'â', 9, false, false, false, false],
            ['Iñtërnâtiônàlizætiøn', 'nâtiônàl', null, 7, 5, 7, 5],
            ['Iñtërnâtiônàlizætiøn', 'nâtiônàl', 5, 7, 5, 7, 5],
            ['Iñtërnâtiônàlizætiøn', 'nâtiônàl', 6, 7, false, 7, false],
            ['Iñtërnâtiônàlizætiøn', 'nâtiônàl', 7, 7, false, 7, false],
            ['Iñtërnâtiônàlizætiøn', 'nâtiônàl', 8, false, false, false, false],
            ['IñtërnâtiônàlizætiønIñtërnâtiônàlizætiøn', 'nâtiônàl', null, 7, 5, 34, 25],
            ['IñtërnâtiônàlizætiønIñtërnâtiônàlizætiøn', 'nâtiônàl', 5, 7, 5, 34, 25],
            ['IñtërnâtiônàlizætiønIñtërnâtiônàlizætiøn', 'nâtiônàl', 6, 7, 25, 34, 25],
            ['IñtërnâtiônàlizætiønIñtërnâtiônàlizætiøn', 'nâtiônàl', 7, 7, 25, 34, 25],
            ['IñtërnâtiônàlizætiønIñtërnâtiônàlizætiøn', 'nâtiônàl', 8, 34, 25, 34, 25],
            ['IñtërnâtiônàlizætiønIñtërnâtiônàlizætiøn', 'nâtiônàl', 25, 34, 25, 34, 25],
            ['IñtërnâtiônàlizætiønIñtërnâtiônàlizætiøn', 'nâtiônàl', 26, 34, false, 34, false],
            ['IñtërnâtiônàlizætiønIñtërnâtiônàlizætiøn', 'nâtiônàl', 34, 34, false, 34, false],
            ['IñtërnâtiônàlizætiønIñtërnâtiônàlizætiøn', 'nâtiônàl', 35, false, false, false, false],
        ];
    }

    /**
     * @covers \AmpProject\Str::position()
     * @covers \AmpProject\Str::lastPosition()
     * @dataProvider dataPosition()
     */
    public function testPosition($text, $substring, $offset, $expectedLeftPosition, $expectedMultibyteLeftPosition, $expectedRightPosition, $expectedMultibyteRightPosition)
    {
        $this->prepareStr(false);
        $this->assertEquals($expectedLeftPosition, Str::position($text, $substring, $offset));
        $this->assertEquals($expectedRightPosition, Str::lastPosition($text, $substring, $offset));

        $this->prepareStr(true);
        $this->assertEquals($expectedMultibyteLeftPosition, Str::position($text, $substring, $offset));
        $this->assertEquals($expectedMultibyteRightPosition, Str::lastPosition($text, $substring, $offset));
    }

    public function dataCasing()
    {
        return [
            ['AbCdEfGh', 'abcdefgh', 'abcdefgh', 'ABCDEFGH', 'ABCDEFGH'],
            ['IñtërNÂTIÔNàlizætiøn', 'iñtërnÂtiÔnàlizætiøn', 'iñtërnâtiônàlizætiøn','IñTëRNÂTIÔNàLIZæTIøN', 'IÑTËRNÂTIÔNÀLIZÆTIØN'],
        ];
    }

    /**
     * @covers \AmpProject\Str::toLowerCase()
     * @covers \AmpProject\Str::toUpperCase()
     * @dataProvider dataCasing()
     */
    public function testCasing($text, $expectedLowerCase, $expectedMultibyteLowerCase, $expectedUpperCase, $expectedMultibyteUpperCase)
    {
        $this->prepareStr(false);
        $this->assertEquals($expectedLowerCase, Str::toLowerCase($text));
        $this->assertEquals($expectedUpperCase, Str::toUpperCase($text));

        $this->prepareStr(true);
        $this->assertEquals($expectedMultibyteLowerCase, Str::toLowerCase($text));
        $this->assertEquals($expectedMultibyteUpperCase, Str::toUpperCase($text));
    }

    public function dataRegexMatch()
    {
        return [
            ['/b.{2}E/', 'AbCdEfGhAbCdEfGh', true, ['bCdE'], true, ['bCdE']],
            ['/b.{2}e/', 'AbCdEfGhAbCdEfGh', false, [], false, []],
            ['/b.{2}e/i', 'AbCdEfGhAbCdEfGh', true, ['bCdE'], true, ['bCdE']],
            ['/n.*l/', 'Iñtërnâtiônàlizætiøn', true, ['nâtiônàl'], true, ['nâtiônàl']],
            ['/nâtiônàl/', 'Iñtërnâtiônàlizætiøn', true, ['nâtiônàl'], true, ['nâtiônàl']],
            ['/n.*l/u', 'Iñtërnâtiônàlizætiøn', true, ['nâtiônàl'], true, ['nâtiônàl']],
            ['/nâtiônàl/u', 'Iñtërnâtiônàlizætiøn', true, ['nâtiônàl'], true, ['nâtiônàl']],
            ['/n.*l/', 'IÑTËRNÂTIÔNÀLIZÆTIØN', false, [], false, []],
            ['/nâtiônàl/', 'IÑTËRNÂTIÔNÀLIZÆTIØN', false, [], false, []],
            ['/n.*l/i', 'IÑTËRNÂTIÔNÀLIZÆTIØN', true, ['NÂTIÔNÀL'], true, ['NÂTIÔNÀL']],
            ['/nâtiônàl/i', 'IÑTËRNÂTIÔNÀLIZÆTIØN', false, [], true, ['NÂTIÔNÀL']],
            ['/n.*l/iu', 'IÑTËRNÂTIÔNÀLIZÆTIØN', true, ['NÂTIÔNÀL'], true, ['NÂTIÔNÀL']],
            ['/nâtiônàl/iu', 'IÑTËRNÂTIÔNÀLIZÆTIØN', true, ['NÂTIÔNÀL'], true, ['NÂTIÔNÀL']],
            ['/N.*L/', 'Iñtërnâtiônàlizætiøn', false, [], false, []],
            ['/NÂTIÔNÀL/', 'Iñtërnâtiônàlizætiøn', false, [], false, []],
            ['/N.*L/u', 'Iñtërnâtiônàlizætiøn', false, [], false, []],
            ['/NÂTIÔNÀL/u', 'Iñtërnâtiônàlizætiøn', false, [], false, []],
            ['/N.*L/i', 'Iñtërnâtiônàlizætiøn', true, ['nâtiônàl'], true, ['nâtiônàl']],
            ['/NÂTIÔNÀL/i', 'Iñtërnâtiônàlizætiøn', false, [], true, ['nâtiônàl']],
            ['/N.*L/iu', 'Iñtërnâtiônàlizætiøn', true, ['nâtiônàl'], true, ['nâtiônàl']],
            ['/NÂTIÔNÀL/iu', 'Iñtërnâtiônàlizætiøn', true, ['nâtiônàl'], true, ['nâtiônàl']],
        ];
    }

    /**
     * @covers \AmpProject\Str::regexMatch()
     * @dataProvider dataRegexMatch()
     */
    public function testRegexMatch($pattern, $text, $expectedResult, $expectedMatches, $expectedMultibyteResult, $expectedMultibyteMatches)
    {
        $matches = [];
        $this->prepareStr(false);
        $this->assertEquals($expectedResult, Str::regexMatch($pattern, $text, $matches));
        $this->assertEquals($expectedMatches, $matches);

        $multibyteMatches = [];
        $this->prepareStr(true);
        $this->assertEquals($expectedMultibyteResult, Str::regexMatch($pattern, $text, $multibyteMatches));
        $this->assertEquals($expectedMultibyteMatches, $multibyteMatches);
    }

    public function dataRegexReplace()
    {
        return [
            ['/b.{2}E/', '{\0}', 'AbCdEfGhAbCdEfGh', 'A{bCdE}fGhA{bCdE}fGh', 'A{bCdE}fGhA{bCdE}fGh', 'A_bCdE_fGhA_bCdE_fGh', 'A_bCdE_fGhA_bCdE_fGh'],
            ['/b.{2}e/', '{\0}', 'AbCdEfGhAbCdEfGh', 'AbCdEfGhAbCdEfGh', 'AbCdEfGhAbCdEfGh', 'AbCdEfGhAbCdEfGh', 'AbCdEfGhAbCdEfGh'],
            ['/b.{2}e/i', '{\0}', 'AbCdEfGhAbCdEfGh', 'A{bCdE}fGhA{bCdE}fGh', 'A{bCdE}fGhA{bCdE}fGh', 'A_bCdE_fGhA_bCdE_fGh', 'A_bCdE_fGhA_bCdE_fGh'],
            ['/n.*l/', '{\0}', 'Iñtërnâtiônàlizætiøn', 'Iñtër{nâtiônàl}izætiøn', 'Iñtër{nâtiônàl}izætiøn', 'Iñtër_nâtiônàl_izætiøn', 'Iñtër_nâtiônàl_izætiøn'],
            ['/nâtiônàl/', '{\0}', 'Iñtërnâtiônàlizætiøn', 'Iñtër{nâtiônàl}izætiøn', 'Iñtër{nâtiônàl}izætiøn', 'Iñtër_nâtiônàl_izætiøn', 'Iñtër_nâtiônàl_izætiøn'],
            ['/n.*l/u', '{\0}', 'Iñtërnâtiônàlizætiøn', 'Iñtër{nâtiônàl}izætiøn', 'Iñtër{nâtiônàl}izætiøn', 'Iñtër_nâtiônàl_izætiøn', 'Iñtër_nâtiônàl_izætiøn'],
            ['/nâtiônàl/u', '{\0}', 'Iñtërnâtiônàlizætiøn', 'Iñtër{nâtiônàl}izætiøn', 'Iñtër{nâtiônàl}izætiøn', 'Iñtër_nâtiônàl_izætiøn', 'Iñtër_nâtiônàl_izætiøn'],
            ['/n.*l/', '{\0}', 'IÑTËRNÂTIÔNÀLIZÆTIØN', 'IÑTËRNÂTIÔNÀLIZÆTIØN', 'IÑTËRNÂTIÔNÀLIZÆTIØN', 'IÑTËRNÂTIÔNÀLIZÆTIØN', 'IÑTËRNÂTIÔNÀLIZÆTIØN'],
            ['/nâtiônàl/', '{\0}', 'IÑTËRNÂTIÔNÀLIZÆTIØN', 'IÑTËRNÂTIÔNÀLIZÆTIØN', 'IÑTËRNÂTIÔNÀLIZÆTIØN', 'IÑTËRNÂTIÔNÀLIZÆTIØN', 'IÑTËRNÂTIÔNÀLIZÆTIØN'],
            ['/n.*l/u', '{\0}', 'IÑTËRNÂTIÔNÀLIZÆTIØN', 'IÑTËRNÂTIÔNÀLIZÆTIØN', 'IÑTËRNÂTIÔNÀLIZÆTIØN', 'IÑTËRNÂTIÔNÀLIZÆTIØN', 'IÑTËRNÂTIÔNÀLIZÆTIØN'],
            ['/nâtiônàl/u', '{\0}', 'IÑTËRNÂTIÔNÀLIZÆTIØN', 'IÑTËRNÂTIÔNÀLIZÆTIØN', 'IÑTËRNÂTIÔNÀLIZÆTIØN', 'IÑTËRNÂTIÔNÀLIZÆTIØN', 'IÑTËRNÂTIÔNÀLIZÆTIØN'],
            ['/n.*l/i', '{\0}', 'IÑTËRNÂTIÔNÀLIZÆTIØN', 'IÑTËR{NÂTIÔNÀL}IZÆTIØN', 'IÑTËR{NÂTIÔNÀL}IZÆTIØN', 'IÑTËR_NÂTIÔNÀL_IZÆTIØN', 'IÑTËR_NÂTIÔNÀL_IZÆTIØN'],
            ['/nâtiônàl/i', '{\0}', 'IÑTËRNÂTIÔNÀLIZÆTIØN', 'IÑTËRNÂTIÔNÀLIZÆTIØN', 'IÑTËR{NÂTIÔNÀL}IZÆTIØN', 'IÑTËRNÂTIÔNÀLIZÆTIØN', 'IÑTËR_NÂTIÔNÀL_IZÆTIØN'],
            ['/n.*l/iu', '{\0}', 'IÑTËRNÂTIÔNÀLIZÆTIØN', 'IÑTËR{NÂTIÔNÀL}IZÆTIØN', 'IÑTËR{NÂTIÔNÀL}IZÆTIØN', 'IÑTËR_NÂTIÔNÀL_IZÆTIØN', 'IÑTËR_NÂTIÔNÀL_IZÆTIØN'],
            ['/nâtiônàl/iu', '{\0}', 'IÑTËRNÂTIÔNÀLIZÆTIØN', 'IÑTËR{NÂTIÔNÀL}IZÆTIØN', 'IÑTËR{NÂTIÔNÀL}IZÆTIØN', 'IÑTËR_NÂTIÔNÀL_IZÆTIØN', 'IÑTËR_NÂTIÔNÀL_IZÆTIØN'],
            ['/N.*L/', '{\0}', 'Iñtërnâtiônàlizætiøn', 'Iñtërnâtiônàlizætiøn', 'Iñtërnâtiônàlizætiøn', 'Iñtërnâtiônàlizætiøn', 'Iñtërnâtiônàlizætiøn'],
            ['/NÂTIÔNÀL/', '{\0}', 'Iñtërnâtiônàlizætiøn', 'Iñtërnâtiônàlizætiøn', 'Iñtërnâtiônàlizætiøn', 'Iñtërnâtiônàlizætiøn', 'Iñtërnâtiônàlizætiøn'],
            ['/N.*L/u', '{\0}', 'Iñtërnâtiônàlizætiøn', 'Iñtërnâtiônàlizætiøn', 'Iñtërnâtiônàlizætiøn', 'Iñtërnâtiônàlizætiøn', 'Iñtërnâtiônàlizætiøn'],
            ['/NÂTIÔNÀL/u', '{\0}', 'Iñtërnâtiônàlizætiøn', 'Iñtërnâtiônàlizætiøn', 'Iñtërnâtiônàlizætiøn', 'Iñtërnâtiônàlizætiøn', 'Iñtërnâtiônàlizætiøn'],
            ['/N.*L/i', '{\0}', 'Iñtërnâtiônàlizætiøn', 'Iñtër{nâtiônàl}izætiøn', 'Iñtër{nâtiônàl}izætiøn', 'Iñtër_nâtiônàl_izætiøn', 'Iñtër_nâtiônàl_izætiøn'],
            ['/NÂTIÔNÀL/i', '{\0}', 'Iñtërnâtiônàlizætiøn', 'Iñtërnâtiônàlizætiøn', 'Iñtër{nâtiônàl}izætiøn', 'Iñtërnâtiônàlizætiøn', 'Iñtër_nâtiônàl_izætiøn'],
            ['/N.*L/iu', '{\0}', 'Iñtërnâtiônàlizætiøn', 'Iñtër{nâtiônàl}izætiøn', 'Iñtër{nâtiônàl}izætiøn', 'Iñtër_nâtiônàl_izætiøn', 'Iñtër_nâtiônàl_izætiøn'],
            ['/NÂTIÔNÀL/iu', '{\0}', 'Iñtërnâtiônàlizætiøn', 'Iñtër{nâtiônàl}izætiøn', 'Iñtër{nâtiônàl}izætiøn', 'Iñtër_nâtiônàl_izætiøn', 'Iñtër_nâtiônàl_izætiøn'],
            ['/\x{006e}\x{00e2}\x{0074}\x{0069}\x{00f4}\x{006e}\x{00e0}\x{006c}/u', '{\0}', 'Iñtërnâtiônàlizætiøn', 'Iñtër{nâtiônàl}izætiøn', 'Iñtër{nâtiônàl}izætiøn', 'Iñtër_nâtiônàl_izætiøn', 'Iñtër_nâtiônàl_izætiøn'],
        ];
    }

    /**
     * @covers \AmpProject\Str::regexReplace()
     * @covers \AmpProject\Str::regexReplaceCallback()
     * @dataProvider dataRegexReplace()
     */
    public function testRegexReplace($pattern, $replacement, $subject, $expectedText, $expectedMultibyteText, $expectedCallbackText, $expectedMultibyteCallbackText)
    {
        $callback = static function ($matches) {
            return "_{$matches[0]}_";
        };

        $this->prepareStr(false);
        $this->assertEquals($expectedText, Str::regexReplace($pattern, $replacement, $subject));
        $this->assertEquals($expectedCallbackText, Str::regexReplaceCallback($pattern, $callback, $subject));

        $this->prepareStr(true);
        $this->assertEquals($expectedMultibyteText, Str::regexReplace($pattern, $replacement, $subject));
        $this->assertEquals($expectedMultibyteCallbackText, Str::regexReplaceCallback($pattern, $callback, $subject));
    }

    protected function prepareStr($useMultibyte)
    {
        if ($useMultibyte) {
            if (! extension_loaded('mbstring')) {
                $this->markTestSkipped('Testing multibyte support requires the "mbstring" PHP extension');
            }
            Str::enableMultibyte();
        } else {
            Str::disableMultibyte();
        }
    }
}
