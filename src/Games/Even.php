<?php

namespace BrainGames\Games\Even;

function even($name)
{
    echo "Answer \"yes\" if the number is even, otherwise answer \"no\"\n";
    for ($count = 0; $count < 3; $count++) {
        $number = random_int(0, 100);
        $iseven = $number % 2 === 0;
        $correctAnswer = $iseven ? "yes" : "no";
        echo "Question: {$number}\n";
        $answer = \cli\prompt('Your answer:', false, ' ');
        if ($answer == $correctAnswer) {
            echo "Correct\n";
        } else {
            echo "{$answer} is wrong answer ;(. Correct answer was '{$correctAnswer}'. Let's try again, {$name}";
            break;
        }
    } if ($count === 3) {
        echo "Congratulations, {$name}!";
    }
}
