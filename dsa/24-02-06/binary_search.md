## Binary Search

1. Start by finding out the mid value. Using mid = FLOOR(L + R / 2);
2. If middle element is what we are looking for then return that index otherwise move to the next step
3. Check whether element to be searched is less or greater than value of the middle element.
4. If element is greater then search in the right otherwise in the left.
5. If the element is not found return -1

```go
func BinarySearch(arr []int, val int) int {
    lo := 0
    hi := len(arr)

    for lo < hi {
        mid := (lo + hi) / 2

        if arr[mid] == val{
            return mid
        } else if arr[mid] < val {
            lo = mid + 1
        } else {
            hi = mid - 1
        }
    }

    return -1
}
```

According to the weightage of the question we have to sort the array also if it is not already.
