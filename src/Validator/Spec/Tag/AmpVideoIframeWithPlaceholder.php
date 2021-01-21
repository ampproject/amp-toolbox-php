<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpVideoIframeWithPlaceholder
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::VIDEO_IFRAME,\nSpecRule::SPEC_NAME => 'AMP-VIDEO-IFRAME with [placeholder]',\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n                'amp-video-iframe-common',\n                'lightboxable-elements',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-video-iframe/',\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::FILL,\n                    Layout::FIXED,\n                    Layout::FIXED_HEIGHT,\n                    Layout::FLEX_ITEM,\n                    Layout::INTRINSIC,\n                    Layout::NODISPLAY,\n                    Layout::RESPONSIVE,\n                ],\n            ],\nSpecRule::REFERENCE_POINTS => [\n                [\n                    'tagSpecName' => 'AMP-VIDEO-IFRAME > [placeholder]',\n                    'mandatory' => true,\n                    'unique' => true,\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-video-iframe',\n            ],\nSpecRule::DISABLED_BY => [\n                'transformed',\n            ],\n];";
}
