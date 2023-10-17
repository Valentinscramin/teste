<?php

function doSomething(int $valueOne = null, int $valuetwo = null)
{
    $array = [];
    $prev = 0;
    for ($i = 0; $i <= 10; $i++) {
        if (empty($array)) {
            array_push($array, $i);
        } else {
            array_push($array, $array[$prev] + $i);
            $prev = $i;
        }
    }
    echo '<pre>';
    var_dump($array);
    echo '</pre>';
}

doSomething();

function calculate($paramOne, $paramTwo)
{
    $result = [];
    foreach ($paramOne as $eachOne => $value) {
        $number = abs($paramTwo[$eachOne]-$value);
        array_push($result, $number);
    }
    return $result;
}

function doSomethingThree($parameter)
{
    $var = str_split($parameter);
    $alphabet = range('A', 'Z');
    $result = [];
    for ($i = 0; $i < count($var); $i++) {
        $key = array_search($var[$i], $alphabet);
        array_push($result, $key + 1);
    }

    return $result;
}

$returnOne = doSomethingThree('ADSEDFMDLNLS');
$returnTwo = doSomethingThree('KEYWORDKEYWO');

$result = calculate($returnOne, $returnTwo);
 
var_dump($result);

// echo '<pre>';
// var_dump($returnOne);
// echo '</pre>';

// echo '<pre>';
// var_dump($returnTwo);
// echo '</pre>';
