## Applications of Stack

---

### Evaluation of arithmetic expressions

Arithmetic expression consists of:

- Operands
  - Variables and constants
- Operators
  - Arithmetic
  - Relational
  - logical

---

**How a stack can be used to solve mathematical expressions?**

---

Three ways to represent arithmetic expressions:

- Infix: A + B
- Postfix (reverse polish notation): A B +
- Prefix (polish notation): + A B

---

#### Infix to Postfix

- (A + B) _ C => AB+C_

- (A+B)/(C-D) => AB+CD-/

- a + b _ c - d / e * f => abc*+-ef*/

- a + [(b + c)-(d+e)*f] / g => abc+de+-f*g/+

- (a+b) * c / d +  e ^ f / g

---
