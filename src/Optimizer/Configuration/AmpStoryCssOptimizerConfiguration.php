<?php

namespace AmpProject\Optimizer\Configuration;

use AmpProject\Optimizer\Configuration\BaseTransformerConfiguration;
use AmpProject\Optimizer\Exception\InvalidConfigurationValue;

/**
 * Configuration for the AmpStoryCssOptimizer transformer.
 *
 * @property string $format                  Specifies the AMP format. Defaults to `AMP`.
 * @property bool   $autoExtensionImport     Set to `false` to disable the auto extension import. Defaults to `true`.
 * @property bool   $experimentBindAttribute Enables experimental conversion of bind attributes. Defaults to `false`.
 *
 * @package ampproject/amp-toolbox
 */
final class AmpStoryCssOptimizerConfiguration extends BaseTransformerConfiguration
{
    /**
     * Whether optimization is enabled.
     *
     * @var string
     */
    const OPTIMIZE_AMP_STORY = 'optimizeAmpStory';

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
            self::OPTIMIZE_AMP_STORY => false,
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
            case self::OPTIMIZE_AMP_STORY:
                if (! is_bool($value)) {
                    throw InvalidConfigurationValue::forInvalidSubValueType(
                        self::class,
                        self::OPTIMIZE_AMP_STORY,
                        'boolean',
                        gettype($value)
                    );
                }
                break;
        }

        return $value;
    }
}
