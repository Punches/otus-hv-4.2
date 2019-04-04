<?php

require '../vendor/autoload.php';

use Otus\Lessons\Lesson4\DeclinerNumbers;

$example = new DeclinerNumbers;


for ($cows = 0; $cows <= 33; $cows++) {
    echo sprintf('%d %s%s', $cows, $example->declinNumber($cows, "корова", "коровы", "коров"), PHP_EOL);
}