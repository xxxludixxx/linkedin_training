<?php
$number = 2;

// Pass by value

/*function doubleIt($number) {
    return $number *= 2;
}*/

function doubleIt(&$num) {
    $num *= 2;
}

$doubled = doubleIt($number);

echo '$doubled is ' . $doubled . '<br>';
echo '$number is ' . $number . '<br>';
echo var_dump($doubled);