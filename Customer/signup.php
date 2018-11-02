<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
	 crossorigin="anonymous">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/jquery-3.3.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="icon" href="image/icon.png">
	<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">


	<title>SegundaBooks</title>
	<style>
		html,body{
    overflow-x:hidden;

    }
		.nav{
	background-color:#6697A7;
	margin-bottom:100px;
}
.nav ul{
	list-style:none;
	height:30px;
}
.nav ul li{
	float:left;
	padding:5px;
	line-height:auto;
	position:relative;
	top:10px;
}
.nav ul li a{
	color:white;
	text-decoration:none; 
}
.nav-divider{
	color:white;
}
.cart{
	margin-left:600px;
}
#icon{
	width:200px;
	height:50px;
}
.button{
	float:right;
	position:relative;
	top:10px;
	right:45px;
	background-color:transparent;
	border-radius:6px;
	border:1px solid black;
}
#sign-in{
	margin-left:15px;
}
.divider
{
	border-bottom: 3px solid lightgray;
	width:100%	;
	display: block;
	margin-top:10px;
    margin-left: auto;
    margin-right: auto;
}
.divider2
{
	border-bottom: 3px solid lightgray;
	width:67%	;
	display: block;
	margin-top:10px;
    margin-left: auto;
    margin-right: auto;
	margin-bottom:20px;
}
#icon-sign-up{
	width:200px;
	height:100px;
	display: block;
    margin-left: 	auto;
    margin-right: auto;
}
#submit{
	display: block;
	margin-top:10px;
    margin-left: auto;
    margin-right: auto;
	margin-bottom:20px;
	background-color:#6697A7;
}
form{
	width:500px;
	margin-top:10px;
    margin-left: auto;
    margin-right: auto;
	margin-bottom:20px;
}
	</style>
</head>

<body>
	<div class="top">
		<a href="index.php"><img src="image/icon.png" class="img-responsive" id="icon"></a>
		<a href="signin.php"><input type="button" value="sign-in" class="button" id="sign-in"></a>
		<a href="signup.php"><input type="button" value="sign-up" class="button"></a>
	</div>

	<div class="container-fluid">
		<?php include 'nav_bar.php' ?>;
	</div>


	<div class="container">
		<div class="icon-sign-up">
			<img src="image/icon.png" class="img-fluid" alt="Responsive image" id="icon-sign-up" />
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