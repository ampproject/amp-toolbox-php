<?php

namespace AmpProject\Html;

/**
 * Helper class for dealing with multibyte-relevant string operations.
 *
 * @package ampproject/amp-toolbox
 */
final class Str
{

    /**
     * Get the length of the text in characters.
     *
     * @param string $text Text to get the length of.
     *
     * @return int Length of the text in characters.
     */
    public function length($text)
    {
        return function_exists('mb_strlen') ? mb_strlen($text) : strlen($text);
    }

    /**
     * Extract a substring from a string of text.
     *
     * @param string   $text   Text to extract the substring from.
     * @param int      $offset Offset into the text.
     * @param int|null $length Optional. Length of the substring to extract.
     *
     * @return string Substring extracted from the text.
     */
    public function substring($text, $offset, $length)
    {
        return function_exists('mb_substr') ? mb_substr($text, $offset, $length) : substr($text, $offset, $length);
    }

    /**
     * Get the position of a character within the text.
     *
     * @param string $character Character to look for.
     * @param string $text      Text to find the character in.
     * @return int Position into the text at which the character was found.
     */
    public function position($character, $text)
    {
        return function_exists('mb_strpos') ? mb_strpos($character, $text) : strpos($character, $text);
    }

    /**
     * Get the last position of a character within the text.
     *
     * @param string $character Character to look for.
     * @param string $text      Text to find the character in.
     * @return int Position into the text at which the character was found.
     */
    public function lastPosition($character, $text)
    {
        return function_exists('mb_strrpos') ? mb_strrpos($character, $text) : strrpos($character, $text);
    }
}
