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
        $array = $number->getNumber();
        $index = count($array) - 1;

        for ($i = $index; $i >= 0; $i--) {

            $sum = $array[$i] + 1;

            if ($sum < 10) {
                $array[$i] = $sum;
                break;
            } else {
                $array[$i] = 0;
                if ($i == 0) {
                    array_unshift($array, 1);
                }
            }
        }

        return new Number($array);
    }
}

$OneNumber = Number::fromArray([9, 9]);

echo "\n" . $OneNumber;

echo "\n" . Number::increment($OneNumber);