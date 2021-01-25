<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec;

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
            case \AmpProject\Validator\Spec\SpecRule::EXPLICIT_ATTRS_ONLY:
            case \AmpProject\Validator\Spec\SpecRule::MANDATORY:
            case \AmpProject\Validator\Spec\SpecRule::MANDATORY_LAST_CHILD:
            case \AmpProject\Validator\Spec\SpecRule::SIBLINGS_DISALLOWED:
            case \AmpProject\Validator\Spec\SpecRule::UNIQUE:
            case \AmpProject\Validator\Spec\SpecRule::UNIQUE_WARNING:
                return array_key_exists($specRuleName, static::SPEC) ? static::SPEC[$specRuleName] : false;
            default:
                if (!array_key_exists($specRuleName, static::SPEC)) {
                    throw \AmpProject\Exception\InvalidSpecRuleName::forSpecRuleName($specRuleName);
                }

                return static::SPEC[$specRuleName];
        }
    }
}
