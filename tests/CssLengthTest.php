<?php

namespace AmpProject\Common;

use AmpProject\CssLength;
use AmpProject\Tests\TestCase;

/**
 * Tests for AmpProject\CssLength.
 *
 * @todo   This is only a stub and basic smoke test, more tests need to be added here, as the plugin didn't have any.
 *
 * @covers CssLength
 * @package ampproject/amp-toolbox
 */
class CssLengthTest extends TestCase
{

    /**
     * Test instantiating empty CssLength.
     *
     * @covers CssLength::__construct()
     * @covers CssLength::isValid()
     * @covers CssLength::isDefined()
     */
    public function testEmptyCssLengthIsValidButNotDefined()
    {
        $length = new CssLength(null);
        $this->assertTrue($length->isValid());
        $this->assertFalse($length->isDefined());
    }
}
