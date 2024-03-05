# Operations in Circular Singly linked list

### Inserting at the beginning in a Circular Singly linked list

1. Start
2. If list is empty
   1. head = node
   2. node->next = head
   3. return
3. Initialize and declare `Node* last = head`.
4. Keep moving `last` to `last->next` until `last->next == head`.
5. `last` node next will point to the new node.
   ```c
   last->next = node
   ```
6. The next pointer of the new node will point to the previous head.
   ```c
   node->next = head
   ```
7. head = node
8. Stop

### Inserting at the end in a Circular Singly linked list

1. Start
2. If list is empty
   1. head = node
   2. node->next = head
   3. return
3. Initialize and declare `Node* last = head`.
4. Keep moving `last` to `last->next` until `last->next == head`.
5. The next of `last` will point to the `node`.
   ```c
   last->next = node
   ```
6. Next pointer of `node` will point to head
   ```c
   node->next = head
   ```
7. Stop

### Inserting at specific position in a Circular Singly linked list
`Copy pasta let's go`
