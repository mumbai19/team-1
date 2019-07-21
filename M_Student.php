<!DOCTYPE html>
<html>
<head>
<?php
session_start();
$username = $_SESSION['username'];
?>
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>touching lives</title>
</head>
<body>
	<div class="align">
		<h1>touching<span>lives</span></h1>
		<div class="card">
			<!--<div class="head">
				<!--<div></div>
				<a id="login" class="selected" href="#login">View Students</a>
				<a id="register" href="#register">Add Student</a>
				<div></div> -->
			<div>
				<br>
				<br>
				&nbsp;&nbsp;&nbsp;<button onclick="window.location.href='add_student.php'">View Students</button>
				</div>
				<br>
				<br>
				<div>
				&nbsp;&nbsp;&nbsp;<button onclick="window.location.href='studentform.html'">Add Students</button>
				</div>
			</div>
			<div class="tabs">
				<!--<form method="post" action="login.php">
					<div class="inputs">
						<div class="input">
							<input placeholder="Username"  name="username" type="text">
							<img src="img/user.svg">
						</div>
						<div class="input">
							<input placeholder="Password" name="password" type="password">
							<img src="img/pass.svg">
						</div>
						<label class="checkbox">
							<input type="checkbox">
							<span>Remember me</span>
						</label>
					</div>
					<button>Login</button>
				</form> -->
				
				<!--<table>
				//<?php
				//require_once("config.php");
				//$username //= $_SESSION['username'];
				//$con //= //mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
//$query //= "SELECT studentdetails.sid, studentdetails.name FROM student_course, course_user_master, studentdetails WHERE 
//student_course.sid=studentdetails.sid and student_course.courseid=course_user_master.courseid and course_user_master.uid='$username'";

$result //= //mysqli_query($con,$query);


				?>
					<tr>
						<th>
							Student id
						</th>
						<th>
							Student name
						</th>
					</tr>
						<!--<?php
							//if (//mysqli_num_rows($result) > 0) {
									// output data of each row
									//while($row = mysqli_fetch_assoc($result)) {
						//?>
						//<tr>
						//	<td><?php //echo $row["sid"];?></td>
						//	<td><?php //echo $row["name"];?></td>
						//</tr>
						//<?php
							//}
						//}
						?>-->
					
				<!--</table>-->

				
				<!--<form>
					<div class="inputs">
						<div class="input">
							<input placeholder="Email" type="text">
							<img src="img/mail.svg">
						</div>
						<div class="input">
							<input placeholder="Username" type="text">
							<img src="img/user.svg">
						</div>
						<div class="input">
							<input placeholder="Password" type="password">
							<img src="img/pass.svg">
						</div>
						<div class="input">
							<input placeholder="Retype Password" type="password">
							<img src="img/pass.svg">
						</div>
					</div>
					<button>Register</button>
				</form>-->
			</div>
		</div>
	</div>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/index.js"></script>
</body>
</html>
