<?php
    class ProductController {
        public $productQuery;
        public $categoryQuery;

        public function __construct() {
            $this -> productQuery = new ProductQuery();
            $this -> categoryQuery= new CategoryQuery();
        }

        public function __destruct() {
            
        }

        public function list() {
            // Gọi model lấy danh sách sản phẩm
           $danhSachSp =  $this -> productQuery -> all();
        //    var_dump($danhSachSp);
            // Hiner thị view tương ứng
            include "view/product/list.php";

        }
        

        public function create() {
            // Gọi model lấy danh sách sản phẩm

            // Xử lý logic trong productQuery
            //B1: Thay đổi name trong các ô input -> lấy đưuojc giá trị theo name
            //B2: Gọi phương thức create()

            if (isset($_POST['submitFormCreatepro'])) {
                // echo '<pre>';
                // print_r($_POST);

                // chuyển đổi các giá trị nhâp -> thuộc tính của đối tượng

                $product = new Product();
                $product-> pro_name = trim($_POST['pro_name']);
                $product-> pro_price = trim($_POST['pro_price']);
                $product-> pro_description = trim($_POST['pro_description']);
                $product-> pro_quantity = trim($_POST['pro_quantity']);
                $product-> pro_img = "";
                $product-> pro_status = ($_POST['pro_status']);
                $product-> cate_id = ($_POST['cate_id']);

                // Xử lý ảnh

                if (isset($_FILES['img_upload']) && $_FILES['img_upload']['tmp_name'] !== "") {
                    $pro_img = $_FILES['img_upload']['tmp_name'] ;
                    $vi_tri = "../giaodien/img/".$_FILES['img_upload']['name'];
                    if (move_uploaded_file($pro_img,$vi_tri)) {
                        echo "Upload img thành công";
                         $product-> pro_img = $_FILES['img_upload']['name'];
                    } else {
                        echo "Upload img thất bại";
                    }
                } 
                    // Call hàm creat() trong ProductQuery

                 $result = $this->productQuery->create($product);

                 if ($result == "ok") {
                    header("Location: ?act=list-product");
                 } else {
                    echo "tạo mới sản phẩm thát bại";
                 }
            }

            //Lấy danh sách danh mục để heienr thị trên view
            $listCategoryQuery = $this->categoryQuery->all();
            

            // Hiển thị view tương ứng
            include "view/product/create.php";

        }
    }
?>