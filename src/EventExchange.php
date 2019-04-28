<?php

class EventExchange
{
    /**
     * @var float
     */
    private $value;

    /**
     * EventExchange constructor.
     * @param float $value
     */
    public function __construct(float $value)
    {
        $this->value = $value;
    }

    /**
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }
}
