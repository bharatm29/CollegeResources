# def variableParams(*args: int): # *args == java's type...name variable notation
#     print(args)
#     print(isinstance(args, tuple))

# def variableParams(*args): 
#     return list(args)
# ls: list = variableParams(1, 2, 3, 4, 5)
# print(ls)

# Optional arguments
# def optionalParams(n: int, **optional):
#     print("Optional=>", optional)
#
# optionalParams(1)

# def dictionaryParameters(**args):
#     for key, value in args.items():
#         print(key, value)
#
# dictionaryParameters(key="Key", value="Value")

# def formatFunc(name: str):
#     return f"You typed: {name}" # => like SLF4J in java
#
# print(formatFunc(input("Enter something\n")))

# Passing list to a function
# def process_list(ls: list[int]):
#     n: int = 0
#     for i in ls:
#         n += i
#     return n
#
# print(process_list([9, 0, 8, 2]))

# Everything is pass by reference
# def passByRef(ls: list[int]):
#     ls.append(19)
#
# ls: list[int] = [1, 2, 3, 4]
# passByRef(ls)
# print(ls)


