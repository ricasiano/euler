<?php
$max = 10;
$fibonacciSequence = [1];
$fibonacci = function (int $previous = 1) use (&$fibonacci, &$fibonacciSequence, $max): array {
    end($fibonacciSequence);
    $current = current($fibonacciSequence);
    if ($max > $current) {
        $fibonacciSequence[] = $previous + $current;
        $fibonacci($current);
    }
    return $fibonacciSequence;
};

$evenFibonacci = array_filter(
    $fibonacci(),
    function ($fibonacci) {
        return (0 === $fibonacci % 2);
    }
);

$sumOfEvenFibonacci = array_reduce(
    $evenFibonacci,
    function ($sum, $item) {
        $sum += $item;
        return $sum;
    }
);

echo $sumOfEvenFibonacci;
