<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Danh Sách Danh Mục</h1>
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
                <th>Tên</th>
                <th>Ngày tạo</th>
                <th>Hành động</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($list_danhmuc as $danhmuc) {
                extract($danhmuc);
                $edit = "index.php?act=editdm&id_dm=" . $id_dm;
                $delete = "index.php?act=xoadm&id_dm=" . $id_dm;
            ?>
            <tr>
                <td><?= $id_dm ?></td>
                <td><?= $ten_dm ?></td>
                <td><?= $ngay_update ?></td>
                <td>
                    <a href="<?= $edit ?>"><button type="button" class="btn btn-success">Edit</button></a>
                    <a href="<?= $delete ?>"><button type="button" class="btn btn-success">Xóa</button></a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>