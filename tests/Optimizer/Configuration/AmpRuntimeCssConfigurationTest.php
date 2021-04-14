<?php

namespace AmpProject\Optimizer\Configuration;

use AmpProject\Optimizer\Exception\InvalidConfigurationKey;
use AmpProject\Optimizer\Exception\InvalidConfigurationValue;
use AmpProject\Optimizer\Exception\UnknownConfigurationKey;
use AmpProject\Optimizer\TransformerConfiguration;
use AmpProject\Tests\TestCase;
use stdClass;

/**
 * Test the AmpBoilerplate transformer.
 *
 * @covers \AmpProject\Optimizer\Configuration\AmpRuntimeCssConfiguration
 * @package ampproject/amp-toolbox
 */
final class AmpRuntimeCssConfigurationTest extends TestCase
{

    public function testDefaults()
    {
        $configuration = new AmpRuntimeCssConfiguration([]);
        $this->assertInstanceOf(TransformerConfiguration::class, $configuration);
        $this->assertFalse($configuration->get('canary'));
        $this->assertFalse($configuration->canary);
        $this->assertEquals('', $configuration->get('styles'));
        $this->assertEquals('', $configuration->styles);
        $this->assertEquals('', $configuration->get('version'));
        $this->assertEquals('', $configuration->version);
        $this->assertEquals(
            [
                'canary'  => false,
                'styles'  => '',
                'version' => '',
            ],
            $configuration->toArray()
        );
    }

    public function testInitialization()
    {
        $configuration = new AmpRuntimeCssConfiguration(
            [
                'canary'  => true,
                'styles'  => 'h1: red;',
                'version' => '1.0',
            ]
        );
        $this->assertInstanceOf(TransformerConfiguration::class, $configuration);
        $this->assertTrue($configuration->get('canary'));
        $this->assertTrue($configuration->canary);
        $this->assertEquals('h1: red;', $configuration->get('styles'));
        $this->assertEquals('h1: red;', $configuration->styles);
        $this->assertEquals('1.0', $configuration->get('version'));
        $this->assertEquals('1.0', $configuration->version);
        $this->assertEquals(
            [
                'canary'  => true,
                'styles'  => 'h1: red;',
                'version' => '1.0',
            ],
            $configuration->toArray()
        );
    }

    public function testThrowsOnInvalidKey()
    {
        $this->expectException(InvalidConfigurationKey::class);
        $this->expectExceptionMessage(
            "The provided configuration key 'nonsense' is not valid for the transformer 'AmpRuntimeCssConfiguration'."
        );
        new AmpRuntimeCssConfiguration(['nonsense'  => 'value']);
    }

    public function dataThrowsOnBadValueType()
    {
        return [
            ['canary', '42', 'boolean', 'string'],
            ['styles', false, 'string', 'boolean'],
            ['version', new stdClass(), 'string', 'stdClass'],
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
                AmpRuntimeCssConfiguration::class,
                $expectedType,
                $actualType
            )
        );

        new AmpRuntimeCssConfiguration([$key  => $value]);
    }

    public function testThrowsOnUnknownKeyViaGetter()
    {
        $this->expectException(UnknownConfigurationKey::class);
        $this->expectExceptionMessage(
            "The configuration of the transformer 'AmpRuntimeCssConfiguration' does not contain the requested key 'nonsense'."
        );
        $configuration = new AmpRuntimeCssConfiguration([]);
        $configuration->get('nonsense');
    }

    public function testThrowsOnUnknownKeyViaMagicMethod()
    {
        $this->expectError();
        $this->expectErrorMessage(
            'Undefined property: AmpProject\Optimizer\Configuration\AmpRuntimeCssConfiguration::$nonsense'
        );
        $configuration = new AmpRuntimeCssConfiguration([]);
        $configuration->nonsense;
    }
}
