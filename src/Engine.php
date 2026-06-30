<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const ROUNDS_TO_WIN = 3;

function run(callable $game): void
{
    $wins = 0;
    line('Welcome to the Brain Game!');
    $playerName = prompt('May I have your name?', false, ' ');
    line("Hello, %s!", $playerName);

    for ($i = 0; $i < ROUNDS_TO_WIN; $i++) {
        [$question, $correctAnswer] = $game();
        line("Question: %s", $question);
        $playerAnswer = prompt('Your answer');

        if (!isValidAnswer($playerAnswer, $correctAnswer)) {
            line("Let's try again, %s!", $playerName);
            return;
        }

        $wins++;
    }

    line("Congratulations, %s!", $playerName);
}

function isValidAnswer(string $userAnswer, string $expectedResponse): bool
{
    if ($userAnswer === $expectedResponse) {
        line('Correct!');
        return true;
    }

    line("'%s' is wrong answer ;(. Correct answer was '%s'.", $userAnswer, $expectedResponse);

    return false;
}
