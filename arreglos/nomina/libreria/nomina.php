<?php
$numRegistros;

class empleado {
    public $id;
    public $nombres;
    public $apellidos;
    public $cargo;
    public $valorDia;
    public $diasTrabajados;

    function __construct($id, $nombres, $apellidos, $cargo, $valorDia, $diasTrabajados) {
        $this->id = $id;
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->cargo = $cargo;
        $this->valorDia = $valorDia;
        $this->diasTrabajados = $diasTrabajados;
    }
}

$nomina = array(
    new empleado(8572036198, 'Sofia', 'Johnson Martinez', 'Gerente', 120000, 12),
    new empleado(4321657890, 'Liam', 'Rodriguez Wilson', 'Analista', 100000, 28),
    new empleado(9078563210, 'Mia', 'Anderson Perez', 'Director', 150000, 5),
    new empleado(6543201987, 'Mason', 'Smith Nguyen', 'Supervisor', 80000, 20),
    new empleado(1234567890, 'Amelia', 'Lee Jackson', 'Coordinador', 100000, 3),
    new empleado(9876543210, 'Benjamin', 'Gonzalez White', 'Ingeniero', 150000, 17),
    new empleado(2468013579, 'Charlotte', 'Lopez Ramirez', 'Jefe', 120000, 25),
    new empleado(5802468139, 'Dylan', 'Martinez Thompson', 'Especialista', 100000, 9),
    new empleado(3698521470, 'Emma', 'Wilson Garcia', 'Consultor', 150000, 14),
    new empleado(7159364820, 'Ethan', 'Perez Hernandez', 'Jefe', 120000, 14)
);

$numRegistros = count($nomina);

for ($iterar = 0; $iterar < $numRegistros; $iterar++) {
    //var_dump($nomina);
    echo "ID: " . $nomina[$iterar]->id .
    ", Nombre: " . $nomina[$iterar]->nombres .
    ", Apellidos " . $nomina[$iterar]->apellidos .
    ", Cargo: " . $nomina[$iterar]->cargo .
    ", Valor Día: " . $nomina[$iterar]->valorDia .
    ", Dias Trabajados: " . $nomina[$iterar]->diasTrabajados .
    "<br>";
}
echo "<br>";
function salario($pdiasTrabajados, $pvalorDia){
    $diasTrabajados = $pdiasTrabajados;
    $valorDia = $pvalorDia;
    $totalSalario;

    $totalSalario = $diasTrabajados * $valorDia;

    return $totalSalario;
}

function subsidioTra($pdiasTrabajados, $pvalorDia){
    $diasTrabajados = $pdiasTrabajados;
    $valorDia = $pvalorDia;
    $salarioMin = 1300000;
    $subsidioTrans = salario($diasTrabajados, $valorDia);
    $subsidioTransporte;

    if ($subsidioTrans < 2 * $salarioMin){
        $subsidioTransporte = 120000;
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
    $valorRetencion;

    if ($valorRet > 12 * $salarioMin){
        $valorRetencion = $valorRet * 0.08;
    }
    else{
        if ($valorRet > 8 * $salarioMin){
            $valorRetencion = $valorRet * 0.04;
        }
        else{
            if ($valorRet > 6 * $salarioMin){
                $valorRetencion = $valorRet * 0.02;
            }
            else{
                $valorRetencion = 0;
            }
        }
    }

    return $valorRetencion;
}

function retencionn($pdiasTrabajados, $pvalorDia){
    $diasTrabajados = $pdiasTrabajados;
    $valorDia = $pvalorDia;
    $salarioMin = 1300000;
    $valorRet = salario($diasTrabajados, $valorDia);
    $valorRetencion;

    switch (true) {
        case ($valorRet > 12 * $salarioMin):
            $valorRetencion = $valorRet * 0.08;
            break;
        case ($valorRet > 8 * $salarioMin):
            $valorRetencion = $valorRet * 0.04;
            break;
        case ($valorRet > 6 * $salarioMin):
            $valorRetencion = $valorRet * 0.02;
            break;
        default:
            $valorRetencion = 0;
            break;
    }
    return $valorRetencion;
}


function salud($pdiasTrabajados, $pvalorDia){
    $diasTrabajados = $pdiasTrabajados;
    $valorDia = $pvalorDia;
    $pagoSalud;

    $pagoSalud = salario($diasTrabajados, $valorDia) * 0.12;

    return $pagoSalud;
}

function pension($pdiasTrabajados, $pvalorDia){
    $diasTrabajados = $pdiasTrabajados;
    $valorDia = $pvalorDia;
    $pagoPension;

    $pagoPension = salario($diasTrabajados, $valorDia) * 0.16;

    return $pagoPension;
}

function arl($pdiasTrabajados, $pvalorDia){
    $diasTrabajados = $pdiasTrabajados;
    $valorDia = $pvalorDia;
    $pagoArl;

    $pagoArl = salario($diasTrabajados, $valorDia) * 0.052;

    return $pagoArl;
}

function deducibles($pdiasTrabajados, $pvalorDia){
    $diasTrabajados = $pdiasTrabajados;
    $valorDia = $pvalorDia;
    $pagoDeducibles;
    
    $pagoDeducibles = salud($diasTrabajados, $valorDia) + pension($diasTrabajados, $valorDia) + arl($diasTrabajados, $valorDia);

    return $pagoDeducibles;
}

function pagoTotal($pdiasTrabajados, $pvalorDia){
    $diasTrabajados = $pdiasTrabajados;
    $valorDia = $pvalorDia;
    $pagoSueldo;

    $pagoSueldo = salario($diasTrabajados, $valorDia) + subsidioTra($diasTrabajados, $valorDia) - retencion($diasTrabajados, $valorDia) - deducibles($diasTrabajados, $valorDia);

    return $pagoSueldo;
}

$saludNom = 0;
$pensionNom = 0;
$arlNom = 0;
$retencionNom = 0;
$totalNom = 0;

for ($iterar = 0; $iterar < $numRegistros; $iterar++) {    

    $tabla[$iterar] = array(
        $nomina[$iterar]->id,
        $nomina[$iterar]->nombres,
        $nomina[$iterar]->cargo,
        salario($nomina[$iterar]->diasTrabajados, $nomina[$iterar]->valorDia),
        subsidioTra($nomina[$iterar]->diasTrabajados, $nomina[$iterar]->valorDia),
        salud($nomina[$iterar]->diasTrabajados, $nomina[$iterar]->valorDia),
        pension($nomina[$iterar]->diasTrabajados, $nomina[$iterar]->valorDia),
        arl($nomina[$iterar]->diasTrabajados, $nomina[$iterar]->valorDia),
        retencion($nomina[$iterar]->diasTrabajados, $nomina[$iterar]->valorDia),
        pagoTotal($nomina[$iterar]->diasTrabajados, $nomina[$iterar]->valorDia),
        );

    $saludNom = $saludNom + salud($nomina[$iterar]->diasTrabajados, $nomina[$iterar]->valorDia);
    $pensionNom = $pensionNom + pension($nomina[$iterar]->diasTrabajados, $nomina[$iterar]->valorDia);
    $arlNom = $arlNom + arl($nomina[$iterar]->diasTrabajados, $nomina[$iterar]->valorDia);
    $retencionNom = $retencionNom + retencion($nomina[$iterar]->diasTrabajados, $nomina[$iterar]->valorDia);
    $totalNom = $totalNom + pagoTotal($nomina[$iterar]->diasTrabajados, $nomina[$iterar]->valorDia);

    echo "ID: " . $nomina[$iterar]->id .
    ", Nombre: " . $nomina[$iterar]->nombres . " " . $nomina[$iterar]->apellidos .
    ", Cargo: " . $nomina[$iterar]->cargo .
    ", Salario: " . salario($nomina[$iterar]->diasTrabajados, $nomina[$iterar]->valorDia) .
    ", Subsidio de Transporte: " . subsidioTra($nomina[$iterar]->diasTrabajados, $nomina[$iterar]->valorDia) .
    ", Salud: " . salud($nomina[$iterar]->diasTrabajados, $nomina[$iterar]->valorDia) .
    ", Pensión: " . pension($nomina[$iterar]->diasTrabajados, $nomina[$iterar]->valorDia) .
    ", Arl: " . arl($nomina[$iterar]->diasTrabajados, $nomina[$iterar]->valorDia) .
    ", Retención: " . retencion($nomina[$iterar]->diasTrabajados, $nomina[$iterar]->valorDia) .
    ", Pago Total: " . pagoTotal($nomina[$iterar]->diasTrabajados, $nomina[$iterar]->valorDia) .
    "<br>";
}
//var_dump($tabla);

$totalPagos = array($saludNom, $pensionNom, $arlNom, $retencionNom, $totalNom);

echo "<br>";

echo "Salud Total: " . $totalPagos[0] .
", Pensión Total: " . $totalPagos[1] .
", Arl Total: " . $totalPagos[2] .
", Retención Total: " . $totalPagos[3] .
", Pago Total Nomina: " . $totalPagos[4] .
"<br>";

//var_dump($totalPagos);
?>