<?php

declare(strict_types = 1);

include_once __DIR__ . '/../src/fibonacci.php';

use PHPUnit\Framework\TestCase;

class FibonacciTest extends TestCase
{
    public function testFibonacci()
    {
        self::assertEquals(0, fibonacci(0));
    }
}
