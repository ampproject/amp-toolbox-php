<?php

namespace AmpProject\Optimizer\Transformer;

use AmpProject\Dom\Document;
use AmpProject\Optimizer\Configuration\TransformedIdentifierConfiguration;
use AmpProject\Optimizer\ErrorCollection;
use AmpProject\Tests\MarkupComparison;
use AmpProject\Tests\TestCase;
use AmpProject\Tests\TestMarkup;
use AmpProject\Validator\Spec\CssRuleset\AmpTransformed;
use AmpProject\Validator\Spec\SpecRule;

/**
 * Test the TransformedIdentifier transformer.
 *
 * @covers \AmpProject\Optimizer\Transformer\TransformedIdentifier
 * @package ampproject/amp-toolbox
 */
final class TransformedIdentifierTest extends TestCase
{
    use MarkupComparison;

    /**
     * Provide the data to test the transform() method.
     *
     * @return array[] Associative array of data arrays.
     */
    public function dataTransform()
    {
        $input = static function ($html) {
            return TestMarkup::DOCTYPE . $html . '<head>'
                   . TestMarkup::META_CHARSET . TestMarkup::META_VIEWPORT . TestMarkup::SCRIPT_AMPRUNTIME
                   . TestMarkup::LINK_FAVICON . TestMarkup::LINK_CANONICAL . TestMarkup::STYLE_AMPBOILERPLATE . TestMarkup::NOSCRIPT_AMPBOILERPLATE
                   . '</head><body></body></html>';
        };

        $expected = static function ($html) {
            return TestMarkup::DOCTYPE . $html . '<head>'
                   . TestMarkup::META_CHARSET . TestMarkup::META_VIEWPORT . TestMarkup::SCRIPT_AMPRUNTIME
                   . TestMarkup::LINK_FAVICON . TestMarkup::LINK_CANONICAL . TestMarkup::STYLE_AMPBOILERPLATE . TestMarkup::NOSCRIPT_AMPBOILERPLATE
                   . '</head><body></body></html>';
        };

        return [
            'adds identifier with default version to html tag' => [
                $input('<html ⚡>'),
                $expected('<html ⚡ transformed="self;v=1">'),
            ],

            'adds identifier with custom version to html tag' => [
                $input('<html ⚡>'),
                $expected('<html ⚡ transformed="self;v=5">'),
                [ 'version' => 5 ],
            ],

            'adds identifier without version to html tag' => [
                $input('<html ⚡>'),
                $expected('<html ⚡ transformed="self">'),
                [ 'version' => 0 ],
            ],

            'enforces CSS max byte count by default' => [
                $input('<html amp style="color:black">'),
                $expected('<html amp style="color:black" transformed="self;v=1">'),
                [],
                function (Document $document) {
                    $this->assertTrue($document->isCssMaxByteCountEnforced());
                    $this->assertEquals(AmpTransformed::SPEC[SpecRule::MAX_BYTES] - strlen('color:black'), $document->getRemainingCustomCssSpace());
                }
            ],

            'allows skipping enforcement of CSS max byte count' => [
                $input('<html data-ampdevmode>'),
                $expected('<html data-ampdevmode transformed="self;v=1">'),
                [ 'enforcedCssMaxByteCount' => false ],
                function (Document $document) {
                    $this->assertFalse($document->isCssMaxByteCountEnforced());
                    $this->assertEquals(PHP_INT_MAX, $document->getRemainingCustomCssSpace());
                }
            ],
        ];
    }

    /**
     * Test the transform() method.
     *
     * @covers       \AmpProject\Optimizer\Transformer\TransformedIdentifier::transform()
     * @dataProvider dataTransform()
     *
     * @param string   $source       String of source HTML.
     * @param string   $expectedHtml String of expected HTML output.
     * @param array    $config       Configuration to use.
     * @param callable $assert       Extra assertion to do.
     */
    public function testTransform($source, $expectedHtml, $config = [], $assert = null)
    {
        $document    = Document::fromHtml($source);
        $transformer = new TransformedIdentifier(new TransformedIdentifierConfiguration($config));
        $errors      = new ErrorCollection();

        $transformer->transform($document, $errors);

        $this->assertEqualMarkup($expectedHtml, $document->saveHTML());
        if ($assert) {
            $assert($document);
        }
    }
}
