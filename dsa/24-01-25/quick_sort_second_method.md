# Quick Sort

The second considers two pointers P and Q. P tranverse from start to the end and Q traverse from end to start.
P is going to stop when it comes accross a values which is greater than the pivot value
Q is going to stop when value is less than pivot value

P will stop at the end. We place a magical infinity at the end.

Whenever P and Q pointer are passing each other, swap Q value with pvt value

---

Basic Algorithm

1. Mark two pointer P and Q.
2. Stop P when value is greater than pivot and Q, when value is less than pivot.
3. If P and Q cross each other, then swap values at pivot and Q.
4. If P and Q are not crossing each other then swap values at P and Q.

---

arr = [35 50 15 25 80 20 90 45]

35 50 15 25 80 20 90 45 (P is initially at the start and stops at 50 which is 35 < 50)
^  ^                 ^
p  P                 Q

35 50 15 25 80 20 90 45(Q will decrement until it finds value smaller than pivot)
^  ^                 ^
p  P                 Q

35 50 15 25 80 20 90 45
^  ^           ^
p  P           Q

Now that P and Q are stuck on the desired value, swap them

35 20 15 25 80 50 90 45
^  ^           ^
p  P           Q

Again P and Q will individually go to the value they wanna be at. P at greater than pivot and Q at lesser than pivot

35 20 15 55 80 50 90 45
^        ^   ^
p        Q   P

since P > Q, swapping Q with pivot p

25 20 15 35 80 50 90 45
^        ^   ^
Q        p   P

Now the list is divided into two separate list at the pivot and same process is continued

---

