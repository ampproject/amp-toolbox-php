<?php

namespace AmpProject\Tests;

use AmpProject\Html\Parser\HtmlSaxHandler;
use AmpProject\Html\Parser\ParsedAttribute;
use AmpProject\Html\Parser\ParsedTag;

/**
 * Log all SAX events during HTML traversal by the HtmlParser.
 *
 * @package ampproject/amp-toolbox
 */
final class LoggingHtmlSaxHandler implements HtmlSaxHandler
{
    /**
     * Log storage.
     *
     * @var array<string>
     */
    public $log = [];

    /**
     * Handler called when the parser found a new tag.
     *
     * @param ParsedTag $tag New tag that was found.
     * @return void
     */
    public function startTag(ParsedTag $tag)
    {
        $tag->dedupeAttributes();
        $this->log[] = "startTag({$tag->upperName()},{$this->attributesToString($tag->attributes())})";
    }

    /**
     * Handler called when the parser found a closing tag.
     *
     * @param ParsedTag $tag Closing tag that was found.
     * @return void
     */
    public function endTag(ParsedTag $tag)
    {
        $this->log[] = "endTag({$tag->upperName()})";
    }

    /**
     * Handler called when PCDATA is found.
     *
     * @param string $text The PCDATA that was found.
     * @return void
     */
    public function pcdata($text)
    {
        $this->log[] = "pcdata(\"{$text}\")";
    }

    /**
     * Handler called when RCDATA is found.
     *
     * @param string $text The RCDATA that was found.
     * @return void
     */
    public function rcdata($text)
    {
        $this->log[] = "rcdata(\"{$text}\")";
    }

    /**
     * Handler called when CDATA is found.
     *
     * @param string $text The CDATA that was found.
     * @return void
     */
    public function cdata($text)
    {
        $this->log[] = "cdata(\"{$text}\")";
    }

    /**
     * Handler called when the parser is starting to parse the document.
     *
     * @return void
     */
    public function startDoc()
    {
        $this->log[] = 'startDoc()';
    }

    /**
     * Handler called when the parsing is done.
     *
     * @return void
     */
    public function endDoc()
    {
        $this->log[] = 'endDoc()';
    }

    /**
     * Callback for informing that the parser is manufacturing a <body> tag not actually found on the page. This will be
     * followed by a startTag() with the actual body tag in question.
     *
     * @return void
     */
    public function markManufacturedBody()
    {
        $this->log[] = 'markManufacturedBody()';
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
        $this->log[] = "effectiveBodyTag({$this->attributesToString($attributes)})";
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
