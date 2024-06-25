<?php
include('libreria/promedioNotas.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promedio de notas</title>
</head>
<body>
    <?php
        $nota1 = 2.3;
        $nota2 = 4.2;
        $nota3 = 5;
        
        var_dump(promedio($nota1, $nota2, $nota3));
    ?>
</body>
</html>