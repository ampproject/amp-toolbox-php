<?php

namespace AmpProject\Dom\Middleware;

use AmpProject\Dom\Document;

/**
 * Process the HTML output string and tweak it as needed.
 *
 * @package ampproject/amp-toolbox
 */
class SvgSourceAttributeEncoding extends BaseDocumentMiddleware
{

    /**
     * Process the HTML output string and tweak it as needed.
     *
     * @param string $html HTML output string to tweak.
     * @return string Tweaked HTML output string.
     */
    public function afterSave($html)
    {
        return preg_replace_callback(Document::I_AMPHTML_SIZER_REGEX_PATTERN, [$this, 'adaptSizer'], $html);
    }

    /**
     * Adapt the sizer element so that it validates against the AMP spec.
     *
     * @param array $matches Matches that the regular expression collected.
     * @return string Adapted string to use as replacement.
     */
    private function adaptSizer($matches)
    {
        $src = $matches['src'];
        $src = htmlspecialchars_decode($src, ENT_NOQUOTES);
        $src = preg_replace_callback(Document::SRC_SVG_REGEX_PATTERN, [$this, 'adaptSvg'], $src);
        return $matches['before_src'] . $src . $matches['after_src'];
    }

    /**
     * Adapt the SVG syntax within the sizer element so that it validates against the AMP spec.
     *
     * @param array $matches Matches that the regular expression collected.
     * @return string Adapted string to use as replacement.
     */
    private function adaptSvg($matches)
    {
        return $matches['type'] . urldecode($matches['value']);
    }
}
