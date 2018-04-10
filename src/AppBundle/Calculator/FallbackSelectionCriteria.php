<?php

namespace AppBundle\Calculator;

use AppBundle\Action\PriceApplicatorInterface;
use AppBundle\Checker\Eligibility\EligibilityCheckerInterface;
use AppBundle\Model\ProductInterface;

/**
 * Class FallbackSelectionCriteriaStrategy
 *
 * @package AppBundle\Calculator
 */
class FallbackSelectionCriteriaStrategy implements CalculationStrategyInterface
{
    /** @var  EligibilityCheckerInterface */
    private $eligibilityChecker;
    /** @var  PriceApplicatorInterface */
    private $applicator;

    public function calculate(ProductInterface $product): string
    {
        if ($this->eligibilityChecker->isEligible($product)) {
            return $this->applicator->apply($product);
        }

        return 'could not calculate';
    }
}
