<?php
// hiện thị tất cả 
function loadAll_binh_lua($id_sp,$id_bl){
    $sql = "SELECT binhluan.* , taikhoan.ten_tk   FROM binhluan INNER JOIN taikhoan ON binhluan.id_tk = taikhoan.id_tk   WHERE 1";
    if ($id_sp > 0) {
        $sql .= " AND `id_sp`=" . $id_sp;
    }else if($id_bl != 0 && $id_bl != ""){
        $sql.=" and id like '%".$id_bl."%'";
    }
   $sql .= " ORDER BY id_bl DESC";
    $list_binh_lua = pdo_query($sql);
    return $list_binh_lua;
}
// xóa
function delete_binh_luan($id_bl){
    $sql = "DELETE FROM `binhluan` WHERE id_bl=" .$id_bl;
    pdo_execute($sql);
}
function loadAll_binh_luan(){
    $sql = "SELECT   binhluan.* , taikhoan.ten_tk   FROM binhluan INNER JOIN taikhoan ON binhluan.id_tk = taikhoan.id_tk ";
    $list_binh_luan = pdo_query($sql);
    return $list_binh_luan;
}

function add_bl_bl($id_sp,$noi_dung_bl){
    $sql="INSERT INTO `binhluan`(`id_sp`, `noi_dung_bl`) VALUES `('$id_sp', '$noi_dung_bl')";
    pdo_execute($sql);

}
function insert_binhluan($noi_dung_bl,$id_tk,$id_sp,$ngay_bl){
    $sql="insert into binhluan(noi_dung_bl,id_tk,id_sp,ngay_bl) values ('$noi_dung_bl','$id_tk','$id_sp','$ngay_bl')"; 
    pdo_execute($sql);
}