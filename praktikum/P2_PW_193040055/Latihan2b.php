<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <title>Document</title>
</head>
<body>
    <table border = "1" cellspacing = "0" cellpadding = "10">
    <?php for ($a = 1; $a <= 5; $a++) :?>
        <tr>
            <th></th>
            <?php for ($a = 1; $a <= 5; $a++) : ?>
                <th>Kolom <?= $a; ?></th>
            <?php endfor; ?>
        </tr>

        <?php for ($b = 1; $b <= 5; $b++) : ?>
            <tr>
                <th>
                    Baris <?=$b; ?>
                </th>
                <?php for ($c = 1; $c <= 5; $c++) : ?>
                    <td>
                        Baris <?= $b; ?>, Kolom <?= $c; ?>
                    </td>
                <?php endfor; ?>
        <?php endfor; ?>
            </tr>
        <?php endfor; ?>

</body>
</html>