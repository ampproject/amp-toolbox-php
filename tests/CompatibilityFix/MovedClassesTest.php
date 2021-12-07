<?php

namespace AmpProject\CompatibilityFix;

use AmpProject\Tests\TestCase;

/**
 * Tests for AmpProject\CompatibilityFix\MovedClasses.
 *
 * @covers \AmpProject\CompatibilityFix\MovedClasses
 * @package ampproject/amp-toolbox
 */
class MovedClassesTest extends TestCase
{

    public function testClassAliasesExist()
    {
        foreach (MovedClasses::ALIASES as $old => $new) {
            $this->assertTrue(class_exists($old) || interface_exists($old));
        }
    }
}
