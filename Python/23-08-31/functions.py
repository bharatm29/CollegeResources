# Function is a reusable block of code.

# def addition() -> int: # Function definition
#     n1, n2 = int(input("Enter first number:\n")), int(input("Enter second number\n"))
#     return n1 + n2
#
# def subtraction(): # Function definition
#     n1, n2 = int(input("Enter first number:\n")), int(input("Enter second number\n"))
#     print(n1 - n2)
#
#
# print(addition()) # Function with retrn value
# subtraction() # Function with no return value

def maxNum(a: int, b: int) -> int:
    return a if a > b else b

res: int = maxNum(10, 20)
print(res)
