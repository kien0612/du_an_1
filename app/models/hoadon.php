<?php

function loadAll_hoa_don(){
    $sql = "SELECT * FROM `hoadon` JOIN `taikhoan` ON hoadon.id_tk = taikhoan.id_tk JOIN `hoadonchitet` ON hoadonchitet.id_hd = hoadon.id_hd JOIN `sanpham` ON sanpham.id_sp = hoadonchitet.id_sp join trangthaidoihang on hoadon.trangthai=trangthaidoihang.id_thdh ";
    $list_hoa_don = pdo_query($sql);
    return $list_hoa_don;
}
function delete_hoa_don($id_hd){
    $sql = "DELETE FROM `hoadon` WHERE id_hd=" .$id_hd;
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
    $sql="SELECT hoadon.id_hd, hoadon.tongtien, taikhoan.full_name, hoadon.sdt, hoadon.email, hoadon.ngaydathang ,hoadon.diachi, hoadon.pttt, trangthaidoihang.ten_dh, hoadon.mota, hoadon.id_tk, 
    SUM(hoadonchitet.soluong) AS tong_soluong
FROM hoadon
JOIN taikhoan ON hoadon.id_tk = taikhoan.id_tk 
JOIN hoadonchitet ON hoadonchitet.id_hd = hoadon.id_hd 
JOIN sanpham ON sanpham.id_sp = hoadonchitet.id_sp 
JOIN trangthaidoihang ON hoadon.trangthai = trangthaidoihang.id_thdh
GROUP BY hoadon.id_hd, hoadon.tongtien, hoadon.hoten, hoadon.sdt, hoadon.email, hoadon.ngaydathang, hoadon.diachi, hoadon.pttt, hoadon.trangthai, hoadon.mota, hoadon.id_tk;";
    $list_admin_hd=pdo_query($sql);
    return $list_admin_hd;
}

function list_hdct($id_hd){
    $sql = "SELECT * FROM hoadonchitet
    WHERE hoadon.id_hd =" .$id_hd;
    pdo_execute($sql);
}
function list_hdct_view(){
    $sql = "SELECT * FROM hoadon 
    JOIN hoadonchitet on hoadon.id_hd = hoadonchitet.id_hd
    JOIN sanpham ON sanpham.id_sp = hoadonchitet.id_sp";
    $list_hdct_view = pdo_query($sql);
    return $list_hdct_view;
}