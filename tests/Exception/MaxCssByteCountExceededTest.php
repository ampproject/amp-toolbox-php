<?php

namespace AmpProject\Exception;

use AmpProject\Dom\Document;
use AmpProject\Dom\Element;
use AmpProject\Tests\TestCase;

/**
 * Test the MaxCssByteCountExceeded exception.
 *
 * @covers \AmpProject\Exception\MaxCssByteCountExceeded
 * @package ampproject/amp-toolbox
 */
class MaxCssByteCountExceededTest extends TestCase
{

    /**
     * Test throwing the exception for an inline style.
     */
    public function testThrowingForInlineStyle()
    {
        /** @var Element $element */
        $element = Document::fromHtmlFragment('<div style="h1: red;"></div>')->body->firstChild;

        $this->expectException(MaxCssByteCountExceeded::class);
        $this->expectExceptionMessage(
            "Maximum allowed CSS byte count exceeded for inline style 'h1: red;': <div style=\"h1: red;\"></div>"
        );

        throw MaxCssByteCountExceeded::forInlineStyle($element, 'h1: red;');
    }

    /**
     * Test throwing the exception for an amp-custom style.
     */
    public function testThrowingForAmpCustom()
    {
        $this->expectException(MaxCssByteCountExceeded::class);
        $this->expectExceptionMessage("Maximum allowed CSS byte count exceeded for amp-custom style 'h1: red;'");

        throw MaxCssByteCountExceeded::forAmpCustom('h1: red;');
    }
}
