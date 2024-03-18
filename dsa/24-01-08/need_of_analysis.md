# Need of analysis

> **Alice and Bob are trying to solve a simple problem of finding the sum of the first $1e^{11}$ natural numbers.**

1. Start
2. Declare sum, i
3. Initialize sum = 0, i = 1
4. Repeat until i is equal to $1e^{11}$
   1. sum = sum + i
   2. Increment i by 1
5. Display sum
6. Stop

---

```go
func sumMePlease(){
    sum := 0

    for i := 0; i <= int(1e11); i++{
        sum += i;
    }

    fmt.Println(sum)
}
```

---

We analyse for general purpose.
Let's say one instruction is taking one unit of time period.

step 2 and 3 are one instruction so executed once.

In step 4 one instruction for the condition and if the condition satisfies, step 4.1 and 4.2 will also be executed.
The init in step4 will be executed once.
step 4 condition will be executed $1e^{11}$ + 1 times. $1e^{11}$ times for the truth condition and once when i > $1e^{11}$

Rest will all be executed once.

What we are seeing is that our executing time changes based on the input(like $1e^{11}$).

**Your program executing behaviour depends upon what input we are providing.**

Next step into analyzing our solution is to find if we can form a optimal solution.

For example, for the above program we can use the summation formula to make it optimal solution:
$$sum = (n * (n + 1)) / 2$$

---

> **Why do we need analysis of algorithms?**

- Helps us to understand if our program is efficient or not.

- If working program is good or not. Good or not good can be like accuracy of the program.

- Running time issue, if run or large datasets.

- We can predict performance of particular software.

- Compare algorithms

- Provide guarantees for certain conditions

- Lets us test conditions or constraints.

---

When we analyse an algorithm, we need to consider time and space complexity.

---
