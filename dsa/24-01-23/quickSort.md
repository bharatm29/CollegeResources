# Quick Sort

> [!CAUTION]
> Open Raw file for this to view the arrow pointers correctly

---

> [!NOTE]
> This is one of the ways to do quick sort

arr = [8 7 6 1 0 9 2]

8 7 6 1 0 9 2
^           ^
i           p
j

First comparing value of idx and p and if arr[idx] < arr[p] then swap if not move the pointer to the next location

8 7 6 1 0 9 2(same so we move on)
^  ^        ^
j  i        p

8 7 6 1 0 9 2(same so we move on)
^   ^       ^
j   i       p

8 7 6 1 0 9 2
^     ^     ^
j     i     p

Here arr[p] > arr[idx] so we swap with the first element, arr[j] and increment j


1 7 6 8 0 9 2
  ^     ^   ^
  j     i   p


Again, here arr[p] > arr[idx] so we swap with the first element, arr[j]

1 0 6 8 7 9 2
    ^     ^ ^
    j     i p

1 0 6 8 7 9 2
    ^       ^
    j       p
            i

Here, 2 is compared with itself and it is swapped with arr[j]. **WE DO NOT INCREMENT j HERE**.

Also the loop ends here :(

1 0 2 8 7 9 6
    ^
    j

Then we return j that is the pivot index

---
