#### Stack is an ADT

Stack is an abstract data type since it's implementation can be done using arrays or linked list.
What is underneath doesn't really matter since the interface stack is the same.

---

## Representation of Stack

- Using 1-D array
- Using singly linked list

---

**Overflow** when the array is full and we are trying to insert into it.
**Underflow** when the array is empty and we are trying to delete from it.

So in insertion and deletion is checking for overflow and underflow is common.

Stack is even easier to implement because there is not a lot of variation in it's implementation.

---

### Insertion of element in the array representation of stack

1. Start
2. If stack is full i.e., `top == size - 1`
   ```c
   return OVERFLOW;
   ```
3. else increment top,`top++` and assign new value to `stack[top]`
   ```c
   top++;
   stack[top] = elem;
   ```
4. Stop

---

### Insertion of element in the linked list representation of stack

1. Start
2. Declare and initialize val and
   ```c
   node = malloc(sizeof(struct Node))
   node->val = val;
   ```
3. If `head == NULL` then
   ```c
   head = node;
   return;
   ```
4. Else make the `next` pointer of `node` points to the `top` pointer and move the `top` to `node`
   ```c
   node->next = top;
   top = node;
   ```
5. Stop
