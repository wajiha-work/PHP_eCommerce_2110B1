<?php


session_start();
if(isset($_SESSION["admin_id"]))
{
  header("location: index.php");
  exit;
}



$title = "Register";
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
                                <h3> Admin Registration</h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="dashboard_breadcam text-end">
                                <p><a href="login.php">Login Here</a></p>
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
                                <div class="modal-header theme_bg_1 justify-content-center">
                                    <h5 class="modal-title text_white">Register as Admin</h5>
                                </div>
                                <div class="modal-body">
                                    <div id="success" class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;">
                                        <strong>Success:</strong> <span id="success_msg">You should check in on some of those fields below.</span>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    <div id="error" class="alert alert-danger alert-dismissible fade show" role="alert" style="display: none;">
                                        <strong>Error: </strong> <span id="error_msg">You should check in on some of those fields below.</span>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    <form id="register_admin_form" onsubmit="RegisterAdmin()">
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label class="form-label" for="full_name">Full Name</label>
                                                <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Full Name" required maxlength="100">
                                            </div>
                                            <div class=" col-md-6">
                                                <label class="form-label" for="contact_number">Contact Number</label>
                                                <input type="tel" class="form-control" id="contact_number" name="contact_number" placeholder="0333-3333333" required maxlength="15">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label class="form-label" for="email">Email Address</label>
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required maxlength="100">
                                            </div>
                                            <div class=" col-md-6">
                                                <label class="form-label" for="password">Password</label>
                                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required maxlength="20">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="address">Address</label>
                                            <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main Street, Karachi, Pakistan" required maxlength="250">
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                                <label class="form-label" for="gender">Gender</label>
                                                <select id="gender" name="gender" class="form-control">
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn_1 full_width text-center" name="btn_register_admin">Register as Admin</button>
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
    '<script src="../module_js_scripts/Admin/register_admin.js"></script>',
];

$footScript = "
  ";

include "../shared/Admin/foot_include.php";
?>