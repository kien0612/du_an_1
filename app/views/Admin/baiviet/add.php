<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Thêm Bài Viết</h1>
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
        <form action="#" method="post" enctype="multipart/form-data">
            <div class="card card-primary">
                <div style="width: 70%; margin: 0 auto;">
                    <div>
                        <label>Avatar</label> <br>
                        <input type="file" name="avatar" style="width: 70%;margin-left: 10%;" required>
                    </div>
                    <div class="form-group">
                        <label>Tiêu đề</label><br>
                        <input type="text" name="tieuDe" style="width: 70%;margin-left: 10%;" placeholder="Nhập tiêu đề của bài viết..." required>
                    </div>
                    <div class="form-group">
                        <label>Mô tả</label><br>
                        <textarea name="moTa" style="width: 70%;margin-left: 10%;" id="" cols="100" rows="10"></textarea>
                    </div>
                    <div style="text-align: center;">
                        <input type="submit" name="add" value="Thêm Mới">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=listbv"><input type="button" value="Danh Sách"></a>
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