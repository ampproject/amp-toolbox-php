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

final class Dir extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::DIR,
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
    ];
}
