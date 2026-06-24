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

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return 'no';
        }
    }

    return 'yes';
}
