<?php

namespace AmpProject\Optimizer\Configuration;

use AmpProject\Optimizer\Exception\InvalidConfigurationValue;

/**
 * Configuration for the MinifyHtml transformer.
 *
 * @property bool   $minify                Whether minification is enabled.
 * @property bool   $minifyAmpScript       Whether amp-script minification is enabled.
 * @property bool   $minifyJSON            Whether JSON data minification is enabled.
 * @property bool   $collapseWhitespace    Whether collapsing whitespace is enabled.
 * @property bool   $removeComments        Whether comments should be removed.
 * @property bool   $canCollapseWhitespace Whether whitespace can be collapsed.
 * @property bool   $inBody                Whether the node is in the body.
 * @property string $commentIgnorePattern  Ignore comments of the form <!-- __AAAA_BBBB___ -->.
 *
 * @package ampproject/amp-toolbox
 */
final class MinifyHtmlConfiguration extends BaseTransformerConfiguration
{

    /**
     * Is minification enabled.
     *
     * @var bool
     */
    const MINIFIY = 'minify';

    /**
     * Is amp-script minification enabled.
     *
     * @var bool
     */
    const MINIFY_AMP_SCRIPT = 'minifyAmpScript';

    /**
     * Is JSON data minification enabled.
     *
     * @var bool
     */
    const MINIFY_JSON = 'minifyJSON';

    /**
     * Is collapsing the whitespace enabled.
     *
     * @var bool
     */
    const COLLAPSE_WHITESPACE = 'collapseWhitespace';

    /**
     * Should remove comments.
     *
     * @var bool
     */
    const REMOVE_COMMENTS = 'removeComments';

    /**
     * Can collapse whitespace.
     *
     * @var bool
     */
    const CAN_COLLAPSE_WHITESPACE = 'canCollapseWhitespace';

    /**
     * Is node in the body.
     *
     * @var bool
     */
    const IN_BODY = 'inBody';

    /**
     * Ignore comments of the form <!-- __AAAA_BBBB___ --> by default (used by Next.js).
     *
     * @var string
     */
    const COMMENT_IGNORE_PATTERN = 'commentIgnorePattern';

    /**
     * Get the associative array of allowed keys and their respective default values.
     *
     * The array index is the key and the array value is the key's default value.
     *
     * @return array Associative array of allowed keys and their respective default values.
     */
    protected function getAllowedKeys()
    {
        return [
            self::MINIFIY                 => true,
            self::MINIFY_AMP_SCRIPT       => true,
            self::MINIFY_JSON             => true,
            self::COLLAPSE_WHITESPACE     => true,
            self::REMOVE_COMMENTS         => true,
            self::CAN_COLLAPSE_WHITESPACE => true,
            self::IN_BODY                 => false,
            self::COMMENT_IGNORE_PATTERN  => '/^\s*__[a-bA-Z0-9_-]+__\s*$/',
        ];
    }

    /**
     * Validate an individual configuration entry.
     *
     * @param string $key   Key of the configuration entry to validate.
     * @param mixed  $value Value of the configuration entry to validate.
     * @return mixed Validated value.
     */
    protected function validate($key, $value)
    {
        switch ($key) {
            case self::MINIFIY:
            case self::MINIFY_AMP_SCRIPT:
            case self::MINIFY_JSON:
            case self::COLLAPSE_WHITESPACE:
            case self::REMOVE_COMMENTS:
            case self::CAN_COLLAPSE_WHITESPACE:
            case self::IN_BODY:
                if (! is_bool($value)) {
                    throw InvalidConfigurationValue::forInvalidSubValueType(
                        self::class,
                        $key,
                        'boolean',
                        is_object($value) ? get_class($value) : gettype($value)
                    );
                }
                break;

            case self::COMMENT_IGNORE_PATTERN:
                if (! is_string($value)) {
                    throw InvalidConfigurationValue::forInvalidSubValueType(
                        self::class,
                        self::COMMENT_IGNORE_PATTERN,
                        'string',
                        is_object($value) ? get_class($value) : gettype($value)
                    );
                }
                $value = trim($value);
                break;
        }

        return $value;
    }
}
