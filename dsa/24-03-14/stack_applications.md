## Applications of Stack

### Evaluation of arithmetic expressions

Arithmetic expression consists of:

- Operands
  - Variables and constants
- Operators
  - Arithmetic
  - Relational
  - logical

---

> **How a stack can be used to solve mathematical expressions?**

---

Three ways to represent arithmetic expressions:

- Infix: $A + B$
- Postfix (reverse polish notation): $A B +$
- Prefix (polish notation): $+ A B$

---

#### Infix to Postfix

- $(A + B) - C$ => $AB+C-$

- $(A+B)/(C-D)$ => $AB+CD-/$

- $A + B * C - D / E * F$ => $ABC*+DE/*F-$

- $A + [(B + C)-(D+E)*F] / G$ => $ABC+DE+F*-G/+$

- $(A+B) * C / D +  E ^ F / G$ => $AB+C*DEF^G/+/$

---
