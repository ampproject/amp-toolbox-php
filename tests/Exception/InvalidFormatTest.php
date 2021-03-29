<?php

namespace AmpProject\Exception;

use AmpProject\Tests\TestCase;

/**
 * Test the InvalidFormat exception.
 *
 * @covers \AmpProject\Exception\InvalidFormat
 * @package ampproject/amp-toolbox
 */
class InvalidFormatTest extends TestCase
{

    /**
     * Test throwing the exception for an format.
     */
    public function testThrowingForFormat()
    {
        $this->expectException(InvalidFormat::class);
        $this->expectExceptionMessage("Invalid format 'formatName' was requested from the validator spec.");

        throw InvalidFormat::forFormat('formatName');
    }
}
