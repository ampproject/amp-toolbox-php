<?php

namespace AmpProject\Dom\Middleware;

use AmpProject\Attribute;
use AmpProject\Dom\Document;
use AmpProject\Dom\Document\Encoding;
use AmpProject\Tag;

/**
 * Middleware for Document encoding.
 *
 * @package ampproject/amp-toolbox
 */
class DocumentEncoding extends BaseDocumentMiddleware
{

    /**
     * Detect the encoding of the document.
     *
     * @param string $content  Content of which to detect the encoding.
     * @return string Preprocessed string of HTML markup.
     */
    public function beforeLoad($content)
    {
        $encoding = $this->originalEncoding;

        // Check for HTML 4 http-equiv meta tags.
        foreach ($this->findTags($content, Tag::META, Attribute::HTTP_EQUIV) as $potentialHttpEquivTag) {
            $encoding = $this->extractValue($potentialHttpEquivTag, Attribute::CHARSET);
            if (false !== $encoding) {
                $httpEquivTag = $potentialHttpEquivTag;
            }
        }

        // Strip all charset tags.
        if (isset($httpEquivTag)) {
            $content = str_replace($httpEquivTag, '', $content);
        }

        // Check for HTML 5 charset meta tag. This overrides the HTML 4 charset.
        $charsetTag = $this->findTag($content, Tag::META, Attribute::CHARSET);
        if ($charsetTag) {
            $encoding = $this->extractValue($charsetTag, Attribute::CHARSET);

            // Strip the encoding if it is not the required one.
            if (strtolower($encoding) !== Encoding::AMP) {
                $content = str_replace($charsetTag, '', $content);
            }
        }

        $this->originalEncoding = $encoding;

        if (Encoding::AMP !== strtolower($this->originalEncoding)) {
            $content = $this->adaptEncoding($content);
        }

        return $content;
    }

    /**
     * Adapt the encoding of the content.
     *
     * @param string $source Source content to adapt the encoding of.
     * @return string Adapted content.
     */
    private function adaptEncoding($source)
    {
        // No encoding was provided, so we need to guess.
        if (Encoding::UNKNOWN === $this->originalEncoding && function_exists('mb_detect_encoding')) {
            $this->originalEncoding = mb_detect_encoding($source, Encoding::DETECTION_ORDER, true);
        }

        // Guessing the encoding seems to have failed, so we assume UTF-8 instead.
        // In my testing, this was not possible as long as one ISO-8859-x is in the detection order.
        if (empty($this->originalEncoding)) {
            $this->originalEncoding = Encoding::AMP; // @codeCoverageIgnore
        }

        $this->originalEncoding = $this->sanitizeEncoding($this->originalEncoding);

        // Sanitization failed, so we do a last effort to auto-detect.
        if (Encoding::UNKNOWN === $this->originalEncoding && function_exists('mb_detect_encoding')) {
            $detectedEncoding = mb_detect_encoding($source, Encoding::DETECTION_ORDER, true);
            if ($detectedEncoding !== false) {
                $this->originalEncoding = $detectedEncoding;
            }
        }

        $target = false;
        if (Encoding::AMP !== strtolower($this->originalEncoding)) {
            $target = function_exists('mb_convert_encoding')
                ? mb_convert_encoding($source, Encoding::AMP, $this->originalEncoding)
                : false;
        }

        return false !== $target ? $target : $source;
    }

    /**
     * Find a given tag with a given attribute.
     *
     * If multiple tags match, this method will only return the first one.
     *
     * @param string $content   Content in which to find the tag.
     * @param string $element   Element of the tag.
     * @param string $attribute Attribute that the tag contains.
     * @return string[] The requested tags. Returns an empty array if none found.
     */
    private function findTags($content, $element, $attribute = null)
    {
        $matches = [];
        $pattern = empty($attribute)
            ? sprintf(
                Document::HTML_FIND_TAG_WITHOUT_ATTRIBUTE_PATTERN,
                preg_quote($element, Document::HTML_FIND_TAG_DELIMITER)
            )
            : sprintf(
                Document::HTML_FIND_TAG_WITH_ATTRIBUTE_PATTERN,
                preg_quote($element, Document::HTML_FIND_TAG_DELIMITER),
                preg_quote($attribute, Document::HTML_FIND_TAG_DELIMITER)
            );

        if (preg_match($pattern, $content, $matches)) {
            return $matches;
        }

        return [];
    }

    /**
     * Find a given tag with a given attribute.
     *
     * If multiple tags match, this method will only return the first one.
     *
     * @param string $content   Content in which to find the tag.
     * @param string $element   Element of the tag.
     * @param string $attribute Attribute that the tag contains.
     * @return string|false The requested tag, or false if not found.
     */
    private function findTag($content, $element, $attribute = null)
    {
        $matches = $this->findTags($content, $element, $attribute);

        if (empty($matches)) {
            return false;
        }

        return $matches[0];
    }

    /**
     * Extract an attribute value from an HTML tag.
     *
     * @param string $tag       Tag from which to extract the attribute.
     * @param string $attribute Attribute of which to extract the value.
     * @return string|false Extracted attribute value, false if not found.
     */
    private function extractValue($tag, $attribute)
    {
        $matches = [];
        $pattern = sprintf(
            Document::HTML_EXTRACT_ATTRIBUTE_VALUE_PATTERN,
            preg_quote($attribute, Document::HTML_FIND_TAG_DELIMITER)
        );

        if (preg_match($pattern, $tag, $matches)) {
            return empty($matches['full']) ? $matches['partial'] : $matches['full'];
        }

        return false;
    }

    /**
     * Sanitize the encoding that was detected.
     *
     * If sanitization fails, it will return 'auto', letting the conversion
     * logic try to figure it out itself.
     *
     * @param string $encoding Encoding to sanitize.
     * @return string Sanitized encoding. Falls back to 'auto' on failure.
     */
    private function sanitizeEncoding($encoding)
    {
        $encoding = strtolower($encoding);

        if ($encoding === Encoding::AMP) {
            return $encoding;
        }

        if (! function_exists('mb_list_encodings')) {
            return $encoding;
        }

        static $knownEncodings = null;

        if (null === $knownEncodings) {
            $knownEncodings = array_map('strtolower', mb_list_encodings());
        }

        if (array_key_exists($encoding, Encoding::MAPPINGS)) {
            $encoding = Encoding::MAPPINGS[$encoding];
        }

        if (! in_array($encoding, $knownEncodings, true)) {
            return Encoding::UNKNOWN;
        }

        return $encoding;
    }
}
