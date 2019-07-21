<?php
session_start();

		
		   require "config.php";
			$username = $_SESSION['username'];
			$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
			if($con){
				echo "connected";
				$datee = $_POST['datee'];
				$insert = "INSERT INTO lectureconducted VALUES ('$username','$datee');";
				header('location: Attendance.php');
				$insertQuery=mysqli_query($con, $insert);
			}else{
				echo "Not connected";
			}
			
	
		
		?>