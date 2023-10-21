# List is an ordered collection of items which is mutable and can be indexed.

'''
List operations:
- concatenation => +
- membership => in | not in
- slicing
- repetition
- traversing a list
'''

import copy

ls: list[int] = [i for i in range(1, 10)]
print(len(ls), ls)

ls[1] = 1
print(ls)

print(ls[::2]) # only steps

# reversing the list using slicing
print(ls[::-1])

# traversing list using loop
# for i in range(len(ls)):
#     print(ls[i])

# build-in functions for list
# len, list, append, extend, insert, count, index, remove, pop, reverse, sort, sorted, min, max, sum

# we can create list like iterators
st: str = ".chars()"
stl: list[str] = list(st)
print(stl)

stl.extend(list(".for_each()"))
print(stl)

# we can count an occurence of item using the count()
print(ls.count(1))

# remove and insert function. Notice that the value passed to the rmeove function is the actual value to remove
ls.remove(3)
ls.insert(2, 11)

print(ls)

# pop => removes the last element. pop(index) => removes the element at the index provided
ls.pop()
ls.pop(2)

print(ls)

# sort()
ls.sort(reverse = True)
print(ls)

# sorted function returns the sorted list and sort function do an in-place sort.
lss = sorted(ls)
print(lss)

# to copy a list just assign it to another - It does not deep copy, it is shallow copy
l1 = ls

l1.append(100000000000)
print(ls)

# to do deep copy
l2 = l1.copy()
l2 = l1[:]
l2 = list(l1)
l2 = copy.copy(l1)

# create a menu driver program to do this
