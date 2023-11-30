<?php
// hiện thị tất cả 
function loadAll_binh_lua($id_bl){
    $sql = "SELECT * FROM $binhluan` WHERE 1";
    if ($id_bl > 0) {
        $sql .= " AND `id_bl`='" . $id_bl . "' ORDER BY id DESC";
    }
   // $sql .= " ORDER BY id DESC";
    $list_binh_lua = pdo_query($sql);
    return $list_binh_lua;
}
// xóa
function delete_binh_luan($id_binh_luan){
    $sql = "DELETE FROM `binhluan` WHERE id_bl=" .$id_binh_luan;
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