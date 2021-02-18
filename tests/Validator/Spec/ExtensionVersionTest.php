<?php

namespace AmpProject\Validator\Spec;

use AmpProject\Tests\TestCase;

class ExtensionVersionTest extends TestCase
{
    use ExtensionVersion;

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
    ];

    public function testGetLatestVersion()
    {
        $this->assertEquals('2.0', $this->getLatestVersion());
    }
}
