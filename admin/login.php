<?php
session_start();

if(isset($_SESSION["admin_id"]))
{
  header("location: index.php");
  exit;
}

$title = "Login";
$style = "
  ";

$headScript = "";

$headList = [
    '<link rel="stylesheet" href="../Templates/Admin/css/bootstrap1.min.css" />',

    '<link rel="stylesheet" href="../Templates/Admin/vendors/themefy_icon/themify-icons.css" />',
    '<link rel="stylesheet" href="../Templates/Admin/vendors/font_awesome/css/all.min.css" />',


    '<link rel="stylesheet" href="../Templates/Admin/vendors/scroll/scrollable.css" />',

    '<link rel="stylesheet" href="../Templates/Admin/css/metisMenu.css">',

    '<link rel="stylesheet" href="../Templates/Admin/css/style1.css" />',
    '<link rel="stylesheet" href="../Templates/Admin/css/colors/default.css" id="colorSkinCSS">',
];

include "../shared/Admin/head_include.php";
?>


<div class="main_content_iner ">
    <div class="container-fluid p-0">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="dashboard_header mb_50">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="dashboard_header_title">
                                <h3>Login as Admin</h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="dashboard_breadcam text-end">
                                <p><a href="register.php">Register Here</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="white_box mb_30">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">

                            <div class="modal-content cs_modal">
                                <div class="modal-header justify-content-center theme_bg_1">
                                    <h5 class="modal-title text_white">Log in</h5>
                                </div>
                                <div class="modal-body">
                                    <div id="success" class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;">
                                        <strong>Success: </strong> <span id="success_msg">You should check in on some of those fields below.</span>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    <div id="error" class="alert alert-danger alert-dismissible fade show" role="alert" style="display: none;">
                                        <strong>Error: </strong> <span id="error_msg">You should check in on some of those fields below.</span>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    <form id="login_admin_form" onsubmit="LoginAdmin()">
                                        <div class="">
                                            <input type="text" class="form-control" placeholder="Enter your email" name="email_address">
                                        </div>
                                        <div class="">
                                            <input type="password" class="form-control" placeholder="Password" name="password">
                                        </div>
                                        <button type="submit" class="btn_1 full_width text-center">Log in</button>
                                        <p>Need an account? <a data-toggle="modal" data-target="#sing_up" data-dismiss="modal" href="register.php"> Register</a></p>
                                    </form>
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
$scriptList = [
    '<script src="../Templates/Admin/js/jquery1-3.4.1.min.js"></script>',

    '<script src="../Templates/Admin/js/popper1.min.js"></script>',

    '<script src="../Templates/Admin/js/bootstrap1.min.js"></script>',

    '<script src="../Templates/Admin/js/metisMenu.js"></script>',

    '<script src="../Templates/Admin/vendors/scroll/perfect-scrollbar.min.js"></script>',
    '<script src="../Templates/Admin/vendors/scroll/scrollable-custom.js"></script>',

    '<script src="../Templates/Admin/js/custom.js"></script>',
    '<script src="../module_js_scripts/Admin/login_admin.js"></script>',
    
];

$footScript = "
  ";

include "../shared/Admin/foot_include.php";
?>