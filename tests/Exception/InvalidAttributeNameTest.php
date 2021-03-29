<?php

namespace AmpProject\Exception;

use AmpProject\Tests\TestCase;

/**
 * Test the InvalidAttributeName exception.
 *
 * @covers \AmpProject\Exception\InvalidAttributeName
 * @package ampproject/amp-toolbox
 */
class InvalidAttributeNameTest extends TestCase
{

    /**
     * Test throwing the exception for an attribute.
     */
    public function testThrowingForAttribute()
    {
        $this->expectException(InvalidAttributeName::class);
        $this->expectExceptionMessage("Invalid attribute 'attributeName' was requested from the validator spec.");

        throw InvalidAttributeName::forAttribute('attributeName');
    }
}
