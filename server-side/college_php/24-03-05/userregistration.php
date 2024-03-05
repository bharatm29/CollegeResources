<html>
<head></head>
<body>
	<h2>user registration</h2>
	<form action="" method="post">
		<label for="username">Username:</label>
		<input type="text" name="username" required>
		<br>
		<label for="email">Email.</label>
		<input type="email" name="email" required>
		<br>
		<label for="password">Password:</label>
		<input type="password" name="password" required>
		<br>
		<input type="submit" value="register">	
	</form>
</body>
</html>
<?php
	if ($_SERVER['REQUEST_METHOD']=="POST") {
		$username=$_POST['username'];
		$email=$_POST['email'];
		$password=$_POST['password'];

        $cellNo = $_POST['cellNo'];

		$errors=[];

	if(empty($username)){
		$errors[]="username is required";
	}
	if(empty($email)){
		$errors[]="email is required";
	}
	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$errors[]="invalid email format";
	}
	if(empty($password)){
		$errors[]="password is required";
	}

    if(strlen($username) > 20){
		$errors[]="username should not be greater than 20 characters";
    }
	if(!empty($errors)){
		foreach ($errors as $error) {
			echo $error . "<br>";
		}
	}
	else{
		echo "registration successful";
	}
	}	
?>
