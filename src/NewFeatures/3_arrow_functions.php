<?php

$factor = 10;
$array = [1, 2, 3];
// with arrow functions
$nums = array_map(
    fn($n) => $n * $factor,
    $array);

var_dump($nums);
// without arrow functions
$nums = array_map(
    function ($n) use ($factor) {
        return $n * $factor;
    },
    $array);
var_dump($nums);