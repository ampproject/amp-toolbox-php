<?php

namespace AmpProject\Html\Parser;

/**
 * Abstraction to keep track of which tags have been opened / closed as we traverse the tags in the document.
 *
 * Closing tags is tricky:
 * - Some tags have no end tag per spec. For example, there is no </img> tag per spec. Since we are making
 *   startTag()/endTag() calls, we manufacture endTag() calls for these immediately after the startTag().
 * - We assume all end tags are optional and we pop tags off our stack as we encounter parent closing tags. This part
 *   differs slightly from the behavior per spec: instead of closing an <option> tag when a following <option> tag
 *   is seen, we close it when the parent closing tag (in practice <select>) is encountered.
 *
 * @package ampproject/amp-toolbox
 */
final class TagNameStack
{

    /**
     * The handler to manage the stack for.
     *
     * @var HtmlSaxHandler
     */
    private $handler;

    /**
     * TagNameStack constructor.
     *
     * @param HtmlSaxHandler $handler
     */
    public function __construct(HtmlSaxHandler $handler)
    {
        $this->handler = $handler;
    }
}
