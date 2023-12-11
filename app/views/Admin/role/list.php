<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Danh Sách role</h1>
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

    <table border="1px" style="width: 90%; margin: 0 auto; text-align: center;" class = "table-dark">
        <thead class = "table-dark">
            <tr>
                <th>Id</th>
                <th>Tên</th>
                <th>Hành động</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($listrole as $danhmuc) {
                extract($danhmuc);
                $edit = "index.php?act=editrole&id_role=" . $id_role;
                $delete = "index.php?act=xoarole&id_role=" . $id_role;
            ?>
            <tr>
                <td><?= $id_role ?></td>
                <td><?= $name_role ?></td>
               
                <td>
                <a class="btn btn-danger" href="<?= $delete ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa không')">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                        <!-- <li style="list-style: none;" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i style="font-size:16px" class="ion-eye"></i></a></li> -->
                        <a href="<?= $edit ?>" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i> </a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>