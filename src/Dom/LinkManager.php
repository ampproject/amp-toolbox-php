<?php

namespace AmpProject\Dom;

use AmpProject\Attribute;
use AmpProject\Tag;
use DOMNode;

final class LinkManager
{

    /**
     * Document to manage the links for.
     *
     * @var Document
     */
    private $document;

    /**
     * Reference node to attach the link to.
     *
     * @var DOMNode|null
     */
    private $referenceNode;

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
            Attribute::REL_PRECONNECT,
            $href,
            $crossorigin ? [ Attribute::CROSSORIGIN => null ] : []
        );

        // Use dns-prefetch as fallback for browser that don't support preconnect.
        // See https://web.dev/preconnect-and-dns-prefetch/#resolve-domain-name-early-with-reldns-prefetch
        $this->addLink(Attribute::REL_DNS_PREFETCH, $href);
    }

    /**
     * Add a link.
     *
     * @param string   $rel        A 'rel' string.
     * @param string   $href       URL to link to.
     * @param string[] $attributes Associative array of attributes and their values.
     */
    public function addLink($rel, $href, $attributes = [])
    {
        $link = $this->document->createElement(Tag::LINK);
        $link->setAttribute(Attribute::REL, $rel);
        $link->setAttribute(Attribute::HREF, $href);
        foreach ($attributes as $attribute => $value) {
            $link->setAttribute($attribute, $value);
        }

        if (!isset($this->referenceNode)) {
            $this->referenceNode = $this->document->viewport;
        }

        $this->referenceNode = $this->document->head->insertBefore($link, $this->referenceNode->nextSibling);
    }
}
