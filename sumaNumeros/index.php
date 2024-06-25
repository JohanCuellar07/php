<?php
include('libreria/sumaNumeros.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma de números</title>
</head>
<body>
    <?php
    $numUno = 365;
    $numDos = 724;
    
    var_dump(suma($numUno, $numDos));
    ?>
</body>
</html>