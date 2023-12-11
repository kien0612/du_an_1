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
        <table border="1px" style="text-align: center;">
            <h3>Thông Tin Nguời Nhận</h3>
            <thead>
                <tr>
                <th>Tên Người Nhận</th>
                <th>Số điện thoại</th>
                <th>Email</th>
                <th>Địa chỉ</th>
                <th>Ngày đặt hàng</th>
                <th>Mô tả</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td><?php echo $hoten ?></td>
                <td><?php echo $sdt ?></td>
                <td><?php echo $email ?></td>
                <td><?php echo $diachi ?></td>
                <td><?php echo $ngaydathang ?></td>
                <td><?php echo $mota ?></td>
                </tr>
            </tbody>
        </table>
        
        <table border="1px" style="text-align: center;">
            <h3>Thông Tin Đơn Hàng</h3>
            <thead>
                <tr>
                <th>Tên sản phẩm</th>
                <th>Số lượng</th>
                <th>Giá mua</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($list_hdct_view as $hdct) {
                extract($hdct)    ?>
                <tr>
                    <td><?php echo $ten_sp; ?></td>
                    <td><?php echo $soluong; ?></td>
                    <td><?php echo number_format($giamua, 0, ",", "."); ?> VND</td>
                </tr>
                <?php  } ?>
            </tbody>
            <tfoot style="color: red;">
                <th>Tổng tiền</th>
                <td colspan="2"><?php echo number_format($tongtien, 0, ",", "."); ?></td>
            </tfoot>
        </table>
        <h3>Trạng Thái Đơn Hàng</h3>
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