<?php // Include confi.php
include_once('config.php');
 
if($_SERVER['REQUEST_METHOD'] == "POST"){
 // Get data
 $email =  $_POST['email'];
 $password = $_POST['password'];
 
 // Insert data into data base
$query="SELECT user_name,user_password FROM users WHERE user_name='$email' and user_password='$password' LIMIT 1";

 $result = mysqli_query($con,$query);
   $num= mysqli_num_rows($result);
   if($num==1)
		{	
		session_start();
		$_SESSION["mail"]=$id;

		header("Location:adminn.php");}
		else {
		
		echo '<script>alert("Invalid Username Or Password");</script>';
		header("refresh:0;url=login.php");
}}

 ?>