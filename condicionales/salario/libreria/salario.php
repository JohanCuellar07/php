<?php
/**
 * Función: Pago Total de una persona
 * Autor: Johan Esteban Cuellar Silva
 * Miercoles 08 de mayo de 2024
 */

function salario($pdiasTrabajados, $pvalorDia){
    $diasTrabajados = $pdiasTrabajados;
    $valorDia = $pvalorDia;

    $totalSalario = $diasTrabajados * $valorDia;

    return $totalSalario;
}

function salud($pdiasTrabajados, $pvalorDia){
    $diasTrabajados = $pdiasTrabajados;
    $valorDia = $pvalorDia;

    $pagoSalud = salario($diasTrabajados, $valorDia) * 0.12;

    return $pagoSalud;
}

function pension($pdiasTrabajados, $pvalorDia){
    $diasTrabajados = $pdiasTrabajados;
    $valorDia = $pvalorDia;

    $pagoPension = salario($diasTrabajados, $valorDia) * 0.16;

    return $pagoPension;
}

function arl($pdiasTrabajados, $pvalorDia){
    $diasTrabajados = $pdiasTrabajados;
    $valorDia = $pvalorDia;

    $pagoArl = salario($diasTrabajados, $valorDia) * 0.052;

    return $pagoArl;
}

function deducibles($pdiasTrabajados, $pvalorDia){
    $diasTrabajados = $pdiasTrabajados;
    $valorDia = $pvalorDia;
    
    $pagoDeducibles = salud($diasTrabajados, $valorDia) + pension($diasTrabajados, $valorDia) + arl($diasTrabajados, $valorDia);

    return $pagoDeducibles;
}

function subsidioTra($pdiasTrabajados, $pvalorDia){
    $diasTrabajados = $pdiasTrabajados;
    $valorDia = $pvalorDia;
    $salarioMin = 1300000;
    $subsidioTrans = salario($diasTrabajados, $valorDia);

    if ($subsidioTrans <= 2 * $salarioMin){
        $subsidioTransporte = 162000;
    }
    else{
        $subsidioTransporte = 0;
    }

    return $subsidioTransporte;
}

function retencion($pdiasTrabajados, $pvalorDia){
    $diasTrabajados = $pdiasTrabajados;
    $valorDia = $pvalorDia;
    $salarioMin = 1300000;
    $valorRet = salario($diasTrabajados, $valorDia);

    if ($valorRet <= 4 * $salarioMin){
        $valorRetencion = $valorRet * 0.04;
    }
    else{
        $valorRetencion = 0;
    }

    return $valorRetencion;
}

function pagoTotal($pdiasTrabajados, $pvalorDia){
    $diasTrabajados = $pdiasTrabajados;
    $valorDia = $pvalorDia;

    $pagoSueldo = salario($diasTrabajados, $valorDia) + subsidioTra($diasTrabajados, $valorDia) - retencion($diasTrabajados, $valorDia) - deducibles($diasTrabajados, $valorDia);

    return $pagoSueldo;
}
?>