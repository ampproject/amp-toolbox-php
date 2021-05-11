<?php

namespace AmpProject\Dom;

use AmpProject\Attribute;
use AmpProject\RequestDestination;
use AmpProject\Tests\MarkupComparison;
use AmpProject\Tests\TestCase;

/**
 * Tests for AmpProject\Dom\LinkManager.
 *
 * @covers \AmpProject\Dom\LinkManager
 * @package ampproject/amp-toolbox
 */
class LinkManagerTest extends TestCase
{
    use MarkupComparison;

    public function dataAddDnsPrefetch()
    {
        return [
            'example origin' => [
                'https://example.com',
                [
                    '<link href="https://example.com" rel="dns-prefetch">'
                ]
            ],
        ];
    }

    /**
     * @dataProvider dataAddDnsPrefetch()
     * @covers \AmpProject\Dom\LinkManager::addDnsPrefetch()
     */
    public function testAddDnsPrefetch($href, $expectedLinks)
    {
        $document = Document::fromHtml('<body></body>');
        $document->links->addDnsPrefetch($href);

        $this->assertSimilarMarkup(
            '<head>'
            . '<meta charset="utf-8">'
            . implode('', $expectedLinks)
            . '</head>',
            $document->saveHTMLFragment($document->head)
        );
    }

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
            ],

            'crossorigin anonymous' => [
                'https://example.com',
                Attribute::CROSSORIGIN_ANONYMOUS,
                [
                    '<link crossorigin="anonymous" href="https://example.com" rel="preconnect">',
                    '<link href="https://example.com" rel="dns-prefetch">'
                ]
            ],

            'crossorigin use-credentials' => [
                'https://example.com',
                Attribute::CROSSORIGIN_USE_CREDENTIALS,
                [
                    '<link crossorigin="use-credentials" href="https://example.com" rel="preconnect">',
                    '<link href="https://example.com" rel="dns-prefetch">'
                ]
            ],
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

    public function dataAddPrefetch()
    {
        return [
            'crossorigin false' => [
                'https://example.com/test.jpg',
                RequestDestination::IMAGE,
                false,
                [
                    '<link as="image" href="https://example.com/test.jpg" rel="prefetch">'
                ]
            ],

            'crossorigin true' => [
                'https://example.com/test.jpg',
                RequestDestination::IMAGE,
                true,
                [
                    '<link crossorigin as="image" href="https://example.com/test.jpg" rel="prefetch">'
                ]
            ],

            'crossorigin anonymous' => [
                'https://example.com/test.jpg',
                RequestDestination::IMAGE,
                Attribute::CROSSORIGIN_ANONYMOUS,
                [
                    '<link crossorigin="anonymous" as="image" href="https://example.com/test.jpg" rel="prefetch">'
                ]
            ],

            'crossorigin use-credentials' => [
                'https://example.com/test.jpg',
                RequestDestination::IMAGE,
                Attribute::CROSSORIGIN_USE_CREDENTIALS,
                [
                    '<link crossorigin="use-credentials" as="image" href="https://example.com/test.jpg" rel="prefetch">'
                ]
            ],
        ];
    }

    /**
     * @dataProvider dataAddPrefetch()
     * @covers \AmpProject\Dom\LinkManager::addPrefetch()
     */
    public function testAddPrefetch($href, $type, $crossorigin, $expectedLinks)
    {
        $document = Document::fromHtml('<body></body>');
        $document->links->addPrefetch($href, $type, $crossorigin);

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
            'no media query, crossorigin false' => [
                'https://example.com/test.jpg',
                RequestDestination::IMAGE,
                null,
                false,
                [
                    '<link as="image" href="https://example.com/test.jpg" rel="preload">'
                ]
            ],

            'with media query' => [
                'https://example.com/test.jpg',
                RequestDestination::IMAGE,
                '(max-width: 415px)',
                false,
                [
                    '<link as="image" href="https://example.com/test.jpg" rel="preload" media="(max-width: 415px)">'
                ]
            ],

            'crossorigin true' => [
                'https://example.com/test.jpg',
                RequestDestination::IMAGE,
                null,
                true,
                [
                    '<link crossorigin as="image" href="https://example.com/test.jpg" rel="preload">'
                ]
            ],

            'crossorigin anonymous' => [
                'https://example.com/test.jpg',
                RequestDestination::IMAGE,
                null,
                Attribute::CROSSORIGIN_ANONYMOUS,
                [
                    '<link crossorigin="anonymous" as="image" href="https://example.com/test.jpg" rel="preload">'
                ]
            ],

            'crossorigin use-credentials' => [
                'https://example.com/test.jpg',
                RequestDestination::IMAGE,
                null,
                Attribute::CROSSORIGIN_USE_CREDENTIALS,
                [
                    '<link crossorigin="use-credentials" as="image" href="https://example.com/test.jpg" rel="preload">'
                ]
            ],
        ];
    }

    /**
     * @dataProvider dataAddPreload()
     * @covers \AmpProject\Dom\LinkManager::addPreload()
     */
    public function testAddPreload($href, $type, $media, $crossorigin, $expectedLinks)
    {
        $document = Document::fromHtml('<body></body>');
        $document->links->addPreload($href, $type, $media, $crossorigin);

        $this->assertSimilarMarkup(
            '<head>'
            . '<meta charset="utf-8">'
            . implode('', $expectedLinks)
            . '</head>',
            $document->saveHTMLFragment($document->head)
        );
    }

    public function dataAddPrerender()
    {
        return [
            'example origin' => [
                'https://example.com',
                [
                    '<link href="https://example.com" rel="prerender">'
                ]
            ],
        ];
    }

    /**
     * @dataProvider dataAddPrerender()
     * @covers \AmpProject\Dom\LinkManager::addPrerender()
     */
    public function testAddPrerender($href, $expectedLinks)
    {
        $document = Document::fromHtml('<body></body>');
        $document->links->addPrerender($href);

        $this->assertSimilarMarkup(
            '<head>'
            . '<meta charset="utf-8">'
            . implode('', $expectedLinks)
            . '</head>',
            $document->saveHTMLFragment($document->head)
        );
    }

    public function dataAdd()
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
                    'keep'   => 'away',
                ],
                [
                    '<link href="https://example.com/index.html" rel="nofollow" pretty="please" keep="away">'
                ]
            ],
        ];
    }

    /**
     * @dataProvider dataAdd()
     * @covers \AmpProject\Dom\LinkManager::add()
     */
    public function testAdd($rel, $href, $attributes, $expectedLinks)
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
