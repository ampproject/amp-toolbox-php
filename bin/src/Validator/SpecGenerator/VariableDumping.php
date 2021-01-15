<?php

namespace AmpProject\Tooling\Validator\SpecGenerator;

use Nette\PhpGenerator\Dumper;

trait VariableDumping
{

    /** @var Dumper */
    private $dumper;

    /**
     * Dump a variable so it can be used for code generation.
     *
     * @param mixed         $variable Variable to dump.
     * @param int           $level    Indentation level to use.
     * @param callable|null $callback Optional. Callback used to filter individual values. Returns a string
     *                                representation of the value, or false if no special representation needed.
     * @return string Dump of the provided variable.
     */
    private function dump($variable, $level, $callback = null)
    {
        if ($this->dumper === null) {
            $this->dumper = new Dumper();
        }

        $extraIndentation = str_pad('', $level * 4, ' ');

        if (is_array($variable)) {
            $line = '';
            foreach ($variable as $key => $value) {
                if (is_string($key)) {
                    $line .= "{$extraIndentation}    {$this->dumpWithKey($key, $value, $level + 1, $callback)}\n";
                } else {
                    $line .= "{$extraIndentation}    {$this->dump($value, $level + 1, $callback)}\n";
                }
            }
            return "[\n" . $line . "{$extraIndentation}],";
        }

        return "{$this->getValueString($variable, $callback)},";
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
    private function dumpWithKey($key, $value, $level, $callback = null)
    {
        if ($this->dumper === null) {
            $this->dumper = new Dumper();
        }

        $extraIndentation = str_pad('', $level * 4, ' ');

        if (is_array($value)) {
            $line = '';
            foreach ($value as $subKey => $subValue) {
                if (is_string($subKey)) {
                    $line .= "{$extraIndentation}    {$this->dumpWithKey($subKey, $subValue, $level + 1, $callback)}\n";
                } else {
                    $line .= "{$extraIndentation}    {$this->dump($subValue, $level + 1, $callback)}\n";
                }
            }
            return "'{$key}' => [\n" . $line . "{$extraIndentation}],";
        }

        return "'{$key}' => {$this->getValueString($value, $callback)},";
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
        $valueString = false;

        if (is_callable($callback)) {
            $valueString = $callback($value);
        }

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
        ) {
            return $value;
        }

        return false;
    }
}
