<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
use AmpProject\Format;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class SubscriptionsSectionContentSwgAmpCacheNonce extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::SECTION,
        SpecRule::SPEC_NAME => 'subscriptions-section content swg_amp_cache_nonce',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::ENCRYPTED,
                SpecRule::MANDATORY => true,
                SpecRule::DISPATCH_KEY => 'NAME_DISPATCH',
            ],
            [
                SpecRule::NAME => Attribute::SUBSCRIPTIONS_SECTION,
                SpecRule::VALUE_CASEI => [
                    'content',
                ],
            ],
            [
                SpecRule::NAME => Attribute::SWG_AMP_CACHE_NONCE,
                SpecRule::MANDATORY => true,
            ],
        ],
        SpecRule::MANDATORY_ANCESTOR => Element::BODY,
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::SATISFIES => [
            'subscriptions-section content swg_amp_cache_nonce',
        ],
        SpecRule::REQUIRES => [
            'span swg_amp_cache_nonce',
        ],
    ];
}
