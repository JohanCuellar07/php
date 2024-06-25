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

function definirEdad($pedad){
    $edad = $pedad;
    $promedio = $pedad;
    $impEdad;

    if($edad > 17 || $promedio > 17){
        $impEdad = "mayor de edad";
    }
    else{
        $impEdad = "menor de edad";
    }
    return $impEdad;
}
?>