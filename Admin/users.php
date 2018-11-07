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

<body class="nav-md">
  <div class="container body">
    <div class="main_container" style="background-color:#6697A7;">


      <!-- Side Bar -->
      <?php require_once 'sidebar.php' ?>
        <!-- /Side Bar -->
      <!-- top navigation -->
        <?php require_once 'top_nav.php' ?>
      <!-- /top navigation -->

      


      <!-- Main content -->
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="dashboard_graph">
              <div class="row x_title" style="width:1000px;margin-left:250px;">
                <div class="col-md-6"> 
                <h3>Users</h3>
                <a href="adduser.php"><input type="button" value="Add User" style="background-color:#6697A7;border-radius:7px;color:white;border:0;width:13%;height:40px;margin-bottom:30px;margin-top:30px;margin-left:30px;"></a>
                <table class="table table-striped" id="usersTable">
                  <thead>
                    <tr>
                      <th>Username</th>
                      <th>Name</th>
                      <th>Contact Number</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                          require_once 'db_users.php';
                          $users = get_users();
                          while ($row = $users->fetch_assoc()) { ?>
                        <tr>
                          <td>
                                <a href="edituser.php?id=<?php echo $row["id"]; ?>">
                                  <?php echo $row["user_name"]; ?>
                                </a>
                          </td>
                          <td>
                              <?php echo $row["name"]; ?>
                          </td>
                          <td>
                              <?php echo $row["contact_number"]; ?>
                          </td>

                        </tr>
                    <?php } ?>
                  </tbody>
                </table>
                <!-- </div> -->

                <!-- footer content -->
              </div>
            </div>
          </div>
          <?php require_once 'js_scripts.php'; ?>
          <script>
            $(document).ready(function () {
              $('#usersTable').DataTable();
            });
          </script>
</body>
</html>