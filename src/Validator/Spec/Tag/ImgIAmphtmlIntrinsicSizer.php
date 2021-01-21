<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class ImgIAmphtmlIntrinsicSizer
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::IMG,\nSpecRule::SPEC_NAME => 'IMG-I-AMPHTML-INTRINSIC-SIZER',\nSpecRule::MANDATORY_PARENT => Internal::SIZER_INTRINSIC,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::ALT,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE => [\n                        '',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::ARIA_HIDDEN,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE => [\n                        'true',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::CLASS,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE => [\n                        'i-amphtml-intrinsic-sizer',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::ROLE,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE => [\n                        'presentation',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::SRC,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE_REGEX => 'data:image\\/svg\\+xml;charset=utf-8,\\s*<svg height=\"\\d+(\\.\\d+)?\" width=\"\\d+(\\.\\d+)?\" xmlns=\"http:\\/\\/www\\.w3\\.org\\/2000\\/svg\" version=\"1\\.1\"\\/>|data:image\\/svg\\+xml;charset=utf-8,\\s*<svg height=\\'\\d+(\\.\\d+)?\\' width=\\'\\d+(\\.\\d+)?\\' xmlns=\\'http:\\/\\/www\\.w3\\.org\\/2000\\/svg\\' version=\\'1\\.1\\'\\/>|data:image\\/svg\\+xml;base64,[a-zA-Z0-9+\\/=]+',\n    ],\n],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::ENABLED_BY => [\n                'transformed',\n            ],\n];";
}
