<?php

namespace AmpProject\Validator\Spec\Section;

use AmpProject\Exception\InvalidCssName;
use AmpProject\Exception\InvalidFormat;
use AmpProject\Format;
use AmpProject\Tests\TestCase;
use AmpProject\Validator\Spec;

/**
 * Tests for AmpProject\Validator\Spec\Section\Css.
 *
 * @covers  \AmpProject\Validator\Spec\Section\Css
 * @package ampproject/amp-toolbox
 */
class CssTest extends TestCase
{
    /** @var Css */
    private $css;

    public function __construct()
    {
        parent::__construct();
        $spec      = new Spec();
        $this->css = $spec->css();
    }

    public function testGetByName()
    {
        $ruleSet = $this->css->getByName('AMP (no-transformed)');
        $this->assertIsArray($ruleSet);
        $this->assertArrayHasKey('allowImportant', $ruleSet);
    }

    public function testGetThrowsExceptionForUnknownName()
    {
        $this->expectException(InvalidCssName::class);
        $this->css->getByName('utter nonsense');
    }

    public function testGetByFormat()
    {
        $ruleSets = $this->css->getByFormat(Format::AMP);
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
        $this->css->getByFormat('utter nonsense');
    }
}
