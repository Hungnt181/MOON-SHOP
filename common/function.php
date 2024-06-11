<?php
// Hàm kết nối CSDL
    function connectDB() {
        $host = DB_HOST;
        $port  = DB_PORT;
        $dbname = DB_NAME;

        try {
            $conn = new PDO ("mysql:host=$host;port=$port;dbname=$dbname",DB_USER,DB_PASS);
            return $conn;
        } catch (\Throwable $th) {
            echo "Lỗi";
        }
    }

    function convertToObjectProduct($row) {
        $product = new Product();
        $product -> pro_id = $row['pro_id'];
        $product -> pro_name = $row['pro_name'];
        $product -> pro_price = $row['pro_price'];
        $product -> pro_quantity = $row['pro_quantity']; 
        $product -> pro_description = $row['pro_description'];
        $product -> pro_img = $row['pro_img'];
        $product -> pro_status = $row['pro_status'];
        $product -> cate_id = $row['cate_id'];
        $product -> cate_name = $row['cate_name'];
        return $product;
    }
    

    function convertToObjectCategory($row) {
        $category = new Category();
        $category -> cate_id = $row['cate_id'];
        $category -> cate_name = $row['cate_name'];
        $category -> cate_status = $row['cate_status'];
        return $category;
    }

    function convertToObjectAccount($row) {
        $account = new Account();
        $account -> account_id = $row['account_id'];
        $account -> account_name = $row['account_name'];
        $account -> password = $row['password'];
        $account -> email = $row['email'];
        $account -> role = $row['role'];
        return $account;
    }

    function convertToObjectBill($row) {
        $bill = new Bill();
        $bill -> bill_id = $row['bill_id'];
        $bill -> account_id = $row['account_id'];
        $bill -> account_name = $row['account_name'];

        return $bill;
    }

    function convertToObjectBillDetail($row) {
        $billDetail = new BillDetail();
        $billDetail -> bill_detail_id = $row['bill_detail_id'];
        $billDetail -> bill_id = $row['bill_id'];
        // $billDetail -> bill_id = $row['bill_id'];

        $billDetail -> pro_id = $row['pro_id'];
        $billDetail -> pro_name = $row['pro_name'];
        return $billDetail;
    }
?>