<!-- slide show phần header-->
<div class="hiraola-slider_area-2">
    <div class="main-slider">
        <!-- Begin Single Slide Area -->
        <div class="single-slide animation-style-01 bg-4">
            <div class="container">
                <div class="slider-content">
                    <h5><span>Black Friday</span> This Week</h5>
                    <h2>Work Desk</h2>
                    <h3>Surface Studio 2022</h3>
                    <h4>Starting at <span>£1599.00</span></h4>
                    <div class="hiraola-btn-ps_center slide-btn">
                        <a class="hiraola-btn" href="index.php?act=sanpham">Shopping Now</a>
                    </div>
                </div>
                <div class="slider-progress"></div>
            </div>
        </div>
        <!-- Single Slide Area End Here -->
        <!-- Begin Single Slide Area -->
        <div class="single-slide animation-style-02 bg-5">
            <div class="container">
                <div class="slider-content">
                    <h5><span>-10% Off</span> This Week</h5>
                    <h2>Phantom4</h2>
                    <h3>Pro+ Obsidian</h3>
                    <h4>Starting at <span>£809.00</span></h4>
                    <div class="hiraola-btn-ps_center slide-btn">
                        <a class="hiraola-btn" href="index.php?act=sanpham">Shopping Now</a>
                    </div>
                </div>
                <div class="slider-progress"></div>
            </div>
        </div>
        <!-- Single Slide Area End Here -->
    </div>
</div>
<!-- thanh 4 icon dưới phần slide show -->
<div class="hiraola-shipping_area hiraola-shipping_area-2">
    <div class="container">
        <div class="shipping-nav">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="shipping-item">
                        <div class="shipping-icon">
                            <img src="assets/images/shipping-icon/1.png" alt="Hiraola's Shipping Icon">
                        </div>
                        <div class="shipping-content">
                            <h6>Giao hàng Miễn phí</h6>
                            <p>Giao hàng theo ngày chỉ định</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="shipping-item">
                        <div class="shipping-icon">
                            <img src="assets/images/shipping-icon/2.png" alt="Hiraola's Shipping Icon">
                        </div>
                        <div class="shipping-content">
                            <h6>Nguyên liệu đạt chuẩn</h6>
                            <p>Nguyên liệu đầu vào nghiên ngặt</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="shipping-item">
                        <div class="shipping-icon">
                            <img src="assets/images/shipping-icon/3.png" alt="Hiraola's Shipping Icon">
                        </div>
                        <div class="shipping-content">
                            <h6>98% khách hàng của shop</h6>
                            <p>Đạt được mục tiêu cá nhân của họ đã đặt ra</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="shipping-item">
                        <div class="shipping-icon">
                            <img src="assets/images/shipping-icon/4.png" alt="Hiraola's Shipping Icon">
                        </div>
                        <div class="shipping-content">
                            <h6>Giải thưởng danh giá</h6>
                            <p>Đạt được nhiều giải thưởng danh giá</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- sản phẩm mới -->
<div class="hiraola-product_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="hiraola-section_title">
                    <h4>SẢN PHẨM HOT</h4>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="hiraola-product_slider">
                    <!-- Begin Hiraola's Slide Item Area -->
                    <?php foreach ($listsp as $sp) {
                        extract($sp);
                        $linksp = "index.php?act=sanphamct&id_sp=" . $id_sp;
                        $url = "../../controllers/admin/upload/sanpham/";
                        $image = $url . $anh_sp;
                    ?>
                        <div class="slide-item">
                            <div class="single_product">
                                <div class="product-img">
                                    <?php echo '<a href="' . $linksp . '">' ?>
                                    <img class="" src="<?= $image ?>" alt="Hiraola's Product Image">
                                    <!-- <img class="secondary-img" src="assets/images/product/medium-size/1-2.jpg" alt="Hiraola's Product Image"> -->
                                    </a>
                                    <span class="sticker">HOT</span>
                                    <!-- <span class="sticker">New</span> -->
                                    <div class="add-actions">
                                        <ul>
                                        <?php
                                                if (isset($_SESSION['user'])) {
                                                ?>
                                                   <li><a class="hiraola-add_cart" href="#" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i data-id=<?= $id_sp ?> class="ion-bag btnCart" onclick="addToCart(<?= $id_sp ?>,'<?= $ten_sp ?>',<?= $gia_sp ?>)"></i></a>
                                                </li>

                                                    <div class="mb" id="binhluan">
                                                    </div>

                                                <?php } else { ?>
                                                    <li><a class="hiraola-add_cart" href="#" data-bs-toggle="tooltip" data-placement="top" title="Vui lòng đăng Nhập"><i  class="ion-bag btnCart" ></i></a>
                                                </li>
                                                <?php } ?>

                                        </ul>
                                    </div>
                                </div>
                                <div class="hiraola-product_content">
                                    <div class="product-desc_info">
                                        <h6><a class="product-name" ref="index.php?act=sanphamct"><?= $ten_sp ?></a></h6>
                                        <div class="price-box">
                                            <span class="new-price"><?= number_format($gia_sp, 0, ',', '.') ?> VND</span>
                                        </div>
                                        <div class="additional-add_action">
                                            <ul>
                                                <li><a class="hiraola-add_compare" href="index.php?act=sanphamyeuthich" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php  } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner quảng cáo sản phẩm giảm giá -->
<div class="static-banner_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="static-banner-image">
                    <div class="static-banner-content">
                        <p><span>-25% Off</span>This Week</p>
                        <h2>Featured Product</h2>
                        <h3>Meito Accessories 2022</h3>
                        <p class="schedule">
                            Starting at
                            <span> £1209.00</span>
                        </p>
                        <div class="hiraola-btn-ps_left">
                            <a href="index.php?act=sanpham" class="hiraola-btn">Shopping Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- sản phẩm mới -->
<div class="hiraola-product-tab_area-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="product-tab">
                    <div class="hiraola-tab_title">
                        <h4>SẢN PHẨM MỚI</h4>
                    </div>
                    <!-- <ul class="nav product-menu">
                        <li><a class="active" data-bs-toggle="tab" href="#necklaces"><span>Necklaces</span></a></li>
                        <li><a data-bs-toggle="tab" href="#earrings"><span>Earrings</span></a></li>
                        <li><a data-bs-toggle="tab" href="#bracelet"><span>Bracelet</span></a></li>
                        <li><a data-bs-toggle="tab" href="#anklet"><span>Anklet</span></a></li>
                    </ul> -->
                </div>
                <div class="tab-content hiraola-tab_content">
                    <div id="necklaces" class="tab-pane active show" role="tabpanel">
                        <div class="hiraola-product-tab_slider-2">
                            <!-- Begin Hiraola's Slide Item Area -->
                            <?php foreach ($listsp as $sp) {
                                extract($sp);
                                $linksp = "index.php?act=sanphamct&id_sp=" . $id_sp;
                                //include "../../controllers/admin/upload/";
                                $url = "../../controllers/admin/upload/sanpham/";
                                $image = $url . $anh_sp;
                            ?>
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <?php echo '<a href="' . $linksp . '">' ?>
                                            <img class="primary-img" src="<?= $image ?>" alt="Hiraola's Product Image">
                                            <!-- <img class="secondary-img" src="assets/images/product/medium-size/1-8.jpg" alt="Hiraola's Product Image"> -->
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                <?php
                                                if (isset($_SESSION['user'])) {
                                                ?>
                                                   <li><a class="hiraola-add_cart" href="#" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i data-id=<?= $id_sp ?> class="ion-bag btnCart" onclick="addToCart(<?= $id_sp ?>,'<?= $ten_sp ?>',<?= $gia_sp ?>)"></i></a>
                                                </li>

                                                    <div class="mb" id="binhluan">
                                                    </div>

                                                <?php } else { ?>
                                                    <li><a class="hiraola-add_cart" href="#" data-bs-toggle="tooltip" data-placement="top" title="Vui lòng đăng Nhập"><i  class="ion-bag btnCart" ></i></a>
                                                </li>
                                                <?php } ?>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="index.php?act=sanphamct"><?= $ten_sp ?></a></a></h6>
                                                <div class="price-box">

                                                    <span class="new-price"><?= number_format($gia_sp, 0, ',', '.') ?> VND</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="index.php?act=sanphamyeuthich" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- baner dây chuyền và bông tai -->

<div class="hiraola-banner_area-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="banner-item img-hover_effect">
                    <a href="index.php?act=sanpham">
                        <img class="img-full" src="assets/images/banner/1_5.jpg" alt="Hiraola's Banner">
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="banner-item img-hover_effect">
                    <a href="index.php?act=sanpham">
                        <img class="img-full" src="assets/images/banner/1_6.jpg" alt="Hiraola's Banner">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- sản phẩm trending top -->
<div class="hiraola-product-tab_area-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="product-tab">
                    <div class="hiraola-tab_title">
                        <h4>SẢN PHẨM TRENDING</h4>
                    </div>
                    <!-- <ul class="nav product-menu">
                        <li><a class="active" data-bs-toggle="tab" href="#necklaces-2"><span>Necklaces</span></a></li>
                        <li><a data-bs-toggle="tab" href="#earrings-2"><span>Earrings</span></a></li>
                        <li><a data-bs-toggle="tab" href="#bracelet-2"><span>Bracelet</span></a></li>
                        <li><a data-bs-toggle="tab" href="#anklet-2"><span>Anklet</span></a></li>
                    </ul> -->
                </div>
                <div class="tab-content hiraola-tab_content">
                    <div id="necklaces-2" class="tab-pane active show" role="tabpanel">
                        <div class="hiraola-product-tab_slider-2">
                            <!-- Begin Hiraola's Slide Item Area -->
                            <?php foreach ($listsp as $sp) {
                                extract($sp);
                                $linksp = "index.php?act=sanphamct&id_sp=" . $id_sp;
                                $url = "../../controllers/admin/upload/sanpham/";
                                $image = $url . $anh_sp;
                            ?>
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <?php echo '<a href="' . $linksp . '">' ?>
                                            <img class="primary-img" src="<?= $image ?>" alt="Hiraola's Product Image">

                                            </a>
                                            <span class="sticker">CHÁY</span>
                                            <div class="add-actions">
                                                <ul>
                                                <?php
                                                if (isset($_SESSION['user'])) {
                                                ?>
                                                   <li><a class="hiraola-add_cart" href="#" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i data-id=<?= $id_sp ?> class="ion-bag btnCart" onclick="addToCart(<?= $id_sp ?>,'<?= $ten_sp ?>',<?= $gia_sp ?>)"></i></a>
                                                </li>

                                                    <div class="mb" id="binhluan">
                                                    </div>

                                                <?php } else { ?>
                                                    <li><a class="hiraola-add_cart" href="#" data-bs-toggle="tooltip" data-placement="top" title="Vui lòng đăng Nhập"><i  class="ion-bag btnCart" ></i></a>
                                                </li>
                                                <?php } ?>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="index.php?act=sanphamct"><?= $ten_sp ?></a></h6>
                                                <div class="price-box">
                                                    <span class="new-price"><?= number_format($gia_sp, 0, ',', '.') ?> VND</span>
                                                    <span class="old-price">£85.00</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="index.php?act=sanphamyeuthich" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php  } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    let totalProduct = document.getElementById('totalProduct');

    function addToCart(productId, productName, productPrice) {
        // console.log(productId ,productName ,productPrice);
        $.ajax({
            type: 'POST',
            url: '../../views/Client/addToCart.php',
            data: {
                id: productId,
                name: productName,
                price: productPrice
            },
            success: function(response) {
                totalProduct.innerText = response;
                alert('Bạn đã thêm sản phẩm vào giỏ hàng thành công!')
            },
            error: function(error) {
                console.log(error);
            }
        });
    }
</script>