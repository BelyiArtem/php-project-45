<?php

namespace BrainGames\Games\Even;

use function cli\line;

const MAX_RANDOM_NUMBER = 100;
const GAME_DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';

function evenGame(): array
{
    line(GAME_DESCRIPTION);
    $randomNumber = random_int(0, MAX_RANDOM_NUMBER);
    $answer = isEven($randomNumber) ? 'yes' : 'no';

    return [$randomNumber, $answer];
}

function isEven(int $randomNumber): bool
{
    return $randomNumber % 2 === 0;
}
