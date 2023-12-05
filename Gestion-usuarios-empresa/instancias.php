<?php
require_once 'Gestion-usuarios-empresa/clase-empleado.php';
require_once 'Gestion-usuarios-empresa/clase-usuario.php';
require_once 'Gestion-usuarios-empresa/clase-administrador.php';
require_once 'Gestion-usuarios-empresa/clase-supervisor.php';

//primer bloque de prueba

//generando empleado
$empleadoA = new Empleado("sebastian", "zapatero", "urb.Las Virgenes", "5");
//creamos el usuario para el trabajador
$nuevoUsuario = new Usuario("sebas", "123456", array("dia" => date('d'), "mes" => date('m'), "year" => date('Y')), array("dia" => date('d'), "mes" => date('m'), "year" => date('Y', strtotime('+1 year'))));
//seteamos el username para el trabajador
$empleadoA->setUsername($nuevoUsuario->getUsername());

print_r($empleadoA);
echo "<hr>";
print_r($nuevoUsuario);

$nuevoUsuario->sayHi();

echo "<hr>";

//segundo bloque de prueba

$empleadoB = new Empleado("luis", "Pena", "Urb.Campeche", "2");
$nuevoAdmin = new Admin("xXJefreeXx", "soysimp123", array("dia" => date('25'), "mes" => date('5'), "year" => date('Y')), array("dia" => date('25'), "mes" => date('5'), "year" => date('Y', strtotime('+1 year'))));
$empleadoB->setUsername($nuevoAdmin->getUserName());

print_r($empleadoB);
echo "<hr>";
print_r($nuevoAdmin);

$nuevoAdmin->sayHi();

echo "<hr>";

//tercer bloque de prueba

$empleadoC = new Empleado("victor", "castellar", "urb.Villa Cristobal Colon", "10");
$supervisor = new Supervisor("TheBoss", "antihacking123", array("dia" => date('13'), "mes" => date('6'), "year" => date('Y')), array("dia" => date('d'), "mes" => date('m'), "year" => date('Y', strtotime('+5 year'))));

print_r($empleadoC);
echo "<hr>";
print_r($supervisor);

$supervisor->sayHi();