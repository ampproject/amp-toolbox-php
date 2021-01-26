<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Extension;
use AmpProject\Format;
use AmpProject\Layout;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpRiddleQuiz extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::RIDDLE_QUIZ,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'data-riddle-id',
                SpecRule::MANDATORY => true,
                SpecRule::VALUE_REGEX => '[0-9]+',
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-riddle-quiz/',
        SpecRule::AMP_LAYOUT => [
            'supportedLayouts' => [
                Layout::RESPONSIVE,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::RIDDLE_QUIZ,
        ],
    ];
}
