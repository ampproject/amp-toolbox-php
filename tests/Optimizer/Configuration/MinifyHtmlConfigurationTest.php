<?php

namespace AmpProject\Optimizer\Configuration;

use AmpProject\Optimizer\Configuration\MinifyHtmlConfiguration;
use AmpProject\Optimizer\Exception\InvalidConfigurationKey;
use AmpProject\Optimizer\Exception\InvalidConfigurationValue;
use AmpProject\Optimizer\Exception\UnknownConfigurationKey;
use AmpProject\Optimizer\TransformerConfiguration;
use AmpProject\Tests\TestCase;
use InvalidArgumentException;

/**
 * Test the MinifyHtmlConfiguration.
 *
 * @covers \AmpProject\Optimizer\Configuration\MinifyHtmlConfiguration
 * @covers \AmpProject\Optimizer\Configuration\BaseTransformerConfiguration
 * @package ampproject/amp-toolbox
 */
final class MinifyHtmlConfigurationTest extends TestCase
{
    public function testDefaults()
    {
        $configuration = new MinifyHtmlConfiguration([]);
        $this->assertInstanceOf(TransformerConfiguration::class, $configuration);
        $this->assertEquals(true, $configuration->get('minify'));
        $this->assertEquals(true, $configuration->minify);
        $this->assertEquals(false, $configuration->get('minifyAmpScript'));
        $this->assertEquals(false, $configuration->minifyAmpScript);
        $this->assertEquals(true, $configuration->get('minifyJSON'));
        $this->assertEquals(true, $configuration->minifyJSON);
        $this->assertEquals(true, $configuration->get('collapseWhitespace'));
        $this->assertEquals(true, $configuration->collapseWhitespace);
        $this->assertEquals(true, $configuration->get('removeComments'));
        $this->assertEquals(true, $configuration->removeComments);
        $this->assertEquals('', $configuration->get('commentIgnorePattern'));
        $this->assertEquals('', $configuration->commentIgnorePattern);
        $this->assertEquals(
            [
                'minify'                => true,
                'minifyAmpScript'       => false,
                'minifyJSON'            => true,
                'collapseWhitespace'    => true,
                'removeComments'        => true,
                'commentIgnorePattern'  => '',
            ],
            $configuration->toArray()
        );
    }

    public function testInitialization()
    {
        $configuration = new MinifyHtmlConfiguration([
            'minify'                => false,
            'minifyAmpScript'       => false,
            'minifyJSON'            => false,
            'collapseWhitespace'    => false,
            'removeComments'        => false,
            'commentIgnorePattern'  => '/^\s*__[a-b]+__\s*$/',
        ]);
        $this->assertInstanceOf(TransformerConfiguration::class, $configuration);
        $this->assertEquals(false, $configuration->get('minify'));
        $this->assertEquals(false, $configuration->minify);
        $this->assertEquals(false, $configuration->get('minifyAmpScript'));
        $this->assertEquals(false, $configuration->minifyAmpScript);
        $this->assertEquals(false, $configuration->get('minifyJSON'));
        $this->assertEquals(false, $configuration->minifyJSON);
        $this->assertEquals(false, $configuration->get('collapseWhitespace'));
        $this->assertEquals(false, $configuration->collapseWhitespace);
        $this->assertEquals(false, $configuration->get('removeComments'));
        $this->assertEquals(false, $configuration->removeComments);
        $this->assertEquals('/^\s*__[a-b]+__\s*$/', $configuration->get('commentIgnorePattern'));
        $this->assertEquals('/^\s*__[a-b]+__\s*$/', $configuration->commentIgnorePattern);
        $this->assertEquals(
            [
                'minify'                => false,
                'minifyAmpScript'       => false,
                'minifyJSON'            => false,
                'collapseWhitespace'    => false,
                'removeComments'        => false,
                'commentIgnorePattern'  => '/^\s*__[a-b]+__\s*$/',
            ],
            $configuration->toArray()
        );
    }

    public function testThrowsOnInvalidKey()
    {
        $this->expectException(InvalidConfigurationKey::class);
        $this->expectExceptionMessage(
            "The provided configuration key 'nonsense' is not valid for the transformer 'MinifyHtmlConfiguration'."
        );
        new MinifyHtmlConfiguration(['nonsense'  => 'value']);
    }

    public function dataThrowsOnBadValueType()
    {
        return [
            ['minify', 'nonsense', 'boolean', 'string'],
            ['minifyAmpScript', 'nonsense', 'boolean', 'string'],
            ['minifyJSON', 'nonsense', 'boolean', 'string'],
            ['collapseWhitespace', 'nonsense', 'boolean', 'string'],
            ['removeComments', 'nonsense', 'boolean', 'string'],
            ['commentIgnorePattern', false, 'string', 'boolean'],
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
                MinifyHtmlConfiguration::class,
                $expectedType,
                $actualType
            )
        );

        new MinifyHtmlConfiguration([$key  => $value]);
    }

    public function testThrowsOnUnknownKeyViaGetter()
    {
        $this->expectException(UnknownConfigurationKey::class);
        $this->expectExceptionMessage(
            "The configuration of the transformer 'MinifyHtmlConfiguration' does not contain the requested key 'nonsense'."
        );
        $configuration = new MinifyHtmlConfiguration([]);
        $configuration->get('nonsense');
    }

    public function testThrowsOnUnknownKeyViaMagicMethod()
    {
        $this->expectError();
        $this->expectErrorMessage(
            'Undefined property: AmpProject\Optimizer\Configuration\MinifyHtmlConfiguration::$nonsense'
        );
        $configuration = new MinifyHtmlConfiguration([]);
        $configuration->nonsense;
    }

    public function testThrowExceptionIfMinifyAmpScriptIsTrue()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Script minification feature is not implemented yet.');
        new MinifyHtmlConfiguration(['minifyAmpScript' => true]);
    }
}
