<?php 
    $jawabanIsset = "Isset adalah = salah satu perintah php yang berfungsi untuk memeriksa sebuah objek dari form, apakah ada atau tidak nilai yang di lempar dari suatu form. <br> <br>";
    $jawabanEmpty = "Empty adalah = fungsi yang digunakan untuk untuk mengecek data atau variabel yang kosong. ";

    $GLOBALS['isset'] = $jawabanIsset;
    $GLOBALS['empty'] = $jawabanEmpty;


    function soal($style){
        echo "<div class = $style> 
        <p>" .$GLOBALS['isset'] . "</p>
        <p>" .$GLOBALS['empty'] . "</p>
        </div>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan3a</title>
    <style>
    .container{
        border : 1px solid black;
        padding-left : 15px;
    }
    </style>
</head>
<body>
<?php
     echo soal('container');
?>
</body>
</html>