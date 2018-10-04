<?php
include('php/config.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$user = $_REQUEST['user'];
	$email = $_REQUEST['email'];
	$pass = $_REQUEST['pass'];

	$sql = "select * from registration where username='$user';";
	$query = mysqli_query($con,$sql);
	$row = mysqli_num_rows($query);

	if($row > 0){
		echo "<Script>alert('✘ Username Already Exists!');window.history.back();</Script>";
		
	}

	else{
		$sql = "insert into registration values(NULL , '$user','$email','$pass');";
		$query = mysqli_query($con,$sql);

		echo "<Script>alert('✔ Your Account Register Successfully'); window.location = 'login.php'</Script>";
	}

	//mysqli_close($con);
}

?>


<html>
<head>
	<title>Home | E-Aptitude</title>

<link rel="stylesheet" type="text/css" href="css/home.css">
<link rel="icon" href="images/favicon.png" type="image/png" />
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
 <script src="js/jquery.min.js"></script> 



<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
    display: none; 
    position: fixed; 
    padding-top: 100px; 
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%; 
    overflow: auto;

}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 50%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.policy{
	white-space: pre-line;
	overflow-y: scroll;
	font-size: 15;

}


.footer{
	background-color: #015077;
	text-align: center;
	color: white;
	bottom: 0;
}

</style>



<script type="text/javascript">
	function registration(){
		if(document.regform.pass.value==document.regform.con_pass.value){
			if(isNaN(document.regform.user.value)==false){
			alert("Username Should Not Be Number!!!");
			document.regform.user.value = "";
			return false;
		}
		else{
			//alert("Registration Successfull");
			return true;
		}
		}
		else{
		alert("Password Does Not Matched!!!");
		document.regform.pass.value="";
		document.regform.con_pass.value="";
		return false;
		}
	}


</script>

</head>

<body>

<nav>
  <a class="active" href="home.php">Home</a>
  <a href="about_us.php">About Us</a>
  <a href="login.php">Login</a>
</nav>

<div class="bg-image">
	<div id="blur">
	<img src="images/logo3.png" width=35% height=35%>
	<div class="container">
	  <form name='regform' method="post" onsubmit="return registration()">
		<br><br>
		Username:
		<input type="text" name="user" placeholder="Enter Username" required=""><br><br>
		Email:
		<input type="email" name="email" placeholder="Enter Email" required=""><br><br>
		Password:
		<input type="Password" name="pass" placeholder="Enter Password" required="" minlength="8"><br><br>
		Confirm Password:
		<input type="Password" name="con_pass" placeholder="Enter Confirm Password" required=""><br><br>

		<input type="checkbox" required>I Aggre All <a href="#" id="myLink" style="text-decoration:none;">Terms And Policies</a>
		<br><br>
		<center>
			<button type="submit" class="btn-success">Create Account</button>
		</center>

		<br><br>
	  </form>



	</div>
	<h1>
	<pre class="mypre">
	Easy apptitude test
	provide success
	to achieve jobs
	Try our digital tests for free...
			    <form action="login.php">
	<button class="get_started">GET STARTED</button>
	</form>		
	</pre>
    </h1>

 </div><!-- closing of blur div -->

 		<!-- The Modal -->
		<div id="myModal" class="modal">

		  <!-- Modal content -->
		  <div class="modal-content">
		    <span class="close">&times;</span>
		    <pre class="policy"><font color="blue" size="5"><b><u>TERMS AND POLICIES</u></b></font>

<b>1. ACCEPTANCE OF TERMS</b>
www.eAptitude.com provides its service to you, subject to the following Terms of Service. These policies may be updated by us from time to time without notice of you. You can review our updated terms and conditions always in this page. Usage of this site is subject to these Terms, Conditions and Policies, therefore please read the following information carefully.

<b>2. USAGE OF THIS SITE</b>
www.eAptitude.com doesn't guarantee the accuracy of the content or information that provided in this site and won't take responsible for any INCORRECT questions, answers, content and any form of errors. www.eAptitude.com will not be responsible in anyway for any damages/consequences that might occur due to inclusion of some incorrect content or information in this site. You can use this information solely at your own risk. Users submitting questions or answers or code to this site, asserts that he or she owns that data or otherwise has the right to redistribute it freely. www.eAptitude.com assumes no liability for disputes regarding ownership, copyright, or trademarks of the data submitted to this site.

<b>3. COPYRIGHT POLICY</b>
All pages, data and graphics presented on this website are the property of www.eAptitude.com. The pages may not be redistributed or reproduced in any way, shape, or form without the written permission of www.eAptitude.com. www.eAptitude.com respects the copyrights, trademarks and intellectual property of others and also we expect this from other users. In this site, if you found any information that is owned by you or any content that violates your intellectual property rights, please contact to us with all necessary documents/information that authenticate your authority on your property.

<b>4. PRIVACY POLICY</b>
The Personal information, email that submitted while registering to the site, will NOT be distributed, shared with any other third-parties. We only use this data for our information, for research, to improve our services and for contacting you purposes. www.eAptitude.com is an Open Database Site, so Registering into site is NOT mandatory and also we won't verify your email address. Registration into the site is purely of user's interest. 






</pre>
		  </div>

		</div>


</div><!-- closing of bg-image-->



<div class="footer">
<p style="margin: 0;padding: 10px">Copyright © 2018 Vinay Kumar. All Rights Reserved.</p>
<div style="margin: 0;padding-bottom: 10px">|
<a href="home.php" style="text-decoration:none;color: lightgreen">Home</a> |
<a href="about_us.php" style="text-decoration:none;color: lightgreen">About Us</a> |
<a href="login.php" style="text-decoration:none;color: lightgreen">Login</a> |
<a href="#" id="myLink1" style="text-decoration:none;color: lightgreen">Terms And Policies</a> | 
<p  style="margin: 0;padding-top: 10px;padding-bottom: 5px;">Contact : myvirusking@gmail.com</p>
</div>

</div>







<script type="text/javascript">
	var modal = document.getElementById('myModal');

	var myLink = document.getElementById("myLink");
	
	var span = document.getElementsByClassName("close")[0];

	var body = document.getElementsByTagName("body")[0];

	myLink.onclick = function() {
	    modal.style.display = "block";
	    $("#blur").css("filter", "blur(5px)");
	    document.getElementsByClassName("bg-image")[0].style.position = 'fixed';
	}

	myLink1.onclick = function() {
	    modal.style.display = "block";
	    $("#blur").css("filter", "blur(5px)");
	    document.getElementsByClassName("bg-image")[0].style.position = 'fixed';

	}

	span.onclick = function() {
    	modal.style.display = "none";
    	$("#blur").css("filter", "blur(0px)");
    	document.getElementsByClassName("bg-image")[0].style.position = 'initial';
	}


window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
        $("#blur").css("filter", "blur(0px)");
        document.getElementsByClassName("bg-image")[0].style.position = 'initial';
    }
}


</script>

</body>
</html>