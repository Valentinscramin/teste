<?php

include 'class/SearchName.php';
include 'class/Fibonacci.php';

SearchName::search((new SearchName('ADSEDFMDLNLS'))->result, (new SearchName('KEYWORDKEYWO'))->result);

echo '<br>';

$fibo = new Fibo(10);
var_dump($fibo->search(3));
