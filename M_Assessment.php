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
				Assessments
			</a>

			<button class="navbar-toggler navbar-toggler-right" type="button"
				data-toggle="collapse" data-target="#navbarResponsive"
				aria-controls="navbarResponsive" aria-expanded="false"
				aria-label="Toggle navigation">
				Menu <i class="fa fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav text-uppercase ml-auto">
					<!--<li class="nav-item"><a class="nav-link js-scroll-trigger"
						href="#services">How It Works</a></li>
					<li class="nav-item"><a class="nav-link js-scroll-trigger"
						href="#portfolio">Find Ride</a></li>
					<li class="nav-item"><a class="nav-link js-scroll-trigger"
						href="#about">Offer Ride</a></li>
					<li class="nav-item"><a class="nav-link js-scroll-trigger"
						href="#team">Sign Up</a></li> -->
					<li class="nav-item"><a class="nav-link js-scroll-trigger"
						href="#contact">Logout</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Header -->

	<!-- Portfolio Grid -->
	<section id="portfolio" >
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading text-uppercase"></h2>
				</div>
			</div>
			<div>
				
			</div>
			
				<table>
				
				</table>
			</div>
		</div>
	</section>
<div style="margin-top: 20px; color: white; ">
	<div style="margin-bottom: 20px; text-align: center; ">
	<form method="post" action="M_AddAssignmentMarks.php">
					Test: <input type="text" name="testname" size="15"><br>
				</form>
		</div>		
				<table style="margin-left: auto; margin-right: auto;">
					<tr>
						<th>Student id</th>
						<th>Student Name</th>
					<tr>
				<?php
					require "config.php";
					$username = $_SESSION["username"];
					$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
					$mysql_query = "SELECT studentdetails.sid, studentdetails.name FROM student_course, course_user_master, studentdetails WHERE 
student_course.sid=studentdetails.sid and student_course.courseid=course_user_master.courseid and course_user_master.uid='$username';";
	
					$result = mysqli_query($con, $mysql_query);
					if(mysqli_num_rows($result)>0){
						$studIdarray = array();
						while($row = mysqli_fetch_assoc($result)) {
							$i = 1;
				?>
	
					<tr>
						<td><?php echo $row['sid']; ?></td>
						<td><?php echo $row['name']; ?></td>
						<td><input  maxlength="4" size="4" type='text' name=<?php echo'$i'; $i++;?>/></td></td>
					</tr>
				<?php
						}
					}	
				?>
				</table>
				<div style="text-align: center; margin-top: 30px;">
				<input type="button" name="test" id="test" value="Mark Assessment"  onclick="<?php echo testfun(); ?>" />
				</div>
				<?php

					function testfun()
					{
					   
					}

				?>
</div>
	<!--==========================
    Footer
  ============================-->
	
	<!-- #footer -->

	<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


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