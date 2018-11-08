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
                <h3 style="color:black;">Edit User</h3>
                <form action="submit_edit_user.php" method="POST">
                <?php 
                require_once 'db_users.php';
                if(isset($_GET["id"]) && array_key_exists("id", $_GET)){
                      $user = get_user($_GET["id"]);
                } 
                ?>
                    <div style="border:1px sol'id lightgray;margin-top:2%;margin-bottom:3%;"></div>
                    <input type="hidden" name="userid" value='<?php echo $user["user_id"]; ?>'>
                    <span style="color:black;margin-right:10px;margin-top:10px;margin-left:10%;">Name:</span>
                    <input type="text" name="name" value='<?php echo $user["full_name"]; ?>' style="border:1px solid black;border-radius:5px;width:20%;margin-bottom:5%;">
                    <div></div>
                    <span style="color:black;margin-right:10px;margin-top:10px;margin-left:8%;">Username:</span>
                    <input type="text" name="username" value='<?php echo $user["user_name"]; ?>' style="border:1px solid black;border-radius:5px;width:20%;margin-bottom:5%;">
                    <div></div>
                    <span style="color:black;margin-right:10px;margin-top:10px;margin-left:8%;">Password:</span>
                    <input type="password" name="password" value='<?php echo $user["password"]; ?>' style="border:1px solid black;border-radius:5px;width:20%;margin-bottom:5%;">
                    <div></div>
                    <span style="color:black;margin-right:10px;margin-top:10px;margin-left:4%;">Contact Number:</span>
                    <input type="text" name="contactnumber" value='<?php echo $user["contact_number"]; ?>' style="border:1px solid black;border-radius:5px;width:20%;margin-bottom:5%;">
                    <div></div>
                  </div>
                  <div>
                    <input type="submit" name="savechanges" value="Save Changes" style="background-color:#6697A7;color:white;border:none;border-radius:8px;height:30px;width:110px;margin-left:15%;margin-right:3%;">
                    <input type="button" name="cancel" value="Cancel" style="background-color:transparent;color:black;border:1px solid black;border-radius:8px;height:30px;width:110px;">
                  </div>
                </form>
                <?php require_once 'js_scripts.php';?>
</body>

</html>