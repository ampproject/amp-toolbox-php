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

final class VideoTrackKindSubtitles extends Tag
{
    /**
     * ID of the tag.
     *
     * @var string
     */
    const ID = 'video > track[kind=subtitles]';

    /**
     * Array of spec rules.
     *
     * @var array
     */
    const SPEC = [
        SpecRule::TAG_NAME => Element::TRACK,
        SpecRule::SPEC_NAME => 'video > track[kind=subtitles]',
        SpecRule::MANDATORY_PARENT => Element::VIDEO,
        SpecRule::ATTR_LISTS => [
            AttributeList\TrackAttrsSubtitles::ID,
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
        ],
    ];
}