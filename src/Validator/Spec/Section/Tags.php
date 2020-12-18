<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Section;

use AmpProject\Validator\Spec\Tag;

final class Tags
{
    /** @var array<string,Tag> */
    private $tags = [];

    /** @var array<string, array<int,Tag>> */
    private $byTagName = [];

    /** @var array<string, array<int,Tag>> */
    private $bySpecName = [];

    /**
     * Get a collection of tags by tag name.
     *
     * @param string $tagName Tag name to get the collection of tags for.
     * @return array<Tag> Array of tags. Empty array if tag name not found.
     */
    public function byTagName($tagName)
    {
        if (!array_key_exists($tagName, $this->byTagName)) {
            return [];
        }

        return $this->byTagName[$tagName];
    }

    /**
     * Get a collection of tags by spec name.
     *
     * @param string $specName Spec name to get the collection of tags for.
     * @return array<Tag> Array of tags. Empty array if spec name not found.
     */
    public function bySpecName($specName)
    {
        if (!array_key_exists($specName, $this->bySpecName)) {
            return [];
        }

        return $this->bySpecName[$specName];
    }

    public function __construct()
    {
        $this->tags['A'] = new Tag(
            [
                'tagName' => 'A',
                'attrs' => [
                    ['name' => 'border'],
                    ['name' => 'download'],
                    [
                        'name' => 'href',
                        'disallowedValueRegex' => '__amp_source_origin',
                        'valueUrl' => [
                            'protocol' => [
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
                            'allowEmpty' => true,
                        ],
                    ],
                    ['name' => 'hreflang'],
                    ['name' => 'media'],
                    ['name' => 'referrerpolicy'],
                    [
                        'name' => 'rel',
                        'disallowedValueRegex' => '(^|\s)(components|dns-prefetch|import|manifest|preconnect|prefetch|preload|prerender|serviceworker|stylesheet|subresource)(\s|$)',
                    ],
                    ['name' => 'role', 'implicit' => true],
                    ['name' => 'tabindex', 'implicit' => true],
                    ['name' => 'target', 'value' => ['_blank', '_self', '_top']],
                    ['name' => 'type', 'valueCasei' => ['text/html', 'application/rss+xml']],
                    ['name' => 'show-tooltip', 'value' => ['auto', 'true']],
                    ['name' => '[href]'],
                ],
                'attrLists' => ['name-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#links',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['A (AMP4EMAIL)'] = new Tag(
            [
                'tagName' => 'A',
                'specName' => 'A (AMP4EMAIL)',
                'attrs' => [
                    ['name' => 'border'],
                    [
                        'name' => 'href',
                        'disallowedValueRegex' => '__amp_source_origin|(.|\s){{|}}(.|\s)|^{{.*[^}][^}]$|^[^{][^{].*}}$|^}}|{{$|{{#|{{/|{{\^',
                        'valueUrl' => ['protocol' => ['http', 'https', 'mailto', 'tel'], 'allowRelative' => false],
                    ],
                    ['name' => 'hreflang'],
                    ['name' => 'media'],
                    ['name' => 'role', 'implicit' => true],
                    ['name' => 'tabindex', 'implicit' => true],
                    ['name' => 'target', 'value' => ['_blank']],
                    ['name' => 'type', 'valueCasei' => ['text/html']],
                ],
                'htmlFormat' => ['AMP4EMAIL'],
            ]
        );
        $this->tags['ABBR'] = new Tag(
            [
                'tagName' => 'ABBR',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['ACRONYM'] = new Tag(
            [
                'tagName' => 'ACRONYM',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['ADDRESS'] = new Tag(
            [
                'tagName' => 'ADDRESS',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['AMP-3D-GLTF'] = new Tag(
            [
                'tagName' => 'AMP-3D-GLTF',
                'attrs' => [
                    ['name' => 'alpha', 'value' => ['false', 'true']],
                    ['name' => 'antialiasing', 'value' => ['false', 'true']],
                    ['name' => 'autorotate', 'value' => ['false', 'true']],
                    ['name' => 'clearcolor'],
                    ['name' => 'enablezoom', 'value' => ['false', 'true']],
                    ['name' => 'maxpixelratio', 'valueRegex' => '[+-]?(\d*\.)?\d+'],
                    ['name' => 'src', 'mandatory' => true, 'valueUrl' => ['protocol' => ['https']]],
                ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-3d-gltf'],
            ]
        );
        $this->tags['AMP-3Q-PLAYER'] = new Tag(
            [
                'tagName' => 'AMP-3Q-PLAYER',
                'attrs' => [['name' => 'autoplay', 'value' => ['']], ['name' => 'data-id', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FLEX_ITEM', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-3q-player'],
            ]
        );
        $this->tags['amp-access extension .json script'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'amp-access extension .json script',
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                    ['name' => 'id', 'mandatory' => true, 'value' => ['amp-access'], 'dispatchKey' => 'NAME_VALUE_DISPATCH'],
                    ['name' => 'type', 'mandatory' => true, 'valueCasei' => ['application/json']],
                ],
                'attrLists' => ['nonce-attr'],
                'cdata' => ['disallowedCdataRegex' => [['regex' => '<!--', 'errorMessage' => 'html comments']]],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-access'],
            ]
        );
        $this->tags['AMP-ACCORDION'] = new Tag(
            [
                'tagName' => 'AMP-ACCORDION',
                'attrs' => [
                    ['name' => 'animate', 'value' => ['']],
                    ['name' => 'disable-session-states', 'value' => [''], 'disabledBy' => ['amp4email']],
                    ['name' => 'expand-single-section', 'value' => ['']],
                ],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-accordion/',
                'ampLayout' => ['supportedLayouts' => ['CONTAINER']],
                'childTags' => ['childTagNameOneof' => ['SECTION']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                'requiresExtension' => ['amp-accordion'],
            ]
        );
        $this->tags['amp-accordion > section'] = new Tag(
            [
                'tagName' => 'SECTION',
                'specName' => 'amp-accordion > section',
                'mandatoryParent' => 'AMP-ACCORDION',
                'attrs' => [
                    ['name' => 'access-hide', 'value' => [''], 'disabledBy' => ['amp4email']],
                    ['name' => 'expanded', 'value' => ['']],
                    ['name' => '[data-expand]'],
                ],
                'childTags' => ['mandatoryNumChildTags' => 2, 'firstChildTagNameOneof' => ['H1', 'H2', 'H3', 'H4', 'H5', 'H6', 'HEADER']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                'descriptiveName' => 'amp-accordion > section',
            ]
        );
        $this->tags['AMP-ACTION-MACRO'] = new Tag(
            [
                'tagName' => 'AMP-ACTION-MACRO',
                'attrs' => [['name' => 'arguments'], ['name' => 'execute', 'mandatory' => true]],
                'attrLists' => ['mandatory-id-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-action-macro/',
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-action-macro'],
            ]
        );
        $this->tags['AMP-AD'] = new Tag(
            [
                'tagName' => 'AMP-AD',
                'attrs' => [
                    ['name' => 'alt'],
                    ['name' => 'json'],
                    ['name' => 'rtc-config'],
                    [
                        'name' => 'src',
                        'disallowedValueRegex' => '__amp_source_origin',
                        'valueUrl' => ['protocol' => ['https'], 'allowRelative' => true],
                    ],
                    ['name' => 'template'],
                    ['name' => 'type', 'mandatory' => true],
                    ['name' => 'sticky', 'value' => ['']],
                ],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-ad/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'FLUID', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'disallowedAncestor' => ['AMP-APP-BANNER'],
                'htmlFormat' => ['AMP'],
                'alsoRequiresTagWarning' => ['amp-ad extension script'],
                'requiresExtension' => ['amp-ad'],
            ]
        );
        $this->tags['AMP-AD-CUSTOM'] = new Tag(
            [
                'tagName' => 'AMP-AD-CUSTOM',
                'attrs' => [
                    [
                        'name' => 'src',
                        'mandatory' => true,
                        'disallowedValueRegex' => '__amp_source_origin',
                        'valueUrl' => ['protocol' => ['https'], 'allowRelative' => false],
                    ],
                ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'FLUID', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'disallowedAncestor' => ['AMP-APP-BANNER'],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-ad-custom'],
            ]
        );
        $this->tags['AMP-AD-EXIT'] = new Tag(
            [
                'tagName' => 'AMP-AD-EXIT',
                'attrLists' => ['extended-amp-global', 'mandatory-id-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-ad-exit/',
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY', 'CONTAINER']],
                'childTags' => ['mandatoryNumChildTags' => 1, 'childTagNameOneof' => ['SCRIPT']],
                'htmlFormat' => ['AMP4ADS'],
                'requires' => ['amp-ad-exit configuration JSON'],
                'requiresExtension' => ['amp-ad-exit'],
            ]
        );
        $this->tags['amp-ad-exit configuration JSON'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'amp-ad-exit configuration JSON',
                'mandatoryParent' => 'AMP-AD-EXIT',
                'attrs' => [
                    [
                        'name' => 'type',
                        'mandatory' => true,
                        'value' => ['application/json'],
                        'dispatchKey' => 'NAME_VALUE_PARENT_DISPATCH',
                    ],
                ],
                'attrLists' => ['nonce-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-ad-exit/',
                'htmlFormat' => ['AMP4ADS'],
                'satisfies' => ['amp-ad-exit configuration JSON'],
                'requiresExtension' => ['amp-ad-exit'],
            ]
        );
        $this->tags['AMP-ADDTHIS'] = new Tag(
            [
                'tagName' => 'AMP-ADDTHIS',
                'attrs' => [
                    ['name' => 'data-product-code', 'mandatoryOneof' => '[\'data-product-code\', \'data-widget-id\']'],
                    ['name' => 'data-share-media', 'valueUrl' => ['protocol' => ['http', 'https'], 'allowEmpty' => true]],
                    ['name' => 'data-share-url', 'valueUrl' => ['protocol' => ['http', 'https'], 'allowEmpty' => true]],
                    [
                        'name' => 'data-widget-id',
                        'mandatoryOneof' => '[\'data-product-code\', \'data-widget-id\']',
                        'trigger' => ['alsoRequiresAttr' => ['data-pub-id']],
                    ],
                ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-addthis'],
            ]
        );
        $this->tags['amp-ad extension script'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'amp-ad extension script',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                    'name' => 'amp-ad',
                    'version' => ['0.1', 'latest'],
                    'deprecatedAllowDuplicates' => true,
                    'requiresUsage' => 'EXEMPTED',
                ],
            ]
        );
        $this->tags['amp-ad with data-enable-refresh attribute'] = new Tag(
            [
                'tagName' => 'AMP-AD',
                'specName' => 'amp-ad with data-enable-refresh attribute',
                'attrs' => [
                    ['name' => 'alt'],
                    ['name' => 'data-enable-refresh', 'mandatory' => true, 'value' => [''], 'dispatchKey' => 'NAME_VALUE_DISPATCH'],
                    ['name' => 'json'],
                    [
                        'name' => 'src',
                        'disallowedValueRegex' => '__amp_source_origin',
                        'valueUrl' => ['protocol' => ['https'], 'allowRelative' => true],
                    ],
                    ['name' => 'type', 'mandatory' => true],
                ],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-ad/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'FLUID', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'disallowedAncestor' => ['AMP-APP-BANNER', 'AMP-FX-FLYING-CARPET', 'AMP-LIGHTBOX'],
                'htmlFormat' => ['AMP'],
                'alsoRequiresTagWarning' => ['amp-ad extension script'],
                'requiresExtension' => ['amp-ad'],
            ]
        );
        $this->tags['amp-ad with data-multi-size attribute'] = new Tag(
            [
                'tagName' => 'AMP-AD',
                'specName' => 'amp-ad with data-multi-size attribute',
                'attrs' => [
                    ['name' => 'alt'],
                    ['name' => 'data-multi-size', 'mandatory' => true, 'value' => [''], 'dispatchKey' => 'NAME_VALUE_DISPATCH'],
                    ['name' => 'json'],
                    ['name' => 'rtc-config'],
                    [
                        'name' => 'src',
                        'disallowedValueRegex' => '__amp_source_origin',
                        'valueUrl' => ['protocol' => ['https'], 'allowRelative' => true],
                    ],
                    ['name' => 'type', 'mandatory' => true],
                ],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-ad/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'FLUID', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'disallowedAncestor' => ['AMP-APP-BANNER', 'AMP-CAROUSEL', 'AMP-FX-FLYING-CARPET', 'AMP-LIGHTBOX', 'AMP-STICKY-AD'],
                'htmlFormat' => ['AMP'],
                'alsoRequiresTagWarning' => ['amp-ad extension script'],
                'requiresExtension' => ['amp-ad'],
            ]
        );
        $this->tags['amp-ad with type=custom'] = new Tag(
            [
                'tagName' => 'AMP-AD',
                'specName' => 'amp-ad with type=custom',
                'attrs' => [
                    ['name' => 'data-url', 'mandatory' => true, 'valueUrl' => ['protocol' => ['https']]],
                    ['name' => 'template'],
                    ['name' => 'type', 'mandatory' => true, 'value' => ['custom'], 'dispatchKey' => 'NAME_VALUE_DISPATCH'],
                ],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://github.com/ampproject/amphtml/blob/master/ads/custom.md',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'FLUID', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'disallowedAncestor' => ['AMP-APP-BANNER'],
                'htmlFormat' => ['AMP'],
                'alsoRequiresTagWarning' => ['amp-ad extension script'],
                'requiresExtension' => ['amp-ad'],
            ]
        );
        $this->tags['AMP-ANALYTICS'] = new Tag(
            [
                'tagName' => 'AMP-ANALYTICS',
                'attrs' => [
                    [
                        'name' => 'config',
                        'disallowedValueRegex' => '__amp_source_origin',
                        'valueUrl' => ['protocol' => ['https'], 'allowRelative' => true, 'allowEmpty' => true],
                    ],
                    ['name' => 'type'],
                ],
                'specUrl' => 'https://amp.dev/documentation/components/amp-analytics/',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'requiresExtension' => ['amp-analytics'],
            ]
        );
        $this->tags['amp-analytics extension .json script'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'amp-analytics extension .json script',
                'mandatoryParent' => 'AMP-ANALYTICS',
                'attrs' => [
                    [
                        'name' => 'type',
                        'mandatory' => true,
                        'dispatchKey' => 'NAME_VALUE_PARENT_DISPATCH',
                        'valueCasei' => ['application/json'],
                    ],
                ],
                'attrLists' => ['nonce-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-analytics/',
                'cdata' => ['disallowedCdataRegex' => [['regex' => '<!--', 'errorMessage' => 'html comments']]],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'requiresExtension' => ['amp-analytics'],
                'descriptiveName' => 'amp-analytics extension .json script',
            ]
        );
        $this->tags['AMP-ANIM'] = new Tag(
            [
                'tagName' => 'AMP-ANIM',
                'attrs' => [['name' => 'alt'], ['name' => 'attribution'], ['name' => 'object-fit'], ['name' => 'object-position']],
                'attrLists' => ['extended-amp-global', 'mandatory-src-or-srcset'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-anim/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'requiresExtension' => ['amp-anim'],
            ]
        );
        $this->tags['AMP-ANIM (AMP4EMAIL)'] = new Tag(
            [
                'tagName' => 'AMP-ANIM',
                'specName' => 'AMP-ANIM (AMP4EMAIL)',
                'attrs' => [['name' => 'alt'], ['name' => 'attribution']],
                'attrLists' => ['extended-amp-global', 'mandatory-src-amp4email'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-anim/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP4EMAIL'],
                'requiresExtension' => ['amp-anim'],
            ]
        );
        $this->tags['AMP-ANIMATION'] = new Tag(
            [
                'tagName' => 'AMP-ANIMATION',
                'attrs' => [['name' => 'trigger', 'value' => ['visibility']]],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'childTags' => ['mandatoryNumChildTags' => 1, 'childTagNameOneof' => ['SCRIPT']],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'requires' => ['amp-animation extension .json script'],
                'requiresExtension' => ['amp-animation'],
            ]
        );
        $this->tags['amp-animation extension .json script'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'amp-animation extension .json script',
                'mandatoryParent' => 'AMP-ANIMATION',
                'attrs' => [
                    [
                        'name' => 'type',
                        'mandatory' => true,
                        'dispatchKey' => 'NAME_VALUE_PARENT_DISPATCH',
                        'valueCasei' => ['application/json'],
                    ],
                ],
                'attrLists' => ['nonce-attr'],
                'cdata' => ['disallowedCdataRegex' => [['regex' => '<!--', 'errorMessage' => 'html comments']]],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'satisfies' => ['amp-animation extension .json script'],
                'requiresExtension' => ['amp-animation'],
            ]
        );
        $this->tags['amp-anim extension script (AMP4EMAIL)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'amp-anim extension script (AMP4EMAIL)',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP4EMAIL'],
                'extensionSpec' => ['name' => 'amp-anim', 'version' => ['0.1']],
            ]
        );
        $this->tags['AMP-APESTER-MEDIA'] = new Tag(
            [
                'tagName' => 'AMP-APESTER-MEDIA',
                'attrs' => [
                    [
                        'name' => 'data-apester-channel-token',
                        'mandatoryOneof' => '[\'data-apester-media-id\', \'data-apester-channel-token\']',
                        'valueRegex' => '[0-9a-zA-Z]+',
                    ],
                    [
                        'name' => 'data-apester-media-id',
                        'mandatoryOneof' => '[\'data-apester-media-id\', \'data-apester-channel-token\']',
                        'valueRegex' => '[0-9a-zA-Z]+',
                    ],
                ],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-apester-media/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-apester-media'],
            ]
        );
        $this->tags['AMP-APP-BANNER'] = new Tag(
            [
                'tagName' => 'AMP-APP-BANNER',
                'unique' => true,
                'mandatoryParent' => 'BODY',
                'attrLists' => ['extended-amp-global', 'mandatory-id-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-app-banner/',
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'htmlFormat' => ['AMP'],
                'requires' => ['amp-app-banner data source', 'amp-app-banner button[open-button]'],
                'requiresExtension' => ['amp-app-banner'],
            ]
        );
        $this->tags['amp-app-banner button[open-button]'] = new Tag(
            [
                'tagName' => 'BUTTON',
                'specName' => 'amp-app-banner button[open-button]',
                'attrs' => [
                    ['name' => 'open-button', 'value' => ['']],
                    ['name' => 'role', 'implicit' => true],
                    ['name' => 'tabindex', 'implicit' => true],
                    ['name' => 'type'],
                    ['name' => 'value'],
                ],
                'attrLists' => ['name-attr'],
                'mandatoryAncestor' => 'AMP-APP-BANNER',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'satisfies' => ['amp-app-banner button[open-button]'],
            ]
        );
        $this->tags['AMP-AUDIO'] = new Tag(
            [
                'tagName' => 'AMP-AUDIO',
                'attrs' => [['name' => 'autoplay', 'value' => ['']], ['name' => 'preload', 'valueCasei' => ['auto', 'metadata', 'none']]],
                'attrLists' => ['amp-audio-common', 'extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-audio/',
                'ampLayout' => [
                    'supportedLayouts' => ['FIXED', 'FIXED_HEIGHT', 'NODISPLAY'],
                    'definesDefaultWidth' => true,
                    'definesDefaultHeight' => true,
                ],
                'disallowedAncestor' => ['AMP-STORY'],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-audio'],
            ]
        );
        $this->tags['amp-audio (A4A)'] = new Tag(
            [
                'tagName' => 'AMP-AUDIO',
                'specName' => 'amp-audio (A4A)',
                'attrLists' => ['amp-audio-common', 'extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-audio/',
                'ampLayout' => [
                    'supportedLayouts' => ['FIXED', 'FIXED_HEIGHT', 'NODISPLAY'],
                    'definesDefaultWidth' => true,
                    'definesDefaultHeight' => true,
                ],
                'htmlFormat' => ['AMP4ADS'],
                'requiresExtension' => ['amp-audio'],
            ]
        );
        $this->tags['amp-audio > source'] = new Tag(
            [
                'tagName' => 'SOURCE',
                'specName' => 'amp-audio > source',
                'mandatoryParent' => 'AMP-AUDIO',
                'attrs' => [
                    ['name' => 'media'],
                    [
                        'name' => 'src',
                        'disallowedValueRegex' => '__amp_source_origin',
                        'valueUrl' => ['protocol' => ['https'], 'allowRelative' => true],
                    ],
                    ['name' => 'type'],
                    ['name' => '[src]'],
                    ['name' => '[type]'],
                ],
                'specUrl' => 'https://amp.dev/documentation/components/amp-audio/',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['amp-audio > track'] = new Tag(
            [
                'tagName' => 'TRACK',
                'specName' => 'amp-audio > track',
                'mandatoryParent' => 'AMP-AUDIO',
                'attrs' => [['name' => '[label]'], ['name' => '[src]'], ['name' => '[srclang]']],
                'attrLists' => ['track-attrs-no-subtitles'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['amp-audio > track[kind=subtitles]'] = new Tag(
            [
                'tagName' => 'TRACK',
                'specName' => 'amp-audio > track[kind=subtitles]',
                'mandatoryParent' => 'AMP-AUDIO',
                'attrs' => [['name' => '[label]'], ['name' => '[src]'], ['name' => '[srclang]']],
                'attrLists' => ['track-attrs-subtitles'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['AMP-AUTO-ADS'] = new Tag(
            [
                'tagName' => 'AMP-AUTO-ADS',
                'attrs' => [['name' => 'type', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-auto-ads/',
                'disallowedAncestor' => ['AMP-AUTO-ADS'],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-auto-ads'],
            ]
        );
        $this->tags['amp-autocomplete'] = new Tag(
            [
                'tagName' => 'AMP-AUTOCOMPLETE',
                'specName' => 'amp-autocomplete',
                'attrs' => [
                    [
                        'name' => 'filter',
                        'mandatory' => true,
                        'trigger' => ['ifValueRegex' => 'custom', 'alsoRequiresAttr' => ['filter-expr']],
                        'valueCasei' => ['custom', 'fuzzy', 'none', 'prefix', 'substring', 'token-prefix'],
                    ],
                    ['name' => 'filter-expr', 'requiresExtension' => ['amp-bind']],
                    ['name' => 'filter-value'],
                    ['name' => 'highlight-user-entry'],
                    ['name' => 'inline'],
                    ['name' => 'items'],
                    ['name' => 'max-entries'],
                    ['name' => 'max-items'],
                    ['name' => 'min-characters'],
                    ['name' => 'prefetch'],
                    ['name' => 'query', 'trigger' => ['alsoRequiresAttr' => ['src']]],
                    ['name' => 'src', 'valueUrl' => ['protocol' => ['https'], 'allowRelative' => true]],
                    ['name' => 'submit-on-enter'],
                    ['name' => 'suggest-first'],
                    ['name' => 'template'],
                    ['name' => '[src]'],
                ],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-autocomplete/',
                'ampLayout' => ['supportedLayouts' => ['CONTAINER']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-autocomplete'],
            ]
        );
        $this->tags['AMP-AUTOCOMPLETE (AMP4EMAIL)'] = new Tag(
            [
                'tagName' => 'AMP-AUTOCOMPLETE',
                'specName' => 'AMP-AUTOCOMPLETE (AMP4EMAIL)',
                'attrs' => [
                    ['name' => 'highlight-user-entry'],
                    ['name' => 'inline'],
                    ['name' => 'items'],
                    ['name' => 'max-items'],
                    ['name' => 'min-characters'],
                    ['name' => 'prefetch'],
                    ['name' => 'query', 'trigger' => ['alsoRequiresAttr' => ['src']]],
                    ['name' => 'submit-on-enter'],
                    ['name' => 'suggest-first'],
                    [
                        'name' => 'src',
                        'mandatory' => true,
                        'disallowedValueRegex' => '__amp_source_origin|{{|}}',
                        'valueUrl' => ['protocol' => ['https'], 'allowRelative' => false],
                    ],
                    ['name' => 'template', 'valueOneofSet' => 'TEMPLATE_IDS'],
                ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['CONTAINER']],
                'disallowedAncestor' => ['AMP-AUTOCOMPLETE', 'AMP-STATE', 'TEMPLATE'],
                'htmlFormat' => ['AMP4EMAIL'],
                'requiresExtension' => ['amp-autocomplete'],
            ]
        );
        $this->tags['amp-autocomplete > input'] = new Tag(
            [
                'tagName' => 'INPUT',
                'specName' => 'amp-autocomplete > input',
                'mandatoryParent' => 'AMP-AUTOCOMPLETE',
                'attrs' => [['name' => 'type', 'mandatory' => true, 'valueCasei' => ['search', 'text']]],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-autocomplete', 'amp-form'],
            ]
        );
        $this->tags['amp-autocomplete JSON'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'amp-autocomplete JSON',
                'mandatoryParent' => 'AMP-AUTOCOMPLETE',
                'attrs' => [
                    [
                        'name' => 'type',
                        'mandatory' => true,
                        'dispatchKey' => 'NAME_VALUE_PARENT_DISPATCH',
                        'valueCasei' => ['application/json'],
                    ],
                ],
                'attrLists' => ['nonce-attr'],
                'cdata' => ['disallowedCdataRegex' => [['regex' => '<!--', 'errorMessage' => 'html comments']]],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-autocomplete'],
            ]
        );
        $this->tags['AMP-BASE-CAROUSEL'] = new Tag(
            [
                'tagName' => 'AMP-BASE-CAROUSEL',
                'attrLists' => ['amp-base-carousel-common', 'extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-base-carousel/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-base-carousel'],
            ]
        );
        $this->tags['AMP-BASE-CAROUSEL lightbox [child]'] = new Tag(
            [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-BASE-CAROUSEL lightbox [child]',
                'attrs' => [['name' => 'lightbox-thumbnail-id', 'valueRegexCasei' => '^[a-z][a-z\d_-]*']],
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['AMP-BASE-CAROUSEL lightbox [lightbox-exclude]'] = new Tag(
            [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-BASE-CAROUSEL lightbox [lightbox-exclude]',
                'attrs' => [['name' => 'lightbox-exclude', 'mandatory' => true]],
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['AMP-BASE-CAROUSEL [lightbox]'] = new Tag(
            [
                'tagName' => 'AMP-BASE-CAROUSEL',
                'specName' => 'AMP-BASE-CAROUSEL [lightbox]',
                'attrs' => [['name' => 'lightbox', 'mandatory' => true]],
                'attrLists' => ['amp-base-carousel-common', 'extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-base-carousel/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'referencePoints' => [
                    ['tagSpecName' => 'AMP-BASE-CAROUSEL lightbox [lightbox-exclude]'],
                    ['tagSpecName' => 'AMP-BASE-CAROUSEL lightbox [child]'],
                ],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-base-carousel', 'amp-lightbox-gallery'],
            ]
        );
        $this->tags['AMP-BEOPINION'] = new Tag(
            [
                'tagName' => 'AMP-BEOPINION',
                'attrs' => [
                    ['name' => 'data-account', 'mandatory' => true, 'valueRegexCasei' => '[0-9a-f]{24}'],
                    ['name' => 'data-content', 'valueRegexCasei' => '[0-9a-f]{24}'],
                    ['name' => 'data-my-content', 'value' => ['0', '1']],
                    ['name' => 'data-name'],
                ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-beopinion'],
            ]
        );
        $this->tags['AMP-BIND-MACRO'] = new Tag(
            [
                'tagName' => 'AMP-BIND-MACRO',
                'attrs' => [['name' => 'arguments'], ['name' => 'expression', 'mandatory' => true]],
                'attrLists' => ['mandatory-id-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-bind/',
                'htmlFormat' => ['AMP', 'AMP4EMAIL'],
                'requiresExtension' => ['amp-bind'],
            ]
        );
        $this->tags['amp-bind extension .json script'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'amp-bind extension .json script',
                'mandatoryParent' => 'AMP-STATE',
                'attrs' => [
                    [
                        'name' => 'type',
                        'mandatory' => true,
                        'dispatchKey' => 'NAME_VALUE_PARENT_DISPATCH',
                        'valueCasei' => ['application/json'],
                    ],
                ],
                'attrLists' => ['nonce-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-bind/',
                'cdata' => [
                    'maxBytes' => 100000,
                    'maxBytesSpecUrl' => 'https://amp.dev/documentation/components/amp-bind#state',
                    'disallowedCdataRegex' => [['regex' => '<!--', 'errorMessage' => 'html comments']],
                ],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                'requiresExtension' => ['amp-bind'],
            ]
        );
        $this->tags['AMP-BODYMOVIN-ANIMATION'] = new Tag(
            [
                'tagName' => 'AMP-BODYMOVIN-ANIMATION',
                'attrs' => [
                    ['name' => 'loop', 'valueRegexCasei' => '[1-9][0-9]*|false|true'],
                    ['name' => 'noautoplay', 'value' => ['']],
                    ['name' => 'src', 'mandatory' => true, 'valueUrl' => ['protocol' => ['https'], 'allowRelative' => false]],
                    ['name' => 'renderer', 'valueCasei' => ['svg', 'html']],
                ],
                'specUrl' => 'https://amp.dev/documentation/components/amp-bodymovin-animation/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-bodymovin-animation'],
            ]
        );
        $this->tags['AMP-BRID-PLAYER'] = new Tag(
            [
                'tagName' => 'AMP-BRID-PLAYER',
                'attrs' => [
                    ['name' => 'autoplay'],
                    ['name' => 'data-dynamic', 'valueRegex' => '[a-z]+'],
                    [
                        'name' => 'data-outstream',
                        'mandatoryOneof' => '[\'data-outstream\', \'data-playlist\', \'data-video\']',
                        'valueRegex' => '[0-9]+',
                    ],
                    ['name' => 'data-partner', 'mandatory' => true, 'valueRegex' => '[0-9]+'],
                    ['name' => 'data-player', 'mandatory' => true, 'valueRegex' => '[0-9]+'],
                    [
                        'name' => 'data-playlist',
                        'mandatoryOneof' => '[\'data-outstream\', \'data-playlist\', \'data-video\']',
                        'valueRegex' => '.+',
                    ],
                    [
                        'name' => 'data-video',
                        'mandatoryOneof' => '[\'data-outstream\', \'data-playlist\', \'data-video\']',
                        'valueRegex' => '[0-9]+',
                    ],
                    ['name' => 'dock', 'requiresExtension' => ['amp-video-docking']],
                ],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-brid-player/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-brid-player'],
            ]
        );
        $this->tags['AMP-BRIGHTCOVE'] = new Tag(
            [
                'tagName' => 'AMP-BRIGHTCOVE',
                'attrs' => [
                    ['name' => 'autoplay', 'value' => ['']],
                    ['name' => 'data-account', 'mandatory' => true],
                    ['name' => 'dock', 'requiresExtension' => ['amp-video-docking']],
                    ['name' => '[data-account]'],
                    ['name' => '[data-embed]'],
                    ['name' => '[data-player-id]'],
                    ['name' => '[data-player]'],
                    ['name' => '[data-playlist-id]'],
                    ['name' => '[data-video-id]'],
                    ['name' => '[data-referrer]'],
                ],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-brightcove/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-brightcove'],
            ]
        );
        $this->tags['AMP-BYSIDE-CONTENT'] = new Tag(
            [
                'tagName' => 'AMP-BYSIDE-CONTENT',
                'attrs' => [['name' => 'data-label', 'mandatory' => true], ['name' => 'data-webcare-id', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-byside-content'],
            ]
        );
        $this->tags['AMP-CALL-TRACKING'] = new Tag(
            [
                'tagName' => 'AMP-CALL-TRACKING',
                'attrs' => [
                    [
                        'name' => 'config',
                        'mandatory' => true,
                        'disallowedValueRegex' => '__amp_source_origin',
                        'valueUrl' => ['protocol' => ['https'], 'allowRelative' => false],
                    ],
                ],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-call-tracking/',
                'ampLayout' => ['supportedLayouts' => ['CONTAINER', 'FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'RESPONSIVE']],
                'childTags' => ['mandatoryNumChildTags' => 1, 'childTagNameOneof' => ['A']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-call-tracking'],
            ]
        );
        $this->tags['AMP-CAROUSEL'] = new Tag(
            [
                'tagName' => 'AMP-CAROUSEL',
                'specName' => 'AMP-CAROUSEL',
                'attrLists' => ['amp-carousel-common', 'extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-carousel/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                'requiresExtension' => ['amp-carousel'],
            ]
        );
        $this->tags['AMP-CAROUSEL lightbox'] = new Tag(
            [
                'tagName' => 'AMP-CAROUSEL',
                'specName' => 'AMP-CAROUSEL lightbox',
                'attrs' => [['name' => 'lightbox', 'mandatory' => true]],
                'attrLists' => ['amp-carousel-common', 'extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-carousel/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'referencePoints' => [['tagSpecName' => 'AMP-CAROUSEL lightbox [lightbox-exclude]'], ['tagSpecName' => 'AMP-CAROUSEL lightbox [child]']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-carousel', 'amp-lightbox-gallery'],
            ]
        );
        $this->tags['AMP-CAROUSEL lightbox [child]'] = new Tag(
            [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-CAROUSEL lightbox [child]',
                'attrs' => [['name' => 'lightbox-thumbnail-id', 'valueRegexCasei' => '^[a-z][a-z\d_-]*']],
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['AMP-CAROUSEL lightbox [lightbox-exclude]'] = new Tag(
            [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-CAROUSEL lightbox [lightbox-exclude]',
                'attrs' => [['name' => 'lightbox-exclude', 'mandatory' => true]],
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['AMP-CONNATIX-PLAYER'] = new Tag(
            [
                'tagName' => 'AMP-CONNATIX-PLAYER',
                'attrs' => [['name' => 'data-player-id', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-connatix-player/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-connatix-player'],
            ]
        );
        $this->tags['AMP-CONSENT'] = new Tag(
            [
                'tagName' => 'AMP-CONSENT',
                'unique' => true,
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'htmlFormat' => ['AMP'],
                'requires' => ['amp-consent extension .json script'],
                'requiresExtension' => ['amp-consent'],
                'excludes' => ['amp-consent [type]'],
            ]
        );
        $this->tags['amp-consent extension .json script'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'amp-consent extension .json script',
                'unique' => true,
                'mandatoryParent' => 'AMP-CONSENT',
                'attrs' => [
                    [
                        'name' => 'type',
                        'mandatory' => true,
                        'dispatchKey' => 'NAME_VALUE_PARENT_DISPATCH',
                        'valueCasei' => ['application/json'],
                    ],
                ],
                'attrLists' => ['nonce-attr'],
                'cdata' => ['disallowedCdataRegex' => [['regex' => '<!--', 'errorMessage' => 'html comments']]],
                'htmlFormat' => ['AMP'],
                'satisfies' => ['amp-consent extension .json script'],
                'requiresExtension' => ['amp-consent'],
            ]
        );
        $this->tags['amp-consent [type]'] = new Tag(
            [
                'tagName' => 'AMP-CONSENT',
                'specName' => 'amp-consent [type]',
                'unique' => true,
                'attrs' => [['name' => 'type', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'htmlFormat' => ['AMP'],
                'satisfies' => ['amp-consent [type]'],
                'requires' => ['meta name=amp-consent-blocking', 'amp-consent extension .json script'],
                'requiresExtension' => ['amp-consent'],
            ]
        );
        $this->tags['AMP-DAILYMOTION'] = new Tag(
            [
                'tagName' => 'AMP-DAILYMOTION',
                'attrs' => [
                    ['name' => 'autoplay'],
                    ['name' => 'data-endscreen-enable', 'value' => ['false', 'true']],
                    ['name' => 'data-info', 'value' => ['false', 'true']],
                    ['name' => 'data-mute', 'value' => ['false', 'true']],
                    ['name' => 'data-sharing-enable', 'value' => ['false', 'true']],
                    ['name' => 'data-start', 'valueRegex' => '[0-9]+'],
                    ['name' => 'data-ui-highlight', 'valueRegexCasei' => '([0-9a-f]{3}){1,2}'],
                    ['name' => 'data-ui-logo', 'value' => ['false', 'true']],
                    ['name' => 'data-videoid', 'mandatory' => true, 'valueRegexCasei' => '[a-z0-9]+'],
                    ['name' => 'dock', 'requiresExtension' => ['amp-video-docking']],
                ],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-dailymotion/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-dailymotion'],
            ]
        );
        $this->tags['AMP-DATE-COUNTDOWN'] = new Tag(
            [
                'tagName' => 'AMP-DATE-COUNTDOWN',
                'attrs' => [
                    ['name' => 'biggest-unit', 'valueCasei' => ['days', 'hours', 'minutes', 'seconds']],
                    ['name' => 'data-count-up', 'value' => ['']],
                    [
                        'name' => 'end-date',
                        'mandatoryOneof' => '[\'end-date\', \'timeleft-ms\', \'timestamp-ms\', \'timestamp-seconds\']',
                        'valueRegex' => '\d{4}-[01]\d-[0-3]\dT[0-2]\d:[0-5]\d(:[0-5]\d(\.\d+)?)?(Z|[+-][0-1][0-9]:[0-5][0-9])',
                    ],
                    [
                        'name' => 'locale',
                        'valueCasei' => [
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
                    ['name' => 'offset-seconds', 'valueRegex' => '-?\d+'],
                    ['name' => 'template', 'valueOneofSet' => 'TEMPLATE_IDS'],
                    [
                        'name' => 'timeleft-ms',
                        'mandatoryOneof' => '[\'end-date\', \'timeleft-ms\', \'timestamp-ms\', \'timestamp-seconds\']',
                        'valueRegex' => '\d+',
                    ],
                    [
                        'name' => 'timestamp-ms',
                        'mandatoryOneof' => '[\'end-date\', \'timeleft-ms\', \'timestamp-ms\', \'timestamp-seconds\']',
                        'valueRegex' => '\d{13}',
                    ],
                    [
                        'name' => 'timestamp-seconds',
                        'mandatoryOneof' => '[\'end-date\', \'timeleft-ms\', \'timestamp-ms\', \'timestamp-seconds\']',
                        'valueRegex' => '\d{10}',
                    ],
                    ['name' => 'when-ended', 'valueCasei' => ['continue', 'stop']],
                ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-date-countdown'],
            ]
        );
        $this->tags['AMP-DATE-DISPLAY'] = new Tag(
            [
                'tagName' => 'AMP-DATE-DISPLAY',
                'attrs' => [
                    [
                        'name' => 'datetime',
                        'mandatoryOneof' => '[\'datetime\', \'timestamp-ms\', \'timestamp-seconds\']',
                        'valueRegex' => 'now|(\d{4}-[01]\d-[0-3]\d(T[0-2]\d:[0-5]\d(:[0-6]\d(\.\d\d?\d?)?)?(Z|[+-][0-1]\d:[0-5]\d)?)?)',
                    ],
                    ['name' => 'display-in', 'valueCasei' => ['utc']],
                    ['name' => 'offset-seconds', 'valueRegex' => '-?\d+'],
                    ['name' => 'locale'],
                    ['name' => 'template', 'valueOneofSet' => 'TEMPLATE_IDS'],
                    [
                        'name' => 'timestamp-ms',
                        'mandatoryOneof' => '[\'datetime\', \'timestamp-ms\', \'timestamp-seconds\']',
                        'valueRegex' => '\d+',
                    ],
                    [
                        'name' => 'timestamp-seconds',
                        'mandatoryOneof' => '[\'datetime\', \'timestamp-ms\', \'timestamp-seconds\']',
                        'valueRegex' => '\d+',
                    ],
                ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-date-display'],
            ]
        );
        $this->tags['amp-date-picker > template [date-template]'] = new Tag(
            [
                'tagName' => 'TEMPLATE',
                'specName' => 'amp-date-picker > template [date-template]',
                'mandatoryParent' => 'AMP-DATE-PICKER',
                'attrs' => [
                    ['name' => 'date-template', 'mandatory' => true, 'value' => [''], 'dispatchKey' => 'NAME_DISPATCH'],
                    ['name' => 'default'],
                    ['name' => 'dates'],
                    ['name' => 'type', 'mandatory' => true, 'value' => ['amp-mustache']],
                ],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-mustache'],
            ]
        );
        $this->tags['amp-date-picker > template [info-template]'] = new Tag(
            [
                'tagName' => 'TEMPLATE',
                'specName' => 'amp-date-picker > template [info-template]',
                'mandatoryParent' => 'AMP-DATE-PICKER',
                'attrs' => [
                    ['name' => 'info-template', 'mandatory' => true, 'dispatchKey' => 'NAME_DISPATCH'],
                    ['name' => 'type', 'mandatory' => true, 'value' => ['amp-mustache']],
                ],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-mustache'],
            ]
        );
        $this->tags['amp-date-picker[type=range][mode=overlay]'] = new Tag(
            [
                'tagName' => 'AMP-DATE-PICKER',
                'specName' => 'amp-date-picker[type=range][mode=overlay]',
                'attrs' => [
                    ['name' => 'mode', 'mandatory' => true, 'dispatchKey' => 'NAME_VALUE_DISPATCH', 'valueCasei' => ['overlay']],
                    ['name' => 'type', 'mandatory' => true, 'valueCasei' => ['range']],
                ],
                'attrLists' => [
                    'amp-date-picker-common-attributes',
                    'amp-date-picker-overlay-mode-attributes',
                    'amp-date-picker-range-type-attributes',
                    'extended-amp-global',
                ],
                'ampLayout' => ['supportedLayouts' => ['CONTAINER', 'NODISPLAY']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-date-picker'],
            ]
        );
        $this->tags['amp-date-picker[type=range][mode=static]'] = new Tag(
            [
                'tagName' => 'AMP-DATE-PICKER',
                'specName' => 'amp-date-picker[type=range][mode=static]',
                'attrs' => [['name' => 'mode', 'valueCasei' => ['static']], ['name' => 'type', 'mandatory' => true, 'valueCasei' => ['range']]],
                'attrLists' => [
                    'amp-date-picker-common-attributes',
                    'amp-date-picker-range-type-attributes',
                    'amp-date-picker-static-mode-attributes',
                    'extended-amp-global',
                ],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-date-picker'],
            ]
        );
        $this->tags['amp-date-picker[type=single][mode=overlay]'] = new Tag(
            [
                'tagName' => 'AMP-DATE-PICKER',
                'specName' => 'amp-date-picker[type=single][mode=overlay]',
                'attrs' => [
                    ['name' => 'mode', 'mandatory' => true, 'dispatchKey' => 'NAME_VALUE_DISPATCH', 'valueCasei' => ['overlay']],
                    ['name' => 'type', 'valueCasei' => ['single']],
                ],
                'attrLists' => [
                    'amp-date-picker-common-attributes',
                    'amp-date-picker-overlay-mode-attributes',
                    'amp-date-picker-single-type-attributes',
                    'extended-amp-global',
                ],
                'ampLayout' => ['supportedLayouts' => ['CONTAINER', 'NODISPLAY']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-date-picker'],
            ]
        );
        $this->tags['amp-date-picker[type=single][mode=static]'] = new Tag(
            [
                'tagName' => 'AMP-DATE-PICKER',
                'specName' => 'amp-date-picker[type=single][mode=static]',
                'attrs' => [['name' => 'mode', 'valueCasei' => ['static']], ['name' => 'type', 'valueCasei' => ['single']]],
                'attrLists' => [
                    'amp-date-picker-common-attributes',
                    'amp-date-picker-single-type-attributes',
                    'amp-date-picker-static-mode-attributes',
                    'extended-amp-global',
                ],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-date-picker'],
            ]
        );
        $this->tags['AMP-DELIGHT-PLAYER'] = new Tag(
            [
                'tagName' => 'AMP-DELIGHT-PLAYER',
                'attrs' => [['name' => 'data-content-id', 'mandatory' => true], ['name' => 'dock', 'requiresExtension' => ['amp-video-docking']]],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-delight-player'],
            ]
        );
        $this->tags['AMP-EMBED'] = new Tag(
            [
                'tagName' => 'AMP-EMBED',
                'attrs' => [
                    ['name' => 'alt'],
                    ['name' => 'json'],
                    ['name' => 'rtc-config'],
                    [
                        'name' => 'src',
                        'disallowedValueRegex' => '__amp_source_origin',
                        'valueUrl' => ['protocol' => ['https'], 'allowRelative' => true],
                    ],
                    ['name' => 'type', 'mandatory' => true],
                ],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-ad/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'FLUID', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'disallowedAncestor' => ['AMP-APP-BANNER'],
                'htmlFormat' => ['AMP'],
                'alsoRequiresTagWarning' => ['amp-ad extension script'],
                'requiresExtension' => ['amp-ad'],
            ]
        );
        $this->tags['AMP-EMBEDLY-CARD'] = new Tag(
            [
                'tagName' => 'AMP-EMBEDLY-CARD',
                'attrs' => [['name' => 'data-url', 'mandatory' => true, 'valueUrl' => ['protocol' => ['https'], 'allowRelative' => false]]],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-embedly-card/',
                'ampLayout' => ['supportedLayouts' => ['RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-embedly-card'],
            ]
        );
        $this->tags['AMP-EMBEDLY-KEY'] = new Tag(
            [
                'tagName' => 'AMP-EMBEDLY-KEY',
                'unique' => true,
                'attrs' => [['name' => 'value', 'mandatory' => true]],
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-embedly-card'],
            ]
        );
        $this->tags['amp-embed with data-multi-size attribute'] = new Tag(
            [
                'tagName' => 'AMP-EMBED',
                'specName' => 'amp-embed with data-multi-size attribute',
                'attrs' => [
                    ['name' => 'alt'],
                    ['name' => 'data-multi-size', 'mandatory' => true, 'value' => [''], 'dispatchKey' => 'NAME_VALUE_DISPATCH'],
                    ['name' => 'json'],
                    ['name' => 'rtc-config'],
                    [
                        'name' => 'src',
                        'disallowedValueRegex' => '__amp_source_origin',
                        'valueUrl' => ['protocol' => ['https'], 'allowRelative' => true],
                    ],
                    ['name' => 'type', 'mandatory' => true],
                ],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-ad/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'FLUID', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'disallowedAncestor' => ['AMP-APP-BANNER', 'AMP-CAROUSEL', 'AMP-FX-FLYING-CARPET', 'AMP-LIGHTBOX', 'AMP-STICKY-AD'],
                'htmlFormat' => ['AMP'],
                'alsoRequiresTagWarning' => ['amp-ad extension script'],
                'requiresExtension' => ['amp-ad'],
            ]
        );
        $this->tags['AMP-EXPERIMENT'] = new Tag(
            [
                'tagName' => 'AMP-EXPERIMENT',
                'unique' => true,
                'specUrl' => 'https://amp.dev/documentation/components/amp-experiment/',
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-experiment'],
            ]
        );
        $this->tags['amp-experiment extension .json script'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'amp-experiment extension .json script',
                'mandatoryParent' => 'AMP-EXPERIMENT',
                'attrs' => [
                    [
                        'name' => 'type',
                        'mandatory' => true,
                        'dispatchKey' => 'NAME_VALUE_PARENT_DISPATCH',
                        'valueCasei' => ['application/json'],
                    ],
                ],
                'attrLists' => ['nonce-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-experiment/',
                'cdata' => [
                    'maxBytes' => 15000,
                    'maxBytesSpecUrl' => 'https://amp.dev/documentation/components/amp-experiment/#configuration',
                    'disallowedCdataRegex' => [['regex' => '<!--', 'errorMessage' => 'html comments']],
                ],
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['amp-experiment story extension .json script'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'amp-experiment story extension .json script',
                'mandatoryParent' => 'AMP-EXPERIMENT',
                'attrs' => [
                    [
                        'name' => 'type',
                        'mandatory' => true,
                        'dispatchKey' => 'NAME_VALUE_PARENT_DISPATCH',
                        'valueCasei' => ['application/json'],
                    ],
                ],
                'attrLists' => ['nonce-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-experiment/',
                'cdata' => [
                    'maxBytes' => 15000,
                    'maxBytesSpecUrl' => 'https://amp.dev/documentation/components/amp-experiment/#configuration',
                    'disallowedCdataRegex' => [['regex' => '<!--', 'errorMessage' => 'html comments']],
                ],
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['AMP-FACEBOOK'] = new Tag(
            [
                'tagName' => 'AMP-FACEBOOK',
                'attrs' => [['name' => 'data-href', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-facebook'],
            ]
        );
        $this->tags['AMP-FACEBOOK-COMMENTS'] = new Tag(
            [
                'tagName' => 'AMP-FACEBOOK-COMMENTS',
                'attrs' => [['name' => 'data-href', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-facebook-comments'],
            ]
        );
        $this->tags['AMP-FACEBOOK-LIKE'] = new Tag(
            [
                'tagName' => 'AMP-FACEBOOK-LIKE',
                'attrs' => [
                    [
                        'name' => 'data-href',
                        'mandatory' => true,
                        'valueUrl' => ['protocol' => ['http', 'https'], 'allowRelative' => false],
                    ],
                ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-facebook-like'],
            ]
        );
        $this->tags['AMP-FACEBOOK-PAGE'] = new Tag(
            [
                'tagName' => 'AMP-FACEBOOK-PAGE',
                'attrs' => [
                    [
                        'name' => 'data-href',
                        'mandatory' => true,
                        'valueUrl' => ['protocol' => ['http', 'https'], 'allowRelative' => false],
                    ],
                ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-facebook-page'],
            ]
        );
        $this->tags['AMP-FIT-TEXT'] = new Tag(
            [
                'tagName' => 'AMP-FIT-TEXT',
                'attrs' => [['name' => 'max-font-size'], ['name' => 'min-font-size']],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                'requiresExtension' => ['amp-fit-text'],
            ]
        );
        $this->tags['AMP-FONT'] = new Tag(
            [
                'tagName' => 'AMP-FONT',
                'attrs' => [
                    ['name' => 'font-family', 'mandatory' => true],
                    ['name' => 'font-style'],
                    ['name' => 'font-variant'],
                    ['name' => 'font-weight'],
                    ['name' => 'on-error-add-class'],
                    ['name' => 'on-error-remove-class'],
                    ['name' => 'on-load-add-class'],
                    ['name' => 'on-load-remove-class'],
                    ['name' => 'timeout', 'valueRegex' => '[0-9]+'],
                ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'requiresExtension' => ['amp-font'],
            ]
        );
        $this->tags['AMP-FX-FLYING-CARPET'] = new Tag(
            [
                'tagName' => 'AMP-FX-FLYING-CARPET',
                'attrs' => [['name' => 'height', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-fx-flying-carpet'],
            ]
        );
        $this->tags['AMP-GEO'] = new Tag(
            [
                'tagName' => 'AMP-GEO',
                'unique' => true,
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'childTags' => ['firstChildTagNameOneof' => ['SCRIPT']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-geo'],
            ]
        );
        $this->tags['amp-geo extension .json script'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'amp-geo extension .json script',
                'mandatoryParent' => 'AMP-GEO',
                'attrs' => [
                    [
                        'name' => 'type',
                        'mandatory' => true,
                        'dispatchKey' => 'NAME_VALUE_PARENT_DISPATCH',
                        'valueCasei' => ['application/json'],
                    ],
                ],
                'attrLists' => ['nonce-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-geo/',
                'cdata' => ['disallowedCdataRegex' => [['regex' => '<!--', 'errorMessage' => 'html comments']]],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-geo'],
            ]
        );
        $this->tags['AMP-GFYCAT'] = new Tag(
            [
                'tagName' => 'AMP-GFYCAT',
                'attrs' => [['name' => 'data-gfyid', 'mandatory' => true], ['name' => 'noautoplay', 'value' => ['']]],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-gfycat/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-gfycat'],
            ]
        );
        $this->tags['AMP-GIST'] = new Tag(
            [
                'tagName' => 'AMP-GIST',
                'attrs' => [['name' => 'data-gistid', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-gist/',
                'ampLayout' => ['supportedLayouts' => ['FIXED_HEIGHT']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-gist'],
            ]
        );
        $this->tags['AMP-GOOGLE-DOCUMENT-EMBED'] = new Tag(
            [
                'tagName' => 'AMP-GOOGLE-DOCUMENT-EMBED',
                'attrs' => [
                    [
                        'name' => 'src',
                        'mandatory' => true,
                        'disallowedValueRegex' => '__amp_source_origin',
                        'valueUrl' => ['protocol' => ['https'], 'allowRelative' => false],
                    ],
                    ['name' => '[src]'],
                    ['name' => '[title]'],
                ],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-google-document-embed/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-google-document-embed'],
            ]
        );
        $this->tags['AMP-GWD-ANIMATION'] = new Tag(
            [
                'tagName' => 'AMP-GWD-ANIMATION',
                'attrs' => [['name' => 'timeline-event-prefix']],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'htmlFormat' => ['AMP4ADS'],
                'requiresExtension' => ['amp-gwd-animation'],
            ]
        );
        $this->tags['AMP-HULU'] = new Tag(
            [
                'tagName' => 'AMP-HULU',
                'attrs' => [['name' => 'data-eid', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-hulu/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-hulu'],
            ]
        );
        $this->tags['AMP-IFRAME'] = new Tag(
            [
                'tagName' => 'AMP-IFRAME',
                'attrs' => [
                    ['name' => 'allow'],
                    ['name' => 'allowfullscreen', 'value' => ['']],
                    ['name' => 'allowpaymentrequest', 'value' => ['']],
                    ['name' => 'allowtransparency', 'value' => ['']],
                    ['name' => 'frameborder', 'value' => ['0', '1']],
                    ['name' => 'referrerpolicy'],
                    ['name' => 'resizable', 'value' => ['']],
                    ['name' => 'sandbox'],
                    ['name' => 'scrolling', 'value' => ['auto', 'no', 'yes']],
                    ['name' => 'tabindex', 'valueRegex' => '-?\d+'],
                    [
                        'name' => 'src',
                        'disallowedValueRegex' => '__amp_source_origin',
                        'mandatoryOneof' => '[\'src\', \'srcdoc\']',
                        'valueUrl' => ['protocol' => ['data', 'https'], 'allowRelative' => true],
                    ],
                    ['name' => 'srcdoc', 'mandatoryOneof' => '[\'src\', \'srcdoc\']'],
                    ['name' => '[src]', 'trigger' => ['alsoRequiresAttr' => ['src']]],
                ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-iframe'],
            ]
        );
        $this->tags['AMP-IMA-VIDEO'] = new Tag(
            [
                'tagName' => 'AMP-IMA-VIDEO',
                'attrs' => [
                    ['name' => 'autoplay', 'value' => ['']],
                    [
                        'name' => 'data-src',
                        'disallowedValueRegex' => '__amp_source_origin',
                        'valueUrl' => ['protocol' => ['https'], 'allowRelative' => true],
                    ],
                    ['name' => 'data-tag', 'mandatory' => true, 'valueUrl' => ['protocol' => ['https'], 'allowRelative' => true]],
                    ['name' => 'dock', 'requiresExtension' => ['amp-video-docking']],
                    ['name' => 'rotate-to-fullscreen', 'value' => ['']],
                ],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-ima-video/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-ima-video'],
            ]
        );
        $this->tags['amp-ima-video > script[type=application/json]'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'amp-ima-video > script[type=application/json]',
                'mandatoryParent' => 'AMP-IMA-VIDEO',
                'attrs' => [
                    [
                        'name' => 'type',
                        'mandatory' => true,
                        'dispatchKey' => 'NAME_VALUE_PARENT_DISPATCH',
                        'valueCasei' => ['application/json'],
                    ],
                ],
                'cdata' => ['disallowedCdataRegex' => [['regex' => '<!--', 'errorMessage' => 'html comments']]],
                'htmlFormat' => ['AMP'],
                'descriptiveName' => 'script type=application/ld+json',
            ]
        );
        $this->tags['amp-ima-video > source'] = new Tag(
            [
                'tagName' => 'SOURCE',
                'specName' => 'amp-ima-video > source',
                'mandatoryParent' => 'AMP-IMA-VIDEO',
                'attrs' => [
                    ['name' => 'media'],
                    [
                        'name' => 'src',
                        'disallowedValueRegex' => '__amp_source_origin',
                        'valueUrl' => ['protocol' => ['https'], 'allowRelative' => true],
                    ],
                    ['name' => 'type'],
                    ['name' => '[src]'],
                    ['name' => '[type]'],
                ],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'requiresExtension' => ['amp-ima-video'],
            ]
        );
        $this->tags['amp-ima-video > track'] = new Tag(
            [
                'tagName' => 'TRACK',
                'specName' => 'amp-ima-video > track',
                'mandatoryParent' => 'AMP-IMA-VIDEO',
                'attrs' => [['name' => '[label]'], ['name' => '[src]'], ['name' => '[srclang]']],
                'attrLists' => ['track-attrs-no-subtitles'],
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['amp-ima-video > track[kind=subtitles]'] = new Tag(
            [
                'tagName' => 'TRACK',
                'specName' => 'amp-ima-video > track[kind=subtitles]',
                'mandatoryParent' => 'AMP-IMA-VIDEO',
                'attrs' => [['name' => '[label]'], ['name' => '[src]'], ['name' => '[srclang]']],
                'attrLists' => ['track-attrs-subtitles'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-ima-video/',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['AMP-IMAGE-LIGHTBOX'] = new Tag(
            [
                'tagName' => 'AMP-IMAGE-LIGHTBOX',
                'attrs' => [['name' => 'controls']],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'htmlFormat' => ['AMP', 'AMP4EMAIL'],
                'requiresExtension' => ['amp-image-lightbox'],
            ]
        );
        $this->tags['AMP-IMAGE-SLIDER'] = new Tag(
            [
                'tagName' => 'AMP-IMAGE-SLIDER',
                'attrs' => [
                    ['name' => 'disable-hint-reappear'],
                    ['name' => 'initial-slider-position', 'valueRegex' => '0(\.[0-9]+)?|1(\.0+)?'],
                    ['name' => 'step-size', 'valueRegex' => '0(\.[0-9]+)?|1(\.0+)?'],
                ],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-image-slider/',
                'ampLayout' => ['supportedLayouts' => ['FIXED', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'childTags' => ['childTagNameOneof' => ['AMP-IMG', 'DIV'], 'mandatoryMinNumChildTags' => 2],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-image-slider'],
                'disabledBy' => ['transformed'],
            ]
        );
        $this->tags['amp-image-slider (transformed)'] = new Tag(
            [
                'tagName' => 'AMP-IMAGE-SLIDER',
                'specName' => 'amp-image-slider (transformed)',
                'attrs' => [
                    ['name' => 'disable-hint-reappear'],
                    ['name' => 'initial-slider-position', 'valueRegex' => '0(\.[0-9]+)?|1(\.0+)?'],
                    ['name' => 'step-size', 'valueRegex' => '0(\.[0-9]+)?|1(\.0+)?'],
                ],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-image-slider/',
                'ampLayout' => ['supportedLayouts' => ['FIXED', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'childTags' => ['childTagNameOneof' => ['AMP-IMG', 'DIV', 'I-AMPHTML-SIZER'], 'mandatoryMinNumChildTags' => 2],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-image-slider'],
                'enabledBy' => ['transformed'],
            ]
        );
        $this->tags['AMP-IMAGE-SLIDER > DIV [first]'] = new Tag(
            [
                'tagName' => 'DIV',
                'specName' => 'AMP-IMAGE-SLIDER > DIV [first]',
                'mandatoryParent' => 'AMP-IMAGE-SLIDER',
                'attrs' => [['name' => 'first', 'mandatory' => true]],
                'specUrl' => 'https://amp.dev/documentation/components/amp-image-slider/',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['AMP-IMAGE-SLIDER > DIV [second]'] = new Tag(
            [
                'tagName' => 'DIV',
                'specName' => 'AMP-IMAGE-SLIDER > DIV [second]',
                'mandatoryParent' => 'AMP-IMAGE-SLIDER',
                'attrs' => [['name' => 'second', 'mandatory' => true]],
                'specUrl' => 'https://amp.dev/documentation/components/amp-image-slider/',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['AMP-IMG'] = new Tag(
            [
                'tagName' => 'AMP-IMG',
                'attrs' => [
                    ['name' => 'alt'],
                    ['name' => 'attribution'],
                    ['name' => 'crossorigin'],
                    ['name' => 'object-fit'],
                    ['name' => 'object-position'],
                    ['name' => 'placeholder'],
                    ['name' => 'referrerpolicy'],
                    ['name' => '[alt]'],
                    ['name' => '[attribution]'],
                    ['name' => '[src]'],
                    ['name' => '[srcset]'],
                ],
                'attrLists' => ['extended-amp-global', 'lightboxable-elements', 'mandatory-src-or-srcset'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-img/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['AMP-IMG (AMP4EMAIL)'] = new Tag(
            [
                'tagName' => 'AMP-IMG',
                'specName' => 'AMP-IMG (AMP4EMAIL)',
                'attrs' => [
                    ['name' => 'alt'],
                    ['name' => 'attribution'],
                    ['name' => 'placeholder'],
                    ['name' => '[alt]'],
                    ['name' => '[attribution]'],
                ],
                'attrLists' => ['extended-amp-global', 'mandatory-src-amp4email'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-img/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP4EMAIL'],
            ]
        );
        $this->tags['amp-img (transformed)'] = new Tag(
            [
                'tagName' => 'AMP-IMG',
                'specName' => 'amp-img (transformed)',
                'attrs' => [
                    ['name' => 'i-amphtml-ssr', 'mandatory' => true, 'dispatchKey' => 'NAME_DISPATCH'],
                    ['name' => 'alt'],
                    ['name' => 'attribution'],
                    ['name' => 'object-fit'],
                    ['name' => 'object-position'],
                    ['name' => 'placeholder'],
                    ['name' => 'referrerpolicy'],
                    ['name' => '[alt]'],
                    ['name' => '[attribution]'],
                    ['name' => '[src]'],
                    ['name' => '[srcset]'],
                ],
                'attrLists' => ['extended-amp-global', 'lightboxable-elements', 'mandatory-src-or-srcset'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-img/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'enabledBy' => ['transformed'],
            ]
        );
        $this->tags['amp-img > img (transformed)'] = new Tag(
            [
                'tagName' => 'IMG',
                'specName' => 'amp-img > img (transformed)',
                'mandatoryParent' => 'amp-img (transformed)',
                'attrs' => [
                    ['name' => 'alt'],
                    ['name' => 'attribution'],
                    ['name' => 'object-fit'],
                    ['name' => 'object-position'],
                    ['name' => 'referrerpolicy'],
                    ['name' => 'sizes'],
                    ['name' => 'title'],
                    [
                        'name' => 'class',
                        'mandatory' => true,
                        'valueRegex' => 'i-amphtml-fill-content\s+i-amphtml-replaced-content|i-amphtml-replaced-content\s+i-amphtml-fill-content',
                    ],
                    ['name' => 'decoding', 'mandatory' => true, 'value' => ['async']],
                    ['name' => 'loading', 'value' => ['lazy', 'eager']],
                ],
                'attrLists' => ['mandatory-src-or-srcset'],
                'htmlFormat' => ['AMP'],
                'enabledBy' => ['transformed'],
            ]
        );
        $this->tags['amp-img > img[placeholder] (transformed)'] = new Tag(
            [
                'tagName' => 'IMG',
                'specName' => 'amp-img > img[placeholder] (transformed)',
                'mandatoryParent' => 'amp-img (transformed)',
                'attrs' => [
                    ['name' => 'alt'],
                    ['name' => 'attribution'],
                    ['name' => 'class', 'mandatory' => true, 'value' => ['i-amphtml-blurry-placeholder']],
                    ['name' => 'object-fit'],
                    ['name' => 'object-position'],
                    ['name' => 'placeholder', 'mandatory' => true, 'value' => [''], 'dispatchKey' => 'NAME_DISPATCH'],
                    ['name' => 'referrerpolicy'],
                    ['name' => 'sizes'],
                    ['name' => 'title'],
                ],
                'attrLists' => ['mandatory-src-or-srcset'],
                'htmlFormat' => ['AMP'],
                'enabledBy' => ['transformed'],
            ]
        );
        $this->tags['AMP-IMGUR'] = new Tag(
            [
                'tagName' => 'AMP-IMGUR',
                'attrs' => [['name' => 'data-imgur-id', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-imgur'],
            ]
        );
        $this->tags['AMP-INLINE-GALLERY'] = new Tag(
            [
                'tagName' => 'AMP-INLINE-GALLERY',
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-inline-gallery/',
                'ampLayout' => ['supportedLayouts' => ['CONTAINER']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-inline-gallery'],
            ]
        );
        $this->tags['amp-inline-gallery-pagination'] = new Tag(
            [
                'tagName' => 'AMP-INLINE-GALLERY-PAGINATION',
                'specName' => 'amp-inline-gallery-pagination',
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-inline-gallery/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'mandatoryAncestor' => 'AMP-INLINE-GALLERY',
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-inline-gallery'],
            ]
        );
        $this->tags['amp-inline-gallery-pagination [inset]'] = new Tag(
            [
                'tagName' => 'AMP-INLINE-GALLERY-PAGINATION',
                'specName' => 'amp-inline-gallery-pagination [inset]',
                'attrs' => [['name' => 'inset', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-inline-gallery/',
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'mandatoryAncestor' => 'AMP-INLINE-GALLERY',
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-inline-gallery'],
            ]
        );
        $this->tags['AMP-INLINE-GALLERY-THUMBNAILS'] = new Tag(
            [
                'tagName' => 'AMP-INLINE-GALLERY-THUMBNAILS',
                'attrs' => [
                    [
                        'name' => 'aspect-ratio-height',
                        'disallowedValueRegex' => '^0+(\.0+)?$',
                        'valueRegex' => '\d+(\.\d+)?',
                        'trigger' => ['alsoRequiresAttr' => ['aspect-ratio-width']],
                    ],
                    [
                        'name' => 'aspect-ratio-width',
                        'disallowedValueRegex' => '^0+(\.0+)?$',
                        'valueRegex' => '\d+(\.\d+)?',
                        'trigger' => ['alsoRequiresAttr' => ['aspect-ratio-height']],
                    ],
                    ['name' => 'loop', 'value' => ['true', 'false']],
                ],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-inline-gallery/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'mandatoryAncestor' => 'AMP-INLINE-GALLERY',
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-inline-gallery'],
            ]
        );
        $this->tags['AMP-INSTAGRAM'] = new Tag(
            [
                'tagName' => 'AMP-INSTAGRAM',
                'attrs' => [['name' => 'alt'], ['name' => 'data-shortcode', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-instagram'],
            ]
        );
        $this->tags['AMP-INSTALL-SERVICEWORKER'] = new Tag(
            [
                'tagName' => 'AMP-INSTALL-SERVICEWORKER',
                'attrs' => [
                    [
                        'name' => 'data-iframe-src',
                        'disallowedValueRegex' => '__amp_source_origin',
                        'valueUrl' => ['protocol' => ['https'], 'allowRelative' => true],
                    ],
                    [
                        'name' => 'src',
                        'mandatory' => true,
                        'disallowedValueRegex' => '__amp_source_origin',
                        'valueUrl' => ['protocol' => ['https'], 'allowRelative' => true],
                    ],
                ],
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-install-serviceworker'],
            ]
        );
        $this->tags['AMP-IZLESENE'] = new Tag(
            [
                'tagName' => 'AMP-IZLESENE',
                'attrs' => [['name' => 'data-videoid', 'mandatory' => true, 'valueRegex' => '[0-9]+']],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-izlesene'],
            ]
        );
        $this->tags['AMP-JWPLAYER'] = new Tag(
            [
                'tagName' => 'AMP-JWPLAYER',
                'attrs' => [
                    ['name' => 'autoplay', 'value' => ['']],
                    [
                        'name' => 'data-media-id',
                        'valueRegexCasei' => '[0-9a-z]{8}|outstream',
                        'mandatoryOneof' => '[\'data-media-id\', \'data-playlist-id\']',
                    ],
                    ['name' => 'data-player-id', 'mandatory' => true, 'valueRegexCasei' => '[0-9a-z]{8}'],
                    [
                        'name' => 'data-playlist-id',
                        'valueRegexCasei' => '[0-9a-z]{8}',
                        'mandatoryOneof' => '[\'data-media-id\', \'data-playlist-id\']',
                    ],
                    ['name' => 'dock', 'requiresExtension' => ['amp-video-docking']],
                ],
                'specUrl' => 'https://amp.dev/documentation/components/amp-jwplayer/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-jwplayer'],
            ]
        );
        $this->tags['AMP-KALTURA-PLAYER'] = new Tag(
            [
                'tagName' => 'AMP-KALTURA-PLAYER',
                'attrs' => [['name' => 'data-partner', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-kaltura-player'],
            ]
        );
        $this->tags['AMP-LAYOUT'] = new Tag(
            [
                'tagName' => 'AMP-LAYOUT',
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-layout/',
                'ampLayout' => [
                    'supportedLayouts' => [
                        'FILL',
                        'FIXED',
                        'FIXED_HEIGHT',
                        'FLEX_ITEM',
                        'INTRINSIC',
                        'NODISPLAY',
                        'RESPONSIVE',
                        'CONTAINER',
                    ],
                ],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['AMP-LIGHTBOX'] = new Tag(
            [
                'tagName' => 'AMP-LIGHTBOX',
                'attrs' => [
                    ['name' => 'animate-in', 'valueCasei' => ['fade-in', 'fly-in-bottom', 'fly-in-top']],
                    ['name' => 'controls'],
                    ['name' => 'from'],
                    ['name' => 'scrollable', 'disabledBy' => ['amp4email']],
                    ['name' => '[open]'],
                ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'htmlFormat' => ['AMP', 'AMP4EMAIL'],
                'requiresExtension' => ['amp-lightbox'],
            ]
        );
        $this->tags['amp-lightbox [AMP4ADS]'] = new Tag(
            [
                'tagName' => 'AMP-LIGHTBOX',
                'specName' => 'amp-lightbox [AMP4ADS]',
                'attrs' => [
                    ['name' => 'animate-in', 'valueCasei' => ['fade-in', 'fly-in-bottom', 'fly-in-top']],
                    ['name' => 'close-button', 'mandatory' => true],
                    ['name' => 'controls'],
                    ['name' => 'from'],
                ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'htmlFormat' => ['AMP4ADS'],
                'requiresExtension' => ['amp-lightbox'],
            ]
        );
        $this->tags['AMP-LINK-REWRITER'] = new Tag(
            [
                'tagName' => 'AMP-LINK-REWRITER',
                'unique' => true,
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'childTags' => ['mandatoryNumChildTags' => 1, 'firstChildTagNameOneof' => ['SCRIPT']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-link-rewriter'],
            ]
        );
        $this->tags['amp-link-rewriter extension .json script'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'amp-link-rewriter extension .json script',
                'mandatoryParent' => 'AMP-LINK-REWRITER',
                'attrs' => [
                    [
                        'name' => 'type',
                        'mandatory' => true,
                        'dispatchKey' => 'NAME_VALUE_PARENT_DISPATCH',
                        'valueCasei' => ['application/json'],
                    ],
                ],
                'attrLists' => ['nonce-attr'],
                'cdata' => ['disallowedCdataRegex' => [['regex' => '<!--', 'errorMessage' => 'html comments']]],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-link-rewriter'],
            ]
        );
        $this->tags['AMP-LIST'] = new Tag(
            [
                'tagName' => 'AMP-LIST',
                'attrs' => [
                    [
                        'name' => 'auto-resize',
                        'value' => [''],
                        'deprecation' => 'replacement-to-be-determined-at-a-later-date',
                        'deprecationUrl' => 'https://github.com/ampproject/amphtml/issues/18849',
                    ],
                    ['name' => 'binding', 'value' => ['always', 'no', 'refresh']],
                    ['name' => 'credentials'],
                    ['name' => 'data-amp-bind-src', 'mandatoryAnyof' => '[\'src\',\'[src]\',\'data-amp-bind-src\']'],
                    ['name' => 'diffable', 'value' => ['']],
                    ['name' => 'items'],
                    ['name' => 'load-more', 'value' => ['auto', 'manual']],
                    ['name' => 'load-more-bookmark', 'trigger' => ['alsoRequiresAttr' => ['load-more']]],
                    ['name' => 'max-items'],
                    ['name' => 'reset-on-refresh', 'value' => ['', 'always', 'fetch']],
                    ['name' => 'single-item'],
                    [
                        'name' => 'src',
                        'disallowedValueRegex' => '__amp_source_origin',
                        'valueUrl' => ['protocol' => ['https', 'amp-state', 'amp-script'], 'allowRelative' => true],
                        'mandatoryAnyof' => '[\'src\',\'[src]\',\'data-amp-bind-src\']',
                    ],
                    ['name' => 'template', 'valueOneofSet' => 'TEMPLATE_IDS'],
                    ['name' => 'xssi-prefix'],
                    ['name' => '[is-layout-container]'],
                    ['name' => '[src]', 'mandatoryAnyof' => '[\'src\',\'[src]\',\'data-amp-bind-src\']'],
                ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-list'],
            ]
        );
        $this->tags['AMP-LIST (AMP4EMAIL)'] = new Tag(
            [
                'tagName' => 'AMP-LIST',
                'specName' => 'AMP-LIST (AMP4EMAIL)',
                'attrs' => [
                    ['name' => 'binding', 'value' => ['always', 'no', 'refresh', 'refresh-evaluate']],
                    ['name' => 'diffable', 'value' => ['']],
                    ['name' => 'items'],
                    ['name' => 'max-items'],
                    ['name' => 'single-item'],
                    [
                        'name' => 'src',
                        'mandatory' => true,
                        'disallowedValueRegex' => '__amp_source_origin|{{|}}',
                        'valueUrl' => ['protocol' => ['https'], 'allowRelative' => false],
                    ],
                    ['name' => 'template', 'valueOneofSet' => 'TEMPLATE_IDS'],
                    ['name' => 'xssi-prefix'],
                    ['name' => '[is-layout-container]'],
                ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['CONTAINER', 'FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'disallowedAncestor' => ['AMP-LIST', 'AMP-STATE', 'TEMPLATE'],
                'htmlFormat' => ['AMP4EMAIL'],
                'requiresExtension' => ['amp-list'],
            ]
        );
        $this->tags['AMP-LIST-LOAD-MORE'] = new Tag(
            [
                'tagName' => 'AMP-LIST-LOAD-MORE',
                'mandatoryParent' => 'AMP-LIST',
                'attrs' => [
                    [
                        'name' => 'load-more-button',
                        'value' => [''],
                        'mandatoryOneof' => '[\'load-more-button\', \'load-more-failed\', \'load-more-end\', \'load-more-loading\']',
                    ],
                    [
                        'name' => 'load-more-failed',
                        'value' => [''],
                        'mandatoryOneof' => '[\'load-more-button\', \'load-more-failed\', \'load-more-end\', \'load-more-loading\']',
                    ],
                    [
                        'name' => 'load-more-loading',
                        'value' => [''],
                        'mandatoryOneof' => '[\'load-more-button\', \'load-more-failed\', \'load-more-end\', \'load-more-loading\']',
                    ],
                    [
                        'name' => 'load-more-end',
                        'value' => [''],
                        'mandatoryOneof' => '[\'load-more-button\', \'load-more-failed\', \'load-more-end\', \'load-more-loading\']',
                    ],
                ],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-list'],
            ]
        );
        $this->tags['amp-list-load-more button[load-more-clickable]'] = new Tag(
            [
                'tagName' => 'BUTTON',
                'specName' => 'amp-list-load-more button[load-more-clickable]',
                'mandatoryParent' => 'AMP-LIST-LOAD-MORE',
                'attrs' => [
                    ['name' => 'disabled', 'value' => ['']],
                    ['name' => 'load-more-clickable', 'mandatory' => true, 'value' => [''], 'dispatchKey' => 'NAME_DISPATCH'],
                    ['name' => 'role', 'implicit' => true],
                    ['name' => 'tabindex', 'implicit' => true],
                    ['name' => 'type'],
                    ['name' => 'value'],
                ],
                'attrLists' => ['name-attr'],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-list'],
            ]
        );
        $this->tags['AMP-LIST DIV [fetch-error]'] = new Tag(
            [
                'tagName' => 'DIV',
                'specName' => 'AMP-LIST DIV [fetch-error]',
                'attrs' => [['name' => 'align'], ['name' => 'fetch-error', 'mandatory' => true]],
                'mandatoryAncestor' => 'AMP-LIST',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['AMP-LIVE-LIST'] = new Tag(
            [
                'tagName' => 'AMP-LIVE-LIST',
                'attrs' => [
                    ['name' => 'data-max-items-per-page', 'mandatory' => true, 'valueRegex' => '\d+'],
                    ['name' => 'data-poll-interval', 'valueRegex' => '\d{5,}'],
                    ['name' => 'disabled', 'value' => ['']],
                    ['name' => 'sort', 'value' => ['ascending']],
                ],
                'attrLists' => ['mandatory-id-attr'],
                'ampLayout' => ['supportedLayouts' => ['CONTAINER', 'FIXED_HEIGHT']],
                'referencePoints' => [
                    ['tagSpecName' => 'AMP-LIVE-LIST [update]', 'mandatory' => true, 'unique' => true],
                    ['tagSpecName' => 'AMP-LIVE-LIST [items]', 'mandatory' => true, 'unique' => true],
                    ['tagSpecName' => 'AMP-LIVE-LIST [pagination]', 'unique' => true],
                ],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-live-list'],
            ]
        );
        $this->tags['AMP-LIVE-LIST [items]'] = new Tag(
            [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-LIVE-LIST [items]',
                'attrs' => [['name' => 'items', 'mandatory' => true]],
                'specUrl' => 'https://amp.dev/documentation/components/amp-live-list/#items',
                'referencePoints' => [['tagSpecName' => 'AMP-LIVE-LIST [items] item']],
                'htmlFormat' => ['AMP'],
                'descriptiveName' => 'amp-live-list [items]',
            ]
        );
        $this->tags['AMP-LIVE-LIST [items] item'] = new Tag(
            [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-LIVE-LIST [items] item',
                'attrs' => [['name' => 'data-sort-time', 'mandatory' => true], ['name' => 'data-tombstone'], ['name' => 'data-update-time']],
                'attrLists' => ['mandatory-id-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-live-list/#items',
                'htmlFormat' => ['AMP'],
                'descriptiveName' => 'amp-live-list [items] item',
            ]
        );
        $this->tags['AMP-LIVE-LIST [pagination]'] = new Tag(
            [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-LIVE-LIST [pagination]',
                'attrs' => [['name' => 'pagination', 'mandatory' => true]],
                'specUrl' => 'https://amp.dev/documentation/components/amp-live-list/#pagination',
                'htmlFormat' => ['AMP'],
                'descriptiveName' => 'amp-live-list [pagination]',
            ]
        );
        $this->tags['AMP-LIVE-LIST [update]'] = new Tag(
            [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-LIVE-LIST [update]',
                'attrs' => [['name' => 'update', 'mandatory' => true]],
                'specUrl' => 'https://amp.dev/documentation/components/amp-live-list/#update',
                'htmlFormat' => ['AMP'],
                'descriptiveName' => 'amp-live-list [update]',
            ]
        );
        $this->tags['AMP-MATHML'] = new Tag(
            [
                'tagName' => 'AMP-MATHML',
                'attrs' => [['name' => 'data-formula', 'mandatory' => true], ['name' => 'inline']],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['CONTAINER']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-mathml'],
            ]
        );
        $this->tags['AMP-MEGA-MENU'] = new Tag(
            [
                'tagName' => 'AMP-MEGA-MENU',
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-mega-menu/',
                'ampLayout' => ['supportedLayouts' => ['FIXED_HEIGHT']],
                'childTags' => ['mandatoryNumChildTags' => 1, 'childTagNameOneof' => ['NAV', 'AMP-LIST']],
                'referencePoints' => [['tagSpecName' => 'AMP-MEGA-MENU > AMP-LIST'], ['tagSpecName' => 'AMP-MEGA-MENU > NAV']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-mega-menu'],
                'descendantTagList' => 'amp-mega-menu-allowed-descendants',
            ]
        );
        $this->tags['AMP-MEGA-MENU > AMP-LIST'] = new Tag(
            [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-MEGA-MENU > AMP-LIST',
                'attrs' => [
                    ['name' => 'src', 'mandatoryAnyof' => '[\'src\',\'[src]\']'],
                    ['name' => '[src]', 'mandatoryAnyof' => '[\'src\',\'[src]\']'],
                ],
                'childTags' => ['mandatoryNumChildTags' => 1, 'childTagNameOneof' => ['TEMPLATE']],
                'referencePoints' => [['tagSpecName' => 'AMP-MEGA-MENU > AMP-LIST > TEMPLATE']],
                'htmlFormat' => ['AMP'],
                'descriptiveName' => 'amp-mega-menu > amp-list',
            ]
        );
        $this->tags['AMP-MEGA-MENU > AMP-LIST > TEMPLATE'] = new Tag(
            [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-MEGA-MENU > AMP-LIST > TEMPLATE',
                'mandatoryParent' => 'AMP-LIST',
                'childTags' => ['mandatoryNumChildTags' => 1, 'childTagNameOneof' => ['NAV']],
                'referencePoints' => [['tagSpecName' => 'AMP-MEGA-MENU > NAV']],
                'htmlFormat' => ['AMP'],
                'descriptiveName' => 'amp-mega-menu > amp-list > template',
            ]
        );
        $this->tags['AMP-MEGA-MENU > NAV'] = new Tag(
            [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-MEGA-MENU > NAV',
                'childTags' => ['mandatoryNumChildTags' => 1, 'childTagNameOneof' => ['OL', 'UL']],
                'referencePoints' => [['tagSpecName' => 'AMP-MEGA-MENU NAV > UL/OL']],
                'htmlFormat' => ['AMP'],
                'siblingsDisallowed' => true,
                'descriptiveName' => 'amp-mega-menu > nav',
            ]
        );
        $this->tags['AMP-MEGA-MENU item-content'] = new Tag(
            [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-MEGA-MENU item-content',
                'attrs' => [['name' => 'role', 'mandatory' => true, 'value' => ['dialog']]],
                'htmlFormat' => ['AMP'],
                'descriptiveName' => 'amp-mega-menu item-content',
            ]
        );
        $this->tags['AMP-MEGA-MENU item-heading'] = new Tag(
            [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-MEGA-MENU item-heading',
                'attrs' => [['name' => 'role', 'value' => ['button']]],
                'htmlFormat' => ['AMP'],
                'descriptiveName' => 'amp-mega-menu item-heading',
            ]
        );
        $this->tags['AMP-MEGA-MENU NAV > UL/OL'] = new Tag(
            [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-MEGA-MENU NAV > UL/OL',
                'mandatoryParent' => 'NAV',
                'childTags' => ['childTagNameOneof' => ['LI'], 'mandatoryMinNumChildTags' => 1],
                'referencePoints' => [['tagSpecName' => 'AMP-MEGA-MENU NAV > UL/OL > LI']],
                'htmlFormat' => ['AMP'],
                'descriptiveName' => 'amp-mega-menu nav > ul/ol',
            ]
        );
        $this->tags['AMP-MEGA-MENU NAV > UL/OL > LI'] = new Tag(
            [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-MEGA-MENU NAV > UL/OL > LI',
                'childTags' => [
                    'childTagNameOneof' => ['A', 'BUTTON', 'DIV', 'H1', 'H2', 'H3', 'H4', 'H5', 'H6', 'SPAN'],
                    'mandatoryMinNumChildTags' => 1,
                ],
                'referencePoints' => [
                    ['tagSpecName' => 'AMP-MEGA-MENU item-content', 'unique' => true],
                    ['tagSpecName' => 'AMP-MEGA-MENU item-heading', 'mandatory' => true, 'unique' => true],
                ],
                'htmlFormat' => ['AMP'],
                'descriptiveName' => 'amp-mega-menu nav > ul/ol > li',
            ]
        );
        $this->tags['amp-megaphone [data-episode]'] = new Tag(
            [
                'tagName' => 'AMP-MEGAPHONE',
                'specName' => 'amp-megaphone [data-episode]',
                'attrs' => [
                    ['name' => 'data-episode', 'mandatory' => true, 'dispatchKey' => 'NAME_DISPATCH', 'valueRegex' => '[A-Za-z0-9]+'],
                    ['name' => 'data-start', 'valueRegex' => '\d+(\.\d+)?'],
                    ['name' => 'data-tile', 'value' => ['']],
                ],
                'attrLists' => ['amp-megaphone-common', 'extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FIXED', 'FIXED_HEIGHT']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-megaphone'],
            ]
        );
        $this->tags['amp-megaphone [data-playlist]'] = new Tag(
            [
                'tagName' => 'AMP-MEGAPHONE',
                'specName' => 'amp-megaphone [data-playlist]',
                'attrs' => [
                    ['name' => 'data-playlist', 'mandatory' => true, 'dispatchKey' => 'NAME_DISPATCH', 'valueRegex' => '[A-Za-z0-9]+'],
                    ['name' => 'data-episodes', 'valueRegex' => '[0-9]+'],
                ],
                'attrLists' => ['amp-megaphone-common', 'extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FIXED', 'FIXED_HEIGHT']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-megaphone'],
            ]
        );
        $this->tags['AMP-MINUTE-MEDIA-PLAYER'] = new Tag(
            [
                'tagName' => 'AMP-MINUTE-MEDIA-PLAYER',
                'attrs' => [
                    ['name' => 'autoplay'],
                    ['name' => 'data-content-id'],
                    ['name' => 'data-content-type', 'mandatory' => true, 'value' => ['curated', 'semantic', 'specific']],
                    ['name' => 'data-minimum-date-factor'],
                    ['name' => 'data-scanned-element'],
                    ['name' => 'data-scanned-element-type', 'value' => ['className', 'id', 'tag']],
                    ['name' => 'data-scoped-keywords'],
                    ['name' => 'data-tags'],
                    ['name' => 'dock', 'requiresExtension' => ['amp-video-docking']],
                ],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-minute-media-player/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-minute-media-player'],
            ]
        );
        $this->tags['AMP-MOWPLAYER'] = new Tag(
            [
                'tagName' => 'AMP-MOWPLAYER',
                'attrs' => [['name' => 'autoplay'], ['name' => 'data-mediaid', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-mowplayer'],
            ]
        );
        $this->tags['AMP-NESTED-MENU'] = new Tag(
            [
                'tagName' => 'AMP-NESTED-MENU',
                'attrs' => [['name' => 'side', 'value' => ['left', 'right']]],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-nested-menu/',
                'ampLayout' => ['supportedLayouts' => ['FILL']],
                'mandatoryAncestor' => 'AMP-SIDEBAR',
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-sidebar'],
                'descendantTagList' => 'amp-nested-menu-allowed-descendants',
            ]
        );
        $this->tags['AMP-NEXT-PAGE > SCRIPT[type=application/json]'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'AMP-NEXT-PAGE > SCRIPT[type=application/json]',
                'mandatoryParent' => 'AMP-NEXT-PAGE',
                'attrs' => [
                    [
                        'name' => 'type',
                        'mandatory' => true,
                        'dispatchKey' => 'NAME_VALUE_PARENT_DISPATCH',
                        'valueCasei' => ['application/json'],
                    ],
                ],
                'specUrl' => 'https://amp.dev/documentation/components/amp-next-page/',
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-next-page'],
            ]
        );
        $this->tags['AMP-NEXT-PAGE > [footer]'] = new Tag(
            [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-NEXT-PAGE > [footer]',
                'mandatoryParent' => 'AMP-NEXT-PAGE',
                'attrs' => [['name' => 'footer', 'mandatory' => true]],
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['AMP-NEXT-PAGE > [recommendation-box]'] = new Tag(
            [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-NEXT-PAGE > [recommendation-box]',
                'mandatoryParent' => 'AMP-NEXT-PAGE',
                'attrs' => [['name' => 'recommendation-box', 'mandatory' => true]],
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['AMP-NEXT-PAGE > [separator]'] = new Tag(
            [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-NEXT-PAGE > [separator]',
                'mandatoryParent' => 'AMP-NEXT-PAGE',
                'attrs' => [['name' => 'separator', 'mandatory' => true]],
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['amp-next-page with inline config'] = new Tag(
            [
                'tagName' => 'AMP-NEXT-PAGE',
                'specName' => 'amp-next-page with inline config',
                'unique' => true,
                'attrs' => [['name' => 'deep-parsing'], ['name' => 'max-pages']],
                'specUrl' => 'https://amp.dev/documentation/components/amp-next-page/',
                'referencePoints' => [
                    ['tagSpecName' => 'AMP-NEXT-PAGE > [separator]', 'unique' => true],
                    ['tagSpecName' => 'AMP-NEXT-PAGE > [recommendation-box]', 'unique' => true],
                    ['tagSpecName' => 'AMP-NEXT-PAGE > [footer]', 'unique' => true],
                    ['tagSpecName' => 'AMP-NEXT-PAGE > SCRIPT[type=application/json]', 'mandatory' => true, 'unique' => true],
                ],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-next-page'],
            ]
        );
        $this->tags['amp-next-page with src attribute'] = new Tag(
            [
                'tagName' => 'AMP-NEXT-PAGE',
                'specName' => 'amp-next-page with src attribute',
                'unique' => true,
                'attrs' => [
                    ['name' => 'deep-parsing'],
                    ['name' => 'max-pages'],
                    [
                        'name' => 'src',
                        'mandatory' => true,
                        'disallowedValueRegex' => '__amp_source_origin',
                        'valueUrl' => ['protocol' => ['https'], 'allowRelative' => false],
                    ],
                    ['name' => 'xssi-prefix'],
                ],
                'specUrl' => 'https://amp.dev/documentation/components/amp-next-page/',
                'referencePoints' => [
                    ['tagSpecName' => 'AMP-NEXT-PAGE > [separator]', 'unique' => true],
                    ['tagSpecName' => 'AMP-NEXT-PAGE > [recommendation-box]', 'unique' => true],
                    ['tagSpecName' => 'AMP-NEXT-PAGE > [footer]', 'unique' => true],
                    ['tagSpecName' => 'AMP-NEXT-PAGE > SCRIPT[type=application/json]', 'unique' => true],
                ],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-next-page'],
            ]
        );
        $this->tags['amp-next-page [type=adsense]'] = new Tag(
            [
                'tagName' => 'AMP-NEXT-PAGE',
                'specName' => 'amp-next-page [type=adsense]',
                'unique' => true,
                'attrs' => [
                    ['name' => 'data-client', 'mandatory' => true],
                    ['name' => 'data-slot', 'mandatory' => true],
                    ['name' => 'deep-parsing'],
                    ['name' => 'max-pages'],
                    ['name' => 'type', 'mandatory' => true, 'value' => ['adsense']],
                ],
                'specUrl' => 'https://amp.dev/documentation/components/amp-next-page/',
                'referencePoints' => [
                    ['tagSpecName' => 'AMP-NEXT-PAGE > [separator]', 'unique' => true],
                    ['tagSpecName' => 'AMP-NEXT-PAGE > [recommendation-box]', 'unique' => true],
                    ['tagSpecName' => 'AMP-NEXT-PAGE > [footer]', 'unique' => true],
                    ['tagSpecName' => 'AMP-NEXT-PAGE > SCRIPT[type=application/json]', 'unique' => true],
                ],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-next-page'],
            ]
        );
        $this->tags['AMP-NEXXTV-PLAYER'] = new Tag(
            [
                'tagName' => 'AMP-NEXXTV-PLAYER',
                'attrs' => [
                    ['name' => 'data-client', 'mandatory' => true],
                    ['name' => 'data-mediaid', 'mandatory' => true, 'valueRegex' => '[^=/?:]+'],
                    ['name' => 'data-mode', 'value' => ['api', 'static']],
                    ['name' => 'data-origin', 'valueUrl' => ['protocol' => ['https', 'http'], 'allowEmpty' => true]],
                    ['name' => 'data-streamtype', 'value' => ['album', 'audio', 'live', 'playlist', 'playlist-marked', 'video']],
                ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-nexxtv-player'],
            ]
        );
        $this->tags['AMP-O2-PLAYER'] = new Tag(
            [
                'tagName' => 'AMP-O2-PLAYER',
                'attrs' => [['name' => 'data-bcid', 'mandatory' => true], ['name' => 'data-pid', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-o2-player'],
            ]
        );
        $this->tags['AMP-ONETAP-GOOGLE'] = new Tag(
            [
                'tagName' => 'AMP-ONETAP-GOOGLE',
                'unique' => true,
                'attrs' => [['name' => 'data-src', 'mandatory' => true, 'valueUrl' => ['protocol' => ['https']]]],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-onetap-google'],
            ]
        );
        $this->tags['AMP-OOYALA-PLAYER'] = new Tag(
            [
                'tagName' => 'AMP-OOYALA-PLAYER',
                'attrs' => [
                    ['name' => 'data-embedcode', 'mandatory' => true],
                    ['name' => 'data-pcode', 'mandatory' => true],
                    ['name' => 'data-playerid', 'mandatory' => true],
                ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FLEX_ITEM', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-ooyala-player'],
            ]
        );
        $this->tags['AMP-ORIENTATION-OBSERVER'] = new Tag(
            [
                'tagName' => 'AMP-ORIENTATION-OBSERVER',
                'attrs' => [
                    ['name' => 'alpha-range', 'valueRegex' => '(\d+)\s{1}(\d+)'],
                    ['name' => 'beta-range', 'valueRegex' => '(\d+)\s{1}(\d+)'],
                    ['name' => 'gamma-range', 'valueRegex' => '(\d+)\s{1}(\d+)'],
                    ['name' => 'smoothing', 'valueRegex' => '[0-9]+|'],
                ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-orientation-observer'],
            ]
        );
        $this->tags['AMP-PAN-ZOOM'] = new Tag(
            [
                'tagName' => 'AMP-PAN-ZOOM',
                'attrs' => [
                    ['name' => 'disable-double-tap', 'value' => ['']],
                    ['name' => 'initial-scale', 'valueRegex' => '[0-9]+(\.[0-9]+)?'],
                    ['name' => 'initial-x', 'valueRegex' => '[0-9]+'],
                    ['name' => 'initial-y', 'valueRegex' => '[0-9]+'],
                    ['name' => 'max-scale', 'valueRegex' => '[0-9]+(\.[0-9]+)?'],
                    ['name' => 'reset-on-resize', 'value' => ['']],
                ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-pan-zoom'],
            ]
        );
        $this->tags['AMP-PINTEREST'] = new Tag(
            [
                'tagName' => 'AMP-PINTEREST',
                'attrs' => [['name' => 'alt'], ['name' => 'data-do', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-pinterest/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-pinterest'],
            ]
        );
        $this->tags['AMP-PIXEL'] = new Tag(
            [
                'tagName' => 'AMP-PIXEL',
                'attrs' => [
                    ['name' => 'allow-ssr-img'],
                    ['name' => 'referrerpolicy', 'value' => ['no-referrer']],
                    [
                        'name' => 'src',
                        'mandatory' => true,
                        'disallowedValueRegex' => '__amp_source_origin',
                        'valueUrl' => ['protocol' => ['https'], 'allowRelative' => true, 'allowEmpty' => true],
                    ],
                ],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-pixel/',
                'ampLayout' => ['supportedLayouts' => ['FIXED', 'NODISPLAY'], 'definesDefaultWidth' => true, 'definesDefaultHeight' => true],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['AMP-PLAYBUZZ'] = new Tag(
            [
                'tagName' => 'AMP-PLAYBUZZ',
                'attrs' => [
                    ['name' => 'data-comments', 'valueCasei' => ['false', 'true']],
                    ['name' => 'data-item', 'mandatoryOneof' => '[\'data-item\', \'src\']'],
                    ['name' => 'data-item-info', 'valueCasei' => ['false', 'true']],
                    ['name' => 'data-share-buttons', 'valueCasei' => ['false', 'true']],
                    ['name' => 'src', 'mandatoryOneof' => '[\'data-item\', \'src\']'],
                ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['RESPONSIVE', 'FIXED_HEIGHT']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-playbuzz'],
            ]
        );
        $this->tags['AMP-POSITION-OBSERVER'] = new Tag(
            [
                'tagName' => 'AMP-POSITION-OBSERVER',
                'attrs' => [
                    ['name' => 'intersection-ratios', 'valueRegex' => '^([0]*?\.\d*$|1$|0$)|([0]*?\.\d*|1|0)\s{1}([0]*?\.\d*$|1$|0$)'],
                    ['name' => 'once', 'value' => ['']],
                    ['name' => 'target'],
                    [
                        'name' => 'viewport-margins',
                        'valueRegex' => '^(\d+$|\d+px$|\d+vh$)|((\d+|\d+px|\d+vh)\s{1}(\d+$|\d+px$|\d+vh$))',
                    ],
                ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'requiresExtension' => ['amp-position-observer'],
            ]
        );
        $this->tags['AMP-POWR-PLAYER'] = new Tag(
            [
                'tagName' => 'AMP-POWR-PLAYER',
                'attrs' => [
                    ['name' => 'autoplay'],
                    ['name' => 'data-account', 'mandatory' => true, 'valueRegex' => '[0-9a-zA-Z-]+'],
                    ['name' => 'data-player', 'mandatory' => true, 'valueRegex' => '[0-9a-zA-Z-]+'],
                    ['name' => '[data-referrer]'],
                    ['name' => 'data-terms', 'mandatoryOneof' => '[\'data-video\', \'data-terms\']'],
                    ['name' => 'data-video', 'mandatoryOneof' => '[\'data-video\', \'data-terms\']', 'valueRegex' => '[0-9a-zA-Z-]+'],
                ],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-powr-player/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-powr-player'],
            ]
        );
        $this->tags['AMP-REACH-PLAYER'] = new Tag(
            [
                'tagName' => 'AMP-REACH-PLAYER',
                'attrs' => [['name' => 'data-embed-id', 'mandatory' => true, 'valueRegex' => '[0-9a-z-]+']],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-reach-player'],
            ]
        );
        $this->tags['AMP-RECAPTCHA-INPUT'] = new Tag(
            [
                'tagName' => 'AMP-RECAPTCHA-INPUT',
                'attrs' => [['name' => 'data-sitekey', 'mandatory' => true], ['name' => 'data-action', 'mandatory' => true]],
                'attrLists' => ['mandatory-name-attr'],
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'mandatoryAncestor' => 'FORM',
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-form', 'amp-recaptcha-input'],
            ]
        );
        $this->tags['AMP-REDBULL-PLAYER'] = new Tag(
            [
                'tagName' => 'AMP-REDBULL-PLAYER',
                'attrs' => [['name' => 'data-param-videoid', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FIXED', 'FIXED_HEIGHT', 'RESPONSIVE', 'FILL', 'FLEX_ITEM', 'FLUID', 'INTRINSIC']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-redbull-player'],
            ]
        );
        $this->tags['AMP-REDDIT'] = new Tag(
            [
                'tagName' => 'AMP-REDDIT',
                'attrs' => [
                    ['name' => 'data-embedlive', 'valueCasei' => ['false', 'true']],
                    ['name' => 'data-embedparent', 'valueCasei' => ['false', 'true']],
                    ['name' => 'data-embedtype', 'mandatory' => true, 'valueCasei' => ['comment', 'post']],
                    ['name' => 'data-src', 'mandatory' => true],
                ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-reddit'],
            ]
        );
        $this->tags['AMP-RIDDLE-QUIZ'] = new Tag(
            [
                'tagName' => 'AMP-RIDDLE-QUIZ',
                'attrs' => [['name' => 'data-riddle-id', 'mandatory' => true, 'valueRegex' => '[0-9]+']],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-riddle-quiz/',
                'ampLayout' => ['supportedLayouts' => ['RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-riddle-quiz'],
            ]
        );
        $this->tags['AMP-SCRIPT'] = new Tag(
            [
                'tagName' => 'AMP-SCRIPT',
                'attrs' => [
                    ['name' => 'data-ampdevmode', 'value' => ['false'], 'disallowedValueRegex' => 'false'],
                    ['name' => 'max-age', 'valueRegex' => '[0-9]+', 'trigger' => ['alsoRequiresAttr' => ['script']]],
                    ['name' => 'nodom', 'value' => ['']],
                    ['name' => 'sandbox'],
                    ['name' => 'script', 'mandatoryOneof' => '[\'script\', \'src\']', 'valueOneofSet' => 'AMP_SCRIPT_IDS'],
                    [
                        'name' => 'src',
                        'disallowedValueRegex' => '__amp_source_origin',
                        'mandatoryOneof' => '[\'script\', \'src\']',
                        'valueUrl' => ['protocol' => ['https'], 'allowRelative' => false],
                    ],
                ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => [
                    'supportedLayouts' => [
                        'CONTAINER',
                        'FILL',
                        'FIXED',
                        'FIXED_HEIGHT',
                        'FLEX_ITEM',
                        'INTRINSIC',
                        'NODISPLAY',
                        'RESPONSIVE',
                    ],
                ],
                'disallowedAncestor' => ['AMP-SCRIPT'],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-script'],
            ]
        );
        $this->tags['amp-script extension local script'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'amp-script extension local script',
                'attrs' => [
                    [
                        'name' => 'id',
                        'mandatory' => true,
                        'disallowedValueRegex' => '(^|\s)(__amp_\S*|__count__|__defineGetter__|__defineSetter__|__lookupGetter__|__lookupSetter__|__noSuchMethod__|__parent__|__proto__|__AMP_\S*|\$p|\$proxy|acceptCharset|addEventListener|appendChild|assignedSlot|attachShadow|AMP|baseURI|checkValidity|childElementCount|childNodes|classList|className|clientHeight|clientLeft|clientTop|clientWidth|compareDocumentPosition|computedName|computedRole|contentEditable|createShadowRoot|enqueAction|firstChild|firstElementChild|getAnimations|getAttribute|getAttributeNS|getAttributeNode|getAttributeNodeNS|getBoundingClientRect|getClientRects|getDestinationInsertionPoints|getElementsByClassName|getElementsByTagName|getElementsByTagNameNS|getRootNode|hasAttribute|hasAttributeNS|hasAttributes|hasChildNodes|hasPointerCapture|i-amphtml-\S*|innerHTML|innerText|inputMode|insertAdjacentElement|insertAdjacentHTML|insertAdjacentText|isContentEditable|isDefaultNamespace|isEqualNode|isSameNode|lastChild|lastElementChild|lookupNamespaceURI|namespaceURI|nextElementSibling|nextSibling|nodeName|nodeType|nodeValue|offsetHeight|offsetLeft|offsetParent|offsetTop|offsetWidth|outerHTML|outerText|ownerDocument|parentElement|parentNode|previousElementSibling|previousSibling|querySelector|querySelectorAll|releasePointerCapture|removeAttribute|removeAttributeNS|removeAttributeNode|removeChild|removeEventListener|replaceChild|reportValidity|requestPointerLock|scrollHeight|scrollIntoView|scrollIntoViewIfNeeded|scrollLeft|scrollWidth|setAttribute|setAttributeNS|setAttributeNode|setAttributeNodeNS|setPointerCapture|shadowRoot|styleMap|tabIndex|tagName|textContent|toString|valueOf|(webkit|ms|moz|o)dropzone|(webkit|moz|ms|o)MatchesSelector|(webkit|moz|ms|o)RequestFullScreen|(webkit|moz|ms|o)RequestFullscreen)(\s|$)',
                        'addValueToSet' => 'AMP_SCRIPT_IDS',
                    ],
                    ['name' => 'target', 'mandatory' => true, 'value' => ['amp-script'], 'dispatchKey' => 'NAME_VALUE_DISPATCH'],
                    ['name' => 'type', 'mandatory' => true, 'valueCasei' => ['text/plain']],
                ],
                'attrLists' => ['mandatory-id-attr', 'nonce-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-script/',
                'cdata' => [
                    'maxBytes' => 10000,
                    'maxBytesSpecUrl' => 'https://amp.dev/documentation/components/amp-script/#faq',
                    'disallowedCdataRegex' => [['regex' => '<!--', 'errorMessage' => 'html comments']],
                ],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-script'],
            ]
        );
        $this->tags['AMP-SELECTOR'] = new Tag(
            [
                'tagName' => 'AMP-SELECTOR',
                'attrs' => [
                    ['name' => 'disabled', 'value' => ['']],
                    ['name' => 'form'],
                    ['name' => 'keyboard-select-mode', 'valueCasei' => ['focus', 'none', 'select']],
                    ['name' => 'multiple', 'value' => ['']],
                    ['name' => '[disabled]'],
                    ['name' => '[selected]'],
                ],
                'attrLists' => ['extended-amp-global', 'name-attr'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'NODISPLAY', 'RESPONSIVE', 'CONTAINER']],
                'disallowedAncestor' => ['AMP-SELECTOR'],
                'referencePoints' => [['tagSpecName' => 'AMP-SELECTOR option'], ['tagSpecName' => 'AMP-SELECTOR child']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                'requiresExtension' => ['amp-selector'],
            ]
        );
        $this->tags['AMP-SELECTOR child'] = new Tag(
            [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-SELECTOR child',
                'referencePoints' => [['tagSpecName' => 'AMP-SELECTOR option'], ['tagSpecName' => 'AMP-SELECTOR child']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['AMP-SELECTOR option'] = new Tag(
            [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-SELECTOR option',
                'attrs' => [
                    ['name' => 'disabled', 'value' => ['']],
                    ['name' => 'option', 'mandatory' => true],
                    ['name' => 'selected', 'value' => ['']],
                ],
                'specUrl' => 'https://amp.dev/documentation/components/amp-selector/',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['amp-sidebar'] = new Tag(
            [
                'tagName' => 'AMP-SIDEBAR',
                'specName' => 'amp-sidebar',
                'attrs' => [['name' => 'side', 'value' => ['left', 'right']]],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-sidebar/',
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'disallowedAncestor' => ['AMP-STORY'],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-sidebar'],
                'markDescendants' => ['marker' => ['AUTOSCROLL']],
            ]
        );
        $this->tags['amp-sidebar (AMP4EMAIL)'] = new Tag(
            [
                'tagName' => 'AMP-SIDEBAR',
                'specName' => 'amp-sidebar (AMP4EMAIL)',
                'attrs' => [['name' => 'side', 'value' => ['left', 'right']]],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-sidebar/',
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'htmlFormat' => ['AMP4EMAIL'],
                'requiresExtension' => ['amp-sidebar'],
            ]
        );
        $this->tags['amp-sidebar > nav'] = new Tag(
            [
                'tagName' => 'NAV',
                'specName' => 'amp-sidebar > nav',
                'mandatoryParent' => 'AMP-SIDEBAR',
                'attrs' => [
                    ['name' => 'toolbar', 'mandatory' => true, 'dispatchKey' => 'NAME_DISPATCH'],
                    ['name' => 'toolbar-target', 'mandatory' => true],
                ],
                'childTags' => ['mandatoryNumChildTags' => 1, 'childTagNameOneof' => ['OL', 'UL']],
                'htmlFormat' => ['AMP', 'AMP4EMAIL'],
            ]
        );
        $this->tags['AMP-SKIMLINKS'] = new Tag(
            [
                'tagName' => 'AMP-SKIMLINKS',
                'attrs' => [
                    ['name' => 'custom-redirect-domain'],
                    ['name' => 'custom-tracking-id', 'valueRegexCasei' => '^.{0,50}$'],
                    ['name' => 'excluded-domains'],
                    ['name' => 'link-selector'],
                    ['name' => 'publisher-code', 'mandatory' => true, 'valueRegexCasei' => '^[0-9]+X[0-9]+$'],
                    ['name' => 'tracking', 'value' => ['false', 'true']],
                ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-skimlinks'],
            ]
        );
        $this->tags['AMP-SMARTLINKS'] = new Tag(
            [
                'tagName' => 'AMP-SMARTLINKS',
                'attrs' => [
                    ['name' => 'exclusive-links', 'value' => ['']],
                    ['name' => 'link-attribute'],
                    ['name' => 'link-selector'],
                    ['name' => 'linkmate', 'value' => ['']],
                    ['name' => 'nrtv-account-name', 'mandatory' => true],
                ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-smartlinks'],
            ]
        );
        $this->tags['AMP-SOCIAL-SHARE'] = new Tag(
            [
                'tagName' => 'AMP-SOCIAL-SHARE',
                'attrs' => [
                    [
                        'name' => 'data-share-endpoint',
                        'disallowedValueRegex' => '__amp_source_origin',
                        'valueUrl' => [
                            'protocol' => [
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
                            'allowRelative' => false,
                        ],
                    ],
                    ['name' => 'type', 'mandatory' => true],
                ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['CONTAINER', 'FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'requiresExtension' => ['amp-social-share'],
            ]
        );
        $this->tags['AMP-SOUNDCLOUD'] = new Tag(
            [
                'tagName' => 'AMP-SOUNDCLOUD',
                'attrs' => [
                    ['name' => 'data-color', 'valueRegexCasei' => '([0-9a-f]{3}){1,2}'],
                    [
                        'name' => 'data-playlistid',
                        'mandatoryOneof' => '[\'data-trackid\', \'data-playlistid\']',
                        'valueRegex' => '[0-9]+',
                    ],
                    ['name' => 'data-secret-token', 'valueRegex' => '[A-Za-z0-9_-]+'],
                    ['name' => 'data-trackid', 'mandatoryOneof' => '[\'data-trackid\', \'data-playlistid\']', 'valueRegex' => '[0-9]+'],
                    ['name' => 'data-visual', 'valueCasei' => ['false', 'true']],
                ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-soundcloud'],
            ]
        );
        $this->tags['AMP-SPRINGBOARD-PLAYER'] = new Tag(
            [
                'tagName' => 'AMP-SPRINGBOARD-PLAYER',
                'attrs' => [
                    ['name' => 'data-content-id', 'mandatory' => true],
                    ['name' => 'data-domain', 'mandatory' => true],
                    ['name' => 'data-items', 'mandatory' => true],
                    ['name' => 'data-mode', 'mandatory' => true, 'valueCasei' => ['playlist', 'video']],
                    ['name' => 'data-player-id', 'mandatory' => true, 'valueRegexCasei' => '[a-z0-9]+'],
                    ['name' => 'data-site-id', 'mandatory' => true, 'valueRegex' => '[0-9]+'],
                ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FLEX_ITEM', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-springboard-player'],
            ]
        );
        $this->tags['amp-state'] = new Tag(
            [
                'tagName' => 'AMP-STATE',
                'specName' => 'amp-state',
                'attrs' => [
                    ['name' => 'credentials'],
                    ['name' => 'overridable'],
                    [
                        'name' => 'src',
                        'disallowedValueRegex' => '__amp_source_origin',
                        'valueUrl' => ['protocol' => ['https'], 'allowRelative' => true],
                    ],
                    ['name' => '[src]'],
                ],
                'attrLists' => ['mandatory-id-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-bind/',
                'childTags' => ['firstChildTagNameOneof' => ['SCRIPT']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-bind'],
            ]
        );
        $this->tags['amp-state (AMP4EMAIL)'] = new Tag(
            [
                'tagName' => 'AMP-STATE',
                'specName' => 'amp-state (AMP4EMAIL)',
                'attrLists' => ['mandatory-id-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-bind/',
                'disallowedAncestor' => ['AMP-LIST', 'AMP-STATE', 'TEMPLATE'],
                'childTags' => ['firstChildTagNameOneof' => ['SCRIPT']],
                'htmlFormat' => ['AMP4ADS', 'AMP4EMAIL'],
                'requiresExtension' => ['amp-bind'],
            ]
        );
        $this->tags['AMP-STICKY-AD'] = new Tag(
            [
                'tagName' => 'AMP-STICKY-AD',
                'unique' => true,
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'disallowedAncestor' => ['AMP-APP-BANNER'],
                'childTags' => ['mandatoryNumChildTags' => 1, 'firstChildTagNameOneof' => ['AMP-AD']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-sticky-ad'],
            ]
        );
        $this->tags['AMP-STORY'] = new Tag(
            [
                'tagName' => 'AMP-STORY',
                'mandatoryParent' => 'BODY',
                'attrs' => [
                    ['name' => 'background-audio', 'valueUrl' => ['protocol' => ['http', 'https']]],
                    ['name' => 'entity'],
                    ['name' => 'entity-logo-src', 'valueUrl' => ['protocol' => ['http', 'https']]],
                    ['name' => 'entity-url', 'valueUrl' => ['protocol' => ['http', 'https']]],
                    ['name' => 'poster-landscape-src', 'valueUrl' => ['protocol' => ['http', 'https']]],
                    ['name' => 'poster-portrait-src', 'mandatory' => true, 'valueUrl' => ['protocol' => ['http', 'https']]],
                    ['name' => 'poster-square-src', 'valueUrl' => ['protocol' => ['http', 'https']]],
                    ['name' => 'publisher', 'mandatory' => true],
                    ['name' => 'publisher-logo-src', 'mandatory' => true, 'valueUrl' => ['protocol' => ['http', 'https']]],
                    ['name' => 'standalone', 'mandatory' => true, 'value' => ['']],
                    ['name' => 'supports-landscape', 'value' => ['']],
                    ['name' => 'title', 'mandatory' => true],
                    ['name' => 'live-story', 'value' => ['']],
                    ['name' => 'live-story-disabled', 'value' => ['']],
                ],
                'childTags' => [
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
                'htmlFormat' => ['AMP'],
                'requires' => ['amp-story-page'],
                'requiresExtension' => ['amp-story'],
                'siblingsDisallowed' => true,
            ]
        );
        $this->tags['AMP-STORY-360'] = new Tag(
            [
                'tagName' => 'AMP-STORY-360',
                'attrs' => [
                    ['name' => 'controls', 'value' => ['gyroscope']],
                    ['name' => 'duration', 'valueRegex' => '([0-9\.]+)\s*(s|ms)'],
                    ['name' => 'heading-end', 'valueRegex' => '-?\d+\.?\d*', 'trigger' => ['alsoRequiresAttr' => ['duration']]],
                    ['name' => 'heading-start', 'valueRegex' => '-?\d+\.?\d*'],
                    ['name' => 'pitch-end', 'valueRegex' => '-?\d+\.?\d*', 'trigger' => ['alsoRequiresAttr' => ['duration']]],
                    ['name' => 'pitch-start', 'valueRegex' => '-?\d+\.?\d*'],
                    ['name' => 'scene-heading', 'valueRegex' => '-?\d+\.?\d*'],
                    ['name' => 'scene-pitch', 'valueRegex' => '-?\d+\.?\d*'],
                    ['name' => 'scene-roll', 'valueRegex' => '-?\d+\.?\d*'],
                    ['name' => 'zoom-end', 'valueRegex' => '\d+\.?\d*', 'trigger' => ['alsoRequiresAttr' => ['duration']]],
                    ['name' => 'zoom-start', 'valueRegex' => '\d+\.?\d*'],
                ],
                'specUrl' => 'https://amp.dev/documentation/components/amp-story-360',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY']],
                'mandatoryAncestor' => 'AMP-STORY',
                'childTags' => ['mandatoryNumChildTags' => 1, 'childTagNameOneof' => ['AMP-IMG', 'AMP-VIDEO']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-story-360'],
            ]
        );
        $this->tags['AMP-STORY-ANIMATION'] = new Tag(
            [
                'tagName' => 'AMP-STORY-ANIMATION',
                'mandatoryParent' => 'AMP-STORY-PAGE',
                'attrs' => [['name' => 'animate-in-after'], ['name' => 'trigger', 'mandatory' => true, 'value' => ['visibility']]],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'childTags' => ['mandatoryNumChildTags' => 1, 'childTagNameOneof' => ['SCRIPT']],
                'htmlFormat' => ['AMP'],
                'requires' => ['amp-story-animation json script'],
                'requiresExtension' => ['amp-story'],
            ]
        );
        $this->tags['amp-story-animation json script'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'amp-story-animation json script',
                'mandatoryParent' => 'AMP-STORY-ANIMATION',
                'attrs' => [
                    [
                        'name' => 'type',
                        'mandatory' => true,
                        'dispatchKey' => 'NAME_VALUE_PARENT_DISPATCH',
                        'valueCasei' => ['application/json'],
                    ],
                ],
                'attrLists' => ['nonce-attr'],
                'cdata' => ['disallowedCdataRegex' => [['regex' => '<!--', 'errorMessage' => 'html comments']]],
                'htmlFormat' => ['AMP'],
                'satisfies' => ['amp-story-animation json script'],
            ]
        );
        $this->tags['AMP-STORY-AUTO-ADS'] = new Tag(
            [
                'tagName' => 'AMP-STORY-AUTO-ADS',
                'unique' => true,
                'mandatoryParent' => 'AMP-STORY',
                'specUrl' => 'https://amp.dev/documentation/components/amp-story-auto-ads/',
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-story-auto-ads'],
            ]
        );
        $this->tags['amp-story-auto-ads > template'] = new Tag(
            [
                'tagName' => 'TEMPLATE',
                'specName' => 'amp-story-auto-ads > template',
                'mandatoryParent' => 'AMP-STORY-AUTO-ADS',
                'attrs' => [['name' => 'type', 'mandatory' => true, 'value' => ['amp-mustache'], 'dispatchKey' => 'NAME_VALUE_PARENT_DISPATCH']],
                'referencePoints' => [['tagSpecName' => 'AMP-STORY-GRID-LAYER default'], ['tagSpecName' => 'AMP-STORY-GRID-LAYER animate-in']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-mustache'],
                'descendantTagList' => 'amp-story-grid-layer-allowed-descendants',
            ]
        );
        $this->tags['amp-story-auto-ads config script'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'amp-story-auto-ads config script',
                'mandatoryParent' => 'AMP-STORY-AUTO-ADS',
                'attrs' => [
                    [
                        'name' => 'type',
                        'mandatory' => true,
                        'dispatchKey' => 'NAME_VALUE_PARENT_DISPATCH',
                        'valueCasei' => ['application/json'],
                    ],
                ],
                'attrLists' => ['nonce-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-story-auto-ads/',
                'cdata' => ['disallowedCdataRegex' => [['regex' => '<!--', 'errorMessage' => 'html comments']]],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-story-auto-ads'],
            ]
        );
        $this->tags['AMP-STORY-BOOKEND'] = new Tag(
            [
                'tagName' => 'AMP-STORY-BOOKEND',
                'attrs' => [
                    ['name' => 'layout', 'mandatory' => true, 'value' => ['nodisplay']],
                    ['name' => 'src', 'valueUrl' => ['protocol' => ['http', 'https']]],
                ],
                'mandatoryAncestor' => 'AMP-STORY',
                'htmlFormat' => ['AMP'],
                'descendantTagList' => 'amp-story-bookend-allowed-descendants',
                'mandatoryLastChild' => true,
            ]
        );
        $this->tags['amp-story-bookend extension .json script'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'amp-story-bookend extension .json script',
                'unique' => true,
                'mandatoryParent' => 'AMP-STORY-BOOKEND',
                'attrs' => [
                    [
                        'name' => 'type',
                        'mandatory' => true,
                        'dispatchKey' => 'NAME_VALUE_PARENT_DISPATCH',
                        'valueCasei' => ['application/json'],
                    ],
                ],
                'attrLists' => ['nonce-attr'],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-story'],
                'siblingsDisallowed' => true,
                'mandatoryLastChild' => true,
            ]
        );
        $this->tags['AMP-STORY-CONSENT'] = new Tag(
            [
                'tagName' => 'AMP-STORY-CONSENT',
                'mandatoryParent' => 'AMP-CONSENT',
                'attrLists' => ['mandatory-id-attr'],
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'childTags' => ['mandatoryNumChildTags' => 1, 'childTagNameOneof' => ['SCRIPT']],
                'htmlFormat' => ['AMP'],
                'requires' => ['amp-story-consent extension .json script'],
                'requiresExtension' => ['amp-consent', 'amp-story'],
            ]
        );
        $this->tags['amp-story-consent extension .json script'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'amp-story-consent extension .json script',
                'unique' => true,
                'mandatoryParent' => 'AMP-STORY-CONSENT',
                'attrs' => [
                    [
                        'name' => 'type',
                        'mandatory' => true,
                        'dispatchKey' => 'NAME_VALUE_PARENT_DISPATCH',
                        'valueCasei' => ['application/json'],
                    ],
                ],
                'attrLists' => ['nonce-attr'],
                'cdata' => ['disallowedCdataRegex' => [['regex' => '<!--', 'errorMessage' => 'html comments']]],
                'htmlFormat' => ['AMP'],
                'satisfies' => ['amp-story-consent extension .json script'],
                'requiresExtension' => ['amp-consent', 'amp-story'],
            ]
        );
        $this->tags['AMP-STORY-CTA-LAYER'] = new Tag(
            [
                'tagName' => 'AMP-STORY-CTA-LAYER',
                'mandatoryAncestor' => 'AMP-STORY-PAGE',
                'referencePoints' => [['tagSpecName' => 'AMP-STORY-CTA-LAYER animate-in']],
                'htmlFormat' => ['AMP'],
                'descendantTagList' => 'amp-story-cta-layer-allowed-descendants',
                'mandatoryLastChild' => true,
            ]
        );
        $this->tags['AMP-STORY-CTA-LAYER animate-in'] = new Tag(
            [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-STORY-CTA-LAYER animate-in',
                'attrs' => [
                    [
                        'name' => 'animate-in',
                        'value' => [
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
                    ['name' => 'animate-in-after'],
                    ['name' => 'animate-in-delay'],
                    ['name' => 'animate-in-duration'],
                    ['name' => 'animate-in-timing-function'],
                    ['name' => 'scale-end', 'valueRegex' => '[0-9]+([.][0-9]+)?'],
                    ['name' => 'scale-start', 'valueRegex' => '[0-9]+([.][0-9]+)?'],
                    ['name' => 'translate-x', 'valueRegexCasei' => '[0-9]+px'],
                    ['name' => 'translate-y', 'valueRegexCasei' => '[0-9]+px'],
                ],
                'specUrl' => 'https://amp.dev/documentation/components/amp-story/',
                'referencePoints' => [['tagSpecName' => 'AMP-STORY-CTA-LAYER animate-in']],
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['AMP-STORY-GRID-LAYER'] = new Tag(
            [
                'tagName' => 'AMP-STORY-GRID-LAYER',
                'attrs' => [
                    ['name' => 'template', 'mandatory' => true, 'value' => ['fill', 'horizontal', 'thirds', 'vertical']],
                    ['name' => 'position', 'value' => ['landscape-half-left', 'landscape-half-right']],
                    ['name' => 'aspect-ratio', 'valueRegex' => '\d+:\d+'],
                ],
                'mandatoryAncestor' => 'AMP-STORY-PAGE',
                'referencePoints' => [['tagSpecName' => 'AMP-STORY-GRID-LAYER default'], ['tagSpecName' => 'AMP-STORY-GRID-LAYER animate-in']],
                'htmlFormat' => ['AMP'],
                'descendantTagList' => 'amp-story-grid-layer-allowed-descendants',
            ]
        );
        $this->tags['AMP-STORY-GRID-LAYER animate-in'] = new Tag(
            [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-STORY-GRID-LAYER animate-in',
                'attrs' => [
                    [
                        'name' => 'animate-in',
                        'value' => [
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
                    ['name' => 'target', 'value' => ['_blank']],
                    ['name' => 'data-tooltip-icon', 'valueUrl' => ['protocol' => ['http', 'https', 'data']]],
                    ['name' => 'animate-in-after'],
                    ['name' => 'animate-in-delay'],
                    ['name' => 'animate-in-duration'],
                    ['name' => 'animate-in-timing-function'],
                    ['name' => 'interactive', 'value' => ['']],
                    ['name' => 'scale-end', 'valueRegex' => '[0-9]+([.][0-9]+)?'],
                    ['name' => 'scale-start', 'valueRegex' => '[0-9]+([.][0-9]+)?'],
                    ['name' => 'translate-x', 'valueRegexCasei' => '[0-9]+px'],
                    ['name' => 'translate-y', 'valueRegexCasei' => '[0-9]+px'],
                ],
                'specUrl' => 'https://amp.dev/documentation/components/amp-story/',
                'referencePoints' => [['tagSpecName' => 'AMP-STORY-GRID-LAYER animate-in']],
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['AMP-STORY-GRID-LAYER default'] = new Tag(
            [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-STORY-GRID-LAYER default',
                'attrs' => [
                    [
                        'name' => 'align-content',
                        'value' => ['center', 'end', 'space-around', 'space-between', 'space-evenly', 'start', 'stretch'],
                    ],
                    ['name' => 'target', 'value' => ['_blank']],
                    ['name' => 'data-tooltip-icon', 'valueUrl' => ['protocol' => ['http', 'https', 'data']]],
                    ['name' => 'align-items', 'value' => ['center', 'end', 'start', 'stretch']],
                    ['name' => 'align-self', 'value' => ['center', 'end', 'start', 'stretch']],
                    [
                        'name' => 'animate-in',
                        'value' => [
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
                    ['name' => 'animate-in-after'],
                    ['name' => 'animate-in-delay'],
                    ['name' => 'animate-in-duration'],
                    ['name' => 'animate-in-timing-function'],
                    ['name' => 'grid-area'],
                    ['name' => 'interactive', 'value' => ['']],
                    ['name' => 'scale-end', 'valueRegex' => '[0-9]+([.][0-9]+)?'],
                    ['name' => 'scale-start', 'valueRegex' => '[0-9]+([.][0-9]+)?'],
                    ['name' => 'translate-x', 'valueRegexCasei' => '[0-9]+px'],
                    ['name' => 'translate-y', 'valueRegexCasei' => '[0-9]+px'],
                    [
                        'name' => 'justify-content',
                        'value' => ['center', 'end', 'space-around', 'space-between', 'space-evenly', 'start', 'stretch'],
                    ],
                    ['name' => 'justify-items', 'value' => ['center', 'end', 'start', 'stretch']],
                    ['name' => 'justify-self', 'value' => ['center', 'end', 'start', 'stretch']],
                ],
                'specUrl' => 'https://amp.dev/documentation/components/amp-story/',
                'referencePoints' => [['tagSpecName' => 'AMP-STORY-GRID-LAYER animate-in']],
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['AMP-STORY-INTERACTIVE-BINARY-POLL'] = new Tag(
            [
                'tagName' => 'AMP-STORY-INTERACTIVE-BINARY-POLL',
                'attrs' => [
                    ['name' => 'option-1-text', 'mandatory' => true],
                    ['name' => 'option-2-text', 'mandatory' => true],
                    ['name' => 'option-1-confetti'],
                    ['name' => 'option-2-confetti'],
                ],
                'attrLists' => ['interactive-shared-configs-attrs'],
                'mandatoryAncestor' => 'AMP-STORY-GRID-LAYER',
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-story-interactive'],
            ]
        );
        $this->tags['AMP-STORY-INTERACTIVE-POLL'] = new Tag(
            [
                'tagName' => 'AMP-STORY-INTERACTIVE-POLL',
                'attrLists' => [
                    'interactive-options-text-attrs',
                    'interactive-options-confetti-attrs',
                    'interactive-options-results-category-attrs',
                    'interactive-shared-configs-attrs',
                ],
                'mandatoryAncestor' => 'AMP-STORY-GRID-LAYER',
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-story-interactive'],
            ]
        );
        $this->tags['AMP-STORY-INTERACTIVE-QUIZ'] = new Tag(
            [
                'tagName' => 'AMP-STORY-INTERACTIVE-QUIZ',
                'attrs' => [
                    [
                        'name' => 'option-1-correct',
                        'mandatoryOneof' => '[\'option-1-correct\', \'option-2-correct\', \'option-3-correct\', \'option-4-correct\']',
                    ],
                    [
                        'name' => 'option-2-correct',
                        'mandatoryOneof' => '[\'option-1-correct\', \'option-2-correct\', \'option-3-correct\', \'option-4-correct\']',
                    ],
                    [
                        'name' => 'option-3-correct',
                        'mandatoryOneof' => '[\'option-1-correct\', \'option-2-correct\', \'option-3-correct\', \'option-4-correct\']',
                        'trigger' => ['alsoRequiresAttr' => ['option-3-text']],
                    ],
                    [
                        'name' => 'option-4-correct',
                        'mandatoryOneof' => '[\'option-1-correct\', \'option-2-correct\', \'option-3-correct\', \'option-4-correct\']',
                        'trigger' => ['alsoRequiresAttr' => ['option-4-text']],
                    ],
                ],
                'attrLists' => ['interactive-options-text-attrs', 'interactive-options-confetti-attrs', 'interactive-shared-configs-attrs'],
                'mandatoryAncestor' => 'AMP-STORY-GRID-LAYER',
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-story-interactive'],
            ]
        );
        $this->tags['AMP-STORY-INTERACTIVE-RESULTS'] = new Tag(
            [
                'tagName' => 'AMP-STORY-INTERACTIVE-RESULTS',
                'attrs' => [
                    ['name' => 'option-1-results-category', 'mandatory' => true],
                    ['name' => 'option-2-results-category', 'mandatory' => true],
                    ['name' => 'option-3-results-category'],
                    ['name' => 'option-4-results-category', 'trigger' => ['alsoRequiresAttr' => ['option-3-results-category']]],
                    ['name' => 'option-1-image'],
                    ['name' => 'option-2-image'],
                    ['name' => 'option-3-image', 'trigger' => ['alsoRequiresAttr' => ['option-3-results-category']]],
                    ['name' => 'option-4-image', 'trigger' => ['alsoRequiresAttr' => ['option-4-results-category']]],
                    ['name' => 'option-1-text'],
                    ['name' => 'option-2-text'],
                    ['name' => 'option-3-text', 'trigger' => ['alsoRequiresAttr' => ['option-3-results-category']]],
                    ['name' => 'option-4-text', 'trigger' => ['alsoRequiresAttr' => ['option-4-results-category']]],
                    ['name' => 'option-1-results-threshold', 'valueRegex' => '\d+(\.\d+)?'],
                    ['name' => 'option-2-results-threshold', 'valueRegex' => '\d+(\.\d+)?'],
                    [
                        'name' => 'option-3-results-threshold',
                        'valueRegex' => '\d+(\.\d+)?',
                        'trigger' => ['alsoRequiresAttr' => ['option-3-results-category']],
                    ],
                    [
                        'name' => 'option-4-results-threshold',
                        'valueRegex' => '\d+(\.\d+)?',
                        'trigger' => ['alsoRequiresAttr' => ['option-4-results-category']],
                    ],
                    ['name' => 'prompt-text'],
                    ['name' => 'theme', 'value' => ['light', 'dark']],
                    ['name' => 'chip-style', 'value' => ['flat', 'transparent']],
                ],
                'mandatoryAncestor' => 'AMP-STORY-GRID-LAYER',
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-story-interactive'],
            ]
        );
        $this->tags['AMP-STORY-PAGE'] = new Tag(
            [
                'tagName' => 'AMP-STORY-PAGE',
                'mandatoryParent' => 'AMP-STORY',
                'attrs' => [
                    ['name' => 'auto-advance-after'],
                    ['name' => 'background-audio', 'valueUrl' => ['protocol' => ['http', 'https']]],
                    ['name' => 'next-page-no-ad'],
                ],
                'attrLists' => ['mandatory-id-attr'],
                'childTags' => [
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
                'htmlFormat' => ['AMP'],
                'satisfies' => ['amp-story-page'],
                'requiresExtension' => ['amp-story'],
            ]
        );
        $this->tags['amp-story-page-attachment'] = new Tag(
            [
                'tagName' => 'AMP-STORY-PAGE-ATTACHMENT',
                'specName' => 'amp-story-page-attachment',
                'attrs' => [
                    ['name' => 'layout', 'mandatory' => true, 'value' => ['nodisplay']],
                    ['name' => 'theme', 'value' => ['dark', 'light']],
                ],
                'mandatoryAncestor' => 'AMP-STORY-PAGE',
                'htmlFormat' => ['AMP'],
                'descendantTagList' => 'amp-story-page-attachment-allowed-descendants',
                'mandatoryLastChild' => true,
            ]
        );
        $this->tags['amp-story-page-attachment[href]'] = new Tag(
            [
                'tagName' => 'AMP-STORY-PAGE-ATTACHMENT',
                'specName' => 'amp-story-page-attachment[href]',
                'attrs' => [
                    ['name' => 'layout', 'mandatory' => true, 'value' => ['nodisplay']],
                    ['name' => 'theme', 'value' => ['dark', 'light']],
                    ['name' => 'href', 'mandatory' => true, 'valueUrl' => ['protocol' => ['http', 'https']]],
                ],
                'mandatoryAncestor' => 'AMP-STORY-PAGE',
                'childTags' => ['mandatoryNumChildTags' => 0],
                'htmlFormat' => ['AMP'],
                'mandatoryLastChild' => true,
            ]
        );
        $this->tags['AMP-STORY-PANNING-MEDIA'] = new Tag(
            [
                'tagName' => 'AMP-STORY-PANNING-MEDIA',
                'specUrl' => 'https://amp.dev/documentation/components/amp-story-panning-media',
                'ampLayout' => ['supportedLayouts' => ['FILL']],
                'mandatoryAncestor' => 'AMP-STORY-GRID-LAYER',
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-story-panning-media'],
            ]
        );
        $this->tags['AMP-STORY-PLAYER'] = new Tag(
            [
                'tagName' => 'AMP-STORY-PLAYER',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'RESPONSIVE', 'INTRINSIC']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-story-player'],
                'descendantTagList' => 'amp-story-player-allowed-descendants',
            ]
        );
        $this->tags['amp-story >> amp-audio'] = new Tag(
            [
                'tagName' => 'AMP-AUDIO',
                'specName' => 'amp-story >> amp-audio',
                'attrs' => [['name' => 'autoplay', 'mandatory' => true, 'value' => ['']]],
                'attrLists' => ['amp-audio-common', 'extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-audio/',
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'mandatoryAncestor' => 'AMP-STORY',
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-audio'],
            ]
        );
        $this->tags['amp-story >> amp-sidebar'] = new Tag(
            [
                'tagName' => 'AMP-SIDEBAR',
                'specName' => 'amp-story >> amp-sidebar',
                'mandatoryParent' => 'AMP-STORY',
                'specUrl' => 'https://amp.dev/documentation/components/amp-sidebar/',
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-sidebar'],
                'markDescendants' => ['marker' => ['AUTOSCROLL']],
            ]
        );
        $this->tags['amp-story >> amp-story-page-attachment >> amp-video'] = new Tag(
            [
                'tagName' => 'AMP-VIDEO',
                'specName' => 'amp-story >> amp-story-page-attachment >> amp-video',
                'attrs' => [['name' => 'poster']],
                'attrLists' => ['extended-amp-global', 'amp-video-common', 'lightboxable-elements'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-video/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'mandatoryAncestor' => 'AMP-STORY-PAGE-ATTACHMENT',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'alsoRequiresTagWarning' => ['amp-video extension script'],
            ]
        );
        $this->tags['amp-story >> amp-video'] = new Tag(
            [
                'tagName' => 'AMP-VIDEO',
                'specName' => 'amp-story >> amp-video',
                'attrs' => [
                    ['name' => 'autoplay', 'mandatory' => true, 'value' => ['']],
                    [
                        'name' => 'controls',
                        'value' => [''],
                        'deprecation' => '- no replacement',
                        'deprecationUrl' => 'https://github.com/ampproject/amphtml/issues/23798',
                    ],
                    [
                        'name' => '[controls]',
                        'deprecation' => '- no replacement',
                        'deprecationUrl' => 'https://github.com/ampproject/amphtml/issues/23798',
                    ],
                    ['name' => 'poster', 'mandatory' => true],
                ],
                'attrLists' => ['extended-amp-global', 'amp-video-common'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-video/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'mandatoryAncestor' => 'AMP-STORY',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'requiresExtension' => ['amp-video'],
            ]
        );
        $this->tags['amp-subscriptions extension .json script'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'amp-subscriptions extension .json script',
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                    ['name' => 'id', 'mandatory' => true, 'value' => ['amp-subscriptions'], 'dispatchKey' => 'NAME_VALUE_DISPATCH'],
                    ['name' => 'type', 'mandatory' => true, 'valueCasei' => ['application/json']],
                ],
                'attrLists' => ['nonce-attr'],
                'cdata' => ['disallowedCdataRegex' => [['regex' => '<!--', 'errorMessage' => 'html comments']]],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-subscriptions'],
            ]
        );
        $this->tags['AMP-TIMEAGO'] = new Tag(
            [
                'tagName' => 'AMP-TIMEAGO',
                'attrs' => [
                    ['name' => 'cutoff', 'valueRegex' => '\d+'],
                    [
                        'name' => 'datetime',
                        'mandatory' => true,
                        'valueRegex' => '\d{4}-[01]\d-[0-3]\dT[0-2]\d:[0-5]\d(:[0-5]\d(\.\d+)?)?(Z|[+-][0-1][0-9]:[0-5][0-9])',
                    ],
                    ['name' => 'locale'],
                    ['name' => '[datetime]'],
                    ['name' => '[title]'],
                ],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-timeago/',
                'ampLayout' => ['supportedLayouts' => ['FIXED', 'FIXED_HEIGHT', 'RESPONSIVE']],
                'htmlFormat' => ['AMP', 'AMP4EMAIL'],
                'requiresExtension' => ['amp-timeago'],
            ]
        );
        $this->tags['AMP-TRUNCATE-TEXT'] = new Tag(
            [
                'tagName' => 'AMP-TRUNCATE-TEXT',
                'attrs' => [['name' => 'overflow-style', 'value' => ['right', 'default']]],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-truncate-text/',
                'ampLayout' => [
                    'supportedLayouts' => [
                        'CONTAINER',
                        'FILL',
                        'FIXED',
                        'FIXED_HEIGHT',
                        'FLEX_ITEM',
                        'INTRINSIC',
                        'NODISPLAY',
                        'RESPONSIVE',
                    ],
                ],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-truncate-text'],
            ]
        );
        $this->tags['AMP-TWITTER'] = new Tag(
            [
                'tagName' => 'AMP-TWITTER',
                'attrs' => [
                    ['name' => 'data-cards', 'trigger' => ['alsoRequiresAttr' => ['data-tweetid']]],
                    ['name' => 'data-conversation', 'trigger' => ['alsoRequiresAttr' => ['data-tweetid']]],
                    ['name' => 'data-limit', 'trigger' => ['alsoRequiresAttr' => ['data-momentid']]],
                    [
                        'name' => 'data-momentid',
                        'mandatoryOneof' => '[\'data-momentid\', \'data-timeline-source-type\', \'data-tweetid\']',
                        'valueRegex' => '\d+',
                    ],
                    [
                        'name' => 'data-timeline-id',
                        'valueRegex' => '\d+',
                        'trigger' => ['alsoRequiresAttr' => ['data-timeline-source-type']],
                    ],
                    ['name' => 'data-timeline-owner-screen-name', 'trigger' => ['alsoRequiresAttr' => ['data-timeline-source-type']]],
                    ['name' => 'data-timeline-slug', 'trigger' => ['alsoRequiresAttr' => ['data-timeline-source-type']]],
                    [
                        'name' => 'data-timeline-source-type',
                        'mandatoryOneof' => '[\'data-momentid\', \'data-timeline-source-type\', \'data-tweetid\']',
                    ],
                    ['name' => 'data-timeline-screen-name', 'trigger' => ['alsoRequiresAttr' => ['data-timeline-source-type']]],
                    [
                        'name' => 'data-timeline-url',
                        'valueUrl' => ['protocol' => ['http', 'https'], 'allowRelative' => false],
                        'trigger' => ['alsoRequiresAttr' => ['data-timeline-source-type']],
                    ],
                    [
                        'name' => 'data-timeline-user-id',
                        'valueRegex' => '\d+',
                        'trigger' => ['alsoRequiresAttr' => ['data-timeline-source-type']],
                    ],
                    [
                        'name' => 'data-tweetid',
                        'mandatoryOneof' => '[\'data-momentid\', \'data-timeline-source-type\', \'data-tweetid\']',
                    ],
                    ['name' => '[data-tweetid]'],
                ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-twitter'],
            ]
        );
        $this->tags['AMP-USER-NOTIFICATION'] = new Tag(
            [
                'tagName' => 'AMP-USER-NOTIFICATION',
                'attrs' => [
                    [
                        'name' => 'data-dismiss-href',
                        'valueUrl' => ['protocol' => ['https'], 'allowRelative' => false, 'allowEmpty' => false],
                    ],
                    [
                        'name' => 'data-show-if-href',
                        'valueUrl' => ['protocol' => ['https'], 'allowRelative' => false, 'allowEmpty' => false],
                    ],
                    ['name' => 'enctype', 'value' => ['application/x-www-form-urlencoded']],
                ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-user-notification'],
            ]
        );
        $this->tags['AMP-VIDEO'] = new Tag(
            [
                'tagName' => 'AMP-VIDEO',
                'attrs' => [['name' => 'poster']],
                'attrLists' => ['extended-amp-global', 'amp-video-common', 'lightboxable-elements'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-video/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'disallowedAncestor' => ['AMP-STORY'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'alsoRequiresTagWarning' => ['amp-video extension script'],
            ]
        );
        $this->tags['AMP-VIDEO-IFRAME > I-AMPHTML-SIZER [style]'] = new Tag(
            [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-VIDEO-IFRAME > I-AMPHTML-SIZER [style]',
                'attrs' => [
                    [
                        'name' => 'style',
                        'mandatory' => true,
                        'disallowedValueRegex' => '!\s*important',
                        'cssDeclaration' => [['name' => 'display', 'valueCasei' => ['block']], ['name' => 'padding-top']],
                    ],
                ],
                'specUrl' => 'https://amp.dev/documentation/components/amp-video-iframe/',
                'htmlFormat' => ['AMP'],
                'explicitAttrsOnly' => true,
                'enabledBy' => ['transformed'],
            ]
        );
        $this->tags['AMP-VIDEO-IFRAME > [placeholder]'] = new Tag(
            [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-VIDEO-IFRAME > [placeholder]',
                'attrs' => [['name' => 'placeholder', 'mandatory' => true]],
                'specUrl' => 'https://amp.dev/documentation/components/amp-video-iframe/',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['AMP-VIDEO-IFRAME with [placeholder]'] = new Tag(
            [
                'tagName' => 'AMP-VIDEO-IFRAME',
                'specName' => 'AMP-VIDEO-IFRAME with [placeholder]',
                'attrLists' => ['extended-amp-global', 'amp-video-iframe-common', 'lightboxable-elements'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-video-iframe/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'referencePoints' => [['tagSpecName' => 'AMP-VIDEO-IFRAME > [placeholder]', 'mandatory' => true, 'unique' => true]],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-video-iframe'],
                'disabledBy' => ['transformed'],
            ]
        );
        $this->tags['AMP-VIDEO-IFRAME with [placeholder] (transformed)'] = new Tag(
            [
                'tagName' => 'AMP-VIDEO-IFRAME',
                'specName' => 'AMP-VIDEO-IFRAME with [placeholder] (transformed)',
                'attrLists' => ['extended-amp-global', 'amp-video-iframe-common', 'lightboxable-elements'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-video-iframe/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'referencePoints' => [
                    ['tagSpecName' => 'AMP-VIDEO-IFRAME > [placeholder]', 'mandatory' => true, 'unique' => true],
                    ['tagSpecName' => 'AMP-VIDEO-IFRAME > I-AMPHTML-SIZER [style]'],
                ],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-video-iframe'],
                'enabledBy' => ['transformed'],
            ]
        );
        $this->tags['AMP-VIDEO-IFRAME[poster]'] = new Tag(
            [
                'tagName' => 'AMP-VIDEO-IFRAME',
                'specName' => 'AMP-VIDEO-IFRAME[poster]',
                'attrs' => [['name' => 'poster', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global', 'amp-video-iframe-common', 'lightboxable-elements'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-video-iframe/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-video-iframe'],
            ]
        );
        $this->tags['amp-video > source'] = new Tag(
            [
                'tagName' => 'SOURCE',
                'specName' => 'amp-video > source',
                'mandatoryParent' => 'AMP-VIDEO',
                'attrs' => [
                    ['name' => 'media'],
                    [
                        'name' => 'src',
                        'disallowedValueRegex' => '__amp_source_origin',
                        'valueUrl' => ['protocol' => ['https'], 'allowRelative' => true],
                    ],
                    ['name' => 'type'],
                    ['name' => '[src]'],
                    ['name' => '[type]'],
                ],
                'specUrl' => 'https://amp.dev/documentation/components/amp-video/',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['amp-video > track'] = new Tag(
            [
                'tagName' => 'TRACK',
                'specName' => 'amp-video > track',
                'mandatoryParent' => 'AMP-VIDEO',
                'attrs' => [['name' => '[label]'], ['name' => '[src]'], ['name' => '[srclang]']],
                'attrLists' => ['track-attrs-no-subtitles'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['amp-video > track[kind=subtitles]'] = new Tag(
            [
                'tagName' => 'TRACK',
                'specName' => 'amp-video > track[kind=subtitles]',
                'mandatoryParent' => 'AMP-VIDEO',
                'attrs' => [['name' => '[label]'], ['name' => '[src]'], ['name' => '[srclang]']],
                'attrLists' => ['track-attrs-subtitles'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['amp-video extension script'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'amp-video extension script',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'extensionSpec' => ['name' => 'amp-video', 'version' => ['0.1', 'latest'], 'requiresUsage' => 'NONE'],
            ]
        );
        $this->tags['AMP-VIMEO'] = new Tag(
            [
                'tagName' => 'AMP-VIMEO',
                'attrs' => [['name' => 'autoplay', 'value' => ['']], ['name' => 'data-videoid', 'mandatory' => true, 'valueRegex' => '[0-9]+']],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-vimeo'],
            ]
        );
        $this->tags['AMP-VINE'] = new Tag(
            [
                'tagName' => 'AMP-VINE',
                'attrs' => [['name' => 'data-vineid', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-vine'],
            ]
        );
        $this->tags['AMP-VIQEO-PLAYER'] = new Tag(
            [
                'tagName' => 'AMP-VIQEO-PLAYER',
                'attrs' => [
                    ['name' => 'autoplay'],
                    ['name' => 'data-profileid', 'mandatory' => true, 'valueRegex' => '[0-9a-f]*'],
                    ['name' => 'data-videoid', 'mandatory' => true],
                ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-viqeo-player'],
            ]
        );
        $this->tags['AMP-VK'] = new Tag(
            [
                'tagName' => 'AMP-VK',
                'attrs' => [['name' => 'data-embedtype', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FIXED', 'FLEX_ITEM', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-vk'],
            ]
        );
        $this->tags['AMP-WEB-PUSH'] = new Tag(
            [
                'tagName' => 'AMP-WEB-PUSH',
                'attrs' => [
                    [
                        'name' => 'helper-iframe-url',
                        'mandatory' => true,
                        'valueUrl' => ['protocol' => ['https'], 'allowRelative' => false],
                    ],
                    ['name' => 'id', 'mandatory' => true, 'value' => ['amp-web-push']],
                    [
                        'name' => 'permission-dialog-url',
                        'mandatory' => true,
                        'valueUrl' => ['protocol' => ['https'], 'allowRelative' => false],
                    ],
                    [
                        'name' => 'service-worker-url',
                        'mandatory' => true,
                        'valueUrl' => ['protocol' => ['https'], 'allowRelative' => false],
                    ],
                    ['name' => 'service-worker-scope', 'valueUrl' => ['protocol' => ['https']]],
                ],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-web-push/',
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-web-push'],
            ]
        );
        $this->tags['AMP-WEB-PUSH-WIDGET'] = new Tag(
            [
                'tagName' => 'AMP-WEB-PUSH-WIDGET',
                'attrs' => [['name' => 'visibility', 'mandatory' => true, 'value' => ['blocked', 'subscribed', 'unsubscribed']]],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-web-push/',
                'ampLayout' => ['supportedLayouts' => ['FIXED']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-web-push'],
            ]
        );
        $this->tags['AMP-WISTIA-PLAYER'] = new Tag(
            [
                'tagName' => 'AMP-WISTIA-PLAYER',
                'attrs' => [
                    ['name' => 'data-media-hashed-id', 'mandatory' => true, 'valueRegex' => '[0-9a-zA-Z]+'],
                    ['name' => 'rotate-to-fullscreen', 'value' => ['']],
                ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-wistia-player'],
            ]
        );
        $this->tags['AMP-YOTPO'] = new Tag(
            [
                'tagName' => 'AMP-YOTPO',
                'attrs' => [['name' => 'data-app-key', 'mandatory' => true], ['name' => 'data-widget-type', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-yotpo/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-yotpo'],
            ]
        );
        $this->tags['AMP-YOUTUBE'] = new Tag(
            [
                'tagName' => 'AMP-YOUTUBE',
                'attrs' => [
                    ['name' => 'autoplay'],
                    ['name' => 'loop'],
                    ['name' => 'credentials', 'valueCasei' => ['include', 'omit']],
                    [
                        'name' => 'data-live-channelid',
                        'mandatoryOneof' => '[\'data-live-channelid\', \'data-videoid\']',
                        'valueRegex' => '[^=/?:]+',
                    ],
                    [
                        'name' => 'data-videoid',
                        'mandatoryOneof' => '[\'data-live-channelid\', \'data-videoid\']',
                        'valueRegex' => '[^=/?:]+',
                    ],
                    ['name' => 'dock', 'requiresExtension' => ['amp-video-docking']],
                    ['name' => '[data-videoid]'],
                ],
                'attrLists' => ['extended-amp-global', 'lightboxable-elements'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-youtube'],
            ]
        );
        $this->tags['amp4ads engine script'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'amp4ads engine script',
                'mandatory' => true,
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                    [
                        'name' => 'src',
                        'mandatory' => true,
                        'value' => ['https://cdn.ampproject.org/amp4ads-v0.js'],
                        'dispatchKey' => 'NAME_VALUE_DISPATCH',
                    ],
                ],
                'attrLists' => ['nonce-attr', 'amphtml-engine-attrs'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#required-markup',
                'cdata' => ['disallowedCdataRegex' => [['regex' => '.', 'errorMessage' => 'contents']]],
                'htmlFormat' => ['AMP4ADS'],
                'descriptiveName' => 'amphtml engine script',
            ]
        );
        $this->tags['amphtml engine script'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'amphtml engine script',
                'mandatoryAlternatives' => 'amphtml engine script',
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                    [
                        'name' => 'src',
                        'mandatory' => true,
                        'value' => ['https://cdn.ampproject.org/v0.js'],
                        'dispatchKey' => 'NAME_VALUE_DISPATCH',
                    ],
                ],
                'attrLists' => ['nonce-attr', 'amphtml-engine-attrs'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#required-markup',
                'cdata' => ['disallowedCdataRegex' => [['regex' => '.', 'errorMessage' => 'contents']]],
                'htmlFormat' => ['AMP'],
                'descriptiveName' => 'amphtml engine script',
            ]
        );
        $this->tags['amphtml engine script (LTS)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'amphtml engine script (LTS)',
                'mandatoryAlternatives' => 'amphtml engine script',
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                    [
                        'name' => 'src',
                        'mandatory' => true,
                        'value' => ['https://cdn.ampproject.org/lts/v0.js'],
                        'dispatchKey' => 'NAME_VALUE_DISPATCH',
                    ],
                ],
                'attrLists' => ['nonce-attr', 'amphtml-engine-attrs'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#required-markup',
                'cdata' => ['disallowedCdataRegex' => [['regex' => '.', 'errorMessage' => 'contents']]],
                'htmlFormat' => ['AMP'],
                'descriptiveName' => 'amphtml engine script',
            ]
        );
        $this->tags['amphtml engine script [AMP4EMAIL]'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'amphtml engine script [AMP4EMAIL]',
                'mandatory' => true,
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                    [
                        'name' => 'src',
                        'mandatory' => true,
                        'value' => ['https://cdn.ampproject.org/v0.js'],
                        'dispatchKey' => 'NAME_VALUE_DISPATCH',
                    ],
                ],
                'attrLists' => ['nonce-attr', 'amphtml-engine-attrs'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#required-markup',
                'cdata' => ['disallowedCdataRegex' => [['regex' => '.', 'errorMessage' => 'contents']]],
                'htmlFormat' => ['AMP4EMAIL'],
                'descriptiveName' => 'amphtml engine script',
            ]
        );
        $this->tags['ARTICLE'] = new Tag(
            [
                'tagName' => 'ARTICLE',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['ASIDE'] = new Tag(
            [
                'tagName' => 'ASIDE',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['AUDIO'] = new Tag(
            [
                'tagName' => 'AUDIO',
                'attrs' => [
                    ['name' => 'autoplay'],
                    ['name' => 'controls'],
                    ['name' => 'loop'],
                    ['name' => 'muted'],
                    ['name' => 'preload'],
                    [
                        'name' => 'src',
                        'disallowedValueRegex' => '__amp_source_origin',
                        'valueUrl' => ['protocol' => ['data', 'https'], 'allowRelative' => false],
                    ],
                ],
                'specUrl' => 'https://amp.dev/documentation/components/amp-audio/',
                'mandatoryAncestor' => 'NOSCRIPT',
                'mandatoryAncestorSuggestedAlternative' => 'AMP-AUDIO',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['audio > source'] = new Tag(
            [
                'tagName' => 'SOURCE',
                'specName' => 'audio > source',
                'mandatoryParent' => 'AUDIO',
                'attrs' => [
                    ['name' => 'media'],
                    [
                        'name' => 'src',
                        'mandatory' => true,
                        'disallowedValueRegex' => '__amp_source_origin',
                        'valueUrl' => ['protocol' => ['https'], 'allowRelative' => true],
                    ],
                    ['name' => 'type', 'mandatory' => true],
                ],
                'specUrl' => 'https://amp.dev/documentation/components/amp-audio/',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['audio > track'] = new Tag(
            [
                'tagName' => 'TRACK',
                'specName' => 'audio > track',
                'mandatoryParent' => 'AUDIO',
                'attrLists' => ['track-attrs-no-subtitles'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['audio > track[kind=subtitles]'] = new Tag(
            [
                'tagName' => 'TRACK',
                'specName' => 'audio > track[kind=subtitles]',
                'mandatoryParent' => 'AUDIO',
                'attrLists' => ['track-attrs-subtitles'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['B'] = new Tag(
            [
                'tagName' => 'B',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['BASE'] = new Tag(
            [
                'tagName' => 'BASE',
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [['name' => 'href', 'value' => ['/']], ['name' => 'target', 'valueCasei' => ['_blank', '_self', '_top']]],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['BDI'] = new Tag(
            [
                'tagName' => 'BDI',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['BDO'] = new Tag(
            [
                'tagName' => 'BDO',
                'attrs' => [['name' => 'dir']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['BIG'] = new Tag(
            [
                'tagName' => 'BIG',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['BLOCKQUOTE'] = new Tag(
            [
                'tagName' => 'BLOCKQUOTE',
                'attrs' => [['name' => 'align']],
                'attrLists' => ['cite-attr'],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['BODY'] = new Tag(
            [
                'tagName' => 'BODY',
                'mandatory' => true,
                'unique' => true,
                'mandatoryParent' => 'HTML',
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#required-markup',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['BR'] = new Tag(
            [
                'tagName' => 'BR',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['BUTTON'] = new Tag(
            [
                'tagName' => 'BUTTON',
                'attrs' => [
                    ['name' => 'disabled', 'value' => ['']],
                    ['name' => 'role', 'implicit' => true],
                    ['name' => 'tabindex', 'implicit' => true],
                    ['name' => 'type'],
                    ['name' => 'value'],
                    ['name' => '[disabled]'],
                    ['name' => '[type]', 'disabledBy' => ['amp4email']],
                    ['name' => '[value]'],
                ],
                'attrLists' => ['name-attr'],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['button amp-nested-menu'] = new Tag(
            [
                'tagName' => 'BUTTON',
                'specName' => 'button amp-nested-menu',
                'attrLists' => ['amp-nested-menu-actions'],
                'mandatoryAncestor' => 'AMP-NESTED-MENU',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['CANVAS'] = new Tag(
            [
                'tagName' => 'CANVAS',
                'attrs' => [['name' => 'height'], ['name' => 'width']],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                'mandatoryAncestor' => 'AMP-SCRIPT',
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-script'],
            ]
        );
        $this->tags['CAPTION'] = new Tag(
            [
                'tagName' => 'CAPTION',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['CENTER'] = new Tag(
            [
                'tagName' => 'CENTER',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['CIRCLE'] = new Tag(
            [
                'tagName' => 'CIRCLE',
                'attrs' => [
                    ['name' => 'cx'],
                    ['name' => 'cy'],
                    ['name' => 'externalresourcesrequired'],
                    ['name' => 'r'],
                    ['name' => 'sketch:type'],
                    ['name' => 'transform'],
                ],
                'attrLists' => ['svg-conditional-processing-attributes', 'svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['CITE'] = new Tag(
            [
                'tagName' => 'CITE',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['CLIPPATH'] = new Tag(
            [
                'tagName' => 'CLIPPATH',
                'attrs' => [['name' => 'clippathunits'], ['name' => 'externalresourcesrequired'], ['name' => 'transform']],
                'attrLists' => ['svg-conditional-processing-attributes', 'svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['CODE'] = new Tag(
            [
                'tagName' => 'CODE',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['COL'] = new Tag(
            [
                'tagName' => 'COL',
                'attrs' => [['name' => 'span']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['COLGROUP'] = new Tag(
            [
                'tagName' => 'COLGROUP',
                'attrs' => [['name' => 'span']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['cryptokeys .json script'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'cryptokeys .json script',
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                    ['name' => 'cryptokeys', 'mandatory' => true, 'value' => [''], 'dispatchKey' => 'NAME_VALUE_DISPATCH'],
                    ['name' => 'sha-256-hash', 'mandatory' => true],
                    ['name' => 'type', 'mandatory' => true, 'valueCasei' => ['application/json']],
                ],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-subscriptions'],
            ]
        );
        $this->tags['DATA'] = new Tag(
            [
                'tagName' => 'DATA',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['DATALIST'] = new Tag(
            [
                'tagName' => 'DATALIST',
                'specUrl' => 'https://amp.dev/documentation/components/amp-form/',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['DD'] = new Tag(
            [
                'tagName' => 'DD',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['DEFS'] = new Tag(
            [
                'tagName' => 'DEFS',
                'attrs' => [['name' => 'externalresourcesrequired'], ['name' => 'transform']],
                'attrLists' => ['svg-conditional-processing-attributes', 'svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['DEL'] = new Tag(
            [
                'tagName' => 'DEL',
                'attrs' => [['name' => 'datetime']],
                'attrLists' => ['cite-attr'],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['DESC'] = new Tag(
            [
                'tagName' => 'DESC',
                'attrLists' => ['svg-core-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['DETAILS'] = new Tag(
            [
                'tagName' => 'DETAILS',
                'attrs' => [['name' => 'open', 'value' => ['']], ['name' => '[open]']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['DFN'] = new Tag(
            [
                'tagName' => 'DFN',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['DIR'] = new Tag(
            [
                'tagName' => 'DIR',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['DIV'] = new Tag(
            [
                'tagName' => 'DIV',
                'attrs' => [['name' => 'align']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['div amp-nested-menu'] = new Tag(
            [
                'tagName' => 'DIV',
                'specName' => 'div amp-nested-menu',
                'attrs' => [
                    [
                        'name' => 'amp-nested-submenu',
                        'mandatoryOneof' => '[\'amp-nested-submenu\', \'amp-nested-submenu-close\', \'amp-nested-submenu-open\']',
                    ],
                    [
                        'name' => 'amp-nested-submenu-close',
                        'mandatoryOneof' => '[\'amp-nested-submenu\', \'amp-nested-submenu-close\', \'amp-nested-submenu-open\']',
                    ],
                    [
                        'name' => 'amp-nested-submenu-open',
                        'mandatoryOneof' => '[\'amp-nested-submenu\', \'amp-nested-submenu-close\', \'amp-nested-submenu-open\']',
                    ],
                ],
                'disallowedAncestor' => ['AMP-ACCORDION'],
                'mandatoryAncestor' => 'AMP-NESTED-MENU',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['DL'] = new Tag(
            [
                'tagName' => 'DL',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['DT'] = new Tag(
            [
                'tagName' => 'DT',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['ELLIPSE'] = new Tag(
            [
                'tagName' => 'ELLIPSE',
                'attrs' => [
                    ['name' => 'cx'],
                    ['name' => 'cy'],
                    ['name' => 'externalresourcesrequired'],
                    ['name' => 'rx'],
                    ['name' => 'ry'],
                    ['name' => 'sketch:type'],
                    ['name' => 'transform'],
                ],
                'attrLists' => ['svg-conditional-processing-attributes', 'svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['EM'] = new Tag(
            [
                'tagName' => 'EM',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['FECOLORMATRIX'] = new Tag(
            [
                'tagName' => 'FECOLORMATRIX',
                'attrs' => [['name' => 'in'], ['name' => 'type'], ['name' => 'values']],
                'attrLists' => ['svg-core-attributes', 'svg-filter-primitive-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['FECOMPOSITE'] = new Tag(
            [
                'tagName' => 'FECOMPOSITE',
                'attrs' => [
                    ['name' => 'in'],
                    ['name' => 'in2'],
                    ['name' => 'k1'],
                    ['name' => 'k2'],
                    ['name' => 'k3'],
                    ['name' => 'k4'],
                    ['name' => 'operator'],
                ],
                'attrLists' => ['svg-core-attributes', 'svg-filter-primitive-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['FEFLOOD'] = new Tag(
            [
                'tagName' => 'FEFLOOD',
                'attrLists' => ['svg-core-attributes', 'svg-filter-primitive-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['FEGAUSSIANBLUR'] = new Tag(
            [
                'tagName' => 'FEGAUSSIANBLUR',
                'attrs' => [['name' => 'edgemode'], ['name' => 'in'], ['name' => 'stddeviation']],
                'attrLists' => ['svg-core-attributes', 'svg-filter-primitive-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['FEMERGE'] = new Tag(
            [
                'tagName' => 'FEMERGE',
                'attrLists' => ['svg-core-attributes', 'svg-filter-primitive-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['FEMERGENODE'] = new Tag(
            [
                'tagName' => 'FEMERGENODE',
                'attrs' => [['name' => 'in']],
                'attrLists' => ['svg-core-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['FEOFFSET'] = new Tag(
            [
                'tagName' => 'FEOFFSET',
                'attrs' => [['name' => 'dx'], ['name' => 'dy'], ['name' => 'in']],
                'attrLists' => ['svg-core-attributes', 'svg-filter-primitive-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['FIELDSET'] = new Tag(
            [
                'tagName' => 'FIELDSET',
                'attrs' => [['name' => 'disabled'], ['name' => '[disabled]']],
                'attrLists' => ['name-attr'],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['FIGCAPTION'] = new Tag(
            [
                'tagName' => 'FIGCAPTION',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['FIGURE'] = new Tag(
            [
                'tagName' => 'FIGURE',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['FILTER'] = new Tag(
            [
                'tagName' => 'FILTER',
                'attrs' => [
                    ['name' => 'externalresourcesrequired'],
                    ['name' => 'filterres'],
                    ['name' => 'filterunits'],
                    ['name' => 'height'],
                    ['name' => 'primitiveunits'],
                    ['name' => 'width'],
                    ['name' => 'x'],
                    ['name' => 'y'],
                ],
                'attrLists' => ['svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr', 'svg-xlink-attributes'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['FOOTER'] = new Tag(
            [
                'tagName' => 'FOOTER',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['FORM DIV [submit-error]'] = new Tag(
            [
                'tagName' => 'DIV',
                'specName' => 'FORM DIV [submit-error]',
                'attrs' => [['name' => 'align'], ['name' => 'submit-error', 'mandatory' => true]],
                'mandatoryAncestor' => 'FORM',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['FORM DIV [submit-error][template]'] = new Tag(
            [
                'tagName' => 'DIV',
                'specName' => 'FORM DIV [submit-error][template]',
                'attrs' => [['name' => 'align'], ['name' => 'submit-error', 'mandatory' => true], ['name' => 'template', 'mandatory' => true]],
                'mandatoryAncestor' => 'FORM',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['FORM DIV [submit-success]'] = new Tag(
            [
                'tagName' => 'DIV',
                'specName' => 'FORM DIV [submit-success]',
                'attrs' => [['name' => 'align'], ['name' => 'submit-success', 'mandatory' => true]],
                'mandatoryAncestor' => 'FORM',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['FORM DIV [submit-success][template]'] = new Tag(
            [
                'tagName' => 'DIV',
                'specName' => 'FORM DIV [submit-success][template]',
                'attrs' => [['name' => 'align'], ['name' => 'submit-success', 'mandatory' => true], ['name' => 'template', 'mandatory' => true]],
                'mandatoryAncestor' => 'FORM',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['FORM DIV [submitting]'] = new Tag(
            [
                'tagName' => 'DIV',
                'specName' => 'FORM DIV [submitting]',
                'attrs' => [['name' => 'align'], ['name' => 'submitting', 'mandatory' => true]],
                'mandatoryAncestor' => 'FORM',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['FORM DIV [submitting][template]'] = new Tag(
            [
                'tagName' => 'DIV',
                'specName' => 'FORM DIV [submitting][template]',
                'attrs' => [['name' => 'align'], ['name' => 'submitting', 'mandatory' => true], ['name' => 'template', 'mandatory' => true]],
                'mandatoryAncestor' => 'FORM',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['FORM DIV [verify-error]'] = new Tag(
            [
                'tagName' => 'DIV',
                'specName' => 'FORM DIV [verify-error]',
                'attrs' => [['name' => 'align'], ['name' => 'verify-error', 'mandatory' => true]],
                'mandatoryAncestor' => 'FORM',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['FORM DIV [verify-error][template]'] = new Tag(
            [
                'tagName' => 'DIV',
                'specName' => 'FORM DIV [verify-error][template]',
                'attrs' => [['name' => 'align'], ['name' => 'verify-error', 'mandatory' => true], ['name' => 'template', 'mandatory' => true]],
                'mandatoryAncestor' => 'FORM',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['FORM [method=GET]'] = new Tag(
            [
                'tagName' => 'FORM',
                'specName' => 'FORM [method=GET]',
                'attrs' => [
                    ['name' => 'accept'],
                    ['name' => 'accept-charset'],
                    [
                        'name' => 'action',
                        'mandatory' => true,
                        'disallowedValueRegex' => '__amp_source_origin',
                        'valueUrl' => ['protocol' => ['https']],
                    ],
                    ['name' => 'action-xhr', 'disallowedValueRegex' => '__amp_source_origin', 'valueUrl' => ['protocol' => ['https']]],
                    ['name' => 'autocomplete'],
                    [
                        'name' => 'custom-validation-reporting',
                        'value' => ['as-you-go', 'interact-and-submit', 'show-all-on-submit', 'show-first-on-submit'],
                    ],
                    ['name' => 'enctype'],
                    ['name' => 'method', 'valueCasei' => ['get']],
                    ['name' => 'novalidate'],
                    ['name' => 'target', 'mandatory' => true, 'valueCasei' => ['_blank', '_top']],
                    ['name' => 'verify-xhr', 'disallowedValueRegex' => '__amp_source_origin', 'valueUrl' => ['protocol' => ['https']]],
                ],
                'attrLists' => ['form-name-attr'],
                'disallowedAncestor' => ['AMP-APP-BANNER'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'requiresExtension' => ['amp-form'],
            ]
        );
        $this->tags['FORM [method=GET] (AMP4EMAIL)'] = new Tag(
            [
                'tagName' => 'FORM',
                'specName' => 'FORM [method=GET] (AMP4EMAIL)',
                'attrs' => [
                    ['name' => 'accept'],
                    ['name' => 'accept-charset'],
                    [
                        'name' => 'action-xhr',
                        'disallowedValueRegex' => '__amp_source_origin|{{|}}',
                        'valueUrl' => ['protocol' => ['https'], 'allowRelative' => false],
                    ],
                    ['name' => 'autocomplete'],
                    [
                        'name' => 'custom-validation-reporting',
                        'value' => ['as-you-go', 'interact-and-submit', 'show-all-on-submit', 'show-first-on-submit'],
                    ],
                    ['name' => 'enctype'],
                    ['name' => 'method', 'valueCasei' => ['get']],
                    ['name' => 'novalidate'],
                    ['name' => 'xssi-prefix'],
                ],
                'htmlFormat' => ['AMP4EMAIL'],
                'requiresExtension' => ['amp-form'],
            ]
        );
        $this->tags['FORM [method=POST]'] = new Tag(
            [
                'tagName' => 'FORM',
                'specName' => 'FORM [method=POST]',
                'attrs' => [
                    ['name' => 'accept'],
                    ['name' => 'accept-charset'],
                    [
                        'name' => 'action-xhr',
                        'mandatory' => true,
                        'disallowedValueRegex' => '__amp_source_origin',
                        'valueUrl' => ['protocol' => ['https']],
                    ],
                    ['name' => 'autocomplete'],
                    [
                        'name' => 'custom-validation-reporting',
                        'value' => ['as-you-go', 'interact-and-submit', 'show-all-on-submit', 'show-first-on-submit'],
                    ],
                    ['name' => 'enctype'],
                    ['name' => 'method', 'mandatory' => true, 'dispatchKey' => 'NAME_VALUE_DISPATCH', 'valueCasei' => ['post']],
                    ['name' => 'novalidate'],
                    ['name' => 'target', 'valueCasei' => ['_blank', '_top']],
                    ['name' => 'verify-xhr', 'disallowedValueRegex' => '__amp_source_origin', 'valueUrl' => ['protocol' => ['https']]],
                ],
                'attrLists' => ['form-name-attr'],
                'disallowedAncestor' => ['AMP-APP-BANNER'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'requiresExtension' => ['amp-form'],
            ]
        );
        $this->tags['FORM [method=POST] (AMP4EMAIL)'] = new Tag(
            [
                'tagName' => 'FORM',
                'specName' => 'FORM [method=POST] (AMP4EMAIL)',
                'attrs' => [
                    ['name' => 'accept'],
                    ['name' => 'accept-charset'],
                    [
                        'name' => 'action-xhr',
                        'mandatory' => true,
                        'disallowedValueRegex' => '__amp_source_origin|{{|}}',
                        'valueUrl' => ['protocol' => ['https'], 'allowRelative' => false],
                    ],
                    ['name' => 'autocomplete'],
                    [
                        'name' => 'custom-validation-reporting',
                        'value' => ['as-you-go', 'interact-and-submit', 'show-all-on-submit', 'show-first-on-submit'],
                    ],
                    ['name' => 'enctype'],
                    ['name' => 'method', 'mandatory' => true, 'dispatchKey' => 'NAME_VALUE_DISPATCH', 'valueCasei' => ['post']],
                    ['name' => 'novalidate'],
                    ['name' => 'xssi-prefix'],
                ],
                'htmlFormat' => ['AMP4EMAIL'],
                'requiresExtension' => ['amp-form'],
            ]
        );
        $this->tags['G'] = new Tag(
            [
                'tagName' => 'G',
                'attrs' => [['name' => 'externalresourcesrequired'], ['name' => 'transform']],
                'attrLists' => ['svg-conditional-processing-attributes', 'svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['GLYPH'] = new Tag(
            [
                'tagName' => 'GLYPH',
                'attrs' => [
                    ['name' => 'arabic-form'],
                    ['name' => 'd'],
                    ['name' => 'glyph-name'],
                    ['name' => 'horiz-adv-x'],
                    ['name' => 'orientation'],
                    ['name' => 'unicode'],
                    ['name' => 'vert-adv-y'],
                    ['name' => 'vert-origin-x'],
                    ['name' => 'vert-origin-y'],
                ],
                'attrLists' => ['svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['GLYPHREF'] = new Tag(
            [
                'tagName' => 'GLYPHREF',
                'attrs' => [['name' => 'dx'], ['name' => 'dy'], ['name' => 'format'], ['name' => 'glyphref'], ['name' => 'x'], ['name' => 'y']],
                'attrLists' => ['svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr', 'svg-xlink-attributes'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['H1'] = new Tag(
            [
                'tagName' => 'H1',
                'attrs' => [['name' => 'align']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['H2'] = new Tag(
            [
                'tagName' => 'H2',
                'attrs' => [['name' => 'align']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['h2 amp-nested-menu'] = new Tag(
            [
                'tagName' => 'H2',
                'specName' => 'h2 amp-nested-menu',
                'attrLists' => ['amp-nested-menu-actions'],
                'mandatoryAncestor' => 'AMP-NESTED-MENU',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['H3'] = new Tag(
            [
                'tagName' => 'H3',
                'attrs' => [['name' => 'align']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['h3 amp-nested-menu'] = new Tag(
            [
                'tagName' => 'H3',
                'specName' => 'h3 amp-nested-menu',
                'attrLists' => ['amp-nested-menu-actions'],
                'mandatoryAncestor' => 'AMP-NESTED-MENU',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['H4'] = new Tag(
            [
                'tagName' => 'H4',
                'attrs' => [['name' => 'align']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['h4 amp-nested-menu'] = new Tag(
            [
                'tagName' => 'H4',
                'specName' => 'h4 amp-nested-menu',
                'attrLists' => ['amp-nested-menu-actions'],
                'mandatoryAncestor' => 'AMP-NESTED-MENU',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['H5'] = new Tag(
            [
                'tagName' => 'H5',
                'attrs' => [['name' => 'align']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['h5 amp-nested-menu'] = new Tag(
            [
                'tagName' => 'H5',
                'specName' => 'h5 amp-nested-menu',
                'attrLists' => ['amp-nested-menu-actions'],
                'mandatoryAncestor' => 'AMP-NESTED-MENU',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['H6'] = new Tag(
            [
                'tagName' => 'H6',
                'attrs' => [['name' => 'align']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['h6 amp-nested-menu'] = new Tag(
            [
                'tagName' => 'H6',
                'specName' => 'h6 amp-nested-menu',
                'attrLists' => ['amp-nested-menu-actions'],
                'mandatoryAncestor' => 'AMP-NESTED-MENU',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['HEAD'] = new Tag(
            [
                'tagName' => 'HEAD',
                'mandatory' => true,
                'unique' => true,
                'mandatoryParent' => 'HTML',
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#required-markup',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['head > style[amp-boilerplate]'] = new Tag(
            [
                'tagName' => 'STYLE',
                'specName' => 'head > style[amp-boilerplate]',
                'mandatory' => true,
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [['name' => 'amp-boilerplate', 'mandatory' => true, 'value' => [''], 'dispatchKey' => 'NAME_VALUE_PARENT_DISPATCH']],
                'attrLists' => ['nonce-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amp-boilerplate/?format=websites',
                'cdata' => [
                    'cdataRegex' => '\s*body\s*{\s*-webkit-animation:\s*-amp-start\s+8s\s+steps\(1,\s*end\)\s+0s\s+1\s+normal\s+both;\s*-moz-animation:\s*-amp-start\s+8s\s+steps\s*\(1\s*,\s*end\s*\)\s+0s\s+1\s+normal\s+both;\s*-ms-animation:\s*-amp-start\s+8s\s+steps\s*\(1\s*,\s*end\s*\)\s+0s\s+1\s+normal\s+both;\s*animation:\s*-amp-start\s+8s\s+steps\(1,\s*end\)\s+0s\s+1\s+normal\s+both;?\s*}\s*@-webkit-keyframes\s+-amp-start\s*{\s*from\s*{\s*visibility:\s*hidden;?\s*}\s*to\s*{\s*visibility:\s*visible;?\s*}\s*}\s*@-moz-keyframes\s+-amp-start\s*{\s*from\s*{\s*visibility:\s*hidden;?\s*}\s*to\s*{\s*visibility:\s*visible;?\s*}\s*}\s*@-ms-keyframes\s+-amp-start\s*{\s*from\s*{\s*visibility:\s*hidden;?\s*}\s*to\s*{\s*visibility:\s*visible;?\s*}\s*}\s*@-o-keyframes\s+-amp-start\s*{\s*from\s*{\s*visibility:\s*hidden;?\s*}\s*to\s*{\s*visibility:\s*visible;?\s*}\s*}\s*@keyframes\s+-amp-start\s*{\s*from\s*{\s*visibility:\s*hidden;?\s*}\s*to\s*{\s*visibility:\s*visible;?\s*}\s*}\s*',
                    'docCssBytes' => false,
                ],
                'htmlFormat' => ['AMP'],
                'disabledBy' => ['transformed'],
                'descriptiveName' => 'head > style[amp-boilerplate]',
            ]
        );
        $this->tags['head > style[amp-boilerplate] (transformed)'] = new Tag(
            [
                'tagName' => 'STYLE',
                'specName' => 'head > style[amp-boilerplate] (transformed)',
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [['name' => 'amp-boilerplate', 'mandatory' => true, 'value' => [''], 'dispatchKey' => 'NAME_VALUE_PARENT_DISPATCH']],
                'attrLists' => ['nonce-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amp-boilerplate/?format=websites',
                'cdata' => [
                    'cdataRegex' => '\s*body\s*{\s*-webkit-animation:\s*-amp-start\s+8s\s+steps\(1,\s*end\)\s+0s\s+1\s+normal\s+both;\s*-moz-animation:\s*-amp-start\s+8s\s+steps\s*\(1\s*,\s*end\s*\)\s+0s\s+1\s+normal\s+both;\s*-ms-animation:\s*-amp-start\s+8s\s+steps\s*\(1\s*,\s*end\s*\)\s+0s\s+1\s+normal\s+both;\s*animation:\s*-amp-start\s+8s\s+steps\(1,\s*end\)\s+0s\s+1\s+normal\s+both;?\s*}\s*@-webkit-keyframes\s+-amp-start\s*{\s*from\s*{\s*visibility:\s*hidden;?\s*}\s*to\s*{\s*visibility:\s*visible;?\s*}\s*}\s*@-moz-keyframes\s+-amp-start\s*{\s*from\s*{\s*visibility:\s*hidden;?\s*}\s*to\s*{\s*visibility:\s*visible;?\s*}\s*}\s*@-ms-keyframes\s+-amp-start\s*{\s*from\s*{\s*visibility:\s*hidden;?\s*}\s*to\s*{\s*visibility:\s*visible;?\s*}\s*}\s*@-o-keyframes\s+-amp-start\s*{\s*from\s*{\s*visibility:\s*hidden;?\s*}\s*to\s*{\s*visibility:\s*visible;?\s*}\s*}\s*@keyframes\s+-amp-start\s*{\s*from\s*{\s*visibility:\s*hidden;?\s*}\s*to\s*{\s*visibility:\s*visible;?\s*}\s*}\s*',
                    'docCssBytes' => false,
                ],
                'htmlFormat' => ['AMP'],
                'enabledBy' => ['transformed'],
                'descriptiveName' => 'head > style[amp-boilerplate]',
            ]
        );
        $this->tags['head > style[amp4ads-boilerplate]'] = new Tag(
            [
                'tagName' => 'STYLE',
                'specName' => 'head > style[amp4ads-boilerplate]',
                'mandatory' => true,
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                    [
                        'name' => 'amp4ads-boilerplate',
                        'mandatory' => true,
                        'value' => [''],
                        'dispatchKey' => 'NAME_VALUE_PARENT_DISPATCH',
                    ],
                ],
                'attrLists' => ['nonce-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/a4a_spec/?format=ads#boilerplate',
                'cdata' => ['cdataRegex' => '\s*body\s*{\s*visibility:\s*hidden;?\s*}\s*', 'docCssBytes' => false],
                'htmlFormat' => ['AMP4ADS'],
                'descriptiveName' => 'head > style[amp4ads-boilerplate]',
            ]
        );
        $this->tags['head > style[amp4email-boilerplate]'] = new Tag(
            [
                'tagName' => 'STYLE',
                'specName' => 'head > style[amp4email-boilerplate]',
                'mandatory' => true,
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                    [
                        'name' => 'amp4email-boilerplate',
                        'mandatory' => true,
                        'value' => [''],
                        'dispatchKey' => 'NAME_VALUE_PARENT_DISPATCH',
                    ],
                ],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/email-spec/amp-email-format/?format=email#required-markup',
                'cdata' => ['cdataRegex' => '\s*body\s*{\s*visibility:\s*hidden;?\s*}\s*', 'docCssBytes' => false],
                'htmlFormat' => ['AMP4EMAIL'],
                'descriptiveName' => 'head > style[amp4email-boilerplate]',
            ]
        );
        $this->tags['HEADER'] = new Tag(
            [
                'tagName' => 'HEADER',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['HGROUP'] = new Tag(
            [
                'tagName' => 'HGROUP',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['HKERN'] = new Tag(
            [
                'tagName' => 'HKERN',
                'attrs' => [['name' => 'g1'], ['name' => 'g2'], ['name' => 'k'], ['name' => 'u1'], ['name' => 'u2']],
                'attrLists' => ['svg-core-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['HR'] = new Tag(
            [
                'tagName' => 'HR',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['HTML'] = new Tag(
            [
                'tagName' => 'HTML',
                'mandatory' => true,
                'unique' => true,
                'mandatoryParent' => '!DOCTYPE',
                'attrs' => [['name' => 'data-amp-autocomplete-opt-in', 'value' => ['false'], 'disallowedValueRegex' => 'false']],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#required-markup',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                'disabledBy' => ['transformed'],
            ]
        );
        $this->tags['html (transformed)'] = new Tag(
            [
                'tagName' => 'HTML',
                'specName' => 'html (transformed)',
                'mandatory' => true,
                'unique' => true,
                'mandatoryParent' => '!DOCTYPE',
                'attrs' => [['name' => 'i-amphtml-layout', 'value' => ['']], ['name' => 'i-amphtml-no-boilerplate', 'value' => ['']]],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#required-markup',
                'htmlFormat' => ['AMP'],
                'enabledBy' => ['transformed'],
            ]
        );
        $this->tags['html doctype'] = new Tag(
            [
                'tagName' => '!DOCTYPE',
                'specName' => 'html doctype',
                'mandatory' => true,
                'unique' => true,
                'mandatoryParent' => '$ROOT',
                'attrs' => [['name' => 'html', 'mandatory' => true, 'value' => ['']], ['name' => 'lang']],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#required-markup',
                'htmlFormat' => ['AMP', 'AMP4EMAIL'],
                'explicitAttrsOnly' => true,
                'descriptiveName' => 'html !doctype',
            ]
        );
        $this->tags['html doctype (AMP4ADS)'] = new Tag(
            [
                'tagName' => '!DOCTYPE',
                'specName' => 'html doctype (AMP4ADS)',
                'mandatory' => true,
                'unique' => true,
                'mandatoryParent' => '$ROOT',
                'attrs' => [['name' => 'html', 'mandatory' => true, 'value' => ['']]],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#required-markup',
                'htmlFormat' => ['AMP4ADS'],
                'descriptiveName' => 'html !doctype',
            ]
        );
        $this->tags['I'] = new Tag(
            [
                'tagName' => 'I',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['I-AMPHTML-SIZER-INTRINSIC'] = new Tag(
            [
                'tagName' => 'I-AMPHTML-SIZER',
                'specName' => 'I-AMPHTML-SIZER-INTRINSIC',
                'attrs' => [['name' => 'class', 'mandatory' => true, 'value' => ['i-amphtml-sizer'], 'dispatchKey' => 'NAME_DISPATCH']],
                'htmlFormat' => ['AMP'],
                'explicitAttrsOnly' => true,
                'enabledBy' => ['transformed'],
            ]
        );
        $this->tags['I-AMPHTML-SIZER-RESPONSIVE'] = new Tag(
            [
                'tagName' => 'I-AMPHTML-SIZER',
                'specName' => 'I-AMPHTML-SIZER-RESPONSIVE',
                'attrs' => [
                    [
                        'name' => 'style',
                        'mandatory' => true,
                        'disallowedValueRegex' => '!\s*important',
                        'dispatchKey' => 'NAME_DISPATCH',
                        'cssDeclaration' => [['name' => 'display', 'valueCasei' => ['block']], ['name' => 'padding-top']],
                    ],
                ],
                'htmlFormat' => ['AMP'],
                'explicitAttrsOnly' => true,
                'enabledBy' => ['transformed'],
            ]
        );
        $this->tags['IFRAME'] = new Tag(
            [
                'tagName' => 'IFRAME',
                'attrs' => [
                    ['name' => 'frameborder', 'value' => ['0', '1']],
                    ['name' => 'height'],
                    ['name' => 'referrerpolicy'],
                    ['name' => 'resizable', 'value' => ['']],
                    ['name' => 'sandbox'],
                    ['name' => 'scrolling', 'value' => ['auto', 'yes', 'no']],
                    [
                        'name' => 'src',
                        'disallowedValueRegex' => '__amp_source_origin',
                        'mandatoryOneof' => '[\'src\', \'srcdoc\']',
                        'valueUrl' => ['protocol' => ['data', 'https'], 'allowRelative' => false],
                    ],
                    ['name' => 'srcdoc', 'mandatoryOneof' => '[\'src\', \'srcdoc\']'],
                    ['name' => 'width'],
                ],
                'attrLists' => ['name-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-iframe/',
                'mandatoryAncestor' => 'NOSCRIPT',
                'mandatoryAncestorSuggestedAlternative' => 'AMP-IFRAME',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['IMAGE'] = new Tag(
            [
                'tagName' => 'IMAGE',
                'attrs' => [
                    ['name' => 'externalresourcesrequired'],
                    ['name' => 'height'],
                    ['name' => 'preserveaspectratio'],
                    ['name' => 'transform'],
                    ['name' => 'width'],
                    ['name' => 'x'],
                    ['name' => 'xlink:actuate'],
                    ['name' => 'xlink:arcrole'],
                    [
                        'name' => 'xlink:href',
                        'alternativeNames' => ['href'],
                        'disallowedValueRegex' => '(^|\s)data:image\/svg\+xml',
                        'valueUrl' => ['protocol' => ['data', 'http', 'https'], 'allowEmpty' => false],
                    ],
                    ['name' => 'xlink:role'],
                    ['name' => 'xlink:show'],
                    ['name' => 'xlink:title'],
                    ['name' => 'xlink:type'],
                    ['name' => 'y'],
                ],
                'attrLists' => ['svg-conditional-processing-attributes', 'svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['IMG-I-AMPHTML-INTRINSIC-SIZER'] = new Tag(
            [
                'tagName' => 'IMG',
                'specName' => 'IMG-I-AMPHTML-INTRINSIC-SIZER',
                'mandatoryParent' => 'I-AMPHTML-SIZER-INTRINSIC',
                'attrs' => [
                    ['name' => 'alt', 'mandatory' => true, 'value' => ['']],
                    ['name' => 'aria-hidden', 'mandatory' => true, 'value' => ['true']],
                    ['name' => 'class', 'mandatory' => true, 'value' => ['i-amphtml-intrinsic-sizer']],
                    ['name' => 'role', 'mandatory' => true, 'value' => ['presentation']],
                    [
                        'name' => 'src',
                        'mandatory' => true,
                        'valueRegex' => 'data:image\/svg\+xml;charset=utf-8,\s*<svg height="\d+(\.\d+)?" width="\d+(\.\d+)?" xmlns="http:\/\/www\.w3\.org\/2000\/svg" version="1\.1"\/>|data:image\/svg\+xml;charset=utf-8,\s*<svg height=\'\d+(\.\d+)?\' width=\'\d+(\.\d+)?\' xmlns=\'http:\/\/www\.w3\.org\/2000\/svg\' version=\'1\.1\'\/>|data:image\/svg\+xml;base64,[a-zA-Z0-9+\/=]+',
                    ],
                ],
                'htmlFormat' => ['AMP'],
                'enabledBy' => ['transformed'],
            ]
        );
        $this->tags['INPUT'] = new Tag(
            [
                'tagName' => 'INPUT',
                'attrs' => [
                    ['name' => 'no-verify', 'value' => [''], 'disabledBy' => ['amp4email']],
                    ['name' => 'type', 'disallowedValueRegex' => '(^|\s)(file|image|password|)(\s|$)'],
                    ['name' => '[type]', 'disabledBy' => ['amp4email']],
                ],
                'attrLists' => ['input-common-attr', 'name-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-form/',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['input [mask=date-dd-mm-yyyy]'] = new Tag(
            [
                'tagName' => 'INPUT',
                'specName' => 'input [mask=date-dd-mm-yyyy]',
                'attrs' => [['name' => 'mask', 'mandatory' => true, 'value' => ['date-dd-mm-yyyy'], 'dispatchKey' => 'NAME_VALUE_DISPATCH']],
                'attrLists' => ['amp-inputmask-common-attr', 'input-common-attr', 'name-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-inputmask/',
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-inputmask'],
            ]
        );
        $this->tags['input [mask=date-mm-dd-yyyy]'] = new Tag(
            [
                'tagName' => 'INPUT',
                'specName' => 'input [mask=date-mm-dd-yyyy]',
                'attrs' => [['name' => 'mask', 'mandatory' => true, 'value' => ['date-mm-dd-yyyy'], 'dispatchKey' => 'NAME_VALUE_DISPATCH']],
                'attrLists' => ['amp-inputmask-common-attr', 'input-common-attr', 'name-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-inputmask/',
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-inputmask'],
            ]
        );
        $this->tags['input [mask=date-mm-yy]'] = new Tag(
            [
                'tagName' => 'INPUT',
                'specName' => 'input [mask=date-mm-yy]',
                'attrs' => [['name' => 'mask', 'mandatory' => true, 'value' => ['date-mm-yy'], 'dispatchKey' => 'NAME_VALUE_DISPATCH']],
                'attrLists' => ['amp-inputmask-common-attr', 'input-common-attr', 'name-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-inputmask/',
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-inputmask'],
            ]
        );
        $this->tags['input [mask=date-yyyy-mm-dd]'] = new Tag(
            [
                'tagName' => 'INPUT',
                'specName' => 'input [mask=date-yyyy-mm-dd]',
                'attrs' => [['name' => 'mask', 'mandatory' => true, 'value' => ['date-yyyy-mm-dd'], 'dispatchKey' => 'NAME_VALUE_DISPATCH']],
                'attrLists' => ['amp-inputmask-common-attr', 'input-common-attr', 'name-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-inputmask/',
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-inputmask'],
            ]
        );
        $this->tags['input [mask=payment-card]'] = new Tag(
            [
                'tagName' => 'INPUT',
                'specName' => 'input [mask=payment-card]',
                'attrs' => [['name' => 'mask', 'mandatory' => true, 'value' => ['payment-card'], 'dispatchKey' => 'NAME_VALUE_DISPATCH']],
                'attrLists' => ['amp-inputmask-common-attr', 'input-common-attr', 'name-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-inputmask/',
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-inputmask'],
            ]
        );
        $this->tags['input [mask] (custom mask)'] = new Tag(
            [
                'tagName' => 'INPUT',
                'specName' => 'input [mask] (custom mask)',
                'attrs' => [
                    [
                        'name' => 'mask',
                        'mandatory' => true,
                        'disallowedValueRegex' => '(payment-card|date-dd-mm-yyyy|date-mm-dd-yyyy|date-mm-yy|date-yyyy-mm-dd)',
                        'dispatchKey' => 'NAME_DISPATCH',
                    ],
                    ['name' => 'mask-trim-zeros', 'valueRegex' => '\d+'],
                    ['name' => '[type]'],
                ],
                'attrLists' => ['amp-inputmask-common-attr', 'input-common-attr', 'name-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-inputmask/',
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-inputmask'],
            ]
        );
        $this->tags['INPUT [type=file]'] = new Tag(
            [
                'tagName' => 'INPUT',
                'specName' => 'INPUT [type=file]',
                'attrs' => [
                    ['name' => 'no-verify', 'value' => [''], 'disabledBy' => ['amp4email']],
                    ['name' => 'type', 'mandatory' => true, 'dispatchKey' => 'NAME_VALUE_DISPATCH', 'valueCasei' => ['file']],
                    ['name' => '[type]', 'disabledBy' => ['amp4email']],
                ],
                'attrLists' => ['input-common-attr', 'name-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-form/',
                'mandatoryAncestor' => 'FORM [method=POST]',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['INPUT [type=password]'] = new Tag(
            [
                'tagName' => 'INPUT',
                'specName' => 'INPUT [type=password]',
                'attrs' => [
                    ['name' => 'type', 'mandatory' => true, 'dispatchKey' => 'NAME_VALUE_DISPATCH', 'valueCasei' => ['password']],
                    ['name' => '[type]', 'disabledBy' => ['amp4email']],
                ],
                'attrLists' => ['input-common-attr', 'name-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-form/',
                'mandatoryAncestor' => 'FORM [method=POST]',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['INS'] = new Tag(
            [
                'tagName' => 'INS',
                'attrs' => [['name' => 'datetime']],
                'attrLists' => ['cite-attr'],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['KBD'] = new Tag(
            [
                'tagName' => 'KBD',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['LABEL'] = new Tag(
            [
                'tagName' => 'LABEL',
                'attrs' => [['name' => 'for']],
                'specUrl' => 'https://amp.dev/documentation/components/amp-form/',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['LEGEND'] = new Tag(
            [
                'tagName' => 'LEGEND',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['LI'] = new Tag(
            [
                'tagName' => 'LI',
                'attrs' => [['name' => 'value', 'valueRegex' => '[0-9]*']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['LINE'] = new Tag(
            [
                'tagName' => 'LINE',
                'attrs' => [
                    ['name' => 'externalresourcesrequired'],
                    ['name' => 'sketch:type'],
                    ['name' => 'transform'],
                    ['name' => 'x1'],
                    ['name' => 'x2'],
                    ['name' => 'y1'],
                    ['name' => 'y2'],
                ],
                'attrLists' => ['svg-conditional-processing-attributes', 'svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['LINEARGRADIENT'] = new Tag(
            [
                'tagName' => 'LINEARGRADIENT',
                'attrs' => [
                    ['name' => 'externalresourcesrequired'],
                    ['name' => 'gradienttransform'],
                    ['name' => 'gradientunits'],
                    ['name' => 'spreadmethod'],
                    ['name' => 'x1'],
                    ['name' => 'x2'],
                    ['name' => 'y1'],
                    ['name' => 'y2'],
                ],
                'attrLists' => ['svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr', 'svg-xlink-attributes'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['lineargradient > stop'] = new Tag(
            [
                'tagName' => 'STOP',
                'specName' => 'lineargradient > stop',
                'attrs' => [['name' => 'offset'], ['name' => 'stop-color'], ['name' => 'stop-opacity']],
                'attrLists' => ['svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'LINEARGRADIENT',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['link itemprop='] = new Tag(
            [
                'tagName' => 'LINK',
                'specName' => 'link itemprop=',
                'attrs' => [['name' => 'href', 'mandatory' => true], ['name' => 'itemprop', 'mandatory' => true]],
                'attrLists' => ['common-link-attrs'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'descriptiveName' => 'link itemprop=',
            ]
        );
        $this->tags['link itemprop=sameAs'] = new Tag(
            [
                'tagName' => 'LINK',
                'specName' => 'link itemprop=sameAs',
                'attrs' => [
                    ['name' => 'href', 'mandatory' => true],
                    ['name' => 'itemprop', 'mandatory' => true, 'dispatchKey' => 'NAME_VALUE_DISPATCH', 'valueCasei' => ['sameas']],
                ],
                'attrLists' => ['common-link-attrs'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'descriptiveName' => 'link itemprop=sameAs',
            ]
        );
        $this->tags['link property='] = new Tag(
            [
                'tagName' => 'LINK',
                'specName' => 'link property=',
                'attrs' => [['name' => 'href', 'mandatory' => true], ['name' => 'property', 'mandatory' => true]],
                'attrLists' => ['common-link-attrs'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'descriptiveName' => 'link property=',
            ]
        );
        $this->tags['link rel='] = new Tag(
            [
                'tagName' => 'LINK',
                'specName' => 'link rel=',
                'attrs' => [
                    ['name' => 'href'],
                    [
                        'name' => 'rel',
                        'mandatory' => true,
                        'disallowedValueRegex' => '(^|\s)(canonical|components|import|manifest|preload|serviceworker|stylesheet|subresource)(\s|$)',
                    ],
                ],
                'attrLists' => ['common-link-attrs'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                'disallowedAncestor' => ['TEMPLATE'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['link rel=canonical'] = new Tag(
            [
                'tagName' => 'LINK',
                'specName' => 'link rel=canonical',
                'mandatory' => true,
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                    [
                        'name' => 'href',
                        'mandatory' => true,
                        'disallowedValueRegex' => '__amp_source_origin',
                        'valueUrl' => ['protocol' => ['http', 'https']],
                    ],
                    ['name' => 'rel', 'mandatory' => true, 'dispatchKey' => 'NAME_VALUE_DISPATCH', 'valueCasei' => ['canonical']],
                ],
                'attrLists' => ['common-link-attrs'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#required-markup',
                'htmlFormat' => ['AMP'],
                'descriptiveName' => 'link rel=canonical',
            ]
        );
        $this->tags['link rel=manifest'] = new Tag(
            [
                'tagName' => 'LINK',
                'specName' => 'link rel=manifest',
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                    [
                        'name' => 'href',
                        'mandatory' => true,
                        'disallowedValueRegex' => '__amp_source_origin',
                        'valueUrl' => ['protocol' => ['https']],
                    ],
                    ['name' => 'rel', 'mandatory' => true, 'dispatchKey' => 'NAME_VALUE_DISPATCH', 'valueCasei' => ['manifest']],
                ],
                'attrLists' => ['common-link-attrs'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'satisfies' => ['amp-app-banner data source'],
                'descriptiveName' => 'link rel=manifest',
            ]
        );
        $this->tags['link rel=preload'] = new Tag(
            [
                'tagName' => 'LINK',
                'specName' => 'link rel=preload',
                'attrs' => [
                    ['name' => 'as'],
                    ['name' => 'href'],
                    ['name' => 'rel', 'mandatory' => true, 'dispatchKey' => 'NAME_VALUE_DISPATCH', 'valueCasei' => ['preload']],
                    [
                        'name' => 'imagesrcset',
                        'disallowedValueRegex' => '__amp_source_origin',
                        'valueUrl' => ['protocol' => ['http', 'https']],
                    ],
                    ['name' => 'imagesizes'],
                ],
                'attrLists' => ['common-link-attrs'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                'disallowedAncestor' => ['TEMPLATE'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'descriptiveName' => 'link rel=preload',
            ]
        );
        $this->tags['link rel=stylesheet for fonts'] = new Tag(
            [
                'tagName' => 'LINK',
                'specName' => 'link rel=stylesheet for fonts',
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                    ['name' => 'async'],
                    ['name' => 'crossorigin'],
                    [
                        'name' => 'href',
                        'mandatory' => true,
                        'valueRegex' => 'https://cdn\.materialdesignicons\.com/([0-9]+\.?)+/css/materialdesignicons\.min\.css|https://cloud\.typography\.com/[0-9]*/[0-9]*/css/fonts\.css|https://fast\.fonts\.net/.*|https://fonts\.googleapis\.com/css2?\?.*|https://fonts\.googleapis\.com/icon\?.*|https://fonts\.googleapis\.com/earlyaccess/.*\.css|https://maxcdn\.bootstrapcdn\.com/font-awesome/([0-9]+\.?)+/css/font-awesome\.min\.css(\?.*)?|https://(use|pro)\.fontawesome\.com/releases/v([0-9]+\.?)+/css/[0-9a-zA-Z-]+\.css|https://(use|pro)\.fontawesome\.com/[0-9a-zA-Z-]+\.css|https://use\.typekit\.net/[\w\p{L}\p{N}_]+\.css',
                    ],
                    ['name' => 'integrity'],
                    ['name' => 'media'],
                    ['name' => 'rel', 'mandatory' => true, 'dispatchKey' => 'NAME_VALUE_DISPATCH', 'valueCasei' => ['stylesheet']],
                    ['name' => 'type', 'valueCasei' => ['text/css']],
                ],
                'attrLists' => ['nonce-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#custom-fonts',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'namedId' => 'LINK_FONT_STYLESHEET',
                'descriptiveName' => 'link rel=stylesheet for fonts',
            ]
        );
        $this->tags['LISTING'] = new Tag(
            [
                'tagName' => 'LISTING',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['MAIN'] = new Tag(
            [
                'tagName' => 'MAIN',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['MARK'] = new Tag(
            [
                'tagName' => 'MARK',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['MARKER'] = new Tag(
            [
                'tagName' => 'MARKER',
                'attrs' => [
                    ['name' => 'externalresourcesrequired'],
                    ['name' => 'markerheight'],
                    ['name' => 'markerunits'],
                    ['name' => 'markerwidth'],
                    ['name' => 'orient'],
                    ['name' => 'preserveaspectratio'],
                    ['name' => 'refx'],
                    ['name' => 'refy'],
                    ['name' => 'transform'],
                    ['name' => 'viewbox'],
                ],
                'attrLists' => ['svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['MASK'] = new Tag(
            [
                'tagName' => 'MASK',
                'attrs' => [
                    ['name' => 'externalresourcesrequired'],
                    ['name' => 'height'],
                    ['name' => 'maskcontentunits'],
                    ['name' => 'maskunits'],
                    ['name' => 'width'],
                    ['name' => 'x'],
                    ['name' => 'y'],
                ],
                'attrLists' => ['svg-conditional-processing-attributes', 'svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['meta charset=utf-8'] = new Tag(
            [
                'tagName' => 'META',
                'specName' => 'meta charset=utf-8',
                'mandatory' => true,
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [['name' => 'charset', 'mandatory' => true, 'dispatchKey' => 'NAME_DISPATCH', 'valueCasei' => ['utf-8']]],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#required-markup',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                'descriptiveName' => 'meta charset=utf-8',
            ]
        );
        $this->tags['METADATA'] = new Tag(
            [
                'tagName' => 'METADATA',
                'attrLists' => ['svg-core-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['meta http-equiv=content-language'] = new Tag(
            [
                'tagName' => 'META',
                'specName' => 'meta http-equiv=content-language',
                'attrs' => [
                    ['name' => 'content', 'mandatory' => true],
                    [
                        'name' => 'http-equiv',
                        'mandatory' => true,
                        'dispatchKey' => 'NAME_VALUE_DISPATCH',
                        'valueCasei' => ['content-language'],
                    ],
                ],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                'mandatoryAncestor' => 'HEAD',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['meta http-equiv=Content-Script-Type'] = new Tag(
            [
                'tagName' => 'META',
                'specName' => 'meta http-equiv=Content-Script-Type',
                'attrs' => [
                    ['name' => 'content', 'mandatory' => true, 'valueCasei' => ['text/javascript']],
                    [
                        'name' => 'http-equiv',
                        'mandatory' => true,
                        'dispatchKey' => 'NAME_VALUE_DISPATCH',
                        'valueCasei' => ['content-script-type'],
                    ],
                ],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                'mandatoryAncestor' => 'HEAD',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['meta http-equiv=Content-Style-Type'] = new Tag(
            [
                'tagName' => 'META',
                'specName' => 'meta http-equiv=Content-Style-Type',
                'attrs' => [
                    ['name' => 'content', 'mandatory' => true, 'valueCasei' => ['text/css']],
                    [
                        'name' => 'http-equiv',
                        'mandatory' => true,
                        'dispatchKey' => 'NAME_VALUE_DISPATCH',
                        'valueCasei' => ['content-style-type'],
                    ],
                ],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                'mandatoryAncestor' => 'HEAD',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['meta http-equiv=Content-Type'] = new Tag(
            [
                'tagName' => 'META',
                'specName' => 'meta http-equiv=Content-Type',
                'attrs' => [
                    ['name' => 'content', 'mandatory' => true, 'valueCasei' => ['text/html; charset=utf-8']],
                    [
                        'name' => 'http-equiv',
                        'mandatory' => true,
                        'dispatchKey' => 'NAME_VALUE_DISPATCH',
                        'valueCasei' => ['content-type'],
                    ],
                ],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                'mandatoryAncestor' => 'HEAD',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['meta http-equiv=imagetoolbar'] = new Tag(
            [
                'tagName' => 'META',
                'specName' => 'meta http-equiv=imagetoolbar',
                'attrs' => [
                    ['name' => 'content', 'mandatory' => true],
                    [
                        'name' => 'http-equiv',
                        'mandatory' => true,
                        'dispatchKey' => 'NAME_VALUE_DISPATCH',
                        'valueCasei' => ['imagetoolbar'],
                    ],
                ],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                'mandatoryAncestor' => 'HEAD',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['meta http-equiv=origin-trial'] = new Tag(
            [
                'tagName' => 'META',
                'specName' => 'meta http-equiv=origin-trial',
                'attrs' => [
                    ['name' => 'content', 'mandatory' => true],
                    [
                        'name' => 'http-equiv',
                        'mandatory' => true,
                        'dispatchKey' => 'NAME_VALUE_DISPATCH',
                        'valueCasei' => ['origin-trial'],
                    ],
                ],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                'mandatoryAncestor' => 'HEAD',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['meta http-equiv=pics-label'] = new Tag(
            [
                'tagName' => 'META',
                'specName' => 'meta http-equiv=pics-label',
                'attrs' => [
                    ['name' => 'content', 'mandatory' => true],
                    [
                        'name' => 'http-equiv',
                        'mandatory' => true,
                        'dispatchKey' => 'NAME_VALUE_DISPATCH',
                        'valueCasei' => ['pics-label'],
                    ],
                ],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                'mandatoryAncestor' => 'HEAD',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['meta http-equiv=resource-type'] = new Tag(
            [
                'tagName' => 'META',
                'specName' => 'meta http-equiv=resource-type',
                'attrs' => [
                    ['name' => 'content', 'mandatory' => true],
                    [
                        'name' => 'http-equiv',
                        'mandatory' => true,
                        'dispatchKey' => 'NAME_VALUE_DISPATCH',
                        'valueCasei' => ['resource-type'],
                    ],
                ],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                'mandatoryAncestor' => 'HEAD',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['meta http-equiv=x-dns-prefetch-control'] = new Tag(
            [
                'tagName' => 'META',
                'specName' => 'meta http-equiv=x-dns-prefetch-control',
                'attrs' => [
                    ['name' => 'content', 'mandatory' => true, 'valueCasei' => ['off', 'on']],
                    [
                        'name' => 'http-equiv',
                        'mandatory' => true,
                        'dispatchKey' => 'NAME_VALUE_DISPATCH',
                        'valueCasei' => ['x-dns-prefetch-control'],
                    ],
                ],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                'mandatoryAncestor' => 'HEAD',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['meta http-equiv=X-UA-Compatible'] = new Tag(
            [
                'tagName' => 'META',
                'specName' => 'meta http-equiv=X-UA-Compatible',
                'attrs' => [
                    [
                        'name' => 'content',
                        'mandatory' => true,
                        'valueProperties' => [
                            'properties' => [['name' => 'ie', 'value' => 'edge'], ['name' => 'chrome', 'value' => '1']],
                        ],
                    ],
                    [
                        'name' => 'http-equiv',
                        'mandatory' => true,
                        'dispatchKey' => 'NAME_VALUE_DISPATCH',
                        'valueCasei' => ['x-ua-compatible'],
                    ],
                ],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                'mandatoryAncestor' => 'HEAD',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'descriptiveName' => 'meta http-equiv=X-UA-Compatible',
            ]
        );
        $this->tags['meta name=amp-3p-iframe-src'] = new Tag(
            [
                'tagName' => 'META',
                'specName' => 'meta name=amp-3p-iframe-src',
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                    ['name' => 'content', 'mandatory' => true, 'valueUrl' => ['protocol' => ['https']]],
                    [
                        'name' => 'name',
                        'mandatory' => true,
                        'dispatchKey' => 'NAME_VALUE_DISPATCH',
                        'valueCasei' => ['amp-3p-iframe-src'],
                    ],
                ],
                'specUrl' => 'https://amp.dev/documentation/components/amp-ad/',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['meta name=amp-ad-doubleclick-sra'] = new Tag(
            [
                'tagName' => 'META',
                'specName' => 'meta name=amp-ad-doubleclick-sra',
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                    [
                        'name' => 'name',
                        'mandatory' => true,
                        'dispatchKey' => 'NAME_VALUE_DISPATCH',
                        'valueCasei' => ['amp-ad-doubleclick-sra'],
                    ],
                ],
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['meta name=amp-ad-enable-refresh'] = new Tag(
            [
                'tagName' => 'META',
                'specName' => 'meta name=amp-ad-enable-refresh',
                'attrs' => [
                    ['name' => 'content', 'mandatory' => true],
                    [
                        'name' => 'name',
                        'mandatory' => true,
                        'dispatchKey' => 'NAME_VALUE_DISPATCH',
                        'valueCasei' => ['amp-ad-enable-refresh'],
                    ],
                ],
                'mandatoryAncestor' => 'HEAD',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['meta name=amp-consent-blocking'] = new Tag(
            [
                'tagName' => 'META',
                'specName' => 'meta name=amp-consent-blocking',
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                    ['name' => 'content', 'mandatory' => true],
                    [
                        'name' => 'name',
                        'mandatory' => true,
                        'dispatchKey' => 'NAME_VALUE_DISPATCH',
                        'valueCasei' => ['amp-consent-blocking'],
                    ],
                ],
                'htmlFormat' => ['AMP'],
                'satisfies' => ['meta name=amp-consent-blocking'],
            ]
        );
        $this->tags['meta name=amp-cta-landing-page-type'] = new Tag(
            [
                'tagName' => 'META',
                'specName' => 'meta name=amp-cta-landing-page-type',
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                    ['name' => 'content', 'mandatory' => true, 'valueCasei' => ['amp', 'nonamp', 'story']],
                    [
                        'name' => 'name',
                        'mandatory' => true,
                        'dispatchKey' => 'NAME_VALUE_DISPATCH',
                        'valueCasei' => ['amp-cta-landing-page-type'],
                    ],
                ],
                'htmlFormat' => ['AMP4ADS'],
            ]
        );
        $this->tags['meta name=amp-cta-type'] = new Tag(
            [
                'tagName' => 'META',
                'specName' => 'meta name=amp-cta-type',
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                    ['name' => 'content', 'mandatory' => true],
                    ['name' => 'name', 'mandatory' => true, 'dispatchKey' => 'NAME_VALUE_DISPATCH', 'valueCasei' => ['amp-cta-type']],
                ],
                'htmlFormat' => ['AMP4ADS'],
            ]
        );
        $this->tags['meta name=amp-cta-url'] = new Tag(
            [
                'tagName' => 'META',
                'specName' => 'meta name=amp-cta-url',
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                    ['name' => 'content', 'mandatory' => true],
                    ['name' => 'name', 'mandatory' => true, 'dispatchKey' => 'NAME_VALUE_DISPATCH', 'valueCasei' => ['amp-cta-url']],
                ],
                'htmlFormat' => ['AMP4ADS'],
            ]
        );
        $this->tags['meta name=amp-experiment-token'] = new Tag(
            [
                'tagName' => 'META',
                'specName' => 'meta name=amp-experiment-token',
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                    ['name' => 'content', 'mandatory' => true],
                    [
                        'name' => 'name',
                        'mandatory' => true,
                        'dispatchKey' => 'NAME_VALUE_DISPATCH',
                        'valueCasei' => ['amp-experiment-token'],
                    ],
                ],
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['meta name=amp-experiments-opt-in'] = new Tag(
            [
                'tagName' => 'META',
                'specName' => 'meta name=amp-experiments-opt-in',
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                    ['name' => 'content', 'mandatory' => true],
                    [
                        'name' => 'name',
                        'mandatory' => true,
                        'dispatchKey' => 'NAME_VALUE_DISPATCH',
                        'valueCasei' => ['amp-experiments-opt-in'],
                    ],
                ],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['meta name=amp-google-clientid-id-api'] = new Tag(
            [
                'tagName' => 'META',
                'specName' => 'meta name=amp-google-clientid-id-api',
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                    ['name' => 'content', 'mandatory' => true],
                    [
                        'name' => 'name',
                        'mandatory' => true,
                        'dispatchKey' => 'NAME_VALUE_DISPATCH',
                        'valueCasei' => ['amp-google-client-id-api'],
                    ],
                ],
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['meta name=amp-link-variable-allowed-origin'] = new Tag(
            [
                'tagName' => 'META',
                'specName' => 'meta name=amp-link-variable-allowed-origin',
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                    ['name' => 'content', 'mandatory' => true],
                    [
                        'name' => 'name',
                        'mandatory' => true,
                        'dispatchKey' => 'NAME_VALUE_DISPATCH',
                        'valueCasei' => ['amp-link-variable-allowed-origin'],
                    ],
                ],
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['meta name=amp-list-load-more'] = new Tag(
            [
                'tagName' => 'META',
                'specName' => 'meta name=amp-list-load-more',
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                    ['name' => 'content', 'mandatory' => true],
                    [
                        'name' => 'name',
                        'mandatory' => true,
                        'dispatchKey' => 'NAME_VALUE_DISPATCH',
                        'valueCasei' => ['amp-list-load-more'],
                    ],
                ],
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['meta name=amp-recaptcha-input'] = new Tag(
            [
                'tagName' => 'META',
                'specName' => 'meta name=amp-recaptcha-input',
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                    ['name' => 'content', 'mandatory' => true],
                    [
                        'name' => 'name',
                        'mandatory' => true,
                        'dispatchKey' => 'NAME_VALUE_DISPATCH',
                        'valueCasei' => ['amp-recaptcha-input'],
                    ],
                ],
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['meta name=amp-script-src'] = new Tag(
            [
                'tagName' => 'META',
                'specName' => 'meta name=amp-script-src',
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                    ['name' => 'content', 'mandatory' => true],
                    ['name' => 'name', 'mandatory' => true, 'dispatchKey' => 'NAME_VALUE_DISPATCH', 'valueCasei' => ['amp-script-src']],
                ],
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['meta name=amp-story-generator-name'] = new Tag(
            [
                'tagName' => 'META',
                'specName' => 'meta name=amp-story-generator-name',
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                    ['name' => 'content', 'mandatory' => true],
                    ['name' => 'name', 'mandatory' => true, 'valueCasei' => ['amp-story-generator-name']],
                ],
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['meta name=amp-story-generator-version'] = new Tag(
            [
                'tagName' => 'META',
                'specName' => 'meta name=amp-story-generator-version',
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                    ['name' => 'content', 'mandatory' => true],
                    ['name' => 'name', 'mandatory' => true, 'valueCasei' => ['amp-story-generator-version']],
                ],
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['meta name=amp-to-amp-navigation'] = new Tag(
            [
                'tagName' => 'META',
                'specName' => 'meta name=amp-to-amp-navigation',
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                    ['name' => 'content', 'mandatory' => true],
                    [
                        'name' => 'name',
                        'mandatory' => true,
                        'dispatchKey' => 'NAME_VALUE_DISPATCH',
                        'valueCasei' => ['amp-to-amp-navigation'],
                    ],
                ],
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['meta name=amp4ads-id'] = new Tag(
            [
                'tagName' => 'META',
                'specName' => 'meta name=amp4ads-id',
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                    ['name' => 'content', 'mandatory' => true],
                    ['name' => 'name', 'mandatory' => true, 'dispatchKey' => 'NAME_VALUE_DISPATCH', 'valueCasei' => ['amp4ads-id']],
                ],
                'htmlFormat' => ['AMP4ADS'],
            ]
        );
        $this->tags['meta name=amp4ads-vars-*'] = new Tag(
            [
                'tagName' => 'META',
                'specName' => 'meta name=amp4ads-vars-*',
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                    ['name' => 'content', 'mandatory' => true],
                    ['name' => 'name', 'mandatory' => true, 'valueRegex' => 'amp4ads-vars-.+'],
                ],
                'htmlFormat' => ['AMP4ADS'],
            ]
        );
        $this->tags['meta name= and content='] = new Tag(
            [
                'tagName' => 'META',
                'specName' => 'meta name= and content=',
                'attrs' => [
                    ['name' => 'content'],
                    ['name' => 'itemprop'],
                    [
                        'name' => 'name',
                        'disallowedValueRegex' => '(^|\s)(amp-.*|amp4ads-.*|apple-itunes-app|content-disposition|revisit-after|viewport)(\s|$)',
                    ],
                    ['name' => 'property'],
                    ['name' => 'scheme'],
                ],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['meta name=apple-itunes-app'] = new Tag(
            [
                'tagName' => 'META',
                'specName' => 'meta name=apple-itunes-app',
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                    ['name' => 'content', 'mandatory' => true, 'valueRegex' => '.*app-id=.*'],
                    [
                        'name' => 'name',
                        'mandatory' => true,
                        'dispatchKey' => 'NAME_VALUE_DISPATCH',
                        'valueCasei' => ['apple-itunes-app'],
                    ],
                ],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'satisfies' => ['amp-app-banner data source'],
            ]
        );
        $this->tags['meta name=viewport'] = new Tag(
            [
                'tagName' => 'META',
                'specName' => 'meta name=viewport',
                'mandatory' => true,
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                    [
                        'name' => 'content',
                        'mandatory' => true,
                        'valueProperties' => [
                            'properties' => [
                                ['name' => 'width', 'mandatory' => true, 'value' => 'device-width'],
                                ['name' => 'height'],
                                ['name' => 'initial-scale'],
                                ['name' => 'minimum-scale'],
                                ['name' => 'maximum-scale'],
                                ['name' => 'shrink-to-fit'],
                                ['name' => 'user-scalable'],
                                ['name' => 'viewport-fit'],
                            ],
                        ],
                    ],
                    ['name' => 'name', 'mandatory' => true, 'value' => ['viewport'], 'dispatchKey' => 'NAME_VALUE_DISPATCH'],
                ],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#required-markup',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'descriptiveName' => 'meta name=viewport',
            ]
        );
        $this->tags['METER'] = new Tag(
            [
                'tagName' => 'METER',
                'attrs' => [
                    ['name' => 'high'],
                    ['name' => 'low'],
                    ['name' => 'max'],
                    ['name' => 'min'],
                    ['name' => 'optimum'],
                    ['name' => 'value'],
                ],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['MULTICOL'] = new Tag(
            [
                'tagName' => 'MULTICOL',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['NAV'] = new Tag(
            [
                'tagName' => 'NAV',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['NEXTID'] = new Tag(
            [
                'tagName' => 'NEXTID',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['NOBR'] = new Tag(
            [
                'tagName' => 'NOBR',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['NOSCRIPT'] = new Tag(
            [
                'tagName' => 'NOSCRIPT',
                'disallowedAncestor' => ['NOSCRIPT'],
                'mandatoryAncestor' => 'BODY',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['noscript > img'] = new Tag(
            [
                'tagName' => 'IMG',
                'specName' => 'noscript > img',
                'attrs' => [
                    ['name' => 'alt'],
                    ['name' => 'attribution'],
                    ['name' => 'border'],
                    ['name' => 'decoding', 'value' => ['async', 'auto', 'sync']],
                    ['name' => 'height'],
                    ['name' => 'importance'],
                    ['name' => 'ismap'],
                    ['name' => 'intrinsicsize'],
                    ['name' => 'loading'],
                    [
                        'name' => 'longdesc',
                        'disallowedValueRegex' => '__amp_source_origin',
                        'valueUrl' => ['protocol' => ['http', 'https']],
                    ],
                    ['name' => 'sizes'],
                    ['name' => 'width'],
                ],
                'attrLists' => ['mandatory-src-or-srcset'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-img/',
                'mandatoryAncestor' => 'NOSCRIPT',
                'mandatoryAncestorSuggestedAlternative' => 'AMP-IMG',
                'htmlFormat' => ['AMP'],
                'descriptiveName' => 'img',
            ]
        );
        $this->tags['noscript > style[amp-boilerplate]'] = new Tag(
            [
                'tagName' => 'STYLE',
                'specName' => 'noscript > style[amp-boilerplate]',
                'mandatory' => true,
                'unique' => true,
                'mandatoryParent' => 'NOSCRIPT',
                'attrs' => [['name' => 'amp-boilerplate', 'mandatory' => true, 'value' => [''], 'dispatchKey' => 'NAME_VALUE_PARENT_DISPATCH']],
                'attrLists' => ['nonce-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amp-boilerplate/?format=websites',
                'cdata' => [
                    'cdataRegex' => '\s*body\s*{\s*-webkit-animation:\s*none;\s*-moz-animation:\s*none;\s*-ms-animation:\s*none;\s*animation:\s*none;?\s*}\s*',
                    'docCssBytes' => false,
                ],
                'mandatoryAncestor' => 'HEAD',
                'htmlFormat' => ['AMP'],
                'disabledBy' => ['transformed'],
                'descriptiveName' => 'noscript > style[amp-boilerplate]',
            ]
        );
        $this->tags['noscript > style[amp-boilerplate] (transformed)'] = new Tag(
            [
                'tagName' => 'STYLE',
                'specName' => 'noscript > style[amp-boilerplate] (transformed)',
                'unique' => true,
                'mandatoryParent' => 'NOSCRIPT',
                'attrs' => [['name' => 'amp-boilerplate', 'mandatory' => true, 'value' => [''], 'dispatchKey' => 'NAME_VALUE_PARENT_DISPATCH']],
                'attrLists' => ['nonce-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amp-boilerplate/?format=websites',
                'cdata' => [
                    'cdataRegex' => '\s*body\s*{\s*-webkit-animation:\s*none;\s*-moz-animation:\s*none;\s*-ms-animation:\s*none;\s*animation:\s*none;?\s*}\s*',
                    'docCssBytes' => false,
                ],
                'mandatoryAncestor' => 'HEAD',
                'htmlFormat' => ['AMP'],
                'enabledBy' => ['transformed'],
                'descriptiveName' => 'noscript > style[amp-boilerplate]',
            ]
        );
        $this->tags['noscript enclosure for boilerplate'] = new Tag(
            [
                'tagName' => 'NOSCRIPT',
                'specName' => 'noscript enclosure for boilerplate',
                'mandatory' => true,
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amp-boilerplate/?format=websites',
                'htmlFormat' => ['AMP'],
                'disabledBy' => ['transformed'],
                'descriptiveName' => 'noscript enclosure for boilerplate',
            ]
        );
        $this->tags['noscript enclosure for boilerplate (transformed)'] = new Tag(
            [
                'tagName' => 'NOSCRIPT',
                'specName' => 'noscript enclosure for boilerplate (transformed)',
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amp-boilerplate/?format=websites',
                'htmlFormat' => ['AMP'],
                'enabledBy' => ['transformed'],
                'descriptiveName' => 'noscript enclosure for boilerplate',
            ]
        );
        $this->tags['O:P'] = new Tag(
            [
                'tagName' => 'O:P',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['OL'] = new Tag(
            [
                'tagName' => 'OL',
                'attrs' => [
                    ['name' => 'reversed', 'value' => ['']],
                    ['name' => 'start', 'valueRegex' => '[0-9]*'],
                    ['name' => 'type', 'valueRegex' => '[1AaIi]'],
                ],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['OPTGROUP'] = new Tag(
            [
                'tagName' => 'OPTGROUP',
                'mandatoryParent' => 'SELECT',
                'attrs' => [['name' => 'disabled'], ['name' => 'label'], ['name' => '[disabled]'], ['name' => '[label]']],
                'specUrl' => 'https://amp.dev/documentation/components/amp-form/',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['OPTION'] = new Tag(
            [
                'tagName' => 'OPTION',
                'attrs' => [
                    ['name' => 'disabled'],
                    ['name' => 'label'],
                    ['name' => 'selected'],
                    ['name' => 'value'],
                    ['name' => '[disabled]'],
                    ['name' => '[label]'],
                    ['name' => '[selected]'],
                    ['name' => '[value]'],
                ],
                'specUrl' => 'https://amp.dev/documentation/components/amp-form/',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['OUTPUT'] = new Tag(
            [
                'tagName' => 'OUTPUT',
                'attrs' => [['name' => 'for'], ['name' => 'form']],
                'attrLists' => ['name-attr'],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['P'] = new Tag(
            [
                'tagName' => 'P',
                'attrs' => [['name' => 'align']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['PATH'] = new Tag(
            [
                'tagName' => 'PATH',
                'attrs' => [
                    ['name' => 'd'],
                    ['name' => 'externalresourcesrequired'],
                    ['name' => 'pathlength'],
                    ['name' => 'sketch:type'],
                    ['name' => 'transform'],
                ],
                'attrLists' => ['svg-conditional-processing-attributes', 'svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['PATTERN'] = new Tag(
            [
                'tagName' => 'PATTERN',
                'attrs' => [
                    ['name' => 'externalresourcesrequired'],
                    ['name' => 'height'],
                    ['name' => 'patterncontentunits'],
                    ['name' => 'patterntransform'],
                    ['name' => 'patternunits'],
                    ['name' => 'preserveaspectratio'],
                    ['name' => 'viewbox'],
                    ['name' => 'width'],
                    ['name' => 'x'],
                    ['name' => 'y'],
                ],
                'attrLists' => [
                    'svg-conditional-processing-attributes',
                    'svg-core-attributes',
                    'svg-presentation-attributes',
                    'svg-style-attr',
                    'svg-xlink-attributes',
                ],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['PICTURE'] = new Tag(
            [
                'tagName' => 'PICTURE',
                'mandatoryParent' => 'NOSCRIPT',
                'specUrl' => 'https://amp.dev/documentation/components/amp-img/',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['picture > source'] = new Tag(
            [
                'tagName' => 'SOURCE',
                'specName' => 'picture > source',
                'mandatoryParent' => 'PICTURE',
                'attrs' => [
                    ['name' => 'media'],
                    ['name' => 'sizes'],
                    [
                        'name' => 'srcset',
                        'disallowedValueRegex' => '__amp_source_origin',
                        'valueUrl' => ['protocol' => ['data', 'http', 'https'], 'allowRelative' => true],
                    ],
                    ['name' => 'type'],
                ],
                'specUrl' => 'https://amp.dev/documentation/components/amp-img/',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['POLYGON'] = new Tag(
            [
                'tagName' => 'POLYGON',
                'attrs' => [['name' => 'externalresourcesrequired'], ['name' => 'points'], ['name' => 'sketch:type'], ['name' => 'transform']],
                'attrLists' => ['svg-conditional-processing-attributes', 'svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['POLYLINE'] = new Tag(
            [
                'tagName' => 'POLYLINE',
                'attrs' => [['name' => 'externalresourcesrequired'], ['name' => 'points'], ['name' => 'sketch:type'], ['name' => 'transform']],
                'attrLists' => ['svg-conditional-processing-attributes', 'svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['PRE'] = new Tag(
            [
                'tagName' => 'PRE',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['PROGRESS'] = new Tag(
            [
                'tagName' => 'PROGRESS',
                'attrs' => [['name' => 'max'], ['name' => 'value']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['Q'] = new Tag(
            [
                'tagName' => 'Q',
                'attrLists' => ['cite-attr'],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['RADIALGRADIENT'] = new Tag(
            [
                'tagName' => 'RADIALGRADIENT',
                'attrs' => [
                    ['name' => 'cx'],
                    ['name' => 'cy'],
                    ['name' => 'externalresourcesrequired'],
                    ['name' => 'fr'],
                    ['name' => 'fx'],
                    ['name' => 'fy'],
                    ['name' => 'gradienttransform'],
                    ['name' => 'gradientunits'],
                    ['name' => 'r'],
                    ['name' => 'spreadmethod'],
                ],
                'attrLists' => ['svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr', 'svg-xlink-attributes'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['radialgradient > stop'] = new Tag(
            [
                'tagName' => 'STOP',
                'specName' => 'radialgradient > stop',
                'attrs' => [['name' => 'offset'], ['name' => 'stop-color'], ['name' => 'stop-opacity']],
                'attrLists' => ['svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'RADIALGRADIENT',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['RB'] = new Tag(
            [
                'tagName' => 'RB',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['RECT'] = new Tag(
            [
                'tagName' => 'RECT',
                'attrs' => [
                    ['name' => 'externalresourcesrequired'],
                    ['name' => 'height'],
                    ['name' => 'rx'],
                    ['name' => 'ry'],
                    ['name' => 'sketch:type'],
                    ['name' => 'transform'],
                    ['name' => 'width'],
                    ['name' => 'x'],
                    ['name' => 'y'],
                ],
                'attrLists' => ['svg-conditional-processing-attributes', 'svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['RP'] = new Tag(
            [
                'tagName' => 'RP',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['RT'] = new Tag(
            [
                'tagName' => 'RT',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['RTC'] = new Tag(
            [
                'tagName' => 'RTC',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['RUBY'] = new Tag(
            [
                'tagName' => 'RUBY',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['S'] = new Tag(
            [
                'tagName' => 'S',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['SAMP'] = new Tag(
            [
                'tagName' => 'SAMP',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['SCRIPT'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-3d-gltf', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (2)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-3q-player', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (3)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-access-laterpay', 'version' => ['0.1', '0.2', 'latest'], 'requiresUsage' => 'NONE'],
                'requiresExtension' => ['amp-access'],
            ]
        );
        $this->tags['SCRIPT (4)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-access-poool', 'version' => ['0.1', 'latest'], 'requiresUsage' => 'NONE'],
                'requiresExtension' => ['amp-access'],
            ]
        );
        $this->tags['SCRIPT (5)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-access-scroll', 'version' => ['0.1', 'latest'], 'requiresUsage' => 'NONE'],
                'requiresExtension' => ['amp-access'],
            ]
        );
        $this->tags['SCRIPT (6)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                    'name' => 'amp-access',
                    'version' => ['0.1', 'latest'],
                    'deprecatedAllowDuplicates' => true,
                    'requiresUsage' => 'EXEMPTED',
                ],
            ]
        );
        $this->tags['SCRIPT (7)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'extensionSpec' => [
                    'name' => 'amp-accordion',
                    'version' => ['0.1', 'latest'],
                    'deprecatedAllowDuplicates' => true,
                    'requiresUsage' => 'EXEMPTED',
                ],
            ]
        );
        $this->tags['SCRIPT (8)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-action-macro', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (9)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-ad-custom', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (10)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP4ADS'],
                'extensionSpec' => ['name' => 'amp-ad-exit', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (11)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-addthis', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (12)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'extensionSpec' => [
                    'name' => 'amp-analytics',
                    'version' => ['0.1', 'latest'],
                    'deprecatedAllowDuplicates' => true,
                    'requiresUsage' => 'EXEMPTED',
                ],
            ]
        );
        $this->tags['SCRIPT (13)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'extensionSpec' => [
                    'name' => 'amp-anim',
                    'version' => ['0.1', 'latest'],
                    'deprecatedAllowDuplicates' => true,
                    'requiresUsage' => 'EXEMPTED',
                ],
            ]
        );
        $this->tags['SCRIPT (14)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'extensionSpec' => ['name' => 'amp-animation', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (15)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                    'name' => 'amp-apester-media',
                    'version' => ['0.1', 'latest'],
                    'deprecatedAllowDuplicates' => true,
                    'requiresUsage' => 'EXEMPTED',
                ],
            ]
        );
        $this->tags['SCRIPT (16)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-app-banner', 'version' => ['0.1', 'latest'], 'deprecatedAllowDuplicates' => true],
            ]
        );
        $this->tags['SCRIPT (17)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'extensionSpec' => [
                    'name' => 'amp-audio',
                    'version' => ['0.1', 'latest'],
                    'deprecatedAllowDuplicates' => true,
                    'requiresUsage' => 'EXEMPTED',
                ],
            ]
        );
        $this->tags['SCRIPT (18)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-auto-ads', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (19)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-autocomplete', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (20)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-base-carousel', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (21)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-beopinion', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (22)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'extensionSpec' => ['name' => 'amp-bind', 'version' => ['0.1', 'latest'], 'requiresUsage' => 'NONE'],
            ]
        );
        $this->tags['SCRIPT (23)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-bodymovin-animation', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (24)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                    'name' => 'amp-brid-player',
                    'version' => ['0.1', 'latest'],
                    'deprecatedAllowDuplicates' => true,
                    'requiresUsage' => 'EXEMPTED',
                ],
            ]
        );
        $this->tags['SCRIPT (25)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                    'name' => 'amp-brightcove',
                    'version' => ['0.1', 'latest'],
                    'deprecatedAllowDuplicates' => true,
                    'requiresUsage' => 'EXEMPTED',
                ],
            ]
        );
        $this->tags['SCRIPT (26)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-byside-content', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (27)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-call-tracking', 'version' => ['0.1', 'latest'], 'requiresUsage' => 'EXEMPTED'],
            ]
        );
        $this->tags['SCRIPT (28)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'extensionSpec' => [
                    'name' => 'amp-carousel',
                    'version' => ['0.1', '0.2', 'latest'],
                    'deprecatedAllowDuplicates' => true,
                    'requiresUsage' => 'EXEMPTED',
                ],
            ]
        );
        $this->tags['SCRIPT (29)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-connatix-player', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (30)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-consent', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (31)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                    'name' => 'amp-dailymotion',
                    'version' => ['0.1', 'latest'],
                    'deprecatedAllowDuplicates' => true,
                    'requiresUsage' => 'EXEMPTED',
                ],
            ]
        );
        $this->tags['SCRIPT (32)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-date-countdown', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (33)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-date-display', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (34)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-date-picker', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (35)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-delight-player', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (36)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                    'name' => 'amp-dynamic-css-classes',
                    'version' => ['0.1', 'latest'],
                    'deprecatedAllowDuplicates' => true,
                    'requiresUsage' => 'NONE',
                ],
            ]
        );
        $this->tags['SCRIPT (37)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-embedly-card', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (38)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                    'name' => 'amp-experiment',
                    'version' => ['0.1', '1.0', 'latest'],
                    'deprecatedAllowDuplicates' => true,
                    'requiresUsage' => 'EXEMPTED',
                ],
            ]
        );
        $this->tags['SCRIPT (39)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-facebook-comments', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (40)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-facebook-like', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (41)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-facebook-page', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (42)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                    'name' => 'amp-facebook',
                    'version' => ['0.1', 'latest'],
                    'deprecatedAllowDuplicates' => true,
                    'requiresUsage' => 'EXEMPTED',
                ],
            ]
        );
        $this->tags['SCRIPT (43)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'extensionSpec' => [
                    'name' => 'amp-fit-text',
                    'version' => ['0.1', 'latest'],
                    'deprecatedAllowDuplicates' => true,
                    'requiresUsage' => 'EXEMPTED',
                ],
            ]
        );
        $this->tags['SCRIPT (44)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'extensionSpec' => [
                    'name' => 'amp-font',
                    'version' => ['0.1', 'latest'],
                    'deprecatedAllowDuplicates' => true,
                    'requiresUsage' => 'EXEMPTED',
                ],
            ]
        );
        $this->tags['SCRIPT (45)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'extensionSpec' => [
                    'name' => 'amp-form',
                    'version' => ['0.1', 'latest'],
                    'deprecatedAllowDuplicates' => true,
                    'requiresUsage' => 'EXEMPTED',
                ],
            ]
        );
        $this->tags['SCRIPT (46)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-fx-collection', 'version' => ['0.1', 'latest'], 'requiresUsage' => 'NONE'],
            ]
        );
        $this->tags['SCRIPT (47)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                    'name' => 'amp-fx-flying-carpet',
                    'version' => ['0.1', 'latest'],
                    'deprecatedAllowDuplicates' => true,
                    'requiresUsage' => 'EXEMPTED',
                ],
            ]
        );
        $this->tags['SCRIPT (48)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-geo', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (49)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                    'name' => 'amp-gfycat',
                    'version' => ['0.1', 'latest'],
                    'deprecatedAllowDuplicates' => true,
                    'requiresUsage' => 'EXEMPTED',
                ],
            ]
        );
        $this->tags['SCRIPT (50)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-gist', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (51)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-google-document-embed', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (52)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP4ADS'],
                'extensionSpec' => ['name' => 'amp-gwd-animation', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (53)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-hulu', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (54)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                    'name' => 'amp-iframe',
                    'version' => ['0.1', 'latest'],
                    'deprecatedAllowDuplicates' => true,
                    'requiresUsage' => 'EXEMPTED',
                ],
            ]
        );
        $this->tags['SCRIPT (55)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-ima-video', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (56)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                    'name' => 'amp-image-lightbox',
                    'version' => ['0.1', 'latest'],
                    'deprecatedAllowDuplicates' => true,
                    'requiresUsage' => 'EXEMPTED',
                ],
            ]
        );
        $this->tags['SCRIPT (57)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-image-slider', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (58)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-imgur', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (59)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-inline-gallery', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (60)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-inputmask', 'version' => ['0.1', 'latest'], 'requiresUsage' => 'NONE'],
            ]
        );
        $this->tags['SCRIPT (61)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                    'name' => 'amp-instagram',
                    'version' => ['0.1', 'latest'],
                    'deprecatedAllowDuplicates' => true,
                    'requiresUsage' => 'EXEMPTED',
                ],
            ]
        );
        $this->tags['SCRIPT (62)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                    'name' => 'amp-install-serviceworker',
                    'version' => ['0.1', 'latest'],
                    'deprecatedAllowDuplicates' => true,
                    'requiresUsage' => 'EXEMPTED',
                ],
            ]
        );
        $this->tags['SCRIPT (63)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-izlesene', 'version' => ['0.1', 'latest'], 'requiresUsage' => 'EXEMPTED'],
            ]
        );
        $this->tags['SCRIPT (64)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                    'name' => 'amp-jwplayer',
                    'version' => ['0.1', 'latest'],
                    'deprecatedAllowDuplicates' => true,
                    'requiresUsage' => 'EXEMPTED',
                ],
            ]
        );
        $this->tags['SCRIPT (65)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                    'name' => 'amp-kaltura-player',
                    'version' => ['0.1', 'latest'],
                    'deprecatedAllowDuplicates' => true,
                    'requiresUsage' => 'EXEMPTED',
                ],
            ]
        );
        $this->tags['SCRIPT (66)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-lightbox-gallery', 'version' => ['0.1', 'latest'], 'requiresUsage' => 'NONE'],
            ]
        );
        $this->tags['SCRIPT (67)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                    'name' => 'amp-lightbox',
                    'version' => ['0.1', 'latest'],
                    'deprecatedAllowDuplicates' => true,
                    'requiresUsage' => 'EXEMPTED',
                ],
            ]
        );
        $this->tags['SCRIPT (68)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'satisfies' => ['amp-link-rewriter'],
                'extensionSpec' => ['name' => 'amp-link-rewriter', 'version' => ['0.1', 'latest']],
                'excludes' => ['amp-skimlinks', 'amp-smartlinks'],
            ]
        );
        $this->tags['SCRIPT (69)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                    'name' => 'amp-list',
                    'version' => ['0.1', 'latest'],
                    'deprecatedAllowDuplicates' => true,
                    'requiresUsage' => 'EXEMPTED',
                ],
            ]
        );
        $this->tags['SCRIPT (70)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'mandatoryParent' => 'HEAD',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'uniqueWarning' => true,
                'extensionSpec' => ['name' => 'amp-live-list', 'version' => ['0.1', 'latest'], 'requiresUsage' => 'EXEMPTED'],
            ]
        );
        $this->tags['SCRIPT (71)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-mathml', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (72)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-mega-menu', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (73)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-megaphone', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (74)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-minute-media-player', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (75)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-mowplayer', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (76)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrs' => [['name' => 'no-fallback']],
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP4ADS'],
                'extensionSpec' => ['name' => 'amp-mraid', 'version' => ['0.1', 'latest'], 'requiresUsage' => 'NONE', 'extensionType' => 'HOST_SERVICE'],
            ]
        );
        $this->tags['SCRIPT (77)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                    'name' => 'amp-mustache',
                    'version' => ['0.1', '0.2', 'latest'],
                    'deprecatedVersion' => ['0.1'],
                    'deprecatedAllowDuplicates' => true,
                    'requiresUsage' => 'EXEMPTED',
                    'extensionType' => 'CUSTOM_TEMPLATE',
                ],
            ]
        );
        $this->tags['SCRIPT (78)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-nested-menu', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (79)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-next-page', 'version' => ['0.1', '1.0', 'latest']],
            ]
        );
        $this->tags['SCRIPT (80)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-nexxtv-player', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (81)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                    'name' => 'amp-o2-player',
                    'version' => ['0.1', 'latest'],
                    'deprecatedAllowDuplicates' => true,
                    'requiresUsage' => 'EXEMPTED',
                ],
            ]
        );
        $this->tags['SCRIPT (82)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-onetap-google', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (83)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-ooyala-player', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (84)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-orientation-observer', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (85)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-pan-zoom', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (86)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                    'name' => 'amp-pinterest',
                    'version' => ['0.1', 'latest'],
                    'deprecatedAllowDuplicates' => true,
                    'requiresUsage' => 'EXEMPTED',
                ],
            ]
        );
        $this->tags['SCRIPT (87)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-playbuzz', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (88)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'extensionSpec' => ['name' => 'amp-position-observer', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (89)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-powr-player', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (90)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                    'name' => 'amp-reach-player',
                    'version' => ['0.1', 'latest'],
                    'deprecatedAllowDuplicates' => true,
                    'requiresUsage' => 'EXEMPTED',
                ],
            ]
        );
        $this->tags['SCRIPT (91)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-recaptcha-input', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (92)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-redbull-player', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (93)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-reddit', 'version' => ['0.1', 'latest'], 'deprecatedAllowDuplicates' => true],
            ]
        );
        $this->tags['SCRIPT (94)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-riddle-quiz', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (95)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-script', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (96)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'extensionSpec' => ['name' => 'amp-selector', 'version' => ['0.1', 'latest'], 'requiresUsage' => 'EXEMPTED'],
            ]
        );
        $this->tags['SCRIPT (97)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                    'name' => 'amp-sidebar',
                    'version' => ['0.1', 'latest'],
                    'deprecatedAllowDuplicates' => true,
                    'requiresUsage' => 'EXEMPTED',
                ],
            ]
        );
        $this->tags['SCRIPT (98)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'satisfies' => ['amp-skimlinks'],
                'extensionSpec' => ['name' => 'amp-skimlinks', 'version' => ['0.1', 'latest']],
                'excludes' => ['amp-link-rewriter', 'amp-smartlinks'],
            ]
        );
        $this->tags['SCRIPT (99)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'deprecation' => 'amp-carousel',
                'deprecationUrl' => 'https://www.ampproject.org/docs/reference/components/amp-carousel',
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                    'name' => 'amp-slides',
                    'version' => ['0.1', 'latest'],
                    'deprecatedAllowDuplicates' => true,
                    'requiresUsage' => 'NONE',
                ],
            ]
        );
        $this->tags['SCRIPT (100)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'satisfies' => ['amp-smartlinks'],
                'extensionSpec' => ['name' => 'amp-smartlinks', 'version' => ['0.1', 'latest']],
                'excludes' => ['amp-link-rewriter', 'amp-skimlinks'],
            ]
        );
        $this->tags['SCRIPT (101)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'extensionSpec' => [
                    'name' => 'amp-social-share',
                    'version' => ['0.1', 'latest'],
                    'deprecatedAllowDuplicates' => true,
                    'requiresUsage' => 'EXEMPTED',
                ],
            ]
        );
        $this->tags['SCRIPT (102)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                    'name' => 'amp-soundcloud',
                    'version' => ['0.1', 'latest'],
                    'deprecatedAllowDuplicates' => true,
                    'requiresUsage' => 'EXEMPTED',
                ],
            ]
        );
        $this->tags['SCRIPT (103)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                    'name' => 'amp-springboard-player',
                    'version' => ['0.1', 'latest'],
                    'deprecatedAllowDuplicates' => true,
                    'requiresUsage' => 'EXEMPTED',
                ],
            ]
        );
        $this->tags['SCRIPT (104)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                    'name' => 'amp-sticky-ad',
                    'version' => ['0.1', '1.0', 'latest'],
                    'deprecatedVersion' => ['0.1'],
                    'requiresUsage' => 'EXEMPTED',
                ],
            ]
        );
        $this->tags['SCRIPT (105)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-story-360', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (106)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-story-auto-ads', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (107)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-story-interactive', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (108)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-story-panning-media', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (109)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-story-player', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (110)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-story', 'version' => ['1.0', 'latest']],
            ]
        );
        $this->tags['SCRIPT (111)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-subscriptions', 'version' => ['0.1', 'latest'], 'requiresUsage' => 'NONE'],
            ]
        );
        $this->tags['SCRIPT (112)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-subscriptions-google', 'version' => ['0.1', 'latest'], 'requiresUsage' => 'NONE'],
                'requiresExtension' => ['amp-subscriptions'],
            ]
        );
        $this->tags['SCRIPT (113)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-timeago', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (114)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-truncate-text', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (115)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                    'name' => 'amp-twitter',
                    'version' => ['0.1', 'latest'],
                    'deprecatedAllowDuplicates' => true,
                    'requiresUsage' => 'EXEMPTED',
                ],
            ]
        );
        $this->tags['SCRIPT (116)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                    'name' => 'amp-user-notification',
                    'version' => ['0.1', 'latest'],
                    'deprecatedAllowDuplicates' => true,
                    'requiresUsage' => 'EXEMPTED',
                ],
            ]
        );
        $this->tags['SCRIPT (117)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-video-docking', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (118)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-video-iframe', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (119)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                    'name' => 'amp-vimeo',
                    'version' => ['0.1', 'latest'],
                    'deprecatedAllowDuplicates' => true,
                    'requiresUsage' => 'EXEMPTED',
                ],
            ]
        );
        $this->tags['SCRIPT (120)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                    'name' => 'amp-vine',
                    'version' => ['0.1', 'latest'],
                    'deprecatedAllowDuplicates' => true,
                    'requiresUsage' => 'EXEMPTED',
                ],
            ]
        );
        $this->tags['SCRIPT (121)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-viqeo-player', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (122)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-vk', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (123)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-web-push', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (124)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-wistia-player', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (125)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-yotpo/',
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-yotpo', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT (126)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                    'name' => 'amp-youtube',
                    'version' => ['0.1', 'latest'],
                    'deprecatedAllowDuplicates' => true,
                    'requiresUsage' => 'EXEMPTED',
                ],
            ]
        );
        $this->tags['script id=amp-rtc'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'script id=amp-rtc',
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                    ['name' => 'id', 'mandatory' => true, 'dispatchKey' => 'NAME_VALUE_DISPATCH', 'valueCasei' => ['amp-rtc']],
                    ['name' => 'type', 'mandatory' => true, 'valueCasei' => ['application/json']],
                ],
                'attrLists' => ['nonce-attr'],
                'cdata' => ['disallowedCdataRegex' => [['regex' => '<!--', 'errorMessage' => 'html comments']]],
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['script type=application/ld+json'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'script type=application/ld+json',
                'attrs' => [
                    [
                        'name' => 'type',
                        'mandatory' => true,
                        'dispatchKey' => 'NAME_VALUE_DISPATCH',
                        'valueCasei' => ['application/ld+json'],
                    ],
                ],
                'attrLists' => ['nonce-attr'],
                'cdata' => ['disallowedCdataRegex' => [['regex' => '<!--', 'errorMessage' => 'html comments']]],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                'descriptiveName' => 'script type=application/ld+json',
            ]
        );
        $this->tags['SCRIPT type=text/plain'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'SCRIPT type=text/plain',
                'attrs' => [
                    [
                        'name' => 'id',
                        'disallowedValueRegex' => '(^|\s)(__amp_\S*|__count__|__defineGetter__|__defineSetter__|__lookupGetter__|__lookupSetter__|__noSuchMethod__|__parent__|__proto__|__AMP_\S*|\$p|\$proxy|acceptCharset|addEventListener|appendChild|assignedSlot|attachShadow|AMP|baseURI|checkValidity|childElementCount|childNodes|classList|className|clientHeight|clientLeft|clientTop|clientWidth|compareDocumentPosition|computedName|computedRole|contentEditable|createShadowRoot|enqueAction|firstChild|firstElementChild|getAnimations|getAttribute|getAttributeNS|getAttributeNode|getAttributeNodeNS|getBoundingClientRect|getClientRects|getDestinationInsertionPoints|getElementsByClassName|getElementsByTagName|getElementsByTagNameNS|getRootNode|hasAttribute|hasAttributeNS|hasAttributes|hasChildNodes|hasPointerCapture|i-amphtml-\S*|innerHTML|innerText|inputMode|insertAdjacentElement|insertAdjacentHTML|insertAdjacentText|isContentEditable|isDefaultNamespace|isEqualNode|isSameNode|lastChild|lastElementChild|lookupNamespaceURI|namespaceURI|nextElementSibling|nextSibling|nodeName|nodeType|nodeValue|offsetHeight|offsetLeft|offsetParent|offsetTop|offsetWidth|outerHTML|outerText|ownerDocument|parentElement|parentNode|previousElementSibling|previousSibling|querySelector|querySelectorAll|releasePointerCapture|removeAttribute|removeAttributeNS|removeAttributeNode|removeChild|removeEventListener|replaceChild|reportValidity|requestPointerLock|scrollHeight|scrollIntoView|scrollIntoViewIfNeeded|scrollLeft|scrollWidth|setAttribute|setAttributeNS|setAttributeNode|setAttributeNodeNS|setPointerCapture|shadowRoot|styleMap|tabIndex|tagName|textContent|toString|valueOf|(webkit|ms|moz|o)dropzone|(webkit|moz|ms|o)MatchesSelector|(webkit|moz|ms|o)RequestFullScreen|(webkit|moz|ms|o)RequestFullscreen)(\s|$)',
                        'addValueToSet' => 'TEMPLATE_IDS',
                    ],
                    ['name' => 'type', 'mandatory' => true, 'valueCasei' => ['text/plain']],
                    ['name' => 'template', 'mandatory' => true, 'value' => ['amp-mustache'], 'dispatchKey' => 'NAME_VALUE_DISPATCH'],
                ],
                'attrLists' => ['nonce-attr'],
                'cdata' => ['disallowedCdataRegex' => [['regex' => '<!--', 'errorMessage' => 'html comments']]],
                'disallowedAncestor' => [
                    'TEMPLATE',
                    'AMP-DATE-PICKER',
                    'FORM DIV [submit-success][template]',
                    'FORM DIV [submit-error][template]',
                    'FORM DIV [submitting][template]',
                    'FORM DIV [verify-error][template]',
                ],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'requiresExtension' => ['amp-mustache'],
            ]
        );
        $this->tags['SCRIPT type=text/plain (AMP4EMAIL)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'SCRIPT type=text/plain (AMP4EMAIL)',
                'attrs' => [
                    [
                        'name' => 'id',
                        'disallowedValueRegex' => '(^|\s)(__amp_\S*|__count__|__defineGetter__|__defineSetter__|__lookupGetter__|__lookupSetter__|__noSuchMethod__|__parent__|__proto__|__AMP_\S*|\$p|\$proxy|acceptCharset|addEventListener|appendChild|assignedSlot|attachShadow|AMP|baseURI|checkValidity|childElementCount|childNodes|classList|className|clientHeight|clientLeft|clientTop|clientWidth|compareDocumentPosition|computedName|computedRole|contentEditable|createShadowRoot|enqueAction|firstChild|firstElementChild|getAnimations|getAttribute|getAttributeNS|getAttributeNode|getAttributeNodeNS|getBoundingClientRect|getClientRects|getDestinationInsertionPoints|getElementsByClassName|getElementsByTagName|getElementsByTagNameNS|getRootNode|hasAttribute|hasAttributeNS|hasAttributes|hasChildNodes|hasPointerCapture|i-amphtml-\S*|innerHTML|innerText|inputMode|insertAdjacentElement|insertAdjacentHTML|insertAdjacentText|isContentEditable|isDefaultNamespace|isEqualNode|isSameNode|lastChild|lastElementChild|lookupNamespaceURI|namespaceURI|nextElementSibling|nextSibling|nodeName|nodeType|nodeValue|offsetHeight|offsetLeft|offsetParent|offsetTop|offsetWidth|outerHTML|outerText|ownerDocument|parentElement|parentNode|previousElementSibling|previousSibling|querySelector|querySelectorAll|releasePointerCapture|removeAttribute|removeAttributeNS|removeAttributeNode|removeChild|removeEventListener|replaceChild|reportValidity|requestPointerLock|scrollHeight|scrollIntoView|scrollIntoViewIfNeeded|scrollLeft|scrollWidth|setAttribute|setAttributeNS|setAttributeNode|setAttributeNodeNS|setPointerCapture|shadowRoot|styleMap|tabIndex|tagName|textContent|toString|valueOf|(webkit|ms|moz|o)dropzone|(webkit|moz|ms|o)MatchesSelector|(webkit|moz|ms|o)RequestFullScreen|(webkit|moz|ms|o)RequestFullscreen)(\s|$)',
                        'addValueToSet' => 'TEMPLATE_IDS',
                    ],
                    ['name' => 'type', 'mandatory' => true, 'valueCasei' => ['text/plain']],
                    ['name' => 'template', 'mandatory' => true, 'value' => ['amp-mustache'], 'dispatchKey' => 'NAME_VALUE_DISPATCH'],
                ],
                'attrLists' => ['nonce-attr'],
                'cdata' => ['disallowedCdataRegex' => [['regex' => '<!--', 'errorMessage' => 'html comments']]],
                'disallowedAncestor' => [
                    'TEMPLATE (AMP4EMAIL)',
                    'AMP-DATE-PICKER',
                    'FORM DIV [submit-success][template]',
                    'FORM DIV [submit-error][template]',
                    'FORM DIV [submitting][template]',
                    'FORM DIV [verify-error][template]',
                    'FORM DIV [submitting]',
                ],
                'htmlFormat' => ['AMP4EMAIL'],
                'requiresExtension' => ['amp-mustache'],
            ]
        );
        $this->tags['SCRIPT[custom-element=amp-accordion] (AMP4EMAIL)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'SCRIPT[custom-element=amp-accordion] (AMP4EMAIL)',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP4EMAIL'],
                'extensionSpec' => ['name' => 'amp-accordion', 'version' => ['0.1'], 'deprecatedAllowDuplicates' => true, 'requiresUsage' => 'EXEMPTED'],
            ]
        );
        $this->tags['SCRIPT[custom-element=amp-autocomplete] (AMP4EMAIL)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'SCRIPT[custom-element=amp-autocomplete] (AMP4EMAIL)',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP4EMAIL'],
                'extensionSpec' => ['name' => 'amp-autocomplete', 'version' => ['0.1']],
            ]
        );
        $this->tags['SCRIPT[custom-element=amp-bind] (AMP4EMAIL)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'SCRIPT[custom-element=amp-bind] (AMP4EMAIL)',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP4EMAIL'],
                'extensionSpec' => ['name' => 'amp-bind', 'version' => ['0.1'], 'requiresUsage' => 'NONE'],
            ]
        );
        $this->tags['SCRIPT[custom-element=amp-carousel] (AMP4EMAIL)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'SCRIPT[custom-element=amp-carousel] (AMP4EMAIL)',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP4EMAIL'],
                'extensionSpec' => ['name' => 'amp-carousel', 'version' => ['0.1']],
            ]
        );
        $this->tags['SCRIPT[custom-element=amp-fit-text] (AMP4EMAIL)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'SCRIPT[custom-element=amp-fit-text] (AMP4EMAIL)',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP4EMAIL'],
                'extensionSpec' => ['name' => 'amp-fit-text', 'version' => ['0.1'], 'deprecatedAllowDuplicates' => true, 'requiresUsage' => 'EXEMPTED'],
            ]
        );
        $this->tags['SCRIPT[custom-element=amp-form] (AMP4EMAIL)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'SCRIPT[custom-element=amp-form] (AMP4EMAIL)',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP4EMAIL'],
                'extensionSpec' => ['name' => 'amp-form', 'version' => ['0.1'], 'deprecatedAllowDuplicates' => true, 'requiresUsage' => 'EXEMPTED'],
            ]
        );
        $this->tags['SCRIPT[custom-element=amp-image-lightbox] (AMP4EMAIL)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'SCRIPT[custom-element=amp-image-lightbox] (AMP4EMAIL)',
                'attrLists' => ['common-extension-attrs'],
                'deprecation' => 'amp-image-lightbox cannot be properly positioned in emails and will soon be invalid in AMP4EMAIL.',
                'deprecationUrl' => 'https://github.com/ampproject/amphtml/issues/23170',
                'htmlFormat' => ['AMP4EMAIL'],
                'extensionSpec' => ['name' => 'amp-image-lightbox', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT[custom-element=amp-lightbox] (AMP4ADS)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'SCRIPT[custom-element=amp-lightbox] (AMP4ADS)',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP4ADS'],
                'extensionSpec' => ['name' => 'amp-lightbox', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT[custom-element=amp-lightbox] (AMP4EMAIL)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'SCRIPT[custom-element=amp-lightbox] (AMP4EMAIL)',
                'attrLists' => ['common-extension-attrs'],
                'deprecation' => 'amp-lightbox cannot be properly positioned in emails and will soon be invalid in AMP4EMAIL.',
                'deprecationUrl' => 'https://github.com/ampproject/amphtml/issues/23170',
                'htmlFormat' => ['AMP4EMAIL'],
                'extensionSpec' => ['name' => 'amp-lightbox', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags['SCRIPT[custom-element=amp-list] (AMP4EMAIL)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'SCRIPT[custom-element=amp-list] (AMP4EMAIL)',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP4EMAIL'],
                'extensionSpec' => ['name' => 'amp-list', 'version' => ['0.1']],
            ]
        );
        $this->tags['SCRIPT[custom-element=amp-selector] (AMP4EMAIL)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'SCRIPT[custom-element=amp-selector] (AMP4EMAIL)',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP4EMAIL'],
                'extensionSpec' => ['name' => 'amp-selector', 'version' => ['0.1'], 'requiresUsage' => 'EXEMPTED'],
            ]
        );
        $this->tags['SCRIPT[custom-element=amp-sidebar] (AMP4EMAIL)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'SCRIPT[custom-element=amp-sidebar] (AMP4EMAIL)',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP4EMAIL'],
                'extensionSpec' => ['name' => 'amp-sidebar', 'version' => ['0.1']],
            ]
        );
        $this->tags['SCRIPT[custom-element=amp-timeago] (AMP4EMAIL)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'SCRIPT[custom-element=amp-timeago] (AMP4EMAIL)',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP4EMAIL'],
                'extensionSpec' => ['name' => 'amp-timeago', 'version' => ['0.1']],
            ]
        );
        $this->tags['SCRIPT[custom-template=amp-mustache] (AMP4ADS)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'SCRIPT[custom-template=amp-mustache] (AMP4ADS)',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP4ADS'],
                'extensionSpec' => [
                    'name' => 'amp-mustache',
                    'version' => ['0.1', '0.2', 'latest'],
                    'deprecatedVersion' => ['0.1'],
                    'extensionType' => 'CUSTOM_TEMPLATE',
                ],
            ]
        );
        $this->tags['SCRIPT[custom-template=amp-mustache] (AMP4EMAIL)'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'SCRIPT[custom-template=amp-mustache] (AMP4EMAIL)',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP4EMAIL'],
                'extensionSpec' => [
                    'name' => 'amp-mustache',
                    'version' => ['0.1', '0.2'],
                    'deprecatedVersion' => ['0.1'],
                    'extensionType' => 'CUSTOM_TEMPLATE',
                ],
            ]
        );
        $this->tags['SECTION'] = new Tag(
            [
                'tagName' => 'SECTION',
                'attrLists' => ['poool-access-attrs'],
                'disallowedAncestor' => ['AMP-ACCORDION'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['section (AMP4EMAIL)'] = new Tag(
            [
                'tagName' => 'SECTION',
                'specName' => 'section (AMP4EMAIL)',
                'disallowedAncestor' => ['AMP-ACCORDION'],
                'htmlFormat' => ['AMP4EMAIL'],
            ]
        );
        $this->tags['SELECT'] = new Tag(
            [
                'tagName' => 'SELECT',
                'attrs' => [
                    ['name' => 'autofocus', 'disabledBy' => ['amp4email']],
                    ['name' => 'disabled'],
                    ['name' => 'multiple'],
                    ['name' => 'no-verify', 'value' => [''], 'disabledBy' => ['amp4email']],
                    ['name' => 'required'],
                    ['name' => 'size'],
                    ['name' => '[autofocus]', 'disabledBy' => ['amp4email']],
                    ['name' => '[disabled]'],
                    ['name' => '[multiple]'],
                    ['name' => '[required]'],
                    ['name' => '[size]'],
                ],
                'attrLists' => ['name-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-form/',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['SLOT'] = new Tag(
            [
                'tagName' => 'SLOT',
                'attrLists' => ['name-attr'],
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['SMALL'] = new Tag(
            [
                'tagName' => 'SMALL',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['SOLIDCOLOR'] = new Tag(
            [
                'tagName' => 'SOLIDCOLOR',
                'attrs' => [['name' => 'solid-color'], ['name' => 'solid-opacity']],
                'attrLists' => ['svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['SPACER'] = new Tag(
            [
                'tagName' => 'SPACER',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['SPAN'] = new Tag(
            [
                'tagName' => 'SPAN',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['span amp-nested-menu'] = new Tag(
            [
                'tagName' => 'SPAN',
                'specName' => 'span amp-nested-menu',
                'attrLists' => ['amp-nested-menu-actions'],
                'mandatoryAncestor' => 'AMP-NESTED-MENU',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['span swg_amp_cache_nonce'] = new Tag(
            [
                'tagName' => 'SPAN',
                'specName' => 'span swg_amp_cache_nonce',
                'attrs' => [['name' => 'swg_amp_cache_nonce', 'mandatory' => true, 'dispatchKey' => 'NAME_DISPATCH']],
                'mandatoryAncestor' => 'BODY',
                'htmlFormat' => ['AMP'],
                'satisfies' => ['span swg_amp_cache_nonce'],
                'requires' => ['subscriptions-section content swg_amp_cache_nonce'],
                'requiresExtension' => ['amp-subscriptions'],
            ]
        );
        $this->tags['STRIKE'] = new Tag(
            [
                'tagName' => 'STRIKE',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['STRONG'] = new Tag(
            [
                'tagName' => 'STRONG',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['style amp-custom'] = new Tag(
            [
                'tagName' => 'STYLE',
                'specName' => 'style amp-custom',
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [['name' => 'amp-custom', 'mandatory' => true, 'value' => ['']], ['name' => 'type', 'valueCasei' => ['text/css']]],
                'attrLists' => ['nonce-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#stylesheets',
                'cdata' => [
                    'maxBytes' => 75000,
                    'maxBytesSpecUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#maximum-size',
                    'disallowedCdataRegex' => [
                        ['regex' => '<!--', 'errorMessage' => 'html comments'],
                        ['regex' => '(^|\W)i-amphtml-', 'errorMessage' => 'CSS i-amphtml- name prefix'],
                    ],
                    'cssSpec' => [
                        'atRuleSpec' => [
                            ['name' => 'font-face'],
                            ['name' => 'keyframes'],
                            ['name' => 'media'],
                            ['name' => 'page'],
                            ['name' => 'supports'],
                        ],
                    ],
                    'docCssBytes' => true,
                ],
                'htmlFormat' => ['AMP'],
                'namedId' => 'STYLE_AMP_CUSTOM',
                'descriptiveName' => 'style amp-custom',
            ]
        );
        $this->tags['style amp-custom (AMP4ADS)'] = new Tag(
            [
                'tagName' => 'STYLE',
                'specName' => 'style amp-custom (AMP4ADS)',
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [['name' => 'amp-custom', 'mandatory' => true, 'value' => ['']], ['name' => 'type', 'valueCasei' => ['text/css']]],
                'attrLists' => ['nonce-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/a4a_spec/#css',
                'cdata' => [
                    'maxBytes' => 20000,
                    'maxBytesSpecUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#maximum-size',
                    'disallowedCdataRegex' => [
                        ['regex' => '<!--', 'errorMessage' => 'html comments'],
                        ['regex' => '(^|\W)i-amphtml-', 'errorMessage' => 'CSS i-amphtml- name prefix'],
                    ],
                    'cssSpec' => [
                        'atRuleSpec' => [
                            ['name' => 'font-face'],
                            ['name' => 'keyframes'],
                            [
                                'name' => 'media',
                                'mediaQuerySpec' => [
                                    'issuesAsError' => false,
                                    'type' => ['all', 'print', 'screen', 'speech'],
                                    'feature' => ['width', 'height', 'aspect-ratio', 'orientation', 'resolution'],
                                ],
                            ],
                            ['name' => 'supports'],
                        ],
                        'validateAmp4ads' => true,
                    ],
                    'docCssBytes' => true,
                ],
                'htmlFormat' => ['AMP4ADS'],
                'descriptiveName' => 'style amp-custom',
            ]
        );
        $this->tags['style amp-custom (AMP4EMAIL)'] = new Tag(
            [
                'tagName' => 'STYLE',
                'specName' => 'style amp-custom (AMP4EMAIL)',
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [['name' => 'amp-custom', 'mandatory' => true, 'value' => ['']], ['name' => 'type', 'valueCasei' => ['text/css']]],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/email-spec/amp-email-css',
                'cdata' => [
                    'maxBytes' => 75000,
                    'maxBytesSpecUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#maximum-size',
                    'disallowedCdataRegex' => [
                        ['regex' => '<!--', 'errorMessage' => 'html comments'],
                        ['regex' => '(^|\W)i-amphtml-', 'errorMessage' => 'CSS i-amphtml- name prefix'],
                    ],
                    'cssSpec' => [
                        'atRuleSpec' => [
                            [
                                'name' => 'media',
                                'mediaQuerySpec' => [
                                    'issuesAsError' => true,
                                    'type' => ['all', 'screen'],
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
                            ['name' => 'page'],
                        ],
                    ],
                    'docCssBytes' => true,
                ],
                'htmlFormat' => ['AMP4EMAIL'],
                'disabledBy' => ['data-css-strict'],
                'descriptiveName' => 'style amp-custom',
            ]
        );
        $this->tags['style amp-custom (css-strict)'] = new Tag(
            [
                'tagName' => 'STYLE',
                'specName' => 'style amp-custom (css-strict)',
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [['name' => 'amp-custom', 'mandatory' => true, 'value' => ['']], ['name' => 'type', 'valueCasei' => ['text/css']]],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/email-spec/amp-email-css',
                'cdata' => [
                    'maxBytes' => 75000,
                    'maxBytesSpecUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#maximum-size',
                    'disallowedCdataRegex' => [
                        ['regex' => '<!--', 'errorMessage' => 'html comments'],
                        ['regex' => '(^|\W)i-amphtml-', 'errorMessage' => 'CSS i-amphtml- name prefix'],
                    ],
                    'cssSpec' => [
                        'atRuleSpec' => [
                            [
                                'name' => 'media',
                                'mediaQuerySpec' => [
                                    'issuesAsError' => true,
                                    'type' => ['all', 'screen'],
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
                    'docCssBytes' => true,
                ],
                'htmlFormat' => ['AMP4EMAIL'],
                'enabledBy' => ['data-css-strict'],
                'descriptiveName' => 'style amp-custom',
            ]
        );
        $this->tags['style amp-custom-length-check'] = new Tag(
            [
                'tagName' => 'STYLE',
                'specName' => 'style amp-custom-length-check',
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                    ['name' => 'amp-custom-length-check', 'mandatory' => true, 'value' => [''], 'dispatchKey' => 'NAME_DISPATCH'],
                    ['name' => 'type', 'valueCasei' => ['text/css']],
                ],
                'attrLists' => ['nonce-attr'],
                'cdata' => ['maxBytes' => -1],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                'descriptiveName' => 'style amp-custom-length-check',
            ]
        );
        $this->tags['style[amp-keyframes]'] = new Tag(
            [
                'tagName' => 'STYLE',
                'specName' => 'style[amp-keyframes]',
                'unique' => true,
                'mandatoryParent' => 'BODY',
                'attrs' => [['name' => 'amp-keyframes', 'mandatory' => true, 'value' => [''], 'dispatchKey' => 'NAME_DISPATCH']],
                'cdata' => [
                    'maxBytes' => 500000,
                    'maxBytesSpecUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#keyframes-stylesheet',
                    'cssSpec' => [
                        'atRuleSpec' => [['name' => 'keyframes'], ['name' => 'media'], ['name' => 'supports']],
                        'validateKeyframes' => true,
                        'declaration' => ['animation-timing-function', 'offset-distance', 'opacity', 'transform', 'visibility'],
                    ],
                    'docCssBytes' => false,
                ],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'mandatoryLastChild' => true,
                'descriptiveName' => 'style[amp-keyframes]',
            ]
        );
        $this->tags['style[amp-runtime] (transformed)'] = new Tag(
            [
                'tagName' => 'STYLE',
                'specName' => 'style[amp-runtime] (transformed)',
                'mandatory' => true,
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                    ['name' => 'amp-runtime', 'mandatory' => true, 'value' => [''], 'dispatchKey' => 'NAME_VALUE_PARENT_DISPATCH'],
                    ['name' => 'i-amphtml-version', 'mandatory' => true, 'valueRegex' => '^\d{15}|latest$'],
                ],
                'attrLists' => ['nonce-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#stylesheets',
                'htmlFormat' => ['AMP'],
                'enabledBy' => ['transformed'],
                'descriptiveName' => 'style[amp-runtime]',
            ]
        );
        $this->tags['SUB'] = new Tag(
            [
                'tagName' => 'SUB',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['subscriptions-section content swg_amp_cache_nonce'] = new Tag(
            [
                'tagName' => 'SECTION',
                'specName' => 'subscriptions-section content swg_amp_cache_nonce',
                'attrs' => [
                    ['name' => 'encrypted', 'mandatory' => true, 'dispatchKey' => 'NAME_DISPATCH'],
                    ['name' => 'subscriptions-section', 'valueCasei' => ['content']],
                    ['name' => 'swg_amp_cache_nonce', 'mandatory' => true],
                ],
                'mandatoryAncestor' => 'BODY',
                'htmlFormat' => ['AMP'],
                'satisfies' => ['subscriptions-section content swg_amp_cache_nonce'],
                'requires' => ['span swg_amp_cache_nonce'],
            ]
        );
        $this->tags['subscriptions script ciphertext'] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'subscriptions script ciphertext',
                'mandatoryParent' => 'subscriptions-section content swg_amp_cache_nonce',
                'attrs' => [
                    ['name' => 'ciphertext', 'mandatory' => true, 'dispatchKey' => 'NAME_DISPATCH'],
                    ['name' => 'type', 'mandatory' => true, 'valueCasei' => ['application/octet-stream']],
                ],
                'cdata' => ['disallowedCdataRegex' => [['regex' => '<!--', 'errorMessage' => 'html comments']]],
                'mandatoryAncestor' => 'BODY',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['SUMMARY'] = new Tag(
            [
                'tagName' => 'SUMMARY',
                'mandatoryParent' => 'DETAILS',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['SUP'] = new Tag(
            [
                'tagName' => 'SUP',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['SVG'] = new Tag(
            [
                'tagName' => 'SVG',
                'attrs' => [
                    ['name' => 'contentscripttype'],
                    ['name' => 'contentstyletype'],
                    ['name' => 'externalresourcesrequired'],
                    ['name' => 'height'],
                    ['name' => 'preserveaspectratio'],
                    ['name' => 'version', 'value' => ['1.0', '1.1']],
                    ['name' => 'viewbox'],
                    ['name' => 'width'],
                    ['name' => 'x'],
                    ['name' => 'y'],
                    ['name' => 'zoomandpan'],
                ],
                'attrLists' => ['svg-conditional-processing-attributes', 'svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['svg title'] = new Tag(
            [
                'tagName' => 'TITLE',
                'specName' => 'svg title',
                'attrLists' => ['svg-core-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['SWITCH'] = new Tag(
            [
                'tagName' => 'SWITCH',
                'attrLists' => ['svg-conditional-processing-attributes', 'svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['SYMBOL'] = new Tag(
            [
                'tagName' => 'SYMBOL',
                'attrs' => [
                    ['name' => 'externalresourcesrequired'],
                    ['name' => 'height'],
                    ['name' => 'preserveaspectratio'],
                    ['name' => 'viewbox'],
                    ['name' => 'width'],
                ],
                'attrLists' => ['svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['TABLE'] = new Tag(
            [
                'tagName' => 'TABLE',
                'attrs' => [
                    ['name' => 'align'],
                    ['name' => 'bgcolor'],
                    ['name' => 'border', 'value' => ['0', '1']],
                    ['name' => 'cellpadding'],
                    ['name' => 'cellspacing'],
                    ['name' => 'sortable', 'disabledBy' => ['amp4email']],
                    ['name' => 'width'],
                ],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['TBODY'] = new Tag(
            [
                'tagName' => 'TBODY',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['TD'] = new Tag(
            [
                'tagName' => 'TD',
                'attrs' => [
                    ['name' => 'align'],
                    ['name' => 'bgcolor'],
                    ['name' => 'colspan'],
                    ['name' => 'headers'],
                    ['name' => 'height'],
                    ['name' => 'rowspan'],
                    ['name' => 'valign'],
                    ['name' => 'width'],
                ],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['TEMPLATE'] = new Tag(
            [
                'tagName' => 'TEMPLATE',
                'attrs' => [
                    [
                        'name' => 'id',
                        'disallowedValueRegex' => '(^|\s)(__amp_\S*|__count__|__defineGetter__|__defineSetter__|__lookupGetter__|__lookupSetter__|__noSuchMethod__|__parent__|__proto__|__AMP_\S*|\$p|\$proxy|acceptCharset|addEventListener|appendChild|assignedSlot|attachShadow|AMP|baseURI|checkValidity|childElementCount|childNodes|classList|className|clientHeight|clientLeft|clientTop|clientWidth|compareDocumentPosition|computedName|computedRole|contentEditable|createShadowRoot|enqueAction|firstChild|firstElementChild|getAnimations|getAttribute|getAttributeNS|getAttributeNode|getAttributeNodeNS|getBoundingClientRect|getClientRects|getDestinationInsertionPoints|getElementsByClassName|getElementsByTagName|getElementsByTagNameNS|getRootNode|hasAttribute|hasAttributeNS|hasAttributes|hasChildNodes|hasPointerCapture|i-amphtml-\S*|innerHTML|innerText|inputMode|insertAdjacentElement|insertAdjacentHTML|insertAdjacentText|isContentEditable|isDefaultNamespace|isEqualNode|isSameNode|lastChild|lastElementChild|lookupNamespaceURI|namespaceURI|nextElementSibling|nextSibling|nodeName|nodeType|nodeValue|offsetHeight|offsetLeft|offsetParent|offsetTop|offsetWidth|outerHTML|outerText|ownerDocument|parentElement|parentNode|previousElementSibling|previousSibling|querySelector|querySelectorAll|releasePointerCapture|removeAttribute|removeAttributeNS|removeAttributeNode|removeChild|removeEventListener|replaceChild|reportValidity|requestPointerLock|scrollHeight|scrollIntoView|scrollIntoViewIfNeeded|scrollLeft|scrollWidth|setAttribute|setAttributeNS|setAttributeNode|setAttributeNodeNS|setPointerCapture|shadowRoot|styleMap|tabIndex|tagName|textContent|toString|valueOf|(webkit|ms|moz|o)dropzone|(webkit|moz|ms|o)MatchesSelector|(webkit|moz|ms|o)RequestFullScreen|(webkit|moz|ms|o)RequestFullscreen)(\s|$)',
                        'addValueToSet' => 'TEMPLATE_IDS',
                    ],
                    ['name' => 'type', 'mandatory' => true, 'value' => ['amp-mustache']],
                ],
                'disallowedAncestor' => [
                    'TEMPLATE',
                    'AMP-DATE-PICKER',
                    'AMP-STORY-AUTO-ADS',
                    'FORM DIV [submit-success][template]',
                    'FORM DIV [submit-error][template]',
                    'FORM DIV [submitting][template]',
                    'FORM DIV [verify-error][template]',
                ],
                'mandatoryAncestor' => 'BODY',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'requiresExtension' => ['amp-mustache'],
            ]
        );
        $this->tags['TEMPLATE (AMP4EMAIL)'] = new Tag(
            [
                'tagName' => 'TEMPLATE',
                'specName' => 'TEMPLATE (AMP4EMAIL)',
                'attrs' => [
                    [
                        'name' => 'id',
                        'disallowedValueRegex' => '(^|\s)(__amp_\S*|__count__|__defineGetter__|__defineSetter__|__lookupGetter__|__lookupSetter__|__noSuchMethod__|__parent__|__proto__|__AMP_\S*|\$p|\$proxy|acceptCharset|addEventListener|appendChild|assignedSlot|attachShadow|AMP|baseURI|checkValidity|childElementCount|childNodes|classList|className|clientHeight|clientLeft|clientTop|clientWidth|compareDocumentPosition|computedName|computedRole|contentEditable|createShadowRoot|enqueAction|firstChild|firstElementChild|getAnimations|getAttribute|getAttributeNS|getAttributeNode|getAttributeNodeNS|getBoundingClientRect|getClientRects|getDestinationInsertionPoints|getElementsByClassName|getElementsByTagName|getElementsByTagNameNS|getRootNode|hasAttribute|hasAttributeNS|hasAttributes|hasChildNodes|hasPointerCapture|i-amphtml-\S*|innerHTML|innerText|inputMode|insertAdjacentElement|insertAdjacentHTML|insertAdjacentText|isContentEditable|isDefaultNamespace|isEqualNode|isSameNode|lastChild|lastElementChild|lookupNamespaceURI|namespaceURI|nextElementSibling|nextSibling|nodeName|nodeType|nodeValue|offsetHeight|offsetLeft|offsetParent|offsetTop|offsetWidth|outerHTML|outerText|ownerDocument|parentElement|parentNode|previousElementSibling|previousSibling|querySelector|querySelectorAll|releasePointerCapture|removeAttribute|removeAttributeNS|removeAttributeNode|removeChild|removeEventListener|replaceChild|reportValidity|requestPointerLock|scrollHeight|scrollIntoView|scrollIntoViewIfNeeded|scrollLeft|scrollWidth|setAttribute|setAttributeNS|setAttributeNode|setAttributeNodeNS|setPointerCapture|shadowRoot|styleMap|tabIndex|tagName|textContent|toString|valueOf|(webkit|ms|moz|o)dropzone|(webkit|moz|ms|o)MatchesSelector|(webkit|moz|ms|o)RequestFullScreen|(webkit|moz|ms|o)RequestFullscreen)(\s|$)',
                        'addValueToSet' => 'TEMPLATE_IDS',
                    ],
                    ['name' => 'type', 'mandatory' => true, 'value' => ['amp-mustache']],
                ],
                'disallowedAncestor' => [
                    'TEMPLATE (AMP4EMAIL)',
                    'AMP-DATE-PICKER',
                    'FORM DIV [submit-success][template]',
                    'FORM DIV [submit-error][template]',
                    'FORM DIV [submitting][template]',
                    'FORM DIV [verify-error][template]',
                    'FORM DIV [submitting]',
                ],
                'mandatoryAncestor' => 'BODY',
                'htmlFormat' => ['AMP4EMAIL'],
                'requiresExtension' => ['amp-mustache'],
            ]
        );
        $this->tags['TEXT'] = new Tag(
            [
                'tagName' => 'TEXT',
                'attrs' => [
                    ['name' => 'dx'],
                    ['name' => 'dy'],
                    ['name' => 'externalresourcesrequired'],
                    ['name' => 'lengthadjust'],
                    ['name' => 'rotate'],
                    ['name' => 'text-anchor'],
                    ['name' => 'textlength'],
                    ['name' => 'transform'],
                    ['name' => 'x'],
                    ['name' => 'y'],
                ],
                'attrLists' => ['svg-conditional-processing-attributes', 'svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['TEXTAREA'] = new Tag(
            [
                'tagName' => 'TEXTAREA',
                'attrs' => [
                    ['name' => 'autocomplete'],
                    ['name' => 'autoexpand', 'requiresExtension' => ['amp-form']],
                    ['name' => 'autofocus', 'disabledBy' => ['amp4email']],
                    ['name' => 'cols'],
                    ['name' => 'disabled'],
                    ['name' => 'maxlength'],
                    ['name' => 'minlength'],
                    ['name' => 'no-verify', 'value' => [''], 'disabledBy' => ['amp4email']],
                    ['name' => 'pattern'],
                    ['name' => 'placeholder'],
                    ['name' => 'readonly'],
                    ['name' => 'required'],
                    ['name' => 'rows'],
                    ['name' => 'selectiondirection', 'disabledBy' => ['amp4email']],
                    ['name' => 'selectionend', 'disabledBy' => ['amp4email']],
                    ['name' => 'selectionstart', 'disabledBy' => ['amp4email']],
                    ['name' => 'spellcheck'],
                    ['name' => 'wrap'],
                    ['name' => '[autocomplete]'],
                    ['name' => '[autofocus]', 'disabledBy' => ['amp4email']],
                    ['name' => '[cols]'],
                    ['name' => '[defaulttext]'],
                    ['name' => '[disabled]'],
                    ['name' => '[maxlength]'],
                    ['name' => '[minlength]'],
                    ['name' => '[pattern]'],
                    ['name' => '[placeholder]'],
                    ['name' => '[readonly]'],
                    ['name' => '[required]'],
                    ['name' => '[rows]'],
                    ['name' => '[selectiondirection]', 'disabledBy' => ['amp4email']],
                    ['name' => '[selectionend]', 'disabledBy' => ['amp4email']],
                    ['name' => '[selectionstart]', 'disabledBy' => ['amp4email']],
                    ['name' => '[spellcheck]'],
                    ['name' => '[wrap]'],
                ],
                'attrLists' => ['name-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-form/',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['TEXTPATH'] = new Tag(
            [
                'tagName' => 'TEXTPATH',
                'attrs' => [['name' => 'externalresourcesrequired'], ['name' => 'method'], ['name' => 'spacing'], ['name' => 'startoffset']],
                'attrLists' => [
                    'svg-conditional-processing-attributes',
                    'svg-core-attributes',
                    'svg-presentation-attributes',
                    'svg-style-attr',
                    'svg-xlink-attributes',
                ],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['TFOOT'] = new Tag(
            [
                'tagName' => 'TFOOT',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['TH'] = new Tag(
            [
                'tagName' => 'TH',
                'attrs' => [
                    ['name' => 'abbr'],
                    ['name' => 'align'],
                    ['name' => 'bgcolor'],
                    ['name' => 'colspan'],
                    ['name' => 'headers'],
                    ['name' => 'height'],
                    ['name' => 'rowspan'],
                    ['name' => 'scope'],
                    ['name' => 'sorted', 'disabledBy' => ['amp4email']],
                    ['name' => 'valign'],
                    ['name' => 'width'],
                ],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['THEAD'] = new Tag(
            [
                'tagName' => 'THEAD',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['TIME'] = new Tag(
            [
                'tagName' => 'TIME',
                'attrs' => [['name' => 'datetime'], ['name' => 'pubdate', 'value' => ['']]],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['title'] = new Tag(
            [
                'tagName' => 'TITLE',
                'specName' => 'title',
                'attrs' => [['name' => '[text]']],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['title [AMP4EMAIL]'] = new Tag(
            [
                'tagName' => 'TITLE',
                'specName' => 'title [AMP4EMAIL]',
                'attrs' => [['name' => '[text]']],
                'deprecation' => 'Title tags in email have no meaning. This tag may become invalid in the future.',
                'deprecationUrl' => 'https://github.com/ampproject/amphtml/issues/22318',
                'htmlFormat' => ['AMP4EMAIL'],
            ]
        );
        $this->tags['TR'] = new Tag(
            [
                'tagName' => 'TR',
                'attrs' => [['name' => 'align'], ['name' => 'bgcolor'], ['name' => 'height'], ['name' => 'valign']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['TREF'] = new Tag(
            [
                'tagName' => 'TREF',
                'attrs' => [['name' => 'externalresourcesrequired']],
                'attrLists' => [
                    'svg-conditional-processing-attributes',
                    'svg-core-attributes',
                    'svg-presentation-attributes',
                    'svg-style-attr',
                    'svg-xlink-attributes',
                ],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['TSPAN'] = new Tag(
            [
                'tagName' => 'TSPAN',
                'attrs' => [
                    ['name' => 'dx'],
                    ['name' => 'dy'],
                    ['name' => 'externalresourcesrequired'],
                    ['name' => 'lengthadjust'],
                    ['name' => 'rotate'],
                    ['name' => 'textlength'],
                    ['name' => 'x'],
                    ['name' => 'y'],
                ],
                'attrLists' => ['svg-conditional-processing-attributes', 'svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['TT'] = new Tag(
            [
                'tagName' => 'TT',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['U'] = new Tag(
            [
                'tagName' => 'U',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['UL'] = new Tag(
            [
                'tagName' => 'UL',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['USE'] = new Tag(
            [
                'tagName' => 'USE',
                'attrs' => [
                    ['name' => 'externalresourcesrequired'],
                    ['name' => 'height'],
                    ['name' => 'transform'],
                    ['name' => 'width'],
                    ['name' => 'x'],
                    ['name' => 'y'],
                ],
                'attrLists' => [
                    'svg-conditional-processing-attributes',
                    'svg-core-attributes',
                    'svg-presentation-attributes',
                    'svg-style-attr',
                    'svg-xlink-attributes',
                ],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['VAR'] = new Tag(
            [
                'tagName' => 'VAR',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags['VIDEO'] = new Tag(
            [
                'tagName' => 'VIDEO',
                'attrs' => [
                    ['name' => 'autoplay'],
                    ['name' => 'controls'],
                    ['name' => 'height'],
                    ['name' => 'loop'],
                    [
                        'name' => 'muted',
                        'deprecation' => 'autoplay',
                        'deprecationUrl' => 'https://amp.dev/documentation/components/amp-video/',
                    ],
                    ['name' => 'playsinline'],
                    ['name' => 'poster'],
                    ['name' => 'preload'],
                    [
                        'name' => 'src',
                        'disallowedValueRegex' => '__amp_source_origin',
                        'valueUrl' => ['protocol' => ['data', 'https'], 'allowRelative' => false],
                    ],
                    ['name' => 'width'],
                ],
                'specUrl' => 'https://amp.dev/documentation/components/amp-video/',
                'mandatoryAncestor' => 'NOSCRIPT',
                'mandatoryAncestorSuggestedAlternative' => 'AMP-VIDEO',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags['video > source'] = new Tag(
            [
                'tagName' => 'SOURCE',
                'specName' => 'video > source',
                'mandatoryParent' => 'VIDEO',
                'attrs' => [
                    ['name' => 'media'],
                    [
                        'name' => 'src',
                        'mandatory' => true,
                        'disallowedValueRegex' => '__amp_source_origin',
                        'valueUrl' => ['protocol' => ['https'], 'allowRelative' => true],
                    ],
                    ['name' => 'type', 'mandatory' => true],
                ],
                'specUrl' => 'https://amp.dev/documentation/components/amp-video/',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['video > track'] = new Tag(
            [
                'tagName' => 'TRACK',
                'specName' => 'video > track',
                'mandatoryParent' => 'VIDEO',
                'attrLists' => ['track-attrs-no-subtitles'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['video > track[kind=subtitles]'] = new Tag(
            [
                'tagName' => 'TRACK',
                'specName' => 'video > track[kind=subtitles]',
                'mandatoryParent' => 'VIDEO',
                'attrLists' => ['track-attrs-subtitles'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['VIEW'] = new Tag(
            [
                'tagName' => 'VIEW',
                'attrs' => [
                    ['name' => 'externalresourcesrequired'],
                    ['name' => 'preserveaspectratio'],
                    ['name' => 'viewbox'],
                    ['name' => 'viewtarget'],
                    ['name' => 'zoomandpan'],
                ],
                'attrLists' => ['svg-core-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['VKERN'] = new Tag(
            [
                'tagName' => 'VKERN',
                'attrs' => [['name' => 'g1'], ['name' => 'g2'], ['name' => 'k'], ['name' => 'u1'], ['name' => 'u2']],
                'attrLists' => ['svg-core-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags['WBR'] = new Tag(
            [
                'tagName' => 'WBR',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->byTagName = [
            'A' => [
                $this->tags['A'],
                $this->tags['A (AMP4EMAIL)'],
            ],
            'ABBR' => [
                $this->tags['ABBR'],
            ],
            'ACRONYM' => [
                $this->tags['ACRONYM'],
            ],
            'ADDRESS' => [
                $this->tags['ADDRESS'],
            ],
            'AMP-3D-GLTF' => [
                $this->tags['AMP-3D-GLTF'],
            ],
            'AMP-3Q-PLAYER' => [
                $this->tags['AMP-3Q-PLAYER'],
            ],
            'SCRIPT' => [
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
                $this->tags['SCRIPT'],
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
            'AMP-ACCORDION' => [
                $this->tags['AMP-ACCORDION'],
            ],
            'SECTION' => [
                $this->tags['amp-accordion > section'],
                $this->tags['SECTION'],
                $this->tags['section (AMP4EMAIL)'],
                $this->tags['subscriptions-section content swg_amp_cache_nonce'],
            ],
            'AMP-ACTION-MACRO' => [
                $this->tags['AMP-ACTION-MACRO'],
            ],
            'AMP-AD' => [
                $this->tags['AMP-AD'],
                $this->tags['amp-ad with data-enable-refresh attribute'],
                $this->tags['amp-ad with data-multi-size attribute'],
                $this->tags['amp-ad with type=custom'],
            ],
            'AMP-AD-CUSTOM' => [
                $this->tags['AMP-AD-CUSTOM'],
            ],
            'AMP-AD-EXIT' => [
                $this->tags['AMP-AD-EXIT'],
            ],
            'AMP-ADDTHIS' => [
                $this->tags['AMP-ADDTHIS'],
            ],
            'AMP-ANALYTICS' => [
                $this->tags['AMP-ANALYTICS'],
            ],
            'AMP-ANIM' => [
                $this->tags['AMP-ANIM'],
                $this->tags['AMP-ANIM (AMP4EMAIL)'],
            ],
            'AMP-ANIMATION' => [
                $this->tags['AMP-ANIMATION'],
            ],
            'AMP-APESTER-MEDIA' => [
                $this->tags['AMP-APESTER-MEDIA'],
            ],
            'AMP-APP-BANNER' => [
                $this->tags['AMP-APP-BANNER'],
            ],
            'BUTTON' => [
                $this->tags['amp-app-banner button[open-button]'],
                $this->tags['amp-list-load-more button[load-more-clickable]'],
                $this->tags['BUTTON'],
                $this->tags['button amp-nested-menu'],
            ],
            'AMP-AUDIO' => [
                $this->tags['AMP-AUDIO'],
                $this->tags['amp-audio (A4A)'],
                $this->tags['amp-story >> amp-audio'],
            ],
            'SOURCE' => [
                $this->tags['amp-audio > source'],
                $this->tags['amp-ima-video > source'],
                $this->tags['amp-video > source'],
                $this->tags['audio > source'],
                $this->tags['picture > source'],
                $this->tags['video > source'],
            ],
            'TRACK' => [
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
            'AMP-AUTO-ADS' => [
                $this->tags['AMP-AUTO-ADS'],
            ],
            'AMP-AUTOCOMPLETE' => [
                $this->tags['amp-autocomplete'],
                $this->tags['AMP-AUTOCOMPLETE (AMP4EMAIL)'],
            ],
            'INPUT' => [
                $this->tags['amp-autocomplete > input'],
                $this->tags['INPUT'],
                $this->tags['input [mask=date-dd-mm-yyyy]'],
                $this->tags['input [mask=date-mm-dd-yyyy]'],
                $this->tags['input [mask=date-mm-yy]'],
                $this->tags['input [mask=date-yyyy-mm-dd]'],
                $this->tags['input [mask=payment-card]'],
                $this->tags['input [mask] (custom mask)'],
                $this->tags['INPUT [type=file]'],
                $this->tags['INPUT [type=password]'],
            ],
            'AMP-BASE-CAROUSEL' => [
                $this->tags['AMP-BASE-CAROUSEL'],
                $this->tags['AMP-BASE-CAROUSEL [lightbox]'],
            ],
            '$REFERENCE_POINT' => [
                $this->tags['AMP-BASE-CAROUSEL lightbox [child]'],
                $this->tags['AMP-BASE-CAROUSEL lightbox [lightbox-exclude]'],
                $this->tags['AMP-CAROUSEL lightbox [child]'],
                $this->tags['AMP-CAROUSEL lightbox [lightbox-exclude]'],
                $this->tags['AMP-LIVE-LIST [items]'],
                $this->tags['AMP-LIVE-LIST [items] item'],
                $this->tags['AMP-LIVE-LIST [pagination]'],
                $this->tags['AMP-LIVE-LIST [update]'],
                $this->tags['AMP-MEGA-MENU > AMP-LIST'],
                $this->tags['AMP-MEGA-MENU > AMP-LIST > TEMPLATE'],
                $this->tags['AMP-MEGA-MENU > NAV'],
                $this->tags['AMP-MEGA-MENU item-content'],
                $this->tags['AMP-MEGA-MENU item-heading'],
                $this->tags['AMP-MEGA-MENU NAV > UL/OL'],
                $this->tags['AMP-MEGA-MENU NAV > UL/OL > LI'],
                $this->tags['AMP-NEXT-PAGE > [footer]'],
                $this->tags['AMP-NEXT-PAGE > [recommendation-box]'],
                $this->tags['AMP-NEXT-PAGE > [separator]'],
                $this->tags['AMP-SELECTOR child'],
                $this->tags['AMP-SELECTOR option'],
                $this->tags['AMP-STORY-CTA-LAYER animate-in'],
                $this->tags['AMP-STORY-GRID-LAYER animate-in'],
                $this->tags['AMP-STORY-GRID-LAYER default'],
                $this->tags['AMP-VIDEO-IFRAME > I-AMPHTML-SIZER [style]'],
                $this->tags['AMP-VIDEO-IFRAME > [placeholder]'],
            ],
            'AMP-BEOPINION' => [
                $this->tags['AMP-BEOPINION'],
            ],
            'AMP-BIND-MACRO' => [
                $this->tags['AMP-BIND-MACRO'],
            ],
            'AMP-BODYMOVIN-ANIMATION' => [
                $this->tags['AMP-BODYMOVIN-ANIMATION'],
            ],
            'AMP-BRID-PLAYER' => [
                $this->tags['AMP-BRID-PLAYER'],
            ],
            'AMP-BRIGHTCOVE' => [
                $this->tags['AMP-BRIGHTCOVE'],
            ],
            'AMP-BYSIDE-CONTENT' => [
                $this->tags['AMP-BYSIDE-CONTENT'],
            ],
            'AMP-CALL-TRACKING' => [
                $this->tags['AMP-CALL-TRACKING'],
            ],
            'AMP-CAROUSEL' => [
                $this->tags['AMP-CAROUSEL'],
                $this->tags['AMP-CAROUSEL lightbox'],
            ],
            'AMP-CONNATIX-PLAYER' => [
                $this->tags['AMP-CONNATIX-PLAYER'],
            ],
            'AMP-CONSENT' => [
                $this->tags['AMP-CONSENT'],
                $this->tags['amp-consent [type]'],
            ],
            'AMP-DAILYMOTION' => [
                $this->tags['AMP-DAILYMOTION'],
            ],
            'AMP-DATE-COUNTDOWN' => [
                $this->tags['AMP-DATE-COUNTDOWN'],
            ],
            'AMP-DATE-DISPLAY' => [
                $this->tags['AMP-DATE-DISPLAY'],
            ],
            'TEMPLATE' => [
                $this->tags['amp-date-picker > template [date-template]'],
                $this->tags['amp-date-picker > template [info-template]'],
                $this->tags['amp-story-auto-ads > template'],
                $this->tags['TEMPLATE'],
                $this->tags['TEMPLATE (AMP4EMAIL)'],
            ],
            'AMP-DATE-PICKER' => [
                $this->tags['amp-date-picker[type=range][mode=overlay]'],
                $this->tags['amp-date-picker[type=range][mode=static]'],
                $this->tags['amp-date-picker[type=single][mode=overlay]'],
                $this->tags['amp-date-picker[type=single][mode=static]'],
            ],
            'AMP-DELIGHT-PLAYER' => [
                $this->tags['AMP-DELIGHT-PLAYER'],
            ],
            'AMP-EMBED' => [
                $this->tags['AMP-EMBED'],
                $this->tags['amp-embed with data-multi-size attribute'],
            ],
            'AMP-EMBEDLY-CARD' => [
                $this->tags['AMP-EMBEDLY-CARD'],
            ],
            'AMP-EMBEDLY-KEY' => [
                $this->tags['AMP-EMBEDLY-KEY'],
            ],
            'AMP-EXPERIMENT' => [
                $this->tags['AMP-EXPERIMENT'],
            ],
            'AMP-FACEBOOK' => [
                $this->tags['AMP-FACEBOOK'],
            ],
            'AMP-FACEBOOK-COMMENTS' => [
                $this->tags['AMP-FACEBOOK-COMMENTS'],
            ],
            'AMP-FACEBOOK-LIKE' => [
                $this->tags['AMP-FACEBOOK-LIKE'],
            ],
            'AMP-FACEBOOK-PAGE' => [
                $this->tags['AMP-FACEBOOK-PAGE'],
            ],
            'AMP-FIT-TEXT' => [
                $this->tags['AMP-FIT-TEXT'],
            ],
            'AMP-FONT' => [
                $this->tags['AMP-FONT'],
            ],
            'AMP-FX-FLYING-CARPET' => [
                $this->tags['AMP-FX-FLYING-CARPET'],
            ],
            'AMP-GEO' => [
                $this->tags['AMP-GEO'],
            ],
            'AMP-GFYCAT' => [
                $this->tags['AMP-GFYCAT'],
            ],
            'AMP-GIST' => [
                $this->tags['AMP-GIST'],
            ],
            'AMP-GOOGLE-DOCUMENT-EMBED' => [
                $this->tags['AMP-GOOGLE-DOCUMENT-EMBED'],
            ],
            'AMP-GWD-ANIMATION' => [
                $this->tags['AMP-GWD-ANIMATION'],
            ],
            'AMP-HULU' => [
                $this->tags['AMP-HULU'],
            ],
            'AMP-IFRAME' => [
                $this->tags['AMP-IFRAME'],
            ],
            'AMP-IMA-VIDEO' => [
                $this->tags['AMP-IMA-VIDEO'],
            ],
            'AMP-IMAGE-LIGHTBOX' => [
                $this->tags['AMP-IMAGE-LIGHTBOX'],
            ],
            'AMP-IMAGE-SLIDER' => [
                $this->tags['AMP-IMAGE-SLIDER'],
                $this->tags['amp-image-slider (transformed)'],
            ],
            'DIV' => [
                $this->tags['AMP-IMAGE-SLIDER > DIV [first]'],
                $this->tags['AMP-IMAGE-SLIDER > DIV [second]'],
                $this->tags['AMP-LIST DIV [fetch-error]'],
                $this->tags['DIV'],
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
            'AMP-IMG' => [
                $this->tags['AMP-IMG'],
                $this->tags['AMP-IMG (AMP4EMAIL)'],
                $this->tags['amp-img (transformed)'],
            ],
            'IMG' => [
                $this->tags['amp-img > img (transformed)'],
                $this->tags['amp-img > img[placeholder] (transformed)'],
                $this->tags['IMG-I-AMPHTML-INTRINSIC-SIZER'],
                $this->tags['noscript > img'],
            ],
            'AMP-IMGUR' => [
                $this->tags['AMP-IMGUR'],
            ],
            'AMP-INLINE-GALLERY' => [
                $this->tags['AMP-INLINE-GALLERY'],
            ],
            'AMP-INLINE-GALLERY-PAGINATION' => [
                $this->tags['amp-inline-gallery-pagination'],
                $this->tags['amp-inline-gallery-pagination [inset]'],
            ],
            'AMP-INLINE-GALLERY-THUMBNAILS' => [
                $this->tags['AMP-INLINE-GALLERY-THUMBNAILS'],
            ],
            'AMP-INSTAGRAM' => [
                $this->tags['AMP-INSTAGRAM'],
            ],
            'AMP-INSTALL-SERVICEWORKER' => [
                $this->tags['AMP-INSTALL-SERVICEWORKER'],
            ],
            'AMP-IZLESENE' => [
                $this->tags['AMP-IZLESENE'],
            ],
            'AMP-JWPLAYER' => [
                $this->tags['AMP-JWPLAYER'],
            ],
            'AMP-KALTURA-PLAYER' => [
                $this->tags['AMP-KALTURA-PLAYER'],
            ],
            'AMP-LAYOUT' => [
                $this->tags['AMP-LAYOUT'],
            ],
            'AMP-LIGHTBOX' => [
                $this->tags['AMP-LIGHTBOX'],
                $this->tags['amp-lightbox [AMP4ADS]'],
            ],
            'AMP-LINK-REWRITER' => [
                $this->tags['AMP-LINK-REWRITER'],
            ],
            'AMP-LIST' => [
                $this->tags['AMP-LIST'],
                $this->tags['AMP-LIST (AMP4EMAIL)'],
            ],
            'AMP-LIST-LOAD-MORE' => [
                $this->tags['AMP-LIST-LOAD-MORE'],
            ],
            'AMP-LIVE-LIST' => [
                $this->tags['AMP-LIVE-LIST'],
            ],
            'AMP-MATHML' => [
                $this->tags['AMP-MATHML'],
            ],
            'AMP-MEGA-MENU' => [
                $this->tags['AMP-MEGA-MENU'],
            ],
            'AMP-MEGAPHONE' => [
                $this->tags['amp-megaphone [data-episode]'],
                $this->tags['amp-megaphone [data-playlist]'],
            ],
            'AMP-MINUTE-MEDIA-PLAYER' => [
                $this->tags['AMP-MINUTE-MEDIA-PLAYER'],
            ],
            'AMP-MOWPLAYER' => [
                $this->tags['AMP-MOWPLAYER'],
            ],
            'AMP-NESTED-MENU' => [
                $this->tags['AMP-NESTED-MENU'],
            ],
            'AMP-NEXT-PAGE' => [
                $this->tags['amp-next-page with inline config'],
                $this->tags['amp-next-page with src attribute'],
                $this->tags['amp-next-page [type=adsense]'],
            ],
            'AMP-NEXXTV-PLAYER' => [
                $this->tags['AMP-NEXXTV-PLAYER'],
            ],
            'AMP-O2-PLAYER' => [
                $this->tags['AMP-O2-PLAYER'],
            ],
            'AMP-ONETAP-GOOGLE' => [
                $this->tags['AMP-ONETAP-GOOGLE'],
            ],
            'AMP-OOYALA-PLAYER' => [
                $this->tags['AMP-OOYALA-PLAYER'],
            ],
            'AMP-ORIENTATION-OBSERVER' => [
                $this->tags['AMP-ORIENTATION-OBSERVER'],
            ],
            'AMP-PAN-ZOOM' => [
                $this->tags['AMP-PAN-ZOOM'],
            ],
            'AMP-PINTEREST' => [
                $this->tags['AMP-PINTEREST'],
            ],
            'AMP-PIXEL' => [
                $this->tags['AMP-PIXEL'],
            ],
            'AMP-PLAYBUZZ' => [
                $this->tags['AMP-PLAYBUZZ'],
            ],
            'AMP-POSITION-OBSERVER' => [
                $this->tags['AMP-POSITION-OBSERVER'],
            ],
            'AMP-POWR-PLAYER' => [
                $this->tags['AMP-POWR-PLAYER'],
            ],
            'AMP-REACH-PLAYER' => [
                $this->tags['AMP-REACH-PLAYER'],
            ],
            'AMP-RECAPTCHA-INPUT' => [
                $this->tags['AMP-RECAPTCHA-INPUT'],
            ],
            'AMP-REDBULL-PLAYER' => [
                $this->tags['AMP-REDBULL-PLAYER'],
            ],
            'AMP-REDDIT' => [
                $this->tags['AMP-REDDIT'],
            ],
            'AMP-RIDDLE-QUIZ' => [
                $this->tags['AMP-RIDDLE-QUIZ'],
            ],
            'AMP-SCRIPT' => [
                $this->tags['AMP-SCRIPT'],
            ],
            'AMP-SELECTOR' => [
                $this->tags['AMP-SELECTOR'],
            ],
            'AMP-SIDEBAR' => [
                $this->tags['amp-sidebar'],
                $this->tags['amp-sidebar (AMP4EMAIL)'],
                $this->tags['amp-story >> amp-sidebar'],
            ],
            'NAV' => [
                $this->tags['amp-sidebar > nav'],
                $this->tags['NAV'],
            ],
            'AMP-SKIMLINKS' => [
                $this->tags['AMP-SKIMLINKS'],
            ],
            'AMP-SMARTLINKS' => [
                $this->tags['AMP-SMARTLINKS'],
            ],
            'AMP-SOCIAL-SHARE' => [
                $this->tags['AMP-SOCIAL-SHARE'],
            ],
            'AMP-SOUNDCLOUD' => [
                $this->tags['AMP-SOUNDCLOUD'],
            ],
            'AMP-SPRINGBOARD-PLAYER' => [
                $this->tags['AMP-SPRINGBOARD-PLAYER'],
            ],
            'AMP-STATE' => [
                $this->tags['amp-state'],
                $this->tags['amp-state (AMP4EMAIL)'],
            ],
            'AMP-STICKY-AD' => [
                $this->tags['AMP-STICKY-AD'],
            ],
            'AMP-STORY' => [
                $this->tags['AMP-STORY'],
            ],
            'AMP-STORY-360' => [
                $this->tags['AMP-STORY-360'],
            ],
            'AMP-STORY-ANIMATION' => [
                $this->tags['AMP-STORY-ANIMATION'],
            ],
            'AMP-STORY-AUTO-ADS' => [
                $this->tags['AMP-STORY-AUTO-ADS'],
            ],
            'AMP-STORY-BOOKEND' => [
                $this->tags['AMP-STORY-BOOKEND'],
            ],
            'AMP-STORY-CONSENT' => [
                $this->tags['AMP-STORY-CONSENT'],
            ],
            'AMP-STORY-CTA-LAYER' => [
                $this->tags['AMP-STORY-CTA-LAYER'],
            ],
            'AMP-STORY-GRID-LAYER' => [
                $this->tags['AMP-STORY-GRID-LAYER'],
            ],
            'AMP-STORY-INTERACTIVE-BINARY-POLL' => [
                $this->tags['AMP-STORY-INTERACTIVE-BINARY-POLL'],
            ],
            'AMP-STORY-INTERACTIVE-POLL' => [
                $this->tags['AMP-STORY-INTERACTIVE-POLL'],
            ],
            'AMP-STORY-INTERACTIVE-QUIZ' => [
                $this->tags['AMP-STORY-INTERACTIVE-QUIZ'],
            ],
            'AMP-STORY-INTERACTIVE-RESULTS' => [
                $this->tags['AMP-STORY-INTERACTIVE-RESULTS'],
            ],
            'AMP-STORY-PAGE' => [
                $this->tags['AMP-STORY-PAGE'],
            ],
            'AMP-STORY-PAGE-ATTACHMENT' => [
                $this->tags['amp-story-page-attachment'],
                $this->tags['amp-story-page-attachment[href]'],
            ],
            'AMP-STORY-PANNING-MEDIA' => [
                $this->tags['AMP-STORY-PANNING-MEDIA'],
            ],
            'AMP-STORY-PLAYER' => [
                $this->tags['AMP-STORY-PLAYER'],
            ],
            'AMP-VIDEO' => [
                $this->tags['amp-story >> amp-story-page-attachment >> amp-video'],
                $this->tags['amp-story >> amp-video'],
                $this->tags['AMP-VIDEO'],
            ],
            'AMP-TIMEAGO' => [
                $this->tags['AMP-TIMEAGO'],
            ],
            'AMP-TRUNCATE-TEXT' => [
                $this->tags['AMP-TRUNCATE-TEXT'],
            ],
            'AMP-TWITTER' => [
                $this->tags['AMP-TWITTER'],
            ],
            'AMP-USER-NOTIFICATION' => [
                $this->tags['AMP-USER-NOTIFICATION'],
            ],
            'AMP-VIDEO-IFRAME' => [
                $this->tags['AMP-VIDEO-IFRAME with [placeholder]'],
                $this->tags['AMP-VIDEO-IFRAME with [placeholder] (transformed)'],
                $this->tags['AMP-VIDEO-IFRAME[poster]'],
            ],
            'AMP-VIMEO' => [
                $this->tags['AMP-VIMEO'],
            ],
            'AMP-VINE' => [
                $this->tags['AMP-VINE'],
            ],
            'AMP-VIQEO-PLAYER' => [
                $this->tags['AMP-VIQEO-PLAYER'],
            ],
            'AMP-VK' => [
                $this->tags['AMP-VK'],
            ],
            'AMP-WEB-PUSH' => [
                $this->tags['AMP-WEB-PUSH'],
            ],
            'AMP-WEB-PUSH-WIDGET' => [
                $this->tags['AMP-WEB-PUSH-WIDGET'],
            ],
            'AMP-WISTIA-PLAYER' => [
                $this->tags['AMP-WISTIA-PLAYER'],
            ],
            'AMP-YOTPO' => [
                $this->tags['AMP-YOTPO'],
            ],
            'AMP-YOUTUBE' => [
                $this->tags['AMP-YOUTUBE'],
            ],
            'ARTICLE' => [
                $this->tags['ARTICLE'],
            ],
            'ASIDE' => [
                $this->tags['ASIDE'],
            ],
            'AUDIO' => [
                $this->tags['AUDIO'],
            ],
            'B' => [
                $this->tags['B'],
            ],
            'BASE' => [
                $this->tags['BASE'],
            ],
            'BDI' => [
                $this->tags['BDI'],
            ],
            'BDO' => [
                $this->tags['BDO'],
            ],
            'BIG' => [
                $this->tags['BIG'],
            ],
            'BLOCKQUOTE' => [
                $this->tags['BLOCKQUOTE'],
            ],
            'BODY' => [
                $this->tags['BODY'],
            ],
            'BR' => [
                $this->tags['BR'],
            ],
            'CANVAS' => [
                $this->tags['CANVAS'],
            ],
            'CAPTION' => [
                $this->tags['CAPTION'],
            ],
            'CENTER' => [
                $this->tags['CENTER'],
            ],
            'CIRCLE' => [
                $this->tags['CIRCLE'],
            ],
            'CITE' => [
                $this->tags['CITE'],
            ],
            'CLIPPATH' => [
                $this->tags['CLIPPATH'],
            ],
            'CODE' => [
                $this->tags['CODE'],
            ],
            'COL' => [
                $this->tags['COL'],
            ],
            'COLGROUP' => [
                $this->tags['COLGROUP'],
            ],
            'DATA' => [
                $this->tags['DATA'],
            ],
            'DATALIST' => [
                $this->tags['DATALIST'],
            ],
            'DD' => [
                $this->tags['DD'],
            ],
            'DEFS' => [
                $this->tags['DEFS'],
            ],
            'DEL' => [
                $this->tags['DEL'],
            ],
            'DESC' => [
                $this->tags['DESC'],
            ],
            'DETAILS' => [
                $this->tags['DETAILS'],
            ],
            'DFN' => [
                $this->tags['DFN'],
            ],
            'DIR' => [
                $this->tags['DIR'],
            ],
            'DL' => [
                $this->tags['DL'],
            ],
            'DT' => [
                $this->tags['DT'],
            ],
            'ELLIPSE' => [
                $this->tags['ELLIPSE'],
            ],
            'EM' => [
                $this->tags['EM'],
            ],
            'FECOLORMATRIX' => [
                $this->tags['FECOLORMATRIX'],
            ],
            'FECOMPOSITE' => [
                $this->tags['FECOMPOSITE'],
            ],
            'FEFLOOD' => [
                $this->tags['FEFLOOD'],
            ],
            'FEGAUSSIANBLUR' => [
                $this->tags['FEGAUSSIANBLUR'],
            ],
            'FEMERGE' => [
                $this->tags['FEMERGE'],
            ],
            'FEMERGENODE' => [
                $this->tags['FEMERGENODE'],
            ],
            'FEOFFSET' => [
                $this->tags['FEOFFSET'],
            ],
            'FIELDSET' => [
                $this->tags['FIELDSET'],
            ],
            'FIGCAPTION' => [
                $this->tags['FIGCAPTION'],
            ],
            'FIGURE' => [
                $this->tags['FIGURE'],
            ],
            'FILTER' => [
                $this->tags['FILTER'],
            ],
            'FOOTER' => [
                $this->tags['FOOTER'],
            ],
            'FORM' => [
                $this->tags['FORM [method=GET]'],
                $this->tags['FORM [method=GET] (AMP4EMAIL)'],
                $this->tags['FORM [method=POST]'],
                $this->tags['FORM [method=POST] (AMP4EMAIL)'],
            ],
            'G' => [
                $this->tags['G'],
            ],
            'GLYPH' => [
                $this->tags['GLYPH'],
            ],
            'GLYPHREF' => [
                $this->tags['GLYPHREF'],
            ],
            'H1' => [
                $this->tags['H1'],
            ],
            'H2' => [
                $this->tags['H2'],
                $this->tags['h2 amp-nested-menu'],
            ],
            'H3' => [
                $this->tags['H3'],
                $this->tags['h3 amp-nested-menu'],
            ],
            'H4' => [
                $this->tags['H4'],
                $this->tags['h4 amp-nested-menu'],
            ],
            'H5' => [
                $this->tags['H5'],
                $this->tags['h5 amp-nested-menu'],
            ],
            'H6' => [
                $this->tags['H6'],
                $this->tags['h6 amp-nested-menu'],
            ],
            'HEAD' => [
                $this->tags['HEAD'],
            ],
            'STYLE' => [
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
            'HEADER' => [
                $this->tags['HEADER'],
            ],
            'HGROUP' => [
                $this->tags['HGROUP'],
            ],
            'HKERN' => [
                $this->tags['HKERN'],
            ],
            'HR' => [
                $this->tags['HR'],
            ],
            'HTML' => [
                $this->tags['HTML'],
                $this->tags['html (transformed)'],
            ],
            '!DOCTYPE' => [
                $this->tags['html doctype'],
                $this->tags['html doctype (AMP4ADS)'],
            ],
            'I' => [
                $this->tags['I'],
            ],
            'I-AMPHTML-SIZER' => [
                $this->tags['I-AMPHTML-SIZER-INTRINSIC'],
                $this->tags['I-AMPHTML-SIZER-RESPONSIVE'],
            ],
            'IFRAME' => [
                $this->tags['IFRAME'],
            ],
            'IMAGE' => [
                $this->tags['IMAGE'],
            ],
            'INS' => [
                $this->tags['INS'],
            ],
            'KBD' => [
                $this->tags['KBD'],
            ],
            'LABEL' => [
                $this->tags['LABEL'],
            ],
            'LEGEND' => [
                $this->tags['LEGEND'],
            ],
            'LI' => [
                $this->tags['LI'],
            ],
            'LINE' => [
                $this->tags['LINE'],
            ],
            'LINEARGRADIENT' => [
                $this->tags['LINEARGRADIENT'],
            ],
            'STOP' => [
                $this->tags['lineargradient > stop'],
                $this->tags['radialgradient > stop'],
            ],
            'LINK' => [
                $this->tags['link itemprop='],
                $this->tags['link itemprop=sameAs'],
                $this->tags['link property='],
                $this->tags['link rel='],
                $this->tags['link rel=canonical'],
                $this->tags['link rel=manifest'],
                $this->tags['link rel=preload'],
                $this->tags['link rel=stylesheet for fonts'],
            ],
            'LISTING' => [
                $this->tags['LISTING'],
            ],
            'MAIN' => [
                $this->tags['MAIN'],
            ],
            'MARK' => [
                $this->tags['MARK'],
            ],
            'MARKER' => [
                $this->tags['MARKER'],
            ],
            'MASK' => [
                $this->tags['MASK'],
            ],
            'META' => [
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
            'METADATA' => [
                $this->tags['METADATA'],
            ],
            'METER' => [
                $this->tags['METER'],
            ],
            'MULTICOL' => [
                $this->tags['MULTICOL'],
            ],
            'NEXTID' => [
                $this->tags['NEXTID'],
            ],
            'NOBR' => [
                $this->tags['NOBR'],
            ],
            'NOSCRIPT' => [
                $this->tags['NOSCRIPT'],
                $this->tags['noscript enclosure for boilerplate'],
                $this->tags['noscript enclosure for boilerplate (transformed)'],
            ],
            'O:P' => [
                $this->tags['O:P'],
            ],
            'OL' => [
                $this->tags['OL'],
            ],
            'OPTGROUP' => [
                $this->tags['OPTGROUP'],
            ],
            'OPTION' => [
                $this->tags['OPTION'],
            ],
            'OUTPUT' => [
                $this->tags['OUTPUT'],
            ],
            'P' => [
                $this->tags['P'],
            ],
            'PATH' => [
                $this->tags['PATH'],
            ],
            'PATTERN' => [
                $this->tags['PATTERN'],
            ],
            'PICTURE' => [
                $this->tags['PICTURE'],
            ],
            'POLYGON' => [
                $this->tags['POLYGON'],
            ],
            'POLYLINE' => [
                $this->tags['POLYLINE'],
            ],
            'PRE' => [
                $this->tags['PRE'],
            ],
            'PROGRESS' => [
                $this->tags['PROGRESS'],
            ],
            'Q' => [
                $this->tags['Q'],
            ],
            'RADIALGRADIENT' => [
                $this->tags['RADIALGRADIENT'],
            ],
            'RB' => [
                $this->tags['RB'],
            ],
            'RECT' => [
                $this->tags['RECT'],
            ],
            'RP' => [
                $this->tags['RP'],
            ],
            'RT' => [
                $this->tags['RT'],
            ],
            'RTC' => [
                $this->tags['RTC'],
            ],
            'RUBY' => [
                $this->tags['RUBY'],
            ],
            'S' => [
                $this->tags['S'],
            ],
            'SAMP' => [
                $this->tags['SAMP'],
            ],
            'SELECT' => [
                $this->tags['SELECT'],
            ],
            'SLOT' => [
                $this->tags['SLOT'],
            ],
            'SMALL' => [
                $this->tags['SMALL'],
            ],
            'SOLIDCOLOR' => [
                $this->tags['SOLIDCOLOR'],
            ],
            'SPACER' => [
                $this->tags['SPACER'],
            ],
            'SPAN' => [
                $this->tags['SPAN'],
                $this->tags['span amp-nested-menu'],
                $this->tags['span swg_amp_cache_nonce'],
            ],
            'STRIKE' => [
                $this->tags['STRIKE'],
            ],
            'STRONG' => [
                $this->tags['STRONG'],
            ],
            'SUB' => [
                $this->tags['SUB'],
            ],
            'SUMMARY' => [
                $this->tags['SUMMARY'],
            ],
            'SUP' => [
                $this->tags['SUP'],
            ],
            'SVG' => [
                $this->tags['SVG'],
            ],
            'TITLE' => [
                $this->tags['svg title'],
                $this->tags['title'],
                $this->tags['title [AMP4EMAIL]'],
            ],
            'SWITCH' => [
                $this->tags['SWITCH'],
            ],
            'SYMBOL' => [
                $this->tags['SYMBOL'],
            ],
            'TABLE' => [
                $this->tags['TABLE'],
            ],
            'TBODY' => [
                $this->tags['TBODY'],
            ],
            'TD' => [
                $this->tags['TD'],
            ],
            'TEXT' => [
                $this->tags['TEXT'],
            ],
            'TEXTAREA' => [
                $this->tags['TEXTAREA'],
            ],
            'TEXTPATH' => [
                $this->tags['TEXTPATH'],
            ],
            'TFOOT' => [
                $this->tags['TFOOT'],
            ],
            'TH' => [
                $this->tags['TH'],
            ],
            'THEAD' => [
                $this->tags['THEAD'],
            ],
            'TIME' => [
                $this->tags['TIME'],
            ],
            'TR' => [
                $this->tags['TR'],
            ],
            'TREF' => [
                $this->tags['TREF'],
            ],
            'TSPAN' => [
                $this->tags['TSPAN'],
            ],
            'TT' => [
                $this->tags['TT'],
            ],
            'U' => [
                $this->tags['U'],
            ],
            'UL' => [
                $this->tags['UL'],
            ],
            'USE' => [
                $this->tags['USE'],
            ],
            'VAR' => [
                $this->tags['VAR'],
            ],
            'VIDEO' => [
                $this->tags['VIDEO'],
            ],
            'VIEW' => [
                $this->tags['VIEW'],
            ],
            'VKERN' => [
                $this->tags['VKERN'],
            ],
            'WBR' => [
                $this->tags['WBR'],
            ],
        ];
        $this->bySpecName = [
            'A (AMP4EMAIL)' => [
                $this->tags['A (AMP4EMAIL)'],
            ],
            'amp-access extension .json script' => [
                $this->tags['amp-access extension .json script'],
            ],
            'amp-accordion > section' => [
                $this->tags['amp-accordion > section'],
            ],
            'amp-ad-exit configuration JSON' => [
                $this->tags['amp-ad-exit configuration JSON'],
            ],
            'amp-ad extension script' => [
                $this->tags['amp-ad extension script'],
            ],
            'amp-ad with data-enable-refresh attribute' => [
                $this->tags['amp-ad with data-enable-refresh attribute'],
            ],
            'amp-ad with data-multi-size attribute' => [
                $this->tags['amp-ad with data-multi-size attribute'],
            ],
            'amp-ad with type=custom' => [
                $this->tags['amp-ad with type=custom'],
            ],
            'amp-analytics extension .json script' => [
                $this->tags['amp-analytics extension .json script'],
            ],
            'AMP-ANIM (AMP4EMAIL)' => [
                $this->tags['AMP-ANIM (AMP4EMAIL)'],
            ],
            'amp-animation extension .json script' => [
                $this->tags['amp-animation extension .json script'],
            ],
            'amp-anim extension script (AMP4EMAIL)' => [
                $this->tags['amp-anim extension script (AMP4EMAIL)'],
            ],
            'amp-app-banner button[open-button]' => [
                $this->tags['amp-app-banner button[open-button]'],
            ],
            'amp-audio (A4A)' => [
                $this->tags['amp-audio (A4A)'],
            ],
            'amp-audio > source' => [
                $this->tags['amp-audio > source'],
            ],
            'amp-audio > track' => [
                $this->tags['amp-audio > track'],
            ],
            'amp-audio > track[kind=subtitles]' => [
                $this->tags['amp-audio > track[kind=subtitles]'],
            ],
            'amp-autocomplete' => [
                $this->tags['amp-autocomplete'],
            ],
            'AMP-AUTOCOMPLETE (AMP4EMAIL)' => [
                $this->tags['AMP-AUTOCOMPLETE (AMP4EMAIL)'],
            ],
            'amp-autocomplete > input' => [
                $this->tags['amp-autocomplete > input'],
            ],
            'amp-autocomplete JSON' => [
                $this->tags['amp-autocomplete JSON'],
            ],
            'AMP-BASE-CAROUSEL lightbox [child]' => [
                $this->tags['AMP-BASE-CAROUSEL lightbox [child]'],
            ],
            'AMP-BASE-CAROUSEL lightbox [lightbox-exclude]' => [
                $this->tags['AMP-BASE-CAROUSEL lightbox [lightbox-exclude]'],
            ],
            'AMP-BASE-CAROUSEL [lightbox]' => [
                $this->tags['AMP-BASE-CAROUSEL [lightbox]'],
            ],
            'amp-bind extension .json script' => [
                $this->tags['amp-bind extension .json script'],
            ],
            'AMP-CAROUSEL' => [
                $this->tags['AMP-CAROUSEL'],
            ],
            'AMP-CAROUSEL lightbox' => [
                $this->tags['AMP-CAROUSEL lightbox'],
            ],
            'AMP-CAROUSEL lightbox [child]' => [
                $this->tags['AMP-CAROUSEL lightbox [child]'],
            ],
            'AMP-CAROUSEL lightbox [lightbox-exclude]' => [
                $this->tags['AMP-CAROUSEL lightbox [lightbox-exclude]'],
            ],
            'amp-consent extension .json script' => [
                $this->tags['amp-consent extension .json script'],
            ],
            'amp-consent [type]' => [
                $this->tags['amp-consent [type]'],
            ],
            'amp-date-picker > template [date-template]' => [
                $this->tags['amp-date-picker > template [date-template]'],
            ],
            'amp-date-picker > template [info-template]' => [
                $this->tags['amp-date-picker > template [info-template]'],
            ],
            'amp-date-picker[type=range][mode=overlay]' => [
                $this->tags['amp-date-picker[type=range][mode=overlay]'],
            ],
            'amp-date-picker[type=range][mode=static]' => [
                $this->tags['amp-date-picker[type=range][mode=static]'],
            ],
            'amp-date-picker[type=single][mode=overlay]' => [
                $this->tags['amp-date-picker[type=single][mode=overlay]'],
            ],
            'amp-date-picker[type=single][mode=static]' => [
                $this->tags['amp-date-picker[type=single][mode=static]'],
            ],
            'amp-embed with data-multi-size attribute' => [
                $this->tags['amp-embed with data-multi-size attribute'],
            ],
            'amp-experiment extension .json script' => [
                $this->tags['amp-experiment extension .json script'],
            ],
            'amp-experiment story extension .json script' => [
                $this->tags['amp-experiment story extension .json script'],
            ],
            'amp-geo extension .json script' => [
                $this->tags['amp-geo extension .json script'],
            ],
            'amp-ima-video > script[type=application/json]' => [
                $this->tags['amp-ima-video > script[type=application/json]'],
            ],
            'amp-ima-video > source' => [
                $this->tags['amp-ima-video > source'],
            ],
            'amp-ima-video > track' => [
                $this->tags['amp-ima-video > track'],
            ],
            'amp-ima-video > track[kind=subtitles]' => [
                $this->tags['amp-ima-video > track[kind=subtitles]'],
            ],
            'amp-image-slider (transformed)' => [
                $this->tags['amp-image-slider (transformed)'],
            ],
            'AMP-IMAGE-SLIDER > DIV [first]' => [
                $this->tags['AMP-IMAGE-SLIDER > DIV [first]'],
            ],
            'AMP-IMAGE-SLIDER > DIV [second]' => [
                $this->tags['AMP-IMAGE-SLIDER > DIV [second]'],
            ],
            'AMP-IMG (AMP4EMAIL)' => [
                $this->tags['AMP-IMG (AMP4EMAIL)'],
            ],
            'amp-img (transformed)' => [
                $this->tags['amp-img (transformed)'],
            ],
            'amp-img > img (transformed)' => [
                $this->tags['amp-img > img (transformed)'],
            ],
            'amp-img > img[placeholder] (transformed)' => [
                $this->tags['amp-img > img[placeholder] (transformed)'],
            ],
            'amp-inline-gallery-pagination' => [
                $this->tags['amp-inline-gallery-pagination'],
            ],
            'amp-inline-gallery-pagination [inset]' => [
                $this->tags['amp-inline-gallery-pagination [inset]'],
            ],
            'amp-lightbox [AMP4ADS]' => [
                $this->tags['amp-lightbox [AMP4ADS]'],
            ],
            'amp-link-rewriter extension .json script' => [
                $this->tags['amp-link-rewriter extension .json script'],
            ],
            'AMP-LIST (AMP4EMAIL)' => [
                $this->tags['AMP-LIST (AMP4EMAIL)'],
            ],
            'amp-list-load-more button[load-more-clickable]' => [
                $this->tags['amp-list-load-more button[load-more-clickable]'],
            ],
            'AMP-LIST DIV [fetch-error]' => [
                $this->tags['AMP-LIST DIV [fetch-error]'],
            ],
            'AMP-LIVE-LIST [items]' => [
                $this->tags['AMP-LIVE-LIST [items]'],
            ],
            'AMP-LIVE-LIST [items] item' => [
                $this->tags['AMP-LIVE-LIST [items] item'],
            ],
            'AMP-LIVE-LIST [pagination]' => [
                $this->tags['AMP-LIVE-LIST [pagination]'],
            ],
            'AMP-LIVE-LIST [update]' => [
                $this->tags['AMP-LIVE-LIST [update]'],
            ],
            'AMP-MEGA-MENU > AMP-LIST' => [
                $this->tags['AMP-MEGA-MENU > AMP-LIST'],
            ],
            'AMP-MEGA-MENU > AMP-LIST > TEMPLATE' => [
                $this->tags['AMP-MEGA-MENU > AMP-LIST > TEMPLATE'],
            ],
            'AMP-MEGA-MENU > NAV' => [
                $this->tags['AMP-MEGA-MENU > NAV'],
            ],
            'AMP-MEGA-MENU item-content' => [
                $this->tags['AMP-MEGA-MENU item-content'],
            ],
            'AMP-MEGA-MENU item-heading' => [
                $this->tags['AMP-MEGA-MENU item-heading'],
            ],
            'AMP-MEGA-MENU NAV > UL/OL' => [
                $this->tags['AMP-MEGA-MENU NAV > UL/OL'],
            ],
            'AMP-MEGA-MENU NAV > UL/OL > LI' => [
                $this->tags['AMP-MEGA-MENU NAV > UL/OL > LI'],
            ],
            'amp-megaphone [data-episode]' => [
                $this->tags['amp-megaphone [data-episode]'],
            ],
            'amp-megaphone [data-playlist]' => [
                $this->tags['amp-megaphone [data-playlist]'],
            ],
            'AMP-NEXT-PAGE > SCRIPT[type=application/json]' => [
                $this->tags['AMP-NEXT-PAGE > SCRIPT[type=application/json]'],
            ],
            'AMP-NEXT-PAGE > [footer]' => [
                $this->tags['AMP-NEXT-PAGE > [footer]'],
            ],
            'AMP-NEXT-PAGE > [recommendation-box]' => [
                $this->tags['AMP-NEXT-PAGE > [recommendation-box]'],
            ],
            'AMP-NEXT-PAGE > [separator]' => [
                $this->tags['AMP-NEXT-PAGE > [separator]'],
            ],
            'amp-next-page with inline config' => [
                $this->tags['amp-next-page with inline config'],
            ],
            'amp-next-page with src attribute' => [
                $this->tags['amp-next-page with src attribute'],
            ],
            'amp-next-page [type=adsense]' => [
                $this->tags['amp-next-page [type=adsense]'],
            ],
            'amp-script extension local script' => [
                $this->tags['amp-script extension local script'],
            ],
            'AMP-SELECTOR child' => [
                $this->tags['AMP-SELECTOR child'],
            ],
            'AMP-SELECTOR option' => [
                $this->tags['AMP-SELECTOR option'],
            ],
            'amp-sidebar' => [
                $this->tags['amp-sidebar'],
            ],
            'amp-sidebar (AMP4EMAIL)' => [
                $this->tags['amp-sidebar (AMP4EMAIL)'],
            ],
            'amp-sidebar > nav' => [
                $this->tags['amp-sidebar > nav'],
            ],
            'amp-state' => [
                $this->tags['amp-state'],
            ],
            'amp-state (AMP4EMAIL)' => [
                $this->tags['amp-state (AMP4EMAIL)'],
            ],
            'amp-story-animation json script' => [
                $this->tags['amp-story-animation json script'],
            ],
            'amp-story-auto-ads > template' => [
                $this->tags['amp-story-auto-ads > template'],
            ],
            'amp-story-auto-ads config script' => [
                $this->tags['amp-story-auto-ads config script'],
            ],
            'amp-story-bookend extension .json script' => [
                $this->tags['amp-story-bookend extension .json script'],
            ],
            'amp-story-consent extension .json script' => [
                $this->tags['amp-story-consent extension .json script'],
            ],
            'AMP-STORY-CTA-LAYER animate-in' => [
                $this->tags['AMP-STORY-CTA-LAYER animate-in'],
            ],
            'AMP-STORY-GRID-LAYER animate-in' => [
                $this->tags['AMP-STORY-GRID-LAYER animate-in'],
            ],
            'AMP-STORY-GRID-LAYER default' => [
                $this->tags['AMP-STORY-GRID-LAYER default'],
            ],
            'amp-story-page-attachment' => [
                $this->tags['amp-story-page-attachment'],
            ],
            'amp-story-page-attachment[href]' => [
                $this->tags['amp-story-page-attachment[href]'],
            ],
            'amp-story >> amp-audio' => [
                $this->tags['amp-story >> amp-audio'],
            ],
            'amp-story >> amp-sidebar' => [
                $this->tags['amp-story >> amp-sidebar'],
            ],
            'amp-story >> amp-story-page-attachment >> amp-video' => [
                $this->tags['amp-story >> amp-story-page-attachment >> amp-video'],
            ],
            'amp-story >> amp-video' => [
                $this->tags['amp-story >> amp-video'],
            ],
            'amp-subscriptions extension .json script' => [
                $this->tags['amp-subscriptions extension .json script'],
            ],
            'AMP-VIDEO-IFRAME > I-AMPHTML-SIZER [style]' => [
                $this->tags['AMP-VIDEO-IFRAME > I-AMPHTML-SIZER [style]'],
            ],
            'AMP-VIDEO-IFRAME > [placeholder]' => [
                $this->tags['AMP-VIDEO-IFRAME > [placeholder]'],
            ],
            'AMP-VIDEO-IFRAME with [placeholder]' => [
                $this->tags['AMP-VIDEO-IFRAME with [placeholder]'],
            ],
            'AMP-VIDEO-IFRAME with [placeholder] (transformed)' => [
                $this->tags['AMP-VIDEO-IFRAME with [placeholder] (transformed)'],
            ],
            'AMP-VIDEO-IFRAME[poster]' => [
                $this->tags['AMP-VIDEO-IFRAME[poster]'],
            ],
            'amp-video > source' => [
                $this->tags['amp-video > source'],
            ],
            'amp-video > track' => [
                $this->tags['amp-video > track'],
            ],
            'amp-video > track[kind=subtitles]' => [
                $this->tags['amp-video > track[kind=subtitles]'],
            ],
            'amp-video extension script' => [
                $this->tags['amp-video extension script'],
            ],
            'amp4ads engine script' => [
                $this->tags['amp4ads engine script'],
            ],
            'amphtml engine script' => [
                $this->tags['amphtml engine script'],
            ],
            'amphtml engine script (LTS)' => [
                $this->tags['amphtml engine script (LTS)'],
            ],
            'amphtml engine script [AMP4EMAIL]' => [
                $this->tags['amphtml engine script [AMP4EMAIL]'],
            ],
            'audio > source' => [
                $this->tags['audio > source'],
            ],
            'audio > track' => [
                $this->tags['audio > track'],
            ],
            'audio > track[kind=subtitles]' => [
                $this->tags['audio > track[kind=subtitles]'],
            ],
            'button amp-nested-menu' => [
                $this->tags['button amp-nested-menu'],
            ],
            'cryptokeys .json script' => [
                $this->tags['cryptokeys .json script'],
            ],
            'div amp-nested-menu' => [
                $this->tags['div amp-nested-menu'],
            ],
            'FORM DIV [submit-error]' => [
                $this->tags['FORM DIV [submit-error]'],
            ],
            'FORM DIV [submit-error][template]' => [
                $this->tags['FORM DIV [submit-error][template]'],
            ],
            'FORM DIV [submit-success]' => [
                $this->tags['FORM DIV [submit-success]'],
            ],
            'FORM DIV [submit-success][template]' => [
                $this->tags['FORM DIV [submit-success][template]'],
            ],
            'FORM DIV [submitting]' => [
                $this->tags['FORM DIV [submitting]'],
            ],
            'FORM DIV [submitting][template]' => [
                $this->tags['FORM DIV [submitting][template]'],
            ],
            'FORM DIV [verify-error]' => [
                $this->tags['FORM DIV [verify-error]'],
            ],
            'FORM DIV [verify-error][template]' => [
                $this->tags['FORM DIV [verify-error][template]'],
            ],
            'FORM [method=GET]' => [
                $this->tags['FORM [method=GET]'],
            ],
            'FORM [method=GET] (AMP4EMAIL)' => [
                $this->tags['FORM [method=GET] (AMP4EMAIL)'],
            ],
            'FORM [method=POST]' => [
                $this->tags['FORM [method=POST]'],
            ],
            'FORM [method=POST] (AMP4EMAIL)' => [
                $this->tags['FORM [method=POST] (AMP4EMAIL)'],
            ],
            'h2 amp-nested-menu' => [
                $this->tags['h2 amp-nested-menu'],
            ],
            'h3 amp-nested-menu' => [
                $this->tags['h3 amp-nested-menu'],
            ],
            'h4 amp-nested-menu' => [
                $this->tags['h4 amp-nested-menu'],
            ],
            'h5 amp-nested-menu' => [
                $this->tags['h5 amp-nested-menu'],
            ],
            'h6 amp-nested-menu' => [
                $this->tags['h6 amp-nested-menu'],
            ],
            'head > style[amp-boilerplate]' => [
                $this->tags['head > style[amp-boilerplate]'],
            ],
            'head > style[amp-boilerplate] (transformed)' => [
                $this->tags['head > style[amp-boilerplate] (transformed)'],
            ],
            'head > style[amp4ads-boilerplate]' => [
                $this->tags['head > style[amp4ads-boilerplate]'],
            ],
            'head > style[amp4email-boilerplate]' => [
                $this->tags['head > style[amp4email-boilerplate]'],
            ],
            'html (transformed)' => [
                $this->tags['html (transformed)'],
            ],
            'html doctype' => [
                $this->tags['html doctype'],
            ],
            'html doctype (AMP4ADS)' => [
                $this->tags['html doctype (AMP4ADS)'],
            ],
            'I-AMPHTML-SIZER-INTRINSIC' => [
                $this->tags['I-AMPHTML-SIZER-INTRINSIC'],
            ],
            'I-AMPHTML-SIZER-RESPONSIVE' => [
                $this->tags['I-AMPHTML-SIZER-RESPONSIVE'],
            ],
            'IMG-I-AMPHTML-INTRINSIC-SIZER' => [
                $this->tags['IMG-I-AMPHTML-INTRINSIC-SIZER'],
            ],
            'input [mask=date-dd-mm-yyyy]' => [
                $this->tags['input [mask=date-dd-mm-yyyy]'],
            ],
            'input [mask=date-mm-dd-yyyy]' => [
                $this->tags['input [mask=date-mm-dd-yyyy]'],
            ],
            'input [mask=date-mm-yy]' => [
                $this->tags['input [mask=date-mm-yy]'],
            ],
            'input [mask=date-yyyy-mm-dd]' => [
                $this->tags['input [mask=date-yyyy-mm-dd]'],
            ],
            'input [mask=payment-card]' => [
                $this->tags['input [mask=payment-card]'],
            ],
            'input [mask] (custom mask)' => [
                $this->tags['input [mask] (custom mask)'],
            ],
            'INPUT [type=file]' => [
                $this->tags['INPUT [type=file]'],
            ],
            'INPUT [type=password]' => [
                $this->tags['INPUT [type=password]'],
            ],
            'lineargradient > stop' => [
                $this->tags['lineargradient > stop'],
            ],
            'link itemprop=' => [
                $this->tags['link itemprop='],
            ],
            'link itemprop=sameAs' => [
                $this->tags['link itemprop=sameAs'],
            ],
            'link property=' => [
                $this->tags['link property='],
            ],
            'link rel=' => [
                $this->tags['link rel='],
            ],
            'link rel=canonical' => [
                $this->tags['link rel=canonical'],
            ],
            'link rel=manifest' => [
                $this->tags['link rel=manifest'],
            ],
            'link rel=preload' => [
                $this->tags['link rel=preload'],
            ],
            'link rel=stylesheet for fonts' => [
                $this->tags['link rel=stylesheet for fonts'],
            ],
            'meta charset=utf-8' => [
                $this->tags['meta charset=utf-8'],
            ],
            'meta http-equiv=content-language' => [
                $this->tags['meta http-equiv=content-language'],
            ],
            'meta http-equiv=Content-Script-Type' => [
                $this->tags['meta http-equiv=Content-Script-Type'],
            ],
            'meta http-equiv=Content-Style-Type' => [
                $this->tags['meta http-equiv=Content-Style-Type'],
            ],
            'meta http-equiv=Content-Type' => [
                $this->tags['meta http-equiv=Content-Type'],
            ],
            'meta http-equiv=imagetoolbar' => [
                $this->tags['meta http-equiv=imagetoolbar'],
            ],
            'meta http-equiv=origin-trial' => [
                $this->tags['meta http-equiv=origin-trial'],
            ],
            'meta http-equiv=pics-label' => [
                $this->tags['meta http-equiv=pics-label'],
            ],
            'meta http-equiv=resource-type' => [
                $this->tags['meta http-equiv=resource-type'],
            ],
            'meta http-equiv=x-dns-prefetch-control' => [
                $this->tags['meta http-equiv=x-dns-prefetch-control'],
            ],
            'meta http-equiv=X-UA-Compatible' => [
                $this->tags['meta http-equiv=X-UA-Compatible'],
            ],
            'meta name=amp-3p-iframe-src' => [
                $this->tags['meta name=amp-3p-iframe-src'],
            ],
            'meta name=amp-ad-doubleclick-sra' => [
                $this->tags['meta name=amp-ad-doubleclick-sra'],
            ],
            'meta name=amp-ad-enable-refresh' => [
                $this->tags['meta name=amp-ad-enable-refresh'],
            ],
            'meta name=amp-consent-blocking' => [
                $this->tags['meta name=amp-consent-blocking'],
            ],
            'meta name=amp-cta-landing-page-type' => [
                $this->tags['meta name=amp-cta-landing-page-type'],
            ],
            'meta name=amp-cta-type' => [
                $this->tags['meta name=amp-cta-type'],
            ],
            'meta name=amp-cta-url' => [
                $this->tags['meta name=amp-cta-url'],
            ],
            'meta name=amp-experiment-token' => [
                $this->tags['meta name=amp-experiment-token'],
            ],
            'meta name=amp-experiments-opt-in' => [
                $this->tags['meta name=amp-experiments-opt-in'],
            ],
            'meta name=amp-google-clientid-id-api' => [
                $this->tags['meta name=amp-google-clientid-id-api'],
            ],
            'meta name=amp-link-variable-allowed-origin' => [
                $this->tags['meta name=amp-link-variable-allowed-origin'],
            ],
            'meta name=amp-list-load-more' => [
                $this->tags['meta name=amp-list-load-more'],
            ],
            'meta name=amp-recaptcha-input' => [
                $this->tags['meta name=amp-recaptcha-input'],
            ],
            'meta name=amp-script-src' => [
                $this->tags['meta name=amp-script-src'],
            ],
            'meta name=amp-story-generator-name' => [
                $this->tags['meta name=amp-story-generator-name'],
            ],
            'meta name=amp-story-generator-version' => [
                $this->tags['meta name=amp-story-generator-version'],
            ],
            'meta name=amp-to-amp-navigation' => [
                $this->tags['meta name=amp-to-amp-navigation'],
            ],
            'meta name=amp4ads-id' => [
                $this->tags['meta name=amp4ads-id'],
            ],
            'meta name=amp4ads-vars-*' => [
                $this->tags['meta name=amp4ads-vars-*'],
            ],
            'meta name= and content=' => [
                $this->tags['meta name= and content='],
            ],
            'meta name=apple-itunes-app' => [
                $this->tags['meta name=apple-itunes-app'],
            ],
            'meta name=viewport' => [
                $this->tags['meta name=viewport'],
            ],
            'noscript > img' => [
                $this->tags['noscript > img'],
            ],
            'noscript > style[amp-boilerplate]' => [
                $this->tags['noscript > style[amp-boilerplate]'],
            ],
            'noscript > style[amp-boilerplate] (transformed)' => [
                $this->tags['noscript > style[amp-boilerplate] (transformed)'],
            ],
            'noscript enclosure for boilerplate' => [
                $this->tags['noscript enclosure for boilerplate'],
            ],
            'noscript enclosure for boilerplate (transformed)' => [
                $this->tags['noscript enclosure for boilerplate (transformed)'],
            ],
            'picture > source' => [
                $this->tags['picture > source'],
            ],
            'radialgradient > stop' => [
                $this->tags['radialgradient > stop'],
            ],
            'script id=amp-rtc' => [
                $this->tags['script id=amp-rtc'],
            ],
            'script type=application/ld+json' => [
                $this->tags['script type=application/ld+json'],
            ],
            'SCRIPT type=text/plain' => [
                $this->tags['SCRIPT type=text/plain'],
            ],
            'SCRIPT type=text/plain (AMP4EMAIL)' => [
                $this->tags['SCRIPT type=text/plain (AMP4EMAIL)'],
            ],
            'SCRIPT[custom-element=amp-accordion] (AMP4EMAIL)' => [
                $this->tags['SCRIPT[custom-element=amp-accordion] (AMP4EMAIL)'],
            ],
            'SCRIPT[custom-element=amp-autocomplete] (AMP4EMAIL)' => [
                $this->tags['SCRIPT[custom-element=amp-autocomplete] (AMP4EMAIL)'],
            ],
            'SCRIPT[custom-element=amp-bind] (AMP4EMAIL)' => [
                $this->tags['SCRIPT[custom-element=amp-bind] (AMP4EMAIL)'],
            ],
            'SCRIPT[custom-element=amp-carousel] (AMP4EMAIL)' => [
                $this->tags['SCRIPT[custom-element=amp-carousel] (AMP4EMAIL)'],
            ],
            'SCRIPT[custom-element=amp-fit-text] (AMP4EMAIL)' => [
                $this->tags['SCRIPT[custom-element=amp-fit-text] (AMP4EMAIL)'],
            ],
            'SCRIPT[custom-element=amp-form] (AMP4EMAIL)' => [
                $this->tags['SCRIPT[custom-element=amp-form] (AMP4EMAIL)'],
            ],
            'SCRIPT[custom-element=amp-image-lightbox] (AMP4EMAIL)' => [
                $this->tags['SCRIPT[custom-element=amp-image-lightbox] (AMP4EMAIL)'],
            ],
            'SCRIPT[custom-element=amp-lightbox] (AMP4ADS)' => [
                $this->tags['SCRIPT[custom-element=amp-lightbox] (AMP4ADS)'],
            ],
            'SCRIPT[custom-element=amp-lightbox] (AMP4EMAIL)' => [
                $this->tags['SCRIPT[custom-element=amp-lightbox] (AMP4EMAIL)'],
            ],
            'SCRIPT[custom-element=amp-list] (AMP4EMAIL)' => [
                $this->tags['SCRIPT[custom-element=amp-list] (AMP4EMAIL)'],
            ],
            'SCRIPT[custom-element=amp-selector] (AMP4EMAIL)' => [
                $this->tags['SCRIPT[custom-element=amp-selector] (AMP4EMAIL)'],
            ],
            'SCRIPT[custom-element=amp-sidebar] (AMP4EMAIL)' => [
                $this->tags['SCRIPT[custom-element=amp-sidebar] (AMP4EMAIL)'],
            ],
            'SCRIPT[custom-element=amp-timeago] (AMP4EMAIL)' => [
                $this->tags['SCRIPT[custom-element=amp-timeago] (AMP4EMAIL)'],
            ],
            'SCRIPT[custom-template=amp-mustache] (AMP4ADS)' => [
                $this->tags['SCRIPT[custom-template=amp-mustache] (AMP4ADS)'],
            ],
            'SCRIPT[custom-template=amp-mustache] (AMP4EMAIL)' => [
                $this->tags['SCRIPT[custom-template=amp-mustache] (AMP4EMAIL)'],
            ],
            'section (AMP4EMAIL)' => [
                $this->tags['section (AMP4EMAIL)'],
            ],
            'span amp-nested-menu' => [
                $this->tags['span amp-nested-menu'],
            ],
            'span swg_amp_cache_nonce' => [
                $this->tags['span swg_amp_cache_nonce'],
            ],
            'style amp-custom' => [
                $this->tags['style amp-custom'],
            ],
            'style amp-custom (AMP4ADS)' => [
                $this->tags['style amp-custom (AMP4ADS)'],
            ],
            'style amp-custom (AMP4EMAIL)' => [
                $this->tags['style amp-custom (AMP4EMAIL)'],
            ],
            'style amp-custom (css-strict)' => [
                $this->tags['style amp-custom (css-strict)'],
            ],
            'style amp-custom-length-check' => [
                $this->tags['style amp-custom-length-check'],
            ],
            'style[amp-keyframes]' => [
                $this->tags['style[amp-keyframes]'],
            ],
            'style[amp-runtime] (transformed)' => [
                $this->tags['style[amp-runtime] (transformed)'],
            ],
            'subscriptions-section content swg_amp_cache_nonce' => [
                $this->tags['subscriptions-section content swg_amp_cache_nonce'],
            ],
            'subscriptions script ciphertext' => [
                $this->tags['subscriptions script ciphertext'],
            ],
            'svg title' => [
                $this->tags['svg title'],
            ],
            'TEMPLATE (AMP4EMAIL)' => [
                $this->tags['TEMPLATE (AMP4EMAIL)'],
            ],
            'title' => [
                $this->tags['title'],
            ],
            'title [AMP4EMAIL]' => [
                $this->tags['title [AMP4EMAIL]'],
            ],
            'video > source' => [
                $this->tags['video > source'],
            ],
            'video > track' => [
                $this->tags['video > track'],
            ],
            'video > track[kind=subtitles]' => [
                $this->tags['video > track[kind=subtitles]'],
            ],
        ];
    }
}
