<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Danh Sách Bài Viết</h1>
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
                <th>Mã Khuyễn Mãi</th>
                <th>phan_tram_km</th>
                <th>ngay_bat_dau</th>
                <th>ngay_ket_thuc</th>
                <th>Trang Thai</th>
                <th>Hàng Động</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($listkm as  $value) {
                  extract($value);
                  $edit = "index.php?act=editkm&id_KM=".$id_KM;
                  $delete = "index.php?act=xoakm&id_KM=".$id_KM;
            ?>

                <tr>
                    <td><?= $value['id_KM']?></td>
                    <td><?= $value['ma_KM']?> </td>
                    <td><?= $value['phan_tram_km']?> %</td>
                    <td><?= $value['ngay_bat_dau']?></td>
                    <td><?= $value['ngay_ket_thuc']?></td>
                    <td><?= $value['trang_thai']?></td>
                    <td>
                        <a href="<?= $edit ?>"><button type="button" class="btn btn-success">Edit</button></a>
                        <a href="<?= $delete ?>"><button type="button" class="btn btn-success" onclick="return confirm('bạn chắc không')">Xóa</button></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>