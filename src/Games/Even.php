<?php

namespace BrainGames\Games\Even;

use function cli\line;

const MAX_RANDOM_NUMBER = 100;

function isRandomNumberEven(int $randomNumber): string
{
    return $randomNumber % 2 === 0 ? 'yes' : 'no';
}

function evenGame(): array
{
    line('Answer "yes" if the number is even, otherwise answer "no".');
    $randomNumber = rand(0, MAX_RANDOM_NUMBER);
    $answer = isRandomNumberEven($randomNumber);

    return [$randomNumber, $answer];
}
