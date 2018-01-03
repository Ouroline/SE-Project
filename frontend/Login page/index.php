<!DOCTYPE html>
<!--Fariz Prabu Allam-->
<head>
<title>Sign-In</title>
   <!-- connecting to style.css-->
 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <section class="container">
    <div class="login">
      <h1>Login</h1>
      <form action="login.php" method="post" onSubmit="return validation()">
	  <!--Form username and password-->
	<div>
				<label>Username:</label>
				<input type="text" name="username" id="username" />
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password" id="password" />
			</div>			
			<div>
				<label>Remember me:</label>
				<input type="checkbox" checked="checked"> 
			</div>
			<div>
				<input type="submit" value="Login" class="button" >
			</div>
		</form>
	</div>
  <script type="text/javascript">
	function validation() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username and password requiered!');
			return false;
		}
	}
 
</script>
</body>

<!----thanksgoogle-->
</html>
