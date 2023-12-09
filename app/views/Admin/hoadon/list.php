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

                <th>id_hd</th>
                <th>Khách hàng</th>
                <th>số lượng</th>
                <th>Tổng Tiền</th>
                <th>Ghi Chú</th>
                <th>Ngày Tạo Đơn</th>
                <th>Trạng Thái</th>
                <th>Action</th>

            </tr>
        </thead>

        <tbody>

            <?php foreach ($list_admin_hd as $avatar) {
                extract($avatar);
                $delete = "index.php?act=xoadh&id_hd=" . $id_hd;
                $sua = "index.php?act=suathhd&id_hd=" . $id_hd;

            ?>
                <tr>

                    <td><?= $id_hd ?></td>
                    <td><?= $full_name ?><br>
                        <?= $diachi ?><br>
                        <?= $sdt ?></td>

                    <td><?= $tong_soluong ?></td>
                    <td><?= $tongtien ?></td>

                    <td><?= $mota ?></td>
                    <td><?= $ngaydathang ?></td>
                    <td><?= $ten_dh ?></td>
                    <td>
                        <!-- <td> 
                                   
                                   <a class="url-edit" href="index.php?act=suatk&amp;id=8">
                                     <i class="fa-solid fa-pen-to-square"></i>
                                   </a><a class="url-delete" href="index.php?act=xoatk&amp;id=8" onclick="return confirm(&quot;Delete entry?&quot;)">
                                     <i class="fa-solid fa-trash"></i>
                                   </a> 
                                 </td> -->
                        <a class="btn btn-danger" href="<?= $delete ?>" onclick="return confirm('Bạn có chắc chắn muốn hủy không')">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                        <!-- <li style="list-style: none;" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i style="font-size:16px" class="ion-eye"></i></a></li> -->
                        <a href="<?= $sua ?>" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i> </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>