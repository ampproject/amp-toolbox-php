<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class HeadStyleAmpBoilerplateTransformed
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::STYLE,\nSpecRule::SPEC_NAME => 'head > style[amp-boilerplate] (transformed)',\nSpecRule::UNIQUE => true,\nSpecRule::MANDATORY_PARENT => Element::HEAD,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::AMP_BOILERPLATE,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE => [\n                        '',\n                    ],\n        SpecRule::DISPATCH_KEY => 'NAME_VALUE_PARENT_DISPATCH',\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'nonce-attr',\n            ],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amp-boilerplate/?format=websites',\nSpecRule::CDATA => [\n                SpecRule::CDATA_REGEX => '\\s*body\\s*{\\s*-webkit-animation:\\s*-amp-start\\s+8s\\s+steps\\(1,\\s*end\\)\\s+0s\\s+1\\s+normal\\s+both;\\s*-moz-animation:\\s*-amp-start\\s+8s\\s+steps\\s*\\(1\\s*,\\s*end\\s*\\)\\s+0s\\s+1\\s+normal\\s+both;\\s*-ms-animation:\\s*-amp-start\\s+8s\\s+steps\\s*\\(1\\s*,\\s*end\\s*\\)\\s+0s\\s+1\\s+normal\\s+both;\\s*animation:\\s*-amp-start\\s+8s\\s+steps\\(1,\\s*end\\)\\s+0s\\s+1\\s+normal\\s+both;?\\s*}\\s*@-webkit-keyframes\\s+-amp-start\\s*{\\s*from\\s*{\\s*visibility:\\s*hidden;?\\s*}\\s*to\\s*{\\s*visibility:\\s*visible;?\\s*}\\s*}\\s*@-moz-keyframes\\s+-amp-start\\s*{\\s*from\\s*{\\s*visibility:\\s*hidden;?\\s*}\\s*to\\s*{\\s*visibility:\\s*visible;?\\s*}\\s*}\\s*@-ms-keyframes\\s+-amp-start\\s*{\\s*from\\s*{\\s*visibility:\\s*hidden;?\\s*}\\s*to\\s*{\\s*visibility:\\s*visible;?\\s*}\\s*}\\s*@-o-keyframes\\s+-amp-start\\s*{\\s*from\\s*{\\s*visibility:\\s*hidden;?\\s*}\\s*to\\s*{\\s*visibility:\\s*visible;?\\s*}\\s*}\\s*@keyframes\\s+-amp-start\\s*{\\s*from\\s*{\\s*visibility:\\s*hidden;?\\s*}\\s*to\\s*{\\s*visibility:\\s*visible;?\\s*}\\s*}\\s*',\n                SpecRule::DOC_CSS_BYTES => false,\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::ENABLED_BY => [\n                'transformed',\n            ],\nSpecRule::DESCRIPTIVE_NAME => 'head > style[amp-boilerplate]',\n];";
}
