<?php

namespace AmpProject\Dom;

use AmpProject\Attribute;
use AmpProject\Tag;

final class LinkManager
{

    /**
     * Document to manage the links for.
     *
     * @var Document
     */
    private $document;

    /**
     * LinkManager constructor.
     *
     * @param Document $document
     */
    public function __construct(Document $document)
    {
        $this->document = $document;
    }

    /**
     * Add a preconnect link
     *
     * @param string $href        URL to link to.
     * @param bool   $crossorigin Whether the link is crossorigin.
     */
    public function addPreconnect($href, $crossorigin = true)
    {
        $this->addLink(
            [ Attribute::REL_DNS_PREFETCH, Attribute::REL_PRECONNECT ],
            $href,
            $crossorigin ? [ Attribute::CROSSORIGIN => null ] : []
        );
    }

    /**
     * Add a link.
     *
     * @param string|string[] $rel        A 'rel' string or an array of 'rel' strings.
     * @param string          $href       URL to link to.
     * @param string[]        $attributes Associative array of attributes and their values.
     */
    public function addLink($rel, $href, $attributes = [])
    {
        $link = $this->document->createElement(Tag::LINK);
        $link->setAttribute(Attribute::REL, implode(' ', (array) $rel));
        $link->setAttribute(Attribute::HREF, $href);
        foreach ($attributes as $attribute => $value) {
            $link->setAttribute($attribute, $value);
        }

        $this->document->head->appendChild($link);
    }
}
