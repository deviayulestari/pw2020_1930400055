<?php 
    function tumpukanBola($tumpukan){
        for ($i = 1; $i <= $tumpukan; $i++){ 
            for ($j = 1; $j <= $i; $j++) {
               echo "<div class = 'bola'>". $i ."</div>";
        }
        echo "<br>";
    } 
}           
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan3c</title>
    <style>
        .bola{
            border-radius : 50%;
            background-color : salmon;
            height :50px;
            width : 50px;
            text-align : center;
            line-height : 50px;
            border : 1px solid black;
            display : inline-block;
            margin : 2px;
        }
        .container{
        border : 1px solid black;
        padding : 15px;
        width : 300px;
        }
    </style>
</head>
    
<body>
    <div class="container">
        <?php echo tumpukanBola(5); ?>
    </div>
</body>
</html>