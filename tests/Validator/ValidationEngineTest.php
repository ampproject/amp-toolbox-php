<?php

namespace AmpProject\Validator;

use AmpProject\Tests\TestCase;

/**
 * Tests for AmpProject\Validator\ValidationEngine.
 *
 * @covers  \AmpProject\Validator\ValidationEngine
 * @package ampproject/amp-toolbox
 */
class ValidationEngineTest extends TestCase
{

    public function testValidateHtml()
    {
        $html = '<h1>Testing!</h1>';
        $engine = new ValidationEngine();
        $result = $engine->validateHtml($html);

        $this->assertEquals(0, $result->getStatus()->asInt());
        $this->assertEquals('UNKNOWN', $result->getStatus()->asString());
        $this->assertEquals('UNKNOWN', (string)$result->getStatus());
    }
}
