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
include "../../views/Admin/header.php";
include "../../views/Admin/menu-left.php";
include "../../models/thongke.php";
include "../../models/bill.php";



if (isset($_GET['act']) && $_GET['act'] !== "") {
    $act = $_GET['act'];
    switch ($act) {
            // Tài Khoản
        case "listtk":

            $listk = loadAll_tai_khoan();
            include "../../views/Admin/taikhoan/list.php";
            break;
        case "addtk":
            if (isset($_POST['add'])) {
                $currentDateTime = new DateTime();
                $currentDateTimeString = $currentDateTime->format('Y-m-d H:i:s');
                $ten_tk = $_POST['ten_tk'];
                $nam_sinh = $_POST['nam_sinh'];
                $gioi_tinh = $_POST['gioi_tinh'];
                $sdt = $_POST['sdt'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $full_name = $_POST['full_name'];
                $dia_chi = $_POST['dia_chi'];
                $id_role = $_POST['id_role'];
                $ngay_tao = $currentDateTimeString;
                add_tai_khoan($ten_tk, $password,  $sdt,  $email, $full_name, $nam_sinh, $gioi_tinh, $dia_chi, $id_role, $ngay_tao);
                $thongBao = "Thêm thành công";
            }
            $listrole = loadall_role();
            $listk = loadAll_tai_khoan();
            include "../../views/Admin/taikhoan/add.php";
            break;
        case "suatk":
            if (isset($_GET['id_tk']) && ($_GET['id_tk'] > 0)) {
                $tk = sua_tai_khoan($_GET['id_tk']);
            }
            $listrole = loadall_role();
            $listk = loadAll_tai_khoan();
            include "../../views/Admin/taikhoan/edit.php";

            break;
        case "updatetk":
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id_tk = $_POST['id_tk'];
                $ten_tk = $_POST['ten_tk'];
                $nam_sinh = $_POST['nam_sinh'];
                $gioi_tinh = $_POST['gioi_tinh'];
                $sdt = $_POST['sdt'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $full_name = $_POST['full_name'];
                $dia_chi = $_POST['dia_chi'];
                $id_role = $_POST['id_role'];
                update_tai_khoan($id_tk,  $ten_tk, $password, $nam_sinh, $full_name, $gioi_tinh, $sdt, $email, $dia_chi, $id_role);
                $thongBao = "Thêm thành công";
            }
            $listk = loadAll_tai_khoan();
            include "../../views/Admin/taikhoan/list.php";
            break;
        case "xoatk":
            if (isset($_GET['id_tk'])) {
                delete_tai_khoan($_GET['id_tk']);
                $thongBao = "Xóa thành công";
            }
            $listk = loadAll_tai_khoan();
            include "../../views/Admin/taikhoan/list.php";
            break;
            //role
        case "listrole":
            $listrole = loadall_role();
            include "../../views/Admin/role/list.php";
            break;
        case "xoarole":
            if (isset($_GET['id_role'])) {
                delete_role($_GET['id_role']);
                $thongBao = "Xóa thành công";
            }
            $listrole = loadall_role();
            include "../../views/Admin/role/list.php";

            break;
        case "editrole":
            if (isset($_GET['id_role']) && ($_GET['id_role'] > 0)) {
                $role = sua_role($_GET['id_role']);
            }
            include "../../views/Admin/role/edit.php";
            break;
        case "addrole":
            if (isset($_POST['add']) && ($_POST['add'])) {
                $name_role = $_POST['name_role'];
                add_role($name_role);
            }
            include "../../views/Admin/role/add.php";
            break;
        case "suarole":
            if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
                $id_role = $_POST['id_role'];
                $name_role = $_POST['name_role'];
                update_role($id_role, $name_role);
                $thongBao = "Thêm thành công";
            }
            $listrole = loadall_role();
            include "../../views/Admin/role/list.php";
            break;




            // Đơn Hàng
        case "listdh":
            $list_admin_hd = list_hoadon();
            $listdmhd = list_dmhd_hd();
            include "../../views/Admin/hoadon/list.php";
            break;
        // case "history_don_hang":
        //     $list_history = loadAll_lich_su_dh();
        //     include "../../views/Admin/hoadon/history.php";
        //     break;
        case "xoadh":
            if (isset($_GET['id_hd'])) {
                delete_hoa_don($_GET['id_hd']);
                $thongBao = "Xóa thành công";
            }
            $list_admin_hd = list_hoadon();
            include "../../views/Admin/hoadon/list.php";
            break;
            case"suathhd":
                if (isset($_GET['id_hd']) && ($_GET['id_hd'] > 0)) {
                    $hoa_don = sua_hoa_don($_GET['id_hd']);
                   
                }
                $list_admin_hd = list_hoadon();
                $listdmhd=list_dmhd_hd();
                $list_hdct_view= list_hdct_view();
                include "../../views/Admin/hoadon/edit.php";

            break;
            case "update" : 
                if(isset($_POST['update'])){
                    $id_hd = $_POST['id_hd'];
                    $trangthai = $_POST['trangthai'];
                    update_thdh_hd($id_hd , $trangthai);
                }
                $list_admin_hd = list_hoadon();
                $listdmhd = list_dmhd_hd();
                include "../../views/Admin/hoadon/list.php";
            break;



            // Danh Mục
        case "listdm":
            $list_danhmuc = loadAll_danhmuc();
            include "../../views/Admin/danhmuc/list.php";
            break;
        case "adddm":

            if (isset($_POST['add'])) {
                $ten_dm = $_POST['ten_dm'];
                $ngay_update = $_POST['ngay_update'];
                insert_danh_muc($ten_dm, $ngay_update);
                $thongBao = "Thêm thành công";
            }
            include "../../views/Admin/danhmuc/add.php";
            break;
        case "editdm":
            if (isset($_GET['id_dm'])) {
                $danhmuc = loadOne_danhmuc($_GET['id_dm']);
            }
            include "../../views/Admin/danhmuc/edit.php";
            break;
        case "updatedm":
            if (isset($_POST['capnhap'])) {
                $id_dm = $_POST['id_dm'];
                $ten_dm = $_POST['ten_dm'];
                update_danhmuc($id_dm, $ten_dm);
                $thongBao = "Thêm thành công";
            }
            $list_danhmuc = loadAll_danhmuc();
            include "../../views/Admin/danhmuc/list.php";
            break;
        case "xoadm":
            if (isset($_GET['id_dm'])) {
                delete_danh_muc($_GET['id_dm']);
                $thongBao = "Xóa thành công";
            }
            $list_danhmuc = loadAll_danhmuc();
            include "../../views/Admin/danhmuc/list.php";
            break;

            // Sản Phẩm
        case "listsp":
            $listdm = loadAll_danh_muc();
            $listsp = loadAll_san_pham();
            $list_tt = loadAll_trang_thai();
            include "../../views/Admin/sanpham/list.php";
            break;
        case "addsp":
            if (isset($_POST['add']) && ($_POST['add'])) {
                $ten_sp = $_POST['ten_sp'];
                $gia_sp = $_POST['gia_sp'];
                $mo_ta_sp = $_POST['mo_ta_sp'];
                $anh_sp = $_FILES['anh_sp']['name'];
                $target_dir = "upload/sanpham/";
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
            $list_tt = loadAll_trang_thai();
            include "../../views/Admin/sanpham/add.php";
            break;
        case "editsp":
            if (isset($_GET['id_sp']) && ($_GET['id_sp'] > 0)) {
                $sp = sua_san_pham($_GET['id_sp']);
            }
            $listdm = loadAll_danh_muc();
            $list_tt = loadAll_trang_thai();
            include "../../views/Admin/sanpham/edit.php";
            break;
        case "suasp":
            if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
                $id_sp = $_POST['id_sp'];
                $ten_sp = $_POST['ten_sp'];
                $gia_sp = $_POST['gia_sp'];
                $mo_ta_sp = $_POST['mo_ta_sp'];
                $anh_sp = $_FILES['anh_sp']['name'];
                $target_dir = "upload/sanpham/";
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
            $list_tt = loadAll_trang_thai();
            include "../../views/Admin/sanpham/list.php";
            break;
        case "xoasp":
            if (isset($_GET['id_sp'])) {
                delete_san_pham($_GET['id_sp']);
                $thongBao = "Xóa thành công";
            }
            $listsp = loadAll_san_pham();
            include "../../views/Admin/sanpham/list.php";
            break;

            // Bài Viết
        case "listbv":
            $list_bai_viet = loadAll_bai_viet();
            include "../../views/Admin/baiviet/list.php";
            break;
        case "addbv":
            if (isset($_POST['add'])) {
                $currentDateTime = new DateTime();
                $currentDateTimeString = $currentDateTime->format('Y-m-d H:i:s');
                $avatar = $_FILES['avatar']['name'];
                $tieu_de = $_POST['tieuDe'];
                $mota = $_POST['moTa'];
                $ngay_dang = $currentDateTimeString;
                $target_dir = "upload/baiviet/";
                $target_file = $target_dir . basename($_FILES['avatar']['name']);
                move_uploaded_file($_FILES['avatar']['tmp_name'], $target_file);
                insert_bai_viet($avatar, $tieu_de, $mota, $ngay_dang);
                $thongBao = "Thêm thành công";
            }
            include "../../views/Admin/baiviet/add.php";
            break;
        case "editbv":
            if (isset($_GET['id_bai_viet'])) {
                $bai_viet = loadOne_bai_viet($_GET['id_bai_viet']);
            }
            include "../../views/Admin/baiviet/edit.php";
            break;
        case "updatebv":
            if (isset($_POST['update'])) {
                $edit_id = $_POST['edit_id'];
                $avatar = $_FILES['avatar']['name'];
                $tieu_de = $_POST['tieuDe'];
                $mota = $_POST['moTa'];
                $target_dir = "upload/baiviet/";
                $target_file = $target_dir . basename($_FILES['avatar']['name']);
                move_uploaded_file($_FILES['avatar']['tmp_name'], $target_file);
                update_bai_viet($edit_id, $avatar, $tieu_de, $mota);
                $thongBao = "Cập nhật thành công";
            }
            $list_bai_viet = loadAll_bai_viet();
            include "../../views/Admin/baiviet/list.php";
            break;
        case "xoabv":
            if (isset($_GET['id_bai_viet'])) {
                delete_bai_viet($_GET['id_bai_viet']);
                $thongBao = "Xóa thành công";
            }
            $list_bai_viet = loadAll_bai_viet();
            include "../../views/Admin/baiviet/list.php";
            break;
            // Bình Luận
        case "listbl":
            $list_binh_luan = loadAll_binh_luan();
            include "../../views/Admin/binhluan/list.php";
            break;
        case "xoabl":
            if (isset($_GET['id_bl'])) {
                delete_binh_luan($_GET['id_bl']);
                $thongBao = "Xóa thành công";
            }
            $list_binh_luan = loadAll_binh_luan();
            include "../../views/Admin/binhluan/list.php";
            break;

            // Khuyến Mãi
        case "listkm":
            $listkm = loadAll_khuyen_mai();
            include "../../views/Admin/khuyenmai/list.php";
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
            include "../../views/Admin/khuyenmai/add.php";
            break;
        case "editkm":
            if (isset($_GET['id_KM'])) {
                $km = sua_khuyen_mai($_GET['id_KM']);
            }
            include "../../views/Admin/khuyenmai/edit.php";
            break;
        case "xoakm":
            if (isset($_GET['id_KM'])) {
                delete_khuyen_mai($_GET['id_KM']);
                $thongBao = "Xóa thành công";
            }
            $listkm = loadAll_khuyen_mai();
            include "../../views/Admin/khuyenmai/list.php";
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
            include "../../views/Admin/khuyenmai/list.php";
            break;
        // case "thongke":

        //     include "../../views/Admin/bieudo/thongke.php";

        //     break;
    }
}else{
    include "../../views/Admin/bieudo/thongke.php";

}
include "../../views/Admin/footer.php";
