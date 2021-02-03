<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Extension;
use AmpProject\Format;
use AmpProject\Validator\Spec\Section\DescendantTagList;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpStoryCtaLayer extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::STORY_CTA_LAYER,
        SpecRule::MANDATORY_ANCESTOR => Extension::STORY_PAGE,
        SpecRule::REFERENCE_POINTS => [
            [
                SpecRule::TAG_SPEC_NAME => 'AMP-STORY-CTA-LAYER animate-in',
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::DESCENDANT_TAG_LIST => DescendantTagList::AMP_STORY_CTA_LAYER_ALLOWED_DESCENDANTS,
        SpecRule::MANDATORY_LAST_CHILD => true,
    ];
}
