<?php

namespace BrainGames\Games\Calc;

use function cli\line;

const MATH_OPERATIONS = ['+', '-', '*'];

function calcGame(): array
{
    line('What is the result of the expression?');
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
    }

    return $result;
}
