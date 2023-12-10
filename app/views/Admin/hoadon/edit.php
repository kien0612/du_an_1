<?php
if (is_array($hoa_don)) {
    extract($hoa_don);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<center>

    <body>
        <h1>Thông Tin Nguời Nhận</h1>



        Tên Người Nhận: <label for=""><?php echo $hoten ?></label> <br>
        SỐ Điện Thoại:<label for=""><?php echo $sdt ?></label><br>
        Email: <label for=""><?php echo $email ?></label> <br>
        Địa Chỉ: <label for=""><?php echo $diachi ?></label> <br>
        Ngày Đạt Hàng: <label for=""><?php echo $ngaydathang ?></label> <br>
        Mô Tả: <label for=""><?php echo $mota ?></label> <br>
      


        <h1>thông tin đơn hàng</h1>

        <tbody style="text-align: center;">
            <?php foreach ($list_hdct_view as $hdct) {
                extract($hdct)    ?>
                <tr>
                    <label for="">tên sản phẩn</label> ::<?php echo $ten_sp; ?><br>
                    <label for="">Số Lượng</label> ::<?php echo $soluong; ?><br>
                    <label for="">Giá Mua</label> ::<?php echo number_format($giamua, 0, ",", "."); ?> đ <br>

                </tr>
            <?php  } ?>
        </tbody>
        </table>
        <div>
            <h4 class="panel-title" style="color: red;">
                Tổng Tiền :
                <?php echo number_format($tongtien, 0, ",", "."); ?>
            </h4>
        </div>
        <form action="?act=update" method="post">
            <input type="hidden" name="id_hd" id="" value="<?= $id_hd ?>">
            <select name="trangthai">
                <?php foreach ($listdmhd as $value) {
                    extract($value)
                ?>
                    <option value="<?= $value['id_thdh'] ?>" <?= $value['id_thdh'] == $hoa_don['trangthai'] ? 'selected' : "" ?>>
                        <?= $value['ten_dh'] ?>
                    </option>
                <?php } ?>
            </select>
            <input type="submit" name="update" id="" value="Cập Nhật">
        </form>
</center>
</body>

</html>