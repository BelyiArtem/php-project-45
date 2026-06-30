<?php

namespace BrainGames\Games\Gcd;

use function cli\line;

const GAME_DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function gcdGame(): array
{
    line(GAME_DESCRIPTION);
    $a = random_int(0, 100);
    $b = random_int(0, 100);
    $expression = "$a $b";
    $answer = getGcd($a, $b);

    return [$expression, $answer];
}

function getGcd(int $a, int $b): int
{
    while ($b !== 0) {
        $remainder = $a % $b;
        $a = $b;
        $b = $remainder;
    }
    return abs($a);
}
