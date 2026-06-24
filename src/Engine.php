<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const ROUNDS_TO_WIN = 3;

function getPlayerName(): string
{
    return prompt('May I have your name?');
}

function runGame(callable $game, string $gameDescription): void
{
    $wins = 0;
    line('Welcome to the Brain Game!');
    $playerName = getPlayerName();
    line("Hello, %s!", $playerName);
    line($gameDescription);

    while ($wins < ROUNDS_TO_WIN) {
        [$question, $correctAnswer] = $game();
        askQuestion($question);
        $playerAnswer = getPlayerAnswer();

        if (isValidAnswer($playerAnswer, $correctAnswer)) {
            $wins++;
        } else {
            interruptGame($playerName);
            return;
        }
    }

    line("Congratulations, %s!", $playerName);
}

function askQuestion(mixed $expression): void
{
    line("Question: %s", $expression);
}

function getPlayerAnswer(): string
{
    return prompt('Your answer');
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

function interruptGame(string $playerName): void
{
    line("Let's try again, %s!", $playerName);
}
