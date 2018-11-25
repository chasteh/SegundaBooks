
<?php include_once '../index.php' ?>
<?php include_once '../Customer/db_books.php' ?>
<?php include_once '../Admin/db_users.php' ?>
<?php session_start();
$userid = $_SESSION["id"] ?? 0;
$user = get_user($userid);
if ($userid == 0) {
  header("Location: signin.php");
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

  img{
    height: 250px;
    width: 250px;
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
$books = get_books_by_user($userid);
$sold_books = get_no_of_sold_items($userid);
$reserved_books = get_no_of_reserved_items($userid);
?>
<div class="container">
  <div class="row">
    <div class="col-sm-3">
    <div style="border:1px solid lightgray;border-radius:10px;margin-bottom:5px;margin-top:10px;">
        <p style="text-align:center;"><b>Profile</b></p>
        <div>
        <img src="../image/profile.png" style="width:100px;height:100px;">
        <div><p style="color:black;"></p></div>
          <div style="position:absolute;top:50px;left:40%;">  <p><?php echo $user["full_name"]; ?></p>
            <p><?php echo $user["contact_number"]; ?></p>
            <input type="button" value="Settings" style="background-color:#6697A7;color:white;border:none;margin-left:30%;">
            </div>
        </div>
        
    </div>
    <!-- Second-->
    <div style="border:1px solid lightgray;border-radius:10px;margin-bottom:5px;text-align:center;">
   <label style="color:black;margin-right:5px;">No. of Sold Items:</label><label style="color:black;"> <?php echo $sold_books; ?> </label>
   <label style="color:black;">No. of Reserved Items: </label><label style="color:black;"> <?php echo $reserved_books; ?> </label>
   </div>
    </div>
    <!-- column 2 -->
    <div class="col-sm-9">
    <div class="container">
    <h2>Book List</h2>
    <?php
    //Columns must be a factor of 12 (1,2,3,4,6,12)
    $numOfCols = 3;
    $rowCount = 0;
    $bootstrapColWidth = 12 / $numOfCols;
    ?>
    <div class="row">
    <?php
    foreach ($books as $b){
    ?>  
            <div class="col-md-<?php echo $bootstrapColWidth; ?>">
		<a href="bookdetails.php?id=<?php echo $b["id"]; ?>">
            <div class="card" style="width:200px">
                <img class="card-img-top" src="<?php echo $b["picture_path"]; ?>" alt="Book image">
                <div class="card-body"> 
                    <h4 class="card-title">Title: <?php echo $b["book_title"]; ?></h4>
                    <p class="card-text">Price: &#8369;<?php echo $b["price"]; ?> <br> Status: <?php echo $b["status"] ?></p>
					          <a href="bookdetails.php?id=<?php echo $b["id"]; ?>" class="btn btn-primary">See Book Details</a>					
                </div>
            </div>
		</a>
            </div>
    <?php
        $rowCount++;
        if($rowCount % $numOfCols == 0) echo '</div><div class="row">';
    }
    ?>
    </div>
</div>	
			
			</div>	
        </div>		
    </div>
    </div>
  </div>
</div>
</body>
</html>