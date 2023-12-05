<?php
class Paciente{
    protected $nombre;
    protected $apellidos;
    protected $edad;
    protected $sexo;
    protected $direccion;
    protected $sintomas;

    public function __construct($nombre, $apellidos, $edad, $sexo, $direccion, $sintomas){
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
        $this->sexo = $sexo;
        $this->direccion = $direccion;
        $this->sintomas = $sintomas;
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function getApellidos(){
        return $this->apellidos;
    }
    public function getEdad(){
        return $this->edad;
    }
    public function getSexo(){
        return $this->sexo;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    public function getSintomas(){
        return $this->sintomas;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function setApellidos($apellidos){
        $this->apellidos = $apellidos;
    }
    public function setEdad($edad){
        $this->edad = $edad;
    }
    public function setSexo($sexo){
        $this->sexo = $sexo;
    }
    public function setDireccion($direccion){
        $this->direccion = $direccion;
    }
    public function setSintomas($sintomas){
        $this->sintomas = $sintomas;
    }
}