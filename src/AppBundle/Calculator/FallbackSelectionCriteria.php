<?php

namespace AppBundle\Calculator;

use AppBundle\Model\ProductInterface;

/**
 * Class FallbackSelectionCriteriaStrategy
 *
 * @package AppBundle\Calculator
 */
class FallbackSelectionCriteriaStrategy implements CalculationStrategyInterface
{
    public function calculate(ProductInterface $product): string
    {
        return 'a';
    }
}
