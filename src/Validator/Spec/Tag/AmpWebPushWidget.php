<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpWebPushWidget
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::WEB_PUSH_WIDGET,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::VISIBILITY,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE => [\n                        'blocked',\n                        'subscribed',\n                        'unsubscribed',\n                    ],\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-web-push/',\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::FIXED,\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-web-push',\n            ],\n];";
}
