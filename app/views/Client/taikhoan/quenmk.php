<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Other</h2>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li class="active">Register</li>
            </ul>
        </div>
    </div>
</div>
<!-- Hiraola's Breadcrumb Area End Here -->
<!-- Begin Hiraola's Login Register Area -->
<div class="hiraola-login-register_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12" style="margin: 0 auto;">
                <form action="?act=log_in" method="post">
                    <div class="login-form">
                        <h4 class="login-title">Quên Mật Khẩu</h4>
                        <div class="row">


                            <div class="col-md-12">
                                <label>Email</label>
                                <input type="email" placeholder="Nhâp email" name="email" required>
                            </div>


                            <div class="col-12">

                                <input type="submit" name="gui" value="Gửi Email" class="hiraola-register_btn">
                                <input type="reset" value="reset" class="hiraola-register_btn">
                                <p>Bạn đã có tài khoản ? <a href="?act=log_up">Đăng nhập</a></p>
                            </div>
                            <?php if (isset($sendMailMess) && $sendMailMess != '') {
                                echo $sendMailMess;
                            } ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>