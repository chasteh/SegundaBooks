<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="bootsrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
    <script src="bootstrap/js/jquery-3.3.1.min.js"></script>
	<link rel="icon" href="image/icon.png">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <title>SegundaBooks</title>
</head>
<body>
<?php
	session_start();
	if (!empty($_SESSION["authenticated"]) && $_SESSION["authenticated"] === TRUE) {
		$user = $_SESSION["user"];
	}
?>


<div class="top">

	<img src="image/icon.png" class="img-responsive" id="icon">
	

	
 	<div class="container" id="profile">
	 	<div class="row">
		 <div class="col-lg-12 col-md-3 col-sm-3 col-xs-3">

		 <?php 
		 	if (!empty($_SESSION["authenticated"]) && $_SESSION["authenticated"] === TRUE) {
				echo " <p class=\"name\">" . $user . "</p>
				<a href='logout.php' id='logout'>Logout</a>
		 		<a href=\"#\"><img src=\"image/profile.png\" class=\"img-thumbnail\" id=\"profile-picture\"/></a>";
			}
			else {
				echo "<a href='signin.php'><input type='button' value='sign-in' class='button' id='sign-in'></a>
				<a href='signup.php'><input type='button' value='sign-up' class='button'></a>";	
			}
		 ?>
		 </div>
		 	
			 </div>
		 </div>
	</div>
	
</div>

<div class="nav">
	<ul>
		<li><a href="index.php">Home </a></li>
		<li class="nav-divider">|</li>
		<li><a href="browsecollection.php">Browse Collection</a></li>
		<li class="nav-divider">|</li>
		<li><a href="#">Rare Books</a></li>
		<li class="nav-divider">|</li>
		<li><a href="#">School Books</a></li>
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