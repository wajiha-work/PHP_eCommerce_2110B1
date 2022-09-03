<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>J Store Admin | <?php echo $title; ?></title>
    <link rel="icon" href="../Templates/Admin/img/mini_logo.png" type="image/png">

    <!-- scripts for head -->
    <script>
        <?php
        if (isset($headScript) && !empty($headScript)) {
            echo $headScript;
        }
        ?>
    </script>

    <!-- link elements for head -->
    <?php
    if (isset($headList) && !empty($headList)) {
        foreach ($headList as $fileName) {
            echo $fileName;
        }
    }
    ?>

    <!-- internal style -->
    <style type="text/css">
        <?php
        if (isset($style) && !empty($style)) {
            echo $style;
        }
        ?>
    </style>
</head>

<body class="crm_body_bg">


    <nav class="sidebar">
        <div class="logo d-flex justify-content-between">
            <a class="large_logo" href="index.html"><img src="../Templates/Admin/img/logo.png" alt=""></a>
            <a class="small_logo" href="index.html"><img src="../Templates/Admin/img/mini_logo.png" alt=""></a>
            <div class="sidebar_close_icon d-lg-none">
                <i class="ti-close"></i>
            </div>
        </div>
        <ul id="sidebar_menu">
            <?php
            if (!isset($_SESSION["admin_id"])) {
            ?>
                <li class="">
                    <a href="register.php" aria-expanded="false">
                        <div class="nav_icon_small">
                            <img src="../Templates/Admin/img/menu-icon/4.svg" alt="">
                        </div>
                        <div class="nav_title">
                            <span>Register</span>
                        </div>
                    </a>
                </li>
                <li class="">
                    <a href="login.php" aria-expanded="false">
                        <div class="nav_icon_small">
                            <img src="../Templates/Admin/img/menu-icon/8.svg" alt="">
                        </div>
                        <div class="nav_title">
                            <span>Login</span>
                        </div>
                    </a>
                </li>

            <?php
            }
            ?>

            <?php
            if (isset($_SESSION["admin_id"])) {
            ?>
                <li class="">
                    <a href="index.php" aria-expanded="false">
                        <div class="nav_icon_small">
                            <img src="../Templates/Admin/img/menu-icon/4.svg" alt="">
                        </div>
                        <div class="nav_title">
                            <span>Dashboard</span>
                        </div>
                    </a>
                </li>
                <li class="">
                    <a class="has-arrow" href="#" aria-expanded="false">
                        <div class="nav_icon_small">
                            <img src="../Templates/Admin/img/menu-icon/dashboard.svg" alt="">
                        </div>
                        <div class="nav_title">
                            <span>Products </span>
                        </div>
                    </a>
                    <ul>
                        <li><a href="add_product.php">Add Product</a></li>
                        <li><a href="products.php">All Products</a></li>
                    </ul>
                </li>
                <hr>
                <li class="">
                    <a href="edit_profile.php" aria-expanded="false">
                        <div class="nav_icon_small">
                            <img src="../Templates/Admin/img/menu-icon/8.svg" alt="">
                        </div>
                        <div class="nav_title">
                            <span>Edit Profile</span>
                        </div>
                    </a>
                </li>
                <li class="">
                    <a href="#" onclick="LogoutAdmin()" aria-expanded="false">
                        <div class="nav_icon_small">
                            <img src="../Templates/Admin/img/menu-icon/8.svg" alt="">
                        </div>
                        <div class="nav_title">
                            <span>Logout</span>
                        </div>
                    </a>
                </li>

            <?php
            }
            ?>
        </ul>
    </nav>

    <section class="main_content dashboard_part large_header_bg">

        <div class="container-fluid g-0">
            <div class="row">
                <div class="col-lg-12 p-0 ">
                    <div class="header_iner d-flex justify-content-between align-items-center">
                        <div class="sidebar_icon d-lg-none">
                            <i class="ti-menu"></i>
                        </div>
                        <div class="line_icon open_miniSide d-none d-lg-block">
                            <img src="../Templates/Admin/img/line_img.png" alt="">
                        </div>
                        <div class="serach_field-area d-flex align-items-center">
                            <div class="search_inner">
                                <form action="#">
                                    <div class="search_field">
                                        <input type="text" placeholder="Search">
                                    </div>
                                    <button type="submit"> <img src="../Templates/Admin/img/icon/icon_search.svg" alt=""> </button>
                                </form>
                            </div>
                        </div>
                        <div class="header_right d-flex justify-content-between align-items-center">
                            <div class="header_notification_warp d-flex align-items-center">
                                <li>
                                    <a title="Register" href="register.php"> <img src="../Templates/Admin/img/menu-icon/4.svg" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a title="Login" href="login.php"> <img src="../Templates/Admin/img/menu-icon/8.svg" alt="">
                                    </a>
                                </li>

                                <li>
                                    <a class="bell_notification_clicker" href="#"> <img src="../Templates/Admin/img/icon/bell.svg" alt="">
                                        <span>2</span>
                                    </a>

                                    <div class="Menu_NOtification_Wrap">
                                        <div class="notification_Header">
                                            <h4>Notifications</h4>
                                        </div>
                                        <div class="Notification_body">

                                            <div class="single_notify d-flex align-items-center">
                                                <div class="notify_thumb">
                                                    <a href="#"><img src="../Templates/Admin/img/staf/2.png" alt=""></a>
                                                </div>
                                                <div class="notify_content">
                                                    <a href="#">
                                                        <h5>Cool Marketing </h5>
                                                    </a>
                                                    <p>Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </div>

                                            <div class="single_notify d-flex align-items-center">
                                                <div class="notify_thumb">
                                                    <a href="#"><img src="../Templates/Admin/img/staf/4.png" alt=""></a>
                                                </div>
                                                <div class="notify_content">
                                                    <a href="#">
                                                        <h5>Awesome packages</h5>
                                                    </a>
                                                    <p>Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </div>

                                            <div class="single_notify d-flex align-items-center">
                                                <div class="notify_thumb">
                                                    <a href="#"><img src="../Templates/Admin/img/staf/3.png" alt=""></a>
                                                </div>
                                                <div class="notify_content">
                                                    <a href="#">
                                                        <h5>what a packages</h5>
                                                    </a>
                                                    <p>Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </div>

                                            <div class="single_notify d-flex align-items-center">
                                                <div class="notify_thumb">
                                                    <a href="#"><img src="../Templates/Admin/img/staf/2.png" alt=""></a>
                                                </div>
                                                <div class="notify_content">
                                                    <a href="#">
                                                        <h5>Cool Marketing </h5>
                                                    </a>
                                                    <p>Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </div>

                                            <div class="single_notify d-flex align-items-center">
                                                <div class="notify_thumb">
                                                    <a href="#"><img src="../Templates/Admin/img/staf/4.png" alt=""></a>
                                                </div>
                                                <div class="notify_content">
                                                    <a href="#">
                                                        <h5>Awesome packages</h5>
                                                    </a>
                                                    <p>Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </div>

                                            <div class="single_notify d-flex align-items-center">
                                                <div class="notify_thumb">
                                                    <a href="#"><img src="../Templates/Admin/img/staf/3.png" alt=""></a>
                                                </div>
                                                <div class="notify_content">
                                                    <a href="#">
                                                        <h5>what a packages</h5>
                                                    </a>
                                                    <p>Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nofity_footer">
                                            <div class="submit_button text-center pt_20">
                                                <a href="#" class="btn_1">See More</a>
                                            </div>
                                        </div>
                                    </div>

                                </li>
                                <li>
                                    <a class="CHATBOX_open" href="#"> <img src="../Templates/Admin/img/icon/msg.svg" alt=""> <span>2</span>
                                    </a>
                                </li>
                            </div>
                            <div class="profile_info">
                                <img src="../Templates/Admin/img/client_img.png" alt="#">
                                <div class="profile_info_iner">
                                    <div class="profile_author_name">
                                        <p>Neurologist </p>
                                        <h5>Dr. Robar Smith</h5>
                                    </div>
                                    <div class="profile_info_details">
                                        <a href="#">My Profile </a>
                                        <a href="#">Settings</a>
                                        <a href="#">Log Out </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>