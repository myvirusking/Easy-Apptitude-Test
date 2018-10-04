<?php
   include('config.php');

   session_start();
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }

   else{
	   $login_session = $_SESSION['login_user'];

	   $sql = "select * from registration where username = '$login_session'";
	   $query = mysqli_query($con,$sql);

	   $login_id = mysqli_fetch_assoc($query )['id'] ;


   }

?>