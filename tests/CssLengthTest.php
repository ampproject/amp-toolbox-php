<?php

namespace AmpProject;

use AmpProject\Tests\TestCase;

/**
 * Tests for AmpProject\CssLength.
 *
 * @todo   This is only a stub and basic smoke test, more tests need to be added here, as the plugin didn't have any.
 *
 * @covers \AmpProject\CssLength
 * @package ampproject/amp-toolbox
 */
class CssLengthTest extends TestCase
{

    /**
     * Test instantiating empty CssLength.
     *
     * @covers \AmpProject\CssLength::__construct()
     * @covers \AmpProject\CssLength::isValid()
     * @covers \AmpProject\CssLength::isDefined()
     */
    public function testEmptyCssLengthIsValidButNotDefined()
    {
        $length = new CssLength(null);
        $this->assertTrue($length->isValid());
        $this->assertFalse($length->isDefined());
    }
}
