<?php

namespace AppBundle\Calculator;

/**
 * Class PriceCalculator
 *
 * @package AppBundle\Calculator
 */
class PriceCalculator
{
    /** @var  CalculationStrategyInterface */
    private $strategy;

    /**
     * @param CalculationStrategyInterface $strategy
     */
    public function setStrategy(CalculationStrategyInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    public function calculate($product)
    {
        return $this->strategy->calculate($product);
    }
}
