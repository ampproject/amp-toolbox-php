<?php

namespace AmpProject\Tooling\Validator\SpecGenerator;

use Nette\PhpGenerator\Dumper as NetteDumper;

final class Dumper
{
    use ConstantNames;

    /** @var NetteDumper */
    private $dumper;

    /** @var string[] */
    const SPEC_RULE_SUBKEYS = [
        'addValueToSet',
        'allowAllDeclarationInStyleTag',
        'allowEmpty',
        'allowImportant',
        'allowRelative',
        'alsoRequiresTagWarning',
        'alternativeNames',
        'ampLayout',
        'attrLists',
        'attrs',
        'cdata',
        'cdataRegex',
        'childTags',
        'cssDeclaration',
        'cssSpec',
        'declarationList',
        'declarationListSvg',
        'deprecatedAllowDuplicates',
        'deprecatedVersion',
        'deprecation',
        'deprecationUrl',
        'descendantTagList',
        'descriptiveName',
        'disabledBy',
        'disallowedAncestor',
        'disallowedCdataRegex',
        'disallowedValueRegex',
        'dispatchKey',
        'docCssBytes',
        'enabledBy',
        'excludes',
        'expandVendorPrefixes',
        'explicitAttrsOnly',
        'extensionSpec',
        'extensionType',
        'fontUrlSpec',
        'htmlFormat',
        'imageUrlSpec',
        'implicit',
        'mandatory',
        'mandatoryAlternatives',
        'mandatoryAncestor',
        'mandatoryAncestorSuggestedAlternative',
        'mandatoryAnyof',
        'mandatoryLastChild',
        'mandatoryOneof',
        'mandatoryParent',
        'markDescendants',
        'maxBytes',
        'maxBytesIsWarning',
        'maxBytesPerInlineStyle',
        'maxBytesSpecUrl',
        'name',
        'namedId',
        'protocol',
        'referencePoints',
        'requires',
        'requiresAncestor',
        'requiresExtension',
        'requiresUsage',
        'satisfies',
        'siblingsDisallowed',
        'specName',
        'specUrl',
        'tagName',
        'trigger',
        'unique',
        'uniqueWarning',
        'urlBytesIncluded',
        'value',
        'valueCasei',
        'valueDocCss',
        'valueDocSvgCss',
        'valueOneofSet',
        'valueProperties',
        'valueRegex',
        'valueRegexCasei',
        'valueUrl',
        'version',
    ];

    /**
     * Dump a variable so it can be used for code generation.
     *
     * @param mixed         $variable Variable to dump.
     * @param int           $level    Indentation level to use.
     * @param callable|null $callback Optional. Callback used to filter individual values. Returns a string
     *                                representation of the value, or false if no special representation needed.
     * @return string Dump of the provided variable.
     */
    public function dump($variable, $level, $callback = null)
    {
        if ($this->dumper === null) {
            $this->dumper = new NetteDumper();
        }

        $extraIndentation = str_pad('', $level * 4, ' ');

        if (is_array($variable)) {
            if (count($variable) === 0) {
                return "[]";
            }

            $line = '';
            foreach ($variable as $key => $value) {
                $line .= "{$extraIndentation}    ";
                if (is_string($key)) {
                    $line .= "{$this->dumpWithKey($key, $value, $level + 1, $callback)},\n";
                } else {
                    $line .= "{$this->dump($value, $level + 1, $callback)},\n";
                }
            }
            return "[\n" . $line . "{$extraIndentation}]";
        }

        return "{$this->getValueString($variable, $callback)}";
    }

    /**
     * Dump a key-value pair so it can be used for code generation.
     *
     * @param string        $key      Key to dump.
     * @param mixed         $value    Value to dump.
     * @param int           $level    Indentation level to use.
     * @param callable|null $callback Optional. Callback used to filter individual values. Returns a string
     *                                representation of the value, or false if no special representation needed.
     * @return string Dump of the provided variable.
     */
    public function dumpWithKey($key, $value, $level, $callback = null)
    {
        $value = $this->replaceConstants($key, $value);

        return "{$this->getValueString($key)} => {$this->dump($value, $level, $callback)}";
    }

    /**
     * Dump a value so it can be used for code generation.
     *
     * @param mixed         $value    Value to dump.
     * @param int           $level    Indentation level to use.
     * @param callable|null $callback Optional. Callback used to filter individual values. Returns a string
     *                                representation of the value, or false if no special representation needed.
     * @return string Dump of the provided variable.
     */
    public function dumpWithSpecRules($value, $level, $callback = null)
    {
        if ($this->dumper === null) {
            $this->dumper = new NetteDumper();
        }

        $extraIndentation = str_pad('', $level * 4, ' ');

        if (is_array($value)) {
            if (count($value) === 0) {
                return "[]";
            }

            $line = '';
            foreach ($value as $subKey => $subValue) {
                $line .= "{$extraIndentation}    ";
                if (is_string($subKey)) {
                    if (in_array($subKey, self::SPEC_RULE_SUBKEYS, true)) {
                        $line .= "{$this->dumpWithSpecRuleKey($subKey, $subValue, $level + 1, $callback)},\n";
                    } else {
                        $line .= "{$this->dumpWithKey($subKey, $subValue, $level + 1, $callback)},\n";
                    }
                } else {
                    $line .= "{$this->dumpWithSpecRules($subValue, $level + 1, $callback)},\n";
                }
            }

            return "[\n" . $line . "{$extraIndentation}]";
        }

        return "{$this->getValueString($value, $callback)}";
    }

    /**
     * Dump a key-value pair so it can be used for code generation.
     *
     * @param string        $key      Key to dump.
     * @param mixed         $value    Value to dump.
     * @param int           $level    Indentation level to use.
     * @param callable|null $callback Optional. Callback used to filter individual values. Returns a string
     *                                representation of the value, or false if no special representation needed.
     * @return string Dump of the provided variable.
     */
    public function dumpWithSpecRuleKey($key, $value, $level, $callback = null)
    {
        $specRuleConstant = "SpecRule::{$this->getConstantName($key)}";
        $value            = $this->replaceConstants($key, $value);

        return "{$specRuleConstant} => {$this->dumpWithSpecRules($value, $level, $callback)}";
    }

    /**
     * Get the string representation of a value.
     *
     * This takes into account the optional callback that might have been passed in.
     *
     * @param mixed         $value    Value to get the string representation of.
     * @param callable|null $callback Optional. Callback used to filter individual values. Returns a string
     *                                representation of the value, or false if no special representation needed.
     * @return string String representation of the value.
     */
    private function getValueString($value, $callback = null)
    {
        if ($this->dumper === null) {
            $this->dumper = new NetteDumper();
        }

        if (!is_callable($callback)) {
            $callback = [$this, 'filterValueStrings'];
        }

        $valueString = $callback($value);

        if ($valueString === false) {
            $valueString = $this->dumper->dump($value);
        }

        return $valueString;
    }

    /**
     * Filtering callback to use for ensuring constants are not put between quotes.
     *
     * @param mixed $value Value to filter.
     * @return string|false String to use, or false if fallback to the regular variable dumper should be used.
     */
    public function filterValueStrings($value)
    {
        if (!is_string($value)) {
            return false;
        }

        if (
            strpos($value, 'Attribute::') === 0
            ||
            strpos($value, 'Element::') === 0
            ||
            strpos($value, 'ErrorCode::') === 0
            ||
            strpos($value, 'Extension::') === 0
            ||
            strpos($value, 'Format::') === 0
            ||
            strpos($value, 'Internal::') === 0
            ||
            strpos($value, 'Layout::') === 0
            ||
            strpos($value, 'Protocol::') === 0
            ||
            strpos($value, 'SpecRule::') === 0
            ||
            strpos($value, '::class') !== false
        ) {
            return $value;
        }

        return false;
    }

    private function replaceConstants($specRule, $value)
    {
        if (!is_string($value) && !is_array($value)) {
            return $value;
        }

        switch ($specRule) {
            case 'ampLayout':
                if (array_key_exists('supportedLayouts', $value)) {
                    foreach ($value['supportedLayouts'] as $index => $layout) {
                        $value['supportedLayouts'][$index] = $this->getLayoutConstant(
                            $this->getConstantName($layout)
                        );
                    }
                }
                return $value;
            case 'htmlFormat':
                $formats = [];
                foreach ($value as $format) {
                    $formats[] = $this->getFormatConstant($this->getConstantName($format));
                }
                return $formats;
            case 'protocol':
                $protocols = [];
                foreach ($value as $protocol) {
                    $protocols[] = $this->getProtocolConstant($this->getConstantName($protocol));
                }
                return $protocols;
            case 'mandatoryAncestor':
            case 'mandatoryAncestorSuggestedAlternative':
            case 'mandatoryParent':
            case 'tagName':
                $constant = $value;
                if (strpos($value, '$') !== 0 && strpos($value, ' ') === false) {
                    $constant = $this->getTagConstant($this->getConstantName($value));
                }

                return $constant;
            case 'requiresExtension':
                $extensions = [];
                foreach ($value as $extension) {
                    $extensions[] = $this->getTagConstant($this->getConstantName($extension));
                }
                return $extensions;
            default:
                return $value;
        }
    }
}
