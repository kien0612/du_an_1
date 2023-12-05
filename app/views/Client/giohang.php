 <!-- Bắt đầu phần banner giỏ hàng -->
 <div class="breadcrumb-area">
     <div class="container">
         <div class="breadcrumb-content">
             <h2>Other</h2>
             <ul>
                 <li><a href="index.php">Home</a></li>
                 <li class="active">Cart</li>
             </ul>
         </div>
     </div>
 </div>
 <div class="hiraola-cart-area">
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <div class="table-content table-responsive">
                     <table class="table">
                         <thead>
                             <tr>
                                 <th>STT</th>
                                 <th class="hiraola-product-thumbnail">Ảnh </th>
                                 <th class="cart-product-name">Tên sản phẩm</th>
                                 <th class="hiraola-product-price">Giá tiền</th>
                                 <th class="hiraola-product-quantity">Số lượng</th>
                                 <th class="hiraola-product-subtotal">Tổng tiền</th>
                                 <th class="hiraola-product-remove">Active</th>
                             </tr>
                         </thead>
                         <tbody id="order">
                             <?php
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
                                             <div class="cart-plus-minus">
                                                 <input class="cart-plus-minus-box" value="<?= $quantityInCart ?>" type="number" min="1" id="quantity_<?= $product['id_sp'] ?>" oninput="updateQuantity(<?= $product['id_sp'] ?>, <?= $key ?>)">
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
                             <tr>
                                 <td colspan="5" align="center">
                                     <h5>Tổng tiền hàng:</h5>
                                 </td>
                                 <td colspan="2" align="center">
                                     <h5>
                                         <span style="color: red;" >
                                             <?= number_format((int)$sum_total, 0, ",", ".")  ?> <u>đ</u>
                                         </span>
                                     </h5>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                 </div>
                 <div class="row">
                     <div class="col-12">
                         <div class="coupon-all">
                             <!-- <div class="coupon">
                                 <h4>Tổng tiền : <span style="color: red;"><?= number_format((int)$sum_total, 0, ",", ".")  ?> <u>VND</u></span> </h4>
                             </div> -->
                             <div class="coupon2">
                                 <form action="index.php?act=order" method="post">
                                    <input class="button" name="order" value="Đặt Hàng" type="submit">
                                 </form>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- kết thúc của sản phẩm trong giỏ hàng  -->
 <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
 <script>
     function updateQuantity(id, index) {
         // lấy giá trị của ô input
         let newQuantity = $('#quantity_' + id).val();
         if (newQuantity <= 0) {
             newQuantity = 1
         }

         // Gửi yêu cầu bằng ajax để cập nhật giỏ hàng
         $.ajax({
             type: 'POST',
             url: '../../views/Client/updateQuantity.php',
             data: {
                 id: id,
                 quantity: newQuantity
             },
             success: function(response) {
                 // Sau khi cập nhật thành công
                 $.post('../../views/Client/giohang_2.php', function(data) {
                     $('#order').html(data);
                 })
             },
             error: function(error) {
                 console.log(error);
             },
         })
     }

     function removeFormCart(id) {
         if (confirm("Bạn có đồng ý xóa sản phẩm hay không?")) {
             // Gửi yêu cầu bằng ajax để cập nhật giỏ hàng
             $.ajax({
                 type: 'POST',
                 url: '../../views/Client/removeFormCart.php',
                 data: {
                     id: id
                 },
                 success: function(response) {
                     // Sau khi cập nhật thành công
                     $.post('../../views/Client/giohang_2.php', function(data) {
                         $('#order').html(data);
                     })
                 },
                 error: function(error) {
                     console.log(error);
                 },
             })
         }
     }
 </script>