<?php
require_once 'Gestion-usuarios-empresa/clase-usuario.php';
class Supervisor extends Usuario{
    protected $rol = "supervisor";

    public function sayHi(){
        echo "<br><br><b>I'm the boss here, and you're fired!</b>";
    }
}