<?php
include "../../models/pdo.php";
include "../../models/baiviet.php";
include "../../models/binhluan.php";
include "../../models/hoadon.php";
include "../../models/taikhoan.php";
include "../../models/danhmuc.php";
include "../../models/sanpham.php";
include "../../models/khuyenmai.php";
include "../../models/role.php";
include "../../views/nhanvien/header.php";
include "../../views/nhanvien/menu-left.php";


if (isset($_GET['act']) && $_GET['act'] !== "") {
    $act = $_GET['act'];
    switch ($act) {
            // Tài Khoản
        case "listtk":
            $listk = loadAll_tai_khoan();
            include "../../views/nhanvien/taikhoan/list.php";
            break;
        case "addtk":
            if (isset($_POST['add'])) {
                $ten_tk = $_POST['ten_tk'];
                $password = $_POST['password'];
                $nam_sinh = $_POST['nam_sinh'];
                $gioi_tinh = $_POST['gioi_tinh'];
                $sdt = $_POST['sdt'];
                $email = $_POST['email'];
                $dia_chi = $_POST['dia_chi'];
                $id_role = $_POST['id_role'];
                add_tai_khoan($ten_tk,  $password,  $sdt,  $email,  $nam_sinh, $gioi_tinh, $dia_chi, $id_role);
                $thongBao = "Thêm thành công";
            }
            $listrole= loadall_role();
            $listk = loadAll_tai_khoan();
            include "../../views/nhanvien/taikhoan/add.php";
            break;
        case "suatk":
            if (isset($_GET['id_tk']) && ($_GET['id_tk'] > 0)) {
                $tk = sua_tai_khoan($_GET['id_tk']);
            }
            $listrole= loadall_role();
            $listk = loadAll_tai_khoan();
            include "../../views/nhanvien/taikhoan/edit.php";

            break;
        case "updatetk":
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id_tk = $_POST['id_tk'];
                $ten_tk = $_POST['ten_tk'];
                $password = $_POST['password'];
                $nam_sinh = $_POST['nam_sinh'];
                $gioi_tinh = $_POST['gioi_tinh'];
                $sdt = $_POST['sdt'];
                $email = $_POST['email'];
                $dia_chi = $_POST['dia_chi'];
                $id_role = $_POST['id_role'];
                update_tai_khoan($id_tk,  $ten_tk,  $password, $nam_sinh, $gioi_tinh, $sdt, $email, $dia_chi, $id_role);
                $thongBao = "Thêm thành công";
            }
            $listk = loadAll_tai_khoan();
            include "../../views/nhanvien/taikhoan/list.php";
            break;
        case "xoatk":
            if (isset($_GET['id_tk'])) {
                delete_tai_khoan($_GET['id_tk']);
                $thongBao = "Xóa thành công";
            }
            $listk = loadAll_tai_khoan();
            include "../../views/nhanvien/taikhoan/list.php";
            break;
            //role
        case "listrole":
            $listrole= loadall_role();
            include "../../views/nhanvien/role/list.php";
            break;
        case "xoarole":
            if (isset($_GET['id_role'])) {
                delete_role($_GET['id_role']);
                $thongBao = "Xóa thành công";
            }
            $listrole= loadall_role();
            include "../../views/nhanvien/role/list.php";

            break;
        case "editrole":
            if (isset($_GET['id_role']) && ($_GET['id_role'] > 0)) {
                $role = sua_role($_GET['id_role']);
            }
            include "../../views/nhanvien/role/edit.php";
            break;
        case "addrole":
            if (isset($_POST['add']) && ($_POST['add'])) {
                $name_role=$_POST['name_role'];
                add_role($name_role);
            }
            include "../../views/nhanvien/role/add.php";
            break;
        case "suarole":
            if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
                $id_role=$_POST['id_role'];
                $name_role=$_POST['name_role'];
                update_role($id_role,$name_role);
                $thongBao = "Thêm thành công";

            }
            $listrole= loadall_role();
            include "../../views/nhanvien/role/list.php";
            break;




            // Đơn Hàng
        case "listdh":
            $list_hoa_don = loadAll_hoa_don();
            include "../../views/nhanvien/hoadon/list.php";
            break;
        case "history_don_hang":
            $list_history = loadAll_lich_su_dh();
            include "../../views/nhanvien/hoadon/history.php";
            break;
        case "xoadh":
            if (isset($_GET['id_hoa_don'])) {
                delete_hoa_don($_GET['id_hoa_don']);
                $thongBao = "Xóa thành công";
            }
            $list_hoa_don = loadAll_hoa_don();
            include "../../views/nhanvien/hoadon/list.php";
            break;

            // Danh Mục
        case "listdm":
            $list_danhmuc = loadAll_danhmuc();
            include "../../views/nhanvien/danhmuc/list.php";
            break;
        case "adddm":

            if (isset($_POST['add'])) {
                $ten_dm = $_POST['ten_dm'];
                $ngay_update = $_POST['ngay_update'];
                insert_danh_muc($ten_dm, $ngay_update);
                $thongBao = "Thêm thành công";
            }
            include "../../views/nhanvien/danhmuc/add.php";
            break;
        case "editdm":
            if (isset($_GET['id_dm'])) {
                $danhmuc = loadOne_danhmuc($_GET['id_dm']);
            }
            include "../../views/nhanvien/danhmuc/edit.php";
            break;
        case "updatedm":
            if (isset($_POST['capnhap'])) {
                $id_dm = $_POST['id_dm'];
                $ten_dm = $_POST['ten_dm'];
                $ngay_update = $_POST['ngay_update'];
                update_danhmuc($id_dm,$ten_dm,$ngay_update);
                $thongBao = "Thêm thành công";
            }
            $list_danhmuc = loadAll_danhmuc();
            include "../../views/nhanvien/danhmuc/list.php";
            break;
        case "xoadm":
            if (isset($_GET['id_dm'])) {
                delete_danh_muc($_GET['id_dm']);
                $thongBao = "Xóa thành công";
            }
            $list_danhmuc = loadAll_danhmuc();
            include "../../views/nhanvien/danhmuc/list.php";
            break;

            // Sản Phẩm
        case "listsp":
            $listdm = loadAll_danh_muc();
            $listsp = loadAll_san_pham();
            include "../../views/nhanvien/sanpham/list.php";
            break;
        case "addsp":
            if (isset($_POST['add']) && ($_POST['add'])) {
                $ten_sp = $_POST['ten_sp'];
                $gia_sp = $_POST['gia_sp'];
                $mo_ta_sp = $_POST['mo_ta_sp'];

                $anh_sp = $_FILES['anh_sp']['name'];
                $target_dir = "upload/";
                $target_file = $target_dir . basename($_FILES['anh_sp']['name']);
                move_uploaded_file($_FILES['anh_sp']['tmp_name'], $target_file);

                $so_luong = $_POST['so_luong'];
                $ngay_nhap_sp = $_POST['ngay_nhap_sp'];
                $trang_thai = $_POST['trang_thai'];
                $id_dm = $_POST['id_dm'];

                add_san_pham($ten_sp,  $gia_sp,  $mo_ta_sp,  $anh_sp,  $so_luong,  $ngay_nhap_sp,  $trang_thai,  $id_dm);
                $thongbao = "thêm thành công";
            }
            $listdm = loadAll_danh_muc();
            include "../../views/nhanvien/sanpham/add.php";
            break;
        case "editsp":
            if (isset($_GET['id_sp']) && ($_GET['id_sp'] > 0)) {
                $sp = sua_san_pham($_GET['id_sp']);
            }
            $listdm = loadAll_danh_muc();
            include "../../views/nhanvien/sanpham/edit.php";
            break;
        case "suasp":
            if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
                $id_sp = $_POST['id_sp'];
                $ten_sp = $_POST['ten_sp'];
                $gia_sp = $_POST['gia_sp'];
                $mo_ta_sp = $_POST['mo_ta_sp'];

                $anh_sp = $_FILES['anh_sp']['name'];
                $target_dir = "upload/";
                $target_file = $target_dir . basename($_FILES['anh_sp']['name']);
                move_uploaded_file($_FILES['anh_sp']['tmp_name'], $target_file);

                $so_luong = $_POST['so_luong'];
                $ngay_nhap_sp = $_POST['ngay_nhap_sp'];
                $trang_thai = $_POST['trang_thai'];
                $id_dm = $_POST['id_dm'];

                update_san_pham($id_sp, $ten_sp,  $gia_sp,  $mo_ta_sp,  $anh_sp,  $so_luong,  $ngay_nhap_sp,  $trang_thai,  $id_dm);
                $thongbao = "thêm thành công";
            }
            $listdm = loadAll_danh_muc();
            $listsp = loadAll_san_pham();
            include "../../views/nhanvien/sanpham/list.php";
            break;
        case "xoasp":
            if (isset($_GET['id_sp'])) {
                delete_san_pham($_GET['id_sp']);
                $thongBao = "Xóa thành công";
            }
            $listsp = loadAll_san_pham();
            include "../../views/nhanvien/sanpham/list.php";
            break;

            // Bài Viết
        case "listbv":
            $list_bai_viet = loadAll_bai_viet();
            include "../../views/nhanvien/baiviet/list.php";
            break;
        case "addbv":
            if (isset($_POST['add'])) {
                $currentDateTime = new DateTime();
                $currentDateTimeString = $currentDateTime->format('Y-m-d H:i:s');
                $avatar = $_FILES['avatar']['name'];
                $tieu_de = $_POST['tieuDe'];
                $mota = $_POST['moTa'];
                $ngay_dang = $currentDateTimeString;
                $target_dir = "upload/";
                $target_file = $target_dir . basename($_FILES['avatar']['name']);
                move_uploaded_file($_FILES['avatar']['tmp_name'], $target_file);
                insert_bai_viet($avatar, $tieu_de, $mota, $ngay_dang);
                $thongBao = "Thêm thành công";
            }
            include "../../views/nhanvien/baiviet/add.php";
            break;
        case "editbv":
            if (isset($_GET['id_bai_viet'])) {
                $bai_viet = loadOne_bai_viet($_GET['id_bai_viet']);
            }
            include "../../views/nhanvien/baiviet/edit.php";
            break;
        case "updatebv":
            if (isset($_POST['update'])) {
                $edit_id = $_POST['edit_id'];
                $avatar = $_FILES['avatar']['name'];
                $tieu_de = $_POST['tieuDe'];
                $mota = $_POST['moTa'];
                $target_dir = "upload/";
                $target_file = $target_dir . basename($_FILES['avatar']['name']);
                move_uploaded_file($_FILES['avatar']['tmp_name'], $target_file);
                update_bai_viet($edit_id, $avatar, $tieu_de, $mota);
                $thongBao = "Cập nhật thành công";
            }
            $list_bai_viet = loadAll_bai_viet();
            include "../../views/nhanvien/baiviet/list.php";
            break;
        case "xoabv":
            if (isset($_GET['id_bai_viet'])) {
                delete_bai_viet($_GET['id_bai_viet']);
                $thongBao = "Xóa thành công";
            }
            $list_bai_viet = loadAll_bai_viet();
            include "../../views/nhanvien/baiviet/list.php";
            break;
            // Bình Luận
        case "listbl":
            $list_binh_luan = loadAll_binh_luan();
            include "../../views/nhanvien/binhluan/list.php";
            break;
        case "xoabl":
            if (isset($_GET['id_bl'])) {
                delete_bai_viet($_GET['id_bl']);
                $thongBao = "Xóa thành công";
            }
            $list_binh_luan = loadAll_binh_luan();
            include "../../views/nhanvien/binhluan/list.php";
            break;

            // Khuyến Mãi
        case "listkm":
            $listkm = loadAll_khuyen_mai();
            include "../../views/nhanvien/khuyenmai/list.php";
            break;
        case "addkm":
            if (isset($_POST['add']) && ($_POST['add'])) {
                $ma_KM = $_POST['ma_KM'];
                $phan_tram_km = $_POST['phan_tram_km'];
                $ngay_bat_dau = $_POST['ngay_bat_dau'];
                $ngay_ket_thuc = $_POST['ngay_ket_thuc'];
                $trang_thai = $_POST['trang_thai'];
                add_khuyen_mai($ma_KM, $phan_tram_km, $ngay_bat_dau, $ngay_ket_thuc, $trang_thai);
                $thongBao = "Thêm thành công";
            }
            $listkm = loadAll_khuyen_mai();
            include "../../views/nhanvien/khuyenmai/add.php";
            break;
        case "editkm":
            if (isset($_GET['id_KM'])) {
                $km = sua_khuyen_mai($_GET['id_KM']);
            }
            include "../../views/nhanvien/khuyenmai/edit.php";
            break;
        case "xoakm":
            if (isset($_GET['id_KM'])) {
                delete_khuyen_mai($_GET['id_KM']);
                $thongBao = "Xóa thành công";
            }
            $listkm = loadAll_khuyen_mai();
            include "../../views/nhanvien/khuyenmai/list.php";
            break;
        case "updatekm":
            if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
                $id_KM = $_POST['id_KM'];
                $ma_KM = $_POST['ma_KM'];
                $phan_tram_km = $_POST['phan_tram_km'];
                $ngay_bat_dau = $_POST['ngay_bat_dau'];
                $ngay_ket_thuc = $_POST['ngay_ket_thuc'];
                $trang_thai = $_POST['trang_thai'];
                update_khuyen_mai($id_KM, $ma_KM, $phan_tram_km, $ngay_bat_dau, $ngay_ket_thuc, $trang_thai);
                $thongBao = "Thêm thành công";
            }
            $listkm = loadAll_khuyen_mai();
            include "../../views/nhanvien/khuyenmai/list.php";
            break;
    }
}
include "../../views/nhanvien/footer.php";
