<?php

namespace AmpProject\Dom;

use AmpProject\Attribute;
use AmpProject\Exception\MaxCssByteCountExceeded;
use AmpProject\Optimizer\CssRule;
use DOMElement;

/**
 * Class AmpProject\Dom\Element.
 *
 * @property Document $ownerDocument        The ownerDocument for these elements should always be a Dom\Document.
 * @property int      $inlineStyleByteCount Number of bytes that are consumed by the inline style attribute.
 *
 * @package ampproject/amp-toolbox
 */
final class Element extends DOMElement
{

    /**
     * Error message to use when the __get() is triggered for an unknown property.
     *
     * @var string
     */
    const PROPERTY_GETTER_ERROR_MESSAGE = 'Undefined property: AmpProject\\Dom\\Element::';

    /**
     * Add CSS styles to the element as an inline style attribute.
     *
     * @param string $style CSS style(s) to add to the inline style attribute.
     * @throws MaxCssByteCountExceeded If the allowed max byte count is exceeded.
     */
    public function addInlineStyle($style)
    {
        $style = trim($style, CssRule::CSS_TRIM_CHARACTERS);

        $existingStyle = (string)trim($this->getAttribute(Attribute::STYLE));
        if (!empty($existingStyle)) {
            $existingStyle = rtrim($existingStyle, ';') . ';';
        }

        $newStyle     = $existingStyle . $style;
        $newByteCount = strlen($newStyle);

        if ($this->ownerDocument->getRemainingCustomCssSpace() < ($newByteCount - $this->inlineStyleByteCount)) {
            throw MaxCssByteCountExceeded::forInlineStyle($this, $style);
        }

        $this->ownerDocument->addInlineStyleByteCount($newByteCount - $this->inlineStyleByteCount);

        $this->setAttribute(Attribute::STYLE, $newStyle);
        $this->inlineStyleByteCount = $newByteCount;
    }

    /**
     * Magic getter to implement lazily-created, cached properties for the element.
     *
     * @param string $name Name of the property to get.
     * @return mixed Value of the property, or null if unknown property was requested.
     */
    public function __get($name)
    {
        switch ($name) {
            case 'inlineStyleByteCount':
                if (!isset($this->inlineStyleByteCount)) {
                    $this->inlineStyleByteCount = strlen($this->getAttribute(Attribute::STYLE));
                }

                return $this->inlineStyleByteCount;
        }

        // Mimic regular PHP behavior for missing notices.
        trigger_error(
            self::PROPERTY_GETTER_ERROR_MESSAGE . $name,
            E_USER_NOTICE
        ); // phpcs:ignore WordPress.PHP.DevelopmentFunctions,WordPress.Security.EscapeOutput,Generic.Files.LineLength.TooLong

        return null;
    }
}
