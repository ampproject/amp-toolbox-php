<?php

namespace AmpProject\Dom;

use DOMAttr;

/**
 * Dump an element with its attributes.
 *
 * This is meant for quick identification of an element and does not dump the child element or other inner content
 * from that element.
 */
final class ElementDump
{

    /**
     * Element to dump.
     *
     * @var Element
     */
    private $element;

    /**
     *
     *
     * Defaults to 120.
     *
     * @var int
     */
    private $truncate;

    /**
     * Instantiate an ElementDump object.
     *
     * The object is meant to be cast to a string to do its magic.
     *
     * @param Element $element  Element to dump.
     * @param int     $truncate Optional. Maximum length to truncate attributes and textContent to. Defaults to 120.
     */
    public function __construct(Element $element, $truncate = 120)
    {
        $this->element  = $element;
        $this->truncate = $truncate;
    }

    /**
     * Dump the provided element into a string.
     *
     * @return string Dump of the element.
     */
    public function __toString()
    {
        $attributes = array_reduce(
            iterator_to_array($this->element->attributes, true),
            static function ($text, DOMAttr $attribute) {
                return $text . " {$attribute->nodeName}=\"{$attribute->value}\"";
            },
            ''
        );

        if ($this->truncate > 0 && mb_strlen($attributes) > $this->truncate) {
            $attributes = mb_substr($attributes, 0, $this->truncate - 1) . '…';
        }

        $textContent = $this->element->textContent;

        if ($this->truncate > 0 && mb_strlen($textContent) > $this->truncate) {
            $textContent = mb_substr($textContent, 0, $this->truncate - 1) . '…';
        }

        return sprintf(
            '<%1$s%2$s>%3$s</%1$s>',
            $this->element->tagName,
            $attributes,
            $textContent
        );
    }
}
