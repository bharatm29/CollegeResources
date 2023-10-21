class Person:
    name = "Bharat"
    age = 19

    def display_info(self):
        print(f"My name is {self.name} and I am {self.age} years old")

p: Person = Person()
p.display_info()

class Grocery:
    name = "Potato"
    price = 100000

    def display_item_info(self):
        print(f"Item name: {self.name}. Price: {self.price}")

g: Grocery = Grocery()
g.display_item_info()
