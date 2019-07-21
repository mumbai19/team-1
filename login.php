<?php
	require "config.php";
	
	$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
	
	session_start();
	
	$_SESSION['invalidCredentialsMessage'] = "Username ot password incorrect!";
	
	$username = mysqli_real_escape_string($con, $_POST["username"]);
	$password = mysqli_real_escape_string($con,$_POST["password"]);
	
	//$username = "172010001";
	//$password = "Kailas123";
	
	$mysql_query = "SELECT uid, password, role FROM app_users WHERE uid='$username' AND password='$password';";
	
	$result = mysqli_query($con, $mysql_query);
	
	if(mysqli_num_rows($result)>0){
		$row = mysqli_fetch_assoc($result);
		$fetchedUsername = $row["uid"];
		//$fetchedPassword = $row["password"];
		$role = $row["role"];
		$_SESSION['username'] = $fetchedUsername;
		if($fetchedUserType == 'mentor'){
			$_SESSION['username'] = $fetchedUsername;
			header('location: mentor_mainscreen.php');
			
		}else{
			header('location: mentor_mainscreen');
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