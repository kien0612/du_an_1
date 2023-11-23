<?php
  if(is_array($km)){
    extract($km);
  }
    ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Sửa Khuyễn Mãi</h1>
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
        <form action="?act=updatekm" method="POST" enctype="multipart/form-data">
            <div class="card card-primary">
                <div style="width: 70%; margin: 0 auto;">
                <input type="hidden" name="id_KM" value="<?php echo $id_KM?>">
                   
                    <div class="form-group">
                        <label>Mã Khuyễn Mãi</label><br>
                        <input type="text" name="ma_KM" style="width: 70%;margin-left: 10%;" placeholder="Nhập Mã Khuyễn Mãi..." value="<?php echo $ma_KM?>">
                    </div>
                    <div class="form-group">
                        <label>Phần Trăm Khuyễn Mãi</label><br>
                        <input type="number" name="phan_tram_km" style="width: 70%;margin-left: 10%;" placeholder="Nhập Mã Khuyễn Mãi..." value="<?php echo $phan_tram_km?>">
                    </div>
                    <div class="form-group">
                    <label>Ngày Bắt Dầu</label><br>
                    <input type="date" name="ngay_bat_dau" style="width: 20%;margin-left: 10%;" value="<?php echo $ngay_bat_dau?>">
                </div>
                <div class="form-group">
                    <label>Ngày Kết Thúc</label><br>
                    <input type="date" name="ngay_ket_thuc" style="width: 20%;margin-left: 10%;" value="<?php echo $ngay_ket_thuc?>">
                </div>
                <div class="form-group">
                    <label>Trang Thai</label><br>
                    <select name="trang_thai" id="" style="width: 70%;height: 30px;margin-left: 10%;" >
                   <?php foreach ($listkm as  $value) { ?>
                   <option value="<?= $value['trang_thai']?>" <?php echo $km['trang_thai']==$value['trang_thai'] ? 'selected' :""?>><?=  $value['trang_thai']?></option>
                 <?php    } ?>
                        <option value="0">Còn</option>
                        <option value="1">Kết </option>
                    </select>
                </div>
                    <div style="text-align: center;">
                        <input type="submit" name="capnhap" value="Thêm Mới" class="btn btn-success">
                        <input type="reset" value="Nhập lại" class="btn btn-success">
                        
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