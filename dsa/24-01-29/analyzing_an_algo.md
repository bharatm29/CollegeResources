# Analyzing a algorithm

Analysis of algorithm is the process of analyzing the problem solving capability of the algorithm in terms of the time and size required.

The term "analysis of algorithms" was coined by Donald knuth.
(Example of sum of numbers we did in earlier notes. One with for loop and one with the formula)

## Types of analysis

1. Worst-case - The max number of steps taken on any instance of size a.
2. best-case - The min number of steps taken on any instance of size a.
3. average-case - The average number of steps taken on any instance of size a.

---

For the worst case example, let's say we are finding an element in an array, so if the number is present in the last place or is simply not
present is the worst case.

Q: What is analysis of an algorithm? What are different types of analysis

For each sorting algos, we will find out all the cases.

---

### Asymtotic Notation (also known as Big-Oh notation)

It refers to the growth of the algorithm with the input i.e, **n**.

If your input growth is increased, but if the time is remaining constant, then that algorithm is good enough.
Slower the asymtotic growth rate the better the algorithm.

---

### Algorithm complexity

It is a measure which evaluates the *order of the count of operations*, performed by a given algorithm as the function of size of the input data.

**Complexity** is approximation of the numer of steps necessary to execure an algorithm.

For finding the complexity, we find the fastest growing term and get rid of the constants.

---
Time complexity:
1. Linear O(n)
2. Constant time O(1)
3. Quadratic time O(n^2)
