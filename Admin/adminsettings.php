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

  <?php require_once 'stylesheets.php'?>

  <title>SegundaBooks</title>
</head>

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
                <h3 style="color:black;">SegundaBooks Settings</h3>
                <div style="border-bottom:1px solid gray;margin-top:36px;">
                </div>
                <label style="margin-left:10%;margin-top:3%;color:black;">Carousel Pictures</label>
                <form method="POST" action="upload_index_files.php" enctype="multipart/form-data">
                    <label style="float:left;margin-left:14%;color:black;">Picture 1: &nbsp; </label>
                    <input type="file" name="firstpic" style="float:left;">
                    <br/>
                    <br/>
                    <label style="float:left;margin-left:14%;color:black;">Picture 2:  &nbsp;</label>
                    <input type="file" name="secondpic" style="float:left;">
                    <br/>
                    <br/>
                    <label style="float:left;margin-left:14%;color:black;">Picture 3: &nbsp;</label>
                    <input type="file" name="thirdpic" style="float:left;">
                    <br/>
                    <br/>
                    <label style="margin-left:10%;margin-top:10px;font-size:16px;color:black;">Trending Books</label>
                  <div>
                    <input type="submit" name="savechanges" value="Save" style="background-color:#6697A7;color:white;border:none;border-radius:8px;height:30px;width:110px;margin-left:30%;margin-top:10%;">
                  </div>
                </form>
                <?php require_once 'js_scripts.php';?>
</body>

</html>