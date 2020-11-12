<?php

namespace AmpProject;

use AmpProject\Dom\Document;
use DOMElement;
use DOMNode;

/**
 * Central helper functionality for all Amp-related PHP code.
 *
 * @package ampproject/common
 */
final class Amp
{

    /**
     * List of AMP attribute tags that can be appended to the <html> element.
     *
     * The *_ALT version represent a Unicode variation of the lightning emoji.
     * @see https://github.com/ampproject/amphtml/issues/25990
     *
     * @var string[]
     */
    public static function tags()
    {
        [
            Attribute::AMP,
            Attribute::AMP_EMOJI,
            Attribute::AMP_EMOJI_ALT,
            Attribute::AMP4ADS,
            Attribute::amp4adsemoji(),
            Attribute::amp4adsemojialt(),
            Attribute::AMP4EMAIL,
            Attribute::amp4emailemoji(),
            Attribute::amp4emailemojialt(),
        ];
    }

    /**
     * Host and scheme of the AMP cache.
     *
     * @var string
     */
    const CACHE_HOST = 'https://cdn.ampproject.org';

    /**
     * URL of the AMP cache.
     *
     * @var string
     */
    const CACHE_ROOT_URL = 'https://cdn.ampproject.org/';

    /**
     * List of valid AMP formats.
     *
     * @var string[]
     */
    public static function formats()
    {
        return ['AMP', 'AMP4EMAIL', 'AMP4ADS'];
    }

    /**
     * List of dynamic components
     *
     * This list should be kept in sync with the list of dynamic components at:
     *
     * @see https://github.com/ampproject/amphtml/blob/292dc66b8c0bb078bbe3a1bca960e8f494f7fc8f/spec/amp-cache-guidelines.md#guidelines-adding-a-new-cache-to-the-amp-ecosystem
     *
     * @var array[]
     */
    public static function dynamicComponents()
    {
        return [
            Attribute::CUSTOM_ELEMENT => [Extension::GEO],
            Attribute::CUSTOM_TEMPLATE => [],
        ];
    }

    /**
     * Array of custom element names that delay rendering.
     *
     * @var string[]
     */
    public static function renderDelayingExtensions()
    {
        return [
            Extension::DYNAMIC_CSS_CLASSES,
            Extension::EXPERIMENT,
            Extension::STORY,
        ];
    }

    /**
     * Standard boilerplate CSS stylesheet.
     *
     * @var string
     */
    const BOILERPLATE_CSS = 'body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}'; // phpcs:ignore Generic.Files.LineLength.TooLong

    /**
     * Boilerplate CSS stylesheet for the <noscript> tag.
     *
     * @var string
     */
    const BOILERPLATE_NOSCRIPT_CSS = 'body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}'; // phpcs:ignore Generic.Files.LineLength.TooLong

    /**
     * Boilerplate CSS stylesheet for Amp4Ads & Amp4Email.
     *
     * @var string
     */
    const AMP4ADS_AND_AMP4EMAIL_BOILERPLATE_CSS = 'body{visibility:hidden}';

    /**
     * AMP runtime tag name.
     *
     * @var string
     */
    const RUNTIME = 'amp-runtime';

    // AMP classes reserved for internal use.
    const LAYOUT_ATTRIBUTE          = 'i-amphtml-layout';
    const NO_BOILERPLATE_ATTRIBUTE  = 'i-amphtml-no-boilerplate';
    const LAYOUT_CLASS_PREFIX       = 'i-amphtml-layout-';
    const LAYOUT_SIZE_DEFINED_CLASS = 'i-amphtml-layout-size-defined';
    const SIZER_ELEMENT             = 'i-amphtml-sizer';
    const INTRINSIC_SIZER_ELEMENT   = 'i-amphtml-intrinsic-sizer';

    /**
     * Check if a given node is the AMP runtime script.
     *
     * The AMP runtime script node is of the form '<script async src="https://cdn.ampproject.org...v0.js"></script>'.
     *
     * @param DOMNode $node Node to check.
     * @return bool Whether the given node is the AMP runtime script.
     */
    public static function isRuntimeScript(DOMNode $node)
    {
        if (
            ! $node instanceof DOMElement
            || ! self::isAsyncScript($node)
            || self::isExtension($node)
        ) {
            return false;
        }

        $src = $node->getAttribute(Attribute::SRC);

        if (strpos($src, self::CACHE_ROOT_URL) !== 0) {
            return false;
        }

        if (
            substr($src, -6) !== '/v0.js'
            && substr($src, -14) !== '/amp4ads-v0.js'
        ) {
            return false;
        }

        return true;
    }

    /**
     * Check if a given node is the AMP viewer script.
     *
     * The AMP viewer script node is of the form '<script async
     * src="https://cdn.ampproject.org/v0/amp-viewer-integration-...js>"</script>'.
     *
     * @param DOMNode $node Node to check.
     * @return bool Whether the given node is the AMP runtime script.
     */
    public static function isViewerScript(DOMNode $node)
    {
        if (
            ! $node instanceof DOMElement
            || ! self::isAsyncScript($node)
            || self::isExtension($node)
        ) {
            return false;
        }

        $src = $node->getAttribute(Attribute::SRC);

        if (strpos($src, self::CACHE_HOST . '/v0/amp-viewer-integration-') !== 0) {
            return false;
        }

        if (substr($src, -3) !== '.js') {
            return false;
        }

        return true;
    }

    /**
     * Check if a given node is an AMP extension.
     *
     * @param DOMNode $node Node to check.
     * @return bool Whether the given node is the AMP runtime script.
     */
    public static function isExtension(DOMNode $node)
    {
        return ! empty(self::getExtensionName($node));
    }

    /**
     * Get the name of the extension.
     *
     * Returns an empty string if the name of the extension could not be retrieved.
     *
     * @param DOMNode $node Node to get the name of.
     * @return string Name of the custom node or template. Empty string if none found.
     */
    public static function getExtensionName(DOMNode $node)
    {
        if (! $node instanceof DOMElement || $node->tagName !== Tag::SCRIPT) {
            return '';
        }

        if ($node->hasAttribute(Attribute::CUSTOM_ELEMENT)) {
            return $node->getAttribute(Attribute::CUSTOM_ELEMENT);
        }

        if ($node->hasAttribute(Attribute::CUSTOM_TEMPLATE)) {
            return $node->getAttribute(Attribute::CUSTOM_TEMPLATE);
        }

        if ($node->hasAttribute(Attribute::HOST_SERVICE)) {
            return $node->getAttribute(Attribute::HOST_SERVICE);
        }

        return '';
    }

    /**
     * Check whether a given node is a script for a render-delaying extension.
     *
     * @param DOMNode $node Node to check.
     * @return bool Whether the node is a script for a render-delaying extension.
     */
    public static function isRenderDelayingExtension(DOMNode $node)
    {
        $extensionName = self::getExtensionName($node);

        if (empty($extensionName)) {
            return false;
        }

        return in_array($extensionName, self::renderDelayingExtensions(), true);
    }

    /**
     * Check whether a given DOM node is an AMP custom element.
     *
     * @param DOMNode $node DOM node to check.
     * @return bool Whether the checked DOM node is an AMP custom element.
     */
    public static function isCustomElement(DOMNode $node)
    {
        return $node instanceof DOMElement && strpos($node->tagName, Extension::PREFIX) === 0;
    }

    /**
     * Check whether the given document is an AMP story.
     *
     * @param Document $document Document of the page to check within.
     * @return bool Whether the provided document is an AMP story.
     */
    public static function isAmpStory(Document $document)
    {
        foreach ($document->head->childNodes as $node) {
            if (
                $node instanceof DOMElement
                &&
                $node->tagName === Tag::SCRIPT
                &&
                $node->getAttribute(Attribute::CUSTOM_ELEMENT) === Extension::STORY
            ) {
                return true;
            }
        }

        return false;
    }

    /**
     * Check whether a given node is an AMP template.
     *
     * @param DOMNode $node Node to check.
     * @return bool Whether the node is an AMP template.
     */
    public static function isTemplate(DOMNode $node)
    {
        if (! $node instanceof DOMElement) {
            return false;
        }

        if ($node->tagName === Tag::TEMPLATE) {
            return true;
        }

        if (
            $node->tagName === Tag::SCRIPT
            && $node->hasAttribute(Attribute::TEMPLATE)
            && $node->getAttribute(Attribute::TEMPLATE) === Extension::MUSTACHE
        ) {
            return true;
        }

        return false;
    }

    /**
     * Check whether a given node is an async <script> element.
     *
     * @param DOMNode $node Node to check.
     * @return bool Whether the given node is an async <script> element.
     */
    private static function isAsyncScript(DOMNode $node)
    {
        if (
            ! $node instanceof DOMElement
            || $node->tagName !== Tag::SCRIPT
        ) {
            return false;
        }

        if (
            ! $node->hasAttribute(Attribute::SRC)
            || ! $node->hasAttribute(Attribute::ASYNC)
        ) {
            return false;
        }

        return true;
    }

    /**
     * Check whether a given node is an AMP iframe.
     *
     * @param DOMNode $node Node to check.
     * @return bool Whether the node is an AMP iframe.
     */
    public static function isAmpIframe(DOMNode $node)
    {
        if (! $node instanceof DOMElement) {
            return false;
        }

        return $node->tagName === Extension::IFRAME
               || $node->tagName === Extension::VIDEO_IFRAME;
    }
}
