<?php
    $pemain = ["Cristiano Ronaldo" => "Juventus", 
                "Lionel Messi" => "Barcelona",
                "Luca Modric" => "Real Madrid",
                "Mohammad Salah" => "Liverpool",
                "Neymar Jr" => "Paris Saint Germain",
                "Sadio Mane" => "Liverpool",
                "Zlatan Ibrahimovic" => "Ac Milan"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan4c</title>
</head>
<body>
<table>
    <p><b>Daftar pemain bola terkenal dan clubnya</b></p>
        
        <?php
            foreach($pemain as $nama => $club) :?>
            <tr><?php echo "<td><b>$nama</b></td> <td> :</td><td> $club</td>" ?></tr>
            <?php endforeach ?>
        </tr>
</table>
</body>
</html>