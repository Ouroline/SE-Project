<!DOCTYPE html>
<html lang="en">
<head>
  <title>SJA Motor</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- <script src="https://www.w3schools.com/lib/w3.js"></script> -->
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

    .logo{
    	float: left;
    	padding-left: 50px;
    }

    .jumbotron{
      background-image: url("https://d2v9y0dukr6mq2.cloudfront.net/video/thumbnail/itCjTBE/light-and-dark-tech-gears-mechanism-motion-background-seamless-loop-video-animation-hd-1920x1080_spyfhu4x__F0000.png");
    }

/*    img{
    	width: 200px;
    	height: 120px;
    }*/

    .column1{
    	margin: auto;
    }

    .Produk{
    	padding-right: 30px;
    }

    .item{
      text-align: center;
    }

    .post-text{
      margin-bottom : 20px;
    }

    /* Full-width input fields */
    input[type=text], input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    /* Set a style for all buttons */
    button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0px 8px 1300px;
        border: none;
        cursor: pointer;
        width: 100%;
    }

    button:hover {
        opacity: 0.8;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
    }

    /* Center the image and position the close button */
    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
        position: relative;
    }

    img.avatar {
        width: 40%;
        border-radius: 50%;
    }

    .container {
        padding: 16px;
        width: 100%
    }

    span.psw {
        float: right;
        padding-top: 16px;
    }

    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        padding-top: 60px;
    }

    /* Modal Content/Box */
    .modal-content {
        background-color: #fefefe;
        margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
        border: 1px solid #888;
        width: 30%; /* Could be more or less, depending on screen size */
    }

    /* The Close Button (x) */
    .close {
        position: absolute;
        right: 25px;
        top: 0;
        color: #000;
        font-size: 35px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: red;
        cursor: pointer;
    }

    /* Add Zoom Animation */
    .animate {
        -webkit-animation: animatezoom 0.6s;
        animation: animatezoom 0.6s
    }

    @-webkit-keyframes animatezoom {
        from {-webkit-transform: scale(0)} 
        to {-webkit-transform: scale(1)}
    }
        
    @keyframes animatezoom {
        from {transform: scale(0)} 
        to {transform: scale(1)}
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
        span.psw {
           display: block;
           float: none;
        }
        .cancelbtn {
           width: 100%;
        }
    }
  </style>
</head>
<body>

<div class="jumbotron">
	<div class="logo">
  		<img src="https://www.doughamptonsautorepair.com/img/6241/102.png" height="120px" width="200px">
  	</div>
  <div class="container text-center" style="padding-right: 100px">
    <h1>Workshop</h1>      
    <p>Bengkel</p>
  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
<!--       <a class="navbar-brand" href="#">Logo</a> -->
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="Mainpage.html">Home</a></li>
        <li><a href="Products.html">Products</a></li>
        <li><a href="Services.html">Services</a></li>
        <li><a href="About.html">About Us</a></li>
        <li><a href="Contact.html">Contact Us</a></li>
      <!--   <li><a href="login.html">Login</a></li> -->
        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

        <div id="id01" class="modal">
          
          <form class="modal-content animate" action="/action_page.php">
            <div class="imgcontainer">
              <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
              <img src="https://www.w3schools.com/howto/img_avatar2.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
              <label><b>Username</b></label><br>
              <input type="text" placeholder="Enter Username" name="uname" required><br>

              <label><b>Password</b></label><br>
              <input type="password" placeholder="Enter Password" name="psw" required><br>
                
              <button type="submit">Login</button><br>
              <input type="checkbox" checked="checked"> Remember me
            </div>

            <div class="container" style="background-color:#f1f1f1">
              <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
              <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
          </form>
        </div>

        <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        </script>
      </ul>
      <ul class="nav navbar-nav navbar-right">
<!--         <li><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li> -->
      </ul>
    </div>
  </div>
</nav>

<?php


	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "inventory";

	//Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	//Check connection
	if ($conn->connect_error) 
	{
		die("Connection failed: " .$conn->connect_error);
	}

	$sql = "SELECT itemID, itemName, itemAmount, dateIn FROM stock";
	$result = $conn->query($sql);

	if ($result->num_rows > 0)
	{
		//Output data of each row
		while($row = $result->fetch_assoc())
		{
			echo "Item ID: " . $row["itemID"] . " - Item Name: " . $row["itemName"] . " - Item Amount: " . $row["itemAmount"] . " - Date In: " . $row["dateIn"] . "<br>";
		}
	}
	else 
	{
		echo "0 results";
	
	}
	$conn->close();
?>

<footer class="container-fluid text-center">
  <p>Workshop Copyright</p>  
  <form class="form-inline">Search :
    <input oninput="w3.filterHTML('#id01', '.item', this.value)" size="50" placeholder="Search for names..">
    <button type="button" class="btn btn-danger">Go</button>
  </form>
</footer>

</body>
</html>
