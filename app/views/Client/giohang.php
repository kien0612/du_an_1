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
 <!-- phần cuối banner giỏ hàng -->

 <!-- Bắt dầu của sản phẩm trong giỏ hàng -->
 <div class="hiraola-cart-area">
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <form action="javascript:void(0)">
                     <div class="table-content table-responsive">
                         <!-- <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="hiraola-product-remove">remove</th>
                                            <th class="hiraola-product-thumbnail">images</th>
                                            <th class="cart-product-name">Product</th>
                                            <th class="hiraola-product-price">Unit Price</th>
                                            <th class="hiraola-product-quantity">Quantity</th>
                                            <th class="hiraola-product-subtotal">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="hiraola-product-remove"><a href="javascript:void(0)"><i class="fa fa-trash"
                                                title="Remove"></i></a></td>
                                            <td class="hiraola-product-thumbnail"><a href="javascript:void(0)"><img src="assets/images/product/small-size/2-1.jpg" alt="Hiraola's Cart Thumbnail"></a></td>
                                            <td class="hiraola-product-name"><a href="javascript:void(0)">Juma rema pola</a></td>
                                            <td class="hiraola-product-price"><span class="amount">$46.80</span></td>
                                            <td class="quantity">
                                                <label>Quantity</label>
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" value="1" type="text">
                                                    <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                    <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                </div>
                                            </td>
                                            <td class="product-subtotal"><span class="amount">$46.80</span></td>
                                        </tr>
                                        
                                    </tbody>
                                </table> -->
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
                                             <?= $quantityInCart ?>
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

                             </tbody>
                         </table>
                     </div>
                     <div class="row">
                         <div class="col-12">
                             <div class="coupon-all">
                                 <div class="coupon">
                                     <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">
                                     <input class="button" name="apply_coupon" value="Apply coupon" type="submit">
                                 </div>
                                 <div class="coupon2">
                                     <input class="button" name="update_cart" value="Update cart" type="submit">
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-md-5 ml-auto">
                             <div class="cart-page-total">
                                 <h2>Tổng tiền : <span style="color: red;"><?= number_format((int)$sum_total, 0, ",", ".")  ?> <u>VND</u></span> </h2>
                                 <ul>

                                 </ul>
                                 <a href="javascript:void(0)">Đặt hàng</a>
                             </div>
                         </div>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>
 <!-- kết thúc của sản phẩm trong giỏ hàng  -->
 <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
 <script>
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