<?php

namespace AmpProject\Optimizer\Transformer;

use AmpProject\Dom\Document;
use AmpProject\Optimizer\Configuration\OptimizeViewportConfiguration;
use AmpProject\Optimizer\ErrorCollection;
use AmpProject\Tests\ErrorComparison;
use AmpProject\Tests\MarkupComparison;
use AmpProject\Tests\TestCase;
use AmpProject\Tests\TestMarkup;

/**
 * Test the OptimizeViewport transformer.
 *
 * @covers \AmpProject\Optimizer\Transformer\OptimizeViewport
 * @package ampproject/amp-toolbox
 */
final class OptimizeViewportTest extends TestCase
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
            'ensure viewport is present' => [
                TestMarkup::DOCTYPE
                . '<html ⚡><head>'
                . TestMarkup::META_CHARSET
                . '</head><body></body></html>',
                TestMarkup::DOCTYPE
                . '<html ⚡><head>'
                . TestMarkup::META_CHARSET
                . '<meta name="viewport" content="width=device-width">'
                . '</head><body></body></html>',
            ],

            'remove the initial-scale=1' => [
                TestMarkup::DOCTYPE
                . '<html ⚡><head>'
                . TestMarkup::META_CHARSET
                . '<meta name="viewport" content="width=device-width,initial-scale=1">'
                . '</head><body></body></html>',
                TestMarkup::DOCTYPE
                . '<html ⚡><head>'
                . TestMarkup::META_CHARSET
                . '<meta name="viewport" content="width=device-width">'
                . '</head><body></body></html>',
            ],

            'do not remove the initial-scale=1 when removeInitialScaleViewportProperty is false' => [
                TestMarkup::DOCTYPE
                . '<html ⚡><head>'
                . TestMarkup::META_CHARSET
                . '<meta name="viewport" content="width=device-width,initial-scale=1">'
                . '</head><body></body></html>',
                TestMarkup::DOCTYPE
                . '<html ⚡><head>'
                . TestMarkup::META_CHARSET
                . '<meta name="viewport" content="width=device-width,initial-scale=1">'
                . '</head><body></body></html>',
                [
                    OptimizeViewportConfiguration::REMOVE_INITIAL_SCALE_VIEWPORT_PROPERTY => false,
                ]
            ],

            'merge multiple meta[name=viewport] tags into one' => [
                TestMarkup::DOCTYPE
                . '<html ⚡><head>'
                . TestMarkup::META_CHARSET
                . '<meta name="viewport" content="width=device-width,user-scalable=no">'
                . '<meta name="viewport" content="width=device-width,initial-scale=2">'
                . '<meta name="viewport" content="width=device-width,user-scalable=yes">'
                . '<meta name="viewport" content="width=device-width,minimum-scale=0.5">'
                . '<meta name="viewport" content="width=device-width,unrecognized=1">'
                . '</head><body></body></html>',
                TestMarkup::DOCTYPE
                . '<html ⚡><head>'
                . TestMarkup::META_CHARSET
                . '<meta name="viewport" content="width=device-width,user-scalable=yes,initial-scale=2,minimum-scale=0.5,unrecognized=1">'
                . '</head><body></body></html>',
            ],
        ];
    }

    /**
     * Test the transform() method.
     *
     * @dataProvider dataTransform()
     *
     * @param string $source       String of source HTML.
     * @param string $expectedHtml String of expected HTML output.
     * @param array  $config       Configuration to use.
     */
    public function testTransform($source, $expectedHtml, $config = [])
    {
        $document      = Document::fromHtml($source);
        $configuration = new OptimizeViewportConfiguration($config);
        $transformer   = new OptimizeViewport($configuration);
        $errors        = new ErrorCollection();

        $transformer->transform($document, $errors);
        $this->assertSimilarMarkup($expectedHtml, $document->saveHTML());
    }
}
