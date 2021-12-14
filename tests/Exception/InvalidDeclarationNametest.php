<?php

namespace AmpProject\Exception;

use AmpProject\Tests\TestCase;

/**
 * Test the InvalidDeclarationName exception.
 *
 * @covers \AmpProject\Exception\InvalidDeclarationName
 * @package ampproject/amp-toolbox
 */
class InvalidDeclarationNameTest extends TestCase
{
    /**
     * Test throwing the exception for an invalid declaration name.
     */
    public function testThrowingForDeclarationName()
    {
        $this->expectException(InvalidDeclarationName::class);
        $this->expectExceptionMessage(
            "Invalid declaration name 'declarationName' was requested from the validator spec."
        );

        throw InvalidDeclarationName::forDeclaration('declarationName');
    }
}
