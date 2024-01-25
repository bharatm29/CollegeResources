# Quick Sort

Easiest is to take the last index.(??)

---

arr = [8 7 6 1 0 9 2]

8 7 6 1 0 9 2
^           ^
i         p
j

First comparing value of idx and p and if arr[idx] < arr[p] then swap if not move the pointer to the next location

8 7 6 1 0 9 2(same so we move on)
^  ^        ^
j i         p

8 7 6 1 0 9 2(same so we move on)
^   ^       ^
j   i       p

8 7 6 1 0 9 2
^     ^     ^
j     i     p

here arr[p] > arr[idx] so we swap with the first element, arr[j]


1 7 6 8 0 9 2
  ^     ^   ^
  j     i   p


again, here arr[p] > arr[idx] so we swap with the first element, arr[j]

1 0 6 8 7 9 2
    ^     ^ ^
    j     i p

1 0 6 8 7 9 2
    ^       ^
    j       p
            i

here, 2 is compared with itself and it is swapped with arr[j]. Also the loop ends here :(

1 0 2 8 7 9 6
    ^
    j

then we return j that is the pivot index

---
arr = [11 16 2 8 1 9 4 7]

| 11 | 16 | 2 | 8 | 1 | 9 | 4 | 7 |
| --- | --- | --- | --- | --- | --- | --- | --- |

