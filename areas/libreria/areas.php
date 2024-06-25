<?php
/**
 * Función: Áreas de figuras geométricas
 * Autor: Johan Esteban Cuellar Silva
 * Martes 07 de mayo de 2024
 */

function areasFiguras($pbase, $paltura){
    $base = $pbase;
    $altura = $paltura;
    $area;
    
    $area = $base * $altura;
    return $area;
}

function figuraGeo($pfigura, $pbase, $paltura){
    $figura = $pfigura;
    $base = $pbase;
    $altura = $paltura;
    $resultado;

    if ($figura == "cuadrado"){
        $resultado = areasFiguras($base, $altura);
    }
    else if ($figura == "rectangulo"){
        $resultado = areasFiguras($base, $altura);
    }
    else if ($figura == "triangulo"){
        $resultado = (areasFiguras($base, $altura))/2;
    }
    else{
        $resultado = "Error!!!";
    }
    return $resultado;
}
?>