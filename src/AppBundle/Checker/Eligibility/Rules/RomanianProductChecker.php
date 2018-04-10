<?php

namespace AppBundle\Checker\Eligibility\Rules;

/**
 * Class RomanianProductChecker
 *
 * @package AppBundle\Checker\Eligibility\Rules
 */
class RomanianProductChecker implements RuleCheckerINterface
{
    public function isEligible()
    {
        return true;
    }
}