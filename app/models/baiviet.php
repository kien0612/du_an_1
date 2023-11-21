<?php
function insert_bai_viet($avatar,$tieu_de,$mota,$ngay_dang){
    $sql = "INSERT INTO `baiviet`( `avatar`, `tieu_de`, `mota`,`ngay_dang`) 
    VALUES ('$avatar','$tieu_de','$mota','$ngay_dang')";
    pdo_execute($sql);
}
function delete_bai_viet($id_bai_viet){
    $sql = "DELETE FROM `baiviet` WHERE id_bai_viet=" .$id_bai_viet;
    pdo_execute($sql);
}
function loadAll_bai_viet(){
    $sql = "SELECT * FROM `baiviet` WHERE 1";
    $list_bai_viet = pdo_query($sql);
    return $list_bai_viet;
}
function loadAll_trang_thai() {
    $sql = "SELECT * FROM `trang_thai` WHERE 1";
    $list_trang_thai = pdo_query($sql);
    return $list_trang_thai;
}
function loadOne_bai_viet($id_bai_viet){
    $sql = "SELECT * FROM `baiviet` WHERE id_bai_viet=" .$id_bai_viet;
    $bai_viet = pdo_query_one($sql);
    return $bai_viet;
}
function update_bai_viet($edit_id,$avatar,$tieu_de,$mota){
    if($avatar !=" "){
        $sql = "UPDATE `baiviet` SET `avatar`='$avatar',`tieu_de`='$tieu_de',`mota`='$mota' WHERE `id_bai_viet`=" .$edit_id;
    }else{
        $sql = "UPDATE `baiviet` SET `tieu_de`='$tieu_de',`mota`='$mota' WHERE `id_bai_viet`=" .$edit_id;
    }
    pdo_execute($sql);
}