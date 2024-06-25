<?php
include('libreria/numeroMayorMenor.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números mayor, menor o igual</title>
</head>
<body>
    <?php
        $num1 = 245;
        $num2 = 783;

        var_dump(mmNum($num1, $num2));
    ?>
</body>
</html>