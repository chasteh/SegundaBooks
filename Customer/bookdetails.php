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