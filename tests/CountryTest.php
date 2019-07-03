<?php

use PHPUnit\Framework\TestCase;

class CountryTest extends TestCase
{
    public function testShouldReturnValidCountry()
    {
        self::assertEquals('Poland', new Country('Poland'));
    }

    public function testShouldThrowExceptionWhenArgumentIsEmptyString()
    {
        self::expectException(InvalidArgumentException::class);
        new Country('');
    }

    public function testShouldThrowInvalidArgumentExceptionWithBadCountryName()
    {
        self::expectException(InvalidArgumentException::class);
        new Country('SomeName');
    }
}
