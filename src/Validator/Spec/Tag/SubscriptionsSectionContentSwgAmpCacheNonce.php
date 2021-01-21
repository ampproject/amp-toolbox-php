<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class SubscriptionsSectionContentSwgAmpCacheNonce
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::SECTION,\nSpecRule::SPEC_NAME => 'subscriptions-section content swg_amp_cache_nonce',\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::ENCRYPTED,\n        SpecRule::MANDATORY => true,\n        SpecRule::DISPATCH_KEY => 'NAME_DISPATCH',\n    ],\n    [\n        SpecRule::NAME => Attribute::SUBSCRIPTIONS_SECTION,\n        SpecRule::VALUE_CASEI => [\n                        'content',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::SWG_AMP_CACHE_NONCE,\n        SpecRule::MANDATORY => true,\n    ],\n],\nSpecRule::MANDATORY_ANCESTOR => Element::BODY,\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::SATISFIES => [\n                'subscriptions-section content swg_amp_cache_nonce',\n            ],\nSpecRule::REQUIRES => [\n                'span swg_amp_cache_nonce',\n            ],\n];";
}
