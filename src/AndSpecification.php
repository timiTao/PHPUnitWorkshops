<?php

declare(strict_types=1);

class AndSpecification implements SpecificationInterface
{

    /**
     * @var SpecificationInterface[]
     */
    private $specifications;

    /**
     * AndSpecification constructor.
     * @param SpecificationInterface ...$specifications
     */
    public function __construct(SpecificationInterface ...$specifications)
    {
        $this->specifications = $specifications;
    }

    public function isSatisfiedBy(Bid $bid): bool
    {
        foreach ($this->specifications as $specification) {
            if (!$specification->isSatisfiedBy($bid)) {
                return false;
            }
        }
        return true;
    }
}
