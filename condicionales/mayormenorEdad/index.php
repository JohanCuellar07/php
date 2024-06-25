<?php
include('libreria/mayormenorEdad.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mayor o Menor de edad</title>
</head>
<body>
    <?php
        $edad = 37;

        var_dump(mmEdad($edad));
    ?>
</body>
</html>