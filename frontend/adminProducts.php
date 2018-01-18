<!DOCTYPE html>
<html lang="en">
<head>
  <title>SJA Motor</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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

    img{
    	width: 250px;
    	height: 150px;
    }

    .column1{
    	margin: auto;
    }

    .Produk{
    	padding-right: 30px;
    }

    .addButton{
      text-align: center;
    }

    .Title{
      margin: 10px
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
        <li><a href="logout.php">Logout</a></li>
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

<div>
  <div class="addButton">
    <button type="button" class="btn btn-danger"><a href="#"></a>Edit</button>
  </div>
</div>
<br>

<center>
<table>
	<tr>
		<td>
			<div class="Produk 1"><a href="#">
			<img src="http://www.modifikasi.co.id/wp-content/uploads/2015/07/Shell-advance-4t.jpg" width="" height="">
			<h2>Oli</h2>
			</a></div>
		</td>
		<td>
			<div class="Produk 2"><a href="#">
			<img src="https://www.otomaniac.com/wp-content/uploads/2016/05/Harga-Ban-Mobil-Terlaris-Semua-Merk.jpg" width="" height="">
			<h2>Ban</h2>
			</a></div>
		</td>
		<td>
			<div class="Produk 3"><a href="#">
			<img src="http://autobild.co.id/ckeditor/kcfinder/upload/images/TIPS/TEKNIK/Pilih_Transmisi_matik-07.jpg" width="" height="">
			<h2>Oli Transmisi</h2>
			</a></div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="Produk 4"><a href="#">
			<img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/medium/3m_paket-combo-1-3m--buy-6-get-1-free-easi-car-seat-back-storage-tray-_full01.jpg" width="" height="">
			<h2>Pembersih Mobil</h2>
			</a></div>
		</td>
		<td>
			<div class="Produk 5"><a href="#">
			<img src="https://moedah.com/wp-content/uploads/2013/06/1362652_86fb507e-4157-11e2-a05f-c01be4b59b20.jpg" width="" height="">
			<h2>Alat Alat Pembersih</h2>
			</a></div>
		</td>
		<td>
			<div class="Produk 6"><a href="#">
			<img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//91/MTA-1357560/mobil_bc-coilover-v1-series-untuk-vw-golf-mk6_full03.jpg" width="" height="">
			<h2>Suspensi</h2>
			</a></div>
		</td>
		<td>
			<div class="Produk 7"><a href="#">
			<img src="http://distributorbanradial.com/wp-content/uploads/2013/10/jenis-busi.jpg" width="" height="">
			<h2>Busi Mobil</h2>
			</a></div>
		</td>
	</tr>
</table>
</div>
</div>
</div>
</div>
</div>

<footer class="container-fluid text-center">
  <p>Workshop Copyright</p>  
  <form class="form-inline">Search :
    <input type="email" class="form-control" size="50" placeholder="Search">
    <button type="button" class="btn btn-danger">Go</button>
  </form>
</footer>

</body>
</html>
