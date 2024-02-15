# Calculating address of elements

---
Q: The address of first element is 1048, size = 2 and what is the address of arr[2][1]
A:

a[2][1] = 1048 + ((2 * 3) + 1) * 2
a[2][1] = 1062

---

Why we are doing this? => just to know what will be the address of the element we are concerned with.

---

Q: BA = 0, size = 4, find a[15][68], arr[10...30, 55...75]
A:
a[15][68] = 0 + (((15 - 10) * (75 - 55 + 1)) + (68 - 55)) * 4
    = 472

---

Q: BA = 1000, size = 8, find a[15][68], arr[10...30, 55...75]
A:
a[15][68] = 1000 + (((15 - 10) * (75 - 55 + 1)) + (68 - 55)) * 8
    = 1944

---

Q: BA = 100, size = 2, arr[4...7][-1...3]. Find a[6][2]
a[6][2] = 100 + (((6 - 4) * (3 - (-1) + 1) + (2 - (-1))) * 2)
    = 126

---

# Calculating for column major order

The formula will change for finding address in column major order.

TBH, it's the same but just replace n with m and swap i and j positions.

arr[i][j] = B.A + size * (((j - LCol) * m) + (i - LRow))

---

Q: arr[1...10][1...15], B.A = 100, size = 1, find a[8][6]. Represented in column major representation.
A:
arr[8][6] = 100 + (((6 - 1) * (10 - 1 + 1) + (8 - 1)) * 1)
    = 157

---

Q: arr[50][60], B.A = 6800, size = 2, find a[10][20]. Represented in column major representation.
arr[10][20] = 6800 + (20 * 50 + 10) * 2
    = 8820

---
