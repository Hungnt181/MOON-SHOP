<?php
    class BillController {
        public $billQuery;

        public function __construct() {
            $this -> billQuery = new BillQuery();
        }

        public function __destruct() {

        }

        public function list() {
            $danhSachHd = $this -> billQuery -> all();
            include "view/bill/list.php";
        }
    }

    class BillDetailController {
        public $billDetailQuery;

        public function __construct() {
            $this -> billDetailQuery = new BillDetailQuery();
        }

        public function __destruct() {

        }

        public function list() {
            $danhSachHdct = $this -> billDetailQuery -> all();
            include "view/bill/detail.php";
        }
    }
?>