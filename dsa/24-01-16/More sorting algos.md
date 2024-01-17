[[dsa MOC]]

# Insertion sort

It works the way we sort playing cards in our hands.



* We start by making the second element of the given array as the key.
* We compare the key to the element before it ie., the 0th index and compare and put the element.
* Then we make the third element of the array as key and repeat the comparison.
* Repeat until the array is sorted.
---
arr = [4 3 2 10 12 1 5 6]

4 3 2 10 12 1 5 6
   ^
key
here since 3 is less than 4 we swap them

3 4 2 10 12 1 5 6
   \   ^
   \ key
here we compare 2 with all the left values

2 3 4 10 12 1 5 6
   \      ^
   \     key

here 10 is the greatest out of left values,

2 3 4 10 12 1 5 6
   \           ^
   \         key

nothing to do here

2 3 4 10 12 1 5 6
   \               ^
   \             key
   
1 2 3 4 10 12 5 6
   \                  ^
   \                key

here 5 will be placed after 4

1 2 3 4 5 10 12 6
   \                      ^
   \                    key

1 2 3 4 5 6 10 12
      \                      ^
     \                    key



5 1 6 2 4 3
5 1 6 2 4 3
\   ^
 key

1 5 6 2 4 3
   \   ^
\    key

1 5 6 2 4 3
\         ^
   \  key
   
1 2 5 6 4 3
\            ^
\         key

1 2 4 5 6 3
\               ^
\            key

1 2 3 4 5 6





