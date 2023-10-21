# While is good if we don't want to be bound by a fixed range or we want more control over mutability.

# count: int = 1
# while count <= 5:
#     print(count)
#     count += 1

# Finding factos
# num: int = int(input("Enter a number\n"))
# factor: int = 2
#
# factorList: list = [1]
#
# while factor < (num // 2):
#     if num % factor == 0:
#         factorList.append(factor)
#     factor += 1
#
# print(factorList)

# Introducing break statemenets

num: int = 0
for num in range(20):
    num += 1
    if num == 10:
        break

    print("Num has value ", num)
