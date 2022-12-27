<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function mainEngine(array $finalAssocArray, string $name, string $task)
{
    line($task);
    foreach ($finalAssocArray as $key => $value) {
        $answer = prompt("Question: $key\nYour answer");
        if ($answer != $value) {
            line("'$answer' is wrong answer ;(. Correct answer was '$value'. \nLet's try again, $name!");
            return;
        } else {
            line("Correct!");
        }
    }
    line("Congratulations, $name!");
}
