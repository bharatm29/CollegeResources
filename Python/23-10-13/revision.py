# string and number data types are immutable no matter what

# tuples are mutable
# tuple3 = (1, 2, 3, [1, 2])
# tuple3[3] = 5 # not possible
# tuple3[3][0] = 5
# print(tuple3)

# so tuples are mutable because although we cannot change the value at a particular index but if it 
# contains a list we can change it thus tuples are mutable

# if we don't provide a comma it is not a tuple.
# t = 2 or t = (2) this is an int
# t = 2, this is an tuple
# print(type(t))
#
# This behaviour only happens with list
# ls = [1] # this is a list
# print(type(ls))

# nested tuple
# t=(1,2,(1,2))
# print(t[2][1])

# dictionary - they are mutable
dic = {'name': "something", 'age': 2e20, 'address': 'somewhere'}
print(dic['address'])

dic['message'] = "lol"
print(dic['message'])

dic['message'] = "lmfaooo"
print(dic['message'], dic.get('message'))

print('message' in dic)

print("---------")

for key in dic.keys():
    print(key, ":", dic[key])

print("---------")

for key, val in dic.items():
    print(key, ":", val)

print("---------")

for val in dic.values():
    print(val)

print("---------")

print(len(dic))

# we can create a dictionary using list of tuples
pairs = [('name', "something"), ('age', 30)]
dic1 = dict(pairs)
print(dic1)
dic1.clear()
print(dic1)

