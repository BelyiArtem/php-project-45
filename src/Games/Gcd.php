<?php

namespace BrainGames\Games\Gcd;

function gcdGame(): array
{
    $a = rand(0, 100);
    $b = rand(0, 100);
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
