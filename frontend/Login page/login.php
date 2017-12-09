<?php

	include 'config.php';

if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		// username and password sent from Form
		$username = $_POST['username'];
		$password = $_POST['password'];
		$login="SELECT id FROM user WHERE username='$username' AND password='$password'";
		$login = mysqli_query($connect,"SELECT id FROM user WHERE username='$username' AND password='$password'");
		$result   = mysqli_num_rows($login);

		
			if($result == 1)
			{
				session_start();
				$_SESSION["username"]=$username;
				header("location:admin/index.php");
				exit();
			}
			else
			{
				$error=printf("Your Login Name or Password is invalid. Please re login<br/><br/>");
			}
		mysqli_close($connect);
		
	}
?>

