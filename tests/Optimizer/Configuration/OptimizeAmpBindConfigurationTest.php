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
 * @covers \AmpProject\Optimizer\Configuration\OptimizeAmpBindConfiguration
 * @covers \AmpProject\Optimizer\Configuration\BaseTransformerConfiguration
 * @package ampproject/amp-toolbox
 */
final class OptimizeAmpBindConfigurationTest extends TestCase
{

    public function testDefaults()
    {
        $configuration = new OptimizeAmpBindConfiguration([]);
        $this->assertInstanceOf(TransformerConfiguration::class, $configuration);
        $this->assertTrue($configuration->get('enabled'));
        $this->assertTrue($configuration->enabled);
        $this->assertEquals(
            [
                'enabled' => true,
            ],
            $configuration->toArray()
        );
    }

    public function testInitialization()
    {
        $configuration = new OptimizeAmpBindConfiguration(
            [
                'enabled' => false,
            ]
        );
        $this->assertInstanceOf(TransformerConfiguration::class, $configuration);
        $this->assertFalse($configuration->get('enabled'));
        $this->assertFalse($configuration->enabled);
        $this->assertEquals(
            [
                'enabled' => false,
            ],
            $configuration->toArray()
        );
    }

    public function testThrowsOnInvalidKey()
    {
        $this->expectException(InvalidConfigurationKey::class);
        $this->expectExceptionMessage(
            "The provided configuration key 'nonsense' is not valid for the transformer 'OptimizeAmpBindConfiguration'."
        );
        new OptimizeAmpBindConfiguration(['nonsense'  => 'value']);
    }

    public function dataThrowsOnBadValueType()
    {
        return [
            ['enabled', '42', 'boolean', 'string'],
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
                OptimizeAmpBindConfiguration::class,
                $expectedType,
                $actualType
            )
        );

        new OptimizeAmpBindConfiguration([$key  => $value]);
    }

    public function testThrowsOnUnknownKeyViaGetter()
    {
        $this->expectException(UnknownConfigurationKey::class);
        $this->expectExceptionMessage(
            "The configuration of the transformer 'OptimizeAmpBindConfiguration' does not contain the requested key 'nonsense'."
        );
        $configuration = new OptimizeAmpBindConfiguration([]);
        $configuration->get('nonsense');
    }

    public function testThrowsOnUnknownKeyViaMagicMethod()
    {
        $this->expectError();
        $this->expectErrorMessage(
            'Undefined property: AmpProject\Optimizer\Configuration\OptimizeAmpBindConfiguration::$nonsense'
        );
        $configuration = new OptimizeAmpBindConfiguration([]);
        $configuration->nonsense;
    }
}
