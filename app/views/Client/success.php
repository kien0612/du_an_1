<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div class="formgiohang">
<table border="1px" style="width: 95%; margin: 0 auto; text-align: center;">
        <thead>
            <tr>
                <!-- <th style="width: 5%;">Check</th> -->
               
                <th>Tên Sản Phẩn</th>
                <th>Số Lượng</th>
                <th>Tổng Tiền</th></th>
                <th>Trang Thái</th>
            </tr>
        </thead>
        <?php
            foreach ($listbill as $binh_luan) {
                extract($binh_luan);
               
            ?>
        <tr>
        <td><?= $ten_sp ?></td>
        </tr>

        <tbody>
        <?php
            }
            ?>
                
           
        </tbody>
    </table>
</div>
</body>
</html>