<?php

namespace AmpProject\Exception;

use AmpProject\Tests\TestCase;

/**
 * Test the InvalidListName exception.
 *
 * @covers \AmpProject\Exception\InvalidListName
 * @package ampproject/amp-toolbox
 */
class InvalidListNameTest extends TestCase
{

    /**
     * Test throwing the exception for an attribute list.
     */
    public function testThrowingForAttributeList()
    {
        $this->expectException(InvalidListName::class);
        $this->expectExceptionMessage(
            "Invalid attribute list 'attributeListName' was requested from the validator spec."
        );

        throw InvalidListName::forAttributeList('attributeListName');
    }

    /**
     * Test throwing the exception for an declaration list.
     */
    public function testThrowingForDeclarationList()
    {
        $this->expectException(InvalidListName::class);
        $this->expectExceptionMessage(
            "Invalid declaration list 'declarationListName' was requested from the validator spec."
        );

        throw InvalidListName::forDeclarationList('declarationListName');
    }
}
