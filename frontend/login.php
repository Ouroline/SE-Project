<?php

	include 'admin/config.php';

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
				// true login
				session_start();
				$_SESSION["username"]=$username;
				header("location:adminProducts.php");
				exit();
			}
			else 
			{
				// wrong username / password
				echo "<script>alert('Username / Password yang Anda Masukan Tidak Valid');history.go(-1)</script>";
			}
		mysqli_close($connect);
		
	}
?>

