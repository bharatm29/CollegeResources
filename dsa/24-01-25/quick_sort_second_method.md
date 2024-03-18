## Quick Sort Second method

The second considers two pointers P and Q. P tranverse from start to the end and Q traverse from end to start.
P is going to stop when it comes accross a values which is greater than the pivot value
Q is going to stop when value is less than pivot value

P will stop at the end. We place a magical infinity at the end.

Whenever P and Q pointer are passing each other, swap Q value with pvt value

---

Basic Algorithm

1. Mark two pointer P and Q.
2. Stop P when value is greater than pivot and Q, when value is less than pivot.
3. If P and Q cross each other, then swap values at pivot and Q.
4. If P and Q are not crossing each other then swap values at P and Q.

---

> [!WARNING]
> Open raw file to view the arrow pointers correctly.

arr = [35 50 15 25 80 20 90 45]

35 50 15 25 80 20 90 45 (P is initially at the start and stops at 50 which is 35 < 50)
^  ^                 ^
p  P                 Q

35 50 15 25 80 20 90 45(Q will decrement until it finds value smaller than pivot)
^  ^                 ^
p  P                 Q

35 50 15 25 80 20 90 45
^  ^           ^
p  P           Q

Now that P and Q are stuck on the desired value, swap them

35 20 15 25 80 50 90 45
^  ^           ^
p  P           Q

Again P and Q will individually go to the value they wanna be at. P at greater than pivot and Q at lesser than pivot

35 20 15 55 80 50 90 45
^        ^   ^
p        Q   P

since P > Q, swapping Q with pivot p

25 20 15 35 80 50 90 45
^        ^   ^
Q        p   P

Now the list is divided into two separate list at the pivot and same process is continued

---
```cpp
int pivot(vector<int>& v, const int low, const int high){
    const int pivotVal = v[low];

    int P = low;
    int Q = high;

    while(P < Q){
        while(P < high && v[P] <= pivotVal){
            P++;
        }
        while(Q > 0 && v[Q] > pivotVal){
            Q--;
        }
        if(P < Q){
            swap(v[P], v[Q]);
        }
    }

    swap(v[Q], v[low]);

    return Q;
}

void quickSort(vector<int>& v, const int low, const int high){
    if(low >= high){
        return;
    }
    const int pivotIndex = pivot(v, low, high);
    quickSort(v, low, pivotIndex - 1);
    quickSort(v, pivotIndex + 1, high);
}
```
---
