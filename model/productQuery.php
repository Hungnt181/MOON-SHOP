<?php
    class ProductQuery {
        public $pdo;

        public function __construct()
        {
            $this ->pdo = connectDB();
        }

        public function __destruct()
        {
            $this ->pdo = null;
        }

        public function getTop8ProductLatest()  {
            try {
                $sql = "select * from product inner join category on category.cate_id = product.cate_id  order by pro_id desc limit 8";
                $data = $this ->pdo->query($sql)->fetchAll();
                $ds = [];
                foreach ($data as $row) {
                   $ds[] = convertToObjectProduct($row);
                }
                return $ds;
            } catch (Exception $e) {
                echo "Lỗi" .$e->getMessage();
                echo "<hr>";
            }
    
        }

        public function getTop8ProductHot()  {
            try {
                $sql = "select * from product inner join category on category.cate_id = product.cate_id  order by pro_id asc limit 8";
                $data = $this ->pdo->query($sql)->fetchAll();
                $ds = [];
                foreach ($data as $row) {
                   $ds[] = convertToObjectProduct($row);
                }
                return $ds;
            } catch (Exception $e) {
                echo "Lỗi" .$e->getMessage();
                echo "<hr>";
            }
    
        }

        public function find($pro_id) {
            try {
                $sql = "select * from product inner join category on product.cate_id = category.cate_id where pro_id = $pro_id";
                $data = $this->pdo->query($sql)->fetch();
                // Chuyển đổi dữ liêụ --> object Produc
                
                    $product = convertToObjectProduct($data);
                    return $product;
        
            } catch (Exception $e) {
                echo "Lỗi: ".$e->getMessage();
                echo "<hr>";
            }
        
        }
    
        public function getTop3ProductLatest()  {
            try {
                $sql = "select * from product inner join category on category.cate_id = product.cate_id  order by pro_id desc limit 3";
                $data = $this ->pdo->query($sql)->fetchAll();
                $ds = [];
                foreach ($data as $row) {
                   $ds[] = convertToObjectProduct($row);
                }
                return $ds;
            } catch (Exception $e) {
                echo "Lỗi" .$e->getMessage();
                echo "<hr>";
            }
    
        }

        public function getTop5ProductHot()  {
            try {
                $sql = "select * from product inner join category on category.cate_id = product.cate_id  order by pro_id asc limit 5";
                $data = $this ->pdo->query($sql)->fetchAll();
                $ds = [];
                foreach ($data as $row) {
                   $ds[] = convertToObjectProduct($row);
                }
                return $ds;
            } catch (Exception $e) {
                echo "Lỗi" .$e->getMessage();
                echo "<hr>";
            }
    
        }

        public function findSimilar($cate_id) {
            try {
                $sql = "select * from product join category on product.cate_id = category.cate_id where product.cate_id = $cate_id order by RAND() limit 3";
                $data = $this ->pdo->query($sql)->fetchAll();
                $ds = [];
                foreach ($data as $row) {
                   $ds[] = convertToObjectProduct($row);
                }
                return $ds;
            } catch (Exception $e) {
                echo "Lỗi" .$e->getMessage();
                echo "<hr>";
            }
        }


    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    }
  


    
?>