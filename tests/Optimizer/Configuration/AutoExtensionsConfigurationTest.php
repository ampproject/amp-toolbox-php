<?php

namespace AmpProject\Optimizer\Configuration;

use AmpProject\Exception\InvalidExtension;
use AmpProject\Format;
use AmpProject\Optimizer\Exception\InvalidConfigurationKey;
use AmpProject\Optimizer\Exception\InvalidConfigurationValue;
use AmpProject\Optimizer\Exception\UnknownConfigurationKey;
use AmpProject\Optimizer\TransformerConfiguration;
use AmpProject\Tests\TestCase;

/**
 * Test the AutoExtensionsConfiguration.
 *
 * @package ampproject/amp-toolbox
 */
final class AutoExtensionsConfigurationTest extends TestCase
{
    public function testDefaults()
    {
        $configuration = new AutoExtensionsConfiguration([]);
        $this->assertInstanceOf(TransformerConfiguration::class, $configuration);
        $this->assertEquals(Format::AMP, $configuration->get('format'));
        $this->assertEquals(Format::AMP, $configuration->format);
        $this->assertEquals(true, $configuration->get('autoExtensionImport'));
        $this->assertEquals(true, $configuration->autoExtensionImport);
        $this->assertEquals(false, $configuration->get('experimentBindAttribute'));
        $this->assertEquals(false, $configuration->experimentBindAttribute);
        $this->assertEquals([], $configuration->get('extensionVersions'));
        $this->assertEquals([], $configuration->extensionVersions);
        $this->assertEquals([], $configuration->get('ignore'));
        $this->assertEquals([], $configuration->ignore);
        $this->assertEquals(
            [
                'format'                  => Format::AMP,
                'autoExtensionImport'     => true,
                'experimentBindAttribute' => false,
                'extensionVersions'       => [],
                'ignore'                  => [],
            ],
            $configuration->toArray()
        );
    }

    public function testInitialization()
    {
        $configuration = new AutoExtensionsConfiguration([
            'format'                  => Format::AMP4EMAIL,
            'autoExtensionImport'     => false,
            'experimentBindAttribute' => true,
            'extensionVersions'       => [ 'amp-sticky-ad' => '0.1' ],
            'ignore'                  => [ 'amp-form' ],
        ]);
        $this->assertInstanceOf(TransformerConfiguration::class, $configuration);
        $this->assertEquals(Format::AMP4EMAIL, $configuration->get('format'));
        $this->assertEquals(Format::AMP4EMAIL, $configuration->format);
        $this->assertEquals(false, $configuration->get('autoExtensionImport'));
        $this->assertEquals(false, $configuration->autoExtensionImport);
        $this->assertEquals(true, $configuration->get('experimentBindAttribute'));
        $this->assertEquals(true, $configuration->experimentBindAttribute);
        $this->assertEquals([ 'amp-sticky-ad' => '0.1' ], $configuration->get('extensionVersions'));
        $this->assertEquals([ 'amp-sticky-ad' => '0.1' ], $configuration->extensionVersions);
        $this->assertEquals([ 'amp-form' ], $configuration->get('ignore'));
        $this->assertEquals([ 'amp-form' ], $configuration->ignore);
        $this->assertEquals(
            [
                'format'                  => Format::AMP4EMAIL,
                'autoExtensionImport'     => false,
                'experimentBindAttribute' => true,
                'extensionVersions'       => [ 'amp-sticky-ad' => '0.1' ],
                'ignore'                  => [ 'amp-form' ],
            ],
            $configuration->toArray()
        );
    }

    public function testThrowsOnInvalidKey()
    {
        $this->expectException(InvalidConfigurationKey::class);
        $this->expectExceptionMessage(
            "The provided configuration key 'nonsense' is not valid for the transformer 'AutoExtensionsConfiguration'."
        );
        new AutoExtensionsConfiguration(['nonsense'  => 'value']);
    }

    public function dataThrowsOnBadValueType()
    {
        return [
            ['format', true, 'string', 'boolean'],
            ['autoExtensionImport', 'nonsense', 'boolean', 'string'],
            ['experimentBindAttribute', 'nonsense', 'boolean', 'string'],
            ['extensionVersions', 'nonsense', 'array', 'string'],
            ['ignore', 'nonsense', 'array', 'string'],
        ];
    }

    /**
     * @dataProvider dataThrowsOnBadValueType()
     */
    public function testThrowsOnBadValueType($key, $value, $expectedType, $actualType)
    {
        $this->expectException(InvalidConfigurationValue::class);
        $this->expectExceptionMessage(
            sprintf(
                'The configuration value \'%s\' for the key \'%s\' expected a value of type \'%s\', got \'%s\' instead.',
                $key,
                AutoExtensionsConfiguration::class,
                $expectedType,
                $actualType
            )
        );

        new AutoExtensionsConfiguration([$key  => $value]);
    }

    public function testThrowsOnUnknownKeyViaGetter()
    {
        $this->expectException(UnknownConfigurationKey::class);
        $this->expectExceptionMessage(
            "The configuration of the transformer 'AutoExtensionsConfiguration' does not contain the requested key 'nonsense'."
        );
        $configuration = new AutoExtensionsConfiguration([]);
        $configuration->get('nonsense');
    }

    public function testThrowsOnUnknownKeyViaMagicMethod()
    {
        $this->expectError();
        $this->expectErrorMessage(
            'Undefined property: AmpProject\Optimizer\Configuration\AutoExtensionsConfiguration::$nonsense'
        );
        $configuration = new AutoExtensionsConfiguration([]);
        $configuration->nonsense;
    }

    public function testInvalidConfigurationValueForUnknownAMPFormat()
    {
        $this->expectException(InvalidConfigurationValue::class);
        $this->expectExceptionMessage(
            sprintf(
                "The configuration value '%s' for the key '%s' expected the value to be one of [%s], got '%s' instead.",
                'format',
                AutoExtensionsConfiguration::class,
                'AMP, AMP4ADS, AMP4EMAIL',
                'invalid'
            )
        );
        new AutoExtensionsConfiguration(['format' => 'invalid']);
    }

    public function testInvalidInvalidExtensionSetInIgnoreList()
    {
        $this->expectException(InvalidExtension::class);
        $this->expectExceptionMessage("Invalid extension 'foo-bar' was requested from the validator spec.");
        new AutoExtensionsConfiguration(['ignore' => ['amp-story', 'foo-bar', 'fizz-buzz']]);
    }
}
