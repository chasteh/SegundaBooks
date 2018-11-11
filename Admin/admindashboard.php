<?php include_once '../index.php' ?>
<?php include_once 'db_users.php' ?>
<?php
	session_start();
	if (!empty($_SESSION["authenticated"]) && $_SESSION["authenticated"] === TRUE) {
		$user = get_user($_SESSION["id"]);
	}
?>

<!DOCTYPE html>
<html lang="en" style="background-color:white;">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/favicon.ico" type="image/ico" />
  <link rel="icon" href="image/icon.png">
  <link rel="stylesheet" href="styles/admindashboard.css" />
  <?php require_once 'stylesheets.php' ?>
  <title>SegundaBooks</title>
  <style>
    
  </style>
</head>
<body class="nav-md">
  <div class="container body">
    <div class="main_container">  
        <!-- Side bar -->
        <?php require_once 'sidebar.php' ?>
        <!-- /Side Bar -->
      <!-- top navigation -->
        <?php require_once 'top_nav.php' ?>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
        <!-- top tiles -->
        <div class="row tile_count">
          <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count" id="icon">
            <div class="count" id="count"><img src="../image/icon/Users.png" class="image">56</div>
            <span class="count_top" id="count">Total Users</span>
          </div>
          <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count" id="icon">
            <div class="count" id="count"><img src="../image/icon/TotalBooks.png" class="image">210</div>
            <span class="count_top" id="count">Total Selling Books</span>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" id="icon">

            <div class="count count" id="count"><img src="../image/icon/TotalBooks.png" class="image">8</div>
            <span class="count_top" id="total-book-categories">Total Book Categories</span>
          </div>
        </div>
        <!-- /top tiles -->

        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="dashboard_graph">

              <div class="row x_title">
                <div class="col-md-6">
                  <h3>Sales per month</h3>


                </div>


                <!-- footer content -->

              </div>
              <?php require_once 'js_scripts.php'; ?>
</body>
</html>