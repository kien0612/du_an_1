<?php


function loadAll_hoa_don(){
    $sql = "SELECT * FROM `hoadon` JOIN `taikhoan` ON hoadon.id_tk = taikhoan.id_tk JOIN `hoadonchitet` ON hoadonchitet.id_hd = hoadon.id_hd JOIN `sanpham` ON sanpham.id_sp = hoadonchitet.id_sp join trangthaidoihang on hoadon.trangthai=trangthaidoihang.id_thdh ";
    $list_hoa_don = pdo_query($sql);
    return $list_hoa_don;
}
function delete_hoa_don_ct($id_hdct){
    $sql = "DELETE FROM `hoadonchitet` WHERE id_hdct=" .$id_hdct;
    pdo_execute($sql); 
}
function loadAll_lich_su_dh(){
    $sql = "SELECT hoadonchitiet.id_hoa_don_CT, hoadonchitiet.id_hoa_don, taikhoan.ten_tk, sanpham.ten_sp, hoadon.tong_tien
    FROM hoadonchitiet
    INNER JOIN hoadon ON hoadonchitiet.id_hoa_don = hoadon.id_hoa_don
    INNER JOIN sanpham ON hoadonchitiet.id_sp = sanpham.id_sp
    INNER JOIN taikhoan ON hoadon.id_tk = taikhoan.id_tk WHERE 1";
    $list_history = pdo_query($sql);
    return $list_history;
}
function list_hoadonadmin(){
    $sql="SELECT * FROM `hoadonchitet` WHERE 1";
    $list_admin=pdo_query($sql);
    return $list_admin;
}
function list_hoadon(){
    $sql="SELECT * FROM `hoadon` JOIN `taikhoan` ON hoadon.id_tk = taikhoan.id_tk JOIN `hoadonchitet` ON hoadonchitet.id_hd = hoadon.id_hd JOIN `sanpham` ON sanpham.id_sp = hoadonchitet.id_sp join trangthaidoihang on hoadon.trangthai=trangthaidoihang.id_thdh";
    $list_admin_hd=pdo_query($sql);
    return $list_admin_hd;
}
