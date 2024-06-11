<?php
    class AccountQuery {
        public $pdo;

        public function __construct() {
            $this -> pdo = connectDB();
        }

        public function __destruct() {
            $this -> pdo = null;
        }

        public function all() {
            try {
                $sql = "select * from account";
                $data = $this -> pdo -> query($sql) -> fetchAll();
                $danhSach = [];
                foreach ($data as $row) {
                    $danhSach[] = convertToObjectAccount($row);
                }
                return $danhSach;

            } catch (Exception $e) {
                echo "Lỗi: ".$e -> getMessage();
                echo "<hr>";
            }
        }
    }
?>