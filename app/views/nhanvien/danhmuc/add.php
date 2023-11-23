<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Thêm Danh Mục</h1>
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
        <form action="?act=adddm" method="post" enctype="multipart/form-data">
            <div class="card card-primary">
                <div style="width: 70%; margin: 0 auto;">
                    <div>
                        <label>Tên </label> <br>
                        <input type="text" name="ten_dm" style="width: 70%;margin-left: 10%;" required>
                    </div>
                    <div>
                        <label>Tên </label> <br>
                        <input type="date" name="ngay_update" style="width: 70%;margin-left: 10%;" required>
                    </div>
                    <div style="text-align: center;">
                        <input type="submit" name="add" value="Thêm Mới" class="btn btn-primary">
                        <input type="reset" value="Nhập lại" class="btn btn-primary">
                        <a href="index.php?act=listdm"><input type="button" value="Danh Sách"></a>
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