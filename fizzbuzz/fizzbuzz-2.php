<?php

function fizzbuzz(int $n)
{
    for ($i = 0; $i <= $n; $i++) {
        $str =  $i;

        if (0 === $i % 3) {
            $str = "Fizz";
        }

        if (0 === $i % 5) {
            $str = "Buzz";
        }

        if (0 === $i % 15) {
            $str = "FizzBuzz";
        }

        print $str.PHP_EOL;
    }
}

fizzbuzz(100);
