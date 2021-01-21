<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Section;

use AmpProject\Attribute;
use AmpProject\Format;

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
            throw \AmpProject\Exception\InvalidCssName::forCssName($name);
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
        if (!in_array($format, \AmpProject\Amp::FORMATS, true)) {
            throw \AmpProject\Exception\InvalidFormat::forFormat($format);
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
                'htmlFormat' => [
                        Format::AMP,
                    ],
                'disabledBy' => [
                        Attribute::TRANSFORMED,
                    ],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#stylesheets',
                'maxBytes' => 75000,
                'maxBytesPerInlineStyle' => 1000,
                'urlBytesIncluded' => true,
                'maxBytesSpecUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#maximum-size',
                'allowAllDeclarationInStyleTag' => true,
                'declarationList' => [
                        'BASIC_DECLARATIONS',
                        'AMP_ONLY_DECLARATIONS',
                    ],
                'declarationListSvg' => [
                        'SVG_BASIC_DECLARATIONS',
                    ],
                'imageUrlSpec' => [
                        'protocol' => [
                            'https',
                            'http',
                            'data',
                        ],
                        'allowEmpty' => true,
                    ],
                'fontUrlSpec' => [
                        'protocol' => [
                            'https',
                            'http',
                            'data',
                        ],
                        'allowEmpty' => true,
                    ],
                'allowImportant' => false,
                'expandVendorPrefixes' => true,
            ],
            'AMP (transformed)' => [
                'htmlFormat' => [
                        Format::AMP,
                    ],
                'enabledBy' => [
                        Attribute::TRANSFORMED,
                    ],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#stylesheets',
                'maxBytes' => 112500,
                'maxBytesPerInlineStyle' => 1500,
                'urlBytesIncluded' => false,
                'maxBytesSpecUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#maximum-size',
                'allowAllDeclarationInStyleTag' => true,
                'declarationList' => [
                        'BASIC_DECLARATIONS',
                        'AMP_ONLY_DECLARATIONS',
                    ],
                'declarationListSvg' => [
                        'SVG_BASIC_DECLARATIONS',
                    ],
                'imageUrlSpec' => [
                        'protocol' => [
                            'https',
                            'http',
                            'data',
                        ],
                        'allowEmpty' => true,
                    ],
                'fontUrlSpec' => [
                        'protocol' => [
                            'https',
                            'http',
                            'data',
                        ],
                        'allowEmpty' => true,
                    ],
                'allowImportant' => false,
                'expandVendorPrefixes' => true,
            ],
            'AMP4ADS' => [
                'htmlFormat' => [
                        Format::AMP4ADS,
                    ],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/a4a_spec/#css',
                'maxBytesSpecUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/a4a_spec/#css',
                'allowAllDeclarationInStyleTag' => true,
                'declarationList' => [
                        'BASIC_DECLARATIONS',
                    ],
                'declarationListSvg' => [
                        'SVG_BASIC_DECLARATIONS',
                    ],
                'imageUrlSpec' => [
                        'protocol' => [
                            'https',
                            'http',
                            'data',
                        ],
                        'allowEmpty' => true,
                    ],
                'fontUrlSpec' => [
                        'protocol' => [
                            'https',
                            'http',
                            'data',
                        ],
                        'allowEmpty' => true,
                    ],
                'allowImportant' => false,
                'expandVendorPrefixes' => true,
            ],
            'AMP4EMAIL (no-data-css-strict)' => [
                'htmlFormat' => [
                        Format::AMP4EMAIL,
                    ],
                'disabledBy' => [
                        Attribute::DATA_CSS_STRICT,
                    ],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/email-spec/amp-email-css',
                'maxBytes' => 75000,
                'maxBytesPerInlineStyle' => 1000,
                'urlBytesIncluded' => true,
                'maxBytesSpecUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#maximum-size',
                'allowAllDeclarationInStyleTag' => true,
                'declarationList' => [
                        'BASIC_DECLARATIONS',
                    ],
                'declarationListSvg' => [
                        'SVG_BASIC_DECLARATIONS',
                    ],
                'imageUrlSpec' => [
                        'protocol' => [
                            'https',
                        ],
                    ],
                'allowImportant' => false,
                'maxBytesIsWarning' => true,
                'expandVendorPrefixes' => true,
            ],
            'AMP4EMAIL (data-css-strict)' => [
                'htmlFormat' => [
                        Format::AMP4EMAIL,
                    ],
                'enabledBy' => [
                        Attribute::DATA_CSS_STRICT,
                    ],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/email-spec/amp-email-css',
                'maxBytes' => 75000,
                'maxBytesPerInlineStyle' => 1000,
                'urlBytesIncluded' => true,
                'maxBytesSpecUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#maximum-size',
                'allowAllDeclarationInStyleTag' => false,
                'declarationList' => [
                        'EMAIL_SPECIFIC_DECLARATIONS',
                    ],
                'imageUrlSpec' => [
                        'protocol' => [
                            'https',
                        ],
                    ],
                'allowImportant' => false,
                'maxBytesIsWarning' => false,
                'expandVendorPrefixes' => false,
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
