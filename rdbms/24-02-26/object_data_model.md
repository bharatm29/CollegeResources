# Object Relation

Q: Enlist four features of object relational data model wrt data types, nested relations, and modeling power.

A: Relational model: flat, "atomic" values

Object relational data model:-

- Extend the relational data model by including object orientation and contructs to deal with added data types.
- Allow attributes of tuples to have complex types, including non-atomic values such as nested relations.
- Preserve relational foundations, in particular the declarative access to data, while extending modelling power.
- Provide upward compatibility with existing relational languages.

# Storage management

In DB, store retrieves data from data store. This store is tables, different tables groups together for
He is responsible to get the data from database.
If we have efficient store manager, it will get faster and efficiently data then the output will be faster.

Store manager will be the interface between the database and the queries.

We have different tasks and issues related to store manager.
Issue mean how store manager is retrieving the data, i.e., how fast the data retrieval is, efficient it is etc etc.

Q: Define store manager. Enlist the two tasks and three issues of a database storage manager.

A: It is a program module that provides the interface between the low level data stored in the database and the application programs and queries submitted to the system.

The storage manager is responsible to the following tasks:

- Interaction with the OS File manager.
- Efficient storing, retrieving and updating of data.

Issues:

- Storage access
- File organization
- Indexing and hashing

# Transaction management

Reading is one of transaction. Like for availability of tickets. _READ a_
Writing is one transaction to confirm the ticket.

DO NOT TURN OFF THE SYSTEM => it is related to the transaction manager.
Basically we could have halted the system and the transaction become unsuccessful.
Then the system fails.

Transaction management is dependent on the system success.
**Atomicity of updates** means multiple users are concurrently updating the data.

The transaction management ensures that database remains in a consistent state.
To have efficient transaction management it is important to look at the concurrent transactions happening.

Q: What are the factors to ensure successful transaction management.
(If the Q comes in exam first talk about what is transaction management.)

A: A transaction is a collection of operations that performs a single logical function in a database application like reading, writing etc.

Transaction management component ensures that the database remains in a consistent state despite system failures(e.g, power failures and operating system crashes) and transaction failures.

Factors are => atomicity, consistency, isolation, durability, concurrency control, transaction logging and lock management.

**Q: Define concurrency control manager?**

# Life cycle from implementation to maintenance.

1. Implementation:- When the database is ready, creation of table and other things are called implementation stage.
2. Data loading:- Once the database is created, it is loaded into the memory.
3. Operations:- Then the database is accessed by the end users and application programs.
4. Maintenance:- It is one of ongoing phases in DDLC. It includes database recovery and backup, hardware maintenance etc.

Q: List the phases of DDLC(database development life cycle)
