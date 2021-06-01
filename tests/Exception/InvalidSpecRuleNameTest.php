<?php

namespace AmpProject\Exception;

use AmpProject\Tests\TestCase;

/**
 * Test the InvalidSpecRuleName exception.
 *
 * @covers \AmpProject\Exception\InvalidSpecRuleName
 * @package ampproject/amp-toolbox
 */
class InvalidSpecRuleNameTest extends TestCase
{

    /**
     * Test throwing the exception for a spec rule name.
     */
    public function testThrowingForSpecRuleName()
    {
        $this->expectException(InvalidSpecRuleName::class);
        $this->expectExceptionMessage("Invalid spec rule name 'specRuleName' was requested from the validator spec.");

        throw InvalidSpecRuleName::forSpecRuleName('specRuleName');
    }
}
