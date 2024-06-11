<?php
    class AccountController {
        public $accountQuery;

        public function __construct() {
            $this -> accountQuery = new AccountQuery();
        }

        public function __destruct() {

        }

        public function list() {
            $danhSachTk = $this -> accountQuery -> all();
            include "view/account/list.php";
        }

        public function create() {
            echo "create";
        }
    }
?>