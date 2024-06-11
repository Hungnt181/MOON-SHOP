<div class="box-left">
    <div class="sidebar">
        <div class="widget widget-product-categories">
            <h3 class="widget-title">Danh mục</h3>
            <ul class="product-categories">
                <?php foreach($danhSachDm as $cate) :?>
                <li><a href="#"><?= $cate->cate_name ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="widget widget-product-categories">
            <h3 class="widget-title">TOP BÁN CHẠY</h3>
            <div class="list-pro-seller">
                <?php foreach ($dacnhSachTop5_hot as $sp) : ?>
                <div class="item-pro">
                    <div class="pro-thumb">
                        <a href="#">
                            <img src="giaodien/img/<?=$sp->pro_img?>" alt />
                        </a>
                    </div>
                    <div class="pro-info">
                        <h3 class="pro-title">
                            <a href="#"> <?=$sp->pro_name?> </a>
                        </h3>
                        <div class="pro-price">
                            <span>
                                <?=$sp->pro_price?>
                                <sup>đ</sup>
                            </span>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>