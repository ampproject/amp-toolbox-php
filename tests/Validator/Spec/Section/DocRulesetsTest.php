<?php

namespace AmpProject\Validator\Spec\Section;

use AmpProject\Exception\InvalidDocRulesetName;
use AmpProject\Exception\InvalidFormat;
use AmpProject\Format;
use AmpProject\Tests\TestCase;
use AmpProject\Validator\Spec;

/**
 * Tests for AmpProject\Validator\Spec\Section\DocRulesets.
 *
 * @covers  \AmpProject\Validator\Spec\Section\DocRulesets
 * @package ampproject/amp-toolbox
 */
class DocRulesetsTest extends TestCase
{
    /** @var DocRulesets */
    private $docRulesets;

    /**
     * Sets up the fixture, for example, open a network connection.
     *
     * This method is called before each test.
     *
     * @return void
     */
    protected function set_up()
    {
        parent::set_up();
        $spec              = new Spec();
        $this->docRulesets = $spec->docRulesets();
    }

    /**
     * @covers \AmpProject\Validator\Spec\Section\DocRulesets::get()
     */
    public function testGet()
    {
        $ruleSet = $this->docRulesets->get('AMP4EMAIL');
        $this->assertInstanceOf(Spec\DocRuleset::class, $ruleSet);
    }

    /**
     * @covers \AmpProject\Validator\Spec\Section\DocRulesets::get()
     * @covers \AmpProject\Exception\InvalidDocRulesetName::forDocRulesetName()
     */
    public function testGetThrowsExceptionForUnknownName()
    {
        $this->expectException(InvalidDocRulesetName::class);
        $this->docRulesets->get('utter nonsense');
    }

    /**
     * @covers \AmpProject\Validator\Spec\Section\DocRulesets::byFormat()
     */
    public function testByFormat()
    {
        $ruleSets = $this->docRulesets->byFormat(Format::AMP4EMAIL);
        $this->assertIsArray($ruleSets);
        $this->assertCount(1, $ruleSets);
        foreach ($ruleSets as $ruleSet) {
            $this->assertInstanceOf(Spec\DocRuleset::class, $ruleSet);
        }
    }

    /**
     * @covers \AmpProject\Validator\Spec\Section\DocRulesets::byFormat()
     * @covers \AmpProject\Exception\InvalidFormat::forFormat()
     */
    public function testByFormatThrowsExceptionForUnknownFormat()
    {
        $this->expectException(InvalidFormat::class);
        $this->docRulesets->byFormat('utter nonsense');
    }

    public function testIteration()
    {
        $this->assertGreaterThan(0, count($this->docRulesets));
        foreach ($this->docRulesets as $docRuleset) {
            $this->assertInstanceOf(Spec\DocRuleset::class, $docRuleset);
            $this->assertInstanceOf(Spec\Identifiable::class, $docRuleset);
            $this->assertNotEmpty($docRuleset::SPEC);
        }
    }
}
