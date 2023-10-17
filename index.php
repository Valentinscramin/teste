<?php

function doSomething($n, $search)
{
    $array = [];
    $actual = 0;
    $next = 1;

    $count = 0;
    while ($count < $n) {
        array_push($array, $actual);
        $number = $next + $actual;
        $actual = $next;
        $next = $number;
        $count++;
    }

    $result = array_search($search, $array) ? true : false;

    echo '<pre>';
    var_dump($array);
    echo '</pre>';

    echo '<pre>';
    var_dump($result);
    echo '</pre>';
}

doSomething(10, 2);