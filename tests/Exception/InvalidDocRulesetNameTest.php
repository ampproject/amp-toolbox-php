<?php

namespace AmpProject\Exception;

use AmpProject\Tests\TestCase;

/**
 * Test the InvalidDocRulesetName exception.
 *
 * @covers \AmpProject\Exception\InvalidDocRulesetName
 * @package ampproject/amp-toolbox
 */
class InvalidDocRulesetNameTest extends TestCase
{

    /**
     * Test throwing the exception for a document ruleset name.
     */
    public function testThrowingForDocRulesetName()
    {
        $this->expectException(InvalidDocRulesetName::class);
        $this->expectExceptionMessage("Invalid document ruleset name 'docName' was requested from the validator spec.");

        throw InvalidDocRulesetName::forDocRulesetName('docName');
    }
}
