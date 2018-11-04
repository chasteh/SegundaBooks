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
  
  table{
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
    color:black;
}

  th{
    text-align:center;
    border-bottom: 1px solid lightgray;
  }
	tr{
		text-align:center;
	}
  tr td{
    text-align:center;
  }
	p{
		color:black; 
		font-weight:normal;
		margin-left:20px;
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

<div class="container">
  <div class="row">
    <div class="col-sm-3">
    <div style="border:1px solid lightgray;border-radius:10px;margin-bottom:5px;margin-top:10px;">
        <p style="text-align:center;"><b>Profile</b></p>
        <div>
        <img src="../image/profile.png" style="width:100px;height:100px;">
        <div><p style="color:black;"><?php echo $book["full_name"]; ?></p></div>
          <div style="position:absolute;top:50px;left:40%;">  <p>Full Name</p>
            <p>Mobile Number</p>
            <input type="button" value="Settings" style="background-color:#6697A7;color:white;border:none;margin-left:30%;">
            </div>
        </div>
        
    </div>
    <!-- Second-->
    <div style="border:1px solid lightgray;border-radius:10px;margin-bottom:5px;text-align:center;">
   <label style="color:black;margin-right:5px;">No. of Sold Items:</label><label style="color:black;">4</label>
   <label style="color:black;">No. of Reserved Items:</label><label style="color:black;">3</label>
   </div>
    <!-- /Second-->
    
    <!-- Third -->
    <table style="position:relative;right:200px;">
      <tr>
        <th>Book Title</th>
        <th>No of Offers</th>
      </tr>
      <tr>
        <td>Programming 1</td>
        <td>5</td>
      </tr>
      <tr>
        <td>Programming 2</td>
        <td>11</td>
      </tr>
      <tr>
        <td>Programming 3</td>
        <td>7</td>
      </tr>
    </table>
    <!-- /Third-->
    </div>
    <!-- column 2 -->
    <div class="col-sm-9">
    <h3>Book List</h3>
				<div style="border-bottom:1px solid lightgray;"></div>
				<div style="margin-right:8%;margin-top:2%;margin-bottom:2%;"></div>

				<table style="width:100%;" align="right">
					<tbody>
						<tr>
							<td><a href="#"><img src="../image/book0.jpg" style="width:125px;height:175px;margin-bottom:10px;margin-top:10px;"></a></td>
							<td>
								<p>Title: Programming IV book for Senior Highschool 2nd Ed</p>
								<p>Status: Slightly Used</p>
								<p>Price: $120.00</p>
							</td>
						</tr>
						<tr>
							<td><img src="../image/book1.jpg" style="width:125px;height:175px;"></td>
							<td>
								<p>Title: Programming IV book for Senior Highschool 2nd Ed</p>
								<p>Status: Slightly Used</p>
								<p>Price: $120.00</p>
							</td>
						</tr>
					</tbody>
				</table>
				<?php foreach($books as $b): ?>
				<img src="<?php echo  "../Customer/userbookimages/".$b["user_id"]."/".basename($b["picture_path"]); ?>" style="width:100px;height:150px;">

				
				<?php endforeach; ?>
				
				<!-- <div class="row" style="margin-bottom:10px;">
					<div class="col-sm-3">
						<a href="#"><img src="../image/book0.jpg" style="width:125px;height:175px;"></a>
					</div>
					<div class="col-md-8" style="margin-top:5%;margin-left:-50px;">
						<p style="color:black;">
							Title: Programming IV book for Senior Highschool 2nd Ed
						</p>
						<p style="color:black;">
							Slightly Used
						</p>
						<p style="color:black;">
							$120.00
						</p>
					</div>
				</div> -->
			</div>	
        </div>		
    </div>
    </div>
  </div>
</div>
</body>
</html>