<?php

namespace BrainGames\Cli;

use function BrainGames\Cli\welcome;

function startEven()
{
    $name = welcome();
    isEven($name);
}

function isEven(string $name)
{
    $finalAssocArray = [];

    for ($i = 0; $i < 3; $i++) {
        $number = rand(1, 100);
        if ($number % 2 == 0) {
            $finalAssocArray[$number] = 'yes';
        } else {
            $finalAssocArray[$number] = 'no';
        }
    }

    $task = 'Answer "yes" if the number is even, otherwise answer "no".';
    mainEngine($finalAssocArray, $name, $task);
}
