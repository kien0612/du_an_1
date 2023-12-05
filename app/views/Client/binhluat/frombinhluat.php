<?php 
session_start();
include "../../../models/pdo.php";
include "../../../models/binhluan.php";
$id_sp = $_REQUEST['id_sp'];
$list_binh_lua = loadAll_binh_lua($id_sp,0);  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/css.css">
</head>
<style>
</style>
<body>
<div class="mb">
    <!-- list bl -->
    <div class="box_content2 product_portfolio">
        <table style="width: 100%;margin-bottom: 10px;" >
            <?php foreach($list_binh_lua as $bl) { ?>
                <tr>
                    <th>Khách hàng : <?= $bl['ten_tk']?></th>
                </tr>
                <tr style="border-bottom: 1px solid #595959;">
                    <td><?= $bl['noi_dung_bl'] ?></td>
                    <td><?= $bl['ngay_bl'] ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>

    <div class="box_search">
        <?php if(isset($_SESSION['user'])) { ?>
            <!-- Hiển thị form bình luận khi đã đăng nhập -->
            <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
                <input type="hidden" name="id_sp" value="<?php echo $id_sp?>">
<<<<<<< HEAD
                <input type="text"   class="btn btn-success" width="300px" height="200px" name="noi_dung_bl" id="noi_dung_bl" placeholder="bình luận" name="noidung">
                <input type="submit"class="btn btn-success" value="Gửi bình luận" name="guibinhluan">
=======
                <input type="text" style="width: 85%;" name="noi_dung_bl" id="noi_dung_bl" placeholder="Từ khóa tìm kiếm" name="noidung">
                <input type="submit" value="Gửi bình luận" name="guibinhluan">
>>>>>>> 71d46b5cdf57cf662abb9469509e038abc4470e9
            </form>
        <?php } ?>
    </div>

    <?php
    if (isset($_POST['guibinhluan']) && isset($_SESSION['user'])) {
        $id_sp = $_POST['id_sp'];
        $noi_dung_bl = $_POST['noi_dung_bl'];
        $id_tk = $_SESSION['user']['id_tk'];
        $currentDateTime = new DateTime();
        $currentDateTimeString = $currentDateTime->format('Y-m-d H:i:s');
        $ngay_bl = $currentDateTimeString;
        insert_binhluan($noi_dung_bl, $id_tk, $id_sp, $ngay_bl);
        header("location: ".$_SERVER['HTTP_REFERER']);
    }
    ?>
</div>
</body>
</html>
