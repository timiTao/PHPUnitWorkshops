<?php

declare(strict_types=1);

class EventDateSpecification implements SpecificationInterface
{
    public function isSatisfiedBy(Bid $bid): bool
    {
        if ($bid->getEventDate()->getDate() < new \DateTime()) {
            return false;
        }

        return true;
    }
}
