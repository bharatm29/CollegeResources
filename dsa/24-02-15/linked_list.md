# Linked List

Q: When to prefer linked list?
A: When we don't know the size of number of datasets.
You want to insert and delete quickly.
It does not waste memory space. It can made long.

## How it is presented

It is a data structure having collection of nodes and each node contains data and the link to next or prev node.
LL is a series of connected nodes.

Each node contains at least:

- A piece of data
- Pointer to the next node in the list

Head: pointer to the first node.

The last node points to NULL.

**Data field** - Contains actual value to be stored and processed.
**Link(Pointer) field** - Contains address of the next node
**Empty list** - If nodes are not present in the linked list it is called as empty linked list

Depending on the structure of the node, it can be singly, doubly linked list or circular linked list.

Circular linked list:- last node points to the first node.

Doubly linked list:- Node contains two pointers one pointing to prev and one to next.
Usually two pointers are maintained to keep track of the list, _head_ and _tail_.

## Operations of List

- IsEmpty
- InsertNode :- insert at head, tail or between
- FindNode
- DeleteNode :- delete at head, tail or between
- DisplayList

---

Q: What do you mean by LL. Explain diff types of operations performed on the list.

---

When we are inserting to the LL, we first check if the LL is empty or not.
