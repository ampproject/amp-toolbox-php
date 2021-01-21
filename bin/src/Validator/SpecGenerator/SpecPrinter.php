<?php

namespace AmpProject\Tooling\Validator\SpecGenerator;

use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\Dumper;
use Nette\PhpGenerator\GlobalFunction;
use Nette\PhpGenerator\Helpers;
use Nette\PhpGenerator\Method;
use Nette\PhpGenerator\PhpNamespace;
use Nette\PhpGenerator\Printer;
use Nette\Utils\Strings;

final class SpecPrinter extends Printer
{
    /** @var string */
    protected $indentation = '    ';

    /** @var int */
    protected $linesBetweenMethods = 1;

    /** @var bool */
    private $resolveTypes = true;

    /**
     * Dumper instance to use.
     *
     * @var \AmpProject\Tooling\Validator\SpecGenerator\Dumper
     */
    private $dumper;

    /**
     * SpecPrinter constructor.
     */
    public function __construct()
    {
        $this->dumper = new Dumper();
    }

    public function printClass(ClassType $class, PhpNamespace $namespace = null): string
    {
        $class->validate();
        $resolver = $this->resolveTypes && $namespace
            ? [$namespace, 'unresolveUnionType']
            : function ($s) { return $s; };

        $traits = [];
        foreach ($class->getTraitResolutions() as $trait => $resolutions) {
            $traits[] = 'use ' . $resolver($trait)
                . ($resolutions ? " {\n" . $this->indentation . implode(";\n" . $this->indentation, $resolutions) . ";\n}\n" : ";\n");
        }

        $consts = [];
        foreach ($class->getConstants() as $const) {
            $def = ($const->getVisibility() ? $const->getVisibility() . ' ' : '') . 'const ' . $const->getName() . ' = ';
            $consts[] = Helpers::formatDocComment((string) $const->getComment())
                . self::printAttributes($const->getAttributes(), $namespace)
                . $def
                . $this->dumper->dump($const->getValue(), strlen($def)) . ";\n";
        }

        $properties = [];
        foreach ($class->getProperties() as $property) {
            $type = $property->getType();
            $def = (($property->getVisibility() ?: 'public') . ($property->isStatic() ? ' static' : '') . ' '
                . ltrim($this->printType($type, $property->isNullable(), $namespace) . ' ')
                . '$' . $property->getName());

            $properties[] = Helpers::formatDocComment((string) $property->getComment())
                . self::printAttributes($property->getAttributes(), $namespace)
                . $def
                . ($property->getValue() === null && !$property->isInitialized()
                    ? ''
                    : ' = ' . $this->dumper->dump($property->getValue(), strlen($def) + 3)) // 3 = ' = '
                . ";\n";
        }

        $methods = [];
        foreach ($class->getMethods() as $method) {
            $methods[] = $this->printMethod($method, $namespace);
        }

        $members = array_filter(
            [
                implode('', $traits),
                $this->joinProperties($consts),
                $this->joinProperties($properties),
                ($methods && $properties ? str_repeat("\n", $this->linesBetweenMethods - 1) : '')
                . implode(str_repeat("\n", $this->linesBetweenMethods), $methods),
            ]
        );

        return Strings::normalize(
            Helpers::formatDocComment($class->getComment() . "\n")
                . self::printAttributes($class->getAttributes(), $namespace)
                . ($class->isAbstract() ? 'abstract ' : '')
                . ($class->isFinal() ? 'final ' : '')
                . ($class->getName() ? $class->getType() . ' ' . $class->getName() . ' ' : '')
                . ($class->getExtends() ? 'extends ' . implode(', ', array_map($resolver, (array) $class->getExtends())) . ' ' : '')
                . ($class->getImplements() ? 'implements ' . implode(', ', array_map($resolver, $class->getImplements())) . ' ' : '')
                . ($class->getName() ? "\n" : '') . "{\n"
                . ($members ? $this->indent(implode("\n", $members)) : '')
                . '}'
            ) . ($class->getName() ? "\n" : '');
    }

    /**
     * @param Closure|GlobalFunction|Method  $function
     */
    private function printReturnType($function, ?PhpNamespace $namespace): string
    {
        return ($tmp = $this->printType($function->getReturnType(), $function->isReturnNullable(), $namespace))
            ? $this->returnTypeColon . $tmp
            : '';
    }


    private function printAttributes(array $attrs, ?PhpNamespace $namespace, bool $inline = false): string
    {
        if (!$attrs) {
            return '';
        }
        $items = [];
        foreach ($attrs as $attr) {
            $args = (new Dumper)->format('...?:', $attr->getArguments());
            $items[] = $this->printType($attr->getName(), false, $namespace) . ($args ? "($args)" : '');
        }
        return $inline
            ? '#[' . implode(', ', $items) . '] '
            : '#[' . implode("]\n#[", $items) . "]\n";
    }

    private function joinProperties(array $props)
    {
        return $this->linesBetweenProperties
            ? implode(str_repeat("\n", $this->linesBetweenProperties), $props)
            : preg_replace('#^(\w.*\n)\n(?=\w.*;)#m', '$1', implode("\n", $props));
    }
}
