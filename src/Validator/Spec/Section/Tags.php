<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Section;

use AmpProject\Attribute;
use AmpProject\Exception\InvalidSpecName;
use AmpProject\Extension;
use AmpProject\Format;
use AmpProject\Internal;
use AmpProject\Layout;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class Tags
{
    /** @var array<string,Tag> */
    private $tags;

    /** @var array<string,array<int,Tag>> */
    private $byTagName;

    /** @var array<string,Tag> */
    private $bySpecName;

    /** @var array<string,array<int,Tag>> */
    private $byFormat;

    /**
     * Get a collection of tags by tag name.
     *
     * @param string $tagName Tag name to get the collection of tags for.
     * @return array<Tag> Array of tags. Empty array if tag name not found.
     */
    public function byTagName($tagName)
    {
        $tagName = strtolower($tagName);

        if (!array_key_exists($tagName, $this->byTagName)) {
            return [];
        }

        $tags = $this->byTagName[$tagName];
        return is_array($tags) ? $tags : [$tags];
    }

    /**
     * Get the tag for a given spec name.
     *
     * @param string $specName Spec name to get the tag for.
     * @return Tag Tag with the given spec name.
     * @throws InvalidSpecName If an invalid spec name is requested.
     */
    public function bySpecName($specName)
    {
        if (!array_key_exists($specName, $this->bySpecName)) {
            throw \AmpProject\Exception\InvalidSpecName::forSpecName($specName);
        }

        return $this->bySpecName[$specName];
    }

    /**
     * Get a collection of tags for a given AMP HTML format name.
     *
     * @param string $format AMP HTML format to get the tags for.
     * @return array<Tag> Array of tags matching the requested AMP HTML format.
     * @throws InvalidSpecName If an invalid AMP HTML format is requested.
     */
    public function byFormat($format)
    {
        if (!array_key_exists($format, $this->byFormat)) {
            throw \AmpProject\Exception\InvalidFormat::forFormat($format);
        }

        $tags = $this->byFormat[$format];
        return is_array($tags) ? $tags : [$tags];
    }

    public function __construct()
    {
        $this->tags = [
            Element::A => new Tag(
                [
                    SpecRule::TAG_NAME => Element::A,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::BORDER,
                        ],
                        [
                            SpecRule::NAME => Attribute::DOWNLOAD,
                        ],
                        [
                            SpecRule::NAME => Attribute::HREF,
                            SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'ftp',
                                    'geo',
                                    'http',
                                    'https',
                                    'mailto',
                                    'maps',
                                    'bip',
                                    'bbmi',
                                    'chrome',
                                    'itms-services',
                                    'facetime',
                                    'fb-me',
                                    'fb-messenger',
                                    'feed',
                                    'intent',
                                    'line',
                                    'skype',
                                    'sms',
                                    'snapchat',
                                    'tel',
                                    'tg',
                                    'threema',
                                    'twitter',
                                    'viber',
                                    'webcal',
                                    'web+mastodon',
                                    'wh',
                                    'whatsapp',
                                ],
                                SpecRule::ALLOW_EMPTY => true,
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::HREFLANG,
                        ],
                        [
                            SpecRule::NAME => Attribute::MEDIA,
                        ],
                        [
                            SpecRule::NAME => Attribute::REFERRERPOLICY,
                        ],
                        [
                            SpecRule::NAME => Attribute::REL,
                            SpecRule::DISALLOWED_VALUE_REGEX => '(^|\s)(components|dns-prefetch|import|manifest|preconnect|prefetch|preload|prerender|serviceworker|stylesheet|subresource)(\s|$)',
                        ],
                        [
                            SpecRule::NAME => Attribute::ROLE,
                            SpecRule::IMPLICIT => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::TABINDEX,
                            SpecRule::IMPLICIT => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::TARGET,
                            SpecRule::VALUE => [
                                '_blank',
                                '_self',
                                '_top',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::VALUE_CASEI => [
                                'text/html',
                                'application/rss+xml',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::SHOW_TOOLTIP,
                            SpecRule::VALUE => [
                                'auto',
                                'true',
                            ],
                        ],
                        [
                            SpecRule::NAME => '[HREF]',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'name-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#links',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            'A (AMP4EMAIL)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::A,
                    SpecRule::SPEC_NAME => 'A (AMP4EMAIL)',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::BORDER,
                        ],
                        [
                            SpecRule::NAME => Attribute::HREF,
                            SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin|(.|\s){{|}}(.|\s)|^{{.*[^}][^}]$|^[^{][^{].*}}$|^}}|{{$|{{#|{{/|{{\^',
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'http',
                                    'https',
                                    'mailto',
                                    'tel',
                                ],
                                SpecRule::ALLOW_RELATIVE => false,
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::HREFLANG,
                        ],
                        [
                            SpecRule::NAME => Attribute::MEDIA,
                        ],
                        [
                            SpecRule::NAME => Attribute::ROLE,
                            SpecRule::IMPLICIT => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::TABINDEX,
                            SpecRule::IMPLICIT => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::TARGET,
                            SpecRule::VALUE => [
                                '_blank',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::VALUE_CASEI => [
                                'text/html',
                            ],
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::ABBR => new Tag(
                [
                    SpecRule::TAG_NAME => Element::ABBR,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::ACRONYM => new Tag(
                [
                    SpecRule::TAG_NAME => Element::ACRONYM,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            Element::ADDRESS => new Tag(
                [
                    SpecRule::TAG_NAME => Element::ADDRESS,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Extension::_3D_GLTF => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::_3D_GLTF,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ALPHA,
                            SpecRule::VALUE => [
                                'false',
                                'true',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::ANTIALIASING,
                            SpecRule::VALUE => [
                                'false',
                                'true',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::AUTOROTATE,
                            SpecRule::VALUE => [
                                'false',
                                'true',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::CLEARCOLOR,
                        ],
                        [
                            SpecRule::NAME => Attribute::ENABLEZOOM,
                            SpecRule::VALUE => [
                                'false',
                                'true',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::MAXPIXELRATIO,
                            SpecRule::VALUE_REGEX => '[+-]?(\d*\.)?\d+',
                        ],
                        [
                            SpecRule::NAME => Attribute::SRC,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'https',
                                ],
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-3d-gltf',
                    ],
                ]
            ),
            Extension::_3Q_PLAYER => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::_3Q_PLAYER,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::AUTOPLAY,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_ID,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FLEX_ITEM,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-3q-player',
                    ],
                ]
            ),
            'amp-access extension .json script' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::SPEC_NAME => 'amp-access extension .json script',
                    SpecRule::UNIQUE => true,
                    SpecRule::MANDATORY_PARENT => Element::HEAD,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ID,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                'amp-access',
                            ],
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                        ],
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_CASEI => [
                                'application/json',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'nonce-attr',
                    ],
                    SpecRule::CDATA => [
                        SpecRule::DISALLOWED_CDATA_REGEX => [
                            [
                                'regex' => '<!--',
                                'errorMessage' => 'html comments',
                            ],
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-access',
                    ],
                ]
            ),
            Extension::ACCORDION => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::ACCORDION,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ANIMATE,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::DISABLE_SESSION_STATES,
                            SpecRule::VALUE => [
                                '',
                            ],
                            SpecRule::DISABLED_BY => [
                                'amp4email',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::EXPAND_SINGLE_SECTION,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-accordion/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::CONTAINER,
                        ],
                    ],
                    SpecRule::CHILD_TAGS => [
                        'childTagNameOneof' => [
                            'SECTION',
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-accordion',
                    ],
                ]
            ),
            'amp-accordion > section' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SECTION,
                    SpecRule::SPEC_NAME => 'amp-accordion > section',
                    SpecRule::MANDATORY_PARENT => Extension::ACCORDION,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ACCESS_HIDE,
                            SpecRule::VALUE => [
                                '',
                            ],
                            SpecRule::DISABLED_BY => [
                                'amp4email',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::EXPANDED,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                        [
                            SpecRule::NAME => '[DATA_EXPAND]',
                        ],
                    ],
                    SpecRule::CHILD_TAGS => [
                        'mandatoryNumChildTags' => 2,
                        'firstChildTagNameOneof' => [
                            'H1',
                            'H2',
                            'H3',
                            'H4',
                            'H5',
                            'H6',
                            'HEADER',
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                    SpecRule::DESCRIPTIVE_NAME => 'amp-accordion > section',
                ]
            ),
            Extension::ACTION_MACRO => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::ACTION_MACRO,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ARGUMENTS,
                        ],
                        [
                            SpecRule::NAME => Attribute::EXECUTE,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'mandatory-id-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-action-macro/',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-action-macro',
                    ],
                ]
            ),
            Extension::AD => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::AD,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ALT,
                        ],
                        [
                            SpecRule::NAME => Attribute::JSON,
                        ],
                        [
                            SpecRule::NAME => Attribute::RTC_CONFIG,
                        ],
                        [
                            SpecRule::NAME => Attribute::SRC,
                            SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'https',
                                ],
                                SpecRule::ALLOW_RELATIVE => true,
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::TEMPLATE,
                        ],
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::STICKY,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-ad/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::FLUID,
                            Layout::INTRINSIC,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::DISALLOWED_ANCESTOR => [
                        'AMP-APP-BANNER',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::ALSO_REQUIRES_TAG_WARNING => [
                        'amp-ad extension script',
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-ad',
                    ],
                ]
            ),
            Extension::AD_CUSTOM => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::AD_CUSTOM,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::SRC,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'https',
                                ],
                                SpecRule::ALLOW_RELATIVE => false,
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::FLUID,
                            Layout::INTRINSIC,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::DISALLOWED_ANCESTOR => [
                        'AMP-APP-BANNER',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-ad-custom',
                    ],
                ]
            ),
            Extension::AD_EXIT => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::AD_EXIT,
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                        'mandatory-id-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-ad-exit/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::NODISPLAY,
                            Layout::CONTAINER,
                        ],
                    ],
                    SpecRule::CHILD_TAGS => [
                        'mandatoryNumChildTags' => 1,
                        'childTagNameOneof' => [
                            'SCRIPT',
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP4ADS,
                    ],
                    SpecRule::REQUIRES => [
                        'amp-ad-exit configuration JSON',
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-ad-exit',
                    ],
                ]
            ),
            'amp-ad-exit configuration JSON' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::SPEC_NAME => 'amp-ad-exit configuration JSON',
                    SpecRule::MANDATORY_PARENT => Extension::AD_EXIT,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                'application/json',
                            ],
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_PARENT_DISPATCH',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'nonce-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-ad-exit/',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP4ADS,
                    ],
                    SpecRule::SATISFIES => [
                        'amp-ad-exit configuration JSON',
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-ad-exit',
                    ],
                ]
            ),
            Extension::ADDTHIS => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::ADDTHIS,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DATA_PRODUCT_CODE,
                            SpecRule::MANDATORY_ONEOF => '[\'data-product-code\', \'data-widget-id\']',
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_SHARE_MEDIA,
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'http',
                                    'https',
                                ],
                                SpecRule::ALLOW_EMPTY => true,
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_SHARE_URL,
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'http',
                                    'https',
                                ],
                                SpecRule::ALLOW_EMPTY => true,
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_WIDGET_ID,
                            SpecRule::MANDATORY_ONEOF => '[\'data-product-code\', \'data-widget-id\']',
                            SpecRule::TRIGGER => [
                                'alsoRequiresAttr' => [
                                    'data-pub-id',
                                ],
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-addthis',
                    ],
                ]
            ),
            'amp-ad extension script' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::SPEC_NAME => 'amp-ad extension script',
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-ad',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'amp-ad with data-enable-refresh attribute' => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::AD,
                    SpecRule::SPEC_NAME => 'amp-ad with data-enable-refresh attribute',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ALT,
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_ENABLE_REFRESH,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                '',
                            ],
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                        ],
                        [
                            SpecRule::NAME => Attribute::JSON,
                        ],
                        [
                            SpecRule::NAME => Attribute::SRC,
                            SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'https',
                                ],
                                SpecRule::ALLOW_RELATIVE => true,
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-ad/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::FLUID,
                            Layout::INTRINSIC,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::DISALLOWED_ANCESTOR => [
                        'AMP-APP-BANNER',
                        'AMP-FX-FLYING-CARPET',
                        'AMP-LIGHTBOX',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::ALSO_REQUIRES_TAG_WARNING => [
                        'amp-ad extension script',
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-ad',
                    ],
                ]
            ),
            'amp-ad with data-multi-size attribute' => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::AD,
                    SpecRule::SPEC_NAME => 'amp-ad with data-multi-size attribute',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ALT,
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_MULTI_SIZE,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                '',
                            ],
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                        ],
                        [
                            SpecRule::NAME => Attribute::JSON,
                        ],
                        [
                            SpecRule::NAME => Attribute::RTC_CONFIG,
                        ],
                        [
                            SpecRule::NAME => Attribute::SRC,
                            SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'https',
                                ],
                                SpecRule::ALLOW_RELATIVE => true,
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-ad/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::FLUID,
                            Layout::INTRINSIC,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::DISALLOWED_ANCESTOR => [
                        'AMP-APP-BANNER',
                        'AMP-CAROUSEL',
                        'AMP-FX-FLYING-CARPET',
                        'AMP-LIGHTBOX',
                        'AMP-STICKY-AD',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::ALSO_REQUIRES_TAG_WARNING => [
                        'amp-ad extension script',
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-ad',
                    ],
                ]
            ),
            'amp-ad with type=custom' => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::AD,
                    SpecRule::SPEC_NAME => 'amp-ad with type=custom',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DATA_URL,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'https',
                                ],
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::TEMPLATE,
                        ],
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                'custom',
                            ],
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::SPEC_URL => 'https://github.com/ampproject/amphtml/blob/master/ads/custom.md',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::FLUID,
                            Layout::INTRINSIC,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::DISALLOWED_ANCESTOR => [
                        'AMP-APP-BANNER',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::ALSO_REQUIRES_TAG_WARNING => [
                        'amp-ad extension script',
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-ad',
                    ],
                ]
            ),
            Extension::ANALYTICS => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::ANALYTICS,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::CONFIG,
                            SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'https',
                                ],
                                SpecRule::ALLOW_RELATIVE => true,
                                SpecRule::ALLOW_EMPTY => true,
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::TYPE,
                        ],
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-analytics/',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-analytics',
                    ],
                ]
            ),
            'amp-analytics extension .json script' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::SPEC_NAME => 'amp-analytics extension .json script',
                    SpecRule::MANDATORY_PARENT => Extension::ANALYTICS,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_PARENT_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'application/json',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'nonce-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-analytics/',
                    SpecRule::CDATA => [
                        SpecRule::DISALLOWED_CDATA_REGEX => [
                            [
                                'regex' => '<!--',
                                'errorMessage' => 'html comments',
                            ],
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-analytics',
                    ],
                    SpecRule::DESCRIPTIVE_NAME => 'amp-analytics extension .json script',
                ]
            ),
            Extension::ANIM => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::ANIM,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ALT,
                        ],
                        [
                            SpecRule::NAME => Attribute::ATTRIBUTION,
                        ],
                        [
                            SpecRule::NAME => Attribute::OBJECT_FIT,
                        ],
                        [
                            SpecRule::NAME => Attribute::OBJECT_POSITION,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                        'mandatory-src-or-srcset',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-anim/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::INTRINSIC,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-anim',
                    ],
                ]
            ),
            'AMP-ANIM (AMP4EMAIL)' => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::ANIM,
                    SpecRule::SPEC_NAME => 'AMP-ANIM (AMP4EMAIL)',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ALT,
                        ],
                        [
                            SpecRule::NAME => Attribute::ATTRIBUTION,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                        'mandatory-src-amp4email',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-anim/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP4EMAIL,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-anim',
                    ],
                ]
            ),
            Extension::ANIMATION => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::ANIMATION,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::TRIGGER,
                            SpecRule::VALUE => [
                                'visibility',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::NODISPLAY,
                        ],
                    ],
                    SpecRule::CHILD_TAGS => [
                        'mandatoryNumChildTags' => 1,
                        'childTagNameOneof' => [
                            'SCRIPT',
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                    SpecRule::REQUIRES => [
                        'amp-animation extension .json script',
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-animation',
                    ],
                ]
            ),
            'amp-animation extension .json script' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::SPEC_NAME => 'amp-animation extension .json script',
                    SpecRule::MANDATORY_PARENT => Extension::ANIMATION,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_PARENT_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'application/json',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'nonce-attr',
                    ],
                    SpecRule::CDATA => [
                        SpecRule::DISALLOWED_CDATA_REGEX => [
                            [
                                'regex' => '<!--',
                                'errorMessage' => 'html comments',
                            ],
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                    SpecRule::SATISFIES => [
                        'amp-animation extension .json script',
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-animation',
                    ],
                ]
            ),
            'amp-anim extension script (AMP4EMAIL)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::SPEC_NAME => 'amp-anim extension script (AMP4EMAIL)',
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP4EMAIL,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-anim',
                        'version' => [
                            '0.1',
                        ],
                    ],
                ]
            ),
            Extension::APESTER_MEDIA => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::APESTER_MEDIA,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DATA_APESTER_CHANNEL_TOKEN,
                            SpecRule::MANDATORY_ONEOF => '[\'data-apester-media-id\', \'data-apester-channel-token\']',
                            SpecRule::VALUE_REGEX => '[0-9a-zA-Z]+',
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_APESTER_MEDIA_ID,
                            SpecRule::MANDATORY_ONEOF => '[\'data-apester-media-id\', \'data-apester-channel-token\']',
                            SpecRule::VALUE_REGEX => '[0-9a-zA-Z]+',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-apester-media/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-apester-media',
                    ],
                ]
            ),
            Extension::APP_BANNER => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::APP_BANNER,
                    SpecRule::UNIQUE => true,
                    SpecRule::MANDATORY_PARENT => Element::BODY,
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                        'mandatory-id-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-app-banner/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::NODISPLAY,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES => [
                        'amp-app-banner data source',
                        'amp-app-banner button[open-button]',
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-app-banner',
                    ],
                ]
            ),
            'amp-app-banner button[open-button]' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::BUTTON,
                    SpecRule::SPEC_NAME => 'amp-app-banner button[open-button]',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::OPEN_BUTTON,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::ROLE,
                            SpecRule::IMPLICIT => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::TABINDEX,
                            SpecRule::IMPLICIT => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::TYPE,
                        ],
                        [
                            SpecRule::NAME => Attribute::VALUE,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'name-attr',
                    ],
                    SpecRule::MANDATORY_ANCESTOR => Extension::APP_BANNER,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                    SpecRule::SATISFIES => [
                        'amp-app-banner button[open-button]',
                    ],
                ]
            ),
            Extension::AUDIO => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::AUDIO,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::AUTOPLAY,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::PRELOAD,
                            SpecRule::VALUE_CASEI => [
                                'auto',
                                'metadata',
                                'none',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'amp-audio-common',
                        'extended-amp-global',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-audio/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::NODISPLAY,
                        ],
                        'definesDefaultWidth' => true,
                        'definesDefaultHeight' => true,
                    ],
                    SpecRule::DISALLOWED_ANCESTOR => [
                        'AMP-STORY',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-audio',
                    ],
                ]
            ),
            'amp-audio (A4A)' => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::AUDIO,
                    SpecRule::SPEC_NAME => 'amp-audio (A4A)',
                    SpecRule::ATTR_LISTS => [
                        'amp-audio-common',
                        'extended-amp-global',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-audio/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::NODISPLAY,
                        ],
                        'definesDefaultWidth' => true,
                        'definesDefaultHeight' => true,
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP4ADS,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-audio',
                    ],
                ]
            ),
            'amp-audio > source' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SOURCE,
                    SpecRule::SPEC_NAME => 'amp-audio > source',
                    SpecRule::MANDATORY_PARENT => Extension::AUDIO,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::MEDIA,
                        ],
                        [
                            SpecRule::NAME => Attribute::SRC,
                            SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'https',
                                ],
                                SpecRule::ALLOW_RELATIVE => true,
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::TYPE,
                        ],
                        [
                            SpecRule::NAME => '[SRC]',
                        ],
                        [
                            SpecRule::NAME => '[TYPE]',
                        ],
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-audio/',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            'amp-audio > track' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::TRACK,
                    SpecRule::SPEC_NAME => 'amp-audio > track',
                    SpecRule::MANDATORY_PARENT => Extension::AUDIO,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => '[LABEL]',
                        ],
                        [
                            SpecRule::NAME => '[SRC]',
                        ],
                        [
                            SpecRule::NAME => '[SRCLANG]',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'track-attrs-no-subtitles',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            'amp-audio > track[kind=subtitles]' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::TRACK,
                    SpecRule::SPEC_NAME => 'amp-audio > track[kind=subtitles]',
                    SpecRule::MANDATORY_PARENT => Extension::AUDIO,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => '[LABEL]',
                        ],
                        [
                            SpecRule::NAME => '[SRC]',
                        ],
                        [
                            SpecRule::NAME => '[SRCLANG]',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'track-attrs-subtitles',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            Extension::AUTO_ADS => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::AUTO_ADS,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-auto-ads/',
                    SpecRule::DISALLOWED_ANCESTOR => [
                        'AMP-AUTO-ADS',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-auto-ads',
                    ],
                ]
            ),
            'amp-autocomplete' => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::AUTOCOMPLETE,
                    SpecRule::SPEC_NAME => 'amp-autocomplete',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::FILTER,
                            SpecRule::MANDATORY => true,
                            SpecRule::TRIGGER => [
                                'ifValueRegex' => 'custom',
                                'alsoRequiresAttr' => [
                                    'filter-expr',
                                ],
                            ],
                            SpecRule::VALUE_CASEI => [
                                'custom',
                                'fuzzy',
                                'none',
                                'prefix',
                                'substring',
                                'token-prefix',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::FILTER_EXPR,
                            SpecRule::REQUIRES_EXTENSION => [
                                'amp-bind',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::FILTER_VALUE,
                        ],
                        [
                            SpecRule::NAME => Attribute::HIGHLIGHT_USER_ENTRY,
                        ],
                        [
                            SpecRule::NAME => Attribute::INLINE,
                        ],
                        [
                            SpecRule::NAME => Attribute::ITEMS,
                        ],
                        [
                            SpecRule::NAME => Attribute::MAX_ENTRIES,
                        ],
                        [
                            SpecRule::NAME => Attribute::MAX_ITEMS,
                        ],
                        [
                            SpecRule::NAME => Attribute::MIN_CHARACTERS,
                        ],
                        [
                            SpecRule::NAME => Attribute::PREFETCH,
                        ],
                        [
                            SpecRule::NAME => Attribute::QUERY,
                            SpecRule::TRIGGER => [
                                'alsoRequiresAttr' => [
                                    'src',
                                ],
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::SRC,
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'https',
                                ],
                                SpecRule::ALLOW_RELATIVE => true,
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::SUBMIT_ON_ENTER,
                        ],
                        [
                            SpecRule::NAME => Attribute::SUGGEST_FIRST,
                        ],
                        [
                            SpecRule::NAME => Attribute::TEMPLATE,
                        ],
                        [
                            SpecRule::NAME => '[SRC]',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-autocomplete/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::CONTAINER,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-autocomplete',
                    ],
                ]
            ),
            'AMP-AUTOCOMPLETE (AMP4EMAIL)' => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::AUTOCOMPLETE,
                    SpecRule::SPEC_NAME => 'AMP-AUTOCOMPLETE (AMP4EMAIL)',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::HIGHLIGHT_USER_ENTRY,
                        ],
                        [
                            SpecRule::NAME => Attribute::INLINE,
                        ],
                        [
                            SpecRule::NAME => Attribute::ITEMS,
                        ],
                        [
                            SpecRule::NAME => Attribute::MAX_ITEMS,
                        ],
                        [
                            SpecRule::NAME => Attribute::MIN_CHARACTERS,
                        ],
                        [
                            SpecRule::NAME => Attribute::PREFETCH,
                        ],
                        [
                            SpecRule::NAME => Attribute::QUERY,
                            SpecRule::TRIGGER => [
                                'alsoRequiresAttr' => [
                                    'src',
                                ],
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::SUBMIT_ON_ENTER,
                        ],
                        [
                            SpecRule::NAME => Attribute::SUGGEST_FIRST,
                        ],
                        [
                            SpecRule::NAME => Attribute::SRC,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin|{{|}}',
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'https',
                                ],
                                SpecRule::ALLOW_RELATIVE => false,
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::TEMPLATE,
                            SpecRule::VALUE_ONEOF_SET => 'TEMPLATE_IDS',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::CONTAINER,
                        ],
                    ],
                    SpecRule::DISALLOWED_ANCESTOR => [
                        'AMP-AUTOCOMPLETE',
                        'AMP-STATE',
                        'TEMPLATE',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP4EMAIL,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-autocomplete',
                    ],
                ]
            ),
            'amp-autocomplete > input' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::INPUT,
                    SpecRule::SPEC_NAME => 'amp-autocomplete > input',
                    SpecRule::MANDATORY_PARENT => Extension::AUTOCOMPLETE,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_CASEI => [
                                'search',
                                'text',
                            ],
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-autocomplete',
                        'amp-form',
                    ],
                ]
            ),
            'amp-autocomplete JSON' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::SPEC_NAME => 'amp-autocomplete JSON',
                    SpecRule::MANDATORY_PARENT => Extension::AUTOCOMPLETE,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_PARENT_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'application/json',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'nonce-attr',
                    ],
                    SpecRule::CDATA => [
                        SpecRule::DISALLOWED_CDATA_REGEX => [
                            [
                                'regex' => '<!--',
                                'errorMessage' => 'html comments',
                            ],
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-autocomplete',
                    ],
                ]
            ),
            Extension::BASE_CAROUSEL => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::BASE_CAROUSEL,
                    SpecRule::ATTR_LISTS => [
                        'amp-base-carousel-common',
                        'extended-amp-global',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-base-carousel/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::INTRINSIC,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-base-carousel',
                    ],
                ]
            ),
            'AMP-BASE-CAROUSEL lightbox [child]' => new Tag(
                [
                    SpecRule::TAG_NAME => '$REFERENCE_POINT',
                    SpecRule::SPEC_NAME => 'AMP-BASE-CAROUSEL lightbox [child]',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::LIGHTBOX_THUMBNAIL_ID,
                            SpecRule::VALUE_REGEX_CASEI => '^[a-z][a-z\d_-]*',
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            'AMP-BASE-CAROUSEL lightbox [lightbox-exclude]' => new Tag(
                [
                    SpecRule::TAG_NAME => '$REFERENCE_POINT',
                    SpecRule::SPEC_NAME => 'AMP-BASE-CAROUSEL lightbox [lightbox-exclude]',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::LIGHTBOX_EXCLUDE,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            'AMP-BASE-CAROUSEL [lightbox]' => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::BASE_CAROUSEL,
                    SpecRule::SPEC_NAME => 'AMP-BASE-CAROUSEL [lightbox]',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::LIGHTBOX,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'amp-base-carousel-common',
                        'extended-amp-global',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-base-carousel/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::INTRINSIC,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::REFERENCE_POINTS => [
                        [
                            'tagSpecName' => 'AMP-BASE-CAROUSEL lightbox [lightbox-exclude]',
                        ],
                        [
                            'tagSpecName' => 'AMP-BASE-CAROUSEL lightbox [child]',
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-base-carousel',
                        'amp-lightbox-gallery',
                    ],
                ]
            ),
            Extension::BEOPINION => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::BEOPINION,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DATA_ACCOUNT,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_REGEX_CASEI => '[0-9a-f]{24}',
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_CONTENT,
                            SpecRule::VALUE_REGEX_CASEI => '[0-9a-f]{24}',
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_MY_CONTENT,
                            SpecRule::VALUE => [
                                '0',
                                '1',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_NAME,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::INTRINSIC,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-beopinion',
                    ],
                ]
            ),
            Extension::BIND_MACRO => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::BIND_MACRO,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ARGUMENTS,
                        ],
                        [
                            SpecRule::NAME => Attribute::EXPRESSION,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'mandatory-id-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-bind/',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4EMAIL,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-bind',
                    ],
                ]
            ),
            'amp-bind extension .json script' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::SPEC_NAME => 'amp-bind extension .json script',
                    SpecRule::MANDATORY_PARENT => Extension::STATE,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_PARENT_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'application/json',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'nonce-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-bind/',
                    SpecRule::CDATA => [
                        SpecRule::MAX_BYTES => 100000,
                        SpecRule::MAX_BYTES_SPEC_URL => 'https://amp.dev/documentation/components/amp-bind#state',
                        SpecRule::DISALLOWED_CDATA_REGEX => [
                            [
                                'regex' => '<!--',
                                'errorMessage' => 'html comments',
                            ],
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-bind',
                    ],
                ]
            ),
            Extension::BODYMOVIN_ANIMATION => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::BODYMOVIN_ANIMATION,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::LOOP,
                            SpecRule::VALUE_REGEX_CASEI => '[1-9][0-9]*|false|true',
                        ],
                        [
                            SpecRule::NAME => Attribute::NOAUTOPLAY,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::SRC,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'https',
                                ],
                                SpecRule::ALLOW_RELATIVE => false,
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::RENDERER,
                            SpecRule::VALUE_CASEI => [
                                'svg',
                                'html',
                            ],
                        ],
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-bodymovin-animation/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-bodymovin-animation',
                    ],
                ]
            ),
            Extension::BRID_PLAYER => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::BRID_PLAYER,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::AUTOPLAY,
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_DYNAMIC,
                            SpecRule::VALUE_REGEX => '[a-z]+',
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_OUTSTREAM,
                            SpecRule::MANDATORY_ONEOF => '[\'data-outstream\', \'data-playlist\', \'data-video\']',
                            SpecRule::VALUE_REGEX => '[0-9]+',
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_PARTNER,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_REGEX => '[0-9]+',
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_PLAYER,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_REGEX => '[0-9]+',
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_PLAYLIST,
                            SpecRule::MANDATORY_ONEOF => '[\'data-outstream\', \'data-playlist\', \'data-video\']',
                            SpecRule::VALUE_REGEX => '.+',
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_VIDEO,
                            SpecRule::MANDATORY_ONEOF => '[\'data-outstream\', \'data-playlist\', \'data-video\']',
                            SpecRule::VALUE_REGEX => '[0-9]+',
                        ],
                        [
                            SpecRule::NAME => Attribute::DOCK,
                            SpecRule::REQUIRES_EXTENSION => [
                                'amp-video-docking',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-brid-player/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-brid-player',
                    ],
                ]
            ),
            Extension::BRIGHTCOVE => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::BRIGHTCOVE,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::AUTOPLAY,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_ACCOUNT,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::DOCK,
                            SpecRule::REQUIRES_EXTENSION => [
                                'amp-video-docking',
                            ],
                        ],
                        [
                            SpecRule::NAME => '[DATA_ACCOUNT]',
                        ],
                        [
                            SpecRule::NAME => '[DATA_EMBED]',
                        ],
                        [
                            SpecRule::NAME => '[DATA_PLAYER_ID]',
                        ],
                        [
                            SpecRule::NAME => '[DATA_PLAYER]',
                        ],
                        [
                            SpecRule::NAME => '[DATA_PLAYLIST_ID]',
                        ],
                        [
                            SpecRule::NAME => '[DATA_VIDEO_ID]',
                        ],
                        [
                            SpecRule::NAME => '[DATA_REFERRER]',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-brightcove/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-brightcove',
                    ],
                ]
            ),
            Extension::BYSIDE_CONTENT => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::BYSIDE_CONTENT,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DATA_LABEL,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_WEBCARE_ID,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-byside-content',
                    ],
                ]
            ),
            Extension::CALL_TRACKING => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::CALL_TRACKING,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::CONFIG,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'https',
                                ],
                                SpecRule::ALLOW_RELATIVE => false,
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-call-tracking/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::CONTAINER,
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::CHILD_TAGS => [
                        'mandatoryNumChildTags' => 1,
                        'childTagNameOneof' => [
                            'A',
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-call-tracking',
                    ],
                ]
            ),
            Extension::CAROUSEL => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::CAROUSEL,
                    SpecRule::SPEC_NAME => 'AMP-CAROUSEL',
                    SpecRule::ATTR_LISTS => [
                        'amp-carousel-common',
                        'extended-amp-global',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-carousel/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::INTRINSIC,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-carousel',
                    ],
                ]
            ),
            'AMP-CAROUSEL lightbox' => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::CAROUSEL,
                    SpecRule::SPEC_NAME => 'AMP-CAROUSEL lightbox',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::LIGHTBOX,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'amp-carousel-common',
                        'extended-amp-global',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-carousel/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::INTRINSIC,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::REFERENCE_POINTS => [
                        [
                            'tagSpecName' => 'AMP-CAROUSEL lightbox [lightbox-exclude]',
                        ],
                        [
                            'tagSpecName' => 'AMP-CAROUSEL lightbox [child]',
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-carousel',
                        'amp-lightbox-gallery',
                    ],
                ]
            ),
            'AMP-CAROUSEL lightbox [child]' => new Tag(
                [
                    SpecRule::TAG_NAME => '$REFERENCE_POINT',
                    SpecRule::SPEC_NAME => 'AMP-CAROUSEL lightbox [child]',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::LIGHTBOX_THUMBNAIL_ID,
                            SpecRule::VALUE_REGEX_CASEI => '^[a-z][a-z\d_-]*',
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            'AMP-CAROUSEL lightbox [lightbox-exclude]' => new Tag(
                [
                    SpecRule::TAG_NAME => '$REFERENCE_POINT',
                    SpecRule::SPEC_NAME => 'AMP-CAROUSEL lightbox [lightbox-exclude]',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::LIGHTBOX_EXCLUDE,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            Extension::CONNATIX_PLAYER => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::CONNATIX_PLAYER,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DATA_PLAYER_ID,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-connatix-player/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-connatix-player',
                    ],
                ]
            ),
            Extension::CONSENT => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::CONSENT,
                    SpecRule::UNIQUE => true,
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::NODISPLAY,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES => [
                        'amp-consent extension .json script',
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-consent',
                    ],
                    SpecRule::EXCLUDES => [
                        'amp-consent [type]',
                    ],
                ]
            ),
            'amp-consent extension .json script' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::SPEC_NAME => 'amp-consent extension .json script',
                    SpecRule::UNIQUE => true,
                    SpecRule::MANDATORY_PARENT => Extension::CONSENT,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_PARENT_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'application/json',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'nonce-attr',
                    ],
                    SpecRule::CDATA => [
                        SpecRule::DISALLOWED_CDATA_REGEX => [
                            [
                                'regex' => '<!--',
                                'errorMessage' => 'html comments',
                            ],
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::SATISFIES => [
                        'amp-consent extension .json script',
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-consent',
                    ],
                ]
            ),
            'amp-consent [type]' => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::CONSENT,
                    SpecRule::SPEC_NAME => 'amp-consent [type]',
                    SpecRule::UNIQUE => true,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::NODISPLAY,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::SATISFIES => [
                        'amp-consent [type]',
                    ],
                    SpecRule::REQUIRES => [
                        'meta name=amp-consent-blocking',
                        'amp-consent extension .json script',
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-consent',
                    ],
                ]
            ),
            Extension::DAILYMOTION => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::DAILYMOTION,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::AUTOPLAY,
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_ENDSCREEN_ENABLE,
                            SpecRule::VALUE => [
                                'false',
                                'true',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_INFO,
                            SpecRule::VALUE => [
                                'false',
                                'true',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_MUTE,
                            SpecRule::VALUE => [
                                'false',
                                'true',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_SHARING_ENABLE,
                            SpecRule::VALUE => [
                                'false',
                                'true',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_START,
                            SpecRule::VALUE_REGEX => '[0-9]+',
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_UI_HIGHLIGHT,
                            SpecRule::VALUE_REGEX_CASEI => '([0-9a-f]{3}){1,2}',
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_UI_LOGO,
                            SpecRule::VALUE => [
                                'false',
                                'true',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_VIDEOID,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_REGEX_CASEI => '[a-z0-9]+',
                        ],
                        [
                            SpecRule::NAME => Attribute::DOCK,
                            SpecRule::REQUIRES_EXTENSION => [
                                'amp-video-docking',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-dailymotion/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-dailymotion',
                    ],
                ]
            ),
            Extension::DATE_COUNTDOWN => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::DATE_COUNTDOWN,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::BIGGEST_UNIT,
                            SpecRule::VALUE_CASEI => [
                                'days',
                                'hours',
                                'minutes',
                                'seconds',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_COUNT_UP,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::END_DATE,
                            SpecRule::MANDATORY_ONEOF => '[\'end-date\', \'timeleft-ms\', \'timestamp-ms\', \'timestamp-seconds\']',
                            SpecRule::VALUE_REGEX => '\d{4}-[01]\d-[0-3]\dT[0-2]\d:[0-5]\d(:[0-5]\d(\.\d+)?)?(Z|[+-][0-1][0-9]:[0-5][0-9])',
                        ],
                        [
                            SpecRule::NAME => Attribute::LOCALE,
                            SpecRule::VALUE_CASEI => [
                                'de',
                                'en',
                                'es',
                                'fr',
                                'id',
                                'it',
                                'ja',
                                'ko',
                                'nl',
                                'pt',
                                'ru',
                                'th',
                                'tr',
                                'vi',
                                'zh-cn',
                                'zh-tw',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::OFFSET_SECONDS,
                            SpecRule::VALUE_REGEX => '-?\d+',
                        ],
                        [
                            SpecRule::NAME => Attribute::TEMPLATE,
                            SpecRule::VALUE_ONEOF_SET => 'TEMPLATE_IDS',
                        ],
                        [
                            SpecRule::NAME => Attribute::TIMELEFT_MS,
                            SpecRule::MANDATORY_ONEOF => '[\'end-date\', \'timeleft-ms\', \'timestamp-ms\', \'timestamp-seconds\']',
                            SpecRule::VALUE_REGEX => '\d+',
                        ],
                        [
                            SpecRule::NAME => Attribute::TIMESTAMP_MS,
                            SpecRule::MANDATORY_ONEOF => '[\'end-date\', \'timeleft-ms\', \'timestamp-ms\', \'timestamp-seconds\']',
                            SpecRule::VALUE_REGEX => '\d{13}',
                        ],
                        [
                            SpecRule::NAME => Attribute::TIMESTAMP_SECONDS,
                            SpecRule::MANDATORY_ONEOF => '[\'end-date\', \'timeleft-ms\', \'timestamp-ms\', \'timestamp-seconds\']',
                            SpecRule::VALUE_REGEX => '\d{10}',
                        ],
                        [
                            SpecRule::NAME => Attribute::WHEN_ENDED,
                            SpecRule::VALUE_CASEI => [
                                'continue',
                                'stop',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-date-countdown',
                    ],
                ]
            ),
            Extension::DATE_DISPLAY => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::DATE_DISPLAY,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DATETIME,
                            SpecRule::MANDATORY_ONEOF => '[\'datetime\', \'timestamp-ms\', \'timestamp-seconds\']',
                            SpecRule::VALUE_REGEX => 'now|(\d{4}-[01]\d-[0-3]\d(T[0-2]\d:[0-5]\d(:[0-6]\d(\.\d\d?\d?)?)?(Z|[+-][0-1]\d:[0-5]\d)?)?)',
                        ],
                        [
                            SpecRule::NAME => Attribute::DISPLAY_IN,
                            SpecRule::VALUE_CASEI => [
                                'utc',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::OFFSET_SECONDS,
                            SpecRule::VALUE_REGEX => '-?\d+',
                        ],
                        [
                            SpecRule::NAME => Attribute::LOCALE,
                        ],
                        [
                            SpecRule::NAME => Attribute::TEMPLATE,
                            SpecRule::VALUE_ONEOF_SET => 'TEMPLATE_IDS',
                        ],
                        [
                            SpecRule::NAME => Attribute::TIMESTAMP_MS,
                            SpecRule::MANDATORY_ONEOF => '[\'datetime\', \'timestamp-ms\', \'timestamp-seconds\']',
                            SpecRule::VALUE_REGEX => '\d+',
                        ],
                        [
                            SpecRule::NAME => Attribute::TIMESTAMP_SECONDS,
                            SpecRule::MANDATORY_ONEOF => '[\'datetime\', \'timestamp-ms\', \'timestamp-seconds\']',
                            SpecRule::VALUE_REGEX => '\d+',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-date-display',
                    ],
                ]
            ),
            'amp-date-picker > template [date-template]' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::TEMPLATE,
                    SpecRule::SPEC_NAME => 'amp-date-picker > template [date-template]',
                    SpecRule::MANDATORY_PARENT => Extension::DATE_PICKER,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DATE_TEMPLATE,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                '',
                            ],
                            SpecRule::DISPATCH_KEY => 'NAME_DISPATCH',
                        ],
                        [
                            SpecRule::NAME => Attribute::DEFAULT_,
                        ],
                        [
                            SpecRule::NAME => Attribute::DATES,
                        ],
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                'amp-mustache',
                            ],
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-mustache',
                    ],
                ]
            ),
            'amp-date-picker > template [info-template]' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::TEMPLATE,
                    SpecRule::SPEC_NAME => 'amp-date-picker > template [info-template]',
                    SpecRule::MANDATORY_PARENT => Extension::DATE_PICKER,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::INFO_TEMPLATE,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_DISPATCH',
                        ],
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                'amp-mustache',
                            ],
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-mustache',
                    ],
                ]
            ),
            'amp-date-picker[type=range][mode=overlay]' => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::DATE_PICKER,
                    SpecRule::SPEC_NAME => 'amp-date-picker[type=range][mode=overlay]',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::MODE,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'overlay',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_CASEI => [
                                'range',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'amp-date-picker-common-attributes',
                        'amp-date-picker-overlay-mode-attributes',
                        'amp-date-picker-range-type-attributes',
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::CONTAINER,
                            Layout::NODISPLAY,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-date-picker',
                    ],
                ]
            ),
            'amp-date-picker[type=range][mode=static]' => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::DATE_PICKER,
                    SpecRule::SPEC_NAME => 'amp-date-picker[type=range][mode=static]',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::MODE,
                            SpecRule::VALUE_CASEI => [
                                'static',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_CASEI => [
                                'range',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'amp-date-picker-common-attributes',
                        'amp-date-picker-range-type-attributes',
                        'amp-date-picker-static-mode-attributes',
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::INTRINSIC,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-date-picker',
                    ],
                ]
            ),
            'amp-date-picker[type=single][mode=overlay]' => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::DATE_PICKER,
                    SpecRule::SPEC_NAME => 'amp-date-picker[type=single][mode=overlay]',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::MODE,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'overlay',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::VALUE_CASEI => [
                                'single',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'amp-date-picker-common-attributes',
                        'amp-date-picker-overlay-mode-attributes',
                        'amp-date-picker-single-type-attributes',
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::CONTAINER,
                            Layout::NODISPLAY,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-date-picker',
                    ],
                ]
            ),
            'amp-date-picker[type=single][mode=static]' => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::DATE_PICKER,
                    SpecRule::SPEC_NAME => 'amp-date-picker[type=single][mode=static]',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::MODE,
                            SpecRule::VALUE_CASEI => [
                                'static',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::VALUE_CASEI => [
                                'single',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'amp-date-picker-common-attributes',
                        'amp-date-picker-single-type-attributes',
                        'amp-date-picker-static-mode-attributes',
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::INTRINSIC,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-date-picker',
                    ],
                ]
            ),
            Extension::DELIGHT_PLAYER => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::DELIGHT_PLAYER,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DATA_CONTENT_ID,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::DOCK,
                            SpecRule::REQUIRES_EXTENSION => [
                                'amp-video-docking',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-delight-player',
                    ],
                ]
            ),
            Extension::EMBED => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::EMBED,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ALT,
                        ],
                        [
                            SpecRule::NAME => Attribute::JSON,
                        ],
                        [
                            SpecRule::NAME => Attribute::RTC_CONFIG,
                        ],
                        [
                            SpecRule::NAME => Attribute::SRC,
                            SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'https',
                                ],
                                SpecRule::ALLOW_RELATIVE => true,
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-ad/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::FLUID,
                            Layout::INTRINSIC,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::DISALLOWED_ANCESTOR => [
                        'AMP-APP-BANNER',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::ALSO_REQUIRES_TAG_WARNING => [
                        'amp-ad extension script',
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-ad',
                    ],
                ]
            ),
            Extension::EMBEDLY_CARD => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::EMBEDLY_CARD,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DATA_URL,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'https',
                                ],
                                SpecRule::ALLOW_RELATIVE => false,
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-embedly-card/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-embedly-card',
                    ],
                ]
            ),
            Extension::EMBEDLY_KEY => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::EMBEDLY_KEY,
                    SpecRule::UNIQUE => true,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::VALUE,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::NODISPLAY,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-embedly-card',
                    ],
                ]
            ),
            'amp-embed with data-multi-size attribute' => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::EMBED,
                    SpecRule::SPEC_NAME => 'amp-embed with data-multi-size attribute',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ALT,
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_MULTI_SIZE,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                '',
                            ],
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                        ],
                        [
                            SpecRule::NAME => Attribute::JSON,
                        ],
                        [
                            SpecRule::NAME => Attribute::RTC_CONFIG,
                        ],
                        [
                            SpecRule::NAME => Attribute::SRC,
                            SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'https',
                                ],
                                SpecRule::ALLOW_RELATIVE => true,
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-ad/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::FLUID,
                            Layout::INTRINSIC,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::DISALLOWED_ANCESTOR => [
                        'AMP-APP-BANNER',
                        'AMP-CAROUSEL',
                        'AMP-FX-FLYING-CARPET',
                        'AMP-LIGHTBOX',
                        'AMP-STICKY-AD',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::ALSO_REQUIRES_TAG_WARNING => [
                        'amp-ad extension script',
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-ad',
                    ],
                ]
            ),
            Extension::EXPERIMENT => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::EXPERIMENT,
                    SpecRule::UNIQUE => true,
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-experiment/',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-experiment',
                    ],
                ]
            ),
            'amp-experiment extension .json script' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::SPEC_NAME => 'amp-experiment extension .json script',
                    SpecRule::MANDATORY_PARENT => Extension::EXPERIMENT,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_PARENT_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'application/json',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'nonce-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-experiment/',
                    SpecRule::CDATA => [
                        SpecRule::MAX_BYTES => 15000,
                        SpecRule::MAX_BYTES_SPEC_URL => 'https://amp.dev/documentation/components/amp-experiment/#configuration',
                        SpecRule::DISALLOWED_CDATA_REGEX => [
                            [
                                'regex' => '<!--',
                                'errorMessage' => 'html comments',
                            ],
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            'amp-experiment story extension .json script' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::SPEC_NAME => 'amp-experiment story extension .json script',
                    SpecRule::MANDATORY_PARENT => Extension::EXPERIMENT,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_PARENT_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'application/json',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'nonce-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-experiment/',
                    SpecRule::CDATA => [
                        SpecRule::MAX_BYTES => 15000,
                        SpecRule::MAX_BYTES_SPEC_URL => 'https://amp.dev/documentation/components/amp-experiment/#configuration',
                        SpecRule::DISALLOWED_CDATA_REGEX => [
                            [
                                'regex' => '<!--',
                                'errorMessage' => 'html comments',
                            ],
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            Extension::FACEBOOK => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::FACEBOOK,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DATA_HREF,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-facebook',
                    ],
                ]
            ),
            Extension::FACEBOOK_COMMENTS => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::FACEBOOK_COMMENTS,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DATA_HREF,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-facebook-comments',
                    ],
                ]
            ),
            Extension::FACEBOOK_LIKE => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::FACEBOOK_LIKE,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DATA_HREF,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'http',
                                    'https',
                                ],
                                SpecRule::ALLOW_RELATIVE => false,
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-facebook-like',
                    ],
                ]
            ),
            Extension::FACEBOOK_PAGE => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::FACEBOOK_PAGE,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DATA_HREF,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'http',
                                    'https',
                                ],
                                SpecRule::ALLOW_RELATIVE => false,
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-facebook-page',
                    ],
                ]
            ),
            Extension::FIT_TEXT => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::FIT_TEXT,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::MAX_FONT_SIZE,
                        ],
                        [
                            SpecRule::NAME => Attribute::MIN_FONT_SIZE,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::INTRINSIC,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-fit-text',
                    ],
                ]
            ),
            Extension::FONT => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::FONT,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::FONT_FAMILY,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::FONT_STYLE,
                        ],
                        [
                            SpecRule::NAME => Attribute::FONT_VARIANT,
                        ],
                        [
                            SpecRule::NAME => Attribute::FONT_WEIGHT,
                        ],
                        [
                            SpecRule::NAME => Attribute::ON_ERROR_ADD_CLASS,
                        ],
                        [
                            SpecRule::NAME => Attribute::ON_ERROR_REMOVE_CLASS,
                        ],
                        [
                            SpecRule::NAME => Attribute::ON_LOAD_ADD_CLASS,
                        ],
                        [
                            SpecRule::NAME => Attribute::ON_LOAD_REMOVE_CLASS,
                        ],
                        [
                            SpecRule::NAME => Attribute::TIMEOUT,
                            SpecRule::VALUE_REGEX => '[0-9]+',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::NODISPLAY,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-font',
                    ],
                ]
            ),
            Extension::FX_FLYING_CARPET => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::FX_FLYING_CARPET,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::HEIGHT,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-fx-flying-carpet',
                    ],
                ]
            ),
            Extension::GEO => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::GEO,
                    SpecRule::UNIQUE => true,
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::NODISPLAY,
                        ],
                    ],
                    SpecRule::CHILD_TAGS => [
                        'firstChildTagNameOneof' => [
                            'SCRIPT',
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-geo',
                    ],
                ]
            ),
            'amp-geo extension .json script' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::SPEC_NAME => 'amp-geo extension .json script',
                    SpecRule::MANDATORY_PARENT => Extension::GEO,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_PARENT_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'application/json',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'nonce-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-geo/',
                    SpecRule::CDATA => [
                        SpecRule::DISALLOWED_CDATA_REGEX => [
                            [
                                'regex' => '<!--',
                                'errorMessage' => 'html comments',
                            ],
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-geo',
                    ],
                ]
            ),
            Extension::GFYCAT => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::GFYCAT,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DATA_GFYID,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::NOAUTOPLAY,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-gfycat/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-gfycat',
                    ],
                ]
            ),
            Extension::GIST => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::GIST,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DATA_GISTID,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-gist/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FIXED_HEIGHT,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-gist',
                    ],
                ]
            ),
            Extension::GOOGLE_DOCUMENT_EMBED => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::GOOGLE_DOCUMENT_EMBED,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::SRC,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'https',
                                ],
                                SpecRule::ALLOW_RELATIVE => false,
                            ],
                        ],
                        [
                            SpecRule::NAME => '[SRC]',
                        ],
                        [
                            SpecRule::NAME => '[TITLE]',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-google-document-embed/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::INTRINSIC,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-google-document-embed',
                    ],
                ]
            ),
            Extension::GWD_ANIMATION => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::GWD_ANIMATION,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::TIMELINE_EVENT_PREFIX,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::NODISPLAY,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP4ADS,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-gwd-animation',
                    ],
                ]
            ),
            Extension::HULU => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::HULU,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DATA_EID,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-hulu/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-hulu',
                    ],
                ]
            ),
            Extension::IFRAME => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::IFRAME,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ALLOW,
                        ],
                        [
                            SpecRule::NAME => Attribute::ALLOWFULLSCREEN,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::ALLOWPAYMENTREQUEST,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::ALLOWTRANSPARENCY,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::FRAMEBORDER,
                            SpecRule::VALUE => [
                                '0',
                                '1',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::REFERRERPOLICY,
                        ],
                        [
                            SpecRule::NAME => Attribute::RESIZABLE,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::SANDBOX,
                        ],
                        [
                            SpecRule::NAME => Attribute::SCROLLING,
                            SpecRule::VALUE => [
                                'auto',
                                'no',
                                'yes',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::TABINDEX,
                            SpecRule::VALUE_REGEX => '-?\d+',
                        ],
                        [
                            SpecRule::NAME => Attribute::SRC,
                            SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                            SpecRule::MANDATORY_ONEOF => '[\'src\', \'srcdoc\']',
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'data',
                                    'https',
                                ],
                                SpecRule::ALLOW_RELATIVE => true,
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::SRCDOC,
                            SpecRule::MANDATORY_ONEOF => '[\'src\', \'srcdoc\']',
                        ],
                        [
                            SpecRule::NAME => '[SRC]',
                            SpecRule::TRIGGER => [
                                'alsoRequiresAttr' => [
                                    'src',
                                ],
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::INTRINSIC,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-iframe',
                    ],
                ]
            ),
            Extension::IMA_VIDEO => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::IMA_VIDEO,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::AUTOPLAY,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_SRC,
                            SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'https',
                                ],
                                SpecRule::ALLOW_RELATIVE => true,
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_TAG,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'https',
                                ],
                                SpecRule::ALLOW_RELATIVE => true,
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::DOCK,
                            SpecRule::REQUIRES_EXTENSION => [
                                'amp-video-docking',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::ROTATE_TO_FULLSCREEN,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-ima-video/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-ima-video',
                    ],
                ]
            ),
            'amp-ima-video > script[type=application/json]' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::SPEC_NAME => 'amp-ima-video > script[type=application/json]',
                    SpecRule::MANDATORY_PARENT => Extension::IMA_VIDEO,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_PARENT_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'application/json',
                            ],
                        ],
                    ],
                    SpecRule::CDATA => [
                        SpecRule::DISALLOWED_CDATA_REGEX => [
                            [
                                'regex' => '<!--',
                                'errorMessage' => 'html comments',
                            ],
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::DESCRIPTIVE_NAME => 'script type=application/ld+json',
                ]
            ),
            'amp-ima-video > source' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SOURCE,
                    SpecRule::SPEC_NAME => 'amp-ima-video > source',
                    SpecRule::MANDATORY_PARENT => Extension::IMA_VIDEO,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::MEDIA,
                        ],
                        [
                            SpecRule::NAME => Attribute::SRC,
                            SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'https',
                                ],
                                SpecRule::ALLOW_RELATIVE => true,
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::TYPE,
                        ],
                        [
                            SpecRule::NAME => '[SRC]',
                        ],
                        [
                            SpecRule::NAME => '[TYPE]',
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-ima-video',
                    ],
                ]
            ),
            'amp-ima-video > track' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::TRACK,
                    SpecRule::SPEC_NAME => 'amp-ima-video > track',
                    SpecRule::MANDATORY_PARENT => Extension::IMA_VIDEO,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => '[LABEL]',
                        ],
                        [
                            SpecRule::NAME => '[SRC]',
                        ],
                        [
                            SpecRule::NAME => '[SRCLANG]',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'track-attrs-no-subtitles',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            'amp-ima-video > track[kind=subtitles]' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::TRACK,
                    SpecRule::SPEC_NAME => 'amp-ima-video > track[kind=subtitles]',
                    SpecRule::MANDATORY_PARENT => Extension::IMA_VIDEO,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => '[LABEL]',
                        ],
                        [
                            SpecRule::NAME => '[SRC]',
                        ],
                        [
                            SpecRule::NAME => '[SRCLANG]',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'track-attrs-subtitles',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-ima-video/',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            Extension::IMAGE_LIGHTBOX => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::IMAGE_LIGHTBOX,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::CONTROLS,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::NODISPLAY,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4EMAIL,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-image-lightbox',
                    ],
                ]
            ),
            Extension::IMAGE_SLIDER => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::IMAGE_SLIDER,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DISABLE_HINT_REAPPEAR,
                        ],
                        [
                            SpecRule::NAME => Attribute::INITIAL_SLIDER_POSITION,
                            SpecRule::VALUE_REGEX => '0(\.[0-9]+)?|1(\.0+)?',
                        ],
                        [
                            SpecRule::NAME => Attribute::STEP_SIZE,
                            SpecRule::VALUE_REGEX => '0(\.[0-9]+)?|1(\.0+)?',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-image-slider/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FIXED,
                            Layout::INTRINSIC,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::CHILD_TAGS => [
                        'childTagNameOneof' => [
                            'AMP-IMG',
                            'DIV',
                        ],
                        'mandatoryMinNumChildTags' => 2,
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-image-slider',
                    ],
                    SpecRule::DISABLED_BY => [
                        'transformed',
                    ],
                ]
            ),
            'amp-image-slider (transformed)' => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::IMAGE_SLIDER,
                    SpecRule::SPEC_NAME => 'amp-image-slider (transformed)',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DISABLE_HINT_REAPPEAR,
                        ],
                        [
                            SpecRule::NAME => Attribute::INITIAL_SLIDER_POSITION,
                            SpecRule::VALUE_REGEX => '0(\.[0-9]+)?|1(\.0+)?',
                        ],
                        [
                            SpecRule::NAME => Attribute::STEP_SIZE,
                            SpecRule::VALUE_REGEX => '0(\.[0-9]+)?|1(\.0+)?',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-image-slider/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FIXED,
                            Layout::INTRINSIC,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::CHILD_TAGS => [
                        'childTagNameOneof' => [
                            'AMP-IMG',
                            'DIV',
                            'I-AMPHTML-SIZER',
                        ],
                        'mandatoryMinNumChildTags' => 2,
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-image-slider',
                    ],
                    SpecRule::ENABLED_BY => [
                        'transformed',
                    ],
                ]
            ),
            'AMP-IMAGE-SLIDER > DIV [first]' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::DIV,
                    SpecRule::SPEC_NAME => 'AMP-IMAGE-SLIDER > DIV [first]',
                    SpecRule::MANDATORY_PARENT => Extension::IMAGE_SLIDER,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::FIRST,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-image-slider/',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            'AMP-IMAGE-SLIDER > DIV [second]' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::DIV,
                    SpecRule::SPEC_NAME => 'AMP-IMAGE-SLIDER > DIV [second]',
                    SpecRule::MANDATORY_PARENT => Extension::IMAGE_SLIDER,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::SECOND,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-image-slider/',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            Extension::IMG => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::IMG,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ALT,
                        ],
                        [
                            SpecRule::NAME => Attribute::ATTRIBUTION,
                        ],
                        [
                            SpecRule::NAME => Attribute::CROSSORIGIN,
                        ],
                        [
                            SpecRule::NAME => Attribute::OBJECT_FIT,
                        ],
                        [
                            SpecRule::NAME => Attribute::OBJECT_POSITION,
                        ],
                        [
                            SpecRule::NAME => Attribute::PLACEHOLDER,
                        ],
                        [
                            SpecRule::NAME => Attribute::REFERRERPOLICY,
                        ],
                        [
                            SpecRule::NAME => '[ALT]',
                        ],
                        [
                            SpecRule::NAME => '[ATTRIBUTION]',
                        ],
                        [
                            SpecRule::NAME => '[SRC]',
                        ],
                        [
                            SpecRule::NAME => '[SRCSET]',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                        'lightboxable-elements',
                        'mandatory-src-or-srcset',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-img/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::INTRINSIC,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            'AMP-IMG (AMP4EMAIL)' => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::IMG,
                    SpecRule::SPEC_NAME => 'AMP-IMG (AMP4EMAIL)',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ALT,
                        ],
                        [
                            SpecRule::NAME => Attribute::ATTRIBUTION,
                        ],
                        [
                            SpecRule::NAME => Attribute::PLACEHOLDER,
                        ],
                        [
                            SpecRule::NAME => '[ALT]',
                        ],
                        [
                            SpecRule::NAME => '[ATTRIBUTION]',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                        'mandatory-src-amp4email',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-img/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            'amp-img (transformed)' => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::IMG,
                    SpecRule::SPEC_NAME => 'amp-img (transformed)',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::I_AMPHTML_SSR,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_DISPATCH',
                        ],
                        [
                            SpecRule::NAME => Attribute::ALT,
                        ],
                        [
                            SpecRule::NAME => Attribute::ATTRIBUTION,
                        ],
                        [
                            SpecRule::NAME => Attribute::OBJECT_FIT,
                        ],
                        [
                            SpecRule::NAME => Attribute::OBJECT_POSITION,
                        ],
                        [
                            SpecRule::NAME => Attribute::PLACEHOLDER,
                        ],
                        [
                            SpecRule::NAME => Attribute::REFERRERPOLICY,
                        ],
                        [
                            SpecRule::NAME => '[ALT]',
                        ],
                        [
                            SpecRule::NAME => '[ATTRIBUTION]',
                        ],
                        [
                            SpecRule::NAME => '[SRC]',
                        ],
                        [
                            SpecRule::NAME => '[SRCSET]',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                        'lightboxable-elements',
                        'mandatory-src-or-srcset',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-img/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::INTRINSIC,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::ENABLED_BY => [
                        'transformed',
                    ],
                ]
            ),
            'amp-img > img (transformed)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::IMG,
                    SpecRule::SPEC_NAME => 'amp-img > img (transformed)',
                    SpecRule::MANDATORY_PARENT => 'amp-img (transformed)',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ALT,
                        ],
                        [
                            SpecRule::NAME => Attribute::ATTRIBUTION,
                        ],
                        [
                            SpecRule::NAME => Attribute::OBJECT_FIT,
                        ],
                        [
                            SpecRule::NAME => Attribute::OBJECT_POSITION,
                        ],
                        [
                            SpecRule::NAME => Attribute::REFERRERPOLICY,
                        ],
                        [
                            SpecRule::NAME => Attribute::SIZES,
                        ],
                        [
                            SpecRule::NAME => Attribute::TITLE,
                        ],
                        [
                            SpecRule::NAME => Attribute::CLASS,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_REGEX => 'i-amphtml-fill-content\s+i-amphtml-replaced-content|i-amphtml-replaced-content\s+i-amphtml-fill-content',
                        ],
                        [
                            SpecRule::NAME => Attribute::DECODING,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                'async',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::LOADING,
                            SpecRule::VALUE => [
                                'lazy',
                                'eager',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'mandatory-src-or-srcset',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::ENABLED_BY => [
                        'transformed',
                    ],
                ]
            ),
            'amp-img > img[placeholder] (transformed)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::IMG,
                    SpecRule::SPEC_NAME => 'amp-img > img[placeholder] (transformed)',
                    SpecRule::MANDATORY_PARENT => 'amp-img (transformed)',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ALT,
                        ],
                        [
                            SpecRule::NAME => Attribute::ATTRIBUTION,
                        ],
                        [
                            SpecRule::NAME => Attribute::CLASS,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                'i-amphtml-blurry-placeholder',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::OBJECT_FIT,
                        ],
                        [
                            SpecRule::NAME => Attribute::OBJECT_POSITION,
                        ],
                        [
                            SpecRule::NAME => Attribute::PLACEHOLDER,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                '',
                            ],
                            SpecRule::DISPATCH_KEY => 'NAME_DISPATCH',
                        ],
                        [
                            SpecRule::NAME => Attribute::REFERRERPOLICY,
                        ],
                        [
                            SpecRule::NAME => Attribute::SIZES,
                        ],
                        [
                            SpecRule::NAME => Attribute::TITLE,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'mandatory-src-or-srcset',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::ENABLED_BY => [
                        'transformed',
                    ],
                ]
            ),
            Extension::IMGUR => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::IMGUR,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DATA_IMGUR_ID,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-imgur',
                    ],
                ]
            ),
            Extension::INLINE_GALLERY => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::INLINE_GALLERY,
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-inline-gallery/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::CONTAINER,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-inline-gallery',
                    ],
                ]
            ),
            'amp-inline-gallery-pagination' => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::INLINE_GALLERY_PAGINATION,
                    SpecRule::SPEC_NAME => 'amp-inline-gallery-pagination',
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-inline-gallery/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::INTRINSIC,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::MANDATORY_ANCESTOR => Extension::INLINE_GALLERY,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-inline-gallery',
                    ],
                ]
            ),
            'amp-inline-gallery-pagination [inset]' => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::INLINE_GALLERY_PAGINATION,
                    SpecRule::SPEC_NAME => 'amp-inline-gallery-pagination [inset]',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::INSET,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-inline-gallery/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::NODISPLAY,
                        ],
                    ],
                    SpecRule::MANDATORY_ANCESTOR => Extension::INLINE_GALLERY,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-inline-gallery',
                    ],
                ]
            ),
            Extension::INLINE_GALLERY_THUMBNAILS => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::INLINE_GALLERY_THUMBNAILS,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ASPECT_RATIO_HEIGHT,
                            SpecRule::DISALLOWED_VALUE_REGEX => '^0+(\.0+)?$',
                            SpecRule::VALUE_REGEX => '\d+(\.\d+)?',
                            SpecRule::TRIGGER => [
                                'alsoRequiresAttr' => [
                                    'aspect-ratio-width',
                                ],
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::ASPECT_RATIO_WIDTH,
                            SpecRule::DISALLOWED_VALUE_REGEX => '^0+(\.0+)?$',
                            SpecRule::VALUE_REGEX => '\d+(\.\d+)?',
                            SpecRule::TRIGGER => [
                                'alsoRequiresAttr' => [
                                    'aspect-ratio-height',
                                ],
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::LOOP,
                            SpecRule::VALUE => [
                                'true',
                                'false',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-inline-gallery/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::INTRINSIC,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::MANDATORY_ANCESTOR => Extension::INLINE_GALLERY,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-inline-gallery',
                    ],
                ]
            ),
            Extension::INSTAGRAM => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::INSTAGRAM,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ALT,
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_SHORTCODE,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-instagram',
                    ],
                ]
            ),
            Extension::INSTALL_SERVICEWORKER => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::INSTALL_SERVICEWORKER,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DATA_IFRAME_SRC,
                            SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'https',
                                ],
                                SpecRule::ALLOW_RELATIVE => true,
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::SRC,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'https',
                                ],
                                SpecRule::ALLOW_RELATIVE => true,
                            ],
                        ],
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::NODISPLAY,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-install-serviceworker',
                    ],
                ]
            ),
            Extension::IZLESENE => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::IZLESENE,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DATA_VIDEOID,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_REGEX => '[0-9]+',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-izlesene',
                    ],
                ]
            ),
            Extension::JWPLAYER => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::JWPLAYER,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::AUTOPLAY,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_MEDIA_ID,
                            SpecRule::VALUE_REGEX_CASEI => '[0-9a-z]{8}|outstream',
                            SpecRule::MANDATORY_ONEOF => '[\'data-media-id\', \'data-playlist-id\']',
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_PLAYER_ID,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_REGEX_CASEI => '[0-9a-z]{8}',
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_PLAYLIST_ID,
                            SpecRule::VALUE_REGEX_CASEI => '[0-9a-z]{8}',
                            SpecRule::MANDATORY_ONEOF => '[\'data-media-id\', \'data-playlist-id\']',
                        ],
                        [
                            SpecRule::NAME => Attribute::DOCK,
                            SpecRule::REQUIRES_EXTENSION => [
                                'amp-video-docking',
                            ],
                        ],
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-jwplayer/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-jwplayer',
                    ],
                ]
            ),
            Extension::KALTURA_PLAYER => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::KALTURA_PLAYER,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DATA_PARTNER,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-kaltura-player',
                    ],
                ]
            ),
            Extension::LAYOUT => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::LAYOUT,
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-layout/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::INTRINSIC,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                            Layout::CONTAINER,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Extension::LIGHTBOX => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::LIGHTBOX,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ANIMATE_IN,
                            SpecRule::VALUE_CASEI => [
                                'fade-in',
                                'fly-in-bottom',
                                'fly-in-top',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::CONTROLS,
                        ],
                        [
                            SpecRule::NAME => Attribute::FROM,
                        ],
                        [
                            SpecRule::NAME => Attribute::SCROLLABLE,
                            SpecRule::DISABLED_BY => [
                                'amp4email',
                            ],
                        ],
                        [
                            SpecRule::NAME => '[OPEN]',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::NODISPLAY,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4EMAIL,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-lightbox',
                    ],
                ]
            ),
            'amp-lightbox [AMP4ADS]' => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::LIGHTBOX,
                    SpecRule::SPEC_NAME => 'amp-lightbox [AMP4ADS]',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ANIMATE_IN,
                            SpecRule::VALUE_CASEI => [
                                'fade-in',
                                'fly-in-bottom',
                                'fly-in-top',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::CLOSE_BUTTON,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::CONTROLS,
                        ],
                        [
                            SpecRule::NAME => Attribute::FROM,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::NODISPLAY,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP4ADS,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-lightbox',
                    ],
                ]
            ),
            Extension::LINK_REWRITER => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::LINK_REWRITER,
                    SpecRule::UNIQUE => true,
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::NODISPLAY,
                        ],
                    ],
                    SpecRule::CHILD_TAGS => [
                        'mandatoryNumChildTags' => 1,
                        'firstChildTagNameOneof' => [
                            'SCRIPT',
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-link-rewriter',
                    ],
                ]
            ),
            'amp-link-rewriter extension .json script' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::SPEC_NAME => 'amp-link-rewriter extension .json script',
                    SpecRule::MANDATORY_PARENT => Extension::LINK_REWRITER,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_PARENT_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'application/json',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'nonce-attr',
                    ],
                    SpecRule::CDATA => [
                        SpecRule::DISALLOWED_CDATA_REGEX => [
                            [
                                'regex' => '<!--',
                                'errorMessage' => 'html comments',
                            ],
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-link-rewriter',
                    ],
                ]
            ),
            Extension::LIST_ => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::LIST_,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::AUTO_RESIZE,
                            SpecRule::VALUE => [
                                '',
                            ],
                            SpecRule::DEPRECATION => 'replacement-to-be-determined-at-a-later-date',
                            SpecRule::DEPRECATION_URL => 'https://github.com/ampproject/amphtml/issues/18849',
                        ],
                        [
                            SpecRule::NAME => Attribute::BINDING,
                            SpecRule::VALUE => [
                                'always',
                                'no',
                                'refresh',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::CREDENTIALS,
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_AMP_BIND_SRC,
                            SpecRule::MANDATORY_ANYOF => '[\'src\',\'[src]\',\'data-amp-bind-src\']',
                        ],
                        [
                            SpecRule::NAME => Attribute::DIFFABLE,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::ITEMS,
                        ],
                        [
                            SpecRule::NAME => Attribute::LOAD_MORE,
                            SpecRule::VALUE => [
                                'auto',
                                'manual',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::LOAD_MORE_BOOKMARK,
                            SpecRule::TRIGGER => [
                                'alsoRequiresAttr' => [
                                    'load-more',
                                ],
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::MAX_ITEMS,
                        ],
                        [
                            SpecRule::NAME => Attribute::RESET_ON_REFRESH,
                            SpecRule::VALUE => [
                                '',
                                'always',
                                'fetch',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::SINGLE_ITEM,
                        ],
                        [
                            SpecRule::NAME => Attribute::SRC,
                            SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'https',
                                    'amp-state',
                                    'amp-script',
                                ],
                                SpecRule::ALLOW_RELATIVE => true,
                            ],
                            SpecRule::MANDATORY_ANYOF => '[\'src\',\'[src]\',\'data-amp-bind-src\']',
                        ],
                        [
                            SpecRule::NAME => Attribute::TEMPLATE,
                            SpecRule::VALUE_ONEOF_SET => 'TEMPLATE_IDS',
                        ],
                        [
                            SpecRule::NAME => Attribute::XSSI_PREFIX,
                        ],
                        [
                            SpecRule::NAME => '[IS_LAYOUT_CONTAINER]',
                        ],
                        [
                            SpecRule::NAME => '[SRC]',
                            SpecRule::MANDATORY_ANYOF => '[\'src\',\'[src]\',\'data-amp-bind-src\']',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-list',
                    ],
                ]
            ),
            'AMP-LIST (AMP4EMAIL)' => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::LIST_,
                    SpecRule::SPEC_NAME => 'AMP-LIST (AMP4EMAIL)',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::BINDING,
                            SpecRule::VALUE => [
                                'always',
                                'no',
                                'refresh',
                                'refresh-evaluate',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::DIFFABLE,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::ITEMS,
                        ],
                        [
                            SpecRule::NAME => Attribute::MAX_ITEMS,
                        ],
                        [
                            SpecRule::NAME => Attribute::SINGLE_ITEM,
                        ],
                        [
                            SpecRule::NAME => Attribute::SRC,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin|{{|}}',
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'https',
                                ],
                                SpecRule::ALLOW_RELATIVE => false,
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::TEMPLATE,
                            SpecRule::VALUE_ONEOF_SET => 'TEMPLATE_IDS',
                        ],
                        [
                            SpecRule::NAME => Attribute::XSSI_PREFIX,
                        ],
                        [
                            SpecRule::NAME => '[IS_LAYOUT_CONTAINER]',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::CONTAINER,
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::DISALLOWED_ANCESTOR => [
                        'AMP-LIST',
                        'AMP-STATE',
                        'TEMPLATE',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP4EMAIL,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-list',
                    ],
                ]
            ),
            Extension::LIST_LOAD_MORE => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::LIST_LOAD_MORE,
                    SpecRule::MANDATORY_PARENT => Extension::LIST_,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::LOAD_MORE_BUTTON,
                            SpecRule::VALUE => [
                                '',
                            ],
                            SpecRule::MANDATORY_ONEOF => '[\'load-more-button\', \'load-more-failed\', \'load-more-end\', \'load-more-loading\']',
                        ],
                        [
                            SpecRule::NAME => Attribute::LOAD_MORE_FAILED,
                            SpecRule::VALUE => [
                                '',
                            ],
                            SpecRule::MANDATORY_ONEOF => '[\'load-more-button\', \'load-more-failed\', \'load-more-end\', \'load-more-loading\']',
                        ],
                        [
                            SpecRule::NAME => Attribute::LOAD_MORE_LOADING,
                            SpecRule::VALUE => [
                                '',
                            ],
                            SpecRule::MANDATORY_ONEOF => '[\'load-more-button\', \'load-more-failed\', \'load-more-end\', \'load-more-loading\']',
                        ],
                        [
                            SpecRule::NAME => Attribute::LOAD_MORE_END,
                            SpecRule::VALUE => [
                                '',
                            ],
                            SpecRule::MANDATORY_ONEOF => '[\'load-more-button\', \'load-more-failed\', \'load-more-end\', \'load-more-loading\']',
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-list',
                    ],
                ]
            ),
            'amp-list-load-more button[load-more-clickable]' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::BUTTON,
                    SpecRule::SPEC_NAME => 'amp-list-load-more button[load-more-clickable]',
                    SpecRule::MANDATORY_PARENT => Extension::LIST_LOAD_MORE,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DISABLED,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::LOAD_MORE_CLICKABLE,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                '',
                            ],
                            SpecRule::DISPATCH_KEY => 'NAME_DISPATCH',
                        ],
                        [
                            SpecRule::NAME => Attribute::ROLE,
                            SpecRule::IMPLICIT => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::TABINDEX,
                            SpecRule::IMPLICIT => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::TYPE,
                        ],
                        [
                            SpecRule::NAME => Attribute::VALUE,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'name-attr',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-list',
                    ],
                ]
            ),
            'AMP-LIST DIV [fetch-error]' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::DIV,
                    SpecRule::SPEC_NAME => 'AMP-LIST DIV [fetch-error]',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ALIGN,
                        ],
                        [
                            SpecRule::NAME => Attribute::FETCH_ERROR,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::MANDATORY_ANCESTOR => Extension::LIST_,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Extension::LIVE_LIST => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::LIVE_LIST,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DATA_MAX_ITEMS_PER_PAGE,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_REGEX => '\d+',
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_POLL_INTERVAL,
                            SpecRule::VALUE_REGEX => '\d{5,}',
                        ],
                        [
                            SpecRule::NAME => Attribute::DISABLED,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::SORT,
                            SpecRule::VALUE => [
                                'ascending',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'mandatory-id-attr',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::CONTAINER,
                            Layout::FIXED_HEIGHT,
                        ],
                    ],
                    SpecRule::REFERENCE_POINTS => [
                        [
                            'tagSpecName' => 'AMP-LIVE-LIST [update]',
                            'mandatory' => true,
                            'unique' => true,
                        ],
                        [
                            'tagSpecName' => 'AMP-LIVE-LIST [items]',
                            'mandatory' => true,
                            'unique' => true,
                        ],
                        [
                            'tagSpecName' => 'AMP-LIVE-LIST [pagination]',
                            'unique' => true,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-live-list',
                    ],
                ]
            ),
            'AMP-LIVE-LIST [items]' => new Tag(
                [
                    SpecRule::TAG_NAME => '$REFERENCE_POINT',
                    SpecRule::SPEC_NAME => 'AMP-LIVE-LIST [items]',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ITEMS,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-live-list/#items',
                    SpecRule::REFERENCE_POINTS => [
                        [
                            'tagSpecName' => 'AMP-LIVE-LIST [items] item',
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::DESCRIPTIVE_NAME => 'amp-live-list [items]',
                ]
            ),
            'AMP-LIVE-LIST [items] item' => new Tag(
                [
                    SpecRule::TAG_NAME => '$REFERENCE_POINT',
                    SpecRule::SPEC_NAME => 'AMP-LIVE-LIST [items] item',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DATA_SORT_TIME,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_TOMBSTONE,
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_UPDATE_TIME,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'mandatory-id-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-live-list/#items',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::DESCRIPTIVE_NAME => 'amp-live-list [items] item',
                ]
            ),
            'AMP-LIVE-LIST [pagination]' => new Tag(
                [
                    SpecRule::TAG_NAME => '$REFERENCE_POINT',
                    SpecRule::SPEC_NAME => 'AMP-LIVE-LIST [pagination]',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::PAGINATION,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-live-list/#pagination',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::DESCRIPTIVE_NAME => 'amp-live-list [pagination]',
                ]
            ),
            'AMP-LIVE-LIST [update]' => new Tag(
                [
                    SpecRule::TAG_NAME => '$REFERENCE_POINT',
                    SpecRule::SPEC_NAME => 'AMP-LIVE-LIST [update]',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::UPDATE,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-live-list/#update',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::DESCRIPTIVE_NAME => 'amp-live-list [update]',
                ]
            ),
            Extension::MATHML => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::MATHML,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DATA_FORMULA,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::INLINE,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::CONTAINER,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-mathml',
                    ],
                ]
            ),
            Extension::MEGA_MENU => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::MEGA_MENU,
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-mega-menu/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FIXED_HEIGHT,
                        ],
                    ],
                    SpecRule::CHILD_TAGS => [
                        'mandatoryNumChildTags' => 1,
                        'childTagNameOneof' => [
                            'NAV',
                            'AMP-LIST',
                        ],
                    ],
                    SpecRule::REFERENCE_POINTS => [
                        [
                            'tagSpecName' => 'AMP-MEGA-MENU > AMP-LIST',
                        ],
                        [
                            'tagSpecName' => 'AMP-MEGA-MENU > NAV',
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-mega-menu',
                    ],
                    SpecRule::DESCENDANT_TAG_LIST => 'amp-mega-menu-allowed-descendants',
                ]
            ),
            'AMP-MEGA-MENU > AMP-LIST' => new Tag(
                [
                    SpecRule::TAG_NAME => '$REFERENCE_POINT',
                    SpecRule::SPEC_NAME => 'AMP-MEGA-MENU > AMP-LIST',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::SRC,
                            SpecRule::MANDATORY_ANYOF => '[\'src\',\'[src]\']',
                        ],
                        [
                            SpecRule::NAME => '[SRC]',
                            SpecRule::MANDATORY_ANYOF => '[\'src\',\'[src]\']',
                        ],
                    ],
                    SpecRule::CHILD_TAGS => [
                        'mandatoryNumChildTags' => 1,
                        'childTagNameOneof' => [
                            'TEMPLATE',
                        ],
                    ],
                    SpecRule::REFERENCE_POINTS => [
                        [
                            'tagSpecName' => 'AMP-MEGA-MENU > AMP-LIST > TEMPLATE',
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::DESCRIPTIVE_NAME => 'amp-mega-menu > amp-list',
                ]
            ),
            'AMP-MEGA-MENU > AMP-LIST > TEMPLATE' => new Tag(
                [
                    SpecRule::TAG_NAME => '$REFERENCE_POINT',
                    SpecRule::SPEC_NAME => 'AMP-MEGA-MENU > AMP-LIST > TEMPLATE',
                    SpecRule::MANDATORY_PARENT => Extension::LIST_,
                    SpecRule::CHILD_TAGS => [
                        'mandatoryNumChildTags' => 1,
                        'childTagNameOneof' => [
                            'NAV',
                        ],
                    ],
                    SpecRule::REFERENCE_POINTS => [
                        [
                            'tagSpecName' => 'AMP-MEGA-MENU > NAV',
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::DESCRIPTIVE_NAME => 'amp-mega-menu > amp-list > template',
                ]
            ),
            'AMP-MEGA-MENU > NAV' => new Tag(
                [
                    SpecRule::TAG_NAME => '$REFERENCE_POINT',
                    SpecRule::SPEC_NAME => 'AMP-MEGA-MENU > NAV',
                    SpecRule::CHILD_TAGS => [
                        'mandatoryNumChildTags' => 1,
                        'childTagNameOneof' => [
                            'OL',
                            'UL',
                        ],
                    ],
                    SpecRule::REFERENCE_POINTS => [
                        [
                            'tagSpecName' => 'AMP-MEGA-MENU NAV > UL/OL',
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::SIBLINGS_DISALLOWED => true,
                    SpecRule::DESCRIPTIVE_NAME => 'amp-mega-menu > nav',
                ]
            ),
            'AMP-MEGA-MENU item-content' => new Tag(
                [
                    SpecRule::TAG_NAME => '$REFERENCE_POINT',
                    SpecRule::SPEC_NAME => 'AMP-MEGA-MENU item-content',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ROLE,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                'dialog',
                            ],
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::DESCRIPTIVE_NAME => 'amp-mega-menu item-content',
                ]
            ),
            'AMP-MEGA-MENU item-heading' => new Tag(
                [
                    SpecRule::TAG_NAME => '$REFERENCE_POINT',
                    SpecRule::SPEC_NAME => 'AMP-MEGA-MENU item-heading',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ROLE,
                            SpecRule::VALUE => [
                                'button',
                            ],
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::DESCRIPTIVE_NAME => 'amp-mega-menu item-heading',
                ]
            ),
            'AMP-MEGA-MENU NAV > UL/OL' => new Tag(
                [
                    SpecRule::TAG_NAME => '$REFERENCE_POINT',
                    SpecRule::SPEC_NAME => 'AMP-MEGA-MENU NAV > UL/OL',
                    SpecRule::MANDATORY_PARENT => Element::NAV,
                    SpecRule::CHILD_TAGS => [
                        'childTagNameOneof' => [
                            'LI',
                        ],
                        'mandatoryMinNumChildTags' => 1,
                    ],
                    SpecRule::REFERENCE_POINTS => [
                        [
                            'tagSpecName' => 'AMP-MEGA-MENU NAV > UL/OL > LI',
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::DESCRIPTIVE_NAME => 'amp-mega-menu nav > ul/ol',
                ]
            ),
            'AMP-MEGA-MENU NAV > UL/OL > LI' => new Tag(
                [
                    SpecRule::TAG_NAME => '$REFERENCE_POINT',
                    SpecRule::SPEC_NAME => 'AMP-MEGA-MENU NAV > UL/OL > LI',
                    SpecRule::CHILD_TAGS => [
                        'childTagNameOneof' => [
                            'A',
                            'BUTTON',
                            'DIV',
                            'H1',
                            'H2',
                            'H3',
                            'H4',
                            'H5',
                            'H6',
                            'SPAN',
                        ],
                        'mandatoryMinNumChildTags' => 1,
                    ],
                    SpecRule::REFERENCE_POINTS => [
                        [
                            'tagSpecName' => 'AMP-MEGA-MENU item-content',
                            'unique' => true,
                        ],
                        [
                            'tagSpecName' => 'AMP-MEGA-MENU item-heading',
                            'mandatory' => true,
                            'unique' => true,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::DESCRIPTIVE_NAME => 'amp-mega-menu nav > ul/ol > li',
                ]
            ),
            'amp-megaphone [data-episode]' => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::MEGAPHONE,
                    SpecRule::SPEC_NAME => 'amp-megaphone [data-episode]',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DATA_EPISODE,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_DISPATCH',
                            SpecRule::VALUE_REGEX => '[A-Za-z0-9]+',
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_START,
                            SpecRule::VALUE_REGEX => '\d+(\.\d+)?',
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_TILE,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'amp-megaphone-common',
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-megaphone',
                    ],
                ]
            ),
            'amp-megaphone [data-playlist]' => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::MEGAPHONE,
                    SpecRule::SPEC_NAME => 'amp-megaphone [data-playlist]',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DATA_PLAYLIST,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_DISPATCH',
                            SpecRule::VALUE_REGEX => '[A-Za-z0-9]+',
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_EPISODES,
                            SpecRule::VALUE_REGEX => '[0-9]+',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'amp-megaphone-common',
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-megaphone',
                    ],
                ]
            ),
            Extension::MINUTE_MEDIA_PLAYER => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::MINUTE_MEDIA_PLAYER,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::AUTOPLAY,
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_CONTENT_ID,
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_CONTENT_TYPE,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                'curated',
                                'semantic',
                                'specific',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_MINIMUM_DATE_FACTOR,
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_SCANNED_ELEMENT,
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_SCANNED_ELEMENT_TYPE,
                            SpecRule::VALUE => [
                                'className',
                                'id',
                                'tag',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_SCOPED_KEYWORDS,
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_TAGS,
                        ],
                        [
                            SpecRule::NAME => Attribute::DOCK,
                            SpecRule::REQUIRES_EXTENSION => [
                                'amp-video-docking',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-minute-media-player/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-minute-media-player',
                    ],
                ]
            ),
            Extension::MOWPLAYER => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::MOWPLAYER,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::AUTOPLAY,
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_MEDIAID,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-mowplayer',
                    ],
                ]
            ),
            Extension::NESTED_MENU => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::NESTED_MENU,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::SIDE,
                            SpecRule::VALUE => [
                                'left',
                                'right',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-nested-menu/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                        ],
                    ],
                    SpecRule::MANDATORY_ANCESTOR => Extension::SIDEBAR,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-sidebar',
                    ],
                    SpecRule::DESCENDANT_TAG_LIST => 'amp-nested-menu-allowed-descendants',
                ]
            ),
            'AMP-NEXT-PAGE > SCRIPT[type=application/json]' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::SPEC_NAME => 'AMP-NEXT-PAGE > SCRIPT[type=application/json]',
                    SpecRule::MANDATORY_PARENT => Extension::NEXT_PAGE,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_PARENT_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'application/json',
                            ],
                        ],
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-next-page/',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-next-page',
                    ],
                ]
            ),
            'AMP-NEXT-PAGE > [footer]' => new Tag(
                [
                    SpecRule::TAG_NAME => '$REFERENCE_POINT',
                    SpecRule::SPEC_NAME => 'AMP-NEXT-PAGE > [footer]',
                    SpecRule::MANDATORY_PARENT => Extension::NEXT_PAGE,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::FOOTER,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            'AMP-NEXT-PAGE > [recommendation-box]' => new Tag(
                [
                    SpecRule::TAG_NAME => '$REFERENCE_POINT',
                    SpecRule::SPEC_NAME => 'AMP-NEXT-PAGE > [recommendation-box]',
                    SpecRule::MANDATORY_PARENT => Extension::NEXT_PAGE,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::RECOMMENDATION_BOX,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            'AMP-NEXT-PAGE > [separator]' => new Tag(
                [
                    SpecRule::TAG_NAME => '$REFERENCE_POINT',
                    SpecRule::SPEC_NAME => 'AMP-NEXT-PAGE > [separator]',
                    SpecRule::MANDATORY_PARENT => Extension::NEXT_PAGE,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::SEPARATOR,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            'amp-next-page with inline config' => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::NEXT_PAGE,
                    SpecRule::SPEC_NAME => 'amp-next-page with inline config',
                    SpecRule::UNIQUE => true,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DEEP_PARSING,
                        ],
                        [
                            SpecRule::NAME => Attribute::MAX_PAGES,
                        ],
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-next-page/',
                    SpecRule::REFERENCE_POINTS => [
                        [
                            'tagSpecName' => 'AMP-NEXT-PAGE > [separator]',
                            'unique' => true,
                        ],
                        [
                            'tagSpecName' => 'AMP-NEXT-PAGE > [recommendation-box]',
                            'unique' => true,
                        ],
                        [
                            'tagSpecName' => 'AMP-NEXT-PAGE > [footer]',
                            'unique' => true,
                        ],
                        [
                            'tagSpecName' => 'AMP-NEXT-PAGE > SCRIPT[type=application/json]',
                            'mandatory' => true,
                            'unique' => true,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-next-page',
                    ],
                ]
            ),
            'amp-next-page with src attribute' => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::NEXT_PAGE,
                    SpecRule::SPEC_NAME => 'amp-next-page with src attribute',
                    SpecRule::UNIQUE => true,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DEEP_PARSING,
                        ],
                        [
                            SpecRule::NAME => Attribute::MAX_PAGES,
                        ],
                        [
                            SpecRule::NAME => Attribute::SRC,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'https',
                                ],
                                SpecRule::ALLOW_RELATIVE => false,
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::XSSI_PREFIX,
                        ],
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-next-page/',
                    SpecRule::REFERENCE_POINTS => [
                        [
                            'tagSpecName' => 'AMP-NEXT-PAGE > [separator]',
                            'unique' => true,
                        ],
                        [
                            'tagSpecName' => 'AMP-NEXT-PAGE > [recommendation-box]',
                            'unique' => true,
                        ],
                        [
                            'tagSpecName' => 'AMP-NEXT-PAGE > [footer]',
                            'unique' => true,
                        ],
                        [
                            'tagSpecName' => 'AMP-NEXT-PAGE > SCRIPT[type=application/json]',
                            'unique' => true,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-next-page',
                    ],
                ]
            ),
            'amp-next-page [type=adsense]' => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::NEXT_PAGE,
                    SpecRule::SPEC_NAME => 'amp-next-page [type=adsense]',
                    SpecRule::UNIQUE => true,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DATA_CLIENT,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_SLOT,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::DEEP_PARSING,
                        ],
                        [
                            SpecRule::NAME => Attribute::MAX_PAGES,
                        ],
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                'adsense',
                            ],
                        ],
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-next-page/',
                    SpecRule::REFERENCE_POINTS => [
                        [
                            'tagSpecName' => 'AMP-NEXT-PAGE > [separator]',
                            'unique' => true,
                        ],
                        [
                            'tagSpecName' => 'AMP-NEXT-PAGE > [recommendation-box]',
                            'unique' => true,
                        ],
                        [
                            'tagSpecName' => 'AMP-NEXT-PAGE > [footer]',
                            'unique' => true,
                        ],
                        [
                            'tagSpecName' => 'AMP-NEXT-PAGE > SCRIPT[type=application/json]',
                            'unique' => true,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-next-page',
                    ],
                ]
            ),
            Extension::NEXXTV_PLAYER => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::NEXXTV_PLAYER,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DATA_CLIENT,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_MEDIAID,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_REGEX => '[^=/?:]+',
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_MODE,
                            SpecRule::VALUE => [
                                'api',
                                'static',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_ORIGIN,
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'https',
                                    'http',
                                ],
                                SpecRule::ALLOW_EMPTY => true,
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_STREAMTYPE,
                            SpecRule::VALUE => [
                                'album',
                                'audio',
                                'live',
                                'playlist',
                                'playlist-marked',
                                'video',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-nexxtv-player',
                    ],
                ]
            ),
            Extension::O2_PLAYER => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::O2_PLAYER,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DATA_BCID,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_PID,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-o2-player',
                    ],
                ]
            ),
            Extension::ONETAP_GOOGLE => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::ONETAP_GOOGLE,
                    SpecRule::UNIQUE => true,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DATA_SRC,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'https',
                                ],
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::NODISPLAY,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-onetap-google',
                    ],
                ]
            ),
            Extension::OOYALA_PLAYER => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::OOYALA_PLAYER,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DATA_EMBEDCODE,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_PCODE,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_PLAYERID,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FLEX_ITEM,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-ooyala-player',
                    ],
                ]
            ),
            Extension::ORIENTATION_OBSERVER => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::ORIENTATION_OBSERVER,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ALPHA_RANGE,
                            SpecRule::VALUE_REGEX => '(\d+)\s{1}(\d+)',
                        ],
                        [
                            SpecRule::NAME => Attribute::BETA_RANGE,
                            SpecRule::VALUE_REGEX => '(\d+)\s{1}(\d+)',
                        ],
                        [
                            SpecRule::NAME => Attribute::GAMMA_RANGE,
                            SpecRule::VALUE_REGEX => '(\d+)\s{1}(\d+)',
                        ],
                        [
                            SpecRule::NAME => Attribute::SMOOTHING,
                            SpecRule::VALUE_REGEX => '[0-9]+|',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::NODISPLAY,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-orientation-observer',
                    ],
                ]
            ),
            Extension::PAN_ZOOM => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::PAN_ZOOM,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DISABLE_DOUBLE_TAP,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::INITIAL_SCALE,
                            SpecRule::VALUE_REGEX => '[0-9]+(\.[0-9]+)?',
                        ],
                        [
                            SpecRule::NAME => Attribute::INITIAL_X,
                            SpecRule::VALUE_REGEX => '[0-9]+',
                        ],
                        [
                            SpecRule::NAME => Attribute::INITIAL_Y,
                            SpecRule::VALUE_REGEX => '[0-9]+',
                        ],
                        [
                            SpecRule::NAME => Attribute::MAX_SCALE,
                            SpecRule::VALUE_REGEX => '[0-9]+(\.[0-9]+)?',
                        ],
                        [
                            SpecRule::NAME => Attribute::RESET_ON_RESIZE,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-pan-zoom',
                    ],
                ]
            ),
            Extension::PINTEREST => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::PINTEREST,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ALT,
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_DO,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-pinterest/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-pinterest',
                    ],
                ]
            ),
            Extension::PIXEL => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::PIXEL,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ALLOW_SSR_IMG,
                        ],
                        [
                            SpecRule::NAME => Attribute::REFERRERPOLICY,
                            SpecRule::VALUE => [
                                'no-referrer',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::SRC,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'https',
                                ],
                                SpecRule::ALLOW_RELATIVE => true,
                                SpecRule::ALLOW_EMPTY => true,
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-pixel/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FIXED,
                            Layout::NODISPLAY,
                        ],
                        'definesDefaultWidth' => true,
                        'definesDefaultHeight' => true,
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            Extension::PLAYBUZZ => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::PLAYBUZZ,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DATA_COMMENTS,
                            SpecRule::VALUE_CASEI => [
                                'false',
                                'true',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_ITEM,
                            SpecRule::MANDATORY_ONEOF => '[\'data-item\', \'src\']',
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_ITEM_INFO,
                            SpecRule::VALUE_CASEI => [
                                'false',
                                'true',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_SHARE_BUTTONS,
                            SpecRule::VALUE_CASEI => [
                                'false',
                                'true',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::SRC,
                            SpecRule::MANDATORY_ONEOF => '[\'data-item\', \'src\']',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::RESPONSIVE,
                            Layout::FIXED_HEIGHT,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-playbuzz',
                    ],
                ]
            ),
            Extension::POSITION_OBSERVER => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::POSITION_OBSERVER,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::INTERSECTION_RATIOS,
                            SpecRule::VALUE_REGEX => '^([0]*?\.\d*$|1$|0$)|([0]*?\.\d*|1|0)\s{1}([0]*?\.\d*$|1$|0$)',
                        ],
                        [
                            SpecRule::NAME => Attribute::ONCE,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::TARGET,
                        ],
                        [
                            SpecRule::NAME => Attribute::VIEWPORT_MARGINS,
                            SpecRule::VALUE_REGEX => '^(\d+$|\d+px$|\d+vh$)|((\d+|\d+px|\d+vh)\s{1}(\d+$|\d+px$|\d+vh$))',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::NODISPLAY,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-position-observer',
                    ],
                ]
            ),
            Extension::POWR_PLAYER => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::POWR_PLAYER,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::AUTOPLAY,
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_ACCOUNT,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_REGEX => '[0-9a-zA-Z-]+',
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_PLAYER,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_REGEX => '[0-9a-zA-Z-]+',
                        ],
                        [
                            SpecRule::NAME => '[DATA_REFERRER]',
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_TERMS,
                            SpecRule::MANDATORY_ONEOF => '[\'data-video\', \'data-terms\']',
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_VIDEO,
                            SpecRule::MANDATORY_ONEOF => '[\'data-video\', \'data-terms\']',
                            SpecRule::VALUE_REGEX => '[0-9a-zA-Z-]+',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-powr-player/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-powr-player',
                    ],
                ]
            ),
            Extension::REACH_PLAYER => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::REACH_PLAYER,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DATA_EMBED_ID,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_REGEX => '[0-9a-z-]+',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-reach-player',
                    ],
                ]
            ),
            Extension::RECAPTCHA_INPUT => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::RECAPTCHA_INPUT,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DATA_SITEKEY,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_ACTION,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'mandatory-name-attr',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::NODISPLAY,
                        ],
                    ],
                    SpecRule::MANDATORY_ANCESTOR => Element::FORM,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-form',
                        'amp-recaptcha-input',
                    ],
                ]
            ),
            Extension::REDBULL_PLAYER => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::REDBULL_PLAYER,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DATA_PARAM_VIDEOID,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::RESPONSIVE,
                            Layout::FILL,
                            Layout::FLEX_ITEM,
                            Layout::FLUID,
                            Layout::INTRINSIC,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-redbull-player',
                    ],
                ]
            ),
            Extension::REDDIT => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::REDDIT,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DATA_EMBEDLIVE,
                            SpecRule::VALUE_CASEI => [
                                'false',
                                'true',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_EMBEDPARENT,
                            SpecRule::VALUE_CASEI => [
                                'false',
                                'true',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_EMBEDTYPE,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_CASEI => [
                                'comment',
                                'post',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_SRC,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-reddit',
                    ],
                ]
            ),
            Extension::RIDDLE_QUIZ => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::RIDDLE_QUIZ,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DATA_RIDDLE_ID,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_REGEX => '[0-9]+',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-riddle-quiz/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-riddle-quiz',
                    ],
                ]
            ),
            Extension::SCRIPT => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::SCRIPT,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DATA_AMPDEVMODE,
                            SpecRule::VALUE => [
                                'false',
                            ],
                            SpecRule::DISALLOWED_VALUE_REGEX => 'false',
                        ],
                        [
                            SpecRule::NAME => Attribute::MAX_AGE,
                            SpecRule::VALUE_REGEX => '[0-9]+',
                            SpecRule::TRIGGER => [
                                'alsoRequiresAttr' => [
                                    'script',
                                ],
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::NODOM,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::SANDBOX,
                        ],
                        [
                            SpecRule::NAME => Attribute::SCRIPT,
                            SpecRule::MANDATORY_ONEOF => '[\'script\', \'src\']',
                            SpecRule::VALUE_ONEOF_SET => 'AMP_SCRIPT_IDS',
                        ],
                        [
                            SpecRule::NAME => Attribute::SRC,
                            SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                            SpecRule::MANDATORY_ONEOF => '[\'script\', \'src\']',
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'https',
                                ],
                                SpecRule::ALLOW_RELATIVE => false,
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::CONTAINER,
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::INTRINSIC,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::DISALLOWED_ANCESTOR => [
                        'AMP-SCRIPT',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-script',
                    ],
                ]
            ),
            'amp-script extension local script' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::SPEC_NAME => 'amp-script extension local script',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ID,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISALLOWED_VALUE_REGEX => '(^|\s)(__amp_\S*|__count__|__defineGetter__|__defineSetter__|__lookupGetter__|__lookupSetter__|__noSuchMethod__|__parent__|__proto__|__AMP_\S*|\$p|\$proxy|acceptCharset|addEventListener|appendChild|assignedSlot|attachShadow|AMP|baseURI|checkValidity|childElementCount|childNodes|classList|className|clientHeight|clientLeft|clientTop|clientWidth|compareDocumentPosition|computedName|computedRole|contentEditable|createShadowRoot|enqueAction|firstChild|firstElementChild|getAnimations|getAttribute|getAttributeNS|getAttributeNode|getAttributeNodeNS|getBoundingClientRect|getClientRects|getDestinationInsertionPoints|getElementsByClassName|getElementsByTagName|getElementsByTagNameNS|getRootNode|hasAttribute|hasAttributeNS|hasAttributes|hasChildNodes|hasPointerCapture|i-amphtml-\S*|innerHTML|innerText|inputMode|insertAdjacentElement|insertAdjacentHTML|insertAdjacentText|isContentEditable|isDefaultNamespace|isEqualNode|isSameNode|lastChild|lastElementChild|lookupNamespaceURI|namespaceURI|nextElementSibling|nextSibling|nodeName|nodeType|nodeValue|offsetHeight|offsetLeft|offsetParent|offsetTop|offsetWidth|outerHTML|outerText|ownerDocument|parentElement|parentNode|previousElementSibling|previousSibling|querySelector|querySelectorAll|releasePointerCapture|removeAttribute|removeAttributeNS|removeAttributeNode|removeChild|removeEventListener|replaceChild|reportValidity|requestPointerLock|scrollHeight|scrollIntoView|scrollIntoViewIfNeeded|scrollLeft|scrollWidth|setAttribute|setAttributeNS|setAttributeNode|setAttributeNodeNS|setPointerCapture|shadowRoot|styleMap|tabIndex|tagName|textContent|toString|valueOf|(webkit|ms|moz|o)dropzone|(webkit|moz|ms|o)MatchesSelector|(webkit|moz|ms|o)RequestFullScreen|(webkit|moz|ms|o)RequestFullscreen)(\s|$)',
                            SpecRule::ADD_VALUE_TO_SET => 'AMP_SCRIPT_IDS',
                        ],
                        [
                            SpecRule::NAME => Attribute::TARGET,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                'amp-script',
                            ],
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                        ],
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_CASEI => [
                                'text/plain',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'mandatory-id-attr',
                        'nonce-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-script/',
                    SpecRule::CDATA => [
                        SpecRule::MAX_BYTES => 10000,
                        SpecRule::MAX_BYTES_SPEC_URL => 'https://amp.dev/documentation/components/amp-script/#faq',
                        SpecRule::DISALLOWED_CDATA_REGEX => [
                            [
                                'regex' => '<!--',
                                'errorMessage' => 'html comments',
                            ],
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-script',
                    ],
                ]
            ),
            Extension::SELECTOR => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::SELECTOR,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DISABLED,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::FORM,
                        ],
                        [
                            SpecRule::NAME => Attribute::KEYBOARD_SELECT_MODE,
                            SpecRule::VALUE_CASEI => [
                                'focus',
                                'none',
                                'select',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::MULTIPLE,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                        [
                            SpecRule::NAME => '[DISABLED]',
                        ],
                        [
                            SpecRule::NAME => '[SELECTED]',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                        'name-attr',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                            Layout::CONTAINER,
                        ],
                    ],
                    SpecRule::DISALLOWED_ANCESTOR => [
                        'AMP-SELECTOR',
                    ],
                    SpecRule::REFERENCE_POINTS => [
                        [
                            'tagSpecName' => 'AMP-SELECTOR option',
                        ],
                        [
                            'tagSpecName' => 'AMP-SELECTOR child',
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-selector',
                    ],
                ]
            ),
            'AMP-SELECTOR child' => new Tag(
                [
                    SpecRule::TAG_NAME => '$REFERENCE_POINT',
                    SpecRule::SPEC_NAME => 'AMP-SELECTOR child',
                    SpecRule::REFERENCE_POINTS => [
                        [
                            'tagSpecName' => 'AMP-SELECTOR option',
                        ],
                        [
                            'tagSpecName' => 'AMP-SELECTOR child',
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            'AMP-SELECTOR option' => new Tag(
                [
                    SpecRule::TAG_NAME => '$REFERENCE_POINT',
                    SpecRule::SPEC_NAME => 'AMP-SELECTOR option',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DISABLED,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::OPTION,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::SELECTED,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-selector/',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            'amp-sidebar' => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::SIDEBAR,
                    SpecRule::SPEC_NAME => 'amp-sidebar',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::SIDE,
                            SpecRule::VALUE => [
                                'left',
                                'right',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-sidebar/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::NODISPLAY,
                        ],
                    ],
                    SpecRule::DISALLOWED_ANCESTOR => [
                        'AMP-STORY',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-sidebar',
                    ],
                    SpecRule::MARK_DESCENDANTS => [
                        'marker' => [
                            'AUTOSCROLL',
                        ],
                    ],
                ]
            ),
            'amp-sidebar (AMP4EMAIL)' => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::SIDEBAR,
                    SpecRule::SPEC_NAME => 'amp-sidebar (AMP4EMAIL)',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::SIDE,
                            SpecRule::VALUE => [
                                'left',
                                'right',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-sidebar/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::NODISPLAY,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP4EMAIL,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-sidebar',
                    ],
                ]
            ),
            'amp-sidebar > nav' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::NAV,
                    SpecRule::SPEC_NAME => 'amp-sidebar > nav',
                    SpecRule::MANDATORY_PARENT => Extension::SIDEBAR,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::TOOLBAR,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_DISPATCH',
                        ],
                        [
                            SpecRule::NAME => Attribute::TOOLBAR_TARGET,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::CHILD_TAGS => [
                        'mandatoryNumChildTags' => 1,
                        'childTagNameOneof' => [
                            'OL',
                            'UL',
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Extension::SKIMLINKS => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::SKIMLINKS,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::CUSTOM_REDIRECT_DOMAIN,
                        ],
                        [
                            SpecRule::NAME => Attribute::CUSTOM_TRACKING_ID,
                            SpecRule::VALUE_REGEX_CASEI => '^.{0,50}$',
                        ],
                        [
                            SpecRule::NAME => Attribute::EXCLUDED_DOMAINS,
                        ],
                        [
                            SpecRule::NAME => Attribute::LINK_SELECTOR,
                        ],
                        [
                            SpecRule::NAME => Attribute::PUBLISHER_CODE,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_REGEX_CASEI => '^[0-9]+X[0-9]+$',
                        ],
                        [
                            SpecRule::NAME => Attribute::TRACKING,
                            SpecRule::VALUE => [
                                'false',
                                'true',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::NODISPLAY,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-skimlinks',
                    ],
                ]
            ),
            Extension::SMARTLINKS => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::SMARTLINKS,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::EXCLUSIVE_LINKS,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::LINK_ATTRIBUTE,
                        ],
                        [
                            SpecRule::NAME => Attribute::LINK_SELECTOR,
                        ],
                        [
                            SpecRule::NAME => Attribute::LINKMATE,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::NRTV_ACCOUNT_NAME,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::NODISPLAY,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-smartlinks',
                    ],
                ]
            ),
            Extension::SOCIAL_SHARE => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::SOCIAL_SHARE,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DATA_SHARE_ENDPOINT,
                            SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'ftp',
                                    'http',
                                    'https',
                                    'mailto',
                                    'bbmi',
                                    'fb-me',
                                    'fb-messenger',
                                    'intent',
                                    'line',
                                    'skype',
                                    'sms',
                                    'snapchat',
                                    'tel',
                                    'tg',
                                    'threema',
                                    'viber',
                                    'wh',
                                    'whatsapp',
                                ],
                                SpecRule::ALLOW_RELATIVE => false,
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::CONTAINER,
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-social-share',
                    ],
                ]
            ),
            Extension::SOUNDCLOUD => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::SOUNDCLOUD,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DATA_COLOR,
                            SpecRule::VALUE_REGEX_CASEI => '([0-9a-f]{3}){1,2}',
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_PLAYLISTID,
                            SpecRule::MANDATORY_ONEOF => '[\'data-trackid\', \'data-playlistid\']',
                            SpecRule::VALUE_REGEX => '[0-9]+',
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_SECRET_TOKEN,
                            SpecRule::VALUE_REGEX => '[A-Za-z0-9_-]+',
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_TRACKID,
                            SpecRule::MANDATORY_ONEOF => '[\'data-trackid\', \'data-playlistid\']',
                            SpecRule::VALUE_REGEX => '[0-9]+',
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_VISUAL,
                            SpecRule::VALUE_CASEI => [
                                'false',
                                'true',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::INTRINSIC,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-soundcloud',
                    ],
                ]
            ),
            Extension::SPRINGBOARD_PLAYER => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::SPRINGBOARD_PLAYER,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DATA_CONTENT_ID,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_DOMAIN,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_ITEMS,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_MODE,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_CASEI => [
                                'playlist',
                                'video',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_PLAYER_ID,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_REGEX_CASEI => '[a-z0-9]+',
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_SITE_ID,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_REGEX => '[0-9]+',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FLEX_ITEM,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-springboard-player',
                    ],
                ]
            ),
            'amp-state' => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::STATE,
                    SpecRule::SPEC_NAME => 'amp-state',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::CREDENTIALS,
                        ],
                        [
                            SpecRule::NAME => Attribute::OVERRIDABLE,
                        ],
                        [
                            SpecRule::NAME => Attribute::SRC,
                            SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'https',
                                ],
                                SpecRule::ALLOW_RELATIVE => true,
                            ],
                        ],
                        [
                            SpecRule::NAME => '[SRC]',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'mandatory-id-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-bind/',
                    SpecRule::CHILD_TAGS => [
                        'firstChildTagNameOneof' => [
                            'SCRIPT',
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-bind',
                    ],
                ]
            ),
            'amp-state (AMP4EMAIL)' => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::STATE,
                    SpecRule::SPEC_NAME => 'amp-state (AMP4EMAIL)',
                    SpecRule::ATTR_LISTS => [
                        'mandatory-id-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-bind/',
                    SpecRule::DISALLOWED_ANCESTOR => [
                        'AMP-LIST',
                        'AMP-STATE',
                        'TEMPLATE',
                    ],
                    SpecRule::CHILD_TAGS => [
                        'firstChildTagNameOneof' => [
                            'SCRIPT',
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-bind',
                    ],
                ]
            ),
            Extension::STICKY_AD => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::STICKY_AD,
                    SpecRule::UNIQUE => true,
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::NODISPLAY,
                        ],
                    ],
                    SpecRule::DISALLOWED_ANCESTOR => [
                        'AMP-APP-BANNER',
                    ],
                    SpecRule::CHILD_TAGS => [
                        'mandatoryNumChildTags' => 1,
                        'firstChildTagNameOneof' => [
                            'AMP-AD',
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-sticky-ad',
                    ],
                ]
            ),
            Extension::STORY => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::STORY,
                    SpecRule::MANDATORY_PARENT => Element::BODY,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::BACKGROUND_AUDIO,
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'http',
                                    'https',
                                ],
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::ENTITY,
                        ],
                        [
                            SpecRule::NAME => Attribute::ENTITY_LOGO_SRC,
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'http',
                                    'https',
                                ],
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::ENTITY_URL,
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'http',
                                    'https',
                                ],
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::POSTER_LANDSCAPE_SRC,
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'http',
                                    'https',
                                ],
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::POSTER_PORTRAIT_SRC,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'http',
                                    'https',
                                ],
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::POSTER_SQUARE_SRC,
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'http',
                                    'https',
                                ],
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::PUBLISHER,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::PUBLISHER_LOGO_SRC,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'http',
                                    'https',
                                ],
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::STANDALONE,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::SUPPORTS_LANDSCAPE,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::TITLE,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::LIVE_STORY,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::LIVE_STORY_DISABLED,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                    ],
                    SpecRule::CHILD_TAGS => [
                        'childTagNameOneof' => [
                            'AMP-ANALYTICS',
                            'AMP-CONSENT',
                            'AMP-GEO',
                            'AMP-PIXEL',
                            'AMP-SIDEBAR',
                            'AMP-STORY-AUTO-ADS',
                            'AMP-STORY-BOOKEND',
                            'AMP-STORY-PAGE',
                        ],
                        'mandatoryMinNumChildTags' => 1,
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES => [
                        'amp-story-page',
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-story',
                    ],
                    SpecRule::SIBLINGS_DISALLOWED => true,
                ]
            ),
            Extension::STORY_360 => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::STORY_360,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::CONTROLS,
                            SpecRule::VALUE => [
                                'gyroscope',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::DURATION,
                            SpecRule::VALUE_REGEX => '([0-9\.]+)\s*(s|ms)',
                        ],
                        [
                            SpecRule::NAME => Attribute::HEADING_END,
                            SpecRule::VALUE_REGEX => '-?\d+\.?\d*',
                            SpecRule::TRIGGER => [
                                'alsoRequiresAttr' => [
                                    'duration',
                                ],
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::HEADING_START,
                            SpecRule::VALUE_REGEX => '-?\d+\.?\d*',
                        ],
                        [
                            SpecRule::NAME => Attribute::PITCH_END,
                            SpecRule::VALUE_REGEX => '-?\d+\.?\d*',
                            SpecRule::TRIGGER => [
                                'alsoRequiresAttr' => [
                                    'duration',
                                ],
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::PITCH_START,
                            SpecRule::VALUE_REGEX => '-?\d+\.?\d*',
                        ],
                        [
                            SpecRule::NAME => Attribute::SCENE_HEADING,
                            SpecRule::VALUE_REGEX => '-?\d+\.?\d*',
                        ],
                        [
                            SpecRule::NAME => Attribute::SCENE_PITCH,
                            SpecRule::VALUE_REGEX => '-?\d+\.?\d*',
                        ],
                        [
                            SpecRule::NAME => Attribute::SCENE_ROLL,
                            SpecRule::VALUE_REGEX => '-?\d+\.?\d*',
                        ],
                        [
                            SpecRule::NAME => Attribute::ZOOM_END,
                            SpecRule::VALUE_REGEX => '\d+\.?\d*',
                            SpecRule::TRIGGER => [
                                'alsoRequiresAttr' => [
                                    'duration',
                                ],
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::ZOOM_START,
                            SpecRule::VALUE_REGEX => '\d+\.?\d*',
                        ],
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-story-360',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::NODISPLAY,
                        ],
                    ],
                    SpecRule::MANDATORY_ANCESTOR => Extension::STORY,
                    SpecRule::CHILD_TAGS => [
                        'mandatoryNumChildTags' => 1,
                        'childTagNameOneof' => [
                            'AMP-IMG',
                            'AMP-VIDEO',
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-story-360',
                    ],
                ]
            ),
            Extension::STORY_ANIMATION => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::STORY_ANIMATION,
                    SpecRule::MANDATORY_PARENT => Extension::STORY_PAGE,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ANIMATE_IN_AFTER,
                        ],
                        [
                            SpecRule::NAME => Attribute::TRIGGER,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                'visibility',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::NODISPLAY,
                        ],
                    ],
                    SpecRule::CHILD_TAGS => [
                        'mandatoryNumChildTags' => 1,
                        'childTagNameOneof' => [
                            'SCRIPT',
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES => [
                        'amp-story-animation json script',
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-story',
                    ],
                ]
            ),
            'amp-story-animation json script' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::SPEC_NAME => 'amp-story-animation json script',
                    SpecRule::MANDATORY_PARENT => Extension::STORY_ANIMATION,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_PARENT_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'application/json',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'nonce-attr',
                    ],
                    SpecRule::CDATA => [
                        SpecRule::DISALLOWED_CDATA_REGEX => [
                            [
                                'regex' => '<!--',
                                'errorMessage' => 'html comments',
                            ],
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::SATISFIES => [
                        'amp-story-animation json script',
                    ],
                ]
            ),
            Extension::STORY_AUTO_ADS => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::STORY_AUTO_ADS,
                    SpecRule::UNIQUE => true,
                    SpecRule::MANDATORY_PARENT => Extension::STORY,
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-story-auto-ads/',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-story-auto-ads',
                    ],
                ]
            ),
            'amp-story-auto-ads > template' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::TEMPLATE,
                    SpecRule::SPEC_NAME => 'amp-story-auto-ads > template',
                    SpecRule::MANDATORY_PARENT => Extension::STORY_AUTO_ADS,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                'amp-mustache',
                            ],
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_PARENT_DISPATCH',
                        ],
                    ],
                    SpecRule::REFERENCE_POINTS => [
                        [
                            'tagSpecName' => 'AMP-STORY-GRID-LAYER default',
                        ],
                        [
                            'tagSpecName' => 'AMP-STORY-GRID-LAYER animate-in',
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-mustache',
                    ],
                    SpecRule::DESCENDANT_TAG_LIST => 'amp-story-grid-layer-allowed-descendants',
                ]
            ),
            'amp-story-auto-ads config script' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::SPEC_NAME => 'amp-story-auto-ads config script',
                    SpecRule::MANDATORY_PARENT => Extension::STORY_AUTO_ADS,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_PARENT_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'application/json',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'nonce-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-story-auto-ads/',
                    SpecRule::CDATA => [
                        SpecRule::DISALLOWED_CDATA_REGEX => [
                            [
                                'regex' => '<!--',
                                'errorMessage' => 'html comments',
                            ],
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-story-auto-ads',
                    ],
                ]
            ),
            Extension::STORY_BOOKEND => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::STORY_BOOKEND,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::LAYOUT,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                'nodisplay',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::SRC,
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'http',
                                    'https',
                                ],
                            ],
                        ],
                    ],
                    SpecRule::MANDATORY_ANCESTOR => Extension::STORY,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::DESCENDANT_TAG_LIST => 'amp-story-bookend-allowed-descendants',
                    SpecRule::MANDATORY_LAST_CHILD => true,
                ]
            ),
            'amp-story-bookend extension .json script' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::SPEC_NAME => 'amp-story-bookend extension .json script',
                    SpecRule::UNIQUE => true,
                    SpecRule::MANDATORY_PARENT => Extension::STORY_BOOKEND,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_PARENT_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'application/json',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'nonce-attr',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-story',
                    ],
                    SpecRule::SIBLINGS_DISALLOWED => true,
                    SpecRule::MANDATORY_LAST_CHILD => true,
                ]
            ),
            Extension::STORY_CONSENT => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::STORY_CONSENT,
                    SpecRule::MANDATORY_PARENT => Extension::CONSENT,
                    SpecRule::ATTR_LISTS => [
                        'mandatory-id-attr',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::NODISPLAY,
                        ],
                    ],
                    SpecRule::CHILD_TAGS => [
                        'mandatoryNumChildTags' => 1,
                        'childTagNameOneof' => [
                            'SCRIPT',
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES => [
                        'amp-story-consent extension .json script',
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-consent',
                        'amp-story',
                    ],
                ]
            ),
            'amp-story-consent extension .json script' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::SPEC_NAME => 'amp-story-consent extension .json script',
                    SpecRule::UNIQUE => true,
                    SpecRule::MANDATORY_PARENT => Extension::STORY_CONSENT,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_PARENT_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'application/json',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'nonce-attr',
                    ],
                    SpecRule::CDATA => [
                        SpecRule::DISALLOWED_CDATA_REGEX => [
                            [
                                'regex' => '<!--',
                                'errorMessage' => 'html comments',
                            ],
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::SATISFIES => [
                        'amp-story-consent extension .json script',
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-consent',
                        'amp-story',
                    ],
                ]
            ),
            Extension::STORY_CTA_LAYER => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::STORY_CTA_LAYER,
                    SpecRule::MANDATORY_ANCESTOR => Extension::STORY_PAGE,
                    SpecRule::REFERENCE_POINTS => [
                        [
                            'tagSpecName' => 'AMP-STORY-CTA-LAYER animate-in',
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::DESCENDANT_TAG_LIST => 'amp-story-cta-layer-allowed-descendants',
                    SpecRule::MANDATORY_LAST_CHILD => true,
                ]
            ),
            'AMP-STORY-CTA-LAYER animate-in' => new Tag(
                [
                    SpecRule::TAG_NAME => '$REFERENCE_POINT',
                    SpecRule::SPEC_NAME => 'AMP-STORY-CTA-LAYER animate-in',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ANIMATE_IN,
                            SpecRule::VALUE => [
                                'drop',
                                'fade-in',
                                'fly-in-bottom',
                                'fly-in-left',
                                'fly-in-right',
                                'fly-in-top',
                                'pan-down',
                                'pan-left',
                                'pan-right',
                                'pan-up',
                                'pulse',
                                'rotate-in-left',
                                'rotate-in-right',
                                'scale-fade-down',
                                'scale-fade-up',
                                'twirl-in',
                                'whoosh-in-left',
                                'whoosh-in-right',
                                'zoom-in',
                                'zoom-out',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::ANIMATE_IN_AFTER,
                        ],
                        [
                            SpecRule::NAME => Attribute::ANIMATE_IN_DELAY,
                        ],
                        [
                            SpecRule::NAME => Attribute::ANIMATE_IN_DURATION,
                        ],
                        [
                            SpecRule::NAME => Attribute::ANIMATE_IN_TIMING_FUNCTION,
                        ],
                        [
                            SpecRule::NAME => Attribute::SCALE_END,
                            SpecRule::VALUE_REGEX => '[0-9]+([.][0-9]+)?',
                        ],
                        [
                            SpecRule::NAME => Attribute::SCALE_START,
                            SpecRule::VALUE_REGEX => '[0-9]+([.][0-9]+)?',
                        ],
                        [
                            SpecRule::NAME => Attribute::TRANSLATE_X,
                            SpecRule::VALUE_REGEX_CASEI => '[0-9]+px',
                        ],
                        [
                            SpecRule::NAME => Attribute::TRANSLATE_Y,
                            SpecRule::VALUE_REGEX_CASEI => '[0-9]+px',
                        ],
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-story/',
                    SpecRule::REFERENCE_POINTS => [
                        [
                            'tagSpecName' => 'AMP-STORY-CTA-LAYER animate-in',
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            Extension::STORY_GRID_LAYER => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::STORY_GRID_LAYER,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::TEMPLATE,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                'fill',
                                'horizontal',
                                'thirds',
                                'vertical',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::POSITION,
                            SpecRule::VALUE => [
                                'landscape-half-left',
                                'landscape-half-right',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::ASPECT_RATIO,
                            SpecRule::VALUE_REGEX => '\d+:\d+',
                        ],
                    ],
                    SpecRule::MANDATORY_ANCESTOR => Extension::STORY_PAGE,
                    SpecRule::REFERENCE_POINTS => [
                        [
                            'tagSpecName' => 'AMP-STORY-GRID-LAYER default',
                        ],
                        [
                            'tagSpecName' => 'AMP-STORY-GRID-LAYER animate-in',
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::DESCENDANT_TAG_LIST => 'amp-story-grid-layer-allowed-descendants',
                ]
            ),
            'AMP-STORY-GRID-LAYER animate-in' => new Tag(
                [
                    SpecRule::TAG_NAME => '$REFERENCE_POINT',
                    SpecRule::SPEC_NAME => 'AMP-STORY-GRID-LAYER animate-in',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ANIMATE_IN,
                            SpecRule::VALUE => [
                                'drop',
                                'fade-in',
                                'fly-in-bottom',
                                'fly-in-left',
                                'fly-in-right',
                                'fly-in-top',
                                'pan-down',
                                'pan-left',
                                'pan-right',
                                'pan-up',
                                'pulse',
                                'rotate-in-left',
                                'rotate-in-right',
                                'scale-fade-down',
                                'scale-fade-up',
                                'twirl-in',
                                'whoosh-in-left',
                                'whoosh-in-right',
                                'zoom-in',
                                'zoom-out',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::TARGET,
                            SpecRule::VALUE => [
                                '_blank',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_TOOLTIP_ICON,
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'http',
                                    'https',
                                    'data',
                                ],
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::ANIMATE_IN_AFTER,
                        ],
                        [
                            SpecRule::NAME => Attribute::ANIMATE_IN_DELAY,
                        ],
                        [
                            SpecRule::NAME => Attribute::ANIMATE_IN_DURATION,
                        ],
                        [
                            SpecRule::NAME => Attribute::ANIMATE_IN_TIMING_FUNCTION,
                        ],
                        [
                            SpecRule::NAME => Attribute::INTERACTIVE,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::SCALE_END,
                            SpecRule::VALUE_REGEX => '[0-9]+([.][0-9]+)?',
                        ],
                        [
                            SpecRule::NAME => Attribute::SCALE_START,
                            SpecRule::VALUE_REGEX => '[0-9]+([.][0-9]+)?',
                        ],
                        [
                            SpecRule::NAME => Attribute::TRANSLATE_X,
                            SpecRule::VALUE_REGEX_CASEI => '[0-9]+px',
                        ],
                        [
                            SpecRule::NAME => Attribute::TRANSLATE_Y,
                            SpecRule::VALUE_REGEX_CASEI => '[0-9]+px',
                        ],
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-story/',
                    SpecRule::REFERENCE_POINTS => [
                        [
                            'tagSpecName' => 'AMP-STORY-GRID-LAYER animate-in',
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            'AMP-STORY-GRID-LAYER default' => new Tag(
                [
                    SpecRule::TAG_NAME => '$REFERENCE_POINT',
                    SpecRule::SPEC_NAME => 'AMP-STORY-GRID-LAYER default',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ALIGN_CONTENT,
                            SpecRule::VALUE => [
                                'center',
                                'end',
                                'space-around',
                                'space-between',
                                'space-evenly',
                                'start',
                                'stretch',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::TARGET,
                            SpecRule::VALUE => [
                                '_blank',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_TOOLTIP_ICON,
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'http',
                                    'https',
                                    'data',
                                ],
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::ALIGN_ITEMS,
                            SpecRule::VALUE => [
                                'center',
                                'end',
                                'start',
                                'stretch',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::ALIGN_SELF,
                            SpecRule::VALUE => [
                                'center',
                                'end',
                                'start',
                                'stretch',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::ANIMATE_IN,
                            SpecRule::VALUE => [
                                'drop',
                                'fade-in',
                                'fly-in-bottom',
                                'fly-in-left',
                                'fly-in-right',
                                'fly-in-top',
                                'pan-down',
                                'pan-left',
                                'pan-right',
                                'pan-up',
                                'pulse',
                                'rotate-in-left',
                                'rotate-in-right',
                                'scale-fade-down',
                                'scale-fade-up',
                                'twirl-in',
                                'whoosh-in-left',
                                'whoosh-in-right',
                                'zoom-in',
                                'zoom-out',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::ANIMATE_IN_AFTER,
                        ],
                        [
                            SpecRule::NAME => Attribute::ANIMATE_IN_DELAY,
                        ],
                        [
                            SpecRule::NAME => Attribute::ANIMATE_IN_DURATION,
                        ],
                        [
                            SpecRule::NAME => Attribute::ANIMATE_IN_TIMING_FUNCTION,
                        ],
                        [
                            SpecRule::NAME => Attribute::GRID_AREA,
                        ],
                        [
                            SpecRule::NAME => Attribute::INTERACTIVE,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::SCALE_END,
                            SpecRule::VALUE_REGEX => '[0-9]+([.][0-9]+)?',
                        ],
                        [
                            SpecRule::NAME => Attribute::SCALE_START,
                            SpecRule::VALUE_REGEX => '[0-9]+([.][0-9]+)?',
                        ],
                        [
                            SpecRule::NAME => Attribute::TRANSLATE_X,
                            SpecRule::VALUE_REGEX_CASEI => '[0-9]+px',
                        ],
                        [
                            SpecRule::NAME => Attribute::TRANSLATE_Y,
                            SpecRule::VALUE_REGEX_CASEI => '[0-9]+px',
                        ],
                        [
                            SpecRule::NAME => Attribute::JUSTIFY_CONTENT,
                            SpecRule::VALUE => [
                                'center',
                                'end',
                                'space-around',
                                'space-between',
                                'space-evenly',
                                'start',
                                'stretch',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::JUSTIFY_ITEMS,
                            SpecRule::VALUE => [
                                'center',
                                'end',
                                'start',
                                'stretch',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::JUSTIFY_SELF,
                            SpecRule::VALUE => [
                                'center',
                                'end',
                                'start',
                                'stretch',
                            ],
                        ],
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-story/',
                    SpecRule::REFERENCE_POINTS => [
                        [
                            'tagSpecName' => 'AMP-STORY-GRID-LAYER animate-in',
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            Extension::STORY_INTERACTIVE_BINARY_POLL => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::STORY_INTERACTIVE_BINARY_POLL,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::OPTION_1_TEXT,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::OPTION_2_TEXT,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::OPTION_1_CONFETTI,
                        ],
                        [
                            SpecRule::NAME => Attribute::OPTION_2_CONFETTI,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'interactive-shared-configs-attrs',
                    ],
                    SpecRule::MANDATORY_ANCESTOR => Extension::STORY_GRID_LAYER,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-story-interactive',
                    ],
                ]
            ),
            Extension::STORY_INTERACTIVE_POLL => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::STORY_INTERACTIVE_POLL,
                    SpecRule::ATTR_LISTS => [
                        'interactive-options-text-attrs',
                        'interactive-options-confetti-attrs',
                        'interactive-options-results-category-attrs',
                        'interactive-shared-configs-attrs',
                    ],
                    SpecRule::MANDATORY_ANCESTOR => Extension::STORY_GRID_LAYER,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-story-interactive',
                    ],
                ]
            ),
            Extension::STORY_INTERACTIVE_QUIZ => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::STORY_INTERACTIVE_QUIZ,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::OPTION_1_CORRECT,
                            SpecRule::MANDATORY_ONEOF => '[\'option-1-correct\', \'option-2-correct\', \'option-3-correct\', \'option-4-correct\']',
                        ],
                        [
                            SpecRule::NAME => Attribute::OPTION_2_CORRECT,
                            SpecRule::MANDATORY_ONEOF => '[\'option-1-correct\', \'option-2-correct\', \'option-3-correct\', \'option-4-correct\']',
                        ],
                        [
                            SpecRule::NAME => Attribute::OPTION_3_CORRECT,
                            SpecRule::MANDATORY_ONEOF => '[\'option-1-correct\', \'option-2-correct\', \'option-3-correct\', \'option-4-correct\']',
                            SpecRule::TRIGGER => [
                                'alsoRequiresAttr' => [
                                    'option-3-text',
                                ],
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::OPTION_4_CORRECT,
                            SpecRule::MANDATORY_ONEOF => '[\'option-1-correct\', \'option-2-correct\', \'option-3-correct\', \'option-4-correct\']',
                            SpecRule::TRIGGER => [
                                'alsoRequiresAttr' => [
                                    'option-4-text',
                                ],
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'interactive-options-text-attrs',
                        'interactive-options-confetti-attrs',
                        'interactive-shared-configs-attrs',
                    ],
                    SpecRule::MANDATORY_ANCESTOR => Extension::STORY_GRID_LAYER,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-story-interactive',
                    ],
                ]
            ),
            Extension::STORY_INTERACTIVE_RESULTS => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::STORY_INTERACTIVE_RESULTS,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::OPTION_1_RESULTS_CATEGORY,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::OPTION_2_RESULTS_CATEGORY,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::OPTION_3_RESULTS_CATEGORY,
                        ],
                        [
                            SpecRule::NAME => Attribute::OPTION_4_RESULTS_CATEGORY,
                            SpecRule::TRIGGER => [
                                'alsoRequiresAttr' => [
                                    'option-3-results-category',
                                ],
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::OPTION_1_IMAGE,
                        ],
                        [
                            SpecRule::NAME => Attribute::OPTION_2_IMAGE,
                        ],
                        [
                            SpecRule::NAME => Attribute::OPTION_3_IMAGE,
                            SpecRule::TRIGGER => [
                                'alsoRequiresAttr' => [
                                    'option-3-results-category',
                                ],
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::OPTION_4_IMAGE,
                            SpecRule::TRIGGER => [
                                'alsoRequiresAttr' => [
                                    'option-4-results-category',
                                ],
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::OPTION_1_TEXT,
                        ],
                        [
                            SpecRule::NAME => Attribute::OPTION_2_TEXT,
                        ],
                        [
                            SpecRule::NAME => Attribute::OPTION_3_TEXT,
                            SpecRule::TRIGGER => [
                                'alsoRequiresAttr' => [
                                    'option-3-results-category',
                                ],
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::OPTION_4_TEXT,
                            SpecRule::TRIGGER => [
                                'alsoRequiresAttr' => [
                                    'option-4-results-category',
                                ],
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::OPTION_1_RESULTS_THRESHOLD,
                            SpecRule::VALUE_REGEX => '\d+(\.\d+)?',
                        ],
                        [
                            SpecRule::NAME => Attribute::OPTION_2_RESULTS_THRESHOLD,
                            SpecRule::VALUE_REGEX => '\d+(\.\d+)?',
                        ],
                        [
                            SpecRule::NAME => Attribute::OPTION_3_RESULTS_THRESHOLD,
                            SpecRule::VALUE_REGEX => '\d+(\.\d+)?',
                            SpecRule::TRIGGER => [
                                'alsoRequiresAttr' => [
                                    'option-3-results-category',
                                ],
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::OPTION_4_RESULTS_THRESHOLD,
                            SpecRule::VALUE_REGEX => '\d+(\.\d+)?',
                            SpecRule::TRIGGER => [
                                'alsoRequiresAttr' => [
                                    'option-4-results-category',
                                ],
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::PROMPT_TEXT,
                        ],
                        [
                            SpecRule::NAME => Attribute::THEME,
                            SpecRule::VALUE => [
                                'light',
                                'dark',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::CHIP_STYLE,
                            SpecRule::VALUE => [
                                'flat',
                                'transparent',
                            ],
                        ],
                    ],
                    SpecRule::MANDATORY_ANCESTOR => Extension::STORY_GRID_LAYER,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-story-interactive',
                    ],
                ]
            ),
            Extension::STORY_PAGE => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::STORY_PAGE,
                    SpecRule::MANDATORY_PARENT => Extension::STORY,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::AUTO_ADVANCE_AFTER,
                        ],
                        [
                            SpecRule::NAME => Attribute::BACKGROUND_AUDIO,
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'http',
                                    'https',
                                ],
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::NEXT_PAGE_NO_AD,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'mandatory-id-attr',
                    ],
                    SpecRule::CHILD_TAGS => [
                        'childTagNameOneof' => [
                            'AMP-ANALYTICS',
                            'AMP-PIXEL',
                            'AMP-STORY-ANIMATION',
                            'AMP-STORY-CTA-LAYER',
                            'AMP-STORY-GRID-LAYER',
                            'AMP-STORY-PAGE-ATTACHMENT',
                        ],
                        'mandatoryMinNumChildTags' => 1,
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::SATISFIES => [
                        'amp-story-page',
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-story',
                    ],
                ]
            ),
            'amp-story-page-attachment' => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::STORY_PAGE_ATTACHMENT,
                    SpecRule::SPEC_NAME => 'amp-story-page-attachment',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::LAYOUT,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                'nodisplay',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::THEME,
                            SpecRule::VALUE => [
                                'dark',
                                'light',
                            ],
                        ],
                    ],
                    SpecRule::MANDATORY_ANCESTOR => Extension::STORY_PAGE,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::DESCENDANT_TAG_LIST => 'amp-story-page-attachment-allowed-descendants',
                    SpecRule::MANDATORY_LAST_CHILD => true,
                ]
            ),
            'amp-story-page-attachment[href]' => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::STORY_PAGE_ATTACHMENT,
                    SpecRule::SPEC_NAME => 'amp-story-page-attachment[href]',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::LAYOUT,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                'nodisplay',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::THEME,
                            SpecRule::VALUE => [
                                'dark',
                                'light',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::HREF,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'http',
                                    'https',
                                ],
                            ],
                        ],
                    ],
                    SpecRule::MANDATORY_ANCESTOR => Extension::STORY_PAGE,
                    SpecRule::CHILD_TAGS => [
                        'mandatoryNumChildTags' => 0,
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::MANDATORY_LAST_CHILD => true,
                ]
            ),
            Extension::STORY_PANNING_MEDIA => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::STORY_PANNING_MEDIA,
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-story-panning-media',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                        ],
                    ],
                    SpecRule::MANDATORY_ANCESTOR => Extension::STORY_GRID_LAYER,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-story-panning-media',
                    ],
                ]
            ),
            Extension::STORY_PLAYER => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::STORY_PLAYER,
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::RESPONSIVE,
                            Layout::INTRINSIC,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-story-player',
                    ],
                    SpecRule::DESCENDANT_TAG_LIST => 'amp-story-player-allowed-descendants',
                ]
            ),
            'amp-story >> amp-audio' => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::AUDIO,
                    SpecRule::SPEC_NAME => 'amp-story >> amp-audio',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::AUTOPLAY,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'amp-audio-common',
                        'extended-amp-global',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-audio/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::NODISPLAY,
                        ],
                    ],
                    SpecRule::MANDATORY_ANCESTOR => Extension::STORY,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-audio',
                    ],
                ]
            ),
            'amp-story >> amp-sidebar' => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::SIDEBAR,
                    SpecRule::SPEC_NAME => 'amp-story >> amp-sidebar',
                    SpecRule::MANDATORY_PARENT => Extension::STORY,
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-sidebar/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::NODISPLAY,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-sidebar',
                    ],
                    SpecRule::MARK_DESCENDANTS => [
                        'marker' => [
                            'AUTOSCROLL',
                        ],
                    ],
                ]
            ),
            'amp-story >> amp-story-page-attachment >> amp-video' => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::VIDEO,
                    SpecRule::SPEC_NAME => 'amp-story >> amp-story-page-attachment >> amp-video',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::POSTER,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                        'amp-video-common',
                        'lightboxable-elements',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-video/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::INTRINSIC,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::MANDATORY_ANCESTOR => Extension::STORY_PAGE_ATTACHMENT,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                    SpecRule::ALSO_REQUIRES_TAG_WARNING => [
                        'amp-video extension script',
                    ],
                ]
            ),
            'amp-story >> amp-video' => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::VIDEO,
                    SpecRule::SPEC_NAME => 'amp-story >> amp-video',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::AUTOPLAY,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::CONTROLS,
                            SpecRule::VALUE => [
                                '',
                            ],
                            SpecRule::DEPRECATION => '- no replacement',
                            SpecRule::DEPRECATION_URL => 'https://github.com/ampproject/amphtml/issues/23798',
                        ],
                        [
                            SpecRule::NAME => '[CONTROLS]',
                            SpecRule::DEPRECATION => '- no replacement',
                            SpecRule::DEPRECATION_URL => 'https://github.com/ampproject/amphtml/issues/23798',
                        ],
                        [
                            SpecRule::NAME => Attribute::POSTER,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                        'amp-video-common',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-video/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::MANDATORY_ANCESTOR => Extension::STORY,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-video',
                    ],
                ]
            ),
            'amp-subscriptions extension .json script' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::SPEC_NAME => 'amp-subscriptions extension .json script',
                    SpecRule::UNIQUE => true,
                    SpecRule::MANDATORY_PARENT => Element::HEAD,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ID,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                'amp-subscriptions',
                            ],
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                        ],
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_CASEI => [
                                'application/json',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'nonce-attr',
                    ],
                    SpecRule::CDATA => [
                        SpecRule::DISALLOWED_CDATA_REGEX => [
                            [
                                'regex' => '<!--',
                                'errorMessage' => 'html comments',
                            ],
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-subscriptions',
                    ],
                ]
            ),
            Extension::TIMEAGO => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::TIMEAGO,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::CUTOFF,
                            SpecRule::VALUE_REGEX => '\d+',
                        ],
                        [
                            SpecRule::NAME => Attribute::DATETIME,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_REGEX => '\d{4}-[01]\d-[0-3]\dT[0-2]\d:[0-5]\d(:[0-5]\d(\.\d+)?)?(Z|[+-][0-1][0-9]:[0-5][0-9])',
                        ],
                        [
                            SpecRule::NAME => Attribute::LOCALE,
                        ],
                        [
                            SpecRule::NAME => '[DATETIME]',
                        ],
                        [
                            SpecRule::NAME => '[TITLE]',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-timeago/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4EMAIL,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-timeago',
                    ],
                ]
            ),
            Extension::TRUNCATE_TEXT => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::TRUNCATE_TEXT,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::OVERFLOW_STYLE,
                            SpecRule::VALUE => [
                                'right',
                                'default',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-truncate-text/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::CONTAINER,
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::INTRINSIC,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-truncate-text',
                    ],
                ]
            ),
            Extension::TWITTER => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::TWITTER,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DATA_CARDS,
                            SpecRule::TRIGGER => [
                                'alsoRequiresAttr' => [
                                    'data-tweetid',
                                ],
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_CONVERSATION,
                            SpecRule::TRIGGER => [
                                'alsoRequiresAttr' => [
                                    'data-tweetid',
                                ],
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_LIMIT,
                            SpecRule::TRIGGER => [
                                'alsoRequiresAttr' => [
                                    'data-momentid',
                                ],
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_MOMENTID,
                            SpecRule::MANDATORY_ONEOF => '[\'data-momentid\', \'data-timeline-source-type\', \'data-tweetid\']',
                            SpecRule::VALUE_REGEX => '\d+',
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_TIMELINE_ID,
                            SpecRule::VALUE_REGEX => '\d+',
                            SpecRule::TRIGGER => [
                                'alsoRequiresAttr' => [
                                    'data-timeline-source-type',
                                ],
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_TIMELINE_OWNER_SCREEN_NAME,
                            SpecRule::TRIGGER => [
                                'alsoRequiresAttr' => [
                                    'data-timeline-source-type',
                                ],
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_TIMELINE_SLUG,
                            SpecRule::TRIGGER => [
                                'alsoRequiresAttr' => [
                                    'data-timeline-source-type',
                                ],
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_TIMELINE_SOURCE_TYPE,
                            SpecRule::MANDATORY_ONEOF => '[\'data-momentid\', \'data-timeline-source-type\', \'data-tweetid\']',
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_TIMELINE_SCREEN_NAME,
                            SpecRule::TRIGGER => [
                                'alsoRequiresAttr' => [
                                    'data-timeline-source-type',
                                ],
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_TIMELINE_URL,
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'http',
                                    'https',
                                ],
                                SpecRule::ALLOW_RELATIVE => false,
                            ],
                            SpecRule::TRIGGER => [
                                'alsoRequiresAttr' => [
                                    'data-timeline-source-type',
                                ],
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_TIMELINE_USER_ID,
                            SpecRule::VALUE_REGEX => '\d+',
                            SpecRule::TRIGGER => [
                                'alsoRequiresAttr' => [
                                    'data-timeline-source-type',
                                ],
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_TWEETID,
                            SpecRule::MANDATORY_ONEOF => '[\'data-momentid\', \'data-timeline-source-type\', \'data-tweetid\']',
                        ],
                        [
                            SpecRule::NAME => '[DATA_TWEETID]',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::INTRINSIC,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-twitter',
                    ],
                ]
            ),
            Extension::USER_NOTIFICATION => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::USER_NOTIFICATION,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DATA_DISMISS_HREF,
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'https',
                                ],
                                SpecRule::ALLOW_RELATIVE => false,
                                SpecRule::ALLOW_EMPTY => false,
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_SHOW_IF_HREF,
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'https',
                                ],
                                SpecRule::ALLOW_RELATIVE => false,
                                SpecRule::ALLOW_EMPTY => false,
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::ENCTYPE,
                            SpecRule::VALUE => [
                                'application/x-www-form-urlencoded',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::NODISPLAY,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-user-notification',
                    ],
                ]
            ),
            Extension::VIDEO => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::VIDEO,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::POSTER,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                        'amp-video-common',
                        'lightboxable-elements',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-video/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::INTRINSIC,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::DISALLOWED_ANCESTOR => [
                        'AMP-STORY',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                    SpecRule::ALSO_REQUIRES_TAG_WARNING => [
                        'amp-video extension script',
                    ],
                ]
            ),
            'AMP-VIDEO-IFRAME > I-AMPHTML-SIZER [style]' => new Tag(
                [
                    SpecRule::TAG_NAME => '$REFERENCE_POINT',
                    SpecRule::SPEC_NAME => 'AMP-VIDEO-IFRAME > I-AMPHTML-SIZER [style]',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::STYLE,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISALLOWED_VALUE_REGEX => '!\s*important',
                            SpecRule::CSS_DECLARATION => [
                                [
                                    'name' => 'display',
                                    'valueCasei' => [
                                        'block',
                                    ],
                                ],
                                [
                                    'name' => 'padding-top',
                                ],
                            ],
                        ],
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-video-iframe/',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXPLICIT_ATTRS_ONLY => true,
                    SpecRule::ENABLED_BY => [
                        'transformed',
                    ],
                ]
            ),
            'AMP-VIDEO-IFRAME > [placeholder]' => new Tag(
                [
                    SpecRule::TAG_NAME => '$REFERENCE_POINT',
                    SpecRule::SPEC_NAME => 'AMP-VIDEO-IFRAME > [placeholder]',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::PLACEHOLDER,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-video-iframe/',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            'AMP-VIDEO-IFRAME with [placeholder]' => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::VIDEO_IFRAME,
                    SpecRule::SPEC_NAME => 'AMP-VIDEO-IFRAME with [placeholder]',
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                        'amp-video-iframe-common',
                        'lightboxable-elements',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-video-iframe/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::INTRINSIC,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::REFERENCE_POINTS => [
                        [
                            'tagSpecName' => 'AMP-VIDEO-IFRAME > [placeholder]',
                            'mandatory' => true,
                            'unique' => true,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-video-iframe',
                    ],
                    SpecRule::DISABLED_BY => [
                        'transformed',
                    ],
                ]
            ),
            'AMP-VIDEO-IFRAME with [placeholder] (transformed)' => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::VIDEO_IFRAME,
                    SpecRule::SPEC_NAME => 'AMP-VIDEO-IFRAME with [placeholder] (transformed)',
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                        'amp-video-iframe-common',
                        'lightboxable-elements',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-video-iframe/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::INTRINSIC,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::REFERENCE_POINTS => [
                        [
                            'tagSpecName' => 'AMP-VIDEO-IFRAME > [placeholder]',
                            'mandatory' => true,
                            'unique' => true,
                        ],
                        [
                            'tagSpecName' => 'AMP-VIDEO-IFRAME > I-AMPHTML-SIZER [style]',
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-video-iframe',
                    ],
                    SpecRule::ENABLED_BY => [
                        'transformed',
                    ],
                ]
            ),
            'AMP-VIDEO-IFRAME[poster]' => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::VIDEO_IFRAME,
                    SpecRule::SPEC_NAME => 'AMP-VIDEO-IFRAME[poster]',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::POSTER,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                        'amp-video-iframe-common',
                        'lightboxable-elements',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-video-iframe/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::INTRINSIC,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-video-iframe',
                    ],
                ]
            ),
            'amp-video > source' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SOURCE,
                    SpecRule::SPEC_NAME => 'amp-video > source',
                    SpecRule::MANDATORY_PARENT => Extension::VIDEO,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::MEDIA,
                        ],
                        [
                            SpecRule::NAME => Attribute::SRC,
                            SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'https',
                                ],
                                SpecRule::ALLOW_RELATIVE => true,
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::TYPE,
                        ],
                        [
                            SpecRule::NAME => '[SRC]',
                        ],
                        [
                            SpecRule::NAME => '[TYPE]',
                        ],
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-video/',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            'amp-video > track' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::TRACK,
                    SpecRule::SPEC_NAME => 'amp-video > track',
                    SpecRule::MANDATORY_PARENT => Extension::VIDEO,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => '[LABEL]',
                        ],
                        [
                            SpecRule::NAME => '[SRC]',
                        ],
                        [
                            SpecRule::NAME => '[SRCLANG]',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'track-attrs-no-subtitles',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            'amp-video > track[kind=subtitles]' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::TRACK,
                    SpecRule::SPEC_NAME => 'amp-video > track[kind=subtitles]',
                    SpecRule::MANDATORY_PARENT => Extension::VIDEO,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => '[LABEL]',
                        ],
                        [
                            SpecRule::NAME => '[SRC]',
                        ],
                        [
                            SpecRule::NAME => '[SRCLANG]',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'track-attrs-subtitles',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            'amp-video extension script' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::SPEC_NAME => 'amp-video extension script',
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-video',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                        'requiresUsage' => 'NONE',
                    ],
                ]
            ),
            Extension::VIMEO => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::VIMEO,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::AUTOPLAY,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_VIDEOID,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_REGEX => '[0-9]+',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-vimeo',
                    ],
                ]
            ),
            Extension::VINE => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::VINE,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DATA_VINEID,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-vine',
                    ],
                ]
            ),
            Extension::VIQEO_PLAYER => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::VIQEO_PLAYER,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::AUTOPLAY,
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_PROFILEID,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_REGEX => '[0-9a-f]*',
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_VIDEOID,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-viqeo-player',
                    ],
                ]
            ),
            Extension::VK => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::VK,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DATA_EMBEDTYPE,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FIXED,
                            Layout::FLEX_ITEM,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-vk',
                    ],
                ]
            ),
            Extension::WEB_PUSH => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::WEB_PUSH,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::HELPER_IFRAME_URL,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'https',
                                ],
                                SpecRule::ALLOW_RELATIVE => false,
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::ID,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                'amp-web-push',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::PERMISSION_DIALOG_URL,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'https',
                                ],
                                SpecRule::ALLOW_RELATIVE => false,
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::SERVICE_WORKER_URL,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'https',
                                ],
                                SpecRule::ALLOW_RELATIVE => false,
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::SERVICE_WORKER_SCOPE,
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'https',
                                ],
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-web-push/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::NODISPLAY,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-web-push',
                    ],
                ]
            ),
            Extension::WEB_PUSH_WIDGET => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::WEB_PUSH_WIDGET,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::VISIBILITY,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                'blocked',
                                'subscribed',
                                'unsubscribed',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-web-push/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FIXED,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-web-push',
                    ],
                ]
            ),
            Extension::WISTIA_PLAYER => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::WISTIA_PLAYER,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DATA_MEDIA_HASHED_ID,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_REGEX => '[0-9a-zA-Z]+',
                        ],
                        [
                            SpecRule::NAME => Attribute::ROTATE_TO_FULLSCREEN,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-wistia-player',
                    ],
                ]
            ),
            Extension::YOTPO => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::YOTPO,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DATA_APP_KEY,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_WIDGET_TYPE,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-yotpo/',
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-yotpo',
                    ],
                ]
            ),
            Extension::YOUTUBE => new Tag(
                [
                    SpecRule::TAG_NAME => Extension::YOUTUBE,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::AUTOPLAY,
                        ],
                        [
                            SpecRule::NAME => Attribute::LOOP,
                        ],
                        [
                            SpecRule::NAME => Attribute::CREDENTIALS,
                            SpecRule::VALUE_CASEI => [
                                'include',
                                'omit',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_LIVE_CHANNELID,
                            SpecRule::MANDATORY_ONEOF => '[\'data-live-channelid\', \'data-videoid\']',
                            SpecRule::VALUE_REGEX => '[^=/?:]+',
                        ],
                        [
                            SpecRule::NAME => Attribute::DATA_VIDEOID,
                            SpecRule::MANDATORY_ONEOF => '[\'data-live-channelid\', \'data-videoid\']',
                            SpecRule::VALUE_REGEX => '[^=/?:]+',
                        ],
                        [
                            SpecRule::NAME => Attribute::DOCK,
                            SpecRule::REQUIRES_EXTENSION => [
                                'amp-video-docking',
                            ],
                        ],
                        [
                            SpecRule::NAME => '[DATA_VIDEOID]',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'extended-amp-global',
                        'lightboxable-elements',
                    ],
                    SpecRule::AMP_LAYOUT => [
                        'supportedLayouts' => [
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-youtube',
                    ],
                ]
            ),
            'amp4ads engine script' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::SPEC_NAME => 'amp4ads engine script',
                    SpecRule::MANDATORY => true,
                    SpecRule::UNIQUE => true,
                    SpecRule::MANDATORY_PARENT => Element::HEAD,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::SRC,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                'https://cdn.ampproject.org/amp4ads-v0.js',
                            ],
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'nonce-attr',
                        'amphtml-engine-attrs',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#required-markup',
                    SpecRule::CDATA => [
                        SpecRule::DISALLOWED_CDATA_REGEX => [
                            [
                                'regex' => '.',
                                'errorMessage' => 'contents',
                            ],
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP4ADS,
                    ],
                    SpecRule::DESCRIPTIVE_NAME => 'amphtml engine script',
                ]
            ),
            'amphtml engine script' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::SPEC_NAME => 'amphtml engine script',
                    SpecRule::MANDATORY_ALTERNATIVES => 'amphtml engine script',
                    SpecRule::UNIQUE => true,
                    SpecRule::MANDATORY_PARENT => Element::HEAD,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::SRC,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                'https://cdn.ampproject.org/v0.js',
                            ],
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'nonce-attr',
                        'amphtml-engine-attrs',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#required-markup',
                    SpecRule::CDATA => [
                        SpecRule::DISALLOWED_CDATA_REGEX => [
                            [
                                'regex' => '.',
                                'errorMessage' => 'contents',
                            ],
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::DESCRIPTIVE_NAME => 'amphtml engine script',
                ]
            ),
            'amphtml engine script (LTS)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::SPEC_NAME => 'amphtml engine script (LTS)',
                    SpecRule::MANDATORY_ALTERNATIVES => 'amphtml engine script',
                    SpecRule::UNIQUE => true,
                    SpecRule::MANDATORY_PARENT => Element::HEAD,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::SRC,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                'https://cdn.ampproject.org/lts/v0.js',
                            ],
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'nonce-attr',
                        'amphtml-engine-attrs',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#required-markup',
                    SpecRule::CDATA => [
                        SpecRule::DISALLOWED_CDATA_REGEX => [
                            [
                                'regex' => '.',
                                'errorMessage' => 'contents',
                            ],
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::DESCRIPTIVE_NAME => 'amphtml engine script',
                ]
            ),
            'amphtml engine script [AMP4EMAIL]' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::SPEC_NAME => 'amphtml engine script [AMP4EMAIL]',
                    SpecRule::MANDATORY => true,
                    SpecRule::UNIQUE => true,
                    SpecRule::MANDATORY_PARENT => Element::HEAD,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::SRC,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                'https://cdn.ampproject.org/v0.js',
                            ],
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'nonce-attr',
                        'amphtml-engine-attrs',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#required-markup',
                    SpecRule::CDATA => [
                        SpecRule::DISALLOWED_CDATA_REGEX => [
                            [
                                'regex' => '.',
                                'errorMessage' => 'contents',
                            ],
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP4EMAIL,
                    ],
                    SpecRule::DESCRIPTIVE_NAME => 'amphtml engine script',
                ]
            ),
            Element::ARTICLE => new Tag(
                [
                    SpecRule::TAG_NAME => Element::ARTICLE,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::ASIDE => new Tag(
                [
                    SpecRule::TAG_NAME => Element::ASIDE,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::AUDIO => new Tag(
                [
                    SpecRule::TAG_NAME => Element::AUDIO,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::AUTOPLAY,
                        ],
                        [
                            SpecRule::NAME => Attribute::CONTROLS,
                        ],
                        [
                            SpecRule::NAME => Attribute::LOOP,
                        ],
                        [
                            SpecRule::NAME => Attribute::MUTED,
                        ],
                        [
                            SpecRule::NAME => Attribute::PRELOAD,
                        ],
                        [
                            SpecRule::NAME => Attribute::SRC,
                            SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'data',
                                    'https',
                                ],
                                SpecRule::ALLOW_RELATIVE => false,
                            ],
                        ],
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-audio/',
                    SpecRule::MANDATORY_ANCESTOR => Element::NOSCRIPT,
                    SpecRule::MANDATORY_ANCESTOR_SUGGESTED_ALTERNATIVE => Extension::AUDIO,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            'audio > source' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SOURCE,
                    SpecRule::SPEC_NAME => 'audio > source',
                    SpecRule::MANDATORY_PARENT => Element::AUDIO,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::MEDIA,
                        ],
                        [
                            SpecRule::NAME => Attribute::SRC,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'https',
                                ],
                                SpecRule::ALLOW_RELATIVE => true,
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-audio/',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            'audio > track' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::TRACK,
                    SpecRule::SPEC_NAME => 'audio > track',
                    SpecRule::MANDATORY_PARENT => Element::AUDIO,
                    SpecRule::ATTR_LISTS => [
                        'track-attrs-no-subtitles',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            'audio > track[kind=subtitles]' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::TRACK,
                    SpecRule::SPEC_NAME => 'audio > track[kind=subtitles]',
                    SpecRule::MANDATORY_PARENT => Element::AUDIO,
                    SpecRule::ATTR_LISTS => [
                        'track-attrs-subtitles',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            Element::B => new Tag(
                [
                    SpecRule::TAG_NAME => Element::B,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::BASE => new Tag(
                [
                    SpecRule::TAG_NAME => Element::BASE,
                    SpecRule::UNIQUE => true,
                    SpecRule::MANDATORY_PARENT => Element::HEAD,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::HREF,
                            SpecRule::VALUE => [
                                '/',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::TARGET,
                            SpecRule::VALUE_CASEI => [
                                '_blank',
                                '_self',
                                '_top',
                            ],
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            Element::BDI => new Tag(
                [
                    SpecRule::TAG_NAME => Element::BDI,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            Element::BDO => new Tag(
                [
                    SpecRule::TAG_NAME => Element::BDO,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DIR,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::BIG => new Tag(
                [
                    SpecRule::TAG_NAME => Element::BIG,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            Element::BLOCKQUOTE => new Tag(
                [
                    SpecRule::TAG_NAME => Element::BLOCKQUOTE,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ALIGN,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'cite-attr',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::BODY => new Tag(
                [
                    SpecRule::TAG_NAME => Element::BODY,
                    SpecRule::MANDATORY => true,
                    SpecRule::UNIQUE => true,
                    SpecRule::MANDATORY_PARENT => Element::HTML,
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#required-markup',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::BR => new Tag(
                [
                    SpecRule::TAG_NAME => Element::BR,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::BUTTON => new Tag(
                [
                    SpecRule::TAG_NAME => Element::BUTTON,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DISABLED,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::ROLE,
                            SpecRule::IMPLICIT => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::TABINDEX,
                            SpecRule::IMPLICIT => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::TYPE,
                        ],
                        [
                            SpecRule::NAME => Attribute::VALUE,
                        ],
                        [
                            SpecRule::NAME => '[DISABLED]',
                        ],
                        [
                            SpecRule::NAME => '[TYPE]',
                            SpecRule::DISABLED_BY => [
                                'amp4email',
                            ],
                        ],
                        [
                            SpecRule::NAME => '[VALUE]',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'name-attr',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            'button amp-nested-menu' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::BUTTON,
                    SpecRule::SPEC_NAME => 'button amp-nested-menu',
                    SpecRule::ATTR_LISTS => [
                        'amp-nested-menu-actions',
                    ],
                    SpecRule::MANDATORY_ANCESTOR => Extension::NESTED_MENU,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            Element::CANVAS => new Tag(
                [
                    SpecRule::TAG_NAME => Element::CANVAS,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::HEIGHT,
                        ],
                        [
                            SpecRule::NAME => Attribute::WIDTH,
                        ],
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                    SpecRule::MANDATORY_ANCESTOR => Extension::SCRIPT,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-script',
                    ],
                ]
            ),
            Element::CAPTION => new Tag(
                [
                    SpecRule::TAG_NAME => Element::CAPTION,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::CENTER => new Tag(
                [
                    SpecRule::TAG_NAME => Element::CENTER,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            Element::CIRCLE => new Tag(
                [
                    SpecRule::TAG_NAME => Element::CIRCLE,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::CX,
                        ],
                        [
                            SpecRule::NAME => Attribute::CY,
                        ],
                        [
                            SpecRule::NAME => Attribute::EXTERNALRESOURCESREQUIRED,
                        ],
                        [
                            SpecRule::NAME => Attribute::R,
                        ],
                        [
                            SpecRule::NAME => Attribute::SKETCH_TYPE,
                        ],
                        [
                            SpecRule::NAME => Attribute::TRANSFORM,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'svg-conditional-processing-attributes',
                        'svg-core-attributes',
                        'svg-presentation-attributes',
                        'svg-style-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                    SpecRule::MANDATORY_ANCESTOR => Element::SVG,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            Element::CITE => new Tag(
                [
                    SpecRule::TAG_NAME => Element::CITE,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::CLIPPATH => new Tag(
                [
                    SpecRule::TAG_NAME => Element::CLIPPATH,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::CLIPPATHUNITS,
                        ],
                        [
                            SpecRule::NAME => Attribute::EXTERNALRESOURCESREQUIRED,
                        ],
                        [
                            SpecRule::NAME => Attribute::TRANSFORM,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'svg-conditional-processing-attributes',
                        'svg-core-attributes',
                        'svg-presentation-attributes',
                        'svg-style-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                    SpecRule::MANDATORY_ANCESTOR => Element::SVG,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            Element::CODE => new Tag(
                [
                    SpecRule::TAG_NAME => Element::CODE,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::COL => new Tag(
                [
                    SpecRule::TAG_NAME => Element::COL,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::SPAN,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::COLGROUP => new Tag(
                [
                    SpecRule::TAG_NAME => Element::COLGROUP,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::SPAN,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            'cryptokeys .json script' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::SPEC_NAME => 'cryptokeys .json script',
                    SpecRule::UNIQUE => true,
                    SpecRule::MANDATORY_PARENT => Element::HEAD,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::CRYPTOKEYS,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                '',
                            ],
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                        ],
                        [
                            SpecRule::NAME => Attribute::SHA_256_HASH,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_CASEI => [
                                'application/json',
                            ],
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-subscriptions',
                    ],
                ]
            ),
            Element::DATA => new Tag(
                [
                    SpecRule::TAG_NAME => Element::DATA,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::DATALIST => new Tag(
                [
                    SpecRule::TAG_NAME => Element::DATALIST,
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-form/',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::DD => new Tag(
                [
                    SpecRule::TAG_NAME => Element::DD,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::DEFS => new Tag(
                [
                    SpecRule::TAG_NAME => Element::DEFS,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::EXTERNALRESOURCESREQUIRED,
                        ],
                        [
                            SpecRule::NAME => Attribute::TRANSFORM,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'svg-conditional-processing-attributes',
                        'svg-core-attributes',
                        'svg-presentation-attributes',
                        'svg-style-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                    SpecRule::MANDATORY_ANCESTOR => Element::SVG,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            Element::DEL => new Tag(
                [
                    SpecRule::TAG_NAME => Element::DEL,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DATETIME,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'cite-attr',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::DESC => new Tag(
                [
                    SpecRule::TAG_NAME => Element::DESC,
                    SpecRule::ATTR_LISTS => [
                        'svg-core-attributes',
                        'svg-style-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                    SpecRule::MANDATORY_ANCESTOR => Element::SVG,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            Element::DETAILS => new Tag(
                [
                    SpecRule::TAG_NAME => Element::DETAILS,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::OPEN,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                        [
                            SpecRule::NAME => '[OPEN]',
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::DFN => new Tag(
                [
                    SpecRule::TAG_NAME => Element::DFN,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::DIR => new Tag(
                [
                    SpecRule::TAG_NAME => Element::DIR,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            Element::DIV => new Tag(
                [
                    SpecRule::TAG_NAME => Element::DIV,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ALIGN,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            'div amp-nested-menu' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::DIV,
                    SpecRule::SPEC_NAME => 'div amp-nested-menu',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::AMP_NESTED_SUBMENU,
                            SpecRule::MANDATORY_ONEOF => '[\'amp-nested-submenu\', \'amp-nested-submenu-close\', \'amp-nested-submenu-open\']',
                        ],
                        [
                            SpecRule::NAME => Attribute::AMP_NESTED_SUBMENU_CLOSE,
                            SpecRule::MANDATORY_ONEOF => '[\'amp-nested-submenu\', \'amp-nested-submenu-close\', \'amp-nested-submenu-open\']',
                        ],
                        [
                            SpecRule::NAME => Attribute::AMP_NESTED_SUBMENU_OPEN,
                            SpecRule::MANDATORY_ONEOF => '[\'amp-nested-submenu\', \'amp-nested-submenu-close\', \'amp-nested-submenu-open\']',
                        ],
                    ],
                    SpecRule::DISALLOWED_ANCESTOR => [
                        'AMP-ACCORDION',
                    ],
                    SpecRule::MANDATORY_ANCESTOR => Extension::NESTED_MENU,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            Element::DL => new Tag(
                [
                    SpecRule::TAG_NAME => Element::DL,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::DT => new Tag(
                [
                    SpecRule::TAG_NAME => Element::DT,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::ELLIPSE => new Tag(
                [
                    SpecRule::TAG_NAME => Element::ELLIPSE,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::CX,
                        ],
                        [
                            SpecRule::NAME => Attribute::CY,
                        ],
                        [
                            SpecRule::NAME => Attribute::EXTERNALRESOURCESREQUIRED,
                        ],
                        [
                            SpecRule::NAME => Attribute::RX,
                        ],
                        [
                            SpecRule::NAME => Attribute::RY,
                        ],
                        [
                            SpecRule::NAME => Attribute::SKETCH_TYPE,
                        ],
                        [
                            SpecRule::NAME => Attribute::TRANSFORM,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'svg-conditional-processing-attributes',
                        'svg-core-attributes',
                        'svg-presentation-attributes',
                        'svg-style-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                    SpecRule::MANDATORY_ANCESTOR => Element::SVG,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            Element::EM => new Tag(
                [
                    SpecRule::TAG_NAME => Element::EM,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::FECOLORMATRIX => new Tag(
                [
                    SpecRule::TAG_NAME => Element::FECOLORMATRIX,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::IN,
                        ],
                        [
                            SpecRule::NAME => Attribute::TYPE,
                        ],
                        [
                            SpecRule::NAME => Attribute::VALUES,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'svg-core-attributes',
                        'svg-filter-primitive-attributes',
                        'svg-presentation-attributes',
                        'svg-style-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                    SpecRule::MANDATORY_ANCESTOR => Element::SVG,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            Element::FECOMPOSITE => new Tag(
                [
                    SpecRule::TAG_NAME => Element::FECOMPOSITE,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::IN,
                        ],
                        [
                            SpecRule::NAME => Attribute::IN2,
                        ],
                        [
                            SpecRule::NAME => Attribute::K1,
                        ],
                        [
                            SpecRule::NAME => Attribute::K2,
                        ],
                        [
                            SpecRule::NAME => Attribute::K3,
                        ],
                        [
                            SpecRule::NAME => Attribute::K4,
                        ],
                        [
                            SpecRule::NAME => Attribute::OPERATOR,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'svg-core-attributes',
                        'svg-filter-primitive-attributes',
                        'svg-presentation-attributes',
                        'svg-style-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                    SpecRule::MANDATORY_ANCESTOR => Element::SVG,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            Element::FEFLOOD => new Tag(
                [
                    SpecRule::TAG_NAME => Element::FEFLOOD,
                    SpecRule::ATTR_LISTS => [
                        'svg-core-attributes',
                        'svg-filter-primitive-attributes',
                        'svg-presentation-attributes',
                        'svg-style-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                    SpecRule::MANDATORY_ANCESTOR => Element::SVG,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            Element::FEGAUSSIANBLUR => new Tag(
                [
                    SpecRule::TAG_NAME => Element::FEGAUSSIANBLUR,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::EDGEMODE,
                        ],
                        [
                            SpecRule::NAME => Attribute::IN,
                        ],
                        [
                            SpecRule::NAME => Attribute::STDDEVIATION,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'svg-core-attributes',
                        'svg-filter-primitive-attributes',
                        'svg-presentation-attributes',
                        'svg-style-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                    SpecRule::MANDATORY_ANCESTOR => Element::SVG,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            Element::FEMERGE => new Tag(
                [
                    SpecRule::TAG_NAME => Element::FEMERGE,
                    SpecRule::ATTR_LISTS => [
                        'svg-core-attributes',
                        'svg-filter-primitive-attributes',
                        'svg-presentation-attributes',
                        'svg-style-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                    SpecRule::MANDATORY_ANCESTOR => Element::SVG,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            Element::FEMERGENODE => new Tag(
                [
                    SpecRule::TAG_NAME => Element::FEMERGENODE,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::IN,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'svg-core-attributes',
                        'svg-style-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                    SpecRule::MANDATORY_ANCESTOR => Element::SVG,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            Element::FEOFFSET => new Tag(
                [
                    SpecRule::TAG_NAME => Element::FEOFFSET,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DX,
                        ],
                        [
                            SpecRule::NAME => Attribute::DY,
                        ],
                        [
                            SpecRule::NAME => Attribute::IN,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'svg-core-attributes',
                        'svg-filter-primitive-attributes',
                        'svg-presentation-attributes',
                        'svg-style-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                    SpecRule::MANDATORY_ANCESTOR => Element::SVG,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            Element::FIELDSET => new Tag(
                [
                    SpecRule::TAG_NAME => Element::FIELDSET,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DISABLED,
                        ],
                        [
                            SpecRule::NAME => '[DISABLED]',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'name-attr',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::FIGCAPTION => new Tag(
                [
                    SpecRule::TAG_NAME => Element::FIGCAPTION,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::FIGURE => new Tag(
                [
                    SpecRule::TAG_NAME => Element::FIGURE,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::FILTER => new Tag(
                [
                    SpecRule::TAG_NAME => Element::FILTER,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::EXTERNALRESOURCESREQUIRED,
                        ],
                        [
                            SpecRule::NAME => Attribute::FILTERRES,
                        ],
                        [
                            SpecRule::NAME => Attribute::FILTERUNITS,
                        ],
                        [
                            SpecRule::NAME => Attribute::HEIGHT,
                        ],
                        [
                            SpecRule::NAME => Attribute::PRIMITIVEUNITS,
                        ],
                        [
                            SpecRule::NAME => Attribute::WIDTH,
                        ],
                        [
                            SpecRule::NAME => Attribute::X,
                        ],
                        [
                            SpecRule::NAME => Attribute::Y,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'svg-core-attributes',
                        'svg-presentation-attributes',
                        'svg-style-attr',
                        'svg-xlink-attributes',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                    SpecRule::MANDATORY_ANCESTOR => Element::SVG,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            Element::FOOTER => new Tag(
                [
                    SpecRule::TAG_NAME => Element::FOOTER,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            'FORM DIV [submit-error]' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::DIV,
                    SpecRule::SPEC_NAME => 'FORM DIV [submit-error]',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ALIGN,
                        ],
                        [
                            SpecRule::NAME => Attribute::SUBMIT_ERROR,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::MANDATORY_ANCESTOR => Element::FORM,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            'FORM DIV [submit-error][template]' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::DIV,
                    SpecRule::SPEC_NAME => 'FORM DIV [submit-error][template]',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ALIGN,
                        ],
                        [
                            SpecRule::NAME => Attribute::SUBMIT_ERROR,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::TEMPLATE,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::MANDATORY_ANCESTOR => Element::FORM,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            'FORM DIV [submit-success]' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::DIV,
                    SpecRule::SPEC_NAME => 'FORM DIV [submit-success]',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ALIGN,
                        ],
                        [
                            SpecRule::NAME => Attribute::SUBMIT_SUCCESS,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::MANDATORY_ANCESTOR => Element::FORM,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            'FORM DIV [submit-success][template]' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::DIV,
                    SpecRule::SPEC_NAME => 'FORM DIV [submit-success][template]',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ALIGN,
                        ],
                        [
                            SpecRule::NAME => Attribute::SUBMIT_SUCCESS,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::TEMPLATE,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::MANDATORY_ANCESTOR => Element::FORM,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            'FORM DIV [submitting]' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::DIV,
                    SpecRule::SPEC_NAME => 'FORM DIV [submitting]',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ALIGN,
                        ],
                        [
                            SpecRule::NAME => Attribute::SUBMITTING,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::MANDATORY_ANCESTOR => Element::FORM,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            'FORM DIV [submitting][template]' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::DIV,
                    SpecRule::SPEC_NAME => 'FORM DIV [submitting][template]',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ALIGN,
                        ],
                        [
                            SpecRule::NAME => Attribute::SUBMITTING,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::TEMPLATE,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::MANDATORY_ANCESTOR => Element::FORM,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            'FORM DIV [verify-error]' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::DIV,
                    SpecRule::SPEC_NAME => 'FORM DIV [verify-error]',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ALIGN,
                        ],
                        [
                            SpecRule::NAME => Attribute::VERIFY_ERROR,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::MANDATORY_ANCESTOR => Element::FORM,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            'FORM DIV [verify-error][template]' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::DIV,
                    SpecRule::SPEC_NAME => 'FORM DIV [verify-error][template]',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ALIGN,
                        ],
                        [
                            SpecRule::NAME => Attribute::VERIFY_ERROR,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::TEMPLATE,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::MANDATORY_ANCESTOR => Element::FORM,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            'FORM [method=GET]' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::FORM,
                    SpecRule::SPEC_NAME => 'FORM [method=GET]',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ACCEPT,
                        ],
                        [
                            SpecRule::NAME => Attribute::ACCEPT_CHARSET,
                        ],
                        [
                            SpecRule::NAME => Attribute::ACTION,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'https',
                                ],
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::ACTION_XHR,
                            SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'https',
                                ],
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::AUTOCOMPLETE,
                        ],
                        [
                            SpecRule::NAME => Attribute::CUSTOM_VALIDATION_REPORTING,
                            SpecRule::VALUE => [
                                'as-you-go',
                                'interact-and-submit',
                                'show-all-on-submit',
                                'show-first-on-submit',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::ENCTYPE,
                        ],
                        [
                            SpecRule::NAME => Attribute::METHOD,
                            SpecRule::VALUE_CASEI => [
                                'get',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::NOVALIDATE,
                        ],
                        [
                            SpecRule::NAME => Attribute::TARGET,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_CASEI => [
                                '_blank',
                                '_top',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::VERIFY_XHR,
                            SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'https',
                                ],
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'form-name-attr',
                    ],
                    SpecRule::DISALLOWED_ANCESTOR => [
                        'AMP-APP-BANNER',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-form',
                    ],
                ]
            ),
            'FORM [method=GET] (AMP4EMAIL)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::FORM,
                    SpecRule::SPEC_NAME => 'FORM [method=GET] (AMP4EMAIL)',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ACCEPT,
                        ],
                        [
                            SpecRule::NAME => Attribute::ACCEPT_CHARSET,
                        ],
                        [
                            SpecRule::NAME => Attribute::ACTION_XHR,
                            SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin|{{|}}',
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'https',
                                ],
                                SpecRule::ALLOW_RELATIVE => false,
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::AUTOCOMPLETE,
                        ],
                        [
                            SpecRule::NAME => Attribute::CUSTOM_VALIDATION_REPORTING,
                            SpecRule::VALUE => [
                                'as-you-go',
                                'interact-and-submit',
                                'show-all-on-submit',
                                'show-first-on-submit',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::ENCTYPE,
                        ],
                        [
                            SpecRule::NAME => Attribute::METHOD,
                            SpecRule::VALUE_CASEI => [
                                'get',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::NOVALIDATE,
                        ],
                        [
                            SpecRule::NAME => Attribute::XSSI_PREFIX,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP4EMAIL,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-form',
                    ],
                ]
            ),
            'FORM [method=POST]' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::FORM,
                    SpecRule::SPEC_NAME => 'FORM [method=POST]',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ACCEPT,
                        ],
                        [
                            SpecRule::NAME => Attribute::ACCEPT_CHARSET,
                        ],
                        [
                            SpecRule::NAME => Attribute::ACTION_XHR,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'https',
                                ],
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::AUTOCOMPLETE,
                        ],
                        [
                            SpecRule::NAME => Attribute::CUSTOM_VALIDATION_REPORTING,
                            SpecRule::VALUE => [
                                'as-you-go',
                                'interact-and-submit',
                                'show-all-on-submit',
                                'show-first-on-submit',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::ENCTYPE,
                        ],
                        [
                            SpecRule::NAME => Attribute::METHOD,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'post',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::NOVALIDATE,
                        ],
                        [
                            SpecRule::NAME => Attribute::TARGET,
                            SpecRule::VALUE_CASEI => [
                                '_blank',
                                '_top',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::VERIFY_XHR,
                            SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'https',
                                ],
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'form-name-attr',
                    ],
                    SpecRule::DISALLOWED_ANCESTOR => [
                        'AMP-APP-BANNER',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-form',
                    ],
                ]
            ),
            'FORM [method=POST] (AMP4EMAIL)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::FORM,
                    SpecRule::SPEC_NAME => 'FORM [method=POST] (AMP4EMAIL)',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ACCEPT,
                        ],
                        [
                            SpecRule::NAME => Attribute::ACCEPT_CHARSET,
                        ],
                        [
                            SpecRule::NAME => Attribute::ACTION_XHR,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin|{{|}}',
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'https',
                                ],
                                SpecRule::ALLOW_RELATIVE => false,
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::AUTOCOMPLETE,
                        ],
                        [
                            SpecRule::NAME => Attribute::CUSTOM_VALIDATION_REPORTING,
                            SpecRule::VALUE => [
                                'as-you-go',
                                'interact-and-submit',
                                'show-all-on-submit',
                                'show-first-on-submit',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::ENCTYPE,
                        ],
                        [
                            SpecRule::NAME => Attribute::METHOD,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'post',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::NOVALIDATE,
                        ],
                        [
                            SpecRule::NAME => Attribute::XSSI_PREFIX,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP4EMAIL,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-form',
                    ],
                ]
            ),
            Element::G => new Tag(
                [
                    SpecRule::TAG_NAME => Element::G,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::EXTERNALRESOURCESREQUIRED,
                        ],
                        [
                            SpecRule::NAME => Attribute::TRANSFORM,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'svg-conditional-processing-attributes',
                        'svg-core-attributes',
                        'svg-presentation-attributes',
                        'svg-style-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                    SpecRule::MANDATORY_ANCESTOR => Element::SVG,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            Element::GLYPH => new Tag(
                [
                    SpecRule::TAG_NAME => Element::GLYPH,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ARABIC_FORM,
                        ],
                        [
                            SpecRule::NAME => Attribute::D,
                        ],
                        [
                            SpecRule::NAME => Attribute::GLYPH_NAME,
                        ],
                        [
                            SpecRule::NAME => Attribute::HORIZ_ADV_X,
                        ],
                        [
                            SpecRule::NAME => Attribute::ORIENTATION,
                        ],
                        [
                            SpecRule::NAME => Attribute::UNICODE,
                        ],
                        [
                            SpecRule::NAME => Attribute::VERT_ADV_Y,
                        ],
                        [
                            SpecRule::NAME => Attribute::VERT_ORIGIN_X,
                        ],
                        [
                            SpecRule::NAME => Attribute::VERT_ORIGIN_Y,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'svg-core-attributes',
                        'svg-presentation-attributes',
                        'svg-style-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                    SpecRule::MANDATORY_ANCESTOR => Element::SVG,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            Element::GLYPHREF => new Tag(
                [
                    SpecRule::TAG_NAME => Element::GLYPHREF,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DX,
                        ],
                        [
                            SpecRule::NAME => Attribute::DY,
                        ],
                        [
                            SpecRule::NAME => Attribute::FORMAT,
                        ],
                        [
                            SpecRule::NAME => Attribute::GLYPHREF,
                        ],
                        [
                            SpecRule::NAME => Attribute::X,
                        ],
                        [
                            SpecRule::NAME => Attribute::Y,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'svg-core-attributes',
                        'svg-presentation-attributes',
                        'svg-style-attr',
                        'svg-xlink-attributes',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                    SpecRule::MANDATORY_ANCESTOR => Element::SVG,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            Element::H1 => new Tag(
                [
                    SpecRule::TAG_NAME => Element::H1,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ALIGN,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::H2 => new Tag(
                [
                    SpecRule::TAG_NAME => Element::H2,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ALIGN,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            'h2 amp-nested-menu' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::H2,
                    SpecRule::SPEC_NAME => 'h2 amp-nested-menu',
                    SpecRule::ATTR_LISTS => [
                        'amp-nested-menu-actions',
                    ],
                    SpecRule::MANDATORY_ANCESTOR => Extension::NESTED_MENU,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            Element::H3 => new Tag(
                [
                    SpecRule::TAG_NAME => Element::H3,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ALIGN,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            'h3 amp-nested-menu' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::H3,
                    SpecRule::SPEC_NAME => 'h3 amp-nested-menu',
                    SpecRule::ATTR_LISTS => [
                        'amp-nested-menu-actions',
                    ],
                    SpecRule::MANDATORY_ANCESTOR => Extension::NESTED_MENU,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            Element::H4 => new Tag(
                [
                    SpecRule::TAG_NAME => Element::H4,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ALIGN,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            'h4 amp-nested-menu' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::H4,
                    SpecRule::SPEC_NAME => 'h4 amp-nested-menu',
                    SpecRule::ATTR_LISTS => [
                        'amp-nested-menu-actions',
                    ],
                    SpecRule::MANDATORY_ANCESTOR => Extension::NESTED_MENU,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            Element::H5 => new Tag(
                [
                    SpecRule::TAG_NAME => Element::H5,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ALIGN,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            'h5 amp-nested-menu' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::H5,
                    SpecRule::SPEC_NAME => 'h5 amp-nested-menu',
                    SpecRule::ATTR_LISTS => [
                        'amp-nested-menu-actions',
                    ],
                    SpecRule::MANDATORY_ANCESTOR => Extension::NESTED_MENU,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            Element::H6 => new Tag(
                [
                    SpecRule::TAG_NAME => Element::H6,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ALIGN,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            'h6 amp-nested-menu' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::H6,
                    SpecRule::SPEC_NAME => 'h6 amp-nested-menu',
                    SpecRule::ATTR_LISTS => [
                        'amp-nested-menu-actions',
                    ],
                    SpecRule::MANDATORY_ANCESTOR => Extension::NESTED_MENU,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            Element::HEAD => new Tag(
                [
                    SpecRule::TAG_NAME => Element::HEAD,
                    SpecRule::MANDATORY => true,
                    SpecRule::UNIQUE => true,
                    SpecRule::MANDATORY_PARENT => Element::HTML,
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#required-markup',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            'head > style[amp-boilerplate]' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::STYLE,
                    SpecRule::SPEC_NAME => 'head > style[amp-boilerplate]',
                    SpecRule::MANDATORY => true,
                    SpecRule::UNIQUE => true,
                    SpecRule::MANDATORY_PARENT => Element::HEAD,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::AMP_BOILERPLATE,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                '',
                            ],
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_PARENT_DISPATCH',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'nonce-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amp-boilerplate/?format=websites',
                    SpecRule::CDATA => [
                        SpecRule::CDATA_REGEX => '\s*body\s*{\s*-webkit-animation:\s*-amp-start\s+8s\s+steps\(1,\s*end\)\s+0s\s+1\s+normal\s+both;\s*-moz-animation:\s*-amp-start\s+8s\s+steps\s*\(1\s*,\s*end\s*\)\s+0s\s+1\s+normal\s+both;\s*-ms-animation:\s*-amp-start\s+8s\s+steps\s*\(1\s*,\s*end\s*\)\s+0s\s+1\s+normal\s+both;\s*animation:\s*-amp-start\s+8s\s+steps\(1,\s*end\)\s+0s\s+1\s+normal\s+both;?\s*}\s*@-webkit-keyframes\s+-amp-start\s*{\s*from\s*{\s*visibility:\s*hidden;?\s*}\s*to\s*{\s*visibility:\s*visible;?\s*}\s*}\s*@-moz-keyframes\s+-amp-start\s*{\s*from\s*{\s*visibility:\s*hidden;?\s*}\s*to\s*{\s*visibility:\s*visible;?\s*}\s*}\s*@-ms-keyframes\s+-amp-start\s*{\s*from\s*{\s*visibility:\s*hidden;?\s*}\s*to\s*{\s*visibility:\s*visible;?\s*}\s*}\s*@-o-keyframes\s+-amp-start\s*{\s*from\s*{\s*visibility:\s*hidden;?\s*}\s*to\s*{\s*visibility:\s*visible;?\s*}\s*}\s*@keyframes\s+-amp-start\s*{\s*from\s*{\s*visibility:\s*hidden;?\s*}\s*to\s*{\s*visibility:\s*visible;?\s*}\s*}\s*',
                        SpecRule::DOC_CSS_BYTES => false,
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::DISABLED_BY => [
                        'transformed',
                    ],
                    SpecRule::DESCRIPTIVE_NAME => 'head > style[amp-boilerplate]',
                ]
            ),
            'head > style[amp-boilerplate] (transformed)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::STYLE,
                    SpecRule::SPEC_NAME => 'head > style[amp-boilerplate] (transformed)',
                    SpecRule::UNIQUE => true,
                    SpecRule::MANDATORY_PARENT => Element::HEAD,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::AMP_BOILERPLATE,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                '',
                            ],
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_PARENT_DISPATCH',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'nonce-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amp-boilerplate/?format=websites',
                    SpecRule::CDATA => [
                        SpecRule::CDATA_REGEX => '\s*body\s*{\s*-webkit-animation:\s*-amp-start\s+8s\s+steps\(1,\s*end\)\s+0s\s+1\s+normal\s+both;\s*-moz-animation:\s*-amp-start\s+8s\s+steps\s*\(1\s*,\s*end\s*\)\s+0s\s+1\s+normal\s+both;\s*-ms-animation:\s*-amp-start\s+8s\s+steps\s*\(1\s*,\s*end\s*\)\s+0s\s+1\s+normal\s+both;\s*animation:\s*-amp-start\s+8s\s+steps\(1,\s*end\)\s+0s\s+1\s+normal\s+both;?\s*}\s*@-webkit-keyframes\s+-amp-start\s*{\s*from\s*{\s*visibility:\s*hidden;?\s*}\s*to\s*{\s*visibility:\s*visible;?\s*}\s*}\s*@-moz-keyframes\s+-amp-start\s*{\s*from\s*{\s*visibility:\s*hidden;?\s*}\s*to\s*{\s*visibility:\s*visible;?\s*}\s*}\s*@-ms-keyframes\s+-amp-start\s*{\s*from\s*{\s*visibility:\s*hidden;?\s*}\s*to\s*{\s*visibility:\s*visible;?\s*}\s*}\s*@-o-keyframes\s+-amp-start\s*{\s*from\s*{\s*visibility:\s*hidden;?\s*}\s*to\s*{\s*visibility:\s*visible;?\s*}\s*}\s*@keyframes\s+-amp-start\s*{\s*from\s*{\s*visibility:\s*hidden;?\s*}\s*to\s*{\s*visibility:\s*visible;?\s*}\s*}\s*',
                        SpecRule::DOC_CSS_BYTES => false,
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::ENABLED_BY => [
                        'transformed',
                    ],
                    SpecRule::DESCRIPTIVE_NAME => 'head > style[amp-boilerplate]',
                ]
            ),
            'head > style[amp4ads-boilerplate]' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::STYLE,
                    SpecRule::SPEC_NAME => 'head > style[amp4ads-boilerplate]',
                    SpecRule::MANDATORY => true,
                    SpecRule::UNIQUE => true,
                    SpecRule::MANDATORY_PARENT => Element::HEAD,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::AMP4ADS_BOILERPLATE,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                '',
                            ],
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_PARENT_DISPATCH',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'nonce-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/a4a_spec/?format=ads#boilerplate',
                    SpecRule::CDATA => [
                        SpecRule::CDATA_REGEX => '\s*body\s*{\s*visibility:\s*hidden;?\s*}\s*',
                        SpecRule::DOC_CSS_BYTES => false,
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP4ADS,
                    ],
                    SpecRule::DESCRIPTIVE_NAME => 'head > style[amp4ads-boilerplate]',
                ]
            ),
            'head > style[amp4email-boilerplate]' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::STYLE,
                    SpecRule::SPEC_NAME => 'head > style[amp4email-boilerplate]',
                    SpecRule::MANDATORY => true,
                    SpecRule::UNIQUE => true,
                    SpecRule::MANDATORY_PARENT => Element::HEAD,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::AMP4EMAIL_BOILERPLATE,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                '',
                            ],
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_PARENT_DISPATCH',
                        ],
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/email-spec/amp-email-format/?format=email#required-markup',
                    SpecRule::CDATA => [
                        SpecRule::CDATA_REGEX => '\s*body\s*{\s*visibility:\s*hidden;?\s*}\s*',
                        SpecRule::DOC_CSS_BYTES => false,
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP4EMAIL,
                    ],
                    SpecRule::DESCRIPTIVE_NAME => 'head > style[amp4email-boilerplate]',
                ]
            ),
            Element::HEADER => new Tag(
                [
                    SpecRule::TAG_NAME => Element::HEADER,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::HGROUP => new Tag(
                [
                    SpecRule::TAG_NAME => Element::HGROUP,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            Element::HKERN => new Tag(
                [
                    SpecRule::TAG_NAME => Element::HKERN,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::G1,
                        ],
                        [
                            SpecRule::NAME => Attribute::G2,
                        ],
                        [
                            SpecRule::NAME => Attribute::K,
                        ],
                        [
                            SpecRule::NAME => Attribute::U1,
                        ],
                        [
                            SpecRule::NAME => Attribute::U2,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'svg-core-attributes',
                        'svg-style-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                    SpecRule::MANDATORY_ANCESTOR => Element::SVG,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            Element::HR => new Tag(
                [
                    SpecRule::TAG_NAME => Element::HR,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::HTML => new Tag(
                [
                    SpecRule::TAG_NAME => Element::HTML,
                    SpecRule::MANDATORY => true,
                    SpecRule::UNIQUE => true,
                    SpecRule::MANDATORY_PARENT => Element::_DOCTYPE,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DATA_AMP_AUTOCOMPLETE_OPT_IN,
                            SpecRule::VALUE => [
                                'false',
                            ],
                            SpecRule::DISALLOWED_VALUE_REGEX => 'false',
                        ],
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#required-markup',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                    SpecRule::DISABLED_BY => [
                        'transformed',
                    ],
                ]
            ),
            'html (transformed)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::HTML,
                    SpecRule::SPEC_NAME => 'html (transformed)',
                    SpecRule::MANDATORY => true,
                    SpecRule::UNIQUE => true,
                    SpecRule::MANDATORY_PARENT => Element::_DOCTYPE,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::I_AMPHTML_LAYOUT,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::I_AMPHTML_NO_BOILERPLATE,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#required-markup',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::ENABLED_BY => [
                        'transformed',
                    ],
                ]
            ),
            'html doctype' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::_DOCTYPE,
                    SpecRule::SPEC_NAME => 'html doctype',
                    SpecRule::MANDATORY => true,
                    SpecRule::UNIQUE => true,
                    SpecRule::MANDATORY_PARENT => '$ROOT',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::HTML,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::LANG,
                        ],
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#required-markup',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4EMAIL,
                    ],
                    SpecRule::EXPLICIT_ATTRS_ONLY => true,
                    SpecRule::DESCRIPTIVE_NAME => 'html !doctype',
                ]
            ),
            'html doctype (AMP4ADS)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::_DOCTYPE,
                    SpecRule::SPEC_NAME => 'html doctype (AMP4ADS)',
                    SpecRule::MANDATORY => true,
                    SpecRule::UNIQUE => true,
                    SpecRule::MANDATORY_PARENT => '$ROOT',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::HTML,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#required-markup',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP4ADS,
                    ],
                    SpecRule::DESCRIPTIVE_NAME => 'html !doctype',
                ]
            ),
            Element::I => new Tag(
                [
                    SpecRule::TAG_NAME => Element::I,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            'I-AMPHTML-SIZER-INTRINSIC' => new Tag(
                [
                    SpecRule::TAG_NAME => Internal::SIZER,
                    SpecRule::SPEC_NAME => 'I-AMPHTML-SIZER-INTRINSIC',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::CLASS,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                'i-amphtml-sizer',
                            ],
                            SpecRule::DISPATCH_KEY => 'NAME_DISPATCH',
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXPLICIT_ATTRS_ONLY => true,
                    SpecRule::ENABLED_BY => [
                        'transformed',
                    ],
                ]
            ),
            'I-AMPHTML-SIZER-RESPONSIVE' => new Tag(
                [
                    SpecRule::TAG_NAME => Internal::SIZER,
                    SpecRule::SPEC_NAME => 'I-AMPHTML-SIZER-RESPONSIVE',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::STYLE,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISALLOWED_VALUE_REGEX => '!\s*important',
                            SpecRule::DISPATCH_KEY => 'NAME_DISPATCH',
                            SpecRule::CSS_DECLARATION => [
                                [
                                    'name' => 'display',
                                    'valueCasei' => [
                                        'block',
                                    ],
                                ],
                                [
                                    'name' => 'padding-top',
                                ],
                            ],
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXPLICIT_ATTRS_ONLY => true,
                    SpecRule::ENABLED_BY => [
                        'transformed',
                    ],
                ]
            ),
            Element::IFRAME => new Tag(
                [
                    SpecRule::TAG_NAME => Element::IFRAME,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::FRAMEBORDER,
                            SpecRule::VALUE => [
                                '0',
                                '1',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::HEIGHT,
                        ],
                        [
                            SpecRule::NAME => Attribute::REFERRERPOLICY,
                        ],
                        [
                            SpecRule::NAME => Attribute::RESIZABLE,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::SANDBOX,
                        ],
                        [
                            SpecRule::NAME => Attribute::SCROLLING,
                            SpecRule::VALUE => [
                                'auto',
                                'yes',
                                'no',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::SRC,
                            SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                            SpecRule::MANDATORY_ONEOF => '[\'src\', \'srcdoc\']',
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'data',
                                    'https',
                                ],
                                SpecRule::ALLOW_RELATIVE => false,
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::SRCDOC,
                            SpecRule::MANDATORY_ONEOF => '[\'src\', \'srcdoc\']',
                        ],
                        [
                            SpecRule::NAME => Attribute::WIDTH,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'name-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-iframe/',
                    SpecRule::MANDATORY_ANCESTOR => Element::NOSCRIPT,
                    SpecRule::MANDATORY_ANCESTOR_SUGGESTED_ALTERNATIVE => Extension::IFRAME,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            Element::IMAGE => new Tag(
                [
                    SpecRule::TAG_NAME => Element::IMAGE,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::EXTERNALRESOURCESREQUIRED,
                        ],
                        [
                            SpecRule::NAME => Attribute::HEIGHT,
                        ],
                        [
                            SpecRule::NAME => Attribute::PRESERVEASPECTRATIO,
                        ],
                        [
                            SpecRule::NAME => Attribute::TRANSFORM,
                        ],
                        [
                            SpecRule::NAME => Attribute::WIDTH,
                        ],
                        [
                            SpecRule::NAME => Attribute::X,
                        ],
                        [
                            SpecRule::NAME => Attribute::XLINK_ACTUATE,
                        ],
                        [
                            SpecRule::NAME => Attribute::XLINK_ARCROLE,
                        ],
                        [
                            SpecRule::NAME => Attribute::XLINK_HREF,
                            SpecRule::ALTERNATIVE_NAMES => [
                                'href',
                            ],
                            SpecRule::DISALLOWED_VALUE_REGEX => '(^|\s)data:image\/svg\+xml',
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'data',
                                    'http',
                                    'https',
                                ],
                                SpecRule::ALLOW_EMPTY => false,
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::XLINK_ROLE,
                        ],
                        [
                            SpecRule::NAME => Attribute::XLINK_SHOW,
                        ],
                        [
                            SpecRule::NAME => Attribute::XLINK_TITLE,
                        ],
                        [
                            SpecRule::NAME => Attribute::XLINK_TYPE,
                        ],
                        [
                            SpecRule::NAME => Attribute::Y,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'svg-conditional-processing-attributes',
                        'svg-core-attributes',
                        'svg-presentation-attributes',
                        'svg-style-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                    SpecRule::MANDATORY_ANCESTOR => Element::SVG,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            'IMG-I-AMPHTML-INTRINSIC-SIZER' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::IMG,
                    SpecRule::SPEC_NAME => 'IMG-I-AMPHTML-INTRINSIC-SIZER',
                    SpecRule::MANDATORY_PARENT => Internal::SIZER_INTRINSIC,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ALT,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::ARIA_HIDDEN,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                'true',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::CLASS,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                'i-amphtml-intrinsic-sizer',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::ROLE,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                'presentation',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::SRC,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_REGEX => 'data:image\/svg\+xml;charset=utf-8,\s*<svg height="\d+(\.\d+)?" width="\d+(\.\d+)?" xmlns="http:\/\/www\.w3\.org\/2000\/svg" version="1\.1"\/>|data:image\/svg\+xml;charset=utf-8,\s*<svg height=\'\d+(\.\d+)?\' width=\'\d+(\.\d+)?\' xmlns=\'http:\/\/www\.w3\.org\/2000\/svg\' version=\'1\.1\'\/>|data:image\/svg\+xml;base64,[a-zA-Z0-9+\/=]+',
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::ENABLED_BY => [
                        'transformed',
                    ],
                ]
            ),
            Element::INPUT => new Tag(
                [
                    SpecRule::TAG_NAME => Element::INPUT,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::NO_VERIFY,
                            SpecRule::VALUE => [
                                '',
                            ],
                            SpecRule::DISABLED_BY => [
                                'amp4email',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::DISALLOWED_VALUE_REGEX => '(^|\s)(file|image|password|)(\s|$)',
                        ],
                        [
                            SpecRule::NAME => '[TYPE]',
                            SpecRule::DISABLED_BY => [
                                'amp4email',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'input-common-attr',
                        'name-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-form/',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            'input [mask=date-dd-mm-yyyy]' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::INPUT,
                    SpecRule::SPEC_NAME => 'input [mask=date-dd-mm-yyyy]',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::MASK,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                'date-dd-mm-yyyy',
                            ],
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'amp-inputmask-common-attr',
                        'input-common-attr',
                        'name-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-inputmask/',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-inputmask',
                    ],
                ]
            ),
            'input [mask=date-mm-dd-yyyy]' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::INPUT,
                    SpecRule::SPEC_NAME => 'input [mask=date-mm-dd-yyyy]',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::MASK,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                'date-mm-dd-yyyy',
                            ],
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'amp-inputmask-common-attr',
                        'input-common-attr',
                        'name-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-inputmask/',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-inputmask',
                    ],
                ]
            ),
            'input [mask=date-mm-yy]' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::INPUT,
                    SpecRule::SPEC_NAME => 'input [mask=date-mm-yy]',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::MASK,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                'date-mm-yy',
                            ],
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'amp-inputmask-common-attr',
                        'input-common-attr',
                        'name-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-inputmask/',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-inputmask',
                    ],
                ]
            ),
            'input [mask=date-yyyy-mm-dd]' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::INPUT,
                    SpecRule::SPEC_NAME => 'input [mask=date-yyyy-mm-dd]',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::MASK,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                'date-yyyy-mm-dd',
                            ],
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'amp-inputmask-common-attr',
                        'input-common-attr',
                        'name-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-inputmask/',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-inputmask',
                    ],
                ]
            ),
            'input [mask=payment-card]' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::INPUT,
                    SpecRule::SPEC_NAME => 'input [mask=payment-card]',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::MASK,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                'payment-card',
                            ],
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'amp-inputmask-common-attr',
                        'input-common-attr',
                        'name-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-inputmask/',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-inputmask',
                    ],
                ]
            ),
            'input [mask] (custom mask)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::INPUT,
                    SpecRule::SPEC_NAME => 'input [mask] (custom mask)',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::MASK,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISALLOWED_VALUE_REGEX => '(payment-card|date-dd-mm-yyyy|date-mm-dd-yyyy|date-mm-yy|date-yyyy-mm-dd)',
                            SpecRule::DISPATCH_KEY => 'NAME_DISPATCH',
                        ],
                        [
                            SpecRule::NAME => Attribute::MASK_TRIM_ZEROS,
                            SpecRule::VALUE_REGEX => '\d+',
                        ],
                        [
                            SpecRule::NAME => '[TYPE]',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'amp-inputmask-common-attr',
                        'input-common-attr',
                        'name-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-inputmask/',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-inputmask',
                    ],
                ]
            ),
            'INPUT [type=file]' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::INPUT,
                    SpecRule::SPEC_NAME => 'INPUT [type=file]',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::NO_VERIFY,
                            SpecRule::VALUE => [
                                '',
                            ],
                            SpecRule::DISABLED_BY => [
                                'amp4email',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'file',
                            ],
                        ],
                        [
                            SpecRule::NAME => '[TYPE]',
                            SpecRule::DISABLED_BY => [
                                'amp4email',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'input-common-attr',
                        'name-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-form/',
                    SpecRule::MANDATORY_ANCESTOR => 'FORM [method=POST]',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            'INPUT [type=password]' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::INPUT,
                    SpecRule::SPEC_NAME => 'INPUT [type=password]',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'password',
                            ],
                        ],
                        [
                            SpecRule::NAME => '[TYPE]',
                            SpecRule::DISABLED_BY => [
                                'amp4email',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'input-common-attr',
                        'name-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-form/',
                    SpecRule::MANDATORY_ANCESTOR => 'FORM [method=POST]',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            Element::INS => new Tag(
                [
                    SpecRule::TAG_NAME => Element::INS,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DATETIME,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'cite-attr',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::KBD => new Tag(
                [
                    SpecRule::TAG_NAME => Element::KBD,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::LABEL => new Tag(
                [
                    SpecRule::TAG_NAME => Element::LABEL,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::FOR_,
                        ],
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-form/',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::LEGEND => new Tag(
                [
                    SpecRule::TAG_NAME => Element::LEGEND,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::LI => new Tag(
                [
                    SpecRule::TAG_NAME => Element::LI,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::VALUE,
                            SpecRule::VALUE_REGEX => '[0-9]*',
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::LINE => new Tag(
                [
                    SpecRule::TAG_NAME => Element::LINE,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::EXTERNALRESOURCESREQUIRED,
                        ],
                        [
                            SpecRule::NAME => Attribute::SKETCH_TYPE,
                        ],
                        [
                            SpecRule::NAME => Attribute::TRANSFORM,
                        ],
                        [
                            SpecRule::NAME => Attribute::X1,
                        ],
                        [
                            SpecRule::NAME => Attribute::X2,
                        ],
                        [
                            SpecRule::NAME => Attribute::Y1,
                        ],
                        [
                            SpecRule::NAME => Attribute::Y2,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'svg-conditional-processing-attributes',
                        'svg-core-attributes',
                        'svg-presentation-attributes',
                        'svg-style-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                    SpecRule::MANDATORY_ANCESTOR => Element::SVG,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            Element::LINEARGRADIENT => new Tag(
                [
                    SpecRule::TAG_NAME => Element::LINEARGRADIENT,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::EXTERNALRESOURCESREQUIRED,
                        ],
                        [
                            SpecRule::NAME => Attribute::GRADIENTTRANSFORM,
                        ],
                        [
                            SpecRule::NAME => Attribute::GRADIENTUNITS,
                        ],
                        [
                            SpecRule::NAME => Attribute::SPREADMETHOD,
                        ],
                        [
                            SpecRule::NAME => Attribute::X1,
                        ],
                        [
                            SpecRule::NAME => Attribute::X2,
                        ],
                        [
                            SpecRule::NAME => Attribute::Y1,
                        ],
                        [
                            SpecRule::NAME => Attribute::Y2,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'svg-core-attributes',
                        'svg-presentation-attributes',
                        'svg-style-attr',
                        'svg-xlink-attributes',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                    SpecRule::MANDATORY_ANCESTOR => Element::SVG,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            'lineargradient > stop' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::STOP,
                    SpecRule::SPEC_NAME => 'lineargradient > stop',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::OFFSET,
                        ],
                        [
                            SpecRule::NAME => Attribute::STOP_COLOR,
                        ],
                        [
                            SpecRule::NAME => Attribute::STOP_OPACITY,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'svg-style-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                    SpecRule::MANDATORY_ANCESTOR => Element::LINEARGRADIENT,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            'link itemprop=' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::LINK,
                    SpecRule::SPEC_NAME => 'link itemprop=',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::HREF,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::ITEMPROP,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'common-link-attrs',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                    SpecRule::DESCRIPTIVE_NAME => 'link itemprop=',
                ]
            ),
            'link itemprop=sameAs' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::LINK,
                    SpecRule::SPEC_NAME => 'link itemprop=sameAs',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::HREF,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::ITEMPROP,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'sameas',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'common-link-attrs',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                    SpecRule::DESCRIPTIVE_NAME => 'link itemprop=sameAs',
                ]
            ),
            'link property=' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::LINK,
                    SpecRule::SPEC_NAME => 'link property=',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::HREF,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::PROPERTY,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'common-link-attrs',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                    SpecRule::DESCRIPTIVE_NAME => 'link property=',
                ]
            ),
            'link rel=' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::LINK,
                    SpecRule::SPEC_NAME => 'link rel=',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::HREF,
                        ],
                        [
                            SpecRule::NAME => Attribute::REL,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISALLOWED_VALUE_REGEX => '(^|\s)(canonical|components|import|manifest|preload|serviceworker|stylesheet|subresource)(\s|$)',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'common-link-attrs',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                    SpecRule::DISALLOWED_ANCESTOR => [
                        'TEMPLATE',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            'link rel=canonical' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::LINK,
                    SpecRule::SPEC_NAME => 'link rel=canonical',
                    SpecRule::MANDATORY => true,
                    SpecRule::UNIQUE => true,
                    SpecRule::MANDATORY_PARENT => Element::HEAD,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::HREF,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'http',
                                    'https',
                                ],
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::REL,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'canonical',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'common-link-attrs',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#required-markup',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::DESCRIPTIVE_NAME => 'link rel=canonical',
                ]
            ),
            'link rel=manifest' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::LINK,
                    SpecRule::SPEC_NAME => 'link rel=manifest',
                    SpecRule::MANDATORY_PARENT => Element::HEAD,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::HREF,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'https',
                                ],
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::REL,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'manifest',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'common-link-attrs',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                    SpecRule::SATISFIES => [
                        'amp-app-banner data source',
                    ],
                    SpecRule::DESCRIPTIVE_NAME => 'link rel=manifest',
                ]
            ),
            'link rel=preload' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::LINK,
                    SpecRule::SPEC_NAME => 'link rel=preload',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::AS_,
                        ],
                        [
                            SpecRule::NAME => Attribute::HREF,
                        ],
                        [
                            SpecRule::NAME => Attribute::REL,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'preload',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::IMAGESRCSET,
                            SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'http',
                                    'https',
                                ],
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::IMAGESIZES,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'common-link-attrs',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                    SpecRule::DISALLOWED_ANCESTOR => [
                        'TEMPLATE',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                    SpecRule::DESCRIPTIVE_NAME => 'link rel=preload',
                ]
            ),
            'link rel=stylesheet for fonts' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::LINK,
                    SpecRule::SPEC_NAME => 'link rel=stylesheet for fonts',
                    SpecRule::MANDATORY_PARENT => Element::HEAD,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ASYNC,
                        ],
                        [
                            SpecRule::NAME => Attribute::CROSSORIGIN,
                        ],
                        [
                            SpecRule::NAME => Attribute::HREF,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_REGEX => 'https://cdn\.materialdesignicons\.com/([0-9]+\.?)+/css/materialdesignicons\.min\.css|https://cloud\.typography\.com/[0-9]*/[0-9]*/css/fonts\.css|https://fast\.fonts\.net/.*|https://fonts\.googleapis\.com/css2?\?.*|https://fonts\.googleapis\.com/icon\?.*|https://fonts\.googleapis\.com/earlyaccess/.*\.css|https://maxcdn\.bootstrapcdn\.com/font-awesome/([0-9]+\.?)+/css/font-awesome\.min\.css(\?.*)?|https://(use|pro)\.fontawesome\.com/releases/v([0-9]+\.?)+/css/[0-9a-zA-Z-]+\.css|https://(use|pro)\.fontawesome\.com/[0-9a-zA-Z-]+\.css|https://use\.typekit\.net/[\w\p{L}\p{N}_]+\.css',
                        ],
                        [
                            SpecRule::NAME => Attribute::INTEGRITY,
                        ],
                        [
                            SpecRule::NAME => Attribute::MEDIA,
                        ],
                        [
                            SpecRule::NAME => Attribute::REL,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'stylesheet',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::VALUE_CASEI => [
                                'text/css',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'nonce-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#custom-fonts',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                    SpecRule::NAMED_ID => 'LINK_FONT_STYLESHEET',
                    SpecRule::DESCRIPTIVE_NAME => 'link rel=stylesheet for fonts',
                ]
            ),
            Element::LISTING => new Tag(
                [
                    SpecRule::TAG_NAME => Element::LISTING,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            Element::MAIN => new Tag(
                [
                    SpecRule::TAG_NAME => Element::MAIN,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::MARK => new Tag(
                [
                    SpecRule::TAG_NAME => Element::MARK,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::MARKER => new Tag(
                [
                    SpecRule::TAG_NAME => Element::MARKER,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::EXTERNALRESOURCESREQUIRED,
                        ],
                        [
                            SpecRule::NAME => Attribute::MARKERHEIGHT,
                        ],
                        [
                            SpecRule::NAME => Attribute::MARKERUNITS,
                        ],
                        [
                            SpecRule::NAME => Attribute::MARKERWIDTH,
                        ],
                        [
                            SpecRule::NAME => Attribute::ORIENT,
                        ],
                        [
                            SpecRule::NAME => Attribute::PRESERVEASPECTRATIO,
                        ],
                        [
                            SpecRule::NAME => Attribute::REFX,
                        ],
                        [
                            SpecRule::NAME => Attribute::REFY,
                        ],
                        [
                            SpecRule::NAME => Attribute::TRANSFORM,
                        ],
                        [
                            SpecRule::NAME => Attribute::VIEWBOX,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'svg-core-attributes',
                        'svg-presentation-attributes',
                        'svg-style-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                    SpecRule::MANDATORY_ANCESTOR => Element::SVG,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            Element::MASK => new Tag(
                [
                    SpecRule::TAG_NAME => Element::MASK,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::EXTERNALRESOURCESREQUIRED,
                        ],
                        [
                            SpecRule::NAME => Attribute::HEIGHT,
                        ],
                        [
                            SpecRule::NAME => Attribute::MASKCONTENTUNITS,
                        ],
                        [
                            SpecRule::NAME => Attribute::MASKUNITS,
                        ],
                        [
                            SpecRule::NAME => Attribute::WIDTH,
                        ],
                        [
                            SpecRule::NAME => Attribute::X,
                        ],
                        [
                            SpecRule::NAME => Attribute::Y,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'svg-conditional-processing-attributes',
                        'svg-core-attributes',
                        'svg-presentation-attributes',
                        'svg-style-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                    SpecRule::MANDATORY_ANCESTOR => Element::SVG,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            'meta charset=utf-8' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::META,
                    SpecRule::SPEC_NAME => 'meta charset=utf-8',
                    SpecRule::MANDATORY => true,
                    SpecRule::UNIQUE => true,
                    SpecRule::MANDATORY_PARENT => Element::HEAD,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::CHARSET,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'utf-8',
                            ],
                        ],
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#required-markup',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                    SpecRule::DESCRIPTIVE_NAME => 'meta charset=utf-8',
                ]
            ),
            Element::METADATA => new Tag(
                [
                    SpecRule::TAG_NAME => Element::METADATA,
                    SpecRule::ATTR_LISTS => [
                        'svg-core-attributes',
                        'svg-style-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                    SpecRule::MANDATORY_ANCESTOR => Element::SVG,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            'meta http-equiv=content-language' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::META,
                    SpecRule::SPEC_NAME => 'meta http-equiv=content-language',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::CONTENT,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::HTTP_EQUIV,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'content-language',
                            ],
                        ],
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                    SpecRule::MANDATORY_ANCESTOR => Element::HEAD,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            'meta http-equiv=Content-Script-Type' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::META,
                    SpecRule::SPEC_NAME => 'meta http-equiv=Content-Script-Type',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::CONTENT,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_CASEI => [
                                'text/javascript',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::HTTP_EQUIV,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'content-script-type',
                            ],
                        ],
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                    SpecRule::MANDATORY_ANCESTOR => Element::HEAD,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            'meta http-equiv=Content-Style-Type' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::META,
                    SpecRule::SPEC_NAME => 'meta http-equiv=Content-Style-Type',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::CONTENT,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_CASEI => [
                                'text/css',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::HTTP_EQUIV,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'content-style-type',
                            ],
                        ],
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                    SpecRule::MANDATORY_ANCESTOR => Element::HEAD,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            'meta http-equiv=Content-Type' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::META,
                    SpecRule::SPEC_NAME => 'meta http-equiv=Content-Type',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::CONTENT,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_CASEI => [
                                'text/html; charset=utf-8',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::HTTP_EQUIV,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'content-type',
                            ],
                        ],
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                    SpecRule::MANDATORY_ANCESTOR => Element::HEAD,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            'meta http-equiv=imagetoolbar' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::META,
                    SpecRule::SPEC_NAME => 'meta http-equiv=imagetoolbar',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::CONTENT,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::HTTP_EQUIV,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'imagetoolbar',
                            ],
                        ],
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                    SpecRule::MANDATORY_ANCESTOR => Element::HEAD,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            'meta http-equiv=origin-trial' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::META,
                    SpecRule::SPEC_NAME => 'meta http-equiv=origin-trial',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::CONTENT,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::HTTP_EQUIV,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'origin-trial',
                            ],
                        ],
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                    SpecRule::MANDATORY_ANCESTOR => Element::HEAD,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            'meta http-equiv=pics-label' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::META,
                    SpecRule::SPEC_NAME => 'meta http-equiv=pics-label',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::CONTENT,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::HTTP_EQUIV,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'pics-label',
                            ],
                        ],
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                    SpecRule::MANDATORY_ANCESTOR => Element::HEAD,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            'meta http-equiv=resource-type' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::META,
                    SpecRule::SPEC_NAME => 'meta http-equiv=resource-type',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::CONTENT,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::HTTP_EQUIV,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'resource-type',
                            ],
                        ],
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                    SpecRule::MANDATORY_ANCESTOR => Element::HEAD,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            'meta http-equiv=x-dns-prefetch-control' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::META,
                    SpecRule::SPEC_NAME => 'meta http-equiv=x-dns-prefetch-control',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::CONTENT,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_CASEI => [
                                'off',
                                'on',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::HTTP_EQUIV,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'x-dns-prefetch-control',
                            ],
                        ],
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                    SpecRule::MANDATORY_ANCESTOR => Element::HEAD,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            'meta http-equiv=X-UA-Compatible' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::META,
                    SpecRule::SPEC_NAME => 'meta http-equiv=X-UA-Compatible',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::CONTENT,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_PROPERTIES => [
                                'properties' => [
                                    [
                                        'name' => 'ie',
                                        'value' => 'edge',
                                    ],
                                    [
                                        'name' => 'chrome',
                                        'value' => '1',
                                    ],
                                ],
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::HTTP_EQUIV,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'x-ua-compatible',
                            ],
                        ],
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                    SpecRule::MANDATORY_ANCESTOR => Element::HEAD,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                    SpecRule::DESCRIPTIVE_NAME => 'meta http-equiv=X-UA-Compatible',
                ]
            ),
            'meta name=amp-3p-iframe-src' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::META,
                    SpecRule::SPEC_NAME => 'meta name=amp-3p-iframe-src',
                    SpecRule::MANDATORY_PARENT => Element::HEAD,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::CONTENT,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'https',
                                ],
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::NAME,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'amp-3p-iframe-src',
                            ],
                        ],
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-ad/',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            'meta name=amp-ad-doubleclick-sra' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::META,
                    SpecRule::SPEC_NAME => 'meta name=amp-ad-doubleclick-sra',
                    SpecRule::MANDATORY_PARENT => Element::HEAD,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::NAME,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'amp-ad-doubleclick-sra',
                            ],
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            'meta name=amp-ad-enable-refresh' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::META,
                    SpecRule::SPEC_NAME => 'meta name=amp-ad-enable-refresh',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::CONTENT,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::NAME,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'amp-ad-enable-refresh',
                            ],
                        ],
                    ],
                    SpecRule::MANDATORY_ANCESTOR => Element::HEAD,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            'meta name=amp-consent-blocking' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::META,
                    SpecRule::SPEC_NAME => 'meta name=amp-consent-blocking',
                    SpecRule::UNIQUE => true,
                    SpecRule::MANDATORY_PARENT => Element::HEAD,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::CONTENT,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::NAME,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'amp-consent-blocking',
                            ],
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::SATISFIES => [
                        'meta name=amp-consent-blocking',
                    ],
                ]
            ),
            'meta name=amp-cta-landing-page-type' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::META,
                    SpecRule::SPEC_NAME => 'meta name=amp-cta-landing-page-type',
                    SpecRule::UNIQUE => true,
                    SpecRule::MANDATORY_PARENT => Element::HEAD,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::CONTENT,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_CASEI => [
                                'amp',
                                'nonamp',
                                'story',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::NAME,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'amp-cta-landing-page-type',
                            ],
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP4ADS,
                    ],
                ]
            ),
            'meta name=amp-cta-type' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::META,
                    SpecRule::SPEC_NAME => 'meta name=amp-cta-type',
                    SpecRule::UNIQUE => true,
                    SpecRule::MANDATORY_PARENT => Element::HEAD,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::CONTENT,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::NAME,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'amp-cta-type',
                            ],
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP4ADS,
                    ],
                ]
            ),
            'meta name=amp-cta-url' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::META,
                    SpecRule::SPEC_NAME => 'meta name=amp-cta-url',
                    SpecRule::UNIQUE => true,
                    SpecRule::MANDATORY_PARENT => Element::HEAD,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::CONTENT,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::NAME,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'amp-cta-url',
                            ],
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP4ADS,
                    ],
                ]
            ),
            'meta name=amp-experiment-token' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::META,
                    SpecRule::SPEC_NAME => 'meta name=amp-experiment-token',
                    SpecRule::MANDATORY_PARENT => Element::HEAD,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::CONTENT,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::NAME,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'amp-experiment-token',
                            ],
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            'meta name=amp-experiments-opt-in' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::META,
                    SpecRule::SPEC_NAME => 'meta name=amp-experiments-opt-in',
                    SpecRule::MANDATORY_PARENT => Element::HEAD,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::CONTENT,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::NAME,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'amp-experiments-opt-in',
                            ],
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            'meta name=amp-google-clientid-id-api' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::META,
                    SpecRule::SPEC_NAME => 'meta name=amp-google-clientid-id-api',
                    SpecRule::MANDATORY_PARENT => Element::HEAD,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::CONTENT,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::NAME,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'amp-google-client-id-api',
                            ],
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            'meta name=amp-link-variable-allowed-origin' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::META,
                    SpecRule::SPEC_NAME => 'meta name=amp-link-variable-allowed-origin',
                    SpecRule::MANDATORY_PARENT => Element::HEAD,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::CONTENT,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::NAME,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'amp-link-variable-allowed-origin',
                            ],
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            'meta name=amp-list-load-more' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::META,
                    SpecRule::SPEC_NAME => 'meta name=amp-list-load-more',
                    SpecRule::MANDATORY_PARENT => Element::HEAD,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::CONTENT,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::NAME,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'amp-list-load-more',
                            ],
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            'meta name=amp-recaptcha-input' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::META,
                    SpecRule::SPEC_NAME => 'meta name=amp-recaptcha-input',
                    SpecRule::MANDATORY_PARENT => Element::HEAD,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::CONTENT,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::NAME,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'amp-recaptcha-input',
                            ],
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            'meta name=amp-script-src' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::META,
                    SpecRule::SPEC_NAME => 'meta name=amp-script-src',
                    SpecRule::MANDATORY_PARENT => Element::HEAD,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::CONTENT,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::NAME,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'amp-script-src',
                            ],
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            'meta name=amp-story-generator-name' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::META,
                    SpecRule::SPEC_NAME => 'meta name=amp-story-generator-name',
                    SpecRule::UNIQUE => true,
                    SpecRule::MANDATORY_PARENT => Element::HEAD,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::CONTENT,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::NAME,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_CASEI => [
                                'amp-story-generator-name',
                            ],
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            'meta name=amp-story-generator-version' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::META,
                    SpecRule::SPEC_NAME => 'meta name=amp-story-generator-version',
                    SpecRule::UNIQUE => true,
                    SpecRule::MANDATORY_PARENT => Element::HEAD,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::CONTENT,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::NAME,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_CASEI => [
                                'amp-story-generator-version',
                            ],
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            'meta name=amp-to-amp-navigation' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::META,
                    SpecRule::SPEC_NAME => 'meta name=amp-to-amp-navigation',
                    SpecRule::UNIQUE => true,
                    SpecRule::MANDATORY_PARENT => Element::HEAD,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::CONTENT,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::NAME,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'amp-to-amp-navigation',
                            ],
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            'meta name=amp4ads-id' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::META,
                    SpecRule::SPEC_NAME => 'meta name=amp4ads-id',
                    SpecRule::MANDATORY_PARENT => Element::HEAD,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::CONTENT,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::NAME,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'amp4ads-id',
                            ],
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP4ADS,
                    ],
                ]
            ),
            'meta name=amp4ads-vars-*' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::META,
                    SpecRule::SPEC_NAME => 'meta name=amp4ads-vars-*',
                    SpecRule::MANDATORY_PARENT => Element::HEAD,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::CONTENT,
                            SpecRule::MANDATORY => true,
                        ],
                        [
                            SpecRule::NAME => Attribute::NAME,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_REGEX => 'amp4ads-vars-.+',
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP4ADS,
                    ],
                ]
            ),
            'meta name= and content=' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::META,
                    SpecRule::SPEC_NAME => 'meta name= and content=',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::CONTENT,
                        ],
                        [
                            SpecRule::NAME => Attribute::ITEMPROP,
                        ],
                        [
                            SpecRule::NAME => Attribute::NAME,
                            SpecRule::DISALLOWED_VALUE_REGEX => '(^|\s)(amp-.*|amp4ads-.*|apple-itunes-app|content-disposition|revisit-after|viewport)(\s|$)',
                        ],
                        [
                            SpecRule::NAME => Attribute::PROPERTY,
                        ],
                        [
                            SpecRule::NAME => Attribute::SCHEME,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            'meta name=apple-itunes-app' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::META,
                    SpecRule::SPEC_NAME => 'meta name=apple-itunes-app',
                    SpecRule::MANDATORY_PARENT => Element::HEAD,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::CONTENT,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_REGEX => '.*app-id=.*',
                        ],
                        [
                            SpecRule::NAME => Attribute::NAME,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'apple-itunes-app',
                            ],
                        ],
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                    SpecRule::SATISFIES => [
                        'amp-app-banner data source',
                    ],
                ]
            ),
            'meta name=viewport' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::META,
                    SpecRule::SPEC_NAME => 'meta name=viewport',
                    SpecRule::MANDATORY => true,
                    SpecRule::UNIQUE => true,
                    SpecRule::MANDATORY_PARENT => Element::HEAD,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::CONTENT,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_PROPERTIES => [
                                'properties' => [
                                    [
                                        'name' => 'width',
                                        'mandatory' => true,
                                        'value' => 'device-width',
                                    ],
                                    [
                                        'name' => 'height',
                                    ],
                                    [
                                        'name' => 'initial-scale',
                                    ],
                                    [
                                        'name' => 'minimum-scale',
                                    ],
                                    [
                                        'name' => 'maximum-scale',
                                    ],
                                    [
                                        'name' => 'shrink-to-fit',
                                    ],
                                    [
                                        'name' => 'user-scalable',
                                    ],
                                    [
                                        'name' => 'viewport-fit',
                                    ],
                                ],
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::NAME,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                'viewport',
                            ],
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                        ],
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#required-markup',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                    SpecRule::DESCRIPTIVE_NAME => 'meta name=viewport',
                ]
            ),
            Element::METER => new Tag(
                [
                    SpecRule::TAG_NAME => Element::METER,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::HIGH,
                        ],
                        [
                            SpecRule::NAME => Attribute::LOW,
                        ],
                        [
                            SpecRule::NAME => Attribute::MAX,
                        ],
                        [
                            SpecRule::NAME => Attribute::MIN,
                        ],
                        [
                            SpecRule::NAME => Attribute::OPTIMUM,
                        ],
                        [
                            SpecRule::NAME => Attribute::VALUE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::MULTICOL => new Tag(
                [
                    SpecRule::TAG_NAME => Element::MULTICOL,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            Element::NAV => new Tag(
                [
                    SpecRule::TAG_NAME => Element::NAV,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::NEXTID => new Tag(
                [
                    SpecRule::TAG_NAME => Element::NEXTID,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            Element::NOBR => new Tag(
                [
                    SpecRule::TAG_NAME => Element::NOBR,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            Element::NOSCRIPT => new Tag(
                [
                    SpecRule::TAG_NAME => Element::NOSCRIPT,
                    SpecRule::DISALLOWED_ANCESTOR => [
                        'NOSCRIPT',
                    ],
                    SpecRule::MANDATORY_ANCESTOR => Element::BODY,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            'noscript > img' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::IMG,
                    SpecRule::SPEC_NAME => 'noscript > img',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ALT,
                        ],
                        [
                            SpecRule::NAME => Attribute::ATTRIBUTION,
                        ],
                        [
                            SpecRule::NAME => Attribute::BORDER,
                        ],
                        [
                            SpecRule::NAME => Attribute::DECODING,
                            SpecRule::VALUE => [
                                'async',
                                'auto',
                                'sync',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::HEIGHT,
                        ],
                        [
                            SpecRule::NAME => Attribute::IMPORTANCE,
                        ],
                        [
                            SpecRule::NAME => Attribute::ISMAP,
                        ],
                        [
                            SpecRule::NAME => Attribute::INTRINSICSIZE,
                        ],
                        [
                            SpecRule::NAME => Attribute::LOADING,
                        ],
                        [
                            SpecRule::NAME => Attribute::LONGDESC,
                            SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'http',
                                    'https',
                                ],
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::SIZES,
                        ],
                        [
                            SpecRule::NAME => Attribute::WIDTH,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'mandatory-src-or-srcset',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-img/',
                    SpecRule::MANDATORY_ANCESTOR => Element::NOSCRIPT,
                    SpecRule::MANDATORY_ANCESTOR_SUGGESTED_ALTERNATIVE => Extension::IMG,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::DESCRIPTIVE_NAME => 'img',
                ]
            ),
            'noscript > style[amp-boilerplate]' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::STYLE,
                    SpecRule::SPEC_NAME => 'noscript > style[amp-boilerplate]',
                    SpecRule::MANDATORY => true,
                    SpecRule::UNIQUE => true,
                    SpecRule::MANDATORY_PARENT => Element::NOSCRIPT,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::AMP_BOILERPLATE,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                '',
                            ],
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_PARENT_DISPATCH',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'nonce-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amp-boilerplate/?format=websites',
                    SpecRule::CDATA => [
                        SpecRule::CDATA_REGEX => '\s*body\s*{\s*-webkit-animation:\s*none;\s*-moz-animation:\s*none;\s*-ms-animation:\s*none;\s*animation:\s*none;?\s*}\s*',
                        SpecRule::DOC_CSS_BYTES => false,
                    ],
                    SpecRule::MANDATORY_ANCESTOR => Element::HEAD,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::DISABLED_BY => [
                        'transformed',
                    ],
                    SpecRule::DESCRIPTIVE_NAME => 'noscript > style[amp-boilerplate]',
                ]
            ),
            'noscript > style[amp-boilerplate] (transformed)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::STYLE,
                    SpecRule::SPEC_NAME => 'noscript > style[amp-boilerplate] (transformed)',
                    SpecRule::UNIQUE => true,
                    SpecRule::MANDATORY_PARENT => Element::NOSCRIPT,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::AMP_BOILERPLATE,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                '',
                            ],
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_PARENT_DISPATCH',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'nonce-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amp-boilerplate/?format=websites',
                    SpecRule::CDATA => [
                        SpecRule::CDATA_REGEX => '\s*body\s*{\s*-webkit-animation:\s*none;\s*-moz-animation:\s*none;\s*-ms-animation:\s*none;\s*animation:\s*none;?\s*}\s*',
                        SpecRule::DOC_CSS_BYTES => false,
                    ],
                    SpecRule::MANDATORY_ANCESTOR => Element::HEAD,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::ENABLED_BY => [
                        'transformed',
                    ],
                    SpecRule::DESCRIPTIVE_NAME => 'noscript > style[amp-boilerplate]',
                ]
            ),
            'noscript enclosure for boilerplate' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::NOSCRIPT,
                    SpecRule::SPEC_NAME => 'noscript enclosure for boilerplate',
                    SpecRule::MANDATORY => true,
                    SpecRule::UNIQUE => true,
                    SpecRule::MANDATORY_PARENT => Element::HEAD,
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amp-boilerplate/?format=websites',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::DISABLED_BY => [
                        'transformed',
                    ],
                    SpecRule::DESCRIPTIVE_NAME => 'noscript enclosure for boilerplate',
                ]
            ),
            'noscript enclosure for boilerplate (transformed)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::NOSCRIPT,
                    SpecRule::SPEC_NAME => 'noscript enclosure for boilerplate (transformed)',
                    SpecRule::UNIQUE => true,
                    SpecRule::MANDATORY_PARENT => Element::HEAD,
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amp-boilerplate/?format=websites',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::ENABLED_BY => [
                        'transformed',
                    ],
                    SpecRule::DESCRIPTIVE_NAME => 'noscript enclosure for boilerplate',
                ]
            ),
            Element::O_P => new Tag(
                [
                    SpecRule::TAG_NAME => Element::O_P,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            Element::OL => new Tag(
                [
                    SpecRule::TAG_NAME => Element::OL,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::REVERSED,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::START,
                            SpecRule::VALUE_REGEX => '[0-9]*',
                        ],
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::VALUE_REGEX => '[1AaIi]',
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::OPTGROUP => new Tag(
                [
                    SpecRule::TAG_NAME => Element::OPTGROUP,
                    SpecRule::MANDATORY_PARENT => Element::SELECT,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DISABLED,
                        ],
                        [
                            SpecRule::NAME => Attribute::LABEL,
                        ],
                        [
                            SpecRule::NAME => '[DISABLED]',
                        ],
                        [
                            SpecRule::NAME => '[LABEL]',
                        ],
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-form/',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::OPTION => new Tag(
                [
                    SpecRule::TAG_NAME => Element::OPTION,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DISABLED,
                        ],
                        [
                            SpecRule::NAME => Attribute::LABEL,
                        ],
                        [
                            SpecRule::NAME => Attribute::SELECTED,
                        ],
                        [
                            SpecRule::NAME => Attribute::VALUE,
                        ],
                        [
                            SpecRule::NAME => '[DISABLED]',
                        ],
                        [
                            SpecRule::NAME => '[LABEL]',
                        ],
                        [
                            SpecRule::NAME => '[SELECTED]',
                        ],
                        [
                            SpecRule::NAME => '[VALUE]',
                        ],
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-form/',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::OUTPUT => new Tag(
                [
                    SpecRule::TAG_NAME => Element::OUTPUT,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::FOR_,
                        ],
                        [
                            SpecRule::NAME => Attribute::FORM,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'name-attr',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::P => new Tag(
                [
                    SpecRule::TAG_NAME => Element::P,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ALIGN,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::PATH => new Tag(
                [
                    SpecRule::TAG_NAME => Element::PATH,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::D,
                        ],
                        [
                            SpecRule::NAME => Attribute::EXTERNALRESOURCESREQUIRED,
                        ],
                        [
                            SpecRule::NAME => Attribute::PATHLENGTH,
                        ],
                        [
                            SpecRule::NAME => Attribute::SKETCH_TYPE,
                        ],
                        [
                            SpecRule::NAME => Attribute::TRANSFORM,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'svg-conditional-processing-attributes',
                        'svg-core-attributes',
                        'svg-presentation-attributes',
                        'svg-style-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                    SpecRule::MANDATORY_ANCESTOR => Element::SVG,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            Element::PATTERN => new Tag(
                [
                    SpecRule::TAG_NAME => Element::PATTERN,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::EXTERNALRESOURCESREQUIRED,
                        ],
                        [
                            SpecRule::NAME => Attribute::HEIGHT,
                        ],
                        [
                            SpecRule::NAME => Attribute::PATTERNCONTENTUNITS,
                        ],
                        [
                            SpecRule::NAME => Attribute::PATTERNTRANSFORM,
                        ],
                        [
                            SpecRule::NAME => Attribute::PATTERNUNITS,
                        ],
                        [
                            SpecRule::NAME => Attribute::PRESERVEASPECTRATIO,
                        ],
                        [
                            SpecRule::NAME => Attribute::VIEWBOX,
                        ],
                        [
                            SpecRule::NAME => Attribute::WIDTH,
                        ],
                        [
                            SpecRule::NAME => Attribute::X,
                        ],
                        [
                            SpecRule::NAME => Attribute::Y,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'svg-conditional-processing-attributes',
                        'svg-core-attributes',
                        'svg-presentation-attributes',
                        'svg-style-attr',
                        'svg-xlink-attributes',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                    SpecRule::MANDATORY_ANCESTOR => Element::SVG,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            Element::PICTURE => new Tag(
                [
                    SpecRule::TAG_NAME => Element::PICTURE,
                    SpecRule::MANDATORY_PARENT => Element::NOSCRIPT,
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-img/',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            'picture > source' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SOURCE,
                    SpecRule::SPEC_NAME => 'picture > source',
                    SpecRule::MANDATORY_PARENT => Element::PICTURE,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::MEDIA,
                        ],
                        [
                            SpecRule::NAME => Attribute::SIZES,
                        ],
                        [
                            SpecRule::NAME => Attribute::SRCSET,
                            SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'data',
                                    'http',
                                    'https',
                                ],
                                SpecRule::ALLOW_RELATIVE => true,
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::TYPE,
                        ],
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-img/',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            Element::POLYGON => new Tag(
                [
                    SpecRule::TAG_NAME => Element::POLYGON,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::EXTERNALRESOURCESREQUIRED,
                        ],
                        [
                            SpecRule::NAME => Attribute::POINTS,
                        ],
                        [
                            SpecRule::NAME => Attribute::SKETCH_TYPE,
                        ],
                        [
                            SpecRule::NAME => Attribute::TRANSFORM,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'svg-conditional-processing-attributes',
                        'svg-core-attributes',
                        'svg-presentation-attributes',
                        'svg-style-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                    SpecRule::MANDATORY_ANCESTOR => Element::SVG,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            Element::POLYLINE => new Tag(
                [
                    SpecRule::TAG_NAME => Element::POLYLINE,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::EXTERNALRESOURCESREQUIRED,
                        ],
                        [
                            SpecRule::NAME => Attribute::POINTS,
                        ],
                        [
                            SpecRule::NAME => Attribute::SKETCH_TYPE,
                        ],
                        [
                            SpecRule::NAME => Attribute::TRANSFORM,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'svg-conditional-processing-attributes',
                        'svg-core-attributes',
                        'svg-presentation-attributes',
                        'svg-style-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                    SpecRule::MANDATORY_ANCESTOR => Element::SVG,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            Element::PRE => new Tag(
                [
                    SpecRule::TAG_NAME => Element::PRE,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::PROGRESS => new Tag(
                [
                    SpecRule::TAG_NAME => Element::PROGRESS,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::MAX,
                        ],
                        [
                            SpecRule::NAME => Attribute::VALUE,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::Q => new Tag(
                [
                    SpecRule::TAG_NAME => Element::Q,
                    SpecRule::ATTR_LISTS => [
                        'cite-attr',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::RADIALGRADIENT => new Tag(
                [
                    SpecRule::TAG_NAME => Element::RADIALGRADIENT,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::CX,
                        ],
                        [
                            SpecRule::NAME => Attribute::CY,
                        ],
                        [
                            SpecRule::NAME => Attribute::EXTERNALRESOURCESREQUIRED,
                        ],
                        [
                            SpecRule::NAME => Attribute::FR,
                        ],
                        [
                            SpecRule::NAME => Attribute::FX,
                        ],
                        [
                            SpecRule::NAME => Attribute::FY,
                        ],
                        [
                            SpecRule::NAME => Attribute::GRADIENTTRANSFORM,
                        ],
                        [
                            SpecRule::NAME => Attribute::GRADIENTUNITS,
                        ],
                        [
                            SpecRule::NAME => Attribute::R,
                        ],
                        [
                            SpecRule::NAME => Attribute::SPREADMETHOD,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'svg-core-attributes',
                        'svg-presentation-attributes',
                        'svg-style-attr',
                        'svg-xlink-attributes',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                    SpecRule::MANDATORY_ANCESTOR => Element::SVG,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            'radialgradient > stop' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::STOP,
                    SpecRule::SPEC_NAME => 'radialgradient > stop',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::OFFSET,
                        ],
                        [
                            SpecRule::NAME => Attribute::STOP_COLOR,
                        ],
                        [
                            SpecRule::NAME => Attribute::STOP_OPACITY,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'svg-style-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                    SpecRule::MANDATORY_ANCESTOR => Element::RADIALGRADIENT,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            Element::RB => new Tag(
                [
                    SpecRule::TAG_NAME => Element::RB,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::RECT => new Tag(
                [
                    SpecRule::TAG_NAME => Element::RECT,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::EXTERNALRESOURCESREQUIRED,
                        ],
                        [
                            SpecRule::NAME => Attribute::HEIGHT,
                        ],
                        [
                            SpecRule::NAME => Attribute::RX,
                        ],
                        [
                            SpecRule::NAME => Attribute::RY,
                        ],
                        [
                            SpecRule::NAME => Attribute::SKETCH_TYPE,
                        ],
                        [
                            SpecRule::NAME => Attribute::TRANSFORM,
                        ],
                        [
                            SpecRule::NAME => Attribute::WIDTH,
                        ],
                        [
                            SpecRule::NAME => Attribute::X,
                        ],
                        [
                            SpecRule::NAME => Attribute::Y,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'svg-conditional-processing-attributes',
                        'svg-core-attributes',
                        'svg-presentation-attributes',
                        'svg-style-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                    SpecRule::MANDATORY_ANCESTOR => Element::SVG,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            Element::RP => new Tag(
                [
                    SpecRule::TAG_NAME => Element::RP,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::RT => new Tag(
                [
                    SpecRule::TAG_NAME => Element::RT,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::RTC => new Tag(
                [
                    SpecRule::TAG_NAME => Element::RTC,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            Element::RUBY => new Tag(
                [
                    SpecRule::TAG_NAME => Element::RUBY,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::S => new Tag(
                [
                    SpecRule::TAG_NAME => Element::S,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::SAMP => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SAMP,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::SCRIPT => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-3d-gltf',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (2)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-3q-player',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (3)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-access-laterpay',
                        'version' => [
                            '0.1',
                            '0.2',
                            'latest',
                        ],
                        'requiresUsage' => 'NONE',
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-access',
                    ],
                ]
            ),
            'SCRIPT (4)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-access-poool',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                        'requiresUsage' => 'NONE',
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-access',
                    ],
                ]
            ),
            'SCRIPT (5)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-access-scroll',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                        'requiresUsage' => 'NONE',
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-access',
                    ],
                ]
            ),
            'SCRIPT (6)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-access',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (7)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-accordion',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (8)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-action-macro',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (9)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-ad-custom',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (10)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP4ADS,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-ad-exit',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (11)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-addthis',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (12)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-analytics',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (13)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-anim',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (14)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-animation',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (15)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-apester-media',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (16)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-app-banner',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                        'deprecatedAllowDuplicates' => true,
                    ],
                ]
            ),
            'SCRIPT (17)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-audio',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (18)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-auto-ads',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (19)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-autocomplete',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (20)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-base-carousel',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (21)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-beopinion',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (22)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-bind',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                        'requiresUsage' => 'NONE',
                    ],
                ]
            ),
            'SCRIPT (23)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-bodymovin-animation',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (24)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-brid-player',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (25)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-brightcove',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (26)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-byside-content',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (27)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-call-tracking',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (28)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-carousel',
                        'version' => [
                            '0.1',
                            '0.2',
                            'latest',
                        ],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (29)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-connatix-player',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (30)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-consent',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (31)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-dailymotion',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (32)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-date-countdown',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (33)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-date-display',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (34)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-date-picker',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (35)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-delight-player',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (36)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-dynamic-css-classes',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'NONE',
                    ],
                ]
            ),
            'SCRIPT (37)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-embedly-card',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (38)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-experiment',
                        'version' => [
                            '0.1',
                            '1.0',
                            'latest',
                        ],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (39)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-facebook-comments',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (40)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-facebook-like',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (41)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-facebook-page',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (42)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-facebook',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (43)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-fit-text',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (44)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-font',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (45)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-form',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (46)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-fx-collection',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                        'requiresUsage' => 'NONE',
                    ],
                ]
            ),
            'SCRIPT (47)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-fx-flying-carpet',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (48)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-geo',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (49)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-gfycat',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (50)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-gist',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (51)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-google-document-embed',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (52)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP4ADS,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-gwd-animation',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (53)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-hulu',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (54)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-iframe',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (55)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-ima-video',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (56)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-image-lightbox',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (57)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-image-slider',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (58)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-imgur',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (59)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-inline-gallery',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (60)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-inputmask',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                        'requiresUsage' => 'NONE',
                    ],
                ]
            ),
            'SCRIPT (61)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-instagram',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (62)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-install-serviceworker',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (63)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-izlesene',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (64)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-jwplayer',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (65)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-kaltura-player',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (66)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-lightbox-gallery',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                        'requiresUsage' => 'NONE',
                    ],
                ]
            ),
            'SCRIPT (67)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-lightbox',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (68)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::SATISFIES => [
                        'amp-link-rewriter',
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-link-rewriter',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                    SpecRule::EXCLUDES => [
                        'amp-skimlinks',
                        'amp-smartlinks',
                    ],
                ]
            ),
            'SCRIPT (69)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-list',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (70)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::MANDATORY_PARENT => Element::HEAD,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::UNIQUE_WARNING => true,
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-live-list',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (71)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-mathml',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (72)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-mega-menu',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (73)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-megaphone',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (74)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-minute-media-player',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (75)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-mowplayer',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (76)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::NO_FALLBACK,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP4ADS,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-mraid',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                        'requiresUsage' => 'NONE',
                        'extensionType' => 'HOST_SERVICE',
                    ],
                ]
            ),
            'SCRIPT (77)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-mustache',
                        'version' => [
                            '0.1',
                            '0.2',
                            'latest',
                        ],
                        'deprecatedVersion' => [
                            '0.1',
                        ],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                        'extensionType' => 'CUSTOM_TEMPLATE',
                    ],
                ]
            ),
            'SCRIPT (78)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-nested-menu',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (79)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-next-page',
                        'version' => [
                            '0.1',
                            '1.0',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (80)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-nexxtv-player',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (81)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-o2-player',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (82)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-onetap-google',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (83)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-ooyala-player',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (84)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-orientation-observer',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (85)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-pan-zoom',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (86)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-pinterest',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (87)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-playbuzz',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (88)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-position-observer',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (89)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-powr-player',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (90)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-reach-player',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (91)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-recaptcha-input',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (92)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-redbull-player',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (93)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-reddit',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                        'deprecatedAllowDuplicates' => true,
                    ],
                ]
            ),
            'SCRIPT (94)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-riddle-quiz',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (95)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-script',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (96)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-selector',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (97)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-sidebar',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (98)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::SATISFIES => [
                        'amp-skimlinks',
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-skimlinks',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                    SpecRule::EXCLUDES => [
                        'amp-link-rewriter',
                        'amp-smartlinks',
                    ],
                ]
            ),
            'SCRIPT (99)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::DEPRECATION => 'amp-carousel',
                    SpecRule::DEPRECATION_URL => 'https://www.ampproject.org/docs/reference/components/amp-carousel',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-slides',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'NONE',
                    ],
                ]
            ),
            'SCRIPT (100)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::SATISFIES => [
                        'amp-smartlinks',
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-smartlinks',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                    SpecRule::EXCLUDES => [
                        'amp-link-rewriter',
                        'amp-skimlinks',
                    ],
                ]
            ),
            'SCRIPT (101)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-social-share',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (102)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-soundcloud',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (103)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-springboard-player',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (104)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-sticky-ad',
                        'version' => [
                            '0.1',
                            '1.0',
                            'latest',
                        ],
                        'deprecatedVersion' => [
                            '0.1',
                        ],
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (105)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-story-360',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (106)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-story-auto-ads',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (107)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-story-interactive',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (108)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-story-panning-media',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (109)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-story-player',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (110)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-story',
                        'version' => [
                            '1.0',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (111)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-subscriptions',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                        'requiresUsage' => 'NONE',
                    ],
                ]
            ),
            'SCRIPT (112)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-subscriptions-google',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                        'requiresUsage' => 'NONE',
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-subscriptions',
                    ],
                ]
            ),
            'SCRIPT (113)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-timeago',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (114)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-truncate-text',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (115)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-twitter',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (116)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-user-notification',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (117)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-video-docking',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (118)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-video-iframe',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (119)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-vimeo',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (120)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-vine',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (121)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-viqeo-player',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (122)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-vk',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (123)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-web-push',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (124)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-wistia-player',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (125)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-yotpo/',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-yotpo',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT (126)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-youtube',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'script id=amp-rtc' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::SPEC_NAME => 'script id=amp-rtc',
                    SpecRule::UNIQUE => true,
                    SpecRule::MANDATORY_PARENT => Element::HEAD,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ID,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'amp-rtc',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_CASEI => [
                                'application/json',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'nonce-attr',
                    ],
                    SpecRule::CDATA => [
                        SpecRule::DISALLOWED_CDATA_REGEX => [
                            [
                                'regex' => '<!--',
                                'errorMessage' => 'html comments',
                            ],
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            'script type=application/ld+json' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::SPEC_NAME => 'script type=application/ld+json',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                            SpecRule::VALUE_CASEI => [
                                'application/ld+json',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'nonce-attr',
                    ],
                    SpecRule::CDATA => [
                        SpecRule::DISALLOWED_CDATA_REGEX => [
                            [
                                'regex' => '<!--',
                                'errorMessage' => 'html comments',
                            ],
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                    SpecRule::DESCRIPTIVE_NAME => 'script type=application/ld+json',
                ]
            ),
            'SCRIPT type=text/plain' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::SPEC_NAME => 'SCRIPT type=text/plain',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ID,
                            SpecRule::DISALLOWED_VALUE_REGEX => '(^|\s)(__amp_\S*|__count__|__defineGetter__|__defineSetter__|__lookupGetter__|__lookupSetter__|__noSuchMethod__|__parent__|__proto__|__AMP_\S*|\$p|\$proxy|acceptCharset|addEventListener|appendChild|assignedSlot|attachShadow|AMP|baseURI|checkValidity|childElementCount|childNodes|classList|className|clientHeight|clientLeft|clientTop|clientWidth|compareDocumentPosition|computedName|computedRole|contentEditable|createShadowRoot|enqueAction|firstChild|firstElementChild|getAnimations|getAttribute|getAttributeNS|getAttributeNode|getAttributeNodeNS|getBoundingClientRect|getClientRects|getDestinationInsertionPoints|getElementsByClassName|getElementsByTagName|getElementsByTagNameNS|getRootNode|hasAttribute|hasAttributeNS|hasAttributes|hasChildNodes|hasPointerCapture|i-amphtml-\S*|innerHTML|innerText|inputMode|insertAdjacentElement|insertAdjacentHTML|insertAdjacentText|isContentEditable|isDefaultNamespace|isEqualNode|isSameNode|lastChild|lastElementChild|lookupNamespaceURI|namespaceURI|nextElementSibling|nextSibling|nodeName|nodeType|nodeValue|offsetHeight|offsetLeft|offsetParent|offsetTop|offsetWidth|outerHTML|outerText|ownerDocument|parentElement|parentNode|previousElementSibling|previousSibling|querySelector|querySelectorAll|releasePointerCapture|removeAttribute|removeAttributeNS|removeAttributeNode|removeChild|removeEventListener|replaceChild|reportValidity|requestPointerLock|scrollHeight|scrollIntoView|scrollIntoViewIfNeeded|scrollLeft|scrollWidth|setAttribute|setAttributeNS|setAttributeNode|setAttributeNodeNS|setPointerCapture|shadowRoot|styleMap|tabIndex|tagName|textContent|toString|valueOf|(webkit|ms|moz|o)dropzone|(webkit|moz|ms|o)MatchesSelector|(webkit|moz|ms|o)RequestFullScreen|(webkit|moz|ms|o)RequestFullscreen)(\s|$)',
                            SpecRule::ADD_VALUE_TO_SET => 'TEMPLATE_IDS',
                        ],
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_CASEI => [
                                'text/plain',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::TEMPLATE,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                'amp-mustache',
                            ],
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'nonce-attr',
                    ],
                    SpecRule::CDATA => [
                        SpecRule::DISALLOWED_CDATA_REGEX => [
                            [
                                'regex' => '<!--',
                                'errorMessage' => 'html comments',
                            ],
                        ],
                    ],
                    SpecRule::DISALLOWED_ANCESTOR => [
                        'TEMPLATE',
                        'AMP-DATE-PICKER',
                        'FORM DIV [submit-success][template]',
                        'FORM DIV [submit-error][template]',
                        'FORM DIV [submitting][template]',
                        'FORM DIV [verify-error][template]',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-mustache',
                    ],
                ]
            ),
            'SCRIPT type=text/plain (AMP4EMAIL)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::SPEC_NAME => 'SCRIPT type=text/plain (AMP4EMAIL)',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ID,
                            SpecRule::DISALLOWED_VALUE_REGEX => '(^|\s)(__amp_\S*|__count__|__defineGetter__|__defineSetter__|__lookupGetter__|__lookupSetter__|__noSuchMethod__|__parent__|__proto__|__AMP_\S*|\$p|\$proxy|acceptCharset|addEventListener|appendChild|assignedSlot|attachShadow|AMP|baseURI|checkValidity|childElementCount|childNodes|classList|className|clientHeight|clientLeft|clientTop|clientWidth|compareDocumentPosition|computedName|computedRole|contentEditable|createShadowRoot|enqueAction|firstChild|firstElementChild|getAnimations|getAttribute|getAttributeNS|getAttributeNode|getAttributeNodeNS|getBoundingClientRect|getClientRects|getDestinationInsertionPoints|getElementsByClassName|getElementsByTagName|getElementsByTagNameNS|getRootNode|hasAttribute|hasAttributeNS|hasAttributes|hasChildNodes|hasPointerCapture|i-amphtml-\S*|innerHTML|innerText|inputMode|insertAdjacentElement|insertAdjacentHTML|insertAdjacentText|isContentEditable|isDefaultNamespace|isEqualNode|isSameNode|lastChild|lastElementChild|lookupNamespaceURI|namespaceURI|nextElementSibling|nextSibling|nodeName|nodeType|nodeValue|offsetHeight|offsetLeft|offsetParent|offsetTop|offsetWidth|outerHTML|outerText|ownerDocument|parentElement|parentNode|previousElementSibling|previousSibling|querySelector|querySelectorAll|releasePointerCapture|removeAttribute|removeAttributeNS|removeAttributeNode|removeChild|removeEventListener|replaceChild|reportValidity|requestPointerLock|scrollHeight|scrollIntoView|scrollIntoViewIfNeeded|scrollLeft|scrollWidth|setAttribute|setAttributeNS|setAttributeNode|setAttributeNodeNS|setPointerCapture|shadowRoot|styleMap|tabIndex|tagName|textContent|toString|valueOf|(webkit|ms|moz|o)dropzone|(webkit|moz|ms|o)MatchesSelector|(webkit|moz|ms|o)RequestFullScreen|(webkit|moz|ms|o)RequestFullscreen)(\s|$)',
                            SpecRule::ADD_VALUE_TO_SET => 'TEMPLATE_IDS',
                        ],
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_CASEI => [
                                'text/plain',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::TEMPLATE,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                'amp-mustache',
                            ],
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'nonce-attr',
                    ],
                    SpecRule::CDATA => [
                        SpecRule::DISALLOWED_CDATA_REGEX => [
                            [
                                'regex' => '<!--',
                                'errorMessage' => 'html comments',
                            ],
                        ],
                    ],
                    SpecRule::DISALLOWED_ANCESTOR => [
                        'TEMPLATE (AMP4EMAIL)',
                        'AMP-DATE-PICKER',
                        'FORM DIV [submit-success][template]',
                        'FORM DIV [submit-error][template]',
                        'FORM DIV [submitting][template]',
                        'FORM DIV [verify-error][template]',
                        'FORM DIV [submitting]',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP4EMAIL,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-mustache',
                    ],
                ]
            ),
            'SCRIPT[custom-element=amp-accordion] (AMP4EMAIL)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::SPEC_NAME => 'SCRIPT[custom-element=amp-accordion] (AMP4EMAIL)',
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP4EMAIL,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-accordion',
                        'version' => [
                            '0.1',
                        ],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT[custom-element=amp-autocomplete] (AMP4EMAIL)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::SPEC_NAME => 'SCRIPT[custom-element=amp-autocomplete] (AMP4EMAIL)',
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP4EMAIL,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-autocomplete',
                        'version' => [
                            '0.1',
                        ],
                    ],
                ]
            ),
            'SCRIPT[custom-element=amp-bind] (AMP4EMAIL)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::SPEC_NAME => 'SCRIPT[custom-element=amp-bind] (AMP4EMAIL)',
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP4EMAIL,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-bind',
                        'version' => [
                            '0.1',
                        ],
                        'requiresUsage' => 'NONE',
                    ],
                ]
            ),
            'SCRIPT[custom-element=amp-carousel] (AMP4EMAIL)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::SPEC_NAME => 'SCRIPT[custom-element=amp-carousel] (AMP4EMAIL)',
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP4EMAIL,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-carousel',
                        'version' => [
                            '0.1',
                        ],
                    ],
                ]
            ),
            'SCRIPT[custom-element=amp-fit-text] (AMP4EMAIL)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::SPEC_NAME => 'SCRIPT[custom-element=amp-fit-text] (AMP4EMAIL)',
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP4EMAIL,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-fit-text',
                        'version' => [
                            '0.1',
                        ],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT[custom-element=amp-form] (AMP4EMAIL)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::SPEC_NAME => 'SCRIPT[custom-element=amp-form] (AMP4EMAIL)',
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP4EMAIL,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-form',
                        'version' => [
                            '0.1',
                        ],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT[custom-element=amp-image-lightbox] (AMP4EMAIL)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::SPEC_NAME => 'SCRIPT[custom-element=amp-image-lightbox] (AMP4EMAIL)',
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::DEPRECATION => 'amp-image-lightbox cannot be properly positioned in emails and will soon be invalid in AMP4EMAIL.',
                    SpecRule::DEPRECATION_URL => 'https://github.com/ampproject/amphtml/issues/23170',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP4EMAIL,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-image-lightbox',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT[custom-element=amp-lightbox] (AMP4ADS)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::SPEC_NAME => 'SCRIPT[custom-element=amp-lightbox] (AMP4ADS)',
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP4ADS,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-lightbox',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT[custom-element=amp-lightbox] (AMP4EMAIL)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::SPEC_NAME => 'SCRIPT[custom-element=amp-lightbox] (AMP4EMAIL)',
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::DEPRECATION => 'amp-lightbox cannot be properly positioned in emails and will soon be invalid in AMP4EMAIL.',
                    SpecRule::DEPRECATION_URL => 'https://github.com/ampproject/amphtml/issues/23170',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP4EMAIL,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-lightbox',
                        'version' => [
                            '0.1',
                            'latest',
                        ],
                    ],
                ]
            ),
            'SCRIPT[custom-element=amp-list] (AMP4EMAIL)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::SPEC_NAME => 'SCRIPT[custom-element=amp-list] (AMP4EMAIL)',
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP4EMAIL,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-list',
                        'version' => [
                            '0.1',
                        ],
                    ],
                ]
            ),
            'SCRIPT[custom-element=amp-selector] (AMP4EMAIL)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::SPEC_NAME => 'SCRIPT[custom-element=amp-selector] (AMP4EMAIL)',
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP4EMAIL,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-selector',
                        'version' => [
                            '0.1',
                        ],
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT[custom-element=amp-sidebar] (AMP4EMAIL)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::SPEC_NAME => 'SCRIPT[custom-element=amp-sidebar] (AMP4EMAIL)',
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP4EMAIL,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-sidebar',
                        'version' => [
                            '0.1',
                        ],
                    ],
                ]
            ),
            'SCRIPT[custom-element=amp-timeago] (AMP4EMAIL)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::SPEC_NAME => 'SCRIPT[custom-element=amp-timeago] (AMP4EMAIL)',
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP4EMAIL,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-timeago',
                        'version' => [
                            '0.1',
                        ],
                    ],
                ]
            ),
            'SCRIPT[custom-template=amp-mustache] (AMP4ADS)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::SPEC_NAME => 'SCRIPT[custom-template=amp-mustache] (AMP4ADS)',
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP4ADS,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-mustache',
                        'version' => [
                            '0.1',
                            '0.2',
                            'latest',
                        ],
                        'deprecatedVersion' => [
                            '0.1',
                        ],
                        'extensionType' => 'CUSTOM_TEMPLATE',
                    ],
                ]
            ),
            'SCRIPT[custom-template=amp-mustache] (AMP4EMAIL)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::SPEC_NAME => 'SCRIPT[custom-template=amp-mustache] (AMP4EMAIL)',
                    SpecRule::ATTR_LISTS => [
                        'common-extension-attrs',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP4EMAIL,
                    ],
                    SpecRule::EXTENSION_SPEC => [
                        'name' => 'amp-mustache',
                        'version' => [
                            '0.1',
                            '0.2',
                        ],
                        'deprecatedVersion' => [
                            '0.1',
                        ],
                        'extensionType' => 'CUSTOM_TEMPLATE',
                    ],
                ]
            ),
            Element::SECTION => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SECTION,
                    SpecRule::ATTR_LISTS => [
                        'poool-access-attrs',
                    ],
                    SpecRule::DISALLOWED_ANCESTOR => [
                        'AMP-ACCORDION',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            'section (AMP4EMAIL)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SECTION,
                    SpecRule::SPEC_NAME => 'section (AMP4EMAIL)',
                    SpecRule::DISALLOWED_ANCESTOR => [
                        'AMP-ACCORDION',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::SELECT => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SELECT,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::AUTOFOCUS,
                            SpecRule::DISABLED_BY => [
                                'amp4email',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::DISABLED,
                        ],
                        [
                            SpecRule::NAME => Attribute::MULTIPLE,
                        ],
                        [
                            SpecRule::NAME => Attribute::NO_VERIFY,
                            SpecRule::VALUE => [
                                '',
                            ],
                            SpecRule::DISABLED_BY => [
                                'amp4email',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::REQUIRED,
                        ],
                        [
                            SpecRule::NAME => Attribute::SIZE,
                        ],
                        [
                            SpecRule::NAME => '[AUTOFOCUS]',
                            SpecRule::DISABLED_BY => [
                                'amp4email',
                            ],
                        ],
                        [
                            SpecRule::NAME => '[DISABLED]',
                        ],
                        [
                            SpecRule::NAME => '[MULTIPLE]',
                        ],
                        [
                            SpecRule::NAME => '[REQUIRED]',
                        ],
                        [
                            SpecRule::NAME => '[SIZE]',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'name-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-form/',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::SLOT => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SLOT,
                    SpecRule::ATTR_LISTS => [
                        'name-attr',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            Element::SMALL => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SMALL,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::SOLIDCOLOR => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SOLIDCOLOR,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::SOLID_COLOR,
                        ],
                        [
                            SpecRule::NAME => Attribute::SOLID_OPACITY,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'svg-core-attributes',
                        'svg-presentation-attributes',
                        'svg-style-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                    SpecRule::MANDATORY_ANCESTOR => Element::SVG,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            Element::SPACER => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SPACER,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            Element::SPAN => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SPAN,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            'span amp-nested-menu' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SPAN,
                    SpecRule::SPEC_NAME => 'span amp-nested-menu',
                    SpecRule::ATTR_LISTS => [
                        'amp-nested-menu-actions',
                    ],
                    SpecRule::MANDATORY_ANCESTOR => Extension::NESTED_MENU,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            'span swg_amp_cache_nonce' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SPAN,
                    SpecRule::SPEC_NAME => 'span swg_amp_cache_nonce',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::SWG_AMP_CACHE_NONCE,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_DISPATCH',
                        ],
                    ],
                    SpecRule::MANDATORY_ANCESTOR => Element::BODY,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::SATISFIES => [
                        'span swg_amp_cache_nonce',
                    ],
                    SpecRule::REQUIRES => [
                        'subscriptions-section content swg_amp_cache_nonce',
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-subscriptions',
                    ],
                ]
            ),
            Element::STRIKE => new Tag(
                [
                    SpecRule::TAG_NAME => Element::STRIKE,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            Element::STRONG => new Tag(
                [
                    SpecRule::TAG_NAME => Element::STRONG,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            'style amp-custom' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::STYLE,
                    SpecRule::SPEC_NAME => 'style amp-custom',
                    SpecRule::UNIQUE => true,
                    SpecRule::MANDATORY_PARENT => Element::HEAD,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::AMP_CUSTOM,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::VALUE_CASEI => [
                                'text/css',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'nonce-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#stylesheets',
                    SpecRule::CDATA => [
                        SpecRule::MAX_BYTES => 75000,
                        SpecRule::MAX_BYTES_SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#maximum-size',
                        SpecRule::DISALLOWED_CDATA_REGEX => [
                            [
                                'regex' => '<!--',
                                'errorMessage' => 'html comments',
                            ],
                            [
                                'regex' => '(^|\W)i-amphtml-',
                                'errorMessage' => 'CSS i-amphtml- name prefix',
                            ],
                        ],
                        SpecRule::CSS_SPEC => [
                            'atRuleSpec' => [
                                [
                                    'name' => 'font-face',
                                ],
                                [
                                    'name' => 'keyframes',
                                ],
                                [
                                    'name' => 'media',
                                ],
                                [
                                    'name' => 'page',
                                ],
                                [
                                    'name' => 'supports',
                                ],
                            ],
                        ],
                        SpecRule::DOC_CSS_BYTES => true,
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::NAMED_ID => 'STYLE_AMP_CUSTOM',
                    SpecRule::DESCRIPTIVE_NAME => 'style amp-custom',
                ]
            ),
            'style amp-custom (AMP4ADS)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::STYLE,
                    SpecRule::SPEC_NAME => 'style amp-custom (AMP4ADS)',
                    SpecRule::UNIQUE => true,
                    SpecRule::MANDATORY_PARENT => Element::HEAD,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::AMP_CUSTOM,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::VALUE_CASEI => [
                                'text/css',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'nonce-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/a4a_spec/#css',
                    SpecRule::CDATA => [
                        SpecRule::MAX_BYTES => 20000,
                        SpecRule::MAX_BYTES_SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#maximum-size',
                        SpecRule::DISALLOWED_CDATA_REGEX => [
                            [
                                'regex' => '<!--',
                                'errorMessage' => 'html comments',
                            ],
                            [
                                'regex' => '(^|\W)i-amphtml-',
                                'errorMessage' => 'CSS i-amphtml- name prefix',
                            ],
                        ],
                        SpecRule::CSS_SPEC => [
                            'atRuleSpec' => [
                                [
                                    'name' => 'font-face',
                                ],
                                [
                                    'name' => 'keyframes',
                                ],
                                [
                                    'name' => 'media',
                                    'mediaQuerySpec' => [
                                        'issuesAsError' => false,
                                        'type' => [
                                            'all',
                                            'print',
                                            'screen',
                                            'speech',
                                        ],
                                        'feature' => [
                                            'width',
                                            'height',
                                            'aspect-ratio',
                                            'orientation',
                                            'resolution',
                                        ],
                                    ],
                                ],
                                [
                                    'name' => 'supports',
                                ],
                            ],
                            'validateAmp4ads' => true,
                        ],
                        SpecRule::DOC_CSS_BYTES => true,
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP4ADS,
                    ],
                    SpecRule::DESCRIPTIVE_NAME => 'style amp-custom',
                ]
            ),
            'style amp-custom (AMP4EMAIL)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::STYLE,
                    SpecRule::SPEC_NAME => 'style amp-custom (AMP4EMAIL)',
                    SpecRule::UNIQUE => true,
                    SpecRule::MANDATORY_PARENT => Element::HEAD,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::AMP_CUSTOM,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::VALUE_CASEI => [
                                'text/css',
                            ],
                        ],
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/email-spec/amp-email-css',
                    SpecRule::CDATA => [
                        SpecRule::MAX_BYTES => 75000,
                        SpecRule::MAX_BYTES_SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#maximum-size',
                        SpecRule::DISALLOWED_CDATA_REGEX => [
                            [
                                'regex' => '<!--',
                                'errorMessage' => 'html comments',
                            ],
                            [
                                'regex' => '(^|\W)i-amphtml-',
                                'errorMessage' => 'CSS i-amphtml- name prefix',
                            ],
                        ],
                        SpecRule::CSS_SPEC => [
                            'atRuleSpec' => [
                                [
                                    'name' => 'media',
                                    'mediaQuerySpec' => [
                                        'issuesAsError' => true,
                                        'type' => [
                                            'all',
                                            'screen',
                                        ],
                                        'feature' => [
                                            'device-width',
                                            'hover',
                                            'max-device-width',
                                            'max-resolution',
                                            'max-width',
                                            'min-device-width',
                                            'min-resolution',
                                            'min-width',
                                            'orientation',
                                            'pointer',
                                            'resolution',
                                            'width',
                                        ],
                                    ],
                                ],
                                [
                                    'name' => 'page',
                                ],
                            ],
                        ],
                        SpecRule::DOC_CSS_BYTES => true,
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP4EMAIL,
                    ],
                    SpecRule::DISABLED_BY => [
                        'data-css-strict',
                    ],
                    SpecRule::DESCRIPTIVE_NAME => 'style amp-custom',
                ]
            ),
            'style amp-custom (css-strict)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::STYLE,
                    SpecRule::SPEC_NAME => 'style amp-custom (css-strict)',
                    SpecRule::UNIQUE => true,
                    SpecRule::MANDATORY_PARENT => Element::HEAD,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::AMP_CUSTOM,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::VALUE_CASEI => [
                                'text/css',
                            ],
                        ],
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/email-spec/amp-email-css',
                    SpecRule::CDATA => [
                        SpecRule::MAX_BYTES => 75000,
                        SpecRule::MAX_BYTES_SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#maximum-size',
                        SpecRule::DISALLOWED_CDATA_REGEX => [
                            [
                                'regex' => '<!--',
                                'errorMessage' => 'html comments',
                            ],
                            [
                                'regex' => '(^|\W)i-amphtml-',
                                'errorMessage' => 'CSS i-amphtml- name prefix',
                            ],
                        ],
                        SpecRule::CSS_SPEC => [
                            'atRuleSpec' => [
                                [
                                    'name' => 'media',
                                    'mediaQuerySpec' => [
                                        'issuesAsError' => true,
                                        'type' => [
                                            'all',
                                            'screen',
                                        ],
                                        'feature' => [
                                            'device-width',
                                            'hover',
                                            'max-device-width',
                                            'max-resolution',
                                            'max-width',
                                            'min-device-width',
                                            'min-resolution',
                                            'min-width',
                                            'orientation',
                                            'pointer',
                                            'resolution',
                                            'width',
                                        ],
                                    ],
                                ],
                            ],
                            'selectorSpec' => [
                                'attributeName' => [
                                    'active',
                                    'alt',
                                    'autocomplete',
                                    'autoexpand',
                                    'checked',
                                    'class',
                                    'controls',
                                    'dir',
                                    'disabled',
                                    'expanded',
                                    'fallback',
                                    'fetch-error',
                                    'height',
                                    'hidden',
                                    'id',
                                    'items',
                                    'layout',
                                    'name',
                                    'noloading',
                                    'novalidate',
                                    'open',
                                    'option',
                                    'overflow',
                                    'placeholder',
                                    'readonly',
                                    'required',
                                    'role',
                                    'scrollable',
                                    'selected',
                                    'side',
                                    'sizes',
                                    'submit-error',
                                    'submit-success',
                                    'submitting',
                                    'title',
                                    'type',
                                    'value',
                                    'width',
                                ],
                                'pseudoClass' => [
                                    'active',
                                    'checked',
                                    'default',
                                    'disabled',
                                    'empty',
                                    'enabled',
                                    'first-child',
                                    'first-of-type',
                                    'focus',
                                    'focus-within',
                                    'hover',
                                    'in-range',
                                    'indeterminate',
                                    'invalid',
                                    'last-child',
                                    'last-of-type',
                                    'not',
                                    'nth-child',
                                    'nth-last-child',
                                    'nth-last-of-type',
                                    'nth-of-type',
                                    'only-child',
                                    'only-of-type',
                                    'optional',
                                    'out-of-range',
                                    'read-only',
                                    'read-write',
                                    'required',
                                    'valid',
                                ],
                            ],
                        ],
                        SpecRule::DOC_CSS_BYTES => true,
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP4EMAIL,
                    ],
                    SpecRule::ENABLED_BY => [
                        'data-css-strict',
                    ],
                    SpecRule::DESCRIPTIVE_NAME => 'style amp-custom',
                ]
            ),
            'style amp-custom-length-check' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::STYLE,
                    SpecRule::SPEC_NAME => 'style amp-custom-length-check',
                    SpecRule::UNIQUE => true,
                    SpecRule::MANDATORY_PARENT => Element::HEAD,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::AMP_CUSTOM_LENGTH_CHECK,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                '',
                            ],
                            SpecRule::DISPATCH_KEY => 'NAME_DISPATCH',
                        ],
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::VALUE_CASEI => [
                                'text/css',
                            ],
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'nonce-attr',
                    ],
                    SpecRule::CDATA => [
                        SpecRule::MAX_BYTES => -1,
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                    SpecRule::DESCRIPTIVE_NAME => 'style amp-custom-length-check',
                ]
            ),
            'style[amp-keyframes]' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::STYLE,
                    SpecRule::SPEC_NAME => 'style[amp-keyframes]',
                    SpecRule::UNIQUE => true,
                    SpecRule::MANDATORY_PARENT => Element::BODY,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::AMP_KEYFRAMES,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                '',
                            ],
                            SpecRule::DISPATCH_KEY => 'NAME_DISPATCH',
                        ],
                    ],
                    SpecRule::CDATA => [
                        SpecRule::MAX_BYTES => 500000,
                        SpecRule::MAX_BYTES_SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#keyframes-stylesheet',
                        SpecRule::CSS_SPEC => [
                            'atRuleSpec' => [
                                [
                                    'name' => 'keyframes',
                                ],
                                [
                                    'name' => 'media',
                                ],
                                [
                                    'name' => 'supports',
                                ],
                            ],
                            'validateKeyframes' => true,
                            'declaration' => [
                                'animation-timing-function',
                                'offset-distance',
                                'opacity',
                                'transform',
                                'visibility',
                            ],
                        ],
                        SpecRule::DOC_CSS_BYTES => false,
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                    SpecRule::MANDATORY_LAST_CHILD => true,
                    SpecRule::DESCRIPTIVE_NAME => 'style[amp-keyframes]',
                ]
            ),
            'style[amp-runtime] (transformed)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::STYLE,
                    SpecRule::SPEC_NAME => 'style[amp-runtime] (transformed)',
                    SpecRule::MANDATORY => true,
                    SpecRule::UNIQUE => true,
                    SpecRule::MANDATORY_PARENT => Element::HEAD,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::AMP_RUNTIME,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                '',
                            ],
                            SpecRule::DISPATCH_KEY => 'NAME_VALUE_PARENT_DISPATCH',
                        ],
                        [
                            SpecRule::NAME => Attribute::I_AMPHTML_VERSION,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_REGEX => '^\d{15}|latest$',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'nonce-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#stylesheets',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::ENABLED_BY => [
                        'transformed',
                    ],
                    SpecRule::DESCRIPTIVE_NAME => 'style[amp-runtime]',
                ]
            ),
            Element::SUB => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SUB,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            'subscriptions-section content swg_amp_cache_nonce' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SECTION,
                    SpecRule::SPEC_NAME => 'subscriptions-section content swg_amp_cache_nonce',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ENCRYPTED,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_DISPATCH',
                        ],
                        [
                            SpecRule::NAME => Attribute::SUBSCRIPTIONS_SECTION,
                            SpecRule::VALUE_CASEI => [
                                'content',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::SWG_AMP_CACHE_NONCE,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::MANDATORY_ANCESTOR => Element::BODY,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                    SpecRule::SATISFIES => [
                        'subscriptions-section content swg_amp_cache_nonce',
                    ],
                    SpecRule::REQUIRES => [
                        'span swg_amp_cache_nonce',
                    ],
                ]
            ),
            'subscriptions script ciphertext' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SCRIPT,
                    SpecRule::SPEC_NAME => 'subscriptions script ciphertext',
                    SpecRule::MANDATORY_PARENT => 'subscriptions-section content swg_amp_cache_nonce',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::CIPHERTEXT,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISPATCH_KEY => 'NAME_DISPATCH',
                        ],
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE_CASEI => [
                                'application/octet-stream',
                            ],
                        ],
                    ],
                    SpecRule::CDATA => [
                        SpecRule::DISALLOWED_CDATA_REGEX => [
                            [
                                'regex' => '<!--',
                                'errorMessage' => 'html comments',
                            ],
                        ],
                    ],
                    SpecRule::MANDATORY_ANCESTOR => Element::BODY,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            Element::SUMMARY => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SUMMARY,
                    SpecRule::MANDATORY_PARENT => Element::DETAILS,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::SUP => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SUP,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::SVG => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SVG,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::CONTENTSCRIPTTYPE,
                        ],
                        [
                            SpecRule::NAME => Attribute::CONTENTSTYLETYPE,
                        ],
                        [
                            SpecRule::NAME => Attribute::EXTERNALRESOURCESREQUIRED,
                        ],
                        [
                            SpecRule::NAME => Attribute::HEIGHT,
                        ],
                        [
                            SpecRule::NAME => Attribute::PRESERVEASPECTRATIO,
                        ],
                        [
                            SpecRule::NAME => Attribute::VERSION,
                            SpecRule::VALUE => [
                                '1.0',
                                '1.1',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::VIEWBOX,
                        ],
                        [
                            SpecRule::NAME => Attribute::WIDTH,
                        ],
                        [
                            SpecRule::NAME => Attribute::X,
                        ],
                        [
                            SpecRule::NAME => Attribute::Y,
                        ],
                        [
                            SpecRule::NAME => Attribute::ZOOMANDPAN,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'svg-conditional-processing-attributes',
                        'svg-core-attributes',
                        'svg-presentation-attributes',
                        'svg-style-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            'svg title' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::TITLE,
                    SpecRule::SPEC_NAME => 'svg title',
                    SpecRule::ATTR_LISTS => [
                        'svg-core-attributes',
                        'svg-style-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                    SpecRule::MANDATORY_ANCESTOR => Element::SVG,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            Element::SWITCH_ => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SWITCH_,
                    SpecRule::ATTR_LISTS => [
                        'svg-conditional-processing-attributes',
                        'svg-core-attributes',
                        'svg-presentation-attributes',
                        'svg-style-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                    SpecRule::MANDATORY_ANCESTOR => Element::SVG,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            Element::SYMBOL => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SYMBOL,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::EXTERNALRESOURCESREQUIRED,
                        ],
                        [
                            SpecRule::NAME => Attribute::HEIGHT,
                        ],
                        [
                            SpecRule::NAME => Attribute::PRESERVEASPECTRATIO,
                        ],
                        [
                            SpecRule::NAME => Attribute::VIEWBOX,
                        ],
                        [
                            SpecRule::NAME => Attribute::WIDTH,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'svg-core-attributes',
                        'svg-presentation-attributes',
                        'svg-style-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                    SpecRule::MANDATORY_ANCESTOR => Element::SVG,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            Element::TABLE => new Tag(
                [
                    SpecRule::TAG_NAME => Element::TABLE,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ALIGN,
                        ],
                        [
                            SpecRule::NAME => Attribute::BGCOLOR,
                        ],
                        [
                            SpecRule::NAME => Attribute::BORDER,
                            SpecRule::VALUE => [
                                '0',
                                '1',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::CELLPADDING,
                        ],
                        [
                            SpecRule::NAME => Attribute::CELLSPACING,
                        ],
                        [
                            SpecRule::NAME => Attribute::SORTABLE,
                            SpecRule::DISABLED_BY => [
                                'amp4email',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::WIDTH,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::TBODY => new Tag(
                [
                    SpecRule::TAG_NAME => Element::TBODY,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::TD => new Tag(
                [
                    SpecRule::TAG_NAME => Element::TD,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ALIGN,
                        ],
                        [
                            SpecRule::NAME => Attribute::BGCOLOR,
                        ],
                        [
                            SpecRule::NAME => Attribute::COLSPAN,
                        ],
                        [
                            SpecRule::NAME => Attribute::HEADERS,
                        ],
                        [
                            SpecRule::NAME => Attribute::HEIGHT,
                        ],
                        [
                            SpecRule::NAME => Attribute::ROWSPAN,
                        ],
                        [
                            SpecRule::NAME => Attribute::VALIGN,
                        ],
                        [
                            SpecRule::NAME => Attribute::WIDTH,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::TEMPLATE => new Tag(
                [
                    SpecRule::TAG_NAME => Element::TEMPLATE,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ID,
                            SpecRule::DISALLOWED_VALUE_REGEX => '(^|\s)(__amp_\S*|__count__|__defineGetter__|__defineSetter__|__lookupGetter__|__lookupSetter__|__noSuchMethod__|__parent__|__proto__|__AMP_\S*|\$p|\$proxy|acceptCharset|addEventListener|appendChild|assignedSlot|attachShadow|AMP|baseURI|checkValidity|childElementCount|childNodes|classList|className|clientHeight|clientLeft|clientTop|clientWidth|compareDocumentPosition|computedName|computedRole|contentEditable|createShadowRoot|enqueAction|firstChild|firstElementChild|getAnimations|getAttribute|getAttributeNS|getAttributeNode|getAttributeNodeNS|getBoundingClientRect|getClientRects|getDestinationInsertionPoints|getElementsByClassName|getElementsByTagName|getElementsByTagNameNS|getRootNode|hasAttribute|hasAttributeNS|hasAttributes|hasChildNodes|hasPointerCapture|i-amphtml-\S*|innerHTML|innerText|inputMode|insertAdjacentElement|insertAdjacentHTML|insertAdjacentText|isContentEditable|isDefaultNamespace|isEqualNode|isSameNode|lastChild|lastElementChild|lookupNamespaceURI|namespaceURI|nextElementSibling|nextSibling|nodeName|nodeType|nodeValue|offsetHeight|offsetLeft|offsetParent|offsetTop|offsetWidth|outerHTML|outerText|ownerDocument|parentElement|parentNode|previousElementSibling|previousSibling|querySelector|querySelectorAll|releasePointerCapture|removeAttribute|removeAttributeNS|removeAttributeNode|removeChild|removeEventListener|replaceChild|reportValidity|requestPointerLock|scrollHeight|scrollIntoView|scrollIntoViewIfNeeded|scrollLeft|scrollWidth|setAttribute|setAttributeNS|setAttributeNode|setAttributeNodeNS|setPointerCapture|shadowRoot|styleMap|tabIndex|tagName|textContent|toString|valueOf|(webkit|ms|moz|o)dropzone|(webkit|moz|ms|o)MatchesSelector|(webkit|moz|ms|o)RequestFullScreen|(webkit|moz|ms|o)RequestFullscreen)(\s|$)',
                            SpecRule::ADD_VALUE_TO_SET => 'TEMPLATE_IDS',
                        ],
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                'amp-mustache',
                            ],
                        ],
                    ],
                    SpecRule::DISALLOWED_ANCESTOR => [
                        'TEMPLATE',
                        'AMP-DATE-PICKER',
                        'AMP-STORY-AUTO-ADS',
                        'FORM DIV [submit-success][template]',
                        'FORM DIV [submit-error][template]',
                        'FORM DIV [submitting][template]',
                        'FORM DIV [verify-error][template]',
                    ],
                    SpecRule::MANDATORY_ANCESTOR => Element::BODY,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-mustache',
                    ],
                ]
            ),
            'TEMPLATE (AMP4EMAIL)' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::TEMPLATE,
                    SpecRule::SPEC_NAME => 'TEMPLATE (AMP4EMAIL)',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ID,
                            SpecRule::DISALLOWED_VALUE_REGEX => '(^|\s)(__amp_\S*|__count__|__defineGetter__|__defineSetter__|__lookupGetter__|__lookupSetter__|__noSuchMethod__|__parent__|__proto__|__AMP_\S*|\$p|\$proxy|acceptCharset|addEventListener|appendChild|assignedSlot|attachShadow|AMP|baseURI|checkValidity|childElementCount|childNodes|classList|className|clientHeight|clientLeft|clientTop|clientWidth|compareDocumentPosition|computedName|computedRole|contentEditable|createShadowRoot|enqueAction|firstChild|firstElementChild|getAnimations|getAttribute|getAttributeNS|getAttributeNode|getAttributeNodeNS|getBoundingClientRect|getClientRects|getDestinationInsertionPoints|getElementsByClassName|getElementsByTagName|getElementsByTagNameNS|getRootNode|hasAttribute|hasAttributeNS|hasAttributes|hasChildNodes|hasPointerCapture|i-amphtml-\S*|innerHTML|innerText|inputMode|insertAdjacentElement|insertAdjacentHTML|insertAdjacentText|isContentEditable|isDefaultNamespace|isEqualNode|isSameNode|lastChild|lastElementChild|lookupNamespaceURI|namespaceURI|nextElementSibling|nextSibling|nodeName|nodeType|nodeValue|offsetHeight|offsetLeft|offsetParent|offsetTop|offsetWidth|outerHTML|outerText|ownerDocument|parentElement|parentNode|previousElementSibling|previousSibling|querySelector|querySelectorAll|releasePointerCapture|removeAttribute|removeAttributeNS|removeAttributeNode|removeChild|removeEventListener|replaceChild|reportValidity|requestPointerLock|scrollHeight|scrollIntoView|scrollIntoViewIfNeeded|scrollLeft|scrollWidth|setAttribute|setAttributeNS|setAttributeNode|setAttributeNodeNS|setPointerCapture|shadowRoot|styleMap|tabIndex|tagName|textContent|toString|valueOf|(webkit|ms|moz|o)dropzone|(webkit|moz|ms|o)MatchesSelector|(webkit|moz|ms|o)RequestFullScreen|(webkit|moz|ms|o)RequestFullscreen)(\s|$)',
                            SpecRule::ADD_VALUE_TO_SET => 'TEMPLATE_IDS',
                        ],
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::MANDATORY => true,
                            SpecRule::VALUE => [
                                'amp-mustache',
                            ],
                        ],
                    ],
                    SpecRule::DISALLOWED_ANCESTOR => [
                        'TEMPLATE (AMP4EMAIL)',
                        'AMP-DATE-PICKER',
                        'FORM DIV [submit-success][template]',
                        'FORM DIV [submit-error][template]',
                        'FORM DIV [submitting][template]',
                        'FORM DIV [verify-error][template]',
                        'FORM DIV [submitting]',
                    ],
                    SpecRule::MANDATORY_ANCESTOR => Element::BODY,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP4EMAIL,
                    ],
                    SpecRule::REQUIRES_EXTENSION => [
                        'amp-mustache',
                    ],
                ]
            ),
            Element::TEXT => new Tag(
                [
                    SpecRule::TAG_NAME => Element::TEXT,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DX,
                        ],
                        [
                            SpecRule::NAME => Attribute::DY,
                        ],
                        [
                            SpecRule::NAME => Attribute::EXTERNALRESOURCESREQUIRED,
                        ],
                        [
                            SpecRule::NAME => Attribute::LENGTHADJUST,
                        ],
                        [
                            SpecRule::NAME => Attribute::ROTATE,
                        ],
                        [
                            SpecRule::NAME => Attribute::TEXT_ANCHOR,
                        ],
                        [
                            SpecRule::NAME => Attribute::TEXTLENGTH,
                        ],
                        [
                            SpecRule::NAME => Attribute::TRANSFORM,
                        ],
                        [
                            SpecRule::NAME => Attribute::X,
                        ],
                        [
                            SpecRule::NAME => Attribute::Y,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'svg-conditional-processing-attributes',
                        'svg-core-attributes',
                        'svg-presentation-attributes',
                        'svg-style-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                    SpecRule::MANDATORY_ANCESTOR => Element::SVG,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            Element::TEXTAREA => new Tag(
                [
                    SpecRule::TAG_NAME => Element::TEXTAREA,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::AUTOCOMPLETE,
                        ],
                        [
                            SpecRule::NAME => Attribute::AUTOEXPAND,
                            SpecRule::REQUIRES_EXTENSION => [
                                'amp-form',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::AUTOFOCUS,
                            SpecRule::DISABLED_BY => [
                                'amp4email',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::COLS,
                        ],
                        [
                            SpecRule::NAME => Attribute::DISABLED,
                        ],
                        [
                            SpecRule::NAME => Attribute::MAXLENGTH,
                        ],
                        [
                            SpecRule::NAME => Attribute::MINLENGTH,
                        ],
                        [
                            SpecRule::NAME => Attribute::NO_VERIFY,
                            SpecRule::VALUE => [
                                '',
                            ],
                            SpecRule::DISABLED_BY => [
                                'amp4email',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::PATTERN,
                        ],
                        [
                            SpecRule::NAME => Attribute::PLACEHOLDER,
                        ],
                        [
                            SpecRule::NAME => Attribute::READONLY,
                        ],
                        [
                            SpecRule::NAME => Attribute::REQUIRED,
                        ],
                        [
                            SpecRule::NAME => Attribute::ROWS,
                        ],
                        [
                            SpecRule::NAME => Attribute::SELECTIONDIRECTION,
                            SpecRule::DISABLED_BY => [
                                'amp4email',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::SELECTIONEND,
                            SpecRule::DISABLED_BY => [
                                'amp4email',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::SELECTIONSTART,
                            SpecRule::DISABLED_BY => [
                                'amp4email',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::SPELLCHECK,
                        ],
                        [
                            SpecRule::NAME => Attribute::WRAP,
                        ],
                        [
                            SpecRule::NAME => '[AUTOCOMPLETE]',
                        ],
                        [
                            SpecRule::NAME => '[AUTOFOCUS]',
                            SpecRule::DISABLED_BY => [
                                'amp4email',
                            ],
                        ],
                        [
                            SpecRule::NAME => '[COLS]',
                        ],
                        [
                            SpecRule::NAME => '[DEFAULTTEXT]',
                        ],
                        [
                            SpecRule::NAME => '[DISABLED]',
                        ],
                        [
                            SpecRule::NAME => '[MAXLENGTH]',
                        ],
                        [
                            SpecRule::NAME => '[MINLENGTH]',
                        ],
                        [
                            SpecRule::NAME => '[PATTERN]',
                        ],
                        [
                            SpecRule::NAME => '[PLACEHOLDER]',
                        ],
                        [
                            SpecRule::NAME => '[READONLY]',
                        ],
                        [
                            SpecRule::NAME => '[REQUIRED]',
                        ],
                        [
                            SpecRule::NAME => '[ROWS]',
                        ],
                        [
                            SpecRule::NAME => '[SELECTIONDIRECTION]',
                            SpecRule::DISABLED_BY => [
                                'amp4email',
                            ],
                        ],
                        [
                            SpecRule::NAME => '[SELECTIONEND]',
                            SpecRule::DISABLED_BY => [
                                'amp4email',
                            ],
                        ],
                        [
                            SpecRule::NAME => '[SELECTIONSTART]',
                            SpecRule::DISABLED_BY => [
                                'amp4email',
                            ],
                        ],
                        [
                            SpecRule::NAME => '[SPELLCHECK]',
                        ],
                        [
                            SpecRule::NAME => '[WRAP]',
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'name-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-form/',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::TEXTPATH => new Tag(
                [
                    SpecRule::TAG_NAME => Element::TEXTPATH,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::EXTERNALRESOURCESREQUIRED,
                        ],
                        [
                            SpecRule::NAME => Attribute::METHOD,
                        ],
                        [
                            SpecRule::NAME => Attribute::SPACING,
                        ],
                        [
                            SpecRule::NAME => Attribute::STARTOFFSET,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'svg-conditional-processing-attributes',
                        'svg-core-attributes',
                        'svg-presentation-attributes',
                        'svg-style-attr',
                        'svg-xlink-attributes',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                    SpecRule::MANDATORY_ANCESTOR => Element::SVG,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            Element::TFOOT => new Tag(
                [
                    SpecRule::TAG_NAME => Element::TFOOT,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::TH => new Tag(
                [
                    SpecRule::TAG_NAME => Element::TH,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ABBR,
                        ],
                        [
                            SpecRule::NAME => Attribute::ALIGN,
                        ],
                        [
                            SpecRule::NAME => Attribute::BGCOLOR,
                        ],
                        [
                            SpecRule::NAME => Attribute::COLSPAN,
                        ],
                        [
                            SpecRule::NAME => Attribute::HEADERS,
                        ],
                        [
                            SpecRule::NAME => Attribute::HEIGHT,
                        ],
                        [
                            SpecRule::NAME => Attribute::ROWSPAN,
                        ],
                        [
                            SpecRule::NAME => Attribute::SCOPE,
                        ],
                        [
                            SpecRule::NAME => Attribute::SORTED,
                            SpecRule::DISABLED_BY => [
                                'amp4email',
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::VALIGN,
                        ],
                        [
                            SpecRule::NAME => Attribute::WIDTH,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::THEAD => new Tag(
                [
                    SpecRule::TAG_NAME => Element::THEAD,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::TIME => new Tag(
                [
                    SpecRule::TAG_NAME => Element::TIME,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DATETIME,
                        ],
                        [
                            SpecRule::NAME => Attribute::PUBDATE,
                            SpecRule::VALUE => [
                                '',
                            ],
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            'title' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::TITLE,
                    SpecRule::SPEC_NAME => 'title',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => '[TEXT]',
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            'title [AMP4EMAIL]' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::TITLE,
                    SpecRule::SPEC_NAME => 'title [AMP4EMAIL]',
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => '[TEXT]',
                        ],
                    ],
                    SpecRule::DEPRECATION => 'Title tags in email have no meaning. This tag may become invalid in the future.',
                    SpecRule::DEPRECATION_URL => 'https://github.com/ampproject/amphtml/issues/22318',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::TR => new Tag(
                [
                    SpecRule::TAG_NAME => Element::TR,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::ALIGN,
                        ],
                        [
                            SpecRule::NAME => Attribute::BGCOLOR,
                        ],
                        [
                            SpecRule::NAME => Attribute::HEIGHT,
                        ],
                        [
                            SpecRule::NAME => Attribute::VALIGN,
                        ],
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::TREF => new Tag(
                [
                    SpecRule::TAG_NAME => Element::TREF,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::EXTERNALRESOURCESREQUIRED,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'svg-conditional-processing-attributes',
                        'svg-core-attributes',
                        'svg-presentation-attributes',
                        'svg-style-attr',
                        'svg-xlink-attributes',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                    SpecRule::MANDATORY_ANCESTOR => Element::SVG,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            Element::TSPAN => new Tag(
                [
                    SpecRule::TAG_NAME => Element::TSPAN,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::DX,
                        ],
                        [
                            SpecRule::NAME => Attribute::DY,
                        ],
                        [
                            SpecRule::NAME => Attribute::EXTERNALRESOURCESREQUIRED,
                        ],
                        [
                            SpecRule::NAME => Attribute::LENGTHADJUST,
                        ],
                        [
                            SpecRule::NAME => Attribute::ROTATE,
                        ],
                        [
                            SpecRule::NAME => Attribute::TEXTLENGTH,
                        ],
                        [
                            SpecRule::NAME => Attribute::X,
                        ],
                        [
                            SpecRule::NAME => Attribute::Y,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'svg-conditional-processing-attributes',
                        'svg-core-attributes',
                        'svg-presentation-attributes',
                        'svg-style-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                    SpecRule::MANDATORY_ANCESTOR => Element::SVG,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            Element::TT => new Tag(
                [
                    SpecRule::TAG_NAME => Element::TT,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            Element::U => new Tag(
                [
                    SpecRule::TAG_NAME => Element::U,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::UL => new Tag(
                [
                    SpecRule::TAG_NAME => Element::UL,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::USE_ => new Tag(
                [
                    SpecRule::TAG_NAME => Element::USE_,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::EXTERNALRESOURCESREQUIRED,
                        ],
                        [
                            SpecRule::NAME => Attribute::HEIGHT,
                        ],
                        [
                            SpecRule::NAME => Attribute::TRANSFORM,
                        ],
                        [
                            SpecRule::NAME => Attribute::WIDTH,
                        ],
                        [
                            SpecRule::NAME => Attribute::X,
                        ],
                        [
                            SpecRule::NAME => Attribute::Y,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'svg-conditional-processing-attributes',
                        'svg-core-attributes',
                        'svg-presentation-attributes',
                        'svg-style-attr',
                        'svg-xlink-attributes',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                    SpecRule::MANDATORY_ANCESTOR => Element::SVG,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            Element::VAR_ => new Tag(
                [
                    SpecRule::TAG_NAME => Element::VAR_,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
            Element::VIDEO => new Tag(
                [
                    SpecRule::TAG_NAME => Element::VIDEO,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::AUTOPLAY,
                        ],
                        [
                            SpecRule::NAME => Attribute::CONTROLS,
                        ],
                        [
                            SpecRule::NAME => Attribute::HEIGHT,
                        ],
                        [
                            SpecRule::NAME => Attribute::LOOP,
                        ],
                        [
                            SpecRule::NAME => Attribute::MUTED,
                            SpecRule::DEPRECATION => 'autoplay',
                            SpecRule::DEPRECATION_URL => 'https://amp.dev/documentation/components/amp-video/',
                        ],
                        [
                            SpecRule::NAME => Attribute::PLAYSINLINE,
                        ],
                        [
                            SpecRule::NAME => Attribute::POSTER,
                        ],
                        [
                            SpecRule::NAME => Attribute::PRELOAD,
                        ],
                        [
                            SpecRule::NAME => Attribute::SRC,
                            SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'data',
                                    'https',
                                ],
                                SpecRule::ALLOW_RELATIVE => false,
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::WIDTH,
                        ],
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-video/',
                    SpecRule::MANDATORY_ANCESTOR => Element::NOSCRIPT,
                    SpecRule::MANDATORY_ANCESTOR_SUGGESTED_ALTERNATIVE => Extension::VIDEO,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                    ],
                ]
            ),
            'video > source' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::SOURCE,
                    SpecRule::SPEC_NAME => 'video > source',
                    SpecRule::MANDATORY_PARENT => Element::VIDEO,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::MEDIA,
                        ],
                        [
                            SpecRule::NAME => Attribute::SRC,
                            SpecRule::MANDATORY => true,
                            SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                            SpecRule::VALUE_URL => [
                                SpecRule::PROTOCOL => [
                                    'https',
                                ],
                                SpecRule::ALLOW_RELATIVE => true,
                            ],
                        ],
                        [
                            SpecRule::NAME => Attribute::TYPE,
                            SpecRule::MANDATORY => true,
                        ],
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-video/',
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            'video > track' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::TRACK,
                    SpecRule::SPEC_NAME => 'video > track',
                    SpecRule::MANDATORY_PARENT => Element::VIDEO,
                    SpecRule::ATTR_LISTS => [
                        'track-attrs-no-subtitles',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            'video > track[kind=subtitles]' => new Tag(
                [
                    SpecRule::TAG_NAME => Element::TRACK,
                    SpecRule::SPEC_NAME => 'video > track[kind=subtitles]',
                    SpecRule::MANDATORY_PARENT => Element::VIDEO,
                    SpecRule::ATTR_LISTS => [
                        'track-attrs-subtitles',
                    ],
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            Element::VIEW => new Tag(
                [
                    SpecRule::TAG_NAME => Element::VIEW,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::EXTERNALRESOURCESREQUIRED,
                        ],
                        [
                            SpecRule::NAME => Attribute::PRESERVEASPECTRATIO,
                        ],
                        [
                            SpecRule::NAME => Attribute::VIEWBOX,
                        ],
                        [
                            SpecRule::NAME => Attribute::VIEWTARGET,
                        ],
                        [
                            SpecRule::NAME => Attribute::ZOOMANDPAN,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'svg-core-attributes',
                        'svg-style-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                    SpecRule::MANDATORY_ANCESTOR => Element::SVG,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            Element::VKERN => new Tag(
                [
                    SpecRule::TAG_NAME => Element::VKERN,
                    SpecRule::ATTRS => [
                        [
                            SpecRule::NAME => Attribute::G1,
                        ],
                        [
                            SpecRule::NAME => Attribute::G2,
                        ],
                        [
                            SpecRule::NAME => Attribute::K,
                        ],
                        [
                            SpecRule::NAME => Attribute::U1,
                        ],
                        [
                            SpecRule::NAME => Attribute::U2,
                        ],
                    ],
                    SpecRule::ATTR_LISTS => [
                        'svg-core-attributes',
                        'svg-style-attr',
                    ],
                    SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                    SpecRule::MANDATORY_ANCESTOR => Element::SVG,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                    ],
                ]
            ),
            Element::WBR => new Tag(
                [
                    SpecRule::TAG_NAME => Element::WBR,
                    SpecRule::HTML_FORMAT => [
                        Format::AMP,
                        Format::AMP4ADS,
                        Format::AMP4EMAIL,
                    ],
                ]
            ),
        ];
        $this->byTagName = [
            Element::A => [
                $this->tags[Element::A],
                $this->tags['A (AMP4EMAIL)'],
            ],
            Element::ABBR => $this->tags[Element::ABBR],
            Element::ACRONYM => $this->tags[Element::ACRONYM],
            Element::ADDRESS => $this->tags[Element::ADDRESS],
            Extension::_3D_GLTF => $this->tags[Extension::_3D_GLTF],
            Extension::_3Q_PLAYER => $this->tags[Extension::_3Q_PLAYER],
            Element::SCRIPT => [
                $this->tags['amp-access extension .json script'],
                $this->tags['amp-ad-exit configuration JSON'],
                $this->tags['amp-ad extension script'],
                $this->tags['amp-analytics extension .json script'],
                $this->tags['amp-animation extension .json script'],
                $this->tags['amp-anim extension script (AMP4EMAIL)'],
                $this->tags['amp-autocomplete JSON'],
                $this->tags['amp-bind extension .json script'],
                $this->tags['amp-consent extension .json script'],
                $this->tags['amp-experiment extension .json script'],
                $this->tags['amp-experiment story extension .json script'],
                $this->tags['amp-geo extension .json script'],
                $this->tags['amp-ima-video > script[type=application/json]'],
                $this->tags['amp-link-rewriter extension .json script'],
                $this->tags['AMP-NEXT-PAGE > SCRIPT[type=application/json]'],
                $this->tags['amp-script extension local script'],
                $this->tags['amp-story-animation json script'],
                $this->tags['amp-story-auto-ads config script'],
                $this->tags['amp-story-bookend extension .json script'],
                $this->tags['amp-story-consent extension .json script'],
                $this->tags['amp-subscriptions extension .json script'],
                $this->tags['amp-video extension script'],
                $this->tags['amp4ads engine script'],
                $this->tags['amphtml engine script'],
                $this->tags['amphtml engine script (LTS)'],
                $this->tags['amphtml engine script [AMP4EMAIL]'],
                $this->tags['cryptokeys .json script'],
                $this->tags[Element::SCRIPT],
                $this->tags['SCRIPT (2)'],
                $this->tags['SCRIPT (3)'],
                $this->tags['SCRIPT (4)'],
                $this->tags['SCRIPT (5)'],
                $this->tags['SCRIPT (6)'],
                $this->tags['SCRIPT (7)'],
                $this->tags['SCRIPT (8)'],
                $this->tags['SCRIPT (9)'],
                $this->tags['SCRIPT (10)'],
                $this->tags['SCRIPT (11)'],
                $this->tags['SCRIPT (12)'],
                $this->tags['SCRIPT (13)'],
                $this->tags['SCRIPT (14)'],
                $this->tags['SCRIPT (15)'],
                $this->tags['SCRIPT (16)'],
                $this->tags['SCRIPT (17)'],
                $this->tags['SCRIPT (18)'],
                $this->tags['SCRIPT (19)'],
                $this->tags['SCRIPT (20)'],
                $this->tags['SCRIPT (21)'],
                $this->tags['SCRIPT (22)'],
                $this->tags['SCRIPT (23)'],
                $this->tags['SCRIPT (24)'],
                $this->tags['SCRIPT (25)'],
                $this->tags['SCRIPT (26)'],
                $this->tags['SCRIPT (27)'],
                $this->tags['SCRIPT (28)'],
                $this->tags['SCRIPT (29)'],
                $this->tags['SCRIPT (30)'],
                $this->tags['SCRIPT (31)'],
                $this->tags['SCRIPT (32)'],
                $this->tags['SCRIPT (33)'],
                $this->tags['SCRIPT (34)'],
                $this->tags['SCRIPT (35)'],
                $this->tags['SCRIPT (36)'],
                $this->tags['SCRIPT (37)'],
                $this->tags['SCRIPT (38)'],
                $this->tags['SCRIPT (39)'],
                $this->tags['SCRIPT (40)'],
                $this->tags['SCRIPT (41)'],
                $this->tags['SCRIPT (42)'],
                $this->tags['SCRIPT (43)'],
                $this->tags['SCRIPT (44)'],
                $this->tags['SCRIPT (45)'],
                $this->tags['SCRIPT (46)'],
                $this->tags['SCRIPT (47)'],
                $this->tags['SCRIPT (48)'],
                $this->tags['SCRIPT (49)'],
                $this->tags['SCRIPT (50)'],
                $this->tags['SCRIPT (51)'],
                $this->tags['SCRIPT (52)'],
                $this->tags['SCRIPT (53)'],
                $this->tags['SCRIPT (54)'],
                $this->tags['SCRIPT (55)'],
                $this->tags['SCRIPT (56)'],
                $this->tags['SCRIPT (57)'],
                $this->tags['SCRIPT (58)'],
                $this->tags['SCRIPT (59)'],
                $this->tags['SCRIPT (60)'],
                $this->tags['SCRIPT (61)'],
                $this->tags['SCRIPT (62)'],
                $this->tags['SCRIPT (63)'],
                $this->tags['SCRIPT (64)'],
                $this->tags['SCRIPT (65)'],
                $this->tags['SCRIPT (66)'],
                $this->tags['SCRIPT (67)'],
                $this->tags['SCRIPT (68)'],
                $this->tags['SCRIPT (69)'],
                $this->tags['SCRIPT (70)'],
                $this->tags['SCRIPT (71)'],
                $this->tags['SCRIPT (72)'],
                $this->tags['SCRIPT (73)'],
                $this->tags['SCRIPT (74)'],
                $this->tags['SCRIPT (75)'],
                $this->tags['SCRIPT (76)'],
                $this->tags['SCRIPT (77)'],
                $this->tags['SCRIPT (78)'],
                $this->tags['SCRIPT (79)'],
                $this->tags['SCRIPT (80)'],
                $this->tags['SCRIPT (81)'],
                $this->tags['SCRIPT (82)'],
                $this->tags['SCRIPT (83)'],
                $this->tags['SCRIPT (84)'],
                $this->tags['SCRIPT (85)'],
                $this->tags['SCRIPT (86)'],
                $this->tags['SCRIPT (87)'],
                $this->tags['SCRIPT (88)'],
                $this->tags['SCRIPT (89)'],
                $this->tags['SCRIPT (90)'],
                $this->tags['SCRIPT (91)'],
                $this->tags['SCRIPT (92)'],
                $this->tags['SCRIPT (93)'],
                $this->tags['SCRIPT (94)'],
                $this->tags['SCRIPT (95)'],
                $this->tags['SCRIPT (96)'],
                $this->tags['SCRIPT (97)'],
                $this->tags['SCRIPT (98)'],
                $this->tags['SCRIPT (99)'],
                $this->tags['SCRIPT (100)'],
                $this->tags['SCRIPT (101)'],
                $this->tags['SCRIPT (102)'],
                $this->tags['SCRIPT (103)'],
                $this->tags['SCRIPT (104)'],
                $this->tags['SCRIPT (105)'],
                $this->tags['SCRIPT (106)'],
                $this->tags['SCRIPT (107)'],
                $this->tags['SCRIPT (108)'],
                $this->tags['SCRIPT (109)'],
                $this->tags['SCRIPT (110)'],
                $this->tags['SCRIPT (111)'],
                $this->tags['SCRIPT (112)'],
                $this->tags['SCRIPT (113)'],
                $this->tags['SCRIPT (114)'],
                $this->tags['SCRIPT (115)'],
                $this->tags['SCRIPT (116)'],
                $this->tags['SCRIPT (117)'],
                $this->tags['SCRIPT (118)'],
                $this->tags['SCRIPT (119)'],
                $this->tags['SCRIPT (120)'],
                $this->tags['SCRIPT (121)'],
                $this->tags['SCRIPT (122)'],
                $this->tags['SCRIPT (123)'],
                $this->tags['SCRIPT (124)'],
                $this->tags['SCRIPT (125)'],
                $this->tags['SCRIPT (126)'],
                $this->tags['script id=amp-rtc'],
                $this->tags['script type=application/ld+json'],
                $this->tags['SCRIPT type=text/plain'],
                $this->tags['SCRIPT type=text/plain (AMP4EMAIL)'],
                $this->tags['SCRIPT[custom-element=amp-accordion] (AMP4EMAIL)'],
                $this->tags['SCRIPT[custom-element=amp-autocomplete] (AMP4EMAIL)'],
                $this->tags['SCRIPT[custom-element=amp-bind] (AMP4EMAIL)'],
                $this->tags['SCRIPT[custom-element=amp-carousel] (AMP4EMAIL)'],
                $this->tags['SCRIPT[custom-element=amp-fit-text] (AMP4EMAIL)'],
                $this->tags['SCRIPT[custom-element=amp-form] (AMP4EMAIL)'],
                $this->tags['SCRIPT[custom-element=amp-image-lightbox] (AMP4EMAIL)'],
                $this->tags['SCRIPT[custom-element=amp-lightbox] (AMP4ADS)'],
                $this->tags['SCRIPT[custom-element=amp-lightbox] (AMP4EMAIL)'],
                $this->tags['SCRIPT[custom-element=amp-list] (AMP4EMAIL)'],
                $this->tags['SCRIPT[custom-element=amp-selector] (AMP4EMAIL)'],
                $this->tags['SCRIPT[custom-element=amp-sidebar] (AMP4EMAIL)'],
                $this->tags['SCRIPT[custom-element=amp-timeago] (AMP4EMAIL)'],
                $this->tags['SCRIPT[custom-template=amp-mustache] (AMP4ADS)'],
                $this->tags['SCRIPT[custom-template=amp-mustache] (AMP4EMAIL)'],
                $this->tags['subscriptions script ciphertext'],
            ],
            Extension::ACCORDION => $this->tags[Extension::ACCORDION],
            Element::SECTION => [
                $this->tags['amp-accordion > section'],
                $this->tags[Element::SECTION],
                $this->tags['section (AMP4EMAIL)'],
                $this->tags['subscriptions-section content swg_amp_cache_nonce'],
            ],
            Extension::ACTION_MACRO => $this->tags[Extension::ACTION_MACRO],
            Extension::AD => [
                $this->tags[Extension::AD],
                $this->tags['amp-ad with data-enable-refresh attribute'],
                $this->tags['amp-ad with data-multi-size attribute'],
                $this->tags['amp-ad with type=custom'],
            ],
            Extension::AD_CUSTOM => $this->tags[Extension::AD_CUSTOM],
            Extension::AD_EXIT => $this->tags[Extension::AD_EXIT],
            Extension::ADDTHIS => $this->tags[Extension::ADDTHIS],
            Extension::ANALYTICS => $this->tags[Extension::ANALYTICS],
            Extension::ANIM => [
                $this->tags[Extension::ANIM],
                $this->tags['AMP-ANIM (AMP4EMAIL)'],
            ],
            Extension::ANIMATION => $this->tags[Extension::ANIMATION],
            Extension::APESTER_MEDIA => $this->tags[Extension::APESTER_MEDIA],
            Extension::APP_BANNER => $this->tags[Extension::APP_BANNER],
            Element::BUTTON => [
                $this->tags['amp-app-banner button[open-button]'],
                $this->tags['amp-list-load-more button[load-more-clickable]'],
                $this->tags[Element::BUTTON],
                $this->tags['button amp-nested-menu'],
            ],
            Extension::AUDIO => [
                $this->tags[Extension::AUDIO],
                $this->tags['amp-audio (A4A)'],
                $this->tags['amp-story >> amp-audio'],
            ],
            Element::SOURCE => [
                $this->tags['amp-audio > source'],
                $this->tags['amp-ima-video > source'],
                $this->tags['amp-video > source'],
                $this->tags['audio > source'],
                $this->tags['picture > source'],
                $this->tags['video > source'],
            ],
            Element::TRACK => [
                $this->tags['amp-audio > track'],
                $this->tags['amp-audio > track[kind=subtitles]'],
                $this->tags['amp-ima-video > track'],
                $this->tags['amp-ima-video > track[kind=subtitles]'],
                $this->tags['amp-video > track'],
                $this->tags['amp-video > track[kind=subtitles]'],
                $this->tags['audio > track'],
                $this->tags['audio > track[kind=subtitles]'],
                $this->tags['video > track'],
                $this->tags['video > track[kind=subtitles]'],
            ],
            Extension::AUTO_ADS => $this->tags[Extension::AUTO_ADS],
            Extension::AUTOCOMPLETE => [
                $this->tags['amp-autocomplete'],
                $this->tags['AMP-AUTOCOMPLETE (AMP4EMAIL)'],
            ],
            Element::INPUT => [
                $this->tags['amp-autocomplete > input'],
                $this->tags[Element::INPUT],
                $this->tags['input [mask=date-dd-mm-yyyy]'],
                $this->tags['input [mask=date-mm-dd-yyyy]'],
                $this->tags['input [mask=date-mm-yy]'],
                $this->tags['input [mask=date-yyyy-mm-dd]'],
                $this->tags['input [mask=payment-card]'],
                $this->tags['input [mask] (custom mask)'],
                $this->tags['INPUT [type=file]'],
                $this->tags['INPUT [type=password]'],
            ],
            Extension::BASE_CAROUSEL => [
                $this->tags[Extension::BASE_CAROUSEL],
                $this->tags['AMP-BASE-CAROUSEL [lightbox]'],
            ],
            Extension::BEOPINION => $this->tags[Extension::BEOPINION],
            Extension::BIND_MACRO => $this->tags[Extension::BIND_MACRO],
            Extension::BODYMOVIN_ANIMATION => $this->tags[Extension::BODYMOVIN_ANIMATION],
            Extension::BRID_PLAYER => $this->tags[Extension::BRID_PLAYER],
            Extension::BRIGHTCOVE => $this->tags[Extension::BRIGHTCOVE],
            Extension::BYSIDE_CONTENT => $this->tags[Extension::BYSIDE_CONTENT],
            Extension::CALL_TRACKING => $this->tags[Extension::CALL_TRACKING],
            Extension::CAROUSEL => [
                $this->tags[Extension::CAROUSEL],
                $this->tags['AMP-CAROUSEL lightbox'],
            ],
            Extension::CONNATIX_PLAYER => $this->tags[Extension::CONNATIX_PLAYER],
            Extension::CONSENT => [
                $this->tags[Extension::CONSENT],
                $this->tags['amp-consent [type]'],
            ],
            Extension::DAILYMOTION => $this->tags[Extension::DAILYMOTION],
            Extension::DATE_COUNTDOWN => $this->tags[Extension::DATE_COUNTDOWN],
            Extension::DATE_DISPLAY => $this->tags[Extension::DATE_DISPLAY],
            Element::TEMPLATE => [
                $this->tags['amp-date-picker > template [date-template]'],
                $this->tags['amp-date-picker > template [info-template]'],
                $this->tags['amp-story-auto-ads > template'],
                $this->tags[Element::TEMPLATE],
                $this->tags['TEMPLATE (AMP4EMAIL)'],
            ],
            Extension::DATE_PICKER => [
                $this->tags['amp-date-picker[type=range][mode=overlay]'],
                $this->tags['amp-date-picker[type=range][mode=static]'],
                $this->tags['amp-date-picker[type=single][mode=overlay]'],
                $this->tags['amp-date-picker[type=single][mode=static]'],
            ],
            Extension::DELIGHT_PLAYER => $this->tags[Extension::DELIGHT_PLAYER],
            Extension::EMBED => [
                $this->tags[Extension::EMBED],
                $this->tags['amp-embed with data-multi-size attribute'],
            ],
            Extension::EMBEDLY_CARD => $this->tags[Extension::EMBEDLY_CARD],
            Extension::EMBEDLY_KEY => $this->tags[Extension::EMBEDLY_KEY],
            Extension::EXPERIMENT => $this->tags[Extension::EXPERIMENT],
            Extension::FACEBOOK => $this->tags[Extension::FACEBOOK],
            Extension::FACEBOOK_COMMENTS => $this->tags[Extension::FACEBOOK_COMMENTS],
            Extension::FACEBOOK_LIKE => $this->tags[Extension::FACEBOOK_LIKE],
            Extension::FACEBOOK_PAGE => $this->tags[Extension::FACEBOOK_PAGE],
            Extension::FIT_TEXT => $this->tags[Extension::FIT_TEXT],
            Extension::FONT => $this->tags[Extension::FONT],
            Extension::FX_FLYING_CARPET => $this->tags[Extension::FX_FLYING_CARPET],
            Extension::GEO => $this->tags[Extension::GEO],
            Extension::GFYCAT => $this->tags[Extension::GFYCAT],
            Extension::GIST => $this->tags[Extension::GIST],
            Extension::GOOGLE_DOCUMENT_EMBED => $this->tags[Extension::GOOGLE_DOCUMENT_EMBED],
            Extension::GWD_ANIMATION => $this->tags[Extension::GWD_ANIMATION],
            Extension::HULU => $this->tags[Extension::HULU],
            Extension::IFRAME => $this->tags[Extension::IFRAME],
            Extension::IMA_VIDEO => $this->tags[Extension::IMA_VIDEO],
            Extension::IMAGE_LIGHTBOX => $this->tags[Extension::IMAGE_LIGHTBOX],
            Extension::IMAGE_SLIDER => [
                $this->tags[Extension::IMAGE_SLIDER],
                $this->tags['amp-image-slider (transformed)'],
            ],
            Element::DIV => [
                $this->tags['AMP-IMAGE-SLIDER > DIV [first]'],
                $this->tags['AMP-IMAGE-SLIDER > DIV [second]'],
                $this->tags['AMP-LIST DIV [fetch-error]'],
                $this->tags[Element::DIV],
                $this->tags['div amp-nested-menu'],
                $this->tags['FORM DIV [submit-error]'],
                $this->tags['FORM DIV [submit-error][template]'],
                $this->tags['FORM DIV [submit-success]'],
                $this->tags['FORM DIV [submit-success][template]'],
                $this->tags['FORM DIV [submitting]'],
                $this->tags['FORM DIV [submitting][template]'],
                $this->tags['FORM DIV [verify-error]'],
                $this->tags['FORM DIV [verify-error][template]'],
            ],
            Extension::IMG => [
                $this->tags[Extension::IMG],
                $this->tags['AMP-IMG (AMP4EMAIL)'],
                $this->tags['amp-img (transformed)'],
            ],
            Element::IMG => [
                $this->tags['amp-img > img (transformed)'],
                $this->tags['amp-img > img[placeholder] (transformed)'],
                $this->tags['IMG-I-AMPHTML-INTRINSIC-SIZER'],
                $this->tags['noscript > img'],
            ],
            Extension::IMGUR => $this->tags[Extension::IMGUR],
            Extension::INLINE_GALLERY => $this->tags[Extension::INLINE_GALLERY],
            Extension::INLINE_GALLERY_PAGINATION => [
                $this->tags['amp-inline-gallery-pagination'],
                $this->tags['amp-inline-gallery-pagination [inset]'],
            ],
            Extension::INLINE_GALLERY_THUMBNAILS => $this->tags[Extension::INLINE_GALLERY_THUMBNAILS],
            Extension::INSTAGRAM => $this->tags[Extension::INSTAGRAM],
            Extension::INSTALL_SERVICEWORKER => $this->tags[Extension::INSTALL_SERVICEWORKER],
            Extension::IZLESENE => $this->tags[Extension::IZLESENE],
            Extension::JWPLAYER => $this->tags[Extension::JWPLAYER],
            Extension::KALTURA_PLAYER => $this->tags[Extension::KALTURA_PLAYER],
            Extension::LAYOUT => $this->tags[Extension::LAYOUT],
            Extension::LIGHTBOX => [
                $this->tags[Extension::LIGHTBOX],
                $this->tags['amp-lightbox [AMP4ADS]'],
            ],
            Extension::LINK_REWRITER => $this->tags[Extension::LINK_REWRITER],
            Extension::LIST_ => [
                $this->tags[Extension::LIST_],
                $this->tags['AMP-LIST (AMP4EMAIL)'],
            ],
            Extension::LIST_LOAD_MORE => $this->tags[Extension::LIST_LOAD_MORE],
            Extension::LIVE_LIST => $this->tags[Extension::LIVE_LIST],
            Extension::MATHML => $this->tags[Extension::MATHML],
            Extension::MEGA_MENU => $this->tags[Extension::MEGA_MENU],
            Extension::MEGAPHONE => [
                $this->tags['amp-megaphone [data-episode]'],
                $this->tags['amp-megaphone [data-playlist]'],
            ],
            Extension::MINUTE_MEDIA_PLAYER => $this->tags[Extension::MINUTE_MEDIA_PLAYER],
            Extension::MOWPLAYER => $this->tags[Extension::MOWPLAYER],
            Extension::NESTED_MENU => $this->tags[Extension::NESTED_MENU],
            Extension::NEXT_PAGE => [
                $this->tags['amp-next-page with inline config'],
                $this->tags['amp-next-page with src attribute'],
                $this->tags['amp-next-page [type=adsense]'],
            ],
            Extension::NEXXTV_PLAYER => $this->tags[Extension::NEXXTV_PLAYER],
            Extension::O2_PLAYER => $this->tags[Extension::O2_PLAYER],
            Extension::ONETAP_GOOGLE => $this->tags[Extension::ONETAP_GOOGLE],
            Extension::OOYALA_PLAYER => $this->tags[Extension::OOYALA_PLAYER],
            Extension::ORIENTATION_OBSERVER => $this->tags[Extension::ORIENTATION_OBSERVER],
            Extension::PAN_ZOOM => $this->tags[Extension::PAN_ZOOM],
            Extension::PINTEREST => $this->tags[Extension::PINTEREST],
            Extension::PIXEL => $this->tags[Extension::PIXEL],
            Extension::PLAYBUZZ => $this->tags[Extension::PLAYBUZZ],
            Extension::POSITION_OBSERVER => $this->tags[Extension::POSITION_OBSERVER],
            Extension::POWR_PLAYER => $this->tags[Extension::POWR_PLAYER],
            Extension::REACH_PLAYER => $this->tags[Extension::REACH_PLAYER],
            Extension::RECAPTCHA_INPUT => $this->tags[Extension::RECAPTCHA_INPUT],
            Extension::REDBULL_PLAYER => $this->tags[Extension::REDBULL_PLAYER],
            Extension::REDDIT => $this->tags[Extension::REDDIT],
            Extension::RIDDLE_QUIZ => $this->tags[Extension::RIDDLE_QUIZ],
            Extension::SCRIPT => $this->tags[Extension::SCRIPT],
            Extension::SELECTOR => $this->tags[Extension::SELECTOR],
            Extension::SIDEBAR => [
                $this->tags['amp-sidebar'],
                $this->tags['amp-sidebar (AMP4EMAIL)'],
                $this->tags['amp-story >> amp-sidebar'],
            ],
            Element::NAV => [
                $this->tags['amp-sidebar > nav'],
                $this->tags[Element::NAV],
            ],
            Extension::SKIMLINKS => $this->tags[Extension::SKIMLINKS],
            Extension::SMARTLINKS => $this->tags[Extension::SMARTLINKS],
            Extension::SOCIAL_SHARE => $this->tags[Extension::SOCIAL_SHARE],
            Extension::SOUNDCLOUD => $this->tags[Extension::SOUNDCLOUD],
            Extension::SPRINGBOARD_PLAYER => $this->tags[Extension::SPRINGBOARD_PLAYER],
            Extension::STATE => [
                $this->tags['amp-state'],
                $this->tags['amp-state (AMP4EMAIL)'],
            ],
            Extension::STICKY_AD => $this->tags[Extension::STICKY_AD],
            Extension::STORY => $this->tags[Extension::STORY],
            Extension::STORY_360 => $this->tags[Extension::STORY_360],
            Extension::STORY_ANIMATION => $this->tags[Extension::STORY_ANIMATION],
            Extension::STORY_AUTO_ADS => $this->tags[Extension::STORY_AUTO_ADS],
            Extension::STORY_BOOKEND => $this->tags[Extension::STORY_BOOKEND],
            Extension::STORY_CONSENT => $this->tags[Extension::STORY_CONSENT],
            Extension::STORY_CTA_LAYER => $this->tags[Extension::STORY_CTA_LAYER],
            Extension::STORY_GRID_LAYER => $this->tags[Extension::STORY_GRID_LAYER],
            Extension::STORY_INTERACTIVE_BINARY_POLL => $this->tags[Extension::STORY_INTERACTIVE_BINARY_POLL],
            Extension::STORY_INTERACTIVE_POLL => $this->tags[Extension::STORY_INTERACTIVE_POLL],
            Extension::STORY_INTERACTIVE_QUIZ => $this->tags[Extension::STORY_INTERACTIVE_QUIZ],
            Extension::STORY_INTERACTIVE_RESULTS => $this->tags[Extension::STORY_INTERACTIVE_RESULTS],
            Extension::STORY_PAGE => $this->tags[Extension::STORY_PAGE],
            Extension::STORY_PAGE_ATTACHMENT => [
                $this->tags['amp-story-page-attachment'],
                $this->tags['amp-story-page-attachment[href]'],
            ],
            Extension::STORY_PANNING_MEDIA => $this->tags[Extension::STORY_PANNING_MEDIA],
            Extension::STORY_PLAYER => $this->tags[Extension::STORY_PLAYER],
            Extension::VIDEO => [
                $this->tags['amp-story >> amp-story-page-attachment >> amp-video'],
                $this->tags['amp-story >> amp-video'],
                $this->tags[Extension::VIDEO],
            ],
            Extension::TIMEAGO => $this->tags[Extension::TIMEAGO],
            Extension::TRUNCATE_TEXT => $this->tags[Extension::TRUNCATE_TEXT],
            Extension::TWITTER => $this->tags[Extension::TWITTER],
            Extension::USER_NOTIFICATION => $this->tags[Extension::USER_NOTIFICATION],
            Extension::VIDEO_IFRAME => [
                $this->tags['AMP-VIDEO-IFRAME with [placeholder]'],
                $this->tags['AMP-VIDEO-IFRAME with [placeholder] (transformed)'],
                $this->tags['AMP-VIDEO-IFRAME[poster]'],
            ],
            Extension::VIMEO => $this->tags[Extension::VIMEO],
            Extension::VINE => $this->tags[Extension::VINE],
            Extension::VIQEO_PLAYER => $this->tags[Extension::VIQEO_PLAYER],
            Extension::VK => $this->tags[Extension::VK],
            Extension::WEB_PUSH => $this->tags[Extension::WEB_PUSH],
            Extension::WEB_PUSH_WIDGET => $this->tags[Extension::WEB_PUSH_WIDGET],
            Extension::WISTIA_PLAYER => $this->tags[Extension::WISTIA_PLAYER],
            Extension::YOTPO => $this->tags[Extension::YOTPO],
            Extension::YOUTUBE => $this->tags[Extension::YOUTUBE],
            Element::ARTICLE => $this->tags[Element::ARTICLE],
            Element::ASIDE => $this->tags[Element::ASIDE],
            Element::AUDIO => $this->tags[Element::AUDIO],
            Element::B => $this->tags[Element::B],
            Element::BASE => $this->tags[Element::BASE],
            Element::BDI => $this->tags[Element::BDI],
            Element::BDO => $this->tags[Element::BDO],
            Element::BIG => $this->tags[Element::BIG],
            Element::BLOCKQUOTE => $this->tags[Element::BLOCKQUOTE],
            Element::BODY => $this->tags[Element::BODY],
            Element::BR => $this->tags[Element::BR],
            Element::CANVAS => $this->tags[Element::CANVAS],
            Element::CAPTION => $this->tags[Element::CAPTION],
            Element::CENTER => $this->tags[Element::CENTER],
            Element::CIRCLE => $this->tags[Element::CIRCLE],
            Element::CITE => $this->tags[Element::CITE],
            Element::CLIPPATH => $this->tags[Element::CLIPPATH],
            Element::CODE => $this->tags[Element::CODE],
            Element::COL => $this->tags[Element::COL],
            Element::COLGROUP => $this->tags[Element::COLGROUP],
            Element::DATA => $this->tags[Element::DATA],
            Element::DATALIST => $this->tags[Element::DATALIST],
            Element::DD => $this->tags[Element::DD],
            Element::DEFS => $this->tags[Element::DEFS],
            Element::DEL => $this->tags[Element::DEL],
            Element::DESC => $this->tags[Element::DESC],
            Element::DETAILS => $this->tags[Element::DETAILS],
            Element::DFN => $this->tags[Element::DFN],
            Element::DIR => $this->tags[Element::DIR],
            Element::DL => $this->tags[Element::DL],
            Element::DT => $this->tags[Element::DT],
            Element::ELLIPSE => $this->tags[Element::ELLIPSE],
            Element::EM => $this->tags[Element::EM],
            Element::FECOLORMATRIX => $this->tags[Element::FECOLORMATRIX],
            Element::FECOMPOSITE => $this->tags[Element::FECOMPOSITE],
            Element::FEFLOOD => $this->tags[Element::FEFLOOD],
            Element::FEGAUSSIANBLUR => $this->tags[Element::FEGAUSSIANBLUR],
            Element::FEMERGE => $this->tags[Element::FEMERGE],
            Element::FEMERGENODE => $this->tags[Element::FEMERGENODE],
            Element::FEOFFSET => $this->tags[Element::FEOFFSET],
            Element::FIELDSET => $this->tags[Element::FIELDSET],
            Element::FIGCAPTION => $this->tags[Element::FIGCAPTION],
            Element::FIGURE => $this->tags[Element::FIGURE],
            Element::FILTER => $this->tags[Element::FILTER],
            Element::FOOTER => $this->tags[Element::FOOTER],
            Element::FORM => [
                $this->tags['FORM [method=GET]'],
                $this->tags['FORM [method=GET] (AMP4EMAIL)'],
                $this->tags['FORM [method=POST]'],
                $this->tags['FORM [method=POST] (AMP4EMAIL)'],
            ],
            Element::G => $this->tags[Element::G],
            Element::GLYPH => $this->tags[Element::GLYPH],
            Element::GLYPHREF => $this->tags[Element::GLYPHREF],
            Element::H1 => $this->tags[Element::H1],
            Element::H2 => [
                $this->tags[Element::H2],
                $this->tags['h2 amp-nested-menu'],
            ],
            Element::H3 => [
                $this->tags[Element::H3],
                $this->tags['h3 amp-nested-menu'],
            ],
            Element::H4 => [
                $this->tags[Element::H4],
                $this->tags['h4 amp-nested-menu'],
            ],
            Element::H5 => [
                $this->tags[Element::H5],
                $this->tags['h5 amp-nested-menu'],
            ],
            Element::H6 => [
                $this->tags[Element::H6],
                $this->tags['h6 amp-nested-menu'],
            ],
            Element::HEAD => $this->tags[Element::HEAD],
            Element::STYLE => [
                $this->tags['head > style[amp-boilerplate]'],
                $this->tags['head > style[amp-boilerplate] (transformed)'],
                $this->tags['head > style[amp4ads-boilerplate]'],
                $this->tags['head > style[amp4email-boilerplate]'],
                $this->tags['noscript > style[amp-boilerplate]'],
                $this->tags['noscript > style[amp-boilerplate] (transformed)'],
                $this->tags['style amp-custom'],
                $this->tags['style amp-custom (AMP4ADS)'],
                $this->tags['style amp-custom (AMP4EMAIL)'],
                $this->tags['style amp-custom (css-strict)'],
                $this->tags['style amp-custom-length-check'],
                $this->tags['style[amp-keyframes]'],
                $this->tags['style[amp-runtime] (transformed)'],
            ],
            Element::HEADER => $this->tags[Element::HEADER],
            Element::HGROUP => $this->tags[Element::HGROUP],
            Element::HKERN => $this->tags[Element::HKERN],
            Element::HR => $this->tags[Element::HR],
            Element::HTML => [
                $this->tags[Element::HTML],
                $this->tags['html (transformed)'],
            ],
            Element::_DOCTYPE => [
                $this->tags['html doctype'],
                $this->tags['html doctype (AMP4ADS)'],
            ],
            Element::I => $this->tags[Element::I],
            Internal::SIZER => [
                $this->tags['I-AMPHTML-SIZER-INTRINSIC'],
                $this->tags['I-AMPHTML-SIZER-RESPONSIVE'],
            ],
            Element::IFRAME => $this->tags[Element::IFRAME],
            Element::IMAGE => $this->tags[Element::IMAGE],
            Element::INS => $this->tags[Element::INS],
            Element::KBD => $this->tags[Element::KBD],
            Element::LABEL => $this->tags[Element::LABEL],
            Element::LEGEND => $this->tags[Element::LEGEND],
            Element::LI => $this->tags[Element::LI],
            Element::LINE => $this->tags[Element::LINE],
            Element::LINEARGRADIENT => $this->tags[Element::LINEARGRADIENT],
            Element::STOP => [
                $this->tags['lineargradient > stop'],
                $this->tags['radialgradient > stop'],
            ],
            Element::LINK => [
                $this->tags['link itemprop='],
                $this->tags['link itemprop=sameAs'],
                $this->tags['link property='],
                $this->tags['link rel='],
                $this->tags['link rel=canonical'],
                $this->tags['link rel=manifest'],
                $this->tags['link rel=preload'],
                $this->tags['link rel=stylesheet for fonts'],
            ],
            Element::LISTING => $this->tags[Element::LISTING],
            Element::MAIN => $this->tags[Element::MAIN],
            Element::MARK => $this->tags[Element::MARK],
            Element::MARKER => $this->tags[Element::MARKER],
            Element::MASK => $this->tags[Element::MASK],
            Element::META => [
                $this->tags['meta charset=utf-8'],
                $this->tags['meta http-equiv=content-language'],
                $this->tags['meta http-equiv=Content-Script-Type'],
                $this->tags['meta http-equiv=Content-Style-Type'],
                $this->tags['meta http-equiv=Content-Type'],
                $this->tags['meta http-equiv=imagetoolbar'],
                $this->tags['meta http-equiv=origin-trial'],
                $this->tags['meta http-equiv=pics-label'],
                $this->tags['meta http-equiv=resource-type'],
                $this->tags['meta http-equiv=x-dns-prefetch-control'],
                $this->tags['meta http-equiv=X-UA-Compatible'],
                $this->tags['meta name=amp-3p-iframe-src'],
                $this->tags['meta name=amp-ad-doubleclick-sra'],
                $this->tags['meta name=amp-ad-enable-refresh'],
                $this->tags['meta name=amp-consent-blocking'],
                $this->tags['meta name=amp-cta-landing-page-type'],
                $this->tags['meta name=amp-cta-type'],
                $this->tags['meta name=amp-cta-url'],
                $this->tags['meta name=amp-experiment-token'],
                $this->tags['meta name=amp-experiments-opt-in'],
                $this->tags['meta name=amp-google-clientid-id-api'],
                $this->tags['meta name=amp-link-variable-allowed-origin'],
                $this->tags['meta name=amp-list-load-more'],
                $this->tags['meta name=amp-recaptcha-input'],
                $this->tags['meta name=amp-script-src'],
                $this->tags['meta name=amp-story-generator-name'],
                $this->tags['meta name=amp-story-generator-version'],
                $this->tags['meta name=amp-to-amp-navigation'],
                $this->tags['meta name=amp4ads-id'],
                $this->tags['meta name=amp4ads-vars-*'],
                $this->tags['meta name= and content='],
                $this->tags['meta name=apple-itunes-app'],
                $this->tags['meta name=viewport'],
            ],
            Element::METADATA => $this->tags[Element::METADATA],
            Element::METER => $this->tags[Element::METER],
            Element::MULTICOL => $this->tags[Element::MULTICOL],
            Element::NEXTID => $this->tags[Element::NEXTID],
            Element::NOBR => $this->tags[Element::NOBR],
            Element::NOSCRIPT => [
                $this->tags[Element::NOSCRIPT],
                $this->tags['noscript enclosure for boilerplate'],
                $this->tags['noscript enclosure for boilerplate (transformed)'],
            ],
            Element::O_P => $this->tags[Element::O_P],
            Element::OL => $this->tags[Element::OL],
            Element::OPTGROUP => $this->tags[Element::OPTGROUP],
            Element::OPTION => $this->tags[Element::OPTION],
            Element::OUTPUT => $this->tags[Element::OUTPUT],
            Element::P => $this->tags[Element::P],
            Element::PATH => $this->tags[Element::PATH],
            Element::PATTERN => $this->tags[Element::PATTERN],
            Element::PICTURE => $this->tags[Element::PICTURE],
            Element::POLYGON => $this->tags[Element::POLYGON],
            Element::POLYLINE => $this->tags[Element::POLYLINE],
            Element::PRE => $this->tags[Element::PRE],
            Element::PROGRESS => $this->tags[Element::PROGRESS],
            Element::Q => $this->tags[Element::Q],
            Element::RADIALGRADIENT => $this->tags[Element::RADIALGRADIENT],
            Element::RB => $this->tags[Element::RB],
            Element::RECT => $this->tags[Element::RECT],
            Element::RP => $this->tags[Element::RP],
            Element::RT => $this->tags[Element::RT],
            Element::RTC => $this->tags[Element::RTC],
            Element::RUBY => $this->tags[Element::RUBY],
            Element::S => $this->tags[Element::S],
            Element::SAMP => $this->tags[Element::SAMP],
            Element::SELECT => $this->tags[Element::SELECT],
            Element::SLOT => $this->tags[Element::SLOT],
            Element::SMALL => $this->tags[Element::SMALL],
            Element::SOLIDCOLOR => $this->tags[Element::SOLIDCOLOR],
            Element::SPACER => $this->tags[Element::SPACER],
            Element::SPAN => [
                $this->tags[Element::SPAN],
                $this->tags['span amp-nested-menu'],
                $this->tags['span swg_amp_cache_nonce'],
            ],
            Element::STRIKE => $this->tags[Element::STRIKE],
            Element::STRONG => $this->tags[Element::STRONG],
            Element::SUB => $this->tags[Element::SUB],
            Element::SUMMARY => $this->tags[Element::SUMMARY],
            Element::SUP => $this->tags[Element::SUP],
            Element::SVG => $this->tags[Element::SVG],
            Element::TITLE => [
                $this->tags['svg title'],
                $this->tags['title'],
                $this->tags['title [AMP4EMAIL]'],
            ],
            Element::SWITCH_ => $this->tags[Element::SWITCH_],
            Element::SYMBOL => $this->tags[Element::SYMBOL],
            Element::TABLE => $this->tags[Element::TABLE],
            Element::TBODY => $this->tags[Element::TBODY],
            Element::TD => $this->tags[Element::TD],
            Element::TEXT => $this->tags[Element::TEXT],
            Element::TEXTAREA => $this->tags[Element::TEXTAREA],
            Element::TEXTPATH => $this->tags[Element::TEXTPATH],
            Element::TFOOT => $this->tags[Element::TFOOT],
            Element::TH => $this->tags[Element::TH],
            Element::THEAD => $this->tags[Element::THEAD],
            Element::TIME => $this->tags[Element::TIME],
            Element::TR => $this->tags[Element::TR],
            Element::TREF => $this->tags[Element::TREF],
            Element::TSPAN => $this->tags[Element::TSPAN],
            Element::TT => $this->tags[Element::TT],
            Element::U => $this->tags[Element::U],
            Element::UL => $this->tags[Element::UL],
            Element::USE_ => $this->tags[Element::USE_],
            Element::VAR_ => $this->tags[Element::VAR_],
            Element::VIDEO => $this->tags[Element::VIDEO],
            Element::VIEW => $this->tags[Element::VIEW],
            Element::VKERN => $this->tags[Element::VKERN],
            Element::WBR => $this->tags[Element::WBR],
        ];
        $this->bySpecName = [
            'A (AMP4EMAIL)' => $this->tags['A (AMP4EMAIL)'],
            'amp-access extension .json script' => $this->tags['amp-access extension .json script'],
            'amp-accordion > section' => $this->tags['amp-accordion > section'],
            'amp-ad-exit configuration JSON' => $this->tags['amp-ad-exit configuration JSON'],
            'amp-ad extension script' => $this->tags['amp-ad extension script'],
            'amp-ad with data-enable-refresh attribute' => $this->tags['amp-ad with data-enable-refresh attribute'],
            'amp-ad with data-multi-size attribute' => $this->tags['amp-ad with data-multi-size attribute'],
            'amp-ad with type=custom' => $this->tags['amp-ad with type=custom'],
            'amp-analytics extension .json script' => $this->tags['amp-analytics extension .json script'],
            'AMP-ANIM (AMP4EMAIL)' => $this->tags['AMP-ANIM (AMP4EMAIL)'],
            'amp-animation extension .json script' => $this->tags['amp-animation extension .json script'],
            'amp-anim extension script (AMP4EMAIL)' => $this->tags['amp-anim extension script (AMP4EMAIL)'],
            'amp-app-banner button[open-button]' => $this->tags['amp-app-banner button[open-button]'],
            'amp-audio (A4A)' => $this->tags['amp-audio (A4A)'],
            'amp-audio > source' => $this->tags['amp-audio > source'],
            'amp-audio > track' => $this->tags['amp-audio > track'],
            'amp-audio > track[kind=subtitles]' => $this->tags['amp-audio > track[kind=subtitles]'],
            'amp-autocomplete' => $this->tags['amp-autocomplete'],
            'AMP-AUTOCOMPLETE (AMP4EMAIL)' => $this->tags['AMP-AUTOCOMPLETE (AMP4EMAIL)'],
            'amp-autocomplete > input' => $this->tags['amp-autocomplete > input'],
            'amp-autocomplete JSON' => $this->tags['amp-autocomplete JSON'],
            'AMP-BASE-CAROUSEL lightbox [child]' => $this->tags['AMP-BASE-CAROUSEL lightbox [child]'],
            'AMP-BASE-CAROUSEL lightbox [lightbox-exclude]' => $this->tags['AMP-BASE-CAROUSEL lightbox [lightbox-exclude]'],
            'AMP-BASE-CAROUSEL [lightbox]' => $this->tags['AMP-BASE-CAROUSEL [lightbox]'],
            'amp-bind extension .json script' => $this->tags['amp-bind extension .json script'],
            'AMP-CAROUSEL' => $this->tags[Extension::CAROUSEL],
            'AMP-CAROUSEL lightbox' => $this->tags['AMP-CAROUSEL lightbox'],
            'AMP-CAROUSEL lightbox [child]' => $this->tags['AMP-CAROUSEL lightbox [child]'],
            'AMP-CAROUSEL lightbox [lightbox-exclude]' => $this->tags['AMP-CAROUSEL lightbox [lightbox-exclude]'],
            'amp-consent extension .json script' => $this->tags['amp-consent extension .json script'],
            'amp-consent [type]' => $this->tags['amp-consent [type]'],
            'amp-date-picker > template [date-template]' => $this->tags['amp-date-picker > template [date-template]'],
            'amp-date-picker > template [info-template]' => $this->tags['amp-date-picker > template [info-template]'],
            'amp-date-picker[type=range][mode=overlay]' => $this->tags['amp-date-picker[type=range][mode=overlay]'],
            'amp-date-picker[type=range][mode=static]' => $this->tags['amp-date-picker[type=range][mode=static]'],
            'amp-date-picker[type=single][mode=overlay]' => $this->tags['amp-date-picker[type=single][mode=overlay]'],
            'amp-date-picker[type=single][mode=static]' => $this->tags['amp-date-picker[type=single][mode=static]'],
            'amp-embed with data-multi-size attribute' => $this->tags['amp-embed with data-multi-size attribute'],
            'amp-experiment extension .json script' => $this->tags['amp-experiment extension .json script'],
            'amp-experiment story extension .json script' => $this->tags['amp-experiment story extension .json script'],
            'amp-geo extension .json script' => $this->tags['amp-geo extension .json script'],
            'amp-ima-video > script[type=application/json]' => $this->tags['amp-ima-video > script[type=application/json]'],
            'amp-ima-video > source' => $this->tags['amp-ima-video > source'],
            'amp-ima-video > track' => $this->tags['amp-ima-video > track'],
            'amp-ima-video > track[kind=subtitles]' => $this->tags['amp-ima-video > track[kind=subtitles]'],
            'amp-image-slider (transformed)' => $this->tags['amp-image-slider (transformed)'],
            'AMP-IMAGE-SLIDER > DIV [first]' => $this->tags['AMP-IMAGE-SLIDER > DIV [first]'],
            'AMP-IMAGE-SLIDER > DIV [second]' => $this->tags['AMP-IMAGE-SLIDER > DIV [second]'],
            'AMP-IMG (AMP4EMAIL)' => $this->tags['AMP-IMG (AMP4EMAIL)'],
            'amp-img (transformed)' => $this->tags['amp-img (transformed)'],
            'amp-img > img (transformed)' => $this->tags['amp-img > img (transformed)'],
            'amp-img > img[placeholder] (transformed)' => $this->tags['amp-img > img[placeholder] (transformed)'],
            'amp-inline-gallery-pagination' => $this->tags['amp-inline-gallery-pagination'],
            'amp-inline-gallery-pagination [inset]' => $this->tags['amp-inline-gallery-pagination [inset]'],
            'amp-lightbox [AMP4ADS]' => $this->tags['amp-lightbox [AMP4ADS]'],
            'amp-link-rewriter extension .json script' => $this->tags['amp-link-rewriter extension .json script'],
            'AMP-LIST (AMP4EMAIL)' => $this->tags['AMP-LIST (AMP4EMAIL)'],
            'amp-list-load-more button[load-more-clickable]' => $this->tags['amp-list-load-more button[load-more-clickable]'],
            'AMP-LIST DIV [fetch-error]' => $this->tags['AMP-LIST DIV [fetch-error]'],
            'AMP-LIVE-LIST [items]' => $this->tags['AMP-LIVE-LIST [items]'],
            'AMP-LIVE-LIST [items] item' => $this->tags['AMP-LIVE-LIST [items] item'],
            'AMP-LIVE-LIST [pagination]' => $this->tags['AMP-LIVE-LIST [pagination]'],
            'AMP-LIVE-LIST [update]' => $this->tags['AMP-LIVE-LIST [update]'],
            'AMP-MEGA-MENU > AMP-LIST' => $this->tags['AMP-MEGA-MENU > AMP-LIST'],
            'AMP-MEGA-MENU > AMP-LIST > TEMPLATE' => $this->tags['AMP-MEGA-MENU > AMP-LIST > TEMPLATE'],
            'AMP-MEGA-MENU > NAV' => $this->tags['AMP-MEGA-MENU > NAV'],
            'AMP-MEGA-MENU item-content' => $this->tags['AMP-MEGA-MENU item-content'],
            'AMP-MEGA-MENU item-heading' => $this->tags['AMP-MEGA-MENU item-heading'],
            'AMP-MEGA-MENU NAV > UL/OL' => $this->tags['AMP-MEGA-MENU NAV > UL/OL'],
            'AMP-MEGA-MENU NAV > UL/OL > LI' => $this->tags['AMP-MEGA-MENU NAV > UL/OL > LI'],
            'amp-megaphone [data-episode]' => $this->tags['amp-megaphone [data-episode]'],
            'amp-megaphone [data-playlist]' => $this->tags['amp-megaphone [data-playlist]'],
            'AMP-NEXT-PAGE > SCRIPT[type=application/json]' => $this->tags['AMP-NEXT-PAGE > SCRIPT[type=application/json]'],
            'AMP-NEXT-PAGE > [footer]' => $this->tags['AMP-NEXT-PAGE > [footer]'],
            'AMP-NEXT-PAGE > [recommendation-box]' => $this->tags['AMP-NEXT-PAGE > [recommendation-box]'],
            'AMP-NEXT-PAGE > [separator]' => $this->tags['AMP-NEXT-PAGE > [separator]'],
            'amp-next-page with inline config' => $this->tags['amp-next-page with inline config'],
            'amp-next-page with src attribute' => $this->tags['amp-next-page with src attribute'],
            'amp-next-page [type=adsense]' => $this->tags['amp-next-page [type=adsense]'],
            'amp-script extension local script' => $this->tags['amp-script extension local script'],
            'AMP-SELECTOR child' => $this->tags['AMP-SELECTOR child'],
            'AMP-SELECTOR option' => $this->tags['AMP-SELECTOR option'],
            'amp-sidebar' => $this->tags['amp-sidebar'],
            'amp-sidebar (AMP4EMAIL)' => $this->tags['amp-sidebar (AMP4EMAIL)'],
            'amp-sidebar > nav' => $this->tags['amp-sidebar > nav'],
            'amp-state' => $this->tags['amp-state'],
            'amp-state (AMP4EMAIL)' => $this->tags['amp-state (AMP4EMAIL)'],
            'amp-story-animation json script' => $this->tags['amp-story-animation json script'],
            'amp-story-auto-ads > template' => $this->tags['amp-story-auto-ads > template'],
            'amp-story-auto-ads config script' => $this->tags['amp-story-auto-ads config script'],
            'amp-story-bookend extension .json script' => $this->tags['amp-story-bookend extension .json script'],
            'amp-story-consent extension .json script' => $this->tags['amp-story-consent extension .json script'],
            'AMP-STORY-CTA-LAYER animate-in' => $this->tags['AMP-STORY-CTA-LAYER animate-in'],
            'AMP-STORY-GRID-LAYER animate-in' => $this->tags['AMP-STORY-GRID-LAYER animate-in'],
            'AMP-STORY-GRID-LAYER default' => $this->tags['AMP-STORY-GRID-LAYER default'],
            'amp-story-page-attachment' => $this->tags['amp-story-page-attachment'],
            'amp-story-page-attachment[href]' => $this->tags['amp-story-page-attachment[href]'],
            'amp-story >> amp-audio' => $this->tags['amp-story >> amp-audio'],
            'amp-story >> amp-sidebar' => $this->tags['amp-story >> amp-sidebar'],
            'amp-story >> amp-story-page-attachment >> amp-video' => $this->tags['amp-story >> amp-story-page-attachment >> amp-video'],
            'amp-story >> amp-video' => $this->tags['amp-story >> amp-video'],
            'amp-subscriptions extension .json script' => $this->tags['amp-subscriptions extension .json script'],
            'AMP-VIDEO-IFRAME > I-AMPHTML-SIZER [style]' => $this->tags['AMP-VIDEO-IFRAME > I-AMPHTML-SIZER [style]'],
            'AMP-VIDEO-IFRAME > [placeholder]' => $this->tags['AMP-VIDEO-IFRAME > [placeholder]'],
            'AMP-VIDEO-IFRAME with [placeholder]' => $this->tags['AMP-VIDEO-IFRAME with [placeholder]'],
            'AMP-VIDEO-IFRAME with [placeholder] (transformed)' => $this->tags['AMP-VIDEO-IFRAME with [placeholder] (transformed)'],
            'AMP-VIDEO-IFRAME[poster]' => $this->tags['AMP-VIDEO-IFRAME[poster]'],
            'amp-video > source' => $this->tags['amp-video > source'],
            'amp-video > track' => $this->tags['amp-video > track'],
            'amp-video > track[kind=subtitles]' => $this->tags['amp-video > track[kind=subtitles]'],
            'amp-video extension script' => $this->tags['amp-video extension script'],
            'amp4ads engine script' => $this->tags['amp4ads engine script'],
            'amphtml engine script' => $this->tags['amphtml engine script'],
            'amphtml engine script (LTS)' => $this->tags['amphtml engine script (LTS)'],
            'amphtml engine script [AMP4EMAIL]' => $this->tags['amphtml engine script [AMP4EMAIL]'],
            'audio > source' => $this->tags['audio > source'],
            'audio > track' => $this->tags['audio > track'],
            'audio > track[kind=subtitles]' => $this->tags['audio > track[kind=subtitles]'],
            'button amp-nested-menu' => $this->tags['button amp-nested-menu'],
            'cryptokeys .json script' => $this->tags['cryptokeys .json script'],
            'div amp-nested-menu' => $this->tags['div amp-nested-menu'],
            'FORM DIV [submit-error]' => $this->tags['FORM DIV [submit-error]'],
            'FORM DIV [submit-error][template]' => $this->tags['FORM DIV [submit-error][template]'],
            'FORM DIV [submit-success]' => $this->tags['FORM DIV [submit-success]'],
            'FORM DIV [submit-success][template]' => $this->tags['FORM DIV [submit-success][template]'],
            'FORM DIV [submitting]' => $this->tags['FORM DIV [submitting]'],
            'FORM DIV [submitting][template]' => $this->tags['FORM DIV [submitting][template]'],
            'FORM DIV [verify-error]' => $this->tags['FORM DIV [verify-error]'],
            'FORM DIV [verify-error][template]' => $this->tags['FORM DIV [verify-error][template]'],
            'FORM [method=GET]' => $this->tags['FORM [method=GET]'],
            'FORM [method=GET] (AMP4EMAIL)' => $this->tags['FORM [method=GET] (AMP4EMAIL)'],
            'FORM [method=POST]' => $this->tags['FORM [method=POST]'],
            'FORM [method=POST] (AMP4EMAIL)' => $this->tags['FORM [method=POST] (AMP4EMAIL)'],
            'h2 amp-nested-menu' => $this->tags['h2 amp-nested-menu'],
            'h3 amp-nested-menu' => $this->tags['h3 amp-nested-menu'],
            'h4 amp-nested-menu' => $this->tags['h4 amp-nested-menu'],
            'h5 amp-nested-menu' => $this->tags['h5 amp-nested-menu'],
            'h6 amp-nested-menu' => $this->tags['h6 amp-nested-menu'],
            'head > style[amp-boilerplate]' => $this->tags['head > style[amp-boilerplate]'],
            'head > style[amp-boilerplate] (transformed)' => $this->tags['head > style[amp-boilerplate] (transformed)'],
            'head > style[amp4ads-boilerplate]' => $this->tags['head > style[amp4ads-boilerplate]'],
            'head > style[amp4email-boilerplate]' => $this->tags['head > style[amp4email-boilerplate]'],
            'html (transformed)' => $this->tags['html (transformed)'],
            'html doctype' => $this->tags['html doctype'],
            'html doctype (AMP4ADS)' => $this->tags['html doctype (AMP4ADS)'],
            'I-AMPHTML-SIZER-INTRINSIC' => $this->tags['I-AMPHTML-SIZER-INTRINSIC'],
            'I-AMPHTML-SIZER-RESPONSIVE' => $this->tags['I-AMPHTML-SIZER-RESPONSIVE'],
            'IMG-I-AMPHTML-INTRINSIC-SIZER' => $this->tags['IMG-I-AMPHTML-INTRINSIC-SIZER'],
            'input [mask=date-dd-mm-yyyy]' => $this->tags['input [mask=date-dd-mm-yyyy]'],
            'input [mask=date-mm-dd-yyyy]' => $this->tags['input [mask=date-mm-dd-yyyy]'],
            'input [mask=date-mm-yy]' => $this->tags['input [mask=date-mm-yy]'],
            'input [mask=date-yyyy-mm-dd]' => $this->tags['input [mask=date-yyyy-mm-dd]'],
            'input [mask=payment-card]' => $this->tags['input [mask=payment-card]'],
            'input [mask] (custom mask)' => $this->tags['input [mask] (custom mask)'],
            'INPUT [type=file]' => $this->tags['INPUT [type=file]'],
            'INPUT [type=password]' => $this->tags['INPUT [type=password]'],
            'lineargradient > stop' => $this->tags['lineargradient > stop'],
            'link itemprop=' => $this->tags['link itemprop='],
            'link itemprop=sameAs' => $this->tags['link itemprop=sameAs'],
            'link property=' => $this->tags['link property='],
            'link rel=' => $this->tags['link rel='],
            'link rel=canonical' => $this->tags['link rel=canonical'],
            'link rel=manifest' => $this->tags['link rel=manifest'],
            'link rel=preload' => $this->tags['link rel=preload'],
            'link rel=stylesheet for fonts' => $this->tags['link rel=stylesheet for fonts'],
            'meta charset=utf-8' => $this->tags['meta charset=utf-8'],
            'meta http-equiv=content-language' => $this->tags['meta http-equiv=content-language'],
            'meta http-equiv=Content-Script-Type' => $this->tags['meta http-equiv=Content-Script-Type'],
            'meta http-equiv=Content-Style-Type' => $this->tags['meta http-equiv=Content-Style-Type'],
            'meta http-equiv=Content-Type' => $this->tags['meta http-equiv=Content-Type'],
            'meta http-equiv=imagetoolbar' => $this->tags['meta http-equiv=imagetoolbar'],
            'meta http-equiv=origin-trial' => $this->tags['meta http-equiv=origin-trial'],
            'meta http-equiv=pics-label' => $this->tags['meta http-equiv=pics-label'],
            'meta http-equiv=resource-type' => $this->tags['meta http-equiv=resource-type'],
            'meta http-equiv=x-dns-prefetch-control' => $this->tags['meta http-equiv=x-dns-prefetch-control'],
            'meta http-equiv=X-UA-Compatible' => $this->tags['meta http-equiv=X-UA-Compatible'],
            'meta name=amp-3p-iframe-src' => $this->tags['meta name=amp-3p-iframe-src'],
            'meta name=amp-ad-doubleclick-sra' => $this->tags['meta name=amp-ad-doubleclick-sra'],
            'meta name=amp-ad-enable-refresh' => $this->tags['meta name=amp-ad-enable-refresh'],
            'meta name=amp-consent-blocking' => $this->tags['meta name=amp-consent-blocking'],
            'meta name=amp-cta-landing-page-type' => $this->tags['meta name=amp-cta-landing-page-type'],
            'meta name=amp-cta-type' => $this->tags['meta name=amp-cta-type'],
            'meta name=amp-cta-url' => $this->tags['meta name=amp-cta-url'],
            'meta name=amp-experiment-token' => $this->tags['meta name=amp-experiment-token'],
            'meta name=amp-experiments-opt-in' => $this->tags['meta name=amp-experiments-opt-in'],
            'meta name=amp-google-clientid-id-api' => $this->tags['meta name=amp-google-clientid-id-api'],
            'meta name=amp-link-variable-allowed-origin' => $this->tags['meta name=amp-link-variable-allowed-origin'],
            'meta name=amp-list-load-more' => $this->tags['meta name=amp-list-load-more'],
            'meta name=amp-recaptcha-input' => $this->tags['meta name=amp-recaptcha-input'],
            'meta name=amp-script-src' => $this->tags['meta name=amp-script-src'],
            'meta name=amp-story-generator-name' => $this->tags['meta name=amp-story-generator-name'],
            'meta name=amp-story-generator-version' => $this->tags['meta name=amp-story-generator-version'],
            'meta name=amp-to-amp-navigation' => $this->tags['meta name=amp-to-amp-navigation'],
            'meta name=amp4ads-id' => $this->tags['meta name=amp4ads-id'],
            'meta name=amp4ads-vars-*' => $this->tags['meta name=amp4ads-vars-*'],
            'meta name= and content=' => $this->tags['meta name= and content='],
            'meta name=apple-itunes-app' => $this->tags['meta name=apple-itunes-app'],
            'meta name=viewport' => $this->tags['meta name=viewport'],
            'noscript > img' => $this->tags['noscript > img'],
            'noscript > style[amp-boilerplate]' => $this->tags['noscript > style[amp-boilerplate]'],
            'noscript > style[amp-boilerplate] (transformed)' => $this->tags['noscript > style[amp-boilerplate] (transformed)'],
            'noscript enclosure for boilerplate' => $this->tags['noscript enclosure for boilerplate'],
            'noscript enclosure for boilerplate (transformed)' => $this->tags['noscript enclosure for boilerplate (transformed)'],
            'picture > source' => $this->tags['picture > source'],
            'radialgradient > stop' => $this->tags['radialgradient > stop'],
            'script id=amp-rtc' => $this->tags['script id=amp-rtc'],
            'script type=application/ld+json' => $this->tags['script type=application/ld+json'],
            'SCRIPT type=text/plain' => $this->tags['SCRIPT type=text/plain'],
            'SCRIPT type=text/plain (AMP4EMAIL)' => $this->tags['SCRIPT type=text/plain (AMP4EMAIL)'],
            'SCRIPT[custom-element=amp-accordion] (AMP4EMAIL)' => $this->tags['SCRIPT[custom-element=amp-accordion] (AMP4EMAIL)'],
            'SCRIPT[custom-element=amp-autocomplete] (AMP4EMAIL)' => $this->tags['SCRIPT[custom-element=amp-autocomplete] (AMP4EMAIL)'],
            'SCRIPT[custom-element=amp-bind] (AMP4EMAIL)' => $this->tags['SCRIPT[custom-element=amp-bind] (AMP4EMAIL)'],
            'SCRIPT[custom-element=amp-carousel] (AMP4EMAIL)' => $this->tags['SCRIPT[custom-element=amp-carousel] (AMP4EMAIL)'],
            'SCRIPT[custom-element=amp-fit-text] (AMP4EMAIL)' => $this->tags['SCRIPT[custom-element=amp-fit-text] (AMP4EMAIL)'],
            'SCRIPT[custom-element=amp-form] (AMP4EMAIL)' => $this->tags['SCRIPT[custom-element=amp-form] (AMP4EMAIL)'],
            'SCRIPT[custom-element=amp-image-lightbox] (AMP4EMAIL)' => $this->tags['SCRIPT[custom-element=amp-image-lightbox] (AMP4EMAIL)'],
            'SCRIPT[custom-element=amp-lightbox] (AMP4ADS)' => $this->tags['SCRIPT[custom-element=amp-lightbox] (AMP4ADS)'],
            'SCRIPT[custom-element=amp-lightbox] (AMP4EMAIL)' => $this->tags['SCRIPT[custom-element=amp-lightbox] (AMP4EMAIL)'],
            'SCRIPT[custom-element=amp-list] (AMP4EMAIL)' => $this->tags['SCRIPT[custom-element=amp-list] (AMP4EMAIL)'],
            'SCRIPT[custom-element=amp-selector] (AMP4EMAIL)' => $this->tags['SCRIPT[custom-element=amp-selector] (AMP4EMAIL)'],
            'SCRIPT[custom-element=amp-sidebar] (AMP4EMAIL)' => $this->tags['SCRIPT[custom-element=amp-sidebar] (AMP4EMAIL)'],
            'SCRIPT[custom-element=amp-timeago] (AMP4EMAIL)' => $this->tags['SCRIPT[custom-element=amp-timeago] (AMP4EMAIL)'],
            'SCRIPT[custom-template=amp-mustache] (AMP4ADS)' => $this->tags['SCRIPT[custom-template=amp-mustache] (AMP4ADS)'],
            'SCRIPT[custom-template=amp-mustache] (AMP4EMAIL)' => $this->tags['SCRIPT[custom-template=amp-mustache] (AMP4EMAIL)'],
            'section (AMP4EMAIL)' => $this->tags['section (AMP4EMAIL)'],
            'span amp-nested-menu' => $this->tags['span amp-nested-menu'],
            'span swg_amp_cache_nonce' => $this->tags['span swg_amp_cache_nonce'],
            'style amp-custom' => $this->tags['style amp-custom'],
            'style amp-custom (AMP4ADS)' => $this->tags['style amp-custom (AMP4ADS)'],
            'style amp-custom (AMP4EMAIL)' => $this->tags['style amp-custom (AMP4EMAIL)'],
            'style amp-custom (css-strict)' => $this->tags['style amp-custom (css-strict)'],
            'style amp-custom-length-check' => $this->tags['style amp-custom-length-check'],
            'style[amp-keyframes]' => $this->tags['style[amp-keyframes]'],
            'style[amp-runtime] (transformed)' => $this->tags['style[amp-runtime] (transformed)'],
            'subscriptions-section content swg_amp_cache_nonce' => $this->tags['subscriptions-section content swg_amp_cache_nonce'],
            'subscriptions script ciphertext' => $this->tags['subscriptions script ciphertext'],
            'svg title' => $this->tags['svg title'],
            'TEMPLATE (AMP4EMAIL)' => $this->tags['TEMPLATE (AMP4EMAIL)'],
            'title' => $this->tags['title'],
            'title [AMP4EMAIL]' => $this->tags['title [AMP4EMAIL]'],
            'video > source' => $this->tags['video > source'],
            'video > track' => $this->tags['video > track'],
            'video > track[kind=subtitles]' => $this->tags['video > track[kind=subtitles]'],
        ];
        $this->byFormat = [
            Format::AMP => [
                $this->tags[Element::A],
                $this->tags[Element::ABBR],
                $this->tags[Element::ACRONYM],
                $this->tags[Element::ADDRESS],
                $this->tags[Extension::_3D_GLTF],
                $this->tags[Extension::_3Q_PLAYER],
                $this->tags['amp-access extension .json script'],
                $this->tags[Extension::ACCORDION],
                $this->tags['amp-accordion > section'],
                $this->tags[Extension::ACTION_MACRO],
                $this->tags[Extension::AD],
                $this->tags[Extension::AD_CUSTOM],
                $this->tags[Extension::ADDTHIS],
                $this->tags['amp-ad extension script'],
                $this->tags['amp-ad with data-enable-refresh attribute'],
                $this->tags['amp-ad with data-multi-size attribute'],
                $this->tags['amp-ad with type=custom'],
                $this->tags[Extension::ANALYTICS],
                $this->tags['amp-analytics extension .json script'],
                $this->tags[Extension::ANIM],
                $this->tags[Extension::ANIMATION],
                $this->tags['amp-animation extension .json script'],
                $this->tags[Extension::APESTER_MEDIA],
                $this->tags[Extension::APP_BANNER],
                $this->tags['amp-app-banner button[open-button]'],
                $this->tags[Extension::AUDIO],
                $this->tags['amp-audio > source'],
                $this->tags['amp-audio > track'],
                $this->tags['amp-audio > track[kind=subtitles]'],
                $this->tags[Extension::AUTO_ADS],
                $this->tags['amp-autocomplete'],
                $this->tags['amp-autocomplete > input'],
                $this->tags['amp-autocomplete JSON'],
                $this->tags[Extension::BASE_CAROUSEL],
                $this->tags['AMP-BASE-CAROUSEL lightbox [child]'],
                $this->tags['AMP-BASE-CAROUSEL lightbox [lightbox-exclude]'],
                $this->tags['AMP-BASE-CAROUSEL [lightbox]'],
                $this->tags[Extension::BEOPINION],
                $this->tags[Extension::BIND_MACRO],
                $this->tags['amp-bind extension .json script'],
                $this->tags[Extension::BODYMOVIN_ANIMATION],
                $this->tags[Extension::BRID_PLAYER],
                $this->tags[Extension::BRIGHTCOVE],
                $this->tags[Extension::BYSIDE_CONTENT],
                $this->tags[Extension::CALL_TRACKING],
                $this->tags[Extension::CAROUSEL],
                $this->tags['AMP-CAROUSEL lightbox'],
                $this->tags['AMP-CAROUSEL lightbox [child]'],
                $this->tags['AMP-CAROUSEL lightbox [lightbox-exclude]'],
                $this->tags[Extension::CONNATIX_PLAYER],
                $this->tags[Extension::CONSENT],
                $this->tags['amp-consent extension .json script'],
                $this->tags['amp-consent [type]'],
                $this->tags[Extension::DAILYMOTION],
                $this->tags[Extension::DATE_COUNTDOWN],
                $this->tags[Extension::DATE_DISPLAY],
                $this->tags['amp-date-picker > template [date-template]'],
                $this->tags['amp-date-picker > template [info-template]'],
                $this->tags['amp-date-picker[type=range][mode=overlay]'],
                $this->tags['amp-date-picker[type=range][mode=static]'],
                $this->tags['amp-date-picker[type=single][mode=overlay]'],
                $this->tags['amp-date-picker[type=single][mode=static]'],
                $this->tags[Extension::DELIGHT_PLAYER],
                $this->tags[Extension::EMBED],
                $this->tags[Extension::EMBEDLY_CARD],
                $this->tags[Extension::EMBEDLY_KEY],
                $this->tags['amp-embed with data-multi-size attribute'],
                $this->tags[Extension::EXPERIMENT],
                $this->tags['amp-experiment extension .json script'],
                $this->tags['amp-experiment story extension .json script'],
                $this->tags[Extension::FACEBOOK],
                $this->tags[Extension::FACEBOOK_COMMENTS],
                $this->tags[Extension::FACEBOOK_LIKE],
                $this->tags[Extension::FACEBOOK_PAGE],
                $this->tags[Extension::FIT_TEXT],
                $this->tags[Extension::FONT],
                $this->tags[Extension::FX_FLYING_CARPET],
                $this->tags[Extension::GEO],
                $this->tags['amp-geo extension .json script'],
                $this->tags[Extension::GFYCAT],
                $this->tags[Extension::GIST],
                $this->tags[Extension::GOOGLE_DOCUMENT_EMBED],
                $this->tags[Extension::HULU],
                $this->tags[Extension::IFRAME],
                $this->tags[Extension::IMA_VIDEO],
                $this->tags['amp-ima-video > script[type=application/json]'],
                $this->tags['amp-ima-video > source'],
                $this->tags['amp-ima-video > track'],
                $this->tags['amp-ima-video > track[kind=subtitles]'],
                $this->tags[Extension::IMAGE_LIGHTBOX],
                $this->tags[Extension::IMAGE_SLIDER],
                $this->tags['amp-image-slider (transformed)'],
                $this->tags['AMP-IMAGE-SLIDER > DIV [first]'],
                $this->tags['AMP-IMAGE-SLIDER > DIV [second]'],
                $this->tags[Extension::IMG],
                $this->tags['amp-img (transformed)'],
                $this->tags['amp-img > img (transformed)'],
                $this->tags['amp-img > img[placeholder] (transformed)'],
                $this->tags[Extension::IMGUR],
                $this->tags[Extension::INLINE_GALLERY],
                $this->tags['amp-inline-gallery-pagination'],
                $this->tags['amp-inline-gallery-pagination [inset]'],
                $this->tags[Extension::INLINE_GALLERY_THUMBNAILS],
                $this->tags[Extension::INSTAGRAM],
                $this->tags[Extension::INSTALL_SERVICEWORKER],
                $this->tags[Extension::IZLESENE],
                $this->tags[Extension::JWPLAYER],
                $this->tags[Extension::KALTURA_PLAYER],
                $this->tags[Extension::LAYOUT],
                $this->tags[Extension::LIGHTBOX],
                $this->tags[Extension::LINK_REWRITER],
                $this->tags['amp-link-rewriter extension .json script'],
                $this->tags[Extension::LIST_],
                $this->tags[Extension::LIST_LOAD_MORE],
                $this->tags['amp-list-load-more button[load-more-clickable]'],
                $this->tags['AMP-LIST DIV [fetch-error]'],
                $this->tags[Extension::LIVE_LIST],
                $this->tags['AMP-LIVE-LIST [items]'],
                $this->tags['AMP-LIVE-LIST [items] item'],
                $this->tags['AMP-LIVE-LIST [pagination]'],
                $this->tags['AMP-LIVE-LIST [update]'],
                $this->tags[Extension::MATHML],
                $this->tags[Extension::MEGA_MENU],
                $this->tags['AMP-MEGA-MENU > AMP-LIST'],
                $this->tags['AMP-MEGA-MENU > AMP-LIST > TEMPLATE'],
                $this->tags['AMP-MEGA-MENU > NAV'],
                $this->tags['AMP-MEGA-MENU item-content'],
                $this->tags['AMP-MEGA-MENU item-heading'],
                $this->tags['AMP-MEGA-MENU NAV > UL/OL'],
                $this->tags['AMP-MEGA-MENU NAV > UL/OL > LI'],
                $this->tags['amp-megaphone [data-episode]'],
                $this->tags['amp-megaphone [data-playlist]'],
                $this->tags[Extension::MINUTE_MEDIA_PLAYER],
                $this->tags[Extension::MOWPLAYER],
                $this->tags[Extension::NESTED_MENU],
                $this->tags['AMP-NEXT-PAGE > SCRIPT[type=application/json]'],
                $this->tags['AMP-NEXT-PAGE > [footer]'],
                $this->tags['AMP-NEXT-PAGE > [recommendation-box]'],
                $this->tags['AMP-NEXT-PAGE > [separator]'],
                $this->tags['amp-next-page with inline config'],
                $this->tags['amp-next-page with src attribute'],
                $this->tags['amp-next-page [type=adsense]'],
                $this->tags[Extension::NEXXTV_PLAYER],
                $this->tags[Extension::O2_PLAYER],
                $this->tags[Extension::ONETAP_GOOGLE],
                $this->tags[Extension::OOYALA_PLAYER],
                $this->tags[Extension::ORIENTATION_OBSERVER],
                $this->tags[Extension::PAN_ZOOM],
                $this->tags[Extension::PINTEREST],
                $this->tags[Extension::PIXEL],
                $this->tags[Extension::PLAYBUZZ],
                $this->tags[Extension::POSITION_OBSERVER],
                $this->tags[Extension::POWR_PLAYER],
                $this->tags[Extension::REACH_PLAYER],
                $this->tags[Extension::RECAPTCHA_INPUT],
                $this->tags[Extension::REDBULL_PLAYER],
                $this->tags[Extension::REDDIT],
                $this->tags[Extension::RIDDLE_QUIZ],
                $this->tags[Extension::SCRIPT],
                $this->tags['amp-script extension local script'],
                $this->tags[Extension::SELECTOR],
                $this->tags['AMP-SELECTOR child'],
                $this->tags['AMP-SELECTOR option'],
                $this->tags['amp-sidebar'],
                $this->tags['amp-sidebar > nav'],
                $this->tags[Extension::SKIMLINKS],
                $this->tags[Extension::SMARTLINKS],
                $this->tags[Extension::SOCIAL_SHARE],
                $this->tags[Extension::SOUNDCLOUD],
                $this->tags[Extension::SPRINGBOARD_PLAYER],
                $this->tags['amp-state'],
                $this->tags[Extension::STICKY_AD],
                $this->tags[Extension::STORY],
                $this->tags[Extension::STORY_360],
                $this->tags[Extension::STORY_ANIMATION],
                $this->tags['amp-story-animation json script'],
                $this->tags[Extension::STORY_AUTO_ADS],
                $this->tags['amp-story-auto-ads > template'],
                $this->tags['amp-story-auto-ads config script'],
                $this->tags[Extension::STORY_BOOKEND],
                $this->tags['amp-story-bookend extension .json script'],
                $this->tags[Extension::STORY_CONSENT],
                $this->tags['amp-story-consent extension .json script'],
                $this->tags[Extension::STORY_CTA_LAYER],
                $this->tags['AMP-STORY-CTA-LAYER animate-in'],
                $this->tags[Extension::STORY_GRID_LAYER],
                $this->tags['AMP-STORY-GRID-LAYER animate-in'],
                $this->tags['AMP-STORY-GRID-LAYER default'],
                $this->tags[Extension::STORY_INTERACTIVE_BINARY_POLL],
                $this->tags[Extension::STORY_INTERACTIVE_POLL],
                $this->tags[Extension::STORY_INTERACTIVE_QUIZ],
                $this->tags[Extension::STORY_INTERACTIVE_RESULTS],
                $this->tags[Extension::STORY_PAGE],
                $this->tags['amp-story-page-attachment'],
                $this->tags['amp-story-page-attachment[href]'],
                $this->tags[Extension::STORY_PANNING_MEDIA],
                $this->tags[Extension::STORY_PLAYER],
                $this->tags['amp-story >> amp-audio'],
                $this->tags['amp-story >> amp-sidebar'],
                $this->tags['amp-story >> amp-story-page-attachment >> amp-video'],
                $this->tags['amp-story >> amp-video'],
                $this->tags['amp-subscriptions extension .json script'],
                $this->tags[Extension::TIMEAGO],
                $this->tags[Extension::TRUNCATE_TEXT],
                $this->tags[Extension::TWITTER],
                $this->tags[Extension::USER_NOTIFICATION],
                $this->tags[Extension::VIDEO],
                $this->tags['AMP-VIDEO-IFRAME > I-AMPHTML-SIZER [style]'],
                $this->tags['AMP-VIDEO-IFRAME > [placeholder]'],
                $this->tags['AMP-VIDEO-IFRAME with [placeholder]'],
                $this->tags['AMP-VIDEO-IFRAME with [placeholder] (transformed)'],
                $this->tags['AMP-VIDEO-IFRAME[poster]'],
                $this->tags['amp-video > source'],
                $this->tags['amp-video > track'],
                $this->tags['amp-video > track[kind=subtitles]'],
                $this->tags['amp-video extension script'],
                $this->tags[Extension::VIMEO],
                $this->tags[Extension::VINE],
                $this->tags[Extension::VIQEO_PLAYER],
                $this->tags[Extension::VK],
                $this->tags[Extension::WEB_PUSH],
                $this->tags[Extension::WEB_PUSH_WIDGET],
                $this->tags[Extension::WISTIA_PLAYER],
                $this->tags[Extension::YOTPO],
                $this->tags[Extension::YOUTUBE],
                $this->tags['amphtml engine script'],
                $this->tags['amphtml engine script (LTS)'],
                $this->tags[Element::ARTICLE],
                $this->tags[Element::ASIDE],
                $this->tags[Element::AUDIO],
                $this->tags['audio > source'],
                $this->tags['audio > track'],
                $this->tags['audio > track[kind=subtitles]'],
                $this->tags[Element::B],
                $this->tags[Element::BASE],
                $this->tags[Element::BDI],
                $this->tags[Element::BDO],
                $this->tags[Element::BIG],
                $this->tags[Element::BLOCKQUOTE],
                $this->tags[Element::BODY],
                $this->tags[Element::BR],
                $this->tags[Element::BUTTON],
                $this->tags['button amp-nested-menu'],
                $this->tags[Element::CANVAS],
                $this->tags[Element::CAPTION],
                $this->tags[Element::CENTER],
                $this->tags[Element::CIRCLE],
                $this->tags[Element::CITE],
                $this->tags[Element::CLIPPATH],
                $this->tags[Element::CODE],
                $this->tags[Element::COL],
                $this->tags[Element::COLGROUP],
                $this->tags['cryptokeys .json script'],
                $this->tags[Element::DATA],
                $this->tags[Element::DATALIST],
                $this->tags[Element::DD],
                $this->tags[Element::DEFS],
                $this->tags[Element::DEL],
                $this->tags[Element::DESC],
                $this->tags[Element::DETAILS],
                $this->tags[Element::DFN],
                $this->tags[Element::DIR],
                $this->tags[Element::DIV],
                $this->tags['div amp-nested-menu'],
                $this->tags[Element::DL],
                $this->tags[Element::DT],
                $this->tags[Element::ELLIPSE],
                $this->tags[Element::EM],
                $this->tags[Element::FECOLORMATRIX],
                $this->tags[Element::FECOMPOSITE],
                $this->tags[Element::FEFLOOD],
                $this->tags[Element::FEGAUSSIANBLUR],
                $this->tags[Element::FEMERGE],
                $this->tags[Element::FEMERGENODE],
                $this->tags[Element::FEOFFSET],
                $this->tags[Element::FIELDSET],
                $this->tags[Element::FIGCAPTION],
                $this->tags[Element::FIGURE],
                $this->tags[Element::FILTER],
                $this->tags[Element::FOOTER],
                $this->tags['FORM DIV [submit-error]'],
                $this->tags['FORM DIV [submit-error][template]'],
                $this->tags['FORM DIV [submit-success]'],
                $this->tags['FORM DIV [submit-success][template]'],
                $this->tags['FORM DIV [submitting]'],
                $this->tags['FORM DIV [submitting][template]'],
                $this->tags['FORM DIV [verify-error]'],
                $this->tags['FORM DIV [verify-error][template]'],
                $this->tags['FORM [method=GET]'],
                $this->tags['FORM [method=POST]'],
                $this->tags[Element::G],
                $this->tags[Element::GLYPH],
                $this->tags[Element::GLYPHREF],
                $this->tags[Element::H1],
                $this->tags[Element::H2],
                $this->tags['h2 amp-nested-menu'],
                $this->tags[Element::H3],
                $this->tags['h3 amp-nested-menu'],
                $this->tags[Element::H4],
                $this->tags['h4 amp-nested-menu'],
                $this->tags[Element::H5],
                $this->tags['h5 amp-nested-menu'],
                $this->tags[Element::H6],
                $this->tags['h6 amp-nested-menu'],
                $this->tags[Element::HEAD],
                $this->tags['head > style[amp-boilerplate]'],
                $this->tags['head > style[amp-boilerplate] (transformed)'],
                $this->tags[Element::HEADER],
                $this->tags[Element::HGROUP],
                $this->tags[Element::HKERN],
                $this->tags[Element::HR],
                $this->tags[Element::HTML],
                $this->tags['html (transformed)'],
                $this->tags['html doctype'],
                $this->tags[Element::I],
                $this->tags['I-AMPHTML-SIZER-INTRINSIC'],
                $this->tags['I-AMPHTML-SIZER-RESPONSIVE'],
                $this->tags[Element::IFRAME],
                $this->tags[Element::IMAGE],
                $this->tags['IMG-I-AMPHTML-INTRINSIC-SIZER'],
                $this->tags[Element::INPUT],
                $this->tags['input [mask=date-dd-mm-yyyy]'],
                $this->tags['input [mask=date-mm-dd-yyyy]'],
                $this->tags['input [mask=date-mm-yy]'],
                $this->tags['input [mask=date-yyyy-mm-dd]'],
                $this->tags['input [mask=payment-card]'],
                $this->tags['input [mask] (custom mask)'],
                $this->tags['INPUT [type=file]'],
                $this->tags['INPUT [type=password]'],
                $this->tags[Element::INS],
                $this->tags[Element::KBD],
                $this->tags[Element::LABEL],
                $this->tags[Element::LEGEND],
                $this->tags[Element::LI],
                $this->tags[Element::LINE],
                $this->tags[Element::LINEARGRADIENT],
                $this->tags['lineargradient > stop'],
                $this->tags['link itemprop='],
                $this->tags['link itemprop=sameAs'],
                $this->tags['link property='],
                $this->tags['link rel='],
                $this->tags['link rel=canonical'],
                $this->tags['link rel=manifest'],
                $this->tags['link rel=preload'],
                $this->tags['link rel=stylesheet for fonts'],
                $this->tags[Element::LISTING],
                $this->tags[Element::MAIN],
                $this->tags[Element::MARK],
                $this->tags[Element::MARKER],
                $this->tags[Element::MASK],
                $this->tags['meta charset=utf-8'],
                $this->tags[Element::METADATA],
                $this->tags['meta http-equiv=content-language'],
                $this->tags['meta http-equiv=Content-Script-Type'],
                $this->tags['meta http-equiv=Content-Style-Type'],
                $this->tags['meta http-equiv=Content-Type'],
                $this->tags['meta http-equiv=imagetoolbar'],
                $this->tags['meta http-equiv=origin-trial'],
                $this->tags['meta http-equiv=pics-label'],
                $this->tags['meta http-equiv=resource-type'],
                $this->tags['meta http-equiv=x-dns-prefetch-control'],
                $this->tags['meta http-equiv=X-UA-Compatible'],
                $this->tags['meta name=amp-3p-iframe-src'],
                $this->tags['meta name=amp-ad-doubleclick-sra'],
                $this->tags['meta name=amp-ad-enable-refresh'],
                $this->tags['meta name=amp-consent-blocking'],
                $this->tags['meta name=amp-experiment-token'],
                $this->tags['meta name=amp-experiments-opt-in'],
                $this->tags['meta name=amp-google-clientid-id-api'],
                $this->tags['meta name=amp-link-variable-allowed-origin'],
                $this->tags['meta name=amp-list-load-more'],
                $this->tags['meta name=amp-recaptcha-input'],
                $this->tags['meta name=amp-script-src'],
                $this->tags['meta name=amp-story-generator-name'],
                $this->tags['meta name=amp-story-generator-version'],
                $this->tags['meta name=amp-to-amp-navigation'],
                $this->tags['meta name= and content='],
                $this->tags['meta name=apple-itunes-app'],
                $this->tags['meta name=viewport'],
                $this->tags[Element::METER],
                $this->tags[Element::MULTICOL],
                $this->tags[Element::NAV],
                $this->tags[Element::NEXTID],
                $this->tags[Element::NOBR],
                $this->tags[Element::NOSCRIPT],
                $this->tags['noscript > img'],
                $this->tags['noscript > style[amp-boilerplate]'],
                $this->tags['noscript > style[amp-boilerplate] (transformed)'],
                $this->tags['noscript enclosure for boilerplate'],
                $this->tags['noscript enclosure for boilerplate (transformed)'],
                $this->tags[Element::O_P],
                $this->tags[Element::OL],
                $this->tags[Element::OPTGROUP],
                $this->tags[Element::OPTION],
                $this->tags[Element::OUTPUT],
                $this->tags[Element::P],
                $this->tags[Element::PATH],
                $this->tags[Element::PATTERN],
                $this->tags[Element::PICTURE],
                $this->tags['picture > source'],
                $this->tags[Element::POLYGON],
                $this->tags[Element::POLYLINE],
                $this->tags[Element::PRE],
                $this->tags[Element::PROGRESS],
                $this->tags[Element::Q],
                $this->tags[Element::RADIALGRADIENT],
                $this->tags['radialgradient > stop'],
                $this->tags[Element::RB],
                $this->tags[Element::RECT],
                $this->tags[Element::RP],
                $this->tags[Element::RT],
                $this->tags[Element::RTC],
                $this->tags[Element::RUBY],
                $this->tags[Element::S],
                $this->tags[Element::SAMP],
                $this->tags[Element::SCRIPT],
                $this->tags['SCRIPT (2)'],
                $this->tags['SCRIPT (3)'],
                $this->tags['SCRIPT (4)'],
                $this->tags['SCRIPT (5)'],
                $this->tags['SCRIPT (6)'],
                $this->tags['SCRIPT (7)'],
                $this->tags['SCRIPT (8)'],
                $this->tags['SCRIPT (9)'],
                $this->tags['SCRIPT (11)'],
                $this->tags['SCRIPT (12)'],
                $this->tags['SCRIPT (13)'],
                $this->tags['SCRIPT (14)'],
                $this->tags['SCRIPT (15)'],
                $this->tags['SCRIPT (16)'],
                $this->tags['SCRIPT (17)'],
                $this->tags['SCRIPT (18)'],
                $this->tags['SCRIPT (19)'],
                $this->tags['SCRIPT (20)'],
                $this->tags['SCRIPT (21)'],
                $this->tags['SCRIPT (22)'],
                $this->tags['SCRIPT (23)'],
                $this->tags['SCRIPT (24)'],
                $this->tags['SCRIPT (25)'],
                $this->tags['SCRIPT (26)'],
                $this->tags['SCRIPT (27)'],
                $this->tags['SCRIPT (28)'],
                $this->tags['SCRIPT (29)'],
                $this->tags['SCRIPT (30)'],
                $this->tags['SCRIPT (31)'],
                $this->tags['SCRIPT (32)'],
                $this->tags['SCRIPT (33)'],
                $this->tags['SCRIPT (34)'],
                $this->tags['SCRIPT (35)'],
                $this->tags['SCRIPT (36)'],
                $this->tags['SCRIPT (37)'],
                $this->tags['SCRIPT (38)'],
                $this->tags['SCRIPT (39)'],
                $this->tags['SCRIPT (40)'],
                $this->tags['SCRIPT (41)'],
                $this->tags['SCRIPT (42)'],
                $this->tags['SCRIPT (43)'],
                $this->tags['SCRIPT (44)'],
                $this->tags['SCRIPT (45)'],
                $this->tags['SCRIPT (46)'],
                $this->tags['SCRIPT (47)'],
                $this->tags['SCRIPT (48)'],
                $this->tags['SCRIPT (49)'],
                $this->tags['SCRIPT (50)'],
                $this->tags['SCRIPT (51)'],
                $this->tags['SCRIPT (53)'],
                $this->tags['SCRIPT (54)'],
                $this->tags['SCRIPT (55)'],
                $this->tags['SCRIPT (56)'],
                $this->tags['SCRIPT (57)'],
                $this->tags['SCRIPT (58)'],
                $this->tags['SCRIPT (59)'],
                $this->tags['SCRIPT (60)'],
                $this->tags['SCRIPT (61)'],
                $this->tags['SCRIPT (62)'],
                $this->tags['SCRIPT (63)'],
                $this->tags['SCRIPT (64)'],
                $this->tags['SCRIPT (65)'],
                $this->tags['SCRIPT (66)'],
                $this->tags['SCRIPT (67)'],
                $this->tags['SCRIPT (68)'],
                $this->tags['SCRIPT (69)'],
                $this->tags['SCRIPT (70)'],
                $this->tags['SCRIPT (71)'],
                $this->tags['SCRIPT (72)'],
                $this->tags['SCRIPT (73)'],
                $this->tags['SCRIPT (74)'],
                $this->tags['SCRIPT (75)'],
                $this->tags['SCRIPT (77)'],
                $this->tags['SCRIPT (78)'],
                $this->tags['SCRIPT (79)'],
                $this->tags['SCRIPT (80)'],
                $this->tags['SCRIPT (81)'],
                $this->tags['SCRIPT (82)'],
                $this->tags['SCRIPT (83)'],
                $this->tags['SCRIPT (84)'],
                $this->tags['SCRIPT (85)'],
                $this->tags['SCRIPT (86)'],
                $this->tags['SCRIPT (87)'],
                $this->tags['SCRIPT (88)'],
                $this->tags['SCRIPT (89)'],
                $this->tags['SCRIPT (90)'],
                $this->tags['SCRIPT (91)'],
                $this->tags['SCRIPT (92)'],
                $this->tags['SCRIPT (93)'],
                $this->tags['SCRIPT (94)'],
                $this->tags['SCRIPT (95)'],
                $this->tags['SCRIPT (96)'],
                $this->tags['SCRIPT (97)'],
                $this->tags['SCRIPT (98)'],
                $this->tags['SCRIPT (99)'],
                $this->tags['SCRIPT (100)'],
                $this->tags['SCRIPT (101)'],
                $this->tags['SCRIPT (102)'],
                $this->tags['SCRIPT (103)'],
                $this->tags['SCRIPT (104)'],
                $this->tags['SCRIPT (105)'],
                $this->tags['SCRIPT (106)'],
                $this->tags['SCRIPT (107)'],
                $this->tags['SCRIPT (108)'],
                $this->tags['SCRIPT (109)'],
                $this->tags['SCRIPT (110)'],
                $this->tags['SCRIPT (111)'],
                $this->tags['SCRIPT (112)'],
                $this->tags['SCRIPT (113)'],
                $this->tags['SCRIPT (114)'],
                $this->tags['SCRIPT (115)'],
                $this->tags['SCRIPT (116)'],
                $this->tags['SCRIPT (117)'],
                $this->tags['SCRIPT (118)'],
                $this->tags['SCRIPT (119)'],
                $this->tags['SCRIPT (120)'],
                $this->tags['SCRIPT (121)'],
                $this->tags['SCRIPT (122)'],
                $this->tags['SCRIPT (123)'],
                $this->tags['SCRIPT (124)'],
                $this->tags['SCRIPT (125)'],
                $this->tags['SCRIPT (126)'],
                $this->tags['script id=amp-rtc'],
                $this->tags['script type=application/ld+json'],
                $this->tags['SCRIPT type=text/plain'],
                $this->tags[Element::SECTION],
                $this->tags[Element::SELECT],
                $this->tags[Element::SLOT],
                $this->tags[Element::SMALL],
                $this->tags[Element::SOLIDCOLOR],
                $this->tags[Element::SPACER],
                $this->tags[Element::SPAN],
                $this->tags['span amp-nested-menu'],
                $this->tags['span swg_amp_cache_nonce'],
                $this->tags[Element::STRIKE],
                $this->tags[Element::STRONG],
                $this->tags['style amp-custom'],
                $this->tags['style amp-custom-length-check'],
                $this->tags['style[amp-keyframes]'],
                $this->tags['style[amp-runtime] (transformed)'],
                $this->tags[Element::SUB],
                $this->tags['subscriptions-section content swg_amp_cache_nonce'],
                $this->tags['subscriptions script ciphertext'],
                $this->tags[Element::SUMMARY],
                $this->tags[Element::SUP],
                $this->tags[Element::SVG],
                $this->tags['svg title'],
                $this->tags[Element::SWITCH_],
                $this->tags[Element::SYMBOL],
                $this->tags[Element::TABLE],
                $this->tags[Element::TBODY],
                $this->tags[Element::TD],
                $this->tags[Element::TEMPLATE],
                $this->tags[Element::TEXT],
                $this->tags[Element::TEXTAREA],
                $this->tags[Element::TEXTPATH],
                $this->tags[Element::TFOOT],
                $this->tags[Element::TH],
                $this->tags[Element::THEAD],
                $this->tags[Element::TIME],
                $this->tags['title'],
                $this->tags[Element::TR],
                $this->tags[Element::TREF],
                $this->tags[Element::TSPAN],
                $this->tags[Element::TT],
                $this->tags[Element::U],
                $this->tags[Element::UL],
                $this->tags[Element::USE_],
                $this->tags[Element::VAR_],
                $this->tags[Element::VIDEO],
                $this->tags['video > source'],
                $this->tags['video > track'],
                $this->tags['video > track[kind=subtitles]'],
                $this->tags[Element::VIEW],
                $this->tags[Element::VKERN],
                $this->tags[Element::WBR],
            ],
            Format::AMP4ADS => [
                $this->tags[Element::A],
                $this->tags[Element::ABBR],
                $this->tags[Element::ADDRESS],
                $this->tags[Extension::ACCORDION],
                $this->tags['amp-accordion > section'],
                $this->tags[Extension::AD_EXIT],
                $this->tags['amp-ad-exit configuration JSON'],
                $this->tags[Extension::ANALYTICS],
                $this->tags['amp-analytics extension .json script'],
                $this->tags[Extension::ANIM],
                $this->tags[Extension::ANIMATION],
                $this->tags['amp-animation extension .json script'],
                $this->tags['amp-app-banner button[open-button]'],
                $this->tags['amp-audio (A4A)'],
                $this->tags['amp-audio > source'],
                $this->tags['amp-audio > track'],
                $this->tags['amp-audio > track[kind=subtitles]'],
                $this->tags['amp-bind extension .json script'],
                $this->tags[Extension::CAROUSEL],
                $this->tags[Extension::FIT_TEXT],
                $this->tags[Extension::FONT],
                $this->tags[Extension::GWD_ANIMATION],
                $this->tags['amp-ima-video > source'],
                $this->tags[Extension::IMG],
                $this->tags[Extension::LAYOUT],
                $this->tags['amp-lightbox [AMP4ADS]'],
                $this->tags['AMP-LIST DIV [fetch-error]'],
                $this->tags[Extension::PIXEL],
                $this->tags[Extension::POSITION_OBSERVER],
                $this->tags[Extension::SELECTOR],
                $this->tags['AMP-SELECTOR child'],
                $this->tags['AMP-SELECTOR option'],
                $this->tags[Extension::SOCIAL_SHARE],
                $this->tags['amp-state (AMP4EMAIL)'],
                $this->tags['amp-story >> amp-story-page-attachment >> amp-video'],
                $this->tags['amp-story >> amp-video'],
                $this->tags[Extension::VIDEO],
                $this->tags['amp-video > source'],
                $this->tags['amp-video > track'],
                $this->tags['amp-video > track[kind=subtitles]'],
                $this->tags['amp-video extension script'],
                $this->tags['amp4ads engine script'],
                $this->tags[Element::ARTICLE],
                $this->tags[Element::ASIDE],
                $this->tags['audio > source'],
                $this->tags['audio > track'],
                $this->tags['audio > track[kind=subtitles]'],
                $this->tags[Element::B],
                $this->tags[Element::BASE],
                $this->tags[Element::BDI],
                $this->tags[Element::BDO],
                $this->tags[Element::BLOCKQUOTE],
                $this->tags[Element::BODY],
                $this->tags[Element::BR],
                $this->tags[Element::BUTTON],
                $this->tags[Element::CAPTION],
                $this->tags[Element::CIRCLE],
                $this->tags[Element::CITE],
                $this->tags[Element::CLIPPATH],
                $this->tags[Element::CODE],
                $this->tags[Element::COL],
                $this->tags[Element::COLGROUP],
                $this->tags[Element::DATA],
                $this->tags[Element::DATALIST],
                $this->tags[Element::DD],
                $this->tags[Element::DEFS],
                $this->tags[Element::DEL],
                $this->tags[Element::DESC],
                $this->tags[Element::DETAILS],
                $this->tags[Element::DFN],
                $this->tags[Element::DIV],
                $this->tags[Element::DL],
                $this->tags[Element::DT],
                $this->tags[Element::ELLIPSE],
                $this->tags[Element::EM],
                $this->tags[Element::FECOLORMATRIX],
                $this->tags[Element::FECOMPOSITE],
                $this->tags[Element::FEFLOOD],
                $this->tags[Element::FEGAUSSIANBLUR],
                $this->tags[Element::FEMERGE],
                $this->tags[Element::FEMERGENODE],
                $this->tags[Element::FEOFFSET],
                $this->tags[Element::FIELDSET],
                $this->tags[Element::FIGCAPTION],
                $this->tags[Element::FIGURE],
                $this->tags[Element::FILTER],
                $this->tags[Element::FOOTER],
                $this->tags['FORM DIV [submit-error]'],
                $this->tags['FORM DIV [submit-error][template]'],
                $this->tags['FORM DIV [submit-success]'],
                $this->tags['FORM DIV [submit-success][template]'],
                $this->tags['FORM DIV [submitting]'],
                $this->tags['FORM DIV [submitting][template]'],
                $this->tags['FORM DIV [verify-error]'],
                $this->tags['FORM DIV [verify-error][template]'],
                $this->tags['FORM [method=GET]'],
                $this->tags['FORM [method=POST]'],
                $this->tags[Element::G],
                $this->tags[Element::GLYPH],
                $this->tags[Element::GLYPHREF],
                $this->tags[Element::H1],
                $this->tags[Element::H2],
                $this->tags[Element::H3],
                $this->tags[Element::H4],
                $this->tags[Element::H5],
                $this->tags[Element::H6],
                $this->tags[Element::HEAD],
                $this->tags['head > style[amp4ads-boilerplate]'],
                $this->tags[Element::HEADER],
                $this->tags[Element::HKERN],
                $this->tags[Element::HR],
                $this->tags[Element::HTML],
                $this->tags['html doctype (AMP4ADS)'],
                $this->tags[Element::I],
                $this->tags[Element::IMAGE],
                $this->tags[Element::INPUT],
                $this->tags[Element::INS],
                $this->tags[Element::KBD],
                $this->tags[Element::LABEL],
                $this->tags[Element::LEGEND],
                $this->tags[Element::LI],
                $this->tags[Element::LINE],
                $this->tags[Element::LINEARGRADIENT],
                $this->tags['lineargradient > stop'],
                $this->tags['link itemprop='],
                $this->tags['link itemprop=sameAs'],
                $this->tags['link property='],
                $this->tags['link rel='],
                $this->tags['link rel=manifest'],
                $this->tags['link rel=preload'],
                $this->tags['link rel=stylesheet for fonts'],
                $this->tags[Element::MAIN],
                $this->tags[Element::MARK],
                $this->tags[Element::MARKER],
                $this->tags[Element::MASK],
                $this->tags['meta charset=utf-8'],
                $this->tags[Element::METADATA],
                $this->tags['meta http-equiv=content-language'],
                $this->tags['meta http-equiv=Content-Script-Type'],
                $this->tags['meta http-equiv=Content-Style-Type'],
                $this->tags['meta http-equiv=Content-Type'],
                $this->tags['meta http-equiv=imagetoolbar'],
                $this->tags['meta http-equiv=origin-trial'],
                $this->tags['meta http-equiv=pics-label'],
                $this->tags['meta http-equiv=resource-type'],
                $this->tags['meta http-equiv=X-UA-Compatible'],
                $this->tags['meta name=amp-ad-enable-refresh'],
                $this->tags['meta name=amp-cta-landing-page-type'],
                $this->tags['meta name=amp-cta-type'],
                $this->tags['meta name=amp-cta-url'],
                $this->tags['meta name=amp-experiments-opt-in'],
                $this->tags['meta name=amp4ads-id'],
                $this->tags['meta name=amp4ads-vars-*'],
                $this->tags['meta name= and content='],
                $this->tags['meta name=apple-itunes-app'],
                $this->tags['meta name=viewport'],
                $this->tags[Element::METER],
                $this->tags[Element::NAV],
                $this->tags[Element::OL],
                $this->tags[Element::OPTGROUP],
                $this->tags[Element::OPTION],
                $this->tags[Element::OUTPUT],
                $this->tags[Element::P],
                $this->tags[Element::PATH],
                $this->tags[Element::PATTERN],
                $this->tags[Element::POLYGON],
                $this->tags[Element::POLYLINE],
                $this->tags[Element::PRE],
                $this->tags[Element::PROGRESS],
                $this->tags[Element::Q],
                $this->tags[Element::RADIALGRADIENT],
                $this->tags['radialgradient > stop'],
                $this->tags[Element::RB],
                $this->tags[Element::RECT],
                $this->tags[Element::RP],
                $this->tags[Element::RT],
                $this->tags[Element::RTC],
                $this->tags[Element::RUBY],
                $this->tags[Element::S],
                $this->tags[Element::SAMP],
                $this->tags['SCRIPT (7)'],
                $this->tags['SCRIPT (10)'],
                $this->tags['SCRIPT (12)'],
                $this->tags['SCRIPT (13)'],
                $this->tags['SCRIPT (14)'],
                $this->tags['SCRIPT (17)'],
                $this->tags['SCRIPT (22)'],
                $this->tags['SCRIPT (28)'],
                $this->tags['SCRIPT (43)'],
                $this->tags['SCRIPT (44)'],
                $this->tags['SCRIPT (45)'],
                $this->tags['SCRIPT (52)'],
                $this->tags['SCRIPT (76)'],
                $this->tags['SCRIPT (88)'],
                $this->tags['SCRIPT (96)'],
                $this->tags['SCRIPT (101)'],
                $this->tags['script type=application/ld+json'],
                $this->tags['SCRIPT type=text/plain'],
                $this->tags['SCRIPT[custom-element=amp-lightbox] (AMP4ADS)'],
                $this->tags['SCRIPT[custom-template=amp-mustache] (AMP4ADS)'],
                $this->tags[Element::SECTION],
                $this->tags[Element::SELECT],
                $this->tags[Element::SMALL],
                $this->tags[Element::SOLIDCOLOR],
                $this->tags[Element::SPAN],
                $this->tags[Element::STRONG],
                $this->tags['style amp-custom (AMP4ADS)'],
                $this->tags['style amp-custom-length-check'],
                $this->tags['style[amp-keyframes]'],
                $this->tags[Element::SUB],
                $this->tags[Element::SUMMARY],
                $this->tags[Element::SUP],
                $this->tags[Element::SVG],
                $this->tags['svg title'],
                $this->tags[Element::SWITCH_],
                $this->tags[Element::SYMBOL],
                $this->tags[Element::TABLE],
                $this->tags[Element::TBODY],
                $this->tags[Element::TD],
                $this->tags[Element::TEMPLATE],
                $this->tags[Element::TEXT],
                $this->tags[Element::TEXTAREA],
                $this->tags[Element::TEXTPATH],
                $this->tags[Element::TFOOT],
                $this->tags[Element::TH],
                $this->tags[Element::THEAD],
                $this->tags[Element::TIME],
                $this->tags['title'],
                $this->tags[Element::TR],
                $this->tags[Element::TREF],
                $this->tags[Element::TSPAN],
                $this->tags[Element::U],
                $this->tags[Element::UL],
                $this->tags[Element::USE_],
                $this->tags[Element::VAR_],
                $this->tags['video > source'],
                $this->tags['video > track'],
                $this->tags['video > track[kind=subtitles]'],
                $this->tags[Element::VIEW],
                $this->tags[Element::VKERN],
                $this->tags[Element::WBR],
            ],
            Format::AMP4EMAIL => [
                $this->tags['A (AMP4EMAIL)'],
                $this->tags[Element::ABBR],
                $this->tags[Element::ADDRESS],
                $this->tags[Extension::ACCORDION],
                $this->tags['amp-accordion > section'],
                $this->tags['AMP-ANIM (AMP4EMAIL)'],
                $this->tags['amp-anim extension script (AMP4EMAIL)'],
                $this->tags['AMP-AUTOCOMPLETE (AMP4EMAIL)'],
                $this->tags[Extension::BIND_MACRO],
                $this->tags['amp-bind extension .json script'],
                $this->tags[Extension::CAROUSEL],
                $this->tags[Extension::FIT_TEXT],
                $this->tags[Extension::IMAGE_LIGHTBOX],
                $this->tags['AMP-IMG (AMP4EMAIL)'],
                $this->tags[Extension::LAYOUT],
                $this->tags[Extension::LIGHTBOX],
                $this->tags['AMP-LIST (AMP4EMAIL)'],
                $this->tags['AMP-LIST DIV [fetch-error]'],
                $this->tags[Extension::SELECTOR],
                $this->tags['AMP-SELECTOR child'],
                $this->tags['AMP-SELECTOR option'],
                $this->tags['amp-sidebar (AMP4EMAIL)'],
                $this->tags['amp-sidebar > nav'],
                $this->tags['amp-state (AMP4EMAIL)'],
                $this->tags[Extension::TIMEAGO],
                $this->tags['amphtml engine script [AMP4EMAIL]'],
                $this->tags[Element::ARTICLE],
                $this->tags[Element::ASIDE],
                $this->tags[Element::B],
                $this->tags[Element::BDO],
                $this->tags[Element::BLOCKQUOTE],
                $this->tags[Element::BODY],
                $this->tags[Element::BR],
                $this->tags[Element::BUTTON],
                $this->tags[Element::CAPTION],
                $this->tags[Element::CITE],
                $this->tags[Element::CODE],
                $this->tags[Element::COL],
                $this->tags[Element::COLGROUP],
                $this->tags[Element::DATA],
                $this->tags[Element::DATALIST],
                $this->tags[Element::DD],
                $this->tags[Element::DEL],
                $this->tags[Element::DETAILS],
                $this->tags[Element::DFN],
                $this->tags[Element::DIV],
                $this->tags[Element::DL],
                $this->tags[Element::DT],
                $this->tags[Element::EM],
                $this->tags[Element::FIELDSET],
                $this->tags[Element::FIGCAPTION],
                $this->tags[Element::FIGURE],
                $this->tags[Element::FOOTER],
                $this->tags['FORM DIV [submit-error]'],
                $this->tags['FORM DIV [submit-error][template]'],
                $this->tags['FORM DIV [submit-success]'],
                $this->tags['FORM DIV [submit-success][template]'],
                $this->tags['FORM DIV [submitting]'],
                $this->tags['FORM [method=GET] (AMP4EMAIL)'],
                $this->tags['FORM [method=POST] (AMP4EMAIL)'],
                $this->tags[Element::H1],
                $this->tags[Element::H2],
                $this->tags[Element::H3],
                $this->tags[Element::H4],
                $this->tags[Element::H5],
                $this->tags[Element::H6],
                $this->tags[Element::HEAD],
                $this->tags['head > style[amp4email-boilerplate]'],
                $this->tags[Element::HEADER],
                $this->tags[Element::HR],
                $this->tags[Element::HTML],
                $this->tags['html doctype'],
                $this->tags[Element::I],
                $this->tags[Element::INPUT],
                $this->tags[Element::INS],
                $this->tags[Element::KBD],
                $this->tags[Element::LABEL],
                $this->tags[Element::LEGEND],
                $this->tags[Element::LI],
                $this->tags[Element::MAIN],
                $this->tags[Element::MARK],
                $this->tags['meta charset=utf-8'],
                $this->tags['meta name= and content='],
                $this->tags[Element::METER],
                $this->tags[Element::NAV],
                $this->tags[Element::OL],
                $this->tags[Element::OPTGROUP],
                $this->tags[Element::OPTION],
                $this->tags[Element::OUTPUT],
                $this->tags[Element::P],
                $this->tags[Element::PRE],
                $this->tags[Element::PROGRESS],
                $this->tags[Element::Q],
                $this->tags[Element::RB],
                $this->tags[Element::RP],
                $this->tags[Element::RT],
                $this->tags[Element::RUBY],
                $this->tags[Element::S],
                $this->tags[Element::SAMP],
                $this->tags['script type=application/ld+json'],
                $this->tags['SCRIPT type=text/plain (AMP4EMAIL)'],
                $this->tags['SCRIPT[custom-element=amp-accordion] (AMP4EMAIL)'],
                $this->tags['SCRIPT[custom-element=amp-autocomplete] (AMP4EMAIL)'],
                $this->tags['SCRIPT[custom-element=amp-bind] (AMP4EMAIL)'],
                $this->tags['SCRIPT[custom-element=amp-carousel] (AMP4EMAIL)'],
                $this->tags['SCRIPT[custom-element=amp-fit-text] (AMP4EMAIL)'],
                $this->tags['SCRIPT[custom-element=amp-form] (AMP4EMAIL)'],
                $this->tags['SCRIPT[custom-element=amp-image-lightbox] (AMP4EMAIL)'],
                $this->tags['SCRIPT[custom-element=amp-lightbox] (AMP4EMAIL)'],
                $this->tags['SCRIPT[custom-element=amp-list] (AMP4EMAIL)'],
                $this->tags['SCRIPT[custom-element=amp-selector] (AMP4EMAIL)'],
                $this->tags['SCRIPT[custom-element=amp-sidebar] (AMP4EMAIL)'],
                $this->tags['SCRIPT[custom-element=amp-timeago] (AMP4EMAIL)'],
                $this->tags['SCRIPT[custom-template=amp-mustache] (AMP4EMAIL)'],
                $this->tags['section (AMP4EMAIL)'],
                $this->tags[Element::SELECT],
                $this->tags[Element::SMALL],
                $this->tags[Element::SPAN],
                $this->tags[Element::STRONG],
                $this->tags['style amp-custom (AMP4EMAIL)'],
                $this->tags['style amp-custom (css-strict)'],
                $this->tags['style amp-custom-length-check'],
                $this->tags[Element::SUB],
                $this->tags[Element::SUMMARY],
                $this->tags[Element::SUP],
                $this->tags[Element::TABLE],
                $this->tags[Element::TBODY],
                $this->tags[Element::TD],
                $this->tags['TEMPLATE (AMP4EMAIL)'],
                $this->tags[Element::TEXTAREA],
                $this->tags[Element::TFOOT],
                $this->tags[Element::TH],
                $this->tags[Element::THEAD],
                $this->tags[Element::TIME],
                $this->tags['title [AMP4EMAIL]'],
                $this->tags[Element::TR],
                $this->tags[Element::U],
                $this->tags[Element::UL],
                $this->tags[Element::VAR_],
                $this->tags[Element::WBR],
            ],
        ];
    }
}
