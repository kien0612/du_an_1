<?php
session_start();
if (!isset($_SESSION['cart']) || !is_array($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productId = $_POST['id'];

    if (!empty($_SESSION['cart'])) {
        // Kiểm tra sản phẩm đã có trong giỏ hàng chưa
        $index = array_search($productId, array_column($_SESSION['cart'], 'id'));

        if ($index !== false) {
            // Xóa sản phẩm khỏi giỏ hàng
            unset($_SESSION['cart'][$index]);
            $_SESSION['cart'] = array_values($_SESSION['cart']);
        } else {
            echo 'Sản phầm ko tồn tại trong giỏ hàng';
        }
    }

    // Trả về số lượng sản phẩm của giỏ hàng
    echo count($_SESSION['cart']);
} else {
    echo 'yêu cầu không hợp lệ';
}
