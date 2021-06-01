<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
use AmpProject\Extension;
use AmpProject\Format;
use AmpProject\Layout;
use AmpProject\Validator\Spec\AttributeList;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpStoryAmpAudio extends Tag
{
    /**
     * ID of the tag.
     *
     * @var string
     */
    const ID = 'amp-story >> amp-audio';

    /**
     * Array of spec rules.
     *
     * @var array
     */
    const SPEC = [
        SpecRule::TAG_NAME => Extension::AUDIO,
        SpecRule::SPEC_NAME => 'amp-story >> amp-audio',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::AUTOPLAY,
                SpecRule::MANDATORY => true,
                SpecRule::VALUE => [
                    '',
                ],
            ],
        ],
        SpecRule::ATTR_LISTS => [
            AttributeList\AmpAudioCommon::ID,
            AttributeList\ExtendedAmpGlobal::ID,
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-audio/',
        SpecRule::AMP_LAYOUT => [
            SpecRule::SUPPORTED_LAYOUTS => [
                Layout::NODISPLAY,
            ],
        ],
        SpecRule::MANDATORY_ANCESTOR => Extension::STORY,
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::AUDIO,
        ],
    ];
}
