<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec;

use AmpProject\Exception\InvalidSpecRuleName;

/**
 * Class Tag
 *
 * @package AmpProject\Tooling\Validator\SpecGenerator\Template
 *
 * @property-read array<string> $alsoRequiresTagWarning
 * @property-read array $ampLayout
 * @property-read array<string> $attrLists
 * @property-read array $attrs
 * @property-read array $cdata
 * @property-read array $childTags
 * @property-read string $deprecation
 * @property-read string $deprecationUrl
 * @property-read string $descendantTagList
 * @property-read string $descriptiveName
 * @property-read array<string> $disabledBy
 * @property-read array<string> $disallowedAncestor
 * @property-read array<string> $enabledBy
 * @property-read array<string> $excludes
 * @property-read bool $explicitAttrsOnly
 * @property-read array $extensionSpec
 * @property-read array<string> $htmlFormat
 * @property-read bool $mandatory
 * @property-read string $mandatoryAlternatives
 * @property-read string $mandatoryAncestor
 * @property-read string $mandatoryAncestorSuggestedAlternative
 * @property-read bool $mandatoryLastChild
 * @property-read string $mandatoryParent
 * @property-read array $markDescendants
 * @property-read string $namedId
 * @property-read array<array> $referencePoints
 * @property-read array<string> $requires
 * @property-read array<string> $requiresExtension
 * @property-read array<string> $satisfies
 * @property-read bool $siblingsDisallowed
 * @property-read string $specName
 * @property-read string $specUrl
 * @property-read string $tagName
 * @property-read bool $unique
 * @property-read bool $uniqueWarning
 */
class Tag
{
    /**
     * Spec data of the tag.
     *
     * @var array
     */
    const SPEC = [];

    public function __get($specRuleName)
    {
        switch ($specRuleName) {
            case SpecRule::EXPLICIT_ATTRS_ONLY:
            case SpecRule::MANDATORY:
            case SpecRule::MANDATORY_LAST_CHILD:
            case SpecRule::SIBLINGS_DISALLOWED:
            case SpecRule::UNIQUE:
            case SpecRule::UNIQUE_WARNING:
                return array_key_exists($specRuleName, static::SPEC) ? static::SPEC[$specRuleName] : false;
            case SpecRule::ALSO_REQUIRES_TAG_WARNING:
            case SpecRule::ATTR_LISTS:
            case SpecRule::DISABLED_BY:
            case SpecRule::DISALLOWED_ANCESTOR:
            case SpecRule::ENABLED_BY:
            case SpecRule::EXCLUDES:
            case SpecRule::HTML_FORMAT:
            case SpecRule::REQUIRES:
            case SpecRule::REQUIRES_EXTENSION:
            case SpecRule::SATISFIES:
                return array_key_exists($specRuleName, static::SPEC) ? static::SPEC[$specRuleName] : [];
            default:
                if (!array_key_exists($specRuleName, static::SPEC)) {
                    throw InvalidSpecRuleName::forSpecRuleName($specRuleName);
                }

                return static::SPEC[$specRuleName];
        }
    }
}
