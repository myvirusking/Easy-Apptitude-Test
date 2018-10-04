<?php 

include("php/session.php");

$sql = "select * from result where user_id = $login_id";
$query = mysqli_query($con,$sql);

?>

<html>
<head>
	<title>Result | E-Aptitude</title>
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="icon" href="images/favicon.png" type="image/png" />
	<style type="text/css">

::-webkit-scrollbar {
    width: 0px;
}


	th,td{
		padding: 8px;
		text-align: center;
		font-size: 20;
		border:1px solid black;
	}
	th{
		background-color: green;
		color: white;
		
	}
	
	tr:nth-child(even){
		background-color: #ccc;
	}

	tr:nth-child(odd){
		background-color: #fff;
	}

	table tr:hover{
		background-color: grey;
	}
	</style>

</head>
<body bgcolor="lightcyan">
<nav>
	<a href="dashboard.php">Dashboard</a>
	<a href="test.php">Apptitude Test</a>
	<a href="result.php" class="active">Result</a>
	<a href="php/logout.php" style="float: right;margin: 0;padding: 5px;opacity: 1.0">LOGOUT</a>
	<font style="float: right;font-size: 25;padding-right:10px;font-style: italic; color: white">Hi ,<?php echo $login_session ?></font>
</nav>

<center style="margin-bottom: 50px;">
<table width="80%" style="margin-top: 30px ; border-collapse: collapse;" border="1">
<tr>
	<th>Test Topic</th>
	<th>Total Questions</th>
	<th>Corrected Question</th>
	<th>Total Marks</th>
	<th>Total Obtained Marks</th>
	<th>Test Submission Timing</th>
	<th>Result</th>
</tr>


<?php
while ($result = mysqli_fetch_assoc($query)) {
?>

<tr>
	<td><?php echo "$result[test_topic]"; ?></td>
	<td><?php echo "$result[total_questions]"; ?></td>
	<td><?php echo "$result[corrected_questions]"; ?></td>
	<td><?php echo "$result[total_marks]"; ?></td>
	<td><?php echo "$result[obtained_marks]"; ?></td>
	<td><?php echo "$result[test_timing]"; ?></td>
	<?php if ("$result[result]" == "PASS") {
			echo "<td><font color='green'>PASS</font></td>";
		}
		else {
			echo "<td><font color='orange'>FAIL</font></td>";
		}
	?>

	
</tr>

<?php 
}

?>

</table>
</center>


</body>
</html>