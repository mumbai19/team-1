<?php

    require_once 'Config.php';
    // Connecting to mysql
    $con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);
	
    // Selecting database
    mysqli_select_db($con,DB_DATABASE);

	$username = $_POST["username"];
	//$password = $_POST["password"];
	//Get JSON posted by Android Application
	//$json = $_POST["credentials"];
	
	
	//Remove Slashes
	/*if (get_magic_quotes_gpc()){
		$json = stripslashes($json);
	} 
	//Decode JSON into an Array
	$data = json_decode($json);
	//Util arrays to create response JSON 
	*/
	$actual_data=array();
	$temp_data=array();
	
	//Loop through an Array and insert data read from JSON into MySQL DB
	/*for($i=0; $i<count($data) ; $i++)
	{
		//Store User into MySQL DB
		$username=$data[$i]->username;
		$password=$data[$i]->password;
	*/
		$result = mysqli_query($con,"SELECT studentdetails.sid, studentdetails.name FROM student_course, course_user_master, studentdetails WHERE 
student_course.sid=studentdetails.sid and student_course.courseid=course_user_master.courseid and course_user_master.uid='$username';");
		//Based on insertion, create JSON response
		if(mysqli_num_rows($result) > 0){
			while($row=mysqli_fetch_assoc($result)) {
			$temp_data["sid"] = $row["sid"];
			$temp_data["name"] = $row["name"];
			//$temp_data["pass"] = $password;
			}
			array_push($actual_data,$temp_data);
		}else{
			$temp_data["sid"] = 'INVALID';
			$temp_data["name"] = $username;
			//$temp_data["pass"] = $password;
			array_push($actual_data,$temp_data);
		}
	//}
	//Post JSON response back to Android Application
	echo json_encode($actual_data);
 //End of class
?>