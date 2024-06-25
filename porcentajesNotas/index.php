<?php
include('libreria/porcentajesNotas.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porcentajes de notas</title>
</head>
<body>
    <?php
        $nota1 = porce(1.5, 0.3);
        $nota2 = porce(3.1, 0.3);
        $nota3 = porce(4.7, 0.4);
        $suma;

        $suma = $nota1 + $nota2 + $nota3;

        var_dump("porcentaje nota 1: ".$nota1);
        var_dump("porcentaje nota 2: ".$nota2);
        var_dump("porcentaje nota 3: ".$nota3);

        var_dump("suma de porcentajes: ".$suma);
    ?>
</body>
</html>