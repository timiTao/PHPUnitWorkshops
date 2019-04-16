<?php

declare(strict_types = 1);

include_once __DIR__ . '/../src/fizzBuzz.php';

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function testFizzBuzz()
    {
        $fizzBuzz = fizzBuzz(15);
        self::assertEquals('12Fizz4BuzzFizz78FizzBuzz11Fizz1314FizzBuzz', $fizzBuzz);
    }
}
