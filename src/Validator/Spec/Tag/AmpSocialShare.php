<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Extension;
use AmpProject\Format;
use AmpProject\Layout;
use AmpProject\Protocol;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpSocialShare extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::SOCIAL_SHARE,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'data-share-endpoint',
                SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        Protocol::FTP,
                        Protocol::HTTP,
                        Protocol::HTTPS,
                        Protocol::MAILTO,
                        Protocol::BBMI,
                        Protocol::FB_ME,
                        Protocol::FB_MESSENGER,
                        Protocol::INTENT,
                        Protocol::LINE,
                        Protocol::SKYPE,
                        Protocol::SMS,
                        Protocol::SNAPCHAT,
                        Protocol::TEL,
                        Protocol::TG,
                        Protocol::THREEMA,
                        Protocol::VIBER,
                        Protocol::WH,
                        Protocol::WHATSAPP,
                    ],
                    SpecRule::ALLOW_RELATIVE => false,
                ],
            ],
            [
                SpecRule::NAME => 'type',
                SpecRule::MANDATORY => true,
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
        ],
        SpecRule::AMP_LAYOUT => [
            'supportedLayouts' => [
                Layout::CONTAINER,
                Layout::FILL,
                Layout::FIXED,
                Layout::FIXED_HEIGHT,
                Layout::FLEX_ITEM,
                Layout::NODISPLAY,
                Layout::RESPONSIVE,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            'amp-social-share',
        ],
    ];
}
