<?php

include("php/config.php");

session_start();
if(isset($_SESSION['login_user'])){
      header("location:dashboard.php");
   }


if($_SERVER["REQUEST_METHOD"] == "POST"){

	$user = $_POST['user'];
	$pass = $_POST['pass'];

	$sql = "select * from registration where username = '$user' and password = '$pass'; ";
	$query = mysqli_query($con,$sql);
	$row = mysqli_num_rows($query);

	if($row>0){
		$_SESSION['login_user'] = $user;
		header("location:dashboard.php");
	}
	else{
		echo "<Script>alert('✘ Invalid Username And Password!')</script>";
	}
}


?>


<html>
<head>
	<title>Log-in | E-Aptitude</title>
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="icon" href="images/favicon.png" type="image/png" />

<style type="text/css">
.login{
	width: 30%;
	text-align: left;
	background-color: #ccc;
	padding: 20px;
	border-radius: 30px;
	margin-top: 70;
}
body{
	background-image:url("images/bg.jpg");
	background-repeat: no-repeat;
	background-size: cover;
	width:100%;
	height:100%;
	position: fixed;
	opacity: 0.7;

}

.footer{
	background-color: #015077;
	text-align: center;
	color: white;
	bottom: 0;
}
</style>
<!--
<script type="text/javascript">
	function login(){
		if(document.querySelector('input[name=user]').value=='admin' && document.querySelector('input[name=pass]').value=='admin'){
			alert("Login Successfully")
			return true;
		}
		else{
			alert("Invalid Username And Password!!!");
			//window.location = 'login.html';
			document.loginform.user.value = "";
			document.loginform.pass.value = "";
			return false;
		}

	}
</script>
-->
</head>
<body>
<div align="center">
<div class="login">
	<form name="loginform" onsubmit="return login()" method="post">
		<br>
		<h1 align="center"><u>LOGIN</u></h1>
		<br>
		Username:
		<input type="text" name="user" placeholder="Enter Username" required><br><br>
		Password:
		<input type="Password" name="pass" placeholder="Enter Password" required><br><br>
		<input type="checkbox" name="chk">Remember me<br><br>
		<center>
			<button type="submit" class="btn-success">Log In</button>

			<br><br><br>
			<a style="text-decoration: none;font-size: 22" href="home.php">Create New Account</a>
			<p align="center">
				<a href="javascript:alert('Coming Soooooooon..........')">Forgot Password?</a>
				
			</p>
		</center>

		<br><br>
	</div>
	</form>
</div>
</body>
</html>