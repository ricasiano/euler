<?php
$naturalNumber = 600851475143;
$divisor = $naturalNumber;
function isAPrimeNumber(float $naturalNumber): bool
{
    for ($divisor = $naturalNumber - 1; 1 < $divisor; --$divisor) {
        if (0 === $naturalNumber % $divisor) {
            return false;
        }
    }
    return true;
}

function isAFactorOfNumber(float $naturalNumber, float $divisor): bool
{
    return 0 === $naturalNumber % $divisor;
}

function findLargestPrimeFactor(float $naturalNumber): float
{
    $largestPossibleFactor = floor($naturalNumber / 2);
    for ($ctr = $largestPossibleFactor; 1 < $ctr; --$ctr) {
        if (isAPrimeNumber($ctr) && isAFactorOfNumber($naturalNumber, $ctr)) {
            return $ctr;
        }
    }
    return 1;
}

echo findLargestPrimeFactor($naturalNumber);
