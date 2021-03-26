<?php

namespace AmpProject\Exception\Cli;

use AmpProject\Exception\AmpCliException;
use AmpProject\Tests\TestCase;

/**
 * Test the InvalidSapi exception.
 *
 * @covers \AmpProject\Exception\InvalidSapi
 * @package ampproject/amp-toolbox
 */
class InvalidSapiTest extends TestCase
{

    /**
     * Test throwing the exception for a SAPI.
     */
    public function testThrowingForSapi()
    {
        $this->expectException(InvalidSapi::class);
        $this->expectExceptionMessage("This has to be run from the command line (detected SAPI 'php-fpm').");
        $this->expectExceptionCode(AmpCliException::E_ANY);

        throw InvalidSapi::forSapi('php-fpm');
    }
}
