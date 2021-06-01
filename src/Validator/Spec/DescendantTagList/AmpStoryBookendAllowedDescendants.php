<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\DescendantTagList;

use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\DescendantTagList;
use AmpProject\Validator\Spec\SpecRule; // @todo Unused import.

final class AmpStoryBookendAllowedDescendants extends DescendantTagList
{
    /**
     * ID of the descendant tag list.
     *
     * @var string
     */
    const ID = 'amp-story-bookend-allowed-descendants';

    /**
     * Array of descendant tags.
     *
     * @var array<array>
     */
    const DESCENDANT_TAGS = [
        Element::SCRIPT,
    ];
}
