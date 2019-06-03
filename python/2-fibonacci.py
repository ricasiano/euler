fibonacci = [1, 2]
max_number = 4000000
number = 1
pointer = 1

while max_number >= number:
    if max_number >= number:
        fibonacci.append(number)
    number = number + fibonacci[pointer]
    pointer += 1

fibonacci.pop(0)
even_numbers = list(filter(lambda fibonacci_number: 0 == fibonacci_number % 2, fibonacci))
print(sum(even_numbers))
