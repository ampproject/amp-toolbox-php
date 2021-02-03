<?php

namespace AmpProject\Tooling\Validator\SpecGenerator\Section;

use AmpProject\Tooling\Validator\SpecGenerator\ConstantNames;
use AmpProject\Tooling\Validator\SpecGenerator\FileManager;
use AmpProject\Tooling\Validator\SpecGenerator\Section;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\PhpNamespace;

final class DescendantTagList implements Section
{
    use ConstantNames;

    /**
     * Process a section.
     *
     * @param FileManager  $fileManager FileManager instance to use.
     * @param array        $spec        Associative array of spec data that was decoded from the JSON file.
     * @param PhpNamespace $namespace   Namespace object of the section.
     * @param ClassType    $class       Class object of the section.
     * @return void
     */
    public function process(FileManager $fileManager, $spec, PhpNamespace $namespace, ClassType $class)
    {
        $namespace->addUse('AmpProject\\Extension');
        $namespace->addUse('AmpProject\\Tag', 'Element');
        $namespace->addUse('AmpProject\\Internal');

        foreach ($this->adaptSpec($spec) as $key => $value) {
            $constantKey   = $this->getConstantName($key);
            $constantValue = [];
            foreach ($value as $subKey => $subValue) {
                $constantValue[$subKey] = $this->getTagConstant($this->getConstantName($subValue));
            }
            $class->addConstant($constantKey, $constantValue);
        }
    }

    /**
     * Adapt JSON spec data.
     *
     * @param array $jsonSpec JSON spec data to adapt.
     * @return array Adapted JSON spec data.
     */
    protected function adaptSpec($jsonSpec)
    {
        $tagList = [];

        foreach ($jsonSpec as $entry) {
            $tagList[$entry['name']] = $entry['tag'];
        }

        return $tagList;
    }
}
