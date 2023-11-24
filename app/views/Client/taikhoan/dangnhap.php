        <div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-content">
                    <h2>Other</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Login</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Hiraola's Breadcrumb Area End Here -->
        <!-- Begin Hiraola's Login Register Area -->
        <div class="hiraola-login-register_area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6" style="margin: 0 auto;">
                        <!-- Login Form s-->
                        <div class="box_title">TÀI KHOẢN</div><br>
                        <?php if (isset($_SESSION['ten_tk'])) {
                            extract($_SESSION['ten_tk'])
                        ?>
                            <div class="row mb10">
                                <strong>Xin chào <?php echo $ten_tk ?></strong>
                            </div>
                            <div class="row mb10">
                            ?>
                                <li>
                                    <a href="">Quên mật khẩu</a><br>
                                </li>
                                <li>
                                    <a href="index.php?act=edit_taikhoan">Cập Nhật Tài Khoản</a>
                                </li>
                                <?php if ($role == 2) { ?>
                                    <li>
                                        <a href="admin/index.php">Đăng nhập Nhân Viên</a>
                                    </li>
                                <?php } ?>
                                <?php if ($role == 3) { ?>
                                    <li>
                                        <a href="admin/index.php">Đăng nhập Admin</a>
                                    </li>
                                <?php } ?>
                                <li>
                                    <a href="index.php?act=dangxuat">Đăng xuất</a>
                                </li>
                            </div>
                        <?php
                        } else {
                        ?>


                            <form action="?act=log_up" method="post">
                                <div class="login-form">
                                    <h4 class="login-title">Đăng Nhập</h4>

                                    <div class="row">
                                        <div class="col-md-12 col-12">
                                            <label>Tên đăng nhập</label>
                                            <input type="text" placeholder="Email Address" name="ten_tk">
                                        </div>
                                        <div class="col-12 mb--20">
                                            <label>Password</label>
                                            <input type="password" placeholder="Password" name="password">
                                        </div>
                                        <input type="submit" name="dangnhap" value="Đăng nhập" class="hiraola-register_btn">
                                        <input type="reset" value="reset" class="hiraola-register_btn">

                                        <?php if (isset($thongbao1) && $thongbao1 != "") {
                                            echo $thongbao1;
                                        } ?>
                                        <div class="col-md-12">
                                            <p>Bạn chưa có tài khoản ? <a href="?act=log_in">Đăng ký</a></p>

                                        </div>
                                    </div>
                                </div>
                            </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>