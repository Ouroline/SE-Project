<?php
include '../config.php';
 
// activating session 
session_start();
 

// welcoming 
echo "Selamat Datang ". $_SESSION['username'];
 
?>
<br/>
<br/>
<a href="logout.php">LOGOUT</a>