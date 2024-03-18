## Did someone say Analysis?

#### $O(1)$

O(1) describes an algorithm that will execute in the same time (or space regardless of the input size of data.).
Initialization takes constant time.

#### $O(n)$

Performance will grow linearly and directly proportional to the size of the input data.
Like iterating a list in sequential form.

#### $O(n^2)$

Performance is directly proportional to the square of the size of the input data set.

---

Example:-

arr = [1 4 6 8 9 3 2 7 5 10]

---

> 1st iteration

This will be $O(1)$ since the statements only executes once even when we change the array size.

$T = O(1) + O(1)$

For now we attach some constants with them:

$T = c1 + c2$

$T = 1 * c3\ where\ c3 = c1 + c2$

Ignoring the constants and coefficient.

Time complexity = $O(1)$

```py
def calSum(arr):
    sum = 0

    return sum
```

---

> 2nd iteration

$O(n)$

```py
def calSum(arr):
    sum = 0 -> O(1)
    for i in arr:
        sum += i => O(1) * n times

    return sum -> O(1)
```

$T = O(1) + n * O(1) + O(1)$

Assigning constants

$T = c4 + n * c5$

Ignoring constants and coefficients

$T = n$

Time complexity = $O(n)$

---

> 3rd iteration

arr = [[1 4 6 ] [ 8 9 3 ] [ 2 7 5]]

$O(n^2)$

```py
def calSum(arr):
    sum = 0 -> O(1)
    for each row in arr:
        for i in arr[row]:
            sum += i -> O(1)...(n * n) times

    return sum -> O(1)
```

$$T = O(1) + n*n*O(1) + O(1)$$


$$T = c1 + n^2 * O(1) + c2 \ where \ c1=c2=O(1)=constants$$

$$T = c3 + n^2*c4\ where\ c3=c1+c2\ and\ c4=O(1)$$

$$T = n^2$$

Time complexity = $O(n^2)$
