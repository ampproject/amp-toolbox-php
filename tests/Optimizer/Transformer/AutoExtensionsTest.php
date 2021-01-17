<?php

namespace AmpProject\Optimizer\Transformer;

use AmpProject\Dom\Document;
use AmpProject\Optimizer\ErrorCollection;
use AmpProject\Tests\MarkupComparison;
use AmpProject\Tests\TestCase;
use AmpProject\Tests\TestMarkup;
use AmpProject\Validator\Spec;

/**
 * Test the AutoExtensions transformer.
 *
 * @covers \AmpProject\Optimizer\Transformer\AutoExtensions
 * @package ampproject/amp-toolbox
 */
final class AutoExtensionsTest extends TestCase
{
    use MarkupComparison;

    /**
     * Provide the data to test the transform() method.
     *
     * @return array[] Associative array of data arrays.
     */
    public function dataTransform()
    {
        return [
            'dummy test for now' => [
                TestMarkup::DOCTYPE . '<html><head>' . TestMarkup::META_CHARSET . '</head><body></body></html>',
                TestMarkup::DOCTYPE . '<html><head>' . TestMarkup::META_CHARSET . '</head><body></body></html>',
            ],
        ];
    }

    /**
     * Test the transform() method.
     *
     * @covers       \AmpProject\Optimizer\Transformer\AutoExtensions::transform()
     * @dataProvider dataTransform()
     *
     * @param string     $source       String of source HTML.
     * @param string     $expectedHtml String of expected HTML output.
     */
    public function testTransform($source, $expectedHtml)
    {
        $document    = Document::fromHtml($source);
        $transformer = new AutoExtensions(new Spec());
        $errors      = new ErrorCollection();

        $transformer->transform($document, $errors);

        $this->assertEqualMarkup($expectedHtml, $document->saveHTML());
    }
}
