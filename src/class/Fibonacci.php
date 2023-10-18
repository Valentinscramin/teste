<?php

class Fibo
{
    private $fibo = [];

    public function __construct($fibo_len)
    {
        $this->genFibo($fibo_len);
    }

    private function genFibo($fibo_len)
    {
        $actual = 0;
        $next = 1;

        $count = 0;
        while ($count < $fibo_len) {
            array_push($this->fibo, $actual);
            $number = $next + $actual;
            $actual = $next;
            $next = $number;
            $count++;
        }
    }

    public function search(int $number)
    {
        return array_search($number, $this->fibo) ? true : false;
    }
}
