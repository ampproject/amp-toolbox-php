<?php

namespace AmpProject\Optimizer\Transformer;

use AmpProject\Attribute;
use AmpProject\Dom\Document;
use AmpProject\Dom\Element;
use AmpProject\Optimizer\Configuration\OptimizeViewportConfiguration;
use AmpProject\Optimizer\ErrorCollection;
use AmpProject\Optimizer\Transformer;
use AmpProject\Optimizer\TransformerConfiguration;
use AmpProject\Tag;

/**
 * Always ensure we have a single viewport meta tag.
 *
 * The viewport defaults to 'width=device-width', which is the bare minimum that AMP requires. When there are multiple
 * such meta tags, this optimizer extracts the viewport properties of each and then merges them into a single
 * meta[name=viewport] tag.
 *
 * @package ampproject/amp-toolbox
 */
final class OptimizeViewport implements Transformer
{

    /**
     * Viewport settings to use for AMP markup.
     *
     * @var string
     */
    const AMP_VIEWPORT = 'width=device-width';

    /**
     * Xpath query to fetch the viewport meta tags.
     *
     * @var string
     */
    const XPATH_QUERY = './/meta[@name="viewport"]';

    /**
     * Configuration store to use.
     *
     * @var TransformerConfiguration
     */
    private $configuration;

    /**
     * Instantiate a MinifyHtml object.
     *
     * @param TransformerConfiguration $configuration Configuration store to use.
     */
    public function __construct(TransformerConfiguration $configuration)
    {
        $this->configuration = $configuration;
    }

    /**
     * Apply transformations to the provided DOM document.
     *
     * @param Document        $document DOM document to apply the transformations to.
     * @param ErrorCollection $errors   Collection of errors that are collected during transformation.
     */
    public function transform(Document $document, ErrorCollection $errors)
    {
        $viewport = '';

        $metaTags = $document->xpath->query(self::XPATH_QUERY);

        if (! $metaTags->count()) {
            $viewport = self::AMP_VIEWPORT;
        } else {
            // Merge one or more meta[name=viewport] tags into one.
            $parsedRules = [];

            foreach ($metaTags as $metaTag) {
                $propertyPairs = explode(',', $metaTag->getAttribute('content'));

                foreach ($propertyPairs as $propertyPair) {
                    $explodedPair = explode('=', $propertyPair, 2);
                    if (isset($explodedPair[1])) {
                        $parsedRules[ trim($explodedPair[0]) ] = trim($explodedPair[1]);
                    }
                }

                $metaTag->parentNode->removeChild($metaTag);
            }

            // Remove initial-scale=1 to leave just width=device-width in order to avoid a tap delay hurts FID.
            if (
                $this->configuration->get(OptimizeViewportConfiguration::REMOVE_INITIAL_SCALE_VIEWPORT_PROPERTY)
                && isset($parsedRules['initial-scale'])
                && abs((float) $parsedRules['initial-scale'] - 1.0) < 0.0001
            ) {
                unset($parsedRules['initial-scale']);
            }

            $viewport = implode(
                ',',
                array_map(
                    static function ($ruleName) use ($parsedRules) {
                        return $ruleName . '=' . $parsedRules[ $ruleName ];
                    },
                    array_keys($parsedRules)
                )
            );
        }

        $element = $this->createViewportElement($document, $viewport);
        $document->head->appendChild($element);
    }

    /**
     * Create a new meta tag for the viewport setting.
     *
     * @param Document $document DOM document to apply the transformations to.
     * @param string   $viewport Viewport setting to use.
     * @return Element New meta tag with requested viewport setting.
     */
    protected function createViewportElement(Document $document, $viewport)
    {
        $element = $document->createElement(Tag::META);
        $element->setAttribute(Attribute::NAME, Attribute::VIEWPORT);
        $element->setAttribute(Attribute::CONTENT, $viewport);

        return $element;
    }
}
