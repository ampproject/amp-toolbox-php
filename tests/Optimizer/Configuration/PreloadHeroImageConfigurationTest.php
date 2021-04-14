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
 * @covers \AmpProject\Optimizer\Configuration\PreloadHeroImageConfiguration
 * @covers \AmpProject\Optimizer\Configuration\BaseTransformerConfiguration
 * @package ampproject/amp-toolbox
 */
final class PreloadHeroImageConfigurationTest extends TestCase
{

    public function testDefaults()
    {
        $configuration = new PreloadHeroImageConfiguration([]);
        $this->assertInstanceOf(TransformerConfiguration::class, $configuration);
        $this->assertEquals('', $configuration->get('inlineStyleBackupAttribute'));
        $this->assertEquals('', $configuration->inlineStyleBackupAttribute);
        $this->assertTrue($configuration->get('preloadHeroImage'));
        $this->assertTrue($configuration->preloadHeroImage);
        $this->assertFalse($configuration->get('preloadSrcset'));
        $this->assertFalse($configuration->preloadSrcset);
        $this->assertEquals(
            [
                'inlineStyleBackupAttribute' => '',
                'preloadHeroImage'           => true,
                'preloadSrcset'              => false,
            ],
            $configuration->toArray()
        );
    }

    public function testInitialization()
    {
        $configuration = new PreloadHeroImageConfiguration(
            [
                'inlineStyleBackupAttribute' => 'style-backup',
                'preloadHeroImage'           => false,
                'preloadSrcset'              => true,
            ]
        );
        $this->assertInstanceOf(TransformerConfiguration::class, $configuration);
        $this->assertEquals('style-backup', $configuration->get('inlineStyleBackupAttribute'));
        $this->assertEquals('style-backup', $configuration->inlineStyleBackupAttribute);
        $this->assertFalse($configuration->get('preloadHeroImage'));
        $this->assertFalse($configuration->preloadHeroImage);
        $this->assertTrue($configuration->get('preloadSrcset'));
        $this->assertTrue($configuration->preloadSrcset);
        $this->assertEquals(
            [
                'inlineStyleBackupAttribute' => 'style-backup',
                'preloadHeroImage'           => false,
                'preloadSrcset'              => true,
            ],
            $configuration->toArray()
        );
    }

    public function testThrowsOnInvalidKey()
    {
        $this->expectException(InvalidConfigurationKey::class);
        $this->expectExceptionMessage(
            "The provided configuration key 'nonsense' is not valid for the transformer 'PreloadHeroImageConfiguration'."
        );
        new PreloadHeroImageConfiguration(['nonsense'  => 'value']);
    }

    public function dataThrowsOnBadValueType()
    {
        return [
            ['inlineStyleBackupAttribute', true, 'string', 'boolean'],
            ['preloadHeroImage', '42', 'boolean', 'string'],
            ['preloadSrcset', new stdClass(), 'boolean', 'stdClass'],
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
                PreloadHeroImageConfiguration::class,
                $expectedType,
                $actualType
            )
        );

        new PreloadHeroImageConfiguration([$key  => $value]);
    }

    public function testThrowsOnUnknownKeyViaGetter()
    {
        $this->expectException(UnknownConfigurationKey::class);
        $this->expectExceptionMessage(
            "The configuration of the transformer 'PreloadHeroImageConfiguration' does not contain the requested key 'nonsense'."
        );
        $configuration = new PreloadHeroImageConfiguration([]);
        $configuration->get('nonsense');
    }

    public function testThrowsOnUnknownKeyViaMagicMethod()
    {
        $this->expectError();
        $this->expectErrorMessage(
            'Undefined property: AmpProject\Optimizer\Configuration\PreloadHeroImageConfiguration::$nonsense'
        );
        $configuration = new PreloadHeroImageConfiguration([]);
        $configuration->nonsense;
    }
}
