<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Section;

use AmpProject\Attribute;
use AmpProject\Exception\InvalidListName;
use AmpProject\Extension;
use AmpProject\Layout;
use AmpProject\Protocol;
use AmpProject\Validator\Spec;
use AmpProject\Validator\Spec\SpecRule;

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
                        SpecRule::VALUE_CASEI => [
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
                        SpecRule::REQUIRES_EXTENSION => [
                            Extension::ACCESS_POOOL,
                        ],
                    ],
                    Attribute::POOOL_ACCESS_CONTENT => [
                        SpecRule::REQUIRES_EXTENSION => [
                            Extension::ACCESS_POOOL,
                        ],
                    ],
                ]
            ),
            'cite-attr' => new Spec\AttributeList(
                [
                    Attribute::CITE => [
                        SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                        SpecRule::VALUE_URL => [
                            SpecRule::PROTOCOL => [
                                Protocol::HTTP,
                                Protocol::HTTPS,
                            ],
                            SpecRule::ALLOW_EMPTY => true,
                        ],
                    ],
                ]
            ),
            'track-attrs-no-subtitles' => new Spec\AttributeList(
                [
                    Attribute::DEFAULT_ => [
                        SpecRule::VALUE => [
                            '',
                        ],
                    ],
                    Attribute::KIND => [
                        SpecRule::VALUE => [
                            'captions',
                            'chapters',
                            'descriptions',
                            'metadata',
                        ],
                    ],
                    Attribute::LABEL => [],
                    Attribute::SRC => [
                        SpecRule::MANDATORY => true,
                        SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                        SpecRule::VALUE_URL => [
                            SpecRule::PROTOCOL => [
                                Protocol::HTTPS,
                            ],
                            SpecRule::ALLOW_RELATIVE => false,
                        ],
                    ],
                    Attribute::SRCLANG => [],
                ]
            ),
            'track-attrs-subtitles' => new Spec\AttributeList(
                [
                    Attribute::DEFAULT_ => [
                        SpecRule::VALUE => [
                            '',
                        ],
                    ],
                    Attribute::KIND => [
                        SpecRule::MANDATORY => true,
                        SpecRule::VALUE_CASEI => [
                            'subtitles',
                        ],
                    ],
                    Attribute::LABEL => [],
                    Attribute::SRC => [
                        SpecRule::MANDATORY => true,
                        SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                        SpecRule::VALUE_URL => [
                            SpecRule::PROTOCOL => [
                                Protocol::HTTPS,
                            ],
                            SpecRule::ALLOW_RELATIVE => false,
                        ],
                    ],
                    Attribute::SRCLANG => [
                        SpecRule::MANDATORY => true,
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
                        SpecRule::ALTERNATIVE_NAMES => [
                            Attribute::HREF,
                        ],
                        SpecRule::VALUE_URL => [
                            SpecRule::PROTOCOL => [
                                Protocol::HTTP,
                                Protocol::HTTPS,
                            ],
                            SpecRule::ALLOW_EMPTY => false,
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
                        SpecRule::VALUE_DOC_SVG_CSS => true,
                    ],
                ]
            ),
            'input-common-attr' => new Spec\AttributeList(
                [
                    Attribute::ACCEPT => [],
                    Attribute::ACCESSKEY => [],
                    Attribute::AUTOCOMPLETE => [],
                    Attribute::AUTOFOCUS => [
                        SpecRule::DISABLED_BY => [
                            Attribute::AMP4EMAIL,
                        ],
                    ],
                    Attribute::CHECKED => [],
                    Attribute::DISABLED => [],
                    Attribute::HEIGHT => [],
                    Attribute::INPUTMODE => [
                        SpecRule::DISABLED_BY => [
                            Attribute::AMP4EMAIL,
                        ],
                    ],
                    Attribute::LIST_ => [
                        SpecRule::DISABLED_BY => [
                            Attribute::AMP4EMAIL,
                        ],
                    ],
                    Attribute::ENTERKEYHINT => [
                        SpecRule::DISABLED_BY => [
                            Attribute::AMP4EMAIL,
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
                        SpecRule::DISABLED_BY => [
                            Attribute::AMP4EMAIL,
                        ],
                    ],
                    Attribute::SIZE => [],
                    Attribute::SPELLCHECK => [],
                    Attribute::STEP => [],
                    Attribute::TABINDEX => [],
                    Attribute::VALUE => [],
                    Attribute::WIDTH => [],
                    '[accept]' => [
                        SpecRule::DISABLED_BY => [
                            Attribute::AMP4EMAIL,
                        ],
                    ],
                    '[accesskey]' => [
                        SpecRule::DISABLED_BY => [
                            Attribute::AMP4EMAIL,
                        ],
                    ],
                    '[autocomplete]' => [],
                    '[checked]' => [],
                    '[disabled]' => [],
                    '[height]' => [],
                    '[inputmode]' => [
                        SpecRule::DISABLED_BY => [
                            Attribute::AMP4EMAIL,
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
                        SpecRule::DISABLED_BY => [
                            Attribute::AMP4EMAIL,
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
                        SpecRule::MANDATORY => true,
                        SpecRule::VALUE => [
                            '',
                        ],
                    ],
                    Attribute::CROSSORIGIN => [
                        SpecRule::VALUE => [
                            'anonymous',
                        ],
                    ],
                    Attribute::TYPE => [
                        SpecRule::VALUE_CASEI => [
                            'text/javascript',
                        ],
                    ],
                ]
            ),
            'amphtml-module-engine-attrs' => new Spec\AttributeList(
                [
                    Attribute::ASYNC => [
                        SpecRule::MANDATORY => true,
                        SpecRule::VALUE => [
                            '',
                        ],
                    ],
                    Attribute::CROSSORIGIN => [
                        SpecRule::MANDATORY => true,
                        SpecRule::VALUE => [
                            'anonymous',
                        ],
                    ],
                    Attribute::TYPE => [
                        SpecRule::MANDATORY => true,
                        SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                        SpecRule::VALUE_CASEI => [
                            'module',
                        ],
                    ],
                ]
            ),
            'amphtml-nomodule-engine-attrs' => new Spec\AttributeList(
                [
                    Attribute::ASYNC => [
                        SpecRule::MANDATORY => true,
                        SpecRule::VALUE => [
                            '',
                        ],
                    ],
                    Attribute::CROSSORIGIN => [
                        SpecRule::VALUE => [
                            'anonymous',
                        ],
                    ],
                    Attribute::NOMODULE => [
                        SpecRule::MANDATORY => true,
                        SpecRule::VALUE => [
                            '',
                        ],
                    ],
                    Attribute::TYPE => [
                        SpecRule::VALUE_CASEI => [
                            'text/javascript',
                        ],
                    ],
                ]
            ),
            'mandatory-src-or-srcset' => new Spec\AttributeList(
                [
                    Attribute::SRC => [
                        SpecRule::ALTERNATIVE_NAMES => [
                            Attribute::SRCSET,
                        ],
                        SpecRule::MANDATORY => true,
                        SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                        SpecRule::VALUE_URL => [
                            SpecRule::PROTOCOL => [
                                Protocol::DATA,
                                Protocol::HTTP,
                                Protocol::HTTPS,
                            ],
                        ],
                    ],
                ]
            ),
            'mandatory-src-amp4email' => new Spec\AttributeList(
                [
                    Attribute::SRC => [
                        SpecRule::MANDATORY => true,
                        SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin|(.|\s){{|}}(.|\s)|^{{.*[^}][^}]$|^[^{][^{].*}}$|^}}|{{$|{{#|{{/|{{\^',
                        SpecRule::VALUE_URL => [
                            SpecRule::PROTOCOL => [
                                Protocol::HTTPS,
                            ],
                            SpecRule::ALLOW_RELATIVE => false,
                        ],
                    ],
                ]
            ),
            'optional-src-amp4email' => new Spec\AttributeList(
                [
                    Attribute::SRC => [
                        SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin|(.|\s){{|}}(.|\s)|^{{.*[^}][^}]$|^[^{][^{].*}}$|^}}|{{$|{{#|{{/|{{\^',
                        SpecRule::VALUE_URL => [
                            SpecRule::PROTOCOL => [
                                Protocol::HTTPS,
                            ],
                            SpecRule::ALLOW_RELATIVE => false,
                        ],
                    ],
                ]
            ),
            'extended-amp-global' => new Spec\AttributeList(
                [
                    Attribute::I_AMPHTML_LAYOUT => [
                        SpecRule::VALUE_CASEI => [
                            Layout::CONTAINER,
                            Layout::FILL,
                            Layout::FIXED,
                            Layout::FIXED_HEIGHT,
                            Layout::FLEX_ITEM,
                            Layout::FLUID,
                            Layout::INTRINSIC,
                            Layout::NODISPLAY,
                            Layout::RESPONSIVE,
                        ],
                        SpecRule::ENABLED_BY => [
                            Attribute::TRANSFORMED,
                        ],
                    ],
                    Attribute::MEDIA => [],
                    Attribute::NOLOADING => [
                        SpecRule::VALUE => [
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
                        SpecRule::DISABLED_BY => [
                            Attribute::AMP4EMAIL,
                        ],
                    ],
                ]
            ),
            'common-extension-attrs' => new Spec\AttributeList(
                [
                    Attribute::ASYNC => [
                        SpecRule::MANDATORY => true,
                        SpecRule::VALUE => [
                            '',
                        ],
                    ],
                    Attribute::CROSSORIGIN => [
                        SpecRule::VALUE => [
                            'anonymous',
                        ],
                    ],
                    Attribute::NONCE => [
                        SpecRule::DISABLED_BY => [
                            Attribute::AMP4EMAIL,
                        ],
                    ],
                    Attribute::TYPE => [
                        SpecRule::VALUE_CASEI => [
                            'text/javascript',
                        ],
                    ],
                ]
            ),
            'mandatory-id-attr' => new Spec\AttributeList(
                [
                    Attribute::ID => [
                        SpecRule::MANDATORY => true,
                        SpecRule::DISALLOWED_VALUE_REGEX => '(^|\s)(__amp_\S*|__count__|__defineGetter__|__defineSetter__|__lookupGetter__|__lookupSetter__|__noSuchMethod__|__parent__|__proto__|__AMP_\S*|\$p|\$proxy|acceptCharset|addEventListener|appendChild|assignedSlot|attachShadow|AMP|baseURI|checkValidity|childElementCount|childNodes|classList|className|clientHeight|clientLeft|clientTop|clientWidth|compareDocumentPosition|computedName|computedRole|contentEditable|createShadowRoot|enqueAction|firstChild|firstElementChild|getAnimations|getAttribute|getAttributeNS|getAttributeNode|getAttributeNodeNS|getBoundingClientRect|getClientRects|getDestinationInsertionPoints|getElementsByClassName|getElementsByTagName|getElementsByTagNameNS|getRootNode|hasAttribute|hasAttributeNS|hasAttributes|hasChildNodes|hasPointerCapture|i-amphtml-\S*|innerHTML|innerText|inputMode|insertAdjacentElement|insertAdjacentHTML|insertAdjacentText|isContentEditable|isDefaultNamespace|isEqualNode|isSameNode|lastChild|lastElementChild|lookupNamespaceURI|namespaceURI|nextElementSibling|nextSibling|nodeName|nodeType|nodeValue|offsetHeight|offsetLeft|offsetParent|offsetTop|offsetWidth|outerHTML|outerText|ownerDocument|parentElement|parentNode|previousElementSibling|previousSibling|querySelector|querySelectorAll|releasePointerCapture|removeAttribute|removeAttributeNS|removeAttributeNode|removeChild|removeEventListener|replaceChild|reportValidity|requestPointerLock|scrollHeight|scrollIntoView|scrollIntoViewIfNeeded|scrollLeft|scrollWidth|setAttribute|setAttributeNS|setAttributeNode|setAttributeNodeNS|setPointerCapture|shadowRoot|styleMap|tabIndex|tagName|textContent|toString|valueOf|(webkit|ms|moz|o)dropzone|(webkit|moz|ms|o)MatchesSelector|(webkit|moz|ms|o)RequestFullScreen|(webkit|moz|ms|o)RequestFullscreen)(\s|$)',
                    ],
                ]
            ),
            'form-name-attr' => new Spec\AttributeList(
                [
                    Attribute::NAME => [
                        SpecRule::DISALLOWED_VALUE_REGEX => '(^|\s)(ATTRIBUTE_NODE|CDATA_SECTION_NODE|COMMENT_NODE|DOCUMENT_FRAGMENT_NODE|DOCUMENT_NODE|DOCUMENT_POSITION_CONTAINED_BY|DOCUMENT_POSITION_CONTAINS|DOCUMENT_POSITION_DISCONNECTED|DOCUMENT_POSITION_FOLLOWING|DOCUMENT_POSITION_IMPLEMENTATION_SPECIFIC|DOCUMENT_POSITION_PRECEDING|DOCUMENT_TYPE_NODE|ELEMENT_NODE|ENTITY_NODE|ENTITY_REFERENCE_NODE|NOTATION_NODE|PROCESSING_INSTRUCTION_NODE|TEXT_NODE|URL|URLUnencoded|__amp_\S*|__count__|__defineGetter__|__defineSetter__|__lookupGetter__|__lookupSetter__|__noSuchMethod__|__parent__|__proto__|__AMP_\S*|activeElement|addEventListener|adoptNode|alinkColor|all|anchors|append|appendChild|applets|baseURI|bgColor|body|captureEvents|caretPositionFromPoint|caretRangeFromPoint|characterSet|charset|childElementCount|childNodes|children|clear|cloneNode|close|compareDocumentPosition|compatMode|constructor|contains|contentType|cookie|createAttribute|createAttributeNS|createCDATASection|createComment|createDocumentFragment|createElement|createElementNS|createEvent|createExpression|createNSResolver|createNodeIterator|createProcessingInstruction|createRange|createTextNode|createTreeWalker|currentScript|defaultView|designMode|dir|dispatchEvent|doctype|documentElement|documentURI|domain|elementFromPoint|elementsFromPoint|embeds|enableStyleSheetsForSet|evaluate|execCommand|execCommandShowHelp|exitFullscreen|exitPictureInPicture|exitPointerLock|fgColor|firstChild|firstElementChild|focus|fonts|forms|fullscreen|fullscreenElement|fullscreenEnabled|getCSSCanvasContext|getElementById|getElementsByClassName|getElementsByName|getElementsByTagName|getElementsByTagNameNS|getOverrideStyle|getRootNode|getSelection|hasChildNodes|hasFocus|hasOwnProperty|hasStorageAccess|head|hidden|images|implementation|importNode|inputEncoding|insertBefore|isConnected|isDefaultNamespace|isEqualNode|isPrototypeOf|isSameNode|l10n|lastChild|lastElementChild|lastModified|lastStyleSheetSet|linkColor|links|location|lookupNamespaceURI|lookupPrefix|mozCancelFullScreen|mozFullScreen|mozFullScreenElement|mozFullScreenEnabled|mozSetImageElement|msCSSOMElementFloatMetrics|msCapsLockWarningOff|msElementsFromPoint|msElementsFromRect|nextSibling|nodeName|nodeType|nodeValue|normalize|onabort|onactivate|onafterscriptexecute|onanimationcancel|onanimationend|onanimationiteration|onanimationstart|onauxclick|onbeforeactivate|onbeforecopy|onbeforecut|onbeforedeactivate|onbeforeinput|onbeforepaste|onbeforescriptexecute|onblur|oncancel|oncanplay|oncanplaythrough|onchange|onclick|onclose|oncontextmenu|oncopy|oncuechange|oncut|ondblclick|ondeactivate|ondrag|ondragend|ondragenter|ondragexit|ondragleave|ondragover|ondragstart|ondrop|ondurationchange|onemptied|onended|onerror|onfocus|onfreeze|onfullscreenchange|onfullscreenerror|ongotpointercapture|oninput|oninvalid|onkeydown|onkeypress|onkeyup|onload|onloadeddata|onloadedmetadata|onloadend|onloadstart|onlostpointercapture|onmousedown|onmouseenter|onmouseleave|onmousemove|onmouseout|onmouseover|onmouseup|onmousewheel|onmozfullscreenchange|onmozfullscreenerror|onmscontentzoom|onmsgesturechange|onmsgesturedoubletap|onmsgestureend|onmsgesturehold|onmsgesturestart|onmsgesturetap|onmsinertiastart|onmsmanipulationstatechanged|onmssitemodejumplistitemremoved|onmsthumbnailclick|onpaste|onpause|onplay|onplaying|onpointercancel|onpointerdown|onpointerenter|onpointerleave|onpointerlockchange|onpointerlockerror|onpointermove|onpointerout|onpointerover|onpointerup|onprogress|onratechange|onreadystatechange|onrejectionhandled|onreset|onresize|onresume|onscroll|onsearch|onseeked|onseeking|onselect|onselectionchange|onselectstart|onshow|onstalled|onstop|onsubmit|onsuspend|ontimeupdate|ontoggle|ontransitioncancel|ontransitionend|ontransitionrun|ontransitionstart|onunhandledrejection|onvisibilitychange|onvolumechange|onwaiting|onwebkitanimationend|onwebkitanimationiteration|onwebkitanimationstart|onwebkitfullscreenchange|onwebkitfullscreenerror|onwebkitmouseforcechanged|onwebkitmouseforcedown|onwebkitmouseforceup|onwebkitmouseforcewillbegin|onwebkittransitionend|onwheel|open|origin|ownerDocument|parentElement|parentNode|pictureInPictureElement|pictureInPictureEnabled|plugins|pointerLockElement|preferredStyleSheetSet|prepend|previousSibling|propertyIsEnumerable|queryCommandEnabled|queryCommandIndeterm|queryCommandState|queryCommandSupported|queryCommandText|queryCommandValue|querySelector|querySelectorAll|readyState|referrer|registerElement|releaseCapture|releaseEvents|removeChild|removeEventListener|replaceChild|requestStorageAccess|rootElement|scripts|scrollingElement|selectedStyleSheetSet|styleSheetSets|styleSheets|textContent|title|toLocaleString|toSource|toString|updateSettings|valueOf|visibilityState|vlinkColor|wasDiscarded|webkitCancelFullScreen|webkitCurrentFullScreenElement|webkitExitFullscreen|webkitFullScreenKeyboardInputAllowed|webkitFullscreenElement|webkitFullscreenEnabled|webkitHidden|webkitIsFullScreen|webkitVisibilityState|write|writeln|xmlEncoding|xmlStandalone|xmlVersion)(\s|$)',
                    ],
                ]
            ),
            'name-attr' => new Spec\AttributeList(
                [
                    Attribute::NAME => [
                        SpecRule::DISALLOWED_VALUE_REGEX => '(^|\s)(__amp_\S*|__count__|__defineGetter__|__defineSetter__|__lookupGetter__|__lookupSetter__|__noSuchMethod__|__parent__|__proto__|__AMP_\S*|\$p|\$proxy|acceptCharset|addEventListener|appendChild|assignedSlot|attachShadow|baseURI|checkValidity|childElementCount|childNodes|classList|className|clientHeight|clientLeft|clientTop|clientWidth|compareDocumentPosition|computedName|computedRole|contentEditable|createShadowRoot|enqueAction|firstChild|firstElementChild|getAnimations|getAttribute|getAttributeNS|getAttributeNode|getAttributeNodeNS|getBoundingClientRect|getClientRects|getDestinationInsertionPoints|getElementsByClassName|getElementsByTagName|getElementsByTagNameNS|getRootNode|hasAttribute|hasAttributeNS|hasAttributes|hasChildNodes|hasPointerCapture|innerHTML|innerText|inputMode|insertAdjacentElement|insertAdjacentHTML|insertAdjacentText|isContentEditable|isDefaultNamespace|isEqualNode|isSameNode|lastChild|lastElementChild|lookupNamespaceURI|namespaceURI|nextElementSibling|nextSibling|nodeName|nodeType|nodeValue|offsetHeight|offsetLeft|offsetParent|offsetTop|offsetWidth|outerHTML|outerText|ownerDocument|parentElement|parentNode|previousElementSibling|previousSibling|querySelector|querySelectorAll|releasePointerCapture|removeAttribute|removeAttributeNS|removeAttributeNode|removeChild|removeEventListener|replaceChild|reportValidity|requestPointerLock|scrollHeight|scrollIntoView|scrollIntoViewIfNeeded|scrollLeft|scrollWidth|setAttribute|setAttributeNS|setAttributeNode|setAttributeNodeNS|setPointerCapture|shadowRoot|styleMap|tabIndex|tagName|textContent|toString|valueOf|(webkit|ms|moz|o)dropzone|(webkit|moz|ms|o)MatchesSelector|(webkit|moz|ms|o)RequestFullScreen|(webkit|moz|ms|o)RequestFullscreen)(\s|$)',
                    ],
                ]
            ),
            'mandatory-name-attr' => new Spec\AttributeList(
                [
                    Attribute::NAME => [
                        SpecRule::MANDATORY => true,
                        SpecRule::DISALLOWED_VALUE_REGEX => '(^|\s)(__amp_\S*|__count__|__defineGetter__|__defineSetter__|__lookupGetter__|__lookupSetter__|__noSuchMethod__|__parent__|__proto__|__AMP_\S*|\$p|\$proxy|acceptCharset|addEventListener|appendChild|assignedSlot|attachShadow|baseURI|checkValidity|childElementCount|childNodes|classList|className|clientHeight|clientLeft|clientTop|clientWidth|compareDocumentPosition|computedName|computedRole|contentEditable|createShadowRoot|enqueAction|firstChild|firstElementChild|getAnimations|getAttribute|getAttributeNS|getAttributeNode|getAttributeNodeNS|getBoundingClientRect|getClientRects|getDestinationInsertionPoints|getElementsByClassName|getElementsByTagName|getElementsByTagNameNS|getRootNode|hasAttribute|hasAttributeNS|hasAttributes|hasChildNodes|hasPointerCapture|innerHTML|innerText|inputMode|insertAdjacentElement|insertAdjacentHTML|insertAdjacentText|isContentEditable|isDefaultNamespace|isEqualNode|isSameNode|lastChild|lastElementChild|lookupNamespaceURI|namespaceURI|nextElementSibling|nextSibling|nodeName|nodeType|nodeValue|offsetHeight|offsetLeft|offsetParent|offsetTop|offsetWidth|outerHTML|outerText|ownerDocument|parentElement|parentNode|previousElementSibling|previousSibling|querySelector|querySelectorAll|releasePointerCapture|removeAttribute|removeAttributeNS|removeAttributeNode|removeChild|removeEventListener|replaceChild|reportValidity|requestPointerLock|scrollHeight|scrollIntoView|scrollIntoViewIfNeeded|scrollLeft|scrollWidth|setAttribute|setAttributeNS|setAttributeNode|setAttributeNodeNS|setPointerCapture|shadowRoot|styleMap|tabIndex|tagName|textContent|toString|valueOf|(webkit|ms|moz|o)dropzone|(webkit|moz|ms|o)MatchesSelector|(webkit|moz|ms|o)RequestFullScreen|(webkit|moz|ms|o)RequestFullscreen)(\s|$)',
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
                        SpecRule::DISALLOWED_VALUE_REGEX => '(^|\s)(canonical|components|dns-prefetch|import|manifest|preconnect|preload|prerender|serviceworker|stylesheet|subresource)(\s|$)',
                    ],
                    Attribute::RESOURCE => [],
                    Attribute::REV => [],
                    Attribute::STYLE => [
                        SpecRule::VALUE_DOC_CSS => true,
                    ],
                    Attribute::TYPEOF => [],
                    Attribute::VOCAB => [],
                    Attribute::ACCESSKEY => [],
                    Attribute::CLASS_ => [],
                    Attribute::DIR => [],
                    Attribute::DRAGGABLE => [],
                    Attribute::HIDDEN => [
                        SpecRule::VALUE => [
                            '',
                        ],
                    ],
                    Attribute::ID => [
                        SpecRule::DISALLOWED_VALUE_REGEX => '(^|\s)(__amp_\S*|__count__|__defineGetter__|__defineSetter__|__lookupGetter__|__lookupSetter__|__noSuchMethod__|__parent__|__proto__|__AMP_\S*|\$p|\$proxy|acceptCharset|addEventListener|appendChild|assignedSlot|attachShadow|AMP|baseURI|checkValidity|childElementCount|childNodes|classList|className|clientHeight|clientLeft|clientTop|clientWidth|compareDocumentPosition|computedName|computedRole|contentEditable|createShadowRoot|enqueAction|firstChild|firstElementChild|getAnimations|getAttribute|getAttributeNS|getAttributeNode|getAttributeNodeNS|getBoundingClientRect|getClientRects|getDestinationInsertionPoints|getElementsByClassName|getElementsByTagName|getElementsByTagNameNS|getRootNode|hasAttribute|hasAttributeNS|hasAttributes|hasChildNodes|hasPointerCapture|i-amphtml-\S*|innerHTML|innerText|inputMode|insertAdjacentElement|insertAdjacentHTML|insertAdjacentText|isContentEditable|isDefaultNamespace|isEqualNode|isSameNode|lastChild|lastElementChild|lookupNamespaceURI|namespaceURI|nextElementSibling|nextSibling|nodeName|nodeType|nodeValue|offsetHeight|offsetLeft|offsetParent|offsetTop|offsetWidth|outerHTML|outerText|ownerDocument|parentElement|parentNode|previousElementSibling|previousSibling|querySelector|querySelectorAll|releasePointerCapture|removeAttribute|removeAttributeNS|removeAttributeNode|removeChild|removeEventListener|replaceChild|reportValidity|requestPointerLock|scrollHeight|scrollIntoView|scrollIntoViewIfNeeded|scrollLeft|scrollWidth|setAttribute|setAttributeNS|setAttributeNode|setAttributeNodeNS|setPointerCapture|shadowRoot|styleMap|tabIndex|tagName|textContent|toString|valueOf|(webkit|ms|moz|o)dropzone|(webkit|moz|ms|o)MatchesSelector|(webkit|moz|ms|o)RequestFullScreen|(webkit|moz|ms|o)RequestFullscreen)(\s|$)',
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
                        SpecRule::TRIGGER => [
                            SpecRule::IF_VALUE_REGEX => 'tap:.*',
                            SpecRule::ALSO_REQUIRES_ATTR => [
                                Attribute::ROLE,
                                Attribute::TABINDEX,
                            ],
                        ],
                    ],
                    Attribute::ROLE => [],
                    Attribute::PLACEHOLDER => [
                        SpecRule::VALUE => [
                            '',
                        ],
                    ],
                    Attribute::FALLBACK => [
                        SpecRule::VALUE => [
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
                        SpecRule::TRIGGER => [
                            SpecRule::ALSO_REQUIRES_ATTR => [
                                Attribute::VISIBLE_WHEN_INVALID,
                            ],
                        ],
                    ],
                    Attribute::VISIBLE_WHEN_INVALID => [
                        SpecRule::VALUE => [
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
                        SpecRule::TRIGGER => [
                            SpecRule::ALSO_REQUIRES_ATTR => [
                                Attribute::VALIDATION_FOR,
                            ],
                        ],
                    ],
                    Attribute::AMP_FX => [
                        SpecRule::VALUE_REGEX_CASEI => '(fade-in|fade-in-scroll|float-in-bottom|float-in-top|fly-in-bottom|fly-in-left|fly-in-right|fly-in-top|parallax)(\s|fade-in|fade-in-scroll|float-in-bottom|float-in-top|fly-in-bottom|fly-in-left|fly-in-right|fly-in-top|parallax)*',
                        SpecRule::REQUIRES_EXTENSION => [
                            Extension::FX_COLLECTION,
                        ],
                    ],
                    Attribute::SUBSCRIPTIONS_ACTION => [
                        SpecRule::REQUIRES_EXTENSION => [
                            Extension::SUBSCRIPTIONS,
                        ],
                    ],
                    Attribute::SUBSCRIPTIONS_ACTIONS => [
                        SpecRule::VALUE => [
                            '',
                        ],
                        SpecRule::REQUIRES_EXTENSION => [
                            Extension::SUBSCRIPTIONS,
                        ],
                    ],
                    Attribute::SUBSCRIPTIONS_DECORATE => [
                        SpecRule::REQUIRES_EXTENSION => [
                            Extension::SUBSCRIPTIONS,
                        ],
                    ],
                    Attribute::SUBSCRIPTIONS_DIALOG => [
                        SpecRule::VALUE => [
                            '',
                        ],
                        SpecRule::REQUIRES_EXTENSION => [
                            Extension::SUBSCRIPTIONS,
                        ],
                    ],
                    Attribute::SUBSCRIPTIONS_DISPLAY => [
                        SpecRule::REQUIRES_EXTENSION => [
                            Extension::SUBSCRIPTIONS,
                        ],
                    ],
                    Attribute::SUBSCRIPTIONS_LANG => [
                        SpecRule::REQUIRES_EXTENSION => [
                            Extension::SUBSCRIPTIONS,
                        ],
                    ],
                    Attribute::SUBSCRIPTIONS_SECTION => [
                        SpecRule::VALUE_CASEI => [
                            'actions',
                            'content',
                            'content-not-granted',
                            'loading',
                        ],
                        SpecRule::REQUIRES_EXTENSION => [
                            Extension::SUBSCRIPTIONS,
                        ],
                    ],
                    Attribute::SUBSCRIPTIONS_SERVICE => [
                        SpecRule::REQUIRES_EXTENSION => [
                            Extension::SUBSCRIPTIONS,
                        ],
                    ],
                    Attribute::SUBSCRIPTIONS_GOOGLE_RTC => [
                        SpecRule::REQUIRES_EXTENSION => [
                            Extension::SUBSCRIPTIONS_GOOGLE,
                        ],
                    ],
                    Attribute::NEXT_PAGE_HIDE => [
                        SpecRule::REQUIRES_EXTENSION => [
                            Extension::NEXT_PAGE,
                        ],
                    ],
                    Attribute::NEXT_PAGE_REPLACE => [
                        SpecRule::REQUIRES_EXTENSION => [
                            Extension::NEXT_PAGE,
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
                        SpecRule::REQUIRES_ANCESTOR => [
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
                        SpecRule::VALUE => [
                            '',
                        ],
                    ],
                    Attribute::MUTED => [
                        SpecRule::VALUE => [
                            '',
                        ],
                    ],
                    Attribute::SRC => [
                        SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                        SpecRule::VALUE_URL => [
                            SpecRule::PROTOCOL => [
                                Protocol::HTTPS,
                            ],
                            SpecRule::ALLOW_RELATIVE => true,
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
                        SpecRule::VALUE_REGEX => '([^,]+\s+(-?\d+),\s*)*(-?\d+)',
                    ],
                    Attribute::AUTO_ADVANCE => [
                        SpecRule::VALUE_REGEX => '([^,]+\s+(true|false),\s*)*(true|false)',
                    ],
                    Attribute::AUTO_ADVANCE_COUNT => [
                        SpecRule::VALUE_REGEX => '([^,]+\s+(-?\d+),\s*)*(-?\d+)',
                    ],
                    Attribute::AUTO_ADVANCE_INTERVAL => [
                        SpecRule::VALUE_REGEX => '([^,]+\s+(\d+),\s*)*(\d+)',
                    ],
                    Attribute::AUTO_ADVANCE_LOOPS => [
                        SpecRule::VALUE_REGEX => '([^,]+\s+(\d+),\s*)*(\d+)',
                    ],
                    Attribute::HORIZONTAL => [
                        SpecRule::VALUE_REGEX => '([^,]+\s+(true|false),\s*)*(true|false)',
                    ],
                    Attribute::LOOP => [
                        SpecRule::VALUE_REGEX => '([^,]+\s+(true|false),\s*)*(true|false)',
                    ],
                    Attribute::MIXED_LENGTH => [
                        SpecRule::VALUE_REGEX => '([^,]+\s+(true|false),\s*)*(true|false)',
                    ],
                    Attribute::SLIDE => [
                        SpecRule::VALUE_REGEX => '([^,]+\s+(\d+),\s*)*(\d+)',
                    ],
                    Attribute::SNAP => [
                        SpecRule::VALUE_REGEX => '([^,]+\s+(true|false),\s*)*(true|false)',
                    ],
                    Attribute::SNAP_ALIGN => [
                        SpecRule::VALUE_REGEX => '([^,]+\s+(start|center),\s*)*(start|center)',
                    ],
                    Attribute::SNAP_BY => [
                        SpecRule::VALUE_REGEX => '([^,]+\s+(\d+),\s*)*(\d+)',
                    ],
                    Attribute::VISIBLE_COUNT => [
                        SpecRule::VALUE_REGEX => '([^,]+\s+(\d+(\.\d+)?),\s*)*(\d+(\.\d+)?)',
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
                        SpecRule::VALUE => [
                            '',
                        ],
                        SpecRule::DISABLED_BY => [
                            Attribute::AMP4EMAIL,
                        ],
                    ],
                    Attribute::AUTOPLAY => [
                        SpecRule::VALUE_REGEX => '(|[0-9]+)',
                    ],
                    Attribute::CONTROLS => [],
                    Attribute::DELAY => [
                        SpecRule::VALUE_REGEX => '[0-9]+',
                    ],
                    Attribute::DOTS => [
                        SpecRule::VALUE => [
                            '',
                        ],
                        SpecRule::DISABLED_BY => [
                            Attribute::AMP4EMAIL,
                        ],
                    ],
                    Attribute::LOOP => [
                        SpecRule::VALUE => [
                            '',
                        ],
                    ],
                    Attribute::SLIDE => [
                        SpecRule::VALUE_REGEX => '[0-9]+',
                    ],
                    Attribute::TYPE => [
                        SpecRule::VALUE => [
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
                        SpecRule::VALUE => [
                            '',
                        ],
                    ],
                    Attribute::ALLOW_BLOCKED_RANGES => [
                        SpecRule::VALUE => [
                            '',
                        ],
                    ],
                    Attribute::BLOCKED => [],
                    Attribute::DAY_SIZE => [
                        SpecRule::VALUE_REGEX => '[0-9]+',
                    ],
                    Attribute::FIRST_DAY_OF_WEEK => [
                        SpecRule::VALUE_REGEX => '[0-6]',
                    ],
                    Attribute::FORMAT => [],
                    Attribute::HIGHLIGHTED => [],
                    Attribute::LOCALE => [],
                    Attribute::MAX => [],
                    Attribute::MIN => [],
                    Attribute::MONTH_FORMAT => [],
                    Attribute::NUMBER_OF_MONTHS => [
                        SpecRule::VALUE_REGEX => '[0-9]+',
                    ],
                    Attribute::OPEN_AFTER_CLEAR => [
                        SpecRule::VALUE => [
                            '',
                        ],
                    ],
                    Attribute::OPEN_AFTER_SELECT => [
                        SpecRule::VALUE => [
                            '',
                        ],
                    ],
                    Attribute::HIDE_KEYBOARD_SHORTCUTS_PANEL => [
                        SpecRule::VALUE => [
                            '',
                        ],
                    ],
                    Attribute::SRC => [
                        SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                        SpecRule::VALUE_URL => [
                            SpecRule::PROTOCOL => [
                                Protocol::HTTPS,
                            ],
                            SpecRule::ALLOW_RELATIVE => false,
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
                        SpecRule::VALUE_REGEX => '[0-9]+',
                    ],
                    Attribute::MINIMUM_NIGHTS => [
                        SpecRule::VALUE_REGEX => '[0-9]+',
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
                        SpecRule::VALUE => [
                            '',
                        ],
                    ],
                ]
            ),
            'amp-date-picker-overlay-mode-attributes' => new Spec\AttributeList(
                [
                    Attribute::TOUCH_KEYBOARD_EDITABLE => [
                        SpecRule::VALUE => [
                            '',
                        ],
                    ],
                ]
            ),
            'amp-inputmask-common-attr' => new Spec\AttributeList(
                [
                    Attribute::MASK_OUTPUT => [
                        SpecRule::TRIGGER => [
                            SpecRule::ALSO_REQUIRES_ATTR => [
                                Attribute::MASK,
                            ],
                        ],
                    ],
                    Attribute::TYPE => [
                        SpecRule::VALUE => [
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
                        SpecRule::VALUE_REGEX_CASEI => '^[a-z][a-z\d_-]*',
                    ],
                ]
            ),
            'amp-megaphone-common' => new Spec\AttributeList(
                [
                    Attribute::DATA_LIGHT => [
                        SpecRule::VALUE => [
                            '',
                        ],
                    ],
                    Attribute::DATA_SHARING => [
                        SpecRule::VALUE => [
                            '',
                        ],
                    ],
                ]
            ),
            'amp-nested-menu-actions' => new Spec\AttributeList(
                [
                    Attribute::AMP_NESTED_SUBMENU_CLOSE => [
                        SpecRule::MANDATORY_ONEOF => '[\'amp-nested-submenu-close\', \'amp-nested-submenu-open\']',
                    ],
                    Attribute::AMP_NESTED_SUBMENU_OPEN => [
                        SpecRule::MANDATORY_ONEOF => '[\'amp-nested-submenu-close\', \'amp-nested-submenu-open\']',
                    ],
                ]
            ),
            'interactive-shared-configs-attrs' => new Spec\AttributeList(
                [
                    Attribute::ID => [
                        SpecRule::MANDATORY => true,
                    ],
                    Attribute::PROMPT_TEXT => [],
                    Attribute::ENDPOINT => [
                        SpecRule::MANDATORY => true,
                        SpecRule::VALUE_URL => [
                            SpecRule::PROTOCOL => [
                                Protocol::HTTPS,
                            ],
                            SpecRule::ALLOW_RELATIVE => false,
                            SpecRule::ALLOW_EMPTY => false,
                        ],
                    ],
                    Attribute::THEME => [
                        SpecRule::VALUE => [
                            'light',
                            'dark',
                        ],
                    ],
                    Attribute::CHIP_STYLE => [
                        SpecRule::VALUE => [
                            'shadow',
                            'flat',
                            'transparent',
                        ],
                    ],
                    Attribute::PROMPT_SIZE => [
                        SpecRule::VALUE => [
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
                        SpecRule::MANDATORY => true,
                    ],
                    Attribute::OPTION_2_TEXT => [
                        SpecRule::MANDATORY => true,
                    ],
                    Attribute::OPTION_3_TEXT => [],
                    Attribute::OPTION_4_TEXT => [
                        SpecRule::TRIGGER => [
                            SpecRule::ALSO_REQUIRES_ATTR => [
                                Attribute::OPTION_3_TEXT,
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
                        SpecRule::TRIGGER => [
                            SpecRule::ALSO_REQUIRES_ATTR => [
                                Attribute::OPTION_2_RESULTS_CATEGORY,
                            ],
                        ],
                    ],
                    Attribute::OPTION_2_RESULTS_CATEGORY => [
                        SpecRule::TRIGGER => [
                            SpecRule::ALSO_REQUIRES_ATTR => [
                                Attribute::OPTION_1_RESULTS_CATEGORY,
                            ],
                        ],
                    ],
                    Attribute::OPTION_3_RESULTS_CATEGORY => [
                        SpecRule::TRIGGER => [
                            SpecRule::ALSO_REQUIRES_ATTR => [
                                Attribute::OPTION_2_RESULTS_CATEGORY,
                                Attribute::OPTION_3_TEXT,
                            ],
                        ],
                    ],
                    Attribute::OPTION_4_RESULTS_CATEGORY => [
                        SpecRule::TRIGGER => [
                            SpecRule::ALSO_REQUIRES_ATTR => [
                                Attribute::OPTION_3_RESULTS_CATEGORY,
                                Attribute::OPTION_4_TEXT,
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
                        SpecRule::VALUE => [
                            '',
                        ],
                    ],
                    Attribute::DOCK => [
                        SpecRule::REQUIRES_EXTENSION => [
                            Extension::VIDEO_DOCKING,
                        ],
                    ],
                    Attribute::IMPLEMENTS_MEDIA_SESSION => [
                        SpecRule::VALUE => [
                            '',
                        ],
                    ],
                    Attribute::IMPLEMENTS_ROTATE_TO_FULLSCREEN => [
                        SpecRule::VALUE => [
                            '',
                        ],
                    ],
                    Attribute::REFERRERPOLICY => [],
                    Attribute::ROTATE_TO_FULLSCREEN => [
                        SpecRule::VALUE => [
                            '',
                        ],
                    ],
                    Attribute::SRC => [
                        SpecRule::MANDATORY => true,
                        SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                        SpecRule::VALUE_URL => [
                            SpecRule::PROTOCOL => [
                                Protocol::HTTPS,
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
                        SpecRule::VALUE => [
                            '',
                        ],
                    ],
                    Attribute::CONTROLS => [
                        SpecRule::VALUE => [
                            '',
                        ],
                    ],
                    Attribute::CONTROLSLIST => [],
                    Attribute::CROSSORIGIN => [],
                    Attribute::DISABLEREMOTEPLAYBACK => [
                        SpecRule::VALUE => [
                            '',
                        ],
                    ],
                    Attribute::DOCK => [
                        SpecRule::REQUIRES_EXTENSION => [
                            Extension::VIDEO_DOCKING,
                        ],
                    ],
                    Attribute::LOOP => [
                        SpecRule::VALUE => [
                            '',
                        ],
                    ],
                    Attribute::MUTED => [
                        SpecRule::VALUE => [
                            '',
                        ],
                    ],
                    Attribute::NOAUDIO => [
                        SpecRule::VALUE => [
                            '',
                        ],
                    ],
                    Attribute::OBJECT_FIT => [],
                    Attribute::OBJECT_POSITION => [],
                    Attribute::PLACEHOLDER => [],
                    Attribute::PRELOAD => [
                        SpecRule::VALUE => [
                            'auto',
                            'metadata',
                            'none',
                            '',
                        ],
                    ],
                    Attribute::ROTATE_TO_FULLSCREEN => [
                        SpecRule::VALUE => [
                            '',
                        ],
                    ],
                    Attribute::SRC => [
                        SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                        SpecRule::VALUE_URL => [
                            SpecRule::PROTOCOL => [
                                Protocol::HTTPS,
                            ],
                            SpecRule::ALLOW_RELATIVE => true,
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
            throw InvalidListName::forAttributeList($attributeListName);
        }

        return $this->attributes[$attributeListName];
    }
}
