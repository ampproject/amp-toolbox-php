<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpImgImgPlaceholderTransformed
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::IMG,\nSpecRule::SPEC_NAME => 'amp-img > img[placeholder] (transformed)',\nSpecRule::MANDATORY_PARENT => 'amp-img (transformed)',\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::ALT,\n    ],\n    [\n        SpecRule::NAME => Attribute::ATTRIBUTION,\n    ],\n    [\n        SpecRule::NAME => Attribute::CLASS,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE => [\n                        'i-amphtml-blurry-placeholder',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::OBJECT_FIT,\n    ],\n    [\n        SpecRule::NAME => Attribute::OBJECT_POSITION,\n    ],\n    [\n        SpecRule::NAME => Attribute::PLACEHOLDER,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE => [\n                        '',\n                    ],\n        SpecRule::DISPATCH_KEY => 'NAME_DISPATCH',\n    ],\n    [\n        SpecRule::NAME => Attribute::REFERRERPOLICY,\n    ],\n    [\n        SpecRule::NAME => Attribute::SIZES,\n    ],\n    [\n        SpecRule::NAME => Attribute::TITLE,\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'mandatory-src-or-srcset',\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::ENABLED_BY => [\n                'transformed',\n            ],\n];";
}
