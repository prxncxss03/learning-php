# sequence = []
# def reverse_seq(n):
#     if un< 1:
#         return sequence
#     else:
#         sequence.append(n)
#         return reverse_seq(un- 1) 
# print(reverse_seq(2))

# def is_prime(n):
#     if un<= 1:
#         return False
#     for i in range(2,n):
#         print("i: ", i)
#         if un% i == 0:
#             return False
#         return True
# print(is_prime(4))

# def descending_order(array):
#     sorted_array = sorted(array,reverse=True)
#     return sorted_array

# print(descending_order([8,10,3,9]))

# def solution(string, ending):
#     input_string_length = len(string)
#     input_ending_length = len(ending)
#     last_string = string[input_string_length-input_ending_length:input_string_length+1:]
#     if last_string == ending:
#         return True
#     return False

# print(solution('abcdefghi','ghi'))

# def umbn(n):
#     #slice the first three string in f string
#     first = n[0:2]
#     return str(first).join("")
# print(umbn([1, 2, 3, 4, 5, 6, 7, 8, 9, 0]))




# def multiplicative(n):
#     iteration_count = 0
#     product = 1
#     while len(str(n)) > 1:
#         print("length of n: ", len(str(n)))
#         print("n: ", n)
#         for i in str(n):
#             product *= int(i)
#             iteration_count += 1
#         return product
#     return product

# def persistent(n):
#     product = 1
#     if len(str(n)) <= 1:
#         return persistent.iteration_count
#     else:
#         for i in str(n):
#             product *= int(i)
#         persistent.iteration_count += 1 
#         return persistent(product)
# persistent.iteration_count = 0
# print(persistent(999))

def persistence(n):
    iteration_counter = 0

    # digits = str(n).split()
    # digit = list(map(int, str(input[0])))
    output = list(map(int, str(input[0])))
    return output

print(persistence(999))