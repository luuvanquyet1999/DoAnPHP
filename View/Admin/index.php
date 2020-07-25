<?php
if (!isset($_SESSION)) {
  session_start();
}
?>
<?php
if (!isset($_SESSION["username"])) {
  echo "<script type='text/javascript'>alert('Vui lòng bạn đăng nhập tài khoản Admin');</script>";
  header('Location: index.php?c=Login&a=View');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="View/Admin/images/favicon.ico" type="image/ico" />

  <title>Gentelella Alela! | </title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="asset/vendors/bootstrap/dist/css/bootstrap.min.css">
  <!-- <link href="./asset/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> -->
  <!-- Font Awesome -->
  <link href="asset/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="asset/vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- iCheck -->
  <link href="asset/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

  <!-- bootstrap-progressbar -->
  <link href="asset/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
  <!-- JQVMap -->
  <!-- <link href="vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" /> -->
  <!-- bootstrap-daterangepicker -->
  <link href="asset/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="asset/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="?c=AdminIndex&a=View" class="site_title"><i class="fa fa-paw"></i> <span>ADMINISTRATOR</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="View/Admin/images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <?php
              // Echo session variables that were set on previous page
              echo "<h2>" . $_SESSION["username"] . "</h2>";
              ?>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Home</a>
                </li>
                <li><a><i class="fa fa-edit"></i> Quản lý Website <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="?c=Slide&a=View">Slide</a></li>
                    <li><a href="?c=Contact&a=View">Liên hệ</a></li>
                    <li><a href="?c=Category&a=View">Nhóm bài viết</a></li>
                    <li><a href="?c=Post&a=View">Bài viết</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-desktop"></i> Quản lý tài khoản <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="?c=useradmin&a=View">Tài khoản Admin</a></li>
                    <li><a href="media_gallery.html">Tài khoản khách hàng</a></li>
                  </ul>
                </li>

              </ul>
            </div>

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="?c=Login&a=Logout">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>
      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
          </div>
          <nav class="nav navbar-nav">
            <ul class=" navbar-right">
              <li class="nav-item dropdown open" style="padding-left: 15px;">
                <a href="javascript:;" class="user-profile " aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                  <img src="View/Admin/images/img.jpg" alt="">
                  <?php
                  echo  $_SESSION["username"];
                  ?>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
        <!-- top tiles -->
        <div class="row" style="display: inline-block; width:100%">
          <div class="tile_count">
            <div class="col-lg-3  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Member</span>
              <div class="count green">2500</div>
            </div>
            <div class="col-lg-3  tile_stats_count">
              <span class="count_top"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Total Posts</span>
              <div class="count green">123.50</div>
            </div>
            <div class="col-lg-3  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
              <div class="count green">2,500</div>
            </div>
            <div class="col-lg-3  tile_stats_count">
              <span class="count_top"> <i class="fa fa-send"></i> Total Contacts</span>
              <div class="count green">4,567</div>
            </div>
          </div>
        </div>
        <!-- /top tiles -->

        <div class="row">
          <div class="col-md-12 col-sm-12 ">
            <div class="dashboard_graph">

              <div class="row x_title">
                <div class="col-md-6">
                  <h3>Network Activities <small>Graph title sub-title</small></h3>
                </div>
              </div>

              <div class="col-md-9 col-sm-9 ">
                <div id="chart_plot_01" class="demo-placeholder"></div>
              </div>
              <div class="col-md-3 col-sm-3  bg-white">
                <div class="x_title">
                  <h2>Top Campaign Performance</h2>
                  <div class="clearfix"></div>
                </div>

                <div class="col-md-12 col-sm-12 ">
                  <div>
                    <p>Facebook Campaign</p>
                    <div class="">
                      <div class="progress progress_sm" style="width: 76%;">
                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="80"></div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <p>Twitter Campaign</p>
                    <div class="">
                      <div class="progress progress_sm" style="width: 76%;">
                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 col-sm-12 ">
                  <div>
                    <p>Conventional Media</p>
                    <div class="">
                      <div class="progress progress_sm" style="width: 76%;">
                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="40"></div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <p>Bill boards</p>
                    <div class="">
                      <div class="progress progress_sm" style="width: 76%;">
                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

              <div class="clearfix"></div>
            </div>
          </div>

        </div>
        <br />
      </div>
      <!-- /page content -->

      <!-- footer content -->
      <footer>
        <div class="pull-right">
          Administrator <i class="fa fa-copyright" aria-hidden="true"></i> Copyright by <a href="https://www.facebook.com/nhoccute.huynh.7">LocFuHo teams</a>
        </div>
        <div class="clearfix"></div>
      </footer>

      <!-- /footer content -->
    </div>
  </div>

  <!-- jQuery -->
  <script src="asset/vendors/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="asset/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- FastClick -->
  <script src="asset/vendors/fastclick/lib/fastclick.js"></script>
  <!-- NProgress -->
  <script src="asset/vendors/nprogress/nprogress.js"></script>
  <!-- Chart.js -->
  <script src="asset/vendors/Chart.js/dist/Chart.min.js"></script>
  <!-- gauge.js -->
  <script src="asset/vendors/gauge.js/dist/gauge.min.js"></script>
  <!-- bootstrap-progressbar -->
  <script src="asset/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
  <!-- iCheck -->
  <script src="asset/vendors/iCheck/icheck.min.js"></script>
  <!-- Skycons -->
  <script src="asset/vendors/skycons/skycons.js"></script>
  <!-- Flot -->
  <script src="asset/vendors/Flot/jquery.flot.js"></script>
  <script src="asset/vendors/Flot/jquery.flot.pie.js"></script>
  <script src="asset/vendors/Flot/jquery.flot.time.js"></script>
  <script src="asset/vendors/Flot/jquery.flot.stack.js"></script>
  <script src="asset/vendors/Flot/jquery.flot.resize.js"></script>
  <!-- Flot plugins -->
  <script src="asset/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
  <script src="asset/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
  <script src="asset/vendors/flot.curvedlines/curvedLines.js"></script>
  <!-- DateJS -->
  <script src="asset/vendors/DateJS/build/date.js"></script>
  <!-- JQVMap -->
  <script src="asset/vendors/jqvmap/dist/jquery.vmap.js"></script>
  <script src="asset/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="asset/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
  <!-- bootstrap-daterangepicker -->
  <script src="asset/vendors/moment/min/moment.min.js"></script>
  <script src="asset/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

  <!-- Custom Theme Scripts -->
  <script src="asset/build/js/custom.min.js"></script>

</body>

</html>