<?php
/**
 * Función: Calcular la edad de una persona
 * Autor: Johan Esteban Cuellar Silva
 * Martes 07 de mayo de 2024
 */

function calcularEdad($panioAct, $panioNac){
    $anioAct = $panioAct;
    $anioNac = $panioNac;
    $edad;

    $edad = $anioAct - $anioNac;

    return $edad;
}

function indicarEdad($panioAct, $panioNac){
    $anioAct = $panioAct;
    $anioNac = $panioNac;
    $edad = calcularEdad($anioAct, $anioNac);
    $imp;

    if($edad>17){
        $imp = "mayor de edad";
    }
    else{
        $imp = "menor de edad";
    }
    return $imp;
}
?>