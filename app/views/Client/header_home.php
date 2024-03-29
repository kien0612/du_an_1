<?php
// var_dump(($_SESSION['user']));die();
?>
<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/hiraola/hiraola/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Nov 2023 13:58:55 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home Two || Hiraola - Jewellery eCommerce Bootstrap 5 Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- Fontawesome Star -->
    <link rel="stylesheet" href="assets/css/fontawesome-stars.css">
    <!-- Ion Icon -->
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <!-- Animation -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- jQuery Ui -->
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <!-- Nice Select -->
    <link rel="stylesheet" href="assets/css/nice-select.min.css">
    <!-- Timecircles -->
    <link rel="stylesheet" href="assets/css/timecircles.min.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <link rel="stylesheet" href="assets/css/style.min.css"> -->

</head>
<style>
    .notification {
        color: white;
        text-decoration: none;
        /* padding: 15px 26px; */
        position: relative;
        display: inline-block;
        border-radius: 2px;
    }

    /* .notification:hover {
  background: red;
} */

    .notification .badge {
        position: absolute;
        top: 30px;
        right: 2px;
        padding: 3px 7px;
        border-radius: 50%;
        background: red;
        color: white;
        font-size: 12px;
    }
</style>

<body class="template-color-2">

    <div class="main-wrapper">

        <!-- Begin Hiraola's Header Main Area -->
        <header class="header-main_area">
            <div class="header-top_area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="ht-left_area">
                                <div class="header-shipping_area">
                                    <ul>
                                        <li>
                                            <span>Telephone Enquiry:</span>
                                            <a href="callto://+123123321345">(+123) 123 321 345</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="ht-right_area">
                                <div class="ht-menu">
                                    <ul>
                                        <?php
                                        if (isset($_SESSION['user'])) {
                                            extract($_SESSION['user'])
                                        ?>
                                       
                                            <li><a href="#">Xin chào <?php echo $full_name ?><i class="fa fa-chevron-down"></i></a>
                                                <ul class="ht-dropdown ht-my_account">
                                                    <li>
                                                        <a href="?act=quenmk">Quên Mật Khẩu</a>
                                                    </li>
                                                    <li>
                                                        <a href="index.php?act=taikhoan">Thông tin của bạn</a>
                                                    </li>
                                                    <?php if ($id_role == 3) { ?>
                                                        <li>
                                                            <a href="../admin/index.php">Đăng nhập Admin</a>
                                                        </li>
                                                    <?php } ?>
                                                    <?php if ($id_role == 2) { ?>
                                                        <li>
                                                            <a href="../nhanvien/index.php">Đăng nhập Nhân Viên</a>
                                                        </li>
                                                    <?php } ?>
                                                    <li>
                                                        <a href="index.php?act=dangxuat">Đăng xuất</a>
                                                    </li>

                                                <?php } else {  ?>
                                                    <li><a href="#">My Account<i class="fa fa-chevron-down"></i></a>
                                                        <ul class="ht-dropdown ht-my_account">
                                                            <li><a href="?act=log_in">Đăng Ký</a></li>
                                                            <li><a href="?act=log_up">Đăng nhập</a></li>
                                                        </ul>
                                                    </li>
                                                <?php } ?>

                                                </ul>
                                            </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-middle_area d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="header-logo">
                                <a href="index.php">
                                    <img src="assets/images/menu/logo/1.png" alt="Hiraola's Header Logo">
                                </a>
                            </div>
                        </div>
                        <!-- tim kiem san pham -->
                        <div class="col-lg-9">
                            <div class="hm-form_area">
                                <form action="index.php?act=sanpham" class="hm-searchbox" method="post">
                                    <input type="text" name="kyw" placeholder="Enter your search key ...">
                                    <button class="li-btn" name="timkiem" type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom_area header-sticky stick">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 d-lg-none d-block">
                            <div class="header-logo">
                                <a href="index.html">
                                    <img src="assets/images/menu/logo/2.png" alt="Hiraola's Header Logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 d-none d-lg-block position-static">
                            <div class="main-menu_area">
                                <nav>
                                    <ul>
                                        <li class="dropdown-holder"><a href="index.php">Trang Chủ</a>
                                        </li>
                                        <li class="megamenu-holder"><a href="?act=sanpham">Sản Phẩm</a>
                                        </li>
                                        <li><a href="?act=tintuc">Tin tức</a>
                                        </li>
                                        <!-- <li><a href="index.html">Pages</a>
                                            <ul class="hm-dropdown">
                                                <li><a href="my-account.html">My Account</a></li>
                                                <li><a href="login-register.html">Login | Register</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="compare.html">Compare</a></li>
                                                <li><a href="faq.html">FAQ</a></li>
                                                <li><a href="404.html">404 Error</a></li>
                                                <li><a href="coming-soon_page.html">Comming Soon</a></li>
                                            </ul>
                                        </li> -->
                                        <li><a href="?act=gioithieu">Giới thiệu</a></li>
                                        <li><a href="?act=lienhe">Liên hệ</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-8 col-sm-8">
                            <div class="header-right_area">
                                <ul>
                                    <li>
                                        <a href="?act=sanphamyeuthich" class="wishlist-btn">
                                            <i class="ion-android-favorite-outline"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?act=giohang" class="notification">
                                            <i class="ion-bag"></i>
                                            <span class="badge" id="totalProduct"><?= !empty($_SESSION['cart']) ? count($_SESSION['cart']) : 0 ?></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
