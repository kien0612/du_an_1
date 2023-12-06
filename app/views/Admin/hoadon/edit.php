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
 
  
              
                Tên Người Nhận: <label for=""><?php echo $hoten?></label> <br>
                SỐ Điện Thoại:<label for=""><?php echo $sdt?></label><br>
                Email: <label for=""><?php echo $email?></label> <br>
                Địa Chỉ: <label for=""><?php echo $diachi?></label> <br>
                Ngày Đạt Hàng:  <label for=""><?php echo $ngaydathang?></label> <br>
                Mô Tả: <label for=""><?php echo $mota?></label> <br>
                Tổng Tiền: <label for=""><?php echo $id_tk?></label> <br>

               <h2>Thông Tin Đơn Hàng</h2>
               Tên sản phẩn: <label for=""><?php echo $ten_sp?></label> <br>
               Tên Người Nhận: <label for=""><?php echo $hoten?></label> <br>
               Tên Người Nhận: <label for=""><?php echo $hoten?></label> <br>
               Tên Người Nhận: <label for=""><?php echo $hoten?></label> <br>
               Tên Người Nhận: <label for=""><?php echo $hoten?></label> <br>
               Tên Người Nhận: <label for=""><?php echo $hoten?></label> <br>

        
       

   
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