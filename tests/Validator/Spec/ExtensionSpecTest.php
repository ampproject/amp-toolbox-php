<?php

namespace AmpProject\Validator\Spec;

use AmpProject\Tests\TestCase;

class ExtensionSpecTest extends TestCase
{
    use ExtensionSpec;

    const EXTENSION_SPEC = [
        SpecRule::NAME           => 'amp-dummy-extension',
        SpecRule::VERSION        => [
            '0.1',
            '2.0',
            '1.0',
            '0.2',
            'latest',
        ],
        SpecRule::REQUIRES_USAGE => 'NONE',
        SpecRule::EXTENSION_TYPE => 'CUSTOM_TEMPLATE',
    ];

    /**
     * @covers \AmpProject\Validator\SpecExtensionSpec::getExtensionName()
     */
    public function testGetExtensionName()
    {
        $this->assertEquals('amp-dummy-extension', $this->getExtensionName());
    }

    /**
     * @covers \AmpProject\Validator\SpecExtensionSpec::getLatestVersion()
     */
    public function testGetLatestVersion()
    {
        $this->assertEquals('2.0', $this->getLatestVersion());
    }

    /**
     * @covers \AmpProject\Validator\SpecExtensionSpec::getExtensionType()
     */
    public function testGetExtensionType()
    {
        $this->assertEquals('custom-template', $this->getExtensionType());
    }
}
