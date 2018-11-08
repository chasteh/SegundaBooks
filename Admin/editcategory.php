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
</head>
<?php session_start(); ?>
<body class="nav-md">
  <div class="container body">
    <div class="main_container" style="background-color:#6697A7;">

      <!-- Side Bar -->
        <?php require_once 'sidebar.php' ?>
      <!-- /Side Bar -->

      <!-- top navigation -->   
        <?php require_once 'top_nav.php' ?>
      <!-- /top navigation -->

      <!-- page content -->


      <div class="right_col" role="main">
        <!-- top tiles -->
        <div class="row tile_count">     
        </div>
        <!-- /top tiles -->

        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="dashboard_graph" style="height: 500px;">
              <div class="row x_title" style="border-bottom:none;">
                <!-- <div class="col-md-6"> -->
                  <h3 style="color:black;">Edit Book Category</h3>
                  <div>
                  <div style="border:1px solid lightgray;margin-top:2%;margin-bottom:3%;"></div>
                  <?php 
                    require_once 'db_categories.php';

                    if(isset($_GET["id"]) && array_key_exists("id", $_GET)){
                      $category = get_category($_GET["id"]);
                    } 
                  ?> 
                  <form action="submit_edit_category.php" method="POST" >
                    <span style="color:black;margin-right:10px;margin-top:10px;margin-left:3%;">Category Name:</span>
                    <input type="hidden" name="id" value="<?php echo $category["id"]; ?>" />
                    <input type="text" name="category_name" value="<?php echo $category["category_name"]; ?>" style="border:1px solid black;border-radius:5px;width:20%;margin-bottom:5%;" />
                  </div>
                  <div>
                  <input type="submit" name="savechanges" value="Save Changes" style="background-color:#6697A7;color:white;border:none;border-radius:8px;height:30px;width:110px;margin-left:10%;"> <input type="button" name="cancel" value="Cancel" style="background-color:transparent;color:black;border:1px solid black;border-radius:8px;height:30px;width:110px;">
                  </div>
                  </form>
                  <?php require_once 'js_scripts.php'; ?>
</body>
</html>