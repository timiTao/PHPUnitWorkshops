<?php

declare(strict_types=1);

class BidService
{
    public static function makeBid(
        Client $client,
        EventName $eventName,
        EventDate $eventDate,
        EventExchange $eventExchange,
        SpecificationInterface $specification
    ) : bool
    {

        $bid = new Bid($client, $eventName, $eventDate, $eventExchange);

        if ($specification->isSatisfiedBy($bid)) {
            // ex. save in db or other thing
            return true;
        }
        return false;
    }
}
