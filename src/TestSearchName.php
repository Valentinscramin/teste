<?php

include 'class/SearchName.php';

class TestSearchName extends PHPUnit\Framework\TestCase
{
    private $stringOne = 'KEYWORDKEYWZ';
    private $stringTwo = 'ADSEDFUDXNLD';

    //Verify if its array
    public function test_return_is_array_construction()
    {
        $this->assertIsArray((new SearchName($this->stringOne))->result, 'First Assert: KEYWORDKEYWZ');
        $this->assertIsArray((new SearchName($this->stringTwo))->result, 'Second Assert: ADSEDFUDXNLD');
    }

    //Verify not equals
    public function test_return_not_equals()
    {
        $this->assertNotEquals((new SearchName($this->stringOne))->result, (new SearchName($this->stringTwo))->result);
    }

    //Verify array Count
    public function test_return_array_len_construction()
    {
        $this->assertCount(strlen($this->stringOne), (new SearchName($this->stringOne))->result, 'String One not return 12 positions');
        $this->assertCount(strlen($this->stringTwo), (new SearchName($this->stringTwo))->result, 'String Two not return 12 positions');
    }

    //Verify Expected Result
    public function test_return_expected()
    {
        $this->assertEquals('PYTHONISGOOD', SearchName::search((new SearchName('KEYWORDKEYWZ'))->result, (new SearchName('ADSEDFUDXNLD'))->result));
    }
}
