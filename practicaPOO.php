<?php

//clase triangulo

class triangulo {
    private $altura;
    private $base;

    public function __construct($altura, $base) {
        $this->altura = $altura;
        $this->base = $base;
    }

    //getters
    public function getAltura() {
        return $this->altura;
    }
    public function getBase() {
        return $this->base;
    }

    //setters
    public function setAltura($altura){
        $this->altura = $altura;
    }
    public function setBase($base){
        $this->base = $base;
    }

    public function calcularArea(){
        $area = $this->altura * $this->base / 2;
        return $area;
    }
}

//clase circulo

class circulo{
    private $centro;
    protected $radio;

    public function __construct($centro, $radio){
        $this->centro = $centro;
        $this->radio = $radio;
    }

    public function getRadio(){
        return $this->radio;
    }

    public function imprimirDatos(){
        echo "'esto se hizo con una funcion'<br>Centro: {$this->centro} / Radio: {$this->radio}<br>";
    }
    public function calcularArea(){
        $area = 3.1416 * $this->radio * $this->radio;
        return $area;
    }
    public function calcularCircunferencia(){
        $circunferencia = 2 * 3.1416 * $this->radio;
        return $circunferencia;
    }
}

//creando instancias

$triangulo = new triangulo(20, 5);

$circulo = new circulo(0, 13);

    //probando el triangulo

    echo "Probando el triangulo<hr>Altura = {$triangulo->getAltura()}<br>Base = {$triangulo->getBase()}<br>Area = {$triangulo->calcularArea()}";

    //probando el circulo

    echo "Probando el circulo<hr>";
    $circulo->imprimirDatos();
    echo "Calculo del area tomando en cuenta el radio<br>Radio = {$circulo->getRadio()}<br>Area = {$circulo->calcularArea()}<br>";
    echo "Calculo de la circunferencia tomando en cuenta el radio<br>radio = {$circulo->getRadio()}<br>Circunferencia = {$circulo->calcularCircunferencia()}";
