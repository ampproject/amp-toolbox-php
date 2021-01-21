<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class SubscriptionsScriptCiphertext
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::SCRIPT,\nSpecRule::SPEC_NAME => 'subscriptions script ciphertext',\nSpecRule::MANDATORY_PARENT => 'subscriptions-section content swg_amp_cache_nonce',\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::CIPHERTEXT,\n        SpecRule::MANDATORY => true,\n        SpecRule::DISPATCH_KEY => 'NAME_DISPATCH',\n    ],\n    [\n        SpecRule::NAME => Attribute::TYPE,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE_CASEI => [\n                        'application/octet-stream',\n                    ],\n    ],\n],\nSpecRule::CDATA => [\n                SpecRule::DISALLOWED_CDATA_REGEX => [\n                    [\n                        'regex' => '<!--',\n                        'errorMessage' => 'html comments',\n                    ],\n                ],\n            ],\nSpecRule::MANDATORY_ANCESTOR => Element::BODY,\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\n];";
}
