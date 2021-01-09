<?php

namespace AmpProject\Tooling\Validator\SpecGenerator;

use AmpProject\Amp;

trait ConstantNames
{

    /**
     * Get the constant name for a given value.
     *
     * @param string $value Value to get the constant name for.
     * @return string Constant name to use.
     */
    private function getConstantName($value)
    {
        return strtoupper(
            $this->prefixLeadingDigits(
                str_replace(
                    [':', '-', '!'],
                    '_',
                    preg_replace('/([a-z])([A-Z])/', '$1_$2', $value)
                )
            )
        );
    }

    /**
     * Get the tag constant using the correct interface constants.
     *
     * @param string $constantName Constant name to build the correct tag constant for.
     * @return string Tag constant.
     */
    private function getTagConstant($constantName)
    {
        if (strpos($constantName, 'AMP_') === 0) {
            $interface    = 'Extension';
            $constantName = $this->prefixLeadingDigits(
                str_replace('AMP_', '', $constantName)
            );
        } elseif (strpos($constantName, 'I_AMPHTML_') === 0) {
            $interface = 'Internal';
            $constantName = $this->prefixLeadingDigits(
                str_replace('I_AMPHTML_', '', $constantName)
            );
        } else {
            $interface = 'Element';
        }

        $languageConstructs = [
            'LIST',
            'SWITCH',
            'USE',
            'VAR',
        ];

        if (in_array($constantName, $languageConstructs, true)) {
            $constantName .= '_';
        }

        return "{$interface}::{$constantName}";
    }

    /**
     * Prefix leading digits with an underscore, as constants cannot start with a digit.
     *
     * @param string $constant Constant to prefix the digits for.
     * @return string Prefixed constant.
     */
    private function prefixLeadingDigits($constant)
    {
        return preg_replace('/^(\d)/', '_$1', $constant);
    }

    /**
     * Get the AMP HTML format constant.
     *
     * @param string $format Format to get the constant for.
     * @return string Format constant.
     */
    private function getFormatConstant($format)
    {
        if (!in_array($format, Amp::FORMATS)) {
            return $format;
        }

        return "Format::{$format}";
    }
}
