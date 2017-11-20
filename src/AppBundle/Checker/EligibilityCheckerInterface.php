<?php

namespace AppBundle\Checker\Eligibility;

use AppBundle\Model\ProductInterface;

/**
 * Interface PricingEligibilityCheckerInterface
 *
 * @package AppBundle\Checker\Eligibility
 */
interface EligibilityCheckerInterface
{
    /**
     * @param ProductInterface $product
     *
     * @return bool
     */
    public function isEligible(ProductInterface $product): bool;
}
