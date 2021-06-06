<?php

namespace AmpProject\Validator\Spec\Section;

use AmpProject\Exception\InvalidCssRulesetName;
use AmpProject\Exception\InvalidFormat;
use AmpProject\Format;
use AmpProject\Tests\TestCase;
use AmpProject\Validator\Spec;

/**
 * Tests for AmpProject\Validator\Spec\Section\CssRulesets.
 *
 * @covers  \AmpProject\Validator\Spec\Section\CssRulesets
 * @package ampproject/amp-toolbox
 */
class CssSpecRulesTest extends TestCase
{
    /** @var CssRulesets */
    private $cssRulesets;

    public function __construct()
    {
        parent::__construct();
        $spec              = new Spec();
        $this->cssRulesets = $spec->cssRulesets();
    }

    /**
     * @covers \AmpProject\Validator\Spec\Section\CssRulesets::get()
     */
    public function testGet()
    {
        $ruleSet = $this->cssRulesets->get('AMP (no-transformed)');
        $this->assertInstanceOf(Spec\CssRuleset::class, $ruleSet);
    }

    /**
     * @covers \AmpProject\Validator\Spec\Section\CssRulesets::get()
     * @covers \AmpProject\Exception\InvalidCssRulesetName::forCssRulesetName()
     */
    public function testGetThrowsExceptionForUnknownName()
    {
        $this->expectException(InvalidCssRulesetName::class);
        $this->cssRulesets->get('utter nonsense');
    }

    /**
     * @covers \AmpProject\Validator\Spec\Section\CssRulesets::byFormat()
     */
    public function testByFormat()
    {
        $ruleSets = $this->cssRulesets->byFormat(Format::AMP);
        $this->assertIsArray($ruleSets);
        $this->assertCount(2, $ruleSets);
        foreach ($ruleSets as $ruleSet) {
            $this->assertInstanceOf(Spec\CssRuleset::class, $ruleSet);
        }
    }

    /**
     * @covers \AmpProject\Validator\Spec\Section\CssRulesets::byFormat()
     * @covers \AmpProject\Exception\InvalidFormat::forFormat()
     */
    public function testByFormatThrowsExceptionForUnknownFormat()
    {
        $this->expectException(InvalidFormat::class);
        $this->cssRulesets->byFormat('utter nonsense');
    }

    public function testIteration()
    {
        $this->assertGreaterThan(4, count($this->cssRulesets));
        foreach ($this->cssRulesets as $cssRuleset) {
            $this->assertInstanceOf(Spec\CssRuleset::class, $cssRuleset);
            $this->assertInstanceOf(Spec\Identifiable::class, $cssRuleset);
            $this->assertNotEmpty($cssRuleset::SPEC);
        }
    }
}
