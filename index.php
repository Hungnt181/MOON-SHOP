<?php
  session_start();
    // Nhứng các file common

    include "common/env.php";
    include "common/function.php";

    // Nhứng troàn bộ các file controller

    include "controller/HomeController.php";
    include "controller/LoginController.php";
    include "admin/controller/categoryController.php";
    include "admin/controller/accountController.php";
    

      // Nhứng troàn bộ các file model

      include "admin/model/product.php";  
      include "admin/model/category.php"; 
      include "admin/model/categoryQuery.php"; 
      include "admin/model/accountQuery.php";  
      // include "admin/model/productQuery.php.php";  
      include "model/productQuery.php"; 

      include "model/account.php";
      include "model/loginQuery.php";



    // Thông tin act
    $act = $_GET['act'] ?? '' ;
    $id = $_GET['id']  ?? '';
    //  $_SESSION['myCart'] ;
    // 
    if(!isset($_SESSION["myCart"])) {
      $_SESSION["myCart"] = [];
    }

    match ($act) {
        '' => (new HomeController())->home(),
        'login' => (new LoginController()) ->login(),
        'logout' => (new LoginController()) ->logout(),
        'dangky' => (new LoginController()) ->dangky(),
        'cart' =>  (new HomeController())->cart(),
        'ctsp' => (new HomeController()) -> ctsp(),
        'deleteAllCart' => (new HomeController()) -> deleteAllCart(),
        
    }

?>