<?php

namespace AmpProject\Exception;

use AmpProject\Tests\TestCase;

/**
 * Test the InvalidSpecName exception.
 *
 * @covers \AmpProject\Exception\InvalidSpecName
 * @package ampproject/amp-toolbox
 */
class InvalidSpecNameTest extends TestCase
{

    /**
     * Test throwing the exception for a spec name.
     */
    public function testThrowingForSpecName()
    {
        $this->expectException(InvalidSpecName::class);
        $this->expectExceptionMessage("Invalid spec name 'specName' was requested from the validator spec.");

        throw InvalidSpecName::forSpecName('specName');
    }
}
