<?php
include('libreria/operaciones.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones</title>
</head>
<body>
    <?php
        $numUno = 18;
        $numDos = 6;
        var_dump(resta($numUno, $numDos));
        var_dump(multiplicacion($numUno, $numDos));
        var_dump(division($numUno, $numDos));
    ?>
</body>
</html>