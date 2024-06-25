<?php
/**
 * Función: Calcular la tabla del 9 e identificar si
 * el resultado es par o impar
 * Autor: Johan Esteban Cuellar Silva
 * Viernes 11 de mayo de 2024
 */
function calcularTablas($pnumHasTab, $pnumHas){
    $resul;
    $cont = 0;
    $contPar = 0;
    $contImpar = 0;
    $numTab = 0;
    $numHasTab = $pnumHasTab;
    $numHas = $pnumHas;
    
    while($numTab < $numHasTab){
        $numTab = $numTab + 1;
        while($cont < $numHas){
            $cont = $cont + 1;
            $resul = $numTab * $cont;
            var_dump($numTab."X".$cont."=".$resul);
            if($resul%2 == 0){
                $contPar = $contPar + 1;
                var_dump("buzz");
            }
            else{
                $contImpar = $contImpar + 1;
                var_dump("bass");
            }
        }
        $cont = 0;
    }
    var_dump("resultado pares: ".$contPar);
    var_dump("resultado impares: ".$contImpar);
    return "";
}
?>