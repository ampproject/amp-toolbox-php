<?php

namespace AmpProject\Tooling\Validator\SpecGenerator;

use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\GlobalFunction;
use Nette\PhpGenerator\Helpers;
use Nette\PhpGenerator\Method;
use Nette\PhpGenerator\PhpNamespace;
use Nette\PhpGenerator\Printer;
use Nette\Utils\Strings;

final class SpecPrinter extends Printer
{
    use ClassNames;

    /**
     * Regex pattern to fetch class names in method bodies.
     *
     * @var string
     */
    const CLASS_NAMES_REGEX_PATTERN = '/(?:\s+|^)((?:\\\\{1,2}\w+)+)/';

    /** @var string */
    protected $indentation = '    ';

    /** @var int */
    protected $linesBetweenMethods = 1;

    /** @var bool */
    private $resolveTypes = true;

    /**
     * Dumper instance to use.
     *
     * @var Dumper
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
            : function ($s) {
                return $s;
            };

        $traits = [];
        foreach ($class->getTraitResolutions() as $trait => $resolutions) {
            $traits[] = 'use ' . $resolver($trait) . ($resolutions
                    ? " {\n" . $this->indentation . implode(";\n" . $this->indentation, $resolutions) . ";\n}\n"
                    : ";\n");
        }

        $consts = [];
        foreach ($class->getConstants() as $const) {
            $consts[] = Helpers::formatDocComment((string) $const->getComment())
                . self::printAttributes($const->getAttributes(), $namespace)
                . "const {$const->getName()} = "
                . $this->dumper->dump($const->getValue(), 0) . ";\n";
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
            $methods[] = $this->printResolvedMethod($method, $resolver, $namespace);
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
                . ($class->getExtends()
                ? 'extends ' . implode(', ', array_map($resolver, (array) $class->getExtends())) . ' '
                : '')
                . ($class->getImplements()
                ? ($class->isInterface() ? 'extends ' : 'implements ')
                  . implode(', ', array_map($resolver, $class->getImplements())) . ' '
                : '')
                . ($class->getName() ? "\n" : '') . "{\n"
                . ($members ? $this->indent(implode("\n", $members)) : '')
                . '}'
        ) . ($class->getName() ? "\n" : '');
    }

    private function printResolvedMethod(Method $method, callable $resolver, PhpNamespace $namespace = null): string
    {
        $method->validate();
        $line = ($method->isAbstract() ? 'abstract ' : '')
                . ($method->isFinal() ? 'final ' : '')
                . ($method->getVisibility() ? $method->getVisibility() . ' ' : '')
                . ($method->isStatic() ? 'static ' : '')
                . 'function '
                . ($method->getReturnReference() ? '&' : '')
                . $method->getName();

        return Helpers::formatDocComment($method->getComment() . "\n")
               . self::printAttributes($method->getAttributes(), $namespace)
               . $line
               . ($params = $this->printParameters($method, $namespace, strlen($line) + strlen($this->indentation) + 2))
               . ($method->isAbstract() || $method->getBody() === null
                ? ";\n"
                : (strpos($params, "\n") === false ? "\n" : ' ')
                  . "{\n"
                  . $this->indent(ltrim(rtrim($this->resolveBody($method->getBody(), $resolver)) . "\n"))
                  . "}\n");
    }

    private function resolveBody(string $body, callable $resolver): string
    {
        $matches = [];

        if (preg_match_all(self::CLASS_NAMES_REGEX_PATTERN, $body, $matches)) {
            foreach ($matches[1] as $className) {
                $body = str_replace($className, $this->getShortName($className), $body);
            }
        }

        return $body;
    }

    private function printAttributes(array $attrs, ?PhpNamespace $namespace, bool $inline = false): string
    {
        if (!$attrs) {
            return '';
        }
        $items = [];
        foreach ($attrs as $attr) {
            $args = (new Dumper())->format('...?:', $attr->getArguments());
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
