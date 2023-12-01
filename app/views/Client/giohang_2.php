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
    if (empty($dataDb)) {
        echo ("không có sản phẩm nào ");
    } else {
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
                    <!-- <?= $quantityInCart ?> -->
                    <div class="cart-plus-minus">
                        <input class="cart-plus-minus-box" value="<?= $quantityInCart ?>" type="number" min="1" id="quantity_<?= $product['id_sp'] ?>" oninput="updateQuantity()">
                        <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                        <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
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
    }
    ?>

    </div>
    <div class="row">
        <div class="col-12">
            <div class="coupon-all">
                <div class="coupon">
                    <h4>Tổng tiền : <span style="color: red;"><?= number_format((int)$sum_total, 0, ",", ".")  ?> <u>VND</u></span> </h4>
                </div>
                <div class="coupon2">
                    <form action="index.php?act=order" method="post">
                        <input class="button" name="order" value="Đặt Hàng" type="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- kết thúc của sản phẩm trong giỏ hàng  -->
<?php } ?>