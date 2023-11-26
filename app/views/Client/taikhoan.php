        <!-- bắt đầu banner của tài khoản -->
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
        <!-- kết thúc banner của tài khoản -->
        <!-- phần giao diện tài khoản  -->
        <main class="page-content">
            <!-- Begin Hiraola's Account Page Area -->
            <div class="account-page-area">
                <div class="container">
                <?php
                                        if (isset($_SESSION['user'])) {
                                            extract($_SESSION['user'])
                                        ?>
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
                                        <p>Xin chào<b><?= $full_name ?></b> (không phải là  <?= $ten_tk ?> ? <a href="index.php?act=dangxuat">Đăng xuất</a>)</p>
                                        <img src="" alt="">
                                        <img src="../../controllers/admin/upload/nguoidung/anh.jpg" alt="">
                                        <p>Cảm Ơn Quý Khách <a href="javascript:void(0)"</a>.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="account-orders" role="tabpanel" aria-labelledby="account-orders-tab">
                                    <div class="myaccount-orders">
                                        <h4 class="small-title">MY ORDERS</h4>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover">
                                                <tbody>
                                                    <tr>
                                                        <th>ORDER</th>
                                                        <th>DATE</th>
                                                        <th>STATUS</th>
                                                        <th>TOTAL</th>
                                                        <th></th>
                                                    </tr>
                                                    <tr>
                                                        <td><a class="account-order-id" href="javascript:void(0)">#5364</a></td>
                                                        <td>Mar 27, 2022</td>
                                                        <td>On Hold</td>
                                                        <td>£162.00 for 2 items</td>
                                                        <td><a href="javascript:void(0)" class="hiraola-btn hiraola-btn_dark hiraola-btn_sm"><span>View</span></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><a class="account-order-id" href="javascript:void(0)">#5356</a></td>
                                                        <td>Mar 27, 2022</td>
                                                        <td>On Hold</td>
                                                        <td>£162.00 for 2 items</td>
                                                        <td><a href="javascript:void(0)" class="hiraola-btn hiraola-btn_dark hiraola-btn_sm"><span>View</span></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="tab-pane fade" id="account-address" role="tabpanel" aria-labelledby="account-address-tab">
                                    <div class="myaccount-address">
                                        <p>The following addresses will be used on the checkout page by default.</p>
                                        <div class="row">
                                            <div class="col">
                                                <h4 class="small-title">BILLING ADDRESS</h4>
                                                <address>
                                                    1234 Heaven Stress, Beverly Hill OldYork UnitedState of Lorem
                                                </address>
                                            </div>
                                            <div class="col">
                                                <h4 class="small-title">SHIPPING ADDRESS</h4>
                                                <address>
                                                    1234 Heaven Stress, Beverly Hill OldYork UnitedState of Lorem
                                                </address>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
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
                    <?php }?>
                </div>
            </div>
            <!-- Hiraola's Account Page Area End Here -->
        </main>
        <!-- kết thúc giao diện tài khoản
    -->