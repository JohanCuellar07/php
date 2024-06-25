<?php
/**
 * Función: Calcular la tabla del 5
 * Autor: Johan Esteban Cuellar Silva
 * Viernes 11 de mayo de 2024
 */
function calcularTabla($pnum){
    $resul;
    $cont = 0;
    $num = $pnum;
    while($cont < $num){
        $cont = $cont + 1;
        $resul = $num * $cont;
        var_dump($num."X".$cont."= ".$resul);
    }
    return "";
}
?>