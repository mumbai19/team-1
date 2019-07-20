<?php
require('config.php');
	$conn=mysqli_connect($DB_HOST,$DB_USER,$DB_PASSWORD,$DB_DATABASE);
	session_start();
	$uid=$_SESSION['uid']
	$name=$_GET['name'];
	$phno=	$_GET['phno'];
	$address=$_GET['address'];
	$school=$_GET['school'];
	$std=$_GET['std'];


	
	
	
	
	//$mysql_query = "UPDATE studentdetails SET name = $name, phno = $phno ,address=$address,school=$school,std=$std " ;
	$mysql_query="INSERT INTO studentdetails (name,phno,address,school,std)
VALUES ($name,$phno,$address,$school,$std);"

	
	
	$mysqli_query($conn, $mysql_query);
	//$retrieve="select * from studentdetails";
	//$result=$mysqli_query($conn, $retrieve);
	header('location: student.html');