# Selection sort

1. Begin with finding out the minimum or maximum value in the list.
2. The smallest element is swapped with the leftmost element and that element becomes part of the sorted array.
3. The technique is repeated until the array is sorted.

> [!CAUTION]
> This is not suitable for large data sets.

---

> [!WARNING]
> Open All the sorting markdown in raw file mode to view the arrow pointers correctly.

arr = [3 9 6 1 2]

3 9 6 1 2 (We are at the first index. The smallest value after and including that is 1 so we swap 3 with 1) <- Add comments like these.
|     ^
|_____|

1 9 6 3 2 (at the end of the first pass, the smallest element is at the start)
  |     ^
  |_____|

1 2 6 3 9
    | ^
    |_|

1 2 3 6 9(6 itself is smallest out of two)
      ^
      |

Passes required in bubble sort is more than that required in selection sort.

---

arr = [6 2 11 7 5]

6 2 11 7 5
| ^
|_|

2 6 11 7 5
  |      ^
  |______|

2 5 11 7 6
    |    ^
    |____|

2 5 6 7 11
      |
      |

---
> [!NOTE]
> We can also consider the maximum by putting our pointer initially at the end instead of the at the start.

---

arr = [4 1 2 7 6]
arr = [12 29 25 8 32 17 40]
