<?php

declare(strict_types=1);

class BidService
{
    public static function makeBid(Client $client, EventName $eventName, EventDate $eventDate, EventExchange $eventExchange) : bool
    {
        $bidDateSpec = new EventDateSpecification();
        $clientSpec = new ClientSpecification($client);

        $andSpec = new AndSpecification($bidDateSpec, $clientSpec);

        $bid = new Bid($client, $eventName, $eventDate, $eventExchange);

        if ($andSpec->isSatisfiedBy($bid)) {
            // ex. save in db or other thing
            return true;
        }
        return false;
    }
}
