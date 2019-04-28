<?php

class CountrySpecification implements SpecificationInterface
{
    /**
     * @var Country
     */
    private $country;

    public function __construct(Country $country)
    {
        $this->country = $country;
    }


    public function isSatisfiedBy(Bid $bid): bool
    {
        // @TODO compare countries client = bid

        return true;
    }
}
