<?php
    class LoginQuery {
        public $pdo;
        public function __construct()
        {
           $this ->pdo=connectDB(); 
        }

        public function __destruct()
        {
            $this->pdo = 'null';
        }

        public function checkLogin($email, $password) {
            try {
                $sql = "select * from account where email = '$email' and  password = '$password' ";
                $data = $this-> pdo ->query($sql)->fetch();
                // $data có dữ liệu

                if ($data === false ) {
                   return 0;
                } else {
                  // Chuyển đổi thành object account
                  $account = new Account();
                  $account ->account_id = $data['account_id'];
                  $account ->account_name = $data['account_name'];
                  $account ->password = $data['password'];
                  $account ->email = $data['email'];
                  $account ->role = $data['role'];
          
                  return $account;
                }

            

            } catch (\Throwable $th) {
                //throw $th;
            }
        }

        public function dangky(Account $account) {
            try {
                $sql = "INSERT INTO `account`(`account_id`, `account_name`, `password`, `email`) VALUES (NULL,'$account->account_name','$account->password','$account->email')";
                $data = $this -> pdo -> exec($sql);
                // $data có dữ liệu
                if ($data==1) {
                    return "ok";
                 } else {
                     return $data;
                 }

        
            } catch (\Throwable $th) {
                //throw $th;
            }
        }

    
    }
?>