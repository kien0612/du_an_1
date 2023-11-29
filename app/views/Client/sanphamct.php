        <!-- Begin Hiraola's Breadcrumb Area -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-content">
                    <h2>Single Product Type</h2>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Single Product</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Hiraola's Breadcrumb Area End Here -->

        <!-- sản phẩm chi tiết -->
        <?php
        extract($onesp);
        $url = "../../controllers/admin/upload/sanpham/";
        $image = $url . $anh_sp;
        ?>
        <div class="sp-area">
            <div class="container">
                <div class="sp-nav">
                    <div class="row">
                        <div class="col-lg-5 col-md-5">
                            <div class="sp-img_area">
                                <!-- zoom sản phẩm -->
                                <div class="zoompro-border">
                                    <img class="" src="<?= $image ?>" data-zoom-image="<?= $image ?>" alt="Hiraolas Product Image" />
                                </div>
                                <!-- <div id="gallery" class="sp-img_slider">
                                <a class="active" data-image="assets/images/single-product/large-size/1.jpg" hidden data-zoom-image="assets/images/single-product/large-size/1.jpg">
                                    <img src="assets/images/single-product/small-size/1.jpg" hidden alt="Hiraolas Product Image">
                                </a>
                                <a data-image="assets/images/single-product/large-size/2.jpg" data-zoom-image="assets/images/single-product/large-size/2.jpg">
                                    <img src="assets/images/single-product/small-size/2.jpg" hidden alt="Hiraolas Product Image">
                                </a>
                                <a data-image="assets/images/single-product/large-size/3.jpg" data-zoom-image="assets/images/single-product/large-size/3.jpg">
                                    <img src="assets/images/single-product/small-size/3.jpg" hidden alt="Hiraolas Product Image">
                                </a>
                                <a data-image="assets/images/single-product/large-size/4.jpg" data-zoom-image="assets/images/single-product/large-size/4.jpg">
                                    <img src="assets/images/single-product/small-size/4.jpg" hidden  alt="Hiraolas Product Image">
                                </a>
                                <a data-image="assets/images/single-product/large-size/5.jpg" data-zoom-image="assets/images/single-product/large-size/5.jpg">
                                    <img src="assets/images/single-product/small-size/5.jpg" hidden  alt="Hiraolas Product Image">
                                </a>
                                <a data-image="assets/images/single-product/large-size/6.jpg" data-zoom-image="assets/images/single-product/large-size/6.jpg">
                                    <img src="assets/images/single-product/small-size/6.jpg" hidden  alt="Hiraolas Product Image">
                                </a>
                            </div> -->
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                            <div class="sp-content">
                                <div class="sp-heading">
                                    <h5><a href="#"><?= $ten_sp ?></a></h5>
                                </div>
                                <span class="reference"><?= $mo_ta_sp ?></span>
                                <div class="rating-box">
                                    <ul>
                                        <li><i class="fa fa-star-of-david"></i></li>
                                        <li><i class="fa fa-star-of-david"></i></li>
                                        <li><i class="fa fa-star-of-david"></i></li>
                                        <li><i class="fa fa-star-of-david"></i></li>
                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                    </ul>
                                </div>
                                <div class="sp-essential_stuff">
                                    <ul>
                                        <li>Giá: <a href="javascript:void(0)"><span><?= number_format($gia_sp, 0, ',', '.') ?> VND</span></a></li>
                                        <li>Mã sản phẩm: <a href="javascript:void(0)">#<?= $id_sp ?></a></li>
                                        <li>Trạng thái: <a href="javascript:void(0)"><?= $trang_thai ?></a></li>
                                        <li>SỐ Lượng Còn: <a href="javascript:void(0)"><?= $so_luong ?></a></li>
                                    </ul>
                                </div>
                                <!-- kích cỡ sản phẩm -->
                                <!-- <div class="product-size_box">
                                    <span>Size</span>
                                    <select class="myniceselect nice-select">
                                        <option value="1">S</option>
                                        <option value="2">M</option>
                                        <option value="3">L</option>
                                        <option value="4">XL</option>
                                    </select>
                                </div> -->
                                <!-- số lượng -->
                                <div class="quantity">
                                    <label>Quantity</label>
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" value="1" type="text">
                                        <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                        <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                    </div>
                                </div>
                                <!-- mua hàng  -->
                                <div class="qty-btn_area">
                                    <ul>
                                        <li><a class="qty-cart_btn" href="index.php?act=giohang">Thêm vào giỏ hàng</a></li>
                                        <li><a class="qty-wishlist_btn" href="index.php?act=sanphamyeuthich" data-bs-toggle="tooltip" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                        <li><a class="qty-compare_btn" href="index.php?act=gioithieu" data-bs-toggle="tooltip" title="Compare This Product"><i class="ion-ios-shuffle-strong"></i></a></li>
                                    </ul>
                                </div>
                                <!-- danh mục -->
                                <!-- <div class="hiraola-tag-line">
                                <h6>Tags:</h6>
                                <a href="javascript:void(0)">Ring</a>,
                                <a href="javascript:void(0)">Necklaces</a>,
                                <a href="javascript:void(0)">Braid</a>
                            </div> -->
                                <!-- Link các nền tảng xã hội -->
                                <!-- <div class="hiraola-social_link">
                                <ul>
                                    <li class="facebook">
                                        <a href="https://www.facebook.com/" data-bs-toggle="tooltip" target="_blank" title="Facebook">
                                            <i class="fab fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="https://twitter.com/" data-bs-toggle="tooltip" target="_blank" title="Twitter">
                                            <i class="fab fa-twitter-square"></i>
                                        </a>
                                    </li>
                                    <li class="youtube">
                                        <a href="https://www.youtube.com/" data-bs-toggle="tooltip" target="_blank" title="Youtube">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </li>
                                    <li class="google-plus">
                                        <a href="https://www.plus.google.com/discover" data-bs-toggle="tooltip" target="_blank" title="Google Plus">
                                            <i class="fab fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li class="instagram">
                                        <a href="https://rss.com/" data-bs-toggle="tooltip" target="_blank" title="Instagram">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- kết thúc sản phẩm chi tiết -->

        <!-- thông tin sản phẩm -->
        <div class="hiraola-product-tab_area-2 sp-product-tab_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sp-product-tab_nav ">
                            <div class="product-tab">
                                <ul class="nav product-menu">
                                    <li><a class="active" data-bs-toggle="tab" href="#description"><span>THÔNG TIN</span></a>
                                    </li>
                                    <li><a data-bs-toggle="tab" href="#reviews"><span>BÌNH LUẬN</span></a></li>
                                </ul>
                            </div>
                            <!-- Mô tả sản phẩm chi tiết -->
                            <div class="tab-content hiraola-tab_content">
                                <div id="description" class="tab-pane active show" role="tabpanel">
                                    <div class="product-description">
                                        <ul>
                                            <li>
                                                <strong>Karat Gold</strong>
                                                <span>24K gold is called pure gold or fine gold. (99.99% pure) The color of fine
                                                    gold is a bright yellow with a bit of orange. Some say it is too soft for
                                                    jewelry application, but high karat gold is commonly worn in some parts of
                                                    the world, and it is growing in popularity in designer jewelry. Most will
                                                    prefer karat golds for their engagement rings, because of the needed
                                                    hardness to hold a gemstone.</span>
                                            </li>
                                            <li>
                                                <strong>Gold Colors</strong>
                                                <span>The most popular color is yellow which is made by adding silver and some
                                                    copper. The metals are melted together to form an alloy of the desired color
                                                    and karat. It is very important that all the ingredients are pure and that
                                                    the amounts of each are weighed very accurately to prevent porosity, which
                                                    weakens the alloy.</span>
                                            </li>
                                            <li>
                                                <strong>White alloys</strong>
                                                <span>There are two kinds of White Gold: Nickel based and Palladium based. Some
                                                    people are allergic to Nickel, so Palladium white gold is a good
                                                    alternative. Palladium white gold is the only legal alloy in Europe. It also
                                                    self burnishes and keeps a polish.</span>
                                            </li>
                                            <li>
                                                <strong>The Most Expensive Diamond Color</strong>
                                                <span>D colored diamonds are the rarest and most expensive of diamonds within
                                                    the D-Z scale. Certain fancy colored diamonds will command the highest
                                                    prices overall, and these will be discussed in separate tutorial. Many
                                                    people enjoy diamonds in the near colorless range G-J, as they find a
                                                    balance of size, clarity, and price to meet their needs.</span>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <!-- bình luận sản phẩm -->
                                <div id="reviews" class="tab-pane" role="tabpanel">
                                    <div class="tab-pane active" id="tab-review">
                                        <form class="form-horizontal" id="form-review">
                                           
                                    


                                            <!-- bình luât -->
                                            <?php
                                            if (isset($_SESSION['user'])) {
                                            ?>
                                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
                                                <script>
                                                    $(document).ready(function() {
                                                        $("#reviews").load("../../views/Client/binhluat/frombinhluat.php", {
                                                            id_sp: <?php echo $id_sp ?>
                                                        });
                                                    });
                                                </script>
                                                <div class="mb" id="binhluan">
                                                </div>
                                             
                                            <?php } else { ?>
                                                <div class="box_title" style="margin-bottom: 20px">Vui lòng đăng nhập để bình luận sản phẩm này</div>
                                            <?php } ?>
                                         
                                           
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- kết thúc-->

        <!-- 1 số sản phẩm khác -->
        <div class="hiraola-product_area hiraola-product_area-2 ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="hiraola-section_title">
                            <h4>ƯU ĐÃI ĐẶC BIỆT</h4>
                        </div>

                    </div>
                    <div class="col-lg-12">
                        <div class="hiraola-product_slider-3">

                            <!-- Begin Hiraola's Slide Item Area -->
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="index.php?act=sanphamct">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-1.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-2.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>
                                                <li><a class="hiraola-add_compare" href="index.php?act=gioithieu" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="index.php?act=sanphamct">Pendant, Made of White
                                                    Pl...</a></h6>
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
                                            <img class="primary-img" src="assets/images/product/medium-size/1-3.jpg" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-4.jpg" alt="Hiraola's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>
                                                <li><a class="hiraola-add_compare" href="index.php?act=gioithieu" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
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
                                        <span class="sticker-2">Sale</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>
                                                <li><a class="hiraola-add_compare" href="index.php?act=gioithieu" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
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
                                                <li><a class="hiraola-add_compare" href="index.php?act=gioithieu" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
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
                            </div>
                            <!-- Hiraola's Slide Item Area End Here -->
                            <!-- Begin Hiraola's Slide Item Area -->
                            <div class="slide-item">
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
                                                <li><a class="hiraola-add_compare" href="index.php?act=gioithieu" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
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
                                                <li><a class="hiraola-add_compare" href="index.php?act=gioithieu" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
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
                            </div>
                            <!-- Hiraola's Slide Item Area End Here -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- kết thúc -->

        <!-- 1 số sản phẩm ver2 -->
        <div class="hiraola-product_area hiraola-product_area-2 section-space_add">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="hiraola-section_title">
                            <h4>SẢN PHẨM TƯƠNG TỰ</h4>
                        </div>

                    </div>
                    <div class="col-lg-12">
                        <div class="hiraola-product_slider-3">

                            <!-- Begin Hiraola's Slide Item Area -->
                            <div class="slide-item">
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
                                                <li><a class="hiraola-add_compare" href="index.php?act=gioithieu" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
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
                                                <li><a class="hiraola-add_compare" href="index.php?act=gioithieu" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
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
                                                <li><a class="hiraola-add_compare" href="index.php?act=gioithieu" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
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
                                        <span class="sticker">New</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>
                                                <li><a class="hiraola-add_compare" href="index.php?act=gioithieu" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
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
                                        <span class="sticker-2">Sale</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="index.php?act=giohang" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>
                                                <li><a class="hiraola-add_compare" href="index.php?act=gioithieu" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
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
                                                <li><a class="hiraola-add_compare" href="index.php?act=gioithieu" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
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
                            </div>
                            <!-- Hiraola's Slide Item Area End Here -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- kết thúc -->