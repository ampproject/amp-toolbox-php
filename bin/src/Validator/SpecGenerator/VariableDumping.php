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
     * @param mixed $variable Variable to dump.
     * @param int   $level    Indentation level to use.
     * @return string Dump of the provided variable.
     */
    private function dump($variable, $level)
    {
        if ($this->dumper === null) {
            $this->dumper = new Dumper();
        }

        $extraIndentation = str_pad('', $level * 4, ' ');

        return str_replace("\n", "\n{$extraIndentation}", $this->dumper->dump($variable));
    }
}
