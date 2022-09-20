<?php

namespace AmpProject\Dom;

use AmpProject\Amp;
use AmpProject\Dom\Document\Option;
use AmpProject\Exception\InvalidByteSequence;
use AmpProject\Exception\InvalidOptionValue;
use AmpProject\Exception\MaxCssByteCountExceeded;
use AmpProject\Html\Attribute;
use AmpProject\Html\Tag;
use AmpProject\Tests\MarkupComparison;
use AmpProject\Tests\TestCase;
use AmpProject\Tests\TestMarkup;
use AmpProject\Validator\Spec\CssRuleset\AmpNoTransformed;
use AmpProject\Validator\Spec\SpecRule;
use DOMNode;

/**
 * Tests for AmpProject\Dom\Document.
 *
 * @covers \AmpProject\Dom\Document
 * @package ampproject/amp-toolbox
 */
class DocumentTest extends TestCase
{
    use MarkupComparison;

    /**
     * Data for AmpProject\Dom\Document test.
     *
     * @return array Data.
     */
    public function dataDomDocument()
    {
        $head = '<head><meta charset="utf-8"></head>';

        return [
            'minimum_valid_document'                   => [
                'utf-8',
                '<!DOCTYPE html><html><head></head><body></body></html>',
                '<!DOCTYPE html><html>' . $head . '<body></body></html>',
            ],
            'valid_document_with_attributes'           => [
                'utf-8',
                '<!DOCTYPE html><html amp lang="en">' . $head . '<body class="some-class"><p>Text</p></body></html>',
                '<!DOCTYPE html><html amp lang="en">' . $head . '<body class="some-class"><p>Text</p></body></html>',
            ],
            'emoji_amp_attribute'                      => [
                'utf-8',
                '<!DOCTYPE html><html' . PHP_EOL . Attribute::AMP_EMOJI . '>' . $head . '<body></body></html>',
                '<!DOCTYPE html><html ' . Attribute::AMP_EMOJI . '>' . $head . '<body></body></html>',
            ],
            // The next one is different, see https://github.com/ampproject/amphtml/issues/25990.
            'alt_emoji_amp_attribute'                  => [
                'utf-8',
                '<!DOCTYPE html><html ' . Attribute::AMP_EMOJI_ALT . '>' . $head . '<body></body></html>',
                '<!DOCTYPE html><html ' . Attribute::AMP_EMOJI_ALT . '>' . $head . '<body></body></html>',
            ],
            'emoji_amp4ads_attribute'                      => [
                'utf-8',
                '<!DOCTYPE html><html ' . Attribute::AMP4ADS_EMOJI . '>' . $head . '<body></body></html>',
                '<!DOCTYPE html><html ' . Attribute::AMP4ADS_EMOJI . '>' . $head . '<body></body></html>',
            ],
            // The next one is different, see https://github.com/ampproject/amphtml/issues/25990.
            'alt_emoji_amp4ads_attribute'                  => [
                'utf-8',
                '<!DOCTYPE html><html ' . Attribute::AMP4ADS_EMOJI_ALT . '>' . $head . '<body></body></html>',
                '<!DOCTYPE html><html ' . Attribute::AMP4ADS_EMOJI_ALT . '>' . $head . '<body></body></html>',
            ],
            'emoji_amp4email_attribute'                      => [
                'utf-8',
                '<!DOCTYPE html><html ' . Attribute::AMP4EMAIL_EMOJI . '>' . $head . '<body></body></html>',
                '<!DOCTYPE html><html ' . Attribute::AMP4EMAIL_EMOJI . '>' . $head . '<body></body></html>',
            ],
            // The next one is different, see https://github.com/ampproject/amphtml/issues/25990.
            'alt_emoji_amp4email_attribute'                  => [
                'utf-8',
                '<!DOCTYPE html><html ' . Attribute::AMP4EMAIL_EMOJI_ALT . '>' . $head . '<body></body></html>',
                '<!DOCTYPE html><html ' . Attribute::AMP4EMAIL_EMOJI_ALT . '>' . $head . '<body></body></html>',
            ],
            'html_attributes'                          => [
                'utf-8',
                '<!DOCTYPE html><html lang="en-US" class="no-js">' . $head . '<body></body></html>',
                '<!DOCTYPE html><html lang="en-US" class="no-js">' . $head . '<body></body></html>',
            ],
            'head_attributes'                          => [
                'utf-8',
                '<!DOCTYPE html><html><head itemscope itemtype="http://schema.org/WebSite"></head><body></body></html>',
                '<!DOCTYPE html><html><head itemscope itemtype="http://schema.org/WebSite"><meta charset="utf-8"></head><body></body></html>',
            ],
            'missing_head'                             => [
                'utf-8',
                '<!DOCTYPE html><html amp lang="en"><body class="some-class"><p>Text</p></body></html>',
                '<!DOCTYPE html><html amp lang="en">' . $head . '<body class="some-class"><p>Text</p></body></html>',
            ],
            'multiple_heads'                           => [
                'utf-8',
                '<!DOCTYPE html><html amp lang="en"><head itemscope itemtype="http://schema.org/WebSite"><meta name="first" content="something"></head><head data-something="else"><meta name="second" content="something-else"></head><body class="some-class"><p>Text</p></body></html>',
                '<!DOCTYPE html><html amp lang="en"><head itemscope itemtype="http://schema.org/WebSite" data-something="else"><meta charset="utf-8"><meta name="first" content="something"><meta name="second" content="something-else"></head><body class="some-class"><p>Text</p></body></html>',
            ],
            'missing_body'                             => [
                'utf-8',
                '<!DOCTYPE html><html amp lang="en">' . $head . '<p>Text</p></html>',
                '<!DOCTYPE html><html amp lang="en">' . $head . '<body><p>Text</p></body></html>',
            ],
            'multiple_bodies'                          => [
                'utf-8',
                '<!DOCTYPE html><html amp lang="en">' . $head . '<body class="no-js"><p>Text</p></body><body data-some-attribute="to keep"><p>Yet another Text</p></body></html>',
                '<!DOCTYPE html><html amp lang="en">' . $head . '<body class="no-js" data-some-attribute="to keep"><p>Text</p><p>Yet another Text</p></body></html>',
            ],
            'missing_head_and_body'                    => [
                'utf-8',
                '<!DOCTYPE html><html amp lang="en"><p>Text</p></html>',
                '<!DOCTYPE html><html amp lang="en">' . $head . '<body><p>Text</p></body></html>',
            ],
            'missing_html_and_head_and_body'           => [
                'utf-8',
                '<!DOCTYPE html><p>Text</p>',
                '<!DOCTYPE html><html>' . $head . '<body><p>Text</p></body></html>',
            ],
            'content_only'                             => [
                'utf-8',
                '<p>Text</p>',
                '<!DOCTYPE html><html>' . $head . '<body><p>Text</p></body></html>',
            ],
            'empty_document' => [
                'utf-8',
                '',
                '<!DOCTYPE html><html><head><meta charset="utf-8"></head><body></body></html>',
            ],
            'paragraph_document_fragment' => [
                'utf-8',
                '<p>Lorem ipsum</p>',
                '<!DOCTYPE html><html><head><meta charset="utf-8"></head><body><p>Lorem ipsum</p></body></html>',
            ],
            'document_without_html_element' => [
                'utf-8',
                '<head><title>Foo</title></head><body><p>Bar</p></body>',
                '<!DOCTYPE html><html><head><meta charset="utf-8"><title>Foo</title></head><body><p>Bar</p></body></html>',
            ],
            'document_fragment_with_head_and_paragraph' => [
                'utf-8',
                '<head><title>Foo</title></head><p>Bar</p>',
                '<!DOCTYPE html><html><head><meta charset="utf-8"><title>Foo</title></head><body><p>Bar</p></body></html>',
            ],
            'document_fragment_with_body_and_paragraph' => [
                'utf-8',
                '<body><p>Bar</p></body>',
                '<!DOCTYPE html><html><head><meta charset="utf-8"></head><body><p>Bar</p></body></html>',
            ],
            'document_fragment_with_body_and_paragraph_and_after_body' => [
                'utf-8',
                '<body><p>Bar</p></body><p>Baz</p>',
                '<!DOCTYPE html><html><head><meta charset="utf-8"></head><body><p>Bar</p><p>Baz</p></body></html>',
            ],
            'missing_doctype'                          => [
                'utf-8',
                '<html amp lang="en">' . $head . '<body class="some-class"><p>Text</p></body></html>',
                '<!DOCTYPE html><html amp lang="en">' . $head . '<body class="some-class"><p>Text</p></body></html>',
            ],
            'html_4_loose_doctype'                     => [
                'utf-8',
                '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd"><html amp lang="en">' . $head . '<body class="some-class"><p>Text</p></body></html>',
                '<!DOCTYPE html><html amp lang="en">' . $head . '<body class="some-class"><p>Text</p></body></html>',
            ],
            'html_401_strict_doctype'                  => [
                'utf-8',
                '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"><html amp lang="en">' . $head . '<body class="some-class"><p>Text</p></body></html>',
                '<!DOCTYPE html><html amp lang="en">' . $head . '<body class="some-class"><p>Text</p></body></html>',
            ],
            'xhtml_10_strict_doctype'                  => [
                'utf-8',
                '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html amp lang="en">' . $head . '<body class="some-class"><p>Text</p></body></html>',
                '<!DOCTYPE html><html amp lang="en">' . $head . '<body class="some-class"><p>Text</p></body></html>',
            ],
            'html_with_xmlns_and_xml_lang'             => [
                'utf-8',
                '<!DOCTYPE html><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">' . $head . '<body></body></html>',
                '<!DOCTYPE html><html lang="es">' . $head . '<body></body></html>',
            ],
            'html_with_xmlns_value_that_should_remain' => [
                'utf-8',
                '<!DOCTYPE html><html xmlns="http://www.w3.org/TR/html4/">' . $head . '<body></body></html>',
                '<!DOCTYPE html><html xmlns="http://www.w3.org/TR/html4/">' . $head . '<body></body></html>',
            ],
            'html_with_lang_and_xml_lang'              => [
                'utf-8',
                '<!DOCTYPE html><html lang="es" xml:lang="fr">' . $head . '<body></body></html>',
                '<!DOCTYPE html><html lang="es">' . $head . '<body></body></html>',
            ],
            'html_with_empty_xml_lang'                 => [
                'utf-8',
                '<!DOCTYPE html><html xml:lang="">' . $head . '<body></body></html>',
                '<!DOCTYPE html><html>' . $head . '<body></body></html>',
            ],
            'html_with_empty_lang'                     => [
                'utf-8',
                '<!DOCTYPE html><html lang="" xml:lang="es">' . $head . '<body></body></html>',
                '<!DOCTYPE html><html lang="es">' . $head . '<body></body></html>',
            ],
            'slashes_on_closing_tags'                  => [
                'utf-8',
                '<!DOCTYPE html><html amp lang="en"><head><meta charset="utf-8" /></head><body class="some-class"><p>Text</p></body></html>',
                '<!DOCTYPE html><html amp lang="en"><head><meta charset="utf-8"></head><body class="some-class"><p>Text</p></body></html>',
            ],
            'lots_of_whitespace'                       => [
                'utf-8',
                " \n <!DOCTYPE \n html \n > \n <html \n amp \n lang=\"en\"   \n  >  \n   <head >   \n<meta \n   charset=\"utf-8\">  \n  </head>  \n  <body   \n class=\"some-class\"  \n >  \n  <p>  \n  Text  \n  </p>  \n\n  </body  >  \n  </html  >  \n  ",
                '<!DOCTYPE html><html amp lang="en">' . $head . '<body class="some-class"><p> Text </p></body></html>',
            ],
            'utf_8_encoding_predefined'                => [
                'utf-8',
                '<p>مرحبا بالعالم! Check out ‘this’ and “that” and—other things.</p>',
                '<!DOCTYPE html><html>' . $head . '<body><p>مرحبا بالعالم! Check out ‘this’ and “that” and—other things.</p></body></html>',
            ],
            'utf_8_encoding_predefined_uc'             => [
                'UTF-8',
                '<p>مرحبا بالعالم! Check out ‘this’ and “that” and—other things.</p>',
                '<!DOCTYPE html><html>' . $head . '<body><p>مرحبا بالعالم! Check out ‘this’ and “that” and—other things.</p></body></html>',
            ],
            'utf_8_encoding_auto'                      => [
                'auto',
                '<p>مرحبا بالعالم! Check out ‘this’ and “that” and—other things.</p>',
                '<!DOCTYPE html><html>' . $head . '<body><p>مرحبا بالعالم! Check out ‘this’ and “that” and—other things.</p></body></html>',
            ],
            'utf_8_encoding_guessed_via_charset'       => [
                '',
                '<html>' . $head . '<body><p>مرحبا بالعالم! Check out ‘this’ and “that” and—other things.</p></body>',
                '<!DOCTYPE html><html>' . $head . '<body><p>مرحبا بالعالم! Check out ‘this’ and “that” and—other things.</p></body></html>',
            ],
            'utf_8_encoding_guessed_via_charset_uc'    => [
                '',
                '<html><head><meta charset="UTF-8"></head><body><p>مرحبا بالعالم! Check out ‘this’ and “that” and—other things.</p></body>',
                '<!DOCTYPE html><html><head><meta charset="UTF-8"></head><body><p>مرحبا بالعالم! Check out ‘this’ and “that” and—other things.</p></body></html>',
            ],
            'utf_8_encoding_guessed_via_wrong_charset'       => [
                '',
                '<html><head><meta charset="something-else"></head><body><p>مرحبا بالعالم! Check out ‘this’ and “that” and—other things.</p></body>',
                '<!DOCTYPE html><html>' . $head . '<body><p>مرحبا بالعالم! Check out ‘this’ and “that” and—other things.</p></body></html>',
            ],
            'utf_8_encoding_guessed_via_content'       => [
                '',
                '<p>مرحبا بالعالم! Check out ‘this’ and “that” and—other things.</p>',
                '<!DOCTYPE html><html>' . $head . '<body><p>مرحبا بالعالم! Check out ‘this’ and “that” and—other things.</p></body></html>',
            ],
            'iso_8859_1_encoding_predefined'           => [
                'iso-8859-1',
                mb_convert_encoding('<!DOCTYPE html><html><head></head><body><p>ÄÖÜ</p></body></html>', 'ISO-8859-1', 'UTF-8'),
                '<!DOCTYPE html><html>' . $head . '<body><p>ÄÖÜ</p></body></html>',
            ],
            'iso_8859_1_encoding_predefined_uc'        => [
                'ISO-8859-1',
                mb_convert_encoding('<!DOCTYPE html><html><head></head><body><p>ÄÖÜ</p></body></html>', 'ISO-8859-1', 'UTF-8'),
                '<!DOCTYPE html><html>' . $head . '<body><p>ÄÖÜ</p></body></html>',
            ],
            'iso_8859_1_encoding_auto'                 => [
                'iso-8859-1',
                mb_convert_encoding('<!DOCTYPE html><html><head></head><body><p>ÄÖÜ</p></body></html>', 'ISO-8859-1', 'UTF-8'),
                '<!DOCTYPE html><html>' . $head . '<body><p>ÄÖÜ</p></body></html>',
            ],
            'iso_8859_1_encoding_guessed_via_charset'  => [
                '',
                mb_convert_encoding('<!DOCTYPE html><html><head><meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" /></head><body><p>ÄÖÜ</p></body></html>', 'ISO-8859-1', 'UTF-8'),
                '<!DOCTYPE html><html>' . $head . '<body><p>ÄÖÜ</p></body></html>',
            ],
            'iso_8859_1_encoding_guessed_via_wrong_charset'  => [
                '',
                mb_convert_encoding('<!DOCTYPE html><html><head><meta http-equiv="Content-Type" content="text/html; charset=something-else" /></head><body><p>ÄÖÜ</p></body></html>', 'ISO-8859-1', 'UTF-8'),
                '<!DOCTYPE html><html>' . $head . '<body><p>ÄÖÜ</p></body></html>',
            ],
            'iso_8859_1_encoding_guessed_via_content'  => [
                '',
                mb_convert_encoding('<!DOCTYPE html><html><body><p>ÄÖÜ</p></body></html>', 'ISO-8859-1', 'UTF-8'),
                '<!DOCTYPE html><html>' . $head . '<body><p>ÄÖÜ</p></body></html>',
            ],
            'mapping_encodings_to_fallbacks'  => [
                'latin-1',
                mb_convert_encoding('<!DOCTYPE html><html><body><p>ÄÖÜ</p></body></html>', 'ISO-8859-1', 'UTF-8'),
                '<!DOCTYPE html><html>' . $head . '<body><p>ÄÖÜ</p></body></html>',
            ],
            'raw_iso_8859_1'                           => [
                '',
                mb_convert_encoding('ÄÖÜ', 'ISO-8859-1', 'UTF-8'),
                '<!DOCTYPE html><html>' . $head . '<body>ÄÖÜ</body></html>',
            ],
            // Make sure we correctly identify the ISO-8859 sub-charsets ("€" does not exist in ISO-8859-1).
            'iso_8859_15_encoding_predefined'          => [
                'iso-8859-15',
                mb_convert_encoding('<!DOCTYPE html><html><head></head><body><p>€</p></body></html>', 'ISO-8859-15', 'UTF-8'),
                '<!DOCTYPE html><html>' . $head . '<body><p>€</p></body></html>',
            ],
            'iso_8859_15_encoding_predefined_uc'       => [
                'ISO-8859-15',
                mb_convert_encoding('<!DOCTYPE html><html><head></head><body><p>€</p></body></html>', 'ISO-8859-15', 'UTF-8'),
                '<!DOCTYPE html><html>' . $head . '<body><p>€</p></body></html>',
            ],
            'iso_8859_15_encoding_guessed_via_charset' => [
                '',
                mb_convert_encoding('<!DOCTYPE html><html><head><meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-15" /></head><body><p>€</p></body></html>', 'ISO-8859-15', 'UTF-8'),
                '<!DOCTYPE html><html>' . $head . '<body><p>€</p></body></html>',
            ],
            'iso_8859_15_encoding_guessed_via_content' => [
                '',
                mb_convert_encoding('<!DOCTYPE html><html><body><p>€</p></body></html>', 'ISO-8859-15', 'UTF-8'),
                '<!DOCTYPE html><html>' . $head . '<body><p>€</p></body></html>',
            ],
            'raw_iso_8859_15'                          => [
                '',
                mb_convert_encoding('€', 'ISO-8859-15', 'UTF-8'),
                '<!DOCTYPE html><html>' . $head . '<body>€</body></html>',
            ],
            'JIS_encoding_guessed_via_content'  => [
                '',
                mb_convert_encoding('<!DOCTYPE html><html><body><p>世界的に木材価格が高騰する「ウッドショック」が起きている。</p></body></html>', 'JIS', 'UTF-8'),
                '<!DOCTYPE html><html>' . $head . '<body><p>世界的に木材価格が高騰する「ウッドショック」が起きている。</p></body></html>',
            ],
            'EUC-JP_encoding_guessed_via_content'  => [
                '',
                mb_convert_encoding('<!DOCTYPE html><html><body><p>世界的に木材価格が高騰する「ウッドショック」が起きている。</p></body></html>', 'EUC-JP', 'UTF-8'),
                '<!DOCTYPE html><html>' . $head . '<body><p>世界的に木材価格が高騰する「ウッドショック」が起きている。</p></body></html>',
            ],
            'eucJP-win_encoding_guessed_via_content'  => [
                '',
                mb_convert_encoding('<!DOCTYPE html><html><body><p>世界的に木材価格が高騰する「ウッドショック」が起きている。</p></body></html>', 'eucJP-win', 'UTF-8'),
                '<!DOCTYPE html><html>' . $head . '<body><p>世界的に木材価格が高騰する「ウッドショック」が起きている。</p></body></html>',
            ],
            'ISO-2022-JP_encoding_guessed_via_content'  => [
                '',
                mb_convert_encoding('<!DOCTYPE html><html><body><p>世界的に木材価格が高騰する「ウッドショック」が起きている。</p></body></html>', 'ISO-2022-JP', 'UTF-8'),
                '<!DOCTYPE html><html>' . $head . '<body><p>世界的に木材価格が高騰する「ウッドショック」が起きている。</p></body></html>',
            ],
            'nodes_around_main_elements'            => [
                'utf-8',
                ' <!-- comment 1 --> <!doctype html> <!-- comment 2 --> <html> <!-- comment 3 --> <head></head> <!-- comment 4 --> <body></body> <!-- comment after body --></html><!-- start --><div>Query Monitor</div><!-- end -->',
                ' <!-- comment 1 --> <!doctype html> <!-- comment 2 --> <html> <!-- comment 3 --> ' . $head . ' <!-- comment 4 --> <body> <!-- comment after body --><!-- start --><div>Query Monitor</div><!-- end --></body></html>',
            ],
            'ie_conditional_comments'                  => [
                'utf-8',
                '<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7"> <![endif]--><!--[if IE 7]> <html class="lt-ie9 lt-ie8"> <![endif]--><!--[if IE 8]> <html class="lt-ie9"> <![endif]--><!--[if gt IE 8]><!--> <html class=""> <!--<![endif]--></html>',
                '<!DOCTYPE html><html class="">' . $head . '<body></body></html>',
            ],
            'comments_preserve_position'               => [
                'utf-8',
                "<!DOCTYPE html> \n <!-- before \n <html> --> \n <html> \n <!-- before \n <head> ----> \n <head><meta charset=\"utf-8\"> \n <!-- within \n <head> ----> \n </head> \n <!-- before \n <body> ----> \n <body class=\"something\" data-something=\"something\"> \n <!-- within \n <body> ----> \n </body> \n <!-- after \n </body> ----> \n </html> \n <!-- after \n </html> --> \n",
                "<!DOCTYPE html> \n <!-- before \n <html> --> \n <html> \n <!-- before \n <head> ----> \n <head><meta charset=\"utf-8\"> \n <!-- within \n <head> ----> \n </head> \n <!-- before \n <body> ----> \n <body class=\"something\" data-something=\"something\"> \n <!-- within \n <body> ----> \n  \n <!-- after \n </body> ----> \n  \n <!-- after \n </html> --> \n</body></html>",
            ],
            'profile_attribute_in_head_moved_to_link'  => [
                'utf-8',
                '<!DOCTYPE html><html><head profile="https://example.com"></head><body></body></html>',
                '<!DOCTYPE html><html><head><meta charset="utf-8"><link rel="profile" href="https://example.com"></head><body></body></html>',
            ],
            'profile_attribute_in_head_empty_string'   => [
                'utf-8',
                '<!DOCTYPE html><html><head profile=""></head><body></body></html>',
                '<!DOCTYPE html><html><head><meta charset="utf-8"></head><body></body></html>',
            ],
            'amp_mustache_template_with_table'         => [
                'utf-8',
                '<!DOCTYPE html><html>' . $head . '<body><template type="amp-mustache"><table><tr>{{#example}}<td></td>{{/example}}</tr></table></template></body></html>',
                '<!DOCTYPE html><html>' . $head . '<body><template type="amp-mustache"><table><tr>{{#example}}<td></td>{{/example}}</tr></table></template></body></html>',
            ],
            'amp_mustache_template_script_with_table'  => [
                'utf-8',
                '<!DOCTYPE html><html>' . $head . '<body><script id="baz" type="text/plain" template="amp-mustache"><table><tr>{{#example}}<td></td>{{/example}}</tr></table></script></body></html>',
                '<!DOCTYPE html><html>' . $head . '<body><script id="baz" type="text/plain" template="amp-mustache"><table><tr>{{#example}}<td></td>{{/example}}</tr></table></script></body></html>',
            ],
            'amp_mustache_spaces_in_closing_script'    => [
                'utf-8',
                '<!DOCTYPE html><html>' . $head . '<body><script id="baz" type="text/plain" template="amp-mustache"><table><tr>{{#example}}<td></td>{{/example}}</tr></table></script  ></body></html>',
                '<!DOCTYPE html><html>' . $head . '<body><script id="baz" type="text/plain" template="amp-mustache"><table><tr>{{#example}}<td></td>{{/example}}</tr></table></script></body></html>',
            ],
            'amp_mustache_template_single_quotes'      => [
                'utf-8',
                '<!DOCTYPE html><html>' . $head . '<body><script type=\'text/plain\' template=\'amp-mustache\'><table><tr>{{#example}}<td></td>{{/example}}</tr></table></script></body></html>',
                '<!DOCTYPE html><html>' . $head . '<body><script type="text/plain" template="amp-mustache"><table><tr>{{#example}}<td></td>{{/example}}</tr></table></script></body></html>',
            ],
            'amp_mustache_no_quote'                    => [
                'utf-8',
                '<!DOCTYPE html><html>' . $head . '<body><script type=\'text/plain\' template=amp-mustache><table><tr>{{#example}}<td></td>{{/example}}</tr></table></script></body></html>',
                '<!DOCTYPE html><html>' . $head . '<body><script type="text/plain" template="amp-mustache"><table><tr>{{#example}}<td></td>{{/example}}</tr></table></script></body></html>',
            ],
            'amp_mustache_script_multiple_children'    => [
                'utf-8',
                '<!DOCTYPE html><html>' . $head . '<body><script type="text/plain" template="amp-mustache"><h1>{{heading}}</h1><p>{{content}}</p><table><tr>{{#example}}<td></td>{{/example}}</tr></table></script></body></html>',
                '<!DOCTYPE html><html>' . $head . '<body><script type="text/plain" template="amp-mustache"><h1>{{heading}}</h1><p>{{content}}</p><table><tr>{{#example}}<td></td>{{/example}}</tr></table></script></body></html>',
            ],
            'multiple_mustache_templates_still_appear' => [
                'utf-8',
                '<!DOCTYPE html><html>' . $head . '<body><script template="amp-mustache" type="text/plain" id="foo"><table><tr>{{#example}}<td></td>{{/example}}</tr></table></script><script type="text/plain" template="amp-mustache" id="example"><p>{{#baz}}This is inside a template{{/baz}}</p></script></body></html>',
                '<!DOCTYPE html><html>' . $head . '<body><script template="amp-mustache" type="text/plain" id="foo"><table><tr>{{#example}}<td></td>{{/example}}</tr></table></script><script type="text/plain" template="amp-mustache" id="example"><p>{{#baz}}This is inside a template{{/baz}}</p></script></body></html>',
            ],
            'multiline_mustache_templates_appear'      => [
                'utf-8',
                '
                <!DOCTYPE html>
                <html>
                    <head><meta charset="utf-8"></head>
                    <body>
                    <script type="text/plain" template="amp-mustache">
                      <table>
                        <tr>
                    {{#foo}}<td></td>{{/foo}}
                        </tr>
                      </table>
                    </script>
                    </body>
                </html>
                ',
                '
                <!DOCTYPE html>
                <html>
                    <head><meta charset="utf-8"></head>
                    <body>
                    <script type="text/plain" template="amp-mustache">
                      <table>
                        <tr>
                    {{#foo}}<td></td>{{/foo}}
                        </tr>
                      </table>
                    </script>
                    </body>
                </html>
                ',
            ],
            'mustache_url_encoded_attributes_in_template_tags' => [
                'utf-8',
                '<!DOCTYPE html><html>' . $head . '<body><template type="amp-mustache"><div><form action="{{action}}"><a href="{{url}}"><img src="{{		src
    }}"></a><img src="/test/image with spaces.jpg" /></form></div></template></body></html>',
                '<!DOCTYPE html><html>' . $head . '<body><template type="amp-mustache"><div><form action="{{action}}"><a href="{{url}}"><img src="{{src}}"></a><img src="/test/image%20with%20spaces.jpg"></form></div></template></body></html>',
            ],
            'mustache_url_encoded_attributes_in_script_tags' => [
                'utf-8',
                '<!DOCTYPE html><html>' . $head . '<body><script type="text/plain" template="amp-mustache"><div><form action="{{action}}"><a href="{{url}}"><img src="{{src}}"></a></form></div></script></body></html>',
                '<!DOCTYPE html><html>' . $head . '<body><script type="text/plain" template="amp-mustache"><div><form action="{{action}}"><a href="{{url}}"><img src="{{src}}"></a></form></div></script></body></html>',
            ],
            'amp_mustache_template_with_ampersand_character' => [
                'utf-8',
                '<!DOCTYPE html><html>' . $head . '<body><template type="amp-mustache"><a href="https://example.com/?foo={{foo}}&bar={{bar}}&amp;baz={{baz}}&#38;qux={{qux}}&#x26;quux={{quux}}" title="This & that. &quot;That&quot; &amp; &apos;this&apos;.">Link: This & that. That &amp; this. &lt;&#x3C;&#60;</a></template></body></html>',
                '<!DOCTYPE html><html>' . $head . '<body><template type="amp-mustache"><a href="https://example.com/?foo={{foo}}&amp;bar={{bar}}&amp;baz={{baz}}&amp;qux={{qux}}&amp;quux={{quux}}" title="This &amp; that. &quot;That&quot; &amp; \'this\'.">Link: This &amp; that. That &amp; this. &lt;&lt;&lt;</a></template></body></html>',
            ],
            'schema_markup_check' => [
                'utf-8',
                '
                <!DOCTYPE html>
                <html>
                    <head><meta charset="utf-8"></head>
                    <body>
                    <script type="application/ld+json">
                        {"@context":"http:\/\/schema.org","@type":"LiveBlogPosting","url":"https:\/\/amp.dev\/documentation\/examples\/news-publishing\/live_blog\/","articleBody":"<p><img class=\"aligncenter size-large wp-image-807214\" src=\"https:\/\/images.frandroid.com\/wp-content\/uploads\/2020\/11\/sonos-beam-1200x799.jpg\" alt=\"\" width=\"1200\" height=\"799\" \/><br \/><\/p>\n","datePublished":"2016-09-08T23:04:28.24337"}
                    </script>
                    </body>
                </html>
                ',
                '
                <!DOCTYPE html>
                <html>
                    <head><meta charset="utf-8"></head>
                    <body>
                    <script type="application/ld+json">
                        {"@context":"http:\/\/schema.org","@type":"LiveBlogPosting","url":"https:\/\/amp.dev\/documentation\/examples\/news-publishing\/live_blog\/","articleBody":"<p><img class=\"aligncenter size-large wp-image-807214\" src=\"https:\/\/images.frandroid.com\/wp-content\/uploads\/2020\/11\/sonos-beam-1200x799.jpg\" alt=\"\" width=\"1200\" height=\"799\" \/><br \/><\/p>\n","datePublished":"2016-09-08T23:04:28.24337"}
                    </script>
                    </body>
                </html>
                '
            ],
            'self_closing_tag' => [
                'utf-8',
                '<!DOCTYPE html><html><head><meta charset="utf-8"></head><body><br/></body></html>',
                '<!DOCTYPE html><html><head><meta charset="utf-8"></head><body><br></body></html>',
            ],
            'emoji_in_html_tag_for_amp_attribute' => [
                'utf-8',
                '<!DOCTYPE html><html ⚡ [class]="mystate.class" class="blue ⚡">' . $head . '<body></body></html>',
                '<!DOCTYPE html><html ⚡ [class]="mystate.class" class="blue ⚡">' . $head . '<body></body></html>',
            ],
            'emoji_in_html_tag_for_data_attribute' => [
                'utf-8',
                '<!DOCTYPE html><html amp data-text="⚡">' . $head . '<body></body></html>',
                '<!DOCTYPE html><html amp data-text="⚡">' . $head . '<body></body></html>',
            ],
            'amp-bind on html tag class attribute' => [
                'utf-8',
                '<!DOCTYPE html><html amp [class]="mystate.class" class="blue">' . $head . '<body></body></html>',
                '<!DOCTYPE html><html amp [class]="mystate.class" class="blue">' . $head . '<body></body></html>',
            ],
            'preserve closing tags in inline js variables' => [
                'utf-8',
                '<!DOCTYPE html><html amp data-text="⚡">' . $head . '<body><script>let foo = { bar: "<div>amp</div>" }</script></body></html>',
                '<!DOCTYPE html><html amp data-text="⚡">' . $head . '<body><script>let foo = { bar: "<div>amp</div>" }</script></body></html>',
            ],
            'preserve Varnish esi tags' => [
                'utf-8',
                '<!DOCTYPE html><html><head></head><body>'
                . '    <esi:choose>'
                . '        <esi:when test="$(logindata{name}) == null">'
                . '            <esi:include src="/login/$(logindata{name})"/>'
                . '        </esi:when>'
                . '        <esi:otherwise>'
                . '            <esi:include src="/login/guest.html"/>'
                . '        </esi:otherwise>'
                . '    </esi:choose>'
                . '</body></html>',
                '<!DOCTYPE html><html>' . $head . '<body>'
                . '    <esi:choose>'
                . '        <esi:when test="$(logindata{name}) == null">'
                . '            <esi:include src="/login/$(logindata{name})"/>'
                . '        </esi:when>'
                . '        <esi:otherwise>'
                . '            <esi:include src="/login/guest.html"/>'
                . '        </esi:otherwise>'
                . '    </esi:choose>'
                . '</body></html>',
            ]
        ];
    }

    /**
     * Tests loading and saving the content via AmpProject\Dom\Document.
     *
     * @param string $charset  Charset to use.
     * @param string $source   Source content.
     * @param string $expected Expected target content.
     *
     * @dataProvider dataDomDocument
     * @covers       \AmpProject\Dom\Document::loadHTML()
     * @covers       \AmpProject\Dom\Document::saveHTML()
     * @covers       \AmpProject\Dom\Document\Filter\DeduplicateTag
     * @covers       \AmpProject\Dom\Document\Filter\DocumentEncoding
     * @covers       \AmpProject\Dom\Document\Filter\MustacheScriptTemplates
     * @covers       \AmpProject\Dom\Document\Filter\NormalizeHtmlAttributes
     * @covers       \AmpProject\Dom\Document\Filter\ConvertHeadProfileToLink
     */
    public function testDomDocument($charset, $source, $expected)
    {
        $document = Document::fromHtml($source, $charset);
        $this->assertEqualMarkup($expected, $document->saveHTML());
    }

    /**
     * Test data-amp-bind attributes.
     *
     * @covers \AmpProject\Dom\Document\Filter\AmpBindAttributes::beforeLoad()
     * @covers \AmpProject\Dom\Document\Filter\AmpBindAttributes::afterSave()
     */
    public function testAmpBindConversion()
    {
        // Conversion is transparent and end result preserves square brackets.
        $original  = '<amp-img width="300" height="200" data-foo="bar" selected src="/img/dog.jpg" [src]="myAnimals[currentAnimal].imageUrl"></amp-img>';
        $dom       = Document::fromHtml($original);
        $converted = $dom->saveHTML($dom->body->firstChild);
        $this->assertEquals($original, $converted);
        $this->assertStringContainsString('[src]="myAnimals[currentAnimal].imageUrl"', $converted);
        $this->assertStringNotContainsString(Amp::BIND_DATA_ATTR_PREFIX, $converted);
        $this->assertStringContainsString('width="300" height="200" data-foo="bar" selected', $converted);

        // Conversion is transparent and end result preserves data-amp-bind-* syntax.
        $original  = '<amp-img width="300" height="200" data-foo="bar" selected src="/img/dog.jpg" data-amp-bind-src="myAnimals[currentAnimal].imageUrl"></amp-img>';
        $dom       = Document::fromHtml($original);
        $converted = $dom->saveHTML($dom->body->firstChild);
        $this->assertEquals($original, $converted);
        $this->assertStringContainsString(Amp::BIND_DATA_ATTR_PREFIX . 'src="myAnimals[currentAnimal].imageUrl"', $converted);
        $this->assertStringNotContainsString('[src]', $converted);
        $this->assertStringContainsString('width="300" height="200" data-foo="bar" selected', $converted);

        // Check tag with self-closing attribute.
        $original  = '<input type="text" role="textbox" class="calc-input" id="liens" name="liens" [value]="(result1 != null) ? result1.liens : \'verifying…\'" />';
        $dom       = Document::fromHtml($original);
        $converted = $dom->saveHTML($dom->body->firstChild);
        $this->assertSimilarMarkup($original, $converted);

        // Preserve trailing slash that is actually the attribute value.
        $original  = '<a href=/>Home</a>';
        $dom       = Document::fromHtml($original);
        $converted = $dom->saveHTML($dom->body->firstChild);
        $this->assertEquals('<a href="/">Home</a>', $converted);

        // Options make the conversion behavior configurable.
        $original          = '<div [id]="valueA" data-amp-bind-class="valueB">These stay intact within content: [id]="valueA" data-amp-bind-class="valueB"</div>';
        $dataAttribute     = '<div data-amp-bind-id="valueA" data-amp-bind-class="valueB">These stay intact within content: [id]="valueA" data-amp-bind-class="valueB"</div>';
        $squareBrackets    = '<div [id]="valueA" [class]="valueB">These stay intact within content: [id]="valueA" data-amp-bind-class="valueB"</div>';
        $domAuto           = Document::fromHtml($original, [Document\Option::AMP_BIND_SYNTAX => Document\Option::AMP_BIND_SYNTAX_AUTO]);
        $domDataAttribute  = Document::fromHtml($original, [Document\Option::AMP_BIND_SYNTAX => Document\Option::AMP_BIND_SYNTAX_DATA_ATTRIBUTE]);
        $domSquareBrackets = Document::fromHtml($original, [Document\Option::AMP_BIND_SYNTAX => Document\Option::AMP_BIND_SYNTAX_SQUARE_BRACKETS]);
        $this->assertSimilarMarkup($original, $domAuto->saveHTML($domAuto->body->firstChild));
        $this->assertSimilarMarkup($dataAttribute, $domDataAttribute->saveHTML($domDataAttribute->body->firstChild));
        $this->assertSimilarMarkup($squareBrackets, $domSquareBrackets->saveHTML($domSquareBrackets->body->firstChild));

        // Test malformed.
        $malformed_html = [
            '<amp-img width="123" [text]="..."</amp-img>',
            '<amp-img width="123" [text="..."]></amp-img>',
            '<amp-img width="123" [text]="..." *bad*></amp-img>',
        ];
        foreach ($malformed_html as $html) {
            $converted = Document::fromHtml($html)->saveHTML();
            $this->assertStringNotContainsString(Amp::BIND_DATA_ATTR_PREFIX, $converted, "Source: {$html}");
        }
    }

    /**
     * Test handling noscript elements in the head.
     *
     * @covers \AmpProject\Dom\Document\Filter\NoscriptElements::beforeLoad()
     * @covers \AmpProject\Dom\Document\Filter\NoscriptElements::afterLoad()
     */
    public function testHeadNoscriptElementHandling()
    {
        $original = '
            <html>
                <head>
                    <noscript>
                        <style>/*1*/</style>
                    </noscript>
                    <title>Hello</title>
                    <noscript>
                        <style>/*2*/</style>
                    </noscript>
                </head>
                <body>
                    <noscript>
                        <style>/*3*/</style>
                    </noscript>
                </body>
            </html>
        ';

        $dom = Document::fromHtml($original);
        $noscripts = $dom->getElementsByTagName('noscript');

        $this->assertEquals(3, $noscripts->length);
        $this->assertEquals('head', $noscripts->item(0)->parentNode->nodeName);
        $this->assertEquals('head', $noscripts->item(1)->parentNode->nodeName);
        $this->assertEquals('body', $noscripts->item(2)->parentNode->nodeName);
    }

    /**
     * Get Table Row Iterations.
     *
     * @return array An array of arrays holding an integer representation of iterations.
     */
    public function getTableRowIterations()
    {
        return [[1], [10], [100], [1000], [10000], [100000]];
    }

    /**
     * Tests attribute conversions on content with iframe srcdocs of variable lengths.
     *
     * @dataProvider getTableRowIterations
     *
     * @param int $iterations The number of table rows to append to iframe srcdoc.
     */
    public function testAttributeConversionOnLongIframeSrcdocs($iterations)
    {
        $html = '<html amp><head><meta charset="utf-8"></head><body><table>';

        for ($i = 0; $i < $iterations; $i++) {
            $html .= '
                <tr>
                <td class="rank" style="width:2%;">1453</td>
                <td class="text" style="width:10%;">1947</td>
                <td class="text">Pittsburgh Ironmen</td>
                <td class="boolean" style="width:10%;text-align:center;"></td>
                <td class="number" style="width:10%;">1242</td>
                <td class="number">1192</td>
                <td class="number">1111</td>
                <td class="number highlight">1182</td>
                </tr>
            ';
        }

        $html .= '</table></body></html>';

        $to_convert = sprintf(
            '<amp-iframe sandbox="allow-scripts" srcdoc="%s"> </amp-iframe>',
            htmlentities($html)
        );

        Document::fromHtml($to_convert)->saveHTML();

        $this->assertSame(PREG_NO_ERROR, preg_last_error(), 'Probably failed when backtrack limit was exhausted.');
    }

    /**
     * Test that HEAD and BODY elements are always present.
     *
     * @covers \AmpProject\Dom\Document::normalizeDocumentStructure()
     */
    public function testEnsuringHeadBody()
    {
        // The meta charset tag that is automatically added needs to always be taken into account.

        $html = '<html><body><p>Hello</p></body></html>';
        $dom  = Document::fromHtml($html);
        $this->assertEquals('head', $dom->documentElement->firstChild->nodeName);
        $this->assertEquals(1, $dom->head->childNodes->length);
        $this->assertEquals('body', $dom->documentElement->lastChild->nodeName);
        $this->assertEquals($dom->body, $dom->getElementsByTagName('p')->item(0)->parentNode);

        $html = '<html><head><title>foo</title></head></html>';
        $dom  = Document::fromHtml($html);
        $this->assertEquals('head', $dom->documentElement->firstChild->nodeName);
        $this->assertEquals($dom->head->firstChild, $dom->getElementsByTagName('meta')->item(0));
        $this->assertEquals($dom->head->firstChild->nextSibling, $dom->getElementsByTagName('title')->item(0));
        $this->assertEquals('body', $dom->documentElement->lastChild->nodeName);
        $this->assertEquals(0, $dom->body->childNodes->length);

        $html = '<html><head><title>foo</title></head><p>no body</p></html>';
        $dom  = Document::fromHtml($html);
        $this->assertEquals('head', $dom->documentElement->firstChild->nodeName);
        $this->assertEquals($dom->head->firstChild, $dom->getElementsByTagName('meta')->item(0));
        $this->assertEquals($dom->head->firstChild->nextSibling, $dom->getElementsByTagName('title')->item(0));
        $p = $dom->getElementsByTagName('p')->item(0);
        $this->assertEquals($dom->body, $p->parentNode);
        $this->assertEquals('no body', $p->textContent);

        $html = 'Hello world';
        $dom  = Document::fromHtml($html);
        $this->assertEquals('head', $dom->documentElement->firstChild->nodeName);
        $this->assertEquals(1, $dom->head->childNodes->length);
        $this->assertEquals('body', $dom->documentElement->lastChild->nodeName);
        $this->assertEquals('Hello world', $dom->body->lastChild->textContent);
    }

    /**
     * Test that invalid head nodes are moved to body.
     *
     * @covers \AmpProject\Dom\Document::moveInvalidHeadNodesToBody()
     */
    public function testInvalidHeadNodes()
    {
        // The meta charset tag that is automatically added needs to always be taken into account.

        // Text node.
        $html = '<html><head>text</head><body><span>end</span></body></html>';
        $dom  = Document::fromHtml($html);
        $this->assertEquals('meta', $dom->head->firstChild->tagName);
        $this->assertNull($dom->head->firstChild->nextSibling);
        $body_first_child = $dom->body->firstChild;
        $this->assertInstanceOf(Element::class, $body_first_child);
        $this->assertEquals('text', $body_first_child->textContent);

        // Valid nodes.
        $html = '<html><head><!--foo--><title>a</title><base href="/"><meta name="foo" content="bar"><link rel="test" href="/"><style></style><noscript><img src="http://example.com/foo.png"></noscript><script></script></head><body></body></html>';
        $dom  = Document::fromHtml($html);
        $this->assertEquals(9, $dom->head->childNodes->length);
        $this->assertNull($dom->body->firstChild);

        // Invalid nodes.
        $html = '<html><head><?pi ?><span></span><div></div><p>hi</p><img src="https://example.com"><iframe src="/"></iframe></head><body></body></html>';
        $dom  = Document::fromHtml($html);
        $this->assertEquals('meta', $dom->head->firstChild->tagName);
        $this->assertNull($dom->head->firstChild->nextSibling);
        $this->assertEquals(6, $dom->body->childNodes->length);

        // Test with missing closing head tag.
        $expected = TestMarkup::DOCTYPE . '<html>'
            . '<head>' . TestMarkup::META_CHARSET . '<meta name="foo" content="bar"></head>'
            . '<body><foo></foo><bar></bar></body></html>';

        $html     = '<html><head><meta name="foo" content="bar"><foo></foo><bar></bar>';
        $document = Document::fromHtml($html);
        $output   = $document->saveHTML();

        $this->assertEqualMarkup($expected, $output);
    }

    /**
     * Get head node data.
     *
     * @return array Head node data.
     */
    public function getHeadNodeData()
    {
        $dom = new Document();

        $newNode = static function ($tag, $attributes) use ($dom) {
            $node = $dom->createElement($tag);
            foreach ($attributes as $name => $value) {
                $node->setAttribute($name, $value);
            }
            return $node;
        };

        return [
            'title'                  => [$dom, $newNode('title', []), true],
            'base'                   => [$dom, $newNode('base', ['href' => '/']), true],
            'script'                 => [$dom, $newNode('script', ['src' => 'http://example.com/test.js']), true],
            'style'                  => [$dom, $newNode('style', ['media' => 'print']), true],
            'noscript'               => [$dom, $newNode('noscript', []), true],
            'link'                   => [
                $dom,
                $newNode('link', ['rel' => 'stylesheet', 'href' => 'https://example.com/foo.css']),
                true,
            ],
            'meta'                   => [
                $dom,
                $newNode('meta', ['name' => 'foo', 'content' => 'https://example.com/foo.css']),
                true,
            ],
            'empty textnode'         => [$dom, $dom->createTextNode(" \n\t"), true],
            'non-empty texnode'      => [$dom, $dom->createTextNode('no'), false],
            'comment'                => [$dom, $dom->createComment('hello world'), true],
            'processing instruction' => [$dom, $dom->createProcessingInstruction('test'), false],
            'cdata'                  => [$dom, $dom->createCDATASection('nope'), false],
            'entity reference'       => [$dom, $dom->createEntityReference('bad'), false],
            'svg'                    => [$dom, $dom->createElementNS('http://www.w3.org/2000/svg', 'svg'), false],
            'span'                   => [$dom, $newNode('span', []), false],
        ];
    }

    /**
     * Test isValidHeadNode().
     *
     * @dataProvider getHeadNodeData
     * @covers       \AmpProject\Dom\Document::isValidHeadNode()
     *
     * @param Document $dom   DOM document to use.
     * @param DOMNode  $node  Node.
     * @param bool     $valid Expected valid.
     */
    public function testIsValidHeadNode($dom, $node, $valid)
    {
        $this->assertEquals($valid, $dom->isValidHeadNode($node));
    }

    /**
     * Test that the $html property fetches the right element.
     *
     * @covers \AmpProject\Dom\Document::__get()
     */
    public function testHtmlProperty()
    {
        $html     = '<!doctype html><html data-test="correct-element"><head></head><body></body></html>';
        $document = Document::fromHtml($html);
        $this->assertEquals('correct-element', $document->html->getAttribute('data-test'));
    }

    /**
     * Test that the $head property fetches the right element.
     *
     * @covers \AmpProject\Dom\Document::__get()
     */
    public function testHeadProperty()
    {
        $html     = '<!doctype html><html><head data-test="correct-element"></head><body></body></html>';
        $document = Document::fromHtml($html);
        $this->assertEquals('correct-element', $document->head->getAttribute('data-test'));
    }

    /**
     * Test that the $body property fetches the right element.
     *
     * @covers \AmpProject\Dom\Document::__get()
     */
    public function testBodyProperty()
    {
        $html     = '<!doctype html><html><head></head><body data-test="correct-element"></body></html>';
        $document = Document::fromHtml($html);
        $this->assertEquals('correct-element', $document->body->getAttribute('data-test'));
    }

    /**
     * Test that the $ampElements property fetches the right elements.
     *
     * @covers \AmpProject\Dom\Document::__get()
     */
    public function testAmpElementsProperty()
    {
        $html     = '<!doctype html><html>'
                    . '  <head><style amp-custom data-test="wrong-element"></style></head>'
                    . '  <body>'
                    . '    <amp-text data-test="correct-element"></amp-text><amp-img data-test="correct-element"></amp-img>'
                    . '    <template type="amp-mustache" data-test="wrong-element"><amp-img data-test="correct-element" alt="{{foo}}"></amp-img></template>'
                    . '  </body>'
                    . '</html>';
        $document = Document::fromHtml($html);
        $this->assertEquals(3, $document->ampElements->length);
        foreach ($document->ampElements as $element) {
            $this->assertEquals('correct-element', $element->getAttribute('data-test'));
        }
    }

    /**
     * Ge initial AMP dev mode data.
     *
     * @return array Test data.
     */
    public function getInitialAmpDevModeData()
    {
        $tesData = [
            'with_dev_mode'    => [
                Document::fromHtml('<!doctype html><html data-ampdevmode><head></head><body></body></html>'),
                true,
            ],
            'without_dev_mode' => [
                Document::fromHtml('<!doctype html><html><head></head><body></body></html>'),
                false,
            ],
        ];

        $domWithoutDevModeOnRoot = Document::fromHtml('<!doctype html><html><head></head><body></body></html>');
        $domWithoutDevModeOnRoot->documentElement->setAttribute('data-ampdevmode', '');
        $tesData['dev_mode_added_after'] = [
            $domWithoutDevModeOnRoot, false
        ];

        return $tesData;
    }

    /**
     * Test that AMP dev mode on the root DOM element is initially set.
     *
     * @dataProvider getInitialAmpDevModeData
     * @covers \AmpProject\Dom\Document::hasInitialAmpDevMode()
     *
     * @param Document $document          Document.
     * @param boolean  $hasInitialDevMode Whether $document should have dev mode initially or not.
     */
    public function testHasInitialAmpDevMode($document, $hasInitialDevMode)
    {
        $this->assertEquals($hasInitialDevMode, $document->hasInitialAmpDevMode());
    }

    /**
     * Data provider for Dom\Document::getElementId() tests.
     *
     * @return array
     */
    public function getGetElementIdData()
    {
        return [
            'single check with existing ID'         => [
                [
                    [ true, 'my-id', 'some-prefix', 'my-id' ],
                ],
            ],

            'single check without existing ID'      => [
                [
                    [ true, null, 'some-prefix', 'some-prefix-0' ],
                ],
            ],

            'consecutive checks count upwards'      => [
                [
                    [ true, null, 'some-prefix', 'some-prefix-0' ],
                    [ true, null, 'some-prefix', 'some-prefix-1' ],
                ],
            ],

            'consecutive checks for same element return same ID' => [
                [
                    [ true, null, 'some-prefix', 'some-prefix-0' ],
                    [ false, null, 'some-prefix', 'some-prefix-0' ],
                ],
            ],

            'mixing prefixes keeps counts separate' => [
                [
                    [ true, 'my-id', 'some-prefix', 'my-id' ],
                    [ true, null, 'some-prefix', 'some-prefix-0' ],
                    [ true, null, 'some-prefix', 'some-prefix-1' ],
                    [ true, null, 'other-prefix', 'other-prefix-0' ],
                    [ true, null, 'other-prefix', 'other-prefix-1' ],
                    [ true, null, 'some-prefix', 'some-prefix-2' ],
                    [ true, 'another-id', 'some-prefix', 'another-id' ],
                    [ true, null, 'some-prefix', 'some-prefix-3' ],
                    [ false, null, 'some-prefix', 'some-prefix-3' ],
                ],
            ],
        ];
    }

    private function elementFactory($dom, $id = null)
    {
        $element = $dom->createElement('div');

        if ($id) {
            $element->setAttribute('id', $id);
        }

        $dom->body->appendChild($element);

        return $element;
    }

    /**
     * Test Document::getElementId().
     *
     * @dataProvider getGetElementIdData
     * @covers \AmpProject\Dom\Document::getElementId()
     *
     * @param array $checks Checks to perform. Each check is an array containing a boolean whether create a new element,
     *                      a prefix and an expected ID.
     */
    public function testGetElementId($checks)
    {
        $dom     = new Document();
        $element = null;
        foreach ($checks as list($newElement, $id, $prefix, $expected)) {
            // If no element factory was passed, just reuse the previous element.
            if ($newElement) {
                $element = $this->elementFactory($dom, $id);
            }

            $actual = $dom->getElementId($element, $prefix);
            $this->assertEquals($expected, $actual);
        }
    }

    /**
     * Test whether existing element IDs are taken into account, even if the index counter is off.
     *
     * @covers \AmpProject\Dom\Document::getElementId()
     */
    public function testGetElementIdOnPreexistingIds()
    {
        $dom = Document::fromHtml(
            '<body><div id="some-prefix-0"><div id="some-prefix-1"><div id="some-prefix-2"></body>'
        );

        $element = $dom->createElement('div');
        $dom->body->appendChild($element);

        $this->assertEquals('some-prefix-3', $dom->getElementId($element, 'some-prefix'));
    }

    /**
     * Data provider for testing the byte count properties.
     *
     * @return array Testing data.
     */
    public function dataByteCounts()
    {
        return [
            'amp_custom_style_tag' => [
                '<html><head><style amp-custom>12345</style>', 5, 0,
            ],
            'one_inline_style_attribute' => [
                '<html><body><div style="12345"></div></body></html>', 0, 5,
            ],
            'multiple_inline_style_attributes' => [
                '<html><body><div style="1234"></div><div style="567"><div style="89"></body></html>', 0, 9,
            ],
            'amp_custom_style_tag_and_multiple_inline_style_attributes' => [
                '<html><head><style amp-custom>12345</style></head><body><div style="1234"></div><div style="567"><div style="89"></body></html>', 5, 9,
            ],
            'amp_custom_style_tag_outside_head' => [
                '<html><head><style amp-custom>12345</style></head><body><style amp-custom>123</style></body></html>', 5, 0,
            ],
            'multibyte_chars_are_counted_in_bytes_not_chars' => [
                '<html><head><style amp-custom>Iñtërnâtiônàlizætiøn</style></head><body><div style="Iñtërnâtiônàlizætiøn"></div></body></html>', 27, 27,
            ],
        ];
    }

    /**
     * Test the byte count properties.
     *
     * @dataProvider dataByteCounts
     *
     * @param string $html              HTML to test against.
     * @param int    $expectedAmpCustom Expected number of bytes of the <style amp-custom> tag.
     * @param int    $expectedInline    Expected number of bytes of inline styles.
     *
     * @covers       \AmpProject\Dom\Document\Filter\DeduplicateTag::afterLoad()
     */
    public function testByteCounts($html, $expectedAmpCustom, $expectedInline)
    {
        $document = Document::fromHtml($html);
        $this->assertEquals($expectedAmpCustom, $document->ampCustomStyleByteCount);
        $this->assertEquals($expectedInline, $document->inlineStyleByteCount);
    }

    /**
     * Test the Document::getRemainingCssSpace() method.
     *
     * @covers \AmpProject\Dom\Document::getRemainingCustomCssSpace()
     */
    public function testGetRemainingCssSpace()
    {
        $maxBytes = AmpNoTransformed::SPEC[SpecRule::MAX_BYTES];

        $document = new Document();
        $ampCustomStyle = $document->createElement(Tag::STYLE);
        $ampCustomStyle->setAttribute(Attribute::AMP_CUSTOM, null);
        $ampCustomStyle->textContent = str_pad('', $maxBytes - 10, 'X');
        $document->head->appendChild($ampCustomStyle);

        /** @var Element $element */
        $element = $document->createElement(Tag::DIV);
        $document->body->appendChild($element);
        $element->addInlineStyle('12345');

        $this->assertEquals(PHP_INT_MAX, $document->getRemainingCustomCssSpace());
        $document->enforceCssMaxByteCount($maxBytes);
        $this->assertEquals(5, $document->getRemainingCustomCssSpace());
    }


    /**
     * Test the Document::addAmpCustomStyle() method without byte limit.
     *
     * @covers \AmpProject\Dom\Document::addAmpCustomStyle()
     */
    public function testAddAmpCustomStyleWithoutLimit()
    {
        $maxBytes = AmpNoTransformed::SPEC[SpecRule::MAX_BYTES];

        $document = new Document();
        $ampCustomStyle = $document->createElement(Tag::STYLE);
        $ampCustomStyle->setAttribute(Attribute::AMP_CUSTOM, null);
        $ampCustomStyle->textContent = str_pad('', $maxBytes - 28, 'X');
        $document->head->appendChild($ampCustomStyle);

        // Custom styles can be added.
        $document->addAmpCustomStyle('h1{color:red}');
        $document->addAmpCustomStyle('h2{color:green}');

        $this->assertStringEndsWith('XXXXXh1{color:red}h2{color:green}', $document->ampCustomStyle->textContent);

        // No exception will be thrown here, even though we go past the CSS byte count limit.
        $document->addAmpCustomStyle('XXXXX');

        $this->assertStringEndsWith('XXXXXh1{color:red}h2{color:green}XXXXX', $document->ampCustomStyle->textContent);
    }

    /**
     * Test the Document::addAmpCustomStyle() method with byte limit.
     *
     * @covers \AmpProject\Dom\Document::addAmpCustomStyle()
     */
    public function testAddAmpCustomStyleWithLimit()
    {
        $maxBytes = AmpNoTransformed::SPEC[SpecRule::MAX_BYTES];

        $document = new Document();
        $document->enforceCssMaxByteCount($maxBytes);
        $ampCustomStyle = $document->createElement(Tag::STYLE);
        $ampCustomStyle->setAttribute(Attribute::AMP_CUSTOM, null);
        $ampCustomStyle->textContent = str_pad('', $maxBytes - 28, 'X');
        $document->head->appendChild($ampCustomStyle);

        // Custom styles can be added.
        $document->addAmpCustomStyle('h1{color:red}');
        $document->addAmpCustomStyle('h2{color:green}');

        $this->assertStringEndsWith('XXXXXh1{color:red}h2{color:green}', $document->ampCustomStyle->textContent);

        // Exception is thrown if maximum allowed byte count is exceeded.
        $this->expectException(MaxCssByteCountExceeded::class);
        $this->expectExceptionMessage(
            'Maximum allowed CSS byte count exceeded for amp-custom style'
        );

        $document->addAmpCustomStyle('X');
    }

    /**
     * Test the encoding option.
     *
     * @covers \AmpProject\Dom\Document::fromHtml()
     * @covers \AmpProject\Dom\Document::fromHtmlFragment()
     * @covers \AmpProject\Dom\Document::getOptions()
     * @covers \AmpProject\Dom\Document::loadHTML()
     * @covers \AmpProject\Dom\Document::loadHTMLFragment()
     */
    public function testEncodingOption()
    {
        $expectedOptions = array_merge(
            Option::DEFAULTS,
            [Option::ENCODING => 'something', Option::LIBXML_FLAGS => LIBXML_COMPACT | LIBXML_HTML_NODEFDTD | LIBXML_SCHEMA_CREATE]
        );

        $document = Document::fromHtml('<html><div></div></html>', [Option::ENCODING => 'something']);
        $this->assertEquals($expectedOptions, $document->getOptions()->toArray());

        $documentFragment = Document::fromHtmlFragment('<div></div>', [Option::ENCODING => 'something']);
        $this->assertEquals($expectedOptions, $documentFragment->getOptions()->toArray());
    }

    /**
     * Test the amp-bind syntax option.
     *
     * @covers \AmpProject\Dom\Document::fromHtml()
     * @covers \AmpProject\Dom\Document::fromHtmlFragment()
     * @covers \AmpProject\Dom\Document::getOptions()
     * @covers \AmpProject\Dom\Document::loadHTML()
     * @covers \AmpProject\Dom\Document::loadHTMLFragment()
     */
    public function testAmpBindSyntaxOption()
    {
        $expectedOptions = array_merge(
            Option::DEFAULTS,
            [Option::AMP_BIND_SYNTAX => Option::AMP_BIND_SYNTAX_SQUARE_BRACKETS, Option::LIBXML_FLAGS => LIBXML_COMPACT | LIBXML_HTML_NODEFDTD | LIBXML_SCHEMA_CREATE]
        );

        $document = Document::fromHtml('<html><div></div></html>', [Option::AMP_BIND_SYNTAX => Option::AMP_BIND_SYNTAX_SQUARE_BRACKETS]);
        $this->assertEquals($expectedOptions, $document->getOptions()->toArray());

        $documentFragment = Document::fromHtmlFragment('<div></div>', [Option::AMP_BIND_SYNTAX => Option::AMP_BIND_SYNTAX_SQUARE_BRACKETS]);
        $this->assertEquals($expectedOptions, $documentFragment->getOptions()->toArray());
    }

    /**
     * Test the libxml option.
     *
     * @covers \AmpProject\Dom\Document::fromHtml()
     * @covers \AmpProject\Dom\Document::fromHtmlFragment()
     * @covers \AmpProject\Dom\Document::getOptions()
     * @covers \AmpProject\Dom\Document::loadHTML()
     * @covers \AmpProject\Dom\Document::loadHTMLFragment()
     */
    public function testLibxmlOption()
    {
        $expectedOptions = array_merge(
            Option::DEFAULTS,
            [Option::LIBXML_FLAGS => LIBXML_COMPACT | LIBXML_HTML_NODEFDTD | LIBXML_SCHEMA_CREATE | LIBXML_PARSEHUGE]
        );

        $document = Document::fromHtml('<html><div></div></html>', [Option::LIBXML_FLAGS => LIBXML_PARSEHUGE]);
        $this->assertEquals($expectedOptions, $document->getOptions()->toArray());

        $documentFragment = Document::fromHtmlFragment('<div></div>', [Option::LIBXML_FLAGS => LIBXML_PARSEHUGE]);
        $this->assertEquals($expectedOptions, $documentFragment->getOptions()->toArray());
    }

    /**
     * Test the encoding option backwards compatibility fallback.
     *
     * @covers \AmpProject\Dom\Document::fromHtml()
     * @covers \AmpProject\Dom\Document::fromHtmlFragment()
     * @covers \AmpProject\Dom\Document::getOptions()
     * @covers \AmpProject\Dom\Document::loadHTML()
     * @covers \AmpProject\Dom\Document::loadHTMLFragment()
     */
    public function testEncodingOptionBC()
    {
        $expectedOptions = array_merge(
            Option::DEFAULTS,
            [Option::ENCODING => 'something', Option::LIBXML_FLAGS => LIBXML_COMPACT | LIBXML_HTML_NODEFDTD | LIBXML_SCHEMA_CREATE]
        );

        $document = Document::fromHtml('<html><div></div></html>', 'something');
        $this->assertEquals($expectedOptions, $document->getOptions()->toArray());

        $documentFragment = Document::fromHtmlFragment('<div></div>', 'something');
        $this->assertEquals($expectedOptions, $documentFragment->getOptions()->toArray());
    }

    /**
     * Test the libxml option backwards compatibility fallback.
     *
     * @covers \AmpProject\Dom\Document::getOptions()
     * @covers \AmpProject\Dom\Document::loadHTML()
     * @covers \AmpProject\Dom\Document::loadHTMLFragment()
     */
    public function testLibxmlOptionBC()
    {
        $expectedOptions = array_merge(
            Option::DEFAULTS,
            [Option::LIBXML_FLAGS => LIBXML_COMPACT | LIBXML_HTML_NODEFDTD | LIBXML_SCHEMA_CREATE | LIBXML_PARSEHUGE]
        );

        $document = new Document();
        $document->loadHTML('<html><div></div></html>', 524288);
        $this->assertEquals($expectedOptions, $document->getOptions()->toArray());

        $documentFragment = new Document();
        $documentFragment->loadHTMLFragment('<div></div>', '524288');
        $this->assertEquals($expectedOptions, $documentFragment->getOptions()->toArray());
    }

    /**
     * Data for document fragment tests.
     *
     * @return array Data.
     */
    public function dataDocumentFragment()
    {
        $target = '<div style="Iñtërnâtiônàlizætiøn"></div>';

        foreach ([true, false] as $body) {
            foreach ([true, false] as $head) {
                foreach ([true, false] as $html) {
                    foreach ([true, false] as $doctype) {
                        $source = $body ? '<body>' . $target . '</body>' : $target;
                        $case   = $body ? 'with_body' : 'without_body';

                        $source = $head ? '<head></head>' . $source : $source;
                        $case   = $head ? 'with_head_' . $case : 'without_head_' . $case;

                        $source = $html ? '<html>' . $source . '</html>' : $source;
                        $case   = $html ? 'with_html_' . $case : 'without_html_' . $case;

                        $source = $doctype ? '<!DOCTYPE html>' . $source : $source;
                        $case   = $doctype ? 'with_doctype_' . $case : 'without_doctype_' . $case;

                        $cases["fragment_encoding_{$case}"] = ['utf-8', $source, $target];
                    }
                }
            }
        }

        return $cases;
    }

    /**
     * Tests loading and saving a document fragment.
     *
     * @param string        $charset          Charset to use.
     * @param string        $source           Source content.
     * @param string        $expected         Expected target content.
     * @param callable|null $fragmentCallback Optional. Callback to use for fetching the fragment node to compare.
     *                                        Defaults to retrieving the first child node of the body tag.
     *
     * @dataProvider dataDocumentFragment
     * @covers       \AmpProject\Dom\Document::loadHTML()
     * @covers       \AmpProject\Dom\Document::saveHTML()
     */
    public function testDocumentFragment($charset, $source, $expected, $fragmentCallback = null)
    {
        if ($fragmentCallback === null) {
            $fragmentCallback = static function (Document $document) {
                return $document->body->firstChild;
            };
        }

        $document = Document::fromHtmlFragment($source, $charset);

        $this->assertEqualMarkup($expected, $document->saveHTMLFragment($fragmentCallback($document)));
    }

    /**
     * Test creating an element with attributes.
     *
     * @covers \AmpProject\Dom\Document::createElementWithAttributes()
     */
    public function testCreateElementWithAttributes()
    {
        $document = new Document();
        $element  = $document->createElementWithAttributes(
            'div',
            [
                'class'          => 'red blue',
                'data-something' => 42,
            ],
            'Some text'
        );
        $document->body->appendChild($element);

        $this->assertInstanceOf(Element::class, $element);
        $this->assertTrue($element->hasAttributes());
        $this->assertEquals('red blue', $element->getAttribute('class'));
        $this->assertEquals(42, $element->getAttribute('data-something'));
        $this->assertEquals('Some text', $element->nodeValue);
        $this->assertEquals(
            '<div class="red blue" data-something="42">Some text</div>',
            $document->saveHTMLFragment($element)
        );
    }

    /**
     * Test asserting none malformed byte sequences
     *
     * @covers \AmpProject\Dom\Document\Filter\DetectInvalidByteSequence::beforeLoad()
     * @covers \AmpProject\Exception\InvalidByteSequence::forHtml()
     */
    public function testDetectMalformedByteSequences()
    {
        $document = new Document();
        $this->expectException(InvalidByteSequence::class);
        $document::fromHtmlFragment(
            "<div>Some text \x00\x81<div>",
            [Option::CHECK_ENCODING => true]
        );
    }

    /**
     * Test asserting none bad byte sequences
     *
     * @covers \AmpProject\Dom\Document\Filter\DetectInvalidByteSequence::beforeLoad()
     * @covers \AmpProject\Exception\InvalidByteSequence::forHtml()
     */
    public function testDetectBadByteSequences()
    {
        $document = new Document();
        $this->expectException(InvalidByteSequence::class);
        $document::fromHtmlFragment(
            '<p>There is ' . substr('アプリ', 0, strlen('アプリ') - 1) . ' some other text</p>',
            [Option::CHECK_ENCODING => true]
        );
    }

    /**
     * Test loading the Document from a node.
     *
     * @covers \AmpProject\Dom\Document::fromNode()
     */
    public function testDocumentFromNode()
    {
        $document = new Document();
        $textNode = $document->createTextNode('Some Text');

        $this->assertInstanceOf(Document::class, Document::fromNode($textNode));
    }

    /**
     * Test normalizeDomStructure method for html fragment.
     *
     * @covers \AmpProject\Dom\Document::normalizeDomStructure()
     */
    public function testNormalizeDomStructure()
    {
        $document = new Document();
        $document->appendChild($document->createElement(Tag::P, 'Some text'));
        $document->normalizeDomStructure();

        $this->assertEqualMarkup(
            '<html><head></head><body><p>Some text</p></body></html>',
            $document->saveHTMLFragment()
        );
    }

    /**
     * Data for self closing SVG element test.
     *
     * @return array Data.
     */
    public function dataSVGSelfClosingElements()
    {
        $head = '<head><meta charset="utf-8"></head>';

        return [
            'test self closing path tag' => [
                '<!DOCTYPE html><html><head></head><body>'
                .   '<svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">'
                .   '    <path d="M 10,30 A 20,20 0,0,1 50,30 A 20,20 0,0,1 90,30 Q 90,60 50,90 Q 10,60 10,30 z"/>'
                .   '</svg>'
                . '</body></html>',
                '<!DOCTYPE html><html>' . $head . '<body>'
                .   '<svg viewbox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">'
                .   '    <path d="M 10,30 A 20,20 0,0,1 50,30 A 20,20 0,0,1 90,30 Q 90,60 50,90 Q 10,60 10,30 z" />'
                .   '</svg>'
                . '</body></html>',
            ],
            'test g tag without child element' => [
                '<!DOCTYPE html><html><head></head><body>'
                . '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none">'
                . '    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.99 2C6.47 2 2 6.48 2 12C2 17.52" fill="#1E1E1C" />'
                . '    <mask id="mask0" maskUnits="userSpaceOnUse" x="2" y="2" width="20" height="20">'
                . '        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.99 2C6.47 2 2 6.48 2 12C2 17.52" fill="white" />'
                . '    </mask>'
                . '    <g mask="url(#mask0)" />'
                . '</svg>'
                . '</body></html>',
                '<!DOCTYPE html><html>' . $head . '<body>'
                . '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 24 24" fill="none">'
                . '    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.99 2C6.47 2 2 6.48 2 12C2 17.52" fill="#1E1E1C" />'
                . '    <mask id="mask0" maskunits="userSpaceOnUse" x="2" y="2" width="20" height="20">'
                . '        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.99 2C6.47 2 2 6.48 2 12C2 17.52" fill="white" />'
                . '    </mask>'
                . '    <g mask="url(#mask0)" />'
                . '</svg>'
                . '</body></html>',
            ],
            'test g tag with child elements' => [
                '<!DOCTYPE html><html><head></head><body>'
                . '<svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">'
                . '    <g fill="white" stroke="green" stroke-width="5">'
                . '        <circle cx="40" cy="40" r="25" />'
                . '        <circle cx="60" cy="60" r="25" />'
                . '    </g>'
                . '</svg>'
                . '</body></html>',
                '<!DOCTYPE html><html>' . $head . '<body>'
                . '<svg viewbox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">'
                . '    <g fill="white" stroke="green" stroke-width="5">'
                . '        <circle cx="40" cy="40" r="25" />'
                . '        <circle cx="60" cy="60" r="25" />'
                . '    </g>'
                . '</svg>'
                . '</body></html>',
            ],
            'test g tag one path child and newlines' => [
                '<!DOCTYPE html><html><head></head><body>' . PHP_EOL
                . '<svg>' . PHP_EOL
                . '  <g id="ok">' . PHP_EOL
                . '    <path/>' . PHP_EOL
                . '  </g>' . PHP_EOL
                . '</svg>' . PHP_EOL
                . '</body></html>',
                '<!DOCTYPE html><html>' . $head . '<body>' . PHP_EOL
                . '<svg>' . PHP_EOL
                . '  <g id="ok">' . PHP_EOL
                . '    <path />' . PHP_EOL
                . '  </g>' . PHP_EOL
                . '</svg>' . PHP_EOL
                . '</body></html>',
            ]
        ];
    }

    /**
     * @dataProvider dataSVGSelfClosingElements
     *
     * @covers \AmpProject\Dom\Document\Filter\SelfClosingSVGElements::beforeLoad()
     * @covers \AmpProject\Dom\Document\Filter\SelfClosingSVGElements::afterSave()
     */
    public function testSVGSelfClosingElements($source, $expected)
    {
        $document = Document::fromHtml($source);
        $output = $document->saveHTML();
        $this->assertEqualMarkup($expected, $output);
    }

    /**
     * Data for AmpProject\Dom\Document\Filter\NormalizeHtmlEntities test.
     *
     * @return array Data.
     */
    public function dataHtmlEntities()
    {
        $head = '<head><meta charset="utf-8"></head>';

        return [
            'prevent_html_entities_from_double_encoding' => [
                '<!DOCTYPE html><html><head></head><body>'
                . '<p>Lorem ipsum dolor sit&comma; amet consectetur adipisicing elit&period; Repudiandae maxime accusamus mollitia nobis deleniti&colon; quia laborum iste &amp; reprehenderit&period;</p>'
                . '</body></html>',
                '<!DOCTYPE html><html>' . $head . '<body>'
                . '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae maxime accusamus mollitia nobis deleniti: quia laborum iste &amp; reprehenderit.</p>'
                . '</body></html>',
                []
            ],
            'normalizing_html_entities_can_be_disabled' => [
                '<!DOCTYPE html><html><head></head><body>'
                . '<p>Lorem ipsum dolor sit&comma; amet consectetur</p>'
                . '</body></html>',
                '<!DOCTYPE html><html>' . $head . '<body>'
                . '<p>Lorem ipsum dolor sit&amp;comma; amet consectetur</p>'
                . '</body></html>',
                [
                    Option::NORMALIZE_HTML_ENTITIES => Option::NORMALIZE_HTML_ENTITIES_NEVER,
                ]
            ],
            'normalize_using_custom_flags' => [
                '<!DOCTYPE html><html><head></head><body>'
                . '<p>A &#039;quote&#039; is &lt;b&gt;bold&lt;/b&gt;&period;</p>'
                . '</body></html>',
                '<!DOCTYPE html><html>' . $head . '<body>'
                . '<p>A \'quote\' is <b>bold</b>&amp;period;</p>'
                . '</body></html>',
                [
                    Option::NORMALIZE_HTML_ENTITIES       => Option::NORMALIZE_HTML_ENTITIES_ALWAYS,
                    Option::NORMALIZE_HTML_ENTITIES_FLAGS => ENT_QUOTES,
                ]
            ],
            'single_and_double_quotes_always_converted_by_DOMDocument_saveHTML_method' => [
                '<!DOCTYPE html><html><head></head><body>'
                . '<p>Lorem &quot;ipsum&quot; &apos;dolor&apos; sit amet&comma; consectetur&semi; adipisicing elit</p>'
                . '</body></html>',
                '<!DOCTYPE html><html>' . $head . '<body>'
                . '<p>Lorem "ipsum" \'dolor\' sit amet&amp;comma; consectetur&amp;semi; adipisicing elit</p>'
                . '</body></html>',
                [
                    Option::NORMALIZE_HTML_ENTITIES_FLAGS => ENT_NOQUOTES,
                ]
            ],
        ];
    }

    /**
     * Test NormalizeHtmlEntities document filter.
     *
     * @param string $source   Source content.
     * @param string $expected Expected target content.
     * @param array  $options  Options for Document class.
     *
     * @dataProvider dataHtmlEntities
     *
     * @covers \AmpProject\Dom\Document\Filter\NormalizeHtmlEntities::beforeLoad()
     */
    public function testNormalizeHtmlEntities($source, $expected, $options)
    {
        $document = Document::fromHtml($source, $options);
        $output   = $document->saveHTML();

        $this->assertEqualMarkup($expected, $output);
    }

    /**
     * Test NormalizeHtmlEntities throws exception for invalid option value.
     *
     * @covers \AmpProject\Dom\Document\Filter\NormalizeHtmlEntities::__construct()
     */
    public function testInvalidOptionValueThrowsByNormalizeHtmlEntities()
    {
        $this->expectException(InvalidOptionValue::class);
        $this->expectExceptionMessage(
            "The value for the option 'normalize_html_entities' expected the value to be one of "
            . "[auto, always, never], got 'invalid-option' instead."
        );

        $source  = '<!DOCTYPE html><html><head></head><body></body></html>';
        $options = [
            Option::NORMALIZE_HTML_ENTITIES => 'invalid-option',
        ];

        Document::fromHtml($source, $options);
    }
}
