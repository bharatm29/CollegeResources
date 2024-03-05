<?php

$balance= rand(500, 1000);
echo "Balance is $balance<br>";

if($_POST){
    $transaction_type = $_POST['transaction_type'];
    $amount = $_POST['amount'];

    switch ($transaction_type) {
        case 'withdrawal':
            if($balance < $amount){
                echo "Not enough balance: $balance<br>";
            } else {
                $balance -= $amount;
                echo "Withdrawed $amount, new balance is: $balance<br>";
            }
            break;
        case 'deposit':
            $balance += $amount;
            echo "Deposited $amount Rs, new balance is: $balance<br>";
            break;
        default:
            echo "UNREACHABLE";
            break;
    }
}
