<?php
require_once 'Pacientes/clase-paciente.php';

class pacienteAdulto extends Paciente{
    private $estadoCivil;
    private $profesion;

    public function __construct($nombre, $apellidos, $edad, $sexo, $direccion, $sintomas, $estadoCivil, $profesion){
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
        $this->sexo = $sexo;
        $this->direccion = $direccion;
        $this->sintomas = $sintomas;
        $this->estadoCivil = $estadoCivil;
        $this->profesion = $profesion;
    }

    public function getEstadoCivil(){
        return $this->estadoCivil;
    }
    public function getProfesion(){
        return $this->profesion;
    }
    public function setEstadoCivil($estadoCivil){
        $this->estadoCivil = $estadoCivil;
    }

    public function setProfesion($profesion){
        $this->profesion = $profesion;
    }
}