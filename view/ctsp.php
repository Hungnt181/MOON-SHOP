<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MoonPet Store</title>
    <link rel="shortcut icon" href="giaodienimg/Group 2.svg" type="image/x-icon" />
    <link rel="stylesheet" href="giaodien/sanphamct.css" />
    <link rel="stylesheet" href="giaodien/Clientstyle.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <script src="https://kit.fontawesome.com/6dab569175.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <?php include "view/component/header.php" ?>
        <!-- Breadcrumb -->
        <div class="wrap-bread-crumb">
            <div class="container">
                <div class="bread-crumb">
                    <span>
                        <a href="index.php"> Trang chủ</a>
                    </span>
                    <span>
                        <a href="#">Danh mục</a>
                    </span>
                    <span>
                        <a href="#">Phụ kiện</a>
                    </span>
                    <span> <?= $product->cate_name ?> </span>
                </div>
            </div>
        </div>
        <!-- Main content -->
        <div id="main-content" class="content-page">
            <div class="container">
                <div class="row">
                    <!-- Box left -->
                    <?php include "view/component/sidebar_left.php" ?>
                    <!-- End Box left -->
                    <!-- Box right -->
                    <div class="box-right">
                        <div class="product">
                            <div class="product-detail">
                                <div class="row">
                                    <div class="product-detail-left box-img-left">
                                        <div class="detail-gallery">
                                            <div class="wrap-detail-gallery images">
                                                <div class="mid image-lightbox">
                                                    <img src="giaodien/img/<?= $product->pro_img ?>" alt />
                                                    <div class="product-label">
                                                        <span class="new"> New </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-detail-right box-detail-info">
                                        <div class="detail">
                                            <!-- <?php var_dump($product);?> -->
                                            <h1 class="detail-title"><?= $product->pro_name ?></h1>
                                            <div class="detail-price">
                                                <span>
                                                    <?= $product->pro_price ?>
                                                    <sup>đ</sup>
                                                </span>
                                            </div>
                                            <form action="?act=cart" method="post" enctype="multipart/form-data" class="cart">
                                                <label class="qty-label">Số lượng: </label>
                                                <div class="info-qty">
                                                    <a href="#" class="qty-down">
                                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                                    </a>
                                                    <input type="text" step="1" min="1" max name="quantity" value="1"
                                                        title="Số lượng" class="input-text" size="4" />
                                                    <a href="#" class="qty-up">
                                                        <i class="fa fa-angle-up" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <input type="hidden" name="pro_id" value="<?=$sp->pro_id?>">
                                                <button type="submit" name="addToCart" class="add">
                                                    Mua hàng
                                                </button>
                                            </form>
                                            <div class="detail-wishlist">
                                                <div class="button-wishlist">
                                                    <a href="#">
                                                        <span>Add to Wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="detail-meta">
                                                <span class="sku-wrapper">
                                                    <label>Mã sản phẩm</label>
                                                    <span class="sku"> <?= $product->pro_id ?> </span>
                                                </span>
                                                <span class="sku-wrapper">
                                                    <label>Tình trạng</label>
                                                    <span class="sku"> <?= $product->pro_status ?> </span>
                                                </span>
                                                <span class="poster-in">
                                                    <label>Danh mục</label>
                                                    <div class="meta-list">
                                                        <a href="#"><?= $product->cate_name ?></a>
                                                        <a href="#"><?= $product->cate_name ?></a>
                                                    </div>
                                                </span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="related-product">
                                <h2>SẢN PHẨM TƯƠNG TỰ</h2>
                                <div class="product-list">
                                    <!-- Nhúng php 3sp -->
                                    <?php 
                                    foreach ($danhSachSimilar as $sp) : ?>
                                    <div class="item">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="giaodien/img/<?=$sp->pro_img?>" alt />
                                            </a>
                                            <div class="product-extra-link">
                                                <a href="index.php?act=ctsp&pro_id=<?=$sp->pro_id?>" class="shop-button button-add">
                                                    <span>MUA HÀNG</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <span class="title12">IDSP: <?=$sp->pro_id?></span>
                                            <h3 class="product-title">
                                                <a href="index.php?act=ctsp&pro_id=<?=$sp->pro_id?>" title="POODLE TRẮNG XINH"><?=$sp->pro_name?></a>
                                            </h3>
                                            <div class="product-price">
                                                <span>
                                                <?=$sp->pro_price?>
                                                    <sup>đ</sup>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                    <!-- End sp cùng loại -->
                                </div>
                            </div>
                            <div class="related-product">
                                <h2>LATEST PRODUCTS</h2>
                                <div class="product-list">
                                    <!-- Nhúng php 3sp -->
                                    <?php foreach ($dacnhSachTop3_new as $sp) : ?>
                                    <div class="item">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="giaodien/img/<?=$sp->pro_img?>" alt />
                                                <div class="product-label">
                                                    <span class="new"> New </span>
                                                </div>
                                            </a>
                                            <div class="product-extra-link">
                                                <a href="index.php?act=ctsp&pro_id=<?=$sp->pro_id?>" class="shop-button button-add">
                                                    <span>MUA HÀNG</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <span class="title12">IDSP: <?=$sp->pro_id?></span>
                                            <h3 class="product-title">
                                                <a href="index.php?act=ctsp&pro_id=<?=$sp->pro_id?>" title="POODLE TRẮNG XINH"><?=$sp->pro_name?></a>
                                            </h3>
                                            <div class="product-price">
                                                <span>
                                                    <?=$sp->pro_price?>
                                                    <sup>đ</sup>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                    <!-- End sp mới nhất -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Box right -->
                </div>
            </div>
        </div>
        <!-- End Main content -->
        <?php include "view/component/footer.php"; ?>
    </div>
    <script src="view/js/qty-cart.js"></script>
    <script src="view/js/slideshow.js"></script>
</body>

</html>