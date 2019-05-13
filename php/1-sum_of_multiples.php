<?php
$divisors = [3, 5];
$max = 5;
$naturalNumbers = function (int $max): array {
    $naturalNumbers = [];
    for ($ctr = 0; $ctr < $max; ++$ctr) {
        $naturalNumbers[] = $ctr;
    }
    return $naturalNumbers;
};

$multiples = function (array $naturalNumbers, int $divisor): array {
    return array_filter(
        $naturalNumbers,
        function (int $naturalNumber) use ($divisor) {
            return 0 === $naturalNumber % $divisor;
        }
    );
};

$multiplesGroupedByDivisors = function (array $naturalNumbers, array $divisors) use ($multiples): array {
    $multipleItems = [];
    $multipleItems += array_map(
        function ($divisor) use ($naturalNumbers, $multiples) {
            return $multiples($naturalNumbers, $divisor);
        },
        $divisors
    );
    return $multipleItems;
};

$sumOfMultiples = function (array $mergedMultiples): int {
    return array_reduce(
        $mergedMultiples,
        function ($sumOfMultiples, $number) {
            $sumOfMultiples += $number;
            return $sumOfMultiples;
        }
    );
};

$naturalNumbers = $naturalNumbers($max);
$multiplesGroupedByDivisors = $multiplesGroupedByDivisors($naturalNumbers, $divisors);
$mergedMultiples = array_merge(...$multiplesGroupedByDivisors);
echo $sumOfMultiples($mergedMultiples);
