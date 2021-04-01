<?php

namespace AmpProject\Dom;

use AmpProject\Amp;
use AmpProject\Attribute;
use AmpProject\Exception\MaxCssByteCountExceeded;
use AmpProject\Tag;
use AmpProject\Tests\TestCase;

/**
 * Tests for AmpProject\Dom\Element.
 *
 * @covers \AmpProject\Dom\Element
 * @package ampproject/amp-toolbox
 */
class ElementTest extends TestCase
{
    /**
     * Data provider for testing the byte count property.
     *
     * @return array Testing data.
     */
    public function dataByteCounts()
    {
        return [
            'count_style_attribute' => [
                '<div style="12345"></div><', 5,
            ],

            // Adding <head> tag because of bug (see https://github.com/ampproject/amp-toolbox-php/issues/28).
            'multibyte_chars_are_counted_in_bytes_not_chars' => [
                '<head></head><div style="Iñtërnâtiônàlizætiøn"></div>', 27,
            ],
        ];
    }

    /**
     * Test the byte count property.
     *
     * @dataProvider dataByteCounts
     * @covers \AmpProject\Dom\Element::__get()
     *
     * @param string $html     HTML to test against.
     * @param int    $expected Expected number of bytes of inline styles.
     */
    public function testByteCounts($html, $expected)
    {
        $document = Document::fromHtmlFragment($html);
        /** @var Element $element */
        $element = $document->xpath->query('.//*[@style]', $document->body)->item(0);
        $this->assertEquals($expected, $element->inlineStyleByteCount);
    }

    /**
     * Test adding inline styles without CSS byte count limit.
     *
     * @covers \AmpProject\Dom\Element::addInlineStyle()
     */
    public function testAddInlineStyleWithoutLimit()
    {
        $document = new Document();
        $ampCustomStyle = $document->createElement(Tag::STYLE);
        $ampCustomStyle->setAttribute(Attribute::AMP_CUSTOM, null);
        $ampCustomStyle->textContent = str_pad('', Amp::MAX_CSS_BYTE_COUNT - 38, 'X');
        $document->head->appendChild($ampCustomStyle);

        /** @var Element $element */
        $element = $document->createElement(Tag::DIV);
        $document->body->appendChild($element);

        // Inline style can be added.
        $element->addInlineStyle('color:red');

        $this->assertEquals('<div style="color:red"></div>', (string)new ElementDump($element));

        // Semicolons are handled automatically.
        $element->addInlineStyle('  ;  ;  border-left=0  ;  ;  ');
        $element->addInlineStyle('  ;  ;  border-right=0  ;  ;  ');

        $this->assertEquals('<div style="color:red;border-left=0;border-right=0"></div>', (string)new ElementDump($element));

        $element->addInlineStyle('XXXXX');

        $this->assertEquals('<div style="color:red;border-left=0;border-right=0;XXXXX"></div>', (string)new ElementDump($element));
    }

    /**
     * Test adding inline styles with CSS byte count limit.
     *
     * @covers \AmpProject\Dom\Element::addInlineStyle()
     */
    public function testAddInlineStyleWithLimit()
    {
        $document = new Document();
        $document->enforceCssMaxByteCount(Amp::MAX_CSS_BYTE_COUNT);
        $ampCustomStyle = $document->createElement(Tag::STYLE);
        $ampCustomStyle->setAttribute(Attribute::AMP_CUSTOM, null);
        $ampCustomStyle->textContent = str_pad('', Amp::MAX_CSS_BYTE_COUNT - 38, 'X');
        $document->head->appendChild($ampCustomStyle);

        /** @var Element $element */
        $element = $document->createElement(Tag::DIV);
        $document->body->appendChild($element);

        // Inline style can be added.
        $element->addInlineStyle('color:red');

        $this->assertEquals('<div style="color:red"></div>', (string)new ElementDump($element));

        // Semicolons are handled automatically.
        $element->addInlineStyle('  ;  ;  border-left=0  ;  ;  ');
        $element->addInlineStyle('  ;  ;  border-right=0  ;  ;  ');

        $this->assertEquals('<div style="color:red;border-left=0;border-right=0"></div>', (string)new ElementDump($element));

        // Exception is thrown if maximum allowed byte count is exceeded.
        $this->expectException(MaxCssByteCountExceeded::class);
        $this->expectExceptionMessage(
            'Maximum allowed CSS byte count exceeded for inline style'
        );

        $element->addInlineStyle('X');
    }

    public function getAddAmpActionData()
    {
        $dom    = new Document();
        $button = $dom->createElementWithAttributes('button', []);
        $form   = $dom->createElementWithAttributes('form', []);

        return [
            // Add a toggle class on tap to a button
            [ $button, 'tap', "some-id.toggleClass(class='some-class')", "tap:some-id.toggleClass(class='some-class')" ],
            // Add another toggle class on tap to a button
            [ $button, 'tap', "some-other-id.toggleClass(class='some-class')", "tap:some-id.toggleClass(class='some-class'),some-other-id.toggleClass(class='some-class')" ],
            // Add a third toggle class on tap to a button
            [ $button, 'tap', "third-id.toggleClass(class='some-class')", "tap:some-id.toggleClass(class='some-class'),some-other-id.toggleClass(class='some-class'),third-id.toggleClass(class='some-class')" ],
            // Add some other event to a button
            [ $button, 'event', 'action', "tap:some-id.toggleClass(class='some-class'),some-other-id.toggleClass(class='some-class'),third-id.toggleClass(class='some-class');event:action" ],
            // Add another action to the second event to a button
            [ $button, 'event', 'other-action', "tap:some-id.toggleClass(class='some-class'),some-other-id.toggleClass(class='some-class'),third-id.toggleClass(class='some-class');event:action,other-action" ],
            // Add fourth action to the tap event to a button
            [ $button, 'tap', 'lightbox', "tap:some-id.toggleClass(class='some-class'),some-other-id.toggleClass(class='some-class'),third-id.toggleClass(class='some-class'),lightbox;event:action,other-action" ],
            // Add a submit success action to a form
            [ $form, 'submit-success', 'success-lightbox', 'submit-success:success-lightbox' ],
            // Add a submit error action to a form
            [ $form, 'submit-error', 'error-lightbox', 'submit-success:success-lightbox;submit-error:error-lightbox' ],
            // Make sure separators within methods won't break
            [ $dom->createElementWithAttributes('div', [ 'on' => "event:action(method='with problematic characters , : ;')" ]), 'event', "second-action('with problematic characters , : ;')", "event:action(method='with problematic characters , : ;'),second-action('with problematic characters , : ;')" ],
        ];
    }

    /**
     * Test addAmpAction().
     *
     * @dataProvider getAddAmpActionData()
     * @covers \AmpProject\Dom\Element::addAmpAction()
     *
     * @param Element $element  Element.
     * @param string     $event    Event.
     * @param string     $action   Action.
     * @param string     $expected Expected.
     */
    public function testAddAmpAction(Element $element, $event, $action, $expected)
    {
        $element->addAmpAction($event, $action);
        $this->assertEquals($expected, $element->getAttribute('on'));
    }

    public function getMergeAmpActionsData()
    {
        return [
            // Both empty.
            [ '', '', '' ],
            // First empty.
            [ '', "tap:some-id.toggleClass(class='some-class')", "tap:some-id.toggleClass(class='some-class')" ],
            // Second empty.
            [ "tap:some-id.toggleClass(class='some-class')", '', "tap:some-id.toggleClass(class='some-class')" ],
            // Same event.
            [ "tap:first-id.toggleClass(class='some-class')", "tap:second-id.toggleClass(class='some-class')", "tap:first-id.toggleClass(class='some-class'),second-id.toggleClass(class='some-class')" ],
            // Same event twice.
            [ "tap:first-id.toggleClass(class='some-class'),second-id.toggleClass(class='some-class')", "tap:third-id.toggleClass(class='some-class'),fourth.toggleClass(class='some-class')", "tap:first-id.toggleClass(class='some-class'),second-id.toggleClass(class='some-class'),third-id.toggleClass(class='some-class'),fourth.toggleClass(class='some-class')" ],
            // Different events.
            [ 'submit-success:success-lightbox', 'submit-error:error-lightbox', 'submit-success:success-lightbox;submit-error:error-lightbox' ],
            // Two different events twice.
            [ 'submit-success:success-lightbox;submit-error:error-lightbox', 'submit-success:success-modal;submit-error:error-modal', 'submit-success:success-lightbox,success-modal;submit-error:error-lightbox,error-modal' ],
            // Make sure separators within methods won't break
            [ "event:action(method='with problematic characters , : ;'),second-action('with problematic characters , : ;')", "another-event:another-action(method='with problematic characters , : ;'),second-action('with problematic characters , : ;')", "event:action(method='with problematic characters , : ;'),second-action('with problematic characters , : ;');another-event:another-action(method='with problematic characters , : ;'),second-action('with problematic characters , : ;')" ],
            // Duplicates should be stripped.
            [ 'event:action,other-action,action;other-event:action,other-action,action', 'event:action;other-event:action;event:action', 'event:action,other-action;other-event:action,other-action' ],
        ];
    }

    /**
     * Test mergeAmpActions().
     *
     * @dataProvider getMergeAmpActionsData()
     * @covers \AmpProject\Dom\Element::mergeAmpActions()
     *
     * @param string $first    First action.
     * @param string $second   Second action.
     * @param string $expected Expected merged actions.
     */
    public function testMergeAmpActions($first, $second, $expected)
    {
        $actual = Element::mergeAmpActions($first, $second);
        $this->assertEquals($expected, $actual);
    }

    public function getCopyAttributesData()
    {
        $dom = new Document();

        return [
            // No attributes from full to empty.
            [
                '',
                $dom->createElementWithAttributes(
                    'div',
                    [
                        'class'          => 'class-c class-d',
                        'on'             => 'other-event:other-action',
                        'some-attribute' => 'value-b',
                    ]
                ),
                $dom->createElementWithAttributes('div', []),
                [],
            ],
            // No attributes from empty to full.
            [
                '',
                $dom->createElementWithAttributes('div', []),
                $dom->createElementWithAttributes(
                    'div',
                    [
                        'class'          => 'class-a class-b',
                        'on'             => 'event:action',
                        'some-attribute' => 'value-a',
                    ]
                ),
                [
                    'class'          => 'class-a class-b',
                    'on'             => 'event:action',
                    'some-attribute' => 'value-a',
                ],
            ],
            // No attributes from full to full.
            [
                '',
                $dom->createElementWithAttributes(
                    'div',
                    [
                        'class'          => 'class-c class-d',
                        'on'             => 'other-event:other-action',
                        'some-attribute' => 'value-b',
                    ]
                ),
                $dom->createElementWithAttributes(
                    'div',
                    [
                        'class'          => 'class-a class-b',
                        'on'             => 'event:action',
                        'some-attribute' => 'value-a',
                    ]
                ),
                [
                    'class'          => 'class-a class-b',
                    'on'             => 'event:action',
                    'some-attribute' => 'value-a',
                ],
            ],
            // Class attribute from full to full.
            [
                'class',
                $dom->createElementWithAttributes(
                    'div',
                    [
                        'class'          => 'class-c class-d',
                        'on'             => 'other-event:other-action',
                        'some-attribute' => 'value-b',
                    ]
                ),
                $dom->createElementWithAttributes(
                    'div',
                    [
                        'class'          => 'class-a class-b',
                        'on'             => 'event:action',
                        'some-attribute' => 'value-a',
                    ]
                ),
                [
                    'class'          => 'class-a class-b class-c class-d',
                    'on'             => 'event:action',
                    'some-attribute' => 'value-a',
                ],
            ],
            // On attribute from full to full.
            [
                'on',
                $dom->createElementWithAttributes(
                    'div',
                    [
                        'class'          => 'class-c class-d',
                        'on'             => 'other-event:other-action',
                        'some-attribute' => 'value-b',
                    ]
                ),
                $dom->createElementWithAttributes(
                    'div',
                    [
                        'class'          => 'class-a class-b',
                        'on'             => 'event:action',
                        'some-attribute' => 'value-a',
                    ]
                ),
                [
                    'class'          => 'class-a class-b',
                    'on'             => 'event:action;other-event:other-action',
                    'some-attribute' => 'value-a',
                ],
            ],
            // Other attribute from full to full.
            [
                'some-attribute',
                $dom->createElementWithAttributes(
                    'div',
                    [
                        'class'          => 'class-c class-d',
                        'on'             => 'other-event:other-action',
                        'some-attribute' => 'value-b',
                    ]
                ),
                $dom->createElementWithAttributes(
                    'div',
                    [
                        'class'          => 'class-a class-b',
                        'on'             => 'event:action',
                        'some-attribute' => 'value-a',
                    ]
                ),
                [
                    'class'          => 'class-a class-b',
                    'on'             => 'event:action',
                    'some-attribute' => 'value-a,value-b',
                ],
            ],
            // Two attributes from full to full.
            [
                [ 'class', 'on' ],
                $dom->createElementWithAttributes(
                    'div',
                    [
                        'class'          => 'class-c class-d',
                        'on'             => 'other-event:other-action',
                        'some-attribute' => 'value-b',
                    ]
                ),
                $dom->createElementWithAttributes(
                    'div',
                    [
                        'class'          => 'class-a class-b',
                        'on'             => 'event:action',
                        'some-attribute' => 'value-a',
                    ]
                ),
                [
                    'class'          => 'class-a class-b class-c class-d',
                    'on'             => 'event:action;other-event:other-action',
                    'some-attribute' => 'value-a',
                ],
            ],
        ];
    }

    /**
     * Test copyAttributes().
     *
     * @dataProvider getCopyAttributesData
     * @covers \AmpProject\Dom\Element::copyAttributes()
     *
     * @param array   $attributes Attributes.
     * @param Element $from       From element.
     * @param Element $to         To element.
     * @param array   $expected   Expected.
     */
    public function testCopyAttributes($attributes, Element $from, Element $to, $expected)
    {
        $from->copyAttributes($attributes, $to);
        $this->assertEquals($expected, $to->getAttributesAsAssocArray());
    }

    /**
     * Test adding no attributes to node.
     *
     * @covers \AmpProject\Dom\Element::addAttributes()
     */
    public function testAddAttributesToNodeForNoAttributes()
    {
        $dom     = Document::fromHtml('<p>Hello World</p>');
        $element = $dom->createElement('b');
        $element->addAttributes([]);
        $this->assertFalse($element->hasAttributes());
    }

    /**
     * Test adding attribute with no value to node.
     *
     * @covers \AmpProject\Dom\Element::addAttributes()
     */
    public function testAddAttributesToNodeForAttributeWithoutValue()
    {
        $dom        = Document::fromHtml('<p>Hello World</p>');
        $element    = $dom->createElement('div');
        $attributes = [ 'placeholder' => '' ];
        $element->addAttributes($attributes);

        $this->assertTrue($element->hasAttributes());
        $this->checkElementHasAttributes($element, $attributes);
    }

    /**
     * Test adding attribute with value to node.
     *
     * @covers \AmpProject\Dom\Element::addAttributes()
     */
    public function testAddAttributesToNodeForAttributeWithValue()
    {
        $dom        = Document::fromHtml('<p>Hello World</p>');
        $element    = $dom->createElement('div');
        $attributes = [
            'class' => 'myClass',
            'id'    => 'myId',
        ];
        $element->addAttributes($attributes);

        $this->assertTrue($element->hasAttributes());
        $this->checkElementHasAttributes($element, $attributes);
    }

    /**
     * Assert node has the expected attributes.
     *
     * @param Element  $element    Element.
     * @param string[] $attributes Attributes.
     */
    private function checkElementHasAttributes($element, $attributes)
    {
        $this->assertEquals(count($attributes), $element->attributes->length);
        foreach ($element->attributes as $attr) {
            $name  = $attr->nodeName;
            $value = $attr->nodeValue;

            $this->assertTrue(array_key_exists($name, $attributes), sprintf('Attribute "%s" not found.', $name));
            $this->assertEquals($attributes[ $name ], $value, sprintf('Attribute "%s" does not have expected value.', $name));
        }
    }
}
