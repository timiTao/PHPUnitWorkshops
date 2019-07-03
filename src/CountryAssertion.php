<?php

class CountryAssertion
{
    public static function isValidCountry($name)
    {
        if (in_array($name, Countries::getCountries())) {
            return true;
        };

        throw new InvalidArgumentException("Invalid country name: $name");
    }
}