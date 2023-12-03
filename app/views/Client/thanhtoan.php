<!-- Begin Hiraola's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Other</h2>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li class="active">Checkout</li>
            </ul>
        </div>
    </div>
</div>
<!-- Hiraola's Breadcrumb Area End Here -->
<!-- Begin Hiraola's Checkout Area -->
<div class="checkout-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="coupon-accordion">

                    <div id="checkout_coupon" class="coupon-checkout-content">
                        <div class="coupon-info">
                            <form action="javascript:void(0)">
                                <p class="checkout-coupon">
                                    <input placeholder="Coupon code" type="text">
                                    <input class="coupon-inner_btn" value="Apply Coupon" type="submit">
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-12">
                <?php
                if (isset($_SESSION['user'])) {
                    extract($_SESSION['user'])
                ?>
                    <form action="" method="post">
                        <div class="checkbox-form">
                            <h3>Thông Tin Người Nhận</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <input placeholder="" name="id_tk" type="text" value="<?= $ten_tk ?>" hidden>
                                    <div class="checkout-form-list">
                                        <label>Tên tài khoản <span class="required">*</span></label>
                                        <input placeholder="" name="hoten" type="text" value="<?= $ten_tk ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Tên đầy đủ <span class="required">*</span></label>
                                        <input placeholder="" name="fullname" type="text" value="<?= $full_name ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Email Address <span class="required">*</span></label>
                                        <input placeholder="" name="email" type="email" value="<?= $email ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Phone <span class="required">*</span></label>
                                        <input type="text" name="sdt" value="<?= $sdt ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Địa chỉ <span class="required">*</span></label>
                                        <input placeholder="Thành phố-Quân/Huyện/...." name="diachi" type="text" value="<?= $dia_chi ?>" required>
                                    </div>
                                </div>
                                <div class="order-notes">
                                    <div class="checkout-form-list checkout-form-list-2">
                                        <label>Lời Nhắn</label>
                                        <textarea id="checkout-mess" name="mota" cols="30" rows="10" name="" placeholder=""></textarea>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </form>
                <?php } ?>
            </div>
            <div class="col-lg-6 col-12">
                <div class="your-order">
                    <h3>Đơn Hàng</h3>
                    <div class="your-order-table table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="cart-product-name">Tên Sản phẩm</th>
                                    <!-- <th >Ảnh Sản Phẩn</th> -->
                                    <th>Số lượng</th>
                                    <th class="cart-product-total">Thành tiền</th>
                                </tr>
                            </thead>
                            <?php
                            // print_r($cart);
                            foreach ($cart as $item) {
                                // $url = "../../../controllers/admin/upload/sanpham/";
                            ?>

                                <tbody>
                                    <tr class="cart_item">
                                        <td class="cart-product-name"><?php echo $item['name']; ?><strong class="product-quantity">
                                                <!-- <td class="cart-product-total"><img src="<?= $url, $product['anh_sp'] ?>" width="120px" ></span></td> -->
                                        <td class="cart-product-total"><span class="amount"><?php echo $item['quantity']; ?></span></td>
                                        <td class="cart-product-total"><span class="amount"><?php echo number_format($item['quantity'] * $item['price'], 0, ",", "."); ?> ₫</span></td>
                                    </tr>

                                </tbody>
                            <?php
                            }
                            ?>

                        </table>
                    </div>
                    <div class="payment-method">
                        <div class="payment-accordion">
                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header" id="#payment-1">
                                        <h5 class="panel-title">
                                            <a href="javascript:void(0)" class="" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Tổng Tiền
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <td><b><?php echo number_format($_SESSION['resultTotal'], 0, ",", "."); ?> ₫</b></td>
                                        </div>
                                    </div>
                                </div>
                                <div style="padding-top: 20px;">
                                    <p><input type="radio" name="pttt" id="" value="1" required> Thanh toán khi giao hàng</p>
                                    <p><input type="radio" name="pttt" id="" value="2" required> Chuyển khoản ngân hàng</p>
                                </div>
                            </div>
                            <form action="" method="post">
                                <center>
                                    <div class="order-button-payment">
                                        <input value="Đăt Hàng" type="submit" name="order_confirm">
                                    </div>
                                </center>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hiraola's Checkout Area End Here -->