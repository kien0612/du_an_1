<?php
function loadll_san_pham($kyw="",$id_dm=0){
    $sql="SELECT * FROM sanpham where 1"; 
    if($kyw!=""){
        $sql.=" and ten_sp like '%".$kyw."%' ";
    }
    if($id_dm>0){
        $sql.=" and id_dm ='".$id_dm."' ";
    }
    $sql.=" order by id_sp desc";
    $listsp=pdo_query($sql);
    return $listsp;
}
function loadAll_san_pham(){
    $sql="SELECT sanpham.*, danhmuc.ten_dm , trangthai.ten_trang_thai FROM sanpham 
    INNER JOIN danhmuc ON sanpham.id_dm = danhmuc.id_dm 
    INNER JOIN trangthai ON trangthai.id_trang_thai= sanpham.trang_thai";
    $listsp=pdo_query($sql);
    return $listsp;
    
}
function load_ten_dm($id_dm){
        if($id_dm>0){
        $sql="select * from danhmuc where id_dm=".$id_dm;
        $dm=pdo_query_one($sql);
        extract($dm);
        return $ten_dm;
        }else{
            return "";
        }
    } 
function loadAll_danh_muc(){
    $sql="SELECT * FROM `danhmuc` WHERE 1";
    $listdm=pdo_query($sql);
    return $listdm;
}
function loadAll_trang_thai() {
    $sql = "SELECT * FROM `trangthai` WHERE 1";
    $list_tt = pdo_query($sql);
    return $list_tt;
    
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
// function loadone_sanpham($id_sp){
//     $sql="select * from sanpham where id_sp=".$id_sp;
//     $sp=pdo_query_one($sql);
//     return $sp;
// }  
?>
