<?php
function loadAll_hoa_don(){
    $sql = "SELECT hoadon.id_hoa_don, hoadon.tong_tien, hoadon.so_luong, hoadon.ngay_khoi_tao, hoadon.id_KM, thanhtoan.kieu_thanh_toan, taikhoan.ten_tk, taikhoan.dia_chi, taikhoan.sdt
    FROM `hoadon` 
    INNER JOIN `thanhtoan` ON hoadon.id_thanh_toan = thanhtoan.id_thanh_toan
    INNER JOIN `taikhoan` ON hoadon.id_tk = taikhoan.id_tk ";
    $list_hoa_don = pdo_query($sql);
    return $list_hoa_don;
}
function delete_hoa_don($id_hoa_don){
    $sql = "DELETE FROM `hoadon` WHERE id_hoa_don=" .$id_hoa_don;
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