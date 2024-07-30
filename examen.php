<?php
function calcularSueldo($horas, $tarifa) {
    $totalHoras = 0;

    foreach ($horas as $dia => $horas) {
        $totalHoras += $horas;
    }

    $sueldoTotal = $totalHoras * $tarifa;
    return $sueldoTotal;
}

$tarifa = 10;

$horas = [
    "lunes" => 7,
    "martes" => 7,
    "miércoles" => 8,
    "jueves" => 8,
    "viernes" => 7
];
echo "<pre>";
print_r($horas);
echo "</pre>";
$sueldo = calcularSueldo($horas, $tarifa);
echo "El sueldo total: $" . $sueldo;
?>
