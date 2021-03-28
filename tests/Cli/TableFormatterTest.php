<?php

namespace AmpProject\Cli;

use AmpProject\Tests\PrivateAccess;
use AmpProject\Tests\TestCase;

/**
 * Test the table formatting logic.
 *
 * @covers \AmpProject\Cli\TableFormatter
 * @package ampproject/amp-toolbox
 */
class TableFormatterTest extends TestCase
{
    use PrivateAccess;

    /**
     * Provide test data for column width calculations.
     *
     * @return array
     */
    public function calcDataProvider()
    {
        return [
            [
                [5, 5, 5],
                [5, 5, 88],
            ],

            [
                ['*', 5, 5],
                [88, 5, 5]
            ],

            [
                [5, '50%', '50%'],
                [5, 46, 47]
            ],

            [
                [5, '50%', '50%'],
                [5, 21, 22],
                50,
            ],

            [
                [5, '50%', '50%'],
                [5, 20, 21],
                50,
                '||',
            ],

            [
                [5, '*', '50%'],
                [5, 47, 46],
            ],
        ];
    }

    /**
     * Test calculation of column sizes.
     *
     * @dataProvider calcDataProvider
     * @param array $input
     * @param array $expect
     * @param int $max
     * @param string $border
     */
    public function testCalculation($input, $expect, $max = 100, $border = ' ')
    {
        $tableFormatter = new TableFormatter();
        $tableFormatter->setMaxWidth($max);
        $tableFormatter->setBorder($border);

        $result = $this->callPrivateMethod($tableFormatter, 'calculateColumnWidths', [$input]);

        $this->assertEquals($max, array_sum($result) + (strlen($border) * (count($input) - 1)));
        $this->assertEquals($max, $tableFormatter->getMaxWidth());
        $this->assertEquals($border, $tableFormatter->getBorder());
        $this->assertEquals($expect, $result);
    }

    /**
     * Check wrapping.
     */
    public function testWrap()
    {
        $text = "this is a long string something\n" .
                '123456789012345678901234567890';

        $expected = "this is a long\n" .
                    "string\n" .
                    "something\n" .
                    "123456789012345\n" .
                    '678901234567890';

        $tableFormatter = new TableFormatter();
        $this->assertEquals($expected, $this->callPrivateMethod($tableFormatter, 'wordwrap', [$text, 15, "\n", true]));
    }

    public function testWidth()
    {
        $text     = 'this is häppy ☺';
        $expected = "{$text}     |test";

        $tableFormatter = new TableFormatter();
        $tableFormatter->setBorder('|');

        $result = $tableFormatter->format([20, '*'], [$text, 'test']);

        $this->assertEquals($expected, trim($result));
    }

    public function testColorWidth()
    {
        $color = new Colors();

        $text     = 'this is ' . $color->wrap('green', Colors::C_GREEN);
        $expected = "{$text}       |test";

        $tableFormatter = new TableFormatter();
        $tableFormatter->setBorder('|');

        $result = $tableFormatter->format([20, '*'], [$text, 'test']);

        $this->assertEquals($expected, trim($result));
    }

    public function testOneWrap()
    {
        $column1 = "test\nwrap";
        $column2 = 'test';

        $expected = "test |test \n" .
                    "wrap |     \n";

        $tableFormatter = new TableFormatter();
        $tableFormatter->setMaxWidth(11);
        $tableFormatter->setBorder('|');

        $result = $tableFormatter->format([5, '*'], [$column1, $column2]);
        $this->assertEquals($expected, $result);
    }
}
