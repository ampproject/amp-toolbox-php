<?php

namespace AmpProject\Optimizer\Transformer;

use AmpProject\Attribute;
use AmpProject\Dom\Document;
use AmpProject\Optimizer\Configuration\OptimizeAmpBindConfiguration;
use AmpProject\Optimizer\ErrorCollection;
use AmpProject\Tag;
use AmpProject\Tests\TestCase;

/**
 * Test the OptimizeAmpBind transformer.
 *
 * @covers \AmpProject\Optimizer\Transformer\OptimizeAmpBind
 * @covers \AmpProject\Optimizer\Configuration\OptimizeAmpBindConfiguration
 * @package ampproject/amp-toolbox
 */
final class OptimizeAmpBindTest extends TestCase
{

    const HTML = '
        <!doctype html>
        <html ⚡>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width">
            <script async src="https://cdn.ampproject.org/v0.js"></script>
            <script async custom-element="amp-bind" src="https://cdn.ampproject.org/v0/amp-bind-0.1.js"></script>
        </head>
        <body>
            <div data-amp-bind-text="foo">Hello, AMP world.</div>
        </body>
        </html>
    ';

    public function testEnabled()
    {
        $document      = Document::fromHtml(self::HTML);
        $configuration = new OptimizeAmpBindConfiguration(
            [
                'enabled' => true,
            ]
        );

        $transformer = new OptimizeAmpBind($configuration);
        $transformer->transform($document, new ErrorCollection());
        $this->assertTrue($document->html->hasAttribute(Attribute::I_AMPHTML_BINDING));
        $this->assertTrue($document->body->getElementsByTagName(Tag::DIV)->item(0)->hasAttribute(Attribute::I_AMPHTML_BINDING));
    }

    public function testDisabled()
    {
        $document      = Document::fromHtml(self::HTML);
        $configuration = new OptimizeAmpBindConfiguration(
            [
                'enabled' => false,
            ]
        );

        $transformer = new OptimizeAmpBind($configuration);
        $transformer->transform($document, new ErrorCollection());
        $this->assertFalse($document->html->hasAttribute(Attribute::I_AMPHTML_BINDING));
        $this->assertFalse($document->body->getElementsByTagName(Tag::DIV)->item(0)->hasAttribute(Attribute::I_AMPHTML_BINDING));
    }
}
