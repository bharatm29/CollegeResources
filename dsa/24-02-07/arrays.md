# Array

Collection of elements. Contiguous block of memory. We need array to store more than one elements.

We can access the elements in the array using indexing.

What is the size of the array:= $(R - L) + 1$

> Q: How the values are stored in the array?

A: Values are stored in a contiguous block of memory. It is stored in sequential order or approach.

###### Multidimensional arrays

Multidimensional arrays can be described as **arrays of arrays**.

> Q: How are 2+D arrays are represented in the memory.

A: There are two ways to represent 2+-D arrays in memory:

1. Row major order :- The elements of a particular row are stored at adjacent memory location. A[0][0] followed by A[0][1] and when the first row ends it is followed by A[1][0] and next. Even here the elements are stored in a sequential manner.

2. Column major order :- This stores the element in column wise.

> Q: What are the differences between Row major and Column major. (wtf?)

> Q: Write an algorithm to perform following operations on 1-D and 2-D arrays.
>
> 1. Insertion
> 2. Deletion
> 3. Traversing
> 4. Merging two arrays

By default we use row major format for storing 2+-D array.
What we pick depends on the problem we are solving.

### Memory Addressing of the array

#### For row major order:

**Zero indexed array:** $arr[i][j] = B.A+size*(i * n + j)$ where $n$ is number of columns.

**Non-zero indexed array:** $arr[i][j] = B.A+size*(\{(i - L.R) * n\} + (j - L.C))$ where $L.R$ is lower limit of rows and $L.C$ is lower limit of columns.

$n$ can be calculated using $n = EndIndex - StartIndex  + 1$

For example for an array, $arr[1..10][1..10]$, :n will be $n = 10 - 1 + 1 = 10$:

#### For column major order:

**Zero indexed array:** $arr[i][j] = B.A+size*(j * m + i)$ where $m$ is number of rows.

**Non-zero indexed array:** $arr[i][j] = B.A+size*(\{(j - L.C) * m\} + (i - L.R))$ where $L.R$ is lower limit of rows and $L.C$ is lower limit of columns.

$m$ can be calculated using $m = EndIndex - StartIndex  + 1$

For example for an array, $arr[1..9][1..10]$, $m$ will be $n = 9 - 1 + 1 = 9$
