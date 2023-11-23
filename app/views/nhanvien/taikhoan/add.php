<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Thêm Tài Khoản</h1>
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
    <form action="?act=addtk" method="post" enctype="multipart/form-data">
        <div class="card card-primary">
            <div style="width: 70%; margin: 0 auto;">
                <div>
                    <label>Tên Đang Nhập</label> <br>
                    <input type="text" name="ten_tk" style="width: 70%;margin-left: 10%;" placeholder="Nhập họ tên đầy đủ" required>
                </div>
                <div>
                    <label>password</label> <br>
                    <input type="password" name="password" style="width: 70%;margin-left: 10%;" placeholder="" required>
                </div>
                <div class="form-group">
                    <label>Ngày Sinh</label><br>
                    <input type="date" name="nam_sinh" style="width: 20%;margin-left: 10%;" required>
                </div>
                <div class="form-group">
                    <label>Giới Tính</label><br>
                    <div style="width: 70%;margin-left: 10%;">
                        <input type="radio" name="gioi_tinh" value="1" checked> Nữ
                        <input type="radio" style="margin-left:  5%;" name="gioi_tinh" value="0"> Nam
                    </div>
                </div>
                <div class="form-group">
                    <label>Số điện thoại</label><br>
                    <input type="text" name="sdt" pattern="[0-9]{11}" style="width: 70%;margin-left: 10%;" placeholder="0123*******" required>
                </div>
                <div class="form-group">
                    <label>Email</label><br>
                    <input type="email" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}" style="width: 70%;margin-left: 10%;" placeholder="abc123@gmai.com" required>
                </div>
                <div class="form-group">
                    <label>Địa chỉ</label><br>
                    <input type="text" name="dia_chi" style="width: 70%;margin-left: 10%;" placeholder="Địa chỉ nơi ở" required>
                </div>
                <div class="form-group">
                    <label>Role</label><br>
                    <select name="id_role" id="" style="width: 70%;height: 30px;margin-left: 10%;">
                        <?php foreach ($listrole as $value) { ?>
                           <option value="<?= $value['id_role']?>"><?= $value['name_role']?></option>
                       <?php } ?>
                    </select>
                </div>
                <div class="card-footer">
                    <button type="submit" name="add" class="btn btn-primary">Thêm Mới</button>
                    <input type="reset" class="btn btn-primary" value="Nhập lại">
                </div>
                <?php
                        if (isset($thongBao) && ($thongBao != "")) {
                            echo $thongBao;
                        }
                        ?>

            </div>
        </div>

    </form>

</div>