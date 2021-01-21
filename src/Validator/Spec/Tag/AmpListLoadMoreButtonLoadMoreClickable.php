<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpListLoadMoreButtonLoadMoreClickable
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::BUTTON,\nSpecRule::SPEC_NAME => 'amp-list-load-more button[load-more-clickable]',\nSpecRule::MANDATORY_PARENT => Extension::LIST_LOAD_MORE,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::DISABLED,\n        SpecRule::VALUE => [\n                        '',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::LOAD_MORE_CLICKABLE,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE => [\n                        '',\n                    ],\n        SpecRule::DISPATCH_KEY => 'NAME_DISPATCH',\n    ],\n    [\n        SpecRule::NAME => Attribute::ROLE,\n        SpecRule::IMPLICIT => true,\n    ],\n    [\n        SpecRule::NAME => Attribute::TABINDEX,\n        SpecRule::IMPLICIT => true,\n    ],\n    [\n        SpecRule::NAME => Attribute::TYPE,\n    ],\n    [\n        SpecRule::NAME => Attribute::VALUE,\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'name-attr',\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-list',\n            ],\n];";
}
