# Space Complexity

It is the total amount of memory space used by an algorithm/program including the space of input values for execution.

It is always good to find out the SC of the program so that we will know how to improve the algorithm.

### Constant SC
If the SC is constant then that means that the memory required will be same not the same fixed amount like 5M.

### Linear SC
SC is linear if there is an increase in the space with the increase of input value.

---

a = 5, b = 5, c;
c = a + b
print c

This program requires fixed amount of space since it's 3 int variables. So total 12 bytes of memory thus constant Space Complexity O(1).

Q: How will this analysis help us?
A: Whether the memory required by the program changes with time, so that we can take precautions against it. This is how it helps.

---
int n, i sum = 0;
scanf(&n);
int arr[n];

for(int i = 0; i < n; i++){
    scanf(&arr[i]);
    sum += arr[i];
}

printf(sum)

This is linear since the size of the array changes with the value of n. Thus this is linear SC O(n)

---

We have to take the overall SC not just SC of the function

int sum (int a[], int n){
    int x = 0;
    for(int i = 0; i < n; i++){
        x += arr[i];
    }

    return x;
}

Here it's linear since array is dynamic and also that the overall SC is linear and not just of the function. Since if we just analyse the function it would be constant.

If we are accepting the size of the input then it's dynamic which means it will take at least linear space.
