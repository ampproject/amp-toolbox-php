<?php

namespace AmpProject\Optimizer\Transformer;

use AmpProject\Dom\Document;
use AmpProject\Optimizer\Configuration\RewriteAmpUrlsConfiguration;
use AmpProject\Optimizer\ErrorCollection;
use AmpProject\Optimizer\Exception\InvalidConfiguration;
use AmpProject\Tests\TestCase;

/**
 * Test the RewriteAmpUrls transformer.
 *
 * @covers \AmpProject\Optimizer\Transformer\RewriteAmpUrls
 * @package ampproject/amp-toolbox
 */
final class RewriteAmpUrlsTest extends TestCase
{

    public function testThrowsOnMutuallyExclusiveFlags()
    {
        $this->expectException(InvalidConfiguration::class);
        $this->expectExceptionMessage(
            "The configuration flags 'lts' and 'rtv' are mutually exclusive and cannot be set at the same time."
        );
        $configuration = new RewriteAmpUrlsConfiguration(
            [
                'lts' => true,
                'rtv' => true
            ]
        );

        $transformer = new RewriteAmpUrls($configuration);
        $transformer->transform(new Document(), new ErrorCollection());
    }
}
