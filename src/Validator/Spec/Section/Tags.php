<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Section;

use AmpProject\Validator\Spec\Tag;

final class Tags
{
    private $tags = [];

    public function __construct()
    {
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'HEAD',
                'mandatory' => true,
                'unique' => true,
                'mandatoryParent' => 'HTML',
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#required-markup',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'TITLE',
                'specName' => 'title',
                'attrs' => [['name' => '[text]']],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'TITLE',
                'specName' => 'title [AMP4EMAIL]',
                'attrs' => [['name' => '[text]']],
                'deprecation' => 'Title tags in email have no meaning. This tag may become invalid in the future.',
                'deprecationUrl' => 'https://github.com/ampproject/amphtml/issues/22318',
                'htmlFormat' => ['AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'BASE',
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [['name' => 'href', 'value' => ['/']], ['name' => 'target', 'valueCasei' => ['_blank', '_self', '_top']]],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'BODY',
                'mandatory' => true,
                'unique' => true,
                'mandatoryParent' => 'HTML',
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#required-markup',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'ARTICLE',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'SECTION',
                'attrLists' => ['poool-access-attrs'],
                'disallowedAncestor' => ['AMP-ACCORDION'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'SECTION',
                'specName' => 'section (AMP4EMAIL)',
                'disallowedAncestor' => ['AMP-ACCORDION'],
                'htmlFormat' => ['AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'NAV',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'ASIDE',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'H1',
                'attrs' => [['name' => 'align']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'H2',
                'attrs' => [['name' => 'align']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'H3',
                'attrs' => [['name' => 'align']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'H4',
                'attrs' => [['name' => 'align']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'H5',
                'attrs' => [['name' => 'align']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'H6',
                'attrs' => [['name' => 'align']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'HEADER',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'FOOTER',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'ADDRESS',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'P',
                'attrs' => [['name' => 'align']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'HR',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'PRE',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'BLOCKQUOTE',
                'attrs' => [['name' => 'align']],
                'attrLists' => ['cite-attr'],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'UL',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'LI',
                'attrs' => [['name' => 'value', 'valueRegex' => '[0-9]*']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'DL',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'DT',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'DD',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'FIGURE',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'FIGCAPTION',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'DIV',
                'attrs' => [['name' => 'align']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'MAIN',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'EM',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'STRONG',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'SMALL',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'S',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'CITE',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'Q',
                'attrLists' => ['cite-attr'],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'DFN',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'ABBR',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'DATA',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'TIME',
                'attrs' => [['name' => 'datetime'], ['name' => 'pubdate', 'value' => ['']]],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'CODE',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'VAR',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'SAMP',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'KBD',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'SUB',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'SUP',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'I',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'B',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'U',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'MARK',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'RUBY',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'RB',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'RT',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'RTC',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'RP',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'BDI',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'BDO',
                'attrs' => [['name' => 'dir']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'SPAN',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'BR',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'WBR',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'INS',
                'attrs' => [['name' => 'datetime']],
                'attrLists' => ['cite-attr'],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'DEL',
                'attrs' => [['name' => 'datetime']],
                'attrLists' => ['cite-attr'],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'PICTURE',
                'mandatoryParent' => 'NOSCRIPT',
                'specUrl' => 'https://amp.dev/documentation/components/amp-img/',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'TRACK',
                'specName' => 'audio > track',
                'mandatoryParent' => 'AUDIO',
                'attrLists' => ['track-attrs-no-subtitles'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'TRACK',
                'specName' => 'audio > track[kind=subtitles]',
                'mandatoryParent' => 'AUDIO',
                'attrLists' => ['track-attrs-subtitles'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'TRACK',
                'specName' => 'video > track',
                'mandatoryParent' => 'VIDEO',
                'attrLists' => ['track-attrs-no-subtitles'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'TRACK',
                'specName' => 'video > track[kind=subtitles]',
                'mandatoryParent' => 'VIDEO',
                'attrLists' => ['track-attrs-subtitles'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'TRACK',
                'specName' => 'amp-audio > track',
                'mandatoryParent' => 'AMP-AUDIO',
                'attrs' => [['name' => '[label]'], ['name' => '[src]'], ['name' => '[srclang]']],
                'attrLists' => ['track-attrs-no-subtitles'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'TRACK',
                'specName' => 'amp-audio > track[kind=subtitles]',
                'mandatoryParent' => 'AMP-AUDIO',
                'attrs' => [['name' => '[label]'], ['name' => '[src]'], ['name' => '[srclang]']],
                'attrLists' => ['track-attrs-subtitles'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'TRACK',
                'specName' => 'amp-video > track',
                'mandatoryParent' => 'AMP-VIDEO',
                'attrs' => [['name' => '[label]'], ['name' => '[src]'], ['name' => '[srclang]']],
                'attrLists' => ['track-attrs-no-subtitles'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'TRACK',
                'specName' => 'amp-video > track[kind=subtitles]',
                'mandatoryParent' => 'AMP-VIDEO',
                'attrs' => [['name' => '[label]'], ['name' => '[src]'], ['name' => '[srclang]']],
                'attrLists' => ['track-attrs-subtitles'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'TRACK',
                'specName' => 'amp-ima-video > track',
                'mandatoryParent' => 'AMP-IMA-VIDEO',
                'attrs' => [['name' => '[label]'], ['name' => '[src]'], ['name' => '[srclang]']],
                'attrLists' => ['track-attrs-no-subtitles'],
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'G',
                'attrs' => [['name' => 'externalresourcesrequired'], ['name' => 'transform']],
                'attrLists' => ['svg-conditional-processing-attributes', 'svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'GLYPHREF',
                'attrs' => [['name' => 'dx'], ['name' => 'dy'], ['name' => 'format'], ['name' => 'glyphref'], ['name' => 'x'], ['name' => 'y']],
                'attrLists' => ['svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr', 'svg-xlink-attributes'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'METADATA',
                'attrLists' => ['svg-core-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SOLIDCOLOR',
                'attrs' => [['name' => 'solid-color'], ['name' => 'solid-opacity']],
                'attrLists' => ['svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SWITCH',
                'attrLists' => ['svg-conditional-processing-attributes', 'svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'POLYGON',
                'attrs' => [['name' => 'externalresourcesrequired'], ['name' => 'points'], ['name' => 'sketch:type'], ['name' => 'transform']],
                'attrLists' => ['svg-conditional-processing-attributes', 'svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'POLYLINE',
                'attrs' => [['name' => 'externalresourcesrequired'], ['name' => 'points'], ['name' => 'sketch:type'], ['name' => 'transform']],
                'attrLists' => ['svg-conditional-processing-attributes', 'svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'CLIPPATH',
                'attrs' => [['name' => 'clippathunits'], ['name' => 'externalresourcesrequired'], ['name' => 'transform']],
                'attrLists' => ['svg-conditional-processing-attributes', 'svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'HKERN',
                'attrs' => [['name' => 'g1'], ['name' => 'g2'], ['name' => 'k'], ['name' => 'u1'], ['name' => 'u2']],
                'attrLists' => ['svg-core-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'VKERN',
                'attrs' => [['name' => 'g1'], ['name' => 'g2'], ['name' => 'k'], ['name' => 'u1'], ['name' => 'u2']],
                'attrLists' => ['svg-core-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'DEFS',
                'attrs' => [['name' => 'externalresourcesrequired'], ['name' => 'transform']],
                'attrLists' => ['svg-conditional-processing-attributes', 'svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'FECOLORMATRIX',
                'attrs' => [['name' => 'in'], ['name' => 'type'], ['name' => 'values']],
                'attrLists' => ['svg-core-attributes', 'svg-filter-primitive-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'FEFLOOD',
                'attrLists' => ['svg-core-attributes', 'svg-filter-primitive-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'FEGAUSSIANBLUR',
                'attrs' => [['name' => 'edgemode'], ['name' => 'in'], ['name' => 'stddeviation']],
                'attrLists' => ['svg-core-attributes', 'svg-filter-primitive-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'FEMERGE',
                'attrLists' => ['svg-core-attributes', 'svg-filter-primitive-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'FEMERGENODE',
                'attrs' => [['name' => 'in']],
                'attrLists' => ['svg-core-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'FEOFFSET',
                'attrs' => [['name' => 'dx'], ['name' => 'dy'], ['name' => 'in']],
                'attrLists' => ['svg-core-attributes', 'svg-filter-primitive-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'DESC',
                'attrLists' => ['svg-core-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'TITLE',
                'specName' => 'svg title',
                'attrLists' => ['svg-core-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'CAPTION',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'COLGROUP',
                'attrs' => [['name' => 'span']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'COL',
                'attrs' => [['name' => 'span']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'TBODY',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'THEAD',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'TFOOT',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'TR',
                'attrs' => [['name' => 'align'], ['name' => 'bgcolor'], ['name' => 'height'], ['name' => 'valign']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'DIV',
                'specName' => 'FORM DIV [verify-error]',
                'attrs' => [['name' => 'align'], ['name' => 'verify-error', 'mandatory' => true]],
                'mandatoryAncestor' => 'FORM',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'DIV',
                'specName' => 'FORM DIV [verify-error][template]',
                'attrs' => [['name' => 'align'], ['name' => 'verify-error', 'mandatory' => true], ['name' => 'template', 'mandatory' => true]],
                'mandatoryAncestor' => 'FORM',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'DIV',
                'specName' => 'FORM DIV [submitting]',
                'attrs' => [['name' => 'align'], ['name' => 'submitting', 'mandatory' => true]],
                'mandatoryAncestor' => 'FORM',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'DIV',
                'specName' => 'FORM DIV [submitting][template]',
                'attrs' => [['name' => 'align'], ['name' => 'submitting', 'mandatory' => true], ['name' => 'template', 'mandatory' => true]],
                'mandatoryAncestor' => 'FORM',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'DIV',
                'specName' => 'FORM DIV [submit-success]',
                'attrs' => [['name' => 'align'], ['name' => 'submit-success', 'mandatory' => true]],
                'mandatoryAncestor' => 'FORM',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'DIV',
                'specName' => 'FORM DIV [submit-success][template]',
                'attrs' => [['name' => 'align'], ['name' => 'submit-success', 'mandatory' => true], ['name' => 'template', 'mandatory' => true]],
                'mandatoryAncestor' => 'FORM',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'DIV',
                'specName' => 'FORM DIV [submit-error]',
                'attrs' => [['name' => 'align'], ['name' => 'submit-error', 'mandatory' => true]],
                'mandatoryAncestor' => 'FORM',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'DIV',
                'specName' => 'FORM DIV [submit-error][template]',
                'attrs' => [['name' => 'align'], ['name' => 'submit-error', 'mandatory' => true], ['name' => 'template', 'mandatory' => true]],
                'mandatoryAncestor' => 'FORM',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'LABEL',
                'attrs' => [['name' => 'for']],
                'specUrl' => 'https://amp.dev/documentation/components/amp-form/',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'DATALIST',
                'specUrl' => 'https://amp.dev/documentation/components/amp-form/',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'OPTGROUP',
                'mandatoryParent' => 'SELECT',
                'attrs' => [['name' => 'disabled'], ['name' => 'label'], ['name' => '[disabled]'], ['name' => '[label]']],
                'specUrl' => 'https://amp.dev/documentation/components/amp-form/',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'OUTPUT',
                'attrs' => [['name' => 'for'], ['name' => 'form']],
                'attrLists' => ['name-attr'],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'PROGRESS',
                'attrs' => [['name' => 'max'], ['name' => 'value']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'FIELDSET',
                'attrs' => [['name' => 'disabled'], ['name' => '[disabled]']],
                'attrLists' => ['name-attr'],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'LEGEND',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'DETAILS',
                'attrs' => [['name' => 'open', 'value' => ['']], ['name' => '[open]']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'SUMMARY',
                'mandatoryParent' => 'DETAILS',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'NOSCRIPT',
                'disallowedAncestor' => ['NOSCRIPT'],
                'mandatoryAncestor' => 'BODY',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'ACRONYM',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'BIG',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'CENTER',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'DIR',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'HGROUP',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'LISTING',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'MULTICOL',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'NEXTID',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'NOBR',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'SPACER',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'STRIKE',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'TT',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'SLOT',
                'attrLists' => ['name-attr'],
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'O:P',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'I-AMPHTML-SIZER',
                'specName' => 'I-AMPHTML-SIZER-INTRINSIC',
                'attrs' => [['name' => 'class', 'mandatory' => true, 'value' => ['i-amphtml-sizer'], 'dispatchKey' => 'NAME_DISPATCH']],
                'htmlFormat' => ['AMP'],
                'explicitAttrsOnly' => true,
                'enabledBy' => ['transformed'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-3d-gltf', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-3q-player', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'AMP-3Q-PLAYER',
                'attrs' => [['name' => 'autoplay', 'value' => ['']], ['name' => 'data-id', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FLEX_ITEM', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-3q-player'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-access-laterpay', 'version' => ['0.1', '0.2', 'latest'], 'requiresUsage' => 'NONE'],
                'requiresExtension' => ['amp-access'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-access-poool', 'version' => ['0.1', 'latest'], 'requiresUsage' => 'NONE'],
                'requiresExtension' => ['amp-access'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-access-scroll', 'version' => ['0.1', 'latest'], 'requiresUsage' => 'NONE'],
                'requiresExtension' => ['amp-access'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'SCRIPT[custom-element=amp-accordion] (AMP4EMAIL)',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP4EMAIL'],
                'extensionSpec' => ['name' => 'amp-accordion', 'version' => ['0.1'], 'deprecatedAllowDuplicates' => true, 'requiresUsage' => 'EXEMPTED'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SECTION',
                'specName' => 'amp-accordion > section',
                'mandatoryParent' => 'AMP-ACCORDION',
                'attrs' => [['name' => 'access-hide', 'value' => ['']], ['name' => 'expanded', 'value' => ['']], ['name' => '[data-expand]']],
                'childTags' => ['mandatoryNumChildTags' => 2, 'firstChildTagNameOneof' => ['H1', 'H2', 'H3', 'H4', 'H5', 'H6', 'HEADER']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                'descriptiveName' => 'amp-accordion > section',
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-action-macro', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'AMP-ACTION-MACRO',
                'attrs' => [['name' => 'arguments'], ['name' => 'execute', 'mandatory' => true]],
                'attrLists' => ['mandatory-id-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-action-macro/',
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-action-macro'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-ad-custom', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP4ADS'],
                'extensionSpec' => ['name' => 'amp-ad-exit', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-addthis', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'amp-anim extension script (AMP4EMAIL)',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP4EMAIL'],
                'extensionSpec' => ['name' => 'amp-anim', 'version' => ['0.1']],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'extensionSpec' => ['name' => 'amp-animation', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-app-banner', 'version' => ['0.1', 'latest'], 'deprecatedAllowDuplicates' => true],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-auto-ads', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-autocomplete', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'SCRIPT[custom-element=amp-autocomplete] (AMP4EMAIL)',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP4EMAIL'],
                'extensionSpec' => ['name' => 'amp-autocomplete', 'version' => ['0.1']],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'INPUT',
                'specName' => 'amp-autocomplete > input',
                'mandatoryParent' => 'AMP-AUTOCOMPLETE',
                'attrs' => [['name' => 'type', 'mandatory' => true, 'valueCasei' => ['search', 'text']]],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-autocomplete', 'amp-form'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-base-carousel', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'AMP-BASE-CAROUSEL',
                'attrLists' => ['amp-base-carousel-common', 'extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-base-carousel/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-base-carousel'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-BASE-CAROUSEL lightbox [lightbox-exclude]',
                'attrs' => [['name' => 'lightbox-exclude', 'mandatory' => true]],
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-BASE-CAROUSEL lightbox [child]',
                'attrs' => [['name' => 'lightbox-thumbnail-id', 'valueRegexCasei' => '^[a-z][a-z\d_-]*']],
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-beopinion', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'extensionSpec' => ['name' => 'amp-bind', 'version' => ['0.1', 'latest'], 'requiresUsage' => 'NONE'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'SCRIPT[custom-element=amp-bind] (AMP4EMAIL)',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP4EMAIL'],
                'extensionSpec' => ['name' => 'amp-bind', 'version' => ['0.1'], 'requiresUsage' => 'NONE'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'AMP-BIND-MACRO',
                'attrs' => [['name' => 'arguments'], ['name' => 'expression', 'mandatory' => true]],
                'attrLists' => ['mandatory-id-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-bind/',
                'htmlFormat' => ['AMP', 'AMP4EMAIL'],
                'requiresExtension' => ['amp-bind'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-bodymovin-animation', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-byside-content', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'AMP-BYSIDE-CONTENT',
                'attrs' => [['name' => 'data-label', 'mandatory' => true], ['name' => 'data-webcare-id', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-byside-content'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-call-tracking', 'version' => ['0.1', 'latest'], 'requiresUsage' => 'EXEMPTED'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'SCRIPT[custom-element=amp-carousel] (AMP4EMAIL)',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP4EMAIL'],
                'extensionSpec' => ['name' => 'amp-carousel', 'version' => ['0.1']],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-CAROUSEL lightbox [lightbox-exclude]',
                'attrs' => [['name' => 'lightbox-exclude', 'mandatory' => true]],
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-CAROUSEL lightbox [child]',
                'attrs' => [['name' => 'lightbox-thumbnail-id', 'valueRegexCasei' => '^[a-z][a-z\d_-]*']],
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-connatix-player', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-consent', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-date-countdown', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-date-display', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-date-picker', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-delight-player', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'AMP-DELIGHT-PLAYER',
                'attrs' => [['name' => 'data-content-id', 'mandatory' => true], ['name' => 'dock', 'requiresExtension' => ['amp-video-docking']]],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-delight-player'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-embedly-card', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'AMP-EMBEDLY-KEY',
                'unique' => true,
                'attrs' => [['name' => 'value', 'mandatory' => true]],
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-embedly-card'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'AMP-EXPERIMENT',
                'unique' => true,
                'specUrl' => 'https://amp.dev/documentation/components/amp-experiment/',
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-experiment'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-facebook-comments', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'AMP-FACEBOOK-COMMENTS',
                'attrs' => [['name' => 'data-href', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-facebook-comments'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-facebook-like', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-facebook-page', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'AMP-FACEBOOK',
                'attrs' => [['name' => 'data-href', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-facebook'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'SCRIPT[custom-element=amp-fit-text] (AMP4EMAIL)',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP4EMAIL'],
                'extensionSpec' => ['name' => 'amp-fit-text', 'version' => ['0.1'], 'deprecatedAllowDuplicates' => true, 'requiresUsage' => 'EXEMPTED'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'AMP-FIT-TEXT',
                'attrs' => [['name' => 'max-font-size'], ['name' => 'min-font-size']],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                'requiresExtension' => ['amp-fit-text'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'SCRIPT[custom-element=amp-form] (AMP4EMAIL)',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP4EMAIL'],
                'extensionSpec' => ['name' => 'amp-form', 'version' => ['0.1'], 'deprecatedAllowDuplicates' => true, 'requiresUsage' => 'EXEMPTED'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-fx-collection', 'version' => ['0.1', 'latest'], 'requiresUsage' => 'NONE'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'AMP-FX-FLYING-CARPET',
                'attrs' => [['name' => 'height', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-fx-flying-carpet'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-geo', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-gist', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-google-document-embed', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP4ADS'],
                'extensionSpec' => ['name' => 'amp-gwd-animation', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'AMP-GWD-ANIMATION',
                'attrs' => [['name' => 'timeline-event-prefix']],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'htmlFormat' => ['AMP4ADS'],
                'requiresExtension' => ['amp-gwd-animation'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-hulu', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-ima-video', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'AMP-IMAGE-LIGHTBOX',
                'attrs' => [['name' => 'controls']],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'htmlFormat' => ['AMP', 'AMP4EMAIL'],
                'requiresExtension' => ['amp-image-lightbox'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-image-slider', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'DIV',
                'specName' => 'AMP-IMAGE-SLIDER > DIV [first]',
                'mandatoryParent' => 'AMP-IMAGE-SLIDER',
                'attrs' => [['name' => 'first', 'mandatory' => true]],
                'specUrl' => 'https://amp.dev/documentation/components/amp-image-slider/',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'DIV',
                'specName' => 'AMP-IMAGE-SLIDER > DIV [second]',
                'mandatoryParent' => 'AMP-IMAGE-SLIDER',
                'attrs' => [['name' => 'second', 'mandatory' => true]],
                'specUrl' => 'https://amp.dev/documentation/components/amp-image-slider/',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-imgur', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'AMP-IMGUR',
                'attrs' => [['name' => 'data-imgur-id', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-imgur'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-inline-gallery', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'AMP-INLINE-GALLERY',
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-inline-gallery/',
                'ampLayout' => ['supportedLayouts' => ['CONTAINER']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-inline-gallery'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-inputmask', 'version' => ['0.1', 'latest'], 'requiresUsage' => 'NONE'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'AMP-INSTAGRAM',
                'attrs' => [['name' => 'alt'], ['name' => 'data-shortcode', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-instagram'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-izlesene', 'version' => ['0.1', 'latest'], 'requiresUsage' => 'EXEMPTED'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'AMP-IZLESENE',
                'attrs' => [['name' => 'data-videoid', 'mandatory' => true, 'valueRegex' => '[0-9]+']],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-izlesene'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'AMP-KALTURA-PLAYER',
                'attrs' => [['name' => 'data-partner', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-kaltura-player'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-lightbox-gallery', 'version' => ['0.1', 'latest'], 'requiresUsage' => 'NONE'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'SCRIPT[custom-element=amp-lightbox] (AMP4ADS)',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP4ADS'],
                'extensionSpec' => ['name' => 'amp-lightbox', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'satisfies' => ['amp-link-rewriter'],
                'extensionSpec' => ['name' => 'amp-link-rewriter', 'version' => ['0.1', 'latest']],
                'excludes' => ['amp-skimlinks', 'amp-smartlinks'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'AMP-LINK-REWRITER',
                'unique' => true,
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'childTags' => ['mandatoryNumChildTags' => 1, 'firstChildTagNameOneof' => ['SCRIPT']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-link-rewriter'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'SCRIPT[custom-element=amp-list] (AMP4EMAIL)',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP4EMAIL'],
                'extensionSpec' => ['name' => 'amp-list', 'version' => ['0.1']],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'DIV',
                'specName' => 'AMP-LIST DIV [fetch-error]',
                'attrs' => [['name' => 'align'], ['name' => 'fetch-error', 'mandatory' => true]],
                'mandatoryAncestor' => 'AMP-LIST',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'mandatoryParent' => 'HEAD',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'uniqueWarning' => true,
                'extensionSpec' => ['name' => 'amp-live-list', 'version' => ['0.1', 'latest'], 'requiresUsage' => 'EXEMPTED'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-LIVE-LIST [update]',
                'attrs' => [['name' => 'update', 'mandatory' => true]],
                'specUrl' => 'https://amp.dev/documentation/components/amp-live-list/#update',
                'htmlFormat' => ['AMP'],
                'descriptiveName' => 'amp-live-list [update]',
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-LIVE-LIST [pagination]',
                'attrs' => [['name' => 'pagination', 'mandatory' => true]],
                'specUrl' => 'https://amp.dev/documentation/components/amp-live-list/#pagination',
                'htmlFormat' => ['AMP'],
                'descriptiveName' => 'amp-live-list [pagination]',
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-mathml', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'AMP-MATHML',
                'attrs' => [['name' => 'data-formula', 'mandatory' => true], ['name' => 'inline']],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['CONTAINER']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-mathml'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-mega-menu', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-MEGA-MENU item-heading',
                'attrs' => [['name' => 'role', 'value' => ['button']]],
                'htmlFormat' => ['AMP'],
                'descriptiveName' => 'amp-mega-menu item-heading',
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-MEGA-MENU item-content',
                'attrs' => [['name' => 'role', 'mandatory' => true, 'value' => ['dialog']]],
                'htmlFormat' => ['AMP'],
                'descriptiveName' => 'amp-mega-menu item-content',
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-megaphone', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-minute-media-player', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-mowplayer', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'AMP-MOWPLAYER',
                'attrs' => [['name' => 'autoplay'], ['name' => 'data-mediaid', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-mowplayer'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrs' => [['name' => 'no-fallback']],
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP4ADS'],
                'extensionSpec' => ['name' => 'amp-mraid', 'version' => ['0.1', 'latest'], 'requiresUsage' => 'NONE', 'extensionType' => 'HOST_SERVICE'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-nested-menu', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'BUTTON',
                'specName' => 'button amp-nested-menu',
                'attrLists' => ['amp-nested-menu-actions'],
                'mandatoryAncestor' => 'AMP-NESTED-MENU',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'H2',
                'specName' => 'h2 amp-nested-menu',
                'attrLists' => ['amp-nested-menu-actions'],
                'mandatoryAncestor' => 'AMP-NESTED-MENU',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'H3',
                'specName' => 'h3 amp-nested-menu',
                'attrLists' => ['amp-nested-menu-actions'],
                'mandatoryAncestor' => 'AMP-NESTED-MENU',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'H4',
                'specName' => 'h4 amp-nested-menu',
                'attrLists' => ['amp-nested-menu-actions'],
                'mandatoryAncestor' => 'AMP-NESTED-MENU',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'H5',
                'specName' => 'h5 amp-nested-menu',
                'attrLists' => ['amp-nested-menu-actions'],
                'mandatoryAncestor' => 'AMP-NESTED-MENU',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'H6',
                'specName' => 'h6 amp-nested-menu',
                'attrLists' => ['amp-nested-menu-actions'],
                'mandatoryAncestor' => 'AMP-NESTED-MENU',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'SPAN',
                'specName' => 'span amp-nested-menu',
                'attrLists' => ['amp-nested-menu-actions'],
                'mandatoryAncestor' => 'AMP-NESTED-MENU',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-next-page', 'version' => ['0.1', '1.0', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-NEXT-PAGE > [separator]',
                'mandatoryParent' => 'AMP-NEXT-PAGE',
                'attrs' => [['name' => 'separator', 'mandatory' => true]],
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-NEXT-PAGE > [recommendation-box]',
                'mandatoryParent' => 'AMP-NEXT-PAGE',
                'attrs' => [['name' => 'recommendation-box', 'mandatory' => true]],
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-NEXT-PAGE > [footer]',
                'mandatoryParent' => 'AMP-NEXT-PAGE',
                'attrs' => [['name' => 'footer', 'mandatory' => true]],
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-nexxtv-player', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'AMP-O2-PLAYER',
                'attrs' => [['name' => 'data-bcid', 'mandatory' => true], ['name' => 'data-pid', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-o2-player'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-onetap-google', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-ooyala-player', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-orientation-observer', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-pan-zoom', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-playbuzz', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'extensionSpec' => ['name' => 'amp-position-observer', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-powr-player', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'AMP-REACH-PLAYER',
                'attrs' => [['name' => 'data-embed-id', 'mandatory' => true, 'valueRegex' => '[0-9a-z-]+']],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-reach-player'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-recaptcha-input', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-redbull-player', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'AMP-REDBULL-PLAYER',
                'attrs' => [['name' => 'data-param-videoid', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FIXED', 'FIXED_HEIGHT', 'RESPONSIVE', 'FILL', 'FLEX_ITEM', 'FLUID', 'INTRINSIC']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-redbull-player'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-reddit', 'version' => ['0.1', 'latest'], 'deprecatedAllowDuplicates' => true],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-riddle-quiz', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-script', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'CANVAS',
                'attrs' => [['name' => 'height'], ['name' => 'width']],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                'mandatoryAncestor' => 'AMP-SCRIPT',
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-script'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'extensionSpec' => ['name' => 'amp-selector', 'version' => ['0.1', 'latest'], 'requiresUsage' => 'EXEMPTED'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'SCRIPT[custom-element=amp-selector] (AMP4EMAIL)',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP4EMAIL'],
                'extensionSpec' => ['name' => 'amp-selector', 'version' => ['0.1'], 'requiresUsage' => 'EXEMPTED'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-SELECTOR child',
                'referencePoints' => [['tagSpecName' => 'AMP-SELECTOR option'], ['tagSpecName' => 'AMP-SELECTOR child']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'SCRIPT[custom-element=amp-sidebar] (AMP4EMAIL)',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP4EMAIL'],
                'extensionSpec' => ['name' => 'amp-sidebar', 'version' => ['0.1']],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'satisfies' => ['amp-skimlinks'],
                'extensionSpec' => ['name' => 'amp-skimlinks', 'version' => ['0.1', 'latest']],
                'excludes' => ['amp-link-rewriter', 'amp-smartlinks'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'satisfies' => ['amp-smartlinks'],
                'extensionSpec' => ['name' => 'amp-smartlinks', 'version' => ['0.1', 'latest']],
                'excludes' => ['amp-link-rewriter', 'amp-skimlinks'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-story-360', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-story-auto-ads', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'AMP-STORY-AUTO-ADS',
                'unique' => true,
                'mandatoryParent' => 'AMP-STORY',
                'specUrl' => 'https://amp.dev/documentation/components/amp-story-auto-ads/',
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-story-auto-ads'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-story-interactive', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-story-panning-media', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'AMP-STORY-PANNING-MEDIA',
                'specUrl' => 'https://amp.dev/documentation/components/amp-story-panning-media',
                'ampLayout' => ['supportedLayouts' => ['FILL']],
                'mandatoryAncestor' => 'AMP-STORY-GRID-LAYER',
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-story-panning-media'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-story-player', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'AMP-STORY-PLAYER',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'RESPONSIVE', 'INTRINSIC']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-story-player'],
                'descendantTagList' => 'amp-story-player-allowed-descendants',
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-story', 'version' => ['1.0', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'AMP-STORY-CTA-LAYER',
                'mandatoryAncestor' => 'AMP-STORY-PAGE',
                'referencePoints' => [['tagSpecName' => 'AMP-STORY-CTA-LAYER animate-in']],
                'htmlFormat' => ['AMP'],
                'descendantTagList' => 'amp-story-cta-layer-allowed-descendants',
                'mandatoryLastChild' => true,
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-subscriptions', 'version' => ['0.1', 'latest'], 'requiresUsage' => 'NONE'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-subscriptions-google', 'version' => ['0.1', 'latest'], 'requiresUsage' => 'NONE'],
                'requiresExtension' => ['amp-subscriptions'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-timeago', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'SCRIPT[custom-element=amp-timeago] (AMP4EMAIL)',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP4EMAIL'],
                'extensionSpec' => ['name' => 'amp-timeago', 'version' => ['0.1']],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-truncate-text', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-video-docking', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-video-iframe', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-VIDEO-IFRAME > [placeholder]',
                'attrs' => [['name' => 'placeholder', 'mandatory' => true]],
                'specUrl' => 'https://amp.dev/documentation/components/amp-video-iframe/',
                'htmlFormat' => ['AMP'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'specName' => 'amp-video extension script',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'extensionSpec' => ['name' => 'amp-video', 'version' => ['0.1', 'latest'], 'requiresUsage' => 'NONE'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'AMP-VIMEO',
                'attrs' => [['name' => 'autoplay', 'value' => ['']], ['name' => 'data-videoid', 'mandatory' => true, 'valueRegex' => '[0-9]+']],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-vimeo'],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'AMP-VINE',
                'attrs' => [['name' => 'data-vineid', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-vine'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-viqeo-player', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-vk', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'AMP-VK',
                'attrs' => [['name' => 'data-embedtype', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FIXED', 'FLEX_ITEM', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-vk'],
            ]
        );
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-web-push', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-wistia-player', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
            [
                'tagName' => 'SCRIPT',
                'attrLists' => ['common-extension-attrs'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-yotpo/',
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-yotpo', 'version' => ['0.1', 'latest']],
            ]
        );
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
        $this->tags[] = new Tag(
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
    }
}
