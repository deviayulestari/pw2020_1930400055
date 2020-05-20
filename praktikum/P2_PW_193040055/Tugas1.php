<!DOCTYPE html>
<html lang = "en">
<head>
    <title>Tugas1</title>
    <style>
        table{
            padding : 7px;
            border : 2px solid black;
        }
        td{
            height : 30px;
            width : 30px;   
            border : 1px solid black;
        }
        
    
    </style>
</head>
<body>
        <table cellspacing = 3px>
        <?php for ($a = 1; $a <= 6; $a++) 
        {
            echo "<tr>";
            for ($b = 1; $b <= 6; $b++)
            {
                if(($a % 2 == 0 && $b % 2 == 0)||($a % 2 == 1 && $b % 2 == 1))
                {
                    echo '<td bgcolor=lightblue>  </td>';
                }else{
                    echo '<td bgcolor=salmon>  </td>';
                }
            }
            echo "</tr>";
        }
        ?>

        </table>

</body>
</html>