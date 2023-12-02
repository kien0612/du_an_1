<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
`````````````````````````````````
<body>

    <div class="formgiohang">
        <table border="1px" style="width: 95%; margin: 0 auto; text-align: center;">
            <thead>
                <tr>
                    <!-- <th style="width: 5%;">Check</th> -->

                    <th>Tên Sản Phẩn</th>
                    <th>Người Nhận</th>
                    <th>Tổng Tiền</th>
                    <th>Mô Tả</th>
                    <th>Địa Chỉ</th>
                    <th>SĐT</th>
                    <th>Trang Thái</th>
                </tr>
            </thead>
            <?php
            foreach ($listbill as $binh_luan) {
                extract($binh_luan);

            ?>
                <tr>
                    <td><?= $ten_sp ?></td>
                    <td><?= $hoten ?></td>
                    <td><?= $thanhtien ?></td>
                    <td><?= $mota?></td>
                    <td><?= $diachi?></td>
                    <td><?= $sdt?></td>
                    <td><a href="">huy</a></td>
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