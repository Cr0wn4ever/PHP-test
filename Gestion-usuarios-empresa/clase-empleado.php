<?php
class Empleado{
    private $nombre;
    private $apellido;
    private $direccion;
    private $tiempoServicio;
    private $username = "unsigned";

    public function __construct($nombre, $apellido, $direccion, $tiempoServicio){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->direccion = $direccion;
        $this->tiempoServicio = $tiempoServicio;
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    public function getTiempoServicio(){
        return $this->tiempoServicio;
    }
    public function getUsername(){
        return $this->username;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    
    public function setApellido($apellido){
        $this->apellido = $apellido;
    }
    public function setDireccion($direccion){
        $this->direccion = $direccion;
    }
    public function setTiempoServicio($tiempoServicio){
        $this->tiempoServicio = $tiempoServicio;
    }
    public function setUsername($username){
        $this->username = $username;
    }
}