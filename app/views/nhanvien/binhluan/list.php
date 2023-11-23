<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Danh Sách Bình Luận</h1>
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

    <table border="1px" style="width: 95%; margin: 0 auto; text-align: center;">
        <thead>
            <tr>
                <!-- <th style="width: 5%;">Check</th> -->
                <th>Id</th>
                <th>Mã tài khoản</th>
                <th>Mã sản phẩm</th>
                <th>Nội dung</th>
                <th>Ngày đăng</th>
                <th>Hành động</th>
            </tr>
        </thead>

        <tbody>
            <?php
            foreach ($list_binh_luan as $binh_luan) {
                extract($binh_luan);
                $delete = "index.php?act=xoabl&id=_bl".$id_binh_luan;
            ?>
                <tr>
                    <!-- <th><input type="checkbox" name="" id=""></th> -->
                    <td><?= $id_bl ?></td>
                    <td><?= $id_tk ?></td>
                    <th><?= $id_sp ?></th>
                    <td><?= $noi_dung ?></td>
                    <td><?= $noi_dung ?></td>
                    <td>
                        <a href="<?= $delete ?>"><button type="button" class="btn btn-success">Xóa</button></a>
                        
                    </td>
                </tr>
            <?php
            }
            ?>

        </tbody>
    </table>
</div>