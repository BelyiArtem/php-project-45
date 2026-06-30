<?php

namespace BrainGames\Games\Prime;

use function cli\line;

const GAME_DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function primeGame(): array
{
    line(GAME_DESCRIPTION);
    $randomNumber = random_int(0, 100);
    $answer = isPrime($randomNumber) ? 'yes' : 'no';

    return [$randomNumber, $answer];
}

function isPrime(int $number): bool
{
    if ($number <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}
