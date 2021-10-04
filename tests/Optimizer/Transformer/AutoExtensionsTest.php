<?php

namespace AmpProject\Optimizer\Transformer;

use AmpProject\Dom\Document;
use AmpProject\Extension;
use AmpProject\Optimizer\Configuration\AutoExtensionsConfiguration;
use AmpProject\Optimizer\Error;
use AmpProject\Optimizer\ErrorCollection;
use AmpProject\Tests\ErrorComparison;
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
            'keep html without extensions clean' => [
                TestMarkup::DOCTYPE . '<html><head>' . TestMarkup::META_CHARSET . '</head><body></body></html>',
                TestMarkup::DOCTYPE . '<html><head>' . TestMarkup::META_CHARSET . '</head><body></body></html>',
            ],

            'add missing extensions' => [
                TestMarkup::DOCTYPE . '<html><head>' . TestMarkup::META_CHARSET . '</head><body><amp-anim></amp-anim></body></html>',
                TestMarkup::DOCTYPE . '<html><head>' . TestMarkup::META_CHARSET
                . '<script async custom-element="amp-anim" src="https://cdn.ampproject.org/v0/amp-anim-0.1.js"></script>'
                . '</head><body><amp-anim></amp-anim></body></html>',
            ],

            'do not include extension if set in ignore list' => [
                TestMarkup::DOCTYPE . '<html><head>' . TestMarkup::META_CHARSET . '</head><body>'
                . '    <form class="sample-form" method="GET" action="/documentation/examples/api/submit-form" target="_top">'
                . '        <input type="search" placeholder="Search..." name="search">'
                . '        <input type="submit" value="OK">'
                . '    </form>'
                . '</body></html>',
                TestMarkup::DOCTYPE . '<html><head>' . TestMarkup::META_CHARSET
                . '</head><body>'
                . '<form class="sample-form" method="GET" action="/documentation/examples/api/submit-form" target="_top">'
                . '<input type="search" placeholder="Search..." name="search"><input type="submit" value="OK"></form>'
                . '</body></html>',
                [],
                [
                    AutoExtensionsConfiguration::IGNORED_EXTENSIONS => [Extension::FORM]
                ]
            ],

            'add amp-access and amp-access-scroll scripts when amp-access is present' => [
                TestMarkup::DOCTYPE . '<html><head>' . TestMarkup::META_CHARSET
                . '    <script id="amp-access" type="application/json">'
                . '        {'
                . '            "vendor": "scroll",'
                . '            "namespace": "scroll"'
                . '        }'
                . '    </script>'
                . '</head><body>'
                . '    <section amp-access="NOT scroll.scroll">'
                . '        ad goes here'
                . '    </section>'
                . '</body></html>',
                TestMarkup::DOCTYPE . '<html><head>' . TestMarkup::META_CHARSET
                . '    <script async custom-element="amp-access" src="https://cdn.ampproject.org/v0/amp-access-0.1.js"></script>'
                . '    <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>'
                . '    <script async custom-element="amp-access-scroll" src="https://cdn.ampproject.org/v0/amp-access-scroll-0.1.js"></script>'
                . '    <script id="amp-access" type="application/json">'
                . '        {'
                . '            "vendor": "scroll",'
                . '            "namespace": "scroll"'
                . '        }'
                . '    </script>'
                . '</head><body>'
                . '    <section amp-access="NOT scroll.scroll">'
                . '        ad goes here'
                . '    </section>'
                . '</body></html>',
            ],

            'add amp-access-scroll scripts when amp-access is present in an array of multiple access providers' => [
                TestMarkup::DOCTYPE . '<html><head>' . TestMarkup::META_CHARSET
                . '    <script id="amp-access" type="application/json">'
                . '        ['
                . '            {'
                . '                "vendor": "scroll",'
                . '                "namespace": "scroll"'
                . '            }'
                .          ']'
                . '    </script>'
                . '</head><body>'
                . '    <section amp-access="NOT scroll.scroll">'
                . '        ad goes here'
                . '    </section>'
                . '</body></html>',
                TestMarkup::DOCTYPE . '<html><head>' . TestMarkup::META_CHARSET
                . '    <script async custom-element="amp-access" src="https://cdn.ampproject.org/v0/amp-access-0.1.js"></script>'
                . '    <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>'
                . '    <script async custom-element="amp-access-scroll" src="https://cdn.ampproject.org/v0/amp-access-scroll-0.1.js"></script>'
                . '    <script id="amp-access" type="application/json">'
                . '        ['
                . '            {'
                . '                "vendor": "scroll",'
                . '                "namespace": "scroll"'
                . '            }'
                .          ']'
                . '    </script>'
                . '</head><body>'
                . '    <section amp-access="NOT scroll.scroll">'
                . '        ad goes here'
                . '    </section>'
                . '</body></html>',
            ],

            'keep unneeded amp-youtube extension when removeUnneededExtensions is false' => [
                TestMarkup::DOCTYPE . '<html><head>' . TestMarkup::META_CHARSET
                . '<script async custom-element="amp-youtube" src="https://cdn.ampproject.org/v0/amp-youtube-0.1.js"></script>'
                . '<script async custom-element="amp-anim" src="https://cdn.ampproject.org/v0/amp-anim-0.1.js"></script>'
                . '</head><body><amp-anim></amp-anim></body></html>',
                TestMarkup::DOCTYPE . '<html><head>' . TestMarkup::META_CHARSET
                . '<script async custom-element="amp-youtube" src="https://cdn.ampproject.org/v0/amp-youtube-0.1.js"></script>'
                . '<script async custom-element="amp-anim" src="https://cdn.ampproject.org/v0/amp-anim-0.1.js"></script>'
                . '</head><body><amp-anim></amp-anim></body></html>',
            ],

            'remove unneeded amp-youtube and amp-carousel extensions when removeUnneededExtensions is true' => [
                TestMarkup::DOCTYPE . '<html><head>' . TestMarkup::META_CHARSET
                . '<script async custom-element="amp-youtube" src="https://cdn.ampproject.org/v0/amp-youtube-0.1.js"></script>'
                . '<script async src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js" custom-element="amp-carousel"></script>'
                . '<script async custom-element="amp-anim" src="https://cdn.ampproject.org/v0/amp-anim-0.1.js"></script>'
                . '</head><body><amp-anim></amp-anim></body></html>',
                TestMarkup::DOCTYPE . '<html><head>' . TestMarkup::META_CHARSET
                . '<script async custom-element="amp-anim" src="https://cdn.ampproject.org/v0/amp-anim-0.1.js"></script>'
                . '</head><body><amp-anim></amp-anim></body></html>',
                [],
                [
                    AutoExtensionsConfiguration::REMOVE_UNNEEDED_EXTENSIONS => true,
                ]
            ],

            'keep unneeded amp-carousel extension when removeUnneededExtensions is true and amp-lightbox-gallery is present' => [
                TestMarkup::DOCTYPE . '<html><head>' . TestMarkup::META_CHARSET
                . '<script async src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js" custom-element="amp-carousel"></script>'
                . '</head><body>'
                . '<amp-img src="https://example.com/cat.jpg" width="100" height="100" lightbox></amp-img>'
                . '<amp-img src="https://example.com/dog.jpg" width="100" height="100" lightbox></amp-img>'
                . '<amp-img src="https://example.com/bird.jpg" width="100" height="100" lightbox></amp-img>'
                . '</body></html>',
                TestMarkup::DOCTYPE . '<html><head>' . TestMarkup::META_CHARSET
                . '<script async src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js" custom-element="amp-carousel"></script>'
                . '<script async custom-element="amp-lightbox-gallery" src="https://cdn.ampproject.org/v0/amp-lightbox-gallery-0.1.js"></script>'
                . '</head><body>'
                . '<amp-img src="https://example.com/cat.jpg" width="100" height="100" lightbox></amp-img>'
                . '<amp-img src="https://example.com/dog.jpg" width="100" height="100" lightbox></amp-img>'
                . '<amp-img src="https://example.com/bird.jpg" width="100" height="100" lightbox></amp-img>'
                . '</body></html>',
                [],
                [
                    AutoExtensionsConfiguration::REMOVE_UNNEEDED_EXTENSIONS => true,
                ]
            ],
        ];
    }

    /**
     * Test the transform() method.
     *
     * @covers       \AmpProject\Optimizer\Transformer\AutoExtensions::transform()
     * @dataProvider dataTransform()
     *
     * @param string                  $source         String of source HTML.
     * @param string                  $expectedHtml   String of expected HTML output.
     * @param ErrorCollection|Error[] $expectedErrors Set of expected errors.
     * @param array                   $config         Configuration data to use.
     */
    public function testTransform($source, $expectedHtml, $expectedErrors = [], $config = [])
    {
        $document    = Document::fromHtml($source);
        $transformer = new AutoExtensions(new AutoExtensionsConfiguration($config), new Spec());
        $errors      = new ErrorCollection();

        $transformer->transform($document, $errors);
        $this->assertEqualMarkup($expectedHtml, $document->saveHTML());
        $this->assertSameErrors($expectedErrors, $errors);
    }
}
