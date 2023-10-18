<?php

include 'class/Fibonacci.php';

class TestFibonacci extends PHPUnit\Framework\TestCase
{
    private $value = 10;

    //Verify its array
    public function test_return_is_array_construction()
    {
        $this->assertIsArray((new Fibo($this->value))->fibo, 'Its not array');
    }

    //Verify size of array
    public function test_return_array_len_construction()
    {
        $this->assertCount($this->value, (new Fibo($this->value))->fibo);
    }

    //Verify if boolean
    public function test_return_is_bool()
    {
        $fibo = new Fibo(10);
        $this->assertIsBool($fibo->search(2), 'First Assert: Verify its bool.');
    }

    //Verify if its True
    public function test_return_is_true()
    {
        $fibo = new Fibo(10);
        $this->assertTrue($fibo->search(2), 'True.');
    }
}
