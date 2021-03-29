<?php

namespace AmpProject\Exception;

use AmpProject\Tests\TestCase;

/**
 * Test the InvalidCssName exception.
 *
 * @covers \AmpProject\Exception\InvalidCssName
 * @package ampproject/amp-toolbox
 */
class InvalidCssNameTest extends TestCase
{

    /**
     * Test throwing the exception for a CSS name.
     */
    public function testThrowingForCssName()
    {
        $this->expectException(InvalidCssName::class);
        $this->expectExceptionMessage("Invalid css name 'cssName' was requested from the validator spec.");

        throw InvalidCssName::forCssName('cssName');
    }
}
