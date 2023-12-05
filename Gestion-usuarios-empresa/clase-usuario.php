<?php
class Usuario{
    protected $username;
    protected $password;
    protected $creacion = array();
    protected $expiracion = array();
    protected $rol = "usuario";

    public function __construct($username, $password, $creacion, $expiracion){
        $this->username = $username;
        $this->password = $password;
        $this->creacion = $creacion;
        $this->expiracion = $expiracion;
    }

    public function getUsername(){
        return $this->username;
    }
    public function getCreacion(){
        return $this->creacion;
    }
    public function getExpiracion($expiracion){
        return $expiracion;
    }
    public function getRol(){
        return $this->rol;
    }

    public function setUsername($username){
        $this->username = $username;
    }
    public function setPassword($password){
        $this->password = $password;
    }
    public function sayHi(){
        echo "<br><br><b>Hi, i'm a regular user</b>";
    }

}