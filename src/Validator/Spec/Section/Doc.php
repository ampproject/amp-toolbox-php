<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Section;

use AmpProject\Format;
use AmpProject\Validator\Spec\SpecRule;

final class Doc
{
    /** @var array */
    public $doc;

    public function __construct()
    {
        $this->doc = [
            [
                SpecRule::HTML_FORMAT => [
                    Format::AMP4EMAIL,
                ],
                SpecRule::MAX_BYTES => 200000,
                SpecRule::MAX_BYTES_SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/email-spec/amp-email-format/?format=email',
            ],
        ];
    }
}
