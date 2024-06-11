<header id="header">    
            <div class="top_header">

            <?php
                if (isset($_SESSION['account_name'])) { ?>
                    <ul>
                        <li>
                            <h4 id="xinchao">Xin chào <?=$_SESSION['account_name']?></h4>
                    
                        </li>
                    <li><i class="fa-solid fa-magnifying-glass"></i></li>
                    <li>
                        <i class="fa-solid fa-user"></i>
                        <ul class="sub_user">
                            <li><a href="?act=logout">Đăng xuất</a></li>
                            <li><a href="?act=dangky">Đăng ký</a></li>
                        </ul>
                    </li>
                    <li><a href="?act=cart"><i class="fa-solid fa-cart-shopping" style="color: black;"></i></a></li>
                    <li>
                        <a href="#">
                            <button>0</button>
                        </a>
                    </li>
                </ul>
              <?php  } else{ ?>
                <ul>
                    <li><i class="fa-solid fa-magnifying-glass"></i></li>
                    <li>
                        <i class="fa-solid fa-user"></i>
                        <ul class="sub_user">
                            <li><a href="?act=login">Đăng nhập</a></li>
                            <li><a href="?act=dangky">Đăng ký</a></li>
                        </ul>
                    </li>
                    <li><i class="fa-solid fa-cart-shopping"></i></li>
                    <li><button>0</button></li>
                </ul>
                <?php
              }
            ?>

               
            </div>
            <div class="menu">
                <div class="logo_header">
                    <a href="#"><center><img src="giaodien/img/Group 2.svg" alt=""></center></a>
                </div>
                <div class="list_menu">
                    <div class="list_menu_left">
                        <ul>
                            <li><a href="?act= ">Trang chủ</a></li>
                            <li><img src="img/sign.png" alt=""></li>
                            <li><a href="#">Giới thiệu</a></li>
                            <li><img src="img/sign.png" alt=""></li>
                            <li>
                                <a href="#">Sản phẩm</a>
                                <ul class="sub_menu">
                                    <?php
                                        // var_dump($danhSachDm);
                                        foreach($danhSachDm as $cate) :?>
                                        <li><a href="#"><?= $cate->cate_name ?></a></li>
                                    <?php endforeach; ?>

                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="list_menu_right">
                        <ul>
                            <li><a href="#">Dịch vụ</a></li>
                            <li><img src="img/sign.png" alt=""></li>
                            <li><a href="#">Cẩm nang</a></li>
                            <li><img src="img/sign.png" alt=""></li>
                            <li><a href="#">Liên hệ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>