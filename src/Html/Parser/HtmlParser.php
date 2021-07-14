<?php

namespace AmpProject\Html\Parser;

/**
 * An Html parser.
 *
 * The parse() method takes a string and calls methods on HtmlSaxHandler while it is visiting its tokens.
 *
 * @package ampproject/amp-toolbox
 */
final class HtmlParser
{

    /**
     * Regular expression that matches the next token to be processed.
     *
     * @var string
     */
    const INSIDE_TAG_TOKEN =
        // Don't capture space. In this case, we don't use \s because it includes a nonbreaking space which gets
        // included as an attribute in our validation.
        '/^[ \\t\\n\\f\\r\\v]*(?:' .
            // Capture an attribute name in group 1, and value in group 3. We capture the fact that there was an
            // attribute in group 2, since interpreters are inconsistent in whether a group that matches nothing is
            // null, undefined, or the empty string.
            '(?:' .
                // Allow attribute names to start with /, avoiding assigning the / in close-tag syntax */>.
                '([^\\t\\r\\n /=>][^\\t\\r\\n =>]*|' .  // e.g. "href"
                '[^\\t\\r\\n =>]+[^ >]|' .              // e.g. "/asdfs/asd"
                '\/+(?!>))' .                           // e.g. "/"
                // Optionally followed by:
                '(' .
                    '\\s*=\\s*' .
                    '(' .
                        // A double quoted string.
                        '\"[^\"]*\"' .
                        // A single quoted string.
                        '|\'[^\']*\'' .
                        // The positive lookahead is used to make sure that in <foo bar= baz=boo>, the value for bar is
                        // blank, not "baz=boo". Note that <foo bar=baz=boo zik=zak>, the value for bar is "baz=boo" and
                        // the value for zip is "zak".
                        '|(?=[a-z][a-z-]*\\s+=)' .
                        // An unquoted value that is not an attribute name. We know it is not an attribute name because
                        // the previous zero-width match would've eliminated that possibility.
                        '|[^>\\s]*' .
                        ')' .
                    ')' .
                '?' .
                ')' .
            // End of tag captured in group 3.
            '|(/?>)' .
            // Don't capture cruft
            '|[^a-z\\s>]+)' .
        '/i';


    /**
     * Regular expression that matches the next token to be processed when we are outside a tag.
     *
     * @var string
     */
    const OUTSIDE_TAG_TOKEN =
        '/^(?:' .
            // Entity captured in group 1.
            '&(\\#[0-9]+|\\#[x][0-9a-f]+|\\w+);' .
            // Comments not captured.
            '|<[!]--[\\s\\S]*?(?:--[!]?>|$)' .
            // '/' captured in group 2 for close tags, and name captured in group 3. The first character of a tag (after
            // possibly '/') can be A-Z, a-z, '!' or '?'. The remaining characters are more easily expressed as a
            // negative set of: '\0', ' ', '\n', '\r', '\t', '\f', '\v', '>', or '/'.
            '|<(/)?([a-z!\\?][^\\0 \\n\\r\\t\\f\\v>/]*)' .
            // Text captured in group 4.
            '|([^<&>]+)' .
            // Cruft captured in group 5.
            '|([<&>]))' .
        '/i';

    /**
     * Given a SAX-like HtmlSaxHandler, this parses a $htmlText and lets the $handler know the structure while visiting
     * the nodes. If the provided handler is an implementation of HtmlSaxHandlerWithLocation, then its setDocLocator()
     * method will get called prior to startDoc(), and the getLine() / getColumn() methods will reflect the current
     * line / column while a SAX callback (e.g., startTag()) is active.
     *
     * @param HtmlSaxHandler $handler  The HtmlSaxHandler that will receive the events.
     * @param string         $htmlText The html text.
     */
    public function parse(HtmlSaxHandler $handler, $htmlText)
    {
        $htmlUpper  = null;
        $inTag      = false; // True iff we're currently processing a tag.
        $attributes = [];    // Accumulates attribute names and values.
        $tagName    = null;  // The name of the tag currently being processed.
        $eflags     = null;     // The element flags for the current tag.
        $openTag    = false; // True if the current tag is an open tag.
        $tagStack   = new TagNameStack($handler);

        // Only provide location information if the handler implements the setDocLocator method.
        $locator = null;
        if ($handler instanceof HtmlSaxHandlerWithLocation) {
            $locator = new DocLocatorImpl($htmlText);
            $handler->setDocLocator($locator);
        }

        // Lets the handler know that we are starting to parse the document.
        $handler->startDoc();

        // Consumes tokens from the htmlText and stops once all tokens are
        // processed.
        while ($htmlText) {
            $regex = $inTag ? self::INSIDE_TAG_TOKEN : self::OUTSIDE_TAG_TOKEN;
            // Gets the next token
            $matches = null;
            preg_match($regex, $htmlText, $matches);
            if ($locator) {
                $locator->advancePos($matches[0]);
            }
            // And removes it from the string
            $htmlText = $htmlText->substring(strlen($matches[0]));

            if ($inTag) {
                if ($matches[1]) {  // Attribute.
                    // SetAttribute with uppercase names doesn't work on IE6.
                    $attribName = strtolower($matches[1]);
                    // Use empty string as value for valueless attribs, so <input type=checkbox checked> gets attributes
                    // ['type', 'checkbox', 'checked', '']
                   $decodedValue = '';
          if ($matches[2]) {
              $encodedValue = $matches[3];
            switch ($encodedValue->charCodeAt(0)) {  // Strip quotes.
                case 34:                             // double quote "
                case 39:                             // single quote '
                    $encodedValue =
                        $encodedValue->substring(1, $encodedValue->length - 1);
                    break;
            }
            $decodedValue =
                $this->unescapeEntities_($this->stripNULs_($encodedValue));
          }
          $attributes[$attribName] = $decodedValue;
        } else if ($matches[4]) {
                    if ($eflags !== null) {  // False if not in allowlist.
                        if ($openTag) {
                            $tagStack->startTag(new ParsedTag($tagName, $attributes));
                        } else {
                            $tagStack->endTag(new ParsedTag($tagName));
                        }
                    }

          if ($openTag && ($eflags & (EFlags::CDATA | EFlags::RCDATA))) {
              if ($htmlUpper === null) {
                  $htmlUpper = strtoupper($htmlText);
              } else {
                  $htmlUpper =
                      $htmlUpper->substring($htmlUpper->length - $htmlText->length);
              }
              $dataEnd = $htmlUpper->indexOf('</' + $tagName);
            if ($dataEnd < 0) {
                $dataEnd = $htmlText->length;
            }
            if ($eflags & EFlags::CDATA) {
                if ($handler->cdata) {
                    $handler->cdata($htmlText->substring(0, $dataEnd));
                }
            } else if ($handler->rcdata) {
                $handler->rcdata(
                    $this->normalizeRCData_($htmlText->substring(0, $dataEnd)));
            }
            if ($locator) {
                $locator->advancePos($htmlText->substring(0, $dataEnd));
            }
            $htmlText = $htmlText->substring($dataEnd);
          }

          $tagName    = null;
          $eflags     = null;
          $openTag    = false;
          $attributes = [];
          if ($locator) {
              $locator->snapshotPos();
          }
          $inTag = false;
        }
            } else {
                if ($matches[1]) {  // Entity.
                    $tagStack->pcdata($matches[0]);
                } else if ($matches[3]) {  // Tag.
                    $openTag = !$matches[2];
                    if ($locator) {
                        $locator->snapshotPos();
                    }
                    $inTag = true;
                    $tagName = strtoupper($matches[3]);
                    $eflags = Elements.hasOwnProperty($tagName) ? Elements[$tagName] :
                        EFlags::UNKNOWN_OR_CUSTOM;
                } else if ($matches[4]) {  // Text.
                    if ($locator) {
                        $locator->snapshotPos();
                    }
                    $tagStack->pcdata($matches[4]);
                } else if ($matches[5]) {  // Cruft.
                    switch ($matches[5]) {
                        case '<':
                            $tagStack->pcdata('&lt;');
                            break;
                        case '>':
                            $tagStack->pcdata('&gt;');
                            break;
                        default:
                            $tagStack->pcdata('&amp;');
                            break;
                    }
                }
            }
        }

        if (!$inTag && $locator) {
            $locator->snapshotPos();
        }
        // Lets the handler know that we are done parsing the document.
        $tagStack->exitRemainingTags();
        $handler->effectiveBodyTag($tagStack->effectiveBodyAttribs());
        $handler->endDoc();
    }


    /**
     * Decode an HTML entity.
     *
     * @param string $entity The full entity (including the & and the ;).
     * @return string A single unicode code-point as a string.
     */
    public function lookupEntity($entity)
    {
        // TODO(goto): use {amp.htmlparserDecode} instead ?
        // TODO(goto): &pi; is different from &Pi;
        const name =
            parserInterface.toLowerCase(entity.substring(1, entity.length - 1));
        if (Entities.hasOwnProperty(name)) {
            return Entities[name];
        }
        let m = name.match(DECIMAL_ESCAPE_RE_);
        if (m) {
            return String.fromCharCode(parseInt(m[1], 10));
        } else if (!!(m = name.match(HEX_ESCAPE_RE_))) {
            return String.fromCharCode(parseInt(m[1], 16));
        }
        // If unable to decode, return the name.
        return name;
    }

    /**
     * Remove null characters on the string.
     *
     * @param string $text The string to have the null characters removed.
     * @return string A string without null characters.
     * @private
     */
    public function stripNULs($text)
    {
        return preg_replace(self::NULL_REGEX, '', $text);
    }

    /**
     * The plain text of a chunk of HTML CDATA which possibly containing.
     *
     * @param string $text A chunk of HTML CDATA. It must not start or end inside an HTML entity.
     * @return string The unescaped entities.
     */
    public function unescapeEntities($text) {
        return preg_replace_callback(self::ENTITY_REGEX, [$this, 'lookupEntity'], $text);
    }

    /**
     * Escape entities in RCDATA that can be escaped without changing the meaning.
     *
     * @param string $rcdata The RCDATA string we want to normalize.
     * @return string A normalized version of RCDATA.
     */
    public function normalizeRCData($rcdata) {
        return preg_replace(
            [self::LOOSE_AMP_REGEX, self::LT_REGEX, self::GT_REGEX],
            ['&amp;$1', '&lt;', '&gt;'],
            $rcdata
        );
    }
}
