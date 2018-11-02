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
          <?php require_once 'sidebar.php'?>
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