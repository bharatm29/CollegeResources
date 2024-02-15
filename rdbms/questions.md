### Create any two tables having primary key in both of the tables, foreign key in one of the tables, use CREATE and SELECT queries. In the query there should be usage of foreign key, also show the following structures with the sequence.

1. table creation
2. table query
3. table contents
4. Result of the query in table format

```sql
CREATE TABLE Employee(
    eId CHAR(20)
    name VARCHAR
    age INT
    departId CHAR(20)
    PRIMARY KEY eId
    FOREIGN KEY departId
)

CREATE TABLE Department(
    departId CHAR(20)
    name VARCHAR
    place VARCHAR
    PRIMARY KEY departId
)
```

E1

| eId | name   | age | departId |
| --- | ------ | --- | -------- |
| E18 | Bharat | 19  | D69      |
| E32 | Arsh   | 19  | D81      |
| E99 | Naman  | 69  | D81      |

D1

| departId | name           | place          |
| -------- | -------------- | -------------- |
| D81      | Finanace       | Pune           |
| D90      | Sales          | Madhya Pradesh |
| D69      | Administration | Delhi          |

```sql
SELECT name, age FROM E1 as e WHERE e.age < 50
```

| name   | age |
| ------ | --- |
| Bharat | 19  |
| Arsh   | 19  |
