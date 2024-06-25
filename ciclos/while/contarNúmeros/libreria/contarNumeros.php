<?php
/**
 * Función: Contar números
 * Autor: Johan Esteban Cuellar Silva
 * Viernes 11 de mayo de 2024
 */
function contarNum($pnum){
    $contar = 0;
    $num = $pnum;
    while($contar < $num){
        $contar = $contar + 1;
        var_dump($contar);
    }
    return "";
}
?>