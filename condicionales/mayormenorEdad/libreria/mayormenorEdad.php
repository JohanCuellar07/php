<?php
/**
 * Función: Indicar si es menor o mayor de edad
 * Autor: Johan Esteban Cuellar Silva
 * Martes 07 de mayo de 2024
 */
function mmEdad($pedad){
    $edad = $pedad;
    $imp;

    if($edad >= 18){
        $imp = "mayor de edad";
    }
    else{
        $imp = "menor de edad";
    }
    return $imp;
}
?>