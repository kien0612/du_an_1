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
                    <!-- tim kiem theo gia -->
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
                                <button type="button" class="">Tìm kiếm</button>
                            </div>
                        </div>
                    </div>
                    <!-- tim kiem theo gia -->
                    <!-- <div class="hiraola-sidebar_categories">
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
                    </div> -->
                    <div class="category-module hiraola-sidebar_categories">
                        <div class="category-module_heading">
                            <h5>Danh mục</h5>
                        </div>
                        <?php
                        foreach ($list_danhmuc as $danhmuc) {
                            extract($danhmuc);
                            $linkdm = "index.php?act=sanpham&iddm=" . $id_dm;
                            echo '
                            <div class="module-body">
                            <ul class="module-list_item">
                                <li>
                                <a href="' . $linkdm . '">' . $ten_dm . '</a>
                                </li>
                            </ul>
                            </div> ';
                        }
                        ?>



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
                        $linksp = "index.php?act=sanphamct&id_sp=" . $id_sp;
                        $url = "../../controllers/admin/upload/sanpham/";
                        $image = $url . $anh_sp;
                    ?>
                        <div class="col-lg-4">
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <?php echo '<a href="' . $linksp . '">' ?>
                                        <img class="primary-img" src="<?= $image ?>" alt="Hiraola's Product Image">
                                        </a>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="#" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i data-id=<?= $id_sp ?> class="ion-bag btnCart" onclick="addToCart(<?= $id_sp ?>,'<?= $ten_sp ?>',<?= $gia_sp ?>)"></i></a>
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
                                        <a href="?act=sanphamct">
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