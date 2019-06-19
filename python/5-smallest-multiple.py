max_number = 20
smallest_multiple = max_number + max_number


def is_evenly_divisible(dividend, number):
    if 1 == number:
        return True
    if 0 != dividend % number:
        return False
    return is_evenly_divisible(dividend, number - 1)


while not is_evenly_divisible(smallest_multiple, max_number):
    smallest_multiple = smallest_multiple + max_number

print(smallest_multiple)
