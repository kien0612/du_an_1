<?php
session_start();
ob_start();
include "../../models/pdo.php";
include "../../models/taikhoan.php";
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
                    if ($_SESSION['user']['id_role'] == 3) {
                        header('Location: ../admin/index.php');
                    } else if ($_SESSION['user']['id_role'] == 2) {
                        header('Location: ../nhanvien/index.php');
                    } else {
                        header('Location: index.php');
                    }
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
                $password = $_POST['password'];
                $ngay_tao = $currentDateTimeString;

                add_tk($ten_tk, $email, $password, $ngay_tao);
            }
            $listk = loadAll_tai_khoan();
            include "../../views/Client/taikhoan/dangky.php";
            break;
            case "dangxuat":
                dangxuat();
                include "../../controllers/client/index.php";
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
            include "../../views/Client/sanphamct.php";
            break;
        case "sanpham":
            include "../../views/Client/sanpham.php";
            break;
        case "tintuc":
            include "../../views/Client/tintuc.php";
            break;
        case "gioithieu":
            include "../../views/Client/gioithieu.php";
            break;
        case "lienhe":
            include "../../views/Client/lienhe.php";
            break;
    }
} else {
    include "../../views/Client/home.php";
}
include "../../views/Client/footer.php";
