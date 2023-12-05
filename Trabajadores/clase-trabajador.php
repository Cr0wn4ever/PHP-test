<?php
class Trabajador{
    private $id;
    private $nombre;
    private $apellidos;
    private $email;
    private $salarioFijo = 0;
    private $primaAntiguedad = 0;
    private $tiempoServicio = 0;

    public function __construct($id, $nombre, $apellidos, $email){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
    }

    public function getId(){
        return $this->id;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellidos(){
        return $this->apellidos;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getSalarioFijo(){
        return $this->salarioFijo;
    }
    public function getTiempoServicio(){
        return $this->tiempoServicio;
    }
    public function getPrimaAntiguedad(){
        return $this->primaAntiguedad;
    }

    public function setId($id){
        $this->id = $id;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function setApellidos($apellidos){
        $this->apellidos = $apellidos;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setSalarioFijo($salarioFijo){
        $this->salarioFijo = $salarioFijo;
    }
    public function setTiempoServicio($tiempoServicio){
        $this->tiempoServicio = $tiempoServicio;
    }
    public function calcPrimaAntiguedad(){
        $this->primaAntiguedad = $this->salarioFijo * $this->tiempoServicio * 0.2;

    }

    //methods
    public function calcSueldoHora($horas, $tarifa){
        $pago = $horas * $tarifa;
        echo "<br>Horas de trabajo: {$horas} H / Tarifa: $ {$tarifa} / Pago: $ {$pago}";
    }
    public function calcSueldoFijo(){
        return $this->salarioFijo + $this->primaAntiguedad;
    }
}