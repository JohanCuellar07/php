<?php
include('libreria/promedioEdades.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular edades y promedio</title>
</head>
<body>
    <?php
        $anioAct = 2024;

        $edad1 = calcularEdad($anioAct, 1976);
        $edad2 = calcularEdad($anioAct, 2001);
        $edad3 = calcularEdad($anioAct, 2011);

        $promedio = ($edad1 + $edad2 + $edad3) / 3;

        var_dump($edad1." ".definirEdad($edad1));
        var_dump($edad2." ".definirEdad($edad2));
        var_dump($edad3." ".definirEdad($edad3));
        var_dump("promedio(".$promedio."): ".definirEdad($promedio));
    ?>
</body>
</html>