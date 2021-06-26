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
 * @covers \AmpProject\Optimizer\Configuration\OptimizeHeroImagesConfiguration
 * @covers \AmpProject\Optimizer\Configuration\BaseTransformerConfiguration
 * @package ampproject/amp-toolbox
 */
final class OptimizeHeroImagesConfigurationTest extends TestCase
{

    public function testDefaults()
    {
        $configuration = new OptimizeHeroImagesConfiguration([]);
        $this->assertInstanceOf(TransformerConfiguration::class, $configuration);
        $this->assertEquals('', $configuration->get('inlineStyleBackupAttribute'));
        $this->assertEquals('', $configuration->inlineStyleBackupAttribute);
        $this->assertEquals(2, $configuration->get('maxHeroImageCount'));
        $this->assertEquals(2, $configuration->maxHeroImageCount);
        $this->assertTrue($configuration->get('optimizeHeroImages'));
        $this->assertTrue($configuration->optimizeHeroImages);
        $this->assertFalse($configuration->get('preloadSrcset'));
        $this->assertFalse($configuration->preloadSrcset);
        $this->assertEquals(
            [
                'inlineStyleBackupAttribute' => '',
                'maxHeroImageCount'          => 2,
                'optimizeHeroImages'         => true,
                'preloadSrcset'              => false,
            ],
            $configuration->toArray()
        );
    }

    public function testInitialization()
    {
        $configuration = new OptimizeHeroImagesConfiguration(
            [
                'inlineStyleBackupAttribute' => 'style-backup',
                'maxHeroImageCount'          => 42,
                'optimizeHeroImages'         => false,
                'preloadSrcset'              => true,
            ]
        );
        $this->assertInstanceOf(TransformerConfiguration::class, $configuration);
        $this->assertEquals('style-backup', $configuration->get('inlineStyleBackupAttribute'));
        $this->assertEquals('style-backup', $configuration->inlineStyleBackupAttribute);
        $this->assertEquals(42, $configuration->get('maxHeroImageCount'));
        $this->assertEquals(42, $configuration->maxHeroImageCount);
        $this->assertFalse($configuration->get('optimizeHeroImages'));
        $this->assertFalse($configuration->optimizeHeroImages);
        $this->assertTrue($configuration->get('preloadSrcset'));
        $this->assertTrue($configuration->preloadSrcset);
        $this->assertEquals(
            [
                'inlineStyleBackupAttribute' => 'style-backup',
                'maxHeroImageCount'          => 42,
                'optimizeHeroImages'         => false,
                'preloadSrcset'              => true,
            ],
            $configuration->toArray()
        );
    }

    public function testThrowsOnInvalidKey()
    {
        $this->expectException(InvalidConfigurationKey::class);
        $this->expectExceptionMessage(
            "The provided configuration key 'nonsense' is not valid for the transformer 'OptimizeHeroImagesConfiguration'."
        );
        new OptimizeHeroImagesConfiguration(['nonsense'  => 'value']);
    }

    public function dataThrowsOnBadValueType()
    {
        return [
            ['inlineStyleBackupAttribute', true, 'string', 'boolean'],
            ['maxHeroImageCount', 'nonsense', 'integer', 'string'],
            ['optimizeHeroImages', '42', 'boolean', 'string'],
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
                OptimizeHeroImagesConfiguration::class,
                $expectedType,
                $actualType
            )
        );

        new OptimizeHeroImagesConfiguration([$key  => $value]);
    }

    public function testThrowsOnUnknownKeyViaGetter()
    {
        $this->expectException(UnknownConfigurationKey::class);
        $this->expectExceptionMessage(
            "The configuration of the transformer 'OptimizeHeroImagesConfiguration' does not contain the requested key 'nonsense'."
        );
        $configuration = new OptimizeHeroImagesConfiguration([]);
        $configuration->get('nonsense');
    }

    public function testThrowsOnUnknownKeyViaMagicMethod()
    {
        $this->expectError();
        $this->expectErrorMessage(
            'Undefined property: AmpProject\Optimizer\Configuration\OptimizeHeroImagesConfiguration::$nonsense'
        );
        $configuration = new OptimizeHeroImagesConfiguration([]);
        $configuration->nonsense;
    }
}
