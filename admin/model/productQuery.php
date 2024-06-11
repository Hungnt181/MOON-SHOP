<?php
    class ProductQuery {
        public $pdo;

        public function __construct() {
            $this -> pdo = connectDB();
        }

        public function __destruct() {
            $this -> pdo = null;
        }

        public function all() {
            try {
                $sql = "select * from product inner join category on product.cate_id = category.cate_id";
                $data = $this->pdo->query($sql)->fetchAll();
                // Chuyển đổi dữ liêụ --> object Product
                $danhSach = [];
                foreach ($data as $row) {
                    $danhSach[] = convertToObjectProduct($row);
                }
                return $danhSach;

                
            } catch (Exception $e) {
                echo "Lỗi: ".$e->getMessage();
                echo "<hr>";
            }
        
        }

        

        public function create(Product $product) {
            try {
                $sql = "INSERT INTO `product`(`pro_id`, `pro_name`, `pro_price`, `pro_quantity`, `pro_description`, `pro_img`, `pro_status`, `cate_id`)
                 VALUES (NULL,'$product->pro_name','$product->pro_price','$product->pro_quantity','$product->pro_description','$product->pro_img','$product->pro_status','$product->cate_id')";
                $data = $this->pdo->exec($sql);
                // $data == 1 -> thành công
                
                if ($data ==1) {
                    return 'ok';
                } else {
                    return $data;
                }
                

                
            } catch (Exception $e) {
                echo "Lỗi: ".$e->getMessage();
                echo "<hr>";
            }
        
        }
    }
?>