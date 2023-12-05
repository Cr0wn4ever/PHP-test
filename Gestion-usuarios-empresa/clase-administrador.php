<?php
require_once 'Gestion-usuarios-empresa/clase-usuario.php';
class Admin extends Usuario{
    protected $rol = "admin";

    public function sayHi(){
        echo "<br><br><b>Hi, i'm an admin</b>";
    }

}