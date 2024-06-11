<?php
    class BillQuery {
        public $pdo;

        public function __construct() {
            $this -> pdo = connectDB();
        }

        public function __destruct() {
            $this -> pdo = null;
        }

        public function all() {
            try {
                $sql = "select * from bill inner join account on account.account_id = bill.account_id";
                $data = $this -> pdo -> query($sql) -> fetchAll();
                $danhSach = [];
                foreach ($data as $row) {
                    $danhSach[] =  convertToObjectBill($row);
                }
                return $danhSach;

            } catch (Exception $e) {
                echo "Lỗi: ".$e ->getMessage();
                echo "<hr>";
            }
        }
    }

    class BillDetailQuery {
        public $pdo;

        public function __construct() {
            $this -> pdo = connectDB();
        }

        public function __destruct() {
            $this -> pdo = null;
        }

        public function all() {
            try {
                $sql = "select * from bill_detail inner join product on bill_detail.pro_id = product.pro_id
                                                  inner join bill on bill_detail.bill_id = bill.bill_id 
                        ";
                $data = $this -> pdo -> query($sql) -> fetchAll();
                $danhSach = [];
                foreach ($data as $row) {
                    $danhSach[] =  convertToObjectBillDetail($row);
                }
                return $danhSach;

            } catch (Exception $e) {
                echo "Lỗi: ".$e ->getMessage();
                echo "<hr>";
            }
        } 
    }

?>