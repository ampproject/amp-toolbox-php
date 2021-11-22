<?php

namespace AmpProject\Optimizer\Transformer;

use AmpProject\Dom\Document;
use AmpProject\Optimizer\Configuration\MinifyHtmlConfiguration;
use AmpProject\Optimizer\Error\InvalidJson;
use AmpProject\Optimizer\Error\MissingPackage;
use AmpProject\Optimizer\ErrorCollection;
use AmpProject\Tests\ErrorComparison;
use AmpProject\Tests\MarkupComparison;
use AmpProject\Tests\TestCase;
use AmpProject\Tests\TestMarkup;
use Peast\Peast;

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
            // @see https://github.com/ampproject/amp-toolbox-php/issues/420
            'do not break Cyrillic х character' => [
                TestMarkup::DOCTYPE . '<html ⚡> <head> ' .
                TestMarkup::META_CHARSET .
                ' </head> <body><p>Ф ф	Х х	Ц ц</p></body> </html>',
                TestMarkup::DOCTYPE . '<html ⚡><head>' .
                TestMarkup::META_CHARSET .
                '</head><body><p>Ф ф	Х х	Ц ц</p></body></html>',
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

    /**
     * Provide the data to test the amp minification tests.
     *
     * @return array[] Associative array of data arrays.
     */
    public function dataAmpScriptMinification()
    {
        return [
            'test script minification' => [
                TestMarkup::DOCTYPE . '<html ⚡> <head> ' .
                TestMarkup::META_CHARSET .
                ' </head> <body>' .
                    "\n<script id=\"hello-world\" type=\"text/plain\" target=\"amp-script\">\n" .
                    "  const btn = document.querySelector('button');\n" .
                    "  btn.addEventListener('click', () => {\n" .
                    "    document.body.textContent = 'Hello World!';\n" .
                    "  });\n" .
                    "</script>\n" .
                '</body> </html>',
                TestMarkup::DOCTYPE . '<html ⚡><head>' .
                TestMarkup::META_CHARSET .
                '</head><body><script id="hello-world" type="text/plain" target="amp-script">' .
                'const btn=document.querySelector(\'button\');btn.addEventListener' .
                '(\'click\',()=>{document.body.textContent=\'Hello World!\';});' .
                '</script></body></html>'
            ]
        ];
    }

    /**
     * Test optional amp-script minification when Peast is present.
     *
     * @covers \AmpProject\Optimizer\Transformer\MinifyHtml::minifyAmpScript()
     * @dataProvider dataAmpScriptMinification()
     *
     * @param string $source       String of source HTML.
     * @param string $expectedHtml String of expected HTML output.
     */
    public function testAmpScriptMinificationWithPeast($source, $expectedHtml)
    {
        $document      = Document::fromHtml($source);
        $configuration = new MinifyHtmlConfiguration([MinifyHtmlConfiguration::MINIFY_AMP_SCRIPT => true]);
        $transformer   = new MinifyHtml($configuration);
        $errors        = new ErrorCollection();

        $transformer->transform($document, $errors);

        if (class_exists(Peast::class)) {
            $this->assertSimilarMarkup($expectedHtml, $document->saveHTML());
        } else {
            $this->markTestSkipped('The optional package mck89/peast is needed to test inline amp-script minification.');
        }
    }

    /**
     * Test optional amp-script minification when Peast is not present.
     *
     * @covers \AmpProject\Optimizer\Transformer\MinifyHtml::minifyAmpScript()
     * @dataProvider dataAmpScriptMinification()
     *
     * @param string $source       String of source HTML.
     * @param string $expectedHtml String of expected HTML output.
     */
    public function testAmpScriptMinificationWithoutPeast($source, $expectedHtml)
    {
        $document      = Document::fromHtml($source);
        $configuration = new MinifyHtmlConfiguration([MinifyHtmlConfiguration::MINIFY_AMP_SCRIPT => true]);
        $transformer   = new MinifyHtml($configuration);
        $errors        = new ErrorCollection();

        $transformer->transform($document, $errors);

        if (! class_exists(Peast::class)) {
            $expectedErrors = [
                new MissingPackage('The optional package mck89/peast is required to minify inline amp-script.'),
            ];
            $this->assertSameErrors($expectedErrors, $errors);
        } else {
            $this->markTestSkipped('Found the optional package mck89/peast.');
        }
    }
}
