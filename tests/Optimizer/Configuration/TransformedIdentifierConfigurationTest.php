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
 * @covers \AmpProject\Optimizer\Configuration\TransformedIdentifierConfiguration
 * @package ampproject/amp-toolbox
 */
final class TransformedIdentifierConfigurationTest extends TestCase
{

    public function testDefaults()
    {
        $configuration = new TransformedIdentifierConfiguration([]);
        $this->assertInstanceOf(TransformerConfiguration::class, $configuration);
        $this->assertEquals(1, $configuration->get('version'));
        $this->assertEquals(1, $configuration->version);
        $this->assertEquals(['version' => 1], $configuration->toArray());
    }

    public function testInitialization()
    {
        $configuration = new TransformedIdentifierConfiguration(
            [
                'version' => 5,
            ]
        );
        $this->assertInstanceOf(TransformerConfiguration::class, $configuration);
        $this->assertEquals(5, $configuration->get('version'));
        $this->assertEquals(5, $configuration->version);
        $this->assertEquals(['version' => 5], $configuration->toArray());
    }

    public function testThrowsOnInvalidKey()
    {
        $this->expectException(InvalidConfigurationKey::class);
        $this->expectExceptionMessage(
            "The provided configuration key 'nonsense' is not valid for the transformer 'TransformedIdentifierConfiguration'."
        );
        new TransformedIdentifierConfiguration(['nonsense'  => 'value']);
    }

    public function dataThrowsOnBadValueType()
    {
        return [
            ['version', false, 'integer', 'boolean'],
            ['version', new stdClass(), 'integer', 'stdClass'],
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
                TransformedIdentifierConfiguration::class,
                $expectedType,
                $actualType
            )
        );

        new TransformedIdentifierConfiguration([$key  => $value]);
    }

    public function testThrowsOnUnknownKeyViaGetter()
    {
        $this->expectException(UnknownConfigurationKey::class);
        $this->expectExceptionMessage(
            "The configuration of the transformer 'TransformedIdentifierConfiguration' does not contain the requested key 'nonsense'."
        );
        $configuration = new TransformedIdentifierConfiguration([]);
        $configuration->get('nonsense');
    }

    public function testThrowsOnUnknownKeyViaMagicMethod()
    {
        $this->expectError();
        $this->expectErrorMessage(
            'Undefined property: AmpProject\Optimizer\Configuration\TransformedIdentifierConfiguration::$nonsense'
        );
        $configuration = new TransformedIdentifierConfiguration([]);
        $configuration->nonsense;
    }
}
