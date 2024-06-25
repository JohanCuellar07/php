<?php
include('libreria/calcularEdad.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular la edad</title>
</head>
<body>
    <?php
        $anioNac = 2018;
        $anioAct = 2024;

        var_dump(calcularEdad($anioAct, $anioNac));
        var_dump(indicarEdad($anioAct, $anioNac));
    ?>
</body>
</html>