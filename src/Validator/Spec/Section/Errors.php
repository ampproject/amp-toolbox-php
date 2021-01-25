<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Section;

use AmpProject\Validator\ErrorCode;

final class Errors
{
    /** @var array */
    public $errors;

    public function __construct()
    {
        $this->errors = [
            ErrorCode::ATTR_DISALLOWED_BY_IMPLIED_LAYOUT => [
                'format' => 'The attribute \'%1\' in tag \'%2\' is disallowed by implied layout \'%3\'.',
                'specificity' => 48,
            ]
            ErrorCode::ATTR_DISALLOWED_BY_SPECIFIED_LAYOUT => [
                'format' => 'The attribute \'%1\' in tag \'%2\' is disallowed by specified layout \'%3\'.',
                'specificity' => 49,
            ]
            ErrorCode::ATTR_MISSING_REQUIRED_EXTENSION => [
                'format' => 'The attribute \'%1\' requires including the \'%2\' extension JavaScript.',
                'specificity' => 13,
            ]
            ErrorCode::ATTR_REQUIRED_BUT_MISSING => [
                'format' => 'The attribute \'%1\' in tag \'%2\' is missing or incorrect, but required by attribute \'%3\'.',
                'specificity' => 29,
            ]
            ErrorCode::ATTR_VALUE_REQUIRED_BY_LAYOUT => [
                'format' => 'Invalid value \'%1\' for attribute \'%2\' in tag \'%3\' - for layout \'%4\', set the attribute \'%2\' to value \'%5\'.',
                'specificity' => 25,
            ]
            ErrorCode::BASE_TAG_MUST_PRECEED_ALL_URLS => [
                'format' => 'The tag \'%1\', which contains URLs, was found earlier in the document than the BASE element.',
                'specificity' => 87,
            ]
            ErrorCode::CDATA_VIOLATES_DENYLIST => [
                'format' => 'The text inside tag \'%1\' contains \'%2\', which is disallowed.',
                'specificity' => 2,
            ]
            ErrorCode::CHILD_TAG_DOES_NOT_SATISFY_REFERENCE_POINT => [
                'format' => 'The tag \'%1\', a child tag of \'%2\', does not satisfy one of the acceptable reference points: %3.',
                'specificity' => 77,
            ]
            ErrorCode::CHILD_TAG_DOES_NOT_SATISFY_REFERENCE_POINT_SINGULAR => [
                'format' => 'The tag \'%1\', a child tag of \'%2\', does not satisfy the reference point \'%3\'.',
                'specificity' => 81,
            ]
            ErrorCode::CSS_EXCESSIVELY_NESTED => [
                'format' => 'CSS excessively nested in tag \'%1\'.',
                'specificity' => 125,
            ]
            ErrorCode::CSS_SYNTAX_BAD_URL => [
                'format' => 'CSS syntax error in tag \'%1\' - bad url.',
                'specificity' => 60,
            ]
            ErrorCode::CSS_SYNTAX_DISALLOWED_ATTR_SELECTOR => [
                'format' => 'CSS error in tag \'%1\' - disallowed attribute selector \'%2\'.',
                'specificity' => 120,
            ]
            ErrorCode::CSS_SYNTAX_DISALLOWED_DOMAIN => [
                'format' => 'CSS syntax error in tag \'%1\' - invalid domain \'%2\'.',
                'specificity' => 69,
            ]
            ErrorCode::CSS_SYNTAX_DISALLOWED_IMPORTANT => [
                'format' => 'Usage of the !important CSS qualifier is not allowed.',
                'specificity' => 123,
            ]
            ErrorCode::CSS_SYNTAX_DISALLOWED_KEYFRAME_INSIDE_KEYFRAME => [
                'format' => 'CSS syntax error in tag \'%1\' - keyframe inside keyframe is not allowed.',
                'specificity' => 115,
            ]
            ErrorCode::CSS_SYNTAX_DISALLOWED_MEDIA_FEATURE => [
                'format' => 'CSS syntax error in tag \'%1\' - disallowed media feature \'%2\'.',
                'specificity' => 119,
            ]
            ErrorCode::CSS_SYNTAX_DISALLOWED_MEDIA_TYPE => [
                'format' => 'CSS syntax error in tag \'%1\' - disallowed media type \'%2\'.',
                'specificity' => 118,
            ]
            ErrorCode::CSS_SYNTAX_DISALLOWED_PROPERTY_VALUE => [
                'format' => 'CSS syntax error in tag \'%1\' - the property \'%2\' is set to the disallowed value \'%3\'.',
                'specificity' => 82,
            ]
            ErrorCode::CSS_SYNTAX_DISALLOWED_PROPERTY_VALUE_WITH_HINT => [
                'format' => 'CSS syntax error in tag \'%1\' - the property \'%2\' is set to the disallowed value \'%3\'. Allowed values: %4.',
                'specificity' => 83,
            ]
            ErrorCode::CSS_SYNTAX_DISALLOWED_PSEUDO_CLASS => [
                'format' => 'CSS error in tag \'%1\' - disallowed pseudo class \'%2\'.',
                'specificity' => 121,
            ]
            ErrorCode::CSS_SYNTAX_DISALLOWED_PSEUDO_ELEMENT => [
                'format' => 'CSS error in tag \'%1\' - disallowed pseudo element \'%2\'.',
                'specificity' => 122,
            ]
            ErrorCode::CSS_SYNTAX_DISALLOWED_QUALIFIED_RULE_MUST_BE_INSIDE_KEYFRAME => [
                'format' => 'CSS syntax error in tag \'%1\' - qualified rule \'%2\' must be located inside of a keyframe.',
                'specificity' => 114,
            ]
            ErrorCode::CSS_SYNTAX_DISALLOWED_RELATIVE_URL => [
                'format' => 'CSS syntax error in tag \'%1\' - disallowed relative url \'%2\'.',
                'specificity' => 72,
            ]
            ErrorCode::CSS_SYNTAX_EOF_IN_PRELUDE_OF_QUALIFIED_RULE => [
                'format' => 'CSS syntax error in tag \'%1\' - end of stylesheet encountered in prelude of a qualified rule.',
                'specificity' => 61,
            ]
            ErrorCode::CSS_SYNTAX_ERROR_IN_PSEUDO_SELECTOR => [
                'format' => 'CSS syntax error in tag \'%1\' - invalid pseudo selector.',
                'specificity' => 64,
            ]
            ErrorCode::CSS_SYNTAX_INCOMPLETE_DECLARATION => [
                'format' => 'CSS syntax error in tag \'%1\' - incomplete declaration.',
                'specificity' => 63,
            ]
            ErrorCode::CSS_SYNTAX_INVALID_ATTR_SELECTOR => [
                'format' => 'CSS syntax error in tag \'%1\' - invalid attribute selector.',
                'specificity' => 76,
            ]
            ErrorCode::CSS_SYNTAX_INVALID_AT_RULE => [
                'format' => 'CSS syntax error in tag \'%1\' - saw invalid at rule \'@%2\'.',
                'specificity' => 36,
            ]
            ErrorCode::CSS_SYNTAX_INVALID_DECLARATION => [
                'format' => 'CSS syntax error in tag \'%1\' - invalid declaration.',
                'specificity' => 62,
            ]
            ErrorCode::CSS_SYNTAX_INVALID_PROPERTY => [
                'format' => 'CSS syntax error in tag \'%1\' - invalid property \'%2\'. The only allowed properties are \'%3\'.',
                'specificity' => 111,
            ]
            ErrorCode::CSS_SYNTAX_INVALID_PROPERTY_NOLIST => [
                'format' => 'CSS syntax error in tag \'%1\' - invalid property \'%2\'.',
                'specificity' => 112,
            ]
            ErrorCode::CSS_SYNTAX_INVALID_URL => [
                'format' => 'CSS syntax error in tag \'%1\' - invalid url \'%2\'.',
                'specificity' => 70,
            ]
            ErrorCode::CSS_SYNTAX_INVALID_URL_PROTOCOL => [
                'format' => 'CSS syntax error in tag \'%1\' - invalid url protocol \'%2:\'.',
                'specificity' => 71,
            ]
            ErrorCode::CSS_SYNTAX_MALFORMED_MEDIA_QUERY => [
                'format' => 'CSS syntax error in tag \'%1\' - malformed media query.',
                'specificity' => 117,
            ]
            ErrorCode::CSS_SYNTAX_MISSING_SELECTOR => [
                'format' => 'CSS syntax error in tag \'%1\' - missing selector.',
                'specificity' => 65,
            ]
            ErrorCode::CSS_SYNTAX_MISSING_URL => [
                'format' => 'CSS syntax error in tag \'%1\' - missing url.',
                'specificity' => 68,
            ]
            ErrorCode::CSS_SYNTAX_NOT_A_SELECTOR_START => [
                'format' => 'CSS syntax error in tag \'%1\' - not a selector start.',
                'specificity' => 66,
            ]
            ErrorCode::CSS_SYNTAX_PROPERTY_DISALLOWED_TOGETHER_WITH => [
                'format' => 'CSS syntax error in tag \'%1\' - the property \'%2\' is disallowed together with \'%3\'. Allowed properties: %4.',
                'specificity' => 85,
            ]
            ErrorCode::CSS_SYNTAX_PROPERTY_DISALLOWED_WITHIN_AT_RULE => [
                'format' => 'CSS syntax error in tag \'%1\' - the property \'%2\' is disallowed within @%3. Allowed properties: %4.',
                'specificity' => 84,
            ]
            ErrorCode::CSS_SYNTAX_PROPERTY_REQUIRES_QUALIFICATION => [
                'format' => 'CSS syntax error in tag \'%1\' - the property \'%2\' is disallowed unless the enclosing rule is prefixed with the \'%3\' qualification.',
                'specificity' => 86,
            ]
            ErrorCode::CSS_SYNTAX_QUALIFIED_RULE_HAS_NO_DECLARATIONS => [
                'format' => 'CSS syntax error in tag \'%1\' - qualified rule \'%2\' has no declarations.',
                'specificity' => 113,
            ]
            ErrorCode::CSS_SYNTAX_STRAY_TRAILING_BACKSLASH => [
                'format' => 'CSS syntax error in tag \'%1\' - stray trailing backslash.',
                'specificity' => 57,
            ]
            ErrorCode::CSS_SYNTAX_UNPARSED_INPUT_REMAINS_IN_SELECTOR => [
                'format' => 'CSS syntax error in tag \'%1\' - unparsed input remains in selector.',
                'specificity' => 67,
            ]
            ErrorCode::CSS_SYNTAX_UNTERMINATED_COMMENT => [
                'format' => 'CSS syntax error in tag \'%1\' - unterminated comment.',
                'specificity' => 58,
            ]
            ErrorCode::CSS_SYNTAX_UNTERMINATED_STRING => [
                'format' => 'CSS syntax error in tag \'%1\' - unterminated string.',
                'specificity' => 59,
            ]
            ErrorCode::DEPRECATED_ATTR => [
                'format' => 'The attribute \'%1\' in tag \'%2\' is deprecated - use \'%3\' instead.',
                'specificity' => 104,
            ]
            ErrorCode::DEPRECATED_TAG => [
                'format' => 'The tag \'%1\' is deprecated - use \'%2\' instead.',
                'specificity' => 105,
            ]
            ErrorCode::DEV_MODE_ONLY => [
                'format' => 'Tag \'html\' marked with attribute \'data-ampdevmode\'. Validator will suppress errors regarding any other tag with this attribute.',
                'specificity' => 1000,
            ]
            ErrorCode::DISALLOWED_ATTR => [
                'format' => 'The attribute \'%1\' may not appear in tag \'%2\'.',
                'specificity' => 22,
            ]
            ErrorCode::DISALLOWED_CHILD_TAG_NAME => [
                'format' => 'Tag \'%1\' is disallowed as child of tag \'%2\'. Child tag must be one of %3.',
                'specificity' => 74,
            ]
            ErrorCode::DISALLOWED_DOMAIN => [
                'format' => 'The domain \'%3\' for attribute \'%1\' in tag \'%2\' is disallowed.',
                'specificity' => 53,
            ]
            ErrorCode::DISALLOWED_FIRST_CHILD_TAG_NAME => [
                'format' => 'Tag \'%1\' is disallowed as first child of tag \'%2\'. First child tag must be one of %3.',
                'specificity' => 75,
            ]
            ErrorCode::DISALLOWED_MANUFACTURED_BODY => [
                'format' => 'Tag or text which is only allowed inside the body section found outside of the body section.',
                'specificity' => 106,
            ]
            ErrorCode::DISALLOWED_PROPERTY_IN_ATTR_VALUE => [
                'format' => 'The property \'%1\' in attribute \'%2\' in tag \'%3\' is disallowed.',
                'specificity' => 39,
            ]
            ErrorCode::DISALLOWED_RELATIVE_URL => [
                'format' => 'The relative URL \'%3\' for attribute \'%1\' in tag \'%2\' is disallowed.',
                'specificity' => 51,
            ]
            ErrorCode::DISALLOWED_SCRIPT_TAG => [
                'format' => 'Custom JavaScript is not allowed.',
                'specificity' => 102,
            ]
            ErrorCode::DISALLOWED_STYLE_ATTR => [
                'format' => 'The inline \'style\' attribute is not allowed in AMP documents. Use \'style amp-custom\' tag instead.',
                'specificity' => 56,
            ]
            ErrorCode::DISALLOWED_TAG => [
                'format' => 'The tag \'%1\' is disallowed.',
                'specificity' => 21,
            ]
            ErrorCode::DISALLOWED_TAG_ANCESTOR => [
                'format' => 'The tag \'%1\' may not appear as a descendant of tag \'%2\'.',
                'specificity' => 5,
            ]
            ErrorCode::DOCUMENT_SIZE_LIMIT_EXCEEDED => [
                'format' => 'Document exceeded %1 bytes limit. Actual size %2 bytes.',
                'specificity' => 126,
            ]
            ErrorCode::DOCUMENT_TOO_COMPLEX => [
                'format' => 'The document is too complex.',
                'specificity' => 107,
            ]
            ErrorCode::DUPLICATE_ATTRIBUTE => [
                'format' => 'The tag \'%1\' contains the attribute \'%2\' repeated multiple times.',
                'specificity' => 24,
            ]
            ErrorCode::DUPLICATE_DIMENSION => [
                'format' => 'Multiple image candidates with the same width or pixel density found in attribute \'%1\' in tag \'%2\'.',
                'specificity' => 50,
            ]
            ErrorCode::DUPLICATE_REFERENCE_POINT => [
                'format' => 'The reference point \'%1\' for \'%2\' must be unique but a duplicate was encountered.',
                'specificity' => 79,
            ]
            ErrorCode::DUPLICATE_UNIQUE_TAG => [
                'format' => 'The tag \'%1\' appears more than once in the document.',
                'specificity' => 30,
            ]
            ErrorCode::DUPLICATE_UNIQUE_TAG_WARNING => [
                'format' => 'The tag \'%1\' appears more than once in the document. This will soon be an error.',
                'specificity' => 31,
            ]
            ErrorCode::EXTENSION_UNUSED => [
                'format' => 'The extension \'%1\' was found on this page, but is unused. Please remove this extension.',
                'specificity' => 15,
            ]
            ErrorCode::GENERAL_DISALLOWED_TAG => [
                'format' => 'The tag \'%1\' is disallowed except in specific forms.',
                'specificity' => 103,
            ]
            ErrorCode::IMPLIED_LAYOUT_INVALID => [
                'format' => 'The implied layout \'%1\' is not supported by tag \'%2\'.',
                'specificity' => 46,
            ]
            ErrorCode::INCONSISTENT_UNITS_FOR_WIDTH_AND_HEIGHT => [
                'format' => 'Inconsistent units for width and height in tag \'%1\' - width is specified in \'%2\' whereas height is specified in \'%3\'.',
                'specificity' => 44,
            ]
            ErrorCode::INCORRECT_MIN_NUM_CHILD_TAGS => [
                'format' => 'Tag \'%1\' must have a minimum of %2 child tags - saw %3 child tags.',
                'specificity' => 108,
            ]
            ErrorCode::INCORRECT_NUM_CHILD_TAGS => [
                'format' => 'Tag \'%1\' must have %2 child tags - saw %3 child tags.',
                'specificity' => 73,
            ]
            ErrorCode::INCORRECT_SCRIPT_RELEASE_VERSION => [
                'format' => 'The script version for \'%1\' is a %2 version which mismatches with the first script on the page using the %3 version.',
                'specificity' => 20,
            ]
            ErrorCode::INLINE_SCRIPT_TOO_LONG => [
                'format' => 'The inline script is %1 bytes, which exceeds the limit of %2 bytes.',
                'specificity' => 35,
            ]
            ErrorCode::INLINE_STYLE_TOO_LONG => [
                'format' => 'The inline style specified in tag \'%1\' is too long - it contains %2 bytes whereas the limit is %3 bytes.',
                'specificity' => 34,
            ]
            ErrorCode::INVALID_ATTR_VALUE => [
                'format' => 'The attribute \'%1\' in tag \'%2\' is set to the invalid value \'%3\'.',
                'specificity' => 23,
            ]
            ErrorCode::INVALID_DOCTYPE_HTML => [
                'format' => 'Invalid or missing doctype declaration. Should be \'!doctype html\'.',
                'specificity' => 128,
            ]
            ErrorCode::INVALID_JSON_CDATA => [
                'format' => 'The script tag contains invalid JSON that cannot be parsed.',
                'specificity' => 4,
            ]
            ErrorCode::INVALID_PROPERTY_VALUE_IN_ATTR_VALUE => [
                'format' => 'The property \'%1\' in attribute \'%2\' in tag \'%3\' is set to \'%4\', which is invalid.',
                'specificity' => 38,
            ]
            ErrorCode::INVALID_URL => [
                'format' => 'Malformed URL \'%3\' for attribute \'%1\' in tag \'%2\'.',
                'specificity' => 55,
            ]
            ErrorCode::INVALID_URL_PROTOCOL => [
                'format' => 'Invalid URL protocol \'%3:\' for attribute \'%1\' in tag \'%2\'.',
                'specificity' => 54,
            ]
            ErrorCode::INVALID_UTF8 => [
                'format' => 'The document contains invalid UTF8.',
                'specificity' => 124,
            ]
            ErrorCode::LTS_SCRIPT_AFTER_NON_LTS => [
                'format' => '\'%1\' must use the non-LTS version to correspond with the first script in the page, which does not use LTS.',
                'specificity' => 19,
            ]
            ErrorCode::MANDATORY_ANYOF_ATTR_MISSING => [
                'format' => 'The tag \'%1\' is missing a mandatory attribute - pick at least one of %2.',
                'specificity' => 28,
            ]
            ErrorCode::MANDATORY_ATTR_MISSING => [
                'format' => 'The mandatory attribute \'%1\' is missing in tag \'%2\'.',
                'specificity' => 26,
            ]
            ErrorCode::MANDATORY_CDATA_MISSING_OR_INCORRECT => [
                'format' => 'The mandatory text inside tag \'%1\' is missing or incorrect.',
                'specificity' => 1,
            ]
            ErrorCode::MANDATORY_LAST_CHILD_TAG => [
                'format' => 'Tag \'%1\', if present, must be the last child of tag \'%2\'.',
                'specificity' => 110,
            ]
            ErrorCode::MANDATORY_ONEOF_ATTR_MISSING => [
                'format' => 'The tag \'%1\' is missing a mandatory attribute - pick one of %2.',
                'specificity' => 27,
            ]
            ErrorCode::MANDATORY_PROPERTY_MISSING_FROM_ATTR_VALUE => [
                'format' => 'The property \'%1\' is missing from attribute \'%2\' in tag \'%3\'.',
                'specificity' => 37,
            ]
            ErrorCode::MANDATORY_REFERENCE_POINT_MISSING => [
                'format' => 'The mandatory reference point \'%1\' for \'%2\' is missing.',
                'specificity' => 78,
            ]
            ErrorCode::MANDATORY_TAG_ANCESTOR => [
                'format' => 'The tag \'%1\' may only appear as a descendant of tag \'%2\'.',
                'specificity' => 6,
            ]
            ErrorCode::MANDATORY_TAG_ANCESTOR_WITH_HINT => [
                'format' => 'The tag \'%1\' may only appear as a descendant of tag \'%2\'. Did you mean \'%3\'?',
                'specificity' => 7,
            ]
            ErrorCode::MANDATORY_TAG_MISSING => [
                'format' => 'The mandatory tag \'%1\' is missing or incorrect.',
                'specificity' => 8,
            ]
            ErrorCode::MISSING_LAYOUT_ATTRIBUTES => [
                'format' => 'Incomplete layout attributes specified for tag \'%1\'. For example, provide attributes \'width\' and \'height\'.',
                'specificity' => 45,
            ]
            ErrorCode::MISSING_REQUIRED_EXTENSION => [
                'format' => 'The tag \'%1\' requires including the \'%2\' extension JavaScript.',
                'specificity' => 12,
            ]
            ErrorCode::MISSING_URL => [
                'format' => 'Missing URL for attribute \'%1\' in tag \'%2\'.',
                'specificity' => 52,
            ]
            ErrorCode::MUTUALLY_EXCLUSIVE_ATTRS => [
                'format' => 'Mutually exclusive attributes encountered in tag \'%1\' - pick one of %2.',
                'specificity' => 40,
            ]
            ErrorCode::NON_LTS_SCRIPT_AFTER_LTS => [
                'format' => '\'%1\' must use the LTS version to correspond with the first script in the page, which uses LTS.',
                'specificity' => 18,
            ]
            ErrorCode::NON_WHITESPACE_CDATA_ENCOUNTERED => [
                'format' => 'The tag \'%1\' contains text, which is disallowed.',
                'specificity' => 3,
            ]
            ErrorCode::SPECIFIED_LAYOUT_INVALID => [
                'format' => 'The specified layout \'%1\' is not supported by tag \'%2\'.',
                'specificity' => 47,
            ]
            ErrorCode::STYLESHEET_AND_INLINE_STYLE_TOO_LONG => [
                'format' => 'The author stylesheet specified in tag \'style amp-custom\' and the combined inline styles is too large - document contains %1 bytes whereas the limit is %2 bytes.',
                'specificity' => 33,
            ]
            ErrorCode::STYLESHEET_TOO_LONG => [
                'format' => 'The author stylesheet specified in tag \'%1\' is too long - document contains %2 bytes whereas the limit is %3 bytes.',
                'specificity' => 32,
            ]
            ErrorCode::TAG_EXCLUDED_BY_TAG => [
                'format' => 'The tag \'%1\' is present, but is excluded by the presence of \'%2\'.',
                'specificity' => 11,
            ]
            ErrorCode::TAG_NOT_ALLOWED_TO_HAVE_SIBLINGS => [
                'format' => 'Tag \'%1\' is not allowed to have any sibling tags (\'%2\' should only have 1 child).',
                'specificity' => 109,
            ]
            ErrorCode::TAG_REFERENCE_POINT_CONFLICT => [
                'format' => 'The tag \'%1\' conflicts with reference point \'%2\' because both define reference points.',
                'specificity' => 80,
            ]
            ErrorCode::TAG_REQUIRED_BY_MISSING => [
                'format' => 'The tag \'%1\' is missing or incorrect, but required by \'%2\'.',
                'specificity' => 10,
            ]
            ErrorCode::TEMPLATE_IN_ATTR_NAME => [
                'format' => 'Mustache template syntax in attribute name \'%1\' in tag \'%2\'.',
                'specificity' => 43,
            ]
            ErrorCode::TEMPLATE_PARTIAL_IN_ATTR_VALUE => [
                'format' => 'The attribute \'%1\' in tag \'%2\' is set to \'%3\', which contains a Mustache template partial.',
                'specificity' => 42,
            ]
            ErrorCode::UNESCAPED_TEMPLATE_IN_ATTR_VALUE => [
                'format' => 'The attribute \'%1\' in tag \'%2\' is set to \'%3\', which contains unescaped Mustache template syntax.',
                'specificity' => 41,
            ]
            ErrorCode::UNKNOWN_CODE => [
                'format' => 'Unknown error.',
                'specificity' => 0,
            ]
            ErrorCode::VALUE_SET_MISMATCH => [
                'format' => 'Attribute \'%1\' in tag \'%2\' contains a value that does not match any other tags on the page.',
                'specificity' => 127,
            ]
            ErrorCode::WARNING_EXTENSION_DEPRECATED_VERSION => [
                'format' => 'The extension \'%1\' is referenced at version \'%2\' which is a deprecated version. Please use a more recent version of this extension. This may become an error in the future.',
                'specificity' => 17,
            ]
            ErrorCode::WARNING_EXTENSION_UNUSED => [
                'format' => 'The extension \'%1\' was found on this page, but is unused (no \'%2\' tag seen). This may become an error in the future.',
                'specificity' => 16,
            ]
            ErrorCode::WARNING_TAG_REQUIRED_BY_MISSING => [
                'format' => 'The tag \'%1\' is missing or incorrect, but required by \'%2\'. This will soon be an error.',
                'specificity' => 14,
            ]
            ErrorCode::WRONG_PARENT_TAG => [
                'format' => 'The parent tag of tag \'%1\' is \'%2\', but it can only be \'%3\'.',
                'specificity' => 9,
            ]
        ];
    }
}
