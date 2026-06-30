<?php

namespace BrainGames\Games\Calc;

use Exception;

use function cli\line;

const MATH_OPERATIONS = ['+', '-', '*'];
const GAME_DESCRIPTION = 'What is the result of the expression?';

function calcGame(): array
{
    line(GAME_DESCRIPTION);
    $a = random_int(0, 100);
    $b = random_int(0, 100);
    $operation = MATH_OPERATIONS[array_rand(MATH_OPERATIONS)];
    $expression = "$a $operation $b";
    $answer = calculate($a, $b, $operation);

    return [$expression, (string)$answer];
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
            throw new Exception('Operation not exists.');
    }

    return $result;
}
