import math

given_number = 600851475143


def is_a_factor_of_number(dividend: float, divisor: float):
    return False if 0 != dividend % divisor else True


def is_a_prime_number(number: float):
    if 0 == number % 2 and math.sqrt(number).is_integer():
        return False
    counter = number - 1
    while counter > 2:
        if number % counter == 0:
            return False
        counter = counter - 1
    return True


def largest_prime_factor(number, counter=2):
    while counter < math.ceil(number / 2):
        if is_a_factor_of_number(number, counter):
            return round(number / counter)
        counter = counter + 1
    return 1


print(largest_prime_factor(given_number))
