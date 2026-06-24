<?php

namespace BrainGames\Games\Even;

const MAX_RANDOM_NUMBER = 100;

function isRandomNumberEven(int $randomNumber): string
{
    return $randomNumber % 2 === 0 ? 'yes' : 'no';
}

function evenGame(): array
{
    $randomNumber = random_int(0, MAX_RANDOM_NUMBER);
    $answer = isRandomNumberEven($randomNumber);

    return [$randomNumber, $answer];
}
