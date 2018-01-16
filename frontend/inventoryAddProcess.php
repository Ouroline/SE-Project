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
		
		?>
    </BODY>
</HTML>