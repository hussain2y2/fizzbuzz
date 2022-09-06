<?php

namespace App;

class FizzBuzz
{
    /**
     * FizzBuzz calculation
     *
     * @return array
     */
    public function calculate(): array
    {
        $results = [];
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 15 === 0) { // Multiple of 5 & 3
                $results[$i] = 'FizzBuzz';
            } elseif ($i % 3 === 0) { // Multiple of 3 only
                $results[$i] = 'Fizz';
            } elseif ($i % 5 === 0) { // Multiple of 5 only
                $results[$i] = 'Buzz';
            } else { // Rest of the records
                $results[$i] = $i;
            }
        }

        return $results;
    }
}