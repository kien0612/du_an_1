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

    <table border="1px" style="width: 90%; margin: 0 auto; text-align: center;" class = "table">
        <thead class = "table-dark">
            <tr>
               
                <th>id_hd</th>
                <th>Khách hàng</th>
                <th>Tên Sản phẩn</th>
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
                $delete = "index.php?act=xoadh&id_hdct=" .$id_hdct;
                $sua = "index.php?act=suathhd&id_hd=" .$id_hd;
                
            ?>
                <tr>
                   
                    <td><?=$id_hd ?></td>
                    <td><?=$ten_tk ?><br>
                        <?= $diachi ?><br>
                        <?= $sdt ?></td>
                    <td><?=$ten_sp?></td>
                    <td><?=$soluong ?></td>
                    <td><?=$thanhtien ?></td>
                    
                    <td><?=$mota ?></td>
                    <td><?=$ngaydathang?></td>
                    <td><?= $ten_dh ?></td>
                    <td>
                    <a href="<?= $delete ?>"><button type="button" class="btn btn-success" onclick="return confirm('bạn chắc không')">Xóa</button></a>
                    <a href="<?= $sua ?>"  class="btn btn-success" >Cập Nhập</a>
                    
                 
                </td>
                </tr>
                <?php } ?>
        </tbody>
    </table>
</div>