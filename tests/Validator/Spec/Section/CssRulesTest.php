<?php

namespace AmpProject\Validator\Spec\Section;

use AmpProject\Exception\InvalidCssRulesName;
use AmpProject\Exception\InvalidFormat;
use AmpProject\Format;
use AmpProject\Tests\TestCase;
use AmpProject\Validator\Spec;

/**
 * Tests for AmpProject\Validator\Spec\Section\CssRules.
 *
 * @covers  \AmpProject\Validator\Spec\Section\CssRules
 * @package ampproject/amp-toolbox
 */
class CssRulesTest extends TestCase
{
    /** @var CssRules */
    private $cssRules;

    public function __construct()
    {
        parent::__construct();
        $spec           = new Spec();
        $this->cssRules = $spec->cssRules();
    }

    public function testGetByName()
    {
        $ruleSet = $this->cssRules->getByName('AMP (no-transformed)');
        $this->assertIsArray($ruleSet);
        $this->assertArrayHasKey('allowImportant', $ruleSet);
    }

    public function testGetThrowsExceptionForUnknownName()
    {
        $this->expectException(InvalidCssRulesName::class);
        $this->cssRules->getByName('utter nonsense');
    }

    public function testGetByFormat()
    {
        $ruleSets = $this->cssRules->getByFormat(Format::AMP);
        $this->assertIsArray($ruleSets);
        $this->assertCount(2, $ruleSets);
        foreach ($ruleSets as $ruleSet) {
            $this->assertIsArray($ruleSet);
            $this->assertArrayHasKey('allowImportant', $ruleSet);
        }
    }

    public function testGetThrowsExceptionForUnknownFormat()
    {
        $this->expectException(InvalidFormat::class);
        $this->cssRules->getByFormat('utter nonsense');
    }
}
