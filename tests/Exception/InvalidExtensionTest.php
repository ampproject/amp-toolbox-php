<?php

namespace AmpProject\Exception;

use AmpProject\Tests\TestCase;

/**
 * Test the InvalidExtension exception.
 *
 * @covers \AmpProject\Exception\InvalidExtension
 * @package ampproject/amp-toolbox
 */
class InvalidExtensionTest extends TestCase
{

    /**
     * Test throwing the exception for an extension.
     */
    public function testThrowingForExtension()
    {
        $this->expectException(InvalidExtension::class);
        $this->expectExceptionMessage("Invalid extension 'extensionName' was requested from the validator spec.");

        throw InvalidExtension::forExtension('extensionName');
    }
}
