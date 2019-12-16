<?php

class Number
{
    private $number;

    private function __construct(array $number)
    {
        $this->number = $number;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function __toString()
    {
        return implode($this->number);
    }

    public static function fromArray(array $number)
    {
        return new static($number);
    }

    public static function increment(Number $number): Number
    {
        $int = intval(implode($number->getNumber()));

        $int++;

        $array = array_map('intval', str_split($int));

        return new Number($array);

    }
}

$OneNumber = Number::fromArray([9, 9]);

echo "\n" . $OneNumber;

echo "\n" . Number::increment($OneNumber);