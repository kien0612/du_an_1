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

<body>
    <center>
        <form action="?act=suathhd" method="post">
            <input type="hidden" name="edit_id" id="" value="<?= $id_hd ?>">
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