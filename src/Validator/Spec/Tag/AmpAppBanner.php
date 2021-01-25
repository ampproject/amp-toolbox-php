<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpAppBanner extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::APP_BANNER,
        SpecRule::UNIQUE => true,
        SpecRule::MANDATORY_PARENT => Element::BODY,
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
            'mandatory-id-attr',
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-app-banner/',
        SpecRule::AMP_LAYOUT => [
            'supportedLayouts' => [
                Layout::NODISPLAY,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES => [
            'amp-app-banner data source',
            'amp-app-banner button[open-button]',
        ],
        SpecRule::REQUIRES_EXTENSION => [
            'amp-app-banner',
        ],
    ];
}
