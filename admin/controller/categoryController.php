<?php
    class CategoryController {
        public $categoryQuery;

        public function __construct() {
            $this -> categoryQuery = new CategoryQuery();
        }

        public function __destruct() {

        }

        public function list() {
            $danhSachDm = $this -> categoryQuery -> all();
            include "view/category/list.php";
        }

        public function create() {
            if (isset($_POST['submitFormCreateCate'])) {
            //    echo "<pre>";
            //    print_r($_POST);

             // chuyển đổi các giá trị nhâp -> thuộc tính của đối tượng

             $category = new Category();
             $category->cate_name = trim($_POST['cate_name']);
             $category->cate_status = trim($_POST['cate_status']);

             
            // Call hàm creat() trong CategoryQuery
            $result = $this->categoryQuery->create($category);

            if ($result == "ok") {
                header("Location: ?act=list-category");
             } else {
                echo "Tạo mới danh mục sản phẩm thất bại";
             }


            }

            

            include "view/category/create.php";
        }
    }
?>