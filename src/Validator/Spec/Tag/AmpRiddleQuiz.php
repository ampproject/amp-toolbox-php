<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpRiddleQuiz
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::RIDDLE_QUIZ,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::DATA_RIDDLE_ID,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE_REGEX => '[0-9]+',\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-riddle-quiz/',\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::RESPONSIVE,\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-riddle-quiz',\n            ],\n];";
}
