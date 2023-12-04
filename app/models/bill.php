<?php
function list_bill($id_donhang)
{
    $sql = "SELECT * FROM `hoadon` 
            JOIN `taikhoan` ON hoadon.id_tk = taikhoan.id_tk 
            JOIN `hoadonchitet` ON hoadonchitet.id_hd = hoadon.id_hd 
            JOIN `sanpham` ON sanpham.id_sp = hoadonchitet.id_sp 
            WHERE taikhoan.id_tk = '$id_donhang'";

    $listbill = pdo_query($sql);
    return $listbill;
}
function delete_bill($id_sp){
    $sql = "SELECT * FROM `hoadonchitet` WHERE id_sp=".$id_sp;
    pdo_execute($sql);
}


function sua_hoa_don($id_hd){
    $sql = "select * from hoadon where id_hd =" . $id_hd;
    $tk = pdo_query_one($sql);
    return $tk;
}
function list_dmhd_hd(){
    $sql="SELECT * FROM `hoadon` join trangthaidoihang on hoadon.trangthai=trangthaidoihang.id_thdh";
    $listdmhd = pdo_query($sql);
    return $listdmhd;
}