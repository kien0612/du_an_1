<!-- Begin Hiraola's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Shop</h2>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li class="active">Shop Left Sidebar</li>
            </ul>
        </div>
    </div>
</div>
<!-- Hiraola's Breadcrumb Area End Here -->

<!-- Begin Hiraola's Content Wrapper Area -->
<div class="hiraola-content_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 order-2 order-lg-1">
                <div class="hiraola-sidebar-catagories_area">
                    <div class="hiraola-sidebar_categories">
                        <div class="hiraola-categories_title">
                            <h5>Price</h5>
                        </div>
                        <div class="price-filter">
                            <div id="slider-range"></div>
                            <div class="price-slider-amount">
                                <div class="label-input">
                                    <label>price : </label>
                                    <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                </div>
                                <button type="button">Filter</button>
                            </div>
                        </div>
                    </div>
                    <div class="hiraola-sidebar_categories">
                        <div class="hiraola-categories_title">
                            <h5>Brand</h5>
                        </div>
                        <ul class="sidebar-checkbox_list">
                            <li>
                                <a href="javascript:void(0)">Brand 1(15)</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Brand 2(16)</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Brand 3(16)</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Brand 4(17)</a>
                            </li>
                        </ul>
                    </div>
                    <div class="hiraola-sidebar_categories">
                        <div class="hiraola-categories_title">
                            <h5>Size</h5>
                        </div>
                        <ul class="sidebar-checkbox_list">
                            <li>
                                <a href="javascript:void(0)">Size 1(17)</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Size 2(16)</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Size 3(17)</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Size 4(17)</a>
                            </li>
                        </ul>
                    </div>
                    <div class="hiraola-sidebar_categories">
                        <div class="hiraola-categories_title">
                            <h5>Weight</h5>
                        </div>
                        <ul class="sidebar-checkbox_list">
                            <li>
                                <a href="javascript:void(0)">Weight 1(16)</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Weight 2(17)</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Weight 3(17)</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Weight 4(17)</a>
                            </li>
                        </ul>
                    </div>
                    <div class="category-module hiraola-sidebar_categories">
                        <div class="category-module_heading">
                            <h5>Categories</h5>
                        </div>
                        <div class="module-body">
                            <ul class="module-list_item">
                                <li>
                                    <a href="javascript:void(0)">Hand Harness (18)</a>
                                    <ul class="module-sub-list_item">
                                        <li>
                                            <a href="javascript:void(0)">Maang Tika (18)</a>
                                            <a href="javascript:void(0)">Toe Rings (18)</a>
                                            <a href="javascript:void(0)">Traditional Earrings (18)</a>
                                            <a href="javascript:void(0)">Kada Cum Bracelet (18)</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Exquisite Rings (18)</a>
                                    <a href="javascript:void(0)">Necklaces (18)</a>
                                    <a href="javascript:void(0)">Foot Harness (18)</a>
                                    <a href="javascript:void(0)">Braid Jewels (18)</a>
                                    <a href="javascript:void(0)">Anklet (18)</a>
                                    <a href="javascript:void(0)">Graceful Armlet (18)</a>
                                    <a href="javascript:void(0)">Magna Pellentesq (18)</a>
                                    <a href="javascript:void(0)">Molestie Tortor (18)</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- <div class="sidebar-banner_area">
                            <div class="banner-item img-hover_effect">
                                <a href="javascript:void(0)">
                                    <img src="assets/images/banner/1_1.jpg" alt="Hiraola's Shop Banner Image">
                                </a>
                            </div>
                        </div> -->
            </div>
            <div class="col-lg-9 order-1 order-lg-2">
                <div class="shop-toolbar">
                    <div class="product-view-mode">
                        <a class="active grid-3" data-target="gridview-3" data-toggle="tooltip" data-placement="top" title="Grid View"><i class="fa fa-th"></i></a>
                        <a class="list" data-target="listview" data-toggle="tooltip" data-placement="top" title="List View"><i class="fa fa-th-list"></i></a>
                    </div>
                    <div class="product-item-selection_area">
                        <div class="product-short">
                            <label class="select-label">Short By:</label>
                            <select class="nice-select">
                                <option value="1">Relevance</option>
                                <option value="2">Name, A to Z</option>
                                <option value="3">Name, Z to A</option>
                                <option value="4">Price, low to high</option>
                                <option value="5">Price, high to low</option>
                                <option value="5">Rating (Highest)</option>
                                <option value="5">Rating (Lowest)</option>
                                <option value="5">Model (A - Z)</option>
                                <option value="5">Model (Z - A)</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="shop-product-wrap grid gridview-3 row">
                    <?php

                    foreach ($listsp as $sp) {
                        extract($sp);
                        //include "../../controllers/admin/upload/";
                        $url = "../../controllers/admin/upload/sanpham/";
                        $image = $url . $anh_sp;
                    ?>
                        <div class="col-lg-4">
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" src="<?= $image ?>" alt="Hiraola's Product Image">
                                        </a>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li> 
                                                <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="single-product.html"><?= $ten_sp ?></a></h6>
                                            <div class="price-box">
                                                <span class="new-price"><?= number_format($gia_sp, 0, ',', '.') ?> VND</span>
                                            </div>
                                            <div class="additional-add_action">
                                                <ul>
                                                    <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
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
                            <div class="list-slide_item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" src="<?= $image ?>" alt="Hiraola's Product Image">
                                        </a>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="single-product.html"><?= $ten_sp ?></a></h6>
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="fa fa-star-of-david"></i></li>
                                                    <li><i class="fa fa-star-of-david"></i></li>
                                                    <li><i class="fa fa-star-of-david"></i></li>
                                                    <li><i class="fa fa-star-of-david"></i></li>
                                                    <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                </ul>
                                            </div>
                                            <div class="price-box">
                                                <span class="new-price"><?= number_format($gia_sp, 0, ',', '.') ?> VND</span>
                                            </div>
                                            <div class="product-short_desc">
                                                <p><?= $mo_ta_sp ?></p>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart">Add To Cart</a></li>
                                                <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                    <!-- <div class="col-lg-4">
                        <div class="slide-item">
                            <div class="single_product">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img class="primary-img" src="assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                        <img class="secondary-img" src="assets/images/product/medium-size/1-6.jpg" alt="Hiraola's Product Image">
                                    </a>
                                    <span class="sticker-2">Sale</span>
                                    <div class="add-actions">
                                        <ul>
                                            <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                            </li>
                                            <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i class="ion-ios-shuffle-strong"></i></a>
                                            </li>
                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="hiraola-product_content">
                                    <div class="product-desc_info">
                                        <h6><a class="product-name" href="single-product.html">Global Knives:
                                                Profession...</a></h6>
                                        <div class="price-box">
                                            <span class="new-price">£60.25</span>
                                        </div>
                                        <div class="additional-add_action">
                                            <ul>
                                                <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
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
                        <div class="list-slide_item">
                            <div class="single_product">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img class="primary-img" src="assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                        <img class="secondary-img" src="assets/images/product/medium-size/1-6.jpg" alt="Hiraola's Product Image">
                                    </a>
                                </div>
                                <div class="hiraola-product_content">
                                    <div class="product-desc_info">
                                        <h6><a class="product-name" href="single-product.html">Global Knives:
                                                Profession...</a></h6>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                            </ul>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">£60.25</span>
                                        </div>
                                        <div class="product-short_desc">
                                            <p>The effects of gold are subtle, but definitely apparent. ... It was
                                                considered that gold possessed an energy that brought warm, soothing
                                                vibrations to the body to aid healing, for when the body relaxes and the
                                                blood vessels in the cells aren't as constricted, blood can move through
                                                the tissue spaces more easily.</p>
                                        </div>
                                    </div>
                                    <div class="add-actions">
                                        <ul>
                                            <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart">Add To Cart</a></li>
                                            <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i class="ion-ios-shuffle-strong"></i></a></li>
                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                            <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="slide-item">
                            <div class="single_product">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img class="primary-img" src="assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                        <img class="secondary-img" src="assets/images/product/medium-size/1-4.jpg" alt="Hiraola's Product Image">
                                    </a>
                                    <div class="add-actions">
                                        <ul>
                                            <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                            </li>
                                            <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i class="ion-ios-shuffle-strong"></i></a>
                                            </li>
                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="hiraola-product_content">
                                    <div class="product-desc_info">
                                        <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                Alonza Se...</a></h6>
                                        <div class="price-box">
                                            <span class="new-price">£76.44</span>
                                        </div>
                                        <div class="additional-add_action">
                                            <ul>
                                                <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
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
                        <div class="list-slide_item">
                            <div class="single_product">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img class="primary-img" src="assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                        <img class="secondary-img" src="assets/images/product/medium-size/1-4.jpg" alt="Hiraola's Product Image">
                                    </a>
                                </div>
                                <div class="hiraola-product_content">
                                    <div class="product-desc_info">
                                        <h6><a class="product-name" href="single-product.html">Ipoly and Bark Eames
                                                Style...</a></h6>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                            </ul>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">£90.36</span>
                                        </div>
                                        <div class="product-short_desc">
                                            <p>The effects of gold are subtle, but definitely apparent. ... It was
                                                considered that gold possessed an energy that brought warm, soothing
                                                vibrations to the body to aid healing, for when the body relaxes and the
                                                blood vessels in the cells aren't as constricted, blood can move through
                                                the tissue spaces more easily.</p>
                                        </div>
                                    </div>
                                    <div class="add-actions">
                                        <ul>
                                            <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart">Add To Cart</a></li>
                                            <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i class="ion-ios-shuffle-strong"></i></a></li>
                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                            <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="slide-item">
                            <div class="single_product">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img class="primary-img" src="assets/images/product/medium-size/1-3.jpg" alt="Hiraola's Product Image">
                                        <img class="secondary-img" src="assets/images/product/medium-size/1-2.jpg" alt="Hiraola's Product Image">
                                    </a>
                                    <span class="sticker-2">Sale</span>
                                    <div class="add-actions">
                                        <ul>
                                            <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                            </li>
                                            <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i class="ion-ios-shuffle-strong"></i></a>
                                            </li>
                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="hiraola-product_content">
                                    <div class="product-desc_info">
                                        <h6><a class="product-name" href="single-product.html">Work Lamp Silver
                                                Proin
                                                he...</a></h6>
                                        <div class="price-box">
                                            <span class="new-price">£35.20</span>
                                        </div>
                                        <div class="additional-add_action">
                                            <ul>
                                                <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
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
                        <div class="list-slide_item">
                            <div class="single_product">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img class="primary-img" src="assets/images/product/medium-size/1-3.jpg" alt="Hiraola's Product Image">
                                        <img class="secondary-img" src="assets/images/product/medium-size/1-2.jpg" alt="Hiraola's Product Image">
                                    </a>
                                </div>
                                <div class="hiraola-product_content">
                                    <div class="product-desc_info">
                                        <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                Alonza Se...</a></h6>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                            </ul>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">£54.36</span>
                                        </div>
                                        <div class="product-short_desc">
                                            <p>The effects of gold are subtle, but definitely apparent. ... It was
                                                considered that gold possessed an energy that brought warm, soothing
                                                vibrations to the body to aid healing, for when the body relaxes and the
                                                blood vessels in the cells aren't as constricted, blood can move through
                                                the tissue spaces more easily.</p>
                                        </div>
                                    </div>
                                    <div class="add-actions">
                                        <ul>
                                            <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart">Add To Cart</a></li>
                                            <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i class="ion-ios-shuffle-strong"></i></a></li>
                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                            <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="slide-item">
                            <div class="single_product">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img class="primary-img" src="assets/images/product/medium-size/1-2.jpg" alt="Hiraola's Product Image">
                                        <img class="secondary-img" src="assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                    </a>
                                    <span class="sticker">New</span>
                                    <div class="add-actions">
                                        <ul>
                                            <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                            </li>
                                            <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i class="ion-ios-shuffle-strong"></i></a>
                                            </li>
                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="hiraola-product_content">
                                    <div class="product-desc_info">
                                        <h6><a class="product-name" href="single-product.html">Global Knives:
                                                Profession...</a></h6>
                                        <div class="price-box">
                                            <span class="new-price">£60.25</span>
                                        </div>
                                        <div class="additional-add_action">
                                            <ul>
                                                <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
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
                        <div class="list-slide_item">
                            <div class="single_product">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img class="primary-img" src="assets/images/product/medium-size/1-2.jpg" alt="Hiraola's Product Image">
                                        <img class="secondary-img" src="assets/images/product/medium-size/1-1.jpg" alt="Hiraola's Product Image">
                                    </a>
                                </div>
                                <div class="hiraola-product_content">
                                    <div class="product-desc_info">
                                        <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                Alonza Se...</a></h6>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                            </ul>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">£40.36</span>
                                        </div>
                                        <div class="product-short_desc">
                                            <p>The effects of gold are subtle, but definitely apparent. ... It was
                                                considered that gold possessed an energy that brought warm, soothing
                                                vibrations to the body to aid healing, for when the body relaxes and the
                                                blood vessels in the cells aren't as constricted, blood can move through
                                                the tissue spaces more easily.</p>
                                        </div>
                                    </div>
                                    <div class="add-actions">
                                        <ul>
                                            <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart">Add To Cart</a></li>
                                            <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i class="ion-ios-shuffle-strong"></i></a></li>
                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                            <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="slide-item">
                            <div class="single_product">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img class="primary-img" src="assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                        <img class="secondary-img" src="assets/images/product/medium-size/1-6.jpg" alt="Hiraola's Product Image">
                                    </a>
                                    <div class="add-actions">
                                        <ul>
                                            <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                            </li>
                                            <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i class="ion-ios-shuffle-strong"></i></a>
                                            </li>
                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="hiraola-product_content">
                                    <div class="product-desc_info">
                                        <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                Alonza Se...</a></h6>
                                        <div class="price-box">
                                            <span class="new-price">£77.44</span>
                                        </div>
                                        <div class="additional-add_action">
                                            <ul>
                                                <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
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
                        <div class="list-slide_item">
                            <div class="single_product">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img class="primary-img" src="assets/images/product/medium-size/1-3.jpg" alt="Hiraola's Product Image">
                                        <img class="secondary-img" src="assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                    </a>
                                </div>
                                <div class="hiraola-product_content">
                                    <div class="product-desc_info">
                                        <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                Alonza Se...</a></h6>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                            </ul>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">£98.36</span>
                                        </div>
                                        <div class="product-short_desc">
                                            <p>The effects of gold are subtle, but definitely apparent. ... It was
                                                considered that gold possessed an energy that brought warm, soothing
                                                vibrations to the body to aid healing, for when the body relaxes and the
                                                blood vessels in the cells aren't as constricted, blood can move through
                                                the tissue spaces more easily.</p>
                                        </div>
                                    </div>
                                    <div class="add-actions">
                                        <ul>
                                            <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart">Add To Cart</a></li>
                                            <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i class="ion-ios-shuffle-strong"></i></a></li>
                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                            <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="slide-item">
                            <div class="single_product">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img class="primary-img" src="assets/images/product/medium-size/1-4.jpg" alt="Hiraola's Product Image">
                                        <img class="secondary-img" src="assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                    </a>
                                    <div class="add-actions">
                                        <ul>
                                            <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                            </li>
                                            <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i class="ion-ios-shuffle-strong"></i></a>
                                            </li>
                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="hiraola-product_content">
                                    <div class="product-desc_info">
                                        <h6><a class="product-name" href="single-product.html">Utensils and Knives
                                                Block...</a></h6>
                                        <div class="price-box">
                                            <span class="new-price">£50.43</span>
                                        </div>
                                        <div class="additional-add_action">
                                            <ul>
                                                <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
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
                        <div class="list-slide_item">
                            <div class="single_product">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img class="primary-img" src="assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                        <img class="secondary-img" src="assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                    </a>
                                </div>
                                <div class="hiraola-product_content">
                                    <div class="product-desc_info">
                                        <h6><a class="product-name" href="single-product.html">Pendant, Made of
                                                White...</a></h6>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                            </ul>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">£90.36</span>
                                        </div>
                                        <div class="product-short_desc">
                                            <p>The effects of gold are subtle, but definitely apparent. ... It was
                                                considered that gold possessed an energy that brought warm, soothing
                                                vibrations to the body to aid healing, for when the body relaxes and the
                                                blood vessels in the cells aren't as constricted, blood can move through
                                                the tissue spaces more easily.</p>
                                        </div>
                                    </div>
                                    <div class="add-actions">
                                        <ul>
                                            <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart">Add To Cart</a></li>
                                            <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i class="ion-ios-shuffle-strong"></i></a></li>
                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                            <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="slide-item">
                            <div class="single_product">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img class="primary-img" src="assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                        <img class="secondary-img" src="assets/images/product/medium-size/1-3.jpg" alt="Hiraola's Product Image">
                                    </a>
                                    <span class="sticker">New</span>
                                    <div class="add-actions">
                                        <ul>
                                            <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                            </li>
                                            <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i class="ion-ios-shuffle-strong"></i></a></li>
                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="hiraola-product_content">
                                    <div class="product-desc_info">
                                        <h6><a class="product-name" href="single-product.html">JWDA Penant Lamp Brshed
                                                S...</a></h6>
                                        <div class="price-box">
                                            <span class="new-price">£602.00</span>
                                        </div>
                                        <div class="additional-add_action">
                                            <ul>
                                                <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
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
                        <div class="list-slide_item">
                            <div class="single_product">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img class="primary-img" src="assets/images/product/medium-size/1-2.jpg" alt="Hiraola's Product Image">
                                        <img class="secondary-img" src="assets/images/product/medium-size/1-4.jpg" alt="Hiraola's Product Image">
                                    </a>
                                </div>
                                <div class="hiraola-product_content">
                                    <div class="product-desc_info">
                                        <h6><a class="product-name" href="single-product.html">Pendant, Made of
                                                White Pl...</a></h6>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                            </ul>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">£90.36</span>
                                        </div>
                                        <div class="product-short_desc">
                                            <p>The effects of gold are subtle, but definitely apparent. ... It was
                                                considered that gold possessed an energy that brought warm, soothing
                                                vibrations to the body to aid healing, for when the body relaxes and the
                                                blood vessels in the cells aren't as constricted, blood can move through
                                                the tissue spaces more easily.</p>
                                        </div>
                                    </div>
                                    <div class="add-actions">
                                        <ul>
                                            <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart">Add To Cart</a></li>
                                            <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i class="ion-ios-shuffle-strong"></i></a></li>
                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                            <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="slide-item">
                            <div class="single_product">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img class="primary-img" src="assets/images/product/medium-size/1-2.jpg" alt="Hiraola's Product Image">
                                        <img class="secondary-img" src="assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                    </a>
                                    <span class="sticker">New</span>
                                    <div class="add-actions">
                                        <ul>
                                            <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                            </li>
                                            <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i class="ion-ios-shuffle-strong"></i></a></li>
                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="hiraola-product_content">
                                    <div class="product-desc_info">
                                        <h6><a class="product-name" href="single-product.html">Light Inverted Pendant
                                                Qu...</a></h6>
                                        <div class="price-box">
                                            <span class="new-price">£110.00</span>
                                            <span class="old-price">£110.00</span>
                                        </div>
                                        <div class="additional-add_action">
                                            <ul>
                                                <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
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
                        <div class="list-slide_item">
                            <div class="single_product">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img class="primary-img" src="assets/images/product/medium-size/1-6.jpg" alt="Hiraola's Product Image">
                                        <img class="secondary-img" src="assets/images/product/medium-size/1-8.jpg" alt="Hiraola's Product Image">
                                    </a>
                                </div>
                                <div class="hiraola-product_content">
                                    <div class="product-desc_info">
                                        <h6><a class="product-name" href="single-product.html">Pendant, Made of
                                                White Pl...</a></h6>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                            </ul>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">£90.36</span>
                                        </div>
                                        <div class="product-short_desc">
                                            <p>The effects of gold are subtle, but definitely apparent. ... It was
                                                considered that gold possessed an energy that brought warm, soothing
                                                vibrations to the body to aid healing, for when the body relaxes and the
                                                blood vessels in the cells aren't as constricted, blood can move through
                                                the tissue spaces more easily.</p>
                                        </div>
                                    </div>
                                    <div class="add-actions">
                                        <ul>
                                            <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart">Add To Cart</a></li>
                                            <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i class="ion-ios-shuffle-strong"></i></a></li>
                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                            <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="slide-item">
                            <div class="single_product">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img class="primary-img" src="assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                        <img class="secondary-img" src="assets/images/product/medium-size/1-1.jpg" alt="Hiraola's Product Image">
                                    </a>
                                    <span class="sticker-2">Sale</span>
                                    <div class="add-actions">
                                        <ul>
                                            <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                            </li>
                                            <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i class="ion-ios-shuffle-strong"></i></a></li>
                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="hiraola-product_content">
                                    <div class="product-desc_info">
                                        <h6><a class="product-name" href="single-product.html">Vitra Sunburst Clock
                                                pret...</a></h6>
                                        <div class="price-box">
                                            <span class="new-price">£1199.60</span>
                                        </div>
                                        <div class="additional-add_action">
                                            <ul>
                                                <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
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
                        <div class="list-slide_item">
                            <div class="single_product">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img class="primary-img" src="assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                        <img class="secondary-img" src="assets/images/product/medium-size/1-4.jpg" alt="Hiraola's Product Image">
                                    </a>
                                </div>
                                <div class="hiraola-product_content">
                                    <div class="product-desc_info">
                                        <h6><a class="product-name" href="single-product.html">Pendant, Made of
                                                White Pl...</a></h6>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                            </ul>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">£90.36</span>
                                        </div>
                                        <div class="product-short_desc">
                                            <p>The effects of gold are subtle, but definitely apparent. ... It was
                                                considered that gold possessed an energy that brought warm, soothing
                                                vibrations to the body to aid healing, for when the body relaxes and the
                                                blood vessels in the cells aren't as constricted, blood can move through
                                                the tissue spaces more easily.</p>
                                        </div>
                                    </div>
                                    <div class="add-actions">
                                        <ul>
                                            <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart">Add To Cart</a></li>
                                            <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i class="ion-ios-shuffle-strong"></i></a></li>
                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                            <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="slide-item">
                            <div class="single_product">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img class="primary-img" src="assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                        <img class="secondary-img" src="assets/images/product/medium-size/1-8.jpg" alt="Hiraola's Product Image">
                                    </a>
                                    <span class="sticker">New</span>
                                    <div class="add-actions">
                                        <ul>
                                            <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                            </li>
                                            <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i class="ion-ios-shuffle-strong"></i></a></li>
                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="hiraola-product_content">
                                    <div class="product-desc_info">
                                        <h6><a class="product-name" href="single-product.html">Work Lamp Silver Proin
                                                he...</a></h6>
                                        <div class="price-box">
                                            <span class="new-price">£135.20</span>
                                        </div>
                                        <div class="additional-add_action">
                                            <ul>
                                                <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
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
                        <div class="list-slide_item">
                            <div class="single_product">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img class="primary-img" src="assets/images/product/medium-size/1-8.jpg" alt="Hiraola's Product Image">
                                        <img class="secondary-img" src="assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                    </a>
                                </div>
                                <div class="hiraola-product_content">
                                    <div class="product-desc_info">
                                        <h6><a class="product-name" href="single-product.html">Pendant, Made of
                                                White Pl...</a></h6>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                            </ul>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">£90.36</span>
                                        </div>
                                        <div class="product-short_desc">
                                            <p>The effects of gold are subtle, but definitely apparent. ... It was
                                                considered that gold possessed an energy that brought warm, soothing
                                                vibrations to the body to aid healing, for when the body relaxes and the
                                                blood vessels in the cells aren't as constricted, blood can move through
                                                the tissue spaces more easily.</p>
                                        </div>
                                    </div>
                                    <div class="add-actions">
                                        <ul>
                                            <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart">Add To Cart</a></li>
                                            <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i class="ion-ios-shuffle-strong"></i></a></li>
                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                            <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="slide-item">
                            <div class="single_product">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img class="primary-img" src="assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                        <img class="secondary-img" src="assets/images/product/medium-size/1-6.jpg" alt="Hiraola's Product Image">
                                    </a>
                                    <span class="sticker">New</span>
                                    <div class="add-actions">
                                        <ul>
                                            <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                            </li>
                                            <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i class="ion-ios-shuffle-strong"></i></a></li>
                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="hiraola-product_content">
                                    <div class="product-desc_info">
                                        <h6><a class="product-name" href="single-product.html">Suspensions Aplomb Large
                                                ...</a></h6>
                                        <div class="price-box">
                                            <span class="new-price">£602.00</span>
                                        </div>
                                        <div class="additional-add_action">
                                            <ul>
                                                <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
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
                        <div class="list-slide_item">
                            <div class="single_product">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img class="primary-img" src="assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                        <img class="secondary-img" src="assets/images/product/medium-size/1-6.jpg" alt="Hiraola's Product Image">
                                    </a>
                                </div>
                                <div class="hiraola-product_content">
                                    <div class="product-desc_info">
                                        <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                Alonza Se...</a></h6>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                            </ul>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">£90.36</span>
                                        </div>
                                        <div class="product-short_desc">
                                            <p>The effects of gold are subtle, but definitely apparent. ... It was
                                                considered that gold possessed an energy that brought warm, soothing
                                                vibrations to the body to aid healing, for when the body relaxes and the
                                                blood vessels in the cells aren't as constricted, blood can move through
                                                the tissue spaces more easily.</p>
                                        </div>
                                    </div>
                                    <div class="add-actions">
                                        <ul>
                                            <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart">Add To Cart</a></li>
                                            <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i class="ion-ios-shuffle-strong"></i></a></li>
                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                            <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hiraola-paginatoin-area">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <ul class="hiraola-pagination-box">
                                        <li class="active"><a href="javascript:void(0)">1</a></li>
                                        <li><a href="javascript:void(0)">2</a></li>
                                        <li><a href="javascript:void(0)">3</a></li>
                                        <li><a class="Next" href="javascript:void(0)"><i class="ion-ios-arrow-right"></i></a></li>
                                        <li><a class="Next" href="javascript:void(0)">>|</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="product-select-box">
                                        <div class="product-short">
                                            <p>Showing 1 to 12 of 18 (2 Pages)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hiraola's Content Wrapper Area End Here -->

<!-- Begin Hiraola's Modal Area -->
<!-- <div class="modal fade modal-wrapper" id="exampleModalCenter">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-inner-area sp-area row">
                    <div class="col-lg-5 col-md-5">
                        <div class="sp-img_area">
                            <div class="sp-img_slider-2 slick-img-slider hiraola-slick-slider arrow-type-two" data-slick-options='{
                                    "slidesToShow": 1,
                                    "arrows": false,
                                    "fade": true,
                                    "draggable": false,
                                    "swipe": false,
                                    "asNavFor": ".sp-img_slider-nav"
                                }'>
                                <div class="single-slide red">
                                    <img src="assets/images/single-product/large-size/1.jpg" alt="Hiraola's Product Image">
                                </div>
                                <div class="single-slide orange">
                                    <img src="assets/images/single-product/large-size/2.jpg" alt="Hiraola's Product Image">
                                </div>
                                <div class="single-slide brown">
                                    <img src="assets/images/single-product/large-size/3.jpg" alt="Hiraola's Product Image">
                                </div>
                                <div class="single-slide umber">
                                    <img src="assets/images/single-product/large-size/4.jpg" alt="Hiraola's Product Image">
                                </div>
                            </div>
                            <div class="sp-img_slider-nav slick-slider-nav hiraola-slick-slider arrow-type-two" data-slick-options='{
                                   "slidesToShow": 4,
                                    "asNavFor": ".sp-img_slider-2",
                                   "focusOnSelect": true
                                  }' data-slick-responsive='[
                                        {"breakpoint":1201, "settings": {"slidesToShow": 2}},
                                        {"breakpoint":768, "settings": {"slidesToShow": 3}},
                                        {"breakpoint":577, "settings": {"slidesToShow": 3}},
                                        {"breakpoint":481, "settings": {"slidesToShow": 2}},
                                        {"breakpoint":321, "settings": {"slidesToShow": 2}}
                                    ]'>
                                <div class="single-slide red">
                                    <img src="assets/images/single-product/small-size/1.jpg" alt="Hiraola's Product Thumnail">
                                </div>
                                <div class="single-slide orange">
                                    <img src="assets/images/single-product/small-size/2.jpg" alt="Hiraola's Product Thumnail">
                                </div>
                                <div class="single-slide brown">
                                    <img src="assets/images/single-product/small-size/3.jpg" alt="Hiraola's Product Thumnail">
                                </div>
                                <div class="single-slide umber">
                                    <img src="assets/images/single-product/small-size/4.jpg" alt="Hiraola's Product Thumnail">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 col-md-6">
                        <div class="sp-content">
                            <div class="sp-heading">
                                <h5><a href="#">Light Inverted Pendant Quis Justo Condimentum</a></h5>
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
                            <div class="price-box">
                                <span class="new-price">£82.84</span>
                                <span class="old-price">£93.68</span>
                            </div>
                            <div class="essential_stuff">
                                <ul>
                                    <li>EX Tax:<span>£453.35</span></li>
                                    <li>Price in reward points:<span>400</span></li>
                                </ul>
                            </div>
                            <div class="list-item">
                                <ul>
                                    <li>10 or more £81.03</li>
                                    <li>20 or more £71.09</li>
                                    <li>30 or more £61.15</li>
                                </ul>
                            </div>
                            <div class="list-item last-child">
                                <ul>
                                    <li>Brand<a href="javascript:void(0)">Buxton</a></li>
                                    <li>Product Code: Product 15</li>
                                    <li>Reward Points: 100</li>
                                    <li>Availability: In Stock</li>
                                </ul>
                            </div>
                            <div class="color-list_area">
                                <div class="color-list_heading">
                                    <h4>Available Options</h4>
                                </div>
                                <span class="sub-title">Color</span>
                                <div class="color-list">
                                    <a href="javascript:void(0)" class="single-color active" data-swatch-color="red">
                                        <span class="bg-red_color"></span>
                                        <span class="color-text">Red (+£3.61)</span>
                                    </a>
                                    <a href="javascript:void(0)" class="single-color" data-swatch-color="orange">
                                        <span class="burnt-orange_color"></span>
                                        <span class="color-text">Orange (+£2.71)</span>
                                    </a>
                                    <a href="javascript:void(0)" class="single-color" data-swatch-color="brown">
                                        <span class="brown_color"></span>
                                        <span class="color-text">Brown (+£0.90)</span>
                                    </a>
                                    <a href="javascript:void(0)" class="single-color" data-swatch-color="umber">
                                        <span class="raw-umber_color"></span>
                                        <span class="color-text">Umber (+£1.81)</span>
                                    </a>
                                </div>
                            </div>
                            <div class="quantity">
                                <label>Quantity</label>
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" value="1" type="text">
                                    <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                    <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                </div>
                            </div>
                            <div class="hiraola-group_btn">
                                <ul>
                                    <li><a href="cart.html" class="add-to_cart">Cart To Cart</a></li>
                                    <li><a href="cart.html"><i class="ion-android-favorite-outline"></i></a></li>
                                    <li><a href="cart.html"><i class="ion-ios-shuffle-strong"></i></a></li>
                                </ul>
                            </div>
                            <div class="hiraola-tag-line">
                                <h6>Tags:</h6>
                                <a href="javascript:void(0)">Ring</a>,
                                <a href="javascript:void(0)">Necklaces</a>,
                                <a href="javascript:void(0)">Braid</a>
                            </div>
                            <div class="hiraola-social_link">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Hiraola's Modal Area End Here -->

</div>