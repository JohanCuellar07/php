<?php
/**
 * Función: Porcentajes de notas
 * Autor: Johan Esteban Cuellar Silva
 * Martes 07 de mayo de 2024
 */
function porce($pnota, $pnumPor){
    $nota = $pnota;
    $numPor = $pnumPor;
    $porcen;

    $porcen = $nota * $numPor;
    return $porcen;
}
?>