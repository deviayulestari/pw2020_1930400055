<html>
<head>
    <title>Latihan 1 c </title>
    <style type ="text/css">
        .kotak {
            height : 50;
            width: 50;
            border-radius : 50%;
            background-color: salmon;
            text-align : center;
            margin : 5px;
            padding : 5px;
            border : 3px solid black;
            line-height : 50px;
            font-size : 25px;
        }

    </style>
    
</head>
<body>
    <?php 
        $a = "A";
        $b = "B";
        $c = "C";
    ?>
    <div class="container">
        <table>
            <tr>
                <td>
                    <div class="kotak">
                        <?php echo $a?>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="kotak">
                         <?php echo $b?> 
                     </div>
                </td>
                <td>
                    <div class="kotak">
                        <?php echo $b?> 
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="kotak">
                        <?php echo $c?>
                    </div>
                </td>
                <td>
                    <div class="kotak">
                        <?php echo $c?>
                    </div>
                </td>
                <td>
                    <div class="kotak">
                        <?php echo $c?>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>