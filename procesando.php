
<?php

$nombre = $_POST['nombre'];
$salario = $_POST['sueldo'];
$seguro = $_POST['seguro'];
$mnombre = strtoupper($nombre);
$porcentaje = $seguro;
$seguro = $salario * ($seguro/100);
$renta = $salario*0.1;
$descuento = $renta + $seguro;
$salariofinal = $salario - $descuento;

if ($salariofinal < 500){
    $salariofinal = $salariofinal + 100;
    $bono = 'Si';
}else{
    $bono = 'No';
}

echo "Empleado: $mnombre\n Salario: $salariofinal\n Descuento por seguro: $porcentaje %\n Bono: $bono";

?>