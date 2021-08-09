<?php

namespace AmpProject\Optimizer\Transformer;

use AmpProject\Dom\Document;
use AmpProject\Optimizer\Configuration\MinifyHtmlConfiguration;
use AmpProject\Optimizer\Error\InvalidJson;
use AmpProject\Optimizer\ErrorCollection;
use AmpProject\Tests\ErrorComparison;
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
    use ErrorComparison;
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
                'apid' => 'XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX',
                'apv'  => '1.0',
                'apn'  => 'My AMP Website',
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
            ],

            'throws exception during JSON minification due to invalid JSON data' => [
                TestMarkup::DOCTYPE . '<html ⚡> <head> ' .
                TestMarkup::META_CHARSET .
                ' </head> <body>' .
                '<script type="application/json">invalid json</script>' .
                '</body> </html>',
                TestMarkup::DOCTYPE . '<html ⚡><head>' .
                TestMarkup::META_CHARSET .
                '</head><body>' .
                '<script type="application/json">invalid json</script>' .
                '</body></html>',
                [
                    new InvalidJson('Error decoding JSON: Syntax error'),
                ]
            ],
            'mustache template with commented template tags' => [
                TestMarkup::DOCTYPE . '<html ⚡> <head> ' .
                TestMarkup::META_CHARSET .
                ' </head> <body>' .
                '    <!-- Comment before template. -->' .
                '    <amp-list src="cart.json" layout="fixed-height" height="80" binding="no">' .
                '        <template type="amp-mustache">' .
                '            <div id="cart">' .
                '                <!-- Comment inside template but not a template tag. -->' .
                '                <table>' .
                '                    <tr>' .
                '                        <!-- {{#cart_items}} -->' .
                '                        <td>{{name}}</td>' .
                '                        <!-- {{/cart_items}} -->' .
                '                    </tr>' .
                '                </table>' .
                '            </div>' .
                '        </template>' .
                '    </amp-list>' .
                '    <p>Hello <strong>World</strong></p>' .
                '    <!-- Comment before closing body tag. -->' .
                '</body> </html>',
                TestMarkup::DOCTYPE . '<html ⚡><head>' .
                TestMarkup::META_CHARSET .
                '</head><body>' .
                '<amp-list src="cart.json" layout="fixed-height" height="80" binding="no"> ' .
                '<template type="amp-mustache"> <div id="cart">  ' .
                '<table> <tr> <!-- {{#cart_items}} --> <td>{{name}}</td> <!-- {{/cart_items}} --> </tr> </table> ' .
                '</div> </template> ' .
                '</amp-list> <p>Hello <strong>World</strong></p>' .
                '</body></html>',
            ],
        ];
    }

    /**
     * Test the transform() method.
     *
     * @covers       \AmpProject\Optimizer\Transformer\MinifyHtml::transform()
     * @dataProvider dataTransform()
     *
     * @param string                  $source         String of source HTML.
     * @param string                  $expectedHtml   String of expected HTML output.
     * @param ErrorCollection|Error[] $expectedErrors Set of expected errors.
     */
    public function testTransform($source, $expectedHtml, $expectedErrors = [])
    {
        $document      = Document::fromHtml($source);
        $configuration = new MinifyHtmlConfiguration();
        $transformer   = new MinifyHtml($configuration);
        $errors        = new ErrorCollection();

        $transformer->transform($document, $errors);

        $this->assertSimilarMarkup($expectedHtml, $document->saveHTML());
        $this->assertSameErrors($expectedErrors, $errors);
    }
}
