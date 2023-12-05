<?php
require_once 'Pacientes/clase-paciente.php';
class pacienteInfante extends Paciente{
    private $peso;
    private $talla;

    public function __construct($nombre, $apellidos, $edad, $sexo, $direccion, $sintomas, $peso, $talla){
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
        $this->sexo = $sexo;
        $this->direccion = $direccion;
        $this->sintomas = $sintomas;
        $this->peso = $peso;
        $this->talla = $talla;
    }

    public function getPeso(){
        return $this->peso;
    }
    public function getTalla(){
        return $this->talla;
    }

    public function setPeso($peso){
        $this->peso = $peso;
    }
    public function setTalla($talla){
        $this->talla = $talla;
    }
}