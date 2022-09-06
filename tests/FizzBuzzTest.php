<?php

namespace Tests;

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public $results = [];
    public $fizz = 0;
    public $buzz = 0;
    public $fizzBuzz = 0;
    public $rest = 0;

    public function __construct()
    {
        $this->results = (new FizzBuzz)->calculate();
        $this->fizz = array_count_values($this->results)['Fizz'];
        $this->buzz = array_count_values($this->results)['Buzz'];
        $this->fizzBuzz = array_count_values($this->results)['FizzBuzz'];
        $this->rest = count($this->results) - ($this->fizzBuzz + $this->fizz + $this->buzz);

        parent::__construct();
    }

    public function testTotalResultants()
    {
        $this->assertSame(100, count($this->results));
    }

    public function testFizzBuzz()
    {
        $this->assertSame(6, $this->fizzBuzz);
    }

    public function testFirstLastFizzBuzz()
    {
        $this->assertArrayHasKey(15, $this->results);
        $this->assertArrayHasKey(90, $this->results);
    }

    public function testFizz()
    {
        $this->assertSame(27, $this->fizz);
    }

    public function testFirstLastFizz()
    {
        $this->assertArrayHasKey(3, $this->results);
        $this->assertArrayHasKey(99, $this->results);
    }

    public function testBuzz()
    {
        $this->assertSame(14, $this->buzz);
    }

    public function testFirstLastBuzz()
    {
        $this->assertArrayHasKey(5, $this->results);
        $this->assertArrayHasKey(100, $this->results);
    }

    public function testCompareFizzBuzzWithOthers()
    {
        $this->assertLessThan($this->rest, $this->fizz + $this->buzz + $this->fizzBuzz);
    }

    public function testSumOfFizzBuzz()
    {
        $this->assertLessThan(100, ($this->fizz + $this->buzz + $this->fizzBuzz));
    }

    public function testSumOfAll()
    {
        $this->assertEquals(100, ($this->fizz + $this->buzz + $this->fizzBuzz + $this->rest));
    }
}