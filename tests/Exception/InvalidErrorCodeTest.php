<?php

namespace AmpProject\Exception;

use AmpProject\Tests\TestCase;

/**
 * Test the InvalidErrorCode exception.
 *
 * @covers \AmpProject\Exception\InvalidErrorCode
 * @package ampproject/amp-toolbox
 */
class InvalidErrorCodeTest extends TestCase
{
    /**
     * Test throwing the exception for a error code.
     */
    public function testThrowingForErrorCode()
    {
        $this->expectException(InvalidErrorCode::class);
        $this->expectExceptionMessage("Invalid error code 'errorCode' was requested from the validator spec.");

        throw InvalidErrorCode::forErrorCode('errorCode');
    }
}
