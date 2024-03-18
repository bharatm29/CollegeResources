## Sorting technique

Sorting is arrangement based upon certain conditions, not just ascending and descending. An order is followed.

It is easy to search and retrieve when data is sorted or placed in particular order.(book example)

Sorting arranges data in a sequence by using specific criteria which makes searching easier.
Main objective of data sorting is to make the searching easier and efficient.

We have different sorting algorithms because they have different TS complexity and produces the result in different ways.

### Bubble sort

It is used to arrange N elements in ascending order.

It is simple to implement, easy to understand, it only takes a few lines of code and little memory overhead.

Amount of time it takes to sort:

It depends on the input array, amount of swapping and comparison.

---

How to answer the question:

Describe the bubble sort.
Show how the sorting is done by showing each pass with taking first element and comparing it with second etc for the whole pass.
State if an element is swapped.

After the first pass we can write 'similarly remaining passes will be done'
Add the steps properly with explanation of if there is swapping or not with acces.(Like we did in the example)

---

Example:

> [!WARNING]
> Open All the sorting markdown in raw file mode to view the arrow pointers correctly.

---
arr = [5 4 3 2 1]

> Pass 1

5 4 3 2 1 (here arr[0] is swapped with arr[1] because arr[0] > arr[1])
| ^
|_|

4 5 3 2 1
  | ^
  |_|

4 3 5 2 1
    | ^
    |_|

4 3 2 5 1
      | ^
      |_|

4 3 2 1 5 (Largest element is at the last after the first iteration)

After this we have to repeat the steps with the new list.
This is called Bubble sort because with each iteration the largest element is at the end of the list.


> Pass 2

4 3 2 1 5
| ^
|_|

3 4 2 1 5
  | ^
  |_|

3 2 4 1 5
    | ^
    |_|

3 2 1 4 5

> Pass 3

3 2 1 4 5
| ^
|_|

2 3 1 4 5
  | ^
  |_|

2 1 3 4 5

> Pass 4

2 1 3 4 5
| ^
|_|

1 2 3 4 5

---
arr = [4, 9, 5, 1, 0]

> Pass 1

4 9 5 1 0 (No swapping takes place here because arr[0] < arr[1])
| ^
|_|

4 9 5 1 0
  | ^
  |_|

4 5 9 1 0
    | ^
    |_|

4 5 1 9 0
      | ^
      |_|

4 5 1 0 9

> Pass 2

4 5 1 0 9
| ^
|_|

4 5 1 0 9
  | ^
  |_|

4 1 5 0 9
    | ^
    |_|

4 1 0 5 9
      | ^
      |_|

4 1 0 5 9

> Pass 3

4 1 0 5 9
| ^
|_|

1 4 0 5 9
  | ^
  |_|

1 0 4 5 9

> Pass 4

1 0 4 5 9
| ^
|_|

0 1 4 5 9

> Pass 5

0 1 4 5 9(Array is sorted after 3 passes)

---

arr = [8 22 7 9 31 5 13]

> Pass 1

8 22 7 9 31 5 13(No swapping)
| ^
|_|

8 22 7 9 31 5 13
  | ^
  |_|

8 7 22 9 31 5 13
    |  ^
    |__|

8 7 9 22 31 5 13(No swapping)
      |  ^
      |__|

8 7 9 22 31 5 13
         |  ^
         |__|

8 7 9 22 5 31 13
         |  ^
         |__|

8 7 9 22 5 13 31(Largest element at the end of the iteration)

> Pass 2

8 7 9 22 5 13 31
| ^
|_|

7 8 9 22 5 13 31 (No swapping)
  | ^
  |_|

8 7 22 9 31 5 13
    |  ^
    |__|

8 7 9 22 31 5 13(No swapping)
      |  ^
      |__|

8 7 9 22 31 5 13
         |  ^
         |__|

8 7 9 22 5 31 13
         |  ^
         |__|

8 7 9 22 5 13 31(Largest element at the end of the iteration)
