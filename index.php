<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>touching lives</title>
</head>
<body>
	<div class="align">
		<h1>touching<span>lives</span></h1>
		<div class="card">
			<div class="head">
				<div></div>
				<a id="login" class="selected" href="#login">Login</a>
				<a id="register" href="#register">Register</a>
				<div></div>
			</div>
			<div class="tabs">
				<form method="post" action="login.php">
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
				</form>
				<form>
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
				</form>
			</div>
		</div>
	</div>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/index.js"></script>
</body>
</html>
