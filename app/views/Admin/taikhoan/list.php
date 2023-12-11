<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Danh Sách Tài Khoản</h1>
                </div><!-- /.col -->
                <div class="col-lg-9">
                            <!-- <div class="hm-form_area">
                                <form action="index.php?act=listtk" class="hm-searchbox" method="post">
                                    <input type="text" name="kyw" placeholder="Enter your search key ...">
                                    <button class="li-btn" name="timkiem" type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div> -->
                        </div>
            </div><!-- /.row -->
        </div>
    </div>

    <table border="1px" style="width: 90%; margin: 0 auto; text-align: center;" class = "table">
        <thead class = "table-dark">
            <tr>
                <th>Id</th>
                <th>Tên tài khoản</th>
                <th>Họ và tên</th>
                <th>Email</th>
                <th>Pass</th>
                <th>Địa Chỉ</th>
                <th>Role</th>
                <th>Số Điện Thoại</th>
                <th>Năm Sinh</th>
                <th>Giới Tính</th>
                <th>Ngày Tạo</th>
                <th>Hành động</th>
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
                    <td><?= $full_name?></td>
                    <td><?= $email?></td>
                    <td><?= $password?></td>
                    <td><?= $dia_chi?></td>
                    <td><?= $name_role?></td>
                    <td><?= $sdt?></td>
                    <td><?= $nam_sinh?></td>
                    <td><?= $gioi_tinh == 1 ? 'Nữ' : 'Nam'?></td>
                    <td><?= $ngay_tao?></td>
                    
                    <td>
                    <a class="btn btn-danger" href="<?= $xoatk ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa không')">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                        <!-- <li style="list-style: none;" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i style="font-size:16px" class="ion-eye"></i></a></li> -->
                        <a href="<?= $suatk ?>" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i> </a>

                    </td>    
                 </tr>

          <?php } ?>
        </tbody>
    </table>
</div>