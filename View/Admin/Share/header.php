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
                    <li><a href="?c=AdminIndex&a=View"><i class="fa fa-home"></i> Home</a>
                    </li>
                    <li><a><i class="fa fa-edit"></i> Quản lý Website <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="?c=AdminSlide&a=View">Slide</a></li>
                            <li><a href="?c=ContactDefault&a=View">Liên hệ</a></li>
                            <!-- <li><a href="?c=AdminCategory&a=View">Nhóm bài viết</a></li> -->
                            <li><a href="?c=AdminPost&a=View">Bài viết</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-desktop"></i> Quản lý tài khoản <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="?c=useradmin&a=View">Tài khoản Admin</a></li>
                            <li><a href="media_gallery.html">Tài khoản khách hàng</a></li>
                        </ul>
                    </li>
                    <li><a href="?c=Contact&a=View"><i class="fa fa-location-arrow"></i> Thông tin liên hệ</a>
                </ul>
            </div>
        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
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
                    <a href="javascript:;" class="user-profile" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
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