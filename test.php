<?php 

include("php/session.php");

if($_GET['topic']){
	$topic = $_GET['topic'];
	$sql = "select * from test where topic = '$topic' ";
	$query = mysqli_query($con,$sql);
	$result = mysqli_fetch_assoc($query);

	$total_question = 5;
	$total_marks = $total_question * $result['each_carry'];

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$q1 = isset($_POST['q1']) ? $_POST['q1'] : null ;
		$q2 = isset($_POST['q2']) ? $_POST['q2'] : null ;
		$q3 = isset($_POST['q3']) ? $_POST['q3'] : null ;
		$q4 = isset($_POST['q4']) ? $_POST['q4'] : null ;
		$q5 = isset($_POST['q5']) ? $_POST['q5'] : null ;
		$corrected_questions = 0;
		$test_topic = $result['topic'];

		if($q1 == $result['q1_answer']){
			//echo "<script>alert('Right-1');</script>";
			$corrected_questions ++ ;
		}
		if ($q2 == $result['q2_answer']) {
			//echo "<script>alert('Right-2');</script>";
			$corrected_questions ++ ;
		}
		if ($q3 == $result['q3_answer']) {
			//echo "<script>alert('Right-3');</script>";
			$corrected_questions ++ ;
		}
		if ($q4 == $result['q4_answer']) {
			//echo "<script>alert('Right-4');</script>";
			$corrected_questions ++ ;
		}
		if ($q5 == $result['q5_answer']) {
			//echo "<script>alert('Right-5');</script>";
			$corrected_questions ++ ;
		}

		$obtained_marks = $corrected_questions * $result['each_carry'];
		$result = ($obtained_marks >= floor($total_marks/2)) ? 'PASS' : 'FAIL';

		$sql = "insert into result values(NULL,'$test_topic','$total_question','$corrected_questions','$total_marks','$obtained_marks','$result',NULL,'$login_id')";
	
		$query = mysqli_query($con,$sql);
		header("location:result.php");
	}

?>



<html>
 <head>
 	<title>Test | E-Aptitude</title>
 	<link rel="stylesheet" type="text/css" href="css/home.css">
 	<link rel="icon" href="images/favicon.png" type="image/png" />
 	<style type="text/css">

 	div{
 		padding: 25px;
 		padding-left: 50px;
 		margin: 20px;
 		width: 70%;
 		border-radius: 20px;
		border: hidden;
		background-color: lightgrey;
 	}
 	input[type="radio"]{
 		width: 25px;
 		height: 25px;
 
 	}
 	label{
		font-size: 20;
 		text-transform: uppercase;
 	}
	button{
		width: 300px;
		font-size: 30;
		border-radius: 25px;
		border:solid lightgreen;
		background-color: lightgreen;
		padding: 5px;

	}

	button:hover{
		background-color: white;
		border-color: lightgreen;
		color: green;
	}

	.reset{
		width: 200;
		font-size: 30;
		border-radius: 25px;
		border:solid lightcyan;
		background-color: lightcyan;
		padding: 5px;
		margin-left: 20px;

	}


	.reset:hover{
		background-color: white;
		border-color: blue;
		color: black;
	}
 
 	</style>

 	<script type="text/javascript">
 		function submitTest(){
 			y = confirm("Do You Want To Submit?")
 			if (y==true){return true;}
 			else {return false;}
 		}
 	</script>

 </head>
 <body bgcolor="lightcyan">
<nav>
	<a href="dashboard.php">Dashboard</a>
	<a href="test.php" class="active">Apptitude Test</a>
	<a href="result.php">Result</a>
	<a href="php/logout.php" style="float: right;margin: 0;padding: 5px;opacity: 1.0">LOGOUT</a>
	<font style="float: right;font-size: 25;padding-right:10px;font-style: italic; color: white">Hi ,<?php echo $login_session ?></font>
</nav>
 
 <center>
 <div>
 	<form onsubmit="return submitTest()" method="post" style="text-align: left;">
 		<center>
 		<p style="text-decoration: underline;margin-bottom: 0px;font-size: 40;margin-top: 5px;"><?php echo $_GET['topic'];?></p>

 		<p style="margin-top: 0px;font-size: 27;margin-bottom: 0px;">Total Question : <?php echo $total_question; ?></p>
 		<p style="font-size: 27;margin-top: 0px;">Total marks : <?php echo $total_marks; ?> (<?php echo $result['each_carry']; ?> Marks Each Question)</p>
 		</center>
		<label><font color="blue">Q.1</font> <?php echo $result['q1']; ?></label><br>
		<input type="radio" name="q1" value="<?php echo $result['q1_option1']; ?>">A. <?php echo $result['q1_option1']; ?><br>	
		<input type="radio" name="q1" value="<?php echo $result['q1_option2']; ?>">B. <?php echo $result['q1_option2']; ?><br>	
		<input type="radio" name="q1" value="<?php echo $result['q1_option3']; ?>">C. <?php echo $result['q1_option3']; ?><br>	
		<input type="radio" name="q1" value="<?php echo $result['q1_option4']; ?>">D. <?php echo $result['q1_option4']; ?><br>	
		<br><hr><br>
		<label>		
			<font color="blue">Q.2</font> <?php echo $result['q2']; ?>
		</label><br>
		<input type="radio" name="q2" value="<?php echo $result['q2_option1']; ?>">A. <?php echo $result['q2_option1']; ?><br>	
		<input type="radio" name="q2" value="<?php echo $result['q2_option2']; ?>">B. <?php echo $result['q2_option2']; ?><br>	
		<input type="radio" name="q2" value="<?php echo $result['q2_option3']; ?>">C. <?php echo $result['q2_option3']; ?><br>	
		<input type="radio" name="q2" value="<?php echo $result['q2_option4']; ?>">D. <?php echo $result['q2_option4']; ?><br>	
		<br><hr><br>


			<label><font color="blue">Q.3</font> <?php echo $result['q3']; ?></label><br>
		<input type="radio" name="q3" value="<?php echo $result['q3_option1']; ?>">A. <?php echo $result['q3_option1']; ?><br>
		<input type="radio" name="q3" value="<?php echo $result['q3_option2']; ?>">B. <?php echo $result['q3_option2']; ?><br>
		<input type="radio" name="q3" value="<?php echo $result['q3_option3']; ?>">C. <?php echo $result['q3_option3']; ?><br>
		<input type="radio" name="q3" value="<?php echo $result['q3_option4']; ?>">D. <?php echo $result['q3_option4']; ?><br>
		<br><hr><br>

		<label>		
			<font color="blue">Q.4</font> 	<?php echo $result['q4']; ?>
		</label><br>
		<input type="radio" name="q4" value="<?php echo $result['q4_option1']; ?>">A. <?php echo $result['q4_option1']; ?><br>	
		<input type="radio" name="q4" value="<?php echo $result['q4_option2']; ?>">B. <?php echo $result['q4_option2']; ?><br>	
		<input type="radio" name="q4" value="<?php echo $result['q4_option3']; ?>">C. <?php echo $result['q4_option3']; ?><br>	
		<input type="radio" name="q4" value="<?php echo $result['q4_option4']; ?>">D. <?php echo $result['q4_option4']; ?><br>	
		<br><hr><br>

			<label><font color="blue">Q.5</font> <?php echo $result['q5']; ?>
		</label><br>
		<input type="radio" name="q5" value="<?php echo $result['q5_option1']; ?>">A. <?php echo $result['q5_option1']; ?><br>	
		<input type="radio" name="q5" value="<?php echo $result['q5_option2']; ?>">B. <?php echo $result['q5_option2']; ?><br>	
		<input type="radio" name="q5" value="<?php echo $result['q5_option3']; ?>">C. <?php echo $result['q5_option3']; ?><br>	
		<input type="radio" name="q5" value="<?php echo $result['q5_option4']; ?>">D. <?php echo $result['q5_option4']; ?><br>	
		<br><hr><br>

		

		<center><button type="submit">Submit</button><input class="reset" type="reset" value="Reset"></center>
 	</form>
 </div>
 </center>
</body>
</html>


<?php

}

else{
	header("location:dashboard.php");
}

?>