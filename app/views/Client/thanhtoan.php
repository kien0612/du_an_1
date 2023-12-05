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
<<<<<<< HEAD
                <div class="row">
                    <div class="col-lg-6 col-12">
                    <?php
                                        if (isset($_SESSION['user'])) {
                                            extract($_SESSION['user'])
                                        ?>
                        <form action="javascript:void(0)">
                            <div class="checkbox-form">
                                <h3>Billing Details</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Tên tài khoản <span class="required">*</span></label>
                                            <input placeholder="" type="text" value="<?= $ten_tk ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Tên đầy đủ <span class="required">*</span></label>
                                            <input placeholder="" type="text" value="<?= $full_name ?>">
                                        </div>
=======
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
<<<<<<< HEAD
                                        <input placeholder="" name="fullname" type="text" value="<?= $full_name ?>">
>>>>>>> 7e91113cd110b0d947dea768688a21380ae2f426
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Email Address <span class="required">*</span></label>
                                            <input placeholder="" type="email" value="<?= $email ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Phone <span class="required">*</span></label>
                                            <input type="text" value="<?= $sdt ?>">
                                        </div>
                                    </div>
<<<<<<< HEAD
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Địa chỉ <span class="required">*</span></label>
                                            <input placeholder="Street address" type="text" value="<?= $dia_chi ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="different-address">
                                    <div class="ship-different-title">
                                        <h3>
                                            <label>Ship đến một địa chỉ khác</label>
                                            <input id="ship-box" type="checkbox">
                                        </h3>
                                    </div>
                                    <div id="ship-box-info" class="row">
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Tên tài khoản <span class="required">*</span></label>
                                            <input placeholder="" type="text" value="<?= $ten_tk ?>" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Tên đầy đủ <span class="required">*</span></label>
                                            <input placeholder="" type="text" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
<<<<<<< HEAD
                                            <label>Email<span class="required">*</span></label>
                                            <input placeholder="" type="email">
=======
                                            <label>Email Address <span class="required">*</span></label>
                                            <input placeholder="" type="email" >
>>>>>>> 71d46b5cdf57cf662abb9469509e038abc4470e9
                                        </div>
=======
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
>>>>>>> 79f8441ff911dfcfb9861b5bd82c2c1ca5675616
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
<<<<<<< HEAD
                                            <label>Số điện thoại <span class="required">*</span></label>
                                            <input type="text">
=======
                                            <label>Phone <span class="required">*</span></label>
                                            <input type="text" >
>>>>>>> 71d46b5cdf57cf662abb9469509e038abc4470e9
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Địa chỉ <span class="required">*</span></label>
                                            <input placeholder="Street address" type="text" >
                                        </div>
                                    </div>
                                </div>
                                    <div class="order-notes">
                                        <div class="checkout-form-list checkout-form-list-2">
                                            <label>Ghi chú</label>
                                            <textarea id="checkout-mess" cols="30" rows="10" placeholder="Ghi chú về đơn đặt hàng của bạn"></textarea>
                                        </div>
=======
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
>>>>>>> 7e91113cd110b0d947dea768688a21380ae2f426
                                    </div>
                                </div>
<<<<<<< HEAD
                                <div class="mot">
                                <p><input  class="checkout-form-list" type="radio" name="pttt" id="" value="1" required> Thanh toán khi giao hàng</p>
                                <p><input  class="checkout-form-list" type="radio" name="pttt" id="" value="2" required> Chuyển khoản ngân hàng</p>
                                </div>
                            </div>
<<<<<<< HEAD
                        </form>
                                        <?php }?>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="your-order">
                            <h3>Đơn hàng của bạn</h3>
                            <div class="your-order-table table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="cart-product-name">Sản phẩm</th>
                                            <th>Số lượng</th>
                                            <th class="cart-product-total">Thành tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="cart_item">
                                            <td class="cart-product-name"> Vestibulum suscipit<strong class="product-quantity">
                                                    × 1</strong></td>
                                            <td class="cart-product-total"><span class="amount">£165.00</span></td>
                                        </tr>
                                        <tr class="cart_item">
                                            <td class="cart-product-name"> Vestibulum suscipit<strong class="product-quantity">
                                                    × 1</strong></td>
                                            <td class="cart-product-total"><span class="amount">£165.00</span></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr class="cart-subtotal">
                                            <th>Cart Subtotal</th>
                                            <td><span class="amount">£215.00</span></td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Order Total</th>
                                            <td><strong><span class="amount">£215.00</span></strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- phương thức thanh toán -->
                            <!-- <div class="payment-method">
                                <div class="payment-accordion">
                                    <div id="accordion">
                                        <div class="card">
                                            <div class="card-header" id="#payment-1">
                                                <h5 class="panel-title">
                                                    <a href="javascript:void(0)" class="" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        Direct Bank Transfer.
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                                                <div class="card-body">
                                                    <p>Make your payment directly into our bank account. Please use your Order
                                                        ID as the payment
                                                        reference. Your order won’t be shipped until the funds have cleared in
                                                        our account.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="#payment-2">
                                                <h5 class="panel-title">
                                                    <a href="javascript:void(0)" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Cheque Payment
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                                                <div class="card-body">
                                                    <p>Make your payment directly into our bank account. Please use your Order
                                                        ID as the payment
                                                        reference. Your order won’t be shipped until the funds have cleared in
                                                        our account.</p>
                                                </div>
                                            </div>
=======
                           <center>
                           <div class="order-button-payment">
                                <input value="Đăt Hàng" type="submit" name="order_confirm">
=======

>>>>>>> 7fcf202f6040a8d0903d2d5248601e6a7d58a3ad
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
<<<<<<< HEAD
                                <!-- <div class="card">
                                    <div class="card-header" id="#payment-2">
                                        <h5 class="panel-title">
                                            <a href="javascript:void(0)" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Cheque Payment
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <p>Make your payment directly into our bank account. Please use your Order
                                                ID as the payment
                                                reference. Your order won’t be shipped until the funds have cleared in
                                                our account.</p>
>>>>>>> 7e91113cd110b0d947dea768688a21380ae2f426
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="#payment-3">
                                                <h5 class="panel-title">
                                                    <a href="javascript:void(0)" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        PayPal
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
                                                <div class="card-body">
                                                    <p>Make your payment directly into our bank account. Please use your Order
                                                        ID as the payment
                                                        reference. Your order won’t be shipped until the funds have cleared in
                                                        our account.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- nút đặt hàng -->
                                    <div class="order-button-payment">
                                        <form action="" method="post">
                                            <input value="ĐẶT HÀNG" type="submit">
                                        </form>
                                    </div>
<<<<<<< HEAD
                                </div>
                            </div>
=======
                                </div> -->
                            </div>
                           
>>>>>>> 7e91113cd110b0d947dea768688a21380ae2f426
=======
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

>>>>>>> 7fcf202f6040a8d0903d2d5248601e6a7d58a3ad
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hiraola's Checkout Area End Here -->