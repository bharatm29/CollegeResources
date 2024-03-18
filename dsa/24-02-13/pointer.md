# Pointers

### Ways to access variables

You can access a variable in two ways

1. **Direct access**: use the variable name to access the variable
2. **Indirect Address**: Use a pointer to access that variable

## What is a pointer

Pointer allows us to store the memory address of another variable.

Pointer holds the address where the data resides in the computer memory.

Pointer allow different functions to share and modify these variables.

#### Advantages of Pointers

Pointers are powerful tools for managing memory and optimizing DS.

Key points:-

**Address reference**

**Dereference**

```c
int* ptr;
```

The pointer declared here will point to some random memory address as it is not initialized.
Such pointers are called **wild pointers**

**Pointer Initialization**

```c
int v = 20;
int* ptr;
ptr = &v;
```

```c
int* p = &v;
```

When you don't know the data type just declare the pointer as void so that it holds any value.

```c
void* pointer_name;
```
