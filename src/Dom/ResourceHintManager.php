<?php

namespace AmpProject\Dom;

use AmpProject\Attribute;
use AmpProject\RequestDestination;
use AmpProject\Tag;
use DOMNode;

/**
 * Resource hint manager class that is used to manage the <link> tags within a document's <head> to give the browser
 * hints about how to prioritize resources.
 *
 * @package ampproject/amp-toolbox
 */
final class ResourceHintManager
{

    /**
     * Document to manage the resource hints for.
     *
     * @var Document
     */
    private $document;

    /**
     * Reference node to attach the resource hint to.
     *
     * @var DOMNode|null
     */
    private $referenceNode;

    /**
     * ResourceHintManager constructor.
     *
     * @param Document $document
     */
    public function __construct(Document $document)
    {
        $this->document = $document;
    }

    /**
     * Add a preconnect resource hint.
     *
     * @param string $href        URL to link to.
     * @param bool   $crossorigin Whether the link is crossorigin.
     */
    public function addPreconnect($href, $crossorigin = true)
    {
        $this->addLinkTag(
            Attribute::REL_PRECONNECT,
            $href,
            $crossorigin ? [ Attribute::CROSSORIGIN => null ] : []
        );

        // Use dns-prefetch as fallback for browser that don't support preconnect.
        // See https://web.dev/preconnect-and-dns-prefetch/#resolve-domain-name-early-with-reldns-prefetch
        $this->addLinkTag(Attribute::REL_DNS_PREFETCH, $href);
    }

    /**
     * Add a preconnect resource hint.
     *
     * @param string      $href  URL to link to.
     * @param string      $type  Optional. Type of the resource. Defaults to type 'image'.
     * @param string|null $media Optional. Media query to add to the preload. Defaults to none.
     */
    public function addPreload($href, $type = RequestDestination::IMAGE, $media = null)
    {
        // TODO: Should we enforce a valid $type here?

        $attributes = [ Attribute::AS_ => $type ];
        if (!empty($media)) {
            $attributes[Attribute::MEDIA] = $media;
        }

        $this->addLinkTag(Attribute::REL_PRELOAD, $href, $attributes);
    }

    /**
     * Add a link tag.
     *
     * @param string   $rel        A 'rel' string.
     * @param string   $href       URL to link to.
     * @param string[] $attributes Associative array of attributes and their values.
     */
    public function addLinkTag($rel, $href, $attributes = [])
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

        if ($this->referenceNode) {
            $this->referenceNode = $this->document->head->insertBefore($link, $this->referenceNode->nextSibling);
        } else {
            $this->referenceNode = $this->document->head->appendChild($link);
        }
    }
}
