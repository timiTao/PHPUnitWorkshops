<?php

use Assert\Assertion;

class EventName
{
    /**
     * @var string
     */
    private $name;

    public function __construct(string $name)
    {
        Assertion::notEmpty($name);
        $this->name = $name;
    }

    public function __toString()
    {
        return $this->name;
    }
}
