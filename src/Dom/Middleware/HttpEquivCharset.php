<?php

namespace AmpProject\Dom\Middleware;

use AmpProject\Attribute;
use AmpProject\Dom\Document;
use AmpProject\Dom\Element;
use AmpProject\Tag;
use DOMComment;

/**
 * Middleware for http-equiv charset.
 *
 * @package ampproject/amp-toolbox
 */
class HttpEquivCharset extends BaseDocumentMiddleware
{

    /**
     * Add a http-equiv charset meta tag to the document's <head> node.
     *
     * This is needed to make the DOMDocument behave as it should in terms of encoding.
     * See: http://php.net/manual/en/domdocument.loadhtml.php#78243.
     *
     * @param string $html HTML string to add the http-equiv charset to.
     * @return string Adapted string of HTML.
     */
    public function beforeLoad($html)
    {
        $count = 0;

        // We try first to detect an existing <head> node.
        $html = preg_replace(
            Document::HTML_GET_HEAD_OPENING_TAG_PATTERN,
            Document::HTML_GET_HEAD_OPENING_TAG_REPLACEMENT,
            $html,
            1,
            $count
        );

        // If no <head> was found, we look for the <html> tag instead.
        if ($count < 1) {
            $html = preg_replace(
                Document::HTML_GET_HTML_OPENING_TAG_PATTERN,
                Document::HTML_GET_HTML_OPENING_TAG_REPLACEMENT,
                $html,
                1,
                $count
            );
        }

        // Finally, we just prepend the head with the required http-equiv charset.
        if ($count < 1) {
            $html = '<head>' . Document::HTTP_EQUIV_META_TAG . '</head>' . $html;
        }

        return $html;
    }

    /**
     * Remove http-equiv charset again.
     *
     * @param Document $document Document to be processed.
     */
    public function afterLoad(Document $document)
    {
        $meta = $document->head->firstChild;

        // We might have leading comments we need to preserve here.
        while ($meta instanceof DOMComment) {
            $meta = $meta->nextSibling;
        }

        if (
            $meta instanceof Element
            && Tag::META === $meta->tagName
            && Document::HTML_HTTP_EQUIV_VALUE === $meta->getAttribute(Attribute::HTTP_EQUIV)
            && (Document::HTML_HTTP_EQUIV_CONTENT_VALUE) === $meta->getAttribute(Attribute::CONTENT)
        ) {
            $document->head->removeChild($meta);
        }
    }
}
