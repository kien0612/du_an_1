
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
                            <h6>Free Uk Standard Delivery</h6>
                            <p>Designated day delivery</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="shipping-item">
                        <div class="shipping-icon">
                            <img src="assets/images/shipping-icon/2.png" alt="Hiraola's Shipping Icon">
                        </div>
                        <div class="shipping-content">
                            <h6>Freshyly Prepared Ingredients</h6>
                            <p>Made for your delivery date</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="shipping-item">
                        <div class="shipping-icon">
                            <img src="assets/images/shipping-icon/3.png" alt="Hiraola's Shipping Icon">
                        </div>
                        <div class="shipping-content">
                            <h6>98% Of Anta Clients</h6>
                            <p>Reach their personal goals set</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="shipping-item">
                        <div class="shipping-icon">
                            <img src="assets/images/shipping-icon/4.png" alt="Hiraola's Shipping Icon">
                        </div>
                        <div class="shipping-content">
                            <h6>Winner Of 15 Awards</h6>
                            <p>Healthy food and drink 2022</p>
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
                    <?php       foreach ($listsp as $sp) {
                        extract($sp);
                        $linksp="index.php?act=sanphamct&id_sp=".$id_sp;  
                        $url = "../../controllers/admin/upload/sanpham/";
                        $image = $url . $anh_sp;
                    ?>
                    <div class="slide-item">
                        <div class="single_product">
                            <div class="product-img">
                            <?php echo'<a href="'.$linksp .'">'?>
                                            <img class=""  src="<?= $image ?>" alt="Hiraola's Product Image">
                                    <!-- <img class="secondary-img" src="assets/images/product/medium-size/1-2.jpg" alt="Hiraola's Product Image"> -->
                                </a>
                                <span class="sticker">HOT</span>
                                <!-- <span class="sticker">New</span> -->
                                <div class="add-actions">
                                    <ul>
                                    <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>

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
                    <!-- Hiraola's Slide Item Area End Here -->
                    <!-- Begin Hiraola's Slide Item Area -->
                    <!-- <div class="slide-item">
                        <div class="single_product">
                            <div class="product-img">
                                <a href="index.php?act=sanphamct">
                                    <img class="primary-img" src="assets/images/product/medium-size/1-3.jpg" alt="Hiraola's Product Image">
                                    <img class="secondary-img" src="assets/images/product/medium-size/1-4.jpg" alt="Hiraola's Product Image">
                                </a>
                                <span class="sticker">New</span>
                                <div class="add-actions">
                                    <ul>
                                        <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="hiraola-product_content">
                                <div class="product-desc_info">
                                    <h6><a class="product-name" href="index.php?act=sanphamct">Swirl 1 Medium Pendant
                                            La...</a></h6>
                                    <div class="price-box">
                                        <span class="new-price">£120.80</span>
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
                    </div> -->
                    <!-- Hiraola's Slide Item Area End Here -->
                    <!-- Begin Hiraola's Slide Item Area -->
                    <!-- <div class="slide-item">
                        <div class="single_product">
                            <div class="product-img">
                                <a href="index.php?act=sanphamct">
                                    <img class="primary-img" src="assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                    <img class="secondary-img" src="assets/images/product/medium-size/1-6.jpg" alt="Hiraola's Product Image">
                                </a>
                                <span class="sticker-2">Sale</span>
                                <div class="add-actions">
                                    <ul>
                                        <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="hiraola-product_content">
                                <div class="product-desc_info">
                                    <h6><a class="product-name" href="index.php?act=sanphamct">Work Lamp Silver Proin
                                            he...</a></h6>
                                    <div class="price-box">
                                        <span class="new-price">£135.20</span>
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
                                            <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                            <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                            <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- Hiraola's Slide Item Area End Here -->
                    <!-- Begin Hiraola's Slide Item Area -->
                    <!-- <div class="slide-item">
                        <div class="single_product">
                            <div class="product-img">
                                <a href="index.php?act=sanphamct">
                                    <img class="primary-img" src="assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                    <img class="secondary-img" src="assets/images/product/medium-size/1-8.jpg" alt="Hiraola's Product Image">
                                </a>
                                <span class="sticker">New</span>
                                <div class="add-actions">
                                    <ul>
                                        <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="hiraola-product_content">
                                <div class="product-desc_info">
                                    <h6><a class="product-name" href="index.php?act=sanphamct">Work Lamp Silver Proin
                                            he...</a></h6>
                                    <div class="price-box">
                                        <span class="new-price">£135.20</span>
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
                                            <li><i class="fa fa-star-of-david"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- Hiraola's Slide Item Area End Here -->
                    <!-- Begin Hiraola's Slide Item Area -->
                    <!-- <div class="slide-item">
                        <div class="single_product">
                            <div class="product-img">
                                <a href="index.php?act=sanphamct">
                                    <img class="primary-img" src="assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                    <img class="secondary-img" src="assets/images/product/medium-size/1-1.jpg" alt="Hiraola's Product Image">
                                </a>
                                <span class="sticker-2">Sale</span>
                                <div class="add-actions">
                                    <ul>
                                        <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="hiraola-product_content">
                                <div class="product-desc_info">
                                    <h6><a class="product-name" href="index.php?act=sanphamct">Vitra Sunburst Clock
                                            pret...</a></h6>
                                    <div class="price-box">
                                        <span class="new-price">£1199.60</span>
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
                    </div> -->
                    <!-- Hiraola's Slide Item Area End Here -->
                    <!-- Begin Hiraola's Slide Item Area -->
                    <!-- <div class="slide-item">
                        <div class="single_product">
                            <div class="product-img">
                                <a href="index.php?act=sanphamct">
                                    <img class="primary-img" src="assets/images/product/medium-size/1-2.jpg" alt="Hiraola's Product Image">
                                    <img class="secondary-img" src="assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                </a>
                                <span class="sticker">New</span>
                                <div class="add-actions">
                                    <ul>
                                        <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="hiraola-product_content">
                                <div class="product-desc_info">
                                    <h6><a class="product-name" href="index.php?act=sanphamct">Light Inverted Pendant
                                            Qu...</a></h6>
                                    <div class="price-box">
                                        <span class="new-price">£110.00</span>
                                        <span class="old-price">£110.00</span>
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
                                            <li><i class="fa fa-star-of-david"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- Hiraola's Slide Item Area End Here -->
                    <!-- Begin Hiraola's Slide Item Area -->
                    <!-- <div class="slide-item">
                        <div class="single_product">
                            <div class="product-img">
                                <a href="index.php?act=sanphamct">
                                    <img class="primary-img" src="assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                    <img class="secondary-img" src="assets/images/product/medium-size/1-3.jpg" alt="Hiraola's Product Image">
                                </a>
                                <span class="sticker">New</span>
                                <div class="add-actions">
                                    <ul>
                                        <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="hiraola-product_content">
                                <div class="product-desc_info">
                                    <h6><a class="product-name" href="index.php?act=sanphamct">JWDA Penant Lamp Brshed</a>
                                    </h6>
                                    <div class="price-box">
                                        <span class="new-price">£602.00</span>
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
                    </div> -->
                    <!-- Hiraola's Slide Item Area End Here -->
                    <!-- Begin Hiraola's Slide Item Area -->
                    <!-- <div class="slide-item">
                        <div class="single_product">
                            <div class="product-img">
                                <a href="index.php?act=sanphamct">
                                    <img class="primary-img" src="assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                    <img class="secondary-img" src="assets/images/product/medium-size/1-6.jpg" alt="Hiraola's Product Image">
                                </a>
                                <span class="sticker">New</span>
                                <div class="add-actions">
                                    <ul>
                                        <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="hiraola-product_content">
                                <div class="product-desc_info">
                                    <h6><a class="product-name" href="index.php?act=sanphamct">Suspensions Aplomb Large
                                            ...</a></h6>
                                    <div class="price-box">
                                        <span class="new-price">£602.00</span>
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
                    </div> -->
                    <!-- Hiraola's Slide Item Area End Here -->
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
                      <?php       foreach ($listsp as $sp) {
                        extract($sp);
                        $linksp="index.php?act=sanphamct&id_sp=".$id_sp;  
                        $url = "../../controllers/admin/upload/sanpham/";
                        $image = $url . $anh_sp;
                    ?>
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                    <?php echo'<a href="'.$linksp .'">'?>
                                            <img class="primary-img"  src="<?= $image ?>" alt="Hiraola's Product Image">
                                            <!-- <img class="secondary-img" src="assets/images/product/medium-size/1-8.jpg" alt="Hiraola's Product Image"> -->
                                          </a>
                                          <span class="sticker">New</span>
                                        <div class="add-actions">

                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>

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
                            <!-- <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-6.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <span class="sticker-2">Sale</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">Global Knives:
                                                    Profession...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£60.25</span>
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
                           
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-4.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">Flash Furniture
                                                    Alonza Se...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£76.44</span>
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
                                                    <li><i class="fa fa-star-of-david"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-3.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-2.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <span class="sticker-2">Sale</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">Work Lamp Silver
                                                    Proin
                                                    he...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£35.20</span>
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
                                                    <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-2.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">Global Knives:
                                                    Profession...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£60.25</span>
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
                            
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-6.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">Flash Furniture
                                                    Alonza Se...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£77.44</span>
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
                            
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-8.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">Pwoly and Bark Eames
                                                    Styl...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£23.43</span>
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
                            
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-4.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">Utensils and Knives
                                                    Block...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£50.43</span>
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
                            </div> -->
                          
                        </div>
                    </div>
                    <div id="earrings" class="tab-pane" role="tabpanel">
                        <div class="hiraola-product-tab_slider-2">
                            <!-- Begin Hiraola's Slide Item Area -->
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-2.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">Global Knives:
                                                    Profession...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£60.25</span>
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
                            <!-- Hiraola's Slide Item Area End Here -->
                            <!-- Begin Hiraola's Slide Item Area -->
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">Flash Furniture
                                                    Alonza Se...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£77.44</span>
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
                            <!-- Hiraola's Slide Item Area End Here -->
                            <!-- Begin Hiraola's Slide Item Area -->
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-8.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">Pwoly and Bark Eames
                                                    Styl...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£23.43</span>
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
                            <!-- Hiraola's Slide Item Area End Here -->
                            <!-- Begin Hiraola's Slide Item Area -->
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-4.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">Utensils and Knives
                                                    Block...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£50.43</span>
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
                            <!-- Hiraola's Slide Item Area End Here -->
                            <!-- Begin Hiraola's Slide Item Area -->
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-6.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-2.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">Flash Furniture
                                                    Alonza Se...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£90.36</span>
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
                            <!-- Hiraola's Slide Item Area End Here -->
                            <!-- Begin Hiraola's Slide Item Area -->
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-3.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-4.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <span class="sticker-2">Sale</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">Global Knives:
                                                    Profession...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£60.25</span>
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
                            <!-- Hiraola's Slide Item Area End Here -->
                            <!-- Begin Hiraola's Slide Item Area -->
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-6.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">Flash Furniture
                                                    Alonza Se...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£76.44</span>
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
                                                    <li><i class="fa fa-star-of-david"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Hiraola's Slide Item Area End Here -->
                            <!-- Begin Hiraola's Slide Item Area -->
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-8.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <span class="sticker-2">Sale</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">Work Lamp Silver
                                                    Proin
                                                    he...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£35.20</span>
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
                            <!-- Hiraola's Slide Item Area End Here -->
                        </div>
                    </div>
                    <div id="bracelet" class="tab-pane" role="tabpanel">
                        <div class="hiraola-product-tab_slider-2">
                            <!-- Begin Hiraola's Slide Item Area -->
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-3.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-2.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">Flash Furniture
                                                    Alonza Se...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£90.36</span>
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
                            <!-- Hiraola's Slide Item Area End Here -->
                            <!-- Begin Hiraola's Slide Item Area -->
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">George Nelson
                                                    Sunburst Cl...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£70.00</span>
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
                                                    <li><i class="fa fa-star-of-david"></i></li>
                                                    <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Hiraola's Slide Item Area End Here -->
                            <!-- Begin Hiraola's Slide Item Area -->
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-4.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-2.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">1 - 2 Person Outdoor
                                                    Camp...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£30.00</span>
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
                                                    <li><i class="fa fa-star-of-david"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Hiraola's Slide Item Area End Here -->
                            <!-- Begin Hiraola's Slide Item Area -->
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">Puoly and Bark Eames
                                                    Styl...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£60.00</span>
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
                            <!-- Hiraola's Slide Item Area End Here -->
                            <!-- Begin Hiraola's Slide Item Area -->
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-3.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">Puoly and Bark Eames
                                                    Styl...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£60.00</span>
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
                            <!-- Hiraola's Slide Item Area End Here -->
                            <!-- Begin Hiraola's Slide Item Area -->
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-3.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">George Nelson
                                                    Sunburst Cl...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£70.00</span>
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
                                                    <li><i class="fa fa-star-of-david"></i></li>
                                                    <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Hiraola's Slide Item Area End Here -->
                            <!-- Begin Hiraola's Slide Item Area -->
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-4.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-6.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <span class="sticker-2">Sale</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">Work Lamp Silver
                                                    Proin
                                                    he...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£35.20</span>
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
                            <!-- Hiraola's Slide Item Area End Here -->
                            <!-- Begin Hiraola's Slide Item Area -->
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-6.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-3.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">Flash Furniture
                                                    Alonza Se...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£77.44</span>
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
                            <!-- Hiraola's Slide Item Area End Here -->
                        </div>
                    </div>
                    <div id="anklet" class="tab-pane" role="tabpanel">
                        <div class="hiraola-product-tab_slider-2">
                            <!-- Begin Hiraola's Slide Item Area -->
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">Puoly and Bark Eames
                                                    Styl...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£60.00</span>
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
                                                    <li><i class="fa fa-star-of-david"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Hiraola's Slide Item Area End Here -->
                            <!-- Begin Hiraola's Slide Item Area -->
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-8.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">George Nelson
                                                    Sunburst Cl...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£70.00</span>
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
                            <!-- Hiraola's Slide Item Area End Here -->
                            <!-- Begin Hiraola's Slide Item Area -->
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-8.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                        <span class="sticker-2">Sale</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">Work Lamp Silver
                                                    Proin
                                                    he...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£35.20</span>
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
                            <!-- Hiraola's Slide Item Area End Here -->
                            <!-- Begin Hiraola's Slide Item Area -->
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-4.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">Flash Furniture
                                                    Alonza Se...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£77.44</span>
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
                                                    <li><i class="fa fa-star-of-david"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Hiraola's Slide Item Area End Here -->
                            <!-- Begin Hiraola's Slide Item Area -->
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">Pwoly and Bark Eames
                                                    Styl...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£99.60</span>
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
                            <!-- Hiraola's Slide Item Area End Here -->
                            <!-- Begin Hiraola's Slide Item Area -->
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-4.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">George Nelson
                                                    Sunburst Cl...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£70.00</span>
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
                                                    <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Hiraola's Slide Item Area End Here -->
                            <!-- Begin Hiraola's Slide Item Area -->
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-2.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">1 - 2 Person Outdoor
                                                    Camp...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£30.00</span>
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
                                                    <li><i class="fa fa-star-of-david"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Hiraola's Slide Item Area End Here -->
                            <!-- Begin Hiraola's Slide Item Area -->
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-6.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">Puoly and Bark Eames
                                                    Styl...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£60.00</span>
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
                            <!-- Hiraola's Slide Item Area End Here -->
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
                            <?php       foreach ($listsp as $sp) {
                        extract($sp);
                        $linksp="index.php?act=sanphamct&id_sp=".$id_sp;  
                        $url = "../../controllers/admin/upload/sanpham/";
                        $image = $url . $anh_sp;
                    ?>
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                    <?php echo'<a href="'.$linksp .'">'?>
                                            <img class="primary-img"  src="<?= $image ?>" alt="Hiraola's Product Image">
                                           
                                        </a>
                                        <span class="sticker">CHÁY</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>

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
                           
                            <!-- <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-8.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <span class="sticker-2">Sale</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">Work Lamp Silver
                                                    Proin
                                                    he...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£35.20</span>
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
                           
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-4.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">Flash Furniture
                                                    Alonza Se...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£77.44</span>
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
                                                    <li><i class="fa fa-star-of-david"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">Pwoly and Bark Eames
                                                    Styl...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£99.60</span>
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
                           
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-4.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">George Nelson
                                                    Sunburst Cl...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£70.00</span>
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
                                                    <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-2.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">1 - 2 Person Outdoor
                                                    Camp...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£30.00</span>
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
                                                    <li><i class="fa fa-star-of-david"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-6.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">Puoly and Bark Eames
                                                    Styl...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£60.00</span>
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
                            </div> -->
                           
                        </div>
                    </div>
                    <div id="earrings-2" class="tab-pane" role="tabpanel">
                        <div class="hiraola-product-tab_slider-2">
                            <!-- Begin Hiraola's Slide Item Area -->
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-3.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-2.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">Flash Furniture
                                                    Alonza Se...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£90.36</span>
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
                            <!-- Hiraola's Slide Item Area End Here -->
                            <!-- Begin Hiraola's Slide Item Area -->
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">George Nelson
                                                    Sunburst Cl...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£70.00</span>
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
                                                    <li><i class="fa fa-star-of-david"></i></li>
                                                    <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Hiraola's Slide Item Area End Here -->
                            <!-- Begin Hiraola's Slide Item Area -->
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-4.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-2.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">1 - 2 Person Outdoor
                                                    Camp...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£30.00</span>
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
                                                    <li><i class="fa fa-star-of-david"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Hiraola's Slide Item Area End Here -->
                            <!-- Begin Hiraola's Slide Item Area -->
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">Puoly and Bark Eames
                                                    Styl...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£60.00</span>
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
                            <!-- Hiraola's Slide Item Area End Here -->
                            <!-- Begin Hiraola's Slide Item Area -->
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-3.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">Puoly and Bark Eames
                                                    Styl...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£60.00</span>
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
                            <!-- Hiraola's Slide Item Area End Here -->
                            <!-- Begin Hiraola's Slide Item Area -->
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-3.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">George Nelson
                                                    Sunburst Cl...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£70.00</span>
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
                                                    <li><i class="fa fa-star-of-david"></i></li>
                                                    <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Hiraola's Slide Item Area End Here -->
                            <!-- Begin Hiraola's Slide Item Area -->
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-4.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-6.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <span class="sticker-2">Sale</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">Work Lamp Silver
                                                    Proin
                                                    he...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£35.20</span>
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
                            <!-- Hiraola's Slide Item Area End Here -->
                            <!-- Begin Hiraola's Slide Item Area -->
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-6.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-3.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">Flash Furniture
                                                    Alonza Se...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£77.44</span>
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
                            <!-- Hiraola's Slide Item Area End Here -->
                        </div>
                    </div>
                    <div id="bracelet-2" class="tab-pane" role="tabpanel">
                        <div class="hiraola-product-tab_slider-2">
                            <!-- Begin Hiraola's Slide Item Area -->
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-2.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">Global Knives:
                                                    Profession...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£60.25</span>
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
                            <!-- Hiraola's Slide Item Area End Here -->
                            <!-- Begin Hiraola's Slide Item Area -->
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">Flash Furniture
                                                    Alonza Se...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£77.44</span>
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
                            <!-- Hiraola's Slide Item Area End Here -->
                            <!-- Begin Hiraola's Slide Item Area -->
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-8.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">Pwoly and Bark Eames
                                                    Styl...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£23.43</span>
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
                            <!-- Hiraola's Slide Item Area End Here -->
                            <!-- Begin Hiraola's Slide Item Area -->
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-4.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">Utensils and Knives
                                                    Block...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£50.43</span>
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
                            <!-- Hiraola's Slide Item Area End Here -->
                            <!-- Begin Hiraola's Slide Item Area -->
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-6.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-2.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">Flash Furniture
                                                    Alonza Se...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£90.36</span>
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
                            <!-- Hiraola's Slide Item Area End Here -->
                            <!-- Begin Hiraola's Slide Item Area -->
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-3.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-4.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <span class="sticker-2">Sale</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">Global Knives:
                                                    Profession...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£60.25</span>
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
                            <!-- Hiraola's Slide Item Area End Here -->
                            <!-- Begin Hiraola's Slide Item Area -->
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-6.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">Flash Furniture
                                                    Alonza Se...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£76.44</span>
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
                                                    <li><i class="fa fa-star-of-david"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Hiraola's Slide Item Area End Here -->
                            <!-- Begin Hiraola's Slide Item Area -->
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-8.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <span class="sticker-2">Sale</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">Work Lamp Silver
                                                    Proin
                                                    he...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£35.20</span>
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
                            <!-- Hiraola's Slide Item Area End Here -->
                        </div>
                    </div>
                    <div id="anklet-2" class="tab-pane" role="tabpanel">
                        <div class="hiraola-product-tab_slider-2">
                            <!-- Begin Hiraola's Slide Item Area -->
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-8.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">Flash Furniture
                                                    Alonza Se...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£90.36</span>
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
                            <!-- Hiraola's Slide Item Area End Here -->
                            <!-- Begin Hiraola's Slide Item Area -->
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-6.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <span class="sticker-2">Sale</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">Global Knives:
                                                    Profession...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£60.25</span>
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
                            <!-- Hiraola's Slide Item Area End Here -->
                            <!-- Begin Hiraola's Slide Item Area -->
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-4.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">Flash Furniture
                                                    Alonza Se...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£76.44</span>
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
                                                    <li><i class="fa fa-star-of-david"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Hiraola's Slide Item Area End Here -->
                            <!-- Begin Hiraola's Slide Item Area -->
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-3.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-2.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <span class="sticker-2">Sale</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">Work Lamp Silver
                                                    Proin
                                                    he...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£35.20</span>
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
                                                    <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Hiraola's Slide Item Area End Here -->
                            <!-- Begin Hiraola's Slide Item Area -->
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-2.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">Global Knives:
                                                    Profession...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£60.25</span>
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
                            <!-- Hiraola's Slide Item Area End Here -->
                            <!-- Begin Hiraola's Slide Item Area -->
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-6.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">Flash Furniture
                                                    Alonza Se...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£77.44</span>
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
                            <!-- Hiraola's Slide Item Area End Here -->
                            <!-- Begin Hiraola's Slide Item Area -->
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-8.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">Pwoly and Bark Eames
                                                    Styl...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£23.43</span>
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
                            <!-- Hiraola's Slide Item Area End Here -->
                            <!-- Begin Hiraola's Slide Item Area -->
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-4.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">Utensils and Knives
                                                    Block...</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">£50.43</span>
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
                            <!-- Hiraola's Slide Item Area End Here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>