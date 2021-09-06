<?php

namespace AmpProject\Dom\Document\Filter;

use AmpProject\Dom\Document\AfterSaveFilter;
use AmpProject\Dom\Document\BeforeLoadFilter;

/**
 * Protect the esi tags from being broken.
 *
 * @package ampproject/amp-toolbox
 */
final class ProtectEsiTags implements BeforeLoadFilter, AfterSaveFilter
{

    /**
     * List of self closing ESI tags.
     *
     * @link https://www.w3.org/TR/esi-lang/
     *
     * @var string[]
     */
    const SELF_CLOSING_TAGS = [
        'esi:include',
        'esi:comment',
    ];

    /**
     * Preprocess the HTML to be loaded into the Dom\Document.
     *
     * @param string $html String of HTML markup to be preprocessed.
     * @return string Preprocessed string of HTML markup.
     */
    public function beforeLoad($html)
    {
        $selfClosingregex = '#<(' . implode('|', self::SELF_CLOSING_TAGS) . ')([^>]*?)(?>\s*(?<!\\\\)/)?>(?!</\1>)#';

        $html = preg_replace($selfClosingregex, '<$1$2></$1>', $html);
        $html = preg_replace('/(<esi:include.+?)(src)=/', '$1esi-src=', $html);
        $html = preg_replace('/(<\/?)esi:/', '$1esi-', $html);

        return $html;
    }

    /**
     * Process the Dom\Document after being saved from Dom\Document.
     *
     * @param string $html String of HTML markup to be preprocessed.
     * @return string Preprocessed string of HTML markup.
     */
    public function afterSave($html)
    {
        $selfClosingregex = '#</(' . implode('|', self::SELF_CLOSING_TAGS) . ')>#i';

        $html = preg_replace('/(<\/?)esi-/', '$1esi:', $html);
        $html = preg_replace('/(<esi:include.+?)(esi-src)=/', '$1src=', $html);
        $html = preg_replace($selfClosingregex, '', $html);

        return $html;
    }
}
