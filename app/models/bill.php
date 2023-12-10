<?php
function list_bill($id_donhang)
{
    $sql = "SELECT hoadon.id_hd, hoadon.tongtien, hoadon.hoten, hoadon.sdt, hoadon.email, hoadon.ngaydathang ,hoadon.diachi, hoadon.pttt, hoadon.trangthai, hoadon.mota, hoadon.id_tk, 
    SUM(hoadonchitet.soluong) AS tong_soluong
FROM hoadon
JOIN taikhoan ON hoadon.id_tk = taikhoan.id_tk 
JOIN hoadonchitet ON hoadonchitet.id_hd = hoadon.id_hd 
JOIN sanpham ON sanpham.id_sp = hoadonchitet.id_sp 
JOIN trangthaidoihang ON hoadon.trangthai = trangthaidoihang.id_thdh
WHERE taikhoan.id_tk = '$id_donhang' 
GROUP BY hoadon.id_hd, hoadon.tongtien, hoadon.hoten, hoadon.sdt, hoadon.email, hoadon.ngaydathang, hoadon.diachi, hoadon.pttt, hoadon.trangthai, hoadon.mota, hoadon.id_tk;
";
    $listbill = pdo_query($sql);
    return $listbill;
}
function delete_bill($id_sp)
{
    $sql = "SELECT * FROM `hoadonchitet` WHERE id_sp=" . $id_sp;
    pdo_execute($sql);
}


function sua_hoa_don($id_hd)
{
    $sql = "SELECT * FROM `hoadon` WHERE id_hd =" . $id_hd;
    $hoa_don = pdo_query_one($sql);
    return $hoa_don;
}

// function list_dmhd_hd(){
//     $sql="SELECT * FROM `hoadon` join trangthaidoihang on hoadon.trangthai=trangthaidoihang.id_thdh";
//     $listdmhd = pdo_query($sql);
//     return $listdmhd;
// }
function list_dmhd_hd()
{
    $sql = "SELECT * FROM `trangthaidoihang` WHERE 1";
    $listdmhd = pdo_query($sql);
    return ($listdmhd);
}
function update_thdh($id_hd, $trangthai)
{
    $sql = "UPDATE `hoadon` SET `trangthai`='.$trangthai.' WHERE id_hd =" . $id_hd;
    pdo_execute($sql);
}
function update_thdh_hd($id_hd, $trangthai)
{
    $sql = "UPDATE `hoadon` SET `trangthai`='" . $trangthai . "' WHERE id_hd =" . $id_hd;
    pdo_execute($sql);
}
