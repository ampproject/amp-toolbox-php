<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Section;

use AmpProject\Validator\ErrorCode;
use AmpProject\Validator\Spec\SpecRule;

final class Errors
{
    /** @var array */
    public $errors;

    public function __construct()
    {
        $this->errors = [
            ErrorCode::ATTR_DISALLOWED_BY_IMPLIED_LAYOUT => [
                SpecRule::FORMAT => 'The attribute \'%1\' in tag \'%2\' is disallowed by implied layout \'%3\'.',
                SpecRule::SPECIFICITY => 48,
            ],
            ErrorCode::ATTR_DISALLOWED_BY_SPECIFIED_LAYOUT => [
                SpecRule::FORMAT => 'The attribute \'%1\' in tag \'%2\' is disallowed by specified layout \'%3\'.',
                SpecRule::SPECIFICITY => 49,
            ],
            ErrorCode::ATTR_MISSING_REQUIRED_EXTENSION => [
                SpecRule::FORMAT => 'The attribute \'%1\' requires including the \'%2\' extension JavaScript.',
                SpecRule::SPECIFICITY => 13,
            ],
            ErrorCode::ATTR_REQUIRED_BUT_MISSING => [
                SpecRule::FORMAT => 'The attribute \'%1\' in tag \'%2\' is missing or incorrect, but required by attribute \'%3\'.',
                SpecRule::SPECIFICITY => 29,
            ],
            ErrorCode::ATTR_VALUE_REQUIRED_BY_LAYOUT => [
                SpecRule::FORMAT => 'Invalid value \'%1\' for attribute \'%2\' in tag \'%3\' - for layout \'%4\', set the attribute \'%2\' to value \'%5\'.',
                SpecRule::SPECIFICITY => 25,
            ],
            ErrorCode::BASE_TAG_MUST_PRECEED_ALL_URLS => [
                SpecRule::FORMAT => 'The tag \'%1\', which contains URLs, was found earlier in the document than the BASE element.',
                SpecRule::SPECIFICITY => 87,
            ],
            ErrorCode::CDATA_VIOLATES_DENYLIST => [
                SpecRule::FORMAT => 'The text inside tag \'%1\' contains \'%2\', which is disallowed.',
                SpecRule::SPECIFICITY => 2,
            ],
            ErrorCode::CHILD_TAG_DOES_NOT_SATISFY_REFERENCE_POINT => [
                SpecRule::FORMAT => 'The tag \'%1\', a child tag of \'%2\', does not satisfy one of the acceptable reference points: %3.',
                SpecRule::SPECIFICITY => 77,
            ],
            ErrorCode::CHILD_TAG_DOES_NOT_SATISFY_REFERENCE_POINT_SINGULAR => [
                SpecRule::FORMAT => 'The tag \'%1\', a child tag of \'%2\', does not satisfy the reference point \'%3\'.',
                SpecRule::SPECIFICITY => 81,
            ],
            ErrorCode::CSS_EXCESSIVELY_NESTED => [
                SpecRule::FORMAT => 'CSS excessively nested in tag \'%1\'.',
                SpecRule::SPECIFICITY => 125,
            ],
            ErrorCode::CSS_SYNTAX_BAD_URL => [
                SpecRule::FORMAT => 'CSS syntax error in tag \'%1\' - bad url.',
                SpecRule::SPECIFICITY => 60,
            ],
            ErrorCode::CSS_SYNTAX_DISALLOWED_ATTR_SELECTOR => [
                SpecRule::FORMAT => 'CSS error in tag \'%1\' - disallowed attribute selector \'%2\'.',
                SpecRule::SPECIFICITY => 120,
            ],
            ErrorCode::CSS_SYNTAX_DISALLOWED_DOMAIN => [
                SpecRule::FORMAT => 'CSS syntax error in tag \'%1\' - invalid domain \'%2\'.',
                SpecRule::SPECIFICITY => 69,
            ],
            ErrorCode::CSS_SYNTAX_DISALLOWED_IMPORTANT => [
                SpecRule::FORMAT => 'Usage of the !important CSS qualifier is not allowed.',
                SpecRule::SPECIFICITY => 123,
            ],
            ErrorCode::CSS_SYNTAX_DISALLOWED_KEYFRAME_INSIDE_KEYFRAME => [
                SpecRule::FORMAT => 'CSS syntax error in tag \'%1\' - keyframe inside keyframe is not allowed.',
                SpecRule::SPECIFICITY => 115,
            ],
            ErrorCode::CSS_SYNTAX_DISALLOWED_MEDIA_FEATURE => [
                SpecRule::FORMAT => 'CSS syntax error in tag \'%1\' - disallowed media feature \'%2\'.',
                SpecRule::SPECIFICITY => 119,
            ],
            ErrorCode::CSS_SYNTAX_DISALLOWED_MEDIA_TYPE => [
                SpecRule::FORMAT => 'CSS syntax error in tag \'%1\' - disallowed media type \'%2\'.',
                SpecRule::SPECIFICITY => 118,
            ],
            ErrorCode::CSS_SYNTAX_DISALLOWED_PROPERTY_VALUE => [
                SpecRule::FORMAT => 'CSS syntax error in tag \'%1\' - the property \'%2\' is set to the disallowed value \'%3\'.',
                SpecRule::SPECIFICITY => 82,
            ],
            ErrorCode::CSS_SYNTAX_DISALLOWED_PROPERTY_VALUE_WITH_HINT => [
                SpecRule::FORMAT => 'CSS syntax error in tag \'%1\' - the property \'%2\' is set to the disallowed value \'%3\'. Allowed values: %4.',
                SpecRule::SPECIFICITY => 83,
            ],
            ErrorCode::CSS_SYNTAX_DISALLOWED_PSEUDO_CLASS => [
                SpecRule::FORMAT => 'CSS error in tag \'%1\' - disallowed pseudo class \'%2\'.',
                SpecRule::SPECIFICITY => 121,
            ],
            ErrorCode::CSS_SYNTAX_DISALLOWED_PSEUDO_ELEMENT => [
                SpecRule::FORMAT => 'CSS error in tag \'%1\' - disallowed pseudo element \'%2\'.',
                SpecRule::SPECIFICITY => 122,
            ],
            ErrorCode::CSS_SYNTAX_DISALLOWED_QUALIFIED_RULE_MUST_BE_INSIDE_KEYFRAME => [
                SpecRule::FORMAT => 'CSS syntax error in tag \'%1\' - qualified rule \'%2\' must be located inside of a keyframe.',
                SpecRule::SPECIFICITY => 114,
            ],
            ErrorCode::CSS_SYNTAX_DISALLOWED_RELATIVE_URL => [
                SpecRule::FORMAT => 'CSS syntax error in tag \'%1\' - disallowed relative url \'%2\'.',
                SpecRule::SPECIFICITY => 72,
            ],
            ErrorCode::CSS_SYNTAX_EOF_IN_PRELUDE_OF_QUALIFIED_RULE => [
                SpecRule::FORMAT => 'CSS syntax error in tag \'%1\' - end of stylesheet encountered in prelude of a qualified rule.',
                SpecRule::SPECIFICITY => 61,
            ],
            ErrorCode::CSS_SYNTAX_ERROR_IN_PSEUDO_SELECTOR => [
                SpecRule::FORMAT => 'CSS syntax error in tag \'%1\' - invalid pseudo selector.',
                SpecRule::SPECIFICITY => 64,
            ],
            ErrorCode::CSS_SYNTAX_INCOMPLETE_DECLARATION => [
                SpecRule::FORMAT => 'CSS syntax error in tag \'%1\' - incomplete declaration.',
                SpecRule::SPECIFICITY => 63,
            ],
            ErrorCode::CSS_SYNTAX_INVALID_ATTR_SELECTOR => [
                SpecRule::FORMAT => 'CSS syntax error in tag \'%1\' - invalid attribute selector.',
                SpecRule::SPECIFICITY => 76,
            ],
            ErrorCode::CSS_SYNTAX_INVALID_AT_RULE => [
                SpecRule::FORMAT => 'CSS syntax error in tag \'%1\' - saw invalid at rule \'@%2\'.',
                SpecRule::SPECIFICITY => 36,
            ],
            ErrorCode::CSS_SYNTAX_INVALID_DECLARATION => [
                SpecRule::FORMAT => 'CSS syntax error in tag \'%1\' - invalid declaration.',
                SpecRule::SPECIFICITY => 62,
            ],
            ErrorCode::CSS_SYNTAX_INVALID_PROPERTY => [
                SpecRule::FORMAT => 'CSS syntax error in tag \'%1\' - invalid property \'%2\'. The only allowed properties are \'%3\'.',
                SpecRule::SPECIFICITY => 111,
            ],
            ErrorCode::CSS_SYNTAX_INVALID_PROPERTY_NOLIST => [
                SpecRule::FORMAT => 'CSS syntax error in tag \'%1\' - invalid property \'%2\'.',
                SpecRule::SPECIFICITY => 112,
            ],
            ErrorCode::CSS_SYNTAX_INVALID_URL => [
                SpecRule::FORMAT => 'CSS syntax error in tag \'%1\' - invalid url \'%2\'.',
                SpecRule::SPECIFICITY => 70,
            ],
            ErrorCode::CSS_SYNTAX_INVALID_URL_PROTOCOL => [
                SpecRule::FORMAT => 'CSS syntax error in tag \'%1\' - invalid url protocol \'%2:\'.',
                SpecRule::SPECIFICITY => 71,
            ],
            ErrorCode::CSS_SYNTAX_MALFORMED_MEDIA_QUERY => [
                SpecRule::FORMAT => 'CSS syntax error in tag \'%1\' - malformed media query.',
                SpecRule::SPECIFICITY => 117,
            ],
            ErrorCode::CSS_SYNTAX_MISSING_SELECTOR => [
                SpecRule::FORMAT => 'CSS syntax error in tag \'%1\' - missing selector.',
                SpecRule::SPECIFICITY => 65,
            ],
            ErrorCode::CSS_SYNTAX_MISSING_URL => [
                SpecRule::FORMAT => 'CSS syntax error in tag \'%1\' - missing url.',
                SpecRule::SPECIFICITY => 68,
            ],
            ErrorCode::CSS_SYNTAX_NOT_A_SELECTOR_START => [
                SpecRule::FORMAT => 'CSS syntax error in tag \'%1\' - not a selector start.',
                SpecRule::SPECIFICITY => 66,
            ],
            ErrorCode::CSS_SYNTAX_PROPERTY_DISALLOWED_TOGETHER_WITH => [
                SpecRule::FORMAT => 'CSS syntax error in tag \'%1\' - the property \'%2\' is disallowed together with \'%3\'. Allowed properties: %4.',
                SpecRule::SPECIFICITY => 85,
            ],
            ErrorCode::CSS_SYNTAX_PROPERTY_DISALLOWED_WITHIN_AT_RULE => [
                SpecRule::FORMAT => 'CSS syntax error in tag \'%1\' - the property \'%2\' is disallowed within @%3. Allowed properties: %4.',
                SpecRule::SPECIFICITY => 84,
            ],
            ErrorCode::CSS_SYNTAX_PROPERTY_REQUIRES_QUALIFICATION => [
                SpecRule::FORMAT => 'CSS syntax error in tag \'%1\' - the property \'%2\' is disallowed unless the enclosing rule is prefixed with the \'%3\' qualification.',
                SpecRule::SPECIFICITY => 86,
            ],
            ErrorCode::CSS_SYNTAX_QUALIFIED_RULE_HAS_NO_DECLARATIONS => [
                SpecRule::FORMAT => 'CSS syntax error in tag \'%1\' - qualified rule \'%2\' has no declarations.',
                SpecRule::SPECIFICITY => 113,
            ],
            ErrorCode::CSS_SYNTAX_STRAY_TRAILING_BACKSLASH => [
                SpecRule::FORMAT => 'CSS syntax error in tag \'%1\' - stray trailing backslash.',
                SpecRule::SPECIFICITY => 57,
            ],
            ErrorCode::CSS_SYNTAX_UNPARSED_INPUT_REMAINS_IN_SELECTOR => [
                SpecRule::FORMAT => 'CSS syntax error in tag \'%1\' - unparsed input remains in selector.',
                SpecRule::SPECIFICITY => 67,
            ],
            ErrorCode::CSS_SYNTAX_UNTERMINATED_COMMENT => [
                SpecRule::FORMAT => 'CSS syntax error in tag \'%1\' - unterminated comment.',
                SpecRule::SPECIFICITY => 58,
            ],
            ErrorCode::CSS_SYNTAX_UNTERMINATED_STRING => [
                SpecRule::FORMAT => 'CSS syntax error in tag \'%1\' - unterminated string.',
                SpecRule::SPECIFICITY => 59,
            ],
            ErrorCode::DEPRECATED_ATTR => [
                SpecRule::FORMAT => 'The attribute \'%1\' in tag \'%2\' is deprecated - use \'%3\' instead.',
                SpecRule::SPECIFICITY => 104,
            ],
            ErrorCode::DEPRECATED_TAG => [
                SpecRule::FORMAT => 'The tag \'%1\' is deprecated - use \'%2\' instead.',
                SpecRule::SPECIFICITY => 105,
            ],
            ErrorCode::DEV_MODE_ONLY => [
                SpecRule::FORMAT => 'Tag \'html\' marked with attribute \'data-ampdevmode\'. Validator will suppress errors regarding any other tag with this attribute.',
                SpecRule::SPECIFICITY => 1000,
            ],
            ErrorCode::DISALLOWED_ATTR => [
                SpecRule::FORMAT => 'The attribute \'%1\' may not appear in tag \'%2\'.',
                SpecRule::SPECIFICITY => 22,
            ],
            ErrorCode::DISALLOWED_CHILD_TAG_NAME => [
                SpecRule::FORMAT => 'Tag \'%1\' is disallowed as child of tag \'%2\'. Child tag must be one of %3.',
                SpecRule::SPECIFICITY => 74,
            ],
            ErrorCode::DISALLOWED_DOMAIN => [
                SpecRule::FORMAT => 'The domain \'%3\' for attribute \'%1\' in tag \'%2\' is disallowed.',
                SpecRule::SPECIFICITY => 53,
            ],
            ErrorCode::DISALLOWED_FIRST_CHILD_TAG_NAME => [
                SpecRule::FORMAT => 'Tag \'%1\' is disallowed as first child of tag \'%2\'. First child tag must be one of %3.',
                SpecRule::SPECIFICITY => 75,
            ],
            ErrorCode::DISALLOWED_MANUFACTURED_BODY => [
                SpecRule::FORMAT => 'Tag or text which is only allowed inside the body section found outside of the body section.',
                SpecRule::SPECIFICITY => 106,
            ],
            ErrorCode::DISALLOWED_PROPERTY_IN_ATTR_VALUE => [
                SpecRule::FORMAT => 'The property \'%1\' in attribute \'%2\' in tag \'%3\' is disallowed.',
                SpecRule::SPECIFICITY => 39,
            ],
            ErrorCode::DISALLOWED_RELATIVE_URL => [
                SpecRule::FORMAT => 'The relative URL \'%3\' for attribute \'%1\' in tag \'%2\' is disallowed.',
                SpecRule::SPECIFICITY => 51,
            ],
            ErrorCode::DISALLOWED_SCRIPT_TAG => [
                SpecRule::FORMAT => 'Custom JavaScript is not allowed.',
                SpecRule::SPECIFICITY => 102,
            ],
            ErrorCode::DISALLOWED_STYLE_ATTR => [
                SpecRule::FORMAT => 'The inline \'style\' attribute is not allowed in AMP documents. Use \'style amp-custom\' tag instead.',
                SpecRule::SPECIFICITY => 56,
            ],
            ErrorCode::DISALLOWED_TAG => [
                SpecRule::FORMAT => 'The tag \'%1\' is disallowed.',
                SpecRule::SPECIFICITY => 21,
            ],
            ErrorCode::DISALLOWED_TAG_ANCESTOR => [
                SpecRule::FORMAT => 'The tag \'%1\' may not appear as a descendant of tag \'%2\'.',
                SpecRule::SPECIFICITY => 5,
            ],
            ErrorCode::DOCUMENT_SIZE_LIMIT_EXCEEDED => [
                SpecRule::FORMAT => 'Document exceeded %1 bytes limit. Actual size %2 bytes.',
                SpecRule::SPECIFICITY => 126,
            ],
            ErrorCode::DOCUMENT_TOO_COMPLEX => [
                SpecRule::FORMAT => 'The document is too complex.',
                SpecRule::SPECIFICITY => 107,
            ],
            ErrorCode::DUPLICATE_ATTRIBUTE => [
                SpecRule::FORMAT => 'The tag \'%1\' contains the attribute \'%2\' repeated multiple times.',
                SpecRule::SPECIFICITY => 24,
            ],
            ErrorCode::DUPLICATE_DIMENSION => [
                SpecRule::FORMAT => 'Multiple image candidates with the same width or pixel density found in attribute \'%1\' in tag \'%2\'.',
                SpecRule::SPECIFICITY => 50,
            ],
            ErrorCode::DUPLICATE_REFERENCE_POINT => [
                SpecRule::FORMAT => 'The reference point \'%1\' for \'%2\' must be unique but a duplicate was encountered.',
                SpecRule::SPECIFICITY => 79,
            ],
            ErrorCode::DUPLICATE_UNIQUE_TAG => [
                SpecRule::FORMAT => 'The tag \'%1\' appears more than once in the document.',
                SpecRule::SPECIFICITY => 30,
            ],
            ErrorCode::DUPLICATE_UNIQUE_TAG_WARNING => [
                SpecRule::FORMAT => 'The tag \'%1\' appears more than once in the document. This will soon be an error.',
                SpecRule::SPECIFICITY => 31,
            ],
            ErrorCode::EXTENSION_UNUSED => [
                SpecRule::FORMAT => 'The extension \'%1\' was found on this page, but is unused. Please remove this extension.',
                SpecRule::SPECIFICITY => 15,
            ],
            ErrorCode::GENERAL_DISALLOWED_TAG => [
                SpecRule::FORMAT => 'The tag \'%1\' is disallowed except in specific forms.',
                SpecRule::SPECIFICITY => 103,
            ],
            ErrorCode::IMPLIED_LAYOUT_INVALID => [
                SpecRule::FORMAT => 'The implied layout \'%1\' is not supported by tag \'%2\'.',
                SpecRule::SPECIFICITY => 46,
            ],
            ErrorCode::INCONSISTENT_UNITS_FOR_WIDTH_AND_HEIGHT => [
                SpecRule::FORMAT => 'Inconsistent units for width and height in tag \'%1\' - width is specified in \'%2\' whereas height is specified in \'%3\'.',
                SpecRule::SPECIFICITY => 44,
            ],
            ErrorCode::INCORRECT_MIN_NUM_CHILD_TAGS => [
                SpecRule::FORMAT => 'Tag \'%1\' must have a minimum of %2 child tags - saw %3 child tags.',
                SpecRule::SPECIFICITY => 108,
            ],
            ErrorCode::INCORRECT_NUM_CHILD_TAGS => [
                SpecRule::FORMAT => 'Tag \'%1\' must have %2 child tags - saw %3 child tags.',
                SpecRule::SPECIFICITY => 73,
            ],
            ErrorCode::INCORRECT_SCRIPT_RELEASE_VERSION => [
                SpecRule::FORMAT => 'The script version for \'%1\' is a %2 version which mismatches with the first script on the page using the %3 version.',
                SpecRule::SPECIFICITY => 20,
            ],
            ErrorCode::INLINE_SCRIPT_TOO_LONG => [
                SpecRule::FORMAT => 'The inline script is %1 bytes, which exceeds the limit of %2 bytes.',
                SpecRule::SPECIFICITY => 35,
            ],
            ErrorCode::INLINE_STYLE_TOO_LONG => [
                SpecRule::FORMAT => 'The inline style specified in tag \'%1\' is too long - it contains %2 bytes whereas the limit is %3 bytes.',
                SpecRule::SPECIFICITY => 34,
            ],
            ErrorCode::INVALID_ATTR_VALUE => [
                SpecRule::FORMAT => 'The attribute \'%1\' in tag \'%2\' is set to the invalid value \'%3\'.',
                SpecRule::SPECIFICITY => 23,
            ],
            ErrorCode::INVALID_DOCTYPE_HTML => [
                SpecRule::FORMAT => 'Invalid or missing doctype declaration. Should be \'!doctype html\'.',
                SpecRule::SPECIFICITY => 128,
            ],
            ErrorCode::INVALID_JSON_CDATA => [
                SpecRule::FORMAT => 'The script tag contains invalid JSON that cannot be parsed.',
                SpecRule::SPECIFICITY => 4,
            ],
            ErrorCode::INVALID_PROPERTY_VALUE_IN_ATTR_VALUE => [
                SpecRule::FORMAT => 'The property \'%1\' in attribute \'%2\' in tag \'%3\' is set to \'%4\', which is invalid.',
                SpecRule::SPECIFICITY => 38,
            ],
            ErrorCode::INVALID_URL => [
                SpecRule::FORMAT => 'Malformed URL \'%3\' for attribute \'%1\' in tag \'%2\'.',
                SpecRule::SPECIFICITY => 55,
            ],
            ErrorCode::INVALID_URL_PROTOCOL => [
                SpecRule::FORMAT => 'Invalid URL protocol \'%3:\' for attribute \'%1\' in tag \'%2\'.',
                SpecRule::SPECIFICITY => 54,
            ],
            ErrorCode::INVALID_UTF8 => [
                SpecRule::FORMAT => 'The document contains invalid UTF8.',
                SpecRule::SPECIFICITY => 124,
            ],
            ErrorCode::LTS_SCRIPT_AFTER_NON_LTS => [
                SpecRule::FORMAT => '\'%1\' must use the non-LTS version to correspond with the first script in the page, which does not use LTS.',
                SpecRule::SPECIFICITY => 19,
            ],
            ErrorCode::MANDATORY_ANYOF_ATTR_MISSING => [
                SpecRule::FORMAT => 'The tag \'%1\' is missing a mandatory attribute - pick at least one of %2.',
                SpecRule::SPECIFICITY => 28,
            ],
            ErrorCode::MANDATORY_ATTR_MISSING => [
                SpecRule::FORMAT => 'The mandatory attribute \'%1\' is missing in tag \'%2\'.',
                SpecRule::SPECIFICITY => 26,
            ],
            ErrorCode::MANDATORY_CDATA_MISSING_OR_INCORRECT => [
                SpecRule::FORMAT => 'The mandatory text inside tag \'%1\' is missing or incorrect.',
                SpecRule::SPECIFICITY => 1,
            ],
            ErrorCode::MANDATORY_LAST_CHILD_TAG => [
                SpecRule::FORMAT => 'Tag \'%1\', if present, must be the last child of tag \'%2\'.',
                SpecRule::SPECIFICITY => 110,
            ],
            ErrorCode::MANDATORY_ONEOF_ATTR_MISSING => [
                SpecRule::FORMAT => 'The tag \'%1\' is missing a mandatory attribute - pick one of %2.',
                SpecRule::SPECIFICITY => 27,
            ],
            ErrorCode::MANDATORY_PROPERTY_MISSING_FROM_ATTR_VALUE => [
                SpecRule::FORMAT => 'The property \'%1\' is missing from attribute \'%2\' in tag \'%3\'.',
                SpecRule::SPECIFICITY => 37,
            ],
            ErrorCode::MANDATORY_REFERENCE_POINT_MISSING => [
                SpecRule::FORMAT => 'The mandatory reference point \'%1\' for \'%2\' is missing.',
                SpecRule::SPECIFICITY => 78,
            ],
            ErrorCode::MANDATORY_TAG_ANCESTOR => [
                SpecRule::FORMAT => 'The tag \'%1\' may only appear as a descendant of tag \'%2\'.',
                SpecRule::SPECIFICITY => 6,
            ],
            ErrorCode::MANDATORY_TAG_ANCESTOR_WITH_HINT => [
                SpecRule::FORMAT => 'The tag \'%1\' may only appear as a descendant of tag \'%2\'. Did you mean \'%3\'?',
                SpecRule::SPECIFICITY => 7,
            ],
            ErrorCode::MANDATORY_TAG_MISSING => [
                SpecRule::FORMAT => 'The mandatory tag \'%1\' is missing or incorrect.',
                SpecRule::SPECIFICITY => 8,
            ],
            ErrorCode::MISSING_LAYOUT_ATTRIBUTES => [
                SpecRule::FORMAT => 'Incomplete layout attributes specified for tag \'%1\'. For example, provide attributes \'width\' and \'height\'.',
                SpecRule::SPECIFICITY => 45,
            ],
            ErrorCode::MISSING_REQUIRED_EXTENSION => [
                SpecRule::FORMAT => 'The tag \'%1\' requires including the \'%2\' extension JavaScript.',
                SpecRule::SPECIFICITY => 12,
            ],
            ErrorCode::MISSING_URL => [
                SpecRule::FORMAT => 'Missing URL for attribute \'%1\' in tag \'%2\'.',
                SpecRule::SPECIFICITY => 52,
            ],
            ErrorCode::MUTUALLY_EXCLUSIVE_ATTRS => [
                SpecRule::FORMAT => 'Mutually exclusive attributes encountered in tag \'%1\' - pick one of %2.',
                SpecRule::SPECIFICITY => 40,
            ],
            ErrorCode::NON_LTS_SCRIPT_AFTER_LTS => [
                SpecRule::FORMAT => '\'%1\' must use the LTS version to correspond with the first script in the page, which uses LTS.',
                SpecRule::SPECIFICITY => 18,
            ],
            ErrorCode::NON_WHITESPACE_CDATA_ENCOUNTERED => [
                SpecRule::FORMAT => 'The tag \'%1\' contains text, which is disallowed.',
                SpecRule::SPECIFICITY => 3,
            ],
            ErrorCode::SPECIFIED_LAYOUT_INVALID => [
                SpecRule::FORMAT => 'The specified layout \'%1\' is not supported by tag \'%2\'.',
                SpecRule::SPECIFICITY => 47,
            ],
            ErrorCode::STYLESHEET_AND_INLINE_STYLE_TOO_LONG => [
                SpecRule::FORMAT => 'The author stylesheet specified in tag \'style amp-custom\' and the combined inline styles is too large - document contains %1 bytes whereas the limit is %2 bytes.',
                SpecRule::SPECIFICITY => 33,
            ],
            ErrorCode::STYLESHEET_TOO_LONG => [
                SpecRule::FORMAT => 'The author stylesheet specified in tag \'%1\' is too long - document contains %2 bytes whereas the limit is %3 bytes.',
                SpecRule::SPECIFICITY => 32,
            ],
            ErrorCode::TAG_EXCLUDED_BY_TAG => [
                SpecRule::FORMAT => 'The tag \'%1\' is present, but is excluded by the presence of \'%2\'.',
                SpecRule::SPECIFICITY => 11,
            ],
            ErrorCode::TAG_NOT_ALLOWED_TO_HAVE_SIBLINGS => [
                SpecRule::FORMAT => 'Tag \'%1\' is not allowed to have any sibling tags (\'%2\' should only have 1 child).',
                SpecRule::SPECIFICITY => 109,
            ],
            ErrorCode::TAG_REFERENCE_POINT_CONFLICT => [
                SpecRule::FORMAT => 'The tag \'%1\' conflicts with reference point \'%2\' because both define reference points.',
                SpecRule::SPECIFICITY => 80,
            ],
            ErrorCode::TAG_REQUIRED_BY_MISSING => [
                SpecRule::FORMAT => 'The tag \'%1\' is missing or incorrect, but required by \'%2\'.',
                SpecRule::SPECIFICITY => 10,
            ],
            ErrorCode::TEMPLATE_IN_ATTR_NAME => [
                SpecRule::FORMAT => 'Mustache template syntax in attribute name \'%1\' in tag \'%2\'.',
                SpecRule::SPECIFICITY => 43,
            ],
            ErrorCode::TEMPLATE_PARTIAL_IN_ATTR_VALUE => [
                SpecRule::FORMAT => 'The attribute \'%1\' in tag \'%2\' is set to \'%3\', which contains a Mustache template partial.',
                SpecRule::SPECIFICITY => 42,
            ],
            ErrorCode::UNESCAPED_TEMPLATE_IN_ATTR_VALUE => [
                SpecRule::FORMAT => 'The attribute \'%1\' in tag \'%2\' is set to \'%3\', which contains unescaped Mustache template syntax.',
                SpecRule::SPECIFICITY => 41,
            ],
            ErrorCode::UNKNOWN_CODE => [
                SpecRule::FORMAT => 'Unknown error.',
                SpecRule::SPECIFICITY => 0,
            ],
            ErrorCode::VALUE_SET_MISMATCH => [
                SpecRule::FORMAT => 'Attribute \'%1\' in tag \'%2\' contains a value that does not match any other tags on the page.',
                SpecRule::SPECIFICITY => 127,
            ],
            ErrorCode::WARNING_EXTENSION_DEPRECATED_VERSION => [
                SpecRule::FORMAT => 'The extension \'%1\' is referenced at version \'%2\' which is a deprecated version. Please use a more recent version of this extension. This may become an error in the future.',
                SpecRule::SPECIFICITY => 17,
            ],
            ErrorCode::WARNING_EXTENSION_UNUSED => [
                SpecRule::FORMAT => 'The extension \'%1\' was found on this page, but is unused (no \'%2\' tag seen). This may become an error in the future.',
                SpecRule::SPECIFICITY => 16,
            ],
            ErrorCode::WARNING_TAG_REQUIRED_BY_MISSING => [
                SpecRule::FORMAT => 'The tag \'%1\' is missing or incorrect, but required by \'%2\'. This will soon be an error.',
                SpecRule::SPECIFICITY => 14,
            ],
            ErrorCode::WRONG_PARENT_TAG => [
                SpecRule::FORMAT => 'The parent tag of tag \'%1\' is \'%2\', but it can only be \'%3\'.',
                SpecRule::SPECIFICITY => 9,
            ],
        ];
    }
}
