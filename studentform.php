<?php
	//require "config.php";
	
	require('config.php');
	
	session_start();
	
	$_SESSION['invalidCredentialsMessage'] = "Username ot password incorrect!";
	
	$username = $_POST["username"];
	$password = $_POST["password"];
	
	//$username = "172010001";
	//$password = "Kailas123";
	
	$mysql_query = "SELECT username, password, usertype FROM users WHERE username='$username' AND password='$password';";
	
	$result = mysqli_query($con, $mysql_query);
	
	if(mysqli_num_rows($result)>0){
		$row = mysqli_fetch_assoc($result);
		$fetchedUsername = $row["username"];
		//$fetchedPassword = $row["password"];
		$fetchedUserType = $row["usertype"];
		$_SESSION['username'] = $fetchedUsername;
		if($fetchedUserType == 'S'){
			
			//header('location: studentMainScreen_Attendance.php');
			header('location: gallery.html');
			
		}else{
			header('location: gallery.html');
			$_SESSION['username'] = $fetchedUsername;
		}
		//echo "Login Successful";
		unset($_SESSION['invalidCredentialsMessage']);
	}
	else{
		//echo "Login unsuccessful :(";
		header('location: index.php?invalidCredentials=1');
	}
?>