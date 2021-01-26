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

final class A extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::A,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::BORDER,
            ],
            [
                SpecRule::NAME => Attribute::DOWNLOAD,
            ],
            [
                SpecRule::NAME => Attribute::HREF,
                SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        Protocol::FTP,
                        Protocol::GEO,
                        Protocol::HTTP,
                        Protocol::HTTPS,
                        Protocol::MAILTO,
                        Protocol::MAPS,
                        Protocol::BIP,
                        Protocol::BBMI,
                        Protocol::CHROME,
                        Protocol::ITMS_SERVICES,
                        Protocol::FACETIME,
                        Protocol::FB_ME,
                        Protocol::FB_MESSENGER,
                        Protocol::FEED,
                        Protocol::INTENT,
                        Protocol::LINE,
                        Protocol::SKYPE,
                        Protocol::SMS,
                        Protocol::SNAPCHAT,
                        Protocol::TEL,
                        Protocol::TG,
                        Protocol::THREEMA,
                        Protocol::TWITTER,
                        Protocol::VIBER,
                        Protocol::WEBCAL,
                        Protocol::WEB_MASTODON,
                        Protocol::WH,
                        Protocol::WHATSAPP,
                    ],
                    SpecRule::ALLOW_EMPTY => true,
                ],
            ],
            [
                SpecRule::NAME => Attribute::HREFLANG,
            ],
            [
                SpecRule::NAME => Attribute::MEDIA,
            ],
            [
                SpecRule::NAME => Attribute::REFERRERPOLICY,
            ],
            [
                SpecRule::NAME => Attribute::REL,
                SpecRule::DISALLOWED_VALUE_REGEX => '(^|\s)(components|dns-prefetch|import|manifest|preconnect|prefetch|preload|prerender|serviceworker|stylesheet|subresource)(\s|$)',
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
                    '_self',
                    '_top',
                ],
            ],
            [
                SpecRule::NAME => Attribute::TYPE,
                SpecRule::VALUE_CASEI => [
                    'text/html',
                    'application/rss+xml',
                ],
            ],
            [
                SpecRule::NAME => Attribute::SHOW_TOOLTIP,
                SpecRule::VALUE => [
                    'auto',
                    'true',
                ],
            ],
            [
                SpecRule::NAME => '[href]',
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'name-attr',
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#links',
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
        ],
    ];
}
