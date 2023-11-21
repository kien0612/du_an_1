<?php
// hiện thị tất cả 
function loadAll_binh_luan(){
    $sql = "SELECT * FROM `binhluan` WHERE 1";
    $list_binh_luan = pdo_query($sql);
    return $list_binh_luan;
}
// xóa
function delete_binh_luan($id_binh_luan){
    $sql = "DELETE FROM `binhluan` WHERE id_bl=" .$id_binh_luan;
    pdo_execute($sql);
}