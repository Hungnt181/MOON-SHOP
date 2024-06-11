<?php
    class LoginController {

        public $loginQuery;
        public $categoryQuery;
        public $accountQuery;
        

        public function __construct() {
            $this->loginQuery = new LoginQuery();
            $this->categoryQuery = new CategoryQuery();
            $this -> accountQuery = new AccountQuery();
        }
        public function __destruct() {}
            
        public function login() {
            $danhSachDm = $this -> categoryQuery -> all();
            

             $tb = "";

            // Kiểm tra nếu người dùng click login

            if (isset($_POST['loginSubmit'])) {
                // var_dump($_POST);

                //lấy giá trị email và passwprd từ input

                $email = trim($_POST['email']);
                $password = trim($_POST['password']);


                $result = $this ->loginQuery->checkLogin($email, $password);
                if ($result === 0) {
                   $tb= "Sai mật khẩu hoặc tài khoản";

                } else {
                    // echo "Đăng nhập thành công";
                    // $tb = "";
                    // Lưu thông tin vào session

                    $_SESSION['account_name'] = $result->account_name;
                    $_SESSION['account_id'] = $result->account_id;
                    $_SESSION['role'] = $result->role;
                    // echo   $_SESSION['role'];
                    header('Location: ?act=').'';
                }

            }



            include "view/login/login.php";
        }

        public function logout() {
        //    session_start();
           session_destroy();
           header("Location: index.php");
        }
        
        public function dangky() {
            $danhSachDm = $this -> categoryQuery -> all();
            $danhSachTk = $this -> accountQuery -> all();

            $mangTK = [];
            $tb = "";

            foreach ($danhSachTk as $acc) {
                $mangTK[] = $acc->email;
            }

            // print_r($mangTK);

            if (isset($_POST['dangkySubmit'])) {
                // echo "<pre>";
                // print_r($_POST);

                // chuyển đổi các giá trị nhâp -> thuộc tính của đối tượng
                $account = new Account();
                $account -> account_name = trim($_POST['account_name']);
                $account -> email = trim($_POST['email']);
                $account -> password = trim($_POST['password']);

                //So sánh có bị trùng email hay không?

                if (in_array($_POST['email'],$mangTK)) {
                    $tb = "Email đã được sử dụng, vui lòng chọn email khác";
                }  else {
                    $result = $this->loginQuery->dangky($account);

                    if ($result == "ok") {
                        header("Location: ?act=login");
                     } else {
                        echo "Đăng kí thất bại";
                     }
                }
               
    
            }
            include "view/login/dangky.php";
            
        }
        
    }
?>