<?php

namespace AmpProject\Dom;

use ArrayAccess;

class Options implements ArrayAccess
{
    private $options;

    public function __construct($options) {
        $this->options = $options;
    }

    public function offsetSet($option, $value) {
        if (is_null($option)) {
            $this->options[] = $value;
        } else {
            $this->options[$option] = $value;
        }
    }

    public function offsetExists($option) {
        return isset($this->options[$option]);
    }

    public function offsetUnset($option) {
        unset($this->options[$option]);
    }

    public function offsetGet($option) {
        return isset($this->options[$option]) ? $this->options[$option] : null;
    }

    public function merge($options)
    {
        $clonedOptions = clone $this;
        $clonedOptions->options = array_merge($this->options, $options);

        return $clonedOptions;
    }

    public function toArray()
    {
        return $this->options;
    }
}
