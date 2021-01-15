<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Section;

final class Css
{
    /** @var array */
    public $css;

    public function __construct()
    {
        $this->css = [
            [
                'htmlFormat' => [
                    'AMP',
                ],
                'disabledBy' => [
                    'transformed',
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
            [
                'htmlFormat' => [
                    'AMP',
                ],
                'enabledBy' => [
                    'transformed',
                ],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#stylesheets',
                'maxBytes' => 75000,
                'maxBytesPerInlineStyle' => 1000,
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
            [
                'htmlFormat' => [
                    'AMP4ADS',
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
            [
                'htmlFormat' => [
                    'AMP4EMAIL',
                ],
                'disabledBy' => [
                    'data-css-strict',
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
            [
                'htmlFormat' => [
                    'AMP4EMAIL',
                ],
                'enabledBy' => [
                    'data-css-strict',
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
    }
}
