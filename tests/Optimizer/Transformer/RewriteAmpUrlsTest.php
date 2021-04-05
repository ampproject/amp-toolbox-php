<?php

namespace AmpProject\Optimizer\Transformer;

use AmpProject\Dom\Document;
use AmpProject\Optimizer\Configuration\RewriteAmpUrlsConfiguration;
use AmpProject\Optimizer\ErrorCollection;
use AmpProject\Optimizer\Exception\InvalidConfiguration;
use AmpProject\Tests\MarkupComparison;
use AmpProject\Tests\TestCase;
use AmpProject\Tests\TestMarkup;

/**
 * Test the RewriteAmpUrls transformer.
 *
 * @covers \AmpProject\Optimizer\Transformer\RewriteAmpUrls
 * @package ampproject/amp-toolbox
 */
final class RewriteAmpUrlsTest extends TestCase
{
    use MarkupComparison;

    public function testThrowsOnMutuallyExclusiveFlags()
    {
        $this->expectException(InvalidConfiguration::class);
        $this->expectExceptionMessage(
            "The configuration flags 'lts' and 'rtv' are mutually exclusive and cannot be set at the same time."
        );
        $configuration = new RewriteAmpUrlsConfiguration(
            [
                'lts' => true,
                'rtv' => true
            ]
        );

        $transformer = new RewriteAmpUrls($configuration);
        $transformer->transform(new Document(), new ErrorCollection());
    }

    public function testOrderingOfScripts()
    {
        $document = Document::fromHtml(
            TestMarkup::DOCTYPE . '<html amp><head>' . TestMarkup::META_CHARSET . TestMarkup::META_VIEWPORT
            . TestMarkup::LINK_CANONICAL . TestMarkup::LINK_GOOGLE_FONT_PRECONNECT
            . TestMarkup::SCRIPT_AMPRUNTIME
            . '</head><body></body></html>'
        );

        $transformer = new RewriteAmpUrls(new RewriteAmpUrlsConfiguration());
        $errors      = new ErrorCollection();

        $transformer->transform($document, $errors);

        $this->assertCount(0, $errors);
        $this->assertSimilarMarkup(
            TestMarkup::DOCTYPE . '<html amp><head>' . TestMarkup::META_CHARSET . TestMarkup::META_VIEWPORT
            . TestMarkup::LINK_CANONICAL . TestMarkup::LINK_GOOGLE_FONT_PRECONNECT
            . '<link as="script" crossorigin="anonymous" href="https://cdn.ampproject.org/v0.mjs" rel="modulepreload">'
            . '<script async nomodule src="https://cdn.ampproject.org/v0.js"></script>'
            . '<script async crossorigin="anonymous" src="https://cdn.ampproject.org/v0.mjs" type="module"></script>'
            . '</head><body></body></html>',
            $document->saveHTML()
        );
    }
}
