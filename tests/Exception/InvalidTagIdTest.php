<?php

namespace AmpProject\Exception;

use AmpProject\Tests\TestCase;

/**
 * Test the InvalidTagId exception.
 *
 * @covers \AmpProject\Exception\InvalidTagId
 * @package ampproject/amp-toolbox
 */
class InvalidTagIdTest extends TestCase
{

    /**
     * Test throwing the exception for a tag ID.
     */
    public function testThrowingForTagId()
    {
        $this->expectException(InvalidTagId::class);
        $this->expectExceptionMessage("Invalid tag ID 'tagId' was requested from the validator tag.");

        throw InvalidTagId::forTagId('tagId');
    }
}
