<?php
    $pemain = ["Mohammad salah",
                "Critiano Ronaldo",
                "Lionel Messi",
                "Zlatan Ibrahimovic",
                "Neymar Jr"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan4b</title>
</head>
<body>
    <p><b>Daftar pemain bola terkenal</b></p>
    <ol>
        <?php
            foreach($pemain as $p){
                echo "<li>$p</li>";
            }
        ?>
    </ol>

        <?php 
            $pemain[] = "Luca Modric";
            $pemain[] = "Sadio Mane";
            sort($pemain);
        ?>
    <p><b>Daftar pemain bola terkenal baru</b></p>
    <ol>
        <?php
            foreach($pemain as $p){
                echo "<li>$p</li>";
            }
        ?>
    </ol>
</body>
</html>