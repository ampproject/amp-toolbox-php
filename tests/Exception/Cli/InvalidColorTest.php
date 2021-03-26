<?php

namespace AmpProject\Exception\Cli;

use AmpProject\Exception\AmpCliException;
use AmpProject\Tests\TestCase;

/**
 * Test the InvalidColor exception.
 *
 * @covers \AmpProject\Exception\InvalidColor
 * @package ampproject/amp-toolbox
 */
class InvalidColorTest extends TestCase
{

    /**
     * Test throwing the exception for an unknown color.
     */
    public function testThrowingForUnknownColor()
    {
        $this->expectException(InvalidColor::class);
        $this->expectExceptionMessage("Unknown color: 'kind-of-purplish'.");
        $this->expectExceptionCode(AmpCliException::E_ANY);

        throw InvalidColor::forUnknownColor('kind-of-purplish');
    }
}
