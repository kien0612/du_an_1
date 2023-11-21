<?php
function loadAll_san_pham(){
    $sql="SELECT * FROM sanpham WHERE 1";
    $listsp=pdo_query($sql);
    return $listsp;
    
}
function loadAll_danh_muc(){
    $sql="SELECT * FROM `danhmuc` WHERE 1";
    $listmd=pdo_query($sql);
    return $listmd;
}
function delete_san_pham($id_sp){
    $sql="DELETE FROM sanpham WHERE id_sp=".$id_sp;
    pdo_execute($sql);
}
function sua_san_pham($id_sp){
    $sql = "select * from sanpham where id_sp =".$id_sp;
    $sp=pdo_query_one($sql);
    return $sp;
}


function add_san_pham($ten_sp ,  $gia_sp ,  $mo_ta_sp ,  $anh_sp ,  $so_luong ,  $ngay_nhap_sp ,  $trang_thai ,  $id_dm ){
    $sql="INSERT INTO  sanpham ( ten_sp ,  gia_sp ,  mo_ta_sp ,  anh_sp ,  so_luong ,  ngay_nhap_sp ,  trang_thai ,  id_dm )
     VALUEs ( '$ten_sp',  '$gia_sp' , '$mo_ta_sp',  '$anh_sp' , '$so_luong' ,  '$ngay_nhap_sp' ,  '$trang_thai' ,  '$id_dm' )";
    pdo_execute($sql);
}
function update_san_pham( $id_sp,$ten_sp ,  $gia_sp ,  $mo_ta_sp ,  $anh_sp ,  $so_luong ,  $ngay_nhap_sp ,  $trang_thai ,  $id_dm){
    if($anh_sp!=""){
        $sql="UPDATE `sanpham` SET `ten_sp`='".$ten_sp."',`gia_sp`='".$gia_sp."',`mo_ta_sp`='".$mo_ta_sp."',`anh_sp`='".$anh_sp."',`so_luong`='".$so_luong."',`ngay_nhap_sp`='".$ngay_nhap_sp."',`trang_thai`='".$trang_thai."',`id_dm`='".$id_dm."' WHERE id_sp=".$id_sp;

    }else{
        $sql="UPDATE `sanpham` SET `ten_sp`='".$ten_sp."',`gia_sp`='".$gia_sp."',`mo_ta_sp`='".$mo_ta_sp."',`so_luong`='".$so_luong."',`ngay_nhap_sp`='".$ngay_nhap_sp."',`trang_thai`='".$trang_thai."',`id_dm`='".$id_dm."' WHERE id_sp=".$id_sp;
    }
    pdo_execute($sql);
}
?>