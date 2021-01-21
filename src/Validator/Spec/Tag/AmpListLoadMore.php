<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpListLoadMore
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::LIST_LOAD_MORE,\nSpecRule::MANDATORY_PARENT => Extension::LIST_,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::LOAD_MORE_BUTTON,\n        SpecRule::VALUE => [\n                        '',\n                    ],\n        SpecRule::MANDATORY_ONEOF => '[\\'load-more-button\\', \\'load-more-failed\\', \\'load-more-end\\', \\'load-more-loading\\']',\n    ],\n    [\n        SpecRule::NAME => Attribute::LOAD_MORE_FAILED,\n        SpecRule::VALUE => [\n                        '',\n                    ],\n        SpecRule::MANDATORY_ONEOF => '[\\'load-more-button\\', \\'load-more-failed\\', \\'load-more-end\\', \\'load-more-loading\\']',\n    ],\n    [\n        SpecRule::NAME => Attribute::LOAD_MORE_LOADING,\n        SpecRule::VALUE => [\n                        '',\n                    ],\n        SpecRule::MANDATORY_ONEOF => '[\\'load-more-button\\', \\'load-more-failed\\', \\'load-more-end\\', \\'load-more-loading\\']',\n    ],\n    [\n        SpecRule::NAME => Attribute::LOAD_MORE_END,\n        SpecRule::VALUE => [\n                        '',\n                    ],\n        SpecRule::MANDATORY_ONEOF => '[\\'load-more-button\\', \\'load-more-failed\\', \\'load-more-end\\', \\'load-more-loading\\']',\n    ],\n],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-list',\n            ],\n];";
}
