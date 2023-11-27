<?php
session_start();
ob_start();


include "../../models/pdo.php";
include "../../models/baiviet.php";
include "../../models/binhluan.php";
include "../../models/hoadon.php";
include "../../models/taikhoan.php";
include "../../models/danhmuc.php";
include "../../models/sanpham.php";
include "../../models/khuyenmai.php";
include "../../models/role.php";
include "../../models/thongke.php";


include "../../views/Client/header_home.php";


if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case "log_up":
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'] != "")) {
                $ten_tk = $_POST['ten_tk'];
                $password = $_POST['password'];
                $checkuser = checkuser($ten_tk, $password);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    // if ($_SESSION['user']['id_role'] == 3) {
                    //     // header('Location: ../admin/index.php');
                    // } else if ($_SESSION['user']['id_role'] == 2) {
                    //     header('Location: ../nhanvien/index.php');
                    // } else {
                    header('Location: index.php');
                } else {
                    $thongbao1 = "tài khoản không tồn tại vui lòng kiểm tra hoặc đăng ký!";
                }
            }
            include "../../views/Client/taikhoan/dangnhap.php";
            break;
        case "log_in":
            if (isset($_POST['add'])) {
                $currentDateTime = new DateTime();
                $currentDateTimeString = $currentDateTime->format('Y-m-d H:i:s');
                $ten_tk = $_POST['ten_tk'];
                $email = $_POST['email'];
                $full_name = $_POST['full_name'];
                $password = $_POST['password'];
                $ngay_tao = $currentDateTimeString;
                add_tk($ten_tk, $full_name,  $email, $password, $ngay_tao);
            }
            $listk = loadAll_tai_khoan();
            include "../../views/Client/taikhoan/dangky.php";
            break;
        case "dangxuat":
            session_destroy();
            header('location: index.php');
            break;
        case "quenmk":
            if (isset($_POST['guiemail'])) {
                $email = $_POST['email'];
                $sendMailMess = sendMail($email);
            }
            include "../../views/Client/taikhoan/quenmk.php";
            break;

        case "trangchu":
            include "../../views/Client/main.php";
            break;
        case "sanphamct":
            // if(isset($_GET['id_sp'])&&($_GET['id_sp']>0)){
            //     $id=$_GET['id_sp'];
            //     $onesp=loadone_sanpham($id_sp);
            //     extract($onesp);

            //     include "../../views/Client/sanphamct.php";
            // }else{
            //     include "../../views/Client/home.php";
            // }   
            include "../../views/Client/sanphamct.php";
            break;
        case "sanpham":
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $id_dm = $_GET['iddm'];
            } else {
                $id_dm = 0;
            }
            $list_danhmuc = loadAll_danhmuc();
            $tendm = load_ten_dm($id_dm);
            $listsp = loadll_san_pham("$kyw", $id_dm);
            include "../../views/Client/sanpham.php";
            break;
        case "tintuc":
            $list_bai_viet = loadAll_bai_viet();
            include "../../views/Client/tintuc.php";
            break;
        case "taikhoan":
            include "../../views/Client/taikhoan.php";
            break;
        case "gioithieu":
            include "../../views/Client/gioithieu.php";
            break;
        case "lienhe":
            include "../../views/Client/lienhe.php";
            break;
        case "thongke":
           
            include "../../views/Client/taikhoan/thongke.php";

            break;
    }
} else {
    $listsp = loadAll_san_pham();
    include "../../views/Client/home.php";
}
include "../../views/Client/footer.php";
