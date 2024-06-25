<?php
/**
 * Función: Calcular la tabla del 9 e identificar si
 * el resultado es par o impar
 * Autor: Johan Esteban Cuellar Silva
 * Viernes 11 de mayo de 2024
 */
function calcularTablas($pnumHasTab, $pnumHas){
    $resul;
    $cont;
    $contPar = 0;
    $contImpar = 0;
    $numTab = 0;
    $numHasTab = $pnumHasTab;
    $numHas = $pnumHas;
    
    for($numTab = 1; $numTab <= $numHasTab; $numTab++){
        for($cont = 1; $cont <= $numHas; $cont++){
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