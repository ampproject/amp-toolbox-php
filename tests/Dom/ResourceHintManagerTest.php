<?php

namespace AmpProject\Dom;

use AmpProject\Attribute;
use AmpProject\RequestDestination;
use AmpProject\Tests\MarkupComparison;
use AmpProject\Tests\TestCase;

/**
 * Tests for AmpProject\Dom\ResourceHintManager.
 *
 * @covers \AmpProject\Dom\LinkManager
 * @package ampproject/amp-toolbox
 */
class ResourceHintManagerTest extends TestCase
{
    use MarkupComparison;

    public function dataAddPreconnect()
    {
        return [
            'crossorigin false' => [
                'https://example.com',
                false,
                [
                    '<link href="https://example.com" rel="preconnect">',
                    '<link href="https://example.com" rel="dns-prefetch">'
                ]
            ],

            'crossorigin true' => [
                'https://example.com',
                true,
                [
                '<link crossorigin href="https://example.com" rel="preconnect">',
                '<link href="https://example.com" rel="dns-prefetch">'
                ]
            ]
        ];
    }

    /**
     * @dataProvider dataAddPreconnect()
     * @covers \AmpProject\Dom\LinkManager::addPreconnect()
     */
    public function testAddPreconnect($href, $crossorigin, $expectedLinks)
    {
        $document = Document::fromHtml('<body></body>');
        $document->links->addPreconnect($href, $crossorigin);

        $this->assertSimilarMarkup(
            '<head>'
            . '<meta charset="utf-8">'
            . implode('', $expectedLinks)
            . '</head>',
            $document->saveHTMLFragment($document->head)
        );
    }

    public function dataAddPreload()
    {
        return [
            'no media query' => [
                'https://example.com/test.jpg',
                RequestDestination::IMAGE,
                null,
                [
                    '<link as="image" href="https://example.com/test.jpg" rel="preload">'
                ]
            ],

            'with media query' => [
                'https://example.com/test.jpg',
                RequestDestination::IMAGE,
                '(max-width: 415px)',
                [
                    '<link as="image" href="https://example.com/test.jpg" rel="preload" media="(max-width: 415px)">'
                ]
            ],
        ];
    }

    /**
     * @dataProvider dataAddPreload()
     * @covers \AmpProject\Dom\LinkManager::addPreload()
     */
    public function testAddPreload($href, $type, $media, $expectedLinks)
    {
        $document = Document::fromHtml('<body></body>');
        $document->links->addPreload($href, $type, $media);

        $this->assertSimilarMarkup(
            '<head>'
            . '<meta charset="utf-8">'
            . implode('', $expectedLinks)
            . '</head>',
            $document->saveHTMLFragment($document->head)
        );
    }

    public function dataAddLinkTag()
    {
        return [
            'canonical link' => [
                Attribute::REL_CANONICAL,
                'https://example.com/index.html',
                [],
                [
                    '<link href="https://example.com/index.html" rel="canonical">'
                ]
            ],

            'add arbitrary attributes' => [
                Attribute::REL_NOFOLLOW,
                'https://example.com/index.html',
                [
                    'pretty' => 'please',
                    'keep' => 'away',
                ],
                [
                    '<link href="https://example.com/index.html" rel="nofollow" pretty="please" keep="away">'
                ]
            ],
        ];
    }

    /**
     * @dataProvider dataAddLinkTag()
     * @covers \AmpProject\Dom\LinkManager::add()
     */
    public function testAddLinkTag($rel, $href, $attributes, $expectedLinks)
    {
        $document = Document::fromHtml('<body></body>');
        $document->links->add($rel, $href, $attributes);

        $this->assertSimilarMarkup(
            '<head>'
            . '<meta charset="utf-8">'
            . implode('', $expectedLinks)
            . '</head>',
            $document->saveHTMLFragment($document->head)
        );
    }

    /**
     * @covers \AmpProject\Dom\LinkManager::add()
     */
    public function testLinkOrdering()
    {
        $document = Document::fromHtml(
            '<head>'
            . '<meta charset="utf-8">'
            . '<meta name="viewport" content="width=device-width">'
            . '<meta name="generator" content="woeful website wizard">'
            . '</head>'
        );

        $document->links->add('test', 'https://example.com/1');
        $document->links->add('test', 'https://example.com/2');
        $document->links->add('test', 'https://example.com/3');

        $this->assertSimilarMarkup(
            '<head>'
            . '<meta charset="utf-8">'
            . '<meta name="viewport" content="width=device-width">'
            . '<link rel="test" href="https://example.com/1">'
            . '<link rel="test" href="https://example.com/2">'
            . '<link rel="test" href="https://example.com/3">'
            . '<meta name="generator" content="woeful website wizard">'
            . '</head>',
            $document->saveHTMLFragment($document->head)
        );
    }
}
