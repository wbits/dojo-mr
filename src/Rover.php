<?php

declare(strict_types = 1);

namespace Dojo\MarsRover;

/**
 * Requirements:
 *
 * You are given the initial starting point (x,y) of a rover and the direction (N,S,E,W) it is facing.
 * The rover receives a character array of commands.
 * Implement commands that move the rover forward/backward (f,b).
 * Implement commands that turn the rover left/right (l,r).
 *
 * Rules:
 *
 * Hardcore TDD. No Excuses!
 * Change roles (driver, navigator) after each TDD cycle.
 * No red phases while refactoring.
 * Be careful about edge cases and exceptions. We can not afford to lose a mars rover, just because the developers overlooked a null pointer.
 */
final class Rover
{
    public static function init(int $xPos, int $yPos, string $direction): Rover
    {

    }

    public function executeCommands(string $commandString): array
    {

    }
}
