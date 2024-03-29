<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Danh Sách Tài Khoản</h1>
                </div><!-- /.col -->
                <div class="col-lg-9">
                            <div class="hm-form_area">
                                <form action="index.php?act=listtk" class="hm-searchbox" method="post">
                                    
                                   
                                </form>
                            </div>
                        </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
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
                    
                      
                 </tr>

          <?php } ?>
        </tbody>
    </table>
</div>