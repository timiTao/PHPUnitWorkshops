<?php

declare(strict_types = 1);

include_once __DIR__ . '/../src/prime.php';

use PHPUnit\Framework\TestCase;

class PrimeTest extends TestCase
{
    public function testPrime()
    {
        self::assertSame([], prime(1));
    }
}
