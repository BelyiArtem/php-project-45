<?php

namespace BrainGames\Games\Progression;

const MIN_PROGRESSION_LENGTH = 5;
const MAX_PROGRESSION_LENGTH = 10;

function progressionGame(): array
{
    $progression = generateProgression();

    return hideRandomArrayValue($progression);
}

function generateProgression(): array
{
    $length = random_int(MIN_PROGRESSION_LENGTH, MAX_PROGRESSION_LENGTH);
    $step = random_int(1, 10);
    $start = random_int(0, 100);
    $progression = [];

    for ($i = 0; $i < $length; $i++) {
        $currentElement = $start + $i * $step;
        $progression[] = $currentElement;
    }

    return $progression;
}

function hideRandomArrayValue(array $progression): array
{
    $entry = array_rand($progression);
    $answer = $progression[$entry];
    $progression[$entry] = '..';
    $expression = implode(' ', $progression);

    return [$expression, $answer];
}
