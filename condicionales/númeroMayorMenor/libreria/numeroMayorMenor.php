<?php
/**
 * Función: Indicar si el número es mayo, menor o igual
 * Autor: Johan Esteban Cuellar Silva
 * Martes 07 de mayo de 2024
 */
function mmNum($pnum1, $pnum2){
    $num1 = $pnum1;
    $num2 = $pnum2;
    $imp;

    if($num1 == $num2){
        $imp = "Son iguales";
    }
    else if($num1 > $num2){
            $imp = "es mayor ".$num1." y es menor ".$num2;
        }
        else{
            $imp = "es mayor ".$num2." y es menor ".$num1;
        }
    return $imp;
}
?>