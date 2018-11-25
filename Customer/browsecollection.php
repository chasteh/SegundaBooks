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
        img{
            height: 250px;
            width: 250px;
        }
        table{
            width:50%;
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
<div class="search">
		<form action="browsecollection.php" method="GET" class="form-inline">
			<div class="form-group">
			<b>Search</b>
				<input type="text" name="search" class="searchbox">
				<button type="submit" class="find">Find</button>
 		 	</div>	
		</form>
</div>
<div class="divider"></div>
<div class="title">
	<p>Books Collection</p>
</div>
<div class="divider"></div>
<div class="container">
    <?php
    //Columns must be a factor of 12 (1,2,3,4,6,12)
    $numOfCols = 4;
    $rowCount = 0;
    $bootstrapColWidth = 12 / $numOfCols;
    ?>
    <div class="row">
    <?php
    foreach ($books as $book){
    ?>  
            <div class="col-md-<?php echo $bootstrapColWidth; ?>">
		<a href="bookdetails.php?id=<?php echo $book["id"]; ?>">
            <form action="browsecollection.php" method="POST">
            <div class="card" style="width:250px">
                <img class="card-img-top" src="<?php echo $book["picture_path"]; ?>" alt="Book image">
                <div class="card-body"> 
                    <h4 class="card-title">Title: <?php echo $book["book_title"]; ?></h4>
                    <p class="card-text">Price: &#8369;<?php echo $book["price"]; ?> <br> Status: <?php echo $book["status"] ?></p>
				<?php if(in_array($book["id"], $_SESSION["cart"])): ?>
					<button type="submit" class="btn btn-primary disabled" disabled><i class="fas fa-cart-arrow-down"></i>Added</button>
				<?php else: ?>
					<button type="submit" class="btn btn-primary" name="<?php echo $book["id"]; ?>">Add to Cart</button>					
				<?php endif; ?>
                </div>
            </div>
        </form>
		</a>
            </div>
    <?php
        $rowCount++;
        if($rowCount % $numOfCols == 0) echo '</div><div class="row">';
    }
    ?>
    </div>
</div>
    <div class="footer-copyright text-center py-3" id="footer">© 2018 Copyright:
      <a href="index.php">SegundaBooks</a>
    </div>
<</body>
</html> 