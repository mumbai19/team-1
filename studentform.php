<?php
	//require "config.php";
	
	
	$conn=mysqli_connect("localhost","root","transmode;","project1");
	session_start();
	//$uid=$_SESSION['uid'];
	$uid=1;
	$name=$_GET['name'];
	$phno=	$_GET['phno'];
	$address=$_GET['address'];
	$school=$_GET['school'];
	$std=$_GET['std'];


	
	
	
	
	//$mysql_query = "UPDATE studentdetails SET name = $name, phno = $phno ,address=$address,school=$school,std=$std " ;
	$mysql_query="INSERT INTO studentdetails (name,phoneno,address,school,std)
VALUES ('$name',$phno,'$address','$school','$std');";

	
	
	mysqli_query($conn, $mysql_query);
	//$retrieve="select * from studentdetails";
	//$result=$mysqli_query($conn, $retrieve);
	header('location: studentform.html');

	
	
?>