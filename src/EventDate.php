<?php

declare(strict_types=1);

use Assert\Assertion;

class EventDate
{
    /**
     * @var DateTime
     */
    private $date;

    public function __construct(string $date)
    {
        Assertion::date($date, 'Y-m-d');
        $this->date = new \DateTime($date);
    }

    /**
     * @return DateTime
     */
    public function getDate(): DateTime
    {
        return $this->date;
    }
}
