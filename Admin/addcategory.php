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
  <link rel="stylesheet" href="styles/addcategory.css" />
  <?php require_once 'stylesheets.php' ?>
  <title>SegundaBooks</title>
</head>
<body class="nav-md">
  <div class="container body">
    <div class="main_container">

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
            <div class="dashboard_graph" id="dashboard_graph">
              <div class="row x_title" id="rowx_title">
                <h3 class="h3">Add New Book Category</h3>
                <form action="submit_add_category.php" method="POST">
                  <div>
                <!-- <div class="col-md-6"> -->
                    <div class="under-addnewbook-category"></div>
                    <span id="form-span">Category Name:</span>
                    <input type="text" name="category_name" id="form-text">
                  </div>
                  <div>
                    <input type="submit" name="savechanges" value="Save Changes" class="submit">
                    <input type="button" name="cancel" value="Cancel" class="cancel">
                  </div>
                </form>
                <?php require_once 'js_scripts.php';?>
</body>
</html>