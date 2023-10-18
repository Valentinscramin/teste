<?php

include 'class/SearchName.php';
include 'class/Fibonacci.php';

print SearchName::search((new SearchName('KEYWORDKEYWZ'))->result, (new SearchName('ADSEDFUDXNLD'))->result);

echo '<br>';

$fibo = new Fibo(10);
var_dump($fibo->search(3));
