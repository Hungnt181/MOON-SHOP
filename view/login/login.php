<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="shortcut icon" href="img/Group 2.svg" type="image/x-icon">
    <link rel="stylesheet" href="giaodien/Clientstyle.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="https://kit.fontawesome.com/6dab569175.js" crossorigin="anonymous"></script>

    <style>
        .list_menu {
            width: 98%;
            padding-top: 13px;
        }
        #tb {
            color: red;
            margin-top:10px ;
            margin-left: 5px;
            margin-bottom: -20px;
        }
    </style>
</head>
<body>
    <?php
        include "view/component/header.php";
    ?>
    <!-- END HEADER -->
    <!-- CONTENT -->
    <main class="container">
        <!-- Main content -->
        <div class="container d-flex justify-content-center">
            <div style="width: 50%; background-color: #FBA81F; margin:20px 0;" class="rounded-3">
                <form action=""  method="post"  class="pb-2 bg-opacity-50  methol" >
                    <H3 class="text-center pt-3 text-light">Đăng nhập</H3>
                    <div class="mb-3 pe-3 pt-3 ps-3">
                        <input type="text" class="form-control"
                            placeholder="Email" required name='email'>

                        <?php
                            if ($tb !== "") { ?>
                                <p id="tb"> 
                                   <?=$tb?>
                                </p>
                                <?php
                            } else {

                            }
                        ?>
                    </div>
                    <div class="mb-3 pe-3 pt-3 ps-3">
                        <input type="password" class="form-control" 
                            placeholder="Mật khẩu" required name='password'>
                    </div>
                    <div class="pe-3 pt-3 ps-3 d-flex justify-content-center">
                        <button type="submit" class="btn" style="background-color: #F87537; color:#ffffff" name='loginSubmit'>
                            Đăng nhập
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- End main content -->
    </main>A
        <!-- FOOTER -->
        <?php
        include "view/component/footer.php";
    ?>
    <!-- END FOOTER -->
</body>
</html>