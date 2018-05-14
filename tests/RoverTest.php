<?php

declare(strict_types = 1);

namespace unit\Dojo\MarsRover;

use Dojo\MarsRover\Rover;
use PHPUnit\Framework\TestCase;

final class RoverTest extends TestCase
{
    /**
     * @var Rover
     */
    private $rover;

    protected function setUp()
    {
        $this->rover = Rover::init($x = 0, $y = 0, $direction = 'N');
    }

    public function testItGetInstantiatedWithAPositionAndBearing()
    {
        self::assertEquals(['x' => 0, 'y' => 0, 'h' => 'N'], $this->rover->executeCommands(''));
    }
}
