<?php

namespace AmpProject\Html\Parser;

/**
 * Helper for determining the line/column information for SAX events that are being received by a HtmlSaxHandler.
 *
 * @package ampproject/amp-toolbox
 */
final class DocLocator
{
    private $lineByPosition = [];
    private $colByPosition = [];
    private $currentLine = 1;
    private $currentColumn = 0;
    private $documentByteSize = 0;

    /**
     * The current position in the htmlText.
     *
     * @var int
     */
    private $position = 0;

    /**
     * The previous position in the htmlText.
     *
     * We need this to know where a tag or attribute etc. started.
     *
     * @var int
     */
    private $previousPosition = 0;

    /**
     * Line within the document.
     *
     * @var int
     */
    private $line = 1;

    /**
     * Column within the document.
     *
     * @var int
     */
    private $column = 0;

    /**
     * DocLocator constructor.
     *
     * @param string $htmlText String of HTML.
     */
    public function __construct($htmlText)
    {
        /*
         * Precomputes a mapping from positions within htmlText to line / column numbers.
         *
         * TODO: This uses a fair amount of space and we can probably do better, but it's also quite simple so here we
         * are for now.
         */

        $currentLine   = 1;
        $currentColumn = 0;
        $length        = mb_strlen($htmlText);
        for ($index = 0; $index < $length; ++$index) {
            $this->lineByPosition[$index] = $currentLine;
            $this->colByPosition[$index]  = $currentColumn;
            $character                    = Str::($htmlText, $index, 1);
            if ($character === "\n") {
                ++$currentLine;
                $currentColumn = 0;
            } else {
                ++$currentColumn;
            }
        }

        $this->documentByteSize = strlen($htmlText);
    }

    /**
     * Advances the internal position by the characters in {code tokenText}.
     * This method is to be called only from within the parser.
     * @param {string} tokenText The token text which we examine to advance the
     *   line / column location within the doc.
     */
    public function advancePos($tokenText) {
        $this->previousPos_ = $this->pos_;
        $this->pos_ += mb_strlen($tokenText);
    }
    /**
     * Get the current line in the HTML source from which the most recent SAX event was generated. This value is only
     * sensible once an event has been generated, that is, in practice from within the context of the HtmlSaxHandler
     * methods - e.g., startTag(), pcdata(), etc.
     *
     * @return int The current line.
     */
    public function getLine()
    {

    }

    /**
     * Get the current column in the HTML source from which the most recent SAX event was generated. This value is only
     * sensible once an event has been generated, that is, in practice from within the context of the HtmlSaxHandler
     * methods - e.g., startTag(), pcdata(), etc.
     *
     * @return int The current column.
     */
    public function getColumn()
    {

    }

    /**
     * Get the size of the document in bytes.
     *
     * @return int The size of the document in bytes.
     */
    public function getDocByteSize()
    {

    }
}
