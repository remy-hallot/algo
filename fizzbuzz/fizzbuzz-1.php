<?php

function fizzbuzz(int $n)
{
    for ($i = 0; $i <= $n; $i++) {
        if ($i % 5 == 0 && $i % 3 == 0) {
            print "\n FizzBuzz";
        } else if ($i % 5 == 0) {
            print "\n Buzz";
        } else if ($i % 3 == 0) {
            print "\n Fizz";
        } else {
            print "\n $i";
        }
    }
}

fizzbuzz(100);
