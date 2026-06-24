<?php

namespace BrainGames\Games\Calc;

const MATH_OPERATIONS = ['+', '-', '*'];

function calcGame(): array
{
    $a = rand(0, 100);
    $b = rand(0, 100);
    $operation = MATH_OPERATIONS[array_rand(MATH_OPERATIONS)];
    $expression = "$a $operation $b";
    $answer = calculate($a, $b, $operation);

    return [$expression, $answer];
}

function calculate(int $a, int $b, string $operation): int
{
    $result = 0;

    switch ($operation) {
        case '+':
            $result = $a + $b;
            break;
        case '-':
            $result = $a - $b;
            break;
        case '*':
            $result = $a * $b;
            break;
        default:
            return $result;
    }

    return $result;
}
