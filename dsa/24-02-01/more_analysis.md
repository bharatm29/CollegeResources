# More analysis

---

for (i = 0; i <= n; i++){
    c = a + b; => O(1) ... n times
}

T = O(1) * n
T = c1 * n

**T = O(n)**

This is O(n) or linear since the time complexity changes linearly with n

---

for (i = 0; i <= n; i++){
    for (j = 0; j <= n; j++){
        c = a + b; => O(1) ... n * n times
    }
}

This is O(n^2)

---

n = 10

for (i = 0; i <= n; i++){
    c = a + b; => O(1) ... n times
}

for (i = 0; i <= n; i++){
    c = a + b; => O(1) ... n times
}

T = O(1) + O(1) * n + O(1) * n
T = c1 + c2 * n + c3 * n
T = 2n
T = n

O(n)

---

x = n

while (x > 0){
    x = x - 1
}

O(n) as the loops runs for the value of n > 0

---

Whenever in a program there are multiple flow statements, we can make multiple commitments about it's complexity. But we need to find the worse case scenario.

int func(int[] arr){
int max = (int) -1e9 + 7;
    for(int i = 0; i < arr.length; i++){
        if(arr[i] > max){
            ...something
        }
    }
}

here the presence of if does not really affects the time complexity so it's linear however if there was like a for loop then it would have been like a quadratic for worse case scenario.

---

For the factorial program, The time complexity will be O(n).

---

log(n) time complexity
For finding the complexity, we need to find the how many steps are executing.
If on increasing the input, the number of steps only increase by one then it's logarithmic.

The best programming complexity is O(1) i.e, constant.

---

O(n * log(n))
O(n^3)
O(2^n), O(N!) O(n^k)
