<?php
if (is_array($tk)) {
    extract($tk);
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
    <form action="" method="post">

        <select name="" id="">
            <?php foreach ($tk as $value) {
                extract($value)
            ?>
                <option value="<?= $value[]?>"></option>

            <?php  } ?>
        </select>
    </form>

</body>

</html>