# Analyzing a algorithm

Analysis of algorithm is the process of analyzing the problem solving capability of the algorithm in terms of time and space required.

The term **"analysis of algorithms"** was coined by **Donald Knuth**.

(Example of sum of numbers we did in the first class. One with for loop and one with the formula)

## Types of analysis

1. Worst-case - The max number of steps taken on any instance of size a.
2. best-case - The min number of steps taken on any instance of size a.
3. average-case - The average number of steps taken on any instance of size a.

---

For the worst case example, let's say we are finding an element in an array, so if the number is present at the last place or is simply not present is the worst case.

> Q: What is analysis of an algorithm? What are different types of analysis

For each sorting algorithms, we will find out all the cases.

---

### Asymptotic Notation (also known as Big-Oh notation)

It refers to the growth of the algorithm with the input i.e, **n**.

If your input growth is increased, but if the time constant, then that algorithm is good enough.

Slower the asymptotic growth rate the better the algorithmic complexity.

$$growth\ rate \propto \frac{1}{complexity}$$

---

### Algorithm complexity

It is a measure which evaluates the _order of the count of operations_ performed by a given algorithm as the function of size of the input data.

**Algorithm Complexity** is approximation of the number of steps necessary to execute an algorithm.

For finding the complexity, we find the fastest growing term and get rid of the constants.

---

Time complexity:

1. Linear $O(n)$
2. Constant time $O(1)$
3. Quadratic time $O(n^{2})$
