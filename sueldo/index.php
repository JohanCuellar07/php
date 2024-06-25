<?php
include('libreria/sueldo.php');
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
        $valorDia = 200000;
        $diasTrabajados = 22;

        var_dump("Sueldo: ".sueldo($diasTrabajados, $valorDia));
        var_dump("Salud: ".salud($diasTrabajados, $valorDia));
        var_dump("Pension: ".pension($diasTrabajados, $valorDia));
        var_dump("Arl: ".arl($diasTrabajados, $valorDia));
        var_dump("Descuento: ".descuento($diasTrabajados, $valorDia));
        var_dump("Pago Total: ".pagoTotal($diasTrabajados, $valorDia));
    ?>
</body>
</html>