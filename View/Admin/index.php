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

  <title>ADINISTRATOR </title>

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
      <?php
      include_once('./View/Admin/Share/header.php');
      ?>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
        <!-- top tiles -->
        <div class="row" style="display: inline-block; width:100%">
          <div class="tile_count">
            <div class="col-lg-3  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Member</span>
              <div class="count green">
                <?php
                $mysql = new mysqli('112.78.2.94', 'super_tranducbo', 'abc123#!', 'superfr_tranducbo');
                $query = "SELECT count(*) FROM lph_adiminuser WHERE Active =1";
                $result = $mysql->query($query);
                while ($row = mysqli_fetch_array($result)) {
                  if ($row[0] < 10) {
                    echo '0' . $row[0];
                  } else
                    echo $row[0];
                }
                ?>
              </div>
            </div>
            <div class="col-lg-3  tile_stats_count">
              <span class="count_top"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Total Posts</span>
              <div class="count green">
                <?php
                $mysql = new mysqli('112.78.2.94', 'super_tranducbo', 'abc123#!', 'superfr_tranducbo');
                $query = "SELECT count(*) FROM lph_post WHERE Active =1";
                $result = $mysql->query($query);
                while ($row = mysqli_fetch_array($result)) {
                  if ($row[0] < 10) {
                    echo '0' . $row[0];
                  } else
                    echo $row[0];
                }
                ?>
              </div>
            </div>
            <div class="col-lg-3  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
              <div class="count green">
                <?php
                $mysql = new mysqli('112.78.2.94', 'super_tranducbo', 'abc123#!', 'superfr_tranducbo');
                $query = "SELECT count(*) FROM lph_customer WHERE Active =1";
                $result = $mysql->query($query);
                while ($row = mysqli_fetch_array($result)) {
                  if ($row[0] < 10) {
                    echo '0' . $row[0];
                  } else
                    echo $row[0];
                }
                ?>
              </div>
            </div>
            <div class="col-lg-3  tile_stats_count">
              <span class="count_top"> <i class="fa fa-send"></i> Total Contacts</span>
              <div class="count green">
                <?php
                $mysql = new mysqli('112.78.2.94', 'super_tranducbo', 'abc123#!', 'superfr_tranducbo');
                $query = "SELECT count(*) FROM lph_sendcontact ";
                $result = $mysql->query($query);
                while ($row = mysqli_fetch_array($result)) {
                  if ($row[0] < 10) {
                    echo '0' . $row[0];
                  } else
                    echo $row[0];
                }
                ?>
              </div>
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
      <?php
      include_once('./View/Admin/Share/footer.php');
      ?>

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