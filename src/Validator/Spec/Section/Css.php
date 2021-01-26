<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Section;

use AmpProject\Amp;
use AmpProject\Attribute;
use AmpProject\Exception\InvalidCssName;
use AmpProject\Exception\InvalidFormat;
use AmpProject\Format;
use AmpProject\Protocol;
use AmpProject\Validator\Spec\SpecRule;

final class Css
{
    /** @var array<array> */
    private $css;

    /** @var array<array> */
    private $byFormat;

    /**
     * Get the CSS spec for a given name.
     *
     * @param string $name Format to get the CSS spec for.
     * @return array CSS rule set.
     */
    public function getByName($name)
    {
        if (!array_key_exists($name, $this->css)) {
            throw InvalidCssName::forCssName($name);
        }

        return $this->css[$name];
    }

    /**
     * Get the CSS spec for a given format.
     *
     * @param string $format Format to get the CSS spec for.
     * @return array Array of CSS rule sets.
     */
    public function getByFormat($format)
    {
        if (!in_array($format, Amp::FORMATS, true)) {
            throw InvalidFormat::forFormat($format);
        }

        if (!array_key_exists($format, $this->byFormat)) {
            return [];
        }

        return $this->byFormat[$format];
    }

    public function __construct()
    {
        $this->css = [
            'AMP (no-transformed)' => [
                SpecRule::HTML_FORMAT => [
                    Format::AMP,
                ],
                SpecRule::DISABLED_BY => [
                    Attribute::TRANSFORMED,
                ],
                SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#stylesheets',
                SpecRule::MAX_BYTES => 75000,
                SpecRule::MAX_BYTES_PER_INLINE_STYLE => 1000,
                SpecRule::URL_BYTES_INCLUDED => true,
                SpecRule::MAX_BYTES_SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#maximum-size',
                SpecRule::ALLOW_ALL_DECLARATION_IN_STYLE_TAG => true,
                SpecRule::DECLARATION_LIST => [
                    'BASIC_DECLARATIONS',
                    'AMP_ONLY_DECLARATIONS',
                ],
                SpecRule::DECLARATION_LIST_SVG => [
                    'SVG_BASIC_DECLARATIONS',
                ],
                SpecRule::IMAGE_URL_SPEC => [
                    SpecRule::PROTOCOL => [
                        Protocol::HTTPS,
                        Protocol::HTTP,
                        Protocol::DATA,
                    ],
                    SpecRule::ALLOW_EMPTY => true,
                ],
                SpecRule::FONT_URL_SPEC => [
                    SpecRule::PROTOCOL => [
                        Protocol::HTTPS,
                        Protocol::HTTP,
                        Protocol::DATA,
                    ],
                    SpecRule::ALLOW_EMPTY => true,
                ],
                SpecRule::ALLOW_IMPORTANT => false,
                SpecRule::EXPAND_VENDOR_PREFIXES => true,
            ],
            'AMP (transformed)' => [
                SpecRule::HTML_FORMAT => [
                    Format::AMP,
                ],
                SpecRule::ENABLED_BY => [
                    Attribute::TRANSFORMED,
                ],
                SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#stylesheets',
                SpecRule::MAX_BYTES => 112500,
                SpecRule::MAX_BYTES_PER_INLINE_STYLE => 1500,
                SpecRule::URL_BYTES_INCLUDED => false,
                SpecRule::MAX_BYTES_SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#maximum-size',
                SpecRule::ALLOW_ALL_DECLARATION_IN_STYLE_TAG => true,
                SpecRule::DECLARATION_LIST => [
                    'BASIC_DECLARATIONS',
                    'AMP_ONLY_DECLARATIONS',
                ],
                SpecRule::DECLARATION_LIST_SVG => [
                    'SVG_BASIC_DECLARATIONS',
                ],
                SpecRule::IMAGE_URL_SPEC => [
                    SpecRule::PROTOCOL => [
                        Protocol::HTTPS,
                        Protocol::HTTP,
                        Protocol::DATA,
                    ],
                    SpecRule::ALLOW_EMPTY => true,
                ],
                SpecRule::FONT_URL_SPEC => [
                    SpecRule::PROTOCOL => [
                        Protocol::HTTPS,
                        Protocol::HTTP,
                        Protocol::DATA,
                    ],
                    SpecRule::ALLOW_EMPTY => true,
                ],
                SpecRule::ALLOW_IMPORTANT => false,
                SpecRule::EXPAND_VENDOR_PREFIXES => true,
            ],
            'AMP4ADS' => [
                SpecRule::HTML_FORMAT => [
                    Format::AMP4ADS,
                ],
                SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/a4a_spec/#css',
                SpecRule::MAX_BYTES_SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/a4a_spec/#css',
                SpecRule::ALLOW_ALL_DECLARATION_IN_STYLE_TAG => true,
                SpecRule::DECLARATION_LIST => [
                    'BASIC_DECLARATIONS',
                ],
                SpecRule::DECLARATION_LIST_SVG => [
                    'SVG_BASIC_DECLARATIONS',
                ],
                SpecRule::IMAGE_URL_SPEC => [
                    SpecRule::PROTOCOL => [
                        Protocol::HTTPS,
                        Protocol::HTTP,
                        Protocol::DATA,
                    ],
                    SpecRule::ALLOW_EMPTY => true,
                ],
                SpecRule::FONT_URL_SPEC => [
                    SpecRule::PROTOCOL => [
                        Protocol::HTTPS,
                        Protocol::HTTP,
                        Protocol::DATA,
                    ],
                    SpecRule::ALLOW_EMPTY => true,
                ],
                SpecRule::ALLOW_IMPORTANT => false,
                SpecRule::EXPAND_VENDOR_PREFIXES => true,
            ],
            'AMP4EMAIL (no-data-css-strict)' => [
                SpecRule::HTML_FORMAT => [
                    Format::AMP4EMAIL,
                ],
                SpecRule::DISABLED_BY => [
                    Attribute::DATA_CSS_STRICT,
                ],
                SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/email-spec/amp-email-css',
                SpecRule::MAX_BYTES => 75000,
                SpecRule::MAX_BYTES_PER_INLINE_STYLE => 1000,
                SpecRule::URL_BYTES_INCLUDED => true,
                SpecRule::MAX_BYTES_SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#maximum-size',
                SpecRule::ALLOW_ALL_DECLARATION_IN_STYLE_TAG => true,
                SpecRule::DECLARATION_LIST => [
                    'BASIC_DECLARATIONS',
                ],
                SpecRule::DECLARATION_LIST_SVG => [
                    'SVG_BASIC_DECLARATIONS',
                ],
                SpecRule::IMAGE_URL_SPEC => [
                    SpecRule::PROTOCOL => [
                        Protocol::HTTPS,
                    ],
                ],
                SpecRule::ALLOW_IMPORTANT => false,
                SpecRule::MAX_BYTES_IS_WARNING => true,
                SpecRule::EXPAND_VENDOR_PREFIXES => true,
            ],
            'AMP4EMAIL (data-css-strict)' => [
                SpecRule::HTML_FORMAT => [
                    Format::AMP4EMAIL,
                ],
                SpecRule::ENABLED_BY => [
                    Attribute::DATA_CSS_STRICT,
                ],
                SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/email-spec/amp-email-css',
                SpecRule::MAX_BYTES => 75000,
                SpecRule::MAX_BYTES_PER_INLINE_STYLE => 1000,
                SpecRule::URL_BYTES_INCLUDED => true,
                SpecRule::MAX_BYTES_SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#maximum-size',
                SpecRule::ALLOW_ALL_DECLARATION_IN_STYLE_TAG => false,
                SpecRule::DECLARATION_LIST => [
                    'EMAIL_SPECIFIC_DECLARATIONS',
                ],
                SpecRule::IMAGE_URL_SPEC => [
                    SpecRule::PROTOCOL => [
                        Protocol::HTTPS,
                    ],
                ],
                SpecRule::ALLOW_IMPORTANT => false,
                SpecRule::MAX_BYTES_IS_WARNING => false,
                SpecRule::EXPAND_VENDOR_PREFIXES => false,
            ],
        ];
        $this->byFormat = [
            Format::AMP => [
                $this->css['AMP (no-transformed)'],
                $this->css['AMP (transformed)'],
            ],
            Format::AMP4ADS => [
                $this->css['AMP4ADS'],
            ],
            Format::AMP4EMAIL => [
                $this->css['AMP4EMAIL (no-data-css-strict)'],
                $this->css['AMP4EMAIL (data-css-strict)'],
            ],
        ];
    }
}
