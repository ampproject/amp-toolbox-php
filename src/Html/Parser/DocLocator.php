<?php

namespace AmpProject\Html\Parser;

/**
 * An interface for determining the line/column information for SAX events that are being received by a
 * HtmlSaxHandler.
 *
 * @package ampproject/amp-toolbox
 */
interface DocLocator
{

    /**
     * Get the current line in the HTML source from which the most recent SAX event was generated. This value is only
     * sensible once an event has been generated, that is, in practice from within the context of the HtmlSaxHandler
     * methods - e.g., startTag(), pcdata(), etc.
     *
     * @return int The current line.
     */
    public function getLine();

    /**
     * Get the current column in the HTML source from which the most recent SAX event was generated. This value is only
     * sensible once an event has been generated, that is, in practice from within the context of the HtmlSaxHandler
     * methods - e.g., startTag(), pcdata(), etc.
     *
     * @return int The current column.
     */
    public function getColumn();

    /**
     * Get the size of the document in bytes.
     *
     * @return int The size of the document in bytes.
     */
    public function getDocByteSize();
}
