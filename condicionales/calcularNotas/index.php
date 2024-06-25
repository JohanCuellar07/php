<?php
include('libreria/calcularNotas.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Notas</title>
</head>
<body>
    <?php
        $porcen1 = calcularPorcen(2.5, 0.2);
        $porcen2 = calcularPorcen(4.1, 0.35);
        $porcen3 = calcularPorcen(5, 0.45);

        $suma = $porcen1 + $porcen2 + $porcen3;

        var_dump("nota 1: ".$porcen1);
        var_dump("nota 2: ".$porcen2);
        var_dump("nota 3: ".$porcen3);
        var_dump("suma: ".$suma);
        var_dump(definirNota($suma));
    ?>
</body>
</html>