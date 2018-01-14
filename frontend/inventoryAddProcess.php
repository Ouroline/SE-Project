<!DOCTYPE HTML>
<HTML>
	<HEAD>

	</HEAD>

	<BODY>
		<?php

		require 'connection.php';

		$conn = Connect();
		$name = $conn->real_escape_string($_POST['itemName']);
		$amount = $conn->real_escape_string($_POST['itemAmount']);
		$dateIn = $conn->real_escape_string($_POST['dateIn']);
		$query = "INSERT into stock(itemName, itemAmount, dateIn) VALUES('" .$name."','" .$amount."','" .$dateIn."' )";
		$success = $conn->query($query);

		if(!$success)
		{
			die("Couldn't enter data: ".$conn->error);
		}

		echo "Information added";

		$conn->close();


			/**session_start();
			$servername = "inventory";
			$username = "root";
			$password = "";

			//Create Connection
			$con = new mysqli($servername, $username, $password); 

			//Check connection
			if ($conn->connect_error) 
			{
				die("Connection Failed: " . $conn->connect_error);
			}
			else
			{
				echo "Connected Sucessfully";
			}

			//Insert data
			$sql = "INSERT INTO user (itemName, itemAmount) VALUES ( '{$mysqli->real_escape_string($_POST['itemName'])}', '{$mysqli->real_escape_string($_POST['itemAmount'])}' )";
			$INSERT = $mysqli->query($sql);

			//Print response
			if($INSERT)
			{
				echo
			}
			**/
		?>
    </BODY>
</HTML>