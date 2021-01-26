<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

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
                SpecRule::NAME => 'border',
            ],
            [
                SpecRule::NAME => 'href',
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
                SpecRule::NAME => 'hreflang',
            ],
            [
                SpecRule::NAME => 'media',
            ],
            [
                SpecRule::NAME => 'role',
                SpecRule::IMPLICIT => true,
            ],
            [
                SpecRule::NAME => 'tabindex',
                SpecRule::IMPLICIT => true,
            ],
            [
                SpecRule::NAME => 'target',
                SpecRule::VALUE => [
                    '_blank',
                ],
            ],
            [
                SpecRule::NAME => 'type',
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
