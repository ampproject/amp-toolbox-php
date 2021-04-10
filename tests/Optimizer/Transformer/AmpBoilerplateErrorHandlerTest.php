<?php

namespace AmpProject\Optimizer\Transformer;

use AmpProject\Dom\Document;
use AmpProject\Optimizer\Error;
use AmpProject\Optimizer\ErrorCollection;
use AmpProject\Tests\ErrorComparison;
use AmpProject\Tests\MarkupComparison;
use AmpProject\Tests\TestCase;
use AmpProject\Tests\TestMarkup;

/**
 * Test the AmpBoilerplateErrorHandler transformer.
 *
 * @covers \AmpProject\Optimizer\Transformer\AmpBoilerplateErrorHandler
 * @package ampproject/amp-toolbox
 */
final class AmpBoilerplateErrorHandlerTest extends TestCase
{
    use ErrorComparison;
    use MarkupComparison;

    /**
     * Provide the data to test the transform() method.
     *
     * @return array[] Associative array of data arrays.
     */
    public function dataTransform()
    {
        return [
            'error handler is added if boilerplate present' => [
                TestMarkup::DOCTYPE . '<html ⚡><head>' .
                TestMarkup::META_CHARSET . TestMarkup::META_VIEWPORT .
                TestMarkup::STYLE_AMPBOILERPLATE . TestMarkup::NOSCRIPT_AMPBOILERPLATE .
                TestMarkup::STYLE_AMPRUNTIME . TestMarkup::SCRIPT_AMPRUNTIME .
                '</head><body></body></html>',

                TestMarkup::DOCTYPE . '<html ⚡><head>' .
                TestMarkup::META_CHARSET . TestMarkup::META_VIEWPORT .
                TestMarkup::STYLE_AMPBOILERPLATE . TestMarkup::NOSCRIPT_AMPBOILERPLATE .
                TestMarkup::STYLE_AMPRUNTIME . TestMarkup::SCRIPT_AMPRUNTIME .
                '<script amp-onerror>' . AmpBoilerplateErrorHandler::ERROR_HANDLER . '</script>' .
                '</head><body></body></html>',
            ],

            'error handler is not added if boilerplate is not present' => [
                TestMarkup::DOCTYPE . '<html ⚡ i-amphtml-no-boilerplate><head>' .
                TestMarkup::META_CHARSET . TestMarkup::META_VIEWPORT .
                TestMarkup::STYLE_AMPRUNTIME . TestMarkup::SCRIPT_AMPRUNTIME .
                '</head><body></body></html>',

                TestMarkup::DOCTYPE . '<html ⚡ i-amphtml-no-boilerplate><head>' .
                TestMarkup::META_CHARSET . TestMarkup::META_VIEWPORT .
                TestMarkup::STYLE_AMPRUNTIME . TestMarkup::SCRIPT_AMPRUNTIME .
                '</head><body></body></html>',
            ],
        ];
    }

    /**
     * Test the transform() method.
     *
     * @covers       \AmpProject\Optimizer\Transformer\AmpBoilerplateErrorHandler::transform()
     * @dataProvider dataTransform()
     *
     * @param string                  $source         String of source HTML.
     * @param string                  $expectedHtml   String of expected HTML output.
     * @param ErrorCollection|Error[] $expectedErrors Set of expected errors.
     */
    public function testTransform($source, $expectedHtml, $expectedErrors = [])
    {
        $document    = Document::fromHtml($source);
        $transformer = new AmpBoilerplateErrorHandler();
        $errors      = new ErrorCollection();

        $transformer->transform($document, $errors);

        $this->assertEqualMarkup($expectedHtml, $document->saveHTML());
        $this->assertSameErrors($expectedErrors, $errors);
    }
}
