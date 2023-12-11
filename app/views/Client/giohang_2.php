<?php
session_start();
include "../../models/pdo.php";
include "../../models/sanpham.php";
include "../../models/taikhoan.php";
include "../../models/danhmuc.php";
if (!empty($_SESSION['cart'])) {
    //echo (1);

    $cart = $_SESSION['cart'];

    // Tạo mảng chứa ID các sản phẩm trong giỏ hàng
    $productId = array_column($cart, 'id');

    $idList = implode(',', $productId);

    // Lấy sản phẩm trong bảng sản phẩm theo id
    $dataDb = loadone_sanphamCart($idList);
    //var_dump($dataDb);

    $sum_total = 0;
    //var_dump($dataDb);
    foreach ($dataDb as $key => $product) {
        $url = "../../controllers/admin/upload/sanpham/";
        $quantityInCart = 0;
        foreach ($_SESSION['cart'] as $sp) {
            if ($sp['id'] == $product['id_sp']) {
                $quantityInCart = $sp['quantity'];
                break;
            }
        }
?>
        <tr>
            <td><?= $key + 1 ?></td>
            <td class="hiraola-product-thumbnail"><img src="<?= $url, $product['anh_sp'] ?>" width="120px" alt="Hiraola's Cart Thumbnail"></td>
            <td class="hiraola-product-name"><?= $product['ten_sp'] ?></a></td>
            <td class="hiraola-product-price"><span class="amount"><?= number_format((int)$product['gia_sp'], 0, ',', '.') ?> VND</span></td>
            <td class="quantity">
                <div>
                    <?= (int)$quantityInCart ?>
                </div>
            </td>
            <td class="product-subtotal"><span class="amount"><?= number_format((int)$product['gia_sp'] * (int)$quantityInCart, 0, ",", ".") ?> VND</span></td>
            <td class="hiraola-product-remove"><i onclick="removeFormCart(<?= $product['id_sp'] ?>)" class="fa fa-trash" title="Remove"></i></td>
        </tr>
    <?php
        $sum_total += ((int)$product['gia_sp'] * (int)$quantityInCart);

        // Lưu tổng giá trị vào sesion
        $_SESSION['resultTotal'] = $sum_total;
    }
    ?>
    <tr>
        <td colspan="5" align="center">
            <h5>Tổng tiền hàng:</h5>
        </td>
        <td colspan="2" align="center">
            <h5>
                <span style="color: red;">
                    <?= number_format((int)$sum_total, 0, ",", ".")  ?> <u>đ</u>
                </span>
            </h5>
        </td>
    </tr>
    <!-- kết thúc của sản phẩm trong giỏ hàng  -->
<?php } ?>