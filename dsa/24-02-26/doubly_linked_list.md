# Doubly linked list

**How to identify the first and last node of the list**

prev of first node points to NULL and for the last node, next points to NULL

Q: Describe construction of doubly linked list. How it is different from singly linked list.
A: 

### Advantage of doubly over singly linked list.
A: It is very easy to access previous node in the list. You can easily in forward or backward direction.
When we are deleting a node in singly linked list, prev node pointer is required. However in DLL, there is prev pointer already thus pointer projection is easy.

### Disadvantages

Extra spaces is required. All operations require an extra pointer previous to be maintained.

---

Algorithm to insert at the start

1. Start
2. Xs

---

Steps to creating the DDL.

1. Initialize nodes.
```c
struct node* head;
struct node* one;
struct node* two;
```
2. Allocate memory.
```c
struct node* one = malloc(sizeof(struct node));
struct node* two = malloc(sizeof(struct node));
```
3. Assign data values
```c
one->data = 1;
two->data = 2;
```
4. Connect nodes
```c
one->next = two;
two->prev = one;
```
5. Save address of first node in head.
```sh
head = one;
```
NAMAN CAPSLOCK MOLESTER
