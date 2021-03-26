<?php

namespace AmpProject\Exception\Cli;

use AmpProject\Exception\AmpCliException;
use AmpProject\Tests\TestCase;

/**
 * Test the InvalidOption exception.
 *
 * @covers \AmpProject\Exception\InvalidOption
 * @package ampproject/amp-toolbox
 */
class InvalidOptionTest extends TestCase
{

    /**
     * Test throwing the exception for an unknown option.
     */
    public function testThrowingForUnknownOption()
    {
        $this->expectException(InvalidOption::class);
        $this->expectExceptionMessage("Unknown option: 'something'.");
        $this->expectExceptionCode(AmpCliException::E_UNKNOWN_OPT);

        throw InvalidOption::forUnknownOption('something');
    }
}
