<?php
  if(is_array($tk)){
    extract($tk);
}
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">sửa Tài Khoản</h1>
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
    <form action="index.php?act=updatetk" method="POST" enctype="multipart/form-data">
        <div class="card card-primary">
            <div style="width: 70%; margin: 0 auto;">
            <input type="hidden" name="id_tk" value="<?php echo $id_tk?>">
                <div>
                    <label>Tên Đang Nhập</label> <br>
                    <input type="text" name="ten_tk" style="width: 70%;margin-left: 10%;" value="<?php echo $ten_tk?>">
                </div>
                <div>
                    <label>password</label> <br>
                    <input type="text" name="password" style="width: 70%;margin-left: 10%;" value="<?php echo $password?>">
                </div>
                <div class="form-group">
                    <label>Ngày Sinh</label><br>
                    <input type="date" name="nam_sinh" style="width: 20%;margin-left: 10%;" value="<?php echo $nam_sinh?>">
                </div>
                <div class="form-group">
                    <label>Giới Tính</label><br>
                    <div style="width: 70%;margin-left: 10%;" value=" <?php echo $gioi_tinh?>" >
                        <input type="radio" name="gioi_tinh" value="1" checked> Nữ
                        <input type="radio" style="margin-left:  5%;" name="gioi_tinh" value="0"> Nam
                    </div>
                </div>
                <div class="form-group">
                    <label>Số điện thoại</label><br>
                    <input type="text" name="sdt"  style="width: 70%;margin-left: 10%;" value=" <?php echo $sdt?>" >
                </div>
                <div class="form-group">
                    <label>Email</label><br>
                    <input type="email" name="email"  style="width: 70%;margin-left: 10%;" value="<?php echo $email?>" >
                </div>
                <div class="form-group">
                    <label>Địa chỉ</label><br>
                    <input type="text" name="dia_chi" style="width: 70%;margin-left: 10%;" placeholder="Địa chỉ nơi ở" value="<?php echo $dia_chi?>" >
                </div>
                <div class="form-group">
                    <label>Role</label><br>
                    <select name="id_role" id="" style="width: 70%;height: 30px;margin-left: 10%;">
                        <?php foreach ($listrole as $value) : ?>
                           <option value="<?= $value['id_role']?>" <?php echo $value['id_role']==$tk['id_role'] ? 'selected':""?>><?= $value['name_role']?></option>
                       <?php endforeach ; ?>
                    </select>
                </div>
                <div class="card-footer">
                     <input type="submit" name="capnhat" value="Cập Nhật" class="btn btn-primary" >
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