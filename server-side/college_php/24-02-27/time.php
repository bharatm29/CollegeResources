<html>
<head>
<title>Withdrawal</title>
</head>
<body>
<form method="post" action="">
1.Enter operation <select name='op' id='op'>
	<option value='Deposit'>Deposit</option>
	<option value='withdraw'>withdrawal</option>
	</select><br>
2.Enter amount<input type='number' name='amount'><br>
<Input type='submit' value='submit'><br>
</form>
</body>
</html>

<?php
$balance=1000;//Initial balance
$message="";
if($_POST)
{
	$amount=$_POST['amount'];
	$transactionType=$_POST['op'];

	if($transactionType=='Deposit')
	{
		$balance+=$amount;
		$message="Deposit successful. New balance: $balance";
		echo $message;
	}
	elseif ($transactionType=="withdraw")
	{
		if($amount<=$balance)
		{
			$balance-=$amount;
			$message="withdrawal successful. New balance: $balance";
			echo $message;
		}
		else
		{
			$message="Insufficient funds. Withdrawal failed.";
            echo $message."<br>";
		}
	}
}
?>

