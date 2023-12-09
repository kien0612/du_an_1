<div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>Other</h2>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li class="active">My Account</li>
                </ul>
            </div>
        </div>
    </div>
    <?php
    if (isset($_SESSION['user'])) {
        extract($_SESSION['user'])
    ?>
        <main class="page-content">
            <!-- Begin Hiraola's Account Page Area -->
            <div class="account-page-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <ul class="nav myaccount-tab-trigger" id="account-page-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="account-dashboard-tab" data-bs-toggle="tab" href="#account-dashboard" role="tab" aria-controls="account-dashboard" aria-selected="true">Thông Tin Người Đùng</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="account-orders-tab" data-bs-toggle="tab" href="#account-orders" role="tab" aria-controls="account-orders" aria-selected="false">Đơn Đặt Hàng</a>
                                </li>
                                <!-- <li class="nav-item">
                                <a class="nav-link" id="account-address-tab" data-bs-toggle="tab" href="#account-address" role="tab" aria-controls="account-address" aria-selected="false">Addresses</a>
                            </li> -->
                                <li class="nav-item">
                                    <a class="nav-link" id="account-details-tab" data-bs-toggle="tab" href="#account-details" role="tab" aria-controls="account-details" aria-selected="false">Cập Nhập Tài Khoản</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="account-logout-tab" href="index.php?act=dangxuat" role="tab" aria-selected="false">Đăng Xuất</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-9">
                            <div class="tab-content myaccount-tab-content" id="account-page-tab-content">
                                <div class="tab-pane fade show active" id="account-dashboard" role="tabpanel" aria-labelledby="account-dashboard-tab">
                                    <div class="myaccount-dashboard">
                                        <p>Xin chào<b><?= $full_name ?></b> (không phải là <?= $ten_tk ?> ? <a href="index.php?act=dangxuat">Đăng xuất</a>)</p>
                                        <img src="" alt="">
                                        <img src="../../controllers/admin/upload/nguoidung/anh.jpg" alt="">
                                        <p>Cảm Ơn Quý Khách <a href="javascript:void(0)"></a>.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="account-orders" role="tabpanel" aria-labelledby="account-orders-tab">
                                    <div class="myaccount-orders">
                                        <h4 class="small-title">MY ORDERS</h4>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover">
                                                <tbody>
                                                    <tr>
                                                        <th>#Mã đơn hàng</th>
                                                        <th>Số lượng</th>
                                                        <th>Ngày Tạo</th>
                                                        <th>Người Đặt Hàng </th>
                                                        <th>Tổng Tiền</th>
                                                        <th>Trang Thái</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    <?php
                                                    foreach ($listbill as $binh_luan) {
                                                        extract($binh_luan);
                                                        $delete = "index.php?act=xoadh&id_hd=" . $id_hd;
                                                    ?>
                                                        <tr>
                                                            <td><a class="account-order-id" href="javascript:void(0)">#<?= $id_hd ?></a></td>
                                                            <td><?= $tong_soluong ?></td>
                                                            <td><?= $ngaydathang ?></td>
                                                            <td><?= $full_name ?></td>
                                                            <td><?= number_format($tongtien, 0, ',', '.') ?> VND </td>
                                                            <td>
                                                                <?php if ($trangthai == 1) { ?>
                                                                    <li style="list-style: none;">
                                                                        <p class="button">Đơn hàng mới</p>
                                                                    </li>
                                                                <?php } ?>
                                                                <?php if ($trangthai == 2) { ?>
                                                                    <li style="list-style: none;">
                                                                        <p class="button">Đã xác nhận</p>
                                                                    </li>
                                                                <?php } ?>
                                                                <?php if ($trangthai == 3) { ?>
                                                                    <li style="list-style: none;">
                                                                        <p class="button">Đang xử lý</p>
                                                                    </li>
                                                                <?php } ?>
                                                                <?php if ($trangthai == 4) { ?>
                                                                    <li style="list-style: none;">
                                                                        <p class="button">Đang giao hàng</p>
                                                                    </li>
                                                                <?php } ?>
                                                                <?php if ($trangthai == 5) { ?>
                                                                    <li style="list-style: none;">
                                                                        <p class="button">Đã hoàn thành</p>
                                                                    </li>
                                                                <?php } ?>
                                                                <?php if ($trangthai == 6) { ?>
                                                                    <li style="list-style: none;">
                                                                        <p class="button">Hủy đơn hàng</p>
                                                                    </li>
                                                                <?php } ?>
                                                            </td>
                                                            <td>
                                                                <li style="list-style: none;" class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                                <?php if ($trangthai == 1 || $trangthai == 2 || $trangthai == 3) { ?>
                                                                    <a class="url-delete" href="<?= $delete ?>" onclick="return confirm('Bạn có chắc chắn muốn hủy không')">
                                                                        <i class="fa-solid fa-trash" style="color:red;"></i>
                                                                    </a>
                                                                <?php } ?>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="account-details" role="tabpanel" aria-labelledby="account-details-tab">
                                    <div class="myaccount-details">
                                        <form action="#" class="hiraola-form">
                                            <div class="hiraola-form-inner">
                                                <div class="single-input single-input-half">
                                                    <label for="account-details-firstname">Tên tài khoản*</label>
                                                    <input type="text" id="account-details-firstname" value="<?= $ten_tk ?>">
                                                </div>
                                                <div class="single-input single-input-half">
                                                    <label for="account-details-lastname">Họ tên đầy đủ*</label>
                                                    <input type="text" id="account-details-lastname" value="<?= $full_name ?>">
                                                </div>
                                                <div class="single-input single-input-half">
                                                    <label for="account-details-firstname">Email*</label>
                                                    <input type="text" id="account-details-firstname" value="<?= $email ?>">
                                                </div>
                                                <div class="single-input single-input-half">
                                                    <label for="account-details-lastname">Số điện thoại*</label>
                                                    <input type="text" id="account-details-lastname" value="<?= $sdt ?>">
                                                </div>
                                                <div class="single-input">
                                                    <label for="account-details-email">Địa chỉ*</label>
                                                    <input type="email" id="account-details-email" value="<?= $dia_chi ?>">
                                                </div>
                                                <div class="single-input">
                                                    <label for="account-details-oldpass">Current Password(leave blank to leave
                                                        unchanged)</label>
                                                    <input type="password" id="account-details-oldpass">
                                                </div>
                                                <div class="single-input">
                                                    <label for="account-details-newpass">New Password (leave blank to leave
                                                        unchanged)</label>
                                                    <input type="password" id="account-details-newpass">
                                                </div>
                                                <div class="single-input">
                                                    <label for="account-details-confpass">Confirm New Password</label>
                                                    <input type="password" id="account-details-confpass">
                                                </div>
                                                <div class="single-input">
                                                    <button class="hiraola-btn hiraola-btn_dark" type="submit"><span>SAVE
                                                            CHANGES</span></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    <?php } ?>
    <div class="modal fade modal-wrapper" id="exampleModalCenter">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-inner-area sp-area row" style="margin-top: 50px;">
                        <form action="" method="post">
                            <div class="row">

                                <input placeholder="" name="id_hd" type="text" value="<?= $id_hd ?>" hidden required>
                                <div class="col-lg-6 col-12">
                                    <div style="display: flex;border-bottom: 1px solid black;padding: 10px 0px;">
                                        <h4 style="padding-right: 20px;">Trạng thái đơn hàng</h4>
                                        <?php if ($trangthai == 1) { ?>
                                            <li style="list-style: none;">
                                                <p style="color: green;" class="button">Đơn hàng mới</p>
                                            </li>
                                        <?php } ?>
                                        <?php if ($trangthai == 2) { ?>
                                            <li style="list-style: none;">
                                                <p style="color: green;" class="button">Đã xác nhận</p>
                                            </li>
                                        <?php } ?>
                                        <?php if ($trangthai == 3) { ?>
                                            <li style="list-style: none;">
                                                <p style="color: green;" class="button">Đang xử lý</p>
                                            </li>
                                        <?php } ?>
                                        <?php if ($trangthai == 4) { ?>
                                            <li style="list-style: none;">
                                                <p style="color: green;" class="button">Đang giao hàng</p>
                                            </li>
                                        <?php } ?>
                                        <?php if ($trangthai == 5) { ?>
                                            <li style="list-style: none;">
                                                <p style="color: green;" class="button">Đã hoàn thành</p>
                                            </li>
                                        <?php } ?>
                                        <?php if ($trangthai == 6) { ?>
                                            <li style="list-style: none;">
                                                <p style="color: red;" class="button">Hủy đơn hàng</p>
                                            </li>
                                        <?php } ?>
                                    </div>
                                    <div class="checkbox-form">
                                        <h4 style="margin-top: 20px;">Thông Tin Người Nhận</h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input placeholder="" name="id_tk" type="text" value="<?= $id_tk ?>" hidden required>
                                                <div class="checkout-form-list">
                                                    <label>Tên tài khoản <span class="required">*</span></label>
                                                    <input placeholder="" name="hoten" type="text" value="<?= $ten_tk ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="checkout-form-list">
                                                    <label>Tên đầy đủ <span class="required">*</span></label>
                                                    <input placeholder="" name="fullname" type="text" value="<?= $full_name ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="checkout-form-list">
                                                    <label>Email Address <span class="required">*</span></label>
                                                    <input placeholder="" name="email" type="email" value="<?= $email ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="checkout-form-list">
                                                    <label>Phone <span class="required">*</span></label>
                                                    <input type="text" name="sdt" value="<?= $sdt ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkout-form-list">
                                                    <label>Địa chỉ <span class="required">*</span></label>
                                                    <input placeholder="Thành phố-Quân/Huyện/...." name="diachi" type="text" value="<?= $diachi ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="order-notes">
                                                <div class="checkout-form-list checkout-form-list-2">
                                                    <label>Lời Nhắn</label>
                                                    <textarea id="checkout-mess" name="mota" cols="30" rows="10" name="" placeholder="" readonly><?= $mota ?></textarea>
                                                </div>
                                            </div>

                                        </div>

                                    </div>


                                </div>


                                <div class="col-lg-6 col-12">

                                    <div class="your-order">
                                        <div style="margin-top: -10px;border-bottom: 1px solid black;padding: 10px 0px;">
                                            <h4>Phương thức thanh toán</h4>
                                            <?= $pttt == 1 ? 'Thanh toán khi giao hàng' : 'Chuyển khoản ngân hàng' ?>
                                        </div>
                                        <h4 style="margin-top: 20px;">Đơn Hàng</h4>
                                        <div class="your-order-table table-responsive">
                                            <table class="table">
                                                <thead>

                                                    <tr>
                                                        <th class="cart-product-name">Tên Sản phẩm</th>
                                                        <th>Số lượng</th>
                                                        <th class="cart-product-total">Thành tiền</th>
                                                    </tr>
                                                </thead>
                                                <tbody style="text-align: center;">
                                                    <?php foreach ($list_hdct_view as $hdct) {
                                                        extract($hdct)    ?>
                                                        <tr>
                                                            <td class="cart-product-name"><?php echo $ten_sp; ?><strong class="product-quantity">
                                                            <td class="cart-product-total"><span class="amount"><?php echo $soluong; ?></span></td>
                                                            <td class="cart-product-total"><span class="amount"><?php echo number_format($thanhtien, 0, ",", "."); ?> ₫</span></td>
                                                        </tr>
                                                    <?php  } ?>
                                                </tbody>
                                            </table>
                                            <div>
                                                <h4 class="panel-title" style="color: red;">
                                                    Tổng Tiền :
                                                    <?php echo number_format($tongtien, 0, ",", "."); ?>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>