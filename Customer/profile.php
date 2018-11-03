<?php include_once '../index.php' ?>
<?php include_once '../Customer/db_books.php' ?>

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
	tr{
		text-align:center;
	}
	</style>
</head>

<body>
<div class="container-fluid">
		<?php include 'login_info.php' ?>
	</div>
	<div class="container-fluid">
		<?php include 'nav_bar.php' ?>
	</div>
<?php 
session_start();
$userid = $_SESSION["id"] ?? 0;
$books = get_books_by_user($userid);
$book = $books[0] ?? null;
?>

<div class="container" style="margin-top:2%;">
    <div class="row">
	
        <div class="col-md-3" style="border:1px solid lightgray;border-radius:10px;height:30%;">
            <div>
                <p style="text-align:center;color:black;">Profile</p>
                <div class="col-md-6">
				<img src="../image/profile.png" style="width:100px;height:100px;border-radius:50px;margin-bottom:3%;">
				</div>
                <div><p style="color:black;"><?php echo $book["full_name"]; ?></p></div>
				<div><p style="color:black;">+63 9967491142</p></div>
				<div><a href="#"><input type="button" value="Settings" style="background-color:#6697A7;color:white;border:none;"></a></div>
				</div>
            </div>
			
			<div class="col-md-9">
				<h3>Book List</h3>
				<div style="border-bottom:1px solid lightgray;">
				</div>
				<div style="margin-left:8%;margin-top:2%;margin-bottom:2%;"> 
				<?php foreach($books as $b): ?>
				<img src="<?php echo  "../Customer/userbookimages/".$b["user_id"]."/".basename($b["picture_path"]); ?>" style="width:100px;height:150px;">

				
				<?php endforeach; ?>
				<img src="../image/book0.jpg" style="width:100px;height:150px;">
				<img src="../image/book0.jpg" style="width:100px;height:150px;">
				<img src="../image/book0.jpg" style="width:100px;height:150px;">
				</div>
				<div style="margin-left:8%;">
				<img src="../image/book0.jpg" style="width:100px;height:150px;">
				<img src="../image/book0.jpg" style="width:100px;height:150px;">
				<img src="../image/book0.jpg" style="width:100px;height:150px;">
				<img src="../image/book0.jpg" style="width:100px;height:150px;"></div>
			</div>
			
				
        </div>
		
    </div>
</div>
</body>
</html>