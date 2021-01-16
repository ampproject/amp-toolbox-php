<?php

namespace AmpProject\Validator\Spec;

use AmpProject\Exception\InvalidAttributeName;
use AmpProject\Tests\TestCase;

/**
 * Tests for AmpProject\Validator\Spec\DeclarationList.
 *
 * @covers  \AmpProject\Validator\Spec\DeclarationList
 * @package ampproject/amp-toolbox
 */
class DeclarationListTest extends TestCase
{
    /** @var DeclarationList */
    private $declarationList;

    public function __construct()
    {
        parent::__construct();
        $this->declarationList = new DeclarationList(
            [
                'visibility' => [
                    'valueCasei' => [
                        'hidden',
                        'initial',
                        'visible',
                    ],
                ],
                'width' => [],
                'z-index' => [
                    'valueRegexCasei' => '([-+]?0)|([-+]?100)|([-+]?[1-9][0-9]?)',
                ],
            ]
        );
    }

    public function testHas()
    {
        $this->assertTrue($this->declarationList->has('width'));
        $this->assertFalse($this->declarationList->has('utter nonsense'));
    }

    public function testGet()
    {
        $declaration = $this->declarationList->get('visibility');

        $this->assertIsArray($declaration);
    }

    public function testGetThrowsExceptionForUnknownDeclarationName()
    {
        $this->expectException(InvalidAttributeName::class);
        $this->declarationList->get('utter nonsense');
    }
}
