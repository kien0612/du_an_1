<?php
if (is_array($sp)) {
    extract($sp);
    $url = "./upload/";
    $image = $url . $anh_sp;
    $anh_sp = "<img src='" . $image . "' style='width: 200px;' alt=''>";
}
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Thêm Sản Phẩm</h1>
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
    <div>
        <form action="index.php?act=suasp" method="post" enctype="multipart/form-data">
            <div class="card card-primary">
                <div style="width: 70%; margin: 0 auto;">
                    <input type="hidden" name="id_sp" value="<?php echo $id_sp ?>">
                    <div>
                        <label>Tên Sản Phẩm</label> <br>
                        <input type="text" name="ten_sp" style="width: 70%;margin-left: 10%;" placeholder="nhập tên sản phẩm vào " value="<?php echo $ten_sp ?>">
                    </div>
                    <div class="form-group">
                        <label>Giá Sản Phẩm</label><br>
                        <input type="number" name="gia_sp" style="width: 70%;margin-left: 10%;" placeholder="Nhập giá Sản Phẩm" value="<?php echo $gia_sp ?>">
                    </div>
                    <div class="form-group">
                        <label>Mô tả</label><br>
                        <textarea name="mo_ta_sp" style="width: 70%;margin-left: 10%;" id="" cols="100" rows="10"><?php echo $mo_ta_sp ?></textarea>
                    </div>

                    <div class="form-group">
                        <label>ẢNH Sản Phẩm</label><br>
                        <input type="file" name="anh_sp" style="width: 70%;margin-left: 10%;">

                        <?php echo $anh_sp  ?>
                    </div>
                    <div class="form-group">
                        <label>Số Lượng Sản Phẩm</label><br>
                        <input type="number" name="so_luong" style="width: 70%;margin-left: 10%;" placeholder="Nhập giá Sản Phẩm" value="<?php echo $so_luong ?>">
                    </div>
                    <div class="form-group">
                        <label>Ngày Nhập Sản Phẩm</label><br>
                        <input type="date" name="ngay_nhap_sp" style="width: 20%;margin-left: 10%;" value="<?php echo $ngay_nhap_sp ?>">
                    </div>

                    <div class="form-group">
                        <label>Trang Thái</label><br>
                        <select name="trang_thai" id="" style="width: 70%;height: 30px;margin-left: 10%;" value="<?php echo $id_sp ?>">
                            <option value="0">Còn Hàng</option>
                            <option value="1">Kết Hàng</option>
                        </select>
                    </div>


                    <div class="form-group">
                        <label>Danh Mục</label><br>
                        <select name="id_dm" id="" style="width: 70%;height: 30px;margin-left: 10%;">
                            <?php foreach ($listdm as $value) :
                                extract($listdm);
                            ?>

                                <option value="<?php echo $value['id_dm'] ?>" <?php echo  $value['id_dm'] == $sp['id_dm'] ? 'selected' : " " ?>>
                                    <?= $value['ten_dm'] ?>
                                </option>
                            <?php endforeach;  ?>

                        </select>
                    </div>





                    <div style="text-align: center;">
                        <input type="submit" name="capnhap" value="cập nhập" class="btn btn-primary">
                        <input type="reset" value="Nhập lại" class="btn btn-primary">
                        <?php
                        if (isset($thongBao) && ($thongBao != "")) {
                            echo $thongBao;
                        }
                        ?>
                    </div>

                </div>
            </div>
        </form>
    </div>
</div>