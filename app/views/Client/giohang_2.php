<?php
session_start();
include "../../models/pdo.php";
include "../../model/sanpham.php";
include "../../model/taikhoan.php";
include "../../model/danhmuc.php";



if (!empty($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];

    // Tạo mảng chứa ID các sản phẩm trong giỏ hàng
    $productId = array_column($cart, 'id');

    $idList = implode(',', $productId);

    // Lấy sản phẩm trong bảng sản phẩm theo id
    $dataDb = loadone_sanphamCart($idList);
    //var_dump($dataDb);
    $sum_total = 0;
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
            <td class="hiraola-product-name"><a href="javascript:void(0)"><?= $product['ten_sp'] ?></a></td>
            <td class="hiraola-product-price"><span class="amount"><?= number_format((int)$product['gia_sp'], 0, ',', '.') ?> VND</span></td>
            <td class="quantity">
                <div class="cart-plus-minus">
                    <input class="cart-plus-minus-box" value="<?= $quantityInCart ?>" type="number" id="quantity_<?= $product['id_sp'] ?>" oninput="updateQuantity(<?= $product['id_sp'] ?>, <?= $key ?>)">
                    <!-- <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                    <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div> -->
                </div>
            </td>
            <td class="product-subtotal"><span class="amount"><?= number_format((int)$product['gia_sp'] * (int)$quantityInCart, 0, ",", ".") ?> VND</span></td>
            <td class="hiraola-product-remove"><a href="javascript:void(0)"><i class="fa fa-trash" title="Remove"></i></a></td>
        </tr>
    <?php
        $sum_total += ((int)$product['gia_sp'] * (int)$quantityInCart);

        // Lưu tổng giá trị vào sesion
        $_SESSION['resultTotal'] = $sum_total;
    }
    ?>

    <div class="row">
        <div class="col-12">
            <div class="coupon-all">
                <div class="coupon">
                    <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">
                    <input class="button" name="apply_coupon" value="Apply coupon" type="submit">
                </div>
                <div class="coupon2">
                    <form action="index.php?act=order" method="post">
                        <input type="submit" style="padding:10px;" name="order" value="Đặt Hàng">
                    </form>
                    <a href="index.php?act=order">Đặt hàng</a>
                </div>>
            </div>
        </div>
    </div>

<?php
}
?>