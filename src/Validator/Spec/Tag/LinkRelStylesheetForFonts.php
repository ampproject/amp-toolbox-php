<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
use AmpProject\Format;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class LinkRelStylesheetForFonts extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::LINK,
        SpecRule::SPEC_NAME => 'link rel=stylesheet for fonts',
        SpecRule::MANDATORY_PARENT => Element::HEAD,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::ASYNC,
            ],
            [
                SpecRule::NAME => Attribute::CROSSORIGIN,
            ],
            [
                SpecRule::NAME => Attribute::HREF,
                SpecRule::MANDATORY => true,
                SpecRule::VALUE_REGEX => 'https://cdn\.materialdesignicons\.com/([0-9]+\.?)+/css/materialdesignicons\.min\.css|https://cloud\.typography\.com/[0-9]*/[0-9]*/css/fonts\.css|https://fast\.fonts\.net/.*|https://fonts\.googleapis\.com/css2?\?.*|https://fonts\.googleapis\.com/icon\?.*|https://fonts\.googleapis\.com/earlyaccess/.*\.css|https://maxcdn\.bootstrapcdn\.com/font-awesome/([0-9]+\.?)+/css/font-awesome\.min\.css(\?.*)?|https://(use|pro|kit)\.fontawesome\.com/releases/v([0-9]+\.?)+/css/[0-9a-zA-Z-]+\.css|https://(use|pro|kit)\.fontawesome\.com/[0-9a-zA-Z-]+\.css|https://use\.typekit\.net/[\w\p{L}\p{N}_]+\.css',
            ],
            [
                SpecRule::NAME => Attribute::INTEGRITY,
            ],
            [
                SpecRule::NAME => Attribute::MEDIA,
            ],
            [
                SpecRule::NAME => Attribute::REL,
                SpecRule::MANDATORY => true,
                SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                SpecRule::VALUE_CASEI => [
                    'stylesheet',
                ],
            ],
            [
                SpecRule::NAME => Attribute::TYPE,
                SpecRule::VALUE_CASEI => [
                    'text/css',
                ],
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'nonce-attr',
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#custom-fonts',
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
        ],
        SpecRule::NAMED_ID => 'LINK_FONT_STYLESHEET',
        SpecRule::DESCRIPTIVE_NAME => 'link rel=stylesheet for fonts',
    ];
}
