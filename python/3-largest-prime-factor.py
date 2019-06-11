def is_a_factor_of_number(dividend: float, divisor: float):
    return False if 0 != dividend % divisor else True


def is_a_prime_number(number: float):
    for counter in range(2, int(number - 1)):
        if number % counter == 0:
            return False
    return True


def largest_prime_factor(number: int):
    for counter in range(2, number):
        if is_a_factor_of_number(number, counter):
            largest_factor = round(number / counter)
            if is_a_prime_number(largest_factor):
                return largest_factor
            return largest_prime_factor(largest_factor)
    return 1


print(largest_prime_factor(600851475143))
