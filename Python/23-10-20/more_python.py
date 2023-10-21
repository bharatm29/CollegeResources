s = {1, 2, 3}
print(type(s))
print(s)
s.add(19)
s.add(0)
s.add("sicsr") #order does not matter
s.add("alpha")
s.update([89, 10])
print(s)
s.pop()
s.discard(19)
# s.remove(19) # throws an exception if the element is not present
print(s)
s.clear()
print(s)
v = {}
print(type(v))
v = set()
print(type(v))
