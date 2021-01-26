<?php

namespace AmpProject\Validator\Spec;

use AmpProject\Tests\TestCase;
use AmpProject\Tests\TestTag\DummyTag;

class TagTest extends TestCase
{

    public function testDefaultValues()
    {
        $dummyTag = new DummyTag();

        $this->assertIsArray($dummyTag->alsoRequiresTagWarning);
        $this->assertIsArray($dummyTag->attrLists);
        $this->assertIsArray($dummyTag->disabledBy);
        $this->assertIsArray($dummyTag->disallowedAncestor);
        $this->assertIsArray($dummyTag->enabledBy);
        $this->assertIsArray($dummyTag->excludes);
        $this->assertIsArray($dummyTag->htmlFormat);
        $this->assertIsArray($dummyTag->requires);
        $this->assertIsArray($dummyTag->requiresExtension);
        $this->assertIsArray($dummyTag->satisfies);

        $this->assertFalse($dummyTag->explicitAttrsOnly);
        $this->assertFalse($dummyTag->mandatory);
        $this->assertFalse($dummyTag->mandatoryLastChild);
        $this->assertFalse($dummyTag->siblingsDisallowed);
        $this->assertFalse($dummyTag->unique);
        $this->assertFalse($dummyTag->uniqueWarning);
    }
}
