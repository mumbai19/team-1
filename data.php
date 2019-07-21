<?php
header('Content-Type: application/json');
//console.log("hii");

 
                                   
                                    $conn=mysqli_connect("localhost","root","transmode;","project1");
	session_start();
	//$uid=$_SESSION['uid'];
	//$pid=1;
	//$sid=2;


$sqlQuery = "SELECT stars,parametername from stars,parameter,studentdetails where stars.pid=parameter.pid and stars.sid=studentdetails.sid";
//console.log("hii");
$result = mysqli_query($conn,$sqlQuery);
//console.log("hi");
$data = array();

while ($row=mysqli_fetch_assoc($result)) {
	$arr = array();
	//array_push($data, $row);
	array_push($arr, $row['parametername']);
	array_push($arr, $row['stars']);
//	console.log($arr);

array_push($data,$arr);

}
//print_r($data);
//console.dir($data);
mysqli_close($conn);

echo json_encode($data);
?>