<?php

namespace AmpProject\Tooling\Validator\SpecGenerator\Template;

use AmpProject\Exception\InvalidCssRulesetName;
use AmpProject\Exception\InvalidFormat;
use AmpProject\Validator\Spec\CssRuleset;

/**
 * The CssRulesets section defines the validation rules that apply to the CSS of a document.
 *
 * @package ampproject/amp-toolbox
 */
final class CssRulesets
{

    const CSS_RULESETS = [];

    const BY_FORMAT = [];

    /**
     * Cache of already instantiated CssRuleset objects.
     *
     * @var CssRuleset[]
     */
    private $cssRulesetsCache = [];

    /**
     * Get a CSS ruleset by its CSS ruleset ID.
     *
     * @param string $cssRulesetId CSS ruleset ID to get the collection of CSS rulesets for.
     * @return CssRuleset Requested CSS ruleset.
     * @throws InvalidCssRulesetName If an invalid CSS ruleset name is requested.
     */
    public function get($cssRulesetId)
    {
        if (!array_key_exists($cssRulesetId, self::CSS_RULESETS)) {
            throw InvalidCssRulesetName::forCssRulesetName($cssRulesetId);
        }

        if (array_key_exists($cssRulesetId, $this->cssRulesetsCache)) {
            return $this->cssRulesetsCache[$cssRulesetId];
        }

        $cssRulesetClassName = self::CSS_RULESETS[$cssRulesetId];

        /** @var CssRuleset $cssRuleset */
        $cssRuleset = new $cssRulesetClassName();

        $this->cssRulesetsCache[$cssRulesetId] = $cssRuleset;

        return $cssRuleset;
    }

    /**
     * Get a collection of CSS rulesets for a given AMP HTML format name.
     *
     * @param string $format AMP HTML format to get the CSS rulesets for.
     * @return array<CssRuleset> Array of CSS rulesets matching the requested AMP HTML format.
     * @throws InvalidFormat If an invalid AMP HTML format is requested.
     */
    public function byFormat($format)
    {
        if (!array_key_exists($format, self::BY_FORMAT)) {
            throw InvalidFormat::forFormat($format);
        }

        $cssRulesetIds = self::BY_FORMAT[$format];
        if (!is_array($cssRulesetIds)) {
            $cssRulesetIds = [$cssRulesetIds];
        }

        $cssRulesets = [];
        foreach ($cssRulesetIds as $cssRulesetId) {
            $cssRulesets[] = $this->get($cssRulesetId);
        }

        return $cssRulesets;
    }

    /**
     * Get the list of available keys.
     *
     * @return array<string> Array of available keys.
     */
    public function getAvailableKeys()
    {
        return array_keys(self::CSS_RULESETS);
    }

    /**
     * Find the instantiated object for the current key.
     *
     * This should use its own caching mechanism as needed.
     *
     * Ideally, current() should be overridden as well to provide the correct object type-hint.
     *
     * @param string $key Key to retrieve the instantiated object for.
     * @return CssRuleset Instantiated object for the current key.
     */
    public function findByKey($key)
    {
        return $this->get($key);
    }

    /**
     * Return the current iterable object.
     *
     * @return CssRuleset CssRuleset object.
     */
    public function current()
    {
        return $this->parentCurrent();
    }
}
