
<?php 

include("php/session.php");

?>


<html>
<head>
	<title>Dashboard | E-Aptitude</title>
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="icon" href="images/favicon.png" type="image/png" />

<style type="text/css">

.box{
	padding: 25px;
	margin-right: 25px;
	margin-left: 25px;
	margin-top: 25px;
	overflow: hidden;
	width: 80%;
}


.button {
	font-size: 30;
	text-decoration: none;
	margin: 30px 25px;
	padding: 10px 10px;
	border-radius: 10px;
	background-color: lightgreen;
	font-variant: small-caps;
	display: block;
	width: 500px;
}
.button:hover{
	background-color: cyan;

}

</style>

</head>
<body bgcolor="lightcyan">
<nav>
	<a href="dashboard.php" class="active">Dashboard</a>
	<a href="test.php">Apptitude Test</a>
	<a href="result.php">Result</a>
	<a href="php/logout.php" style="float: right;margin: 0;padding: 5px;opacity: 1.0">LOGOUT</a>
	<font style="float: right;font-size: 25;padding-right:20px;font-style: italic; color: white">Hi ,<?php echo $login_session ?></font>
</nav>

<div align="center">
<div align="center" class="box">
	<h1 style="text-decoration: underline;">LIST OF TOPICS</h1>
	<a class="button" href="test.php?topic=Web Technology">Web Technology</a>
	<a class="button" href="test.php?topic=Probability">Probability</a>
	<a class="button" href="test.php?topic=Time And Distance">Time And Distance</a>
	<a class="button" href="test.php?topic=Technical">Technical</a>
	<a class="button" href="javascript:alert('Coming Soooooooon..........')">Clocks</a>
	<a class="button" href="javascript:alert('Coming Soooooooon..........')">Logarithms</a>

</div>
</div>

</body>
</html>