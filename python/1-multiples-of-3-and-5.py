def sum_of_multiples(dividends: range, divisors: list):
    return sum(list(map(lambda divisor: sum_of_multiples_by_divisor(dividends, divisor), divisors)))


def sum_of_multiples_by_divisor(dividends: range, divisor: int):
    return sum(list(filter(lambda dividend: 0 == dividend % divisor, dividends)))


print(sum_of_multiples(range(1020), [3, 5]))
