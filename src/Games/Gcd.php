<?php

namespace BrainGames\Games\Gcd;

function gcdGame(): array
{
    $a = random_int(0, 100);
    $b = random_int(0, 100);
    $expression = "$a $b";
    $answer = gcd($a, $b);

    return [$expression, $answer];
}

function gcd(int $a, int $b): int
{
    while ($b !== 0) {
        $remainder = $a % $b;
        $a = $b;
        $b = $remainder;
    }
    return abs($a);
}
