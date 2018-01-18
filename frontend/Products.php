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
      padding-left: 10%;
      padding-top: 25px;
      padding-bottom: 25px;
    }

    .jumbotron{
      background-image: url("image/background.png");
      padding: 0px 0px 0px 0px;
    }

    .loginButton {
      float: right;
    }

    .buttonSearch {
      width: 50%;
    }

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
        margin: 8px 0px 8px 0px;
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
  		<img src="image/sjamotorLogo.png" height="30%" width="30%">
  	</div>
  <div class="container text-center" style="padding-right: 100px">
    <!-- <h1>Workshop</h1>      
    <p>Bengkel</p> -->
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
	        <li><a href="Mainpage.html">Home</a></li>
			<li><a href="Products.html">Products</a></li>
			<li><a href="Services.html">Services</a></li>
			<li class="active"><a href="About.html">About Us</a></li>
			<li><a href="Contact.html">Contact Us</a></li>
        </div>
        

        <!-- Ending of Login Button -->
        <script>
        </script>
      </ul>

      <ul class="nav navbar-nav navbar-right">
<!--         <li><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li> -->
      </ul>
    </div>
  </div>
</nav>

<div id="content"><div id="main-full">
  <div id="main-2">
    <div class="rpa">
      <div class="Title" style="text-align:center;"><br><font size="6">Produk-Produk Mobil</font></div>
        <div class="post-text">
        <br>
        <center>
            <table id="id01" border="1">
              <tr>
                <th>Produk</th>
                <th>Gambar</th>
                <th>Status</th>
              </tr>
              <tr class="item">
                <td>Ban</td>
                <td><img src="image/tire.jpg" alt="Ban" width="200" height="120"></td>
                <td>Out of Stock</td>
              </tr>
              <tr class="item">
                <td>Oli</td>
                <td><img src="image/oil.jpg" alt="Oli" width="200" height="120"></td>
                <td>Out of Stock</td>
              </tr>
              <tr class="item">
                <td>Suspensi</td>
                <td><img src="image/suspension.jpg" alt="Suspensi" width="200" height="120"></td>
                <td>In Stock</td>
              </tr>
              <tr class="item">
                <td>Radiator</td>
                <td><img src="image/radiator.jpg" alt="Radiator" width="200" height="120"></td>
                <td>In Stock</td>
              </tr>
              <tr class="item">
                <td>Lampu Depan</td>
                <td><img src="image/headLamp.jpg" alt="Lampu Depan" width="200" height="120"></td>
                <td>Out of Stock</td>
              </tr>
              <tr class="item">
                <td>Lampu Belakang</td>
                <td><img src="image/tailLight.jpg" alt="Lampu Belakang" width="200" height="120"></td>
                <td>In Stock</td>
              </tr>
            </table>
          </center>  
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>SJAMotor &copy; 2018</p>  
  <form class="form-inline">Search :
    <input oninput="w3.filterHTML('#id01', '.item', this.value)" size="50" placeholder="Search for names..">
    <buttonSearch type="button" class="btn btn-danger">Go</buttonSearch>
  </form>
</footer>

</body>
</html>
