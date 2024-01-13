<?php 

$square = function ($number) {
    return $number * $number;
};

$result = $square(5);

echo "The square of 5 is " . $result;


// Closures
function createCounter() {
    $count = 0;

    $counter = function() use (&$count) {
        return ++$count;
    };

    return $counter;
}




?>