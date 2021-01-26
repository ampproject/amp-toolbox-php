<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Extension;
use AmpProject\Format;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpExperiment extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::EXPERIMENT,
        SpecRule::UNIQUE => true,
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-experiment/',
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::EXPERIMENT,
        ],
    ];
}
