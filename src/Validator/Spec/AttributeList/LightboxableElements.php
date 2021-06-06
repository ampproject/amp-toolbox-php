<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\AttributeList;

use AmpProject\Attribute;
use AmpProject\Validator\Spec\AttributeList;
use AmpProject\Validator\Spec\SpecRule;

final class LightboxableElements extends AttributeList
{
    /**
     * ID of the attribute list.
     *
     * @var string
     */
    const ID = 'lightboxable-elements';

    /**
     * Array of attributes.
     *
     * @var array<array>
     */
    const ATTRIBUTES = [
        Attribute::LIGHTBOX => [],
        Attribute::LIGHTBOX_THUMBNAIL_ID => [
            SpecRule::VALUE_REGEX_CASEI => '^[a-z][a-z\d_-]*',
        ],
    ];
}