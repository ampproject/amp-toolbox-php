<?php

namespace AmpProject\Dom;

use AmpProject\Dom\Document\Option;
use AmpProject\Tests\TestCase;

/**
 * Tests for AmpProject\Dom\Options.
 *
 * @covers \AmpProject\Dom\Options
 * @package ampproject/amp-toolbox
 */
class OptionsTest extends TestCase
{
    /**
     * Test setting default options.
     *
     * @covers \AmpProject\Dom\Options::__construct()
     * @covers \AmpProject\Dom\Options::toArray()
     */
    public function testDefaultOptions()
    {
        $options        = new Options(Option::DEFAULTS);
        $defaultOptions = [
            'amp_bind_syntax'            => 'auto',
            'encoding'                   => null,
            'libxml_flags'               => 0,
            'check_encoding'             => false,
            'filter_html_entities'       => 'auto',
            'filter_html_entities_flags' => ENT_HTML5,
        ];

        $this->assertSame($options->toArray(), $defaultOptions);
    }

    /**
     * Test setter and getter methods.
     *
     * @covers \AmpProject\Dom\Options::offsetSet()
     * @covers \AmpProject\Dom\Options::offsetExists()
     * @covers \AmpProject\Dom\Options::offsetGet()
     */
    public function testSettingAndGettingNewOption()
    {
        $options = new Options([]);
        $options[Option::AMP_BIND_SYNTAX] = Option::AMP_BIND_SYNTAX_AUTO;

        $this->assertArrayHasKey(Option::AMP_BIND_SYNTAX, $options);
        $this->assertEquals(Option::AMP_BIND_SYNTAX_AUTO, $options[Option::AMP_BIND_SYNTAX]);
        $this->assertEquals(null, $options['invalid_option']);
    }

    /**
     * Test unsetting an option.
     *
     * @covers \AmpProject\Dom\Options::offsetUnset()
     */
    public function testUnsettingOption()
    {
        $options = new Options(Option::DEFAULTS);
        unset($options[Option::AMP_BIND_SYNTAX]);

        $this->assertArrayNotHasKey(Option::AMP_BIND_SYNTAX, $options);
    }
}
