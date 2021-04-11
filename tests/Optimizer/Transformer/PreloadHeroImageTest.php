<?php

namespace AmpProject\Optimizer\Transformer;

use AmpProject\Dom\Document;
use AmpProject\Optimizer\Configuration\PreloadHeroImageConfiguration;
use AmpProject\Optimizer\Error;
use AmpProject\Optimizer\ErrorCollection;
use AmpProject\Tests\ErrorComparison;
use AmpProject\Tests\MarkupComparison;
use AmpProject\Tests\TestCase;
use AmpProject\Tests\TestMarkup;

/**
 * Test the PreloadHeroImage transformer.
 *
 * @covers \AmpProject\Optimizer\Transformer\PreloadHeroImage
 * @package ampproject/amp-toolbox
 */
final class PreloadHeroImageTest extends TestCase
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
        $input = static function ($body, $preloads = '') {
            return TestMarkup::DOCTYPE . '<html ⚡><head>'
                   . TestMarkup::META_CHARSET . TestMarkup::META_VIEWPORT . $preloads . TestMarkup::SCRIPT_AMPRUNTIME
                   . TestMarkup::LINK_FAVICON . TestMarkup::LINK_CANONICAL . TestMarkup::STYLE_AMPBOILERPLATE . TestMarkup::NOSCRIPT_AMPBOILERPLATE
                   . '</head><body>'
                   . $body
                   . '</body></html>';
        };

        $output = static function ($body, $preloads = '') {
            return TestMarkup::DOCTYPE . '<html ⚡><head>'
                   . TestMarkup::META_CHARSET . TestMarkup::META_VIEWPORT . $preloads . TestMarkup::SCRIPT_AMPRUNTIME
                   . TestMarkup::LINK_FAVICON . TestMarkup::LINK_CANONICAL . TestMarkup::STYLE_AMPBOILERPLATE . TestMarkup::NOSCRIPT_AMPBOILERPLATE
                   . '</head><body>'
                   . $body
                   . '</body></html>';
        };

        return [
            'detects regular image as hero image' => [
                $input(
                    '<amp-img width="500" height="400" src="/img1.png"></amp-img>'
                    . '<amp-img width="500" height="400" src="/img2.png"></amp-img>'
                    . '<amp-img width="500" height="400" src="/img3.png"></amp-img>'
                ),
                $output(
                    '<amp-img data-hero width="500" height="400" src="/img1.png" i-amphtml-ssr><img class="i-amphtml-fill-content i-amphtml-replaced-content" decoding="async" loading="lazy" src="/img1.png"></amp-img>'
                    . '<amp-img width="500" height="400" src="/img2.png"></amp-img>'
                    . '<amp-img width="500" height="400" src="/img3.png"></amp-img>'
                ),
            ],

            'skips tiny images' => [
                $input(
                    '<amp-img width="100" height="100" src="/img1.png"></amp-img>'
                    . '<amp-img width="500" height="400" src="/img2.png"></amp-img>'
                    . '<amp-img width="500" height="400" src="/img3.png"></amp-img>'
                ),
                $output(
                    '<amp-img width="100" height="100" src="/img1.png"></amp-img>'
                    . '<amp-img data-hero width="500" height="400" src="/img2.png" i-amphtml-ssr><img class="i-amphtml-fill-content i-amphtml-replaced-content" decoding="async" loading="lazy" src="/img2.png"></amp-img>'
                    . '<amp-img width="500" height="400" src="/img3.png"></amp-img>'
                ),
            ],

            'throws error when past data-hero maximum' => [
                $input(
                    '<amp-img width="500" height="400" src="/foo.png"></amp-img>'
                    . '<amp-img data-hero width="500" height="400" src="/hero1.png"></amp-img>'
                    . '<amp-img data-hero width="500" height="400" src="/hero2.png"></amp-img>'
                    . '<amp-img data-hero width="500" height="400" src="/hero3.png"></amp-img>'
                    . '<amp-img data-hero width="500" height="400" src="/hero4.png"></amp-img>'
                    . '<amp-img data-hero width="500" height="400" src="/hero5.png"></amp-img>'
                ),
                $output(
                    '<amp-img width="500" height="400" src="/foo.png"></amp-img>'
                    . '<amp-img data-hero width="500" height="400" src="/hero1.png" i-amphtml-ssr><img class="i-amphtml-fill-content i-amphtml-replaced-content" decoding="async" src="/hero1.png"></amp-img>'
                    . '<amp-img data-hero width="500" height="400" src="/hero2.png" i-amphtml-ssr><img class="i-amphtml-fill-content i-amphtml-replaced-content" decoding="async" src="/hero2.png"></amp-img>'
                    . '<amp-img data-hero width="500" height="400" src="/hero3.png"></amp-img>'
                    . '<amp-img data-hero width="500" height="400" src="/hero4.png"></amp-img>'
                    . '<amp-img data-hero width="500" height="400" src="/hero5.png"></amp-img>'
                ),
                [
                    Error\TooManyHeroImages::whenPastMaximum(),
                ],
            ],

            'throws error when scrset detected on image to be preloaded' => [
                $input(
                    '<amp-img data-hero media="(min-width: 250px)" width="500" height="400" src="https://example-com.cdn.ampproject.org/hero1.png" srcset="test 100w test2 3dpr"></amp-img>'
                    . '<amp-img data-hero media="(min-width: 250px)" width="500" height="400" src="https://example-com.cdn.ampproject.org/hero2.png"></amp-img>'
                ),
                $output(
                    '<amp-img data-hero media="(min-width: 250px)" width="500" height="400" i-amphtml-ssr src="https://example-com.cdn.ampproject.org/hero1.png" srcset="test 100w test2 3dpr">'
                    . '<img class="i-amphtml-fill-content i-amphtml-replaced-content" decoding="async" src="https://example-com.cdn.ampproject.org/hero1.png" srcset="test 100w test2 3dpr">'
                    . '</amp-img>'
                    . '<amp-img data-hero media="(min-width: 250px)" width="500" height="400" i-amphtml-ssr src="https://example-com.cdn.ampproject.org/hero2.png">'
                    . '<img class="i-amphtml-fill-content i-amphtml-replaced-content" decoding="async" src="https://example-com.cdn.ampproject.org/hero2.png">'
                    . '</amp-img>',
                    '<link as="image" data-hero href="https://example-com.cdn.ampproject.org/hero2.png" media="(min-width: 250px)" rel="preload">'
                ),
                [
                    Error\CannotPreloadImage::fromImageWithSrcsetAttribute(
                        Document::fromHtmlFragment(
                            '<amp-img data-hero media="(min-width: 250px)" width="500" height="400" src="https://example-com.cdn.ampproject.org/hero1.png" srcset="test 100w test2 3dpr"></amp-img>'
                        )->body->firstChild
                    ),
                ],
            ],

            'preloads scrset image when configured to do so' => [
                $input(
                    '<amp-img data-hero media="(min-width: 250px)" width="500" height="400" src="https://example-com.cdn.ampproject.org/hero.png" srcset="test 100w test2 3dpr" sizes="100vw"></amp-img>'
                ),
                $output(
                    '<amp-img data-hero media="(min-width: 250px)" width="500" height="400" i-amphtml-ssr src="https://example-com.cdn.ampproject.org/hero.png" srcset="test 100w test2 3dpr" sizes="100vw">'
                    . '<img class="i-amphtml-fill-content i-amphtml-replaced-content" decoding="async" src="https://example-com.cdn.ampproject.org/hero.png" srcset="test 100w test2 3dpr" sizes="100vw">'
                    . '</amp-img>',
                    '<link as="image" data-hero href="https://example-com.cdn.ampproject.org/hero.png" imagesizes="100vw" imagesrcset="test 100w test2 3dpr" media="(min-width: 250px)" rel="preload">'
                ),
                [],
                [
                    PreloadHeroImageConfiguration::PRELOAD_SRCSET => true,
                ]
            ],

            'fetches placeholders for animations' => [
                $input(
                    '<amp-anim data-hero width="500" height="400" src="/foo.gif">'
                    . '<amp-img placeholder width="500" height="400" src="/foo.png"></amp-img>'
                    . '</amp-anim>'
                ),
                $output(
                    '<amp-anim data-hero width="500" height="400" src="/foo.gif">'
                    . '<amp-img placeholder data-hero width="500" height="400" src="/foo.png" i-amphtml-ssr><img class="i-amphtml-fill-content i-amphtml-replaced-content" decoding="async" src="/foo.png"></amp-img>'
                    . '</amp-anim>'
                )
            ],

            'fetches placeholders for youtube' => [
                $input(
                    '<amp-youtube data-hero data-videoid="mGENRKrdoGY" layout="responsive" width="480" height="270">'
                    . '<amp-img placeholder width="480" height="270" src="/foo.png"></amp-img>'
                    . '</amp-youtube>'
                ),
                $output(
                    '<amp-youtube data-hero data-videoid="mGENRKrdoGY" layout="responsive" width="480" height="270">'
                    . '<amp-img placeholder data-hero width="480" height="270" src="/foo.png" i-amphtml-ssr><img class="i-amphtml-fill-content i-amphtml-replaced-content" decoding="async" src="/foo.png"></amp-img>'
                    . '</amp-youtube>'
                )
            ],

            'fetches descendant placeholders and regular images' => [
                $input(
                    '<amp-vimeo data-hero data-videoid="27246366" layout="responsive" width="480" height="270">'
                    . '<div placeholder><p><amp-img width="480" height="270" src="/hero1.png"></amp-img></p></div>'
                    . '</amp-vimeo>'
                    . '<amp-wistia-player data-hero data-media-hashed-id="u8p9wq6mq8" layout="responsive" width="480" height="270">'
                    . '<div placeholder><p><img width="480" height="270" src="/hero2.png"></p></div>'
                    . '</amp-wistia-player>'
                ),
                $output(
                    '<amp-vimeo data-hero data-videoid="27246366" layout="responsive" width="480" height="270">'
                    . '<div placeholder><p><amp-img data-hero width="480" height="270" src="/hero1.png" i-amphtml-ssr><img class="i-amphtml-fill-content i-amphtml-replaced-content" decoding="async" src="/hero1.png"></amp-img></p></div>'
                    . '</amp-vimeo>'
                    . '<amp-wistia-player data-hero data-media-hashed-id="u8p9wq6mq8" layout="responsive" width="480" height="270">'
                    . '<div placeholder><p><img width="480" height="270" src="/hero2.png"></p></div>'
                    . '</amp-wistia-player>'
                )
            ],

            'fetches background images in CSS' => [
                $input(
                    '<div style="background-image:url(\'https://example.com/img1.jpg\')"></div>'
                    . '<div style="background-image:url(\'https://example.com/hero1.jpg\')" data-hero></div>'
                    . '<div data-amp-original-style="background-image:url(https://example.com/hero2.jpg)" data-hero></div>'
                ),
                $output(
                    '<div style="background-image:url(\'https://example.com/img1.jpg\')"></div>'
                    . '<div style="background-image:url(\'https://example.com/hero1.jpg\')" data-hero></div>'
                    . '<div data-amp-original-style="background-image:url(https://example.com/hero2.jpg)" data-hero></div>'
                ),
                [],
                [
                    PreloadHeroImageConfiguration::INLINE_STYLE_BACKUP_ATTRIBUTE => 'data-amp-original-style',
                ]
            ],

            'copies alt, attribution, referrerpolicy, src, srcset, sizes and title attributes' => [
                $input(
                    '<amp-img data-hero width="500" height="400" src="/img1.png" alt="Some image" attribution="by someone" referrerpolicy="unknown" sizes="many" srcset="for2.jpg w320, foo3.jpg" title="the title"></amp-img>'
                ),
                $output(
                    '<amp-img data-hero width="500" height="400" src="/img1.png" alt="Some image" attribution="by someone" referrerpolicy="unknown" sizes="many" srcset="for2.jpg w320, foo3.jpg" title="the title" i-amphtml-ssr>'
                    . '<img class="i-amphtml-fill-content i-amphtml-replaced-content" decoding="async" src="/img1.png" alt="Some image" attribution="by someone" referrerpolicy="unknown" sizes="many" srcset="for2.jpg w320, foo3.jpg" title="the title">'
                    . '</amp-img>'
                ),
                [],
                [
                    PreloadHeroImageConfiguration::PRELOAD_SRCSET => true,
                ]
            ],

            'inlines object-fit and object-position' => [
                $input(
                    '<amp-img data-hero width="500" height="400" src="/img1.png" object-fit="cover" object-position="right top"></amp-img>'
                ),
                $output(
                    '<amp-img data-hero width="500" height="400" src="/img1.png" object-fit="cover" object-position="right top" i-amphtml-ssr>'
                    . '<img class="i-amphtml-fill-content i-amphtml-replaced-content" decoding="async" src="/img1.png" style="object-fit:cover;object-position:right top;">'
                    . '</amp-img>'
                ),
            ],

            'hero image candidates are turned into hero images' => [
                $input(
                    '<amp-img data-hero-candidate width="500" height="400" src="/img1.png"></amp-img>'
                ),
                $output(
                    '<amp-img data-hero data-hero-candidate width="500" height="400" src="/img1.png" i-amphtml-ssr>'
                    . '<img class="i-amphtml-fill-content i-amphtml-replaced-content" decoding="async" loading="lazy" src="/img1.png">'
                    . '</amp-img>'
                ),
            ],

            'hero image candidates after paragraphs are turned into hero images' => [
                $input(
                    '<p>First Paragraph</p>'
                    . '<p>Second Paragraph</p>'
                    . '<amp-img data-hero-candidate width="500" height="400" src="/img1.png"></amp-img>'
                ),
                $output(
                    '<p>First Paragraph</p>'
                    . '<p>Second Paragraph</p>'
                    . '<amp-img data-hero data-hero-candidate width="500" height="400" src="/img1.png" i-amphtml-ssr>'
                    . '<img class="i-amphtml-fill-content i-amphtml-replaced-content" decoding="async" loading="lazy" src="/img1.png">'
                    . '</amp-img>'
                ),
            ],

            'superfluous candidates are ignored without throwing an error' => [
                $input(
                    '<amp-img width="500" height="400" src="/foo.png"></amp-img>'
                    . '<amp-img data-hero-candidate width="500" height="400" src="/hero1.png"></amp-img>'
                    . '<amp-img data-hero-candidate width="500" height="400" src="/hero2.png"></amp-img>'
                    . '<amp-img data-hero-candidate width="500" height="400" src="/hero3.png"></amp-img>'
                    . '<amp-img data-hero-candidate width="500" height="400" src="/hero4.png"></amp-img>'
                    . '<amp-img data-hero-candidate width="500" height="400" src="/hero5.png"></amp-img>'
                ),
                $output(
                    '<amp-img width="500" height="400" src="/foo.png"></amp-img>'
                    . '<amp-img data-hero data-hero-candidate width="500" height="400" src="/hero1.png" i-amphtml-ssr><img class="i-amphtml-fill-content i-amphtml-replaced-content" decoding="async" loading="lazy" src="/hero1.png"></amp-img>'
                    . '<amp-img data-hero data-hero-candidate width="500" height="400" src="/hero2.png" i-amphtml-ssr><img class="i-amphtml-fill-content i-amphtml-replaced-content" decoding="async" loading="lazy" src="/hero2.png"></amp-img>'
                    . '<amp-img data-hero-candidate width="500" height="400" src="/hero3.png"></amp-img>'
                    . '<amp-img data-hero-candidate width="500" height="400" src="/hero4.png"></amp-img>'
                    . '<amp-img data-hero-candidate width="500" height="400" src="/hero5.png"></amp-img>'
                ),
            ],

            'hero images trump hero image candidates' => [
                $input(
                    '<amp-img width="500" height="400" src="/foo.png"></amp-img>'
                    . '<amp-img data-hero-candidate width="500" height="400" src="/hero1.png"></amp-img>'
                    . '<amp-img data-hero-candidate width="500" height="400" src="/hero2.png"></amp-img>'
                    . '<amp-img data-hero-candidate width="500" height="400" src="/hero3.png"></amp-img>'
                    . '<amp-img data-hero-candidate width="500" height="400" src="/hero4.png"></amp-img>'
                    . '<amp-img data-hero width="500" height="400" src="/hero5.png"></amp-img>'
                ),
                $output(
                    '<amp-img width="500" height="400" src="/foo.png"></amp-img>'
                    . '<amp-img data-hero-candidate width="500" height="400" src="/hero1.png"></amp-img>'
                    . '<amp-img data-hero-candidate width="500" height="400" src="/hero2.png"></amp-img>'
                    . '<amp-img data-hero-candidate width="500" height="400" src="/hero3.png"></amp-img>'
                    . '<amp-img data-hero-candidate width="500" height="400" src="/hero4.png"></amp-img>'
                    . '<amp-img data-hero width="500" height="400" src="/hero5.png" i-amphtml-ssr><img class="i-amphtml-fill-content i-amphtml-replaced-content" decoding="async" src="/hero5.png"></amp-img>'
                ),
            ],

            'strips lazy-loading attribute' => [
                $input(
                    '<amp-img width="500" height="400" src="/img1.png" loading="lazy"></amp-img>'
                ),
                $output(
                    '<amp-img data-hero width="500" height="400" src="/img1.png" i-amphtml-ssr><img class="i-amphtml-fill-content i-amphtml-replaced-content" decoding="async" loading="lazy" src="/img1.png"></amp-img>'
                ),
            ],

            'keeps lazy-loading attribute for amp-story-player poster images' => [
                $input(
                    '<amp-story-player layout="fixed" width="360" height="600">'
                    . '<a href="https://preview.amp.dev/documentation/examples/introduction/stories_in_amp/">'
                    . '<img src="https://amp.dev/static/samples/img/story_dog2_portrait.jpg" width="360" height="600" loading="lazy" data-amp-story-player-poster-img>'
                    . 'Stories in AMP - Hello World'
                    . '</a>'
                    . '</amp-story-player>'
                ),
                $output(
                    '<amp-story-player layout="fixed" width="360" height="600">'
                    . '<a href="https://preview.amp.dev/documentation/examples/introduction/stories_in_amp/">'
                    . '<img src="https://amp.dev/static/samples/img/story_dog2_portrait.jpg" width="360" height="600" loading="lazy" data-amp-story-player-poster-img>'
                    . 'Stories in AMP - Hello World'
                    . '</a>'
                    . '</amp-story-player>'
                ),
            ],
        ];
    }

    /**
     * Test the transform() method.
     *
     * @covers       \AmpProject\Optimizer\Transformer\PreloadHeroImage::transform()
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
        $transformer = new PreloadHeroImage(new PreloadHeroImageConfiguration($config));
        $errors      = new ErrorCollection();

        $transformer->transform($document, $errors);

        $this->assertSimilarMarkup($expectedHtml, $document->saveHTML());
        $this->assertSameErrors($expectedErrors, $errors);
    }
}
