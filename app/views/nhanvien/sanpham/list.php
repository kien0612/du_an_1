<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Danh Sách Sản Phẩm</h1>
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
    <div class="col-lg-9">
                            <div class="hm-form_area">
                                <form action="index.php?act=listsp" class="hm-searchbox" method="post">
                                    <input type="text" name="kyw" placeholder="Enter your search key ...">
                                    <button class="li-btn" name="timkiem" type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>

    <table border="1px" style="width: 95%; margin: 0 auto; text-align: center;" class = "table">
        <thead class = "table-dark">
            <tr>
                <!-- <th style="width: 5%;">Check</th> -->
                <th>Id</th> 
                <th>Ảnh</th>
                <th>Tên</th>
                <th>Giá</th>
                <th>mo_ta_sp</th>
               
                <th>Số lượng</th>
                
                <th>Trạng thái</th>
                <th>Danh Mục</th>
                <th>Ngày Nhập</th>
                <th>Hành động</th>
                

            </tr>
        </thead>

        <tbody>
            <?php
            foreach ($listsp as $sp) {
              extract($sp);
                $edit = "index.php?act=editsp&id_sp=" . $id_sp;
                $delete = "index.php?act=xoasp&id_sp=" . $id_sp;
                $url = "./upload/sanpham/";
                $image = $url . $anh_sp;
                $anh_sp = "<img src='" . $image . "' style='width: 200px;' alt=''>"
            ?>
                <tr>
                    <!-- <th><input type="checkbox" name="" id=""></th> -->
                    <td><?= $id_sp ?></td>
                    <td><?= $anh_sp ?></td>
                    <td><?= $ten_sp ?></td>
                    <td><?= $gia_sp ?></td>
                    <td style="width: 40%;"><?= $mo_ta_sp ?></td>
                    <td><?= $so_luong ?></td>
                    <td><?= $ten_trang_thai?></th>
                    <td><?= $ten_dm ?></td>
                    <td><?= $ngay_nhap_sp ?></td>
                    </td>
                    <td>
                        <a href="<?= $edit ?>"><button type="button" class="btn btn-success">Edit</button></a>
                        <a href="<?= $delete ?>"><button type="button" class="btn btn-success" onclick="return confirm('bạn chắc không')">Xóa</button></a>

                    </td>
                </tr>


            <?php
            }
            ?>

        </tbody>
    </table>
</div>