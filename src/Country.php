<?php

use Assert\Assertion;

class Country
{
    /**
     * @var string
     */
    private $country;

    public function __construct(string $country)
    {
        Assertion::notEmpty($country);
        $this->country = $country;
    }

    public function __toString()
    {
        return $this->country;
    }
}
