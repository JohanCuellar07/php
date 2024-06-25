<?php
include('libreria/salario.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago Total de un persona</title>
</head>
<body>
    <?php
        $valorDia = 150000;
        $diasTrabajados = 26;

        var_dump("Salario: ".salario($diasTrabajados, $valorDia));
        var_dump("Subsidio de Transporte: ".subsidioTra($diasTrabajados, $valorDia));
        var_dump("Salud: ".salud($diasTrabajados, $valorDia));
        var_dump("Pensión: ".pension($diasTrabajados, $valorDia));
        var_dump("Arl: ".arl($diasTrabajados, $valorDia));
        var_dump("Retención: ".retencion($diasTrabajados, $valorDia));
        var_dump("Deducibles: ".deducibles($diasTrabajados, $valorDia));
        var_dump("Pago Total: ".pagoTotal($diasTrabajados, $valorDia));
    ?>
</body>
</html>