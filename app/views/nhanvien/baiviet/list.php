<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Danh Sách Bài Viết</h1>
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

    <table border="1px" style="width: 95%; margin: 0 auto; text-align: center;">
        <thead>
            <tr>
                <!-- <th style="width: 5%;">Check</th> -->
                <th style="width: 5%;">Id</th>
                <th style="width: 20%;">Ảnh bìa</th>
                <th style="width: 15%;">Tiêu đề</th>
                <th style="width: 45%;">mô tả</th>
                <th>Ngày đăng</th>
                <th><a href="?act=addbv"><button>thêm</button></a></th>
            </tr>
        </thead>

        <tbody>
            <?php
            foreach ($list_bai_viet as $bai_viet) {
                extract($bai_viet);
                $edit = "index.php?act=editbv&id_bai_viet=".$id_bai_viet;
                $delete = "index.php?act=xoabv&id_bai_viet=".$id_bai_viet;
                $url = "./upload/";
                $image = $url .$avatar;
                $avatar = "<img src='".$image."' style='width: 200px;' alt=''>"
            ?>

                <tr>
                    <!-- <th><input type="checkbox" name="" id=""></th> -->
                    <td><?= $id_bai_viet ?></td>
                    <td><?= $avatar?></td>
                    <th><?= $tieu_de ?></th>
                    <td><?= $mota ?></td>
                    <td><?= $ngay_dang ?>
                    </td>
                    <td>
                        <a href="<?= $edit ?>"><button type="button" class="btn btn-success">Edit</button></a>
                      
                        
                    </td>
                </tr>


            <?php
            }
            ?>

        </tbody>
    </table>
</div>