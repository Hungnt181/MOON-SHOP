<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoonPet Store</title>
    <link rel="shortcut icon" href="img/Group 2.svg" type="image/x-icon">
    <link rel="stylesheet" href="giaodien/Clientstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="https://kit.fontawesome.com/6dab569175.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <?php
        include "view/component/header.php";
        ?>
        <main>
            <?php
            include "view/component/intro.php";
            ?>

            <!-- Sản phẩm mới -->
            <div class="new_product">
                <div class="bg_title">
                    <img src="giaodien/img/hot_product.png" alt="">
                </div>
                <h2>SẢN PHẨM MỚI</h2>
                <div class="box_product">
                    <?php
                    // var_dump($dacnhSachTop8 );
                    foreach ($dacnhSachTop8_new as $sp) : ?>
                        <div class="product_item">
                            <div class="img_product">
                                <a href="index.php?act=ctsp"><img src="giaodien/img/<?= $sp->pro_img ?>" alt=""></a>


                                <div class="hover_product">


                                    <form action="?act=cart" method="post">

                                        <input type="hidden" name="pro_id" value="<?= $sp->pro_id ?>">

                                        <input type="hidden" name="soluong" value="1">

                                        <a href=""><button name="addTocart">Mua hàng</button></a>
                                    </form>


                                </div>



                            </div>
                            <div class="detail_product">
                                <a href="index.php?act=ctsp&pro_id=<?=$sp->pro_id?>">
                                    <h3><?= $sp->pro_name ?></h3>
                                </a>
                                <span><?= $sp->pro_price ?><sup>đ</sup></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- End .product_item -->
            </div>
            <!-- </div> -->
            <!-- Sản phẩm nổi bật -->
            <div class="hot_product">
                <div class="bg_title">
                    <img src="giaodien/img/hot_product.png" alt="">
                </div>
                <h2>SẢN PHẨM NỔI BẬT</h2>
                <div class="box_product">
                    <?php
                    // var_dump($dacnhSachTop8 );
                    foreach ($dacnhSachTop8_hot as $sp) : ?>
                        <div class="product_item">
                            <div class="img_product">
                                <a href="#"><img src="giaodien/img/<?= $sp->pro_img ?>" alt=""></a>
                                <div class="hover_product">
                                    <form action="?act=cart" method="post">

                                        <input type="hidden" name="pro_id" value="<?= $sp->pro_id ?>">

                                        <input type="hidden" name="soluong" value="1">

                                        <a href=""><button name="addTocart">Mua hàng</button></a>
                                    </form>

                                </div>
                            </div>
                            <div class="detail_product">
                                <a href="index.php?act=ctsp&pro_id=<?=$sp->pro_id?>">
                                    <h3><?= $sp->pro_name ?></h3>
                                </a>
                                <span><?= $sp->pro_price ?><sup>đ</sup></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <!-- End .product_item -->
                </div>
            </div>
        </main>
        <?php
        include "view/component/footer.php";
        ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script>
        $(document).ready(function() {
            // Tìm <li> có sub
            $('.sub_menu').parent('li').addClass('has_child');
            $('.sub_user').parent('li').addClass('has_child');
        })
    </script>

    <script src="view/JS/slideshow.js">

    </script>
</body>

</html>