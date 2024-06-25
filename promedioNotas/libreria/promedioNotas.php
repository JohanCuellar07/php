<?php
/**
 * Función: Promedio de notas
 * Autor: Johan Esteban Cuellar Silva
 * Martes 07 de mayo de 2024
 */
function promedio($pnota1, $pnota2, $pnota3){
    $nota1 = $pnota1;
    $nota2 = $pnota2;
    $nota3 = $pnota3;
    $promediar;

    $promediar = ($nota1 + $nota2 + $nota3) / 3;
    return $promediar;
}
?>