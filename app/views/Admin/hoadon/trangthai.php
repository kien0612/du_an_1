<?php
  if(is_array($hoadon)){
    extract($hoadon);
}
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Trang Thái</h1>
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
  <form action="" method="post">
  <input type="hidden" name="id_hd" value="<?php echo $id_hd?>">
    <select  name="trangthai" id="">
        
        <option value="1">Đang Chờ Duyệt</option>
        <option value="2">Đã Xác NhậnNhận</option>
        <option value="3">Đang Vận Chuyển</option>
        <option value="4">Hoàn Thành</option>
    </select>
    <input  class="btn btn-success" type="submit" name="capnhap" value="Cập Nhập"> 
    </form>

   
</div>