## Deletion in circular linked list

#### Deleting the **first node** from circular single linked list

1. Start
2. If the list is empty that means `head` == NULL
   1. return UNDERFLOW
3. else if the head node is the only node in the list then
   1. temp = head
   2. head = NULL
   3. Free memory occupied by the node pointer `temp`
4. else Initialise and declare a node pointer `last` and move `last = last->next` until `last->next = head`
5. temp = head
6. head = head->next
7. last = head
8. Free memory occupied by the node pointer `temp`
9. Stop

#### Deleting the **last node** from circular single linked list

1. Start
2. If the list is empty that means `head` == NULL
   1. return UNDERFLOW
3. else if the head node is the only node in the list then
   1. temp = head
   2. head = NULL
   3. Free memory occupied by the node pointer `temp`
4. else Find the node before the last node (let it be `temp`)
5. Store the address of the node next to he last node in `temp`
6. Free the memory occupied by last node pointer.
7. make `temp` as the last node.
8. Stop

#### Deleting at a **specific position** from circular single linked list
JUST COPY PASTA
