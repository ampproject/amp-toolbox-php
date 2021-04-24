<?php

namespace AmpProject\Exception\Cli;

use AmpProject\Exception\AmpCliException;
use AmpProject\Tests\TestCase;

/**
 * Test the InvalidCommand exception.
 *
 * @covers \AmpProject\Exception\Cli\InvalidCommand
 * @package ampproject/amp-toolbox
 */
class InvalidCommandTest extends TestCase
{

    /**
     * Test throwing the exception for an unregistered command.
     */
    public function testThrowingForUnregisteredCommand()
    {
        $this->expectException(InvalidCommand::class);
        $this->expectExceptionMessage("Command not registered: 'cook'.");
        $this->expectExceptionCode(AmpCliException::E_INVALID_CMD);

        throw InvalidCommand::forUnregisteredCommand('cook');
    }

    /**
     * Test throwing the exception for an already registered command.
     */
    public function testThrowingForAlreadyRegisteredCommand()
    {
        $this->expectException(InvalidCommand::class);
        $this->expectExceptionMessage("Command already registered: 'optimize'.");
        $this->expectExceptionCode(AmpCliException::E_INVALID_CMD);

        throw InvalidCommand::forAlreadyRegisteredCommand('optimize');
    }
}
