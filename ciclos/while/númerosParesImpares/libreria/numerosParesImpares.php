<?php
/**
 * Función: Contar números e indicar si son pares o impares
 * Autor: Johan Esteban Cuellar Silva
 * Viernes 11 de mayo de 2024
 */
function contarNum($pnum){
    $contar = 0;
    $num = $pnum;
    while($contar < $num){
        $contar = $contar + 1;
        if($contar%2 == 0){
            var_dump($contar." es par");
        }
        else{
            var_dump($contar." es impar");
        }
    }
    return "";
}
?>