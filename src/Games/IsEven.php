<?php

namespace BrainGames\Cli;

use function BrainGames\Cli\welcome;
use function cli\line;
use function cli\prompt;

function even()
{
    $name = welcome();
    for ($i = 0; $i < 3; $i++) {
        $numb = rand(1, 100);
        $answer = prompt("Question: $numb\nYour answer");
        if ($numb % 2 == 0 && $answer === 'yes') {
            line("Correct!!!");
        } elseif ($numb % 2 == 1 && $answer === 'no') {
            line("Correct!!!");
        } else {
            $correctAnswer = $answer === 'yes' ? 'no' : 'yes' ;
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'");
            return;
        }
    }
    line("Congratulations, {$name}");
}
