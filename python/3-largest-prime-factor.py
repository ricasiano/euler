import math

given_number = 600851475143


def is_a_factor_of_number(dividend: float, divisor: float):
    return False if 0 != dividend % divisor else True


def is_a_prime_number(number: float):
    for counter in range(int(number - 1), 2):
        if number % counter == 0:
            return False
    return True


def largest_prime_factor(number: float):
    for counter in range(2, int(math.ceil(number / 2))):
        if is_a_factor_of_number(number, counter):
            return round(number / counter)
    return 1


print(largest_prime_factor(given_number))
