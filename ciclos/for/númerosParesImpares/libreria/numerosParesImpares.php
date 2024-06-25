<?php
/**
 * Función: Contar números e indicar si son pares o impares
 * Autor: Johan Esteban Cuellar Silva
 * Viernes 11 de mayo de 2024
 */
function contarNum($pnum){
    $num = $pnum;
    for($contar = 1; $contar <= $num; $contar++){
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