<?php
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
    }
} else {
    include "../../views/Client/home.php";
}
include "../../views/Client/footer.php";
<h1>khingg</h1>
