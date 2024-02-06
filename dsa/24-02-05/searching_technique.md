# Searching techniques

#### Two categories

1. Sequential Search: Linear search. We go through every element and compares the elements.
2. Interval search: Binary search

## Linear search

It's a traditional approach for searching an element in a collection of elements.

Search an element in a given array by traversing the array from the starting till the element is found.

When the element is **matched** successfully, it returns the index of the element in the array, else return -1

We are going one after another, we are not jumping ships.

Best O(1) and O(N)

## Binary search

Dividing the array into two parts and middle element is compared to determine the next state.:

This comes under divide and conquer

There can be two scenarios with an array:
1. Array is not sorted :- use linear

2. Array is sorted:- apply BS and reduce the TC

Procedure:-

1. Find the mid element => mid = FLOOR((L + R) / 2). If the mid element is what we are searching for then return that element.

2. We will compare mid value with the value we are looking for.
    1. If midVal < val => traverse right side
    2. If midVal > val => traverse left side

---

arr = [10 12 24 29 39 40 51 56 69]
val = 56

beg = 0, end = 8,
mid = FLOOR(0 + 8 / 2) = 4
arr[mid] = 39

Compare arr[mid] to val => it's not so next step

arr[mid] < val thus we search in the right side of the list. Thus beg = mid + 1

we repeat this until we found val

---

If the question gives unsorted array and tells us to do BS. Then if it's for 2 marks then just write a line stating the sorted array.
If not for 2 marks but for 10 then sort it then BS
