<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan3b</title>
    <style>
        .tulisan{
            font-size : 28px;
            font-family : arial;
            font-style : italic;
            color : #8c782d;
            font-weight : bolder;
            padding-left : 20px;
        }
        .bungkus{
            border : 1px solid black;
            box-shadow : 2px 2px 5px 5px;
            border-radius : 5px;
        }
    </style>
</head>
<body>

<?php 

function gantiStyle($tulisan, $style1, $style2) {
    echo "<div class = '$style1'> 
            <p class = '$style2'> $tulisan </p>
        </div>";
    }
?>

<?php 
        echo gantiStyle("Selamat datang di praktikum pw 2020", "bungkus" , "tulisan");
    ?>
</body>
</html>