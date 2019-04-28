<?php

use PHPUnit\Framework\TestCase;

class CountryTest extends TestCase
{
    public function testShouldReturnValidCountry()
    {
        self::assertEquals('Poland', new Country('Poland'));
    }

    public function testShouldThrowException()
    {
        self::expectException(InvalidArgumentException::class);

        new Country('');
    }
}
