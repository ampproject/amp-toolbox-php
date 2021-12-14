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
        foreach (array_keys(MovedClasses::ALIASES) as $old) {
            $this->assertTrue(class_exists($old) || interface_exists($old));
        }
    }
}
