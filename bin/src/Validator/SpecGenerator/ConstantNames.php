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
                    [':', '-', '!', '+'],
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

        $constantName = (new ReservedKeywords())->maybeAddSuffix($constantName);

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

    /**
     * Get the layout constant.
     *
     * @param string $layout Layout to get the constant for.
     * @return string Layout constant.
     */
    private function getLayoutConstant($layout)
    {
        return "Layout::{$layout}";
    }

    /**
     * Get the at rule constant.
     *
     * @param string $atRule At rule to get the constant for.
     * @return string At rule constant.
     */
    private function getAtRuleConstant($atRule)
    {
        return "AtRule::{$atRule}";
    }

    /**
     * Get the protocol constant.
     *
     * @param string $protocol Protocol to get the constant for.
     * @return string Protocol constant.
     */
    private function getProtocolConstant($protocol)
    {
        return "Protocol::{$protocol}";
    }

    /**
     * Get the attribute constant.
     *
     * @param string $attribute Attribute to get the constant for.
     * @return string Attribute constant.
     */
    private function getAttributeConstant($attribute)
    {
        if (strpos($attribute, '[') === 0) {
            return $attribute;
        }

        $attribute = (new ReservedKeywords())->maybeAddSuffix($attribute);

        return "Attribute::{$attribute}";
    }
}
