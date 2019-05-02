<?php

declare(strict_types=1);

use Assert\Assertion;

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
        Assertion::greaterThan($value,1);
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
