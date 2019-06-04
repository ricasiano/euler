fibonacci = [1, 2]
max_number = 4000000000000
even_fibonacci = []
pointer = 1
fibonacci_number = 0

while fibonacci_number < max_number:
    fibonacci_number = fibonacci[pointer] + fibonacci[pointer - 1]
    fibonacci.append(fibonacci_number)
    pointer = pointer + 1

sum_of_even_fibonacci = sum(list(filter(lambda fibonacci_even_number: 0 == fibonacci_even_number % 2, fibonacci)))
print(sum_of_even_fibonacci)
