<?php
$naturalNumber = 600851475143;
function isAPrimeNumber(float $naturalNumber): bool
{
    if (0 === $naturalNumber % 2)
    {
        return false;
    }
    for ($divisor = 2; $naturalNumber > $divisor; ++$divisor) {
        if (0 === $naturalNumber % $divisor && $naturalNumber != $divisor) {
            return false;
        }
    }
    return true;
}

function isAFactorOfNumber(float $naturalNumber, float $divisor): bool
{
    return 0 === $naturalNumber % $divisor;
}

function getLargestPrimeFactor(float $naturalNumber)
{
    $largestPossiblePrimeNumber = floor(sqrt($naturalNumber / 2));
    for ($ctr = $largestPossiblePrimeNumber; 3 < $ctr; $ctr -= 2) {
        if (isAPrimeNumber($ctr) && isAFactorOfNumber($naturalNumber, $ctr)) {
            return $ctr;
        }
    }

    return 0;
}
var_dump(getLargestPrimeFactor(600851475143));
