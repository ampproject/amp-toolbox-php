<?php

namespace AmpProject\Dom;

use AmpProject\Attribute;
use AmpProject\RequestDestination;
use AmpProject\Tag;
use DOMNode;

/**
 * Link manager class that is used to manage the <link> tags within a document's <head>.
 *
 * These can be used for example to give the browser hints about how to prioritize resources.
 *
 * @package ampproject/amp-toolbox
 */
final class LinkManager
{

    /**
     * Document to manage the links for.
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
     * LinkManager constructor.
     *
     * @param Document $document
     */
    public function __construct(Document $document)
    {
        $this->document = $document;
    }

    /**
     * Add a dns-prefetch resource hint.
     *
     * @see https://www.w3.org/TR/resource-hints/#dns-prefetch
     *
     * @param string $href Origin to prefetch the DNS for.
     */
    public function addDnsPrefetch($href)
    {
        $this->add(Attribute::REL_DNS_PREFETCH, $href);
    }

    /**
     * Add a preconnect resource hint.
     *
     * @see https://www.w3.org/TR/resource-hints/#dfn-preconnect
     *
     * @param string $href      Origin to preconnect to.
     * @param bool   $anonymous Optional. Whether to make a crossorigin link anonymous. Defaults to true.
     */
    public function addPreconnect($href, $anonymous = true)
    {
        $this->add(
            Attribute::REL_PRECONNECT,
            $href,
            $anonymous ? [Attribute::CROSSORIGIN => Attribute::CROSSORIGIN_ANONYMOUS] : []
        );

        // Use dns-prefetch as fallback for browser that don't support preconnect.
        // See https://web.dev/preconnect-and-dns-prefetch/#resolve-domain-name-early-with-reldns-prefetch
        $this->addDnsPrefetch($href);
    }

    /**
     * Add a prefetch resource hint.
     *
     * @see https://www.w3.org/TR/resource-hints/#prefetch
     *
     * @param string $href      URL to the resource to prefetch.
     * @param string $type      Optional. Type of the resource. Defaults to type 'image'.
     * @param bool   $anonymous Optional. Whether to make a crossorigin link anonymous. Defaults to true.
     */
    public function addPrefetch($href, $type = RequestDestination::IMAGE, $anonymous = true)
    {
        // TODO: Should we enforce a valid $type here?

        $attributes = [Attribute::AS_ => $type];

        if ($anonymous) {
            $attributes[Attribute::CROSSORIGIN] = Attribute::CROSSORIGIN_ANONYMOUS;
        }

        $this->add(Attribute::REL_PREFETCH, $href, $attributes);
    }

    /**
     * Add a preload declarative fetch primitive.
     *
     * @see https://www.w3.org/TR/preload/
     *
     * @param string      $href  URL to link to.
     * @param string      $type  Optional. Type of the resource. Defaults to type 'image'.
     * @param string|null $media Optional. Media query to add to the preload. Defaults to none.
     */
    public function addPreload($href, $type = RequestDestination::IMAGE, $media = null)
    {
        // TODO: Should we enforce a valid $type here?

        $attributes = [Attribute::AS_ => $type];

        if (!empty($media)) {
            $attributes[Attribute::MEDIA] = $media;
        }

        $this->add(Attribute::REL_PRELOAD, $href, $attributes);
    }

    /**
     * Add a prerender resource hint.
     *
     * @see https://www.w3.org/TR/resource-hints/#prerender
     *
     * @param string $href URL of the page to prerender.
     */
    public function addPrerender($href)
    {
        $this->add(Attribute::REL_PRERENDER, $href);
    }

    /**
     * Add a link to the document.
     *
     * @param string   $rel        A 'rel' string.
     * @param string   $href       URL to link to.
     * @param string[] $attributes Associative array of attributes and their values.
     */
    public function add($rel, $href, $attributes = [])
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
