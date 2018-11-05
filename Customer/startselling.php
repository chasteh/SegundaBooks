<?php include_once '../index.php' ?>
<?php include_once '../Admin/db_users.php' ?>
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
<?php 
session_start();

$authenticated = $_SESSION["authenticated"] ?? false;
$user = get_user($_SESSION["id"] ?? 0);	

if($authenticated == false) {
	header("Location: signin.php");
}

?>

	<div class="top">
		<?php include_once 'login_info.php' ?>
	</div>

	<div class="container-fluid">
		<?php include 'nav_bar.php' ?>;
	</div>

	<div class="container">
		<form method="POST" action="submit_add_book.php" enctype="multipart/form-data">
			<div>
				<input type="file" name="bookimage">
			</div>

			<div class="form-group">
				<label>Item Details</label>
			</div>

			<div class="form-group">
				<label>What are you selling?</label>
				<input type="text" class="form-control" name="title" placeholder="Title">
			</div>

			<div class="form-group">
				<label>Price</label>
				<input type="number" class="form-control" name="price" placeholder="Price">
			</div>

			<div class="form-group">
			<?php include '../Admin/db_categories.php' ?>
				<label>Category</label>
				<select name="category" class="form-control">
					<?php $categories = get_categories(); ?>
					<?php while($category = $categories->fetch_assoc()): ?>
					<option value="<?php echo $category["id"]; ?>"> <?php echo $category["category_name"]; ?> </option>
				<?php endwhile; ?>
				</select>
			</div>

			<div class="form-group">
				<label>Status</label>
				<input type="text" class="form-control" name="status" placeholder="(New, Slightly Used)">
			</div>

			<div class="form-group">
				<label>Description</label>
				<textarea class="form-control" name="description" maxlength="255" placeholder="Description"></textarea>
			</div>
			<div class="form-group">
				<label>Location</label>
				<input type="text" class="form-control" name="location" placeholder="Choose Location">
			</div>

			<input type="submit" class="btn btn-info" placeholder="Sell Your Item Now" id="submit">

		</form>
	</div>

</body>

</html>