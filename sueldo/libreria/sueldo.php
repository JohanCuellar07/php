<?php
/**
 * Función: Pago Total de una persona
 * Autor: Johan Esteban Cuellar Silva
 * Martes 07 de mayo de 2024
 */

function sueldo($pdiasTrabajados, $pvalorDia){
    $diasTrabajados = $pdiasTrabajados;
    $valorDia = $pvalorDia;
    $totalSueldo;

    $totalSueldo = $diasTrabajados * $valorDia;

    return $totalSueldo;
}

function salud($pdiasTrabajados, $pvalorDia){
    $diasTrabajados = $pdiasTrabajados;
    $valorDia = $pvalorDia;
    $pagoSalud;

    $pagoSalud = sueldo($diasTrabajados, $valorDia) * 0.12;

    return $pagoSalud;
}

function pension($pdiasTrabajados, $pvalorDia){
    $diasTrabajados = $pdiasTrabajados;
    $valorDia = $pvalorDia;
    $pagoPension;

    $pagoPension = sueldo($diasTrabajados, $valorDia) * 0.16;

    return $pagoPension;
}

function arl($pdiasTrabajados, $pvalorDia){
    $diasTrabajados = $pdiasTrabajados;
    $valorDia = $pvalorDia;
    $pagoArl;

    $pagoArl = sueldo($diasTrabajados, $valorDia) * 0.052;

    return $pagoArl;
}

function descuento($pdiasTrabajados, $pvalorDia){
    $diasTrabajados = $pdiasTrabajados;
    $valorDia = $pvalorDia;
    $valorDescuento;
    
    $valorDescuento= salud($diasTrabajados, $valorDia) + pension($diasTrabajados, $valorDia) + arl($diasTrabajados, $valorDia);

    return $valorDescuento;
}

function pagoTotal($pdiasTrabajados, $pvalorDia){
    $diasTrabajados = $pdiasTrabajados;
    $valorDia = $pvalorDia;
    $pagoSueldo;

    $pagoSueldo = sueldo($diasTrabajados, $valorDia) - descuento($diasTrabajados, $valorDia);

    return $pagoSueldo;
}
?>