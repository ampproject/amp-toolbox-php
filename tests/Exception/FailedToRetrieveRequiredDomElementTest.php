<?php

namespace AmpProject\Exception;

use AmpProject\Tests\TestCase;
use stdClass;

/**
 * Test the FailedToRetrieveRequiredDomElement exception.
 *
 * @covers \AmpProject\Exception\FailedToRetrieveRequiredDomElement
 * @package ampproject/amp-toolbox
 */
class FailedToRetrieveRequiredDomElementTest extends TestCase
{

    /**
     * Provide data for the <html> element.
     *
     * @return array[]
     */
    public function dataForHtmlElement()
    {
        return [
            [null, "Failed to retrieve required <html> DOM element, got 'NULL' instead."],
            [42, "Failed to retrieve required <html> DOM element, got 'integer' instead."],
            ['bla', "Failed to retrieve required <html> DOM element, got 'string' instead."],
            [[1, 2], "Failed to retrieve required <html> DOM element, got 'array' instead."],
            [new stdClass(), "Failed to retrieve required <html> DOM element, got 'stdClass' instead."],
        ];
    }

    /**
     * Test throwing the exception for the <html> element.
     *
     * @dataProvider dataForHtmlElement()
     */
    public function testThrowingForHtmlElement($htmlElement, $expectedMessage)
    {
        $this->expectException(FailedToRetrieveRequiredDomElement::class);
        $this->expectExceptionMessage($expectedMessage);

        throw FailedToRetrieveRequiredDomElement::forHtmlElement($htmlElement);
    }

    /**
     * Provide data for the <head> element.
     *
     * @return array[]
     */
    public function dataForHeadElement()
    {
        return [
            [null, "Failed to retrieve required <head> DOM element, got 'NULL' instead."],
            [42, "Failed to retrieve required <head> DOM element, got 'integer' instead."],
            ['bla', "Failed to retrieve required <head> DOM element, got 'string' instead."],
            [[1, 2], "Failed to retrieve required <head> DOM element, got 'array' instead."],
            [new stdClass(), "Failed to retrieve required <head> DOM element, got 'stdClass' instead."],
        ];
    }

    /**
     * Test throwing the exception for the <head> element.
     *
     * @dataProvider dataForHeadElement()
     */
    public function testThrowingForHeadElement($headElement, $expectedMessage)
    {
        $this->expectException(FailedToRetrieveRequiredDomElement::class);
        $this->expectExceptionMessage($expectedMessage);

        throw FailedToRetrieveRequiredDomElement::forHeadElement($headElement);
    }

    /**
     * Provide data for the <body> element.
     *
     * @return array[]
     */
    public function dataForBodyElement()
    {
        return [
            [null, "Failed to retrieve required <body> DOM element, got 'NULL' instead."],
            [42, "Failed to retrieve required <body> DOM element, got 'integer' instead."],
            ['bla', "Failed to retrieve required <body> DOM element, got 'string' instead."],
            [[1, 2], "Failed to retrieve required <body> DOM element, got 'array' instead."],
            [new stdClass(), "Failed to retrieve required <body> DOM element, got 'stdClass' instead."],
        ];
    }

    /**
     * Test throwing the exception for the <body> element.
     *
     * @dataProvider dataForBodyElement()
     */
    public function testThrowingForBodyElement($bodyElement, $expectedMessage)
    {
        $this->expectException(FailedToRetrieveRequiredDomElement::class);
        $this->expectExceptionMessage($expectedMessage);

        throw FailedToRetrieveRequiredDomElement::forBodyElement($bodyElement);
    }
}
