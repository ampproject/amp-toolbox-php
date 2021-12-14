<?php

namespace AmpProject\Html\Parser;

use AmpProject\Tests\TestCase;

/**
 * Tests for AmpProject\Html\Parser\DocLocator.
 *
 * @covers \AmpProject\Html\Parser\DocLocator
 * @package ampproject/amp-toolbox
 */
class DocLocatorTest extends TestCase
{
    /**
     * @covers \AmpProject\Html\Parser\DocLocator::__construct()
     * @covers \AmpProject\Html\Parser\DocLocator::getDocumentByteSize()
     * @covers \AmpProject\Html\Parser\DocLocator::advancePosition()
     * @covers \AmpProject\Html\Parser\DocLocator::snapshotPosition()
     * @covers \AmpProject\Html\Parser\DocLocator::getColumn()
     * @covers \AmpProject\Html\Parser\DocLocator::getLine()
     */
    public function testItProvidesColumnsAndLines()
    {
        $doc = "<a><b>\n<cd><ef>";
        $docLocator = new DocLocator($doc);
        $this->assertEquals(15, $docLocator->getDocumentByteSize());

        $this->assertEquals(0, $docLocator->getColumn());
        $this->assertEquals(1, $docLocator->getLine());

        $docLocator->advancePosition('<a>');
        $docLocator->snapshotPosition();

        // Start of <a> tag.
        $this->assertEquals(0, $docLocator->getColumn());
        $this->assertEquals(1, $docLocator->getLine());

        $docLocator->advancePosition('<b>');
        $docLocator->snapshotPosition();

        // Start of <b> tag.
        $this->assertEquals(3, $docLocator->getColumn());
        $this->assertEquals(1, $docLocator->getLine());

        $docLocator->advancePosition("\n");
        $docLocator->advancePosition('<cd>');
        $docLocator->snapshotPosition();

        // Start of <cd> tag.
        $this->assertEquals(0, $docLocator->getColumn());
        $this->assertEquals(2, $docLocator->getLine());

        $docLocator->advancePosition('<ef>');
        $docLocator->snapshotPosition();

        // Start of <ef> tag.
        $this->assertEquals(4, $docLocator->getColumn());
        $this->assertEquals(2, $docLocator->getLine());
    }

    /**
     * @covers \AmpProject\Html\Parser\DocLocator::__construct()
     * @covers \AmpProject\Html\Parser\DocLocator::getDocumentByteSize()
     * @covers \AmpProject\Html\Parser\DocLocator::advancePosition()
     * @covers \AmpProject\Html\Parser\DocLocator::snapshotPosition()
     * @covers \AmpProject\Html\Parser\DocLocator::getColumn()
     * @covers \AmpProject\Html\Parser\DocLocator::getLine()
     */
    public function testItSupportsMultibyteStrings()
    {
        if (!extension_loaded('mbstring')) {
            $this->markTestSkipped('Testing multibyte support requires the "mbstring" PHP extension');
        }

        $doc = "Iñtër\nnâtiônàl\nizætiøn";
        $docLocator = new DocLocator($doc);
        $this->assertEquals(22, $docLocator->getDocumentByteSize());

        $this->assertEquals(0, $docLocator->getColumn());
        $this->assertEquals(1, $docLocator->getLine());

        $docLocator->advancePosition('Iñ');
        $docLocator->snapshotPosition();
        $this->assertEquals(0, $docLocator->getColumn());
        $this->assertEquals(1, $docLocator->getLine());

        $docLocator->advancePosition('tër');
        $docLocator->snapshotPosition();
        $this->assertEquals(2, $docLocator->getColumn());
        $this->assertEquals(1, $docLocator->getLine());

        $docLocator->advancePosition("\n");
        $docLocator->advancePosition('nâtiônàl');
        $docLocator->snapshotPosition();
        $this->assertEquals(0, $docLocator->getColumn());
        $this->assertEquals(2, $docLocator->getLine());

        $docLocator->advancePosition("\n");
        $docLocator->advancePosition('izætiøn');
        $docLocator->snapshotPosition();
        $this->assertEquals(0, $docLocator->getColumn());
        $this->assertEquals(3, $docLocator->getLine());
    }
}
