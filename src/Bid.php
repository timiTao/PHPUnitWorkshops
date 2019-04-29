<?php

declare(strict_types=1);

class Bid
{
    /**
     * @var EventName
     */
    private $eventName;
    /**
     * @var EventDate
     */
    private $eventDate;
    /**
     * @var EventExchange
     */
    private $eventExchange;
    /**
     * @var Client
     */
    private $client;

    public function __construct(Client $client, EventName $eventName, EventDate $eventDate, EventExchange $eventExchange)
    {
        $this->eventName = $eventName;
        $this->eventDate = $eventDate;
        $this->eventExchange = $eventExchange;
        $this->client = $client;
    }

    /**
     * @return EventName
     */
    public function getEventName(): EventName
    {
        return $this->eventName;
    }

    /**
     * @return EventDate
     */
    public function getEventDate(): EventDate
    {
        return $this->eventDate;
    }

    /**
     * @return EventExchange
     */
    public function getEventExchange(): EventExchange
    {
        return $this->eventExchange;
    }

    /**
     * @return Client
     */
    public function getClient(): Client
    {
        return $this->client;
    }
}
