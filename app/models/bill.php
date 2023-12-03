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
