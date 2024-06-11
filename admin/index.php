<?php
    // Nhúng các file cần dùng
    session_start();

  // File common
   include "../common/env.php";
   include "../common/function.php";

   // Nhúng toàn bộ file trong thư mục controller
   include "controller/categoryController.php";
   include "controller/productController.php";
   include "controller/accountController.php";
   include "controller/billController.php";
 
   // Nhúng toàn bộ file trong model
   include "model/category.php";
   include "model/categoryQuery.php";
   include "model/product.php";
   include "model/productQuery.php";
   include "model/account.php";
   include "model/accountQuery.php";
   include "model/bill.php";
   include "model/billQuery.php";


  // Người dùng hệ thống sẽ tưởng tác với website bằng url thông qua tham số act 
    $act = $_GET['act'] ?? "";
    $id = $_GET['id'] ?? "" ;
    // Kiểm tra

  if (isset($_SESSION['account_name']) && ($_SESSION['role']) === "admin" && isset($_SESSION['account_id']) ) {
    match ($act) { 
      '' => (new ProductController()) -> list(),
      // -----------Sản phẩm
      'list-product' => (new ProductController()) -> list(),
      'create-product' => (new ProductController()) -> create(),
      // -----------Danh mục
      'list-category' => (new CategoryController()) -> list(),
      'create-category' => (new CategoryController()) -> create(),
      // -----------Tài khoản
      'list-account' => (new AccountController()) -> list(),
      'create-account' => (new AccountController()) -> create(),
      // -----------Hóa đơn
      'list-bill' => (new BillController()) -> list(),
      'list-billDetail' => (new BillDetailController()) -> list(),
    };
    
  } else {
    header("Location: ../index.php");
  }



?>

