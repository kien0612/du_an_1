<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Danh Sách Đơn Hàng</h1>
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
                <th>Khách Hàng</th>
                <th>Số lượng</th>
                <th>Mã KM</th>
                <th>Tổng Tiền</th>
                <th>Kiểu thanh toán</th>
                <th>Ngày đặt</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>

            <?php foreach ($list_hoa_don as $hoa_don) {
                extract($hoa_don);
                $delete = "index.php?act=xoabl&id_hoa_don=".$id_hoa_don;
            ?>
                <tr>
                    <td><?= $id_hoa_don ?></td>
                    <td>
                        <?= $ten_tk ?>
                        <?= $dia_chi ?>
                        <?= $sdt ?>
                    </td>
                    <td><?= $so_luong ?></td>
                    <td><?= $ma_KM ?></td>
                    <td><?= $tong_tien ?></td>
                    <td><?= $kieu_thanh_toan?></td>
                    <td><?= $ngay_đặt ?></td>
                    <td>
                        <button type="button" class="btn btn-success">Success</button>
                        <button type="button" class="btn btn-success">Success</button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>