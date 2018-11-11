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
  <link rel="stylesheet" href="styles/editcategory.css" />
  <?php require_once 'stylesheets.php' ?>

  <title>SegundaBooks</title>
  <style>
  
  </style>
</head> 
<body class="nav-md">
  <div class="container body" id="container_body">
    <div class="main_container" id="container_body">

      <!-- Side Bar -->
        <?php require_once 'sidebar.php' ?>
      <!-- /Side Bar -->

      <!-- top navigation -->   
        <?php require_once 'top_nav.php' ?>
      <!-- /top navigation -->

      <!-- page content -->


        <!-- top tiles -->
        <!-- /top tiles -->
      <div class="right_col" role="main">

        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="dashboard_graph" id="dashboard_graph">
              <div class="row x_title" id="rowx_title">
                <!-- <div class="col-md-6"> -->
                  <h3>Edit Book Category</h3>
                  <div>
                    <div class="under-edit-book-category">
                    </div>
                  <?php 
                    require_once 'db_categories.php';

                    if(isset($_GET["id"]) && array_key_exists("id", $_GET)){
                      $category = get_category($_GET["id"]);
                    } 
                  ?> 
                  <form action="submit_edit_category.php" method="POST" >
                    <span id="category-name">Category Name:</span>
                    <input type="hidden" name="id" value="<?php echo $category["id"]; ?>" />
                    <input type="text" name="category_name" value="<?php echo $category["category_name"]; ?>" id="category_name" />
                  </div>
                  <div>
                  <input type="submit" name="savechanges" value="Save Changes" class="submit"> <input type="button" name="cancel" value="Cancel" class="cancel">
                  </div>
                  </form>
                  <?php require_once 'js_scripts.php'; ?>
</body>
</html>