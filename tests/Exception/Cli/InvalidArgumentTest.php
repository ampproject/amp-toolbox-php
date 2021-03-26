<?php

namespace AmpProject\Exception\Cli;

use AmpProject\Exception\AmpCliException;
use AmpProject\Tests\TestCase;

/**
 * Test the InvalidArgument exception.
 *
 * @covers \AmpProject\Exception\InvalidArgument
 * @package ampproject/amp-toolbox
 */
class InvalidArgumentTest extends TestCase
{

    /**
     * Test throwing the exception for an unreadable file.
     */
    public function testThrowingForUnreadableFile()
    {
        $this->expectException(InvalidArgument::class);
        $this->expectExceptionMessage("Could not read file: '/dev/null'.");
        $this->expectExceptionCode(AmpCliException::E_OPT_ARG_DENIED);

        throw InvalidArgument::forUnreadableFile('/dev/null');
    }

    /**
     * Test throwing the exception for a multi-character short option.
     */
    public function testThrowingForMultiCharacterShortOption()
    {
        $this->expectException(InvalidArgument::class);
        $this->expectExceptionMessage('Short options should be exactly one ASCII character.');
        $this->expectExceptionCode(AmpCliException::E_OPT_ARG_DENIED);

        throw InvalidArgument::forMultiCharacterShortOption();
    }

    /**
     * Test throwing the exception for unreadable arguments.
     */
    public function testThrowingForUnreadableArguments()
    {
        $this->expectException(InvalidArgument::class);
        $this->expectExceptionMessage('Could not read command arguments. Is register_argc_argv off?');
        $this->expectExceptionCode(AmpCliException::E_ARG_READ);

        throw InvalidArgument::forUnreadableArguments();
    }
}
