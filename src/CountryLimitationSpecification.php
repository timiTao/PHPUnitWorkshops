<?php

declare(strict_types=1);

class CountryLimitationSpecification implements SpecificationInterface
{
    /**
     * @var Client
     */
    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function isSatisfiedBy(Bid $bid): bool
    {
        if ($this->client->getCountry()->__toString() !== $bid->getClient()->getCountry()->__toString()) {
            return false;
        }

        return true;
    }
}
