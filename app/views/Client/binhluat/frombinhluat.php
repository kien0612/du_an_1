<?php
session_start();

include "../../../models/pdo.php";
include "../../../models/binhluan.php";
$id_sp = $_REQUEST['id_sp'];
//$dsbl = loadAll_binh_lua($id_sp);4
$list_binh_lua = loadAll_binh_lua($id_binh_lua);
?>

    <div class="mb">
        <div class="box_title">Bình luận</div>
        <div class="box_content2 product_portfolio">
            <table>
                <?php
                foreach ($list_binh_lua as $bl) {
                    extract($bl);
                    echo '<tr><td>' . $noidung . '</td>';
                    echo '<td>' . $iduser . '</td>';
                    echo '<td>' . $ngaybinhluan . '</td></tr>';
                }
                ?>
            </table>
        </div>
        <div class="box_search">
            <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
                <input type="hidden" name="idpro" value="<?php echo $idpro ?>">
                <input type="text" id="" placeholder="Từ khóa tìm kiếm" name="noidung">
                <input type="submit" value="Gửi bình luận" name="guibinhluan">
            </form>
        </div>
        <?php
        // if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
        //     $noidung = $_POST['noidung'];
        //     $idpro = $_POST['idpro'];
        //     $iduser = $_SESSION['user']['id'];
        //     $ngaybinhluan = date('d/m/Y');
        //     insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
        //     header("location: " . $_SERVER['HTTP_REFERER']);
        // }
        ?>
    </div>
