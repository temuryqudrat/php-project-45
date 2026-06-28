<?php

namespace BrainGames\Cli;

function greeting()
{
    echo "Welcome to the Brain Games!\n";
    $name = \cli\prompt('May I have your name?', false, ' ');
    echo "Hello, {$name}!\n";
    return $name;
}
