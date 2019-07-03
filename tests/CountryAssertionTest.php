<?php

use PHPUnit\Framework\TestCase;

class CountryAssertionTest extends TestCase
{
    public function testReturnTrueWithFullCountryName()
    {
        self::assertTrue(CountryAssertion::isValidCountry('Poland'));
    }

    public function testShouldThrowAnInvalidArgumentExceptionWithInvalidCountryName()
    {
        self::expectException(InvalidArgumentException::class);
        self::expectExceptionMessage("Invalid country name: SomeCountry");

        CountryAssertion::isValidCountry('SomeCountry');
    }

}
