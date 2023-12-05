<?php

//Primera clase (la clase blog)
class blog {
    private $titulo;
    private $contenido;
    private $autor;

    public function __construct($titulo, $contenido, $autor) {
        $this->titulo = $titulo;
        $this->contenido = $contenido;
        $this->autor = $autor;
    }

    //getters
    public function getTitulo() {
        return $this->titulo;
    }
    public function getContenido(){
        return $this->contenido;
    }
    public function getAutor(){
        return $this->autor;
    }
    
    //setters
    public function setAutor($autor){
        $this->autor = $autor;
    }
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }
    public function setContenido($contenido){
        $this->contenido = $contenido;
    }

    //methods
    public function mostrarData(){
        echo "Titulo: {$this->titulo}<br>Contenido: {$this->contenido}<br>Autor: {$this->autor}<hr>";
    }
}

//Segunda clase (la clase autor)

class Autor {
    private $nombre;
    private $apellido;
    private $alias;

    public function __construct($nombre, $apellido, $alias){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->alias = $alias;
    }

    //getters
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getAlias(){
        return $this->alias;
    }

    //setters
    public function setNombre(){
        return $this->nombre;
    }
    public function setApellido(){
        return $this->apellido;
    }
    public function setAlias(){
        return $this->alias;
    }
}

$autor = new Autor("Charles", "Chaplin", "Charlie");
$blog = new blog("El Gran Dictador",
"El Gran Dictador es una pelicula del ano 1948 dirigida y protagonizada por Charles Chaplin;
en la que el britanico interpreta a uno de los personajes mas infames de la historia, Adolf Hitler",
$autor->getAlias()
);

$blog->mostrarData();

