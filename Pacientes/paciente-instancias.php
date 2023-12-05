<?php
require_once 'Pacientes/clase-paciente-adulto.php';
require_once 'Pacientes/clase-paciente-infante.php';

//creando instancias

$pacienteA = new pacienteAdulto("Victor", "Patino Castellar", "22", "masculino", "Villa Cristobal Colon", "mareo, dolor de cabeza, picazon", "soltero", "estudiante");

$pacienteB = new pacienteInfante("Fernando", "De La Rosa Fuentes", "17", "masculino", "Boca de lobo", "disfuncion, dolor en el pecho, pies frios", "52", "39");

print_r($pacienteA);
echo '<hr>';
print_r($pacienteB);