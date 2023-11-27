<?php  
function list_thongke(){
    $sql="SELECT dm.id_dm,dm.ten_dm , COUNT(*)'so_luong' FROM `danhmuc` dm join sanpham sp on dm.id_dm=sp.id_dm group by dm.id_dm , dm.ten_dm order by sp.so_luong desc";
    return pdo_query($sql);
}
?>