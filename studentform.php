<?php
	//require "config.php";
	
	require('config.php');
	$conn=mysqli_connect($DB_HOST,$DB_USER,$DB_PASSWORD,$DB_DATABASE);
	session_start();
	$name=$_GET['name'];
	$phno=	$_GET['phno'];
	$address=$_GET['address'];
	$school=$_GET['school'];
	$std=$_GET['std'];


	
	
	
	
	$mysql_query = "UPDATE studentdetails SET name = $name, phno = $phno ,address=$address,school=$school,std=$std " ;
	
	$mysqli_query($conn, $mysql_query);
	
	
?>