<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Lịch Sử Đơn Hàng</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div>

    <table border="1px" style="width: 90%; margin: 0 auto; text-align: center;">
        <thead>
            <tr>
                <th>Id</th>
                <th>Id hóa đơn</th>
                <th>Khách hàng</th>
                <th>Sản phẩm</th>
                <th>Tổng Tiền</th>
                <th>Ngày đặt</th>
            </tr>
        </thead>

        <tbody>

            <?php foreach ($list_history as $history) {
                extract($history);
            ?>
                <tr>
                    <td><?= $id_hoa_don_CT ?></td>
                    <td><?= $id_hoa_don ?></td>
                    <td><?= $ten_sp ?></td>
                    <td><?= $tong_tien ?></td>
                    <td><?= $ngay_đặt ?></td>
                </tr>
                <tr><button type="button" class="btn btn-success">Success</button></tr>
            <?php } ?>
        </tbody>
    </table>
</div>