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
        return [
            'adds identifier with default version to html tag' => [
                '<html ⚡>',
                '<html ⚡ transformed="self;v=1">',
            ],

            'adds identifier with custom version to html tag' => [
                '<html ⚡>',
                '<html ⚡ transformed="self;v=5">',
                [ 'version' => 5 ],
            ],

            'adds identifier without version to html tag' => [
                '<html ⚡>',
                '<html ⚡ transformed="self">',
                [ 'version' => 0 ],
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
        $document    = Document::fromHtml($this->fullHtml($source));
        $transformer = new TransformedIdentifier(new TransformedIdentifierConfiguration($config));
        $errors      = new ErrorCollection();

        $transformer->transform($document, $errors);

        $this->assertEqualMarkup($this->fullHtml($expectedHtml), $document->saveHTML());
        if ($assert) {
            $assert($document);
        }
    }

    /**
     * @covers \AmpProject\Optimizer\Transformer\TransformedIdentifier::transform()
     */
    public function testItEnforcesCssMaxByteCountByDefault()
    {
        $document    = Document::fromHtml($this->fullHtml('<html amp style="color:black">'));
        $transformer = new TransformedIdentifier(new TransformedIdentifierConfiguration([]));
        $errors      = new ErrorCollection();

        $transformer->transform($document, $errors);

        $this->assertEqualMarkup(
            $this->fullHtml('<html amp style="color:black" transformed="self;v=1">'),
            $document->saveHTML()
        );
        $this->assertTrue($document->isCssMaxByteCountEnforced());
        $this->assertEquals(
            AmpTransformed::SPEC[SpecRule::MAX_BYTES] - strlen('color:black'),
            $document->getRemainingCustomCssSpace()
        );
    }

    /**
     * @covers \AmpProject\Optimizer\Transformer\TransformedIdentifier::transform()
     */
    public function testItAllowsSkippingEnforcementOfCssMaxByteCount()
    {
        $document    = Document::fromHtml($this->fullHtml('<html data-ampdevmode>'));
        $transformer = new TransformedIdentifier(
            new TransformedIdentifierConfiguration([ 'enforcedCssMaxByteCount' => false ])
        );
        $errors      = new ErrorCollection();

        $transformer->transform($document, $errors);

        $this->assertEqualMarkup(
            $this->fullHtml('<html data-ampdevmode transformed="self;v=1">'),
            $document->saveHTML()
        );
        $this->assertFalse($document->isCssMaxByteCountEnforced());
        $this->assertEquals(PHP_INT_MAX, $document->getRemainingCustomCssSpace());
    }

    /**
     * Get the full HTML document based on the HTML tag to use.
     *
     * @param string $html HTML tag to use.
     * @return string Full HTML document to use.
     */
    private function fullHtml($html)
    {
        return TestMarkup::DOCTYPE . $html . '<head>'
               . TestMarkup::META_CHARSET . TestMarkup::META_VIEWPORT . TestMarkup::SCRIPT_AMPRUNTIME
               . TestMarkup::LINK_FAVICON . TestMarkup::LINK_CANONICAL . TestMarkup::STYLE_AMPBOILERPLATE . TestMarkup::NOSCRIPT_AMPBOILERPLATE
               . '</head><body></body></html>';
    }
}
