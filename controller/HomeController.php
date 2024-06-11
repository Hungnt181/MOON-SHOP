<?php
    class HomeController {
        public $productQuery;
        public $categoryQuery;

        public function __construct()
        {
            $this->productQuery = new ProductQuery();
            $this->categoryQuery = new CategoryQuery();
        }

        public function __desstruct()
        {
            
        }

        public function home() {
            // Gọi modle lấy danh sách sp

            $dacnhSachTop8_new = $this -> productQuery -> getTop8ProductLatest();
            $dacnhSachTop8_hot = $this -> productQuery -> getTop8ProductHot();

            $danhSachDm = $this -> categoryQuery -> all();

            
            // Hiển thị view trang chủ
            
            include "view/home.php";
        
        }

        
        public function cart() {
            // Gọi modle lấy danh sách sp
            // $_SESSION['myCart'] = [];
            
            $danhSachDm = $this -> categoryQuery -> all();

            // var_dump($_POST);

            //Thêm sản phẩm khi khách hàng muốn mua ngay

            if (isset($_POST['addTocart']) && $_POST['pro_id'] >0) {
                // Tìm thông tin sản phảm bằng id
                $product = $this -> productQuery ->find($_POST['pro_id']);
                $total = $product->pro_price * $_POST['soluong'];

                $array_pro = [
                    'pro_img'=> $product->pro_img,
                    'pro_name'=> $product->pro_name,
                    'pro_price'=> $product->pro_price,
                    'pro_quantity'=> $product->pro_quantity,
                    'total'=> $total,
                ];
                array_push($_SESSION["myCart"],$array_pro);
                // echo "<pre>";
                // print_r($_SESSION['myCart']);
            
            }

            include "view/cart.php";
        
        }


        public function ctsp() {
            // var_dump($_GET);
            if(isset($_GET["pro_id"]) && ($_GET["pro_id"]) > 0) {
                $product = $this -> productQuery -> find($_GET["pro_id"]);
                $danhSachSimilar = $this -> productQuery -> findSimilar($product->cate_id);
            }
            $danhSachDm = $this -> categoryQuery -> all();
            $dacnhSachTop5_hot = $this -> productQuery -> getTop5ProductHot();
            $dacnhSachTop3_new = $this -> productQuery -> getTop3ProductLatest();
            
            include "view/ctsp.php";
        }

        public function deleteAllCart() {
            if(isset($_SESSION["myCart"]) && ($_SESSION["myCart"]) > 0) {
                unset($_SESSION["myCart"]);
                header("Location: ?act=cart");
            } else {
                echo "xóa thất bại";
            }
        }


    
    
    }
?>