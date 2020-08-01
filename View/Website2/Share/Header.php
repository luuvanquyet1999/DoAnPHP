    <!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="PONIGYM Template">
    <meta name="keywords" content="PONIGYM, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PONIGYM | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="view/website2/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="view/website2/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="view/website2/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="view/website2/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="view/website2/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="view/website2/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="view/website2/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div style="background-color: #f9f8fa91" class="container">
            <div class="nav-menuu"  style='margin-right: 0px;width: 300px;'>
                <nav class="mainmenuu mobile-menu">
                    <ul style="margin:20px;">
                    <?php
                                            if(!isset($_SESSION["websiteusername"]))
                                            echo"   <li class='active'><a href='index.php?c=LoginDefault&a=View'>Đăng Nhập</a></li>
                                            <li><a href='index.php?c=RegisterDefault&a=View'>Đăng Kí</a></li>";
                                            else {
                                                echo "<li class='active' style='margin-right:20px'><a href=''> Welcome! " .  $_SESSION["websiteusername"]."</a></li>".
                                               "<li><a href='index.php?c=Logindefault&a=Logout'>Đăng Xuất</a></li>" ;
                                            }
                                        ?>
                      
                    </ul>


                </nav>


            </div>

            <div class="nav-menu">
                <nav class="mainmenu mobile-menu">
                    <ul style="margin:20px;">
                        <li class="active"><a href="./index.html">Trang Chủ</a></li>
                        <li><a href="./Gioithieu.html">Giới Thiệu</a></li>
                        <li><a href="./Tinmoi.html">Tin Mơi</a></li>
                        <li><a href="./theloai.html">Thể Loại</a>
                            <ul class="dropdown">
                                <li><a href="theloai.html">Thời Trang</a></li>
                            </ul>

                        </li>
                        <li><a href="./Lienhe.html">Liên Hệ</a></li>


                    </ul>

                </nav>
                <div class="nav-right search-switch">
                    <i class="ti-search"></i>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->