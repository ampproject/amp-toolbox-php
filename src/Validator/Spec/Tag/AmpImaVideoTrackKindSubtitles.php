<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Extension;
use AmpProject\Format;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\AttributeList;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpImaVideoTrackKindSubtitles extends Tag
{
    /**
     * ID of the tag.
     *
     * @var string
     */
    const ID = 'amp-ima-video > track[kind=subtitles]';

    const SPEC = [
        SpecRule::TAG_NAME => Element::TRACK,
        SpecRule::SPEC_NAME => 'amp-ima-video > track[kind=subtitles]',
        SpecRule::MANDATORY_PARENT => Extension::IMA_VIDEO,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => '[label]',
            ],
            [
                SpecRule::NAME => '[src]',
            ],
            [
                SpecRule::NAME => '[srclang]',
            ],
        ],
        SpecRule::ATTR_LISTS => [
            AttributeList\TrackAttrsSubtitles::ID,
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-ima-video/',
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
    ];
}
