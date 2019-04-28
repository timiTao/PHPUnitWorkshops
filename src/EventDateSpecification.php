<?php

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
