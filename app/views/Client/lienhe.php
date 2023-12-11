<div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-content">
                    <h2>Liên hệ</h2>
                    <ul>
                        <li><a href="index.html">Trang chủ</a></li>
                        <li class="active">Liên hệ</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Hiraola's Breadcrumb Area End Here -->
        <!-- Begin Contact Main Page Area -->
        <div class="contact-main-page">
            <div class="container">
                <div id="google-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3588.826640042142!2d105.70661607499498!3d20.805032095425727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31344bf527f2c943%3A0x59cad48bde39a536!2zUGjhu5EgQmEgVGjDoQ!5e1!3m2!1svi!2s!4v1701271583783!5m2!1svi!2s" width="100%" height="450" style="border:0;"
                     allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 offset-lg-1 col-md-12 order-1 order-lg-2">
                        <div class="contact-page-side-content">
                            <h3 class="contact-page-title">Liên hệ với chúng tôi</h3>
                            <p class="contact-page-message">Sự rõ ràng cũng là một quá trình năng động tuân theo những thói quen luôn thay đổi của người đọc. Thật đáng ngạc nhiên khi lưu ý rằng văn học Gothic, thứ mà ngày nay chúng ta cho là ít rõ ràng, đã có trước các hình thức văn học của con người như thế nào.</p>
                            <div class="single-contact-block">
                                <h4><i class="fa fa-fax"></i> Địa  chỉ</h4>
                                <p>Trường cao đẳng FPT Polytechnic , Trịnh Văn Bô , Nam Từ Liêm , Hà Nội</p>
                            </div>
                            <div class="single-contact-block">
                                <h4><i class="fa fa-phone"></i> Phone</h4>
                                <p>Mobile: (08) 123 456 789</p>
                                <p>Hotline: 1009 678 456</p>
                            </div>
                            <div class="single-contact-block last-child">
                                <h4><i class="fa fa-envelope-o"></i> Email</h4>
                                <p> nhom8@gmail.com</p>
                                <!-- <p>support@hastech.company</p> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 order-2 order-lg-1">
                        <div class="contact-form-content">
                            <h3 class="contact-page-title">Liên hệ</h3>
                            <div class="contact-form">
                            <?php
                                        if (isset($_SESSION['user'])) {
                                            extract($_SESSION['user'])
                                        ?>
                                <form id="contact-form" action="https://whizthemes.com/mail-php/mamunur/hiraola/hiraola.php">
                                    <div class="form-group">
                                        <label>Your Name <span class="required">*</span></label>
                                        <input type="text" name="con_name" value="<?= $full_name ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Your Email <span class="required">*</span></label>
                                        <input type="email" name="con_email" value="<?= $email ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Số Điện Thoại <span class="required">*</span></label>
                                        <input type="number" name="con_email" value="<?= $sdt ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Địa chỉ</label>
                                        <input type="text" name="con_subject" value="<?= $dia_chi ?>">
                                    </div>
                                    <div class="form-group form-group-2">
                                        <label>Your Message</label>
                                        <textarea name="con_message"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" value="submit" id="submit" class="hiraola-contact-form_btn" name="submit">send</button>
                                    </div>
                                </form>
                                <?php }?>
                                <p class="form-message mt-3 mb-0"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
