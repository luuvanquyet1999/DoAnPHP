<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrator</title>
    <?php
    include 'asset/Scripts/ScriptHeader.php';
    ?>

</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper">
        <?php
        include_once('./View/Admin/Share/Header.php');
        ?>
        <?php
        include_once('./View/Admin/Share/Menu.php');
        ?>
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-cyan text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                                <h6 class="text-white">Dashboard</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-success text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-chart-areaspline"></i></h1>
                                <h6 class="text-white">Charts</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-warning text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-collage"></i></h1>
                                <h6 class="text-white">Widgets</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-danger text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-border-outside"></i></h1>
                                <h6 class="text-white">Tables</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Team Debug</h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- column -->
                                    <div class="col-lg-9">
                                        <div class="flot-chart">
                                            <div class="img">
                                            <img src="view/Admin/images/team_debug.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="bg-dark p-10 text-white text-center">
                                                    <i class="fa fa-user m-b-5 font-16"></i>
                                                    <h5 class="m-b-0 m-t-5">
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
                                                    </h5>
                                                    <small class="font-light">Total Users</small>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="bg-dark p-10 text-white text-center">
                                                    <i class="fas fa-newspaper m-b-5 font-16"></i>
                                                    <h5 class="m-b-0 m-t-5">
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
                                                    </h5>
                                                    <small class="font-light">Total Posts</small>
                                                </div>
                                            </div>
                                            <div class="col-6 m-t-15">
                                                <div class="bg-dark p-10 text-white text-center">
                                                    <i class="fa fa-user m-b-5 font-16"></i>
                                                    <h5 class="m-b-0 m-t-5">
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
                                                    </h5>
                                                    <small class="font-light">Total Custome</small>
                                                </div>
                                            </div>
                                            <div class="col-6 m-t-15">
                                                <div class="bg-dark p-10 text-white text-center">
                                                    <i class="fa fa-paper-plane m-b-5 font-16"></i>
                                                    <h5 class="m-b-0 m-t-5">
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
                                                    </h5>
                                                    <small class="font-light">Total Contacts</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>

    </div>
    <?php
    include_once('./View/Admin/Share/Footer.php');
    ?>
    <?php
    include 'asset/Scripts/ScriptFooter.php';
    ?>
</body>

</html>