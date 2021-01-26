<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Format;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class SpanSwgAmpCacheNonce extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::SPAN,
        SpecRule::SPEC_NAME => 'span swg_amp_cache_nonce',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'swg_amp_cache_nonce',
                SpecRule::MANDATORY => true,
                SpecRule::DISPATCH_KEY => 'NAME_DISPATCH',
            ],
        ],
        SpecRule::MANDATORY_ANCESTOR => Element::BODY,
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::SATISFIES => [
            'span swg_amp_cache_nonce',
        ],
        SpecRule::REQUIRES => [
            'subscriptions-section content swg_amp_cache_nonce',
        ],
        SpecRule::REQUIRES_EXTENSION => [
            'amp-subscriptions',
        ],
    ];
}
