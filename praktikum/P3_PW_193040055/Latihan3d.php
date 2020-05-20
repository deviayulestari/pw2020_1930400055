<?php
    function hitungDeterminan($a, $b, $c, $d){

    
    //baris code perhitung detertiminan

    //menampilkan matriks
    echo "<table style = 'border-left: 2px solid black; border-right: 2px solid black;' cellspacing= '5' cellpadding='5'>
        <tr>
            <td> $a </td>
            <td> $b </td>
        </tr>
        <tr>
            <td> $c </td>
            <td> $d </td>
        </tr>
        </table>";
        $determinan = (($a * $d) - ($b * $c));
    echo "<p style = padding-top: 3px;><b> Determinan dari matriks tersebut adalah $determinan </b></p>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3d</title>
    <style>
    .container{
        border : 1px solid black;
        padding : 15px;
        width : 320px;
    }
    </style>
</head>
<body>
    <div class="container">
    <?php 
        hitungDeterminan(1,2,3,4)
    ?>
    </div>
</body>
</html>