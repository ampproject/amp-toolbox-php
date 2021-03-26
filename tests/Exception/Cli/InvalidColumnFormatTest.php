<?php

namespace AmpProject\Exception\Cli;

use AmpProject\Exception\AmpCliException;
use AmpProject\Tests\TestCase;

/**
 * Test the InvalidColumnFormat exception.
 *
 * @covers \AmpProject\Exception\InvalidColumnFormat
 * @package ampproject/amp-toolbox
 */
class InvalidColumnFormatTest extends TestCase
{

    /**
     * Test throwing the exception for multiple fluid columns.
     */
    public function testThrowingForMultipleFluidColumns()
    {
        $this->expectException(InvalidColumnFormat::class);
        $this->expectExceptionMessage('Only one fluid column allowed.');
        $this->expectExceptionCode(AmpCliException::E_ANY);

        throw InvalidColumnFormat::forMultipleFluidColumns();
    }

    /**
     * Test throwing the exception for an unknown column format.
     */
    public function testThrowingForUnknownColumnFormat()
    {
        $this->expectException(InvalidColumnFormat::class);
        $this->expectExceptionMessage("Unknown column format: 'maybe-wrapped'.");
        $this->expectExceptionCode(AmpCliException::E_ANY);

        throw InvalidColumnFormat::forUnknownColumnFormat('maybe-wrapped');
    }

    /**
     * Test throwing the exception for exceeded max width.
     */
    public function testThrowingForExceededMaxWidth()
    {
        $this->expectException(InvalidColumnFormat::class);
        $this->expectExceptionMessage('Total of requested column widths exceeds available space.');
        $this->expectExceptionCode(AmpCliException::E_ANY);

        throw InvalidColumnFormat::forExceededMaxWidth();
    }
}
