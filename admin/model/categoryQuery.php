<?php
    class CategoryQuery {
        public $pdo;

        public function __construct() {
            $this -> pdo = connectDB();
        }

        public function __destruct() {
            $this -> pdo = null;
        }

        public function all() {
            try {
                $sql = "select * from category";
                $data = $this -> pdo -> query($sql) -> fetchAll();
                $danhSach = [];
                foreach ($data as $row) {
                    $danhSach[] = convertToObjectCategory($row);
                }
                return $danhSach;

            } catch (Exception $e) {
                echo "Lỗi: ".$e ->getMessage();
                echo "<hr>";
            }
        }
        
        public function create(Category $category) {
            try {
                $sql = "INSERT INTO `category`(`cate_id`, `cate_name`, `cate_status`) VALUES (NULL,'$category->cate_name','$category->cate_status')";
                $data = $this -> pdo -> exec($sql);
               
                if ($data==1) {
                   return "ok";
                } else {
                    return $data;
                }
                

            } catch (Exception $e) {
                echo "Lỗi: ".$e ->getMessage();
                echo "<hr>";
            }
        }
    }

?>