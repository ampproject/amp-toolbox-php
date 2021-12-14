<?php

namespace AmpProject\Tests;

use AmpProject\Html\Parser\DocLocator;
use AmpProject\Html\Parser\HtmlSaxHandlerWithLocation;
use AmpProject\Html\Parser\ParsedAttribute;
use AmpProject\Html\Parser\ParsedTag;

/**
 * Log all SAX events during HTML traversal by the HtmlParser.
 *
 * @package ampproject/amp-toolbox
 */
final class LoggingHtmlSaxHandlerWithLocation implements HtmlSaxHandlerWithLocation
{
    /**
     * DocLocator instance to use.
     *
     * @var DocLocator|null
     */
    public $locator;

    /**
     * Log storage.
     *
     * @var array<string>
     */
    public $log = [];

    /**
     * Called prior to parsing a document, that is, before startTag().
     *
     * @param DocLocator $locator A locator instance which provides access to the line/column information while SAX
     *                            events are being received by the handler.
     * @return void
     */
    public function setDocLocator(DocLocator $locator)
    {
        $this->locator = $locator;
    }

    /**
     * Handler called when the parser found a new tag.
     *
     * @param ParsedTag $tag New tag that was found.
     * @return void
     */
    public function startTag(ParsedTag $tag)
    {
        $tag->dedupeAttributes();
        $this->log[] = ":{$this->locator->getLine()}:{$this->locator->getColumn()}: "
                       . "startTag({$tag->upperName()},{$this->attributesToString($tag->attributes())})";
    }

    /**
     * Handler called when the parser found a closing tag.
     *
     * @param ParsedTag $tag Closing tag that was found.
     * @return void
     */
    public function endTag(ParsedTag $tag)
    {
        $this->log[] = ":{$this->locator->getLine()}:{$this->locator->getColumn()}: endTag({$tag->upperName()})";
    }

    /**
     * Handler called when PCDATA is found.
     *
     * @param string $text The PCDATA that was found.
     * @return void
     */
    public function pcdata($text)
    {
        $this->log[] = ":{$this->locator->getLine()}:{$this->locator->getColumn()}: pcdata(\"{$text}\")";
    }

    /**
     * Handler called when RCDATA is found.
     *
     * @param string $text The RCDATA that was found.
     * @return void
     */
    public function rcdata($text)
    {
        $this->log[] = ":{$this->locator->getLine()}:{$this->locator->getColumn()}: rcdata(\"{$text}\")";
    }

    /**
     * Handler called when CDATA is found.
     *
     * @param string $text The CDATA that was found.
     * @return void
     */
    public function cdata($text)
    {
        $this->log[] = ":{$this->locator->getLine()}:{$this->locator->getColumn()}: cdata(\"{$text}\")";
    }

    /**
     * Handler called when the parser is starting to parse the document.
     *
     * @return void
     */
    public function startDoc()
    {
        $this->log[] = ":{$this->locator->getLine()}:{$this->locator->getColumn()}: startDoc()";
    }

    /**
     * Handler called when the parsing is done.
     *
     * @return void
     */
    public function endDoc()
    {
        $this->log[] = ":{$this->locator->getLine()}:{$this->locator->getColumn()}: endDoc()";
    }

    /**
     * Callback for informing that the parser is manufacturing a <body> tag not actually found on the page. This will be
     * followed by a startTag() with the actual body tag in question.
     *
     * @return void
     */
    public function markManufacturedBody()
    {
        // NodeJS tests do not track this event.
    }

    /**
     * HTML5 defines how parsers treat documents with multiple body tags: they merge the attributes from the later ones
     * into the first one. Therefore, just before the parser sends the endDoc event, it will also send this event which
     * will provide the attributes from the effective body tag to the client (the handler).
     *
     * @param array<ParsedAttribute> $attributes Array of parsed attributes.
     * @return void
     */
    public function effectiveBodyTag($attributes)
    {
        // NodeJS tests do not track this event.
    }

    /**
     * Convert an array of attributes into a string representation.
     *
     * @param ParsedAttribute[] $attributes Attributes to convert into a string.
     * @return string String representation of the attributes.
     */
    private function attributesToString($attributes)
    {
        $implosion = implode(
            ',',
            array_map(
                static function (ParsedAttribute $attribute) {
                    return "{$attribute->name()},{$attribute->value()}";
                },
                $attributes
            )
        );

        return "[{$implosion}]";
    }
}
