<?php
require_once 'Trabajadores/clase-trabajador.php';

//creando instancias

//bloque 0
$empleadoA = new Trabajador("28499788", "victor", "patino castellar", "victorhotsexy@extrahotmail.com");
$empleadoA->setSalarioFijo(150); $empleadoA->setTiempoServicio(5); $empleadoA->calcPrimaAntiguedad();

print_r($empleadoA);
echo "<br>Sueldo fijo: $ {$empleadoA->calcSueldoFijo()} / Prima por antiguedad: {$empleadoA->getPrimaAntiguedad()} $";
echo "<hr>";

//bloque 1
$empleadoB = new Trabajador("30018020", "jonas", "park mundarain", "casanayerodecora777@yahoo.com");

print_r($empleadoB);
$empleadoB->calcSueldoHora(6,5);
echo "<hr>";