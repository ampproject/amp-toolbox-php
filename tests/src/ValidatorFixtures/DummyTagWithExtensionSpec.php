<?php

namespace AmpProject\Tests\ValidatorFixtures;

use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\TagWithExtensionSpec;

/**
 * @property-read string $tagName
 */
class DummyTagWithExtensionSpec extends TagWithExtensionSpec
{

    /** @var string */
    const ID = 'dummy';

    /** @var array<array> */
    const SPEC = [
        SpecRule::TAG_NAME => Element::A,
    ];

    const LATEST_VERSION = '1.0';

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
}
