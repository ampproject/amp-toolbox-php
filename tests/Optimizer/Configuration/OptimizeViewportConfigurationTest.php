<?php

namespace AmpProject\Optimizer\Configuration;

use AmpProject\Optimizer\Configuration\OptimizeViewportConfiguration;
use AmpProject\Optimizer\Exception\InvalidConfigurationKey;
use AmpProject\Optimizer\Exception\InvalidConfigurationValue;
use AmpProject\Optimizer\Exception\UnknownConfigurationKey;
use AmpProject\Optimizer\TransformerConfiguration;
use AmpProject\Tests\TestCase;

/**
 * Test the OptimizeViewportConfiguration.
 *
 * @package ampproject/amp-toolbox
 */
final class OptimizeViewportConfigurationTest extends TestCase
{
    public function testDefaults()
    {
        $configuration = new OptimizeViewportConfiguration([]);
        $this->assertInstanceOf(TransformerConfiguration::class, $configuration);
        $this->assertEquals(true, $configuration->get('removeInitialScaleViewportProperty'));
        $this->assertEquals(true, $configuration->removeInitialScaleViewportProperty);
        $this->assertEquals(
            [
                'removeInitialScaleViewportProperty' => true,
            ],
            $configuration->toArray()
        );
    }

    public function testInitialization()
    {
        $configuration = new OptimizeViewportConfiguration([
            'removeInitialScaleViewportProperty' => false,
        ]);
        $this->assertInstanceOf(TransformerConfiguration::class, $configuration);
        $this->assertEquals(false, $configuration->get('removeInitialScaleViewportProperty'));
        $this->assertEquals(false, $configuration->removeInitialScaleViewportProperty);
        $this->assertEquals(
            [
                'removeInitialScaleViewportProperty' => false,
            ],
            $configuration->toArray()
        );
    }

    public function testThrowsOnInvalidKey()
    {
        $this->expectException(InvalidConfigurationKey::class);
        $this->expectExceptionMessage(
            "The provided configuration key 'nonsense' is not valid for the transformer 'OptimizeViewportConfiguration'."
        );
        new OptimizeViewportConfiguration(['nonsense'  => 'value']);
    }

    public function dataThrowsOnBadValueType()
    {
        return [
            ['removeInitialScaleViewportProperty', 'nonsense', 'boolean', 'string'],
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
                OptimizeViewportConfiguration::class,
                $expectedType,
                $actualType
            )
        );

        new OptimizeViewportConfiguration([$key  => $value]);
    }

    public function testThrowsOnUnknownKeyViaGetter()
    {
        $this->expectException(UnknownConfigurationKey::class);
        $this->expectExceptionMessage(
            "The configuration of the transformer 'OptimizeViewportConfiguration' does not contain the requested key 'nonsense'."
        );
        $configuration = new OptimizeViewportConfiguration([]);
        $configuration->get('nonsense');
    }

    public function testThrowsOnUnknownKeyViaMagicMethod()
    {
        $this->expectError();
        $this->expectErrorMessage(
            'Undefined property: AmpProject\Optimizer\Configuration\OptimizeViewportConfiguration::$nonsense'
        );
        $configuration = new OptimizeViewportConfiguration([]);
        $configuration->nonsense;
    }
}
