<?php include_once '../index.php' ?>
<?php include_once '../Admin/db_users.php' ?>

<?php
	session_start();
	if (!empty($_SESSION["authenticated"]) && $_SESSION["authenticated"] === TRUE) {
		$user = get_user($_SESSION["id"]);
	}
?>

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
	<link rel="icon" href="image/icon.png">
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<title>SegundaBooks</title>
	<style>
	</style>
</head>

<body>
	<div class="container-fluid">
		<?php include 'login_info.php' ?>
	</div>
	<div class="container-fluid">
		<?php include 'nav_bar.php' ?>
	</div>
	<!-- START  -->
	<div>
		
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">

      <img src="<?php echo "../Admin/uploads/carousel1.jpg"; ?>" alt="..." style="width:50%;margin-left:27%;">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
		<img src="<?php echo "../Admin/uploads/carousel2.jpg"; ?>" alt="..." style="width:50%;margin-left:27%;">
      <div class="carousel-caption">
        ...
      </div>
	  
    </div>

		<div class="item">
		<img src="<?php echo "../Admin/uploads/carousel3.jpg"; ?>" alt="..." style="width:50%;margin-left:27%;">
      <div class="carousel-caption">
        ...
      </div>
	  
    </div>
	
    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

	</div>
	 <!-- END -->
	<div class="divider"></div>
	<div class="container">
		<p class="my-2 text-center text-lg-left" id="trending">Trending in books</p>
		<div class="row text-center text-lg-left">
			<div class="col-lg-4 col-md-4 col-xs-6" style="height:50px;">
				<a href="#" class="d-block mb-1 h-50">
					<img class="img-fluid img-thumbnail" src="../image/book2.jpg" alt="">
				</a>
			</div>

			<div class="col-lg-4 col-md-4 col-xs-6" id="six-books" style="height:50px;">
				<a href="#" class="d-block mb-1 h-50">
					<img src="../image/book1.jpg" width="80" height="100" id="second" />
					<img src="../image/book2.jpg" width="80" height="100" id="third" />
					<img src="../image/book3.jpg" width="80" height="100" id="forth" />
					<img src="../image/book4.jpg" width="80" height="100" id="fifth" />
					<img src="../image/book0.jpg" width="80" height="100" id="sixth" />
					<img src="../image/book2.jpg" width="80" height="100" id="seventh" />
				</a>
			</div>

			<p id="categories">Book Categories</p>
			<div class="col-lg-1 col-md-4 col-xs-6">
				<form style="width:10px;">
					<div>
						<input type="button" value="Fiction" id="fiction"><br />
						<input type="button" value="Non-Fiction" id="non-fiction">
						<br />
						<input type="button" value="History Books" id="history">
						<br />
						<input type="button" value="Chilren's Books" id="children">
						<br />
						<input type="button" value="Biographies" id="biographies">
						<br />
						<input type="button" value="Arts and Entertainment" id="arts">
						<br />
					</div>
				</form>
</body>
</html>