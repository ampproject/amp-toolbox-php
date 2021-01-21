<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpSocialShare
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::SOCIAL_SHARE,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::DATA_SHARE_ENDPOINT,\n        SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',\n        SpecRule::VALUE_URL => [\n                        SpecRule::PROTOCOL => [\n                            'ftp',\n                            'http',\n                            'https',\n                            'mailto',\n                            'bbmi',\n                            'fb-me',\n                            'fb-messenger',\n                            'intent',\n                            'line',\n                            'skype',\n                            'sms',\n                            'snapchat',\n                            'tel',\n                            'tg',\n                            'threema',\n                            'viber',\n                            'wh',\n                            'whatsapp',\n                        ],\n                        SpecRule::ALLOW_RELATIVE => false,\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::TYPE,\n        SpecRule::MANDATORY => true,\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n            ],\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::CONTAINER,\n                    Layout::FILL,\n                    Layout::FIXED,\n                    Layout::FIXED_HEIGHT,\n                    Layout::FLEX_ITEM,\n                    Layout::NODISPLAY,\n                    Layout::RESPONSIVE,\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n                Format::AMP4ADS,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-social-share',\n            ],\n];";
}
