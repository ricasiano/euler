import math


def find_largest_palindrome(first_multiplier: int, second_multiplier: int):
    if len(str(first_multiplier)) != 3 and len(str(second_multiplier)) != 3:
        return False
    product = first_multiplier * second_multiplier

    for palindrome_counter in range(product, 11, - 1):
        product_string = str(palindrome_counter)
        product_string_length = len(product_string)
        half_length = int(math.floor(product_string_length / 2))
        first_string = []
        second_string = []

        for counter in range(0, half_length):
            first_string.append(product_string[counter])

        for counter in range(product_string_length - 1, half_length - 1, -1):
            second_string.append(product_string[counter])

        if is_a_palindrome(first_string, second_string):
            return palindrome_counter

    return 1


def is_a_palindrome(first: list, second: list):
    return first == second


print(find_largest_palindrome(999, 919))
