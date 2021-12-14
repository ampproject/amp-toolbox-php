<?php

namespace AmpProject\Exception;

use AmpProject\Tests\TestCase;

/**
 * Test the InvalidCssName exception.
 *
 * @covers \AmpProject\Exception\InvalidCssRulesetName
 * @package ampproject/amp-toolbox
 */
class InvalidCssRulesetNameTest extends TestCase
{
    /**
     * Test throwing the exception for a CSS name.
     */
    public function testThrowingForCssName()
    {
        $this->expectException(InvalidCssRulesetName::class);
        $this->expectExceptionMessage("Invalid CSS ruleset name 'cssName' was requested from the validator spec.");

        throw InvalidCssRulesetName::forCssRulesetName('cssName');
    }
}
