<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpImg
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::IMG,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::ALT,\n    ],\n    [\n        SpecRule::NAME => Attribute::ATTRIBUTION,\n    ],\n    [\n        SpecRule::NAME => Attribute::CROSSORIGIN,\n    ],\n    [\n        SpecRule::NAME => Attribute::OBJECT_FIT,\n    ],\n    [\n        SpecRule::NAME => Attribute::OBJECT_POSITION,\n    ],\n    [\n        SpecRule::NAME => Attribute::PLACEHOLDER,\n    ],\n    [\n        SpecRule::NAME => Attribute::REFERRERPOLICY,\n    ],\n    [\n        SpecRule::NAME => '[ALT]',\n    ],\n    [\n        SpecRule::NAME => '[ATTRIBUTION]',\n    ],\n    [\n        SpecRule::NAME => '[SRC]',\n    ],\n    [\n        SpecRule::NAME => '[SRCSET]',\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n                'lightboxable-elements',\n                'mandatory-src-or-srcset',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-img/',\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::FILL,\n                    Layout::FIXED,\n                    Layout::FIXED_HEIGHT,\n                    Layout::FLEX_ITEM,\n                    Layout::INTRINSIC,\n                    Layout::NODISPLAY,\n                    Layout::RESPONSIVE,\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n                Format::AMP4ADS,\n            ],\n];";
}
