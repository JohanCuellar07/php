<?php
/**
 * Función: Calcular la tabla del 5
 * Autor: Johan Esteban Cuellar Silva
 * Viernes 11 de mayo de 2024
 */
function calcularTabla($pnum){
    $resul;
    $cont;
    $num = $pnum;
    for($cont = 1; $cont <= $num; $cont++){
        $resul = $num * $cont;
        var_dump($num."X".$cont."=".$resul);
    }
    return "";
}
?>