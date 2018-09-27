<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="bootsrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery-3.3.1.min.js"></script>
	<link rel="icon" href="image/icon.png">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <title>SegundaBooks</title>
<style>

#second{
}
#third{
	margin-bottom:20px;
}
#forth{
	margin-bottom:20px;
}
#fifth{
	margin-bottom:20px;
}
#sixth{
	margin-bottom:20px;
}
#seventh{
	margin-bottom:20px;
}
.container, #trending{
	color:#6697A7;
}
#categories{
	margin-bottom:10px;
	color:#6697A7;
	height:10px;
	position:relative;
	top:-20px;
}
#fiction{
	height:30px;
	width:180px;
	margin-bottom:5px;
	position:relative;
	top:10px;
	right:73px;
	border-radius:6px;
	background-color:transparent;
}
#non-fiction{
	height:30px;
	width:180px;
	margin-bottom:5px;
	position:relative;
	top:10px;
	right:70px;
	border-radius:6px;
	background-color:transparent;
}
#history{
	height:30px;
	width:180px;
	margin-bottom:5px;
	position:relative;
	top:10px;
	right:70px;
	border-radius:6px;
	background-color:transparent;
}
#children{
	height:30px;
	width:180px;
	margin-bottom:5px;
	position:relative;
	top:10px;
	right:70px;
	border-radius:6px;
	background-color:transparent;
}
#biographies{
	height:30px;
	width:180px;
	margin-bottom:5px;
	position:relative;
	top:10px;
	right:70px;
	border-radius:6px;
	background-color:transparent;
}
#arts{
	height:30px;
	width:180px;
	position:relative;
	top:10px;
	right:70px;
	margin-bottom:40px;
	border-radius:6px;
	background-color:transparent;
}
#semi-background{
	width:1000px;
	height:350px;
	display: block;
    margin-left: auto;
    margin-right: auto;
	margin-bottom:10px;
}

#fiction:hover{
	background-color:#6697A7;
}
#non-fiction:hover{
	background-color:#6697A7;
}
#history:hover{
	background-color:#6697A7;
}
#children:hover{
	background-color:#6697A7;
}
#biographies:hover{
	background-color:#6697A7;
}
#arts:hover{
	background-color:#6697A7;
}
#semi-background:hover{
	background-color:#6697A7;
}



.divider
{
	border-bottom: 3px solid lightgray;
	width:1000px;
	display: block;
    margin-left: auto;
    margin-right: auto;
}
.container, .largebook{
	width:80%;
}
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
p a{
	color:black;
	text-decoration:none;
}
p a:hover{
	color:white;
	text-decoration:none;
}
footer{
	margin-left:180px;
}
.space{
	border:1px solid black;
	height:300px;
	width:100px;
}
</style>
</head>
<body>
<p>Hello World!</p>
<div class="top">
	<img src="image/icon.png" class="img-responsive" id="icon">
	<a href="#"><input type="button" value="sign-in" class="button" id="sign-in"></a>
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
		<li><a href="mycart.php" class="cart">My Cart</a></li>
		<li class="nav-divider">|</li>
		<li><a href="startselling.php" class="selling">Start Selling</a></li>
	</ul>
</div>	


<div>
	<img src="image/book0.jpg" class="img-fluid" alt="Responsive image" id="semi-background">
	
</div>
<div class="divider"></div>
<div class="container">
      <p class="my-2 text-center text-lg-left" id="trending">Trending in books</p>
      <div class="row text-center text-lg-left">
		  <div class="col-lg-4 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-1 h-100">
            <img class="img-fluid img-thumbnail" src="image/book2.jpg" alt="" >
          </a>
		  </div>
		  
<div class="col-lg-4 col-md-4 col-xs-6" id="six-books">
          <a href="#" class="d-block mb-1 h-100">
            <img src="image/book1.jpg" width="80" height="100" id="second"/>
            <img src="image/book2.jpg" width="80" height="100" id="third"/>
            <img src="image/book3.jpg" width="80" height="100" id="forth"/>
			<img src="image/book4.jpg" width="80" height="100" id="fifth"/>
			<img src="image/book0.jpg" width="80" height="100" id="sixth"/>
			<img src="image/book2.jpg" width="80" height="100" id="seventh"/>
          </a>
		  </div>
		  
		  <p id="categories">Book Categories</p>
		  <form>
		  <input type="button" value="Fiction" id="fiction"><br/>
		  <input type="button" value="Non-Fiction" id="non-fiction">
		  <br/>
		  <input type="button" value="History Books" id="history">
		  <br/>
		  <input type="button" value="Chilren's Books" id="children">
		  <br/>
		  <input type="button" value="Biographies" id="biographies">
		  <br/>
		  <input type="button" value="Arts and Entertainment" id="arts">
		  <br/>
		  </form>
		  </div>
		  </div>

	
    <div class="footer-copyright text-center py-3" id="footer">© 2018 Copyright:
      <a href="index.php">SegundaBooks</a>
    </div>
  </footer>
</body>
</html>