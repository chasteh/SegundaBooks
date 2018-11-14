<?php include_once '../index.php' ?>
<?php include_once '../Customer/db_books.php' ?>
<?php include_once '../Admin/db_users.php' ?>
<?php session_start();
$userid = $_SESSION["id"] ?? 0;
$user = get_user($userid);
if ($userid == 0) {
  header("Location: signin.php");
}

$id = $_GET["id"] ?? 0;

if ($id == 0) {
    header("Location: profile.php");
}
else {
    $book = get_book($id);
}

?>
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
    <link ref="stylesheet" href="#.css">
    <link rel="stylesheet" href="styles/bookdetails.css" />
    <title>Segundabooks</title>
</head>

<body>
<div class="container-fluid">
<?php include 'login_info.php' ?>
</div>
<div class="container-fluid">
<?php include 'nav_bar.php' ?>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
        <img src="<?php echo $book["picture_path"]; ?>" alt="add-cart-photo" id="add-cart-photo" class="img-thumbnail" >
        </div>
        <div class="col-md-3" id="item-details">
        <table>
            <tr class="border-bottom">
                <th><p><b><?php echo $book["book_title"] ?></b></p></th>
            </tr>
            <tr>
            <td><p><b>Price:</b> Php <?php echo number_format($book["price"], 2) ?></p></td>
            </tr>
            <tr>
            <td><p><b>Status:</b> <?php echo $book["status"]; ?></p></td>
            </tr>
            <tr>
            <td><p><b>Description:</b> <?php echo $book["description"]; ?></p></td>
            </tr>
            <tr>
            <td><p><b>Location:</b> <?php echo $book["location"]; ?> </p></td>
            </tr>
            <!-- <tr>
            <td><p><b>Payment:</b>Meet-up</p></td>
            </tr> -->
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