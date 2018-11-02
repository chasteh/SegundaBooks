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
			<h6 class="display-5" align="center">Sign-In</h6>
		</div>
		<form class="mx-auto" method="post" action="processsignin.php">
			<div class="form-group">
				<p><b>Username</b></p>
				<input type="text" class="form-control" name="username" placeholder="Username" required>
			</div>
			<div class="form-group">
				<label><b>Password</b></label>
				<input type="password" class="form-control" id="password" name="password" placeholder="Minimum 8 Characters"
				 required>
			</div>
			<input type="submit" class="btn btn-info" id="submit" value="login">
		</form>
	</div>
	<div class="message-login">
		<p>
			<?php if(!empty($_SESSION["login_error"])) echo $_SESSION["login_error"]; ?>
		</p>
	</div>
</body>

</html>