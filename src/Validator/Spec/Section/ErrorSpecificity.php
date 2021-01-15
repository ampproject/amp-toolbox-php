<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Section;

final class ErrorSpecificity
{
    /** @var array */
    public $errorSpecificity;

    public function __construct()
    {
        $this->errorSpecificity = [
            [
                'code' => 'UNKNOWN_CODE',
                'specificity' => 0,
            ],
            [
                'code' => 'MANDATORY_CDATA_MISSING_OR_INCORRECT',
                'specificity' => 1,
            ],
            [
                'code' => 'CDATA_VIOLATES_DENYLIST',
                'specificity' => 2,
            ],
            [
                'code' => 'NON_WHITESPACE_CDATA_ENCOUNTERED',
                'specificity' => 3,
            ],
            [
                'code' => 'INVALID_JSON_CDATA',
                'specificity' => 4,
            ],
            [
                'code' => 'DISALLOWED_TAG_ANCESTOR',
                'specificity' => 5,
            ],
            [
                'code' => 'MANDATORY_TAG_ANCESTOR',
                'specificity' => 6,
            ],
            [
                'code' => 'MANDATORY_TAG_ANCESTOR_WITH_HINT',
                'specificity' => 7,
            ],
            [
                'code' => 'MANDATORY_TAG_MISSING',
                'specificity' => 8,
            ],
            [
                'code' => 'WRONG_PARENT_TAG',
                'specificity' => 9,
            ],
            [
                'code' => 'TAG_REQUIRED_BY_MISSING',
                'specificity' => 10,
            ],
            [
                'code' => 'TAG_EXCLUDED_BY_TAG',
                'specificity' => 11,
            ],
            [
                'code' => 'MISSING_REQUIRED_EXTENSION',
                'specificity' => 12,
            ],
            [
                'code' => 'ATTR_MISSING_REQUIRED_EXTENSION',
                'specificity' => 13,
            ],
            [
                'code' => 'WARNING_TAG_REQUIRED_BY_MISSING',
                'specificity' => 14,
            ],
            [
                'code' => 'EXTENSION_UNUSED',
                'specificity' => 15,
            ],
            [
                'code' => 'WARNING_EXTENSION_UNUSED',
                'specificity' => 16,
            ],
            [
                'code' => 'WARNING_EXTENSION_DEPRECATED_VERSION',
                'specificity' => 17,
            ],
            [
                'code' => 'NON_LTS_SCRIPT_AFTER_LTS',
                'specificity' => 18,
            ],
            [
                'code' => 'LTS_SCRIPT_AFTER_NON_LTS',
                'specificity' => 19,
            ],
            [
                'code' => 'INCORRECT_SCRIPT_RELEASE_VERSION',
                'specificity' => 20,
            ],
            [
                'code' => 'DISALLOWED_TAG',
                'specificity' => 21,
            ],
            [
                'code' => 'DISALLOWED_ATTR',
                'specificity' => 22,
            ],
            [
                'code' => 'INVALID_ATTR_VALUE',
                'specificity' => 23,
            ],
            [
                'code' => 'DUPLICATE_ATTRIBUTE',
                'specificity' => 24,
            ],
            [
                'code' => 'ATTR_VALUE_REQUIRED_BY_LAYOUT',
                'specificity' => 25,
            ],
            [
                'code' => 'MANDATORY_ATTR_MISSING',
                'specificity' => 26,
            ],
            [
                'code' => 'MANDATORY_ONEOF_ATTR_MISSING',
                'specificity' => 27,
            ],
            [
                'code' => 'MANDATORY_ANYOF_ATTR_MISSING',
                'specificity' => 28,
            ],
            [
                'code' => 'ATTR_REQUIRED_BUT_MISSING',
                'specificity' => 29,
            ],
            [
                'code' => 'DUPLICATE_UNIQUE_TAG',
                'specificity' => 30,
            ],
            [
                'code' => 'DUPLICATE_UNIQUE_TAG_WARNING',
                'specificity' => 31,
            ],
            [
                'code' => 'STYLESHEET_TOO_LONG',
                'specificity' => 32,
            ],
            [
                'code' => 'STYLESHEET_AND_INLINE_STYLE_TOO_LONG',
                'specificity' => 33,
            ],
            [
                'code' => 'INLINE_STYLE_TOO_LONG',
                'specificity' => 34,
            ],
            [
                'code' => 'INLINE_SCRIPT_TOO_LONG',
                'specificity' => 35,
            ],
            [
                'code' => 'CSS_SYNTAX_INVALID_AT_RULE',
                'specificity' => 36,
            ],
            [
                'code' => 'MANDATORY_PROPERTY_MISSING_FROM_ATTR_VALUE',
                'specificity' => 37,
            ],
            [
                'code' => 'INVALID_PROPERTY_VALUE_IN_ATTR_VALUE',
                'specificity' => 38,
            ],
            [
                'code' => 'DISALLOWED_PROPERTY_IN_ATTR_VALUE',
                'specificity' => 39,
            ],
            [
                'code' => 'MUTUALLY_EXCLUSIVE_ATTRS',
                'specificity' => 40,
            ],
            [
                'code' => 'UNESCAPED_TEMPLATE_IN_ATTR_VALUE',
                'specificity' => 41,
            ],
            [
                'code' => 'TEMPLATE_PARTIAL_IN_ATTR_VALUE',
                'specificity' => 42,
            ],
            [
                'code' => 'TEMPLATE_IN_ATTR_NAME',
                'specificity' => 43,
            ],
            [
                'code' => 'INCONSISTENT_UNITS_FOR_WIDTH_AND_HEIGHT',
                'specificity' => 44,
            ],
            [
                'code' => 'MISSING_LAYOUT_ATTRIBUTES',
                'specificity' => 45,
            ],
            [
                'code' => 'IMPLIED_LAYOUT_INVALID',
                'specificity' => 46,
            ],
            [
                'code' => 'SPECIFIED_LAYOUT_INVALID',
                'specificity' => 47,
            ],
            [
                'code' => 'ATTR_DISALLOWED_BY_IMPLIED_LAYOUT',
                'specificity' => 48,
            ],
            [
                'code' => 'ATTR_DISALLOWED_BY_SPECIFIED_LAYOUT',
                'specificity' => 49,
            ],
            [
                'code' => 'DUPLICATE_DIMENSION',
                'specificity' => 50,
            ],
            [
                'code' => 'DISALLOWED_RELATIVE_URL',
                'specificity' => 51,
            ],
            [
                'code' => 'MISSING_URL',
                'specificity' => 52,
            ],
            [
                'code' => 'DISALLOWED_DOMAIN',
                'specificity' => 53,
            ],
            [
                'code' => 'INVALID_URL_PROTOCOL',
                'specificity' => 54,
            ],
            [
                'code' => 'INVALID_URL',
                'specificity' => 55,
            ],
            [
                'code' => 'DISALLOWED_STYLE_ATTR',
                'specificity' => 56,
            ],
            [
                'code' => 'CSS_SYNTAX_STRAY_TRAILING_BACKSLASH',
                'specificity' => 57,
            ],
            [
                'code' => 'CSS_SYNTAX_UNTERMINATED_COMMENT',
                'specificity' => 58,
            ],
            [
                'code' => 'CSS_SYNTAX_UNTERMINATED_STRING',
                'specificity' => 59,
            ],
            [
                'code' => 'CSS_SYNTAX_BAD_URL',
                'specificity' => 60,
            ],
            [
                'code' => 'CSS_SYNTAX_EOF_IN_PRELUDE_OF_QUALIFIED_RULE',
                'specificity' => 61,
            ],
            [
                'code' => 'CSS_SYNTAX_INVALID_DECLARATION',
                'specificity' => 62,
            ],
            [
                'code' => 'CSS_SYNTAX_INCOMPLETE_DECLARATION',
                'specificity' => 63,
            ],
            [
                'code' => 'CSS_SYNTAX_ERROR_IN_PSEUDO_SELECTOR',
                'specificity' => 64,
            ],
            [
                'code' => 'CSS_SYNTAX_MISSING_SELECTOR',
                'specificity' => 65,
            ],
            [
                'code' => 'CSS_SYNTAX_NOT_A_SELECTOR_START',
                'specificity' => 66,
            ],
            [
                'code' => 'CSS_SYNTAX_UNPARSED_INPUT_REMAINS_IN_SELECTOR',
                'specificity' => 67,
            ],
            [
                'code' => 'CSS_SYNTAX_MISSING_URL',
                'specificity' => 68,
            ],
            [
                'code' => 'CSS_SYNTAX_DISALLOWED_DOMAIN',
                'specificity' => 69,
            ],
            [
                'code' => 'CSS_SYNTAX_INVALID_URL',
                'specificity' => 70,
            ],
            [
                'code' => 'CSS_SYNTAX_INVALID_URL_PROTOCOL',
                'specificity' => 71,
            ],
            [
                'code' => 'CSS_SYNTAX_DISALLOWED_RELATIVE_URL',
                'specificity' => 72,
            ],
            [
                'code' => 'INCORRECT_NUM_CHILD_TAGS',
                'specificity' => 73,
            ],
            [
                'code' => 'DISALLOWED_CHILD_TAG_NAME',
                'specificity' => 74,
            ],
            [
                'code' => 'DISALLOWED_FIRST_CHILD_TAG_NAME',
                'specificity' => 75,
            ],
            [
                'code' => 'CSS_SYNTAX_INVALID_ATTR_SELECTOR',
                'specificity' => 76,
            ],
            [
                'code' => 'CHILD_TAG_DOES_NOT_SATISFY_REFERENCE_POINT',
                'specificity' => 77,
            ],
            [
                'code' => 'MANDATORY_REFERENCE_POINT_MISSING',
                'specificity' => 78,
            ],
            [
                'code' => 'DUPLICATE_REFERENCE_POINT',
                'specificity' => 79,
            ],
            [
                'code' => 'TAG_REFERENCE_POINT_CONFLICT',
                'specificity' => 80,
            ],
            [
                'code' => 'CHILD_TAG_DOES_NOT_SATISFY_REFERENCE_POINT_SINGULAR',
                'specificity' => 81,
            ],
            [
                'code' => 'CSS_SYNTAX_DISALLOWED_PROPERTY_VALUE',
                'specificity' => 82,
            ],
            [
                'code' => 'CSS_SYNTAX_DISALLOWED_PROPERTY_VALUE_WITH_HINT',
                'specificity' => 83,
            ],
            [
                'code' => 'CSS_SYNTAX_PROPERTY_DISALLOWED_WITHIN_AT_RULE',
                'specificity' => 84,
            ],
            [
                'code' => 'CSS_SYNTAX_PROPERTY_DISALLOWED_TOGETHER_WITH',
                'specificity' => 85,
            ],
            [
                'code' => 'CSS_SYNTAX_PROPERTY_REQUIRES_QUALIFICATION',
                'specificity' => 86,
            ],
            [
                'code' => 'BASE_TAG_MUST_PRECEED_ALL_URLS',
                'specificity' => 87,
            ],
            [
                'code' => 'DISALLOWED_SCRIPT_TAG',
                'specificity' => 102,
            ],
            [
                'code' => 'GENERAL_DISALLOWED_TAG',
                'specificity' => 103,
            ],
            [
                'code' => 'DEPRECATED_ATTR',
                'specificity' => 104,
            ],
            [
                'code' => 'DEPRECATED_TAG',
                'specificity' => 105,
            ],
            [
                'code' => 'DISALLOWED_MANUFACTURED_BODY',
                'specificity' => 106,
            ],
            [
                'code' => 'DOCUMENT_TOO_COMPLEX',
                'specificity' => 107,
            ],
            [
                'code' => 'INCORRECT_MIN_NUM_CHILD_TAGS',
                'specificity' => 108,
            ],
            [
                'code' => 'TAG_NOT_ALLOWED_TO_HAVE_SIBLINGS',
                'specificity' => 109,
            ],
            [
                'code' => 'MANDATORY_LAST_CHILD_TAG',
                'specificity' => 110,
            ],
            [
                'code' => 'CSS_SYNTAX_INVALID_PROPERTY',
                'specificity' => 111,
            ],
            [
                'code' => 'CSS_SYNTAX_INVALID_PROPERTY_NOLIST',
                'specificity' => 112,
            ],
            [
                'code' => 'CSS_SYNTAX_QUALIFIED_RULE_HAS_NO_DECLARATIONS',
                'specificity' => 113,
            ],
            [
                'code' => 'CSS_SYNTAX_DISALLOWED_QUALIFIED_RULE_MUST_BE_INSIDE_KEYFRAME',
                'specificity' => 114,
            ],
            [
                'code' => 'CSS_SYNTAX_DISALLOWED_KEYFRAME_INSIDE_KEYFRAME',
                'specificity' => 115,
            ],
            [
                'code' => 'CSS_SYNTAX_MALFORMED_MEDIA_QUERY',
                'specificity' => 117,
            ],
            [
                'code' => 'CSS_SYNTAX_DISALLOWED_MEDIA_TYPE',
                'specificity' => 118,
            ],
            [
                'code' => 'CSS_SYNTAX_DISALLOWED_MEDIA_FEATURE',
                'specificity' => 119,
            ],
            [
                'code' => 'CSS_SYNTAX_DISALLOWED_ATTR_SELECTOR',
                'specificity' => 120,
            ],
            [
                'code' => 'CSS_SYNTAX_DISALLOWED_PSEUDO_CLASS',
                'specificity' => 121,
            ],
            [
                'code' => 'CSS_SYNTAX_DISALLOWED_PSEUDO_ELEMENT',
                'specificity' => 122,
            ],
            [
                'code' => 'CSS_SYNTAX_DISALLOWED_IMPORTANT',
                'specificity' => 123,
            ],
            [
                'code' => 'INVALID_UTF8',
                'specificity' => 124,
            ],
            [
                'code' => 'CSS_EXCESSIVELY_NESTED',
                'specificity' => 125,
            ],
            [
                'code' => 'DOCUMENT_SIZE_LIMIT_EXCEEDED',
                'specificity' => 126,
            ],
            [
                'code' => 'VALUE_SET_MISMATCH',
                'specificity' => 127,
            ],
            [
                'code' => 'INVALID_DOCTYPE_HTML',
                'specificity' => 128,
            ],
            [
                'code' => 'DEV_MODE_ONLY',
                'specificity' => 1000,
            ],
        ];
    }
}
