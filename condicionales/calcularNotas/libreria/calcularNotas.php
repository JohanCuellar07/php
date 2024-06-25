<?php
/**
 * Función: Calcular notas
 * Autor: Johan Esteban Cuellar Silva
 * Miercoles 08 de mayo de 2024
 */

function calcularPorcen($pnota, $pporcen){
    $nota = $pnota;
    $porcen = $pporcen;

    $resul = $nota * $porcen;

    return $resul;
}

function definirNota($psuma){
    $suma = $psuma;
    if($suma > 4.5){
        $imp = "nota superior";
    }
    else{
        if($suma <= 4.5 && $suma > 3.5) {
            $imp = "nota buena";
        }
        else{
            if($suma <= 3.5 && $suma > 3) {
                $imp = "nota media";
            }
            else{
                $imp = "nota baja";
            }
        }
    }
    return $imp;
}
?>