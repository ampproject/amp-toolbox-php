<?php

namespace AmpProject\Optimizer\Transformer;

use AmpProject\Dom\Document;
use AmpProject\Optimizer\Error;
use AmpProject\Optimizer\ErrorCollection;
use AmpProject\Tests\ErrorComparison;
use AmpProject\Tests\MarkupComparison;
use AmpProject\Tests\TestMarkup;
use PHPUnit\Framework\TestCase;

/**
 * Test the AmpRuntimePreloads transformer.
 *
 * @package ampproject/amp-toolbox
 */
final class AmpRuntimePreloadsTest extends TestCase
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
        $input = static function ($head, $hints = '') {
            return TestMarkup::DOCTYPE . '<html ⚡><head>'
                   . TestMarkup::META_CHARSET . TestMarkup::META_VIEWPORT . $hints . TestMarkup::SCRIPT_AMPRUNTIME
                   . TestMarkup::LINK_FAVICON . TestMarkup::LINK_CANONICAL . TestMarkup::STYLE_AMPBOILERPLATE . TestMarkup::NOSCRIPT_AMPBOILERPLATE
                   . $head
                   . '</head><body></body></html>';
        };

        $output = static function ($head, $hints = '') {
            return TestMarkup::DOCTYPE . '<html ⚡><head>'
                   . TestMarkup::META_CHARSET . TestMarkup::META_VIEWPORT . $hints . TestMarkup::SCRIPT_AMPRUNTIME
                   . TestMarkup::LINK_FAVICON . TestMarkup::LINK_CANONICAL . TestMarkup::STYLE_AMPBOILERPLATE . TestMarkup::NOSCRIPT_AMPBOILERPLATE
                   . $head
                   . '</head><body></body></html>';
        };

        return [
            'regular documents do preload the runtime css' => [
                $input(
                    ''
                ),
                $output(
                    '',
                    '<link rel="preload" href="https://cdn.ampproject.org/v0.css" as="style">'
                ),
            ],

            'serverside-rendered documents do not preload the runtime css' => [
                $input(
                    '<style amp-runtime></style>'
                ),
                $output(
                    '<style amp-runtime></style>',
                    ''
                ),
            ],
        ];
    }

    /**
     * Test the transform() method.
     *
     * @covers       \AmpProject\Optimizer\Transformer\AmpRuntimePreloads::transform()
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
        $transformer = new AmpRuntimePreloads();
        $errors      = new ErrorCollection();

        $transformer->transform($document, $errors);

        $this->assertSimilarMarkup($expectedHtml, $document->saveHTML());
        $this->assertSameErrors($expectedErrors, $errors);
    }
}
