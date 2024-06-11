<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/be9ed8669f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php include "view/component/header.php" ?>
    <!-- END HEADER -->
    <!-- CONTENT -->
    <main class="d-flex container">
        <!-- Sidebar trái -->
        <?php include "view/component/sidebar.php" ?>
        <!-- Main content -->
        <div class="shadow bg-light pb-5 mt-4 ms-4 mb-4 col-md-10">
            <h4 class="p-3">Danh sách sản phẩm</h4>
            <hr>
            <div class="d-flex justify-content-between align-items-center">
                <form action="" class="ms-4">
                    <div class="input-group input-group-sm">
                        <input class="form-control rounded-0 mb-2" type="search" id="search" name="search" placeholder="Nhập từ khóa tìm kiếm" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        <div class="input-group-sm">
                            <button type="button" class="btn btn-secondary rounded-0">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <div class="me-4">
                    <button class="btn btn-success">
                        <i class="fa-solid fa-plus"></i>
                        <a href="?act=create-product" class="text-light">Thêm</a>
                    </button>
                    <button class="btn btn-danger">
                        <i class="fa-solid fa-trash"></i>
                        <a href="" class="text-light">Xóa</a>
                    </button>
                </div>
            </div>


            <div class="pt-4 ms-4 me-4">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th></th>
                            <th scope="col">Stt</th>
                            <th scope="col">Ảnh sản phẩm</th>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Mô tả</th>
                            <th scope="col">Danh mục</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col">Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($danhSachSp as $sp) : ?>
                            <tr>
                                <td>
                                    <input type="checkbox">
                                </td>
                                <td scope="row">1</td>
                                <td><img src="../giaodien/img/<?= $sp->pro_img ?>" alt="" style="width: 100px; height: 100px;"></td>
                                <td>
                                    <div style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; width: 100px;">
                                        <?= $sp->pro_name ?>
                                    </div>
                                </td>
                                <td> <?= $sp->pro_price ?> </td>
                                <td> <?= $sp->pro_quantity ?> </td>
                                <td> <?= $sp->pro_description ?> </td>
                                <td>
                                    <div style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; width: 100px;">
                                        <?= $sp->cate_name ?>
                                    </div>
                                </td>

                                <?php
                                if ($sp->pro_status == 'Hết hàng') {
                                ?>
                                    <td>
                                        <span class="badge bg-danger"><?= $sp->pro_status ?> </span>
                                    </td>
                                <?php
                                } else {
                                ?>
                                    <td>
                                        <span class="badge bg-success"><?= $sp->pro_status ?> </span>
                                    </td>
                                <?php
                                }

                                ?>

<!-- 
                                <td>
                                    <span class="badge bg-danger"><?= $sp->pro_status ?> </span>
                                </td> -->
                                <td>
                                    <button class="btn btn-success">
                                        <a href="" class="text-white">
                                            <i class="fa-solid fa-pen-to-square"></i> Sửa
                                        </a>
                                    </button>
                                    <button class="btn btn-danger">
                                        <a href="" class="text-white">
                                            <i class="fa-solid fa-trash"></i> Xóa
                                        </a>
                                    </button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- End main content -->
    </main>
    <!-- FOOTER -->
    <?php include "view/component/footer.php" ?>
    <!-- END FOOTER -->
</body>

</html>