<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class TitleAmp4email extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::TITLE,
        SpecRule::SPEC_NAME => 'title [AMP4EMAIL]',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => '[text]',
            ],
        ],
        SpecRule::DEPRECATION => 'Title tags in email have no meaning. This tag may become invalid in the future.',
        SpecRule::DEPRECATION_URL => 'https://github.com/ampproject/amphtml/issues/22318',
        SpecRule::HTML_FORMAT => [
            Format::AMP4EMAIL,
        ],
    ];
}
