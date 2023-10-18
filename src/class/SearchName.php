<?php

class SearchName
{
    private $string;
    public $result = [];
    public $text;

    public function __construct(string $string)
    {
        $this->string = $string;
        $this->extractPositionAlphabet();
    }

    private function extractPositionAlphabet()
    {
        $var = str_split($this->string);
        for ($i = 0; $i < count($var); $i++) {
            $key = array_search($var[$i], range('A', 'Z'));
            array_push($this->result, $key + 1);
        }
    }

    public static function search($varOne, $varTwo)
    {
        $string = '';
        $alphabet = range('A', 'Z');
        for ($i = 0; $i < count($varOne); $i++) {
            $string .= $alphabet[count($alphabet) - abs($varOne[$i] - $varTwo[$i]) - 1];
        }
        var_dump($string);
    }
}
