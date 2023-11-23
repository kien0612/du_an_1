<?php 
if(is_array($role)){
  extract($role);
}
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Sửa role</h1>
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
        <form action="?act=suarole" method="post" enctype="multipart/form-data">
            <div class="card card-primary">
                <div style="width: 70%; margin: 0 auto;">
                <input type="hidden" name="id_role" value="<?php echo $id_role?>">
                    <div>
                        <label>Tên role</label> <br>
                        <input type="text" name="name_role" style="width: 70%;margin-left: 10%;" value="<?php echo $name_role?>">
                    </div>
                    <div style="text-align: center;">
                        <input type="submit" name="capnhap" value="sửa">
                        <input type="reset" value="Nhập lại">
                       
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