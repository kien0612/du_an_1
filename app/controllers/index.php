<?php   
include "../views/Admin/header.php";
include "../views/Admin/menu-left.php";
if(isset($_GET['act']) && $_GET['act'] !== ""){
    $act = $_GET['act'];
    switch($act){
        case "listtk":
            include "../views/Admin/taikhoan/list.php";
            break;
            case "addtk":
                include "../views/Admin/taikhoan/add.php";
                break;
    
    }
}
include "../views/Admin/footer.php";