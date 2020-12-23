<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Section;

final class ErrorFormats
{
    /** @var array */
    public $errorFormats;

    public function __construct()
    {
        $this->errorFormats = [
            0 => ['code' => 'UNKNOWN_CODE', 'format' => 'Unknown error.'],
            1 => ['code' => 'INVALID_DOCTYPE_HTML', 'format' => 'Invalid or missing doctype declaration. Should be \'!doctype html\'.'],
            2 => ['code' => 'MANDATORY_TAG_MISSING', 'format' => 'The mandatory tag \'%1\' is missing or incorrect.'],
            3 => ['code' => 'TAG_REQUIRED_BY_MISSING', 'format' => 'The tag \'%1\' is missing or incorrect, but required by \'%2\'.'],
            4 => [
                    'code' => 'WARNING_TAG_REQUIRED_BY_MISSING',
                    'format' => 'The tag \'%1\' is missing or incorrect, but required by \'%2\'. This will soon be an error.',
                ],
            5 => ['code' => 'TAG_EXCLUDED_BY_TAG', 'format' => 'The tag \'%1\' is present, but is excluded by the presence of \'%2\'.'],
            6 => [
                    'code' => 'WARNING_EXTENSION_UNUSED',
                    'format' => 'The extension \'%1\' was found on this page, but is unused (no \'%2\' tag seen). This may become an error in the future.',
                ],
            7 => [
                    'code' => 'EXTENSION_UNUSED',
                    'format' => 'The extension \'%1\' was found on this page, but is unused. Please remove this extension.',
                ],
            8 => [
                    'code' => 'WARNING_EXTENSION_DEPRECATED_VERSION',
                    'format' => 'The extension \'%1\' is referenced at version \'%2\' which is a deprecated version. Please use a more recent version of this extension. This may become an error in the future.',
                ],
            9 => [
                    'code' => 'INCORRECT_SCRIPT_RELEASE_VERSION',
                    'format' => 'The script version for \'%1\' is a %2 version which mismatches with the first script on the page using the %3 version.',
                ],
            10 => [
                    'code' => 'NON_LTS_SCRIPT_AFTER_LTS',
                    'format' => '\'%1\' must use the LTS version to correspond with the first script in the page, which uses LTS.',
                ],
            11 => [
                    'code' => 'LTS_SCRIPT_AFTER_NON_LTS',
                    'format' => '\'%1\' must use the non-LTS version to correspond with the first script in the page, which does not use LTS.',
                ],
            12 => [
                    'code' => 'ATTR_REQUIRED_BUT_MISSING',
                    'format' => 'The attribute \'%1\' in tag \'%2\' is missing or incorrect, but required by attribute \'%3\'.',
                ],
            13 => ['code' => 'DISALLOWED_TAG', 'format' => 'The tag \'%1\' is disallowed.'],
            14 => ['code' => 'GENERAL_DISALLOWED_TAG', 'format' => 'The tag \'%1\' is disallowed except in specific forms.'],
            15 => ['code' => 'DISALLOWED_SCRIPT_TAG', 'format' => 'Custom JavaScript is not allowed.'],
            16 => ['code' => 'DISALLOWED_ATTR', 'format' => 'The attribute \'%1\' may not appear in tag \'%2\'.'],
            17 => [
                    'code' => 'DISALLOWED_STYLE_ATTR',
                    'format' => 'The inline \'style\' attribute is not allowed in AMP documents. Use \'style amp-custom\' tag instead.',
                ],
            18 => ['code' => 'INVALID_ATTR_VALUE', 'format' => 'The attribute \'%1\' in tag \'%2\' is set to the invalid value \'%3\'.'],
            19 => ['code' => 'DUPLICATE_ATTRIBUTE', 'format' => 'The tag \'%1\' contains the attribute \'%2\' repeated multiple times.'],
            20 => [
                    'code' => 'ATTR_VALUE_REQUIRED_BY_LAYOUT',
                    'format' => 'Invalid value \'%1\' for attribute \'%2\' in tag \'%3\' - for layout \'%4\', set the attribute \'%2\' to value \'%5\'.',
                ],
            21 => [
                    'code' => 'MISSING_LAYOUT_ATTRIBUTES',
                    'format' => 'Incomplete layout attributes specified for tag \'%1\'. For example, provide attributes \'width\' and \'height\'.',
                ],
            22 => ['code' => 'IMPLIED_LAYOUT_INVALID', 'format' => 'The implied layout \'%1\' is not supported by tag \'%2\'.'],
            23 => ['code' => 'SPECIFIED_LAYOUT_INVALID', 'format' => 'The specified layout \'%1\' is not supported by tag \'%2\'.'],
            24 => ['code' => 'MANDATORY_ATTR_MISSING', 'format' => 'The mandatory attribute \'%1\' is missing in tag \'%2\'.'],
            25 => [
                    'code' => 'INCONSISTENT_UNITS_FOR_WIDTH_AND_HEIGHT',
                    'format' => 'Inconsistent units for width and height in tag \'%1\' - width is specified in \'%2\' whereas height is specified in \'%3\'.',
                ],
            26 => [
                    'code' => 'STYLESHEET_TOO_LONG',
                    'format' => 'The author stylesheet specified in tag \'%1\' is too long - document contains %2 bytes whereas the limit is %3 bytes.',
                ],
            27 => [
                    'code' => 'STYLESHEET_AND_INLINE_STYLE_TOO_LONG',
                    'format' => 'The author stylesheet specified in tag \'style amp-custom\' and the combined inline styles is too large - document contains %1 bytes whereas the limit is %2 bytes.',
                ],
            28 => [
                    'code' => 'INLINE_STYLE_TOO_LONG',
                    'format' => 'The inline style specified in tag \'%1\' is too long - it contains %2 bytes whereas the limit is %3 bytes.',
                ],
            29 => ['code' => 'INLINE_SCRIPT_TOO_LONG', 'format' => 'The inline script is %1 bytes, which exceeds the limit of %2 bytes.'],
            30 => [
                    'code' => 'MANDATORY_CDATA_MISSING_OR_INCORRECT',
                    'format' => 'The mandatory text inside tag \'%1\' is missing or incorrect.',
                ],
            31 => ['code' => 'CDATA_VIOLATES_DENYLIST', 'format' => 'The text inside tag \'%1\' contains \'%2\', which is disallowed.'],
            32 => ['code' => 'NON_WHITESPACE_CDATA_ENCOUNTERED', 'format' => 'The tag \'%1\' contains text, which is disallowed.'],
            33 => ['code' => 'INVALID_JSON_CDATA', 'format' => 'The script tag contains invalid JSON that cannot be parsed.'],
            34 => [
                    'code' => 'DISALLOWED_PROPERTY_IN_ATTR_VALUE',
                    'format' => 'The property \'%1\' in attribute \'%2\' in tag \'%3\' is disallowed.',
                ],
            35 => [
                    'code' => 'INVALID_PROPERTY_VALUE_IN_ATTR_VALUE',
                    'format' => 'The property \'%1\' in attribute \'%2\' in tag \'%3\' is set to \'%4\', which is invalid.',
                ],
            36 => [
                    'code' => 'DUPLICATE_DIMENSION',
                    'format' => 'Multiple image candidates with the same width or pixel density found in attribute \'%1\' in tag \'%2\'.',
                ],
            37 => ['code' => 'MISSING_URL', 'format' => 'Missing URL for attribute \'%1\' in tag \'%2\'.'],
            38 => ['code' => 'INVALID_URL', 'format' => 'Malformed URL \'%3\' for attribute \'%1\' in tag \'%2\'.'],
            39 => ['code' => 'INVALID_URL_PROTOCOL', 'format' => 'Invalid URL protocol \'%3:\' for attribute \'%1\' in tag \'%2\'.'],
            40 => ['code' => 'DISALLOWED_DOMAIN', 'format' => 'The domain \'%3\' for attribute \'%1\' in tag \'%2\' is disallowed.'],
            41 => [
                    'code' => 'DISALLOWED_RELATIVE_URL',
                    'format' => 'The relative URL \'%3\' for attribute \'%1\' in tag \'%2\' is disallowed.',
                ],
            42 => [
                    'code' => 'MANDATORY_PROPERTY_MISSING_FROM_ATTR_VALUE',
                    'format' => 'The property \'%1\' is missing from attribute \'%2\' in tag \'%3\'.',
                ],
            43 => [
                    'code' => 'UNESCAPED_TEMPLATE_IN_ATTR_VALUE',
                    'format' => 'The attribute \'%1\' in tag \'%2\' is set to \'%3\', which contains unescaped Mustache template syntax.',
                ],
            44 => [
                    'code' => 'TEMPLATE_PARTIAL_IN_ATTR_VALUE',
                    'format' => 'The attribute \'%1\' in tag \'%2\' is set to \'%3\', which contains a Mustache template partial.',
                ],
            45 => ['code' => 'DEPRECATED_TAG', 'format' => 'The tag \'%1\' is deprecated - use \'%2\' instead.'],
            46 => ['code' => 'DEPRECATED_ATTR', 'format' => 'The attribute \'%1\' in tag \'%2\' is deprecated - use \'%3\' instead.'],
            47 => [
                    'code' => 'MUTUALLY_EXCLUSIVE_ATTRS',
                    'format' => 'Mutually exclusive attributes encountered in tag \'%1\' - pick one of %2.',
                ],
            48 => [
                    'code' => 'MANDATORY_ONEOF_ATTR_MISSING',
                    'format' => 'The tag \'%1\' is missing a mandatory attribute - pick one of %2.',
                ],
            49 => [
                    'code' => 'MANDATORY_ANYOF_ATTR_MISSING',
                    'format' => 'The tag \'%1\' is missing a mandatory attribute - pick at least one of %2.',
                ],
            50 => ['code' => 'WRONG_PARENT_TAG', 'format' => 'The parent tag of tag \'%1\' is \'%2\', but it can only be \'%3\'.'],
            51 => ['code' => 'DISALLOWED_TAG_ANCESTOR', 'format' => 'The tag \'%1\' may not appear as a descendant of tag \'%2\'.'],
            52 => ['code' => 'MANDATORY_TAG_ANCESTOR', 'format' => 'The tag \'%1\' may only appear as a descendant of tag \'%2\'.'],
            53 => [
                    'code' => 'MANDATORY_TAG_ANCESTOR_WITH_HINT',
                    'format' => 'The tag \'%1\' may only appear as a descendant of tag \'%2\'. Did you mean \'%3\'?',
                ],
            54 => ['code' => 'DUPLICATE_UNIQUE_TAG', 'format' => 'The tag \'%1\' appears more than once in the document.'],
            55 => [
                    'code' => 'DUPLICATE_UNIQUE_TAG_WARNING',
                    'format' => 'The tag \'%1\' appears more than once in the document. This will soon be an error.',
                ],
            56 => ['code' => 'TEMPLATE_IN_ATTR_NAME', 'format' => 'Mustache template syntax in attribute name \'%1\' in tag \'%2\'.'],
            57 => [
                    'code' => 'ATTR_DISALLOWED_BY_IMPLIED_LAYOUT',
                    'format' => 'The attribute \'%1\' in tag \'%2\' is disallowed by implied layout \'%3\'.',
                ],
            58 => [
                    'code' => 'ATTR_DISALLOWED_BY_SPECIFIED_LAYOUT',
                    'format' => 'The attribute \'%1\' in tag \'%2\' is disallowed by specified layout \'%3\'.',
                ],
            59 => ['code' => 'INCORRECT_NUM_CHILD_TAGS', 'format' => 'Tag \'%1\' must have %2 child tags - saw %3 child tags.'],
            60 => [
                    'code' => 'INCORRECT_MIN_NUM_CHILD_TAGS',
                    'format' => 'Tag \'%1\' must have a minimum of %2 child tags - saw %3 child tags.',
                ],
            61 => [
                    'code' => 'TAG_NOT_ALLOWED_TO_HAVE_SIBLINGS',
                    'format' => 'Tag \'%1\' is not allowed to have any sibling tags (\'%2\' should only have 1 child).',
                ],
            62 => ['code' => 'MANDATORY_LAST_CHILD_TAG', 'format' => 'Tag \'%1\', if present, must be the last child of tag \'%2\'.'],
            63 => [
                    'code' => 'DISALLOWED_CHILD_TAG_NAME',
                    'format' => 'Tag \'%1\' is disallowed as child of tag \'%2\'. Child tag must be one of %3.',
                ],
            64 => [
                    'code' => 'DISALLOWED_FIRST_CHILD_TAG_NAME',
                    'format' => 'Tag \'%1\' is disallowed as first child of tag \'%2\'. First child tag must be one of %3.',
                ],
            65 => [
                    'code' => 'DISALLOWED_MANUFACTURED_BODY',
                    'format' => 'Tag or text which is only allowed inside the body section found outside of the body section.',
                ],
            66 => [
                    'code' => 'CHILD_TAG_DOES_NOT_SATISFY_REFERENCE_POINT',
                    'format' => 'The tag \'%1\', a child tag of \'%2\', does not satisfy one of the acceptable reference points: %3.',
                ],
            67 => [
                    'code' => 'CHILD_TAG_DOES_NOT_SATISFY_REFERENCE_POINT_SINGULAR',
                    'format' => 'The tag \'%1\', a child tag of \'%2\', does not satisfy the reference point \'%3\'.',
                ],
            68 => [
                    'code' => 'MANDATORY_REFERENCE_POINT_MISSING',
                    'format' => 'The mandatory reference point \'%1\' for \'%2\' is missing.',
                ],
            69 => [
                    'code' => 'DUPLICATE_REFERENCE_POINT',
                    'format' => 'The reference point \'%1\' for \'%2\' must be unique but a duplicate was encountered.',
                ],
            70 => [
                    'code' => 'TAG_REFERENCE_POINT_CONFLICT',
                    'format' => 'The tag \'%1\' conflicts with reference point \'%2\' because both define reference points.',
                ],
            71 => [
                    'code' => 'BASE_TAG_MUST_PRECEED_ALL_URLS',
                    'format' => 'The tag \'%1\', which contains URLs, was found earlier in the document than the BASE element.',
                ],
            72 => [
                    'code' => 'MISSING_REQUIRED_EXTENSION',
                    'format' => 'The tag \'%1\' requires including the \'%2\' extension JavaScript.',
                ],
            73 => [
                    'code' => 'ATTR_MISSING_REQUIRED_EXTENSION',
                    'format' => 'The attribute \'%1\' requires including the \'%2\' extension JavaScript.',
                ],
            74 => ['code' => 'DOCUMENT_TOO_COMPLEX', 'format' => 'The document is too complex.'],
            75 => ['code' => 'INVALID_UTF8', 'format' => 'The document contains invalid UTF8.'],
            76 => ['code' => 'CSS_SYNTAX_INVALID_AT_RULE', 'format' => 'CSS syntax error in tag \'%1\' - saw invalid at rule \'@%2\'.'],
            77 => [
                    'code' => 'CSS_SYNTAX_STRAY_TRAILING_BACKSLASH',
                    'format' => 'CSS syntax error in tag \'%1\' - stray trailing backslash.',
                ],
            78 => ['code' => 'CSS_SYNTAX_UNTERMINATED_COMMENT', 'format' => 'CSS syntax error in tag \'%1\' - unterminated comment.'],
            79 => ['code' => 'CSS_SYNTAX_UNTERMINATED_STRING', 'format' => 'CSS syntax error in tag \'%1\' - unterminated string.'],
            80 => ['code' => 'CSS_SYNTAX_BAD_URL', 'format' => 'CSS syntax error in tag \'%1\' - bad url.'],
            81 => [
                    'code' => 'CSS_SYNTAX_EOF_IN_PRELUDE_OF_QUALIFIED_RULE',
                    'format' => 'CSS syntax error in tag \'%1\' - end of stylesheet encountered in prelude of a qualified rule.',
                ],
            82 => [
                    'code' => 'CSS_SYNTAX_INVALID_PROPERTY',
                    'format' => 'CSS syntax error in tag \'%1\' - invalid property \'%2\'. The only allowed properties are \'%3\'.',
                ],
            83 => [
                    'code' => 'CSS_SYNTAX_INVALID_PROPERTY_NOLIST',
                    'format' => 'CSS syntax error in tag \'%1\' - invalid property \'%2\'.',
                ],
            84 => [
                    'code' => 'CSS_SYNTAX_QUALIFIED_RULE_HAS_NO_DECLARATIONS',
                    'format' => 'CSS syntax error in tag \'%1\' - qualified rule \'%2\' has no declarations.',
                ],
            85 => [
                    'code' => 'CSS_SYNTAX_DISALLOWED_QUALIFIED_RULE_MUST_BE_INSIDE_KEYFRAME',
                    'format' => 'CSS syntax error in tag \'%1\' - qualified rule \'%2\' must be located inside of a keyframe.',
                ],
            86 => [
                    'code' => 'CSS_SYNTAX_DISALLOWED_KEYFRAME_INSIDE_KEYFRAME',
                    'format' => 'CSS syntax error in tag \'%1\' - keyframe inside keyframe is not allowed.',
                ],
            87 => ['code' => 'CSS_SYNTAX_INVALID_DECLARATION', 'format' => 'CSS syntax error in tag \'%1\' - invalid declaration.'],
            88 => ['code' => 'CSS_SYNTAX_INCOMPLETE_DECLARATION', 'format' => 'CSS syntax error in tag \'%1\' - incomplete declaration.'],
            89 => [
                    'code' => 'CSS_SYNTAX_ERROR_IN_PSEUDO_SELECTOR',
                    'format' => 'CSS syntax error in tag \'%1\' - invalid pseudo selector.',
                ],
            90 => ['code' => 'CSS_SYNTAX_MISSING_SELECTOR', 'format' => 'CSS syntax error in tag \'%1\' - missing selector.'],
            91 => ['code' => 'CSS_SYNTAX_NOT_A_SELECTOR_START', 'format' => 'CSS syntax error in tag \'%1\' - not a selector start.'],
            92 => [
                    'code' => 'CSS_SYNTAX_UNPARSED_INPUT_REMAINS_IN_SELECTOR',
                    'format' => 'CSS syntax error in tag \'%1\' - unparsed input remains in selector.',
                ],
            93 => ['code' => 'CSS_SYNTAX_MISSING_URL', 'format' => 'CSS syntax error in tag \'%1\' - missing url.'],
            94 => ['code' => 'CSS_SYNTAX_INVALID_URL', 'format' => 'CSS syntax error in tag \'%1\' - invalid url \'%2\'.'],
            95 => [
                    'code' => 'CSS_SYNTAX_INVALID_URL_PROTOCOL',
                    'format' => 'CSS syntax error in tag \'%1\' - invalid url protocol \'%2:\'.',
                ],
            96 => ['code' => 'CSS_SYNTAX_DISALLOWED_DOMAIN', 'format' => 'CSS syntax error in tag \'%1\' - invalid domain \'%2\'.'],
            97 => [
                    'code' => 'CSS_SYNTAX_DISALLOWED_RELATIVE_URL',
                    'format' => 'CSS syntax error in tag \'%1\' - disallowed relative url \'%2\'.',
                ],
            98 => [
                    'code' => 'CSS_SYNTAX_INVALID_ATTR_SELECTOR',
                    'format' => 'CSS syntax error in tag \'%1\' - invalid attribute selector.',
                ],
            99 => [
                    'code' => 'CSS_SYNTAX_DISALLOWED_PROPERTY_VALUE',
                    'format' => 'CSS syntax error in tag \'%1\' - the property \'%2\' is set to the disallowed value \'%3\'.',
                ],
            100 => [
                    'code' => 'CSS_SYNTAX_DISALLOWED_PROPERTY_VALUE_WITH_HINT',
                    'format' => 'CSS syntax error in tag \'%1\' - the property \'%2\' is set to the disallowed value \'%3\'. Allowed values: %4.',
                ],
            101 => ['code' => 'CSS_SYNTAX_DISALLOWED_IMPORTANT', 'format' => 'Usage of the !important CSS qualifier is not allowed.'],
            102 => [
                    'code' => 'CSS_SYNTAX_PROPERTY_DISALLOWED_WITHIN_AT_RULE',
                    'format' => 'CSS syntax error in tag \'%1\' - the property \'%2\' is disallowed within @%3. Allowed properties: %4.',
                ],
            103 => [
                    'code' => 'CSS_SYNTAX_PROPERTY_DISALLOWED_TOGETHER_WITH',
                    'format' => 'CSS syntax error in tag \'%1\' - the property \'%2\' is disallowed together with \'%3\'. Allowed properties: %4.',
                ],
            104 => [
                    'code' => 'CSS_SYNTAX_PROPERTY_REQUIRES_QUALIFICATION',
                    'format' => 'CSS syntax error in tag \'%1\' - the property \'%2\' is disallowed unless the enclosing rule is prefixed with the \'%3\' qualification.',
                ],
            105 => ['code' => 'CSS_SYNTAX_MALFORMED_MEDIA_QUERY', 'format' => 'CSS syntax error in tag \'%1\' - malformed media query.'],
            106 => [
                    'code' => 'CSS_SYNTAX_DISALLOWED_MEDIA_TYPE',
                    'format' => 'CSS syntax error in tag \'%1\' - disallowed media type \'%2\'.',
                ],
            107 => [
                    'code' => 'CSS_SYNTAX_DISALLOWED_MEDIA_FEATURE',
                    'format' => 'CSS syntax error in tag \'%1\' - disallowed media feature \'%2\'.',
                ],
            108 => [
                    'code' => 'CSS_SYNTAX_DISALLOWED_ATTR_SELECTOR',
                    'format' => 'CSS error in tag \'%1\' - disallowed attribute selector \'%2\'.',
                ],
            109 => [
                    'code' => 'CSS_SYNTAX_DISALLOWED_PSEUDO_CLASS',
                    'format' => 'CSS error in tag \'%1\' - disallowed pseudo class \'%2\'.',
                ],
            110 => [
                    'code' => 'CSS_SYNTAX_DISALLOWED_PSEUDO_ELEMENT',
                    'format' => 'CSS error in tag \'%1\' - disallowed pseudo element \'%2\'.',
                ],
            111 => ['code' => 'CSS_EXCESSIVELY_NESTED', 'format' => 'CSS excessively nested in tag \'%1\'.'],
            112 => ['code' => 'DOCUMENT_SIZE_LIMIT_EXCEEDED', 'format' => 'Document exceeded %1 bytes limit. Actual size %2 bytes.'],
            113 => [
                    'code' => 'VALUE_SET_MISMATCH',
                    'format' => 'Attribute \'%1\' in tag \'%2\' contains a value that does not match any other tags on the page.',
                ],
            114 => [
                    'code' => 'DEV_MODE_ONLY',
                    'format' => 'Tag \'html\' marked with attribute \'data-ampdevmode\'. Validator will suppress errors regarding any other tag with this attribute.',
                ],
        ];
    }
}
