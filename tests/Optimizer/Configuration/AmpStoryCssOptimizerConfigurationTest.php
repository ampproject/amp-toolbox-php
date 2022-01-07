<?php

namespace AmpProject\Optimizer\Configuration;

use AmpProject\Optimizer\Configuration\AmpStoryCssOptimizerConfiguration;
use AmpProject\Optimizer\Exception\InvalidConfigurationKey;
use AmpProject\Optimizer\Exception\InvalidConfigurationValue;
use AmpProject\Optimizer\Exception\UnknownConfigurationKey;
use AmpProject\Optimizer\TransformerConfiguration;
use AmpProject\Tests\TestCase;

/**
 * Test the AmpStoryCssOptimizerConfiguration.
 *
 * @covers \AmpProject\Optimizer\Configuration\AmpStoryCssOptimizerConfiguration
 * @covers \AmpProject\Optimizer\Configuration\BaseTransformerConfiguration
 * @package ampproject/amp-toolbox
 */
final class AmpStoryCssOptimizerConfigurationTest extends TestCase
{
    public function testDefaults()
    {
        $configuration = new AmpStoryCssOptimizerConfiguration([]);
        $this->assertInstanceOf(TransformerConfiguration::class, $configuration);
        $this->assertFalse($configuration->get('optimizeAmpStory'));
        $this->assertFalse($configuration->optimizeAmpStory);
        $this->assertEquals(
            [
                'optimizeAmpStory' => false,
            ],
            $configuration->toArray()
        );
    }

    public function testInitialization()
    {
        $configuration = new AmpStoryCssOptimizerConfiguration([
            'optimizeAmpStory' => true,
        ]);
        $this->assertInstanceOf(TransformerConfiguration::class, $configuration);
        $this->assertTrue($configuration->get('optimizeAmpStory'));
        $this->assertTrue($configuration->optimizeAmpStory);
        $this->assertEquals(
            [
                'optimizeAmpStory' => true,
            ],
            $configuration->toArray()
        );
    }

    public function testThrowsOnInvalidKey()
    {
        $this->expectException(InvalidConfigurationKey::class);
        $this->expectExceptionMessage(
            "The provided configuration key 'nonsense' is not valid for the transformer 'AmpStoryCssOptimizerConfiguration'."
        );
        new AmpStoryCssOptimizerConfiguration(['nonsense'  => 'value']);
    }

    public function dataThrowsOnBadValueType()
    {
        return [
            ['optimizeAmpStory', 'nonsense', 'boolean', 'string'],
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
                AmpStoryCssOptimizerConfiguration::class,
                $expectedType,
                $actualType
            )
        );

        new AmpStoryCssOptimizerConfiguration([$key  => $value]);
    }

    public function testThrowsOnUnknownKeyViaGetter()
    {
        $this->expectException(UnknownConfigurationKey::class);
        $this->expectExceptionMessage(
            "The configuration of the transformer 'AmpStoryCssOptimizerConfiguration' does not contain the requested key 'nonsense'."
        );
        $configuration = new AmpStoryCssOptimizerConfiguration([]);
        $configuration->get('nonsense');
    }

    public function testThrowsOnUnknownKeyViaMagicMethod()
    {
        $this->expectError();
        $this->expectErrorMessage(
            'Undefined property: AmpProject\Optimizer\Configuration\AmpStoryCssOptimizerConfiguration::$nonsense'
        );
        $configuration = new AmpStoryCssOptimizerConfiguration([]);
        $configuration->nonsense;
    }
}
