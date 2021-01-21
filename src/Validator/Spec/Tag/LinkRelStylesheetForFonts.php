<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class LinkRelStylesheetForFonts
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::LINK,\nSpecRule::SPEC_NAME => 'link rel=stylesheet for fonts',\nSpecRule::MANDATORY_PARENT => Element::HEAD,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::ASYNC,\n    ],\n    [\n        SpecRule::NAME => Attribute::CROSSORIGIN,\n    ],\n    [\n        SpecRule::NAME => Attribute::HREF,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE_REGEX => 'https://cdn\\.materialdesignicons\\.com/([0-9]+\\.?)+/css/materialdesignicons\\.min\\.css|https://cloud\\.typography\\.com/[0-9]*/[0-9]*/css/fonts\\.css|https://fast\\.fonts\\.net/.*|https://fonts\\.googleapis\\.com/css2?\\?.*|https://fonts\\.googleapis\\.com/icon\\?.*|https://fonts\\.googleapis\\.com/earlyaccess/.*\\.css|https://maxcdn\\.bootstrapcdn\\.com/font-awesome/([0-9]+\\.?)+/css/font-awesome\\.min\\.css(\\?.*)?|https://(use|pro|kit)\\.fontawesome\\.com/releases/v([0-9]+\\.?)+/css/[0-9a-zA-Z-]+\\.css|https://(use|pro|kit)\\.fontawesome\\.com/[0-9a-zA-Z-]+\\.css|https://use\\.typekit\\.net/[\\w\\p{L}\\p{N}_]+\\.css',\n    ],\n    [\n        SpecRule::NAME => Attribute::INTEGRITY,\n    ],\n    [\n        SpecRule::NAME => Attribute::MEDIA,\n    ],\n    [\n        SpecRule::NAME => Attribute::REL,\n        SpecRule::MANDATORY => true,\n        SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',\n        SpecRule::VALUE_CASEI => [\n                        'stylesheet',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::TYPE,\n        SpecRule::VALUE_CASEI => [\n                        'text/css',\n                    ],\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'nonce-attr',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#custom-fonts',\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n                Format::AMP4ADS,\n            ],\nSpecRule::NAMED_ID => 'LINK_FONT_STYLESHEET',\nSpecRule::DESCRIPTIVE_NAME => 'link rel=stylesheet for fonts',\n];";
}
