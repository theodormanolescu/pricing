<?php

namespace AppBundle\Action;

/**
 * Class PricingApplicator
 *
 * @package AppBundle\Action
 */
class IncrementApplicator implements PriceApplicatorInterface
{
    public function apply($value)
    {
        return ++$value;
    }
}
