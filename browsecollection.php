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
    <script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> </script>
	<link rel="icon" href="image/icon.png">
    <title>SegundaBooks</title>
</head>
<body>
<?php
	session_start();
	if (!empty($_SESSION["authenticated"]) && $_SESSION["authenticated"] === TRUE) {
		$user = $_SESSION["user"];
	}
?>
<div class="container-fluid">
<?php include 'login_info.php' ?>
</div>
<div class="container-fluid">
<?php include 'nav_bar.php' ?>
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