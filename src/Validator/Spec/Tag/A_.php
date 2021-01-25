<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class A_ extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::A,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'border',
            ],
            [
                SpecRule::NAME => 'download',
            ],
            [
                SpecRule::NAME => 'href',
                SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        'ftp',
                        'geo',
                        'http',
                        'https',
                        'mailto',
                        'maps',
                        'bip',
                        'bbmi',
                        'chrome',
                        'itms-services',
                        'facetime',
                        'fb-me',
                        'fb-messenger',
                        'feed',
                        'intent',
                        'line',
                        'skype',
                        'sms',
                        'snapchat',
                        'tel',
                        'tg',
                        'threema',
                        'twitter',
                        'viber',
                        'webcal',
                        'web+mastodon',
                        'wh',
                        'whatsapp',
                    ],
                    SpecRule::ALLOW_EMPTY => true,
                ],
            ],
            [
                SpecRule::NAME => 'hreflang',
            ],
            [
                SpecRule::NAME => 'media',
            ],
            [
                SpecRule::NAME => 'referrerpolicy',
            ],
            [
                SpecRule::NAME => 'rel',
                SpecRule::DISALLOWED_VALUE_REGEX => '(^|\s)(components|dns-prefetch|import|manifest|preconnect|prefetch|preload|prerender|serviceworker|stylesheet|subresource)(\s|$)',
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
                    '_self',
                    '_top',
                ],
            ],
            [
                SpecRule::NAME => 'type',
                SpecRule::VALUE_CASEI => [
                    'text/html',
                    'application/rss+xml',
                ],
            ],
            [
                SpecRule::NAME => 'show-tooltip',
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
