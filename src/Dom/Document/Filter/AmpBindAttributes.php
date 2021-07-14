<?php

namespace AmpProject\Dom\Document\Filter;

use AmpProject\Dom\Document;
use AmpProject\Dom\Document\AfterSaveFilter;
use AmpProject\Dom\Document\BeforeLoadFilter;
use AmpProject\Dom\Document\Option;
use AmpProject\Dom\Options;

/**
 * Amp bind attributes filter.
 *
 * @package ampproject/amp-toolbox
 */
class AmpBindAttributes implements BeforeLoadFilter, AfterSaveFilter
{

    /**
     * Options instance to use.
     *
     * @var Options
     */
    private $options;

    /**
     * Store the names of the amp-bind attributes that were converted so that we can restore them later on.
     *
     * @var array<string>
     */
    private $convertedAmpBindAttributes = [];

    /**
     * AmpBindAttributes constructor.
     *
     * @param Options $options Options instance to use.
     */
    public function __construct(Options $options)
    {
        $this->options = $options;
    }

    /**
     * Replace AMP binding attributes with something that libxml can parse (as HTML5 data-* attributes).
     *
     * This is necessary because attributes in square brackets are not understood in PHP and
     * get dropped with an error raised:
     * > Warning: DOMDocument::loadHTML(): error parsing attribute name
     *
     * @link https://www.ampproject.org/docs/reference/components/amp-bind
     *
     * @param string $html HTML containing amp-bind attributes.
     * @return string HTML with AMP binding attributes replaced with HTML5 data-* attributes.
     */
    public function beforeLoad($html)
    {
        /**
         * Replace callback.
         *
         * @param array $tagMatches Tag matches.
         * @return string Replacement.
         */
        $replaceCallback = function ($tagMatches) {

            // Strip the self-closing slash as long as it is not an attribute value, like for the href attribute.
            $oldAttrs = rtrim(preg_replace('#(?<!=)/$#', '', $tagMatches['attrs']));

            $newAttrs = '';
            $offset   = 0;
            while (
                preg_match(
                    Document::AMP_BIND_SQUARE_BRACKETS_ATTR_PATTERN,
                    substr($oldAttrs, $offset),
                    $attrMatches
                )
            ) {
                $offset += strlen($attrMatches[0]);

                if ('[' === $attrMatches['name'][0]) {
                    $attrName = trim($attrMatches['name'], '[]');
                    $newAttrs .= ' ' . Document::AMP_BIND_DATA_ATTR_PREFIX . $attrName;
                    if (isset($attrMatches['value'])) {
                        $newAttrs .= $attrMatches['value'];
                    }
                    $this->convertedAmpBindAttributes[] = $attrName;
                } else {
                    $newAttrs .= $attrMatches[0];
                }
            }

            // Bail on parse error which occurs when the regex isn't able to consume the entire $newAttrs string.
            if (strlen($oldAttrs) !== $offset) {
                return $tagMatches[0];
            }

            return '<' . $tagMatches['name'] . $newAttrs . '>';
        };

        $converted = preg_replace_callback(
            Document::AMP_BIND_SQUARE_START_PATTERN,
            $replaceCallback,
            $html
        );

        /*
         * If the regex engine incurred an error during processing, for example exceeding the backtrack
         * limit, $converted will be null. In this case we return the originally passed document to allow
         * DOMDocument to attempt to load it.  If the AMP HTML doesn't make use of amp-bind or similar
         * attributes, then everything should still work.
         *
         * See https://github.com/ampproject/amp-wp/issues/993 for additional context on this issue.
         * See http://php.net/manual/en/pcre.constants.php for additional info on PCRE errors.
         */
        return (null !== $converted) ? $converted : $html;
    }

    /**
     * Convert AMP bind-attributes back to their original syntax.
     *
     * This is not guaranteed to produce the exact same result as the initial markup, as it is more of a best guess.
     * It can end up replacing the wrong attributes if the initial markup had inconsistent styling, mixing both syntaxes
     * for the same attribute. In either case, it will always produce working markup, so this is not that big of a deal.
     *
     * @see convertAmpBindAttributes() Reciprocal function.
     * @link https://www.ampproject.org/docs/reference/components/amp-bind
     *
     * @param string $html HTML with amp-bind attributes converted.
     * @return string HTML with amp-bind attributes restored.
     */
    public function afterSave($html)
    {
        if ($this->options[Option::AMP_BIND_SYNTAX] === Option::AMP_BIND_SYNTAX_DATA_ATTRIBUTE) {
            // All amp-bind attributes should remain in their converted data attribute form.
            return $html;
        }

        if (
            $this->options[Option::AMP_BIND_SYNTAX] === Option::AMP_BIND_SYNTAX_AUTO
            &&
            empty($this->convertedAmpBindAttributes)
        ) {
            // Only previously converted amp-bind attributes should be restored, but none were converted.
            return $html;
        }

        /**
         * Replace callback.
         *
         * @param array $tagMatches Tag matches.
         * @return string Replacement.
         */
        $replaceCallback = function ($tagMatches) {

            // Strip the self-closing slash as long as it is not an attribute value, like for the href attribute.
            $oldAttrs = rtrim(preg_replace('#(?<!=)/$#', '', $tagMatches['attrs']));

            $newAttrs = '';
            $offset   = 0;
            while (
                preg_match(
                    Document::AMP_BIND_DATA_ATTRIBUTE_ATTR_PATTERN,
                    substr($oldAttrs, $offset),
                    $attrMatches
                )
            ) {
                $offset += strlen($attrMatches[0]);

                $attrName = substr($attrMatches['name'], strlen(Document::AMP_BIND_DATA_ATTR_PREFIX));
                if (
                    $this->options[Option::AMP_BIND_SYNTAX] === Option::AMP_BIND_SYNTAX_SQUARE_BRACKETS
                    ||
                    in_array($attrName, $this->convertedAmpBindAttributes, true)
                ) {
                    $attrValue = isset($attrMatches['value']) ? $attrMatches['value'] : '=""';
                    $newAttrs .= " [{$attrName}]{$attrValue}";
                } else {
                    $newAttrs .= $attrMatches[0];
                }
            }

            // Bail on parse error which occurs when the regex isn't able to consume the entire $newAttrs string.
            if (strlen($oldAttrs) !== $offset) {
                return $tagMatches[0];
            }

            return '<' . $tagMatches['name'] . $newAttrs . '>';
        };

        $converted = preg_replace_callback(
            Document::AMP_BIND_DATA_START_PATTERN,
            $replaceCallback,
            $html
        );

        /*
         * If the regex engine incurred an error during processing, for example exceeding the backtrack
         * limit, $converted will be null. In this case we return the originally passed document to allow
         * DOMDocument to attempt to load it.  If the AMP HTML doesn't make use of amp-bind or similar
         * attributes, then everything should still work.
         *
         * See https://github.com/ampproject/amp-wp/issues/993 for additional context on this issue.
         * See http://php.net/manual/en/pcre.constants.php for additional info on PCRE errors.
         */
        return (null !== $converted) ? $converted : $html;
    }
}
