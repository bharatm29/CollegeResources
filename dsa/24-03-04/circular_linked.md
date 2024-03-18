# Circular Linked list

Two types

- Circular single linked list
- Circular double linked list

---

In a circular linked list, the last node of the list points to the first node.

### Code to create circular singly linked list

```c
struct node {
    node* next;
    int data
}
```

1. Initialize nodes.

```c
struct node* head;
struct node* last;
struct node* one = NULL;
struct node* two = NULL;
struct node* two = NULL;
```

2. Allocate memory.

```c
struct node* one = malloc(sizeof(struct node));
struct node* two = malloc(sizeof(struct node));
struct node* three = malloc(sizeof(struct node));
```

3. Assign data values

```c
one->data = 1;
two->data = 2;
three->data = 3;
```

4. Connect nodes

```c
one->next = two;
two->next = three;
three->next = one;
```

5. Save the address of the last node and the first node

```
head = one;
last = three;
```

---

## Algorithm to traverse Circular single linked list

1. Start
2. Initialize node = head
3. Print the value of `node->data` and assign `node = node->next`
4. Repeat step 3 until node is equal to last.
5. Stop

## Circular Doubly linked list

The `next` pointer of `last` node points to the `head`.

The `prev` pointer of `head` node points to `last`

> Q: What is the difference between circular singly and doubly linked list.
