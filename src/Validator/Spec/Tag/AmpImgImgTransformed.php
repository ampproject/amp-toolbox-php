<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpImgImgTransformed
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::IMG,\nSpecRule::SPEC_NAME => 'amp-img > img (transformed)',\nSpecRule::MANDATORY_PARENT => 'amp-img (transformed)',\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::ALT,\n    ],\n    [\n        SpecRule::NAME => Attribute::ATTRIBUTION,\n    ],\n    [\n        SpecRule::NAME => Attribute::OBJECT_FIT,\n    ],\n    [\n        SpecRule::NAME => Attribute::OBJECT_POSITION,\n    ],\n    [\n        SpecRule::NAME => Attribute::REFERRERPOLICY,\n    ],\n    [\n        SpecRule::NAME => Attribute::SIZES,\n    ],\n    [\n        SpecRule::NAME => Attribute::TITLE,\n    ],\n    [\n        SpecRule::NAME => Attribute::CLASS,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE_REGEX => 'i-amphtml-fill-content\\s+i-amphtml-replaced-content|i-amphtml-replaced-content\\s+i-amphtml-fill-content',\n    ],\n    [\n        SpecRule::NAME => Attribute::DECODING,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE => [\n                        'async',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::LOADING,\n        SpecRule::VALUE => [\n                        'lazy',\n                        'eager',\n                    ],\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'mandatory-src-or-srcset',\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::ENABLED_BY => [\n                'transformed',\n            ],\n];";
}
