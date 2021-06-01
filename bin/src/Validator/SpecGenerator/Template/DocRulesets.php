<?php

namespace AmpProject\Tooling\Validator\SpecGenerator\Template;

use AmpProject\Exception\InvalidDocRulesetName;
use AmpProject\Exception\InvalidFormat;
use AmpProject\Validator\Spec\DocRuleset;

/**
 * The DocRulesets section defines the validation rules that apply to an entire document.
 *
 * @package ampproject/amp-toolbox
 */
final class DocRulesets
{

    const DOC_RULESETS = [];

    const BY_FORMAT = [];

    /**
     * Cache of already instantiated DocRuleset objects.
     *
     * @var DocRuleset[]
     */
    private $docRulesetsCache = [];

    /**
     * Get a document ruleset by its document ruleset ID.
     *
     * @param string $docRulesetId document ruleset ID to get the collection of document rulesets for.
     * @return DocRuleset Requested document ruleset.
     * @throws InvalidDocRulesetName If an invalid document ruleset name is requested.
     */
    public function get($docRulesetId)
    {
        if (!array_key_exists($docRulesetId, self::DOC_RULESETS)) {
            throw InvalidDocRulesetName::forDocRulesetName($docRulesetId);
        }

        if (array_key_exists($docRulesetId, $this->docRulesetsCache)) {
            return $this->docRulesetsCache[$docRulesetId];
        }

        $docRulesetClassName = self::DOC_RULESETS[$docRulesetId];

        /** @var DocRuleset $docRuleset */
        $docRuleset = new $docRulesetClassName();

        $this->docRulesetsCache[$docRulesetId] = $docRuleset;

        return $docRuleset;
    }

    /**
     * Get a collection of document rulesets for a given AMP HTML format name.
     *
     * @param string $format AMP HTML format to get the document rulesets for.
     * @return array<DocRuleset> Array of document rulesets matching the requested AMP HTML format.
     * @throws InvalidFormat If an invalid AMP HTML format is requested.
     */
    public function byFormat($format)
    {
        if (!array_key_exists($format, self::BY_FORMAT)) {
            throw InvalidFormat::forFormat($format);
        }

        $docRulesetIds = self::BY_FORMAT[$format];
        if (!is_array($docRulesetIds)) {
            $docRulesetIds = [$docRulesetIds];
        }

        $docRulesets = [];
        foreach ($docRulesetIds as $docRulesetId) {
            $docRulesets[] = $this->get($docRulesetId);
        }

        return $docRulesets;
    }

    /**
     * Get the list of available keys.
     *
     * @return array<string> Array of available keys.
     */
    public function getAvailableKeys()
    {
        return array_keys(self::DOC_RULESETS);
    }

    /**
     * Find the instantiated object for the current key.
     *
     * This should use its own caching mechanism as needed.
     *
     * Ideally, current() should be overridden as well to provide the correct object type-hint.
     *
     * @param string $key Key to retrieve the instantiated object for.
     * @return DocRuleset Instantiated object for the current key.
     */
    public function findByKey($key)
    {
        return $this->get($key);
    }

    /**
     * Return the current iterable object.
     *
     * @return DocRuleset DocRuleset object.
     */
    public function current()
    {
        return $this->parentCurrent(); // @todo Method 'parentCurrent' not found in DocRulesets.
    }
}
