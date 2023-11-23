<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Danh Sách Tài Khoản</h1>
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
                <th>Họ và tên</th>
                <th>Email</th>
                <th>password</th>
                <th>Địa Chỉ</th>
                <th>Role</th>
                <th>Số Điện Thoại</th>
                <th>Năm Sinh</th>
                <th>Giới Tính</th>
                <!-- <th>Hành động</th> -->
            </tr>
        </thead>

        <tbody>
            <?php
            foreach ($listk as $value)  { 
                extract($value);
                $xoatk = "index.php?act=xoatk&id_tk=" . $id_tk;
                $suatk = "index.php?act=suatk&id_tk=" . $id_tk;
                 ?>

                 <tr>
                    <td><?= $id_tk?></td>
                    <td><?= $ten_tk?></td>
                    <td><?= $email?></td>
                    <td><?= $password?></td>
                    <td><?= $dia_chi?></td>
                    <td><?= $id_role?></td>
                    <td><?= $sdt?></td>
                    <td><?= $nam_sinh?></td>
                    <td><?= $gioi_tinh?></td>
                    <!-- <td> -->
                        <!-- <a href="<?= $xoatk ?>"><button type="button" class="btn btn-success" onclick="return confirm('bạn chắc không')">xóa</button></a> -->
                        <!-- <a href="<?= $suatk ?>"><button type="button" class="btn btn-success">sửa</button></a> -->
                
                    <!-- </td>     -->

                 </tr>

          <?php } ?>
        </tbody>
    </table>
</div>