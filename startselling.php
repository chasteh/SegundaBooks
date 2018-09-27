<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="bootsrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery-3.3.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="icon" href="image/icon.png">
	
	
	
    <title>SegundaBooks</title>
	<style>
		.nav{
	background-color:#6697A7;
	margin-bottom:100px;
	position:relative;
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
.container .form-dark{
	background-color:lightgray;
}
#submit{
	width:100%;
	background-color:#ff751a;
}
	</style>
</head>
<body>
	<div class="top">
	<a href="index.php"><img src="image/icon.png" class="img-responsive" id="icon"></a>
	<a href="#"><input type="button" value="sign-in" class="button" id="sign-in"></a>
	<a href="signup.php	"><input type="button" value="sign-up" class="button"></a>
	
</div>
<div class="container-fluid">
<div class="nav">
	<ul>
		<li><a href="#">Books </a></li>
		<li class="nav-divider">|</li>
		<li><a href="browsecollection.php">Browse Collection</a></li>
		<li class="nav-divider">|</li>
		<li><a href="#">Rare Books</a></li>
		<li class="nav-divider">|</li>
		<li><a href="#">School Books</a></li>
		<li><a href="mycart.php" class="cart">My Cart</a></li>
		<li class="nav-divider">|</li>
		<li><a href="#" class="selling">Start Selling</a></li>
	</ul>
</div>
</div>

<div class="container">
<form>
<div>
 <input type="file" name="file" >
</div>

<div class="form-group">
 <label>Item Details</label>
</div>


<div class="form-group">
<label>What are you selling?</label>
<input type="text" class="form-control" id="Name" placeholder="Title">
</div>
<div class="form-group">
<label>Category</label>
<input type="email" class="form-control" id="Email1" placeholder="Choose Category">
</div>
<div class="form-group">
<label>Description</label>
<textarea class="form-control" maxlength="255"></textarea>
</div>
<div class="form-group">
<label>What are you selling?</label>
<input type="text" class="form-control" id="Name" placeholder="Choose Location">
</div>

</form>
</div>


	<div class="container">
		<form class="form-dark">
		<div class="form-group">
			<p>Seller Details</p>
			<p><b>Mobile Number</b></p>
			<input type="text" name="number" class="form-control" value="+63 923 8123 756" readonly>
		</div>
		<div class="form-group">
			<label>Name</label>
				<input type="text" class="form-control" id="Name" value="Dela Cruz Juan" readonly>
		</div>
		<div class="form-group">
			<label>Email</label>
				<input type="text" class="form-control" id="Name" value="JuanDelacruz@yahoo.com" readonly>
		</div>
		</form>
		<button type="submit" class="btn btn-info" id="submit">Sell Your Item Now</button>
	</div>

</body>
</html>