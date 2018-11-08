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
  <?php require_once 'stylesheets.php' ?>
  <title>SegundaBooks</title>
  <style>
  </style>
</head>
<body class="nav-md">
  <div class="container body">
    <div class="main_container" style="background-color:#6697A7;">  
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
          <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count" style="border:1px solid black;margin-right:10%;width:auto;margin-left:10px;margin-top:1%;">
            <div class="count" style="color:black;"><img src="../image/icon/Users.png" style="width:150px;height:100px;">56</div>
            <span class="count_top" style="color:black;">Total Users</span>
          </div>
          <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count" style="border:1px solid black;margin-right:10%;width:auto;margin-top:1%;margin-left:10px;">
            <div class="count" style="color:black;"><img src="../image/icon/TotalBooks.png" style="width:133px;height:100px;">210</div>
            <span class="count_top" style="color:black;">Total Selling Books</span>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" style="border:1px solid black;margin-right:10px;width:auto;margin-top:1%;margin-left:10px;">

            <div class="count black" style="color:black;"><img src="../image/icon/TotalBooks.png" style="width:167px;height:100px;">8</div>
            <span class="count_top" style="color:black;">Total Book Categories</span>
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