<?php
include "../../models/pdo.php";
include "../../models/sanpham.php";
include "../../views/Client/header_home.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case "log_up":
            include "../../views/Client/taikhoan/dangnhap.php";
            break;
        case "log_in":
            include "../../views/Client/taikhoan/dangky.php";
            break;
        case "trangchu":
            include "../../views/Client/main.php";
            break;
        case "sanphamct":
            include "../../views/Client/sanphamct.php";
            break;
        case "sanpham":
            $listsp = loadAll_san_pham();
            include "../../views/Client/sanpham.php";
            break;
    }
} else {
    include "../../views/Client/home.php";
}
include "../../views/Client/footer.php";
