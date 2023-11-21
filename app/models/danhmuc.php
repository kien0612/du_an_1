<?php 
function insert_danh_muc($ten_dm,$ngay_tao){
   $sql = "INSERT INTO `danhmuc`( `ten_dm`, `ngay_update`) VALUES ('$ten_dm','$ngay_tao')";
   pdo_execute($sql);
}
function delete_danh_muc($id_dm){
    $sql = "DELETE FROM `danhmuc` WHERE id_dm=" .$id_dm;
    pdo_execute($sql);
}
function loadAll_danhmuc(){
    $sql = "SELECT * FROM `danhmuc` WHERE 1";
    $list_danhmuc = pdo_query($sql);
    var_dump($list_danhmuc);
    die();
    return $list_danhmuc;
}
function loadOne_danhmuc($id_dm){
    $sql = "SELECT * FROM `danhmuc` WHERE id_dm=" .$id_dm;
    $danhmuc = pdo_query_one($sql);
    return $danhmuc;
}
function update_danhmuc($edit_id,$ten_dm,$ngay_tao){
    $sql = "UPDATE `danhmuc` SET `ten_dm`='$ten_dm',`ngay_tao`='$ngay_tao' WHERE `id_dm`=" .$edit_id;
    pdo_execute($sql);
}