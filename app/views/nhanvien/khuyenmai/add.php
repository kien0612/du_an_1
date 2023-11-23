<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Thêm Khuyễn Mãi</h1>
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
        <form action="?act=addkm" method="POST" enctype="multipart/form-data">
            <div class="card card-primary">
                <div style="width: 70%; margin: 0 auto;">
                   
                    <div class="form-group">
                        <label>Mã Khuyễn Mãi</label><br>
                        <input type="text" name="ma_KM" style="width: 70%;margin-left: 10%;" placeholder="Nhập Mã Khuyễn Mãi..." required>
                    </div>
                    <div class="form-group">
                        <label>Phần Trăm Khuyễn Mãi</label><br>
                        <input type="number" name="phan_tram_km" style="width: 70%;margin-left: 10%;" placeholder="Nhập Mã Khuyễn Mãi..." required>
                    </div>
                    <div class="form-group">
                    <label>Ngày Bắt Dầu</label><br>
                    <input type="date" name="ngay_bat_dau" style="width: 20%;margin-left: 10%;" required>
                </div>
                <div class="form-group">
                    <label>Ngày Kết Thúc</label><br>
                    <input type="date" name="ngay_ket_thuc" style="width: 20%;margin-left: 10%;" required>
                </div>
                <div class="form-group">
                    <label>Trang Thai</label><br>
                    <select name="trang_thai" id="" style="width: 70%;height: 30px;margin-left: 10%;">
                        <option value="0">Còn</option>
                        <option value="1">Kết </option>
                    </select>
                </div>
                    <div style="text-align: center;">
                        <input type="submit" name="add" value="Thêm Mới" class="btn btn-success">
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