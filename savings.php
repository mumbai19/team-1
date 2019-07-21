<!DOCTYPE html>
<html>

<head>
<?php
session_start();
$username = $_SESSION['username'];
?>
<meta charset="ISO-8859-1">
<title>Home</title>
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<link href="/IndexPage/img/favicon.png" rel="icon">

<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

<title>Agency - Start Bootstrap Theme</title>

<!-- Bootstrap core CSS -->
<link href="IndexPage/vendor/bootstrap/css/bootstrap.min.css"
	rel="stylesheet">


<!-- Custom fonts for this template -->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"> 
<!-- <link href="IndexPage/vendor/font-awesome/css/font-awesome.min.css"
	rel="stylesheet" type="text/css"> -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700"
	rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Kaushan+Script'
	rel='stylesheet' type='text/css'>
<link
	href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic'
	rel='stylesheet' type='text/css'>
<link
	href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700'
	rel='stylesheet' type='text/css'>

<!-- Custom styles for this template -->
<link href="IndexPage/css/style.css" rel="stylesheet">
<link href="IndexPage/css/agency.css" rel="stylesheet">
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 80%;
  
}

th, td {
  text-align: center;
  padding: 8px;
}



</style>

</head>


<body id="page-top" style="background-color: #140F20;">
	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
		<div class="container">

			<a class="navbar-brand js-scroll-trigger" href="#page-top"> <img
				src="IndexPage/img/favicon.png" class="navbar-logo" alt="" title="" />
				Savings
			</a>

			<button class="navbar-toggler navbar-toggler-right" type="button"
				data-toggle="collapse" data-target="#navbarResponsive"
				aria-controls="navbarResponsive" aria-expanded="false"
				aria-label="Toggle navigation">
				Menu <i class="fa fa-bars"></i>
			</button>
			
			</div> 
		</div>
	</nav>

	<section>
	
	<!--<div class="mb-50 <l-200></l-200>" style="text-align: center; margin: 10px; ">
        <form action="AttendanceMark.php" method="post">
		<input type="date" name="datee"/> 
		<input type="submit" name="submit"> -->
		</form>
    
		
	</div> 

        <table  style="margin-left: auto; margin-right: auto;color: white;">
            
                <tr>
                    
                    <th>Student id</th>
                    <th>Student name</th>
					<th>Amount</th>
                    <!--<th>Date</th> -->
<!--                    <th>E-mail address</th>-->
                    
                </tr>
            


<?php
$id = 1;
//                <?php
require_once("config.php");
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
$query = "SELECT studentdetails.sid, studentdetails.name FROM studentcourse, course_user_master, studentdetails WHERE 
studentcourse.sid=studentdetails.sid and studentcourse.courseid=course_user_master.courseid and course_user_master.uid='$username'";
$res = mysqli_query($connection,$query);
$newArray = array();
$count = 0;

while($row=mysqli_fetch_assoc($res)){
	?>
	<tr>
	<td><?php echo $row["sid"];?></td>
	
	<td><?php echo $row["name"];?></td>
	
	<td>
            <input type='text' name=<?php echo'$count';?> ><br/>

        </td>
	</tr>
    
    
        
<?php
}
$_SESSION['number'] = $count;
                                    
?>

        </table>
      

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
require_once("connect.php");
//session_start();
$k = 1;
$count = 0;
while($count < $_SESSION['number']) {
        $count = $count +1;
        $no = $_POST[$count];
        $xx = date("Y-m-d");
$query = "INSERT INTO savings (amt,datee,sid,uid) VALUES ($no,$xx,$count,$k)";
        $res = mysqli_query($connection,$query);
            if($res=="")
            {
            echo("email was not found");
            }
    }
}	  
   ?>     <!--<button type="button" class="btn btn-success">MARK</button> -->
    </section>
<sc	<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


	<!-- Bootstrap core JavaScript -->
	<script src="IndexPage/vendor/jquery/jquery.min.js"></script>
	<script src="IndexPage/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Plugin JavaScript -->
	<script src="IndexPage/vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Contact form JavaScript -->
	<script src="IndexPage/js/jqBootstrapValidation.js"></script>
	<script src="IndexPage/js/contact_me.js"></script>

	<!-- Custom scripts for this template -->
	<script src="IndexPage/js/agency.js"></script>

</body>

</html>