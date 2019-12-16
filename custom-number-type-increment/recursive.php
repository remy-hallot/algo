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

    public static function increment(Number $number, int $index): Number
    {
        $array = $number->getNumber();

        $sum = ($array[$index] ?? 0) + 1;

        if ($sum < 10) {
            if ($index >= 0) {
                $array[$index] = $array[$index] + 1;
            } else {
                array_unshift($array, 1);
            }
        } else {
            $array[$index] = 0;
            return static::increment(new Number($array), $index - 1);
        }

        return new Number($array);
    }
}

$OneNumber = Number::fromArray([9, 9]);

$index = count($OneNumber->getNumber()) - 1;

echo "\n" . $OneNumber;

echo "\n" . Number::increment($OneNumber, $index);