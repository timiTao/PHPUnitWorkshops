<?php

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

    public function __construct(EventName $eventName, EventDate $eventDate, EventExchange $eventExchange)
    {
        $this->eventName = $eventName;
        $this->eventDate = $eventDate;
        $this->eventExchange = $eventExchange;
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
}
