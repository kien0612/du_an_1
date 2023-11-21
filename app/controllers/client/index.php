<?php
include "../../views/Client/header.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case "dangnhap":
            include "../../views/Client/taikhoan/dangnhap.php";
            break;
        case "dangky":
            include "../../views/Client/taikhoan/dangky.php";
            break;
        case "trangchu":
            include "../../views/Client/main.php";
            break;
    }
} else {
    include "../../views/Client/main.php";
}
include "../../views/Client/footer.php";
