<?php

namespace AmpProject\Validator\Spec;

use AmpProject\Tests\TestCase;
use AmpProject\Tests\ValidatorFixtures\DummyTagWithExtensionSpec;

class TagWithExtensionSpecTest extends TestCase
{

    /**
     * @covers \AmpProject\Validator\Spec\TagWithExtensionSpec::getExtensionName()
     */
    public function testGetExtensionName()
    {
        $dummyTag = new DummyTagWithExtensionSpec();

        $this->assertEquals('amp-dummy-extension', $dummyTag->getExtensionName());
    }

    /**
     * @covers \AmpProject\Validator\Spec\TagWithExtensionSpec::getLatestVersion()
     */
    public function testGetLatestVersion()
    {
        $dummyTag = new DummyTagWithExtensionSpec();

        $this->assertEquals('1.0', $dummyTag->getLatestVersion());
    }

    /**
     * @covers \AmpProject\Validator\Spec\TagWithExtensionSpec::getExtensionType()
     */
    public function testGetExtensionType()
    {
        $dummyTag = new DummyTagWithExtensionSpec();

        $this->assertEquals('custom-template', $dummyTag->getExtensionType());
    }
}
