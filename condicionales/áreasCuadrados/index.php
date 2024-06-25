<?php
include('libreria/areaCuadrado.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Áreas de tres cuadrados</title>

</head>
<body>
    <?php
        $cuad1 = areaCuadrado(6);
        $cuad2 = areaCuadrado(8);
        $cuad3 = areaCuadrado(10);

        if($cuad1 == $cuad2 && $cuad1 == $cuad3){
            var_dump("son iguales");
        }
        else{
            if($cuad1 > $cuad2 && $cuad1 > $cuad3){
                var_dump($cuad1." es el mayor");
            }
            else{
                if($cuad2 > $cuad1 && $cuad2 > $cuad3){
                    var_dump($cuad2." es el mayor");
                }
                else{
                    var_dump($cuad3." es el mayor");
                }
            }
        }
    ?>
</body>
</html>