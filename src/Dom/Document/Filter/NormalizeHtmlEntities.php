<?php

namespace AmpProject\Dom\Document\Filter;

use AmpProject\Dom\Document\BeforeLoadFilter;
use AmpProject\Dom\Document\Option;
use AmpProject\Dom\Options;

/**
 * Handles the html entities present in the html and prevent them from double encoding.
 *
 * @package ampproject/amp-toolbox
 */
final class NormalizeHtmlEntities implements BeforeLoadFilter
{
    /**
     * Options instance to use.
     *
     * @var Options
     */
    private $options;

    /**
     * Whether to use this NormalizeHtmlEntities or not.
     *
     * Accepted values are 'auto', 'always' and 'never'.
     *
     * @var string
     */
    private $normalizeHtmlEntities;

    /**
     * NormalizeHtmlEntities constructor.
     *
     * @param Options $options Options instance to use.
     */
    public function __construct(Options $options)
    {
        $this->options = $options;

        switch ($options[Option::NORMALIZE_HTML_ENTITIES]) {
            case Option::NORMALIZE_HTML_ENTITIES_NEVER:
                $this->normalizeHtmlEntities = Option::NORMALIZE_HTML_ENTITIES_NEVER;
                break;
            case Option::NORMALIZE_HTML_ENTITIES_ALWAYS:
                $this->normalizeHtmlEntities = Option::NORMALIZE_HTML_ENTITIES_ALWAYS;
                break;
            case Option::NORMALIZE_HTML_ENTITIES_AUTO:
            default:
                $this->normalizeHtmlEntities = Option::NORMALIZE_HTML_ENTITIES_AUTO;
                break;
        }
    }

    /**
     * Preprocess the HTML to be loaded into the Dom\Document.
     *
     * @param string $html String of HTML markup to be preprocessed.
     * @return string Preprocessed string of HTML markup.
     */
    public function beforeLoad($html)
    {
        if (
            ($this->normalizeHtmlEntities === Option::NORMALIZE_HTML_ENTITIES_NEVER)
            || (
                ($this->normalizeHtmlEntities === Option::NORMALIZE_HTML_ENTITIES_AUTO)
                && ! $this->hasHtmlEntities($html)
            )
        ) {
            return $html;
        }

        return html_entity_decode(
            $html,
            $this->options[Option::NORMALIZE_HTML_ENTITIES_FLAGS],
            $this->options[Option::ENCODING]
        );
    }

    /**
     * Detect the presence of html entities in the html.
     *
     * @param string $html The html in which this method will to detect the entities.
     * @return bool Whether the html contains entities or not.
     */
    protected function hasHtmlEntities($html)
    {
        // TODO: Discuss other popular entities to look for, especially for languages
        // with different punctuation symbols.
        return preg_match('/&comma;|&period;|&excl;|&quest;/', $html);
    }
}
