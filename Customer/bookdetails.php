<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="bootstrap/js/jquery-3.3.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="icon" href="image/icon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">


    <title>Segundabooks</title>
</head>
<style>
    #icon{
	width:200px;
	height:50px;
}
#sign-in{
	margin-left:15px;
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
#add-cart-photo{
    width:300px;
    height:500px;
    margin-left:10%;
    margin-top:-30px;
    position:relative;
    left:10px;
}
table, th, .border-bottom{
    border-bottom:1px solid gray;
}
table{
    border:1px solid gray;
    border-radius:5px;
    padding:1px;
}
.second-table{
    width:310px;
    margin-top:20px;
    margin-right:30px;
}
#profile{
    border-radius:32px;
}
</style>
<body>
<div class="top">
	<a href="index.php"><img src="../image/icon.png" class="img-responsive" id="icon"></a>
	<a href="signin.php"><input type="button" value="sign-in" class="button" id="sign-in"></a>
	<a href="signup.php"><input type="button" value="sign-up" class="button"></a>
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
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
        <img src="../image/book4.jpg" alt="add-cart-photo" id="add-cart-photo" class="img-thumbnail" >
        </div>
        <div class="col-md-3" id="item-details">
        <table>
            <tr class="border-bottom">
                <th><p><b>You are a Badass(r) By: Jen Sincero</b></p></th>
            </tr>
            <tr>
            <td><p><b>Price:</b> Php150.00</p></td>
            </tr>
            <tr>
            <td><p><b>Status:</b> Slightly Used</p></td>
            </tr>
            <tr>
            <td><p><b>Description:</b> Book for those who wanted to be awesome</p></td>
            </tr>
            <tr>
            <td><p><b>Location:</b> Imus, Cavite</p></td>
            </tr>
            <tr>
            <td><p><b>Payment:</b>Meet-up</p></td>
            </tr>
        </table>
        <div class="col-md-0">
        <table class="second-table">
            <tr>
                <th><p>Meet The Seller</p></th>
            </tr>
            <tr>
    <td class="col-md-2"><img src="../image/book0.jpg" class="img-circle" alt="HelPic" width="50" height="50" id="profile"></td>
            </tr>
        </table>
        </div></div>
        
</div>
</div>  
</body>
</html>