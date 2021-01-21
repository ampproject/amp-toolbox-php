<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpAppBanner
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::APP_BANNER,\nSpecRule::UNIQUE => true,\nSpecRule::MANDATORY_PARENT => Element::BODY,\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n                'mandatory-id-attr',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-app-banner/',\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::NODISPLAY,\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES => [\n                'amp-app-banner data source',\n                'amp-app-banner button[open-button]',\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-app-banner',\n            ],\n];";
}
