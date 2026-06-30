<?php

namespace BrainGames\Games\Progression;

use function cli\line;

const MIN_PROGRESSION_LENGTH = 5;
const MAX_PROGRESSION_LENGTH = 10;
const GAME_DESCRIPTION = 'What number is missing in the progression?';

function progressionGame(): array
{
    line(GAME_DESCRIPTION);
    $length = random_int(MIN_PROGRESSION_LENGTH, MAX_PROGRESSION_LENGTH);
    $step = random_int(1, 10);
    $start = random_int(0, 100);
    $progression = [];

    for ($i = 0; $i < $length; $i++) {
        $currentElement = $start + $i * $step;
        $progression[] = $currentElement;
    }

    $entry = array_rand($progression);
    $answer = $progression[$entry];
    $progression[$entry] = '..';
    $expression = implode(' ', $progression);

    return [$expression, (string)$answer];
}
