# Dynamically adding instance variables!!
'''
class Emp:
    def shadow(self, name, age):
        self.name = name
        self.age = age
    def work_on_data(self):
        print(f"{self.name}")

e = Emp()
e.shadow("Bharat", 18)
e.work_on_data()

class Emp2:
    def __init__(self, name, age) -> None:
        self.name = name
        self.age = age

    def work_on_data(self):
        print(f"{self.name}")

# e2 = Emp2() # can't do this - Same as java i.e., if you don't provide a NoArgsConstructor but NonZeroContructor, it will not create a NAC
e2 = Emp2("Bharat", 1e99)
e2.work_on_data()
'''

# Concept of method overloading => Same name but difference arguments
# This does not fking work!!
class Add:
    def __init__(self, num1) -> None:
        self.num1 = num1
    def __init__(self, num1, num2) -> None:
        self.num2 = num2
        self.num1 = num1
    total = 0
    def addition(self, num1, num2):
        self.num1 = num1
        self.num2 = num2
        self.total = self.num1 + self.num2
        print({self.total})

    def addition(self, num1, num2, num3):
        self.num3 = num3
        self.num1 = num1
        self.num2 = num2
        self.total = self.num1 + self.num2 + self.num3
        print({self.total})

a = Add(1)
a = Add(1, 2)
a.addition(1, 2, 3) # the interpreter matches the function prototype
a.addition(1, 2)
