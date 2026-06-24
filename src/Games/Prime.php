<?php

namespace BrainGames\Games\Prime;

function primeGame(): array
{
    $randomNumber = random_int(0, 100);
    $answer = isRandomNumberPrime($randomNumber);

    return [$randomNumber, $answer];
}

function isRandomNumberPrime(int $number): string
{
    if ($number <= 1) {
        return 'no';
    }
    if ($number <= 3) {
        return 'yes';
    }
    if ($number % 2 === 0 || $number % 3 === 0) {
        return 'no';
    }

    for ($i = 5; $i * $i <= $number; $i += 6) {
        if ($number % $i === 0 || $number % ($i + 2) === 0) {
            return 'no';
        }
    }

    return 'yes';
}
