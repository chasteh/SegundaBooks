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
.search{
	margin-left:30%;
	margin-top:10px;
}
select{
	border-radius:6px;
	width:120px;
	align-text:center;
}
.searchbox{
	border-radius:6px;
	width:400px;
	margin-right:5px;
}
.find{
	background-color:#6697A7;
	border:1px solid black;
	border-radius:6px;
	width:100px;
	height:35px;
}
.find:hover{
	background-color:#76a2b0;
}
.title p{
	text-align:center;
	font-size:24px;
	font-weight:bold;
	color:#76a2b0;
	font-family:margarine;
}
.image1{
	width:130px;
	height:180px;
	border:1px solid black;
}
.title-book-1{
	width:130px;
	height:150px;
}
codingtutorial{
	color:#76a2b0;
	font-size:14px;
	border:1px solid black;
}
.price{
	color:#76a2b0;
	font-size:14px;
}
#books{
	border:1px solid black;
	width:165px;
}
.image1.0{
	height:10px;
}
tr th img{
	width:150px;
	height:200px;
}
tr td{
	font-weight:bold;
}
#images{
	margin-left:100px;
}
table{
	margin-left:200px;
}
.table-title{
	color:#375660;
	height:10px;
}
.information{
	color:#375660;
	font-size:12px;
}
.price{
	color:#375660;
}
	</style>
</head>
<body>
<div class="top">
	<a href="index.php"><img src="image/icon.png" class="img-responsive" id="icon"></a>
	<a href="#"><input type="button" value="sign-in" class="button" id="sign-in"></a>
	<a href="signup.php"><input type="button" value="sign-up" class="button"></a>
</div>
<div class="nav">
	<ul>
		<li><a href="index.php">Books </a></li>
		<li class="nav-divider">|</li>
		<li><a href="browsecollection.php">Browse Collection</a></li>
		<li class="nav-divider">|</li>
		<li><a href="#">Rare Books</a></li>
		<li class="nav-divider">|</li>
		<li><a href="#">School Books</a></li>
		<li><a href="mycart.php" class="cart">My Cart</a></li>
		<li class="nav-divider">|</li>
		<li><a href="startselling.php" class="selling">Start Selling</a></li>
	</ul>
</div>
<div class="search">
	<b>Search</b>
		<select>
			<option>Fiction</option>
			<option>Non-Fiction</option>
			<option>History Books</option>
			<option>Children's Books</option>
			<option>Biographies</option>
			<option>Arts and Entertainment</option>
		</select>
		<input type="search" name="search" class="searchbox"><button class="find">find</button>
</div>
<div class="divider"></div>
<div class="title">
	<p>Best Selling Books</p>
</div>
<div class="divider2"></div>

<table>
	<div class="table-responsive-sm">
    <thead>
        <tr>
            <th rowspan="2"></th>
            <th colspan="4">&nbsp;</th>
        </tr>
        <tr>
            <th><img src="image/book1.jpg"></th>
            <th><img src="image/book2.jpg"></th>
            <th><img src="image/book3.jpg"></th>
            <th><img src="image/book4.jpg"></th>
			<th><img src="image/book0.jpg"></th>
			<th><img src="image/book2.jpg"></th>
        </tr>
    </thead>
    <tbody>
			<tr class="table-title">
				<td></td>
				<td><b><a href="#">programming<a href="#"><b></td>
			<td><b><a href="#">Program C#<a href="#"><b></td>
			<td><b><a href="#">Game Programming<a href="#"><b></td>
			<td><b><a href="#">C++ Subject<a href="#"><b></td>
			<td><b><a href="#">Different Books<a href="#"><b></td>
			<td><b><a href="#">Programming high-<b><br/>definition<a href="#"></td>
         </tr>
		 <tr class="information">
            <td></td>
            <td>Information</td>
			<td>Program C#</td>
			<td>Game Programming</td>
			<td>C++ Subject</td>
			<td>Different Books</td>
			<td>Programming high-<br/>definition</td>
         </tr>
		 <tr class="price">
			<td></td>
			<td>$14.50</td>
			<td>$12.50</td>
			<td>$24.00</td>
			<td>$23.50</td>
			<td>$42.50</td>
			<td>$12.00</td>
		 </tr>
    </tbody>
	</div>
</table>
<table>
	<div class="container-fluid">
    <thead>
        <tr>
            <th rowspan="2"></th>
            <th colspan="4">&nbsp;</th>
        </tr>
        <tr>
            <th><img src="image/book1.jpg"></th>
            <th><img src="image/book2.jpg"></th>
            <th><img src="image/book3.jpg"></th>
            <th><img src="image/book4.jpg"></th>
			<th><img src="image/book0.jpg"></th>
			<th><img src="image/book2.jpg"></th>
        </tr>
    </thead>
    <tbody>
        <tr class="table-title">
            <td></td>
            <td><a href="#"><b>programming<b><a href="#"></td>
			<td><a href="#"><b>Program C#<b><a href="#"></td>
			<td><a href="#"><b>Game Programming<b><a href="#"></td>
			<td><a href="#"><b>C++ Subject<b><a href="#"></td>
			<td><a href="#"><b>Different Books<b><a href="#"></td>
			<td><a href="#"><b>Programming high-<b><a href="#"><br/>definition</td>
         </tr>
		 <tr class="information">
            <td></td>
            <td>Information</td>
			<td>Program C#</td>
			<td>Game Programming</td>
			<td>C++ Subject</td>
			<td>Different Books</td>
			<td>Programming high-<br/>definition</td>
         </tr>
		 <tr class="price">
			<td></td>
			<td>$23.50</td>
			<td>$42.50</td>
			<td>$12.00</td>
			<td>$14.50</td>
			<td>$12.50</td>
			<td>$24.00</td>
			
		 </tr>
    </tbody>
	</div>
</table>


    <div class="footer-copyright text-center py-3" id="footer">© 2018 Copyright:
      <a href="index.php"> SegundaBooks</a>
    </div>
</body>
</html>