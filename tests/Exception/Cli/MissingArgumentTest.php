<?php

namespace AmpProject\Exception\Cli;

use AmpProject\Exception\AmpCliException;
use AmpProject\Tests\TestCase;

/**
 * Test the MissingArgument exception.
 *
 * @covers \AmpProject\Exception\MissingArgument
 * @package ampproject/amp-toolbox
 */
class MissingArgumentTest extends TestCase
{

    /**
     * Test throwing the exception for no argument.
     */
    public function testThrowingForNoArgument()
    {
        $this->expectException(MissingArgument::class);
        $this->expectExceptionMessage("Option 'file' requires an argument.");
        $this->expectExceptionCode(AmpCliException::E_OPT_ARG_REQUIRED);

        throw MissingArgument::forNoArgument('file');
    }

    /**
     * Test throwing the exception for not enough arguments.
     */
    public function testThrowingForNotEnoughArguments()
    {
        $this->expectException(MissingArgument::class);
        $this->expectExceptionMessage('Not enough arguments provided.');
        $this->expectExceptionCode(AmpCliException::E_OPT_ARG_REQUIRED);

        throw MissingArgument::forNotEnoughArguments();
    }
}
