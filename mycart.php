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
	<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
	
	 
    <title>SegundaBooks</title>
	<style>
	<!--
	html,body{
    overflow-x:hidden;
    } -->
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

.body{
	width:60%;
	height:auto;
	border:1px solid black;
	margin-left:15%;
	border-radius:10px;
}
.cart{
	
}
#cart{
	display:block
	margin-right:10%;
	margin-left:20%;
	margin-top:15%;
	
}
#cart h1{
	font-family:Comic Sans MS;
	
	
}
#checkbox{
	width:30px;
	height:30px;
	border-radius:6px;
	margin-left:25px;
	margin-right:30px;
	margin-top:10px;
}
.item{
	font-weight:bold;
	line-height:40px;
	margin-left:30px;
}
.Availability{
	margin-left:50px;
}
.Quantity{
	width:90px;
	border-radius:10px;
	margin-left:20px;
}
.Price{
	width:90px;
	margin-left:20px;
}
.Subtotal{
	margin-left:20px;
}
#checkbox{
	width:30px;
	height:30px;
	margin-left:10px;
	margin-top:10px;
}
table{
	margin-left:0px;
	 border-radius:12px;;
	 border:1px solid black;
}

#checkbox2{
	width:30px;
	height:30px;
	margin-left:10px;
	margin-top:10px;
}
#image{
	height:100px;
	width:120px;
	margin-left:30px;
}
.imagetd{
	width:10%;
}	
.title{
	text-align:center;
	margin-left:25%;
	font-family:Comic Sans MS;
	float:left;
	font-weight:bold;
	font-size:24px;
	margin-top:0px;
}
#table-size{
	width:70%;
	height:300px;
}
.tr{
	border-bottom:1px solid black;
}
	</style>
	
	<script language="JavaScript">
function toggle(source) {
  checkboxes = document.getElementsByName('foo');
  for(var checkbox in checkboxes)
    checkbox.checked = source.checked;
}
function toggle(source) {
  checkboxes = document.getElementsByName('foo');
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
  }
}
</script>
</head>
<body>
	<div class="top">
	<a href="index.php"><img src="image/icon.png" class="img-responsive" id="icon"></a>
	<a href="#"><input type="button" value="sign-in" class="button" id="sign-in"></a>
	<a href="#"><input type="button" value="sign-up" class="button"></a>
	</div>
<div class="nav">
	<ul>
		<li><a href="#">Books </a></li>
		<li class="nav-divider">|</li>
		<li><a href="browsecollection.php">Browse Collection</a></li>
		<li class="nav-divider">|</li>
		<li><a href="#">Rare Books</a></li>
		<li class="nav-divider">|</li>
		<li><a href="#">School Books</a></li>
		<li><a href="#" class="cart">My Cart</a></li>
		<li class="nav-divider">|</li>
		<li><a href="startselling.php" class="selling">Start Selling</a></li>
	</ul>
</div>
<p class="title">My Shopping Cart</p>
<div class="container">
<div id="cart">
	<table class="table-responsive" id="table-size">
	<div class="row">
		<tr class="tr">
		<th><input type="checkbox" id="checkbox" onClick="toggle(this)"/></th>
		<th><p class="item">Item</p></th>
		<th><p class="Availability">Availability</p></th>
		<th><p class="Quantity">Quantity</p></th>
		<th><p class="Price">Price</p></th>
		<th><p class="Subtotal">Subtotal</p></th>
		<th id="last-border-bottom"></th>
		</tr>
	</div>
	<div class="row" id="secondrow">
		<tr>
		<td><input type="checkbox" id="checkbox2" name="foo" value="bar1"></td>
		<div class="tdimage">
			<td class="imagetd">
				<img src="image/book3.jpg" id="image" class="img-thumbnail">
					</td>
						</div>
		<td><p class="Availability">Availability</p></td>
		
		<td><input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="Quantity"></input></td>
		<td><p class="Price">P100.50</p></td>
		<td><p class="Subtotal">P100.50</p>
	</tr>
	</div>
	</table>
</div>
</div>
</body>
</html>