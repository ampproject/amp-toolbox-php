<?php

namespace AmpProject\Exception;

use AmpProject\Tests\TestCase;

/**
 * Test the InvalidOptionValue exception.
 *
 * @covers \AmpProject\Exception\InvalidOptionValue
 * @package ampproject/amp-toolbox
 */
class InvalidOptionValueTest extends TestCase
{
    /**
     * Test throwing the exception for an invalid option value.
     */
    public function testThrowingForSpecName()
    {
        $this->expectException(InvalidOptionValue::class);
        $this->expectExceptionMessage(
            "The value for the option 'optionName' expected the value to be one of "
            . "[optionA, optionB], got 'invalid' instead."
        );

        throw InvalidOptionValue::forValue('optionName', ['optionA', 'optionB'], 'invalid');
    }
}
