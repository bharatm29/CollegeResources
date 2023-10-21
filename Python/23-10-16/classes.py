class Person:
    def __init__(self, name, age) -> None:
        self.__name = name
        self.age = age

    def get_name(self):
        return self.__name

    def set_name(self, name):
        self.__name = name

p: Person = Person("Bharat", 18)
#
# # print(p.name)
# print(p.set_name("Litchi"))
# print(p.get_name())
# print(p.age)
#
# class Man(Person):
#     def __init__(self, name, age) -> None:
#         self.__name = name
#         self.age = age
#
# m: Person = Man("Bharat", 100)
#
# print(m)

# class Employee:
#     eid = 101
#     name = "Aaron"
#     salary = 1e9
#
#     def __init__(self) -> None:
#         print("OOrah")
#         pass
#
#     def cry(self):
#         print(f"I only earn {self.salary}")
#
# e = Employee()
# e.cry()


