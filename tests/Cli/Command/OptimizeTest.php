<?php

namespace AmpProject\Cli\Command;

use AmpProject\Cli\Command;
use AmpProject\Cli\Executable;
use AmpProject\Cli\Options;
use AmpProject\Exception\Cli\InvalidArgument;
use AmpProject\Tests\MarkupComparison;
use AmpProject\Tests\TestCase;

/**
 * Test the options processing.
 *
 * @covers \AmpProject\Cli\Command
 * @covers \AmpProject\Cli\Command\Optimize
 * @package ampproject/amp-toolbox
 */
class OptimizeTest extends TestCase
{
    use MarkupComparison;

    public function testInstantiation()
    {
        $executable = $this->createMock(Executable::class);

        $command = new Optimize($executable);

        $this->assertInstanceOf(Command::class, $command);
        $this->assertEquals('optimize', $command->getName());
    }

    public function testRegistration()
    {
        $executable = $this->createMock(Executable::class);
        $options    = $this->createMock(Options::class);
        $options->expects($this->once())
                ->method('registerCommand')
                ->with($this->equalTo('optimize'));
        $options->expects($this->once())
                ->method('registerArgument')
                ->with($this->equalTo('file'));

        $command = new Optimize($executable);
        $command->register($options);
    }

    public function testProcessing()
    {
        $executable = $this->createMock(Executable::class);
        $options    = $this->createMock(Options::class);

        $command = new Optimize($executable);
        $command->register($options);
        $options->expects($this->once())
                ->method('getArguments')
                ->willReturn([__DIR__ . '/../../spec/end-to-end/hello-world/input.html']);
        ob_start();
        $command->process($options);
        $output = ob_get_clean();

        $this->assertStringContainsString('transformed="self;v=1"', $output);
    }

    public function testProcessingThrowsOnInvalidFile()
    {
        $executable = $this->createMock(Executable::class);
        $options    = $this->createMock(Options::class);

        $command = new Optimize($executable);
        $command->register($options);
        $options->expects($this->once())
                ->method('getArguments')
                ->willReturn(['nonsense']);

        $this->expectException(InvalidArgument::class);
        $command->process($options);
    }
}
