<?php

// only logged in user can access
session_start();
if (!isset($_SESSION["admin_id"])) {
    header("location: login.php");
    exit;
}

try
{
    require_once "../Shared/connection.php";
    $query = "SELECT * FROM tb_Admins WHERE admin_id = :admin_id;";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':admin_id', $_SESSION["admin_id"]);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetch();
}
catch (PDOException $e) {
    echo $e->getMessage();
}

$title = "Edit Profile";
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


<!-- form submission -->
<?php

    if(isset($_POST["btn_edit_admin"]))
    {
        $name = $_POST["full_name"];
        $contact_num = $_POST["contact_number"];
        $email_address = $_POST["email"];
        $admin_password = isset($_POST["password"])?$_POST["password"]:"";
        $user_address = $_POST["address"];
        $gender = $_POST["gender"];
        
        try {
            require_once "../Shared/connection.php";

            if($admin_password == "")
            {
                $query = "UPDATE tb_Admins SET name = :name, contact_num = :contact_num, user_address = :user_address, gender = :gender WHERE admin_id = :admin_id;";
                $stmt = $conn->prepare($query);
            }
            else
            {
                $query = "UPDATE tb_Admins SET name = :name, contact_num = :contact_num, admin_password = :admin_password, user_address = :user_address, gender = :gender WHERE admin_id = :admin_id;";
                $stmt = $conn->prepare($query);
                $hashPassword = password_hash($admin_password, PASSWORD_BCRYPT);
                $stmt->bindParam(':admin_password', $hashPassword);
            }
            
    
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':contact_num', $contact_num);
            $stmt->bindParam(':user_address', $user_address);
            $stmt->bindParam(':gender', $gender);
            $stmt->bindParam(':admin_id', $_SESSION["admin_id"]);
    
            $stmt->execute();
            $success = "Your profile updated successfully!";
        }
        catch(PDOException $e)
        {
                echo $e->getMessage();
        }
    }

?>

<div class="main_content_iner ">
    <div class="container-fluid p-0">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="dashboard_header mb_50">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="dashboard_header_title">
                                <h3>Edit Admin Profile</h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="dashboard_breadcam text-end">
                                <p><a href="index.php">Dashboard</a> <i class="fas fa-caret-right"></i> Edit Profile
                                </p>
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
                                    <h5 class="modal-title text_white">Edit Admin Profile</h5>
                                </div>
                                <div class="modal-body">

                                    <?php 
                                        if(isset($success))
                                        {
                                            echo '
                                            <div id="success" class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>Success: </strong> <span id="success_msg">'. $success .'</span>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                            ';
                                        }
                                    ?>
                                    
                                    <div id="error" class="alert alert-danger alert-dismissible fade show" role="alert" style="display: none;">
                                        <strong>Error: </strong> <span id="error_msg">You should check in on some of those fields below.</span>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    <form id="edit_admin_form" action="edit_profile.php" method="post">
                                        <input type="hidden" name="admin_id" id="admin_id" value="<?php echo $_SESSION['admin_id']; ?>">
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label class="form-label" for="full_name">Full Name</label>
                                                <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Full Name" required maxlength="100" value="<?php echo $result["name"]; ?>">
                                            </div>
                                            <div class=" col-md-6">
                                                <label class="form-label" for="contact_number">Contact Number</label>
                                                <input type="tel" class="form-control" id="contact_number" name="contact_number" placeholder="0333-3333333" required maxlength="15" value="<?php echo $result["contact_num"]; ?>">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label class="form-label" for="email">Email Address</label>
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required maxlength="100" readonly  value="<?php echo $result["email_address"]; ?>">
                                            </div>
                                            <div class=" col-md-6">
                                                <label class="form-label" for="password">Change Password</label>
                                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" maxlength="20"  value="">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="address">Address</label>
                                            <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main Street, Karachi, Pakistan" required maxlength="250" value="<?php echo $result["user_address"]; ?>">
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                                <label class="form-label" for="gender">Gender</label>
                                                <select id="gender" name="gender" class="form-control">
                                                    <option value="male" <?php echo $result["gender"] == "male" ? "selected" : ""; ?>>Male</option>
                                                    <option value="female" <?php echo $result["gender"] == "female" ? "selected" : ""; ?>>Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn_1 full_width text-center" name="btn_edit_admin">Update</button>
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
];

$footScript = "
  ";

include "../shared/Admin/foot_include.php";
?>