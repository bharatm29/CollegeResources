# Algorithm for Selection sort

1. Start
2. Declare arr, n, i, j, index, min
3. Read arr
4. Initialize n = length of arr
5. Repeat until i is less than n

   1. j = i + 1
   2. index = i, min = arr[i]
   3. Repeat until j is less than n

      1. If arr[j] < min then
         1. min = arr[j]
         2. index = j
      2. Increment j by 1

   4. temp = arr[index]
   5. arr[index] = arr[i]
   6. arr[i] = min
   7. Increment i by 1

6. Print arr
7. Stop
