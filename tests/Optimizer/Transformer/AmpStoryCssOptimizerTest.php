<?php

namespace AmpProject\Optimizer\Transformer;

use AmpProject\Dom\Document;
use AmpProject\Optimizer\Configuration\AmpStoryCssOptimizerConfiguration;
use AmpProject\Optimizer\ErrorCollection;
use AmpProject\Optimizer\Transformer;
use AmpProject\Tests\ErrorComparison;
use AmpProject\Tests\MarkupComparison;
use AmpProject\Tests\TestCase;
use AmpProject\Tests\TestMarkup;

/**
 * Test the AmpStoryCssOptimizer transformer.
 *
 * @covers \AmpProject\Optimizer\Transformer\AmpStoryCssOptimizer
 * @package ampproject/amp-toolbox
 */
final class AmpStoryCssOptimizerTest extends TestCase
{
    use ErrorComparison;
    use MarkupComparison;

    public function testTransformerInstance()
    {
        $document    = Document::fromHtml('');
        $transformer = new AmpStoryCssOptimizer(new AmpStoryCssOptimizerConfiguration([]));
        $errors      = new ErrorCollection();

        $transformer->transform($document, $errors);

        $this->assertInstanceOf(Transformer::class, $transformer);
    }

    /**
     * Provide the data to test the transform() method.
     *
     * @return array[] Associative array of data arrays.
     */
    public function dataTransform()
    {
        $ampStoryScript = '<script async custom-element="amp-story" src="https://cdn.ampproject.org/v0/amp-story-1.0.js"></script>';
        $ampStoryLink   = '<link rel="stylesheet" amp-extension="amp-story" href="https://cdn.ampproject.org/v0/amp-story-1.0.css">';
        $dvhPolyfill    = '<script amp-story-dvh-polyfill>' . AmpStoryCssOptimizer::AMP_STORY_DVH_POLYFILL_CONTENT . '</script>';

        return [
            'disable_the_optimization' => [
                TestMarkup::DOCTYPE . '<html><head>' . TestMarkup::META_CHARSET . '</head><body></body></html>',
                TestMarkup::DOCTYPE . '<html><head>' . TestMarkup::META_CHARSET . '</head><body></body></html>',
            ],

            'optimization_requires_html_tag' => [
                TestMarkup::DOCTYPE . '<html><head>' . TestMarkup::META_CHARSET . '</head><body></body></html>',
                TestMarkup::DOCTYPE . '<html><head>' . TestMarkup::META_CHARSET . '</head><body></body></html>',
                [
                    AmpStoryCssOptimizerConfiguration::OPTIMIZE_AMP_STORY => true,
                ]
            ],
            'test_optimization_process' => [
                TestMarkup::DOCTYPE . '<html>'
                . '<head>' . TestMarkup::META_CHARSET . $ampStoryScript . '<style amp-custom></style></head><body>'
                . '<amp-story supports-landscape standalone poster-portrait-src="http://url.example/" publisher-logo-src="http://url.example/" publisher title>'
                . '  <amp-story-page id="my-first-page">'
                . '    <amp-story-grid-layer template="fill">'
                . '      <amp-img src="https://ampbyexample.com/img/image3.jpg" width="720" height="1280"></amp-img>'
                . '    </amp-story-grid-layer>'
                . '    <amp-story-grid-layer aspect-ratio=5:10 style="background-color: yellow; font-size: 2px;"></amp-story-grid-layer>'
                . '  </amp-story-page>'
                . '</amp-story>'
                . '</body></html>',
                TestMarkup::DOCTYPE . '<html data-story-supports-landscape>'
                . '<head>' . TestMarkup::META_CHARSET . $ampStoryScript . '<style amp-custom></style>'
                . $ampStoryLink
                . $dvhPolyfill
                . '</head><body>'
                . '<amp-story supports-landscape standalone poster-portrait-src="http://url.example/" publisher-logo-src="http://url.example/" publisher title>'
                . '  <amp-story-page id="my-first-page">'
                . '    <amp-story-grid-layer template="fill">'
                . '      <amp-img src="https://ampbyexample.com/img/image3.jpg" width="720" height="1280"></amp-img>'
                . '    </amp-story-grid-layer>'
                . '    <amp-story-grid-layer aspect-ratio="5:10" style="--aspect-ratio:5/10;background-color: yellow; font-size: 2px;"></amp-story-grid-layer>'
                . '  </amp-story-page>'
                . '</amp-story>'
                . '</body></html>',
                [
                    AmpStoryCssOptimizerConfiguration::OPTIMIZE_AMP_STORY => true,
                ]
            ],
            'optimize_amp_custom_css' => [
                TestMarkup::DOCTYPE . '<html>'
                . '<head>' . TestMarkup::META_CHARSET . $ampStoryScript
                . '<style amp-custom>foo {transform: translate3d(80vw, 0, 0);}foo {transform: translate3d(81vh, 0, 0);}</style>'
                . '</head><body></body></html>',
                TestMarkup::DOCTYPE . '<html>'
                . '<head>' . TestMarkup::META_CHARSET . $ampStoryScript
                . '<style amp-custom>foo {transform: translate3d(calc(80 * var(--story-page-vw)), 0, 0);}foo {transform: translate3d(calc(81 * var(--story-page-vh)), 0, 0);}</style>'
                . $ampStoryLink
                . $dvhPolyfill
                . '</head><body></body></html>',
                [
                    AmpStoryCssOptimizerConfiguration::OPTIMIZE_AMP_STORY => true,
                ]
            ]
        ];
    }

    /**
     * Test the transform() method.
     *
     * @covers       \AmpProject\Optimizer\Transformer\AmpStoryCssOptimizer::transform()
     * @dataProvider dataTransform()
     *
     * @param string $source       String of source HTML.
     * @param string $expectedHtml String of expected HTML output.
     * @param array  $config       Configuration data to use.
     */
    public function testTransform($source, $expectedHtml, $config = [])
    {
        $document    = Document::fromHtml($source);
        $transformer = new AmpStoryCssOptimizer(new AmpStoryCssOptimizerConfiguration($config));
        $errors      = new ErrorCollection();

        $transformer->transform($document, $errors);

        $output = $document->saveHTML();

        $this->assertEqualMarkup($expectedHtml, $output);
    }
}
