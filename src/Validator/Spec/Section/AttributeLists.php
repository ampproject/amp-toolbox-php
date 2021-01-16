<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Section;

use AmpProject\Attribute;
use AmpProject\Exception\InvalidListName;
use AmpProject\Validator\Spec;

final class AttributeLists
{
    /** @var array<Spec\AttributeList> */
    private $attributes;

    public function __construct()
    {
        $this->attributes = [
            'common-link-attrs' => new Spec\AttributeList(
                [
                    Attribute::CHARSET => [
                        'valueCasei' => [
                            'utf-8',
                        ],
                    ],
                    Attribute::COLOR => [],
                    Attribute::CROSSORIGIN => [],
                    Attribute::HREFLANG => [],
                    Attribute::MEDIA => [],
                    Attribute::SIZES => [],
                    Attribute::TARGET => [],
                    Attribute::TYPE => [],
                ]
            ),
            'poool-access-attrs' => new Spec\AttributeList(
                [
                    Attribute::POOOL_ACCESS_PREVIEW => [
                        'requiresExtension' => [
                            'amp-access-poool',
                        ],
                    ],
                    Attribute::POOOL_ACCESS_CONTENT => [
                        'requiresExtension' => [
                            'amp-access-poool',
                        ],
                    ],
                ]
            ),
            'cite-attr' => new Spec\AttributeList(
                [
                    Attribute::CITE => [
                        'disallowedValueRegex' => '__amp_source_origin',
                        'valueUrl' => [
                            'protocol' => [
                                'http',
                                'https',
                            ],
                            'allowEmpty' => true,
                        ],
                    ],
                ]
            ),
            'track-attrs-no-subtitles' => new Spec\AttributeList(
                [
                    Attribute::DEFAULT_ => [
                        'value' => [
                            '',
                        ],
                    ],
                    Attribute::KIND => [
                        'value' => [
                            'captions',
                            'chapters',
                            'descriptions',
                            'metadata',
                        ],
                    ],
                    Attribute::LABEL => [],
                    Attribute::SRC => [
                        'mandatory' => true,
                        'disallowedValueRegex' => '__amp_source_origin',
                        'valueUrl' => [
                            'protocol' => [
                                'https',
                            ],
                            'allowRelative' => false,
                        ],
                    ],
                    Attribute::SRCLANG => [],
                ]
            ),
            'track-attrs-subtitles' => new Spec\AttributeList(
                [
                    Attribute::DEFAULT_ => [
                        'value' => [
                            '',
                        ],
                    ],
                    Attribute::KIND => [
                        'mandatory' => true,
                        'valueCasei' => [
                            'subtitles',
                        ],
                    ],
                    Attribute::LABEL => [],
                    Attribute::SRC => [
                        'mandatory' => true,
                        'disallowedValueRegex' => '__amp_source_origin',
                        'valueUrl' => [
                            'protocol' => [
                                'https',
                            ],
                            'allowRelative' => false,
                        ],
                    ],
                    Attribute::SRCLANG => [
                        'mandatory' => true,
                    ],
                ]
            ),
            'svg-conditional-processing-attributes' => new Spec\AttributeList(
                [
                    Attribute::REQUIREDEXTENSIONS => [],
                    Attribute::REQUIREDFEATURES => [],
                    Attribute::SYSTEMLANGUAGE => [],
                ]
            ),
            'svg-core-attributes' => new Spec\AttributeList(
                [
                    Attribute::XML_LANG => [],
                    Attribute::XML_SPACE => [],
                    Attribute::XMLNS => [],
                    Attribute::XMLNS_XLINK => [],
                ]
            ),
            'svg-filter-primitive-attributes' => new Spec\AttributeList(
                [
                    Attribute::HEIGHT => [],
                    Attribute::RESULT => [],
                    Attribute::WIDTH => [],
                    Attribute::X => [],
                    Attribute::Y => [],
                ]
            ),
            'svg-presentation-attributes' => new Spec\AttributeList(
                [
                    Attribute::ALIGNMENT_BASELINE => [],
                    Attribute::BASELINE_SHIFT => [],
                    Attribute::CLIP => [],
                    Attribute::CLIP_PATH => [],
                    Attribute::CLIP_RULE => [],
                    Attribute::COLOR => [],
                    Attribute::COLOR_INTERPOLATION => [],
                    Attribute::COLOR_INTERPOLATION_FILTERS => [],
                    Attribute::COLOR_PROFILE => [],
                    Attribute::COLOR_RENDERING => [],
                    Attribute::CURSOR => [],
                    Attribute::DIRECTION => [],
                    Attribute::DISPLAY => [],
                    Attribute::DOMINANT_BASELINE => [],
                    Attribute::ENABLE_BACKGROUND => [],
                    Attribute::FILL => [],
                    Attribute::FILL_OPACITY => [],
                    Attribute::FILL_RULE => [],
                    Attribute::FILTER => [],
                    Attribute::FLOOD_COLOR => [],
                    Attribute::FLOOD_OPACITY => [],
                    Attribute::FOCUSABLE => [],
                    Attribute::FONT_FAMILY => [],
                    Attribute::FONT_SIZE => [],
                    Attribute::FONT_SIZE_ADJUST => [],
                    Attribute::FONT_STRETCH => [],
                    Attribute::FONT_STYLE => [],
                    Attribute::FONT_VARIANT => [],
                    Attribute::FONT_WEIGHT => [],
                    Attribute::GLYPH_ORIENTATION_HORIZONTAL => [],
                    Attribute::GLYPH_ORIENTATION_VERTICAL => [],
                    Attribute::IMAGE_RENDERING => [],
                    Attribute::KERNING => [],
                    Attribute::LETTER_SPACING => [],
                    Attribute::LIGHTING_COLOR => [],
                    Attribute::MARKER_END => [],
                    Attribute::MARKER_MID => [],
                    Attribute::MARKER_START => [],
                    Attribute::MASK => [],
                    Attribute::OPACITY => [],
                    Attribute::OVERFLOW => [],
                    Attribute::POINTER_EVENTS => [],
                    Attribute::SHAPE_RENDERING => [],
                    Attribute::STOP_COLOR => [],
                    Attribute::STOP_OPACITY => [],
                    Attribute::STROKE => [],
                    Attribute::STROKE_DASHARRAY => [],
                    Attribute::STROKE_DASHOFFSET => [],
                    Attribute::STROKE_LINECAP => [],
                    Attribute::STROKE_LINEJOIN => [],
                    Attribute::STROKE_MITERLIMIT => [],
                    Attribute::STROKE_OPACITY => [],
                    Attribute::STROKE_WIDTH => [],
                    Attribute::TEXT_ANCHOR => [],
                    Attribute::TEXT_DECORATION => [],
                    Attribute::TEXT_RENDERING => [],
                    Attribute::UNICODE_BIDI => [],
                    Attribute::VECTOR_EFFECT => [],
                    Attribute::VISIBILITY => [],
                    Attribute::WORD_SPACING => [],
                    Attribute::WRITING_MODE => [],
                ]
            ),
            'svg-transfer-function-attributes' => new Spec\AttributeList(
                [
                    Attribute::AMPLITUDE => [],
                    Attribute::EXPONENT => [],
                    Attribute::INTERCEPT => [],
                    Attribute::OFFSET => [],
                    Attribute::SLOPE => [],
                    Attribute::TABLE => [],
                    Attribute::TABLEVALUES => [],
                ]
            ),
            'svg-xlink-attributes' => new Spec\AttributeList(
                [
                    Attribute::XLINK_ACTUATE => [],
                    Attribute::XLINK_ARCROLE => [],
                    Attribute::XLINK_HREF => [
                        'alternativeNames' => [
                            'href',
                        ],
                        'valueUrl' => [
                            'protocol' => [
                                'http',
                                'https',
                            ],
                            'allowEmpty' => false,
                        ],
                    ],
                    Attribute::XLINK_ROLE => [],
                    Attribute::XLINK_SHOW => [],
                    Attribute::XLINK_TITLE => [],
                    Attribute::XLINK_TYPE => [],
                ]
            ),
            'svg-style-attr' => new Spec\AttributeList(
                [
                    Attribute::STYLE => [
                        'valueDocSvgCss' => true,
                    ],
                ]
            ),
            'input-common-attr' => new Spec\AttributeList(
                [
                    Attribute::ACCEPT => [],
                    Attribute::ACCESSKEY => [],
                    Attribute::AUTOCOMPLETE => [],
                    Attribute::AUTOFOCUS => [
                        'disabledBy' => [
                            'amp4email',
                        ],
                    ],
                    Attribute::CHECKED => [],
                    Attribute::DISABLED => [],
                    Attribute::HEIGHT => [],
                    Attribute::INPUTMODE => [
                        'disabledBy' => [
                            'amp4email',
                        ],
                    ],
                    Attribute::LIST_ => [
                        'disabledBy' => [
                            'amp4email',
                        ],
                    ],
                    Attribute::ENTERKEYHINT => [
                        'disabledBy' => [
                            'amp4email',
                        ],
                    ],
                    Attribute::MAX => [],
                    Attribute::MAXLENGTH => [],
                    Attribute::MIN => [],
                    Attribute::MINLENGTH => [],
                    Attribute::MULTIPLE => [],
                    Attribute::PATTERN => [],
                    Attribute::PLACEHOLDER => [],
                    Attribute::READONLY => [],
                    Attribute::REQUIRED => [],
                    Attribute::SELECTIONDIRECTION => [
                        'disabledBy' => [
                            'amp4email',
                        ],
                    ],
                    Attribute::SIZE => [],
                    Attribute::SPELLCHECK => [],
                    Attribute::STEP => [],
                    Attribute::TABINDEX => [],
                    Attribute::VALUE => [],
                    Attribute::WIDTH => [],
                    '[accept]' => [
                        'disabledBy' => [
                            'amp4email',
                        ],
                    ],
                    '[accesskey]' => [
                        'disabledBy' => [
                            'amp4email',
                        ],
                    ],
                    '[autocomplete]' => [],
                    '[checked]' => [],
                    '[disabled]' => [],
                    '[height]' => [],
                    '[inputmode]' => [
                        'disabledBy' => [
                            'amp4email',
                        ],
                    ],
                    '[max]' => [],
                    '[maxlength]' => [],
                    '[min]' => [],
                    '[minlength]' => [],
                    '[multiple]' => [],
                    '[pattern]' => [],
                    '[placeholder]' => [],
                    '[readonly]' => [],
                    '[required]' => [],
                    '[selectiondirection]' => [
                        'disabledBy' => [
                            'amp4email',
                        ],
                    ],
                    '[size]' => [],
                    '[spellcheck]' => [],
                    '[step]' => [],
                    '[value]' => [],
                    '[width]' => [],
                ]
            ),
            'amphtml-engine-attrs' => new Spec\AttributeList(
                [
                    Attribute::ASYNC => [
                        'mandatory' => true,
                        'value' => [
                            '',
                        ],
                    ],
                    Attribute::CROSSORIGIN => [
                        'value' => [
                            'anonymous',
                        ],
                    ],
                    Attribute::TYPE => [
                        'valueCasei' => [
                            'text/javascript',
                        ],
                    ],
                ]
            ),
            'amphtml-module-engine-attrs' => new Spec\AttributeList(
                [
                    Attribute::ASYNC => [
                        'mandatory' => true,
                        'value' => [
                            '',
                        ],
                    ],
                    Attribute::CROSSORIGIN => [
                        'mandatory' => true,
                        'value' => [
                            'anonymous',
                        ],
                    ],
                    Attribute::TYPE => [
                        'mandatory' => true,
                        'dispatchKey' => 'NAME_VALUE_DISPATCH',
                        'valueCasei' => [
                            'module',
                        ],
                    ],
                ]
            ),
            'amphtml-nomodule-engine-attrs' => new Spec\AttributeList(
                [
                    Attribute::ASYNC => [
                        'mandatory' => true,
                        'value' => [
                            '',
                        ],
                    ],
                    Attribute::CROSSORIGIN => [
                        'value' => [
                            'anonymous',
                        ],
                    ],
                    Attribute::NOMODULE => [
                        'mandatory' => true,
                        'value' => [
                            '',
                        ],
                    ],
                    Attribute::TYPE => [
                        'valueCasei' => [
                            'text/javascript',
                        ],
                    ],
                ]
            ),
            'mandatory-src-or-srcset' => new Spec\AttributeList(
                [
                    Attribute::SRC => [
                        'alternativeNames' => [
                            'srcset',
                        ],
                        'mandatory' => true,
                        'disallowedValueRegex' => '__amp_source_origin',
                        'valueUrl' => [
                            'protocol' => [
                                'data',
                                'http',
                                'https',
                            ],
                        ],
                    ],
                ]
            ),
            'mandatory-src-amp4email' => new Spec\AttributeList(
                [
                    Attribute::SRC => [
                        'mandatory' => true,
                        'disallowedValueRegex' => '__amp_source_origin|(.|\s){{|}}(.|\s)|^{{.*[^}][^}]$|^[^{][^{].*}}$|^}}|{{$|{{#|{{/|{{\^',
                        'valueUrl' => [
                            'protocol' => [
                                'https',
                            ],
                            'allowRelative' => false,
                        ],
                    ],
                ]
            ),
            'optional-src-amp4email' => new Spec\AttributeList(
                [
                    Attribute::SRC => [
                        'disallowedValueRegex' => '__amp_source_origin|(.|\s){{|}}(.|\s)|^{{.*[^}][^}]$|^[^{][^{].*}}$|^}}|{{$|{{#|{{/|{{\^',
                        'valueUrl' => [
                            'protocol' => [
                                'https',
                            ],
                            'allowRelative' => false,
                        ],
                    ],
                ]
            ),
            'extended-amp-global' => new Spec\AttributeList(
                [
                    Attribute::I_AMPHTML_LAYOUT => [
                        'valueCasei' => [
                            'container',
                            'fill',
                            'fixed',
                            'fixed-height',
                            'flex-item',
                            'fluid',
                            'intrinsic',
                            'nodisplay',
                            'responsive',
                        ],
                        'enabledBy' => [
                            'transformed',
                        ],
                    ],
                    Attribute::MEDIA => [],
                    Attribute::NOLOADING => [
                        'value' => [
                            '',
                        ],
                    ],
                ]
            ),
            '$AMP_LAYOUT_ATTRS' => new Spec\AttributeList(
                [
                    Attribute::DISABLE_INLINE_WIDTH => [],
                    Attribute::HEIGHT => [],
                    Attribute::HEIGHTS => [],
                    Attribute::LAYOUT => [],
                    Attribute::SIZES => [],
                    Attribute::WIDTH => [],
                    '[height]' => [],
                    '[width]' => [],
                ]
            ),
            'nonce-attr' => new Spec\AttributeList(
                [
                    Attribute::NONCE => [
                        'disabledBy' => [
                            'amp4email',
                        ],
                    ],
                ]
            ),
            'common-extension-attrs' => new Spec\AttributeList(
                [
                    Attribute::ASYNC => [
                        'mandatory' => true,
                        'value' => [
                            '',
                        ],
                    ],
                    Attribute::CROSSORIGIN => [
                        'value' => [
                            'anonymous',
                        ],
                    ],
                    Attribute::NONCE => [
                        'disabledBy' => [
                            'amp4email',
                        ],
                    ],
                    Attribute::TYPE => [
                        'valueCasei' => [
                            'text/javascript',
                        ],
                    ],
                ]
            ),
            'mandatory-id-attr' => new Spec\AttributeList(
                [
                    Attribute::ID => [
                        'mandatory' => true,
                        'disallowedValueRegex' => '(^|\s)(__amp_\S*|__count__|__defineGetter__|__defineSetter__|__lookupGetter__|__lookupSetter__|__noSuchMethod__|__parent__|__proto__|__AMP_\S*|\$p|\$proxy|acceptCharset|addEventListener|appendChild|assignedSlot|attachShadow|AMP|baseURI|checkValidity|childElementCount|childNodes|classList|className|clientHeight|clientLeft|clientTop|clientWidth|compareDocumentPosition|computedName|computedRole|contentEditable|createShadowRoot|enqueAction|firstChild|firstElementChild|getAnimations|getAttribute|getAttributeNS|getAttributeNode|getAttributeNodeNS|getBoundingClientRect|getClientRects|getDestinationInsertionPoints|getElementsByClassName|getElementsByTagName|getElementsByTagNameNS|getRootNode|hasAttribute|hasAttributeNS|hasAttributes|hasChildNodes|hasPointerCapture|i-amphtml-\S*|innerHTML|innerText|inputMode|insertAdjacentElement|insertAdjacentHTML|insertAdjacentText|isContentEditable|isDefaultNamespace|isEqualNode|isSameNode|lastChild|lastElementChild|lookupNamespaceURI|namespaceURI|nextElementSibling|nextSibling|nodeName|nodeType|nodeValue|offsetHeight|offsetLeft|offsetParent|offsetTop|offsetWidth|outerHTML|outerText|ownerDocument|parentElement|parentNode|previousElementSibling|previousSibling|querySelector|querySelectorAll|releasePointerCapture|removeAttribute|removeAttributeNS|removeAttributeNode|removeChild|removeEventListener|replaceChild|reportValidity|requestPointerLock|scrollHeight|scrollIntoView|scrollIntoViewIfNeeded|scrollLeft|scrollWidth|setAttribute|setAttributeNS|setAttributeNode|setAttributeNodeNS|setPointerCapture|shadowRoot|styleMap|tabIndex|tagName|textContent|toString|valueOf|(webkit|ms|moz|o)dropzone|(webkit|moz|ms|o)MatchesSelector|(webkit|moz|ms|o)RequestFullScreen|(webkit|moz|ms|o)RequestFullscreen)(\s|$)',
                    ],
                ]
            ),
            'form-name-attr' => new Spec\AttributeList(
                [
                    Attribute::NAME => [
                        'disallowedValueRegex' => '(^|\s)(ATTRIBUTE_NODE|CDATA_SECTION_NODE|COMMENT_NODE|DOCUMENT_FRAGMENT_NODE|DOCUMENT_NODE|DOCUMENT_POSITION_CONTAINED_BY|DOCUMENT_POSITION_CONTAINS|DOCUMENT_POSITION_DISCONNECTED|DOCUMENT_POSITION_FOLLOWING|DOCUMENT_POSITION_IMPLEMENTATION_SPECIFIC|DOCUMENT_POSITION_PRECEDING|DOCUMENT_TYPE_NODE|ELEMENT_NODE|ENTITY_NODE|ENTITY_REFERENCE_NODE|NOTATION_NODE|PROCESSING_INSTRUCTION_NODE|TEXT_NODE|URL|URLUnencoded|__amp_\S*|__count__|__defineGetter__|__defineSetter__|__lookupGetter__|__lookupSetter__|__noSuchMethod__|__parent__|__proto__|__AMP_\S*|activeElement|addEventListener|adoptNode|alinkColor|all|anchors|append|appendChild|applets|baseURI|bgColor|body|captureEvents|caretPositionFromPoint|caretRangeFromPoint|characterSet|charset|childElementCount|childNodes|children|clear|cloneNode|close|compareDocumentPosition|compatMode|constructor|contains|contentType|cookie|createAttribute|createAttributeNS|createCDATASection|createComment|createDocumentFragment|createElement|createElementNS|createEvent|createExpression|createNSResolver|createNodeIterator|createProcessingInstruction|createRange|createTextNode|createTreeWalker|currentScript|defaultView|designMode|dir|dispatchEvent|doctype|documentElement|documentURI|domain|elementFromPoint|elementsFromPoint|embeds|enableStyleSheetsForSet|evaluate|execCommand|execCommandShowHelp|exitFullscreen|exitPictureInPicture|exitPointerLock|fgColor|firstChild|firstElementChild|focus|fonts|forms|fullscreen|fullscreenElement|fullscreenEnabled|getCSSCanvasContext|getElementById|getElementsByClassName|getElementsByName|getElementsByTagName|getElementsByTagNameNS|getOverrideStyle|getRootNode|getSelection|hasChildNodes|hasFocus|hasOwnProperty|hasStorageAccess|head|hidden|images|implementation|importNode|inputEncoding|insertBefore|isConnected|isDefaultNamespace|isEqualNode|isPrototypeOf|isSameNode|l10n|lastChild|lastElementChild|lastModified|lastStyleSheetSet|linkColor|links|location|lookupNamespaceURI|lookupPrefix|mozCancelFullScreen|mozFullScreen|mozFullScreenElement|mozFullScreenEnabled|mozSetImageElement|msCSSOMElementFloatMetrics|msCapsLockWarningOff|msElementsFromPoint|msElementsFromRect|nextSibling|nodeName|nodeType|nodeValue|normalize|onabort|onactivate|onafterscriptexecute|onanimationcancel|onanimationend|onanimationiteration|onanimationstart|onauxclick|onbeforeactivate|onbeforecopy|onbeforecut|onbeforedeactivate|onbeforeinput|onbeforepaste|onbeforescriptexecute|onblur|oncancel|oncanplay|oncanplaythrough|onchange|onclick|onclose|oncontextmenu|oncopy|oncuechange|oncut|ondblclick|ondeactivate|ondrag|ondragend|ondragenter|ondragexit|ondragleave|ondragover|ondragstart|ondrop|ondurationchange|onemptied|onended|onerror|onfocus|onfreeze|onfullscreenchange|onfullscreenerror|ongotpointercapture|oninput|oninvalid|onkeydown|onkeypress|onkeyup|onload|onloadeddata|onloadedmetadata|onloadend|onloadstart|onlostpointercapture|onmousedown|onmouseenter|onmouseleave|onmousemove|onmouseout|onmouseover|onmouseup|onmousewheel|onmozfullscreenchange|onmozfullscreenerror|onmscontentzoom|onmsgesturechange|onmsgesturedoubletap|onmsgestureend|onmsgesturehold|onmsgesturestart|onmsgesturetap|onmsinertiastart|onmsmanipulationstatechanged|onmssitemodejumplistitemremoved|onmsthumbnailclick|onpaste|onpause|onplay|onplaying|onpointercancel|onpointerdown|onpointerenter|onpointerleave|onpointerlockchange|onpointerlockerror|onpointermove|onpointerout|onpointerover|onpointerup|onprogress|onratechange|onreadystatechange|onrejectionhandled|onreset|onresize|onresume|onscroll|onsearch|onseeked|onseeking|onselect|onselectionchange|onselectstart|onshow|onstalled|onstop|onsubmit|onsuspend|ontimeupdate|ontoggle|ontransitioncancel|ontransitionend|ontransitionrun|ontransitionstart|onunhandledrejection|onvisibilitychange|onvolumechange|onwaiting|onwebkitanimationend|onwebkitanimationiteration|onwebkitanimationstart|onwebkitfullscreenchange|onwebkitfullscreenerror|onwebkitmouseforcechanged|onwebkitmouseforcedown|onwebkitmouseforceup|onwebkitmouseforcewillbegin|onwebkittransitionend|onwheel|open|origin|ownerDocument|parentElement|parentNode|pictureInPictureElement|pictureInPictureEnabled|plugins|pointerLockElement|preferredStyleSheetSet|prepend|previousSibling|propertyIsEnumerable|queryCommandEnabled|queryCommandIndeterm|queryCommandState|queryCommandSupported|queryCommandText|queryCommandValue|querySelector|querySelectorAll|readyState|referrer|registerElement|releaseCapture|releaseEvents|removeChild|removeEventListener|replaceChild|requestStorageAccess|rootElement|scripts|scrollingElement|selectedStyleSheetSet|styleSheetSets|styleSheets|textContent|title|toLocaleString|toSource|toString|updateSettings|valueOf|visibilityState|vlinkColor|wasDiscarded|webkitCancelFullScreen|webkitCurrentFullScreenElement|webkitExitFullscreen|webkitFullScreenKeyboardInputAllowed|webkitFullscreenElement|webkitFullscreenEnabled|webkitHidden|webkitIsFullScreen|webkitVisibilityState|write|writeln|xmlEncoding|xmlStandalone|xmlVersion)(\s|$)',
                    ],
                ]
            ),
            'name-attr' => new Spec\AttributeList(
                [
                    Attribute::NAME => [
                        'disallowedValueRegex' => '(^|\s)(__amp_\S*|__count__|__defineGetter__|__defineSetter__|__lookupGetter__|__lookupSetter__|__noSuchMethod__|__parent__|__proto__|__AMP_\S*|\$p|\$proxy|acceptCharset|addEventListener|appendChild|assignedSlot|attachShadow|baseURI|checkValidity|childElementCount|childNodes|classList|className|clientHeight|clientLeft|clientTop|clientWidth|compareDocumentPosition|computedName|computedRole|contentEditable|createShadowRoot|enqueAction|firstChild|firstElementChild|getAnimations|getAttribute|getAttributeNS|getAttributeNode|getAttributeNodeNS|getBoundingClientRect|getClientRects|getDestinationInsertionPoints|getElementsByClassName|getElementsByTagName|getElementsByTagNameNS|getRootNode|hasAttribute|hasAttributeNS|hasAttributes|hasChildNodes|hasPointerCapture|innerHTML|innerText|inputMode|insertAdjacentElement|insertAdjacentHTML|insertAdjacentText|isContentEditable|isDefaultNamespace|isEqualNode|isSameNode|lastChild|lastElementChild|lookupNamespaceURI|namespaceURI|nextElementSibling|nextSibling|nodeName|nodeType|nodeValue|offsetHeight|offsetLeft|offsetParent|offsetTop|offsetWidth|outerHTML|outerText|ownerDocument|parentElement|parentNode|previousElementSibling|previousSibling|querySelector|querySelectorAll|releasePointerCapture|removeAttribute|removeAttributeNS|removeAttributeNode|removeChild|removeEventListener|replaceChild|reportValidity|requestPointerLock|scrollHeight|scrollIntoView|scrollIntoViewIfNeeded|scrollLeft|scrollWidth|setAttribute|setAttributeNS|setAttributeNode|setAttributeNodeNS|setPointerCapture|shadowRoot|styleMap|tabIndex|tagName|textContent|toString|valueOf|(webkit|ms|moz|o)dropzone|(webkit|moz|ms|o)MatchesSelector|(webkit|moz|ms|o)RequestFullScreen|(webkit|moz|ms|o)RequestFullscreen)(\s|$)',
                    ],
                ]
            ),
            'mandatory-name-attr' => new Spec\AttributeList(
                [
                    Attribute::NAME => [
                        'mandatory' => true,
                        'disallowedValueRegex' => '(^|\s)(__amp_\S*|__count__|__defineGetter__|__defineSetter__|__lookupGetter__|__lookupSetter__|__noSuchMethod__|__parent__|__proto__|__AMP_\S*|\$p|\$proxy|acceptCharset|addEventListener|appendChild|assignedSlot|attachShadow|baseURI|checkValidity|childElementCount|childNodes|classList|className|clientHeight|clientLeft|clientTop|clientWidth|compareDocumentPosition|computedName|computedRole|contentEditable|createShadowRoot|enqueAction|firstChild|firstElementChild|getAnimations|getAttribute|getAttributeNS|getAttributeNode|getAttributeNodeNS|getBoundingClientRect|getClientRects|getDestinationInsertionPoints|getElementsByClassName|getElementsByTagName|getElementsByTagNameNS|getRootNode|hasAttribute|hasAttributeNS|hasAttributes|hasChildNodes|hasPointerCapture|innerHTML|innerText|inputMode|insertAdjacentElement|insertAdjacentHTML|insertAdjacentText|isContentEditable|isDefaultNamespace|isEqualNode|isSameNode|lastChild|lastElementChild|lookupNamespaceURI|namespaceURI|nextElementSibling|nextSibling|nodeName|nodeType|nodeValue|offsetHeight|offsetLeft|offsetParent|offsetTop|offsetWidth|outerHTML|outerText|ownerDocument|parentElement|parentNode|previousElementSibling|previousSibling|querySelector|querySelectorAll|releasePointerCapture|removeAttribute|removeAttributeNS|removeAttributeNode|removeChild|removeEventListener|replaceChild|reportValidity|requestPointerLock|scrollHeight|scrollIntoView|scrollIntoViewIfNeeded|scrollLeft|scrollWidth|setAttribute|setAttributeNS|setAttributeNode|setAttributeNodeNS|setPointerCapture|shadowRoot|styleMap|tabIndex|tagName|textContent|toString|valueOf|(webkit|ms|moz|o)dropzone|(webkit|moz|ms|o)MatchesSelector|(webkit|moz|ms|o)RequestFullScreen|(webkit|moz|ms|o)RequestFullscreen)(\s|$)',
                    ],
                ]
            ),
            '$GLOBAL_ATTRS' => new Spec\AttributeList(
                [
                    Attribute::ITEMID => [],
                    Attribute::ITEMPROP => [],
                    Attribute::ITEMREF => [],
                    Attribute::ITEMSCOPE => [],
                    Attribute::ITEMTYPE => [],
                    Attribute::ABOUT => [],
                    Attribute::CONTENT => [],
                    Attribute::DATATYPE => [],
                    Attribute::INLIST => [],
                    Attribute::PREFIX => [],
                    Attribute::PROPERTY => [],
                    Attribute::REL => [
                        'disallowedValueRegex' => '(^|\s)(canonical|components|dns-prefetch|import|manifest|preconnect|preload|prerender|serviceworker|stylesheet|subresource)(\s|$)',
                    ],
                    Attribute::RESOURCE => [],
                    Attribute::REV => [],
                    Attribute::STYLE => [
                        'valueDocCss' => true,
                    ],
                    Attribute::TYPEOF => [],
                    Attribute::VOCAB => [],
                    Attribute::ACCESSKEY => [],
                    Attribute::CLASS => [],
                    Attribute::DIR => [],
                    Attribute::DRAGGABLE => [],
                    Attribute::HIDDEN => [
                        'value' => [
                            '',
                        ],
                    ],
                    Attribute::ID => [
                        'disallowedValueRegex' => '(^|\s)(__amp_\S*|__count__|__defineGetter__|__defineSetter__|__lookupGetter__|__lookupSetter__|__noSuchMethod__|__parent__|__proto__|__AMP_\S*|\$p|\$proxy|acceptCharset|addEventListener|appendChild|assignedSlot|attachShadow|AMP|baseURI|checkValidity|childElementCount|childNodes|classList|className|clientHeight|clientLeft|clientTop|clientWidth|compareDocumentPosition|computedName|computedRole|contentEditable|createShadowRoot|enqueAction|firstChild|firstElementChild|getAnimations|getAttribute|getAttributeNS|getAttributeNode|getAttributeNodeNS|getBoundingClientRect|getClientRects|getDestinationInsertionPoints|getElementsByClassName|getElementsByTagName|getElementsByTagNameNS|getRootNode|hasAttribute|hasAttributeNS|hasAttributes|hasChildNodes|hasPointerCapture|i-amphtml-\S*|innerHTML|innerText|inputMode|insertAdjacentElement|insertAdjacentHTML|insertAdjacentText|isContentEditable|isDefaultNamespace|isEqualNode|isSameNode|lastChild|lastElementChild|lookupNamespaceURI|namespaceURI|nextElementSibling|nextSibling|nodeName|nodeType|nodeValue|offsetHeight|offsetLeft|offsetParent|offsetTop|offsetWidth|outerHTML|outerText|ownerDocument|parentElement|parentNode|previousElementSibling|previousSibling|querySelector|querySelectorAll|releasePointerCapture|removeAttribute|removeAttributeNS|removeAttributeNode|removeChild|removeEventListener|replaceChild|reportValidity|requestPointerLock|scrollHeight|scrollIntoView|scrollIntoViewIfNeeded|scrollLeft|scrollWidth|setAttribute|setAttributeNS|setAttributeNode|setAttributeNodeNS|setPointerCapture|shadowRoot|styleMap|tabIndex|tagName|textContent|toString|valueOf|(webkit|ms|moz|o)dropzone|(webkit|moz|ms|o)MatchesSelector|(webkit|moz|ms|o)RequestFullScreen|(webkit|moz|ms|o)RequestFullscreen)(\s|$)',
                    ],
                    Attribute::LANG => [],
                    Attribute::SLOT => [],
                    Attribute::TABINDEX => [],
                    Attribute::TITLE => [],
                    Attribute::TRANSLATE => [],
                    Attribute::ARIA_ACTIVEDESCENDANT => [],
                    Attribute::ARIA_ATOMIC => [],
                    Attribute::ARIA_AUTOCOMPLETE => [],
                    Attribute::ARIA_BUSY => [],
                    Attribute::ARIA_CHECKED => [],
                    Attribute::ARIA_CONTROLS => [],
                    Attribute::ARIA_CURRENT => [],
                    Attribute::ARIA_DESCRIBEDBY => [],
                    Attribute::ARIA_DISABLED => [],
                    Attribute::ARIA_DROPEFFECT => [],
                    Attribute::ARIA_EXPANDED => [],
                    Attribute::ARIA_FLOWTO => [],
                    Attribute::ARIA_GRABBED => [],
                    Attribute::ARIA_HASPOPUP => [],
                    Attribute::ARIA_HIDDEN => [],
                    Attribute::ARIA_INVALID => [],
                    Attribute::ARIA_LABEL => [],
                    Attribute::ARIA_LABELLEDBY => [],
                    Attribute::ARIA_LEVEL => [],
                    Attribute::ARIA_LIVE => [],
                    Attribute::ARIA_MULTILINE => [],
                    Attribute::ARIA_MULTISELECTABLE => [],
                    Attribute::ARIA_ORIENTATION => [],
                    Attribute::ARIA_OWNS => [],
                    Attribute::ARIA_POSINSET => [],
                    Attribute::ARIA_PRESSED => [],
                    Attribute::ARIA_READONLY => [],
                    Attribute::ARIA_RELEVANT => [],
                    Attribute::ARIA_REQUIRED => [],
                    Attribute::ARIA_SELECTED => [],
                    Attribute::ARIA_SETSIZE => [],
                    Attribute::ARIA_SORT => [],
                    Attribute::ARIA_VALUEMAX => [],
                    Attribute::ARIA_VALUEMIN => [],
                    Attribute::ARIA_VALUENOW => [],
                    Attribute::ARIA_VALUETEXT => [],
                    Attribute::ON => [
                        'trigger' => [
                            'ifValueRegex' => 'tap:.*',
                            'alsoRequiresAttr' => [
                                'role',
                                'tabindex',
                            ],
                        ],
                    ],
                    Attribute::ROLE => [],
                    Attribute::PLACEHOLDER => [
                        'value' => [
                            '',
                        ],
                    ],
                    Attribute::FALLBACK => [
                        'value' => [
                            '',
                        ],
                    ],
                    Attribute::OVERFLOW => [],
                    Attribute::AMP_ACCESS => [],
                    Attribute::AMP_ACCESS_BEHAVIOR => [],
                    Attribute::AMP_ACCESS_HIDE => [],
                    Attribute::AMP_ACCESS_ID => [],
                    Attribute::AMP_ACCESS_LOADER => [],
                    Attribute::AMP_ACCESS_LOADING => [],
                    Attribute::AMP_ACCESS_OFF => [],
                    Attribute::AMP_ACCESS_ON => [],
                    Attribute::AMP_ACCESS_SHOW => [],
                    Attribute::AMP_ACCESS_STYLE => [],
                    Attribute::AMP_ACCESS_TEMPLATE => [],
                    Attribute::I_AMP_ACCESS_ID => [],
                    Attribute::VALIDATION_FOR => [
                        'trigger' => [
                            'alsoRequiresAttr' => [
                                'visible-when-invalid',
                            ],
                        ],
                    ],
                    Attribute::VISIBLE_WHEN_INVALID => [
                        'value' => [
                            'badInput',
                            'customError',
                            'patternMismatch',
                            'rangeOverflow',
                            'rangeUnderflow',
                            'stepMismatch',
                            'tooLong',
                            'tooShort',
                            'typeMismatch',
                            'valueMissing',
                        ],
                        'trigger' => [
                            'alsoRequiresAttr' => [
                                'validation-for',
                            ],
                        ],
                    ],
                    Attribute::AMP_FX => [
                        'valueRegexCasei' => '(fade-in|fade-in-scroll|float-in-bottom|float-in-top|fly-in-bottom|fly-in-left|fly-in-right|fly-in-top|parallax)(\s|fade-in|fade-in-scroll|float-in-bottom|float-in-top|fly-in-bottom|fly-in-left|fly-in-right|fly-in-top|parallax)*',
                        'requiresExtension' => [
                            'amp-fx-collection',
                        ],
                    ],
                    Attribute::SUBSCRIPTIONS_ACTION => [
                        'requiresExtension' => [
                            'amp-subscriptions',
                        ],
                    ],
                    Attribute::SUBSCRIPTIONS_ACTIONS => [
                        'value' => [
                            '',
                        ],
                        'requiresExtension' => [
                            'amp-subscriptions',
                        ],
                    ],
                    Attribute::SUBSCRIPTIONS_DECORATE => [
                        'requiresExtension' => [
                            'amp-subscriptions',
                        ],
                    ],
                    Attribute::SUBSCRIPTIONS_DIALOG => [
                        'value' => [
                            '',
                        ],
                        'requiresExtension' => [
                            'amp-subscriptions',
                        ],
                    ],
                    Attribute::SUBSCRIPTIONS_DISPLAY => [
                        'requiresExtension' => [
                            'amp-subscriptions',
                        ],
                    ],
                    Attribute::SUBSCRIPTIONS_LANG => [
                        'requiresExtension' => [
                            'amp-subscriptions',
                        ],
                    ],
                    Attribute::SUBSCRIPTIONS_SECTION => [
                        'valueCasei' => [
                            'actions',
                            'content',
                            'content-not-granted',
                            'loading',
                        ],
                        'requiresExtension' => [
                            'amp-subscriptions',
                        ],
                    ],
                    Attribute::SUBSCRIPTIONS_SERVICE => [
                        'requiresExtension' => [
                            'amp-subscriptions',
                        ],
                    ],
                    Attribute::SUBSCRIPTIONS_GOOGLE_RTC => [
                        'requiresExtension' => [
                            'amp-subscriptions-google',
                        ],
                    ],
                    Attribute::NEXT_PAGE_HIDE => [
                        'requiresExtension' => [
                            'amp-next-page',
                        ],
                    ],
                    Attribute::NEXT_PAGE_REPLACE => [
                        'requiresExtension' => [
                            'amp-next-page',
                        ],
                    ],
                    '[aria-activedescendant]' => [],
                    '[aria-atomic]' => [],
                    '[aria-autocomplete]' => [],
                    '[aria-busy]' => [],
                    '[aria-checked]' => [],
                    '[aria-controls]' => [],
                    '[aria-describedby]' => [],
                    '[aria-disabled]' => [],
                    '[aria-dropeffect]' => [],
                    '[aria-expanded]' => [],
                    '[aria-flowto]' => [],
                    '[aria-grabbed]' => [],
                    '[aria-haspopup]' => [],
                    '[aria-hidden]' => [],
                    '[aria-invalid]' => [],
                    '[aria-label]' => [],
                    '[aria-labelledby]' => [],
                    '[aria-level]' => [],
                    '[aria-live]' => [],
                    '[aria-multiline]' => [],
                    '[aria-multiselectable]' => [],
                    '[aria-orientation]' => [],
                    '[aria-owns]' => [],
                    '[aria-posinset]' => [],
                    '[aria-pressed]' => [],
                    '[aria-readonly]' => [],
                    '[aria-relevant]' => [],
                    '[aria-required]' => [],
                    '[aria-selected]' => [],
                    '[aria-setsize]' => [],
                    '[aria-sort]' => [],
                    '[aria-valuemax]' => [],
                    '[aria-valuemin]' => [],
                    '[aria-valuenow]' => [],
                    '[aria-valuetext]' => [],
                    '[class]' => [],
                    '[hidden]' => [],
                    '[text]' => [],
                    Attribute::AUTOSCROLL => [
                        'requiresAncestor' => [
                            'marker' => [
                                'AUTOSCROLL',
                            ],
                        ],
                    ],
                ]
            ),
            'amp-audio-common' => new Spec\AttributeList(
                [
                    Attribute::ALBUM => [],
                    Attribute::ARTIST => [],
                    Attribute::ARTWORK => [],
                    Attribute::CONTROLS => [],
                    Attribute::CONTROLSLIST => [],
                    Attribute::LOOP => [
                        'value' => [
                            '',
                        ],
                    ],
                    Attribute::MUTED => [
                        'value' => [
                            '',
                        ],
                    ],
                    Attribute::SRC => [
                        'disallowedValueRegex' => '__amp_source_origin',
                        'valueUrl' => [
                            'protocol' => [
                                'https',
                            ],
                            'allowRelative' => true,
                        ],
                    ],
                    '[album]' => [],
                    '[artist]' => [],
                    '[artwork]' => [],
                    '[controlslist]' => [],
                    '[loop]' => [],
                    '[src]' => [],
                    '[title]' => [],
                ]
            ),
            'amp-base-carousel-common' => new Spec\AttributeList(
                [
                    Attribute::ADVANCE_COUNT => [
                        'valueRegex' => '([^,]+\s+(-?\d+),\s*)*(-?\d+)',
                    ],
                    Attribute::AUTO_ADVANCE => [
                        'valueRegex' => '([^,]+\s+(true|false),\s*)*(true|false)',
                    ],
                    Attribute::AUTO_ADVANCE_COUNT => [
                        'valueRegex' => '([^,]+\s+(-?\d+),\s*)*(-?\d+)',
                    ],
                    Attribute::AUTO_ADVANCE_INTERVAL => [
                        'valueRegex' => '([^,]+\s+(\d+),\s*)*(\d+)',
                    ],
                    Attribute::AUTO_ADVANCE_LOOPS => [
                        'valueRegex' => '([^,]+\s+(\d+),\s*)*(\d+)',
                    ],
                    Attribute::HORIZONTAL => [
                        'valueRegex' => '([^,]+\s+(true|false),\s*)*(true|false)',
                    ],
                    Attribute::LOOP => [
                        'valueRegex' => '([^,]+\s+(true|false),\s*)*(true|false)',
                    ],
                    Attribute::MIXED_LENGTH => [
                        'valueRegex' => '([^,]+\s+(true|false),\s*)*(true|false)',
                    ],
                    Attribute::SLIDE => [
                        'valueRegex' => '([^,]+\s+(\d+),\s*)*(\d+)',
                    ],
                    Attribute::SNAP => [
                        'valueRegex' => '([^,]+\s+(true|false),\s*)*(true|false)',
                    ],
                    Attribute::SNAP_ALIGN => [
                        'valueRegex' => '([^,]+\s+(start|center),\s*)*(start|center)',
                    ],
                    Attribute::SNAP_BY => [
                        'valueRegex' => '([^,]+\s+(\d+),\s*)*(\d+)',
                    ],
                    Attribute::VISIBLE_COUNT => [
                        'valueRegex' => '([^,]+\s+(\d+(\.\d+)?),\s*)*(\d+(\.\d+)?)',
                    ],
                    '[advance-count]' => [],
                    '[auto-advance]' => [],
                    '[auto-advance-count]' => [],
                    '[auto-advance-interval]' => [],
                    '[auto-advance-loops]' => [],
                    '[horizontal]' => [],
                    '[loop]' => [],
                    '[mixed-length]' => [],
                    '[slide]' => [],
                    '[snap]' => [],
                    '[snap-align]' => [],
                    '[snap-by]' => [],
                    '[visible-count]' => [],
                ]
            ),
            'amp-carousel-common' => new Spec\AttributeList(
                [
                    Attribute::ARROWS => [
                        'value' => [
                            '',
                        ],
                        'disabledBy' => [
                            'amp4email',
                        ],
                    ],
                    Attribute::AUTOPLAY => [
                        'valueRegex' => '(|[0-9]+)',
                    ],
                    Attribute::CONTROLS => [],
                    Attribute::DELAY => [
                        'valueRegex' => '[0-9]+',
                    ],
                    Attribute::DOTS => [
                        'value' => [
                            '',
                        ],
                        'disabledBy' => [
                            'amp4email',
                        ],
                    ],
                    Attribute::LOOP => [
                        'value' => [
                            '',
                        ],
                    ],
                    Attribute::SLIDE => [
                        'valueRegex' => '[0-9]+',
                    ],
                    Attribute::TYPE => [
                        'value' => [
                            'carousel',
                            'slides',
                        ],
                    ],
                    '[slide]' => [],
                ]
            ),
            'amp-date-picker-common-attributes' => new Spec\AttributeList(
                [
                    Attribute::ALLOW_BLOCKED_END_DATE => [
                        'value' => [
                            '',
                        ],
                    ],
                    Attribute::ALLOW_BLOCKED_RANGES => [
                        'value' => [
                            '',
                        ],
                    ],
                    Attribute::BLOCKED => [],
                    Attribute::DAY_SIZE => [
                        'valueRegex' => '[0-9]+',
                    ],
                    Attribute::FIRST_DAY_OF_WEEK => [
                        'valueRegex' => '[0-6]',
                    ],
                    Attribute::FORMAT => [],
                    Attribute::HIGHLIGHTED => [],
                    Attribute::LOCALE => [],
                    Attribute::MAX => [],
                    Attribute::MIN => [],
                    Attribute::MONTH_FORMAT => [],
                    Attribute::NUMBER_OF_MONTHS => [
                        'valueRegex' => '[0-9]+',
                    ],
                    Attribute::OPEN_AFTER_CLEAR => [
                        'value' => [
                            '',
                        ],
                    ],
                    Attribute::OPEN_AFTER_SELECT => [
                        'value' => [
                            '',
                        ],
                    ],
                    Attribute::HIDE_KEYBOARD_SHORTCUTS_PANEL => [
                        'value' => [
                            '',
                        ],
                    ],
                    Attribute::SRC => [
                        'disallowedValueRegex' => '__amp_source_origin',
                        'valueUrl' => [
                            'protocol' => [
                                'https',
                            ],
                            'allowRelative' => false,
                        ],
                    ],
                    Attribute::WEEK_DAY_FORMAT => [],
                    '[src]' => [],
                    '[max]' => [],
                    '[min]' => [],
                ]
            ),
            'amp-date-picker-range-type-attributes' => new Spec\AttributeList(
                [
                    Attribute::END_DATE => [],
                    Attribute::END_INPUT_SELECTOR => [],
                    Attribute::MAXIMUM_NIGHTS => [
                        'valueRegex' => '[0-9]+',
                    ],
                    Attribute::MINIMUM_NIGHTS => [
                        'valueRegex' => '[0-9]+',
                    ],
                    Attribute::START_DATE => [],
                    Attribute::START_INPUT_SELECTOR => [],
                ]
            ),
            'amp-date-picker-single-type-attributes' => new Spec\AttributeList(
                [
                    Attribute::DATE => [],
                    Attribute::INPUT_SELECTOR => [],
                ]
            ),
            'amp-date-picker-static-mode-attributes' => new Spec\AttributeList(
                [
                    Attribute::FULLSCREEN => [
                        'value' => [
                            '',
                        ],
                    ],
                ]
            ),
            'amp-date-picker-overlay-mode-attributes' => new Spec\AttributeList(
                [
                    Attribute::TOUCH_KEYBOARD_EDITABLE => [
                        'value' => [
                            '',
                        ],
                    ],
                ]
            ),
            'amp-inputmask-common-attr' => new Spec\AttributeList(
                [
                    Attribute::MASK_OUTPUT => [
                        'trigger' => [
                            'alsoRequiresAttr' => [
                                'mask',
                            ],
                        ],
                    ],
                    Attribute::TYPE => [
                        'value' => [
                            'text',
                            'tel',
                            'search',
                        ],
                    ],
                    '[type]' => [],
                ]
            ),
            'lightboxable-elements' => new Spec\AttributeList(
                [
                    Attribute::LIGHTBOX => [],
                    Attribute::LIGHTBOX_THUMBNAIL_ID => [
                        'valueRegexCasei' => '^[a-z][a-z\d_-]*',
                    ],
                ]
            ),
            'amp-megaphone-common' => new Spec\AttributeList(
                [
                    Attribute::DATA_LIGHT => [
                        'value' => [
                            '',
                        ],
                    ],
                    Attribute::DATA_SHARING => [
                        'value' => [
                            '',
                        ],
                    ],
                ]
            ),
            'amp-nested-menu-actions' => new Spec\AttributeList(
                [
                    Attribute::AMP_NESTED_SUBMENU_CLOSE => [
                        'mandatoryOneof' => '[\'amp-nested-submenu-close\', \'amp-nested-submenu-open\']',
                    ],
                    Attribute::AMP_NESTED_SUBMENU_OPEN => [
                        'mandatoryOneof' => '[\'amp-nested-submenu-close\', \'amp-nested-submenu-open\']',
                    ],
                ]
            ),
            'interactive-shared-configs-attrs' => new Spec\AttributeList(
                [
                    Attribute::ID => [
                        'mandatory' => true,
                    ],
                    Attribute::PROMPT_TEXT => [],
                    Attribute::ENDPOINT => [
                        'mandatory' => true,
                        'valueUrl' => [
                            'protocol' => [
                                'https',
                            ],
                            'allowRelative' => false,
                            'allowEmpty' => false,
                        ],
                    ],
                    Attribute::THEME => [
                        'value' => [
                            'light',
                            'dark',
                        ],
                    ],
                    Attribute::CHIP_STYLE => [
                        'value' => [
                            'shadow',
                            'flat',
                            'transparent',
                        ],
                    ],
                    Attribute::PROMPT_SIZE => [
                        'value' => [
                            'small',
                            'medium',
                            'large',
                        ],
                    ],
                ]
            ),
            'interactive-options-text-attrs' => new Spec\AttributeList(
                [
                    Attribute::OPTION_1_TEXT => [
                        'mandatory' => true,
                    ],
                    Attribute::OPTION_2_TEXT => [
                        'mandatory' => true,
                    ],
                    Attribute::OPTION_3_TEXT => [],
                    Attribute::OPTION_4_TEXT => [
                        'trigger' => [
                            'alsoRequiresAttr' => [
                                'option-3-text',
                            ],
                        ],
                    ],
                ]
            ),
            'interactive-options-confetti-attrs' => new Spec\AttributeList(
                [
                    Attribute::OPTION_1_CONFETTI => [],
                    Attribute::OPTION_2_CONFETTI => [],
                    Attribute::OPTION_3_CONFETTI => [],
                    Attribute::OPTION_4_CONFETTI => [],
                ]
            ),
            'interactive-options-results-category-attrs' => new Spec\AttributeList(
                [
                    Attribute::OPTION_1_RESULTS_CATEGORY => [
                        'trigger' => [
                            'alsoRequiresAttr' => [
                                'option-2-results-category',
                            ],
                        ],
                    ],
                    Attribute::OPTION_2_RESULTS_CATEGORY => [
                        'trigger' => [
                            'alsoRequiresAttr' => [
                                'option-1-results-category',
                            ],
                        ],
                    ],
                    Attribute::OPTION_3_RESULTS_CATEGORY => [
                        'trigger' => [
                            'alsoRequiresAttr' => [
                                'option-2-results-category',
                                'option-3-text',
                            ],
                        ],
                    ],
                    Attribute::OPTION_4_RESULTS_CATEGORY => [
                        'trigger' => [
                            'alsoRequiresAttr' => [
                                'option-3-results-category',
                                'option-4-text',
                            ],
                        ],
                    ],
                ]
            ),
            'amp-video-iframe-common' => new Spec\AttributeList(
                [
                    Attribute::ALBUM => [],
                    Attribute::ALT => [],
                    Attribute::ARTIST => [],
                    Attribute::ARTWORK => [],
                    Attribute::ATTRIBUTION => [],
                    Attribute::AUTOPLAY => [
                        'value' => [
                            '',
                        ],
                    ],
                    Attribute::DOCK => [
                        'requiresExtension' => [
                            'amp-video-docking',
                        ],
                    ],
                    Attribute::IMPLEMENTS_MEDIA_SESSION => [
                        'value' => [
                            '',
                        ],
                    ],
                    Attribute::IMPLEMENTS_ROTATE_TO_FULLSCREEN => [
                        'value' => [
                            '',
                        ],
                    ],
                    Attribute::REFERRERPOLICY => [],
                    Attribute::ROTATE_TO_FULLSCREEN => [
                        'value' => [
                            '',
                        ],
                    ],
                    Attribute::SRC => [
                        'mandatory' => true,
                        'disallowedValueRegex' => '__amp_source_origin',
                        'valueUrl' => [
                            'protocol' => [
                                'https',
                            ],
                        ],
                    ],
                    '[src]' => [],
                ]
            ),
            'amp-video-common' => new Spec\AttributeList(
                [
                    Attribute::ALBUM => [],
                    Attribute::ALT => [],
                    Attribute::ARTIST => [],
                    Attribute::ARTWORK => [],
                    Attribute::ATTRIBUTION => [],
                    Attribute::AUTOPLAY => [
                        'value' => [
                            '',
                        ],
                    ],
                    Attribute::CONTROLS => [
                        'value' => [
                            '',
                        ],
                    ],
                    Attribute::CONTROLSLIST => [],
                    Attribute::CROSSORIGIN => [],
                    Attribute::DISABLEREMOTEPLAYBACK => [
                        'value' => [
                            '',
                        ],
                    ],
                    Attribute::DOCK => [
                        'requiresExtension' => [
                            'amp-video-docking',
                        ],
                    ],
                    Attribute::LOOP => [
                        'value' => [
                            '',
                        ],
                    ],
                    Attribute::MUTED => [
                        'value' => [
                            '',
                        ],
                    ],
                    Attribute::NOAUDIO => [
                        'value' => [
                            '',
                        ],
                    ],
                    Attribute::OBJECT_FIT => [],
                    Attribute::OBJECT_POSITION => [],
                    Attribute::PLACEHOLDER => [],
                    Attribute::PRELOAD => [
                        'value' => [
                            'auto',
                            'metadata',
                            'none',
                            '',
                        ],
                    ],
                    Attribute::ROTATE_TO_FULLSCREEN => [
                        'value' => [
                            '',
                        ],
                    ],
                    Attribute::SRC => [
                        'disallowedValueRegex' => '__amp_source_origin',
                        'valueUrl' => [
                            'protocol' => [
                                'https',
                            ],
                            'allowRelative' => true,
                        ],
                    ],
                    '[album]' => [],
                    '[alt]' => [],
                    '[artist]' => [],
                    '[artwork]' => [],
                    '[attribution]' => [],
                    '[controls]' => [],
                    '[controlslist]' => [],
                    '[loop]' => [],
                    '[poster]' => [],
                    '[preload]' => [],
                    '[src]' => [],
                    '[title]' => [],
                ]
            ),
        ];
    }

    /**
     * Get a specific attribute list.
     *
     * @param string $attributeListName Name of the attribute list to get.
     * @return Spec\AttributeList Attribute list with the given attribute list name.
     * @throws InvalidListName If an invalid attribute list name is requested.
     */
    public function get($attributeListName)
    {
        if (!array_key_exists($attributeListName, $this->attributes)) {
            throw \AmpProject\Exception\InvalidListName::forAttributeList($attributeListName);
        }

        return $this->attributes[$attributeListName];
    }
}
