<?php include_once '../index.php' ?>
<?php include_once '../Customer/db_books.php' ?>
<?php include_once '../Admin/db_users.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
    <script src="bootstrap/js/jquery-3.3.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> </script>
	<link rel="icon" href="image/icon.png">
    <title>SegundaBooks</title>

<style>
	body {
		overflow-x: hidden;
	}

		

	.divider {
		border-bottom: 3px solid lightgray;
		width: 100%;
		display: block;
		margin-top: 10px;
		margin-left: auto;
		margin-right: auto;
	}

	.divider2 {
		border-bottom: 3px solid lightgray;
		width: 67%;
		display: block;
		margin-top: 10px;
		margin-left: auto;
		margin-right: auto;
		margin-bottom: 20px;
	}

	#icon-sign-up {
		width: 200px;
		height: 100px;
		display: block;
		margin-left: auto;
		margin-right: auto;
	}

	.body {
		width: 60%;
		height: auto;
		border: 1px solid black;
		margin-left: 15%;
		border-radius: 10px;
	}

	.cart {}

	#cart {
		display: block margin-right:10%;
		margin-left: 20%;
		margin-top: 15%;

	}

	#cart h1 {
		font-family: Comic Sans MS;


	}

	#checkbox {
		width: 30px;
		height: 30px;
		border-radius: 6px;
		margin-left: 25px;
		margin-right: 30px;
		margin-top: 10px;
	}

	.item {
		font-weight: bold;
		line-height: 40px;
		margin-left: 30px;
	}

	.Availability {
		margin-left: 50px;
	}

	.Quantity {
		width: 90px;
		border-radius: 10px;
		margin-left: 20px;
	}

	.Price {
		width: 90px;
		margin-left: 20px;
	}

	.Subtotal {
		margin-left: 20px;
	}

	#checkbox {
		width: 30px;
		height: 30px;
		margin-left: 10px;
		margin-top: 10px;
	}

	table {
		margin-left: 0px;
		border-radius: 12px;
		;
		border: 1px solid black;
	}

	#checkbox2 {
		width: 30px;
		height: 30px;
		margin-left: 10px;
		margin-top: 10px;
	}

	#image {
		height: 100px;
		width: 120px;
		margin-left: 30px;
	}

	.imagetd {
		width: 10%;
	}

	.title {
		text-align: center;
		margin-left: 25%;
		font-family: Comic Sans MS;
		float: left;
		font-weight: bold;
		font-size: 24px;
		margin-top: 0px;
	}

	#table-size {
		width: 70%;
		height: 300px;
	}

	.tr {
		border-bottom: 1px solid black;
	}
</style><script language="JavaScript">function toggle(source) {
	checkboxes=document.getElementsByName('foo');
	for(var checkbox in checkboxes) checkbox.checked=source.checked;
}

function toggle(source) {
	checkboxes=document.getElementsByName('foo');
	for(var i=0, n=checkboxes.length;
	i<n;

	i++) {
		checkboxes[i].checked=source.checked;
	}
}

</script>

    <style>
        img{
            height: 250px;
            width: 250px;
        }
        table{
            width:50%;
            margin-left:200px;
        }
        #title{
            font-size:100px;
			color: ;
        }
    </style>
</head>
<body>
<?php
	session_start();
	add_to_cart();

	if (!empty($_SESSION["authenticated"]) && $_SESSION["authenticated"] === TRUE) {
		$user = get_user($_SESSION["id"] ?? 0);
	}

	if(!isset($_SESSION["cart"])){
		$_SESSION["cart"] = array();
	}

	if (isset($_GET["search"]) && !empty($_GET["search"])) {
		$books = search_books($_GET["search"]);
	}
	else {
		$books = get_all_books();		
	}

	function add_to_cart(){
		$books = get_all_books();
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			foreach($books as $book){
				if(isset($_POST[$book["id"]]) && array_key_exists($book["id"], $_POST)){
					if(!in_array($book["id"], $_SESSION["cart"])) {
						array_push($_SESSION["cart"], $book["id"]);
					}
				}
			}
		}
	}
?>
<div class="container-fluid">
<?php include 'login_info.php' ?>
</div>
<div class="container-fluid">
<?php include 'nav_bar.php' ?>
</div>
<div class="row">
    <div class="col-md-1"></div>
    <p style="font-family:Bradley Hand ITC;font-size:36px;font-weight:bold;">My Shopping Cart</p>
</div>

<table class="table-responsive"id="table-size"><div class="row">
	<tr class="tr">
		<th><input type="checkbox"id="checkbox"onClick="toggle(this)"/></th>
		<th><p class="item">Item</p></th><th><p class="Availability">Availability</p></th>
		<th><p class="Quantity">Quantity</p></th><th><p class="Price">Price</p></th>
		<th><p class="Subtotal">Subtotal</p></th><th id="last-border-bottom"></th>
	</tr>
	
	<div class="row"id="secondrow">
	<tr>
		<td>
		<input type="checkbox"id="checkbox2"name="foo"value="bar1">
		</td>
		<div class="tdimage"><td class="imagetd">
		<img src="../image/book3.jpg"id="image"class="img-thumbnail"></td>
	<td>
	</div>
		<p class="Availability">Availability</p>
	</td>
	<td>
	<input type="text"onkeypress='return event.charCode >= 48 && event.charCode <= 57'class="Quantity">
	</td>
		<td>
			<p class="Price">P100.50</p>
		</td>
		<td>
			<p class="Subtotal">P100.50</p>
		</td>
	</tr>
	</div>
	</table>
    <br/>
    <div class="row">
    <div class="col-md-9">
    <p style="float:right;"><b>Subtotal: Php 150.00</b></p>
    </div>
    </div>
    <div class="row">
    <div class="col-md-9" >
    <a href="#"><img src="image/button/checkout.png" alt="..." style="width:150px;height:50px;float:right;"></a>
    </div>
</div>
    <div class="footer-copyright text-center py-3" id="footer">© 2018 Copyright:
      <a href="index.php">SegundaBooks</a>
    </div>
</body>
</html> 