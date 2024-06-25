<?php
/**
 * Función: Calcular la tabla del 9 e identificar si
 * el resultado es par o impar
 * Autor: Johan Esteban Cuellar Silva
 * Viernes 11 de mayo de 2024
 */
function calcularTabla($pnumTab, $pnumHas){
    $resul;
    $cont = 0;
    $numTab = $pnumTab;
    $numHas = $pnumHas;
    
    while($cont < $numHas){
        $cont = $cont + 1;
        $resul = $numTab * $cont;
        var_dump($numTab."X".$cont."=".$resul);
        if($resul%2 == 0){
            var_dump("resultado par");
        }
        else{
            var_dump("resultado impar");
        }
    }
    return "";
}
?>