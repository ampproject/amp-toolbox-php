<?php

namespace AmpProject\Optimizer\Transformer;

use AmpProject\Dom\Document;
use AmpProject\Optimizer\Configuration\MinifyHtmlConfiguration;
use AmpProject\Optimizer\ErrorCollection;
use AmpProject\Tests\MarkupComparison;
use AmpProject\Tests\TestCase;
use AmpProject\Tests\TestMarkup;

/**
 * Test the MinifyHtml transformer.
 *
 * @covers \AmpProject\Optimizer\Transformer\MinifyHtml
 * @package ampproject/amp-toolbox
 */
final class MinifyHtmlTest extends TestCase
{
    use MarkupComparison;

    /**
     * Provide the data to test the transform() method.
     *
     * @return array[] Associative array of data arrays.
     */
    public function dataTransform()
    {
        $jsonData = [
            'vars' => [
                'apid'    => 'XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX',
                'apv'     => '1.0',
                'apn'     => 'My AMP Website',
            ],
        ];

        return [
            'removes unneeded spaces' => [
                TestMarkup::DOCTYPE . '<html ⚡> <head> ' .
                TestMarkup::META_CHARSET .
                ' </head> <body> </body> </html>',
                TestMarkup::DOCTYPE . '<html ⚡><head>' .
                TestMarkup::META_CHARSET .
                '</head><body></body></html>',
            ],

            'removes comment before doctype' => [
                '<!-- This should be removed -->' . TestMarkup::DOCTYPE . '<html ⚡> <head> ' .
                TestMarkup::META_CHARSET .
                ' </head> <body> </body> </html>',
                TestMarkup::DOCTYPE . '<html ⚡><head>' .
                TestMarkup::META_CHARSET .
                '</head><body></body></html>',
            ],

            'minifies json data' => [
                TestMarkup::DOCTYPE . '<html ⚡> <head> ' .
                TestMarkup::META_CHARSET .
                ' </head> <body>' .
                '<script type="application/json">' .
                json_encode($jsonData, JSON_PRETTY_PRINT) .
                '</script>' .
                '</body> </html>',
                TestMarkup::DOCTYPE . '<html ⚡><head>' .
                TestMarkup::META_CHARSET .
                '</head><body>' .
                '<script type="application/json">' .
                '{"vars":{"apid":"XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX","apv":"1.0","apn":"My AMP Website"}}' .
                '</script>' .
                '</body></html>',
            ]
        ];
    }

    /**
     * Test the transform() method.
     *
     * @covers       \AmpProject\Optimizer\Transformer\AmpBoilerplate::transform()
     * @dataProvider dataTransform()
     *
     * @param string $source       String of source HTML.
     * @param string $expectedHtml String of expected HTML output.
     */
    public function testTransform($source, $expectedHtml)
    {
        $document      = Document::fromHtml($source);
        $configuration = new MinifyHtmlConfiguration();
        $transformer   = new MinifyHtml($configuration);
        $errors        = new ErrorCollection();

        $transformer->transform($document, $errors);
        $this->assertSimilarMarkup($expectedHtml, $document->saveHTML());
    }
}
