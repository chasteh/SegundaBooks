<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
	 crossorigin="anonymous">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<script src="bootstrap/js/jquery-3.3.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="icon" href="image/icon.png">
	<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
	<title>SegundaBooks</title>

	<style>
	</style>
</head>

<body>
	
<?php
	session_start();
	if (!empty($_SESSION["authenticated"]) && $_SESSION["authenticated"] === TRUE) {
		$user = $_SESSION["user"];
	}
?>
	<div class="container-fluid">
		<?php include 'login_info.php' ?>
	</div>
	<div class="container-fluid">
		<?php include 'nav_bar.php' ?>
	</div>

	<div class="container">
		<div class="icon-sign-up">
			<img src="../image/icon.png" class="img-fluid" alt="Responsive image" id="icon-sign-up" />
			<h6 class="display-5" align="center">Register</h6>
		</div>
		<form class="mx-auto" action="processregistration.php" method="post">
			<div class="form-group">
				<p></p>
				<p><b>Name</b></p>
				<input type="text" class="form-control" name="fullname" placeholder="This will be your seller name on OLX">
			</div>
			<div class="form-group">
				<label>Mobile Number</label>
				<input type="text" class="form-control" id="number" name="mobile-number" placeholder="Must be a working PH number">
			</div>
			<div class="form-group">
				<p>Location</p>
				<input type="text" class="form-control" name="location" placeholder="Location">
			</div>
			<div class="form-group">
				<label>Username</label>
				<input type="text" class="form-control" id="number" name="username" placeholder="Username">
			</div>

			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" id="password" name="password" placeholder="Minimum 8 Characters">
			</div>

			<input type="submit" class="btn btn-info" id="submit" value="Signup" />
		</form>
	</div>
</body>

</html>