<?php

namespace AmpProject\Validator\Spec;

use AmpProject\Exception\InvalidSpecRuleName;
use AmpProject\Tests\TestCase;
use AmpProject\Tests\ValidatorFixtures\DummyError;

class ErrorTest extends TestCase
{

    /**
     * @covers \AmpProject\Validator\Spec\Error::getCode()
     * @covers \AmpProject\Validator\Spec\Error::get()
     * @covers \AmpProject\Validator\Spec\Error::has()
     */
    public function testGet()
    {
        $dummyError = new DummyError();

        $this->assertEquals('dummy', $dummyError->getCode());

        $this->assertTrue($dummyError->has('format'));
        $this->assertFalse($dummyError->has('utter nonsense'));

        $format = $dummyError->get('format');

        $this->assertIsString($format);
        $this->assertEquals('this is an error', $format);
    }

    /**
     * @covers \AmpProject\Validator\Spec\Error::get()
     * @covers \AmpProject\Exception\InvalidSpecRuleName::forSpecRuleName()
     */
    public function testThrowsExceptionForUnknownError()
    {
        $dummyError = new DummyError();

        $this->expectException(InvalidSpecRuleName::class);
        $this->expectExceptionMessage("Invalid spec rule name 'utter nonsense' was requested from the validator spec.");
        $dummyError->get('utter nonsense');
    }
}
