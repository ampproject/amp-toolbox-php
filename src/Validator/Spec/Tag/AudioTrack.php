<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Format;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\AttributeList;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AudioTrack extends Tag
{
    /**
     * ID of the tag.
     *
     * @var string
     */
    const ID = 'audio > track';

    /**
     * Array of spec rules.
     *
     * @var array
     */
    const SPEC = [
        SpecRule::TAG_NAME => Element::TRACK,
        SpecRule::SPEC_NAME => 'audio > track',
        SpecRule::MANDATORY_PARENT => Element::AUDIO,
        SpecRule::ATTR_LISTS => [
            AttributeList\TrackAttrsNoSubtitles::ID,
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
        ],
    ];
}
