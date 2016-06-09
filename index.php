<?php 
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> App Boiler Plate </title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/custom.css">
</head>
<body>

	
	<!-- ADD AWESOME THINGS HERE -->
	 <?php
	 	//echo "Hello World!";
	 if(isset($_SESSION['sessionID'])){
	 	echo "<a id='logoutLink'>log out</a> | Welcome you are logged in";
	 	include("partials/profile.php");
	 }else{
	 	include("partials/registration.php");
	 	include("partials/login.php");
	 }
		
	 ?>



	<script src="js/jquery.2.2.4.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>