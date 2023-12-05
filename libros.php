<?php
class Libro
{
    private $titulo;
    private $edicion;
    private $editorial;
    private $autor = array();

    public function __construct($titulo, $edicion, $editorial)
    {
        $this->titulo = $titulo;
        $this->edicion = $edicion;
        $this->editorial = $editorial;
    }

    //setters
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }
    public function setEdicion($edicion)
    {
        $this->edicion = $edicion;
    }
    public function setEditorial($editorial)
    {
        $this->editorial = $editorial;
    }

    //getters
    public function getTitulo()
    {
        return $this->titulo;
    }
    public function getEdicion()
    {
        return $this->edicion;
    }
    public function getEditorial()
    {
        return $this->editorial;
    }
    public function getAutor()
    {
        return $this->autor;
    }
    //methods
    public function agregarAutor($x){
        array_push($this->autor, ["nombre" => $x->getName(), "apellido" => $x->getApellido(), "alias" => $x->getAlias()]);
    }
}

class Autor
{
    private $nombre;
    private $apellido;
    private $alias;

    public function __construct($nombre, $apellido, $alias)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->alias = $alias;
    }

    //setters
    public function setName($nombre)
    {
        $this->nombre = $nombre;
    }
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }
    public function setAlias($alias)
    {
        $this->alias = $alias;
    }

    //getters
    public function getName()
    {
        return $this->nombre;
    }
    public function getApellido()
    {
        return $this->apellido;
    }
    public function getAlias()
    {
        return $this->alias;
    }
}

//creando objetos

$autorA = new Autor("Adolf", "Hitler", "Fuhrer");
$autorB = new Autor("Victor", "Castellar", "BigThor");
$autorC = new Autor("Fidias", "Arias", "El Profesor");
$nuevoLibro = new Libro(
    "Mi Lucha",
    "1925",
    "Secker and Warburg"
);
$nuevoLibro->agregarAutor($autorA);


//var_dump($nuevoLibro);

print_r($nuevoLibro);