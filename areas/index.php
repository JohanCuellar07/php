<?php
include('libreria/areas.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Áreas de figuras geométricas</title>
</head>
<body>
    <?php
        var_dump("área cuadrado: ".figuraGeo("cuadrado", 5, 5));
        var_dump("área rectangulo: ".figuraGeo("rectangulo", 6, 4));
        var_dump("área triangulo: ".figuraGeo("triangulo", 8, 5));
    ?>
</body>
</html>