<?php

namespace AmpProject\Validator;

use AmpProject\Tests\TestCase;
use AmpProject\Tests\TestMarkup;
use AmpProject\Validator\Spec\Error;

/**
 * Tests for AmpProject\Validator\ValidationEngine.
 *
 * @covers  \AmpProject\Validator\ValidationEngine
 * @package ampproject/amp-toolbox
 */
class ValidationEngineTest extends TestCase
{

    public function dataValidateHtml()
    {
        return [
            'valid document' => [
                TestMarkup::DOCTYPE . TestMarkup::AMP_HTML . '<head>' . TestMarkup::META_CHARSET . '</head>'
                . '<body><h1>Testing!</h1></body>',
                'PASS',
                [],
            ],

            'missing amp type identifier' => [
                '<html></html>',
                'FAIL',
                [Error\MandatoryAttrMissing::CODE],
            ],

            'missing body tag' => [
                '<h1>Testing!</h1>',
                'FAIL',
                [Error\DisallowedManufacturedBody::CODE],
            ],

            'duplicate body tag' => [
                '<body class="test1"></body><body class="test2"><h1>Testing!</h1></body>',
                'FAIL',
                [Error\DuplicateUniqueTag::CODE],
            ],

            'dev mode active' => [
                '<html amp data-ampdevmode>',
                'FAIL',
                [Error\DevModeOnly::CODE],
            ],

            'invalid type identifier' => [
                '<html amp data-css-strict>',
                'FAIL',
                [Error\DisallowedAttr::CODE],
            ],

            'invalid transformed value' => [
                '<html amp transformed="nonsense">',
                'FAIL',
                [Error\InvalidAttrValue::CODE],
            ],

            'provides transformer version' => [
                '<html amp transformed="self;v=42">',
                'PASS',
                [],
                function (ValidationResult $result) {
                    $this->assertEquals(42, $result->getTransformerVersion());
                }
            ],
        ];
    }

    /**
     * @dataProvider dataValidateHtml()
     */
    public function testValidateHtml($html, $expectedStatus, $expectedErrorCodes, $additionalCheck = null)
    {
        $engine = new ValidationEngine();
        $result = $engine->validateHtml($html);

        $this->assertEquals(
            $expectedStatus,
            $result->getStatus()->asString(),
            $this->getErrorString($result->getErrors())
        );

        foreach ($expectedErrorCodes as $expectedErrorCode) {
            $this->assertTrue(
                $result->getErrors()->has($expectedErrorCode),
                $this->getErrorString($result->getErrors())
            );
        }

        if (is_callable($additionalCheck)) {
            $additionalCheck($result);
        }
    }

    private function getErrorString(ValidationErrorCollection $errors)
    {
        $errorCodes = [];
        foreach ($errors as $error) {
            $errorCodes[] = $error->getCode();
        }

        return 'Actual errors: [ ' . implode(', ', $errorCodes) . ' ]';
    }
}
