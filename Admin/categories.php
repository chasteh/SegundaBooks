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
    table tr td a:hover{
	color:#264c51;
}
  </style>
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container" style="background-color:#6697A7;">
      <div class="col-md-3 left_col" style="background-color:#6697A7;">
        <div class="left_col scroll-view" style="background-color:#6697A7;">
          <div class="navbar nav_title" style="border: 0;background-color:#6697A7;">
            <a href="index.html" class="site_title"><img src="../image/icon/icon.png" style="width:210px;height:50px;"></a>
          </div>
          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="../image/profile.png" style="width:50px;height:50px;" class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span style="font-family:">Welcome,</span>
              <h2>Admin</h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <?php require_once 'sidebar.php' ?>
        </div>
      </div>

      <!-- top navigation -->   
      <div class="top_nav">
        <div class="nav_menu" style="background-color:#6697A7">
          <nav>
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <img src="images/img.jpg" alt="">Admin
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <li><a href="javascript:;"> Profile</a></li>
                  <li>
                    <a href="javascript:;">
                      <span class="badge bg-red pull-right">50%</span>
                      <span>Settings</span>
                    </a>
                  </li>
                  <li><a href="javascript:;">Help</a></li>
                  <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                </ul>
              </li>
              </a>
              <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                <li>
                  <a>
                    <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                    <span>
                      <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                    </span>
                    <span class="message">
                      Film festivals used to be do-or-die moments for movie makers. They were where...
                    </span>
                  </a>
                </li>
                <li>
                  <a>
                    <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                    <span>
                      <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                    </span>
                    <span class="message">
                      Film festivals used to be do-or-die moments for movie makers. They were where...
                    </span>
                  </a>
                </li>
                <li>
                  <a>
                    <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                    <span>
                      <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                    </span>
                    <span class="message">
                      Film festivals used to be do-or-die moments for movie makers. They were where...
                    </span>
                  </a>
                </li>
                <li>
                  <a>
                    <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                    <span>
                      <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                    </span>
                    <span class="message">
                      Film festivals used to be do-or-die moments for movie makers. They were where...
                    </span>
                  </a>
                </li>
                <li>
                  <div class="text-center">
                    <a>
                      <strong>See All Alerts</strong>
                      <i class="fa fa-angle-right"></i>
                    </a>
                  </div>
                </li>
              </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
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
                  <a href="addcategory.php"><input type="button" value="Add Category" style="background-color:#6697A7;border-radius:7px;color:white;border:0;width:13%;height:40px;margin-bottom:30px;margin-top:30px;margin-left:30px;"/>
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

                          while ($row = $categories->fetch_assoc()) {
                              echo "<tr>";
                              echo  "<td>" . $row["category_name"] . "</td>";
                              echo  "<td>" . $row["count_of_books"] . "</td>";
                              echo "</tr>";
                          }
                       ?>
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
                  $('#categoryTable').DataTable();
                });
              </script>
</body>
</html>