<?php

// if not logged in, then can't access any page except login and register page
session_start();
if (!isset($_SESSION["admin_id"])) {
  header("location: login.php");
  exit;
}

require_once  "../shared/connection.php";

$stmt = $conn->prepare("
        SELECT P.product_id, P.product_name, P.sku, P.product_image, P.price, P.stock, C.cat_name 
            FROM tb_Products P INNER JOIN tb_Categories C 
                ON P.category_id = C.cat_id  ORDER BY P.product_name;");
$stmt->execute();
$allRecords = $stmt->fetchAll();

$title = "All Products";
$style = "
  ";

$headScript = "";

$headList = [
  '<link rel="stylesheet" href="../Templates/Admin/css/bootstrap1.min.css" />',

  '<link rel="stylesheet" href="../Templates/Admin/vendors/themefy_icon/themify-icons.css" />',

  '<link rel="stylesheet" href="../Templates/Admin/vendors/scroll/scrollable.css" />',

  '<link rel="stylesheet" href="../Templates/Admin/vendors/font_awesome/css/all.min.css" />',
  '<link rel="stylesheet" href="../Templates/Admin/vendors/text_editor/summernote-bs4.css" />',
  '<link rel="stylesheet" href="../Templates/Admin/vendors/datatable/css/jquery.dataTables.min.css" />',
  '<link rel="stylesheet" href="../Templates/Admin/vendors/datatable/css/responsive.dataTables.min.css" />',
  '<link rel="stylesheet" href="../Templates/Admin/vendors/datatable/css/buttons.dataTables.min.css" />',


  '<link rel="stylesheet" href="../Templates/Admin/css/metisMenu.css">',

  '<link rel="stylesheet" href="../Templates/Admin/css/style1.css" />',
];

include "../shared/Admin/head_include.php";
?>


<div class="main_content_iner overly_inner">
  <div class="container-fluid p-0">
    <div class="row">
      <div class="col-12">
        <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
          <div class="page_title_left d-flex align-items-center">
            <h3 class="f_s_25 f_w_700 dark_text mr_30">All Products</h3>
            <ol class="breadcrumb page_bradcam mb-0">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Products</li>
            </ol>
          </div>
          <div class="page_title_right">
            <a id="btn_add_new_product" href="add_product.php" class="btn_1">
              <i class="fas fa-arrow-right"></i> Add New Product
            </a>
          </div>
        </div>
      </div>
    </div>
    <?php include "../shared/Admin/notification_success.php";  ?>
        <?php include "../shared/Admin/notification_error.php";  ?>
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="modal-header justify-content-start theme_bg_1">
          <h5 class="modal-title text_white">Products List</h5>
        </div>
        <div class="white_card card_height_100 p-3">
          <div class="white_card_body">
            <div class="QA_section">
              <div class="QA_table">
                <table class="table" id="products_list">
                  <!-- products_list -->
                  <thead>
                    <tr>
                      <th scope="col">Product</th>
                      <th scope="col">Name</th>
                      <th scope="col">Price (PKR)</th>
                      <th scope="col">Stock (Units)</th>
                      <th scope="col">Category</th>
                      <th scope="col">SKU</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php

                    // <img src="' . $row['product_image'] . '" alt="' . $row['product_name'] . '" width="50">
                    foreach ($allRecords as $row) {
                      echo '
                                                <tr>
                                                    <td><img src="' . $row['product_image'] . '" alt="' . $row['product_name'] . '" width="50"></td>
                                                    <th>
                                                         <form action="view_product.php" method="post">
                                                            <input type="hidden" name="product_id" value="' . $row['product_id'] . '">
                                                            <button type="submit" class="dt_icon">' . $row['product_name'] . '</button>
                                                        </form>
                                                    </th>
                                                    <td>' . $row['price'] . '</td>
                                                    <td>' . $row['stock'] . '</td>
                                                    <td>' . $row['cat_name'] . '</td>
                                                    <td>' . $row['sku'] . '</td>
                                                    <td>
                                                          <form action="view_product.php" method="post">
                                                            <input type="hidden" name="pid" value="' . $row['product_id'] . '">
                                                            <button type="submit"><i class="ti-eye"></i></button>
                                                          </form>

                                                          <form action="edit_product.php" method="post">
                                                            <input type="hidden" name="pid" value="' . $row['product_id'] . '">
                                                            <button type="submit"><i class="ti-pencil"></i></button>
                                                          </form>
                                                          <form action="delete_product.php" method="post">
                                                            <input type="hidden" name="pid" value="' . $row['product_id'] . '">
                                                            <button type="submit"><i class="ti-trash"></i></button>
                                                          </form>
                                                    </td>
                                                </tr>
                                            ';
                    }
                    ?>
                  </tbody>
                </table>

                
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

  '<script src="../Templates/Admin/vendors/datatable/js/jquery.dataTables.min.js"></script>',
  '<script src="../Templates/Admin/vendors/datatable/js/dataTables.responsive.min.js"></script>',
  '<script src="../Templates/Admin/vendors/datatable/js/dataTables.buttons.min.js"></script>',
  '<script src="../Templates/Admin/vendors/datatable/js/buttons.flash.min.js"></script>',
  '<script src="../Templates/Admin/vendors/datatable/js/jszip.min.js"></script>',
  '<script src="../Templates/Admin/vendors/datatable/js/pdfmake.min.js"></script>',
  '<script src="../Templates/Admin/vendors/datatable/js/vfs_fonts.js"></script>',
  '<script src="../Templates/Admin/vendors/datatable/js/buttons.html5.min.js"></script>',
  '<script src="../Templates/Admin/vendors/datatable/js/buttons.print.min.js"></script>',

  '<script src="../Templates/Admin/vendors/scroll/perfect-scrollbar.min.js"></script>',
  '<script src="../Templates/Admin/vendors/scroll/scrollable-custom.js"></script>',

  '<script src="../Templates/Admin/js/custom.js"></script>',
  '<script src="../module_js_scripts/Admin/products.js"></script>',
];

$footScript = "
  ";

include "../shared/Admin/foot_include.php";
?>