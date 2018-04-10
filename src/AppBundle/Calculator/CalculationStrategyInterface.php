<?php

namespace AppBundle\Calculator;

use AppBundle\Model\ProductInterface;

interface CalculationStrategyInterface
{
    public function calculate(ProductInterface $product): string;
}
