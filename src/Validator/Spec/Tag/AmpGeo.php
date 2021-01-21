<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpGeo
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::GEO,\nSpecRule::UNIQUE => true,\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n            ],\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::NODISPLAY,\n                ],\n            ],\nSpecRule::CHILD_TAGS => [\n                'firstChildTagNameOneof' => [\n                    'SCRIPT',\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-geo',\n            ],\n];";
}
