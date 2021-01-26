<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
use AmpProject\Format;
use AmpProject\Protocol;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AAmp4email extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::A,
        SpecRule::SPEC_NAME => 'A (AMP4EMAIL)',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::BORDER,
            ],
            [
                SpecRule::NAME => Attribute::HREF,
                SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin|(.|\s){{|}}(.|\s)|^{{.*[^}][^}]$|^[^{][^{].*}}$|^}}|{{$|{{#|{{/|{{\^',
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        Protocol::HTTP,
                        Protocol::HTTPS,
                        Protocol::MAILTO,
                        Protocol::TEL,
                    ],
                    SpecRule::ALLOW_RELATIVE => false,
                ],
            ],
            [
                SpecRule::NAME => Attribute::HREFLANG,
            ],
            [
                SpecRule::NAME => Attribute::MEDIA,
            ],
            [
                SpecRule::NAME => Attribute::ROLE,
                SpecRule::IMPLICIT => true,
            ],
            [
                SpecRule::NAME => Attribute::TABINDEX,
                SpecRule::IMPLICIT => true,
            ],
            [
                SpecRule::NAME => Attribute::TARGET,
                SpecRule::VALUE => [
                    '_blank',
                ],
            ],
            [
                SpecRule::NAME => Attribute::TYPE,
                SpecRule::VALUE_CASEI => [
                    'text/html',
                ],
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP4EMAIL,
        ],
    ];
}
