<?php

namespace AmpProject\Optimizer\Configuration;

use AmpProject\Amp;
use AmpProject\Optimizer\Exception\InvalidConfigurationKey;
use AmpProject\Optimizer\Exception\InvalidConfigurationValue;
use AmpProject\Optimizer\Exception\UnknownConfigurationKey;
use AmpProject\Optimizer\TransformerConfiguration;
use AmpProject\Tests\TestCase;
use stdClass;

/**
 * Test the AmpBoilerplate transformer.
 *
 * @covers \AmpProject\Optimizer\Configuration\RewriteAmpUrlsConfiguration
 * @package ampproject/amp-toolbox
 */
final class RewriteAmpUrlsConfigurationTest extends TestCase
{

    public function testDefaults()
    {
        $configuration = new RewriteAmpUrlsConfiguration([]);
        $this->assertInstanceOf(TransformerConfiguration::class, $configuration);
        $this->assertEquals('', $configuration->get('ampRuntimeVersion'));
        $this->assertEquals('', $configuration->ampRuntimeVersion);
        $this->assertEquals(Amp::CACHE_HOST, $configuration->get('ampUrlPrefix'));
        $this->assertEquals(Amp::CACHE_HOST, $configuration->ampUrlPrefix);
        $this->assertTrue($configuration->get('esmModulesEnabled'));
        $this->assertTrue($configuration->esmModulesEnabled);
        $this->assertEquals('', $configuration->get('geoApiUrl'));
        $this->assertEquals('', $configuration->geoApiUrl);
        $this->assertFalse($configuration->get('lts'));
        $this->assertFalse($configuration->lts);
        $this->assertFalse($configuration->get('rtv'));
        $this->assertFalse($configuration->rtv);
    }

    public function testInitialization()
    {
        $configuration = new RewriteAmpUrlsConfiguration(
            [
                'ampRuntimeVersion' => '123',
                'ampUrlPrefix'      => 'amp/',
                'esmModulesEnabled' => false,
                'geoApiUrl'         => 'example.com/api',
                'lts'               => true,
                'rtv'               => true,
            ]
        );
        $this->assertInstanceOf(TransformerConfiguration::class, $configuration);
        $this->assertEquals('123', $configuration->get('ampRuntimeVersion'));
        $this->assertEquals('123', $configuration->ampRuntimeVersion);
        $this->assertEquals('amp/', $configuration->get('ampUrlPrefix'));
        $this->assertEquals('amp/', $configuration->ampUrlPrefix);
        $this->assertFalse($configuration->get('esmModulesEnabled'));
        $this->assertFalse($configuration->esmModulesEnabled);
        $this->assertEquals('example.com/api', $configuration->get('geoApiUrl'));
        $this->assertEquals('example.com/api', $configuration->geoApiUrl);
        $this->assertTrue($configuration->get('lts'));
        $this->assertTrue($configuration->lts);
        $this->assertTrue($configuration->get('rtv'));
        $this->assertTrue($configuration->rtv);
    }

    public function testThrowsOnInvalidKey()
    {
        $this->expectException(InvalidConfigurationKey::class);
        $this->expectExceptionMessage(
            "The provided configuration key 'nonsense' is not valid for the transformer 'RewriteAmpUrlsConfiguration'."
        );
        new RewriteAmpUrlsConfiguration(['nonsense'  => 'value']);
    }

    public function dataThrowsOnBadValueType()
    {
        return [
            ['ampRuntimeVersion', false, 'string', 'boolean'],
            ['ampUrlPrefix', false, 'string', 'boolean'],
            ['esmModulesEnabled', new stdClass(), 'boolean', 'stdClass'],
            ['geoApiUrl', 42, 'string', 'integer'],
            ['lts', 'nonsense', 'boolean', 'string'],
            ['rtv', new stdClass(), 'boolean', 'stdClass'],
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
                RewriteAmpUrlsConfiguration::class,
                $expectedType,
                $actualType
            )
        );

        new RewriteAmpUrlsConfiguration([$key  => $value]);
    }

    public function testThrowsOnUnknownKeyViaGetter()
    {
        $this->expectException(UnknownConfigurationKey::class);
        $this->expectExceptionMessage(
            "The configuration of the transformer 'RewriteAmpUrlsConfiguration' does not contain the requested key 'nonsense'."
        );
        $configuration = new RewriteAmpUrlsConfiguration([]);
        $configuration->get('nonsense');
    }

    public function testThrowsOnUnknownKeyViaMagicMethod()
    {
        $this->expectError();
        $this->expectErrorMessage(
            'Undefined property: AmpProject\Optimizer\Configuration\RewriteAmpUrlsConfiguration::$nonsense'
        );
        $configuration = new RewriteAmpUrlsConfiguration([]);
        $configuration->nonsense;
    }
}
