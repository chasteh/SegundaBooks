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
  <link rel="stylesheet" href="styles/categories.css" />
  <?php require_once 'stylesheets.php' ?>

  <title>SegundaBooks</title>
  
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
          <!-- sidebar menu -->
          <?php require_once 'sidebar.php' ?>
          <!-- /sidebar menu -->
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
            <div class="dashboard_graph">
              <div class="row x_title">
                <!-- <div class="col-md-6"> -->
                  <h3 style="color:black;">Book Category</h3>
                  <a href="addcategory.php"><input type="button" value="Add Category" class="add-category"/></a>
                  <table class="table table-striped" id="categoryTable">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Number of book</th>
                      </tr>
                    </thead>
                    <tbody>
                       <?php
                          require_once 'db_categories.php';

                          $categories = get_categories();

                          while ($row = $categories->fetch_assoc()) { ?>
                              <tr>
                                <td>
                                  <a href="editcategory.php?id=<?php echo $row["id"]; ?>">
                                     <?php echo $row["category_name"]; ?> 
                                  </a>
                                </td>
                                <td><?php echo $row["count_of_books"] ?></td>
                              </tr>
                          <?php } ?>
                    </tbody>
                  </table>

                </div>

                <!-- footer content -->
                </div>      
           </div>                                                                                      
          </div>        
              <?php require_once 'js_scripts.php'; ?>
              <script>
                $(document).ready(function () {
                  $('#categoryTable').DataTable();
                });
              </script>
</body>
</html>