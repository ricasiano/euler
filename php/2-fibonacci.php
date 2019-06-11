<?php
$time_start = microtime(true);

$max = 4000000;
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

$time_end = microtime(true);

//dividing with 60 will give the execution time in minutes otherwise seconds
$execution_time = ($time_end - $time_start)/60;

//execution time of the script
echo '<b>Total Execution Time:</b> '.number_format((float) $execution_time, 10).' Mins';
