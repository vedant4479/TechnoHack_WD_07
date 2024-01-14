<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body background="123.jpg" class="body_deg">
	<nav>
		<label class="logo">Fit Freaks</label>
		<ul>
			<li><a href="http://127.0.0.1/GymManagementSystem/index.php" class="btn btn-success">Home</a></li>
			<li><a href="http://127.0.0.1/GymManagementSystem/login.php" class="btn btn-success">Login</a></li>
			<li><a href="" class="btn btn-success">Contact</a></li>
		</ul>
	</nav>

	<center>
		<div class="login_form">
			<center class="title_deg">
				LOGIN HERE

				<h4 class="">
					<?php
					error_reporting(0);
					session_start();
					echo $_SESSION['loginMessage'];
					session_destroy();
					?>
				</h4>
			</center>
		<form action="login_check.php" method="POST" class="reg_form">
			<div class="adm_int">
				<label class="label_txt">Member ID</label>
				<input class="input_des" type="text" name="MemberId">
			</div>
			<div class="adm_int">
				<label class="label_txt">Password</label>
				<input class="input_des" type="Password" name="password">
			</div>
			<div class="adm_int">
				<input class="btn btn-primary" id="submit" type="Submit" value="Login">
			</div>
		</form>
	</div>
	</center>

	<footer>
		<h4 class="foot_txt">All @Copyright reserved by Fit Freaks</h4>
	</footer>
</body>
</html>