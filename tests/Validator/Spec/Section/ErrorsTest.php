<?php

namespace AmpProject\Validator\Spec\Section;

use AmpProject\Exception\InvalidErrorCode;
use AmpProject\Exception\InvalidSpecRuleName;
use AmpProject\Tests\TestCase;
use AmpProject\Validator\Spec;

/**
 * Tests for AmpProject\Validator\Spec\Section\Errors.
 *
 * @covers  \AmpProject\Validator\Spec\Section\Errors
 * @package ampproject/amp-toolbox
 */
class ErrorsTest extends TestCase
{
    /** @var Errors */
    private $errors;

    public function __construct()
    {
        parent::__construct();
        $spec         = new Spec();
        $this->errors = $spec->errors();
    }

    /**
     * @covers \AmpProject\Validator\Spec\Section\Errors::get()
     */
    public function testGetByErrorName()
    {
        $error = $this->errors->get('DISALLOWED_TAG');

        $this->assertInstanceOf(Spec\Error::class, $error);
        $this->assertInstanceOf(Spec\Error\DisallowedTag::class, $error);
    }

    /**
     * @covers \AmpProject\Validator\Spec\Section\Errors::get()
     * @covers \AmpProject\Exception\InvalidErrorCode::forErrorCode()
     */
    public function testGetThrowsExceptionForUnknownErrorName()
    {
        $this->expectException(InvalidErrorCode::class);
        $this->errors->get('utter nonsense');
    }

    public function testGetThrowsExceptionForUnknownErrorCode()
    {
        $this->expectException(InvalidSpecRuleName::class);
        $error = $this->errors->get('DISALLOWED_TAG');
        $error->get('utter nonsense');
    }

    public function testIteration()
    {
        $this->assertGreaterThan(10, count($this->errors));
        foreach ($this->errors as $error) {
            $this->assertInstanceOf(Spec\Error::class, $error);
            $this->assertNotEmpty($error::SPEC);
        }
    }
}
